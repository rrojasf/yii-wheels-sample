<?php
// this contains the application parameters that can be maintained via GUI
return array(
    // pagination size
    'pageSize'=>100,
    'defaultPageSize' => 100,    
    // pagination options
    'pageOptions'=>array(10 => 10, 20 => 20, 50 => 50, 100 => 100, 200 => 200, 500 => 500),    
	// Usuario Administrador (Para Rights -Modulo de roles y permisos)
    'adminId'=>1,
    // Default constants
    'defaultWorkspace'=>'eventos/admin',
    //'defaultWorkspace'=>'eventos/admin',
    'defaultNavSearch'=>'eventos/search',
    // comunicaciones
	'adminEmail'=>'robert.rojas@veanos.com',//'sholguin@zhana.com.co', // dlozano@jgb.com.co
	'mail' => array(
        'principal'=> array(
            'smtp'=>'smtp.gmail.com',
        ),
//         'alternativa' => array(
//             'smtp'=>'192.168.0.253',
//         ),
    ),
    'ftp'=> array(
        'username'=> 'developer@veahumanconsulting.com',
        'password'=> 'v342014',
        'ftp_path'=> '/Interfaces/CMM/',
        'server' => 'ftp.veahumanconsulting.com',
        'port'=>21
    ),
    'sharedNetworkResource' => array(
        'host'=> '',
        'username'=> '',
        'password'=> '',
    ),
    // extensiones soportadas para upload de archivos
    'extFiles'=>'jpeg|gif|jpg|png|pdf|doc|xls|ppt|docx|xlsx|pptx',    
    // Provider support settings
    'supportUrl'=>'http://support.veahumanconsulting.com',
    'demoMode'=>false,
    'dateFormat' => array(
        'config' => 'dev',
        'string' => array(
            'dev' => 'Y-m-d H:i:s',
            'pdn' => 'd/m/Y H:i:s'
        )
    ),
    'exportBasePath'=>dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR,
    'exportPath'=>'exports/movimientos/',
    'consoleExportPath'=>'exports\\movimientos\\',
    'exportPathMonth'=>'exports/movimientos/'.date('Y').'/'.date('m').'/',
    'consoleExportPathMonth'=>'exports\\movimientos\\'.date('Y').'\\'.date('m').'\\',
);