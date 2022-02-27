<!DOCTYPE html>

<html>

<head><title></title>

<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-messages.min.js"></script>

<script>
var app = angular.module('formApp', ['ngMessages']);


app.controller("formCtrl", function($scope){
	$scope.sendForm = function(){
	$scope.msg = "Your seats has been booked! Thank you! :)";
};
});
</script>

<style>
	body {
            background-color: #d5f591;
            text-align: center;
            
        }
        .three{
            text-align: center;
            background: ghostwhite;  
            padding: 10px; 
            border: 1px solid lightgray; 
            margin: auto;
            height: 500px;
            width: 500px;
     
        }
		button {
			font-size: 20px;
		}
		#square {
            display: inline-block;
			width: 430px;
			height: 430px;
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

<body ng-app="formApp" ng-controller="formCtrl">
<div class="topnav">
  <a href="ex1.php">Home</a>
  <a href="time.php">Pickup</a>
  <a class="active" href="form.php">Seats Booking</a>
  <a href="feedback.php">Feedback</a>
</div>

<h3>Book your seats</h3>
<div id="square" class="three">
<form name="personForm" ng-submit="sendForm()" novalidate="">

<label for="name">Name</label>
<input id="name" name="name" type="text">

<br><br>

<label for="head">For how many person?</label>
<input id="head" name="head" type="number">

<br><br>

<label for="contact">Contact No</label>
<input id="mobile" name="mobile" type="number">


<br><br>

<input type="checkbox" ng-model="terms" name="terms" id="terms" ng-required="true">
<label for="terms">Done</label>

<span ng-show="personForm.terms.$touched && personForm.terms.$error.required"></span>
<br><br>

<button type="submit" ng-disabled="personForm.$invalid">Book now</button>
<br><br>

<span>{{msg}}</span>



</div>
</form>
<form action="feedback.php" method="post"/>
    <input type="submit" value="Send us your feedback"/>
    </form>

</body>

</html>