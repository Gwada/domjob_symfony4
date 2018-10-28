<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181028162405 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE advert ADD grand_domaine_id INT NOT NULL');
        $this->addSql('ALTER TABLE advert ADD CONSTRAINT FK_54F1F40B2F40757 FOREIGN KEY (grand_domaine_id) REFERENCES grand_domaine (id)');
        $this->addSql('CREATE INDEX IDX_54F1F40B2F40757 ON advert (grand_domaine_id)');
        $this->addSql('ALTER TABLE code_ref_grand_dom_dom_pro_appellations DROP FOREIGN KEY FK_AEB756E62F40757');
        $this->addSql('DROP INDEX IDX_AEB756E62F40757 ON code_ref_grand_dom_dom_pro_appellations');
        $this->addSql('ALTER TABLE code_ref_grand_dom_dom_pro_appellations DROP grand_domaine_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE advert DROP FOREIGN KEY FK_54F1F40B2F40757');
        $this->addSql('DROP INDEX IDX_54F1F40B2F40757 ON advert');
        $this->addSql('ALTER TABLE advert DROP grand_domaine_id');
        $this->addSql('ALTER TABLE code_ref_grand_dom_dom_pro_appellations ADD grand_domaine_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE code_ref_grand_dom_dom_pro_appellations ADD CONSTRAINT FK_AEB756E62F40757 FOREIGN KEY (grand_domaine_id) REFERENCES grand_domaine (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_AEB756E62F40757 ON code_ref_grand_dom_dom_pro_appellations (grand_domaine_id)');
    }
}
