<?php

namespace App\Form\Type;

use App\DTO\RequestDTO;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RequestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Заголовок запроса',
                'attr' => ['placeholder' => 'Заголовок запроса']
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Текст запроса',
                'attr' => [
                    'placeholder' => 'Текст запроса',
                    'style' => 'height: 300px'
                ]
            ])
            ->add('save', SubmitType::class, ['label' => 'Добавить']);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RequestDTO::class
        ]);
    }
}
