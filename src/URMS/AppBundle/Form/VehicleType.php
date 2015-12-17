<?php
/**
 * Created by PhpStorm.
 * User: Wiranji Dinelka
 * Date: 12/14/2015
 * Time: 4:00 PM
 */

namespace URMS\AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class VehicleType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('vehical', TextType::class)
            ->add('vehicalType',ChoiceType::class,array(
                'choices'=>$this->getVehicleTypes()
            ))
            ->add('capacity', TextType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'URMS\AppBundle\Entity\New_entity\Vehicle'
        ));
    }
    function getVehicleTypes(){
        return array(
            'Car'=>"CAR",
            'Van'=>"VAN",
            'Bus'=>"BUS",
            'Bicycle'=>"BICYCLE",
        );
    }
}