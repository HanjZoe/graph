<?php
include 'day.php';
include 'bd.php';

$m = date('m');
$mouth = name_mouth($m);
$interval = '1';
$thisyear = date('Y');
$MonthJanuary = cal_days_in_month(CAL_GREGORIAN, $m, $thisyear); 
$data_selector1 = $thisyear . '-' . $m . '-'  .'1';
$data_selector2 = $thisyear . '-' . $m . '-'  .$MonthJanuary;
$num = array();
$vw = array();
$hs = array();
$ll = 0;
$sh = $MonthJanuary;
$date_string = "Прувет";
$res = mysqli_query($db, "SELECT * FROM `stats_visit` WHERE `date` BETWEEN '$data_selector1' AND '$data_selector2'");

$unic_user='';
$viewers = '';

  while ($row = mysqli_fetch_assoc($res))
    {
       
       if($date_string != $row['date']){
        $date_string = $row['date'];
        echo $date_string;
        echo "<br>";
        if($date_string[8] == '0'){
            //$date_pos = $date_pos . ' ' . $date_string[9];
            $num[] = intval("$date_string[9]");
        }
        else
        {
           // $date_pos = $date_pos . ' ' . $date_string[8] . $date_string[9]; 
            $date_pos1 = $date_string[8] . $date_string[9]; 
            echo $date_pos1;
            $num[] = intval("$date_pos1");
        }
        $vw[] = $row['views'];
        $hs[] = $row['hosts'];
      }
        
    
    
}

$res = mysqli_query($db,
"SELECT
    SUM(`start`) as start,
    SUM(`refused`) as refused,
    SUM(`recall`) as recall, 
    SUM(`meeting`) as meeting,
    SUM(`trying`) as trying, 
    SUM(`later`) as later,
    SUM(`waiting`) as waiting
FROM `status_t_call` WHERE DATE(`date`) = DATE(NOW())");
$row = mysqli_fetch_assoc($res);
$call_day_all =   $row['start'] . ' ' . $row['refused'] . ' ' . $row['recall'] . ' ' . $row['meeting'] . ' ' . $row['trying']. ' ' . $row['later'] . ' ' . $row['waiting'];

$call_day_one = '';
$call_mouth_one = '';

    
   $res = mysqli_query($db, "SELECT * FROM `stats_visit` ORDER BY `date` DESC LIMIT $interval");
   
    while ($row = mysqli_fetch_assoc($res))
    {

        $unic_user = $row['hosts'];
        $viewers = $row['views'];
    }
    
   var_dump($num);
  for ($day = 1; $day <= $MonthJanuary+1; $day++) {
     
    
    if($day == $num[$ll]){
    $hosts = $hosts . ' ' . $hs[$ll]; 
    $views = $views . ' ' . $vw[$ll];
    $ll++;
    echo $ll;
   echo "<br>";
    } else {
        $hosts = $hosts . ' ' . "0"; 
        $views = $views . ' ' . "0";
    }
   /*echo $day;
   echo "<br>";*/
}



if($num[6] == 30){
    echo "да";
}
    // Указываем кодировку, в которой будет получена информация из базы
    

    // Получаем из базы данные, отсортировав их по дате в обратном порядке в количестве interval штук
    
   
?>