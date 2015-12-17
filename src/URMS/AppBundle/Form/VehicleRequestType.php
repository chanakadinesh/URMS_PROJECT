<?php
/**
 * Created by PhpStorm.
 * User: Madhavi Ruwandika
 * Date: 12/16/2015
 * Time: 9:35 PM
 */

namespace URMS\AppBundle\Form;


use Doctrine\DBAL\Types\DateType;
use Doctrine\DBAL\Types\TimeType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class VehicleRequestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

           ->add('VehicleType', ChoiceType::class, array(
               'choices'  => array(
                   'Bus' => "BUS",
                   'Van' => "VAN",
                   'Car' => "CAR",
                   'Bicycle'=>"BICYCLE",
               ),
               // *this line is important*
               'choices_as_values' => true,
           ));
       /*
            ->add('Date',TextType::class)
            ->add('Capacity',NumberType::class)
            ->add('Route',TextareaType::class);
        */
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'URMS\AppBundle\Entity\New_entity\RequestVehicle'
        ));
    }


}