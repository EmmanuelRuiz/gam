<?php

namespace BackendBundle\Entity;

/**
 * Cenote
 */
class Cenote
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $entitiname;

    /**
     * @var string
     */
    private $keysite;

    /**
     * @var string
     */
    private $coordinatesutm;

    /**
     * @var string
     */
    private $kindofcontext;

    /**
     * @var string
     */
    private $drycave;

    /**
     * @var string
     */
    private $equipment;

    /**
     * @var string
     */
    private $contextdescription;

    /**
     * @var string
     */
    private $relevanttraits;

    /**
     * @var string
     */
    private $preservationgeneral;

    /**
     * @var string
     */
    private $alteration;

    /**
     * @var string
     */
    private $technicaldescription;

    /**
     * @var string
     */
    private $depth;

    /**
     * @var string
     */
    private $horizontalpenetration;

    /**
     * @var string
     */
    private $sitedimensions;

    /**
     * @var string
     */
    private $entrancedistance;

    /**
     * @var string
     */
    private $siteassociated;

    /**
     * @var string
     */
    private $watersamples;

    /**
     * @var string
     */
    private $typeofwater;

    /**
     * @var string
     */
    private $contact;

    /**
     * @var string
     */
    private $exploredby;

    /**
     * @var string
     */
    private $documentedby;

    /**
     * @var \DateTime
     */
    private $inspectiondate;

    /**
     * @var string
     */
    private $registrationby;

    /**
     * @var string
     */
    private $sitecode;

    /**
     * @var string
     */
    private $coordinates;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $townquintanaroo;

    /**
     * @var string
     */
    private $townyucatan;

    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $characteristics;

    /**
     * @var string
     */
    private $typeofcontext;

    /**
     * @var string
     */
    private $conservationstatus;

    /**
     * @var string
     */
    private $flora;

    /**
     * @var string
     */
    private $fauna;

    /**
     * @var string
     */
    private $archaelements;

    /**
     * @var string
     */
    private $whichelements;

    /**
     * @var string
     */
    private $archasurvey;

    /**
     * @var string
     */
    private $touristactivities;

    /**
     * @var string
     */
    private $whichactivities;

    /**
     * @var \DateTime
     */
    private $dateofanalisis;

    /**
     * @var string
     */
    private $temperature;

    /**
     * @var string
     */
    private $turbidity;

    /**
     * @var string
     */
    private $ph;

    /**
     * @var string
     */
    private $ammonium;

    /**
     * @var string
     */
    private $nitrites;

    /**
     * @var string
     */
    private $nitratos;

    /**
     * @var string
     */
    private $phosphates;

    /**
     * @var string
     */
    private $hardness;

    /**
     * @var string
     */
    private $detergents;

    /**
     * @var string
     */
    private $chlorine;

    /**
     * @var string
     */
    private $coliforms;

    /**
     * @var string
     */
    private $observations;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $videoPath;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \BackendBundle\Entity\User
     */
    private $user;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Cenote
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set entitiname
     *
     * @param string $entitiname
     *
     * @return Cenote
     */
    public function setEntitiname($entitiname)
    {
        $this->entitiname = json_encode($entitiname);

        return $this;
    }

    /**
     * Get entitiname
     *
     * @return string
     */
    public function getEntitiname()
    {
        if($this->entitiname){
            return json_decode($entitiname);
        }
        return null;
    }

    /**
     * Set keysite
     *
     * @param string $keysite
     *
     * @return Cenote
     */
    public function setKeysite($keysite)
    {
        $this->keysite = $keysite;

        return $this;
    }

    /**
     * Get keysite
     *
     * @return string
     */
    public function getKeysite()
    {
        return $this->keysite;
    }

    /**
     * Set coordinatesutm
     *
     * @param string $coordinatesutm
     *
     * @return Cenote
     */
    public function setCoordinatesutm($coordinatesutm)
    {
        $this->coordinatesutm = $coordinatesutm;

        return $this;
    }

    /**
     * Get coordinatesutm
     *
     * @return string
     */
    public function getCoordinatesutm()
    {
        return $this->coordinatesutm;
    }

    /**
     * Set kindofcontext
     *
     * @param string $kindofcontext
     *
     * @return Cenote
     */
    public function setKindofcontext($kindofcontext)
    {
        $this->kindofcontext = $kindofcontext;

        return $this;
    }

    /**
     * Get kindofcontext
     *
     * @return string
     */
    public function getKindofcontext()
    {
        return $this->kindofcontext;
    }

    /**
     * Set drycave
     *
     * @param string $drycave
     *
     * @return Cenote
     */
    public function setDrycave($drycave)
    {
        $this->drycave = $drycave;

        return $this;
    }

    /**
     * Get drycave
     *
     * @return string
     */
    public function getDrycave()
    {
        return $this->drycave;
    }

    /**
     * Set equipment
     *
     * @param string $equipment
     *
     * @return Cenote
     */
    public function setEquipment($equipment)
    {
        $this->equipment = $equipment;

        return $this;
    }

    /**
     * Get equipment
     *
     * @return string
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Set contextdescription
     *
     * @param string $contextdescription
     *
     * @return Cenote
     */
    public function setContextdescription($contextdescription)
    {
        $this->contextdescription = $contextdescription;

        return $this;
    }

    /**
     * Get contextdescription
     *
     * @return string
     */
    public function getContextdescription()
    {
        return $this->contextdescription;
    }

    /**
     * Set relevanttraits
     *
     * @param string $relevanttraits
     *
     * @return Cenote
     */
    public function setRelevanttraits($relevanttraits)
    {
        $this->relevanttraits = $relevanttraits;

        return $this;
    }

    /**
     * Get relevanttraits
     *
     * @return string
     */
    public function getRelevanttraits()
    {
        return $this->relevanttraits;
    }

    /**
     * Set preservationgeneral
     *
     * @param string $preservationgeneral
     *
     * @return Cenote
     */
    public function setPreservationgeneral($preservationgeneral)
    {
        $this->preservationgeneral = $preservationgeneral;

        return $this;
    }

    /**
     * Get preservationgeneral
     *
     * @return string
     */
    public function getPreservationgeneral()
    {
        return $this->preservationgeneral;
    }

    /**
     * Set alteration
     *
     * @param string $alteration
     *
     * @return Cenote
     */
    public function setAlteration($alteration)
    {
        $this->alteration = $alteration;

        return $this;
    }

    /**
     * Get alteration
     *
     * @return string
     */
    public function getAlteration()
    {
        return $this->alteration;
    }

    /**
     * Set technicaldescription
     *
     * @param string $technicaldescription
     *
     * @return Cenote
     */
    public function setTechnicaldescription($technicaldescription)
    {
        $this->technicaldescription = $technicaldescription;

        return $this;
    }

    /**
     * Get technicaldescription
     *
     * @return string
     */
    public function getTechnicaldescription()
    {
        return $this->technicaldescription;
    }

    /**
     * Set depth
     *
     * @param string $depth
     *
     * @return Cenote
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;

        return $this;
    }

    /**
     * Get depth
     *
     * @return string
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Set horizontalpenetration
     *
     * @param string $horizontalpenetration
     *
     * @return Cenote
     */
    public function setHorizontalpenetration($horizontalpenetration)
    {
        $this->horizontalpenetration = $horizontalpenetration;

        return $this;
    }

    /**
     * Get horizontalpenetration
     *
     * @return string
     */
    public function getHorizontalpenetration()
    {
        return $this->horizontalpenetration;
    }

    /**
     * Set sitedimensions
     *
     * @param string $sitedimensions
     *
     * @return Cenote
     */
    public function setSitedimensions($sitedimensions)
    {
        $this->sitedimensions = $sitedimensions;

        return $this;
    }

    /**
     * Get sitedimensions
     *
     * @return string
     */
    public function getSitedimensions()
    {
        return $this->sitedimensions;
    }

    /**
     * Set entrancedistance
     *
     * @param string $entrancedistance
     *
     * @return Cenote
     */
    public function setEntrancedistance($entrancedistance)
    {
        $this->entrancedistance = $entrancedistance;

        return $this;
    }

    /**
     * Get entrancedistance
     *
     * @return string
     */
    public function getEntrancedistance()
    {
        return $this->entrancedistance;
    }

    /**
     * Set siteassociated
     *
     * @param string $siteassociated
     *
     * @return Cenote
     */
    public function setSiteassociated($siteassociated)
    {
        $this->siteassociated = $siteassociated;

        return $this;
    }

    /**
     * Get siteassociated
     *
     * @return string
     */
    public function getSiteassociated()
    {
        return $this->siteassociated;
    }

    /**
     * Set watersamples
     *
     * @param string $watersamples
     *
     * @return Cenote
     */
    public function setWatersamples($watersamples)
    {
        $this->watersamples = $watersamples;

        return $this;
    }

    /**
     * Get watersamples
     *
     * @return string
     */
    public function getWatersamples()
    {
        return $this->watersamples;
    }

    /**
     * Set typeofwater
     *
     * @param string $typeofwater
     *
     * @return Cenote
     */
    public function setTypeofwater($typeofwater)
    {
        $this->typeofwater = $typeofwater;

        return $this;
    }

    /**
     * Get typeofwater
     *
     * @return string
     */
    public function getTypeofwater()
    {
        return $this->typeofwater;
    }

    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return Cenote
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set exploredby
     *
     * @param string $exploredby
     *
     * @return Cenote
     */
    public function setExploredby($exploredby)
    {
        $this->exploredby = $exploredby;

        return $this;
    }

    /**
     * Get exploredby
     *
     * @return string
     */
    public function getExploredby()
    {
        return $this->exploredby;
    }

    /**
     * Set documentedby
     *
     * @param string $documentedby
     *
     * @return Cenote
     */
    public function setDocumentedby($documentedby)
    {
        $this->documentedby = $documentedby;

        return $this;
    }

    /**
     * Get documentedby
     *
     * @return string
     */
    public function getDocumentedby()
    {
        return $this->documentedby;
    }

    /**
     * Set inspectiondate
     *
     * @param \DateTime $inspectiondate
     *
     * @return Cenote
     */
    public function setInspectiondate($inspectiondate)
    {
        $this->inspectiondate = $inspectiondate;

        return $this;
    }

    /**
     * Get inspectiondate
     *
     * @return \DateTime
     */
    public function getInspectiondate()
    {
        return $this->inspectiondate;
    }

    /**
     * Set registrationby
     *
     * @param string $registrationby
     *
     * @return Cenote
     */
    public function setRegistrationby($registrationby)
    {
        $this->registrationby = $registrationby;

        return $this;
    }

    /**
     * Get registrationby
     *
     * @return string
     */
    public function getRegistrationby()
    {
        return $this->registrationby;
    }

    /**
     * Set sitecode
     *
     * @param string $sitecode
     *
     * @return Cenote
     */
    public function setSitecode($sitecode)
    {
        $this->sitecode = $sitecode;

        return $this;
    }

    /**
     * Get sitecode
     *
     * @return string
     */
    public function getSitecode()
    {
        return $this->sitecode;
    }

    /**
     * Set coordinates
     *
     * @param string $coordinates
     *
     * @return Cenote
     */
    public function setCoordinates($coordinates)
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    /**
     * Get coordinates
     *
     * @return string
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return Cenote
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set townquintanaroo
     *
     * @param string $townquintanaroo
     *
     * @return Cenote
     */
    public function setTownquintanaroo($townquintanaroo)
    {
        $this->townquintanaroo = $townquintanaroo;

        return $this;
    }

    /**
     * Get townquintanaroo
     *
     * @return string
     */
    public function getTownquintanaroo()
    {
        return $this->townquintanaroo;
    }

    /**
     * Set townyucatan
     *
     * @param string $townyucatan
     *
     * @return Cenote
     */
    public function setTownyucatan($townyucatan)
    {
        $this->townyucatan = $townyucatan;

        return $this;
    }

    /**
     * Get townyucatan
     *
     * @return string
     */
    public function getTownyucatan()
    {
        return $this->townyucatan;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Cenote
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set characteristics
     *
     * @param string $characteristics
     *
     * @return Cenote
     */
    public function setCharacteristics($characteristics)
    {
        $this->characteristics = $characteristics;

        return $this;
    }

    /**
     * Get characteristics
     *
     * @return string
     */
    public function getCharacteristics()
    {
        return $this->characteristics;
    }

    /**
     * Set typeofcontext
     *
     * @param string $typeofcontext
     *
     * @return Cenote
     */
    public function setTypeofcontext($typeofcontext)
    {
        $this->typeofcontext = $typeofcontext;

        return $this;
    }

    /**
     * Get typeofcontext
     *
     * @return string
     */
    public function getTypeofcontext()
    {
        return $this->typeofcontext;
    }

    /**
     * Set conservationstatus
     *
     * @param string $conservationstatus
     *
     * @return Cenote
     */
    public function setConservationstatus($conservationstatus)
    {
        $this->conservationstatus = $conservationstatus;

        return $this;
    }

    /**
     * Get conservationstatus
     *
     * @return string
     */
    public function getConservationstatus()
    {
        return $this->conservationstatus;
    }

    /**
     * Set flora
     *
     * @param string $flora
     *
     * @return Cenote
     */
    public function setFlora($flora)
    {
        $this->flora = $flora;

        return $this;
    }

    /**
     * Get flora
     *
     * @return string
     */
    public function getFlora()
    {
        return $this->flora;
    }

    /**
     * Set fauna
     *
     * @param string $fauna
     *
     * @return Cenote
     */
    public function setFauna($fauna)
    {
        $this->fauna = $fauna;

        return $this;
    }

    /**
     * Get fauna
     *
     * @return string
     */
    public function getFauna()
    {
        return $this->fauna;
    }

    /**
     * Set archaelements
     *
     * @param string $archaelements
     *
     * @return Cenote
     */
    public function setArchaelements($archaelements)
    {
        $this->archaelements = $archaelements;

        return $this;
    }

    /**
     * Get archaelements
     *
     * @return string
     */
    public function getArchaelements()
    {
        return $this->archaelements;
    }

    /**
     * Set whichelements
     *
     * @param string $whichelements
     *
     * @return Cenote
     */
    public function setWhichelements($whichelements)
    {
        $this->whichelements = $whichelements;

        return $this;
    }

    /**
     * Get whichelements
     *
     * @return string
     */
    public function getWhichelements()
    {
        return $this->whichelements;
    }

    /**
     * Set archasurvey
     *
     * @param string $archasurvey
     *
     * @return Cenote
     */
    public function setArchasurvey($archasurvey)
    {
        $this->archasurvey = $archasurvey;

        return $this;
    }

    /**
     * Get archasurvey
     *
     * @return string
     */
    public function getArchasurvey()
    {
        return $this->archasurvey;
    }

    /**
     * Set touristactivities
     *
     * @param string $touristactivities
     *
     * @return Cenote
     */
    public function setTouristactivities($touristactivities)
    {
        $this->touristactivities = $touristactivities;

        return $this;
    }

    /**
     * Get touristactivities
     *
     * @return string
     */
    public function getTouristactivities()
    {
        return $this->touristactivities;
    }

    /**
     * Set whichactivities
     *
     * @param string $whichactivities
     *
     * @return Cenote
     */
    public function setWhichactivities($whichactivities)
    {
        $this->whichactivities = $whichactivities;

        return $this;
    }

    /**
     * Get whichactivities
     *
     * @return string
     */
    public function getWhichactivities()
    {
        return $this->whichactivities;
    }

    /**
     * Set dateofanalisis
     *
     * @param \DateTime $dateofanalisis
     *
     * @return Cenote
     */
    public function setDateofanalisis($dateofanalisis)
    {
        $this->dateofanalisis = $dateofanalisis;

        return $this;
    }

    /**
     * Get dateofanalisis
     *
     * @return \DateTime
     */
    public function getDateofanalisis()
    {
        return $this->dateofanalisis;
    }

    /**
     * Set temperature
     *
     * @param string $temperature
     *
     * @return Cenote
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return string
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set turbidity
     *
     * @param string $turbidity
     *
     * @return Cenote
     */
    public function setTurbidity($turbidity)
    {
        $this->turbidity = $turbidity;

        return $this;
    }

    /**
     * Get turbidity
     *
     * @return string
     */
    public function getTurbidity()
    {
        return $this->turbidity;
    }

    /**
     * Set ph
     *
     * @param string $ph
     *
     * @return Cenote
     */
    public function setPh($ph)
    {
        $this->ph = $ph;

        return $this;
    }

    /**
     * Get ph
     *
     * @return string
     */
    public function getPh()
    {
        return $this->ph;
    }

    /**
     * Set ammonium
     *
     * @param string $ammonium
     *
     * @return Cenote
     */
    public function setAmmonium($ammonium)
    {
        $this->ammonium = $ammonium;

        return $this;
    }

    /**
     * Get ammonium
     *
     * @return string
     */
    public function getAmmonium()
    {
        return $this->ammonium;
    }

    /**
     * Set nitrites
     *
     * @param string $nitrites
     *
     * @return Cenote
     */
    public function setNitrites($nitrites)
    {
        $this->nitrites = $nitrites;

        return $this;
    }

    /**
     * Get nitrites
     *
     * @return string
     */
    public function getNitrites()
    {
        return $this->nitrites;
    }

    /**
     * Set nitratos
     *
     * @param string $nitratos
     *
     * @return Cenote
     */
    public function setNitratos($nitratos)
    {
        $this->nitratos = $nitratos;

        return $this;
    }

    /**
     * Get nitratos
     *
     * @return string
     */
    public function getNitratos()
    {
        return $this->nitratos;
    }

    /**
     * Set phosphates
     *
     * @param string $phosphates
     *
     * @return Cenote
     */
    public function setPhosphates($phosphates)
    {
        $this->phosphates = $phosphates;

        return $this;
    }

    /**
     * Get phosphates
     *
     * @return string
     */
    public function getPhosphates()
    {
        return $this->phosphates;
    }

    /**
     * Set hardness
     *
     * @param string $hardness
     *
     * @return Cenote
     */
    public function setHardness($hardness)
    {
        $this->hardness = $hardness;

        return $this;
    }

    /**
     * Get hardness
     *
     * @return string
     */
    public function getHardness()
    {
        return $this->hardness;
    }

    /**
     * Set detergents
     *
     * @param string $detergents
     *
     * @return Cenote
     */
    public function setDetergents($detergents)
    {
        $this->detergents = $detergents;

        return $this;
    }

    /**
     * Get detergents
     *
     * @return string
     */
    public function getDetergents()
    {
        return $this->detergents;
    }

    /**
     * Set chlorine
     *
     * @param string $chlorine
     *
     * @return Cenote
     */
    public function setChlorine($chlorine)
    {
        $this->chlorine = $chlorine;

        return $this;
    }

    /**
     * Get chlorine
     *
     * @return string
     */
    public function getChlorine()
    {
        return $this->chlorine;
    }

    /**
     * Set coliforms
     *
     * @param string $coliforms
     *
     * @return Cenote
     */
    public function setColiforms($coliforms)
    {
        $this->coliforms = $coliforms;

        return $this;
    }

    /**
     * Get coliforms
     *
     * @return string
     */
    public function getColiforms()
    {
        return $this->coliforms;
    }

    /**
     * Set observations
     *
     * @param string $observations
     *
     * @return Cenote
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;

        return $this;
    }

    /**
     * Get observations
     *
     * @return string
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Cenote
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Cenote
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set videoPath
     *
     * @param string $videoPath
     *
     * @return Cenote
     */
    public function setVideoPath($videoPath)
    {
        $this->videoPath = $videoPath;

        return $this;
    }

    /**
     * Get videoPath
     *
     * @return string
     */
    public function getVideoPath()
    {
        return $this->videoPath;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Cenote
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Cenote
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set user
     *
     * @param \BackendBundle\Entity\User $user
     *
     * @return Cenote
     */
    public function setUser(\BackendBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \BackendBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
