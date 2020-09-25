<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление группыы</title>
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
                        <div class="content-wrap">
                            <div class="form-wrapper-add form-group-add">
                                <form action="" method="POST">
                                    <div class="group-item">
                                        <div class="form-group-wrap">
                                            <div class="form-group">
                                                <label>Название группы</label>
                                                <input type="text" name="name-group" placeholder="Укажите название группы">
                                            </div>
                                            <div class="form-group">
                                                <label>По общей суме</label>
                                                <input type="text" name="price-to" placeholder="Укажите от какой сумы">
                                            </div>
                                        </div>
                                        <div class="form-group-wrap">
                                            <div class="form-group">
                                                <label>Скидка %</label>
                                                <input type="text" name="name-group" placeholder="Укажите скидку в %">
                                            </div>
                                            <div class="form-group">
                                                <label>По суме потрачиных средст</label>
                                                <input type="text" name="price" placeholder="Укажите суму">
                                            </div>
                                        </div>
                                        <div class="checkbox-group">
                                            <div class="checkbox">
                                                <input type="checkbox" id="check-three" class="checkbox-custom">
                                                <label for="check-three" class="label-custom">По общей суме покупок</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="check-fo"  class="checkbox-custom">
                                                <label for="check-fo" class="label-custom">По суме потрачыных средств</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-form">
                                        <button class="button" data-filter="add" type="submit">Создать</button>
                                    </div>
                                </form>
                            </div>
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