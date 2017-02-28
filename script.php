<?php
    function gravar()
    {

        $titulo = $_REQUEST['titulo'];
        $texto = $_REQUEST['texto'];    
        echo "teste-cont".$texto;
        $path = "C:/".$titulo.".txt";
        $fp = fopen($path, "w+");
        fwrite($fp, $texto);
        fclose($fp);

    }
    gravar();  
echo "<script>location.href='index.php';</script>"; 
?>

