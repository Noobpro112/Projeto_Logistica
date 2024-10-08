<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit;
}
if (!isset($_SESSION['turma'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/amem.svg">

    <meta charset="utf-8">
    <title><?php
    $tituloPag = 'Criar Container';
    echo "$tituloPag";
    ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Platypi:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/criarcontainer.css">
    <link rel="stylesheet" href="css/responsividade/criarpedidoResponsivo.css">

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
                <div class="transportes">
                    <h1>Cadastro de Transportes</h1>
                </div>
                <div class="presets">
                    <button
                        onclick="setMultipleInputValues({'placa': '5568', 'cliente': 'Matheus Yan', 'NomeMotorista':'Luan','container':'88370904','navio': 'trivia', 'tipo': 'agua', 'lacre' : 'acido', 'temperatura' : '0', 'LacreSif' : '079', 'IMD': '341242', 'NOnu' : '12312' , 'Observacao': 'Veio manchado'})">Preset
                        1</button>
                    <button
                        onclick="setMultipleInputValues({'placa': '34O53B', 'cliente': 'Henrique Benzao', 'NomeMotorista':'Luan','container':'1434235702','navio': 'trivia alpha', 'tipo': 'sólido', 'lacre' : '9984', 'temperatura' : '22', 'LacreSif' : '5353', 'IMD': '33441', 'NOnu' : '12312' , 'Observacao': ''})">Preset
                        2</button>
                    <button
                        onclick="setMultipleInputValues({'placa': '5568', 'cliente': 'Matheus Yan', 'NomeMotorista':'Luan','container':'5235542','navio': 'trivia Omega', 'tipo': 'quimico', 'lacre' : '325253', 'temperatura' : '33 ', 'LacreSif' : '4332', 'IMD': '341242', 'NOnu' : '12312' , 'Observacao': ''})">Preset
                        3</button>





                </div>
                <form action="processamento/processarcontainer.php" method="post">


                    <div class="inputs">
                        <div class="juntar">
                            <label for="placa">Placa do Caminhão:</label>
                            <input type="text" name="placa" id="placa" placeholder="Obrigatório" required>
                        </div>
                        <div class="juntar">
                            <label for="">Cliente:</label>
                            <input type="text" name="cliente" id="cliente" placeholder="Obrigatório">
                        </div>
                        <div class="juntar">
                            <label for="nome">Nome do Motorista:</label>
                            <input type="text" name="NomeMotorista" id="NomeMotorista" placeholder="Obrigatório"
                                required>
                        </div>
                        <div class="juntar">
                            <label for="container">Container:</label>
                            <input type="text" name="container" id="container" placeholder="Obrigatório" required>
                        </div>
                        <div class="juntar">
                            <label for="navio">Navio:</label>
                            <input type="text" name="navio" id="navio" placeholder="Obrigatório" required>
                        </div>

                        <div class="juntar">
                            <label for="tipo">Tipo:</label>
                            <input type="text" name="tipo" id="tipo" placeholder="Obrigatório" required>
                        </div>
                        <div class="juntar">
                            <label for="lacre">Lacre:</label>
                            <input type="text" name="lacre" id="lacre" placeholder="Obrigatório" required>
                        </div>
                        <div class="juntar">
                            <label for="">Temperatura:</label>
                            <input type="number" name="temperatura" id="temperatura" placeholder="Opcional">
                        </div>
                        <div class="juntar">
                            <label for="">Lacre SIF:</label>
                            <input type="text" name="LacreSif" id="LacreSif" placeholder="Opcional">
                        </div>

                        <div class="juntar">
                            <label for="">IMO:</label>
                            <input type="text" name="IMD" id="IMD" placeholder="Opcional">
                        </div>
                        <div class="juntar">
                            <label for="">N° ONU:</label>
                            <input type="text" name="NOnu" id="NOnu" placeholder="Opcional">
                        </div>
                    </div>


                    <div class="enviar">
                        <input type="submit" onclick="exibirMensagem()">
                    </div>

                </form>
            </div>

        </div>

    </main>
    <script src="js/sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script>
        function setMultipleInputValues(values) {
            for (var id in values) {
                var inputElement = document.getElementById(id);
                if (inputElement) {
                    inputElement.value = values[id];
                } else {
                    console.log("Elemento com ID " + id + " não encontrado.");
                }
            }
        }

        function checkAndUpdateUnitSelect(productId, unitId) {
            var productInput = document.getElementById(productId);
            var unitSelect = document.getElementById(unitId);
            if (productInput && unitSelect) {
                productInput.addEventListener('input', function () {
                    if (productInput.value.trim() !== '') {
                        if (unitSelect.value.trim() === '') {
                            unitSelect.value = 'UN';
                        }
                    }
                });
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            var skuInputs = document.querySelectorAll('input[id^="sku"]');

            skuInputs.forEach(function (input) {
                input.addEventListener('input', function () {
                    var sku = this.value;

                    if (sku) {
                        fetch('processamento/buscar_produto.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded'
                            },
                            body: 'sku=' + sku
                        })
                            .then(response => response.json())
                            .then(data => {
                                var produtoIndex = this.id.match(/\d+/)[0];
                                var produtoInput = document.getElementById('produto' + produtoIndex);
                                var valorInput = document.getElementById('valor' + produtoIndex);
                                var unidadeSelect = document.getElementById('unidade' + produtoIndex);

                                if (produtoInput) {
                                    produtoInput.value = data.nome_produto;
                                }
                                if (valorInput) {
                                    valorInput.value = data.preco;
                                }
                                if (unidadeSelect && unidadeSelect.value.trim() === '') {
                                    unidadeSelect.value = 'UN';
                                }
                            })
                            .catch(error => console.error('Erro:', error));
                    }
                });
            });

            checkAndUpdateUnitSelect('produto', 'unidade');
            checkAndUpdateUnitSelect('produto2', 'unidade2');
            checkAndUpdateUnitSelect('produto3', 'unidade3');
            checkAndUpdateUnitSelect('produto4', 'unidade4');
        });

    </script>
</body>

</html>