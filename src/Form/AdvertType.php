<?php

namespace App\Form;

use App\Entity\Advert;
use App\Entity\GrandDomaine;
use App\Entity\DomaineProfessionnel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AdvertType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('content', TextareaType::class, ['attr' => ['class' => 'md-textarea form-control']])
            ->add('grossSalaryPerHour')
            ->add('hourPerWeek')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Advert::class,
            "allow_extra_fields" => true
        ]);
    }
}
