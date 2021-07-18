<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       
        $builder
        ->add('firstname', TextType::class,[
            'constraints' => [
                new NotBlank([
                    'message' => 'Veuillez entrer un prénom',
                ]),
                new Length([
                    'min' => 2,
                    'minMessage' => 'Veuillez entrer un prénom valide (2-30)',
                    // max length allowed by Symfony for security reasons
                    'max' => 30,
                ]),
            ]
        ])
        ->add('lastname', TextType::class,[
            'constraints' => [
                new NotBlank([
                    'message' => 'Veuillez entrer un nom',
                ]),
                new Length([
                    'min' => 2,
                    'minMessage' => 'Veuillez entrer un nom valide (2-30)',
                    // max length allowed by Symfony for security reasons
                    'max' => 30,
                ]),
            ]
        ])
        ->add('email')
        ->add('agreeTerms', CheckboxType::class, [
            'mapped' => false,
            'constraints' => [
                new IsTrue([
                    'message' => 'Accepter les conditions pour s\'enregistrer',
                ]),
            ],
        ])
        ->add('plainPassword', PasswordType::class, [
            // instead of being set onto the object directly,
            // this is read and encoded in the controller
            'mapped' => false,
            'attr' => ['autocomplete' => 'new-password'],
            'constraints' => [
                new NotBlank([
                    'message' => 'Please enter a password',
                ]),
                new Length([
                    'min' => 6,
                    'minMessage' => 'Your password should be at least {{ limit }} characters',
                    // max length allowed by Symfony for security reasons
                    'max' => 4096,
                ]),
            ],
        ])
    ;
}

public function configureOptions(OptionsResolver $resolver)
{
    $resolver->setDefaults([
        'data_class' => User::class,
    ]);
}
}
