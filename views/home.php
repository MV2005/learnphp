<?php
$name = 'Marleen';
$num = 10;
?>
<?php include 'header.php'; ?>
<h1><?=$name?></h1>
<?php if($num > 10):  ?>
   <h1>Suurem</h1>
<?php  else: ?>
    <h1>väiksem</h1>
  <?php endif  ?>

<?php include 'partials/footer.php'; ?>