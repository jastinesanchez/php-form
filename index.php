<?php
//echo '<p>This is PHP!</p>';

if(isset($_GET["FirstName"])){//show feedback
  echo $_GET["FirstName"];
  
  
  echo '<pre<';
  var_dump($_GET);
  echo '</pre>';


}else{//show form
  echo '
  <form action="">
  <p> First Name: <input type="text" name="FirstName" /></p>
  <p> Last Name: <input type="text" name="LastName" /></p>
  <input type= "submit" />
  </form>
  ';
}



?>

