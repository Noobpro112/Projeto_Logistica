<?php
session_start();
if(!isset($_SESSION['id'])){
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title><?php 
    $tituloPag = 'Home';
    echo "$tituloPag"; 
    ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        
        <link href="https://fonts.googleapis.com/css2?family=Platypi:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/estiloInicio.css">
</head>

<body>
    <?php
    include 'include/header.php'
    ?>
    <main>
        <?php
        include 'include/menuLateral.php'
        ?>

        
        <div class="DivDireita">
            <div class="bv">
                <div class="centT">
                <?php
                print '<h1>Seja Bem-Vindo</h1>';
                print '<br>';
				print '<h1  >'.$_SESSION['username'].'</h1>';
                print '<h3  > Turma: '.$_SESSION['turma'].' </h3>';
                            ?>
            </div>
            </div>
            <div class="Imagem">
                <img class="imgLog" src="img/imgLog2.png" alt="">
            </div>
            
        </div>
    </main>

    

    <script src="js/sidebar.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>