<?php


include 'confic.php';


if(isset($_REQUEST['vkey'])){

    $vkey = $_REQUEST['vkey'];


$sql = "UPDATE my_user SET v_status= 1 WHERE v_key ='$vkey' ";
$runQuery = mysqli_query($connect,$sql);

if($runQuery){

?>

<?php
include 'css_layout/header.php';
?>



<div class="container">


  <div class="alert alert-success">
    <strong>Registration Success!</strong>
  </div>

  

<?php
include 'css_layout/footer.php';
?>



<?php
}


}

?>