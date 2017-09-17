## [Современные PHP-фреймворки](#) - Yii2
**ДЗ №1** 
* [Изменение текста на главной странице](https://github.com/skiphog/profit-yii2/blob/master/views/site/index.php)

**ДЗ №2 Middleware**
* [Переопределил behaviors()](https://github.com/skiphog/profit-yii2/blob/master/controllers/TestVerifyController.php)
* [Фильтр](https://github.com/skiphog/profit-yii2/blob/master/components/Verify.php)

**ДЗ №3 Шаблоны**
* [Вывести текущую дату](https://github.com/skiphog/profit-yii2/blob/master/views/layouts/app.php#L34)
* [Форма поиска](https://github.com/skiphog/profit-yii2/blob/master/views/layouts/app.php#L26) (Подключение [библиотеки в Asset](https://github.com/skiphog/profit-yii2/blob/master/assets/AppAsset.php))
* [Виджет новостей](https://github.com/skiphog/profit-yii2/blob/master/components/NewsWidget.php) и [применение](https://github.com/skiphog/profit-yii2/blob/master/views/test-news/testNews.php)

**ДЗ №4 Миграции**
* Созданы миграции для таблиц: [Авторы](https://github.com/skiphog/profit-yii2/blob/master/migrations/m170917_172412_create_authors_table.php) и [Новости](https://github.com/skiphog/profit-yii2/blob/master/migrations/m170917_172754_create_news_table.php)
* Связь Авторов - [один ко многим](https://github.com/skiphog/profit-yii2/blob/master/models/Author.php#L18). У новостей [обратная связь](https://github.com/skiphog/profit-yii2/blob/master/models/Article.php#L24).
* [Виджет для вывода новостей](https://github.com/skiphog/profit-yii2/blob/master/components/ArticleWidget.php) (Назвал так, т.к. NewsWidget уже занят для прошлого ДЗ). [Шаблон для виджета](https://github.com/skiphog/profit-yii2/blob/master/components/views/articles.php) и [применение](https://github.com/skiphog/profit-yii2/blob/master/views/news/index.php#L15) 
