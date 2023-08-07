<?php
declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LeadRepository")
 */
class Lead
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $Origine - L'origine du lead.
     */
    private $Origine;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $CodeOrigine - Le code d'origine du lead.
     */
    private $CodeOrigine;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $Adresse_Ip - L'adresse IP associée au lead.
     */
    private $Adresse_Ip;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime $DateProprietaire - La date de propriété du lead.
     */
    private $DateProprietaire;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $TypeForm - Le type de formulaire associé au lead.
     */
    private $TypeForm;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $Provenance - La provenance du lead.
     */
    private $Provenance;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $TypeProjet - Le type de projet du lead.
     */
    private $TypeProjet;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $NatureProjet - La nature du projet du lead.
     */
    private $NatureProjet;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $Assurance - L'assurance associée au lead.
     */
    private $Assurance;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $Csp - La catégorie socio-professionnelle du lead.
     */
    private $Csp;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $CspCo - La catégorie socio-professionnelle du co-emprunteur (si applicable).
     */
    private $CspCo;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $Civilite - La civilité du lead.
     */
    private $Civilite;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $Nom - Le nom du lead.
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $Prenom - Le prénom du lead.
     */
    private $Prenom;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime $DateNaissance - La date de naissance du lead.
     */
    private $DateNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $LieuNaissance - Le lieu de naissance du lead.
     */
    private $LieuNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $CodePostal - Le code postal de l'adresse du lead.
     */
    private $CodePostal;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $Ville - La ville de l'adresse du lead.
     */
    private $Ville;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $Adresse1 - La première ligne de l'adresse du lead.
     */
    private $Adresse1;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $Telephone - Le numéro de téléphone du lead.
     */
    private $Telephone;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $Portable - Le numéro de portable du lead.
     */
    private $Portable;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $Email - L'adresse email du lead.
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $CiviliteCo - La civilité du co-emprunteur (si applicable).
     */
    private $CiviliteCo;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $NomCo - Le nom du co-emprunteur (si applicable).
     */
    private $NomCo;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $PrenomCo - Le prénom du co-emprunteur (si applicable).
     */
    private $PrenomCo;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime $DateNaissanceCo - La date de naissance du co-emprunteur (si applicable).
     */
    private $DateNaissanceCo;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $LieuNaissanceCo - Le lieu de naissance du co-emprunteur (si applicable).
     */
    private $LieuNaissanceCo;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime $DateSituationFamiliale - La date de situation familiale du lead.
     */
    private $DateSituationFamiliale;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $SituationFamiliale - La situation familiale du lead.
     */
    private $SituationFamiliale;

    /**
     * @ORM\Column(type="integer")
     * @var int $NbEnfant - Le nombre d'enfants du lead.
     */
    private $NbEnfant;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $Profession - La profession du lead.
     */
    private $Profession;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $TypeContrat - Le type de contrat du lead.
     */
    private $TypeContrat;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $ProfessionCo - La profession du co-emprunteur (si applicable).
     */
    private $ProfessionCo;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $TypeContratCo - Le type de contrat du co-emprunteur (si applicable).
     */
    private $TypeContratCo;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime $DebutActivite - La date de début d'activité du lead.
     */
    private $DebutActivite;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime $DebutActiviteCo - La date de début d'activité du co-emprunteur (si applicable).
     */
    private $DebutActiviteCo;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $Nationalite - La nationalité du lead.
     */
    private $Nationalite;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $NationaliteCo - La nationalité du co-emprunteur (si applicable).
     */
    private $NationaliteCo;

    /**
     * @ORM\Column(type="float")
     * @var float $Revenus - Le montant des revenus du lead.
     */
    private $Revenus;

    /**
     * @ORM\Column(type="float")
     * @var float $RevenusCo - Le montant des revenus du co-emprunteur (si applicable).
     */
    private $RevenusCo;

    /**
     * @ORM\Column(type="float")
     * @var float $Loyer - Le montant du loyer du lead.
     */
    private $Loyer;

    /**
     * @ORM\Column(type="float")
     * @var float $LoyerCharges - Le montant du loyer avec charges du lead.
     */
    private $LoyerCharges;

    /**
     * @ORM\Column(type="float")
     * @var float $MontantProjet - Le montant du projet du lead.
     */
    private $MontantProjet;

    /**
     * @ORM\Column(type="integer")
     * @var int $DureeRemboursementSouhaitee - La durée de remboursement souhaitée par le lead (en mois).
     */
    private $DureeRemboursementSouhaitee;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime $DateObtentionFonds - La date d'obtention des fonds par le lead.
     */
    private $DateObtentionFonds;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $NiveauConnaissanceCredit - Le niveau de connaissance du crédit du lead.
     */
    private $NiveauConnaissanceCredit;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $NomBanque - Le nom de la banque du lead.
     */
    private $NomBanque;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $CBBanque - Le code banque de la banque du lead.
     */
    private $CBBanque;

    /**
     * @ORM\Column(type="integer")
     * @var int $AnneeBanque - L'année de la banque du lead.
     */
    private $AnneeBanque;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $TypeVehicule - Le type de véhicule du lead.
     */
    private $TypeVehicule;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $EtatVehicule - L'état du véhicule du lead.
     */
    private $EtatVehicule;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string $ModeleVehicule - Le modèle du véhicule du lead.
     */
    private $ModeleVehicule;

    /**
     * @ORM\Column(type="float")
     * @var float $MensualiteImmo - La mensualité immobilière du lead.
     */
    private $MensualiteImmo;

    /**
     * @ORM\Column(type="float")
     * @var float $MensualiteConso - La mensualité de consommation du lead.
     */
    private $MensualiteConso;

    /**
     * @ORM\Column(type="float")
     * @var float $AutresRevenus - Les autres revenus du lead.
     */
    private $AutresRevenus;

    /**
     * @ORM\Column(type="float")
     * @var float $AllocationsFamiliales - Les allocations familiales du lead.
     */
    private $AllocationsFamiliales;

    /**
     * @ORM\Column(type="float")
     * @var float $AllocationsLogement - Les allocations logement du lead.
     */
    private $AllocationsLogement;

    /**
     * @ORM\Column(type="boolean")
     * @var bool $coEmprunteur - Indique si le lead a un co-emprunteur (true) ou non (false).
     */
    private $coEmprunteur;

    /**
     * @ORM\Column(type="boolean")
     * @var bool $foyer - Indique si le lead fait partie d'un foyer (true) ou non (false).
     */
    private $foyer;

    /**
     * @ORM\Column(type="integer")
     * @var int $NbImmo - Le nombre de biens immobiliers du lead.
     */
    private $NbImmo;

    /**
     * @ORM\Column(type="integer")
     * @var int $NbConso - Le nombre de crédits à la consommation du lead.
     */
    private $NbConso;

    /**
     * @ORM\Column(type="integer")
     * @var int $IdContactClient - L'identifiant du contact client associé au lead.
     */
    private $IdContactClient;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime $DateContact - La date de contact du lead.
     */
    private $DateContact;


    /**
     * Get the value of Origine
     */ 
    public function getOrigine()
    {
        return $this->Origine;
    }

    /**
     * Set the value of Origine
     *
     * @return  self
     */ 
    public function setOrigine($Origine)
    {
        $this->Origine = $Origine;

        return $this;
    }

    /**
     * Get the value of CodeOrigine
     */ 
    public function getCodeOrigine()
    {
        return $this->CodeOrigine;
    }

    /**
     * Set the value of CodeOrigine
     *
     * @return  self
     */ 
    public function setCodeOrigine($CodeOrigine)
    {
        $this->CodeOrigine = $CodeOrigine;

        return $this;
    }

    /**
     * Get the value of Adresse_Ip
     */ 
    public function getAdresse_Ip()
    {
        return $this->Adresse_Ip;
    }

    /**
     * Set the value of Adresse_Ip
     *
     * @return  self
     */ 
    public function setAdresse_Ip($Adresse_Ip)
    {
        $this->Adresse_Ip = $Adresse_Ip;

        return $this;
    }

    /**
     * Get the value of DateProprietaire
     */ 
    public function getDateProprietaire()
    {
        return $this->DateProprietaire;
    }

    /**
     * Set the value of DateProprietaire
     *
     * @return  self
     */ 
    public function setDateProprietaire($DateProprietaire)
    {
        $this->DateProprietaire = $DateProprietaire;

        return $this;
    }

    /**
     * Get the value of TypeForm
     */ 
    public function getTypeForm()
    {
        return $this->TypeForm;
    }

    /**
     * Set the value of TypeForm
     *
     * @return  self
     */ 
    public function setTypeForm($TypeForm)
    {
        $this->TypeForm = $TypeForm;

        return $this;
    }

    /**
     * Get the value of Provenance
     */ 
    public function getProvenance()
    {
        return $this->Provenance;
    }

    /**
     * Set the value of Provenance
     *
     * @return  self
     */ 
    public function setProvenance($Provenance)
    {
        $this->Provenance = $Provenance;

        return $this;
    }

    /**
     * Get the value of TypeProjet
     */ 
    public function getTypeProjet()
    {
        return $this->TypeProjet;
    }

    /**
     * Set the value of TypeProjet
     *
     * @return  self
     */ 
    public function setTypeProjet($TypeProjet)
    {
        $this->TypeProjet = $TypeProjet;

        return $this;
    }

    /**
     * Get the value of NatureProjet
     */ 
    public function getNatureProjet()
    {
        return $this->NatureProjet;
    }

    /**
     * Set the value of NatureProjet
     *
     * @return  self
     */ 
    public function setNatureProjet($NatureProjet)
    {
        $this->NatureProjet = $NatureProjet;

        return $this;
    }

    /**
     * Get the value of Assurance
     */ 
    public function getAssurance()
    {
        return $this->Assurance;
    }

    /**
     * Set the value of Assurance
     *
     * @return  self
     */ 
    public function setAssurance($Assurance)
    {
        $this->Assurance = $Assurance;

        return $this;
    }

    /**
     * Get the value of Csp
     */ 
    public function getCsp()
    {
        return $this->Csp;
    }

    /**
     * Set the value of Csp
     *
     * @return  self
     */ 
    public function setCsp($Csp)
    {
        $this->Csp = $Csp;

        return $this;
    }

    /**
     * Get the value of CspCo
     */ 
    public function getCspCo()
    {
        return $this->CspCo;
    }

    /**
     * Set the value of CspCo
     *
     * @return  self
     */ 
    public function setCspCo($CspCo)
    {
        $this->CspCo = $CspCo;

        return $this;
    }

    /**
     * Get the value of Civilite
     */ 
    public function getCivilite()
    {
        return $this->Civilite;
    }

    /**
     * Set the value of Civilite
     *
     * @return  self
     */ 
    public function setCivilite($Civilite)
    {
        $this->Civilite = $Civilite;

        return $this;
    }

    /**
     * Get the value of Nom
     */ 
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * Set the value of Nom
     *
     * @return  self
     */ 
    public function setNom($Nom)
    {
        $this->Nom = $Nom;

        return $this;
    }

    /**
     * Get the value of Prenom
     */ 
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * Set the value of Prenom
     *
     * @return  self
     */ 
    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    /**
     * Get the value of DateNaissance
     */ 
    public function getDateNaissance()
    {
        return $this->DateNaissance;
    }

    /**
     * Set the value of DateNaissance
     *
     * @return  self
     */ 
    public function setDateNaissance($DateNaissance)
    {
        $this->DateNaissance = $DateNaissance;

        return $this;
    }

    /**
     * Get the value of LieuNaissance
     */ 
    public function getLieuNaissance()
    {
        return $this->LieuNaissance;
    }

    /**
     * Set the value of LieuNaissance
     *
     * @return  self
     */ 
    public function setLieuNaissance($LieuNaissance)
    {
        $this->LieuNaissance = $LieuNaissance;

        return $this;
    }

    /**
     * Get the value of CodePostal
     */ 
    public function getCodePostal()
    {
        return $this->CodePostal;
    }

    /**
     * Set the value of CodePostal
     *
     * @return  self
     */ 
    public function setCodePostal($CodePostal)
    {
        $this->CodePostal = $CodePostal;

        return $this;
    }

    /**
     * Get the value of Ville
     */ 
    public function getVille()
    {
        return $this->Ville;
    }

    /**
     * Set the value of Ville
     *
     * @return  self
     */ 
    public function setVille($Ville)
    {
        $this->Ville = $Ville;

        return $this;
    }

    /**
     * Get the value of Adresse1
     */ 
    public function getAdresse1()
    {
        return $this->Adresse1;
    }

    /**
     * Set the value of Adresse1
     *
     * @return  self
     */ 
    public function setAdresse1($Adresse1)
    {
        $this->Adresse1 = $Adresse1;

        return $this;
    }

    /**
     * Get the value of Telephone
     */ 
    public function getTelephone()
    {
        return $this->Telephone;
    }

    /**
     * Set the value of Telephone
     *
     * @return  self
     */ 
    public function setTelephone($Telephone)
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    /**
     * Get the value of Portable
     */ 
    public function getPortable()
    {
        return $this->Portable;
    }

    /**
     * Set the value of Portable
     *
     * @return  self
     */ 
    public function setPortable($Portable)
    {
        $this->Portable = $Portable;

        return $this;
    }

    /**
     * Get the value of Email
     */ 
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set the value of Email
     *
     * @return  self
     */ 
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * Get the value of CiviliteCo
     */ 
    public function getCiviliteCo()
    {
        return $this->CiviliteCo;
    }

    /**
     * Set the value of CiviliteCo
     *
     * @return  self
     */ 
    public function setCiviliteCo($CiviliteCo)
    {
        $this->CiviliteCo = $CiviliteCo;

        return $this;
    }

    /**
     * Get the value of NomCo
     */ 
    public function getNomCo()
    {
        return $this->NomCo;
    }

    /**
     * Set the value of NomCo
     *
     * @return  self
     */ 
    public function setNomCo($NomCo)
    {
        $this->NomCo = $NomCo;

        return $this;
    }

    /**
     * Get the value of PrenomCo
     */ 
    public function getPrenomCo()
    {
        return $this->PrenomCo;
    }

    /**
     * Set the value of PrenomCo
     *
     * @return  self
     */ 
    public function setPrenomCo($PrenomCo)
    {
        $this->PrenomCo = $PrenomCo;

        return $this;
    }

    /**
     * Get the value of DateNaissanceCo
     */ 
    public function getDateNaissanceCo()
    {
        return $this->DateNaissanceCo;
    }

    /**
     * Set the value of DateNaissanceCo
     *
     * @return  self
     */ 
    public function setDateNaissanceCo($DateNaissanceCo)
    {
        $this->DateNaissanceCo = $DateNaissanceCo;

        return $this;
    }

    /**
     * Get the value of LieuNaissanceCo
     */ 
    public function getLieuNaissanceCo()
    {
        return $this->LieuNaissanceCo;
    }

    /**
     * Set the value of LieuNaissanceCo
     *
     * @return  self
     */ 
    public function setLieuNaissanceCo($LieuNaissanceCo)
    {
        $this->LieuNaissanceCo = $LieuNaissanceCo;

        return $this;
    }

    /**
     * Get the value of DateSituationFamiliale
     */ 
    public function getDateSituationFamiliale()
    {
        return $this->DateSituationFamiliale;
    }

    /**
     * Set the value of DateSituationFamiliale
     *
     * @return  self
     */ 
    public function setDateSituationFamiliale($DateSituationFamiliale)
    {
        $this->DateSituationFamiliale = $DateSituationFamiliale;

        return $this;
    }

    /**
     * Get the value of SituationFamiliale
     */ 
    public function getSituationFamiliale()
    {
        return $this->SituationFamiliale;
    }

    /**
     * Set the value of SituationFamiliale
     *
     * @return  self
     */ 
    public function setSituationFamiliale($SituationFamiliale)
    {
        $this->SituationFamiliale = $SituationFamiliale;

        return $this;
    }

    /**
     * Get the value of NbEnfant
     */ 
    public function getNbEnfant()
    {
        return $this->NbEnfant;
    }

    /**
     * Set the value of NbEnfant
     *
     * @return  self
     */ 
    public function setNbEnfant($NbEnfant)
    {
        $this->NbEnfant = $NbEnfant;

        return $this;
    }

    /**
     * Get the value of Profession
     */ 
    public function getProfession()
    {
        return $this->Profession;
    }

    /**
     * Set the value of Profession
     *
     * @return  self
     */ 
    public function setProfession($Profession)
    {
        $this->Profession = $Profession;

        return $this;
    }

    /**
     * Get the value of TypeContrat
     */ 
    public function getTypeContrat()
    {
        return $this->TypeContrat;
    }

    /**
     * Set the value of TypeContrat
     *
     * @return  self
     */ 
    public function setTypeContrat($TypeContrat)
    {
        $this->TypeContrat = $TypeContrat;

        return $this;
    }

    /**
     * Get the value of ProfessionCo
     */ 
    public function getProfessionCo()
    {
        return $this->ProfessionCo;
    }

    /**
     * Set the value of ProfessionCo
     *
     * @return  self
     */ 
    public function setProfessionCo($ProfessionCo)
    {
        $this->ProfessionCo = $ProfessionCo;

        return $this;
    }

    /**
     * Get the value of TypeContratCo
     */ 
    public function getTypeContratCo()
    {
        return $this->TypeContratCo;
    }

    /**
     * Set the value of TypeContratCo
     *
     * @return  self
     */ 
    public function setTypeContratCo($TypeContratCo)
    {
        $this->TypeContratCo = $TypeContratCo;

        return $this;
    }

    /**
     * Get the value of DebutActivite
     */ 
    public function getDebutActivite()
    {
        return $this->DebutActivite;
    }

    /**
     * Set the value of DebutActivite
     *
     * @return  self
     */ 
    public function setDebutActivite($DebutActivite)
    {
        $this->DebutActivite = $DebutActivite;

        return $this;
    }

    /**
     * Get the value of DebutActiviteCo
     */ 
    public function getDebutActiviteCo()
    {
        return $this->DebutActiviteCo;
    }

    /**
     * Set the value of DebutActiviteCo
     *
     * @return  self
     */ 
    public function setDebutActiviteCo($DebutActiviteCo)
    {
        $this->DebutActiviteCo = $DebutActiviteCo;

        return $this;
    }

    /**
     * Get the value of Nationalite
     */ 
    public function getNationalite()
    {
        return $this->Nationalite;
    }

    /**
     * Set the value of Nationalite
     *
     * @return  self
     */ 
    public function setNationalite($Nationalite)
    {
        $this->Nationalite = $Nationalite;

        return $this;
    }

    /**
     * Get the value of NationaliteCo
     */ 
    public function getNationaliteCo()
    {
        return $this->NationaliteCo;
    }

    /**
     * Set the value of NationaliteCo
     *
     * @return  self
     */ 
    public function setNationaliteCo($NationaliteCo)
    {
        $this->NationaliteCo = $NationaliteCo;

        return $this;
    }

    /**
     * Get the value of Revenus
     */ 
    public function getRevenus()
    {
        return $this->Revenus;
    }

    /**
     * Set the value of Revenus
     *
     * @return  self
     */ 
    public function setRevenus($Revenus)
    {
        $this->Revenus = $Revenus;

        return $this;
    }

    /**
     * Get the value of RevenusCo
     */ 
    public function getRevenusCo()
    {
        return $this->RevenusCo;
    }

    /**
     * Set the value of RevenusCo
     *
     * @return  self
     */ 
    public function setRevenusCo($RevenusCo)
    {
        $this->RevenusCo = $RevenusCo;

        return $this;
    }

    /**
     * Get the value of Loyer
     */ 
    public function getLoyer()
    {
        return $this->Loyer;
    }

    /**
     * Set the value of Loyer
     *
     * @return  self
     */ 
    public function setLoyer($Loyer)
    {
        $this->Loyer = $Loyer;

        return $this;
    }

    /**
     * Get the value of LoyerCharges
     */ 
    public function getLoyerCharges()
    {
        return $this->LoyerCharges;
    }

    /**
     * Set the value of LoyerCharges
     *
     * @return  self
     */ 
    public function setLoyerCharges($LoyerCharges)
    {
        $this->LoyerCharges = $LoyerCharges;

        return $this;
    }

    /**
     * Get the value of MontantProjet
     */ 
    public function getMontantProjet()
    {
        return $this->MontantProjet;
    }

    /**
     * Set the value of MontantProjet
     *
     * @return  self
     */ 
    public function setMontantProjet($MontantProjet)
    {
        $this->MontantProjet = $MontantProjet;

        return $this;
    }

    /**
     * Get the value of DureeRemboursementSouhaitee
     */ 
    public function getDureeRemboursementSouhaitee()
    {
        return $this->DureeRemboursementSouhaitee;
    }

    /**
     * Set the value of DureeRemboursementSouhaitee
     *
     * @return  self
     */ 
    public function setDureeRemboursementSouhaitee($DureeRemboursementSouhaitee)
    {
        $this->DureeRemboursementSouhaitee = $DureeRemboursementSouhaitee;

        return $this;
    }

    /**
     * Get the value of DateObtentionFonds
     */ 
    public function getDateObtentionFonds()
    {
        return $this->DateObtentionFonds;
    }

    /**
     * Set the value of DateObtentionFonds
     *
     * @return  self
     */ 
    public function setDateObtentionFonds($DateObtentionFonds)
    {
        $this->DateObtentionFonds = $DateObtentionFonds;

        return $this;
    }

    /**
     * Get the value of NiveauConnaissanceCredit
     */ 
    public function getNiveauConnaissanceCredit()
    {
        return $this->NiveauConnaissanceCredit;
    }

    /**
     * Set the value of NiveauConnaissanceCredit
     *
     * @return  self
     */ 
    public function setNiveauConnaissanceCredit($NiveauConnaissanceCredit)
    {
        $this->NiveauConnaissanceCredit = $NiveauConnaissanceCredit;

        return $this;
    }

    /**
     * Get the value of NomBanque
     */ 
    public function getNomBanque()
    {
        return $this->NomBanque;
    }

    /**
     * Set the value of NomBanque
     *
     * @return  self
     */ 
    public function setNomBanque($NomBanque)
    {
        $this->NomBanque = $NomBanque;

        return $this;
    }

    /**
     * Get the value of CBBanque
     */ 
    public function getCBBanque()
    {
        return $this->CBBanque;
    }

    /**
     * Set the value of CBBanque
     *
     * @return  self
     */ 
    public function setCBBanque($CBBanque)
    {
        $this->CBBanque = $CBBanque;

        return $this;
    }

    /**
     * Get the value of AnneeBanque
     */ 
    public function getAnneeBanque()
    {
        return $this->AnneeBanque;
    }

    /**
     * Set the value of AnneeBanque
     *
     * @return  self
     */ 
    public function setAnneeBanque($AnneeBanque)
    {
        $this->AnneeBanque = $AnneeBanque;

        return $this;
    }

    /**
     * Get the value of TypeVehicule
     */ 
    public function getTypeVehicule()
    {
        return $this->TypeVehicule;
    }

    /**
     * Set the value of TypeVehicule
     *
     * @return  self
     */ 
    public function setTypeVehicule($TypeVehicule)
    {
        $this->TypeVehicule = $TypeVehicule;

        return $this;
    }

    /**
     * Get the value of EtatVehicule
     */ 
    public function getEtatVehicule()
    {
        return $this->EtatVehicule;
    }

    /**
     * Set the value of EtatVehicule
     *
     * @return  self
     */ 
    public function setEtatVehicule($EtatVehicule)
    {
        $this->EtatVehicule = $EtatVehicule;

        return $this;
    }

    /**
     * Get the value of ModeleVehicule
     */ 
    public function getModeleVehicule()
    {
        return $this->ModeleVehicule;
    }

    /**
     * Set the value of ModeleVehicule
     *
     * @return  self
     */ 
    public function setModeleVehicule($ModeleVehicule)
    {
        $this->ModeleVehicule = $ModeleVehicule;

        return $this;
    }

    /**
     * Get the value of MensualiteImmo
     */ 
    public function getMensualiteImmo()
    {
        return $this->MensualiteImmo;
    }

    /**
     * Set the value of MensualiteImmo
     *
     * @return  self
     */ 
    public function setMensualiteImmo($MensualiteImmo)
    {
        $this->MensualiteImmo = $MensualiteImmo;

        return $this;
    }

    /**
     * Get the value of MensualiteConso
     */ 
    public function getMensualiteConso()
    {
        return $this->MensualiteConso;
    }

    /**
     * Set the value of MensualiteConso
     *
     * @return  self
     */ 
    public function setMensualiteConso($MensualiteConso)
    {
        $this->MensualiteConso = $MensualiteConso;

        return $this;
    }

    /**
     * Get the value of AutresRevenus
     */ 
    public function getAutresRevenus()
    {
        return $this->AutresRevenus;
    }

    /**
     * Set the value of AutresRevenus
     *
     * @return  self
     */ 
    public function setAutresRevenus($AutresRevenus)
    {
        $this->AutresRevenus = $AutresRevenus;

        return $this;
    }

    /**
     * Get the value of AllocationsFamiliales
     */ 
    public function getAllocationsFamiliales()
    {
        return $this->AllocationsFamiliales;
    }

    /**
     * Set the value of AllocationsFamiliales
     *
     * @return  self
     */ 
    public function setAllocationsFamiliales($AllocationsFamiliales)
    {
        $this->AllocationsFamiliales = $AllocationsFamiliales;

        return $this;
    }

    /**
     * Get the value of AllocationsLogement
     */ 
    public function getAllocationsLogement()
    {
        return $this->AllocationsLogement;
    }

    /**
     * Set the value of AllocationsLogement
     *
     * @return  self
     */ 
    public function setAllocationsLogement($AllocationsLogement)
    {
        $this->AllocationsLogement = $AllocationsLogement;

        return $this;
    }

    /**
     * Get the value of coEmprunteur
     */ 
    public function getCoEmprunteur()
    {
        return $this->coEmprunteur;
    }

    /**
     * Set the value of coEmprunteur
     *
     * @return  self
     */ 
    public function setCoEmprunteur($coEmprunteur)
    {
        $this->coEmprunteur = $coEmprunteur;

        return $this;
    }

    /**
     * Get the value of foyer
     */ 
    public function getFoyer()
    {
        return $this->foyer;
    }

    /**
     * Set the value of foyer
     *
     * @return  self
     */ 
    public function setFoyer($foyer)
    {
        $this->foyer = $foyer;

        return $this;
    }

    /**
     * Get the value of NbImmo
     */ 
    public function getNbImmo()
    {
        return $this->NbImmo;
    }

    /**
     * Set the value of NbImmo
     *
     * @return  self
     */ 
    public function setNbImmo($NbImmo)
    {
        $this->NbImmo = $NbImmo;

        return $this;
    }

    /**
     * Get the value of NbConso
     */ 
    public function getNbConso()
    {
        return $this->NbConso;
    }

    /**
     * Set the value of NbConso
     *
     * @return  self
     */ 
    public function setNbConso($NbConso)
    {
        $this->NbConso = $NbConso;

        return $this;
    }

    /**
     * Get the value of IdContactClient
     */ 
    public function getIdContactClient()
    {
        return $this->IdContactClient;
    }

    /**
     * Set the value of IdContactClient
     *
     * @return  self
     */ 
    public function setIdContactClient($IdContactClient)
    {
        $this->IdContactClient = $IdContactClient;

        return $this;
    }

    /**
     * Get the value of DateContact
     */ 
    public function getDateContact()
    {
        return $this->DateContact;
    }

    /**
     * Set the value of DateContact
     *
     * @return  self
     */ 
    public function setDateContact($DateContact)
    {
        $this->DateContact = $DateContact;

        return $this;
    }
}
