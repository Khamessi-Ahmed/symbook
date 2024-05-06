<?php

namespace App\Form;

use App\Entity\Categories;
use App\Entity\Livres;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LivreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('isbn')
            ->add('slug')
            ->add('image')
            ->add('resume')
            ->add('editeur')
            ->add('editedAt')
            ->add('prix')
            ->add('Qte')
            ->add('Auteur')
            ->add('categorie', EntityType::class, [
                'class' => Categories::class,
                'choice_label' => 'libelle',
            ])
            ->add('Enregistrer', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livres::class,
        ]);
    }
}
