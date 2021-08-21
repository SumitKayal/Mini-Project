<?php
include ("../config.php");
$email=$_POST['logInId'];
$password=$_POST['passwordId'];

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
/*echo $email;
echo $password;*/
?>