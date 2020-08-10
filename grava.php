<?php

	//Conexão à base de dados
	mysql_connect("sql200.epizy.com", "epiz_24982815", "DZZL30YJP03") or die(mysql_error());
	mysql_select_db("epiz_24982815_n3tworkbet4") or die(mysql_error());
	
	//recebe os parâmetros

    $campo1 = $_REQUEST['campo1'];
    $campo2 = $_REQUEST['campo2'];
    $campo3 = $_REQUEST['campo3'];
    $campo4 = $_REQUEST['campo4'];
    $campo5 = $_REQUEST['campo5'];
    $campo6 = $_REQUEST['campo6'];
    $campo7 = $_REQUEST['campo7'];
    $campo8 = $_REQUEST['campo8'];
    $campo9 = $_REQUEST['campo9'];
    $campo10 = $_REQUEST['campo10'];
    $campo11 = $_REQUEST['campo11'];
    $campo12 = $_REQUEST['campo12'];
    $campo13 = $_REQUEST['campo13'];
    $campo14 = $_REQUEST['campo14'];
   

    try
    {
        //insere na BD
        $sql = "INSERT INTO dados (campo1bd, campo2bd, campo3bd, campo4bd, campo5bd, campo6bd, campo7bd, campo8bd, campo9bd, campo10bd, campo11bd, campo12bd, campo13bd, campo14bd) VALUES('".trim($campo1)."','".trim($campo2)."','".trim($campo3)."','".trim($campo4)."','".trim($campo5)."','".trim($campo6)."','".trim($campo7)."','".trim($campo8)."','".trim($campo9)."','".trim($campo10)."','".trim($campo11)."','".trim($campo12)."','".trim($campo13)."','".trim($campo14)."')";
        $result = mysql_query($sql) or die(mysql_error());
        
        //retorna 1 para no sucesso do ajax saber que foi com inserido sucesso
        echo "1";
    } 
    catch (Exception $ex)
    {
        //retorna 0 para no sucesso do ajax saber que foi um erro
        echo "0";
    }
?>