<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #d5f591;
            text-align: center;
            font-size: 20px;
        }
        .two{
            .one{
            text-align: center;
            background: ghostwhite;  
            padding: 10px; 
            border: 1px solid lightgray; 
            margin: auto;
            height: 500px;
            width: 500px;  
        }
        }
        #small {
            display: inline-block;
			width: 450px;
			height: 570px;
			border: solid white;
            background-color: white;
            z-index: -1;
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
input {
    float: center;
}
    </style>
</head>

<body>
<div class="topnav">
  <a class="active" href="#ex1.php">Home</a>
  <a href="time.php">Pickup</a>
  <a href="form.php">Seats Booking</a>
  <a href="feedback.php">Feedback</a>
</div>
<div id="small" class="two">
    <?php
    if(isset($_POST["choice"])){
        $food=$_POST["choice"];
        $c= count($food);
        $price= 0.0;

        for($i=0; $i<$c; $i++){
            if($food[$i]==1){
                $price=$price+1;
                echo "You have selected Nasi katok<br><br>";
            }
            if($food[$i]==2){
                $price=$price+2;
                echo "You have selected Spaghetti<br><br>";
            }
            if($food[$i]==3){
                $price=$price+1;
                echo "You have selected Mee goreng<br><br>";
            }
            if($food[$i]==4){
                $price=$price+1;
                echo "You have selected Mee tiaw<br><br>";
            }
            if($food[$i]==5){
                $price=$price+1.50;
                echo "You have selected Ayam merah<br><br>";
            }
            if($food[$i]==6){
                $price=$price+1.50;
                echo "You have selected Daging rendang<br><br>";
            }
            if($food[$i]==7){
                $price=$price+1;
                echo "You have selected Cucur udang<br><br>";
            }
            if($food[$i]==8){
                $price=$price+1;
                echo "You have selected Cucur pisang<br><br>";
            }
            if($food[$i]==9){
                $price=$price+1.50;
                echo "You have selected Breadroll<br><br>";
            }
            if($food[$i]==10){
                $price=$price+1;
                echo "You have selected Sandwich<br><br>";
            }

        }
        echo "Total price is: $ " .$price. "<br><br>";
    }
    else{
        echo"Please choose something:";
    }

    ?>
    <form action="ex1.php" method="post"/>
    <input type="submit" value="Menu"/>
    </form>

    <form action="time.php" method="post"/>
    <input type="submit" value="Pickup"/>
    </form>

    <form action="form.php" method="post"/>
    <input type="submit" value="Dine In"/>
    </form>
    </div>
    
</body>
</html>