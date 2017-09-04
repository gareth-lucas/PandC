<?php
namespace AppBundle\Form;

use AppBundle\Entity\Image;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ImageType extends AbstractType
{

    /**
     *
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('image', FileType::class, [
            'label' => 'form.image.image',
            'required' => false
        ])
            ->add('imageCaption', null, [
            'label' => 'form.image.caption'
        ])
            ->add('imageCopyright', null, [
            'label' => 'form.image.copyright'
        ])
            ->add('imageFilepath', HiddenType::class)
            ->add('imageSize', HiddenType::class)
            ->add('submit', SubmitType::class);
    }

    /**
     *
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Image',
            'validation_groups' => function (FormInterface $form) {
                $data = $form->getData();
                
                if ($data->getId() !== null) {
                    return [
                        "modification"
                    ];
                }
                
                return [
                    "Default"
                ];
            }
        ));
    }

    /**
     *
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_image';
    }
}
