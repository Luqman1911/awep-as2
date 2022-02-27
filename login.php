<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>

<style>

body { 
     background-color: #8cdba9;
}
.intro {
        text-align: center;
}
.loginbox_shadow {
            overflow: hidden;
            background-color: #FEFCFF;
            }
            *{box-sizing:border-box;
}
.shadow{
  -webkit-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
-moz-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
}
.navbutton {
            overflow: hidden;
            background-color: #98ff98;
}

.navbutton a {
            float: left;
            font-size: 16px;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
}

.navbutton a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
            background-color: white;
}
.logbutton a:hover {
            border:none; 
            outline:none; 
            color:white;
            background-color: #9e7bff; 

}
.navbutton {
            overflow: hidden;
            background-color: #33ab5f;
}

.navbutton a {
            float: left;
            font-size: 16px;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
}

.navbutton a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
            background-color: white;
}




</style>
  
    <div class="loginbox_shadow">

    <div class="intro">  

    <section class="index-intro">
        <h1>Welcome To Politeknik Brunei Canteen Book</h1>
        <h2>This website is made only for Politeknik staffs & students to book food & beverages </h2>
    </section>

</div>

<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
    </tr>
  </table>
</form>

<?php 

session_start(); /* Starts the session */
/* Check Login form submitted */if(isset($_POST['Submit'])){
/* Define username and associated password array */
$logins = array('luqman' => '1234567890');

/* Check and assign submitted Username and Password to new variable */
$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

/* Check Username and Password existence in defined array */
if (isset($logins[$Username]) && $logins[$Username] == $Password){
/* Success: Set session variables and redirect to Protected page  */
$_SESSION['UserData']['Username']=$logins[$Username];
header("location: ex1.php");
exit;
} else {
/*Unsuccessful attempt: Set error message */
$msg="<span style='color:red'>Invalid Login Details</span>";
}
}

?>

}


</main>
<?php ?>
</body>
</html>