<?php
namespace gayosso\clases;

require_once './lib/PHPMailer/src/Exception.php';
require_once './lib/PHPMailer/src/PHPMailer.php';
require_once './lib/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


Class Mail {        
    private $host;
    private $username;
    private $password;
    private $from;
    private $to;

    function __construct() {
        $this->base_url = "https://www.gayossomed.com";
        $this->host ='correo.gayosso.com';
        $this->username ='paginaweb@gayosso.com';
        $this->password = 'P4g1N4W3b19$';
        $this->from = array('paginaweb@gayosso.com' => 'Gayosso'); // solo uno puede enviar
        $this->to = array('ccompaired@gayosso.com' => 'Christian Compaired'); // se pueden agregar mas destinatarios

    }

   public function Send($data_mail){
        try {       
            $mail = new PHPMailer();
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host       = $this->host;
            $mail->SMTPAuth   = true;
            $mail->Username   = $this->username;
            $mail->Password   = $this->password;
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            $mail->setFrom(key($this->from), current($this->from));
            foreach ($this->to as $email => $name) {
                $mail->addAddress($email, $name);
            }

            $msj = '                                        
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <meta charset="UTF-8">
                        <title>Newsletter</title>
                    </head>
                    <body>
                        <!-- Header -->
                        <div style="background-color: #f1f1f1; padding: 10px;">
                        <img src="'. $this->base_url .'/assets/images/logo_gayosoo_med.png" alt="Logo" style="height: 50px;">                            
                        </div>
                        
                        <!-- Contenido -->
                        <div style="padding: 10px;">
                            <p>Estimado/a ,</p>
                            <p>Le enviamos los siguientes datos:</p>
                            <table style="border-collapse: collapse; width: 100%;">                                
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 5px; width: 50%;">
                                            <p><strong>Nombre : </strong> '. $data_mail['name'] .'</p>
                                            <p><strong>Tel&eacute;fono : </strong>'. $data_mail['phone'] .'</p>
                                            <p><strong>Estado : </strong> '. $data_mail['state'] .'</p>
                                        </td>
                                        <td style="border: 1px solid black; padding: 5px; width: 50%;">
                                            <p><strong>Apellidos : </strong>'. $data_mail['lastname'] .'</p>
                                            <p><strong>E Mail : </strong> '. $data_mail['email'] .'</p>
                                            <p><strong>Interes : </strong> '. $data_mail['interest'] .'</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>Gracias por su atenci&oacute;n.</p>
                        </div>
                    </body>
                    </html>
                    
            ';
            
            $mail->isHTML(true);
            $mail->Subject = "Mensaje desde la Landing Page gayossomed.com";
            $mail->Body    = $msj;
            
            return ($mail->send()) ? true : $mail->ErrorInfo;                        

        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
?>