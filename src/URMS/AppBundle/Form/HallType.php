<?php
/**
 * Created by PhpStorm.
 * User: Wiranji Dinelka
 * Date: 12/17/2015
 * Time: 7:05 AM
 */

namespace URMS\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class HallType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Hall_Type', ChoiceType::class,array(
                'choices'=>$this->getHallTypes()
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'URMS\AppBundle\Entity\New_entity\HallSearch'
        ));
    }

    public  function getHallTypes()
    {
        return array(
            "Exam Hall"=>'EXAMHALL',
            "Lecture Hall"=>"LECTUREHALL",
            "Lab"=>"LAB"
        );
    }
}