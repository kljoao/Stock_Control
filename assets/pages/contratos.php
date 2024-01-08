<?php
    include('../../app/config.php');
    include('../../app/protection.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="../css/contratos.css">
    <title>Sicoob Empresas</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src=""></script>
    <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            borderWidth: 1
        }]
        },
        options: {
        scales: {
            y: {
            beginAtZero: true
            }
        }
        }
    });
    </script>

    <style>
        #cabal, #master{
            display: none !important;
        }
    </style>
</head>

<body class="dark-mode-variables">
<?php
    if(isset($_POST['logout'])){
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../../index.php");
        exit();
    }
?>
    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="../../images/logo.webp">
                    <h2>Sicoob<span class="sicoob"> Empresas</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="../../index.php">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="analíticas.php">
                    <span class="material-icons-sharp">
                        insights
                    </span>
                    <h3>Analíticas</h3>
                </a>
                <a href="#">
                <span class="material-icons-sharp">
                    attach_money
                </span>
                    <h3>Faturamento</h3>
                </a>
                <a href="#" class="active">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Contratos</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        report_gmailerrorred
                    </span>
                    <h3>Localizar</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        settings
                    </span>
                    <h3>Configuração</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        add
                    </span>
                    <h3>Novo Login</h3>
                </a>
                <form method="POST" action="">
                    <a href="#">
                        <button name="logout" style="border: 0px; margin: 0px; padding: 0px; color: #363949;background: none;display: flex;align-items: center;cursor: pointer;gap: 15px;">
                            <span class="material-icons-sharp">
                                logout
                            </span>
                            <h3>Logout</h3>
                        </button>
                    </a>
                </form>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp">
                        light_mode
                    </span>
                    <span class="material-icons-sharp active">
                        dark_mode
                    </span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p>Olá, <b><?php echo alterarNome($_SESSION['nome']);?></b></p>
                        <?php
                            function alterarNome($nomeCompleto){
                                    $partesNome = explode(' ', $nomeCompleto);
                                    $primeiroNome = $partesNome[0];
                                    $ultimoNome = end($partesNome);
                                    return $primeiroNome . ' ' . $ultimoNome;
                            }
                        ?>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="../../images/profile-1.jpg">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->

        <main>
            <div class="new-users">
                <h1>Gerador de Contrato</h1>
                <div class="user-list">
                <h2>Dados do Estabelecimento</h2>
                    <form action="" method="POST" style="display: flex; flex-wrap: wrap; gap: 30px;">
                        <div>
                            <h3>Razão Social</h3>
                                <input type="text" placeholder="Digite a razão social" style="width: 600px; padding: 10px; border-radius: 5px; border: solid 1px #181a1e;">
                        </div>

                        <div>
                            <h3>CNPJ</h3>
                                <input type="text" placeholder="CNPJ do Cooperado" style="width: 150px; padding: 10px; border-radius: 5px; border: solid 1px black;">
                        </div>
                        
                        <div>
                            <h3>CEP</h3>
                                <input type="text" placeholder="Digite o CEP" style="width: 150px; padding: 10px; border-radius: 5px; border: solid 1px black;">
                        </div>

                        <div>
                            <h3>Endereço Completo</h3>
                                <input type="text" placeholder="Digite o Endereço" style="width: 300px; padding: 10px; border-radius: 5px; border: solid 1px black;">
                        </div>

                        <div>
                            <h3>Central</h3>
                                <input type="text" value="2016 SICOOB UNIMAIS RIO" readonly style="width: 300px; padding: 10px; border-radius: 5px; border: solid 1px black; cursor: not-allowed; background-color: rgb(204, 204, 204);">
                        </div>

                        <div>
                            <h3>Cooperativa</h3>
                                <input type="text" value="Sicoob Empresas RJ" readonly style="width: 300px; padding: 10px; border-radius: 5px; border: solid 1px black; cursor: not-allowed; background-color: rgb(204, 204, 204);">
                        </div>

                        <div>
                            <h3>CNPJ Cooperativa</h3>
                                <input type="text" value="04.120.633/0001-94" readonly style="width: 150px; padding: 10px; border-radius: 5px; border: solid 1px black; cursor: not-allowed;background-color: rgb(204, 204, 204);">
                        </div>

                        <div>
                            <h3>Faturamento Mensal (R$)</h3>
                                <input type="text" placeholder="R$ 8.888.88,00" style="width: 150px; padding: 10px; border-radius: 5px; border: solid 1px black;">
                        </div>

                        <div style="margin-top: -17px;">
                            <h3>Mês em que o Banco Sicoob irá <br>apurar o faturamento líquido</h3>
                                <input type="text" value="trimestral" readonly style="width: 150px; padding: 10px; border-radius: 5px; border: solid 1px black; cursor: not-allowed; background-color: rgb(204, 204, 204);">
                        </div>

                        <div>
                            <h3>Prazo de vigência do contrato</h3>
                                <input type="text" value="12 meses" readonly style="width: 150px; padding: 10px; border-radius: 5px; border: solid 1px black; cursor: not-allowed; background-color: rgb(204, 204, 204);">
                        </div>

                        <div style="margin-top: -17px;">
                            <h3>Prazo de antecedência para <br>rescisão do contrato</h3>
                                <input type="text" value="30 dias" readonly style="width: 150px; padding: 10px; border-radius: 5px; border: solid 1px black; cursor: not-allowed; background-color: rgb(204, 204, 204);">
                        </div>
                    </form>
                    <br>
                    <br>
                </div>
                <div class="user-list">
                    <h2>Multa Rescisória</h2>
                    <form action="" method="POST" style="display: flex; flex-wrap: wrap; gap: 30px;">
                        <div>
                            <h3>Prazo de antecedência para rescisão do contrato</h3>
                                <input type="text" value="Definida pela Cooperativa" readonly style="width: 200px; padding: 10px; border-radius: 5px; border: solid 1px black; cursor: not-allowed;background-color: rgb(204, 204, 204);">
                        </div>

                        <div>
                            <h3>Antecipação de Recebíveis</h3>
                                <input type="text" value="Não" readonly style="width: 100px; padding: 10px; border-radius: 5px; border: solid 1px black; cursor: not-allowed;background-color: rgb(204, 204, 204);">
                        </div>

                        <div>
                            <h3>Bandeiras para concessão</h3>
                                <div style="display: flex; gap: 5px;">
                                    <input type="checkbox" id="cabal-checkbox">
                                    <p>Cabal</p>
                                </div>
                                <div style="display: flex; gap: 5px;">
                                    <input type="checkbox" id="master-checkbox">
                                    <p>Master</p>
                                </div>
                                <div style="display: flex; gap: 5px;">
                                    <input type="checkbox" id="master-visa">
                                    <p>Visa</p>
                                </div>
                                <div style="display: flex; gap: 5px;">
                                    <input type="checkbox" id="master-elo">
                                    <p>Elo</p>
                                </div>
                                <div style="display: flex; gap: 5px;">
                                    <input type="checkbox" id="master-hipercard">
                                    <p>Hipercard</p>
                                </div>
                        </div>
                    </form>
                </div>

                <div id="cabal" class="user-list">
                    <h2>CONDIÇÕES PARA CONCESSÃO DE INCENTIVOS - CABAL</h2>
                    <br>
                    <br>
                    <form action="" method="POST" style="display: flex; flex-wrap: wrap; gap: 30px;">
                        <div>
                            <table style="width: 1000px;">
                                <tr>
                                    <td style="font-size: 24px;">Modalidade</td>
                                    <td style="font-size: 18px;">Taxas com alcance da meta</td>
                                    <td style="font-size: 18px;">Taxas sem alcance da meta</td>
                                </tr>
                                <tr>
                                    <td>Débito a vista</td>
                                    <td><input type="text" style="width: 169px; padding: 5px; border-radius: 5px; border: solid 1px black;"></td>
                                    <td><input type="text" style="width: 169px; padding: 5px; border-radius: 5px; border: solid 1px black;"></td>
                                </tr>
                                <tr>
                                    <td>Crédito a vista</td>
                                    <td><input type="text" style="width: 169px; padding: 5px; border-radius: 5px; border: solid 1px black;"></td>
                                    <td><input type="text" style="width: 169px; padding: 5px; border-radius: 5px; border: solid 1px black;"></td>
                                </tr>
                                <tr>
                                    <td>Crédito parcelado sem juros 2x a 6x</td>
                                    <td><input type="text" style="width: 169px; padding: 5px; border-radius: 5px; border: solid 1px black;"></td>
                                    <td><input type="text" style="width: 169px; padding: 5px; border-radius: 5px; border: solid 1px black;"></td>
                                </tr>
                                <tr>
                                    <td>Crédito parcelado sem juros 7x a 12x</td>
                                    <td><input type="text" style="width: 169px; padding: 5px; border-radius: 5px; border: solid 1px black;"></td>
                                    <td><input type="text" style="width: 169px; padding: 5px; border-radius: 5px; border: solid 1px black;"></td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>

                <div id="master" class="user-list">
                    <h2>CONDIÇÕES PARA CONCESSÃO DE INCENTIVOS - MASTER</h2>
                    <br>
                    <br>
                    <form action="" method="POST" style="display: flex; flex-wrap: wrap; gap: 30px;">
                        <div>
                            <table style="width: 1000px;">
                                <tr>
                                    <td style="font-size: 24px;">Modalidade</td>
                                    <td style="font-size: 18px;">Taxas com alcance da meta</td>
                                    <td style="font-size: 18px;">Taxas sem alcance da meta</td>
                                </tr>
                                <tr>
                                    <td>Débito a vista</td>
                                    <td><input type="text" style="width: 169px; padding: 5px; border-radius: 5px; border: solid 1px black;"></td>
                                    <td><input type="text" style="width: 169px; padding: 5px; border-radius: 5px; border: solid 1px black;"></td>
                                </tr>
                                <tr>
                                    <td>Crédito a vista</td>
                                    <td><input type="text" style="width: 169px; padding: 5px; border-radius: 5px; border: solid 1px black;"></td>
                                    <td><input type="text" style="width: 169px; padding: 5px; border-radius: 5px; border: solid 1px black;"></td>
                                </tr>
                                <tr>
                                    <td>Crédito parcelado sem juros 2x a 6x</td>
                                    <td><input type="text" style="width: 169px; padding: 5px; border-radius: 5px; border: solid 1px black;"></td>
                                    <td><input type="text" style="width: 169px; padding: 5px; border-radius: 5px; border: solid 1px black;"></td>
                                </tr>
                                <tr>
                                    <td>Crédito parcelado sem juros 7x a 12x</td>
                                    <td><input type="text" style="width: 169px; padding: 5px; border-radius: 5px; border: solid 1px black;"></td>
                                    <td><input type="text" style="width: 169px; padding: 5px; border-radius: 5px; border: solid 1px black;"></td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
            
            </div>
        </main>
            
    <script src="../script/flags.js"></script>
    <script src="../../index.js"></script>
</body>

</html>