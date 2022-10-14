<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,['label' => false])
            ->add('email', EmailType::class,['label' => false])
            ->add('surname', TextType::class,['label' => false])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            /* ->add('plainPassword', RepeatedType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 1,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ]) */

            ->add('password', RepeatedType::class, [
                    'type' => PasswordType::class,
                    'invalid_message' => 'Les mots de passe ne sont pas identique.',
                    'options' => ['attr' => ['class' => 'password-field']],
                    'required' => true,
                    'first_options'  => ['label' => 'Mot de passe'],
                    'second_options' => ['label' => 'Valider mot de passe'],
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Veuillez rentrez un mot de passe.',
                        ]),
                        new Length([
                            'min' => 6,
                            'minMessage' => 'Votre mot de passe doit contenir au miimum {{ limit }} characters',
                            // max length allowed by Symfony for security reasons
                            'max' => 4096,
                        ]),
                        new Regex([
                            'pattern' => '/[A-Z]/',
                            'match' => true,
                            'message' => 'Vous devez mettre une majuscule',
                        ]),
                        new Regex([
                            'pattern' => '/[a-z]/',
                            'match' => true,
                            'message' => 'Vous devez mettre une minuscule',
                        ]),
                        new Regex ([
                            'pattern' => '/[\d]/',
                            'match' => true,
                            'message' => 'Vous devez mettre un chiffre',
                        ]),
                        new Regex ([
                            'pattern' => '/[!?#]/',
                            'match' => true,
                            'message' => 'Vous devez mettre un charactere special',
                        ]),
                    ],
                ])


            ->add('name', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Confirmer votre Nom'
                    ]),
                    new Length([
                        'min' => 1,
                        'minMessage' => 'Votre Nom de doit pas dépasser {{ limit }} mots.',
                        'max' => 4096,
                    ]),
                ], 
            ])

            ->add('surname', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Confirmer votre Nom'
                    ]),
                    new Length([
                        'min' => 1,
                        'minMessage' => 'Votre Nom de doit pas dépasser {{ limit }} mots.',
                        'max' => 4096,
                    ]),
                ], 
            ])

            ->add('email', EmailType::class)
        ;
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
