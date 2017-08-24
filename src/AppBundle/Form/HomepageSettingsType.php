<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class HomepageSettingsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('timestamp', HiddenType::class)
        ->add('user', HiddenType::class)
        ->add('main_recipe')
        ->add('main_recipe_use_latest', CheckboxType::class, [
            "required"=>false,
            "label"=>"form.admin.homepage.main_use_latest"
        ])
        ->add('feature_one')
        ->add('feature_two')
        ->add('feature_three')
        ->add('feature_four')
        ->add('feature_recipes_use_latest', CheckboxType::class, [
            "required"=>false,
            "label"=>"form.admin.homepage.featured_use_latest"
        ])
        ->add('submit', SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\HomepageSettings'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_homepagesettings';
    }


}
