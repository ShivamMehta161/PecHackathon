<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$mailid=$_POST['mailid'];
$options=$_POST['options'];
$q1=$_POST['q1'];
$conn=new mysqli('localhost','root','feedback');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into feedback_data(firstname,lastname,mailid,options,q1) values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$firstname,$lastname,$mailid,$options,$q1);
    $stmt->execute();
    echo "feedback submitted sucessfully...";
    $stmt->close();
    $conn->close();

}

?>