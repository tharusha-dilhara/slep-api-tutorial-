<?php


$groupno=$_GET['id'];


$timetable=array(
    "12"=>array(
        array("day"=>"sunday","start_at"=>"11:00:00","will_start"=>"00:02:30","name"=>"ICS"),
        array("day"=>"monday","time"=>"10:00:00","will_start"=>"00:01:30","name"=>"IP"),
    ),
    "13"=>array(
        array("day"=>"monday","start_at"=>"11:00:00","will_start"=>"00:02:30","name"=>"ICS"),
        array("day"=>"sunday","time"=>"10:00:00","will_start"=>"00:01:30","name"=>"IP"),
        array("day"=>"monday","start_at"=>"12:00:00","will_start"=>"00:03:30","name"=>"CS"),
        array("day"=>"monday","time"=>"08:00:00","will_start"=>"00:01:30","name"=>"IP"),
    ),
    "15"=>array(
        array("day"=>"sunday","start_at"=>"13:00:00","will_start"=>"00:04:30","name"=>"ICS"),
        array("day"=>"sunday","time"=>"16:00:00","will_start"=>"00:04:30","name"=>"IP"),
    ),
);

//array to select group all data
$rs=$timetable["$groupno"];

// echo '<pre>';
// print_r($rs);
// echo '<hr>';

$final=array();


foreach($rs as $temp){

    if($temp["day"] == strtolower(date("l"))){
        array_push($final,$temp);
        
    }
}

echo json_encode($final);





