<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="incidencia")
 */
class Incidencia
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $titulo;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $descripcion;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $prioritaria;

    /**
     * @var \DateTime
     * @ORM\Column(type="date")
     */
    private $fechaApertura;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @var \DateTime|null
     */
    private $fechaCierre;

    /**
     * @ORM\ManyToMany(targetEntity="Categoria", inversedBy="incidencias")
     * @var Categoria[]|Collection
     */
    private $categorias;

    /**
     * @ORM\ManyToOne(targetEntity="Persona", inversedBy="incidencias")
     * @ORM\JoinColumn(nullable=false)
     * @var Persona
     */
    private $abiertaPor;

    /**
     * @ORM\ManyToOne(targetEntity="Persona")
     * @var Persona|null
     */
    private $cerradaPor;

    public function __construct()
    {
        $this->categorias = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * @param string $titulo
     * @return Incidencia
     */
    public function setTitulo(string $titulo): Incidencia
    {
        $this->titulo = $titulo;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    /**
     * @param string $descripcion
     * @return Incidencia
     */
    public function setDescripcion(string $descripcion): Incidencia
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPrioritaria(): bool
    {
        return $this->prioritaria;
    }

    /**
     * @param bool $prioritaria
     * @return Incidencia
     */
    public function setPrioritaria(bool $prioritaria): Incidencia
    {
        $this->prioritaria = $prioritaria;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFechaApertura(): \DateTime
    {
        return $this->fechaApertura;
    }

    /**
     * @param \DateTime $fechaApertura
     * @return Incidencia
     */
    public function setFechaApertura(\DateTime $fechaApertura): Incidencia
    {
        $this->fechaApertura = $fechaApertura;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getFechaCierre(): ?\DateTime
    {
        return $this->fechaCierre;
    }

    /**
     * @param ?\DateTime $fechaCierre
     * @return Incidencia
     */
    public function setFechaCierre(\DateTime $fechaCierre = null): Incidencia
    {
        $this->fechaCierre = $fechaCierre;
        return $this;
    }

    /**
     * @return Categoria[]|Collection
     */
    public function getCategorias()
    {
        return $this->categorias;
    }

    /**
     * @param Categoria[]|Collection $categorias
     * @return Incidencia
     */
    public function setCategorias($categorias)
    {
        $this->categorias = $categorias;
        return $this;
    }

    /**
     * @return Persona
     */
    public function getAbiertaPor(): Persona
    {
        return $this->abiertaPor;
    }

    /**
     * @param Persona $abiertaPor
     * @return Incidencia
     */
    public function setAbiertaPor(Persona $abiertaPor): Incidencia
    {
        $this->abiertaPor = $abiertaPor;
        return $this;
    }

    /**
     * @return Persona|null
     */
    public function getCerradaPor(): ?Persona
    {
        return $this->cerradaPor;
    }

    /**
     * @param Persona|null $cerradaPor
     * @return Incidencia
     */
    public function setCerradaPor(?Persona $cerradaPor): Incidencia
    {
        $this->cerradaPor = $cerradaPor;
        return $this;
    }
}