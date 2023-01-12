<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Alumno;
class Alumnos extends Controller{

    public function index(){

        return view('loginA');
    }
    public function guardar()
    {   
        $alumno=new Alumno();
        
        $datosAl=[
        'Nombre'=>$this->request->getVar('txtnombre'),
        'Apellidos'=>$this->request->getVar('txtapellidos'),
        'grupo'=>$this->request->getVar('txtgrupo'),
        'correo'=>$this->request->getVar('txtcorreo'),
        'password'=>$this->request->getVar('txtpassword')
    ];
        $alumno->insert($datosAl);

        return $this->response->redirect(base_url('/'));

    }
}//Controlador