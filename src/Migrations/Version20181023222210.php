<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181023222210 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE domaine_professionnel (id INT AUTO_INCREMENT NOT NULL, grand_domaine_id INT DEFAULT NULL, code_domaine_professionnel VARCHAR(255) NOT NULL, libelle_domaine_professionnel VARCHAR(255) NOT NULL, INDEX IDX_499BF6E62F40757 (grand_domaine_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE domaine_professionnel ADD CONSTRAINT FK_499BF6E62F40757 FOREIGN KEY (grand_domaine_id) REFERENCES grand_domaine (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE domaine_professionnel');
    }
}
