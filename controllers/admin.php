<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
        
    }
    
    function index()
    {
        $this->load->library('curl');

        $centros = array('HECELCHAKAN'=> 'Plantel 01 Hecelchakán',
                         'CANDELARIA'=> 'Plantel 02 Candelaria',
                         'ESCARCEGA'=> 'Plantel 03 Escárcega',
                         'SEYBAPLAYA'=> 'Plantel 04 Seybaplaya',
                         'ATASTA'=> 'Plantel 05 Atasta',
                         'MAMANTEL'=> 'Plantel 06 Mamantel',
                         'TENABO'=> 'Plantel 07 Tenabo',
                         'NUNKINI'=> 'Plantel 08 Nunkiní',
                         'CHAMPOTON'=> 'Plantel 09 Champotón',
                         'CHICBUL'=> 'Plantel 10 Chicbul',
                         'BECAL'=> 'Plantel 11 Bécal ',
                         'CALKINI'=> 'Plantel 13 Calkiní',
                         'XPUJIL'=> 'Plantel 14 Xpujil',
                         'LEY DE REFORMA AGRARIA'=> 'Plantel 15 Ley Federal de Reforma Agraria',
                         'ADOLFO LOPEZ MATEOS'=> 'Plantel 16 Adolfo López Mateos',
                         'NUEVO PROGRESO'=> 'Plantel 17 Nuevo Progreso',
                         'XBACAB'=> 'Plantel 18 Xbacab',
                         'LERMA'=> 'Plantel 19 Lerma',
                         'DON SAMUEL'=> 'Plantel 20 Don Samuel',
                         'LIBERTAD'=> 'Plantel 21 Libertad',
                         'UKUM'=> 'Emsad 01 Ukúm',
                         'ISLA AGUADA'=> 'Emsad 03 Isla Aguada',
                         'LA ESMERALDA'=> 'Emsad 04 La Esmeralda',
                         'BOLONCHEN DE REJON'=> 'Emsad 05 Bolonchén de Rejón',
                         'SIHO-CHAC'=> 'Emsad 06 Sihochac',
                         'EL DESENGAÑO'=> 'Emsad 07 El Desengaño',
                         'JOSE MARIA MORELOS'=> 'Emsad 08 El Civalito',
                         'EL AGUACATAL'=> 'Emsad 09 El Aguacatal',
                         'DZIBALCHEN'=> 'Emsad 11 Dzibalchén',
                         'EL JUNCAL'=> 'Emsad 12 El Juncal',
                         'EL CARMEN II'=> 'Emsad 13 El Carmen II',
                         'EL TESORO'=> 'Emsad 14 El Tesoro',
                         'CHINA'=> 'Emsad 18 Chiná',
                         'CONQUISTA CAMPESINA   '=> 'Emsad 19 Conquista Campesina',
                         'PICH'=> 'Emsad 20 Pich',
                         'EL NARANJO'=> 'Emsad 21 El Naranjo',
                         'COSNTITUCION'=> 'Emsad 22 Constitución');
       
        
        $alumno_json = $this->curl->set_user('cobacam','1psk2355')->get('https://rk.cobacam.edu.mx/api/wsalumnos/?type=json');


   

        $this->template->set('centros',$centros)
                ->title($this->module_details['name'])
                ->append_js('module::alumnos.controller.js')
                ->append_metadata('<script type="text/javascript"> var alumnos='.$alumno_json.';</script>')
                ->build('admin/index');
    }



 }
 ?>