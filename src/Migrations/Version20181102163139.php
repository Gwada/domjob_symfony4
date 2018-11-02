<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181102163139 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE advert ADD domaine_professionel_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE advert ADD CONSTRAINT FK_54F1F40BCF3608DA FOREIGN KEY (domaine_professionel_id) REFERENCES domaine_professionnel (id)');
        $this->addSql('CREATE INDEX IDX_54F1F40BCF3608DA ON advert (domaine_professionel_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE advert DROP FOREIGN KEY FK_54F1F40BCF3608DA');
        $this->addSql('DROP INDEX IDX_54F1F40BCF3608DA ON advert');
        $this->addSql('ALTER TABLE advert DROP domaine_professionel_id');
    }
}
