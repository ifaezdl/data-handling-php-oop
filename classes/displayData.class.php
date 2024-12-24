
<!DOCTYPE html>
<html lang="en">
<head> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class DisplayData{
    

    public $jsonData;
    public static $jsonFile='JsonData.json';

    function __construct(){

        if(file_exists(self::$jsonFile)){
            $this->jsonData=json_decode(file_get_contents(self::$jsonFile),true);
                 
        
        }

    }

    public function makeTable(){
        if($this->jsonData){
            echo "<table class='table table-striped'><tbody>
            <tr>
            <thead>
               <th> name </th>
               <th> weight </th>
               <th> height </th> 
               <th> birthday </th>
               <th> time </th>
               </tr>
               </thead>
               <tbody>";
           foreach($this->jsonData as $data){
               echo "
               <tr>
               <td>".$data['name']."</td>
               <td>".$data['weight']."</td>
               <td>".$data['height']."</td>
               <td>".$data['birthday']."</td>
               <td>".$data['time']."</td>
               </tr>
               ";
        }      
        
        echo "</tbody>
        </table>";
        }
        else{

            echo "there's no data to show";
        }
  
}


}

?>
</body>
</html>
