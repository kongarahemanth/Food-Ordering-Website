
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="Components/style.css">
  <title>Dine & Cheer Restaurant</title>
</head>
<style>
.orderbox,.cont{
    min-height:85vh;
}
table,tr,th,td{
    border:1px solid white;
}
th,td{
    padding:5px;
}
</style>
<body>
<?php include 'Components/_header.php';?>
<?php
if(isset($_SESSION['loggedin'])){
echo '<div class="container orderbox my-3"><div class="jumbotron">
<h1 class="display-5">Your Order:</h1>
<p class="lead">All your items will be displayed here:</p>
<hr class="my-4"><table class="mx-auto bg-dark text-center text-light"><th class="fs-3">Item Name</th><th class="fs-3">Item Cost</th><th class="fs-3">Item Quantity</th>';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $j=1;
        $tc=0;
        $menu_items="";
        $menu_prices="";
        $menu_qty="";
        $menunames=array("7up","Amul Kool","Hershey's Badam Shake ","Banana shake","Hershey's choco shake","cococola","Combo","Frappe shake","Helath drink combo","Hell","Hempyberry","Limca","Monster beast","Monster","Red bull","Sprite","Sting","Strom","thumps Up");
        $menuprices=array(50,40,30,35,40,30,30,45,45,40,50,50,52,45,78,14,25,14,55);
        while($j<=19){
            if(isset($_POST['menui'.$j.'qty'])){
            if($_POST['menui'.$j.'qty']>0){
                $cost=$menuprices[$j-1]*$_POST['menui'.$j.'qty'];
                $tc+=$cost;
                $menu_items=$menu_items.$menunames[$j-1].",";
                $menu_prices=$menu_prices.$menuprices[$j-1].",";
                $menu_qty=$menu_qty.$_POST['menui'.$j.'qty'].",";
                $_SESSION['purchased']=true;
                echo "<tr class='fs-3 text-center'><td>".$menunames[$j-1]."</td><td> Rs.".$cost."</td> <td class'my-2 mx-3'><span class='badge bg-info px-2 py-2 mx-5 my-2'>".$_POST['menui'.$j.'qty']."</span></td></tr>";
            }}
            $j++;
        }
        $k=1;
        $specials_items="";
        $specials_prices="";
        $specials_qty="";
        $specialsnames=array("Beer","Brandy","Cognac","Port Wine","Red Wine","Strong Beer","Vodka","Vermouth Special","Whisky Strong");
        $specialsprices=array(550,375,425,300,375,550,300,250,550);
        while($k<=9){
            if(isset($_POST['specialsi'.$k.'qty'])){
            if($_POST['specialsi'.$k.'qty']>0){
                $cost=$specialsprices[$k-1]*$_POST['specialsi'.$k.'qty'];
                $tc+=$cost;
                $specials_items=$specials_items.$specialsnames[$k-1].",";
                $specials_prices=$specials_prices.$specialsprices[$k-1].",";
                $specials_qty=$specials_qty.$_POST['specialsi'.$k.'qty'].",";
                $_SESSION['purchased']=true;
                echo "<tr class='fs-3 text-center'><td>".$specialsnames[$k-1]."</td><td> Rs.".$cost."</td> <td class'my-2 mx-3'><span class='badge bg-info px-2 py-2 mx-5 my-2'>".$_POST['specialsi'.$k.'qty']."</span></td></tr>";
            }}
            $k++;
        }
    }
    if(strcmp($menu_items,"")!=0){
        $_SESSION['menu_items']=$menu_items;
        $_SESSION['menu_prices']=$menu_prices;
        $_SESSION['menu_qty']=$menu_qty;
    }
    if(strcmp($specials_items,"")!=0){
        $_SESSION['specials_items']=$specials_items;
        $_SESSION['specials_prices']=$specials_prices;
        $_SESSION['specials_qty']=$specials_qty;
    }

    echo '<tr class="fs-3 text-center"><td><strong>Total Cost</strong></td><td>Rs.'.$tc.'</td><td></td><tr></table><p class="lead text-center">
<a class="btn btn-success btn-lg mt-5 mb-0" href="purchasesuccess.php" role="button">Confirm Order</a>
</p></div></div>';
}
else{
    echo '<div class="container cont my-5">
        <div class="alert alert-danger my-3" role="alert">
        <h4 class="alert-heading">Please Login before placing an order or Sign Up if you are new user.</h4>
        <p class="my-2">You can login from the top-right corner.</p>
      </div></div>';
}
?>
<?php include 'Components/_footer.php';?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body></html>