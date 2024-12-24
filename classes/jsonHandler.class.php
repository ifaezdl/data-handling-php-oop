
<?php

class JsonHandler{

    private $data;
    private $jsonData=array();
    public static $jsonFile='JsonData.json';
    function __construct($data){

        $this->data=$data;

    }
    public function jsonMaker(){
        
        if (file_exists(self::$jsonFile)){
            $this->jsonData=json_decode(file_get_contents(self::$jsonFile),true);      
        
        }
        $this->jsonData[]=$this->data;
        file_put_contents(self::$jsonFile,json_encode($this->jsonData,JSON_PRETTY_PRINT));
        return $this->jsonData;

    }

}

?>