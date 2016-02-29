<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class MailManager extends CApplicationComponent
{
    public function init()
    {
        echo "Envio de Notificaciones";
    }
    
    public function sendMail($email, $type) {
        Yii::import('ext.yii-mail.YiiMailMessage');
		$message = new YiiMailMessage;	
		$today = date('Y-m-d');
		$tomorrow = date('Y-m-d');
         
        switch($type) {
            case "registro";
                $view = 'zhana_register';
                $action = 'Registro';
                $asunto = CHtml::encode('Registro de Usuario');
                break;
            case "manage";
                $view = 'zhana_reminder';
                $eventType = 'manage';
                $action = 'Recordatorio';
                $asunto = 'Recordatorio de Agendas';
                
                $adminUsers = Usuarios::model()->findAll(
                    array(
                        'condition' => 'usr_prf_id = 2 or usr_prf_id = 5'
                    ));
                
                $listmails = array();
                
                foreach($adminUsers as $recipient) {
                    array_push($listmails, $recipient->usr_email);    
                }
                
                $recipients = $listmails;
                
                $eventsList = Eventos::model()->findAll(
                    array(
                       'order'=>'evn_fecha_ini',
                       'condition' => 'evn_fecha_ini BETWEEN "' . $today . ' 00:00:00" AND "' . $today . ' 23:59:59"' 
                    ));
                
                $scheduleList = array();
                
                foreach($eventsList as $event) {
                    $scheduleList[] = array(
                      'id' => $event->evn_id,
                      'fecha_ini' => $event->evn_fecha_ini,
                      'fecha_fin' => $event->evn_fecha_fin,
                      'cliente_id' => $event->usr_id_cliente,
                      'cliente_nombre' => $event->usrIdCliente->cli_nombre,
                      //'esp_nombre' => $event->
                    );
                    //array_push($scheduleList, $event->evn_id);
                }
                
                break;    
            case "owner";
                $view = 'zhana_reminder';
                $eventType = 'owner';
                $action = 'Recordatorio';
                $asunto = 'Agendas del Día';
                
                $espUsers = Usuarios::model()->findAll(
                    array(
                        'condition' => 'usr_prf_id = 3'
                    ));

                $listmails = array();
                
                foreach($adminUsers as $recipient) {
                    array_push($listmails, $recipient->usr_email);
                }             
          
                
                $eventsList = Eventos::model()->findAll(
                    array(
                        'order'=>'evn_fecha_ini',
                        'condition' => 'evn_fecha_ini BETWEEN "' . $today . ' 00:00:00" AND "' . $today . ' 23:59:59"'
                    ));
                
                $scheduleList = array();
                
                foreach($eventsList as $event) {
                    $scheduleList[] = array(
                        'id' => $event->evn_id,
                        'fecha_ini' => $event->evn_fecha_ini,
                        'fecha_fin' => $event->evn_fecha_fin,
                        'usr_id_cliente' => $event->usr_id_cliente
                    );
                    //array_push($scheduleList, $event->evn_id);
                }
                
                break; 
            case "reminder";
                $view = 'zhana_reminder';
                $action = 'Recordatorio';
                $asunto = 'Recordatorio de Cita';
                
                $eventsList = Eventos::model()->findAll(
                    array(
                        'order'=>'evn_fecha_ini',
                        'condition' => 'evn_fecha_ini BETWEEN "' . $today . ' 00:00:00" AND "' . $today . ' 23:59:59"'
                    )); 

                $scheduleList = array();
                
                foreach($eventsList as $event) {
                    $scheduleList[] = array(
                        'id' => $event->evn_id,
                        'fecha_ini' => $event->evn_fecha_ini,
                        'fecha_fin' => $event->evn_fecha_fin,
                        'usr_id_cliente' => $event->usr_id_cliente
                    );
                    //array_push($scheduleList, $event->evn_id);
                }
                
                break;                
            case "members-status";
                $view = 'members-club-template-welcome';
                $action = 'Recordatorio';
                $eventType = 'Recordatorio';
                $asunto = 'Recordatorio de Cita';
                $scheduleList = array();
                $listmails = array('rbrt.rojas@gmail.com');
                break;      
            case "members-upgrade";
                $view = 'members-club-template-upgrade-gold';
                $action = 'Recordatorio';
                $eventType = 'Recordatorio';
                $asunto = 'Recordatorio de Cita';
                $scheduleList = array();
                $listmails = array('rbrt.rojas@gmail.com');
                break;   
            case "members-vigency";
                $view = 'members-club-template-vigency';
                $action = 'Recordatorio';
                $eventType = 'Recordatorio';
                $asunto = 'Recordatorio de Cita';
                $scheduleList = array();
                $listmails = array('rbrt.rojas@gmail.com');
                break;                                          
        }
        
        //var_dump($eventsList, $scheduleList, $listmails);exit;
        
        $subject = $asunto;//CHtml::encode('Registro de  Usuario');
        $body = array(
            'asunto'=>$asunto, 
            'saludo'=>'Cordial Saludo', 
            'accion'=>$action, 
            //'act_all' => "ABC",
            'scheduleList' => $scheduleList,
            'listmails' => $listmails, 
            'type' => $eventType,
            'url'=>"http://"."agenda.zhana.com.co"."/index.php",
            'base'=>"http://"."agenda.zhana.com.co");	

        $message->view = $view;					
        $message->subject = $subject;
        $message->setBody($body, 'text/html');		

        if(Yii::app()->params['demoMode']) {
            $message->setTo(Yii::app()->params["adminEmail"]); // GMM
        } else {
            if(!isset($recipients)) {
                $recipients = array();
                $destinatarios = $email;
    
                if(!is_null($destinatarios)) {
                    if(is_array($destinatarios)) {
                    foreach($destinatarios as $destinatario) {
                        array_push($recipients, $destinatario);
                    }                
                    } else {
                        array_push($recipients, $email);
                    }
                }
            }
            
            $message->setBcc($recipients); // GMM            
            $message->setTo(Yii::app()->params["adminEmail"]); // GMM
            //$message->setBcc($emailId); // GMM             
        }

        // Cambiar el Header del Remitente (Camuflar)
        $message->setFrom(array(Yii::app()->params["adminEmail"] => 'Sistema de Agendamiento Zhana IPS'));

        try {
            Yii::app()->mail->send($message);
            //Yii::app()->user->setFlash('contact','Mail OK.');					
            echo "\n" . 'Mail Ok' . "\n";			
        } catch (Exception $e) {
            //Yii::app()->user->setFlash('error','Error al enviar email: '.$e->getMessage());            
            Yii::log('Error al enviar email Agenda CRM', 'warning', 'application.components.MailManager');
            echo "\n" . 'No mail '.$e->getMessage() . "\n";
        }         
    } 
    public function sendMailTest() {
        Yii::import('ext.yii-mail.YiiMailMessage');
		$message = new YiiMailMessage;				
          
        $view = 'gmm_basic';			
        $subject = CHtml::encode('Control de Actividades Plan de Implementación');
        $body = array(
            'asunto'=>CHtml::encode('Control de Actividades Plan de Implementación'), 
            'saludo'=>'Cordial Saludo', 
            'accion'=>'TEST-MAIL2', 
            'act_all' => array(),
            'url'=>"http://".Yii::app()->getBaseUrl()."/index.php",
            'base'=>Yii::app()->getBaseUrl());	

        $message->view = $view;					
        $message->subject = $subject;
        $message->setBody($body, 'text/html');		
        $message->setTo('robert.rojas@veanos.com'); // GMM
        // Cambiar el Header del Remitente (Camuflar)
        $message->setFrom(array(Yii::app()->params["adminEmail"] => 'Sistema de Control Medios Motores'));

        try {
            Yii::app()->mail->send($message);
            Yii::app()->user->setFlash('contact','Mail OK.');					
            echo 'Mail Ok';			
        } catch (Exception $e) {
            Yii::app()->user->setFlash('error','Error al enviar email: '.$e->getMessage());            
            Yii::log('Error al enviar email GMM', 'warning', 'application.components.MailManager');
            echo 'No mail '.$e->getMessage();
        }         
    }    
}
