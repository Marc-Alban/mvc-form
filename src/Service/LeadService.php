<?php
declare(strict_types=1);

namespace App\Service;

use App\Entity\Lead;
use App\Repository\LeadRepository;
use SoapClient;

class LeadService
{
    private $_leadRepository;

    public function __construct(LeadRepository $leadRepository)
    {
        $this->_leadRepository = $leadRepository;
    }

    public function processLeadData(array $data): string
    {
        // Convertir les données en XML
        $xmlString = $this->array_to_xml($data);

        // Envoyer les données à l'API
        return $this->sendApi($xmlString);
    }

    function array_to_xml($datas)
    {
        $data = [
            "Origine" => $_SESSION['website'],
            "CodeOrigine" => $_SESSION['website'],
            "Adresse_Ip" => $_SESSION['Adresse_Ip'],
            "DateProprietaire" => $datas['yearStatut'],
            "TypeForm" => "Formulaire conso sur le site conso.finapole.fr",
            "Provenance" => "Site web",
            "TypeProjet" => "CREDIT CONSO",
            "NatureProjet" => $datas["project"],
            "Assurance" => $datas["assurance"],
            "Csp" => $datas['professionalType'],
            "CspCo" => $datas['professionalTypeCo'],
            "Civilite" => $datas['civilityGender'],
            "Nom" => $datas['civilityLastname'],
            "Prenom" => $datas['civilityFirstname'],
            "DateNaissance" => $datas['civilityDayBirthDay'] . '/' . $datas['civilityMonthBirthDay'] . '/' . $datas['civilityYearBirthDay'],
            "LieuNaissance" => $datas['civilityCity'],
            "CodePostal" => $datas['zipCode'],
            "Ville" => $datas['city'],
            "Adresse1" => $datas['address'],
            "Telephone" => $datas['phone1'],
            "Portable" => $datas['phone2'],
            "Email" => $datas['email'],
            "CiviliteCo" => $datas['civilityGenderCo'],
            "NomCo" => $datas['civilityLastnameCo'],
            "PrenomCo" => $datas['civilityFirstnameCo'],
            "DateNaissanceCo" =>  $datas['civilityDayBirthDayCo'] . '/' . $datas['civilityMonthBirthDayCo'] . '/' . $datas['civilityYearBirthDayCo'],
            "LieuNaissanceCo" => $datas['civilityCityCo'],
            "DateSituationFamiliale" =>  $datas['daySituation'] . '/' . $datas['monthSituation'] . '/' . $datas['yearSituation'],
            "SituationFamiliale" => $datas['maritalStatus'],
            "NbEnfant" =>  $datas['enfant'],
            "Profession" => $datas['profession'],
            "TypeContrat" => $datas['professionalContractType'],
            "ProfessionCo" => $datas['professionCo'],
            "TypeContratCo" => $datas['professionalContractTypeCo'],
            "DebutActivite" => $datas['daySecteur'] . '/' . $datas['monthSecteur'] . '/' . $datas['yearSecteur'],
            "DebutActiviteCo" => $datas['daySecteurCo'] . '/' . $datas['monthSecteurCo'] . '/' . $datas['yearSecteurCo'],
            "Nationalite" => $datas['civilityNationality'],
            "NationaliteCo" => $datas['civilityNationalityCo'],
            "Revenus" =>  $datas['incomeBeforeTax'],
            "RevenusCo" =>  $datas['incomeBeforeTaxCo'],
            "Loyer" =>  $datas["rent"],
            "LoyerCharges" =>  $datas['rent'],
            "MontantProjet" =>  $datas['amount'],
            "DureeRemboursementSouhaitee" =>  $datas['duration'],
            "DateObtentionFonds" =>  $datas['fundsDelay'],
            "NiveauConnaissanceCredit" => $datas['level'],
            "NomBanque" => $datas['bankType'],
            "CBBanque" => $datas['bankCardType'],
            "AnneeBanque" =>  $datas['yearBank'],
            "TypeVehicule" => $datas['carType'],
            "EtatVehicule" => $datas['carState'],
            "ModeleVehicule" => $datas['carBrand'],
            "MensualiteImmo" =>  $datas['totalImmoCreditConso'],
            "MensualiteConso" =>  $datas['totalMensualitesCreditConso'],
            "AutresRevenus" =>  $datas["otherHouseholdIncome"],
            "AllocationsFamiliales" =>  $datas['benefitAmount'],
            "AllocationsLogement" =>  $datas['rentalIncome'],
        ];
    
        if ($datas["maritalStatus"] === 'maried' || $datas["maritalStatus"] === 'civilPartnership' || $datas['maritalStatus'] === 'unmarried') {
            $data['coEmprunteur'] = 'oui';
            $data['foyer'] = '2';
        } else {
            $data['coEmprunteur'] = 'non';
            $data['foyer'] = '1';
        }
    
        $data["NbImmo"] = ($datas['totalImmoCreditConso'] > 0) ? 1 : 0;
        $data["NbConso"] = ($datas['totalMensualitesCreditConso'] > 0) ? 1 : 0;
    
        $lead = new LeadRepository();
        $id = $lead->getLastId();
        $IdContactClient = $id['0'] + 17000000;
        $data["IdContactClient"] =  $IdContactClient;
        $data["DateContact"] = date("d/m/Y H:i");
    
        $xml = "<Lead>";
    
        foreach ($data as $nom => $valeur) {
            $xml .= "<$nom>" . htmlspecialchars((string)$valeur, ENT_XML1, 'UTF-8') . "</$nom>";
        }
    
        $xml .= "</Lead>";
    
        return trim($xml);
    }
    

    public function sendApi(string $xmlString): string
    {
        $addresse = "http://ws.credigo.fr/contact.asmx?WSDL";
        if (!$this->httpResponse($addresse)) {
            $addresse = "http://ws2.credigo.fr/contact.asmx?WSDL";
        }

        $client = new SoapClient($addresse);
        $res = $client->Leadv2(array(
            'Login' => 'conso.finapole.fr',
            'Password' => '2456325214',
            'Version' => 'Envoi',
            'Flux' => $xmlString
        ));

        return $res->Leadv2Result;
    }

    public function httpResponse(string $url): bool
    {
        $resURL = curl_init();
        curl_setopt($resURL, CURLOPT_URL, $url);
        curl_setopt($resURL, CURLOPT_BINARYTRANSFER, 1);
        curl_setopt($resURL, CURLOPT_FAILONERROR, 1);
        curl_setopt($resURL, CURLOPT_NOSIGNAL, 1);
        curl_setopt($resURL, CURLOPT_TIMEOUT_MS, 200);
        curl_exec($resURL);
        $intReturnCode = curl_getinfo($resURL, CURLINFO_HTTP_CODE);
        curl_close($resURL);

        return in_array($intReturnCode, [200, 301, 302, 304]);
    }
}
