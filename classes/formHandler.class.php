
<?php

class FormHandler{
    private $name;
    private $weight;
    private $height;
    private $birthday;
    private $time;
    private $arrays=array();
    private $requiredFields=['name','weight','height'];
    private $allFields=['name','weight','height','birthday','time'];
    private $errors=array();

    function __construct($info){
        foreach($info as $key=>$value){
                if (in_array($key,$this->requiredFields)){

                    $this->$key=$value;

                }
           
        }
    }

    public function __get($property){
        return $this->$property??null;
    }
     

    
     function validation(){
        foreach($this->requiredFields as $field){

                if(empty($_POST[$field])){

                    $this->errors[$field]=ucfirst($field).' is required';

                }

        }

        if (!empty($this->errors)){
            echo 'Errors!<br/>';
            foreach($this->errors as $error){
                echo $error.'<br/>';
            }
            return false;
        }
       
        else{

            return true;
        }

    }
  
   

}

?>
