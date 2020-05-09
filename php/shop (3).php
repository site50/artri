<?php
require_once('inc.session5.php');
session_start();
$database_name="dollorabel";
$con=mysqli_connect('localhost','dollorabel','205kmTRy7','dollorabel');
require_once('cart.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Shop websites of Bogdanova Rimma</title>
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
<!-- Контейнер -->
<div class="container-fluid" >
<!-- Заголовок -->
<div class="navbar-header">
<!-- Кнопка «Гамбургер» -->
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main" aria-expanded="false">
<span class=sr-only>Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<!-- Бренд или название сайта -->
<a class="navbar-brand" href="http://artri.ru">About me</a>
</div>
<!-- Основная часть меню -->
<div class="collapse navbar-collapse" id="navbar-main">

<!-- Содержимое основной части -->
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
<div class="row">
<div class="col-md-1 col-oran" > </div>
<div class="col-md-10 col-oran" style="background-color:green;">
<CENTER><i><h3><b>SHOP</b></h3>
<h4> You can order SVG, paintings, animation, graphics, dolls.
Prices, conditions delivery and deadline are agreed upon.</h4>
<div class="table-responsive">
<table class="table table-bordered  "    style="text-align:center;font-size:5px;">
<tbody>
<tr>
<?php
$query="SELECT * FROM shop ORDER BY id ASC";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_array($result)){
?>
<td valign="bottom" ><img  src='<?php echo $row["image"];?>'  width="120"/></br>
<h5><?php echo $row["pname"];?> </br>
$ <?php echo $row["price"];?> </br>
<form method="post" action='shop.php?action=add&id=<?php echo $row["id"]?>'>
<input type="digit" name="quantity"  value="" size='8'
placeholder="input quantity" required pattern="^[ 0-9]+$"></br>
<input type="hidden"  name='price' value="<?php echo $row["price"];?>">
<input type="hidden"  name='pname' value="<?php echo $row["pname"];?>">
<input type="hidden"  name='user'  >
<input type="hidden"  name='email' >
<input type="hidden"  name='comment3' >
<input type="submit" class="btn btn-danger btn-md" name="add" value="Add to cart"></div></td>
</form>  <?php   }} ?>
</tr>
</tbody>
</table>
</div>
</div>
<div class="col-md-1 col-oran" > </div>
</div>
<div class="row">
<div class="col-md-1 col-oran" > </div>
<div class="col-md-5 col-oran" style="background-color:orange;">

<div class="table-responsive">
<table class="table table-bordered"    style="text-align:justify;background-color:rgba(231,55,122,0.4);font-family:Cambria;" "text-align:justify" >
<CENTER><h2 ><i>Shopping cart details </i></h2></CENTER>
<thead>
      <tr>
    <th class="text-center" >Product name</th>
    <th class="text-center" >Quantity</th>
    <th class="text-center">Price</th>
    <th class="text-center">Total price</th>
    <th class="text-center">Remove item</th>
 </tr>
</thead>
<tbody>
<?php
if(!empty($_SESSION["cart"])){
$total=0;
foreach ($_SESSION["cart"] as $key=>$value){
?>
<tr  >
<td class="text-center"><i><h5><?php echo $_POST['pname']=$value["item_pname"];?></h5></td>
<td class="text-center" ><i><h5><?php echo $_POST['quantity']=$value["item_quantity"];?></h5></td>
<td class="text-center" ><i><h5>$<?php echo $_POST['price']=$value["product_price"];?></h5></td>
<td class="text-center" ><i><h5>$<?php echo ($value["item_quantity"] * $value["product_price"]);?></h5></td>
<form method='POST' action='shop.php'    >
<td><input type='hidden' name='pname'value="<?php echo $row['pname']; ?>" />
<input type='hidden' name='quantity'value="<?php echo $row['quantity']; ?>" />
<input type='hidden' name='price'value="<?php echo $row['price']; ?>" />
<a href="shop.php?action=delete&id=<?php echo $value['product_id'];?>">
<CENTER><h5><b  >Remove</h5></a></CENTER>
</tr>
<?php
$total=$total+($value["item_quantity"] * $value["product_price"]);
}
?>
</form>
<tr>
<td colspan="3" align="right"><i> TOTAL  </td>
<th align="right" style=background:white;"  ><i>$<?php echo number_format($total);?></th>
<td></td>
</tr>
<?php }    ?>
</tbody>
</table>
</div>
</div>
<div class="col-md-5 col-oran" style="background-color:pink;">
<div class="table-responsive ">
<table class="table table-bordered ">
<CENTER><h3 ><i>Enter your Name, Email, comment
and continue shopping</i></h3></CENTER>
<?php
$userErr = $emailErr = "";
$user = $email = $comment3 = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["user"])) {
$userErr = "Name is required";
} else {
$user = test_input($_POST["user"]);
if (!preg_match("/^[a-zA-Z ]*$/",$user)) {
$userErr = "Only letters and white space allowed";    }  }
if (empty($_POST["email"])) {
$emailErr = "Email is required";
} else {
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format";     }  }
if (empty($_POST["comment3"])) {
$comment3 = "";  } else {
$comment3 = test_input($_POST["comment3"]);  }}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;}
?>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet"
type="text/css"/>
<p><span class="error"></span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"enctype="multipart/form-data"
autocomplete="off">
<div class="form-group">
<label for="Name">Name:</label>
<input type="text"  name="user" value="<?php echo $user;?>"
autofocus pattern="^[a-zA-Z]+$" maxlength="10" required placeholder="your name" class="form-control"  >
<span class="error"> <?php echo $userErr;?></span>
</div>
<div class="form-group">
<label for="pwd"> Email:</label>
<input type="email" rows="23" cols="40" name="email" value="<?php echo $email;?>"
pattern="^[a-zA-Z]^+S\[ 0-9]+$\@\{19}"  required placeholder="your email" class="form-control" >
</div>
<div class="form-group">
<label for="pwd">Your comment:</label>
<input type="text" name="comment3" value="" style="height: 74px; value="<?php echo $comment3;?>"maxlength="200"
autofocus pattern="^[a-zA-Z]+$\ ^[ 0-9]+$\\d+(,\d{2})?"  required placeholder="comment"  class="form-control" >
</div>
<input type="submit" name="submit" value="Submit" class="btn btn-danger">
</form>
<?php
$mysqli = new mysqli('localhost','dollorabel','205kmTRy7','dollorabel');
if ($_SERVER['REQUEST_METHOD'] =='POST')
{
$pname = $mysqli->real_escape_string($_POST['pname']);
$quantity = $mysqli->real_escape_string($_POST['quantity']);
$price = $mysqli->real_escape_string($_POST['price']);
$user = $mysqli->real_escape_string($_POST['user']);
$email = $mysqli->real_escape_string($_POST['email']);
$comment3 = $mysqli->real_escape_string($_POST['comment3']);
$_SESSION['pname']=$pname;
$_SESSION['quantity']=$quantity;
$_SESSION['price']=$price;
$_SESSION['user']=$user;
$_SESSION['email']=$email;
$_SESSION['comment3']=$comment3;
$sql = "INSERT INTO products12 (pname, quantity, price,user,email,comment3)"
. "VALUES ('$pname','$quantity','$price','$user','$email','$comment3')";
if ($mysqli->query($sql) === true)
if ($_POST ['comment3'])
echo '<h3 style="font-family:Cambria;width:600px;">'.$user.','.' I will contact you soon with Your email'.'  '.$email.'</br>';
}
?>
</table>
</div>
</div>
<div class="col-md-1 col-oran" > </div>
</div>
</div>
</body>
</html>