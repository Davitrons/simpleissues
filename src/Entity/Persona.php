<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Persona
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $nombre;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $apellidos;

    /**
     * @ORM\OneToMany(targetEntity="Categoria", mappedBy="gestor")
     * @var Categoria[]|Collection
     */
    private $responsabilidades;

    /**
     * @ORM\OneToMany(targetEntity="Incidencia", mappedBy="abiertaPor")
     * @var Incidencia[]|Collection
     */
    private $incidencias;

    public function __construct()
    {
        $this->responsabilidades = new ArrayCollection();
        $this->incidencias = new ArrayCollection();
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
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     * @return Persona
     */
    public function setNombre(string $nombre): Persona
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return string
     */
    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    /**
     * @param string $apellidos
     * @return Persona
     */
    public function setApellidos(string $apellidos): Persona
    {
        $this->apellidos = $apellidos;
        return $this;
    }

    /**
     * @return Categoria[]|Collection
     */
    public function getResponsabilidades()
    {
        return $this->responsabilidades;
    }

    /**
     * @param Categoria[]|Collection $responsabilidades
     * @return Persona
     */
    public function setResponsabilidades($responsabilidades)
    {
        $this->responsabilidades = $responsabilidades;
        return $this;
    }

    /**
     * @return Incidencia[]|Collection
     */
    public function getIncidencias()
    {
        return $this->incidencias;
    }

    /**
     * @param Incidencia[]|Collection $incidencias
     * @return Persona
     */
    public function setIncidencias($incidencias)
    {
        $this->incidencias = $incidencias;
        return $this;
    }
}
