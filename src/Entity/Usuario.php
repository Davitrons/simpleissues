<?php

namespace App\Entity;

class Usuario
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombreUsuario;

    /**
     * @var string
     */
    private $clave;

    /**
     * @var bool
     */
    private $administrador;

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
    public function getNombreUsuario(): string
    {
        return $this->nombreUsuario;
    }

    /**
     * @param string $nombreUsuario
     * @return Usuario
     */
    public function setNombreUsuario(string $nombreUsuario): Usuario
    {
        $this->nombreUsuario = $nombreUsuario;
        return $this;
    }

    /**
     * @return string
     */
    public function getClave(): string
    {
        return $this->clave;
    }

    /**
     * @param string $clave
     * @return Usuario
     */
    public function setClave(string $clave): Usuario
    {
        $this->clave = $clave;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAdministrador(): bool
    {
        return $this->administrador;
    }

    /**
     * @param bool $administrador
     * @return Usuario
     */
    public function setAdministrador(bool $administrador): Usuario
    {
        $this->administrador = $administrador;
        return $this;
    }
}
