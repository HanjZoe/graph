<?php
 include 'bd.php';

//var_dump($_POST);
//echo $_POST["dataQuery"];


//$jsonData = json_decode($_POST["dataQuery"], true);

$res = mysqli_query($db, "SELECT * FROM `t_call` WHERE date(`date_meet`) = '2022-06-06'");
  while ($row = mysqli_fetch_assoc($res))
    {
        $jsonData = json_decode($_POST["dataQuery"], true);

       $jsonData['comp_name'] = $row['comp_name'];
        $jsonData['status_bid'] = $row['status_bid']; 
         $jsonData['id'] = $row['id']; 
       //$jsonData['status_bid'] = "<a href='#'>".$row['status_bid']."</a>";  
       
        $jsonStr = json_encode($jsonData);
        echo $jsonStr;
      //var_dump($jsonStr);
    
    }
  
//$jsonStr = json_encode($jsonData);
        


//header('Content-Type: application/json');

//var_dump($jsonStr);
//echo $jsonStr;
//return $jsonStr;
//var_dump([$jsonData]);
?>