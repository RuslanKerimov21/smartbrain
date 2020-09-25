<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отправка рассылок</title>
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
                        <div class="block-wrapper message-wrap">
                            <div class="text">Текст рассылки</div>
                            <form action="" method="POST">
                                <div class="form-item-wrap">
                                    <div class="form-item">
                                         <textarea name="text" id="comment" placeholder="Введите коректный текс"></textarea>
                                         <p>Возможность разослать</p>
                                         <div class="checkbox-group">
                                             <div class="checkbox">
                                                 <input type="checkbox" id="check-one" class="checkbox-custom">
                                                 <label for="check-one" class="label-custom">Всем</label>
                                             </div>
                                             <div class="checkbox">
                                                 <input type="checkbox" id="check-two"  class="checkbox-custom">
                                                 <label for="check-two" class="label-custom">Только покупателям</label>
                                             </div>
                                         </div>
                                    </div>
                                    <div class="form-item">
                                        <div class="image-wrap">
                                            <div class="form-group">
                                                <label>Ссылка на фотографию</label>
                                                <input type="text" name="link-image" placeholder="Ссылка">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-form">
                                    <button class="button" data-filter="add" type="submit">Разослать</button>
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