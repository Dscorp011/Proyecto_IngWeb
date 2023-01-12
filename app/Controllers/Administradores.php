<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Administrador;
class Administradores extends Controller{

    public function index(){
        
        
        return view('loginAdmin');
    }

    public function listarAdmins(){

        $Admin=new Administrador();
        $datosA['admins']=$Admin->orderBy('idUsuario','ASC')->findAll();
        
        return view('pagAdmin',$datosA);
    }

    public function borrarAdmin($idUsuario=null){
        $Admin=new Administrador();
        $datosA3=$Admin->where('idUsuario',$idUsuario)->first();
        //unlink($datosA3['idUsuario']);
        $Admin->where('idUsuario',$idUsuario)->delete($idUsuario);
        return $this->response->redirect(base_url('listarAdmins'));
    }
    public function editarAdmin($idUsuario=null){
        $Admin=new Administrador();
        $datos['admins']=$Admin->where('idUsuario',$idUsuario);

        return view('actualizarAdministrador',$datos);
    }
    public function actualizarAdmin()
    {
        $Admin=new Administrador();
        $datos=[
            'Nombre'=>$this->request->getVar('txtnombre'),
            'Apellidos'=>$this->request->getVar('txtapellidos'),
            'Nombre'=>$this->request->getVar('txtnombre'),
            'correo'=>$this->request->getVar('txtcorreo'),
            'password'=>$this->request->getVar('txtpassword')
        ];
        $id=$this->request->gerVar('id');
        $Admin->update($id,$datos);
        return $this->response->redirect(base_url('listarAdmins'));
    }

    public function validarAdmin()
    {   
        $Admin=new Administrador();
            $femail=$this->request->getPost('emailAD');

            $password1=$this->request->getPost('passwordAD');
            $password2=$this->request->getPost('passwordAD2');
            
        if($password1==$password2){
            $password3=$password1;
            $password4=$Admin->where('password',$password3)->first();
            $femail2=$Admin->where('correo',$femail)->first();

            if($femail==$femail2&&$password3==$password4){
                $session=session();
                $session->setFlashdata('mensaje','Usuario ingresado correctamente');
                return $this->response->redirect(base_url('listarAdmins'));
            }
            elseif($femail=!$femail2)
            {   
                $session=session();
                $session->setFlashdata('mensaje','Correo incorrecto');
                return $this->response->redirect(base_url('loginAdmin'));
            }
            elseif($password3=!$password4){
                $session=session();
                $session->setFlashdata('mensaje','Contraseña incorrecta');

                return $this->response->redirect(base_url('loginAdmin'));
            }

        }else{
            $session=session();
            $session->setFlashdata('mensaje','Algo salio mal introduce los datos nuevamente');
            return $this->response->redirect(base_url('loginAdmin'));
        }
        return $this->response->redirect(base_url('listarAdmins'));
    }//Validar Administrador

}