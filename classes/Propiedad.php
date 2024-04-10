<?php

namespace App;

class Propiedad
{
    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $plazas;
    public $creado;
    public $vendedorId;

    public function __construct($args = [])
    {
        $this->id = $args["id"] ?? "";
        $this->titulo = $args["titulo"] ?? "";
        $this->precio = $args["precio"] ?? "";
        $this->imagen = $args["imagen"] ?? "";
        $this->descripcion = $args["descripcion"] ?? "";
        $this->habitaciones = $args["habitaciones"] ?? "";
        $this->wc = $args["wc"] ?? "";
        $this->plazas = $args["plazas"] ?? "";
        $this->creado = $args["creado"] ?? "";
        $this->vendedorId = $args["vendedorId"] ?? "";
    }
}
