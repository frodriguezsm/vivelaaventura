<?php

namespace VLA\vivelaaventuraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
//use src\BDC\GescanBundle\Entity;

// Se añade la librería UserInterface para que esta clase extienda de ella para utilizarla como login y sesión

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios", uniqueConstraints={@ORM\UniqueConstraint(name="usuario", columns={"usuario"})})
 * @ORM\Entity
 */
class Usuarios implements UserInterface, \Serializable
{
	// Se extiende de UserInterface
	
    /**
     * @var integer
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=50, nullable=false)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="rol", type="string", length=5, nullable=false)
     */
    private $rol;

    
    // Se añade constructor
    public function __construct() {
        parent::__construct();
    }
    

    /**
     * Get idUsuario
     *
     * @return integer
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Usuarios
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Usuarios
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

    // Se añade esta funcion para definir los roles de los usuarios
    public function getRoles() {

        if ($this->rol=="ADMIN")
            return array('ROLE_ADMIN');
        else
            return array('ROLE_USER');
    }
    
    
    /**
     * Set rol
     *
     * @param string $rol
     *
     * @return Usuarios
     */
    // esta funcion no seria necesaria
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return string
     */
    // esta funcion no seria necesaria
    public function getRol()
    {
        return $this->rol;
    }
    
    // Se añaden estas cuatro funciones porque si, para que funcione el login
   
    public function getUsername() {
        //$this->nombre_completo = $this->nombre ." ". $this->apellido1;
        //if ($this->apellido2) $this->nombre_completo .= " ".$this->apellido2;

        return $this->usuario;
    }

    
     public function getSalt() {
        return null;
    }
    public function eraseCredentials() {
    }

    /**
    * @see \Serializable:serialize()
    */
    public function serialize() {
        return serialize(array($this->idUsuario));
    }
    /**
    * @see \Serializable:unserialize()
    */
    public function unserialize($serialized) {
        list ($this->idUsuario, ) = unserialize($serialized);
    } 
    
}

