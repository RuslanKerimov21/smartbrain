<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель | администрирования</title>
    <!-- Подключение стилей -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="libs/fontawesome/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!---->
</head>
<body>
    <section class="page">
        <div class="page-wrapper">
            <!-- Навигация по панели -->
            <?php
                require 'block/sidebar.php'
            ?>
            <!-- Конец навигации по панели -->
            <!-- Контент в панели управления -->
            <div class="content-panel">
                <!-- Хедер панели -->
                <?php
                    require 'block/header.php'
                ?>
                <!-- Конец хедера панели -->
                <!-- Контент панели -->
                <div class="container">
                    <div class="content-wrapper">
                        <div class="content-wrap">

                        </div>
                    </div>  
                </div>
                <!--  Конец контента -->
            </div>
        </div>
    </section>
    <!-- Подключение скриптов -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Конец документа -->
</body>
</html>