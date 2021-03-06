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
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CenoteType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //$roles = ['w w', 'w 22', 'qq 3'];
        $builder
                ->add('name', TextType::class, array(
                    'label' => 'Nombre del sitio (Site Name)',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-name form-control',
                        'placeholder' => 'Nombre del sitio'
                    )
                ))
                ->add('entitiname', ChoiceType::class, array(
                    'choices' => array(
                        'Quintana Roo' => 'Quintana Roo',
                        'Yucatán' => 'Yucatán',
                        'Campeche' => 'Campeche',
                        'Otra' => 'Otra'
                    ),
                    'multiple' => true,
                    'expanded' => true,
                    'label' => false,
                    'required' => null,
                    'attr' => array(
                        'class' => ' hidden form-entitiname form-control',
                    )
                ))
                ->add('keysite', ChoiceType::class, array(
                    'choices' => array(
                        'Q1: Bacalar' => 'Q1: Bacalar',
                        'Q2: Dzulá, Felipe Carillo Puerto, José Maria Morelos' => 'Q2: Dzulá, Felipe Carillo Puerto, José Maria Morelos',
                        'Q3: Chumpón, Muyil, Tulum' => 'Q3: Chumpón, Muyil, Tulum',
                        'Q4: Cobá, Laguna Chabela' => 'Q4: Cobá, Laguna Chabela',
                        'Q5: Kantunilkin' => 'Q5: Kantunilkin',
                        'Y1: Tinum' => 'Y1: Tinum',
                        'Q6: Cancún, Puerto Morelos' => 'Q6: Cancún, Puerto Morelos',
                        'Q7: Playa del Carmen, Puerto Venturas, Akumal' => 'Q7: Playa del Carmen, Puerto Venturas, Akumal',
                        'Otra' => 'Otra'
                    ),
                    'multiple' => true,
                    'expanded' => true,
                    'label' => false,
                    'required' => null,
                    'attr' => array(
                        'class' => 'hidden form-keysite form-control'
                    )
                ))
                ->add('coordinatesutm', TextType::class, array(
                    'label' => 'Coordenadas UTM (Coordinates UTM)',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-coordinatesutm form-control',
                        'placeholder' => 'Coordenadas UTM'
                    )
                ))
                ->add('kindofcontext', ChoiceType::class, array(
                    'choices' => array(
                        'Cenote abierto (Open Cenote)' => 'Cenote abierto (Open Cenote)',
                        'Cenote con acceso restringido (Restricted Access Cenote)' => 'Cenote con acceso restringido (Restricted Access Cenote)',
                        'Cenote profundo (Deep Cenote)' => 'Cenote profundo (Deep Cenote)',
                        'Noria (Colonial Water Well)' => 'Noria (Colonial Water Well)',
                        'Laguna (Lagoon)' => 'Laguna (Lagoon)',
                        'Ría (Estuary)' => 'Ría (Estuary)',
                        'Cueva seca (Dry Cave)' => 'Cueva seca (Dry Cave)',
                        'Otra' => 'Otra'
                    ),
                    'multiple' => true,
                    'expanded' => true,
                    'label' => false,
                    'required' => null,
                    'attr' => array(
                        'class' => 'hidden form-kindofcontext form-control'
                    )
                ))
                ->add('drycave', ChoiceType::class, array(
                    'choices' => array(
                        'Con descenso vertical (Vertical Descend)' => 'Con descenso vertical (Vertical Descend)',
                        'Con penetración horizontal (Horizontal Penetration)' => 'Con penetración horizontal (Horizontal Penetration)',
                        'Con cuerpos de agua (Shafts)' => 'Con cuerpos de agua (Shafts)',
                        'Parcialmente inundada (Partial Floated)' => 'Parcialmente inundada (Partial Floated)',
                        'Otra' => 'Otra'
                    ),
                    'multiple' => true,
                    'expanded' => true,
                    'label' => false,
                    'required' => null,
                    'attr' => array(
                        'class' => 'hidden form-drycave form-control'
                    )
                ))
                ->add('equipment', TextType::class, array(
                    'label' => 'Equipo requerido (Equipment Needed)',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-equipment form-control'
                    )
                ))
                ->add('contextdescription', TextareaType::class, array(
                    'label' => 'Descripción detallada del sitio (tipo de hallazgo y descripción de contexto) - Site Detailed Description (Kind of Discovery and Context Description) ',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-contextdescription form-control'
                    )
                ))
                ->add('relevanttraits', ChoiceType::class, array(
                    'choices' => array(
                        'Cerámica (Ceramics)' => 'Cerámica (Ceramics)',
                        'Restos óseos humanos (Human Bones)' => 'Restos óseos humanos (Human Bones)',
                        'Restos óseos de fauna (Animal Bones)' => 'Restos óseos de fauna (Animal Bones)',
                        'Montículos de piedras (Maya structures / Mounts / Hills)' => 'Montículos de piedras (Maya structures / Mounts / Hills)',
                        'Altares (Altars)' => 'Altares (Altars)',
                        'Muros bajos de piedras (Low Stone Walls)' => 'Muros bajos de piedras (Low Stone Walls)',
                        'Petrograbados (Petroglyphs)' => 'Petrograbados (Petroglyphs)',
                        'Grafico rupestre (Hand Prints)' => 'Grafico rupestre (Hand Prints)',
                        'Pintura mural (Maya painting / Maya Glyphs)' => 'Pintura mural (Maya painting / Maya Glyphs)',
                        'Fauna pleistocénica (Pleistocenic Fauna)' => 'Fauna pleistocénica (Pleistocenic Fauna)',
                        'Carbón (Charcoal)' => 'Carbón (Charcoal)',
                        'Otra' => 'Otra'
                    ),
                    'multiple' => true,
                    'expanded' => true,
                    'label' => false,
                    'required' => null,
                    'attr' => array(
                        'class' => 'hidden form-relevanttraits form-control'
                    )
                ))
                ->add('preservationgeneral', ChoiceType::class, array(
                    'choices' => array(
                        'Alterado (Altered)' => 'Alterado (Altered)',
                        'No alterado (Non Altered)' => 'No alterado (Non Altered)',
                        'Otra' => 'Otra'
                    ),
                    'multiple' => true,
                    'expanded' => true,
                    'label' => false,
                    'required' => null,
                    'attr' => array(
                        'class' => 'hidden form-preservationgeneral form-control'
                    )
                ))
                ->add('alteration', TextareaType::class, array(
                    'label' => 'En caso de alguna alteración del contexto favor de explicar - (If any context alteration is visible please explain)',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-alteration form-control'
                    )
                ))
                ->add('technicaldescription', ChoiceType::class, array(
                    'choices' => array(
                        'Mapeado (Mapped)' => 'Mapeado (Mapped)',
                        'No mapeado (Not Mapped)' => 'No mapeado (Not Mapped)'
                    ),
                    'multiple' => true,
                    'expanded' => true,
                    'label' => false,
                    'required' => null,
                    'attr' => array(
                        'class' => 'hidden form-technicaldescription form-control'
                    )
                ))
                ->add('depth', TextType::class, array(
                    'label' => 'Profundidad (Depth)',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-depth form-control'
                    )
                ))
                ->add('horizontalpenetration', TextType::class, array(
                    'label' => 'Penetración horizontal en tiempo (Horizontal Penetration Time)',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-horizontalpenetration form-control'
                    )
                ))
                ->add('sitedimensions', TextType::class, array(
                    'label' => 'Dimensiones del sitio (Site Dimensions)',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-sitedimensions form-control'
                    )
                ))
                ->add('entrancedistance', TextType::class, array(
                    'label' => 'Distancia al ingreso más próximo (Closest Entrance Distance)',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-entrancedistance form-control'
                    )
                ))
                ->add('siteassociated', ChoiceType::class, array(
                    'choices' => array(
                        'Asentamiento urbano (Urban Settlement)' => 'Asentamiento urbano (Urban Settlement)',
                        'Sitio arqueológico (Archeological Site)' => 'Sitio arqueológico (Archeological Site)',
                        'Sitio Colonial (Colonial Site)' => 'Sitio Colonial (Colonial Site)',
                        'Cuerpos de agua (Aquifers)' => 'Cuerpos de agua (Aquifers)',
                        'Línea de costa (Coast Line)' => 'Línea de costa (Coast Line)',
                        'Ninguno (Non)' => 'Ninguno (Non)',
                        'Otra' => 'Otra'
                    ),
                    'multiple' => true,
                    'expanded' => true,
                    'label' => false,
                    'required' => null,
                    'attr' => array(
                        'class' => 'hidden form-siteassociated form-control'
                    )
                ))
                ->add('watersamples', ChoiceType::class, array(
                    'choices' => array(
                        'Superficial (Surface)' => 'Superficial (Surface)',
                        'Entre 5 y 10 metros (Between 5 to 10 meters depth)' => 'Entre 5 y 10 metros (Between 5 to 10 meters depth)',
                        'Entre 10 y 20 metros (Between 10 to 20 meters depth)' => 'Entre 10 y 20 metros (Between 10 to 20 meters depth)',
                        'Entre 20 y 30 metros (Between 20 to 30 meters depth)' => 'Entre 20 y 30 metros (Between 20 to 30 meters depth)',
                        'Entre 30 y 40 metros (Between 30 to 40 meters depth)' => 'Entre 30 y 40 metros (Between 30 to 40 meters depth)',
                        'Entre 40 y 50 metros (Between 40 to 50 meters depth)' => 'Entre 40 y 50 metros (Between 40 to 50 meters depth)',
                        'A favor de la corriente o flujo de agua (Downstream)' => 'A favor de la corriente o flujo de agua (Downstream)',
                        'En contra de corriente o flujo de agua (Upstream)' => 'En contra de corriente o flujo de agua (Upstream)'
                    ),
                    'multiple' => true,
                    'expanded' => true,
                    'label' => false,
                    'required' => null,
                    'attr' => array(
                        'class' => 'hidden form-watersamples form-control'
                    )
                ))
                ->add('typeofwater', ChoiceType::class, array(
                    'choices' => array(
                        'Dulce (Fresh Water))' => 'Dulce (Fresh Water)',
                        'Salada (Salt Water)' => 'Salada (Salt Water)',
                        'Haloclina (Halocline)' => 'Haloclina (Halocline)',
                        'Tánica (Tannic)' => 'Tánica (Tannic)',
                        'Ácido Sulfhídrico (Hydrogen Sulfide)' => 'Ácido Sulfhídrico (Hydrogen Sulfide)',
                        'Otra' => 'Otra'
                    ),
                    'multiple' => true,
                    'expanded' => true,
                    'label' => false,
                    'required' => null,
                    'attr' => array(
                        'class' => 'hidden form-typeofwater form-control'
                    )
                ))
                ->add('contact', TextType::class, array(
                    'label' => 'Datos de contacto: nombre, número telefónico y/o correo electrónico del dueño/responsable del predio. Contact: (Name, Phone Number and/or email of Owner/Land Responsible)',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-contact form-control'
                    )
                ))
                ->add('exploredby', TextType::class, array(
                    'label' => 'Explorado por: (Explored by:)  ',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-exploredby form-control'
                    )
                ))
                ->add('documentedby', TextType::class, array(
                    'label' => 'Documentado por: (numero telefónico y/o correo electrónico). Documented by: (Phone Number and / or email) ',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-documentedby form-control'
                    )
                ))
                ->add('inspectiondate', DateType::class, array(
                    'label' => 'Fecha de registro de sitio (Site Inspection Date) ',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-inspectiondate form-control'
                    )
                ))
                ->add('registrationby', TextType::class, array(
                    'label' => 'Registro realizado por (Registration by)',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-registrationby form-control'
                    )
                ))
                ->add('sitecode', TextType::class, array(
                    'label' => 'Código del sitio',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-sitecode form-control'
                    )
                ))
                ->add('coordinates', TextType::class, array(
                    'label' => 'Coordenadas UTM',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-coordinates form-control'
                    )
                ))
                ->add('state', ChoiceType::class, array(
                    'choices' => array(
                        'Quintana Roo' => 'Quintana Roo',
                        'Yucatán' => 'Yucatán',
                        'Campeche' => 'Campeche'
                    ),
                    'label' => 'Estado ',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-state form-control'
                    )
                ))
                ->add('townquintanaroo', ChoiceType::class, array(
                    'choices' => array(
                        'Bacalar' => 'Quintana Roo',
                        'Benito Juarez' => 'Benito Juarez',
                        'Felipe Carrillo Puerto' => 'Felipe Carrillo Puerto',
                        'Jose Maria Morelos' => 'Jose Maria Morelos',
                        'Othon P. Blanco' => 'Othon P. Blanco',
                        'Tulum' => 'Tulum',
                        'Solidaridad' => 'Solidaridad',
                        'Lazaro Cardenas' => 'Lazaro Cardenas'
                    ),
                    'label' => 'Municipios de Quintana Roo',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-townquintanaroo form-control'
                    )
                ))
                ->add('townyucatan', TextType::class, array(
                    'label' => 'Municipio de Yucatán ',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-townyucatan form-control'
                    )
                ))
                ->add('location', TextType::class, array(
                    'label' => 'Localidad',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-location form-control'
                    )
                ))
                ->add('characteristics', TextType::class, array(
                    'label' => 'Características del sitio',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-characteristics form-control'
                    )
                ))
                ->add('typeofcontext', ChoiceType::class, array(
                    'choices' => array(
                        'Cenote abierto' => 'Cenote abierto',
                        'Cenote con acceso restringido' => 'Cenote con acceso restringido',
                        'Cenote profundo' => 'Cenote profundo',
                        'Noria' => 'Noria',
                        'Laguna' => 'Laguna',
                        'Estuario' => 'Estuario',
                        'Cueva seca' => 'Cueva seca',
                        'Acuífero a nivel superficial' => 'Acuífero a nivel superficial',
                        'Cueva profunda' => 'Cueva profunda',
                        'Cueva con penetración' => 'Cueva con penetración',
                        'Otra' => 'Otra'
                    ),
                    'multiple' => true,
                    'expanded' => true,
                    'label' => false,
                    'required' => null,
                    'attr' => array(
                        'class' => 'hidden form-typeofcontext form-control'
                    )
                ))
                ->add('conservationstatus', ChoiceType::class, array(
                    'choices' =>  array(
                        'Natural, bien preservado' => 'Natural, bien preservado',
                        'Sitio urbanizado' => 'Sitio urbanizado',
                        'Poca influencia de actividades humanas' => 'Poca influencia de actividades humanas',
                        'Alta influencia de actividades humanas' => 'Alta influencia de actividades humanas',
                        'Baja presencia de contaminantes' => 'Baja presencia de contaminantes',
                        'Alta presencia de contaminantes' => 'Alta presencia de contaminantes',
                        'Otra' => 'Otra'
                    ),
                    'multiple' => true,
                    'expanded' => true,
                    'label' => false,
                    
                    'required' => null,
                    'attr' => array(
                        'class' => 'hidden form-conservationstatus form-control'
                    )
                ))
                ->add('flora', TextareaType::class, array(
                    'label' => 'Flora',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-flora form-control'
                    )
                ))
                ->add('fauna', TextareaType::class, array(
                    'label' => 'Fauna',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-fauna form-control'
                    )
                ))
                ->add('archaelements', ChoiceType::class, array(
                    'label' => 'Presencia de elementos arqueológicos',
                    'choices' => array(
                      'Sí' => 'Sí',
                      'No' => 'No'
                    ),
                    
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-archaelements form-control'
                    )
                ))
                ->add('whichelements', ChoiceType::class, array(
                    'choices' => array(
                        'Altar' => 'Altar',
                        'Alineamientos de piedra' => 'Alineamientos de piedra',
                        'Montículos' => 'Montículos',
                        'Petroglifos' => 'Petroglifos',
                        'Gráfico rupestre' => 'Gráfico rupestre',
                        'Fauna pleistocénica' => 'Fauna pleistocénica',
                        'Restos óseos humanos' => 'Restos óseos humanos',
                        'Cerámica' => 'Cerámica',
                        'Restos óseos de fauna' => 'Restos óseos de fauna',
                        'Muros' => 'Muros',
                        'Otra' => 'Otra'
                            ),
                    'multiple' => true,
                    'expanded' => true,
                    'label' => false,
                    'required' => null,
                    'attr' => array(
                        'class' => 'hidden form-whichelements form-control'
                    )
                ))
                ->add('archasurvey', ChoiceType::class, array(
                    'choices' => array(
                        'Sí' => 'Sí',
                        'No' => 'No',
                        'Pendiente' => 'Pendiente'
                    ),
                    'label' => 'Prospección arqueológica',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-archasurvey form-control'
                    )
                ))
                ->add('touristactivities', ChoiceType::class, array(
                    'choices' => array(
                      'Sí' => 'Sí',
                        'No' => 'No'
                    ),
                    'label' => 'Presencia de actividades turísticas',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-touristactivities form-control'
                    )
                ))
                ->add('whichactivities', ChoiceType::class, array(
                    'choices' => array(
                        'Buceo' => 'Buceo',
                        'Campamento' => 'Campamento',
                        'Asociado a sitio Arqueológico' => 'Asociado a sitio Arqueológico',
                        'Espeleología' => 'Espeleología',
                        'Nado en cenotes' => 'Nado en cenotes',
                        'Observación de flora y fauna' => 'Observación de flora y fauna',
                        'Pesca' => 'Pesca',
                        'Paseos a pie, en bicicleta o motos.' => 'Paseos a pie, en bicicleta o motos.',
                        'Recorridos en Kayak, canoa o lancha.' => 'Recorridos en Kayak, canoa o lancha.',
                        'Otra' => 'Otra',
                    ),
                    'multiple' => true,
                    'expanded' => true,
                    'required' => null,
                    'label' => false,
                    'attr' => array(
                        'class' => 'hidden form-whichactivities form-control'
                    )
                ))
                ->add('dateofanalisis', DateType::class, array(
                    'label' => 'Fecha de análisis',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-dateofanalisis form-control'
                    )
                ))
                ->add('temperature', ChoiceType::class, array(
                    'label' => 'Temperatura',
                    'choices' => array(
                        '24°C' => '24°C',
                        '25°C' => '25°C',
                        '26°C' => '26°C',
                        '27°C' => '27°C',
                        '28°C' => '28°C',
                        '29°C' => '29°C',
                        '30°C' => '30°C',
                        '31°C' => '31°C',
                        '32°C' => '32°C',
                        '33°C' => '33°C',
                        '34°C' => '34°C',
                        '35°C' => '35°C',
                        '36°C' => '36°C',
                        '37°C' => '37°C',
                        '38°C' => '38°C',
                        '39°C' => '39°C',
                        '40°C' => '40°C',
                        '41°C' => '41°C',
                        '42°C' => '42°C',
                        '43°C' => '43°C',
                        '44°C' => '44°C',
                        '45°C' => '45°C',
                    ),
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-temperature form-control'
                    )
                ))
                ->add('turbidity', ChoiceType::class, array(
                    'choices' => array(
                        'Aguas claras (AC)' => 'Aguas claras (AC)',
                        'Turbiedad media (TM)' => 'Turbiedad media (TM)',
                        'Turbiedad alta (TA)' => 'Turbiedad alta (TA)',
                        
                    ),
                    'label' => 'Turbiedad',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-turbidity form-control'
                    )
                ))
                ->add('ph', TextType::class, array(
                    'label' => 'pH',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-ph form-control'
                    )
                ))
                ->add('ammonium', TextType::class, array(
                    'label' => 'Amonio',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-ammonium form-control'
                    )
                ))
                ->add('nitrites', TextType::class, array(
                    'label' => 'Nitritos',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-nitrites form-control'
                    )
                ))
                ->add('nitratos', TextType::class, array(
                    'label' => 'Nitratos',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-nitratos form-control'
                    )
                ))
                ->add('phosphates', TextType::class, array(
                    'label' => 'Fosfatos',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-phosphates form-control'
                    )
                ))
                ->add('hardness', TextType::class, array(
                    'label' => 'Dureza total CaCo3',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-hardness form-control'
                    )
                ))
                ->add('detergents', ChoiceType::class, array(
                    'label' => 'Detergentes',
                    'choices' => array(
                        'Positivo' => 'Positivo',
                        'Negativo' => 'Negativo',
                        'Ninguno' => 'Ninguno'
                    ),
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-detergents form-control'
                    )
                ))
                ->add('chlorine', ChoiceType::class, array(
                    'label' => 'Cloro',
                    'choices' => array(
                        'Positivo' => 'Positivo',
                        'Negativo' => 'Negativo',
                        'Ninguno' => 'Ninguno'
                    ),
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-chlorine form-control'
                    )
                ))
                ->add('coliforms', ChoiceType::class, array(
                    'label' => 'Coliformes',
                    'choices' => array(
                        'Positivo' => 'Positivo',
                        'Negativo' => 'Negativo',
                        'Ninguno' => 'Ninguno'
                    ),
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-coliforms form-control'
                    )
                ))
                ->add('observations', TextareaType::class, array(
                    'label' => 'Observaciones',
                    'required' => null,
                    'attr' => array(
                        'class' => 'form-observations form-control'
                    )
                ))
                ->add('status', ChoiceType::class, array(
                    'label' => 'Estatus',
                    'choices' => array(
                        'Disponible' => 'Disponible',
                        'Oculto' => 'Oculto'
                    ),
                    'required' => 'true',
                    'attr' => array(
                        'class' => 'form-status form-control'
                    )
                ))
                ->add('image', FileType::class, array(
                    'label' => 'Foto de muestra del cenote',
                    'required' => false,
                    'data_class' => null,
                    'attr' => array(
                        'class' => 'form-image form-control'
                    )
                ))
                ->add('Guardar', SubmitType::class, array(
                    "attr" => array(
                        "class" => "btn btn-success btn-lg btn-block"
                    )
        ));
    }

    /**
     *                
      ->add('videoPath')
      ->add('createdAt')
      ->add('updatedAt')
      ->add('user')
     */

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\Cenote'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backendbundle_cenote';
    }

}
