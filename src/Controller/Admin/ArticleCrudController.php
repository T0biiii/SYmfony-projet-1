<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;


class ArticleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Article::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        yield AssociationField::new('category');
        yield TextField::new('Nom');
        yield MoneyField::new('Prix')->setCurrency('EUR');
        yield TextField::new('Description');
        yield TextField::new('Image');
        yield TextField::new('Marque');
        yield BooleanField::new('Etat');
        yield TextField::new('Couleur');
        yield TextField::new('Taille');
        yield TextField::new('Img');

        
    }
    
}
