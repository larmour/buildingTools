<!DOCTYPE html> 
<html>
<body>
  <h1> Project Two</h1>
</body>
</html>
<?php
  function my_autoloader($class) {
    include 'classes/' . $class . '.class.php';
  }
  spl_autoload_register('my_autoloader');
  $app = new app;
?>
