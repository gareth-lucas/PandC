<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use AppBundle\Form\DataTransformer\IngredientToNameTransformer;

class IngredientPreparationType extends AbstractType
{
    private $transformer;
    
    public function __construct(IngredientToNameTransformer $transformer) {
        $this->transformer = $transformer;
    }

    /**
     *
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('quantity')
            ->add('uom')
            ->add('preparation')
            ->add('ingredient', TextType::class, [
                'invalid_message'=>'form.ingredientpreparation.error.unknown_ingredient'
            ]);
            
        $builder->get('ingredient')->addModelTransformer($this->transformer);
    }

    /**
     *
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\IngredientPreparation'
        ));
    }

    /**
     *
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_ingredientpreparation';
    }
}
