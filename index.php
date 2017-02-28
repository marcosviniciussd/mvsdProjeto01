<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dreco Mission</title>

    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap_paper.min.css" media="screen" title="no title" charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="plugins/font-awesome-4.6.1/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">


</head>
<body>
    <section id="atividade1">
        <nav id="teste" class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Dreco Mission</a>
                </div>
            </div>
        </nav>
        <div class="container-fluid logo">
            <div class="row" style="margin-top: 10%;">
                <div class="col-md-12">
                    <div class="col-md-10 col-md-offset-1">
                        <h3 class="text-center titulo-home">
                            Digite seu nome e pressione Enter.
                        </h3>
                    </div>
                </div>

                <form action="index.php" method="request">
                    <div  class="form-group text-center">
                        <div class="col-md-6 col-md-offset-3 text-center" style="padding-top: 15px;">
                            <div class="row text-center">
                                <div class="col-md-8 text-center">
                                    <input type="text"  id="campoNome" class="form-control text-center" placeholder="Ex: Marcos Vinicius" name="name" value="<?= $_REQUEST['name'] ?>">
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
            
            <h2 class="text-center">
                <?php

                    echo $_REQUEST['name']."<br>";

                    $nome = $_REQUEST['name'];
                    $letras = strlen($nome);

                    $letras = $letras - substr_count($nome, ' ');
                    echo "Total de Letras: ".$letras."<hr>";

                    foreach(count_chars($nome, 1) as $i => $val)
                    {
                        
                        echo "[ ".chr($i)." = ",$val." ]"; 
                    }

                ?>
            </h2>
        </div>
    </section>
    <section id="atividade2" class="secao">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2 class="subtitulo">Projeto01</h2>
                    <h4 class="text-center">Conversor de nomes em Hexadecimal</h4>
                    <div class="texto-quem-somos">

                        <h4 class="text-center">
                            <?php

                                $nome = $_REQUEST['name'];

                                $hexaLetra = array("A" => "61", "a" => "61", "B" => "62", "b" => "62", "C" => "63", "c" => "63", "D" => "64", "d" => "64", "E" => "65", "e" => "65", "F" => "66", "f" => "66", "G" => "67", "g" => "67", "H" => "68", "h" => "68", "I" => "69", "i" => "69", "J" => "6A", "j" => "6A", "K" => "6B", "k" => "6B", "L" => "6C", "l" => "6C", "M" => "6D", "m" => "6D", "N" => "6E", "n" => "6E", "O" => "6F", "o" => "6F", "P" => "70", "p" => "70", "Q" => "71", "q" => "71", "R" => "72", "r" => "72", "S" => "73", "s" => "73", "T" => "74", "t" => "74", "U" => "75", "u" => "75", "V" => "76", "v" => "76", "W" => "77", "w" => "77", "X" => "78", "x" => "78", "Y" => "79", "y" => "79", "Z" => "7A", "z" => "7A", " " => "  7F  ");

                                $converteLetra = strTr($nome, $hexaLetra);
                                echo $converteLetra."<br>";
                                echo "<hr>";

                                 $letras = $letras + substr_count($nome, ' ')."<hr>";
                                 echo "Total de bits consumido: ".$letras."<hr>";

                                 /*echo("Nome Invertido: ");
                                 echo strrev($nome)."<br>";*/
                                                  
                                function limpaNome($nome)
                                {
									$nom = trim($nome);
									$nom = str_replace(".", "", $nome);
									$nom = str_replace(",", "", $nome);
									$nom = str_replace("!", "", $nome);
									$nom = str_replace("/", "", $nome);
									$nom = str_replace("-", "", $nome);
									$nom = str_replace(" ", "", $nome);
									return $nom;
								}
                                 
                                 if(limpaNome($nome) == strrev(limpaNome($nome)))
                                 {
                                 	echo("Palavra Invertida: ". strrev(limpaNome($nome)))."<hr>";
                                 	echo "<hr>";
                                 	echo "Palavra palidroma";
                                 }
                                 else
                                 {
                                 	echo("Palavra Invertida: ". strrev(limpaNome($nome)))."<hr>";
                                 	echo "<hr>";
                                 	echo "Palavra Normal";
                                 }
                            
                            ?>
                        </h4>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="atividade3">
        <div class="row">
            <div class="container-fluid" >
                <div class="col-md-12">
                    <div class="col-md-10 col-md-offset-1">
                        <h3 class="text-center titulo-home">
                            Digite seu nome e pressione Gravar.
                        </h3>
                    </div>
                </div>

                <form action="script.php" method="post">
                    <div id="btn-ok" class="form-group text-center">
                        <div class="col-md-6 col-md-offset-3 text-center" style="padding-top: 15px;">
                            <div class="row text-center">
                                <div class="col-md-12 text-center">
                                    <div class="form-group">
                                        <input type="text"  id="campoNome" class="form-control text-center" placeholder="Ex: Arquivo1" name="titulo" value="<?= $_REQUEST['titulo'] ?>">
                                        <br>
                                        <textarea class="form-control" name="texto" value="<?= $_REQUEST['texto'] ?>" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <button class="btn btn-default" type="submit">Gravar</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id="atividade4">
        <div class="row">
            <div class="container-fluid" >
                <div class="col-md-12">
                    <div class="col-md-10 col-md-offset-1">
                        <h3 class="text-center titulo-editor">
                            Digite seu nome e pressione Gravar.
                        </h3>
                    </div>
                </div>

                <form action="index.php" method="post">
                    <div class="form-group text-center">
                        <div class="col-md-6 col-md-offset-3 text-center" style="padding-top: 15px;">
                            <div class="row text-center">
                                <div class="col-md-12 text-center">
                                    <div class="form-group">
                                        <input type="text"  id="campoNome" class="form-control text-center" placeholder="Ex: Arquivo1" name="busca" value="<?= $_REQUEST['busca'] ?>">
                                        <br>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Buscar</button>
                                </div>

                                <?php
                                    $busca = $_REQUEST['busca'];

                                    if($busca != null)
                                    {
                                        $arquivo = "C:/".$busca.".txt";
                                        $ponteiro = fopen("C:/".$busca.".txt","r");
                                        $texto = fread($ponteiro, filesize($arquivo));
                                        $texto = nl2br($texto);
 
                                        fclose($ponteiro);
                                    }  
                                ?>

                            </div>
                             <h4>
                                 <?php
                                 echo $texto;
                                 ?>
                            </h4>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="row">
            <div class="container">
                <div class="logo-footer">
                    <h2>Dreco Mission</h2>
                </div>
                <p class="fontecor">
                    Este algoritmo consiste em um pequeno sistema que conta as letras em um nome. Dessa forma ele deve contar o número de ocorrências que 
                    a palavra digitada ou nome teve. <em><b>O sistema deve ser capaz de entender que as vogais acentuadas contam como vogais normais a seu
                    a seu correspondente.</em></b>
                </p>
                <p class="fontecor">
                    O algoritimo tem algumas regras relacionada ao seu desenvolvimento:
                    <em><b>"Desenvolver em PHP e HTML "</b></em>. Ser desenvolvido no Bluemix, pode usar bootstrap caso deseje.
                </p>
            </div>
        </div>
    </footer>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
