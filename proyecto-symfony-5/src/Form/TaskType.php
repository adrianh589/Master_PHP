<?php

namespace App\Form;

use App\Entity\Task;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titulo'
            ])

            ->add('content', TextareaType::class, [
                'label' => 'Contenido'
            ])

            ->add('priority', ChoiceType::class, [
                'label' => 'Prioridad',
                'choices' => [
                    'Alta' => 'high',
                    'Media' => 'medium',
                    'Baja' => 'low'
                ]
            ])

            ->add('hours', IntegerType::class, [
                'label' => 'Horas presupuestadas'
            ])

            ->add('submit', SubmitType::class, [
                'label' => 'Guardar'
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
