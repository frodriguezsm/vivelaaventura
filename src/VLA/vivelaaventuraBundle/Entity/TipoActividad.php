<?php

namespace VLA\vivelaaventuraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoActividad
 *
 * @ORM\Table(name="tipo_actividad")
 * @ORM\Entity
 */
class TipoActividad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_actividad", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=20, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="blob", length=65535, nullable=false)
     */
    private $imagen;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="requisitos", type="string", length=200, nullable=false)
     */
    private $requisitos;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Eventos", inversedBy="idTipoActividad")
     * @ORM\JoinTable(name="actividad_eventos",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_tipo_actividad", referencedColumnName="id_tipo_actividad")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_eventos", referencedColumnName="id_eventos")
     *   }
     * )
     */
    private $idEventos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idEventos = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idTipoActividad
     *
     * @return integer
     */
    public function getIdTipoActividad()
    {
        return $this->idTipoActividad;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return TipoActividad
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return TipoActividad
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return TipoActividad
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set requisitos
     *
     * @param string $requisitos
     *
     * @return TipoActividad
     */
    public function setRequisitos($requisitos)
    {
        $this->requisitos = $requisitos;

        return $this;
    }

    /**
     * Get requisitos
     *
     * @return string
     */
    public function getRequisitos()
    {
        return $this->requisitos;
    }

    /**
     * Add idEvento
     *
     * @param \VLA\vivelaaventuraBundle\Entity\Eventos $idEvento
     *
     * @return TipoActividad
     */
    public function addIdEvento(\VLA\vivelaaventuraBundle\Entity\Eventos $idEvento)
    {
        $this->idEventos[] = $idEvento;
        return $this;
    }

    /**
     * Remove idEvento
     *
     * @param \VLA\vivelaaventuraBundle\Entity\Eventos $idEvento
     */
    public function removeIdEvento(\VLA\vivelaaventuraBundle\Entity\Eventos $idEvento)
    {
        $this->idEventos->removeElement($idEvento);
    }

    /**
     * Get idEventos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdEventos()
    {
        return $this->idEventos;
    }
}
