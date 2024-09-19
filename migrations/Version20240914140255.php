<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240914140255 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE picture (id INT AUTO_INCREMENT NOT NULL, picture_data LONGBLOB NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE picture_habitat (picture_id INT NOT NULL, habitat_id INT NOT NULL, INDEX IDX_2611463AEE45BDBF (picture_id), INDEX IDX_2611463AAFFE2D26 (habitat_id), PRIMARY KEY(picture_id, habitat_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE picture_habitat ADD CONSTRAINT FK_2611463AEE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE picture_habitat ADD CONSTRAINT FK_2611463AAFFE2D26 FOREIGN KEY (habitat_id) REFERENCES habitat (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE picture_habitat DROP FOREIGN KEY FK_2611463AEE45BDBF');
        $this->addSql('ALTER TABLE picture_habitat DROP FOREIGN KEY FK_2611463AAFFE2D26');
        $this->addSql('DROP TABLE picture');
        $this->addSql('DROP TABLE picture_habitat');
    }
}
