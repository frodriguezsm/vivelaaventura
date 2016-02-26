<?php

namespace VLA\vivelaaventuraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Opiniones
 *
 * @ORM\Table(name="opiniones", indexes={@ORM\Index(name="id_usuario", columns={"id_usuario"})})
 * @ORM\Entity
 */
class Opiniones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_opiniones", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOpiniones;

    /**
     * @var string
     *
     * @ORM\Column(name="opinion", type="text", length=65535, nullable=false)
     */
    private $opinion;

    /**
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario")
     * })
     */
    private $idUsuario;



    /**
     * Get idOpiniones
     *
     * @return integer
     */
    public function getIdOpiniones()
    {
        return $this->idOpiniones;
    }

    /**
     * Set opinion
     *
     * @param string $opinion
     *
     * @return Opiniones
     */
    public function setOpinion($opinion)
    {
        $this->opinion = $opinion;

        return $this;
    }

    /**
     * Get opinion
     *
     * @return string
     */
    public function getOpinion()
    {
        return $this->opinion;
    }

    /**
     * Set idUsuario
     *
     * @param \VLA\vivelaaventuraBundle\Entity\Usuarios $idUsuario
     *
     * @return Opiniones
     */
    public function setIdUsuario(\VLA\vivelaaventuraBundle\Entity\Usuarios $idUsuario = null)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return \VLA\vivelaaventuraBundle\Entity\Usuarios
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
}
