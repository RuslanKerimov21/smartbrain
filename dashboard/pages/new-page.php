<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление новой категории</title>
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
                            <div class="form-wrapper-add">
                                <form action="" method="POST">
                                    <div class="group-item item-min">
                                        <div class="form-group-wrap">
                                            <div class="form-group">
                                                <div class="form-group-content-wrap">
                                                    <label>Название</label>
                                                    <input type="text" name="name-pages" placeholder="Введите коректное название">
                                                </div>
                                                <div class="form-group-content-wrap wrap-label">
                                                    <div class="sort-item">
                                                        <label>Позиция</label>
                                                        <select class="sort sort-min" name="sort-statistc">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Текст</label>
                                                <textarea name="text" placeholder="Введите коректный текс"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-form">
                                        <button class="button" data-filter="add" type="submit">Добавить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>