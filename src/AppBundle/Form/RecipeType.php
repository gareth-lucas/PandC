<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RecipeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title')
        ->add('description')
        ->add('mealType')
        ->add('preparationTime', TimeType::class, [
            'required'=>false,
            'minutes'=>[0,5,10,15,20,25,30,35,40,45,50,55]
        ])
        ->add('cookingTime', TimeType::class, [
            'required'=>false,
            'minutes'=>[0,5,10,15,20,25,30,35,40,45,50,55]
        ])
        ->add('uploadedBy', HiddenType::class)
        ->add('creationDate', HiddenType::class)
        ->add('ingredientPreparationCollection', IngredientPreparationCollectionType::class)
        ->add('recipeStepCollection', RecipeStepCollectionType::class)
        ->add('imageCollection', ImageCollectionType::class)
        ->add('submit', SubmitType::class);
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
