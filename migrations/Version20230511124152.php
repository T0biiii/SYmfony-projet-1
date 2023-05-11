<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230511124152 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, couleur_id INT NOT NULL, nom VARCHAR(50) NOT NULL, prix DOUBLE PRECISION NOT NULL, description VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, marque VARCHAR(50) NOT NULL, etat TINYINT(1) NOT NULL, couleur VARCHAR(20) DEFAULT NULL, taille VARCHAR(5) NOT NULL, img VARCHAR(255) NOT NULL, INDEX IDX_23A0E6612469DE2 (category_id), INDEX IDX_23A0E66C31BA576 (couleur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, age INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE couleur (id INT AUTO_INCREMENT NOT NULL, taille VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, email VARCHAR(100) NOT NULL, sujet VARCHAR(50) NOT NULL, etat TINYINT(1) DEFAULT NULL, message LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(50) DEFAULT NULL, prenom VARCHAR(50) DEFAULT NULL, name VARCHAR(255) NOT NULL, surname VARCHAR(255) NOT NULL, pseudo VARCHAR(200) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6612469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66C31BA576 FOREIGN KEY (couleur_id) REFERENCES couleur (id)');

        $this->addSql("INSERT INTO message (id, nom, email, sujet, etat, message) VALUES
        (1, 'lionel', 'lionel@contact.com', 'soucis1', 1, 'totto'),
        (2, 'toto', 'toto@contact.com', 'toto', 1, 'toto'),
        (3, 'message', 'message.retour@hotmaim.com', 'test retour', 1, 'test retour message'),
        (4, 'utilisateur3 Utilisateur3', 'utilisateur3@gmail.com', 'Slip', 1, 'bonsoir je trouve le prix du slip un peu cher . est-ce un slip usagé')");
        $this->addSql("INSERT INTO user (id, email, roles, password, nom, prenom, name, surname, pseudo) VALUES
        (1, 'test@test.com', '[\"ROLE_ADMIN\"]', '\$2y\$13\$RyC6qTuX5XUuN.3UcFf6oukAWk1VnVFXQEgg.H357NGxiAstm0OJq', 'User1', NULL, '', '', ''),
        (2, 'user2@test.com', '[]', '\$2y\$13\\$3vwhJXYA1lk61cVs.I6qS.mm3Jt6bJtH4JmLKmQ7AUzo91x5IO3HS', NULL, NULL, '', '', ''),
        (6, 'test3@test.com', '[]', '\$2y\$13\$2apoTMYCxK/Bd5bb53BySOMR8BFQ4fqezYBBTRclKa747tpG661sq', NULL, NULL, '', '', ''),
        (10, 'patoche@test.com', '[]', '\$2y\$13\$GsBTNKEJIFy9vBpnC1EL/OfT.Rsoz0v3o90nyrueAc0dCpYc9IqDG', NULL, NULL, '', '', ''),
        (11, 'serkan@test.com', '[]', '\$2y\$13\$gEyBdScwlct.fdOgA4hqGOkOzh0FpuXYvrdS.lMSNqeMzCgUpvcym', NULL, NULL, '', '', ''),
        (12, 'bastien@test.com', '[]', '\$2y\$13\$WwUOtloMNEth/48GEs9fQ.22ANf7PNP1p/j.HG15F4pSHk7TsdUYO', NULL, NULL, 'Bastien', '', ''),
        (13, 'frederic@test.com', '[]', '\$2y\$13\$L6lVOSEozvZYFpTmi3ymu.0DaZJDC9oM6LzEm34GJaPo6FmEZ1HcS', NULL, NULL, 'Frederic', 'Dugard', ''),
        (14, 'doudou@test.com', '[]', '\$2y\$13\$RY8CqP3Ru0dJ988W0QKzoevsRqrt.OAYWh9TrLQy1F.n5GVGQMTU2', NULL, NULL, 'didier', 'lord', ''),
        (15, 'maurice@test.com', '[]', '\$2y\$13\$Y9M8JooLMUJfhOI6E7b.meDfs0bch83QhIcNChs3Y8xrt3YemjtTK', NULL, NULL, 'Maurice', 'Loic', ''),
        (17, 'testuser@test.com', '[]', '\$2y\$13\$JaK2AGx53DUCVKa3Sb7JDu5Q8UCcAsax2O9BJDR4cR0t5H32d7LEe', NULL, NULL, 'test', 'user', ''),
        (18, 'nawak@test.com', '[]', '\$2y\$13\$WDMuRZJB/v0TjTtlPeB.1OTrZFHyobJWIjbWZLOla1r82yKZzX20K', NULL, NULL, 'nawak', 'nawak', ''),
        (19, 'test.error@gmail.com', '[]', '\$2y\$13\$/lrZO53zWJbXAE5afkqsd.x1mTidyLzRNsrmQWqZkm/BCuDLhr6Ha', NULL, NULL, 'error', 'error', ''),
        (20, 'utilisateur3@gmail.com', '[]', '\$2y\$13\$255gpiewfUBDX5U4YNLVtuBfoK1NeaPPo5/orcdMadEnNA3BsflM2', NULL, NULL, 'utilisateur3', 'Utilisateur3', ''),
        (21, 'pseudo@gmail.com', '[]', '\$2y\$13\$aLewvCr10YhQ2V5.bACZ.eOlWB/CacHwcb07CyjBPivyZZhuqYJ5W', NULL, NULL, 'pseudo1', 'pseudo1', 'pseudo1'),
        (22, 'admin@admin.com', '[\"ROLE_ADMIN\"]', '\$2y\$13\$Ye7ja6kU2vT0hO5VsFQxGuFmtt6AykN8IIj3W26QpzLg1FjfbioY6', 'admin', 'admin', 'admin', 'admin', 'admin')");
        $this->addSql("INSERT INTO category (id,name) VALUES
        (1, 'Casquette'),
        (2, 't-shirt'),
        (3, 'pantalon'),
        (4, 'slip'),
        (5, 'sweat'),
        (6, 'Débardeur')");
        
    
    }
    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E6612469DE2');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66C31BA576');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE couleur');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
