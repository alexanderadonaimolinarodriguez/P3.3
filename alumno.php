<?php
// Alexander Adonai Molina Rodríguez - 242310131 - Ing. Informática - POO
class Alumno  {
    // Propiedades privadas
    private $nombre;
    private $apellidos;
    private $numControl;
    private $correo;
    private $edad;
    private $estatura;

    // Método Setter para asignar valores
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setNumeroControl($numControl) {
        $this->numControl = $numControl;
    }

    public function setCorreoElectronico($correo) {
        $this->correo = $correo;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function setEstatura($estatura) {
        $this->estatura = $estatura;
    }

    // Método para mostrar los datos del alumno
    public function mostrarDatos() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Apellidos: " . $this->apellidos . "<br>";
        echo "Número de Control: " . $this->numControl . "<br>";
        echo "Correo Electronico: " . $this->correo . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Estatura: " . $this->estatura . "<br>";
    }
}