
<?php
$insert = false;
if (isset($_POST['name'])){
$server = "localhost";
$username ="root";
$password ="";
$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("it's fail" . mysqli_connect_error());
}
$name = $_POST['name'];
$department = $_POST['department'];
     $location = $_POST['location'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
  $foodname = $_POST['foodname'];
$foodquantity = $_POST['foodquantity'];
 $otherinfo = $_POST['otherinfo']; 


$sql = "INSERT INTO `cafe`.`cafe` ( `name`, `department`, `location`, `email`, `phone`, `foodname`, `foodquantity`, `otherinfo`, `date`) VALUES ( '$name', '$department', '$location', '$email', '$phone', '$foodname ', '$foodquantity', '$otherinfo', current_timestamp());";

//echo $sql;
if($con->query($sql) == true)
{$insert = true;}
else{ echo "ERROR: $SQL <br> $conn->error";}

$result = mysqli_query($con, $sql);
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login from</title>
    <link rel="stylesheet" href="php.css">
</head>
<body>
    <div class="first"> <h1 class='firsth'>Give data and order</h1>
   
       
 <form action="lol.php" method="post">

<input type="text" name="name" id="name" placeholder="enter your name😀">
<input type="text" name="department" id="department" placeholder="enter your department🧑‍💻">
<input type="text" name="location" id="location" placeholder="enter your location🌎">
<input type="email" name="email" id="email" placeholder="enter your email📧">
 <input type="phone" name="phone" id="number" placeholder="enter your phone📞">
<input type="text" name="foodname" id="foodname" placeholder="food name🥗">
<input type="text" name="foodquantity" id="foodquantity" placeholder="food quantity🤏">
 <textarea name="otherinfo" id="otherinfo" cols="30" rows="10" placeholder="enter any other information"></textarea>
<button class="btn">👍🏼submit👍🏼</button>


<?php
        if($insert == true)
    {echo"<h2 class='submitMSG'>🎉Thanks for submiting🎉</h2>";}?>



</form>

    </div>
</body>
</html>
