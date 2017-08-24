<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class RecipeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title')
        ->add('description')
        ->add('preparationTime', DateTimeType::class, [
            'required'=>false
        ])
        ->add('cookingTime', DateTimeType::class, [
            'required'=>false
        ])
        ->add('uploadedBy', HiddenType::class)
        ->add('creationDate', HiddenType::class)
        ->add('ingredientPreparationCollection', IngredientPreparationCollectionType::class)
        ->add('recipeStepCollection', RecipeStepCollectionType::class)
        ->add('imageCollection', ImageCollectionType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Recipe'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_recipe';
    }


}
