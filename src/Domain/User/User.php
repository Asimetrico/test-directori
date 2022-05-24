<?php
declare(strict_types=1);

namespace App\Domain\User;

use JsonSerializable;

class User implements JsonSerializable
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $apellido1;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido2;


    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $centro;

    /**
     * @var string
     */
    private $departamento;

    /**
     * @var string
     */
    private $telf;

    /**
     * @var string
     */
    private $movil;

    /**
     * @var string
     */
    private $directo;

    /**
     * @var string
     */
    private $categoria;

    /**
     * @var string
     */
    public $foto;


    /**
     * @param string  $id
     * @param string    $apellido1
     * @param string    $nombre
     * @param string    $apellido2
     * @param string    $email
     * @param string $centro
     * @param string $telf
     * @param string $foto
     */
    public function __construct(?string $id, string $apellido1, string $nombre, string $apellido2,
                                string $email, string $departamento,  string $categoria,
                                string $foto = '',
                                string $telf='12345',
                                string $movil='12345', string $directo = '93212121',
                                string $centro = 'Barcelona' )
    {
        $this->id = $id;
        $this->apellido1 =ucfirst($apellido1);
        $this->nombre = ucfirst($nombre);
        $this->apellido2 = ucfirst($apellido2);
        $this->email = strtolower($email);
        $this->centro = $centro;
        $this->departamento = ucfirst($departamento);
        $this->categoria = ucfirst($categoria);
        $this->foto = $foto;
        $this->telf = $telf;
        $this->movil = $movil;
        $this->directo = $directo;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getapellido1(): string
    {
        return $this->apellido1;
    }

    /**
     * @return string
     */
    public function getnombre(): string
    {
        return $this->nombre;
    }

    /**
     * @return string
     */
    public function getapellido2(): string
    {
        return $this->apellido2;
    }

    /**
     * @return string
     */
    public function setphotoempty(): void
    {
        $this->foto = '';
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'apellido1' => $this->apellido1,
            'nombre' => $this->nombre,
            'apellido2' => $this->apellido2,
            'email' => $this->email,
            'centro' => $this->centro,
            'departamento' => $this->departamento,
            'categoria' => $this->categoria,
            'telf' => $this->telf,
            'movil' => $this->movil,
            'directo' => $this->directo,
            'foto'=> $this->foto
        ];
    }
}
