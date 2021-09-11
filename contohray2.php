<?php
 $employee = [
     'name' => 'Juan',
     'email' => 'juan@example.com',
     'phone' => '083121089664',
 ];
  
 echo $employee['name'];

 foreach ($employee as $key => $value) {
     echo $key . ':' . $value;
     echo '<br>';
 }




?>