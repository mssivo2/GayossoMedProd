<?php
namespace gayosso\clases;


Class Crm {    
    private $url_crm; 

	public function __construct() {                         
        //$this->url_crm = "https://apiqa.gayosso.com:446/GGAPILIRIO/api/Prospectos/InsertaProspecto"; // dev
		//$this->url_crm = "https://api.gayosso.com:448/GGAPILIRIO/api/Prospectos/InsertaProspecto"; // prod
        $this->url_crm = "https://phpstack-192319-3807343.cloudwaysapps.com/leads-gayosso.php";
    }	

    public function createLead($data){
        try{                
            $response = $this->call_url($method="POST", $data);            
            return $response;	
            
        } catch(\Exception $e){    
            return $e->getMessage();  
        }
    }

    public function call_url($method = "GET", $data = array()){
            $json_data = json_encode($data);
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $this->url_crm);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER,
				array(
					'Content-Type: application/json',
					'Authorization: Bearer 10247|8VRaiK27NXIMCbeImNE4P3wiDwyXRIVBgWeKL5lL'
				  )
			);
			//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
			//curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //medida temporal para pruebas
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); //medida temporal para pruebas
			$response = curl_exec($ch);
			return ($response === false) ? curl_error($ch) : true ;
			curl_close($ch);                   
    
    }
}
?>