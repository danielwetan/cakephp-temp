<?php echo "<h3>".$message."</h3>"?>

<!-- Generate custom URL -->
<?php 
echo $this->Url->build([
  "controller" => "Home",
  "action" => "dashboard",
  "daniel" // passing parameter
]);
?>

<!-- Generate URL to image file from webroot folder -->
</br>
<?php echo $this->Url->image("bird.png") ?>
<!-- http://localhost:3000/img/cake.png -->

<!-- Generate URL to script file from webroot folder -->
</br>
<?php
echo $this->Url->script("script.js");
?>

<!-- Generate URL to css file from webroot folder -->
</br>
<?php echo $this->Url->css("cake.css");