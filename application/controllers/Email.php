<?php
@session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

class Email extends CI_Controller
{
 // Los Controladores deben extender de CI_Controller
    
    /**
     * El Constructor del Controlador carga los Modelos y los Helper que estaran disponibles en todas las funciones.
     * Tambien carga el Header asi se incorpora a todas las vistas.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->view("header");
        $this->load->helper("form");
    }

    // Recuperar contraseña
    public function restaurar()
    {
        
        $email = $this->input->post('email');
        
        $mail = new PHPMailer(true); // Passing `true` enables exceptions
        try {
            // Server settings : esto se configura desde vendor/phpmailer/phpmailer/PHPMailer.php
            
          //  $mail->SMTPDebug = 2; // Esto muestra el paso a paso del envio del email
            $mail->isSMTP(); // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'agentedeplaya@gmail.com'; // SMTP username
            $mail->Password = 'sugpadgcactysv'; // SMTP password
            $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587; // TCP port to connect to
                               
            // Recipients
            $mail->setFrom('agentedeplaya@gmail.com', 'Ignater'); //agregar remitente, el nombre es opcional
            $mail->addAddress($email, 'Usuario Nombre'); // Agregar destinatarios, el nombre es opcional
                                                                              
            // Aregar archivos
    //        $mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments
    //        $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name
                                                               
            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Recuperar contraseña';
            $mail->Body = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
            $mail->send();
            echo 'Mensaje enviado exitosamente';
        } catch (Exception $e) {
            echo 'Mensaje no se pudo enviar. Mailer Error: ', $mail->ErrorInfo;
        }
    }
}