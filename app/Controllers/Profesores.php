<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Profesor;
class Profesores extends Controller{

    public function index(){

        return view('loginP');
    }
    public function guardar()
    {   
        $profesor=new Profesor();
        
        $datosP=[
        'Nombre'=>$this->request->getVar('txtnombre2'),
        'Apellidos'=>$this->request->getVar('txtapellidos2'),
        'grupo'=>$this->request->getVar('txtgrupo2'),
        'correo'=>$this->request->getVar('txtcorreo2'),
        'password'=>$this->request->getVar('txtpassword2')
    ];
        $profesor->insert($datosP);

        return $this->response->redirect(base_url('/'));

    }

    public function validarProfesor(){


        return $this->response->redirect(base_url('https://www.upiita.ipn.mx/docentes'));
    }

}//Controller