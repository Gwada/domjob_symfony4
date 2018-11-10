<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181110214803 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE advert ADD referentiel_appellation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE advert ADD CONSTRAINT FK_54F1F40B74BEFB5 FOREIGN KEY (referentiel_appellation_id) REFERENCES referentiel_appellation (id)');
        $this->addSql('CREATE INDEX IDX_54F1F40B74BEFB5 ON advert (referentiel_appellation_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE advert DROP FOREIGN KEY FK_54F1F40B74BEFB5');
        $this->addSql('DROP INDEX IDX_54F1F40B74BEFB5 ON advert');
        $this->addSql('ALTER TABLE advert DROP referentiel_appellation_id');
    }
}
