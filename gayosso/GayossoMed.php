<?php
require_once 'clases/Mail.php';
require_once 'clases/Crm.php';

use gayosso\clases\Mail;
use gayosso\clases\Crm;

$name = htmlspecialchars(trim( $_POST['name'] ));
$lastname = htmlspecialchars(trim( $_POST['lastname'] ));
$phone = htmlspecialchars(trim( $_POST['phone'] ));
$email = htmlspecialchars(trim( $_POST['email'] ));
$state = htmlspecialchars(trim( $_POST['state'] ));
$interest = htmlspecialchars(trim( $_POST['interest'] ));
$utm_source = htmlspecialchars(trim( $_POST['utm_source'] ));
$utm_campaign = htmlspecialchars(trim( $_POST['utm_campaign'] ));
$utm_content = htmlspecialchars(trim( $_POST['utm_content'] ));

$data_mail['name'] = $name;
$data_mail['lastname'] = $lastname;
$data_mail['phone'] = $phone;
$data_mail['email'] = $email;
$data_mail['state'] = $state;
$data_mail['interest'] = $interest;

$data['source_url'] = "https://gayossomed.com";
$data['source_name'] = "Landing Gayossomed-".$utm_source;
$data['campaign'] =  "HASHTAG-GAYOSSOMED-".$utm_campaign."-".$utm_content;
$data['name']  = $name;
$data['lastname'] = $lastname;
$data['email'] = $email;
$data['phone'] = $phone;
$data['state'] = $state;
$data['interest'] = $interest;


if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $mail = new Mail();
    $responseMail = $mail->Send($data_mail);

    $crm = new Crm();
    $responseCrm = $crm->createLead($data);
} else {
    header('Location: /');
    exit();
}

if($responseMail == true && $responseCrm == true){
    $response = array("status" => 'true', "Message" => "<span style='color: green; font-weight:400;'>¡Se ha enviado con exito!</span>");
}else if($responseMail == true && $responseCrm == false){
    $response = array("status" => 'false', "Message" => "<span style='color: orange; font-weight:400;'>Solo Se ha enviado por email</span>");
}else if($responseMail == false && $responseCrm == true){
    $response = array("status" => 'false', "Message" => "<span style='color: orange; font-weight:400;'>Solo se ha guardado al CRM</span>");
}else{
    $response = array("status" => 'false', "Message" => "<span style='color: red; font-weight:400;'>No se llevo a cabo ninguna tarea.</span>");
}

echo json_encode($response);
exit();
