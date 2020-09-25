<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Адреса</title>
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
                            <div class="table-header-two">
                                <table cellpadding="0" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Адрес</th>
                                            <th>Функции</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="table-content-two height">
                                <table>
                                    <tbody cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td>
                                                <a href="#">Улица Выдуманая дом 1\5</a>
                                            </td>
                                            <td>
                                                <div class="button-table">
                                                    <a class="table-link" href="edit-adress.php"><i class="fas fa-cogs"></i></a>
                                                    <a href="#"><i class="far fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <footer class="footer">
                        <div class="footer-button">
                            <a class="button button-position" href="/pages/add-product.php">Добавить адрес</a>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </section>
</body>
</html>