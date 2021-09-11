<?php
  
  $dataJSon = "[5, 3, 4, 2, 1,]";

  $data = json_decode($dataJSon);

  echo implode(' - ', $data);

  ?>