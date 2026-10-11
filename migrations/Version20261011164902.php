<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20261011164902 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE allergene (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, num_commande INT NOT NULL, date_commande DATE NOT NULL, date_prestation DATE NOT NULL, heure_livraison TIME NOT NULL, prix_menu NUMERIC(10, 2) NOT NULL, nb_personne INT NOT NULL, prix_livraison NUMERIC(10, 2) NOT NULL, statut VARCHAR(255) NOT NULL, pret_materiel TINYINT NOT NULL, restitution_materiel TINYINT NOT NULL, user_id INT NOT NULL, INDEX IDX_6EEAA67DA76ED395 (user_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE commande_menu (commande_id INT NOT NULL, menu_id INT NOT NULL, INDEX IDX_16693B7082EA2E54 (commande_id), INDEX IDX_16693B70CCD7E912 (menu_id), PRIMARY KEY (commande_id, menu_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE menu (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, nb_personne_min INT NOT NULL, prix_par_pers NUMERIC(10, 0) NOT NULL, description LONGTEXT NOT NULL, qte_restante INT NOT NULL, regime_id INT NOT NULL, INDEX IDX_7D053A9335E7D534 (regime_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE plat (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, prix NUMERIC(5, 2) NOT NULL, photo VARCHAR(255) DEFAULT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE plat_menu (plat_id INT NOT NULL, menu_id INT NOT NULL, INDEX IDX_CA9ED79CD73DB560 (plat_id), INDEX IDX_CA9ED79CCCD7E912 (menu_id), PRIMARY KEY (plat_id, menu_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE plat_allergene (plat_id INT NOT NULL, allergene_id INT NOT NULL, INDEX IDX_6FA44BBFD73DB560 (plat_id), INDEX IDX_6FA44BBF4646AB2 (allergene_id), PRIMARY KEY (plat_id, allergene_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE regime (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commande_menu ADD CONSTRAINT FK_16693B7082EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_menu ADD CONSTRAINT FK_16693B70CCD7E912 FOREIGN KEY (menu_id) REFERENCES menu (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE menu ADD CONSTRAINT FK_7D053A9335E7D534 FOREIGN KEY (regime_id) REFERENCES regime (id)');
        $this->addSql('ALTER TABLE plat_menu ADD CONSTRAINT FK_CA9ED79CD73DB560 FOREIGN KEY (plat_id) REFERENCES plat (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE plat_menu ADD CONSTRAINT FK_CA9ED79CCCD7E912 FOREIGN KEY (menu_id) REFERENCES menu (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE plat_allergene ADD CONSTRAINT FK_6FA44BBFD73DB560 FOREIGN KEY (plat_id) REFERENCES plat (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE plat_allergene ADD CONSTRAINT FK_6FA44BBF4646AB2 FOREIGN KEY (allergene_id) REFERENCES allergene (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DA76ED395');
        $this->addSql('ALTER TABLE commande_menu DROP FOREIGN KEY FK_16693B7082EA2E54');
        $this->addSql('ALTER TABLE commande_menu DROP FOREIGN KEY FK_16693B70CCD7E912');
        $this->addSql('ALTER TABLE menu DROP FOREIGN KEY FK_7D053A9335E7D534');
        $this->addSql('ALTER TABLE plat_menu DROP FOREIGN KEY FK_CA9ED79CD73DB560');
        $this->addSql('ALTER TABLE plat_menu DROP FOREIGN KEY FK_CA9ED79CCCD7E912');
        $this->addSql('ALTER TABLE plat_allergene DROP FOREIGN KEY FK_6FA44BBFD73DB560');
        $this->addSql('ALTER TABLE plat_allergene DROP FOREIGN KEY FK_6FA44BBF4646AB2');
        $this->addSql('DROP TABLE allergene');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE commande_menu');
        $this->addSql('DROP TABLE menu');
        $this->addSql('DROP TABLE plat');
        $this->addSql('DROP TABLE plat_menu');
        $this->addSql('DROP TABLE plat_allergene');
        $this->addSql('DROP TABLE regime');
    }
}
