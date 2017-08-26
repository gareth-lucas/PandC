<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class RecipeStepCollectionType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('recipeSteps', CollectionType::class, [
            'entry_type'=>RecipeStepType::class,
            'allow_add'=>true,
            'label'=>'form.recipe.recipe_step_collection.recipe_steps'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\RecipeStepCollection'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_recipestepcollection';
    }


}
