<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <form action="/api/user/setting/change" method="POST">
        <div class="form-input">
            <label>
                <div>Name</div>
                <input type="text" name="name" placeholder="name">
            </label>
        </div>
        <div class="form-input">
            <label>
                <div>Job</div>
                <input type="text" name="job" placeholder="job">
            </label>
            <div class="form-input__confirm confirm-block">
                <select class="confirm-block__select" name="confirm_method">
                    <option value="1">E-mail</option>
                    <option value="2">SMS</option>
                    <option value="3">Telegram</option>
                </select>
                <button class="confirm-block__btn js-confirm-send">Отправить код</button>

                <div class="confirm-block__input hide">
                    <label>
                        <div>Code</div>
                        <input type="text" name="input_code" placeholder="code">
                    </label>
                    <button class="confirm-block__btn js-change-method">Изменить метод</button>
                    <button class="confirm-block__btn js-confirm-send">Подтвердить</button>
                </div>
            </div>
        </div>
        <div class="form-input">
            <label>
                <div>E-mail</div>
                <input type="email" name="email" placeholder="email">
            </label>
        </div>

        <button type="submit">Сохранить</button>
    </form>

    <script src="./assets/js/script.js"></script>
</body>
</html>
