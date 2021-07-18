<?php

namespace App\Form;

use App\Entity\Task;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameTask')
            ->add('summaryTask')
            // ->add('dateTask')
            ->add('deadlineTask')

            ->add('status', IntegerType::class,[
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un chiffre enre 0 et 1',
                    ]),
                    new Length([
                        'min' => 1,
                        'minMessage' => 'Veuillez entrer un chiffre valide (0 ou 1)',
                        // max length allowed by Symfony for security reasons
                        'max' => 1,
                    ]),     
                ],
             ])
         ;
     }
         
        
                

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Task::class,
        ]);
    }
}
