<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Группы</title>
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
                            <!-- Таблица пользователей -->
                            <div class="table-header">
                                <table cellpadding="0" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Адрес</th>
                                            <th>Скидка%</th>
                                            <th>Кол-во подходящих клиентов</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="table-content">
                                <table>
                                    <tbody  cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td>Голд</td>
                                            <td>30%</td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>Серебро</td>
                                            <td>25%</td>
                                            <td>250</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-footer">
                                <table>
                                    <div class="footer-button-table">
                                        <a class="button" href="/pages/add-group.php">Добавить группу</a>
                                    </div>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>