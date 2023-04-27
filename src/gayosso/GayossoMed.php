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

$data_mail['name'] = $name;
$data_mail['lastname'] = $lastname;
$data_mail['phone'] = $phone;
$data_mail['email'] = $email;
$data_mail['state'] = $state;
$data_mail['interest'] = $interest;

/*$data['agency'] = $request->input('agency');*/
$data['firstname']  = $name;
$data['middlename'] = $lastname;
$data['lastname'] = "";
$data['emailaddress1'] = $email;
$data['address1_telephone1'] = "";
$data['address1_telephone2'] = $phone;
$data['address1_telephone3'] = "";
$data['gys_codigopostalid'] = "";
$data['gys_dependientes_economicos'] = "0";
$data['gys_tarjeta_credito'] = "0";
$data['gys_estado'] = $state;
$data['gys_delegacion_municipio'] = "";
$data['gys_plaza'] = "";
$data['description'] = "";
$data['campaignid'] = "";
$data['gys_fuenteweb'] = "wwwgayosso";
$data['new_identificadordeprospecto'] = "WWWGAYOSSO";
$data['crmStatus'] = "0";
$data['fecha'] = date('Y-m-d\TH:i:s.v');


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
