<?php 
namespace App\Models;

use CodeIgniter\Model;

class Administrador extends Model{
    protected $table      = 'usuarioadministrador';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idUsuario';
    protected $allowedFields=['Nombre','Apellidos','correo','password'];

}