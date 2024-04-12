<?php

namespace App;

class Propiedad
{
    // Base de datos
    protected static $db;
    protected static $columnasDB = ['id', 'titulo', 'precio', 'imagen', 'descripcion', 'habitaciones', 'wc', 'plazas', 'creado', 'vendedorId'];

    // Errores
    protected static $errores = [];

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

    // Definir la conexión a la DB
    public static function setDB($database)
    {
        self::$db = $database;
    }

    public function __construct($args = [])
    {
        $this->id = $args["id"] ?? "";
        $this->titulo = $args["titulo"] ?? "";
        $this->precio = $args["precio"] ?? "";
        $this->imagen = $args["imagen"] ?? "imagen.jpg";
        $this->descripcion = $args["descripcion"] ?? "";
        $this->habitaciones = $args["habitaciones"] ?? "";
        $this->wc = $args["wc"] ?? "";
        $this->plazas = $args["plazas"] ?? "";
        $this->creado = date('Y/m/d');
        $this->vendedorId = $args["vendedorId"] ?? "";
    }

    public function guardar()
    {
        // Sanitizar los datos
        $atributos = $this->sanitizarAtributos();

        // Insertar en la base de datos
        $query = " INSERT INTO propiedades ( ";
        $query .= join(", ", array_keys($atributos));
        $query .= " ) VALUES (' ";
        $query .= join("', '", array_values($atributos));
        $query .= " ') ";

        $resultado = self::$db->query($query);
    }

    public function atributos()
    {
        $atributos = [];
        foreach (self::$columnasDB as $columna) {
            if ($columna === 'id') continue;
            $atributos[$columna] = $this->$columna;
        }
        return $atributos;
    }

    public function sanitizarAtributos()
    {
        $atributos = $this->atributos();
        $sanitizado = [];

        foreach ($atributos as $atributo => $valor) {
            $sanitizado[$atributo] = self::$db->escape_string($valor);
        }

        return $sanitizado;
    }

    // Validación
    public static function getErrores()
    {
        return self::$errores;
    }

    public function validar()
    {
        if (!$this->titulo) {
            self::$errores[] = "Debes añadir un título";
        }

        if (strlen($this->titulo) > 45) {
            self::$errores[] = "El título no debe superar los 45 caracteres";
        }

        if (!$this->precio) {
            self::$errores[] = "Debes añadir un precio";
        }
        /*
        if (!$this->imagen['name'] || $this->imagen['error']) {
            self::$errores[] = "Debes añadir una imagen";
        }

        // Validar por tamaño (2mb máximo)
        $medida = 1000 * 1000;

        if ($this->imagen['size'] > $medida) {
            self::$errores[] = "La imagen es demasiado grande";
        }
        */
        if (strlen($this->descripcion) < 50) {
            self::$errores[] = "Debes añadir una descripcion que tenga al menos 50 caracteres";
        }

        if (!$this->habitaciones) {
            self::$errores[] = "Debes añadir al menos una habitación";
        }

        if (!$this->wc) {
            self::$errores[] = "Debes añadir al menos un baño";
        }

        if (!$this->plazas) {
            self::$errores[] = "Debes añadir al menos una plaza";
        }

        if (!$this->vendedorId) {
            self::$errores[] = "Debes añadir un vendedor";
        }

        return self::$errores;
    }
}
