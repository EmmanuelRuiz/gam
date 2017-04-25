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
use Symfony\Component\Form\Extension\Core\Type\DateType;

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
                
                
                ->add('contextdescription', TextareaType::class, array(
                    'label' => 'Descripción detallada del sitio (tipo de hallazgo y descripción de contexto) - Site Detailed Description (Kind of Discovery and Context Description) ',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-contextdescription form-control'
                    )
                ))
                ->add('relevanttraits', TextType::class, array(
                    'label' => 'Rasgo relevantes (Relevant Traits)',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-relevanttraits form-control'
                    )
                ))
                ->add('preservationgeneral', TextType::class, array(
                    'label' => 'Condiciones generales de preservación (Preservation General Conditions) ',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-preservationgeneral form-control'
                    )
                ))
                ->add('alteration', TextareaType::class, array(
                    'label' => 'En caso de alguna alteración del contexto favor de explicar - (If any context alteration is visible please explain)',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-alteration form-control'
                    )
                ))
                
                
                
                ->add('technicaldescription', TextType::class, array(
                    'label' => 'Descripción técnica de sitio (Site Technical Description)',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-technicaldescription form-control'
                    )
                ))
                ->add('depth', TextType::class, array(
                    'label' => 'Profundidad (Depth)',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-depth form-control'
                    )
                ))
                
                ->add('horizontalpenetration', TextType::class, array(
                    'label' => 'Penetración horizontal en tiempo (Horizontal Penetration Time)',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-horizontalpenetration form-control'
                    )
                ))
                ->add('sitedimensions', TextType::class, array(
                    'label' => 'Dimensiones del sitio (Site Dimensions)',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-sitedimensions form-control'
                    )
                ))
                ->add('entrancedistance', TextType::class, array(
                    'label' => 'Distancia al ingreso más próximo (Closest Entrance Distance)',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-entrancedistance form-control'
                    )
                ))
                ->add('siteassociated', TextType::class, array(
                    'label' => 'Sitio asociado a (Site associated to)',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-siteassociated form-control'
                    )
                ))
                
                ->add('watersamples', TextType::class, array(
                    'label' => 'Colecta de muestras de agua (Water Samples Collection)',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-watersamples form-control'
                    )
                ))
                ->add('typeofwater', TextType::class, array(
                    'label' => 'Tipo de agua (Type of water)',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-typeofwater form-control'
                    )
                ))
                ->add('contact', TextType::class, array(
                    'label' => 'Datos de contacto: nombre, número telefónico y/o correo electrónico del dueño/responsable del predio. Contact: (Name, Phone Number and/or email of Owner/Land Responsible)',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-contact form-control'
                    )
                ))
                ->add('exploredby', TextType::class, array(
                    'label' => 'Explorado por: (Explored by:)  ',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-exploredby form-control'
                    )
                ))
                ->add('documentedby', TextType::class, array(
                    'label' => 'Documentado por: (numero telefónico y/o correo electrónico). Documented by: (Phone Number and / or email) ',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-documentedby form-control'
                    )
                ))
                ->add('inspectiondate', TextType::class, array(
                    'label' => 'Fecha de registro de sitio (Site Inspection Date) ',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-inspectiondate form-control'
                    )
                ))
                ->add('registrationby', TextType::class, array(
                    'label' => 'Registro realizado por (Registration by)',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-registrationby form-control'
                    )
                ))
                 ->add('sitecode', TextType::class, array(
                    'label' => 'Código del sitio',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-sitecode form-control'
                    )
                ))
                ->add('coordinates', TextType::class, array(
                    'label' => 'Coordenadas UTM',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-coordinates form-control'
                    )
                ))
                ->add('state', TextType::class, array(
                    'label' => 'Estado ',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-state form-control'
                    )
                ))
                ->add('townquintanaroo', TextType::class, array(
                    'label' => 'Municipios de Quintana Roo',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-townquintanaroo form-control'
                    )
                ))
                
                
                ->add('townyucatan', TextType::class, array(
                    'label' => 'Municipio de Yucatán ',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-townyucatan form-control'
                    )
                ))
                ->add('location', TextType::class, array(
                    'label' => 'Localidad',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-location form-control'
                    )
                ))
                ->add('characteristics', TextType::class, array(
                    'label' => 'Características del sitio',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-characteristics form-control'
                    )
                ))
                ->add('typeofcontext', TextType::class, array(
                    'label' => 'Tipo de contexto',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-typeofcontext form-control'
                    )
                ))
                
                
                ->add('conservationstatus', TextType::class, array(
                    'label' => 'Estado de conservación',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-conservationstatus form-control'
                    )
                ))
                ->add('flora', TextareaType::class, array(
                    'label' => 'Flora',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-flora form-control'
                    )
                ))
                ->add('fauna', TextareaType::class, array(
                    'label' => 'Fauna',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-fauna form-control'
                    )
                ))
                ->add('archaelements', TextType::class, array(
                    'label' => 'Presencia de elementos arqueológicos',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-archaelements form-control'
                    )
                ))
                ->add('whichelements', TextType::class, array(
                    'label' => 'En caso de presencia de elementos arqueológicos, señalar cuáles. ',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-whichelements form-control'
                    )
                ))
                ->add('archasurvey', TextType::class, array(
                    'label' => 'Prospección arqueológica',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-archasurvey form-control'
                    )
                ))
                ->add('touristactivities', TextType::class, array(
                    'label' => 'Presencia de actividades turísticas',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-touristactivities form-control'
                    )
                ))
                
                ->add('whichactivities', TextType::class, array(
                    'label' => 'En caso de actividad turística, señale cuáles.',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-whichactivities form-control'
                    )
                ))
                ->add('dateofanalisis', DateType::class, array(
                    'label' => 'Fecha de análisis',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-dateofanalisis form-control'
                    )
                ))
                ->add('temperature', TextType::class, array(
                    'label' => 'Temperatura',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-temperature form-control'
                    )
                ))
                ->add('turbidity', TextType::class, array(
                    'label' => 'Turbiedad',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-turbidity form-control'
                    )
                ))
                ->add('ph', TextType::class, array(
                    'label' => 'pH',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-ph form-control'
                    )
                ))
                ->add('ammonium', TextType::class, array(
                    'label' => 'Amonio',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-ammonium form-control'
                    )
                ))
                ->add('nitrites', TextType::class, array(
                    'label' => 'Nitritos',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-nitrites form-control'
                    )
                ))
                ->add('nitratos', TextType::class, array(
                    'label' => 'Nitratos',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-nitratos form-control'
                    )
                ))
                ->add('phosphates', TextType::class, array(
                    'label' => 'Fosfatos',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-phosphates form-control'
                    )
                ))
                ->add('hardness', TextType::class, array(
                    'label' => 'Dureza total CaCo3',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-hardness form-control'
                    )
                ))
                ->add('detergents', TextType::class, array(
                    'label' => 'Detergentes',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-detergents form-control'
                    )
                ))
                ->add('chlorine', TextType::class, array(
                    'label' => 'Cloro',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-chlorine form-control'
                    )
                ))
                ->add('coliforms', TextType::class, array(
                    'label' => 'Coliformes',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-coliforms form-control'
                    )
                ))
                ->add('observations', TextareaType::class, array(
                    'label' => 'Observaciones',
                    'required' => 'false',
                    'attr' => array(
                        'class' => 'form-observations form-control'
                    )
                ))
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
