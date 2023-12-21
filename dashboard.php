<?php
    include('app/config.php');
    include('app/protection.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Sicoob Empresas</title>
</head>

<body>
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
                    <img src="images/logo.webp">
                    <h2>Sicoob<span class="sicoob"> Empresas</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="#" class="active">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>Usuários</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        receipt_long
                    </span>
                    <h3>Histórico</h3>
                </a>
                <a href="#">
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
                <a href="#">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Cadastro</h3>
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
            <h1>Analises</h1>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Vendidos</h3>
                            <h1>$65,024</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+81%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="visits">
                    <div class="status">
                        <div class="info">
                            <h3>Maquinas</h3>
                            <h1>24,981</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>-48%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="searches">
                    <div class="status">
                        <div class="info">
                            <h3>Saídas</h3>
                            <h1>3850</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+21%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Analyses -->

            <!-- New Users Section -->
            <div class="new-users">
                <h2>Novos Usuários</h2>
                <div class="user-list">
                    <div class="user">
                        <img src="images/profile-2.jpg">
                        <h2>Alan</h2>
                        <p>54 Horas atrás</p>
                    </div>
                    <div class="user">
                        <img src="images/profile-3.jpg">
                        <h2>João</h2>
                        <p>3 Horas atrás</p>
                    </div>
                    <div class="user">
                        <img src="images/profile-4.jpg">
                        <h2>Thiago</h2>
                        <p>6 Horas atrás</p>
                    </div>
                    <div class="user new-user">
                        <img src="images/plus.png">
                        <h2>Mais</h2>
                        <p>Novo Usuário</p>
                    </div>
                </div>
            </div>
            <!-- End of New Users Section -->

            <!-- Recent Orders Table -->
            <div class="recent-orders">
                <h2>Últimas Saídas</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Tipo de Máquina</th>
                            <th>Número de série</th>
                            <th>Chip</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                <a href="#">Mostrar Mais</a>
            </div>
            <!-- End of Recent Orders -->

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
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
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
                        <img src="images/profile-1.jpg">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->


            <div class="reminders">
                <div class="header">
                    <h2>Lembretes</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            volume_up
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Cadastrar Chip - Varista</h3>
                            <small class="text_muted">
                                08:00 - 12:00 
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification deactive">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Verificar Saídas</h3>
                            <small class="text_muted">
                                15:00  - 18:00 
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>Novo Alerta</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="orders.js"></script>
    <script src="index.js"></script>
</body>

</html>