<?php

namespace VLA\vivelaaventuraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eventos
 *
 * @ORM\Table(name="eventos")
 * @ORM\Entity
 */
class Eventos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_eventos", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEventos;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_evento", type="string", length=50, nullable=false)
     */
    private $nombreEvento;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="blob", length=65535, nullable=false)
     */
    private $imagen;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_evento", type="text", length=65535, nullable=false)
     */
    private $descripcionEvento;

    /**
     * @var string
     *
     * @ORM\Column(name="requisitos_evento", type="string", length=200, nullable=false)
     */
    private $requisitosEvento;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TipoActividad", mappedBy="idEventos")
     */
    private $idTipoActividad;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idTipoActividad = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idEventos
     *
     * @return integer
     */
    public function getIdEventos()
    {
        return $this->idEventos;
    }

    /**
     * Set nombreEvento
     *
     * @param string $nombreEvento
     *
     * @return Eventos
     */
    public function setNombreEvento($nombreEvento)
    {
        $this->nombreEvento = $nombreEvento;

        return $this;
    }

    /**
     * Get nombreEvento
     *
     * @return string
     */
    public function getNombreEvento()
    {
        return $this->nombreEvento;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Eventos
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set descripcionEvento
     *
     * @param string $descripcionEvento
     *
     * @return Eventos
     */
    public function setDescripcionEvento($descripcionEvento)
    {
        $this->descripcionEvento = $descripcionEvento;

        return $this;
    }

    /**
     * Get descripcionEvento
     *
     * @return string
     */
    public function getDescripcionEvento()
    {
        return $this->descripcionEvento;
    }

    /**
     * Set requisitosEvento
     *
     * @param string $requisitosEvento
     *
     * @return Eventos
     */
    public function setRequisitosEvento($requisitosEvento)
    {
        $this->requisitosEvento = $requisitosEvento;

        return $this;
    }

    /**
     * Get requisitosEvento
     *
     * @return string
     */
    public function getRequisitosEvento()
    {
        return $this->requisitosEvento;
    }

    /**
     * Add idTipoActividad
     *
     * @param \VLA\vivelaaventuraBundle\Entity\TipoActividad $idTipoActividad
     *
     * @return Eventos
     */
    public function addIdTipoActividad(\VLA\vivelaaventuraBundle\Entity\TipoActividad $idTipoActividad)
    {
        $this->idTipoActividad[] = $idTipoActividad;

        return $this;
    }

    /**
     * Remove idTipoActividad
     *
     * @param \VLA\vivelaaventuraBundle\Entity\TipoActividad $idTipoActividad
     */
    public function removeIdTipoActividad(\VLA\vivelaaventuraBundle\Entity\TipoActividad $idTipoActividad)
    {
        $this->idTipoActividad->removeElement($idTipoActividad);
    }

    /**
     * Get idTipoActividad
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdTipoActividad()
    {
        return $this->idTipoActividad;
    }
}
