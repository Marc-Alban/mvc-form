<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230807084202 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE lead (id INT AUTO_INCREMENT NOT NULL, origine VARCHAR(255) NOT NULL, code_origine VARCHAR(255) NOT NULL, adresse_ip VARCHAR(255) NOT NULL, date_proprietaire DATETIME NOT NULL, type_form VARCHAR(255) NOT NULL, provenance VARCHAR(255) NOT NULL, type_projet VARCHAR(255) NOT NULL, nature_projet VARCHAR(255) NOT NULL, assurance VARCHAR(255) NOT NULL, csp VARCHAR(255) NOT NULL, csp_co VARCHAR(255) NOT NULL, civilite VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, date_naissance DATETIME NOT NULL, lieu_naissance VARCHAR(255) NOT NULL, code_postal VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, adresse1 VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, portable VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, civilite_co VARCHAR(255) NOT NULL, nom_co VARCHAR(255) NOT NULL, prenom_co VARCHAR(255) NOT NULL, date_naissance_co DATETIME NOT NULL, lieu_naissance_co VARCHAR(255) NOT NULL, date_situation_familiale DATETIME NOT NULL, situation_familiale VARCHAR(255) NOT NULL, nb_enfant INT NOT NULL, profession VARCHAR(255) NOT NULL, type_contrat VARCHAR(255) NOT NULL, profession_co VARCHAR(255) NOT NULL, type_contrat_co VARCHAR(255) NOT NULL, debut_activite DATETIME NOT NULL, debut_activite_co DATETIME NOT NULL, nationalite VARCHAR(255) NOT NULL, nationalite_co VARCHAR(255) NOT NULL, revenus DOUBLE PRECISION NOT NULL, revenus_co DOUBLE PRECISION NOT NULL, loyer DOUBLE PRECISION NOT NULL, loyer_charges DOUBLE PRECISION NOT NULL, montant_projet DOUBLE PRECISION NOT NULL, duree_remboursement_souhaitee INT NOT NULL, date_obtention_fonds DATETIME NOT NULL, niveau_connaissance_credit VARCHAR(255) NOT NULL, nom_banque VARCHAR(255) NOT NULL, cbbanque VARCHAR(255) NOT NULL, annee_banque INT NOT NULL, type_vehicule VARCHAR(255) NOT NULL, etat_vehicule VARCHAR(255) NOT NULL, modele_vehicule VARCHAR(255) NOT NULL, mensualite_immo DOUBLE PRECISION NOT NULL, mensualite_conso DOUBLE PRECISION NOT NULL, autres_revenus DOUBLE PRECISION NOT NULL, allocations_familiales DOUBLE PRECISION NOT NULL, allocations_logement DOUBLE PRECISION NOT NULL, co_emprunteur TINYINT(1) NOT NULL, foyer TINYINT(1) NOT NULL, nb_immo INT NOT NULL, nb_conso INT NOT NULL, id_contact_client INT NOT NULL, date_contact DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE lead');
    }
}
