<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Consumindo API</title>
</head>
<body>

<?php 


$url = "https://blog.turbohost.co.mz//wp-json/wp/v2/posts?per_page=5";

$ch = curl_init( $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$resultado = json_decode(curl_exec($ch)) ;

/*echo '<pre>'; 
var_dump($resultado);
*/

foreach ($resultado as $conteudo) {
	
    foreach($conteudo->title as $titulo)
    {

            echo $titulo ;
            echo "<br>";

            /* echo "<pre>";
                print_r($titulo);
                echo "</pre>";
               */
    }
}


?>

</body>
</html>