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
        ->add('main_recipe', null, ['label'=>'form.homepage.main_recipe'])
        ->add('main_recipe_use_latest', CheckboxType::class, [
            "required"=>false,
            "label"=>"form.homepage.main_use_latest"
        ])
        ->add('feature_one', null, ['label'=>'form.homepage.feature_one'])
        ->add('feature_two', null, ['label'=>'form.homepage.feature_two'])
        ->add('feature_three', null, ['label'=>'form.homepage.feature_three'])
        ->add('feature_four', null, ['label'=>'form.homepage.feature_four'])
        ->add('feature_recipes_use_latest', CheckboxType::class, [
            "required"=>false,
            "label"=>"form.homepage.featured_use_latest"
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
