<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230313202240 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie_association (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE categorie_ass');
        $this->addSql('ALTER TABLE association DROP FOREIGN KEY FK_FD8521CCBCF5E72D');
        $this->addSql('ALTER TABLE association ADD CONSTRAINT FK_FD8521CCBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie_association (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE association DROP FOREIGN KEY FK_FD8521CCBCF5E72D');
        $this->addSql('CREATE TABLE categorie_ass (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE categorie_association');
        $this->addSql('ALTER TABLE association DROP FOREIGN KEY FK_FD8521CCBCF5E72D');
        $this->addSql('ALTER TABLE association ADD CONSTRAINT FK_FD8521CCBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
    }
}
