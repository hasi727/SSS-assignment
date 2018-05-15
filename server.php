<?php

session_start();

if(empty($_SESSION['key']))
{
    $_SESSION['key']=bin2hex(random_bytes(32));
    
}

$token = hash_hmac('sha256',"This is token:client.php",$_SESSION['key']);
$_SESSION['CSRF_tok'] = $token; 
ob_start(); 
echo $token;


if(isset($_POST['bttLogin']))
{
    ob_end_clean();
    loginvalidate($_POST['CSR_tok'],$_COOKIE['session_id'],$_POST['uname'],$_POST['pwd']);

}



function loginvalidate($CSRF,$usessionID, $uname, $pword)
{
    if($uname=="test" && $pword=="test" && $CSRF==$_SESSION['CSRF_tok'] && $usessionID==session_id())
    {
        echo "<script> alert('Login Sucess') </script>";
        echo "Tokens matches. You are successfuly loged in"."<br/>"; 
       
        //apc_delete('CSRF_token');
    }
    else
    {
        echo "<script> alert('Login Failed') </script>";
        echo "Login has Failed ! ";
        
    }
}


?>