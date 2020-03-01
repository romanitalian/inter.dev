Написать web приложение с использованием фреймворка Yii2, 

которое на вход получает текстовый файл, и возвращает массив, в формате слово -> сколько раз встречается, массив отсортирован по возрастанию количества слов при этом слова в массиве должны быть отсортированы в алфавитном порядке.

При этом мы сохраняем историю загруженных файлов и полученных результатов в БД.

Просмотреть историю можно после авторизации. 

Например, текстовый файл содержит: сегодня будет дождь, сегодня не будет солнца. 

Получаем на выходе: 

```
[ ‘дождь’ =>1,  ‘не’=>1, ’солнца’=>1, ‘будет’ => 2, ‘сегодня’ =>2]
```

Можно использовать фреймворки при необходимости. Проект необходимо залить на GitLab/GitHub/Bitbucket и дать на него ссылку Дизайн и верстка не имеет значения

