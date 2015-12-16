<?php
namespace URMS\AppBundle\Form;
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
class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('userId', TextType::class)
            ->add('name', TextType::class)
            ->add('accessLevel',ChoiceType::class,array(
                'choices'=>$this->getAccessTypes()
            ))
            ->add('address', TextareaType::class)
            ->add('contactNo', NumberType::class)
            ->add('nicNo',TextType::class)
            ->add('userType',ChoiceType::class,array(
                'choices'=>$this->getUserTypes()
            ))
            ->add('Password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'URMS\AppBundle\Entity\New_entity\AddUser'
        ));
    }

    public function getAccessTypes(){
        return array(
            'User'=>"ROLE_USER",
            'Stuff'=>"ROLE_STUFF",
            'Student'=>"ROLE_STUDENT",
            'Admin'=>"ROLE_ADMIN",
            'Super Admin'=>"ROLE_SUPER_ADMIN",
        );
    }
    public  function getUserTypes(){
        return array(
            'Student'=>"STUDENT",
            'Stuff'=>"STUFF",
            'Admin'=>"ADMIN",
        );
    }
}