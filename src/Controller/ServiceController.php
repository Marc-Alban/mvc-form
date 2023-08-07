<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ServiceController extends AbstractController
{
    private $_lead;
    private $_errors = [];


    public function __construct()
    {
        $this->loadModel('Lead');
    }

    public function index()
    {
        if (!empty($_POST)) {
            $this->_lead = new Lead();
            $this->_lead->insert($_POST, 'lead');
    
            // Convertir les données en UTF-8
            foreach ($_POST as $key => $value) {
                // Detect the encoding of the data
                $encoding = mb_detect_encoding($value);
                // Check if the encoding is not UTF-8
                if ($encoding != 'UTF-8') {
                    // Convert the data to UTF-8
                    $_POST[$key] = mb_convert_encoding($value, 'UTF-8', $encoding);
                }
            }
    
            return $this->sendApi($_POST);
        }
        return $this->render('index', $this->_errors);
    }

    //pas au dessus de 2 000 000 000 mais partir 17 000 000



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
            //ajouter au tableau data les données du co-emprunteur
            $data['coEmprunteur'] = 'oui';
            $data['foyer'] = '2';
        } else {
            $data['coEmprunteur'] = 'non';
            $data['foyer'] = '1';
        }

        $data["NbImmo"] = ($datas['totalImmoCreditConso'] > 0) ? 1 : 0;
        $data["NbConso"] = ($datas['totalMensualitesCreditConso'] > 0) ? 1 : 0;


        //Création d'une boucle pour incrémenter l'id automariquement à chaque enregistrement qui commence à 17000000
        $lead = new Lead();
        $id = $lead->getLastId();
        $IdContactClient = $id['0'] + 17000000;
        $data["IdContactClient"] =  $IdContactClient;
        //Ajout de la date et de l'heure de l'enregistrement
        $data["DateContact"] = date("d/m/Y H:i");

        // Initialisez une chaîne de caractères vide qui contiendra le XML
        $xml = "";
        // Ajoutez les balises XML qui englobent le tout
        $xml .= "<Lead>";

        // Parcourez chaque élément du tableau
        foreach ($data as $nom => $valeur) {
            // balise XML à la chaîne de caractères
            $xml .= "<$nom>" . $valeur . "</$nom>";
        }

        // Ajoutez la balise de fin
        $xml .= "</Lead>";
        // Encodez la chaîne de caractères XML en UTF-8
        return trim($xml);
    }



    public function sendApi($data)
    {
        switch ($_SESSION['Adresse_Ip']) {
            case '217.24.81.100':
                $data['website'] = 'Credigo';
                $data['Adresse_Ip'] = '217.24.81.100';
                break;
            case '185.34.32.132':
                $data['website'] = 'Solutis';
                $data['Adresse_Ip'] = '185.34.32.132';
                break;
            case '91.194.60.92':
                $data['website'] = 'Responis';
                $data['Adresse_Ip'] = '91.194.60.92';
                break;
            case '185.34.32.73':
                $data['website'] = 'conso.finapole.fr';
                $data['Adresse_Ip'] = '185.34.32.73';
                break;
            case 'localhost':
                $data['website'] = 'localhost';
                $data['Adresse_Ip'] = 'localhost';
                break;
        }
        $data["maritalStatus"] = (isset($data["maritalStatus"]) && !empty($data["maritalStatus"])) ? $data["maritalStatus"] : 'NDF';
        $data["Origine"] = $_SESSION['website'];
        $data["CodeOrigine"] = $_SESSION['website'];
        $data["hasOption"] = (isset($data["hasOption"]) && !empty($data["hasOption"])) ? $data["hasOption"] = true : $data["hasOption"] = false;
        $data["website"] = (isset($data["website"]) && !empty($data["website"])) ? $data["website"] : 'NDF';
        $data["project"] = (isset($data["project"]) && !empty($data["project"])) ? $data["project"] : 'NDF';
        $data["carType"] = (isset($data["carType"]) && !empty($data["carType"])) ? $data["carType"] : 'NDF';
        $data["carState"] = (isset($data["carState"]) && !empty($data["carState"])) ? $data["carState"] : 'NDF';
        $data["carBrand"] = (isset($data["carBrand"]) && !empty($data["carBrand"])) ? $data["carBrand"] : 'NDF';
        $data["worksType"] = (isset($data["worksType"]) && !empty($data["worksType"])) ? $data["worksType"] : 'NDF';
        $data["projectType"] = (isset($data["projectType"]) && !empty($data["projectType"])) ? $data["projectType"] : 'NDF';
        $data["amount"] = (isset($data["amount"]) && !empty($data["amount"])) ? $data["amount"] : 0;
        $data["duration"] = (isset($data["duration"]) && !empty($data["duration"])) ? $data["duration"] : 0;
        $data["fundsDelay"] = (isset($data["fundsDelay"]) && !empty($data["fundsDelay"])) ? $data["fundsDelay"] : 'NDF';
        $data["level"] = (isset($data["level"]) && !empty($data["level"])) ? $data["level"] : 'NDF';
        $data["assurance"] = (isset($data["assurance"]) && !empty($data["assurance"])) ? $data["assurance"] : 'NDF';
        $data["daySituation"] = (isset($data["daySituation"]) && !empty($data["daySituation"])) ? $data["daySituation"] : 0;
        $data["monthSituation"] = (isset($data["monthSituation"]) && !empty($data["monthSituation"])) ? $data["monthSituation"] : 0;
        $data["yearSituation"] = (isset($data["yearSituation"]) && !empty($data["yearSituation"])) ? $data["yearSituation"] : 1970;
        $data["enfant"] = (isset($data["enfant"]) && !empty($data["enfant"])) ? $data["enfant"] : 0;
        $data["incomeBeforeTax"] = (isset($data["incomeBeforeTax"]) && !empty($data["incomeBeforeTax"])) ? $data["incomeBeforeTax"] : 0;
        $data["rentalIncome"] = (isset($data["rentalIncome"]) && !empty($data["rentalIncome"])) ? $data["rentalIncome"] : 0;
        $data["otherHouseholdIncome"] = (isset($data["otherHouseholdIncome"]) && !empty($data["otherHouseholdIncome"])) ? $data["otherHouseholdIncome"] : 0;
        $data["benefitAmount"] = (isset($data["benefitAmount"]) && !empty($data["benefitAmount"])) ? $data["benefitAmount"] : 0;
        $data["rent"] = (isset($data["rent"]) && !empty($data["rent"])) ? $data["rent"] : 0;
        $data["professionalSector"] = (isset($data["professionalSector"]) && !empty($data["professionalSector"])) ? $data["professionalSector"] : 0;
        $data["professionalType"] = (isset($data["professionalType"]) && !empty($data["professionalType"])) ? $data["professionalType"] : 'NDF';
        $data["professionalContractType"] = (isset($data["professionalContractType"]) && !empty($data["professionalContractType"])) ? $data["professionalContractType"] : 'NDF';
        $data["profession"] = (isset($data["profession"]) && !empty($data["profession"])) ? $data["profession"] : 'NDF';
        $data["daySecteur"] = (isset($data["daySecteur"]) && !empty($data["daySecteur"])) ? $data["daySecteur"] : 0;
        $data["monthSecteur"] = (isset($data["monthSecteur"]) && !empty($data["monthSecteur"])) ? $data["monthSecteur"] : 0;
        $data["yearSecteur"] = (isset($data["yearSecteur"]) && !empty($data["yearSecteur"])) ? $data["yearSecteur"] : 1970;
        $data["selectListe"] = (isset($data["selectListe"]) && !empty($data["selectListe"])) ? $data["selectListe"] : 'NDF';
        $data["yearStatut"] = (isset($data["yearStatut"]) && !empty($data["yearStatut"])) ? $data["yearStatut"] : 1970;
        $data["bankType"] = (isset($data["bankType"]) && !empty($data["bankType"])) ? $data["bankType"] : 'NDF';
        $data["bankCardType"] = (isset($data["bankCardType"]) && !empty($data["bankCardType"])) ? $data["bankCardType"] : 'NDF';
        $data["yearBank"] = (isset($data["yearBank"]) && !empty($data["yearBank"])) ? $data["yearBank"] : 1970;
        $data["civilityGender"] = (isset($data["civilityGender"]) && !empty($data["civilityGender"])) ? $data["civilityGender"] : 'NDF';
        $data["civilityLastname"] = (isset($data["civilityLastname"]) && !empty($data["civilityLastname"])) ? $data["civilityLastname"] : 'NDF';
        $data["civilityFirstname"] = (isset($data["civilityFirstname"]) && !empty($data["civilityFirstname"])) ? $data["civilityFirstname"] : 'NDF';
        $data["civilityNationality"] = (isset($data["civilityNationality"]) && !empty($data["civilityNationality"])) ? $data["civilityNationality"] : 'NDF';
        $data["civilityCity"] = (isset($data["civilityCity"]) && !empty($data["civilityCity"])) ? $data["civilityCity"] : 'NDF';
        $data["civilityDayBirthDay"] = (isset($data["civilityDayBirthDay"]) && !empty($data["civilityDayBirthDay"])) ? $data["civilityDayBirthDay"] : 0;
        $data["civilityMonthBirthDay"] = (isset($data["civilityMonthBirthDay"]) && !empty($data["civilityMonthBirthDay"])) ? $data["civilityMonthBirthDay"] : 0;
        $data["civilityYearBirthDay"] = (isset($data["civilityYearBirthDay"]) && !empty($data["civilityYearBirthDay"])) ? $data["civilityYearBirthDay"] : 1970;
        $data["address"] = (isset($data["address"]) && !empty($data["address"])) ? $data["address"] : 'NDF';
        $data["phone1"] = (isset($data["phone1"]) && !empty($data["phone1"])) ? $data["phone1"] : "00 00 00 00 00";
        $data["phone2"] = (isset($data["phone2"]) && !empty($data["phone2"])) ? $data["phone2"] : "00 00 00 00 00";
        $data["email"] = (isset($data["email"]) && !empty($data["email"])) ? $data["email"] : 'NDF';
        $data["city"] = (isset($data["city"]) && !empty($data["city"])) ? $data["city"] : 'NDF';
        $data["zipCode"] = (isset($data["zipCode"]) && !empty($data["zipCode"])) ? $data["zipCode"] : 'NDF';
        unset($data["submit"]);
        $data["incomeBeforeTaxCo"] = (isset($data["incomeBeforeTaxCo"]) && !empty($data["incomeBeforeTaxCo"])) ? $data["incomeBeforeTaxCo"] : 0;
        $data["professionalSectorCo"] = (isset($data["professionalSectorCo"]) && !empty($data["professionalSectorCo"])) ? $data["professionalSectorCo"] : 0;
        $data["professionalTypeCo"] = (isset($data["professionalTypeCo"]) && !empty($data["professionalTypeCo"])) ? $data["professionalTypeCo"] : 'NDF';
        $data["professionalContractTypeCo"] = (isset($data["professionalContractTypeCo"]) && !empty($data["professionalContractTypeCo"])) ? $data["professionalContractTypeCo"] : 'NDF';
        $data["professionCo"] = (isset($data["professionCo"]) && !empty($data["professionCo"])) ? $data["professionCo"] : 'NDF';
        $data["daySecteurCo"] = (isset($data["daySecteurCo"]) && !empty($data["daySecteurCo"])) ? $data["daySecteurCo"] : 0;
        $data["monthSecteurCo"] = (isset($data["monthSecteurCo"]) && !empty($data["monthSecteurCo"])) ? $data["monthSecteurCo"] : 0;
        $data["yearSecteurCo"] = (isset($data["yearSecteurCo"]) && !empty($data["yearSecteurCo"])) ? $data["yearSecteurCo"] : 1970;
        $data["civilityGenderCo"] = (isset($data["civilityGenderCo"]) && !empty($data["civilityGenderCo"])) ? $data["civilityGenderCo"] : 'NDF';
        $data["civilityLastnameCo"] = (isset($data["civilityLastnameCo"]) && !empty($data["civilityLastnameCo"])) ? $data["civilityLastnameCo"] : 'NDF';
        $data["civilityFirstnameCo"] = (isset($data["civilityFirstnameCo"]) && !empty($data["civilityFirstnameCo"])) ? $data["civilityFirstnameCo"] : 'NDF';
        $data["civilityNationalityCo"] = (isset($data["civilityNationalityCo"]) && !empty($data["civilityNationalityCo"])) ? $data["civilityNationalityCo"] : 'NDF';
        $data["civilityCityCo"] = (isset($data["civilityCityCo"]) && !empty($data["civilityCityCo"])) ? $data["civilityCityCo"] : 'NDF';
        $data["civilityDayBirthDayCo"] = (isset($data["civilityDayBirthDayCo"]) && !empty($data["civilityDayBirthDayCo"])) ? $data["civilityDayBirthDayCo"] : 0;
        $data["civilityMonthBirthDayCo"] = (isset($data["civilityMonthBirthDayCo"]) && !empty($data["civilityMonthBirthDayCo"])) ? $data["civilityMonthBirthDayCo"] : 0;
        $data["civilityYearBirthDayCo"] = (isset($data["civilityYearBirthDayCo"]) && !empty($data["civilityYearBirthDayCo"])) ? $data["civilityYearBirthDayCo"] : 1970;
        $data["totalMensualitesCreditConso"] = (isset($data["totalMensualitesCreditConso"]) && !empty($data["totalMensualitesCreditConso"])) ? $data["totalMensualitesCreditConso"] : 0;
        $data["totalImmoCreditConso"] = (isset($data["totalImmoCreditConso"]) && !empty($data["totalImmoCreditConso"])) ? $data["totalImmoCreditConso"] : 0;
        $xmlString = $this->array_to_xml($data);
        
        $addresse = "http://ws.credigo.fr/contact.asmx?WSDL";
       // $addresse = "http://192.168.0.207/webservicecredigo/contact.asmx?WSDL";
        if (@fopen($addresse, "r")) {
            $addresse = "http://ws.credigo.fr/contact.asmx?WSDL";
        } else {
            $addresse = "http://ws2.credigo.fr/contact.asmx?WSDL";
        }
        $client = new SoapClient($addresse);
        $res = $client->Leadv2(array(
            'Login' => 'conso.finapole.fr',
            'Password' => '2456325214',
            'Version' => 'Envoi',
            'Flux' => $xmlString
        ));

        $_SESSION['result'] =  $res->Leadv2Result;

        $this->render('end');
        exit;
    }

    public function httpResponse($url)
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
        if (
            $intReturnCode != 200
            && $intReturnCode != 301
            && $intReturnCode != 302
            && $intReturnCode != 304
        ) {
            return false;
        } else {
            return true;
        }
    }
}
