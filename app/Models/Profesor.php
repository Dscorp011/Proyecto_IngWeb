<?php 
namespace App\Models;

use CodeIgniter\Model;

class Profesor extends Model{
    protected $table      = 'profesor';
    protected $primaryKey = 'idProfesor';
    protected $allowedFields=['Nombre','Apellidos','grupo','correo','password'];
}