<?php 
   
    session_start();
    $sessID = session_id(); 
    setcookie("session_id",$sessID,time()+3600,"/","localhost",false,true); 

?>


<!DOCTYPE html>
<html>

<head>
  <title>colour_blue - another page</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="styleh.css" title="style" />
  <meta charset="utf-8"/>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script type="text/javascript" src="load.js"> </script>
  
  <style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #29425E;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #29425E;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 20;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
 
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        
      </div>
      <div id="menubar">
      </div>
    </div>
    
    
    <div id="content_header"></div>
   
  
   	
   	<div class="imgcontainer">
    <img src="Man.png" alt="Avatar" class="avatar">
  </div>

   	
    <div id="site_content">
      <div class="sidebar">

       
      </div>
      <div id="content">

 
 
 
 
 
 <form class="form-horizontal" method="POST" action="server.php" >
 	
 	 <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>
      <input type="hidden" id="Token" name="CSR_tok"/>  
    <button type="submit" name="bttLogin">Login</button>
    
    <input type="checkbox" checked="checked"> Remember me
      
      </div>
       <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
 	
                    
                </form>
  </div>

  
    </div>
    
    <?php  
       if(isset($_COOKIE['session_id']))
            { 
            	echo '<script> var token = loadDoc("POST","server.php","Token");  </script>';      
           }
    ?>
    
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; Hasi| SLLIT | SSS
    </div>
  </div>
</body>
</html>
