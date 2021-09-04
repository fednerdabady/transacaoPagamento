<?php
   $url= 'http://localhost/processarPagamento/Public_html/api';

   $class = '/pedidos';
   $param = '/98302';

   $result = file_get_contents($url.$class.$param);

   //echo $result;

   $resultado = json_decode($result, 1);
   var_dump($resultado);

