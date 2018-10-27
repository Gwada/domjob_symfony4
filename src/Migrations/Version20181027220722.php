<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181027220722 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE item_arborescence (id INT AUTO_INCREMENT NOT NULL, code_ogr INT NOT NULL, code_type_refentiel INT DEFAULT NULL, code_pere VARCHAR(255) NOT NULL, code_noeud VARCHAR(255) NOT NULL, libelle_item_arbo VARCHAR(255) NOT NULL, code_item_arbo_associe INT NOT NULL, code_type_noeud INT NOT NULL, libelle_type_noeud VARCHAR(255) NOT NULL, statut INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rubrique_mobilite (id INT AUTO_INCREMENT NOT NULL, code_rome VARCHAR(255) NOT NULL, code_rome_cible VARCHAR(255) NOT NULL, code_appellation_source VARCHAR(255) DEFAULT NULL, code_appellation_cible VARCHAR(255) DEFAULT NULL, code_type_mobilite INT NOT NULL, libelle_type_mobilite VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE referentiel_env_travail (id INT AUTO_INCREMENT NOT NULL, code_ogr INT NOT NULL, libelle_env_travail VARCHAR(255) NOT NULL, code_type_section_env_trav INT NOT NULL, libelle_type_section_env_trav VARCHAR(255) NOT NULL, statut INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE city (id INT AUTO_INCREMENT NOT NULL, code_postal VARCHAR(6) NOT NULL, code_commune VARCHAR(6) NOT NULL, nom_commune VARCHAR(255) NOT NULL, libelle_acheminement VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE grand_domaine (id INT AUTO_INCREMENT NOT NULL, code_grand_domaine VARCHAR(255) NOT NULL, libelle_grand_domaine VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE referentiel_activite_riasec (id INT AUTO_INCREMENT NOT NULL, code_ogr INT NOT NULL, riasec_majeur VARCHAR(255) NOT NULL, riasec_mineur VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE en_tete_regroupement (id INT AUTO_INCREMENT NOT NULL, code_tete_rgpmt INT NOT NULL, libelle_en_tete_regroupement VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE descriptif_rubrique (id INT AUTO_INCREMENT NOT NULL, code_ref_rubrique INT NOT NULL, code_type_referentiel INT NOT NULL, code_compo_bloc INT NOT NULL, position_bloc INT NOT NULL, libelle_ref_rubrique VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE referentiel_competence (id INT AUTO_INCREMENT NOT NULL, code_ogr INT NOT NULL, libelle_competence VARCHAR(255) NOT NULL, code_type_competence INT NOT NULL, libelle_type_competence VARCHAR(255) NOT NULL, statut INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE composition_bloc (id INT AUTO_INCREMENT NOT NULL, code_compo_bloc INT NOT NULL, libelle_bloc VARCHAR(255) NOT NULL, type_referentiel VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE referentiel_code_rome (id INT AUTO_INCREMENT NOT NULL, code_rome VARCHAR(255) NOT NULL, code_fiche_em INT NOT NULL, code_ogr INT NOT NULL, libelle_rome VARCHAR(255) NOT NULL, statut INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE referentiel_code_rome_riasec (id INT AUTO_INCREMENT NOT NULL, code_rome VARCHAR(255) NOT NULL, riasec_majeur VARCHAR(255) NOT NULL, riasec_mineur VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE coherence_referentiel_grand_domaine_domaine_professionnel (id INT AUTO_INCREMENT NOT NULL, code_rome VARCHAR(255) NOT NULL, libelle_rome VARCHAR(255) NOT NULL, code_grand_domaine VARCHAR(255) NOT NULL, libelle_grand_domaine VARCHAR(255) NOT NULL, code_domaine_professionnel VARCHAR(255) NOT NULL, libelle_domaine_professionnel VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE item (id INT AUTO_INCREMENT NOT NULL, code_ogr INT NOT NULL, libelle VARCHAR(255) NOT NULL, code_type_referentiel INT NOT NULL, code_ref_rubrique INT NOT NULL, code_tete_rgpmt VARCHAR(255) NOT NULL, libelle_activite_impression VARCHAR(255) NOT NULL, libelle_en_tete_regroupement VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_referentiel (id INT AUTO_INCREMENT NOT NULL, code_type_referentiel INT NOT NULL, code_type_particulier VARCHAR(255) NOT NULL, libelle_type_referentiel VARCHAR(255) NOT NULL, nom_table_corresp_arbre VARCHAR(255) NOT NULL, nom_table_referentiel VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE coherence_item (id INT AUTO_INCREMENT NOT NULL, code_rome VARCHAR(255) NOT NULL, code_ogr INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE code_ref_grand_dom_dom_pro_appellations (id INT AUTO_INCREMENT NOT NULL, code_grand_domaine VARCHAR(255) NOT NULL, code_domaine_professionnel VARCHAR(255) DEFAULT NULL, numero_fiche_rome VARCHAR(255) DEFAULT NULL, intitule VARCHAR(255) NOT NULL, libelle_appellation_long VARCHAR(255) NOT NULL, libelle_appellation_court VARCHAR(255) NOT NULL, type_provenance INT NOT NULL, code_fiche INT DEFAULT NULL, ogr_rome INT DEFAULT NULL, ogr_appellation INT DEFAULT NULL, priorisation INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE referentiel_activite (id INT AUTO_INCREMENT NOT NULL, code_ogr INT NOT NULL, code_tete_rgpmt VARCHAR(255) NOT NULL, libelle_activite VARCHAR(255) NOT NULL, libelle_activite_impression VARCHAR(255) NOT NULL, code_type_activite INT NOT NULL, libelle_type_activite VARCHAR(255) NOT NULL, code_type_item_activite INT NOT NULL, libelle_type_item_activite VARCHAR(255) NOT NULL, statut INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE referentiel_appellation (id INT AUTO_INCREMENT NOT NULL, code_ogr INT NOT NULL, libelle_appellation_long VARCHAR(255) NOT NULL, libelle_appellation_court VARCHAR(255) NOT NULL, code_rome VARCHAR(255) NOT NULL, code_type_section_appellation INT NOT NULL, libelle_type_section_appellation VARCHAR(255) NOT NULL, statut INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE texte (id INT AUTO_INCREMENT NOT NULL, code_rome VARCHAR(255) NOT NULL, position_libelle_txt INT NOT NULL, code_type_texte INT NOT NULL, libelle_texte LONGTEXT NOT NULL, libelle_type_texte LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE domaine_professionnel (id INT AUTO_INCREMENT NOT NULL, grand_domaine_id INT DEFAULT NULL, code_domaine_professionnel VARCHAR(255) NOT NULL, libelle_domaine_professionnel VARCHAR(255) NOT NULL, INDEX IDX_499BF6E62F40757 (grand_domaine_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE domaine_professionnel ADD CONSTRAINT FK_499BF6E62F40757 FOREIGN KEY (grand_domaine_id) REFERENCES grand_domaine (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE domaine_professionnel DROP FOREIGN KEY FK_499BF6E62F40757');
        $this->addSql('DROP TABLE item_arborescence');
        $this->addSql('DROP TABLE rubrique_mobilite');
        $this->addSql('DROP TABLE referentiel_env_travail');
        $this->addSql('DROP TABLE city');
        $this->addSql('DROP TABLE grand_domaine');
        $this->addSql('DROP TABLE referentiel_activite_riasec');
        $this->addSql('DROP TABLE en_tete_regroupement');
        $this->addSql('DROP TABLE descriptif_rubrique');
        $this->addSql('DROP TABLE referentiel_competence');
        $this->addSql('DROP TABLE composition_bloc');
        $this->addSql('DROP TABLE referentiel_code_rome');
        $this->addSql('DROP TABLE referentiel_code_rome_riasec');
        $this->addSql('DROP TABLE coherence_referentiel_grand_domaine_domaine_professionnel');
        $this->addSql('DROP TABLE item');
        $this->addSql('DROP TABLE type_referentiel');
        $this->addSql('DROP TABLE coherence_item');
        $this->addSql('DROP TABLE code_ref_grand_dom_dom_pro_appellations');
        $this->addSql('DROP TABLE referentiel_activite');
        $this->addSql('DROP TABLE referentiel_appellation');
        $this->addSql('DROP TABLE texte');
        $this->addSql('DROP TABLE domaine_professionnel');
    }
}
