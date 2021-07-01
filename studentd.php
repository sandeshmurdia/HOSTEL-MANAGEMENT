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

$sql = "SELECT * from studentdetail where RegNo=$RegNo";
$result = $con-> query($sql);
if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>" . $row["StudName"] . "</td><td>". $row["Gender"] . "</td></tr>" ;
    }
    echo "</table>";
}
$con-> close();
header('location:student.html')
?>