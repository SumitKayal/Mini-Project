<?php
include ("../config.php");
$email=$_POST['logInId'];
$password=$_POST['passwordId'];

$type=$_POST['type'];

if($type=='prof'){
    $sql="SELECT * FROM professor WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if( $result->num_rows==1){
        while($row=$result->fetch_assoc()){
            $col=$row;
            
        }
    
        if($col['Type']=="HOD"){
            session_start();
            $_SESSION['email']=$email;
            header("Location: ../HODhome.php");
        }
        else{
            session_start();
            $_SESSION['email']=$email;
            header("Location: ../7.Faculty Member Home Page\FacMemHome.php");
        }
    
        
    }
    else{
        header("Location: logIn.html");
    }
}
else if($type='stu'){
    $sql="SELECT * FROM stu_info WHERE sname='$email' AND exmroll='$password'";
    $result=$conn->query($sql);
    if($result->num_rows==1){
        while($row=$result->fetch_assoc()){
            $col=$row;
            
        }
        
        session_start();
        $_SESSION['email']=$password;
        header("Location: ../student.php");
    }
}






/*echo $email;
echo $password;*/
?>