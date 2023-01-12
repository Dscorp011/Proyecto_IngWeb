<?php 
namespace App\Models;

use CodeIgniter\Model;

class Alumno extends Model{
    protected $table      = 'alumno';
    protected $primaryKey = 'idAlumno';
    protected $allowedFields=['Nombre','Apellidos','grupo','correo','password'];
}