<?php require_once'inc/header.php'; ?>


                    
<?php


if(isset($_GET['pg'])){
	$pg = $_GET['pg'];
}


 if( $pg == ''){
    require_once('home.php');
 }


if( ($pg != '') && ($pg != 'home.php') && ($pg != 'empresa.php') && ($pg != 'servicos.php') && ($pg != 'produtos.php') && ($pg != 'contato.php') ){ // se o valor de GET for dif desse mostra a pagina de erro.
    
     require_once('erro.php'); 

 }elseif(!isset($pg)){ // se n exisitir o GET mostra a home
 require_once('home.php');
 }else{ // se n for nenhum dos parametros acima mostra a pagina requisitada em GET
 	require_once($_GET['pg']); 
 }



      


?> 

                    
<?php require_once('inc/footer.php'); ?>