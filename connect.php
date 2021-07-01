<?php
$con = mysqli_connect('localhost' , 'root');
if($con)
{
    echo "connection succesfull";
}
else{
    echo "No connection";
}

mysqli_select_db($con , 'hostelmanagement');

$StudName = $_POST['StudName'];
$RegNo = $_POST['RegNo'];
$Gender = $_POST['Gender'];
$MobileNo = $_POST['MobileNo'];
$MailId = $_POST['MailId'];
$ParentNo = $_POST['ParentNo'];
$RoomNo = $_POST['RoomNo'];
$BlockNo = $_POST['BlockNo'];
$ENo = $_POST['ENo'];
$BHName = $_POST['BHName'];
$BANo = $_POST['BANo'];
$TId = $_POST['TId'];

$query = "insert into studentdetail (StudName , RegNo , Gender , MobileNo,MailId, ParentNo, RoomNo , BlockNo, ENo)
 values('$StudName' , '$RegNo' , '$Gender' , '$MobileNo' , '$MailId' , '$ParentNo' , '$RoomNo' , '$BlockNo' ,'$ENo') ;insert into feedetail (RegNo, BHName, BANo, TId)
 values('$RegNo','$BHName' , '$BANo' , '$TId' );";
;

mysqli_multi_query($con , $query);

header('location:addroom.html')
?>