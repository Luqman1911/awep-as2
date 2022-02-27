<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <style>
        body {
            background-color: #8cdba9;
            text-align: center;
              
        }
        .one{
            text-align: center;
            background: ghostwhite;  
            padding: 10px; 
            border: 1px solid lightgray; 
            margin: auto;
            height: 500px;
            width: 500px;
            
            
        }
        
        
        form, input {
            font-size: 20px;
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

    </style>
</head>

<body>
<div class="topnav">
  <a class="active" href="ex1.php">Home</a>
  <a href="time.php">Pickup</a>
  <a href="form.php">Seats Booking</a>
  <a href="feedback.php">Feedback</a>
</div>

    <h1>Select your menu</h1>
    <div id= "big" class= "one">
    <form action="index.php" method="post"/>
    <input type="checkbox" name="choice[]" value="1"/>Nasi katok $1<br/><br>
    <input type="checkbox" name="choice[]" value="2"/>Spaghetti $2<br/><br>
    <input type="checkbox" name="choice[]" value="3"/>Mee goreng $1<br/><br>
    <input type="checkbox" name="choice[]" value="4"/>Mee tiaw $1<br/><br>
    <input type="checkbox" name="choice[]" value="5"/>Ayam merah $1.50<br/><br>
    <input type="checkbox" name="choice[]" value="6"/>Daging rendang $1.50<br/><br>
    <input type="checkbox" name="choice[]" value="7"/>Cucur udang $1<br/><br>
    <input type="checkbox" name="choice[]" value="8"/>Cucur pisang $1<br/><br>
    <input type="checkbox" name="choice[]" value="9"/>Breadroll $1.50<br/><br>
    <input type="checkbox" name="choice[]" value="10"/>Sandwich $1<br/><br>

    <input type="submit" value="Order"/>
</div>
</form>

</body>
</html>