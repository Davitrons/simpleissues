<?php

namespace App\Entity;

class Incidencia
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var bool
     */
    private $prioritaria;

    /**
     * @var \DateTime
     */
    private $fechaApertura;

    /**
     * @var \DateTime
     */
    private $fechaCierre;

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
}