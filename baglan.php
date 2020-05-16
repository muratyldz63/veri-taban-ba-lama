<?php 



try{

    $db=new PDO("mysql:host=localhost; dbname=udemy;",'root');
   // echo "başarılı";
}
catch (PDOException $e){
    echo $e->getMessage();
}




?>