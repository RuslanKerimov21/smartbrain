<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление товара</title>
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
                        <div class="form-wrapper-add width">
                            <form action="" method="POST">
                                <div class="form-item city-item">
                                    <div class="form-group">
                                        <label>Названия товара</label>
                                        <input type="text" name="name-product" placeholder="Введите коректоное названия">
                                    </div>
                                    <div class="form-group-wrap">
                                        <div class="form-group">
                                            <label>Вес</label>
                                            <input type="text" name="weight" placeholder="13.5 кг">
                                        </div>
                                        <div class="form-group">
                                            <label>Цена</label>
                                            <input type="text" name="price" placeholder="1100 грн">
                                        </div>
                                    </div>
                                    <div class="form-group-wrap">
                                        <div class="form-group">
                                            <label>Вес</label>
                                            <input type="text" name="weight" placeholder="13.5 кг">
                                        </div>
                                        <div class="form-group">
                                            <label>Цена</label>
                                            <input type="text" name="price" placeholder="1100 грн">
                                        </div>
                                    </div>
                                    <div class="form-group-wrap">
                                        <div class="form-group">
                                            <label>Вес</label>
                                            <input type="text" name="weight" placeholder="13.5 кг">
                                        </div>
                                        <div class="form-group">
                                            <label>Цена</label>
                                            <input type="text" name="price" placeholder="1100 грн">
                                        </div>
                                    </div>
                                    <button class="button button-add" type="submit">Добавить лот</button>
                                </div>
                                <div class="button-form">
                                    <button class="button button-adds"type="submit">Добавить товар</button>
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