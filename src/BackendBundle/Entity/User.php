<?php

namespace BackendBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 */
class User implements UserInterface, \Serializable
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $role;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $plastname;

    /**
     * @var string
     */
    private $mlastname;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $image;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /*que campo de la bd va a actuar como username*/
    public function getUsername(){
        return $this->email;
    }
    
    public function getSalt(){
        return null;
    }
    public function getRoles(){
        return array('ROLE_USER', 'ROLE_ADMIN');
    }
    
    //metodo 
    public function eraseCredentials(){
        
    }
    
    //convertir los nombres a string
    public function __toString() {
        return $this->name;
    }
    
    /*para evitar errores de serialización*/
    public function serialize(){
        return serialize(array(
            $this->id,
            $this->email,
            $this->password
        ));
    }

    public function unserialize( $serialized) {
        list(
                $this->id,
                $this->email,
                $this->password
            ) = unserialize($serialized);
        
    }

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
     * Set role
     *
     * @param string $role
     *
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
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
     * Set plastname
     *
     * @param string $plastname
     *
     * @return User
     */
    public function setPlastname($plastname)
    {
        $this->plastname = $plastname;

        return $this;
    }

    /**
     * Get plastname
     *
     * @return string
     */
    public function getPlastname()
    {
        return $this->plastname;
    }

    /**
     * Set mlastname
     *
     * @param string $mlastname
     *
     * @return User
     */
    public function setMlastname($mlastname)
    {
        $this->mlastname = $mlastname;

        return $this;
    }

    /**
     * Get mlastname
     *
     * @return string
     */
    public function getMlastname()
    {
        return $this->mlastname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return User
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return User
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
}
