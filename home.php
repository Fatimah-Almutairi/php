<html>
<head>
<title>Home Page</title>
</head>
<body>
<h4>Enter your data:</h4>
<form>
    <input type="text" name= "height" placeholder="Enter your height"><br><br><br>
    <input type="radio" id="male" name="male" value="male">
  <label>Male</label><br>
  <input type="radio" name="female" value= "female">
  <label>Female</label><br><br>
  <input type="submit" name="button" value="submit">
  <form>
</body>
</html>

<?php
$gender = "male";
$old = 27;
$height = 155;
echo "<br>"."<br>";

if($gender="female" || $height <=160 && $old <=40){
    echo "Your width is nice";
}elseif($gender = "male" || $height >=165 && $height <190){
    echo "Your width is perfect";
}else{
    echo "Check your info is corect";
}
?>