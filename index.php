<?php require_once'inc/header.php'; ?>


                    
<?php

$pg = $_GET['pg'];


if( ($pg != 'home.php') && ($pg != 'empresa.php') && ($pg != 'servicos.php') && ($pg != 'produtos.php') && ($pg != 'contato.php') ){
    
     require_once('erro.php'); 

 }

 if( $pg == ''){
    require_once('home.php');
 }else{
 require_once($_GET['pg']); 
 }      



echo $pg;
?> 

                    
<?php require_once('inc/footer.php'); ?>