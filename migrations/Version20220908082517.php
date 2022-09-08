<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220908082517 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commentaires (id INT AUTO_INCREMENT NOT NULL, createur_id INT DEFAULT NULL, publication_id INT DEFAULT NULL, contenu VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_D9BEC0C473A201E5 (createur_id), INDEX IDX_D9BEC0C438B217A7 (publication_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commentaires ADD CONSTRAINT FK_D9BEC0C473A201E5 FOREIGN KEY (createur_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE commentaires ADD CONSTRAINT FK_D9BEC0C438B217A7 FOREIGN KEY (publication_id) REFERENCES publications (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaires DROP FOREIGN KEY FK_D9BEC0C473A201E5');
        $this->addSql('ALTER TABLE commentaires DROP FOREIGN KEY FK_D9BEC0C438B217A7');
        $this->addSql('DROP TABLE commentaires');
    }
}
