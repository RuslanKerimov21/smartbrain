<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление счета</title>
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
                        <div class="form-wrapper-add score-wrapper-add">
                            <form action="" method="POST">
                                <div class="form-item score-item">
                                    <div class="form-group">
                                        <label>Номер счета</label>
                                        <input type="text" name="name-score" placeholder="Укажите номер счета">
                                    </div>
                                    <button class="button" type="submit">Ещё</button>
                                </div>
                                <div class="button-form">
                                    <button class="button" data-filter="add" type="submit">Добавить </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>