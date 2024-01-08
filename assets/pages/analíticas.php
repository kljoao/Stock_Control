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
    <link rel="stylesheet" href="../css/dashboard.css">
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
                <a href="analíticas.php" class="active">
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
                <a href="contratos.php">
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


        <!-- Main Content -->
        <main>
            <h1>Dashboard</h1>
            <!-- Analyses -->
            <div style="margin-top: 150px;">
                <iframe title="Report Section" width="1300" height="650" src="https://app.powerbi.com/view?r=eyJrIjoiNjA2MDQzNDItOWQzYi00ZTY4LWIwMzAtZjBjNGExOGRmNWJkIiwidCI6ImI0MTdiNjIwLTJhZTktNGE4My1hYjZjLTdmYmQ4MjhiZGExZCJ9" frameborder="0" allowFullScreen="true"></iframe>
            </div>
        </main>
        <!-- End of Main Content -->

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
                                    // Divide o nome completo em partes
                                    $partesNome = explode(' ', $nomeCompleto);

                                    // Obtém o primeiro nome
                                    $primeiroNome = $partesNome[0];

                                    // Obtém o último nome (último elemento do array)
                                    $ultimoNome = end($partesNome);

                                    // Retorna a combinação do primeiro e último nome
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
    </div>

    <script src="../../orders.js"></script>
    <script src="../../index.js"></script>
</body>

</html>