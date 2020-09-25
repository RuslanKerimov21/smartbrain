<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пользователи</title>
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
                                            <th>Имя пользователя</th>
                                            <th>Покупки</i></th>
                                            <th>Группа</th>
                                            <th>Общая сумма</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="table-content">
                                <table>
                                    <tbody  cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td>Андрей</td>
                                            <td>8</td>
                                            <td>Голд</td>
                                            <td>3950</td>
                                        </tr>
                                        <tr>
                                            <td>Василий</td>
                                            <td>15</td>
                                            <td>Бронза</td>
                                            <td>2950</td>
                                        </tr>
                                    </tbody>
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