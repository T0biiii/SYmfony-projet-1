<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221205075712 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO article (id, nom, prix, description, image, categorie, marque, etat, couleur, taille, img) VALUES
        (1, 'T-Shirt', 80, 'T-Shirt North Face en bonne état', '\"url\"', 'T-Shirt', 'The North Face', 1, NULL, '', 'article_1.jfif'),
        (2, 'Sweat Noir Adidas', 50, 'Sweat Noir Adidas en état moyen, il y à un trous sur le coude gauche', '\"url\"', 'Sweat', 'Adidas', 1, NULL, '', 'article_2.jfif'),
        (3, 'Slip Gucci', 120, 'Slip Gucci utilisé que 2 fois', '\"url\"', 'Slip', 'Gucci', 0, 'Orange et bleu', 'L', 'article_3.jpg'),
        (4, 'Casquette North Face', 80, 'Casquette North Face noir', '\"url\"', 'Casquette', 'North Face', 0, 'Noir', 'M', 'article_4.jfif'),
        (5, 'Débardeur', 50, 'Débardeur blanc', '\"url\"', 'Débardeur', 'Decathelon', 0, 'blanc', 'S', 'article_5.jfif'),
        (6, 'T-SHirt', 80, 'T-shirt', '\"url\"', 't-shirt', 'azaza', 0, 'zazaz', 'M', 'article_6.jfif'),
        (7, 'pantalon melon', 90, 'pantalon melon', 'image', 'pantalon', 'melon', 1, 'marron', 'm', 'img'),
        (8, 'test', 80, 'test', 'test', 'test', 'test', 1, 'test', 'test', 'test')");
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
    } 

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE user');
    }
}
