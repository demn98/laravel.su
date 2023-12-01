# Русскоязычное сообщество Laravel

Добро пожаловать в репозиторий русскоязычного сообщества Laravel! Здесь вы найдете полезные ресурсы, документацию и
возможность общаться с другими разработчиками.

# Список задач

## Документация (Работа с кодом)

- [ ] Корректное отображение кода - Убедиться, что код в документации отображается правильно, с соблюдением форматирования, подсветкой синтаксиса
- [x] Корректное отображение таблиц - Убедиться, что таблицы в документации отображаются так, чтобы данные были читаемыми и оформлены правильно, с правильным выравниванием содержимого ячеек.
- [ ] Корректное отображение коллекций (столбцов) - Проверить, что коллекции (например, списки или словари) в документации правильно отображаются, особенно когда имеются вложенные структуры данных.
- [ ] Корректное отображение цитат - Убедиться, что цитаты в документации выделяются и форматируются соответствующим образом для читаемости и понятности.
- [ ] Корректное отображение предупреждений - Проверить, что предупреждения в документации явно выделяются, чтобы пользователи могли обратить на них внимание.
- [x] Типограф - Применить правила типографики к тексту документации с целью улучшения его читаемости, например, автоматическое исправление ошибок в расстановке кавычек, дефисов и других знаков препинания.
- [x] Команда для загрузки документов из git - Создать команду, которая будет позволять загружать документацию напрямую из системы контроля версий Git, чтобы всегда иметь актуальную версию документации доступной для пользователей.
- [ ] Поиск по документации - Реализовать функциональность поиска в документации, чтобы пользователи могли быстро находить нужную информацию по ключевым словам или фразам.
- [ ] Проверка прошлых версий на работоспособность - Регулярно тестировать документацию на старых версиях продукта, чтобы убедиться, что все примеры и инструкции все еще актуальны и работоспособны.
- [x] Переключение версий - Предоставить возможность пользователям выбирать нужную версию документации
- [ ] Обноавить инструкцию для системы переводов, что бы её было легко понять
- [x] Записывать последний доступный хэш коммита
- [ ] Дружелюбно показывать если документация отстаёт от оригинала и на сколько сильно 
- [ ] Форматирование отступов, что бы последнего не было никогда.

## Документация (Работа с текстом)

- [ ] Сделать PR в репозиторий, который бы позволял использовать YAML формат в документах
- [ ] Решить, нужно ли показывать страницы которых нет совсем
- [ ] Сделать перевод актуальной версии laravel


## Профиль

- [x] Вход через GitHub, что бы брать только активнвую аудиторию и сьэкономить на страницах и рассылки email
- [x] Выход пользователя
- [ ] Ачивки пользователя - вознагрождать пользователя, за то что он состоит в организации laravel, за написание статей или комментариев или пакетов.
- [ ] Добавление информации о себе и дать возможность изменять имя, так как оно скорее всего будет на английском в github 

## Публикации

- [x] Возможность пользователю делать публикации
- [x] Markdown редактор (Пусть пользователь сразу привыкает к тому, что ему придётся иметь дело именно с markdown) 
- [ ] Маркер, для того что бы пользователь определился сам, как будет выглядеть короткая версия поста, либо сделать это автоматически
- [ ] Генерация изображений для социальных сетей и ссылок, где бы заголовок отображался на картинке красиво
- [ ] Предпросмотр того как статья будет выглядеть ещё до публикации
- [ ] Теги публикации, лучше всего из списка Enum и до 1/2/3
- [ ] Рейтинг +1 / -1 где пользователь может высказывать понравилась ли ему публикация
- [x] Система коментариев с поддержкой (Не большой?) вложенности
- [ ] Рейтинг у комментария
- [ ] Меншены в комментариях?
- [ ] Возможность загрузки изображений через редактор и их эффективное удаление/ресайз
- [x] Блок с самыми полулярными публикациями
- [ ] Push/Site уведомления о новых комментариях или упоминаний

## Как использовать этот репозиторий

Мы постоянно стараемся расширять и улучшать содержимое этого репозитория, чтобы обеспечить вас всей необходимой
информацией. Здесь вы найдете разделы, предлагающие различные типы материалов:

- **[Документация](https://github.com/laravelrus/docs)**: Русскоязычная документация Laravel, которая поможет вам лучше
  понять фреймворк и его функциональные возможности.

## Как внести свой вклад

Мы всегда рады новым участникам и их идеям! Если вы хотите внести свой вклад в развитие репозитория, вы можете сделать
следующее:

- Предложить добавление новых материалов или улучшение существующих.
- Создать запрос на добавление примера кода или статьи.
- Добавить ссылки на полезные ресурсы или пакеты.


### Установка

Для использования данного проекта обязательно требуется настройка HTTPS-протокола, а также конфигурирование доступов для взаимодействия с GitHub API. Для этого необходимо внести следующие переменные в файл `.env` вашего проекта:

```bash
# Здесь должен быть ваш персональный токен доступа на GitHub
GITHUB_ACCESS_TOKEN=ваш_токен_доступа

# Идентификатор клиента OAuth приложения GitHub
GITHUB_CLIENT_ID=ваш_client_id

# Секретный ключ клиента OAuth приложения GitHub
GITHUB_CLIENT_SECRET=ваш_client_secret

# URL-адрес для перенаправления после аутентификации через GitHub
GITHUB_REDIRECT=https://ваш_домен.test/auth/callback
```

Для загрузки или обновления русскоязычной версии документации, пожалуйста, используйте команду Artisan:

```bash
php artisan checkout-latest-docs
```

Чтобы отслеживать прогресс выполнения переводов, выполняйте следующую команду:

```bash
php artisan app:compare-document
```

Убедитесь, что перед использованием команд `artisan` вы находитесь в корневой директории вашего проекта.

## Связаться с нами

Мы всегда открыты для обратной связи, вопросов и предложений. Вы можете связаться с нами через телеграм:

- Илья Чубаров: @agoalofalife
- Александр Черняев: @tabuna
