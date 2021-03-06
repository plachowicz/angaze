<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20130510094033 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");

        $this->addSql("ALTER TABLE Employee ADD position_id INT DEFAULT NULL");
        $this->addSql("ALTER TABLE Employee ADD CONSTRAINT FK_A4E917F7DD842E46 FOREIGN KEY (position_id) REFERENCES Position (id)");
        $this->addSql("CREATE INDEX IDX_A4E917F7DD842E46 ON Employee (position_id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");

        $this->addSql("ALTER TABLE Employee DROP FOREIGN KEY FK_A4E917F7DD842E46");
        $this->addSql("DROP INDEX IDX_A4E917F7DD842E46 ON Employee");
        $this->addSql("ALTER TABLE Employee DROP position_id");
    }
}
