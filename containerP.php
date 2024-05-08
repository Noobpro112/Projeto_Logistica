<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>

<head>
    <meta name="vierport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo32.png" type="image/x-icon">

    <meta charset="utf-8">
    <title><?php
    $tituloPag = 'Container';
    echo "$tituloPag";
    ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Platypi:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <meta name="vierport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/container.css">
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
            <div class="table-inputs">
                <div class="txtCont">
                    <h1>Container</h1>
                    </div>
                <div class="form">
              <form  action="processamento/processarcontainer.php" method="post">
                <div class="inputs">
                   <div class="juntar">
                    <label for="">Placa do Caminhão:</label>
                    <input type="text" name="placa" placeholder="Placa do Caminhão">
                    </div>
                    <div class="juntar">
                    <label for="">Nome do Motorista:</label>
                    <input type="text" name="NomeMotorista" placeholder="Nome do Motorista">
                    </div>
                    <div class="juntar">
                    <label for="">Container:</label>
                    <input type="text" name="container" placeholder="Container">
                    </div>
                    <div class="juntar">
                    <label for="">Navio:</label>
                    <input type="text" name="navio" placeholder="Navio">
                    </div>
                    <div class="juntar">
                    <label for="">Cliente:</label>
                    <input type="text" name="cliente" placeholder="Cliente">
                    </div>
                    <div class="juntar">
                    <label for="">Tipo:</label>
                    <input type="text" name="tipo" placeholder="Tipo">
                    </div>
                    <div class="juntar">
                    <label for="">Lacre:</label>
                    <input type="text" name="lacre" placeholder="Lacre">
                    </div>
                    <div class="juntar">
                    <label for="">Lacre SIF:</label>
                    <input type="text" name="LacreSif" placeholder="Lacre SIF">
                    </div>
                    <div class="juntar">
                    <label for="">Temperatura:</label>
                    <input type="text" name="Temperatura" placeholder="Temperatura">
                    </div>
                    <div class="juntar">
                    <label for="">IMO:</label>
                    <input type="text" name="IMD" placeholder="IMO">
                    </div>
                    <div class="juntar">
                    <label for="">N° ONU:</label>
                    <input type="text" name="NOnu" placeholder="N° ONU">
                    </div>
        
                    <div class="enviar">
        <input type="submit" onclick="exibirMensagem()">
    </div>
</form>

<script>
    function exibirMensagem() {
        alert('Dados enviados com sucesso!');
    }
</script>
    </form>

"
            
        </div>
                

                        "

                </div>


    </main>



    <script src="js/sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>