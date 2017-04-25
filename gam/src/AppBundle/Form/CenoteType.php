<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CenoteType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name', TextType::class, array(
                    'label' => 'Nombre del sitio (Site Name)',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-name form-control'
                    )
                ))
                ->add('entitiname', TextType::class, array(
                    'label' => 'Región (Entity Name)       ',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-entitiname form-control'
                    )
                ))
                ->add('keysite', TextType::class, array(
                    'label' => 'Clave del sitio (Key Site)',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-keysite form-control'
                    )
                ))
                ->add('coordinatesutm', TextType::class, array(
                    'label' => 'Coordenadas UTM (Coordinates UTM)',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-coordinatesutm form-control'
                    )
                ))
                ->add('kindofcontext', TextType::class, array(
                    'label' => 'Tipo de contexto (Kind of Context)',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-kindofcontext form-control'
                    )
                ))
                ->add('drycave', TextType::class, array(
                    'label' => 'En caso de cueva seca (In case of Dry Cave)',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-drycave form-control'
                    )
                ))
                ->add('equipment', TextType::class, array(
                    'label' => 'Equipo requerido (Equipment Needed)',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-equipment form-control'
                    )
                ))                
                ->add('contextdescription')
                ->add('relevanttraits')
                ->add('preservationgeneral')
                ->add('alteration')
                ->add('technicaldescription')
                ->add('depth')
                ->add('horizontalpenetration')
                ->add('sitedimensions')
                ->add('entrancedistance')
                ->add('siteassociated')
                ->add('watersamples')
                ->add('typeofwater')
                ->add('contact')
                ->add('exploredby')
                ->add('documentedby')
                ->add('inspectiondate')
                ->add('registrationby')
                ->add('sitecode')
                ->add('coordinates')
                ->add('state')
                ->add('townquintanaroo')
                ->add('townyucatan')
                ->add('location')
                ->add('characteristics')
                ->add('typeofcontext')
                ->add('conservationstatus')
                ->add('flora')
                ->add('fauna')
                ->add('archaelements')
                ->add('whichelements')
                ->add('archasurvey')
                ->add('touristactivities')
                ->add('whichactivities')
                ->add('dateofanalisis')
                ->add('temperature')
                ->add('turbidity')
                ->add('ph')
                ->add('ammonium')
                ->add('nitrites')
                ->add('nitratos')
                ->add('phosphates')
                ->add('hardness')
                ->add('detergents')
                ->add('chlorine')
                ->add('coliforms')
                ->add('observations')
                ->add('status')
                ->add('image')
                ->add('videoPath')
                ->add('createdAt')
                ->add('updatedAt')
                ->add('user')
                ->add('Guardar', SubmitType::class, array(
                    "attr" => array(
                        "class" => "btn btn-success"
                    )
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\Cenote'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'backendbundle_cenote';
    }

}
