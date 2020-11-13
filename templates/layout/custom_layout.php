<html>
  <head>
    <!--- HEAD TAG --->
    <title><?php echo $this->fetch("title") ?></title>
    <script src=""></script>
  </head>
  <body>
    <h3>Welcome to Custom Layout</h3>
    <?php echo $this->fetch("content");?>
  </body>
</html>