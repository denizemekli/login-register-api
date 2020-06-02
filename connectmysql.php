<?php
try{
  $db=new PDO('mysql:host=localhost;port=8889;dbname=db_name_here;charset=utf8','db_username_here','db_password_here');

}catch(PDOException $e){
  echo $e;
}
?>
