<?php
/**
 * Created by PhpStorm.
 * User: Madhavi Ruwandika
 * Date: 12/14/2015
 * Time: 3:59 PM
 */

namespace URMS\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ResourceType extends AbstractType

{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('hallNo', TextType::class)
            ->add('type', TextType::class)
            ->add('owner', TextType::class)
            ->add('capacity', TextType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'URMS\AppBundle\Entity\New_entity\Hall'
        ));
    }


}