<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление продукта</title>
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
                            <div class="block-wrapper block-prodct form-wrapper-add">
                                <form action="" method="POST">
                                    <div class="sorts-wrap">
                                        <div class="sort-item">
                                            <label>Товар</label>
                                            <select class="sort sort-product" name="block">
                                                <option value="0">Не выбран</option>
                                                <option value="1">Конфеты</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-add-post">
                                        <div class="product-items">
                                            <div class="product-item" id="block">
                                               <div class="sort-item">
                                                    <label>Цена</label>
                                                    <select class="sort sort-product" name="block">
                                                        <option value="0">Не выбран</option>
                                                        <option value="1">Конфеты 150 грн</option>
                                                    </select>
                                                </div>
                                          <div class="form-group-wrap juctify">
                                            <div class="form-group">
                                              <label>Лот</label>
                                              <input type="text" name="lot" id="txtvalue">
                                            </div>
                                            <div class="form-group">
                                              <label>Цена</label>
                                              <input type="text" name="price" class="price">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label>Адрес</label>
                                            <input type="text" name="adress" placeholder="Текст котрорый будет выводиться покупателю">
                                          </div>
                                        </div>
                                        </div>
                                        <div class="button-group">
                                           <button onclick="addInput()" type="button" class="button button-add">Ещё</button>
                                           <button class="button button-add" type="submit">Добавить адрес</button>
                                        </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/js/main.js"></script>
    <!-- Конец документа -->
</body>
</html>