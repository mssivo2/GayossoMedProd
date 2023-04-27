<?php
namespace gayosso\clases;


Class Crm {    
    private $url_crm; 

	public function __construct() {                         
        //$this->url_crm = "https://apiqa.gayosso.com:446/GGAPILIRIO/api/Prospectos/InsertaProspecto";
		$this->url_crm = "https://api.gayosso.com:448/GGAPILIRIO/api/Prospectos/InsertaProspecto";
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
        $curl = curl_init($this->url_crm);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $json_data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));        
        $response = curl_exec($curl);           
        return ($response === false) ? curl_error($curl) : true;                    
    
    }
}
?>