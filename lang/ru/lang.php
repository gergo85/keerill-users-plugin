<?php return [
    'plugin' => [
        'name' => 'Пользователи',
        'description' => 'Управление пользователями и их правами'
    ],
    'users' => [
        'label' => 'Пользователи',
        'sideMenu' => 'Управление пользователями',
        'create_user' => 'Создать нового пользователя',
        'create_title' => 'Создание нового пользователя',
        'update_title' => 'Редактирование пользователя',
        'preview_title' => 'Просмотр пользователя',
        'confirm_delete' => 'Вы действительно хотите удалить данного пользователя?',
        'edit' => 'Редактировать',
        'block' => 'Управление блокировкой',
        'user_no_activated' => 'Если включено обязательное активирование аккаунта для входа, то данных пользователь не сможет зайти.',
        'activate'=> 'Активировать данного пользователя вручную',
        'confirm_activate' => 'Вы действительно хотите активировать данного пользователя?',
        'joined' => 'Присоединился',
        'status' => 'Статус',
        'is_no_activated' => 'Ожидает активации',
        'never' => 'Никогда'
    ],
    'user' => [
        'label' => 'Пользователь',
        'label_name' => 'Пользователь :name',
        'name' => 'Имя пользователя',
        'email' => 'Электронная почта',
        'email_desc' => 'Используется для отправки писем активации или восстановления пароля аккаунта',
        'group' => 'Группа',
        'ip_address' => 'IP адрес',
        'password' => 'Пароль',
        'password_desc' => 'Введите пароль, который будет использоваться для входа',
        'password_update' => 'Сброс пароля',
        'password_update_desc' => 'Введите пароль, который будет использоватся после сохранения',
        'confirm_password' => 'Повтор пароля',
        'confirm_password_desc' => 'Введите пароль еще раз для подтверждения',
        'avatar' => 'Аватар пользователя',
        'last_seen' => 'Последний вход',
        'created_at' => 'Дата регистрации',
        'is_activated' => 'Активированный',
        'is_banned' => 'Пользователь заблокирован',
        'is_banned_desc' => 'Если установить флажок, то пользователь будет заблокирован',
        'is_banned_reason' => 'Причина блокировки',
        'is_banned_reason_desc' => 'Данная причина блокировки будет отображаться всем, даже заблокированному пользователю',
        'tab_account' => 'Аккаунт',
        'banned_log' => 'Пользователь был заблокирован по причине: :reason',
        'unbanned_log' => 'Пользователь был разблокирован по причине: :reason',
        'ban_no_reason' => 'Причина не указана',
        'revision' => [
            'label' => 'Изменения',
            'field' => 'Навзание поля',
            'old_value' => 'Старое значение',
            'new_value' => 'Новое значение'
        ]
    ],
    'groups' => [
        'label' => 'Группы',
        'sideMenu' => 'Управление группами',
        'create_group' => 'Создать новую группу',
        'create_title' => 'Создание новой группы',
        'update_title' => 'Редактирование группы'
    ],
    'group' => [
        'label' => 'Группа',
        'name' => 'Название группы',
        'code' => 'Уникальный код группы'
    ],
    'settings' => [
        'users' => 'Настройка пользователей',
        'users_desc' => 'Управление настройками пользователей',
        'accessLogs' => 'Журнал доступа пользователей',
        'accessLogs_desc' => 'Просмотр всех попыток авторизироваться пользователя',
        'usersLogs' => 'Журнал активности пользователей',
        'usersLogs_desc' => 'Просмотр журнала с активиными действиями пользователей',
        'component_name' => 'Настройки',
        'component_desc' => 'Выводит форму редактирования настроек пользователя',
        'redirect' => 'Перенаправление',
        'redirect_desc' => 'Перенаправление на страницу после сохранения настроек',
        'save_settings' => 'Настройки были успешно изменены',
        'no_perm_save' => 'изменения настроек',
        'use_logs' => 'Сохранять все возможные действия пользователя',
        'use_logs_desc' => 'Если опция включена, то все действия совершенные пользователем будут храниться в базе данных',
        'use_access_logs' => 'Сохранять все попытки аутентификации пользователей',
        'use_access_logs_desc' => 'Если опция включено, то после каждой попытки аутентифицироваться в базу данных будет добавлятся запись',
        'del_oldAccessLogs_days' => 'Количество дней для удаления старых логов доступа',
        'del_oldAccessLogs_days_desc' => 'Количество дней, через которые система будет считать записи старыми и удалять из базы. Введите 0, чтобы отключить функцию',
        'allow_groups' => 'Запрет к авторизации',
        'allow_groups_desc' => 'Группы, не имеющие возможность авторизироватся на сайте',
        'use_throttle' => 'Отслеживание неудачных попыток авторизации',
        'use_throttle_desc' => 'При множественных неудачных попытках авторизации пользователь будет заморожен',
        'block_persistence' => 'Запретить одновременные сеансы',
        'block_persistence_desc' => 'Когда активированные пользователи не могут войти на несколько устройств одновременно',
        'section_activation' => 'Активация аккаунта',
        'section_activation_desc' => 'Настройка активации новых пользователей',
        'require_activation' => 'Обязательная активация аккаунта',
        'require_activation_desc' => 'Пользователи должны иметь активированный аккаунт для входа',
        'activate_mode' => 'Активация',
        'activate_mode_desc' => 'Активация пользователя',
        'del_noActUsers_days' => 'Количество дней для удаления пользователей',
        'del_noActUsers_days_desc' => 'Количество дней для активации пользователя, иначе пользователь будет удален. Введите 0, чтобы отключить удаление',
        'section_registration' => 'Регистрация',
        'section_registration_desc' => 'Настройка регистрации новых пользователей',
        'allow_registration' => 'Разрешить регистрацию',
        'allow_registration_desc' => 'Если эта опция выключена, только администраторы смогут регистрировать пользователей',
        'group_banned' => 'Группа заблокированного пользователя',
        'group_banned_desc' => 'Группа присваивается, когда пользователь заблокирован',
        'group_activated' => 'Группа активированного пользователя',
        'group_activated_desc' => 'Группа присваивается, когда пользователь активировал свой аккаунт',
        'group_guest' => 'Группа не авторизированного пользователя',
        'group_guest_desc' => 'Если пользователь не авторизировался на сайте, то по умолчанию права будут наследоваться из этой группы',
        'group_no_activated' => 'Группа не активированного пользователя',
        'group_no_activated_desc' => 'Группа присваивается, когда пользователь не активировал свой аккаунт',
        'activate_auto' => 'Автоматическая',
        'activate_auto_desc' => 'Автоматическая активация при регистрации',
        'activate_user' => 'Стандартная',
        'activate_user_desc' => 'Активация при помощи электронной почты',
        'activate_admin' => 'Ручная',
        'activate_admin_auto' => 'Только администратор может активировать пользователя',
        'tabs' => [
            'system' => 'Система',
            'user' => 'Пользователь',
            'groups' => 'Настройка групп'
        ]
    ],
    'logs' => [
        'menu_label' => 'Активные действия',
        'message' => 'Сообщение',
        'code' => 'Уникальный код',
        'label' => 'Запись',
        'created_at' => 'Дата & Время'
    ],
    'accessLogs' => [
        'menu_label' => 'Доступ',
        'status' => 'Статус'
    ],
    'permissions' => [
        'users' => 'Управление пользователями',
        'groups' => 'Управление группами',
        'settings' => 'Управление настройками пользователя',
        'accessLogs' => 'Доступ к просмотру журнала доступа пользователя',
        'usersLogs' => 'Доступ к просмотру журнала активных действий пользователя',
        'frontend' => [
            'accessSite' => 'Доступ к просмотру страницы сайта',
            'settings' => 'Возможность изменять свои настройки'
        ]
    ],
    'messages' => [
        'user_no_activate' => 'Невозможно авторизоваться под ":name", потому что не подтвержден',
        'user_credentials_invalid' => 'Логин или пароль, введены не верно!',
        'user_is_activated' => 'Пользователь уже подтвержден',
        'user_no_activated' => 'Пользователь не подтвержден',
        'user_activation_success' => 'Пользователь успешно активирован',
        'user_not_found' => 'Пользователь с такими данными не найден',
        'user_cannot_auth' => 'Авторизация была ограничена администрацией сайта',
        'user_auth' => 'Авторизация на сайте: :status',
        'user_auth_success' => 'Вход выполнен успешно',
        'user_send_mail' => 'Письмо с дальнейшими инструкциями отправлено на вашу почту',
        'user_not_perm' => 'Недостаточно прав для выполнения данной операции',
        'user_not_perm_with' => 'Недостаточно прав для :operation'
    ],
    'page' => [
        'label' => 'Настройка доступа',
        'control_permissions' => [
            'label' => 'Режим ограничения доступа к странице',
            'comment' => 'Действие, которое будет применяться к пользователю, если у пользователя недостаточно прав к странице',
            'options_all' => 'Доступна всем',
            'options_redirect' => 'Перенаправление на другую страницу'
        ],
        'permission' => [
            'label' => 'Право на доступ к странице',
            'comment' => 'Пользователь, имеющий данное право, имеет доступ к просмотру странице'
        ],
        'use_user_auth' => [
            'label' => 'Перенаправление авторизированного пользователя',
            'comment' => 'Если это опция включена, то авторизированные пользователи будут перенаправлятся на специальную страницу'
        ],
        'page_redirect' => [
            'label' => 'Страница перенаправления',
            'comment' => 'Если опция "Перенаправление авторизированного пользователя" выключена, то на эту страницу будут перенаправляться все пользователи'
        ],
        'page_user_redirect' => [
            'label' => 'Страница перенаправления авторизированного пользователя',
            'comment' => 'Если опция "Перенаправление авторизированного пользователя" включена, то на эту страницу будут перенаправляться только авторизированные пользователи'
        ],
        'use_referer_param' => [
            'label' => 'Параметр обратного перенаправления',
            'comment' => 'В случае перенаправления, будет отправлятся параметр referer с URL текущей страницы'
        ]
    ],
    'activity' => [
        'component_name' => 'Активные действия',
        'component_desc' => 'Выводит список активных действий пользователя',
        'count' => 'Количество строк на страницу'
    ],
    'auth' => [
        'component_name' => 'Аутентификация',
        'component_desc' => 'Выводит форму аутентификации пользователя',
        'redirect' => 'Перенаправление',
        'redirect_desc' => 'Перенаправление пользователя после успешной аутентификации пользователя'
    ],
    'log' => [
        'component_name' => 'Журнал доступа',
        'component_desc' => 'Выводит список всех попыток входа пользователя',
        'count' => 'Количество строк на страницу',
        'created_at' => 'Дата & Время'
    ],
    'register' => [
        'component_name' => 'Регистрация',
        'component_desc' => 'Выводит форму регистрации пользователя',
        'code' => 'Параметр кода',
        'code_desc' => 'Название параметра, в котором передаётся код активации аккаунта',
        'redirect' => 'Перенаправление',
        'redirect_desc' => 'Перенаправление пользователя после успешной регистрации пользователя',
        'register_disable' => 'Регистрация была отключена администрацией сайта',
        'is_user' => 'Вы уже авторизированы и не можете пройти регистрацию',
        'activation_invalid_code' => 'Неверный код активации или пользователь уже подтвержден'
    ],
    'reset' => [
        'component_name' => 'Восстановление пароля',
        'component_desc' => 'Выводит форму восстановления пароля',
        'code' => 'Параметр кода',
        'code_desc' => 'Название параметра, в котором передаётся код восстановления пароля аккаунта',
        'redirect' => 'Перенаправление',
        'redirect_desc' => 'Перенаправление на страницу, после успешного восстановления пароля',
        'reset_code_invalid' => 'Неверный код активации, проверьте правильность кода',
        'reset_success' => 'Было успешно выполнено восстановления пароля пользователя'
    ],
    'session' => [
        'component_name' => 'Сессия пользователя',
        'component_desc' => 'Определяет пользователя по кукам и добавляется переменную пользователя на страницу',
        'page_register' => 'Страница регистрации',
        'page_register_desc' => 'Нужно для создания ссылки активации в письме',
        'page_not_found' => 'Страница регистрации не выбрана'
    ],
    'mail' => [
        'activate' => 'Письмо с инструкциями для активации аккаунта новых пользователей',
        'restore' => 'Письмо с инструкциями по восстановлению пароля'
    ]
];