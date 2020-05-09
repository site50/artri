<?php

if(isset($_POST["add"])){
    if(isset($_SESSION["cart"])){
        $item_array_id=array($_SESSION["cart"],  "product_id");// was column://array_column — Return the values from a single column in the input array
        if(!in_array($_GET["id"],$item_array_id)){
            $count=count($_SESSION["cart"]);
            $item_array=array(
                'product_id' => $_GET["id"],
                'item_pname' => $_POST["pname"],
                'product_price' => $_POST["price"],
                'item_quantity' => $_POST["quantity"],
                
            ) ;
            $_SESSION["cart"][$count]=$item_array;
            echo '<script>window.location="shop.php"</script>';
        }else{echo '<script>alert("product is already added to cart")</script>';
        echo '<script>window.location=shop.php"</script>';
        } }else{
            $item_array=array(
                'product_id' => $_GET["id"],
                'item_pname' => $_POST["pname"],
                'product_price' => $_POST["price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0]=$item_array;
        }}
        if (isset($_GET["action"])){
            if($_GET["action"]=="delete"){
                foreach($_SESSION["cart"] as $key=>$value){
                    if($value["product_id"]==$_GET["id"]){
                        unset($_SESSION["cart"][$key]);
                        echo '<script>alert("Product has been Removed...!)</script>';}
                        echo '<script>window.location="shop.php"</script>';}}}
                        
                        ?>
