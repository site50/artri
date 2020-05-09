<?php
require_once('inc.session5.php');
session_start();
$database_name="product_details";
$con=mysqli_connect('localhost','dollorabel','205kmTRy7','dollorabel');
require_once('cart.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Contact Bogdanova Rimma</title>
<meta name="description" content="Website of Bogdanova Rimma. Contact." />
<meta name="robots" content="noodp" />
<meta name="keywords" content="Bogdanova Rimma, contact, Game for Kids, art work,  Website for Kids "/> 
<meta name="viewport" content="width=device-width, initial-scale=1"><!-- for mobile-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="jquery-3.4.1.js"></script>    
<style>
* {    box-sizing: border-box;}
body { margin: 0;
background: #20B2AA;
}

</style>

<nav class="navbar navbar-inverse" >
<div class="container-fluid" >
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main" aria-expanded="false">
<span class=sr-only>Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="http://artri.ru">About me</a>
</div>
<div class="collapse navbar-collapse" id="navbar-main">
<ul class="nav navbar-nav">
<li><a href="http://artri.ru/painting.html">Painting</a></li>
<li><a href="http://artri.ru/graphics.html">Graphics</a></li>
<li><a href="http://artri.ru/doll.html">Art dolls</a></li>
<li><a href="http://artri.ru/example.html">Example Websites</a></li>
<li><a href="http://artri.ru/shop.php">Shop</a></li>
<li ><a href="http://artri.ru/contact.php">Contact </a></li>
</ul>
</div>
</div>
</nav>
</head>
<body>
    <div class="container-fluid"> 
<marquee behavior="scroll" direction="left"><p ><b ><i>Please fill out the form below to submit your
advertisement to website or dollorabel@gmail.com </b></p>
</marquee>


    <?php
// define variables and set to empty values
$userErr = $emailErr = "";
$user = $email = $comment2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["user"])) {
    $userErr = "Name is required";
  } else {
    $user = test_input($_POST["user"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$user)) {
      $userErr = "Only letters and white space allowed";    }  }
      
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
 if (empty($_POST["comment2"])) {
    $comment2 = "";
  } else {
    $comment2 = test_input($_POST["comment2"]);
  }}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="row">
<div class="col-md-7 col-oran" style="background-color:green;">
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet"
 type="text/css"/>
<p><span class="error"></span></p>
<form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"enctype="multipart/form-data" autocomplete="off">
    <CENTER><h2><i>Contact Me</h2></CENTER>
  <div class="form-group" style="margin-top:10px;" >
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
     
      <input type="text" class="form-control"  name="user" value="<?php echo $user;?>" 
 autofocus pattern="^[a-zA-Z]+$" maxlength="10" required placeholder="your name"></p>
  <span class="error"> <?php echo $userErr;?></span>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" rows="23" cols="40" name="email" value="<?php echo $email;?>" 
  pattern="^[a-zA-Z]^+S\[ 0-9]+$\@\{19}" required placeholder="your email">
    </div>
  </div>
 <div class="form-group">
    <label class="control-label col-sm-2" for="comment2">Comment:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="comment2" value="" style="height: 74px; value="<?php echo $comment2;?>"
  autofocus pattern="^[a-zA-Z]+$\ ^[ 0-9]+$\\d+(,\d{2})?" maxlength="200" required placeholder="comment"   >
    </div>
  </div>  
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form> 
 
<CENTER>

</CENTER>
</div>
    
 <div class="col-md-5 col-oran" style="background-color:orange;">
  <?php
$query="SELECT * FROM shop ORDER BY id ASC";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result)){
        ?>
 <?php   }} ?>
     


<div class="table-responsive">
<table class="table table-bordered"    style="text-align:justify;background-color:rgba(231,55,122,0.4);font-family:Cambria;" "text-align:justify" >
<CENTER><h2 ><i>Shopping cart details </i></h2></CENTER>
<thead>
      <tr>
    <th class="text-center" >Product name</th>
    <th class="text-center" >Quantity</th>
    <th class="text-center">Price</th>
    <th class="text-center">Total price</th>
 </tr>
  <?php
  if(!empty($_SESSION["cart"])){
      $total=0;
      foreach ($_SESSION["cart"] as $key=>$value){
    ?>
    <tr>
    <td class="text-center"><?php echo $_SESSION['pname']=$value["item_pname"];?></td>
    <td class="text-center"><?php echo $_SESSION['quantity']=$value["item_quantity"];?></td> <!-- QUANTITY -->
    <td class="text-center">$<?php echo $_SESSION['price']=$value["product_price"];?></td>
<td class="text-center">$<?php echo ($value["item_quantity"] * $value["product_price"]);?></td><!-- number.and decimals. 15.42-->
    <?php
    $total=$total+($value["item_quantity"] * $value["product_price"]);}
    ?>
  </form>
    <tr>
    <td colspan="3" align="right"> TOTAL  </td>
    <th align="right">$<?php echo number_format($total);?></th>
    </tr>
    <?php   }    ?>
    </table>
</div>
</div>
</div>

<div class="row">
<div class="col-md-2 col-oran" >
 <?php
require 'blon.php';
?>
</div>

<div class="col-md-2 col-oran" >

<?php
 $mysqli = new mysqli('localhost','dollorabel','205kmTRy7','dollorabel');                 // WTHAT NEED UPLOUDE IN MYSQL
if ($_SERVER['REQUEST_METHOD'] =='POST')
{ $user = $mysqli->real_escape_string(htmlspecialchars($_POST['user']));
$email = $mysqli->real_escape_string(htmlspecialchars($_POST['email']));
$comment2 = $mysqli->real_escape_string(htmlentities($_POST['comment2']));
    
$_SESSION['user']=$user;
$_SESSION['email']=$email;
$_SESSION['comment2']=$comment2;
$sql = "INSERT INTO email (user, email,comment2)"
. "VALUES ('$user','$email','$comment2')";
if ($mysqli->query($sql) === true)
{echo 'Your message has been received! I will contact you soon.'.'</br>'.'Your name:   '.$user.'</br>','Your email: 
 '.$email.'</br>','Your comment:  '.$comment2.'</br>';}
}  
?>

</div>
<div class="col-md-3 col-oran" >
<?php
require 'tress.php';
?>

</div>


<div class="col-md-5 col-oran" >
 <?php
require 'dark2.php';
?>



</div>
</div>
</body>
</html>


