<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181106224226 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE referentiel_code_rome DROP FOREIGN KEY FK_662A1E94CF3608DA');
        $this->addSql('DROP INDEX IDX_662A1E94CF3608DA ON referentiel_code_rome');
        $this->addSql('ALTER TABLE referentiel_code_rome DROP domaine_professionel_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE referentiel_code_rome ADD domaine_professionel_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE referentiel_code_rome ADD CONSTRAINT FK_662A1E94CF3608DA FOREIGN KEY (domaine_professionel_id) REFERENCES domaine_professionnel (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_662A1E94CF3608DA ON referentiel_code_rome (domaine_professionel_id)');
    }
}
