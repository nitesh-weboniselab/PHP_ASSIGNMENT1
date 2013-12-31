<?php

session_start();

if(isset($_REQUEST['login'])){

	
	if($_REQUEST['uname'] == 'nitesh' && $_REQUEST['pass'] == 'webonise6186')
		$_SESSION['login_user'] = "nitesh";
	
	
}

if(isset($_SESSION['login_user'])){
              	
                 echo $_SESSION['login_user'] ."  loged in";	
              }
              else{
              	echo "login again";
              }


if(isset($_SESSION['login_user'])){
       if(isset($_REQUEST['login'])){
          
       }  
}
if(isset($_REQUEST['logout'])){
	unset($_SESSION['login_user']);
	
}

?><html >

<body>
	
            <form name="login_form" method="post" action="">
                
                   <STRONG>Login Details</STRONG><br>
                    Username<input type="text" name="uname" id="uname"><br>
                    Password<input type="password" name="pass" id="pass"><br>
					
					
					<input type="submit" name="login" value="login"><br>
                    <input type ="submit" name="logout" value="logout"><br>
                
            </form>


              
    	
</body>
</html>
