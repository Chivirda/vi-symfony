<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211124215416 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE request ADD createdBy INT DEFAULT NULL');
        $this->addSql('ALTER TABLE request ADD CONSTRAINT FK_3B978F9FD3564642 FOREIGN KEY (createdBy) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_3B978F9FD3564642 ON request (createdBy)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE request DROP FOREIGN KEY FK_3B978F9FD3564642');
        $this->addSql('DROP INDEX IDX_3B978F9FD3564642 ON request');
        $this->addSql('ALTER TABLE request DROP createdBy');
    }
}
