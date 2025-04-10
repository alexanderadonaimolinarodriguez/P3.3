<?php
// Alexander Adonai Molina Rodríguez - 242310131 - Ing. Informática - POO

// Incluir la clase Alumno
require_once 'alumno.php';

// Crear un objeto de la clase Alumno
$alumno1 = new Alumno();

// Asignar valores usando los métodos setters
$alumno1->setNombre("Alexander Adonai");
$alumno1->setApellidos("Molina Rodríguez");
$alumno1->setNumeroControl("242310131");
$alumno1->setCorreoElectronico("AlexanderAdonaiMolinaRodríguez242310131@itslerdo.edu.mx");
$alumno1->setEdad("18 años");
$alumno1->setEstatura("1.77m");

// Mostrar los datos del alumno
$alumno1->mostrarDatos();
?>