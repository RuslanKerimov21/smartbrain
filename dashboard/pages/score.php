<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Счета</title>
    <!-- Подключение стилей -->
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/libs/fontawesome/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!---->
</head>
<body>
    <section class="page">
        <div class="page-wrapper">
            <!-- Навигация по панели -->
            <?php
                require '../block/sidebar.php'
            ?>
            <!-- Конец навигации по панели -->
            <!-- Контент в панели управления -->
            <div class="content-panel">
                <?php
                    require '../block/header-two.php'
                ?>
                <div class="container">
                    <div class="content-wrapper">
                        <div class="content-wrap">
                            <div class="setting-header setting-block">
                                <span class="block">Qivi</span>
                                <button  onclick="window.location.href='/pages/add-score.php'"><i class="fas fa-plus"></i></button>
                            </div>
                            <div class="table-content-wrap">
                                <div class="table-content-item">
                                    <div class="sort-text"><span>30885644512</span></div>
                                    <div class="setting-button">
                                        <button class="customaize"><i class="fas fa-cogs" onclick="window.location.href='/pages/edit-coin.php'"></i></button>
                                        <button><i class="far fa-trash-alt"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-wrap">
                            <div class="setting-header setting-block">
                                <span class="block">Bitcoin</span>
                                <button onclick="window.location.href='/pages/add-score.php'"><i class="fas fa-plus"></i></button>
                            </div>
                            <div class="table-content-wrap">
                                <div class="table-content-item">
                                    <div class="sort-text"><span>3088564451</span></div>
                                    <div class="setting-button">
                                        <button class="customaize"><i class="fas fa-cogs" onclick="window.location.href='/pages/edit-coin.php'"></i></button>
                                        <button><i class="far fa-trash-alt"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>