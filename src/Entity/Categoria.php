<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="categoria")
 */
class Categoria
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
    private $nombre;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $visible;

    /**
     * @ORM\ManyToOne(targetEntity="Persona", inversedBy="responsabilidades")
     * @var Persona
     */
    private $gestor;

    /**
     * @ORM\ManyToMany(targetEntity="Incidencia", mappedBy="categorias")
     * @var Incidencia[]|Collection
     */
    private $incidencias;

    public function __construct()
    {
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
     * @return Categoria
     */
    public function setNombre(string $nombre): Categoria
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return bool
     */
    public function isVisible(): bool
    {
        return $this->visible;
    }

    /**
     * @param bool $visible
     * @return Categoria
     */
    public function setVisible(bool $visible): Categoria
    {
        $this->visible = $visible;
        return $this;
    }

    /**
     * @return Persona
     */
    public function getGestor(): Persona
    {
        return $this->gestor;
    }

    /**
     * @param Persona $gestor
     * @return Categoria
     */
    public function setGestor(Persona $gestor): Categoria
    {
        $this->gestor = $gestor;
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
     * @return Categoria
     */
    public function setIncidencias($incidencias)
    {
        $this->incidencias = $incidencias;
        return $this;
    }
}
