<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Статистика</title>
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
                        <div class="sorts-wrap flex-wrap">
                            <div class="sort-item">
                                <label>От</label>
                                <select class="sort" name="sort-statistc">
                                    <option value="0">Не выбран</option>
                                    <option value="1">21.03.2020</option>
                                </select>
                            </div>
                            <div class="sort-item">
                                <label>До</label>
                                <select class="sort" name="sort-statistc">
                                    <option value="0">Не выбран</option>
                                    <option value="1">21.03.2020</option>
                                </select>
                            </div>
                        </div>
                        <div class="content-wrap bottom">
                            <div class="table-header">
                                <table cellpadding="0" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Сумма</th>
                                            <th>Граммаж</th>
                                            <th>Кол-во покупок</th>
                                            <th>Остаток</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="table-content-two">
                                <table>
                                    <tbody  cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td>1600 грн </td>
                                            <td>2200 гр</td>
                                            <td>134</td>
                                            <td>500</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="content-wrap">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Подключение скриптов -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
    <script src="/js/main.js"></script>
    <!-- Конец документа -->
</body>
</html>