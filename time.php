<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label {
                display: block;
                font: 1rem 'Fira Sans', sans-serif;
                font-size: 22px;
        }

        input, label {
                        margin: .4rem 0;
        }
        body {
                    background-color: #d5f591;
                    text-align: center;
        }
        small {
          font-size: 17px;
        }
        .four{
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
        #box {
                display: inline-block;
                width: 350px;
                height: 350px;
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
    </style>
</head>
<body>
<div class="topnav">
  <a href="ex1.php">Home</a>
  <a  class="active" href="time.php">Pickup</a>
  <a href="form.php">Seats Booking</a>
  <a href="feedback.php">Feedback</a>
</div>
<div id="box" class="four">
<label for="pick">Choose a time for your pickup!:</label>

<input type="time" id="pick" name="pick"
       min="08:00" max="15:30" required>

<small>Cafe/canteen closed at 3.30PM</small><br>

<form action="feedback.php" method="post"/>
    <input type="submit" value="Done"/>
    </form>
</div>
    
</body>
</html>