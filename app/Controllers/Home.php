<?php

namespace App\Controllers;
use App\Models\Administrador;
class Home extends BaseController
{
    public function index()
    {   
        $datosA['pie']=view('template/piePagina');
        return view('inicio');
    }

    public function registroA()
    {

        return view('registroA');
    }
    public function registroP()
    {

        return view('registroP');
    }
    public function loginAdministradores()
    {

        return view('loginAdmin');
    }

    public function ingElectronica(){

        return view('ingElectronica');
    }
    public function ingElectrica(){

        return view('ingElectrica');
    }
    public function ingAutomatizacion(){

        return view('ingAutomatizacion');
    }
    public function ingAutomotriz(){

        return view('ingAutomotriz');
    }
    
}
