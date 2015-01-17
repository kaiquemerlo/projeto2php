<?php
function rota($path){

$paginas = array( // array guarda as rotas existentes
	"/",
	"home",
	"empresa",
	"produtos",
	"servicos",
	"contato"
);

// verificando se o path esta na pagina raiz /
if($path == "/"):
	require_once('home.php'); // se estiver tras a pagina home
	require_once('inc/footer.php');
	die;
endif;


$retirando = str_replace("/", "", $path); // trocando / por " " np path para verificar se o arquivo existe

if(!in_array($retirando, $paginas) && !file_exists($retirando.".php")): // se a rota armazenada em $retirando n existir no array $paginas mostra a pagina de erros
	header("HTTP/1.0 404 Not Found"); 
header("Status: 404 Not Found");
	require_once('erro.php');
	require_once('inc/footer.php');
	die;
else:
	if(file_exists($retirando.".php")):
	require_once($path.".php"); // se existir mostre o arquivo
	endif;
endif;

}

?>