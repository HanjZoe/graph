<?php
// Если в массиве GET есть элемент interval (т.е. был клик по одной из ссылок выше)
    include 'dayspliter.php';
    include 'bd.php';
    $data_selector1 = $thisyear . '-' . $m . '-'  .'1';
    $data_selector2 = $thisyear . '-' . $m . '-'  .$MonthJanuary;
    $key = array("start", "refused","recall","meeting","trying","later","waiting");
    $thisday = date('d');
    $data_selector3 = $thisyear . '-' . $m . '-'  .$thisday;
    $status_bid_code = 'later';
   
/* $res = mysqli_query($db,
"SELECT
    SUM(`start`) as start,
    SUM(`refused`) as refused,
    SUM(`recall`) as recall, 
    SUM(`meeting`) as meeting,
    SUM(`trying`) as trying, 
    SUM(`later`) as later,
    SUM(`waiting`) as waiting
FROM `status_t_call` WHERE DATE(`date`) BETWEEN '$data_selector1' AND '$data_selector2'");
$row = mysqli_fetch_assoc($res);
$call_mouth_all = $row['start'] . ' ' . $row['refused'] . ' ' . $row['recall'] . ' ' . $row['meeting'] . ' ' . $row['trying']. ' ' . $row['later'] . ' ' . $row['waiting'];

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


 $res = mysqli_query($db,
"SELECT
    SUM(`start`) as start,
    SUM(`refused`) as refused,
    SUM(`recall`) as recall, 
    SUM(`meeting`) as meeting,
    SUM(`trying`) as trying, 
    SUM(`later`) as later,
    SUM(`waiting`) as waiting
FROM `status_t_call` WHERE `id_user` = '4' AND DATE(`date`) BETWEEN '$data_selector1' AND '$data_selector2'");
$row = mysqli_fetch_assoc($res);
$call_mouth_one =   $row['start'] . ' ' . $row['refused'] . ' ' . $row['recall'] . ' ' . $row['meeting'] . ' ' . $row['trying']. ' ' . $row['later'] . ' ' . $row['waiting'];

$res = mysqli_query($db,
"SELECT
    SUM(`start`) as start,
    SUM(`refused`) as refused,
    SUM(`recall`) as recall, 
    SUM(`meeting`) as meeting,
    SUM(`trying`) as trying, 
    SUM(`later`) as later,
    SUM(`waiting`) as waiting
FROM `status_t_call` WHERE `id_user` = '4' AND DATE(`date`) = DATE(NOW())");
$row = mysqli_fetch_assoc($res);
$call_day_one =   $row['start'] . ' ' . $row['refused'] . ' ' . $row['recall'] . ' ' . $row['meeting'] . ' ' . $row['trying']. ' ' . $row['later'] . ' ' . $row['waiting'];*/




 //mysqli_query($db, "INSERT INTO `status_t_call` SET `date`= NOW(), `start`=0,`refused`=0, `recall` = 0, `meeting` = 0, `trying` = 0, `later` = 0, `waiting` = 0, `id_user` = 0");
    /*for($i = 0; $i < count($key); $i++){
       $tt = mysqli_query($db, "SELECT COUNT(*) FROM `t_call` WHERE `status_bid_code` = '$key[$i]' AND `data_call` BETWEEN '$data_selector1' AND '$data_selector2' ");
        $row = mysqli_fetch_assoc($tt);
        $rr = $rr. ' '.$row['COUNT(*)']; 
        $tt1 = mysqli_query($db, "SELECT COUNT(*) FROM `t_call` WHERE `status_bid_code` = '$key[$i]' AND `data_call` = '$data_selector3' ");
        $row = mysqli_fetch_assoc($tt1);
        $rr1 = $rr1. ' '.$row['COUNT(*)']; 
    }*/
   /* $date = date("Y-m-d");
    $res = mysqli_query($db, "SELECT `id` FROM `status_t_call` WHERE DATE(`date`) = '$date'") or die ("Проблема при подключении к БД");

// Если сегодня еще не было посещений
if (mysqli_num_rows($res) == null)
{
 mysqli_query($db, "INSERT INTO `status_t_call` SET `date`=NOW(), `start`=0,`refused`=0, `recall` = 0, `meeting` = 0, `trying` = 0, `later` = 0, `waiting` = 0");
}
     //$res = mysqli_query($db, "SELECT TIMEDIFF('2011-04-16 23:55:00', '2011_04-16 14:50:00'") or die ("Проблема при подключении к БД");
   $res = mysqli_query($db, "SELECT * FROM `update_call_history` WHERE `id_call` = '$id_call'") or die ("Проблема при подключении к БД");
    $row = mysqli_fetch_assoc($res);
    $last_udate = $row['date_upate'];
    $last_bit_code = $row['status_bid_code'];
    $id_user = $row['id_user'];
    
    $sql = mysqli_query($db, "SELECT  TIMEDIFF(NOW(), '$last_udate') as kekw") or die ("Проблема при подключении к БД");
    $row = mysqli_fetch_assoc($sql);
    echo $row['kekw'];*/




 /*  $res = mysqli_query($db, "SELECT `id` FROM `status_t_call` WHERE `date`= NOW() AND `id_user` = '$userid' ") or die ("Проблема при подключении к БД");
    if (mysqli_num_rows($res) == 0){
        echo 'kek';
    }*/
  
 /*$tt = mysqli_query($db, "SELECT COUNT(*) FROM `t_call` WHERE `status_bid_code` LIKE '$key[2]' AND `data_call` BETWEEN '$data_selector1' AND '$data_selector2' ");
  $row = mysqli_fetch_assoc($tt);
        $rr = $rr. ' ' .$row['COUNT(*)'];*/

   
        
    /*$res = mysqli_query($db, "SELECT * FROM `update_call_history` WHERE `id_call` = '$id_call'") or die ("Проблема при подключении к БД");
    $row = mysqli_fetch_assoc($res);
    $last_udate = $row['date_upate'];
    $last_bit_code = $row['status_bid_code'];
    echo "last";
    echo "<br>";
    echo $last_udate;*/
$num = array();
$start = array();
$refused = array();
$recall = array();
$meeting = array();
$trying = array();
$later = array();
$waiting = array();
echo "<br>";
    $res = mysqli_query($db, "SELECT * FROM `status_t_call` WHERE `id_user` = '4' and DATE(`date`) BETWEEN '$data_selector1' AND '$data_selector2'");
   /* $row1 = mysqli_fetch_array($res);
    var_dump($row1);*/
    echo "<br>";
  while ($row = mysqli_fetch_assoc($res))
    {
       
        if($date_string != $row['date']){
        $date_string = $row['date'];
        //echo $row['date'];
        echo '<br>';

        if($date_string[8] == '0'){

        
            $num[] = intval("$date_string[9]");
        }
        else
        {
         
            $date_pos1 = $date_string[8] . $date_string[9]; 
            $num[] = intval("$date_pos1");
        }
        $start[] = $row['start'];
        $refused[] = $row['refused'];
        $recall[] = $row['recall'];
        $meeting[] = $row['meeting'];
        $trying[] = $row['trying'];
        $later[] = $row['later'];
        $waiting[] = $row['waiting'];
      }
    
    }
    $ll = 0;
    echo "<br>";
var_dump($num);
echo "<br>";
      for ($day = 1; $day <= $MonthJanuary; $day++) {

    if($day == $num[$ll]){
       echo "да";
       echo "<br>";
       echo $num[$ll];
       echo "<br>";
        $st = $st . ' ' . $start[$ll]; 
        $rf = $rf . ' ' . $refused[$ll];
        $rc = $rc . ' ' . $recall[$ll]; 
        $mt = $mt . ' ' . $meeting[$ll];
        $tr = $tr . ' ' . $trying[$ll]; 
        $lt = $lt . ' ' . $later[$ll];
        $wt = $wt . ' ' . $waiting[$ll];

    $ll++;
    } else {
        /*$st = $st . ' ' . '0'; 
        $rf = $rf . ' ' . '0';
        $rc = $rc . ' ' . '0'; 
        $mt = $mt . ' ' . '0';
        $tr = $tr . ' ' . '0'; 
        $lt = $lt . ' ' . '0';
        $wt = $wt . ' ' . '0';*/
        $st = $st . ' ' . $day; 
        $rf = $rf . ' ' . $day;
        $rc = $rc . ' ' . $day; 
        $mt = $mt . ' ' . $day;
        $tr = $tr . ' ' . $day; 
        $lt = $lt . ' ' . $day;
        $wt = $wt . ' ' . $day;
    }
       /* $st = $st . ' ' . $start[$day]; 
        $rf = $rf . ' ' . $refused[$day];
        $rc = $rc . ' ' . $recall[$day]; 
        $mt = $mt . ' ' . $meeting[$day];
        $tr = $tr . ' ' . $trying[$day]; 
        $lt = $lt . ' ' . $later[$day];
        $wt = $wt . ' ' . $waiting[$day];*/
}
echo "<br>";



$qwe = (3-5)/3*100;
echo round($qwe,2);





 $id_call = 4;
                                    $date = date("Y-m-d");
                                    
                                        $select_sql1 = "SELECT * FROM t_call WHERE id = '$id_call'";
                                        $result1 = mysqli_query($db, $select_sql1);
                                        $row1 = mysqli_fetch_array($result1);

                                        $date_call = date("Y-m-d", strtotime($row['date']));

                                        $today = date("H:i:s", strtotime($row['date'])); 


                                        $select_sql1 = "SELECT * FROM t_call WHERE caller='$userid' AND NOT status_bid_code = 'refused' AND NOT status_bid_code = 'start' AND NOT status_bid_code = 'in_plane' AND `deadline` BETWEEN '2022-01-01 00:00:00' AND NOW() ";
                                        $result1 = mysqli_query($db, $select_sql1);
                                        $notif1 = $notif1 + mysqli_num_rows($result1);


                                        $select_sql321 = "SELECT * FROM t_bid WHERE `processed` = '0'";
                                        $result321 = mysqli_query($db, $select_sql321);
                                        $notif = mysqli_num_rows($result321);

                                        if ($notif>0)
                                        {
                                            printf('
                                            <a href="notification.php?stat=1" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                                <p class="notify-details">Есть заявки с сайта<small class="text-muted">У вас %s заявок с сайта</small></p>
                                            </a>
                                        ', $notif); 
                                        }

                                        if ($notif1>0)
                                        {
                                            printf('
                                            <a href="notification.php?stat=2" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                                <p class="notify-details">У вас есть звонки на сегодня<small class="text-muted">У вас %s звонков на сегодня</small></p>
                                            </a>
                                        ', $notif1); 
                                        }
                                        $sess = 4;

?>

 <head>
    <meta charset="utf-8" />
 </head>

  <link href="css/toast.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>
  <script src="js/toast.js"></script>
  




                                                    <h4 class="start"><?= $st ?></h4>
                                                    <h4 class="refused"><?= $rf ?></h4>
                                                    <h4 class="recall"><?= $rc ?></h4>
                                                    <h4 class="meeting"><?= $mt ?></h4>
                                                    <h4 class="trying"><?= $tr ?></h4>
                                                    <h4 class="later"><?= $lt ?></h4>
                                                    <h4 class="waiting"><?= $wt ?></h4>
                                                    <h4 class="session"><?= $sess ?></h4>




 <div style="max-width: 280px; padding: 15px; border: 1px solid #f5f5f5;">
    <div style="margin-bottom: 0.5rem;">
      Название заголовка:
      <input name="toast-title" type="text" value="Заголовок" style="width: 100%;">
    </div>
    <div style="margin-bottom: 0.5rem;">
      <input name="toast-without-title" type="checkbox">без заголовка
    </div>
    <div style="margin-bottom: 0.5rem;">
      Текст сообщения:
      <input name="toast-text" type="text" value="Сообщение..." style="width: 100%;">
    </div>
    <div style="margin-bottom: 0.5rem;">
      Тема:
      <select class="form-control" name="toast-theme" style="width: 100%;">
        <option selected value="default">default</option>
        <option value="primary">primary</option>
        <option value="secondary">secondary</option>
        <option value="success">success</option>
        <option value="danger">danger</option>
        <option value="warning">warning</option>
        <option value="info">info</option>
        <option value="light">light</option>
        <option value="dark">dark</option>
      </select>
    </div>
    <div style="margin-bottom: 0.5rem;">
      <input name="toast-autohide" type="checkbox" checked>автоматически скрывать
    </div>
    <div style="margin-bottom: 0.5rem;">
      Скрывать через (миллисекунд):
      <input name="toast-interval" type="text" value="10000" style="width: 100%;">
    </div>
    <div style="margin-bottom: 0.5rem;">
      <button id="add-toast" type="button" style="width: 100%;">Добавить toast</button>
      <button id="add-toast1" type="button" style="width: 100%;">Добавить</button>
      <button id="add-toast2" type="button" style="width: 100%;">Добавить</button>
    </div>
  </div>

<script>
    let qw = document.querySelector(".session").innerText.split(' ');
    let ss = {
        "id": "sdasd",
        "rt": "adsdasd"
    }
    console.log(ss);
    let jsonStr = JSON.stringify(ss);
    function getOutput() {

$.ajax({
      url:'shshsh.php',
      method: 'post',
      dataType: 'html',
      data: {"dataQuery": jsonStr},
      success: function(data){
        //console.log(data);
       let t = 1;
        let objt = '';


        for(let i = 0; i<data.length; i++){
            //console.log(i);
            if(data[i] != '{'){
            if(data[i] != '}'){
               
                  objt += data[i];
                
                t++;
            }  else{  
            objt = '{' + objt; 
            objt += '}';
            t = 1;
            let qw  = JSON.parse(objt);
            console.log(qw);
            new Toast({
            //title: document.querySelector('[name="toast-title"]').value,
            title: qw['comp_name'],
            // text: document.querySelector('[name="toast-text"]').value,
            text:  qw['status_bid'],
            texturl: qw['id'],
            theme: 'danger',
            autohide: false,
            });
            objt = '';
             /*let op = String(objt);
             console.log(op);*/
            }
            } 
           
        }
        //console.log(objt);
       // alert(jsonStr["rt"]);
        //console.log(ss);
        //let qw  = JSON.parse(data[0]);
         //console.log(qw);
        /////////////////////////////////
        
        //////////////////////////////////
}

  });
}
  /*$.ajax({
      url:'/shshsh.php',
      method: 'post',
      dataType: "script"
  });*/

    document.querySelector('#add-toast1').onclick = () => {
      // alert(jsonStr);
        getOutput();

}

setInterval(function() {

}, 9999999999999999)

</script>
    <script src="toast.js"></script>






 <h4 class="call_mouth_one"><?= $call_mouth_one ?></h4>
        <h4 class="call_day_one"><?= $call_day_one ?></h4>


 <div id="d2_payment" class="apex-charts"></div>

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body mb-0">
                                        <div class="row">                                            
                                            <div class="col-8 align-self-center">
                                                <div class="">
                                                    <h4 class="mt-0 header-title">Просмотров</h4>
                                                    <h2 class="mt-0 font-weight-bold"><? echo $viewers; ?></h2> 
                                                    <p class="mb-0 text-muted"><span class="text-success"><i class="mdi mdi-arrow-up"></i>14.5%</span> Up from yesterday</p>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-4 align-self-center">
                                                <div class="icon-info text-right">
                                                    <i class="dripicons-wallet bg-soft-success"></i>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                    <div class="card-body overflow-hidden p-0">
                                        <div class="d-flex mb-0 h-100 dash-info-box">
                                            <div class="w-100">                                                
                                                <div class="apexchart-wrapper">
                                                    <h4 class="call_mouth_all"><?= $call_mouth_all ?></h4>
                                                        <h4 class="call_day_all"><?= $call_day_all ?></h4>
                                                    <<h4 class ="mouth"> <?= $mouth ?></h4>
                                                    <h4 class="simon"><?= $sh ?></h4>
                                                    <h4 class="hosts"><?= $hosts ?></h4>
                                                    
                                                    
                                                    <div id="dash_spark_1" class="chart-gutters"></div>

                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body overflow-hidden p-0">
                                        <div class="d-flex mb-0 h-100 dash-info-box">
                                            <div class="w-100">                                                
                                                <div class="apexchart-wrapper">
                                                    <h4 class="views"><?= $views ?></h4>
                                                    <div id="apex_column1" class="chart-gutters"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end card-body-->                                                                    
                                </div><!--end card-->
                            </div><!--end col-->
                            <div id="d1_payment" class="apex-charts"></div>


 <div class="col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" id="profile-tabContent">
                                            <div class="tab-pane fade <? echo $tabactive1; ?>" id="profile-dash">
                                                <h4 class="header-title mt-0">Мой график</h4>

                                                <div id="" style='display: none;'>
                                                    <h1 id="are1">123</h1>
                                                </div>
                                                <div id="are2" style='display: none;'>
                                                    встречь
                                                </div>





                                                <div class="chart-demo dash-apex-chart m-0">
                                                    <div id="d2_overview" class="apex-charts"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="card shadow-none  overflow-hidden">
                                                            <div class="card-body bg-gradient2">
                                                                <div class="">
                                                                    <div class="card-icon">
                                                                        <i class="fas fa-coins"></i>
                                                                    </div>
