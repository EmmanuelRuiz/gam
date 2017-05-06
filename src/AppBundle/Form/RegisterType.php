<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RegisterType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('name', TextType::class, array(
                    'label' => 'Nombre',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-name form-control'
                    )
                ))
                ->add('plastname', TextType::class, array(
                    'label' => 'Apellido Paterno',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-plastname form-control'
                    )
                ))
                ->add('mlastname', TextType::class, array(
                    'label' => 'Apellido Materno',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-mlastname form-control'
                    )
                ))
                ->add('email', EmailType::class, array(
                    'label' => 'Correo Electronico',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-email form-control email-input'
                    )
                ))
                ->add('password', PasswordType::class, array(
                    'label' => 'Constraseña',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-password form-control'
                    )
                ))
                ->add('Registrarse', SubmitType::class, array(
                    "attr" => array(
                        "class" => "form-submit btn btn-success"
                    )
                ))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backendbundle_user';
    }


}
