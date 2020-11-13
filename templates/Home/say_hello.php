<?php 
  if(isset($title)) {
    $this->assign("title", $title);
  }

?>

<!-- Load blocks -->
<?php $this->element("headings") ?>
<?php echo $this->fetch("heading1") ?>

<?= $this->element('jumbotron', [
  "text" => "README FROM JUMBOTRON!",
]); ?>
</br>
<?php echo $this->fetch("heading2") ?> <!-- Load heading2 block -->

This is content from say hello page
</br>
</br>
<p>Name: <?php echo $name ?></p>
<p>Email: <?php echo $email ?></p>

</br>
<p>Name: <?php echo $user["name"] ?></p>
<p>Email: <?php echo $user["email"] ?></p>

</br>
<p>Name: <?php echo $name2 ?></p>
<p>Email: <?php echo $email2 ?></p>

</br>
<p>Name: <?php echo $user2["name"] ?></p>
<p>Email: <?php echo $user2["email"] ?></p>

</br>
</br>
<?php 
echo "This is custom helper" . "</br>";
echo $this->String->upperCase("daniel") . "</br>";
echo $this->String->lowerCase("YOGYAKARTA");
echo "</br>";
echo $this->String->createLinkWithUpperCase("sample link");
