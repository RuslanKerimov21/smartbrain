<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление города</title>
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
            <?php
                require '../block/sidebar.php'
            ?>
            <div class="content-panel">
                <?php
                    require '../block/header-two.php'
                ?>
                <div class="container">
                    <div class="content-wrapper">
                        <div class="form-wrapper-add score-wrapper-add label-width">
                            <form action="" method="POST">
                                <div class="form-item score-item">
                                    <div class="form-group">
                                        <label>Название города</label>
                                        <input type="text" name="name-city" placeholder="Укажите название города">
                                    </div>
                                </div>
                                <div class="button-form">
                                    <button class="button" type="submit">Добавить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Подключение скриптов -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/main.js"></script>
    <!-- Конец документа -->
</body>
</html>