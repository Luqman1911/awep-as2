<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<body>
<style>
body{ 
    background-color: #8cdba9;
    text-align: center;
    
}
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: center;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
.form_box shadow {
            overflow: hidden;
            background-color: #5D5C61;
            }
            *{box-sizing:border-box;
}
.intro {
        text-align: center;
}
.form_box{
     background-color:white;
}
input{
    padding:5px;  margin-bottom:5px;
}
input[type="submit"]{
    border:none; 
    outline:none; 
    background-color:#679f1b; 
    color:white;
}
.heading{
    background-color: #ac1219; 
    color:white; 
    height:40px; 
    width:100%; 
    line-height:40px; 
    text-align:center;
}
.shadow{
  -webkit-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
-moz-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
}
p {
    font-size: 18px;
}

</style>
<div class="topnav">
  <a href="#ex1.php">Home</a>
  <a href="time.php">Pickup</a>
  <a href="form.php">Seats Booking</a>
  <a  class="active" href="feedback.php">Feedback</a>
</div>

 <div class="form_box shadow">

 <div class="intro">
    <section class="index-intro">
        <h1>Welcome To Politeknik Brunei Canteen Book</h1>
        <h2>This website is made only for Politeknik staffs & students to book food & beverages </h2>
    </section>
</div>

 <br/>

 <p><b>What do you think of our website?</b></p>
 <p>Do you have any suggestion for us? </p>
 <textarea name=" suggestion" rows="8" cols="40"></textarea>
 <br>
  <input type="submit" name="submit" value="Submit Form">
  <br>
  <br>
  <br>
</form>


    </div>
  </body>
</html>