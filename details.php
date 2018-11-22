<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Groups module
 *
 * @author PyroCMS Dev Team
 * @package PyroCMS\Core\Modules\Groups
 */
 class Module_Alumnos extends Module
{

	public $version = '1.0';

	public function info()
	{
		$info= array(
			'name' => array(
				'en' => 'Alumnos',
				
				'es' => 'Alumnos',
				
			),
			'description' => array(
				'en' => 'N/A',
				
				'es' => 'Clasifica las áreas y departamentos de los centros',
				
			),
			'frontend' => false,
			'backend' => true,
			'menu' => 'catalogo',
            //'name'=>'marcas:title',
            'uri' => 'admin/alumnos',

            
		);
        
        
        
        
        return $info;
	}

	public function install()
	{
	    
        return true;
		
	}

	public function uninstall()
	{
	  
		return true;
	}

	public function upgrade($old_version)
	{
		return true;
	}

}
?>