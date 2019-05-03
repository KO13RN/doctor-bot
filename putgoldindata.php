<?php

$bulk = new MongoDb\Driver\BulkWrite;


$Customername = $_POST["Customername"];
$money = $_POST["money"];
$mass = $_POST["mass"];



$golduser = [
//'_id' => new MongoDB\BSON\ObjectId,
'Customername' => $Customername,
'money' => $money,
'mass' => $mass,

];



try{
    $bulk->insert($golduser);
    $manager = new MongoDb\Driver\Manager('mongodb://testclstermongodb-qdoan.mongodb.net');
    $result = $manager->executeBulkWrite('onelifebooking.phpbasic',$bulk);
    echo "Data Added";

  } catch(MongoDb\Driver\Execute\Exception $e){
    die("Error Encountered : " .$e );
  }
 ?>
 <html>
   <body>
     <br>PDF Created Click <a href="จองทอง.php">here</a> to Download
   </body>
 </html>
