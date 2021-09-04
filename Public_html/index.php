<?php
    //header('Content-Type: application/json');

require_once '../Vendor/autoload.php';
//api/clientes/1
if($_GET['url']){
    $url = explode('/', $_GET['url']) ;
    //var_dump($url);
if($url[0] === 'api'){
        array_shift($url);
        $service = 'App\Services\\'.ucfirst($url[0]).'Pagamentos' ;
        array_shift($url);
        //var_dump($url);

        $method = strtolower($_SERVER['REQUEST_METHOD']);

        try{
            http_response_code(200);

          $result = call_user_func_array(array(new $service, $method), $url);
              echo json_encode(array('status'=>'success','data'=>$result))  ; 
             exit;  
        }catch(\Exception $e){
            http_response_code(404);
            echo json_encode(array('status'=>'Error','data'=>$e->getMessage()),JSON_UNESCAPED_UNICODE)  ;
            exit;

        }

   }
}

