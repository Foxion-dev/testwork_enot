# Тестовое задание

Подразумеваемая структура таблиц

Таблица users

| id    | name |  email         | password   |
| :---  |:---: |  :---:         |  ---:      |
| 1    | Ivan  | test@mail.ru   |   1234     |
| 2    | Petr  | tes2t@mail.ru  |    4322    |

Таблица settings

| id   | name   | description    | need_confirm |
| :--- |  :---: |    :---:       |   ---:       |
| 1    |  job   |   work field   |      1       |
| 2    |  age   |   age field    |      0       |


Таблица user_setting

| id   | user_id   | setting_id  | value         |
| :--- |  :---:    |    :---:    |      ---:     |
| 1    |  1        |   2         |      66       |
| 2    |  2        |    1        |      develop  |

## Реализованный функционал

Подразумевается, что на фронтенде есть форма. В которой n количество настроек
Некоторые настройки требуют подтверждения и у них есть функционал "Запросить код".
При выборе метода и нажатии на кнопку "Запросить код" - отправляется запрос в контроллер app/Controllers/ConfirmCodeController.php , метод request()
На фронтенде при этом появляется инпут для ввода полученного кода и две кнопки "Подтвержить" и "Сменить метод"
При нажатии подтвердить - проверяется соответствее введенного кода с сгенерированным. Mетод check()
При нажатии сменить метод - код отправляется заново другим методом, без генерации нового. Метод changeMethod()

Факт подтверждения изменения кодом можно хранить несколькими способами - записать в input type hidden, записать в куки, в локалстораж, в стэйт и тд. Зависит от требований фронтенда
В форме так же имеется кнопка отправить, которая должна отправлять запрос в контроллер app/Controllers/SettingController.php, метод update()
В данном контроллере должна происходить валидация полученных из формы данных, в том числе подтверждения кодом нужных полей

Так же реализованы контроллеры для отправки кода разными методами app/Controllers/Send
Там будет правильнее сделать общий класс "MessageClient", который будет обьединять логику подключения к сервисам и от него уже наследоваться и делать дочерние методы, при необходимости
