<?php
/** 
*
* acp_styles [Russian]
*
* @package language
* @version $Id: styles.php,v 1.26 2007/01/26 18:15:17 naderman Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_IMAGESETS_EXPLAIN'	=> 'Пакеты изображений включают в себя все используемые конференцией картинки кнопок, форумов, папок и т.п., а также другие, не относящиеся к конкретным стилям изображения. Здесь вы можете редактировать, экспортировать или удалять существующие пакеты изображений и импортировать или активировать новые.',
	'ACP_STYLES_EXPLAIN'	=> 'Здесь вы можете управлять стилями, доступными на конференции. Стиль состоит из шаблона, темы и пакета изображений. Вы можете изменять существующие стили, удалять, деактивировать, повторно активировать, создавать их или импортировать новые. Вы также можете увидеть, как будет выглядеть стиль, используя функцию предпросмотра. Текущий стиль по умолчанию помечен звёздочкой (*). Также указано общее количество пользователей для каждого стиля. Учтите, что принудительная замена стилей пользователей здесь не производится.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'Шаблон включает все элементы разметки, используемые для генерации страниц конференции. Здесь вы можете редактировать существующие шаблоны, удалять, экспортировать, импортировать и предварительно просматривать их. Вы можете также изменять код шаблона, используемый для генерации BBCode.',
	'ACP_THEMES_EXPLAIN'	=> 'Здесь вы можете создавать, устанавливать, редактировать, удалять и экспортировать темы. Тема является комбинацией цветов и изображений, используемых в шаблоне и определяющих внешний вид конференции. Доступный вам диапазон настроек зависит от конфигурации сервера и версии phpBB, обратитесь к документации для получения дополнительной информации. Пожалуйста, учтите, что при создании новых тем использование существующих тем в качестве основы не является обязательным.',
	'ADD_IMAGESET'			=> 'Создать пакет изображений',
	'ADD_IMAGESET_EXPLAIN'	=> 'Здесь вы можете создать новый пакет изображений. В зависимости от конфигурации сервера и прав доступа к файлам, вам могут быть доступны дополнительные возможности. Например, создание пакета изображений на основе уже существующего. Вам также могут быть доступны загрузка или импорт (из папки store) архива пакета изображений. При закачке или импортировании архива имя пакета изображений можно взять из имени файла архива (для этого оставьте пустым поле с именем пакета изображений).',
	'ADD_STYLE'				=> 'Создать стиль',
	'ADD_STYLE_EXPLAIN'		=> 'Здесь вы можете создать новый стиль. В зависимости от конфигурации сервера и прав доступа к файлам, вам могут быть доступны дополнительные возможности. Например, создание стиля на основе уже существующего. Вам также могут быть доступны загрузка или импорт (из папки store) архива стиля. Если вы загружаете или импортируете архив, имя стиля будет установлено автоматически.',
	'ADD_TEMPLATE'			=> 'Создать шаблон',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Здесь вы можете создать новый шаблон. В зависимости от конфигурации сервера и прав доступа к файлам, вам могут быть доступны дополнительные возможности. Например, создание шаблона на основе уже существующего. Вам также могут быть доступны загрузка или импорт (из папки store) архива шаблона. При закачке или импортировании архива имя пакета изображений можно взять из имени файла архива (для этого оставьте пустым поле с именем шаблона).',
	'ADD_THEME'				=> 'Создать тему',
	'ADD_THEME_EXPLAIN'		=> 'Здесь вы можете создать новую тему. В зависимости от конфигурации сервера и прав доступа к файлам, вам могут быть доступны дополнительные возможности. например, создание темы на основе уже существующей. Вам также могут быть доступны загрузка или импорт (из папки store) архива темы. При закачке или импортировании архива имя пакета изображений можно взять из имени файла архива (для этого оставьте пустым поле с именем темы).',
	'ARCHIVE_FORMAT'		=> 'Тип архива',

	'BACKGROUND'			=> 'Фон',
	'BACKGROUND_COLOUR'		=> 'Цвет фона',
	'BACKGROUND_IMAGE'		=> 'Фоновое изображение',
	'BACKGROUND_REPEAT'		=> 'Повторение фона',
	'BOLD'					=> 'Полужирный',

	'CACHE'							=> 'Кэш',
	'CACHE_CACHED'					=> 'Кэшировано',
	'CACHE_FILENAME'				=> 'Файл шаблона',
	'CACHE_FILESIZE'				=> 'Размер файла',
	'CACHE_MODIFIED'				=> 'Изменён',
	'CONFIRM_IMAGESET_REFRESH'		=> 'Вы действительно желаете обновить все данные пакета изображений? Все изменения, произведённые редактором пакетов изображений, будут заменены настройками из файла конфигурации пакета изображений.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Вы действительно хотите удалить все кэшированные версии файлов шаблона?',
	'CONFIRM_TEMPLATE_REFRESH'		=> 'Вы действительно хотите заменить все данные шаблона в базе данных на содержимое файлов шаблона с сервера? Все изменения, произведённые с помощью редактора шаблонов и сохранённые в базе данных, будут потеряны.',
	'CONFIRM_THEME_REFRESH'			=> 'Вы действительно желаете заменить все данные темы в базе данных на содержимое файлов темы с сервера? Все изменения, произведённые с помощью редактора тем и сохранённые в базе данных, будут потеряны.',
	'COPYRIGHT'						=> 'Копирайт',
	'CREATE_IMAGESET'				=> 'Создать пакет изображений',
	'CREATE_STYLE'					=> 'Создать стиль',
	'CREATE_TEMPLATE'				=> 'Создать шаблон',
	'CREATE_THEME'					=> 'Создать тему',
	'CSS_CLASS_NAME'				=> 'Имя класса CSS',
	'CSS_COLOUR_EXPLAIN'			=> 'Вы можете задать шестнадцатеричный формат цвета или выбрать его, используя безопасную палитру цветов.',
	'CURRENT_IMAGE'					=> 'Текущее изображение',
	'CUSTOM_CLASS'					=> 'Пользовательский класс',
	'CUSTOM_CLASS_EXPLAIN'			=> 'Вы можете добавлять классы к этой теме по вашему желанию. Ниже необходимо задать имя класса, которое вы используете или будете использовать в своём шаблоне. Пожалуйста, не забывайте, что имена классов могут содержать только буквенно-цифровые символы, точки (.), двоеточия (:), дефисы (-), подчеркивания (_) и символ решётки (#). Новый класс будет добавлен к списку выбора классов выше.',

	'DEACTIVATE_DEFAULT'		=> 'Вы не можете сделать неактивным стиль по умолчанию.',
	'DELETE_FROM_FS'			=> 'Удалить с сервера',
	'DELETE_IMAGESET'			=> 'Удалить пакет изображений',
	'DELETE_IMAGESET_EXPLAIN'	=> 'Здесь вы можете удалить из базы данных выбранный пакет изображений. Кроме того, при наличии прав доступа, вы можете удалить пакет изображений с сервера. Пожалуйста, учтите, что отменить удаление невозможно. Удаление пакета изображений происходит безвозвратно. Рекомендуется сначала экспортировать пакет изображений для возможного использования в будущем.',
	'DELETE_STYLE'				=> 'Удалить стиль',
	'DELETE_STYLE_EXPLAIN'		=> 'Здесь вы можете удалить выбранный стиль. Вы не сможете удалить все элементы стиля. Они должны быть удалены отдельно через соответствующие формы. Будьте осторожны с удалением стилей, операцию нельзя будет отменить.',
	'DELETE_TEMPLATE'			=> 'Удалить шаблон',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Здесь вы можете удалить из базы данных выбранный шаблон. Кроме того, при наличии прав доступа, вы можете удалить шаблон с сервера. Пожалуйста, учтите, что отменить удаление невозможно. Удаление шаблонов происходит безвозвратно. Рекомендуется сначала экспортировать шаблон для возможного использования в будущем.',
	'DELETE_THEME'				=> 'Удалить тему',
	'DELETE_THEME_EXPLAIN'		=> 'Здесь вы можете удалить из базы данных выбранную тему. Кроме того, при наличии прав доступа, вы можете удалить тему с сервера. Пожалуйста, учтите, что отменить удаление невозможно. Удаление тем происходит безвозвратно. Рекомендуется сначала экспортировать тему для возможного использования в будущем.',
	'DETAILS'					=> 'Информация',
	'DIMENSIONS_EXPLAIN'		=> 'Выберите «Да» для учёта параметров ширины/высоты.',

	'EDIT_DETAILS_IMAGESET'				=> 'Редактировать информацию о пакете изображений',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'Здесь вы можете редактировать некоторые сведения о пакете изображений, такие, как его наименование.',
	'EDIT_DETAILS_STYLE'				=> 'Редактировать стиль',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'В форме ниже вы можете изменять существующий стиль. Вы можете комбинировать шаблоны, темы и пакеты изображений, составляющие сам стиль. Вы также можете назначить стиль по умолчанию.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Редактировать информацию о шаблоне',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Здесь вы можете редактировать некоторые сведения о шаблоне, такие, как его наименование. Вы также можете изменить место хранения параметров стиля с сервера на базу данных и обратно. Эта возможность зависит от конфигурации PHP и от наличия разрешения на запись файлов шаблона веб-сервером.',
	'EDIT_DETAILS_THEME'				=> 'Редактировать информацию о теме',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Здесь вы можете редактировать некоторые сведения о теме, такие, как её наименование. Вы можете также изменить место хранения параметров стиля с сервера на базу данных и обратно.  Эта возможность зависит от конфигурации PHP и от наличия разрешения на запись параметров стиля веб-сервером.',
	'EDIT_IMAGESET'						=> 'Редактировать пакет изображений',
	'EDIT_IMAGESET_EXPLAIN'				=> 'Здесь вы можете редактировать отдельные изображения, входящие в пакет. Вы можете также указать, учитывать ли размеры изображения. Учёт размеров не является обязательным, но может решить проблемы отображения в некоторых браузерах. Если размеры изображения не учитываются, это немного уменьшит размер базы данных.',
	'EDIT_TEMPLATE'						=> 'Редактировать шаблон',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Здесь вы можете напрямую редактировать шаблон. Пожалуйста, не забывайте, что внесённые изменения окончательны и не могут быть отменены. Если PHP имеет возможность записи в файлы шаблона в папке стиля, любые изменения будут записаны непосредственно в эти файлы. В противном случае они будут скопированы в базу данных и будут храниться только там. Пожалуйста, будьте аккуратны, редактируя шаблон, не забывайте закрывать все переменные шаблона {XXXX} и условные операторы.',
	'EDIT_TEMPLATE_STORED_DB'			=> 'Невозможно записать файл шаблона, поэтому шаблон, содержащий изменённый файл, сохранён в базе данных.',
	'EDIT_THEME'						=> 'Редактировать тему',
	'EDIT_THEME_EXPLAIN'				=> 'Здесь вы можете редактировать выбранную тему, изменять цвета, изображения и т.д. вы можете переключаться между упрощённым интерфейсом, с помощью которого можно редактировать основные цвета и т.п., и более продвинутым режимом "код CSS". Режим кода позволяет добавлять дополнительные параметры, такие, как границы и пр. Устанавливайте эти параметры только при необходимости, иначе оставляйте их пустыми или незаданными.',
	'EDIT_THEME_STORED_DB'				=> 'Невозможно записать файл параметров стиля, поэтому они сохранены в базе данных вместе с внесёнными изменениями.',
	'EXPORT'							=> 'Экспорт',

	'FOREGROUND'			=> 'Передний план',
	'FONT_COLOUR'			=> 'Цвет шрифта',
	'FONT_FACE'				=> 'Тип шрифта',
	'FONT_FACE_EXPLAIN'		=> 'Вы можете задать несколько шрифтов, разделённых запятыми. Если у пользователя не установлен первый из заданных шрифтов, будет выбран первый установленный из списка.',
	'FONT_SIZE'				=> 'Размер шрифта',

	'GLOBAL_IMAGES'			=> 'Общие',

	'HIDE_CSS'				=> 'Скрыть код CSS',

	'IMAGE_CONFIGURATION'		=> 'Настройки изображения',
	'IMAGE_WIDTH'				=> 'Ширина изображения',
	'IMAGE_HEIGHT'				=> 'Высота изображения',
	'IMAGE'						=> 'Изображение',
	'IMAGE_LOCATION'			=> 'Местонахождение изображения',
	'IMAGE_NAME'				=> 'Имя изображения',
	'IMAGE_PARAMETER'			=> 'Параметр',
	'IMAGE_VALUE'				=> 'Значение',
	'IMAGESET_ADDED'			=> 'Новый пакет изображений добавлен на сервер.',
	'IMAGESET_ADDED_DB'			=> 'Новый пакет изображений добавлен в базу данных.',
	'IMAGESET_DELETED'			=> 'Пакет изображений успешно удалён.',
	'IMAGESET_DELETED_FS'		=> 'Пакет изображений удалён из базы данных, но некоторые файлы могут оставаться на сервере.',
	'IMAGESET_DETAILS_UPDATED'	=> 'Информация о пакете изображений успешно обновлена.',
	'IMAGESET_ERR_ARCHIVE'		=> 'Пожалуйста, выберите метод архивирования.',
	'IMAGESET_ERR_COPY_LONG'	=> 'Длина копирайта не может быть больше 60 символов.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'Наименование пакета изображений может содержать только буквенно-цифровые символы, -, +, _ и пробел.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'Пакет изображений с таким именем уже существует.',
	'IMAGESET_ERR_NAME_LONG'	=> 'Наименование пакета изображений не может быть больше 30 символов.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'Указанный архив не содержит необходимого пакета изображений.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'Вы должны указать имя этого пакета изображений.',
	'IMAGESET_EXPORT'			=> 'Экспорт пакета изображений',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Здесь вы можете экспортировать пакет изображений в архив. Этот архив будет содержать все данные, необходимые для установки пакета изображений на другую конференцию. Вы можете выбрать, скачивать ли файл напрямую, или сохранить его в папке store, чтобы скачать его позднее через FTP.',
	'IMAGESET_EXPORTED'			=> 'Пакет изображений успешно экспортирован и сохранён в %s.',
	'IMAGESET_NAME'				=> 'Имя пакета изображений',
	'IMAGESET_REFRESHED'		=> 'Пакет изображений успешно обновлён.',
	'IMAGESET_UPDATED'			=> 'Пакет изображений успешно обновлён.',
	'ITALIC'					=> 'Курсив',

	'IMG_CAT_BUTTONS'		=> 'Кнопки на других языках',
	'IMG_CAT_CUSTOM'		=> 'Пользовательские изображения',
	'IMG_CAT_FOLDERS'		=> 'Значки тем',
	'IMG_CAT_FORUMS'		=> 'Значки форумов',
	'IMG_CAT_ICONS'			=> 'Общие значки',
	'IMG_CAT_LOGOS'			=> 'Логотипы',
	'IMG_CAT_POLLS'			=> 'Изображения опросов',
	'IMG_CAT_UI'			=> 'Общие элементы пользовательского интерфейса',
	'IMG_CAT_USER'			=> 'Дополнительные изображения',

	'IMG_SITE_LOGO'			=> 'Главный логотип',
	'IMG_UPLOAD_BAR'		=> 'Состояние закачки',
	'IMG_POLL_LEFT'			=> 'Опрос слева',
	'IMG_POLL_CENTER'		=> 'Опрос в центре',
	'IMG_POLL_RIGHT'		=> 'Опрос справа',
	'IMG_ICON_FRIEND'		=> 'Добавить как друга',
	'IMG_ICON_FOE'			=> 'Добавить как недруга',

	'IMG_FORUM_LINK'			=> 'Ссылка на форум',
	'IMG_FORUM_READ'			=> 'Форум',
	'IMG_FORUM_READ_LOCKED'		=> 'Форум закрыт',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Подфорум',
	'IMG_FORUM_UNREAD'			=> 'Форум с новыми сообщениями',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Закрытый форум с новыми сообщениями',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Подфорум с новыми сообщениями',

	'IMG_TOPIC_MOVED'			=> 'Тема перемещена',

	'IMG_TOPIC_READ'				=> 'Тема',
	'IMG_TOPIC_READ_MINE'			=> 'Тема с моими сообщениями',
	'IMG_TOPIC_READ_HOT'			=> 'Горячая тема',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Горячая тема с моими сообщениями',
	'IMG_TOPIC_READ_LOCKED'			=> 'Закрытая тема',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Закрытая тема с моими сообщениями',

	'IMG_TOPIC_UNREAD'				=> 'Тема с новыми сообщениями',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Тема с новыми сообщениями, содержащая мои сообщения',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Горячая тема с новыми сообщениями',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Горячая тема с новыми сообщениями, содержащая мои сообщения',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Закрытая тема с новыми сообщениями',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Закрытая тема с новыми сообщениями, содержащая мои сообщения',

	'IMG_STICKY_READ'				=> 'Прилепленная тема',
	'IMG_STICKY_READ_MINE'			=> 'Прилепленная тема с моими сообщениями',
	'IMG_STICKY_READ_LOCKED'		=> 'Закрытая прилепленная тема',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Закрытая прилепленная тема с моими сообщениями',
	'IMG_STICKY_UNREAD'				=> 'Прилепленная тема с новыми сообщениями',
	'IMG_STICKY_UNREAD_MINE'		=> 'Прилепленная тема с новыми сообщениями, содержащая мои сообщения',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Закрытая прилепленная тема с новыми сообщениями',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Закрытая прилепленная тема с новыми сообщениями, содержащая мои сообщения',

	'IMG_ANNOUNCE_READ'					=> 'Объявление',
	'IMG_ANNOUNCE_READ_MINE'			=> 'Объявление с моими сообщениями',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Закрытое объявление',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Закрытое объявление с моими сообщениями',
	'IMG_ANNOUNCE_UNREAD'				=> 'Объявление с новыми сообщениями',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Объявление с новыми сообщениями, содержащее мои сообщения',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Закрытое объявление с новыми сообщениями',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Закрытое объявление с новыми сообщениями, содержащее мои сообщения',

	'IMG_GLOBAL_READ'					=> 'Общая тема',
	'IMG_GLOBAL_READ_MINE'				=> 'Общая тема с моими сообщениями',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Закрытая общая тема',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Закрытая общая тема с моими сообщениями',
	'IMG_GLOBAL_UNREAD'					=> 'Общая тема с новыми сообщениями',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Общая тема с новыми сообщениями, содержащая мои сообщения',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Закрытая общая тема с новыми сообщениями',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Закрытая общая тема с новыми сообщениями, содержащая мои сообщения',

	'IMG_PM_READ'		=> 'Прочитанное личное сообщение',
	'IMG_PM_UNREAD'		=> 'Непрочитанное личное сообщение',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'Отправить сообщение email',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSNM',
	'IMG_ICON_CONTACT_PM'		=> 'Отправить сообщение',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'Вебсайт',

	'IMG_ICON_POST_DELETE'			=> 'Удалить сообщение',
	'IMG_ICON_POST_EDIT'			=> 'Редактировать сообщение',
	'IMG_ICON_POST_INFO'			=> 'Информация о сообщении',
	'IMG_ICON_POST_QUOTE'			=> 'Цитировать сообщение',
	'IMG_ICON_POST_REPORT'			=> 'Пожаловаться на сообщение',
	'IMG_ICON_POST_TARGET'			=> 'Сообщение',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Новое сообщение',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Вложение',
	'IMG_ICON_TOPIC_LATEST'			=> 'Последнее сообщение',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Последнее непрочитанное сообщение',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Обжалованное сообщение',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Отклонённое сообщение',

	'IMG_ICON_USER_ONLINE'		=> 'Пользователь в сети',
	'IMG_ICON_USER_OFFLINE'		=> 'Пользователь не в сети',
	'IMG_ICON_USER_PROFILE'		=> 'Показать профиль',
	'IMG_ICON_USER_SEARCH'		=> 'Поиск сообщений',
	'IMG_ICON_USER_WARN'		=> 'Вынести предупреждение пользователю',

	'IMG_BUTTON_PM_FORWARD'		=> 'Переслать личное сообщение',
	'IMG_BUTTON_PM_NEW'			=> 'Новое личное сообщение',
	'IMG_BUTTON_PM_REPLY'		=> 'Ответить',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Тема закрыта',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Новая тема',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Ответить',

	'IMG_USER_ICON1'		=> 'Пользовательское изображение 1',
	'IMG_USER_ICON2'		=> 'Пользовательское изображение 2',
	'IMG_USER_ICON3'		=> 'Пользовательское изображение 3',
	'IMG_USER_ICON4'		=> 'Пользовательское изображение 4',
	'IMG_USER_ICON5'		=> 'Пользовательское изображение 5',
	'IMG_USER_ICON6'		=> 'Пользовательское изображение 6',
	'IMG_USER_ICON7'		=> 'Пользовательское изображение 7',
	'IMG_USER_ICON8'		=> 'Пользовательское изображение 8',
	'IMG_USER_ICON9'		=> 'Пользовательское изображение 9',
	'IMG_USER_ICON10'		=> 'Пользовательское изображение 10',

	'INCLUDE_DIMENSIONS'		=> 'Учесть размеры',
	'INCLUDE_IMAGESET'			=> 'Включить пакет изображений',
	'INCLUDE_TEMPLATE'			=> 'Включить шаблон',
	'INCLUDE_THEME'				=> 'Включить тему',
	'INSTALL_IMAGESET'			=> 'Установить пакет изображений',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Здесь вы можете установить выбранный пакет изображений. Вы можете по желанию отредактировать некоторые настройки, или использовать установку по умолчанию.',
	'INSTALL_STYLE'				=> 'Установить стиль',
	'INSTALL_STYLE_EXPLAIN'		=> 'Здесь вы можете установить новый стиль и соответствующие ему элементы. В случае, если подходящие элементы стиля уже установлены, они не будут перезаписаны. Некоторые стили требуют, чтобы элементы существующего стиля были уже установлены. При попытке установить такой стиль в отсутствие требуемых элементов, вы будете уведомлены.',
	'INSTALL_TEMPLATE'			=> 'Установить шаблон',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Здесь вы можете установить новый шаблон. В зависимости от конфигурации сервера, вам могут быть доступны различные возможности.',
	'INSTALL_THEME'				=> 'Установить тему',
	'INSTALL_THEME_EXPLAIN'		=> 'Здесь вы можете установить выбранную тему. Вы можете отредактировать некоторые настройки или использовать установки по умолчанию.',
	'INSTALLED_IMAGESET'		=> 'Установленные пакеты изображений',
	'INSTALLED_STYLE'			=> 'Установленные стили',
	'INSTALLED_TEMPLATE'		=> 'Установленные шаблоны',
	'INSTALLED_THEME'			=> 'Установленные темы',

	'LINE_SPACING'				=> 'Интервал между линиями',
	'LOCALISED_IMAGES'			=> 'Изображения на других языках',

	'EDITED_IMAGESET'			=> 'Отредактированные пакеты изображений',

	'NO_CLASS'					=> 'Не удалось найти класс в таблице стилей.',
	'NO_IMAGESET'				=> 'Не удалось найти пакет изображений на сервере.',
	'NO_IMAGE'					=> 'Нет',
	'NO_STYLE'					=> 'Не удалось найти стиль на сервере.',
	'NO_TEMPLATE'				=> 'Не удалось найти шаблон на сервере.',
	'NO_THEME'					=> 'Не удалось найти тему на сервере.',
	'NO_UNINSTALLED_IMAGESET'	=> 'Все пакеты изображений установлены',
	'NO_UNINSTALLED_STYLE'		=> 'Все стили установлены',
	'NO_UNINSTALLED_TEMPLATE'	=> 'Все шаблоны установлены',
	'NO_UNINSTALLED_THEME'		=> 'Все темы установлены',
	'NO_UNIT'					=> 'Нет',

	'ONLY_IMAGESET'			=> 'Вы не можете удалить последний оставшийся пакет изображений.',
	'ONLY_STYLE'			=> 'Вы не можете удалить последний оставшийся стиль.',
	'ONLY_TEMPLATE'			=> 'Вы не можете удалить последний оставшийся шаблон.',
	'ONLY_THEME'			=> 'Вы не можете удалить последнюю оставшуюся тему.',
	'OPTIONAL_BASIS'		=> 'Дополнительная основа',

	'REFRESH'					=> 'Обновить',
	'REPEAT_NO'					=> 'Не повторять',
	'REPEAT_X'					=> 'Только по горизонтали',
	'REPEAT_Y'					=> 'Только по вертикали',
	'REPEAT_ALL'				=> 'В обоих направлениях',
	'REPLACE_IMAGESET'			=> 'Заменить пакет изображений на',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Этот пакет изображений заменит удаляемый во всех стилях, где он используется.',
	'REPLACE_STYLE'				=> 'Заменить стиль на',
	'REPLACE_STYLE_EXPLAIN'		=> 'Этот стиль заменит удаляемый для пользователей, которые его используют.',
	'REPLACE_TEMPLATE'			=> 'Заменить шаблон на',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Этот шаблон заменит удаляемый во всех стилях, где он используется.',
	'REPLACE_THEME'				=> 'Заменить тему на',
	'REPLACE_THEME_EXPLAIN'		=> 'Эта тема заменит удаляемую во всех стилях, где она используется.',
	'REQUIRES_IMAGESET'			=> 'Этому стилю требуется установленный пакет изображений %s.',
	'REQUIRES_TEMPLATE'			=> 'Этому стилю требуется установленный шаблон %s.',
	'REQUIRES_THEME'			=> 'Этому стилю требуется установленная тема %s.',

	'SELECT_IMAGE'				=> 'Выбрать изображение',
	'SELECT_TEMPLATE'			=> 'Выбрать файл шаблона',
	'SELECT_CLASS'				=> 'Выбрать класс CSS',
	'SELECTED_IMAGE'			=> 'Выбранное изображение',
	'SELECTED_IMAGESET'			=> 'Выбранный пакет изображений',
	'SELECTED_TEMPLATE'			=> 'Выбранный шаблон',
	'SELECTED_TEMPLATE_FILE'	=> 'Выбранный файл шаблона',
	'SELECTED_THEME'			=> 'Выбранная тема',
	'SELECTED_CLASS'			=> 'Выбранный класс CSS',
	'SHOW_CSS'					=> 'Показать код CSS',
	'SHOW_CSS_NOTE'				=> 'Примечание',
	'SHOW_CSS_EXPLAIN'			=> 'Вводите каждый элемент с новой строки, оканчивающейся точкой с запятой (;). Используйте расширенный формат для каждого элемента, например, вместо font: используйте font-family:, font-weight:, и т.п.',
	'STORE_DATABASE'			=> 'База данных',
	'STORE_FILESYSTEM'			=> 'Сервер',
	'STYLE_ACTIVATE'			=> 'Активировать',
	'STYLE_ACTIVE'				=> 'Активирован',
	'STYLE_ADDED'				=> 'Стиль успешно добавлен.',
	'STYLE_DEACTIVATE'			=> 'Деактивировать',
	'STYLE_DEFAULT'				=> 'Назначить используемым по умолчанию',
	'STYLE_DELETED'				=> 'Стиль успешно удалён.',
	'STYLE_DETAILS_UPDATED'		=> 'Стиль успешно отредактирован.',
	'STYLE_ERR_ARCHIVE'			=> 'Пожалуйста, выберите метод архивирования.',
	'STYLE_ERR_COPY_LONG'		=> 'Длина копирайта не может быть больше 60 символов.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Вы должны выбрать хотя бы один элемент стиля.',
	'STYLE_ERR_NAME_CHARS'		=> 'Имя стиля может содержать только буквенно-цифровые символы, -, +, _ и пробел.',
	'STYLE_ERR_NAME_EXIST'		=> 'Стиль с таким именем уже существует.',
	'STYLE_ERR_NAME_LONG'		=> 'Имя стиля не может быть длиннее 30 символов.',
	'STYLE_ERR_NO_IDS'			=> 'Вы должны выбрать шаблон, тему и пакет изображений для этого стиля.',
	'STYLE_ERR_NOT_STYLE'		=> 'Импортированный или загруженный файл не содержит архива стиля.',
	'STYLE_ERR_STYLE_NAME'		=> 'Вы должны задать имя для этого стиля.',
	'STYLE_EXPORT'				=> 'Экспорт стиля',
	'STYLE_EXPORT_EXPLAIN'		=> 'Здесь вы можете экспортировать стиль в виде архива. Стиль может не содержать всех элементов, но должен содержать хотя бы один из них. Например, если вы создали новую тему и пакет изображений для общеиспользуемого шаблона, вы можете просто экспортировать тему и пакет изображений без шаблона. Вы можете выбрать, скачивать ли файл напрямую, или сохранить его в папке store, чтобы скачать его позднее через FTP.',
	'STYLE_EXPORTED'			=> 'Стиль успешно экспортирован и сохранён в %s.',
	'STYLE_IMAGESET'			=> 'Пакет изображений',
	'STYLE_NAME'				=> 'Имя стиля',
	'STYLE_TEMPLATE'			=> 'Шаблон',
	'STYLE_THEME'				=> 'Тема',
	'STYLE_USED_BY'				=> 'Используют (включая роботов)',

	'TEMPLATE_ADDED'			=> 'Шаблон добавлен и сохранён на сервере.',
	'TEMPLATE_ADDED_DB'			=> 'Шаблон добавлен и сохранён в базе данных.',
	'TEMPLATE_CACHE'			=> 'Кэш шаблонов',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'По умолчанию phpBB кэширует скомпилированную версию шаблонов. Это уменьшает нагрузку на сервер при каждом просмотре страниц и, таким образом, может снизить время их генерации. Здесь вы можете просмотреть статус кэша для каждого из файлов и удалить отдельные файлы или весь кэш.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Кэш шаблона успешно очищен.',
	'TEMPLATE_CACHE_EMPTY'		=> 'Нет кэшированных шаблонов.',
	'TEMPLATE_DELETED'			=> 'Шаблон успешно удалён.',
	'TEMPLATE_DELETED_FS'		=> 'Шаблон удалён из базы данных, однако некоторые файлы могут оставаться на сервере.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Информация о шаблоне успешно обновлена.',
	'TEMPLATE_EDITOR'			=> 'Редактор HTML-кода шаблонов',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Высота редактора шаблона',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Пожалуйста, выберите метод архивирования.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'Невозможно открыть папку кэша, используемая для хранения кэшированных версий файлов шаблона.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'Длина копирайта не может быть больше 60 символов.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'Имя шаблона может содержать только буквенно-цифровые символы, -, +, _ и пробел.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'Шаблон с таким именем уже существует.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'Имя шаблона не может быть длиннее 30 символов.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'Указанный архив не содержит шаблона.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Вы должны задать имя для этого шаблона.',
	'TEMPLATE_EXPORT'			=> 'Экспорт шаблонов',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Здесь вы можете экспортировать шаблон в виде архива. Этот архив будет содержать все файлы, необходимые для установки шаблона на другую конференцию. Вы можете выбрать, скачивать ли файл напрямую, или сохранить его в папке store, чтобы скачать его позднее через FTP.',
	'TEMPLATE_EXPORTED'			=> 'Шаблон успешно экспортирован и сохранён в %s.',
	'TEMPLATE_FILE'				=> 'Файл шаблона',
	'TEMPLATE_FILE_UPDATED'		=> 'Файл шаблона успешно обновлён.',
	'TEMPLATE_LOCATION'			=> 'Сохранить шаблон в',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Изображения всегда хранятся на сервере.',
	'TEMPLATE_NAME'				=> 'Имя шаблона',
	'TEMPLATE_REFRESHED'		=> 'Шаблон успешно обновлён.',

	'THEME_ADDED'				=> 'Новая тема добавлена на сервер.',
	'THEME_ADDED_DB'			=> 'Новая тема добавлена в базу данных.',
	'THEME_CLASS_ADDED'			=> 'Пользовательский класс успешно добавлен.',
	'THEME_DELETED'				=> 'Тема успешно удалена.',
	'THEME_DELETED_FS'			=> 'Тема удалена из базы данных, но файлы остаются на сервере.',
	'THEME_DETAILS_UPDATED'		=> 'Информация о теме успешно обновлена.',
	'THEME_EDITOR'				=> 'Редактор кода CSS темы',
	'THEME_EDITOR_HEIGHT'		=> 'Высота редактора темы',
	'THEME_ERR_ARCHIVE'			=> 'Пожалуйста, выберите метод архивирования.',
	'THEME_ERR_CLASS_CHARS'		=> 'Только буквенно-цифровые символы, а также ., :, -, _ и # допустимы в именах классов.',
	'THEME_ERR_COPY_LONG'		=> 'Длина копирайта не может быть больше 60 символов.',
	'THEME_ERR_NAME_CHARS'		=> 'Имя темы может содержать только буквенно-цифровые символы, -, +, _ и пробел.',
	'THEME_ERR_NAME_EXIST'		=> 'Тема с таким именем уже существует.',
	'THEME_ERR_NAME_LONG'		=> 'Имя темы не может быть длиннее 30 символов.',
	'THEME_ERR_NOT_THEME'		=> 'Указанный архив не содержит темы.',
	'THEME_ERR_REFRESH_FS'		=> 'Эта тема хранится на сервере и не требует обновления.',
	'THEME_ERR_STYLE_NAME'		=> 'Вы должны задать имя для этой темы.',
	'THEME_EXPORT'				=> 'Экспорт темы',
	'THEME_EXPORT_EXPLAIN'		=> 'Здесь вы можете экспортировать тему в виде архива. Этот архив будет содержать все данные, необходимые для установки темы на другую конференцию. Вы можете выбрать, скачивать ли файл напрямую, или сохранить его в папке store, чтобы скачать его позднее через FTP.',
	'THEME_EXPORTED'			=> 'Тема успешно экспортирована и сохранена в %s.',
	'THEME_LOCATION'			=> 'Сохранить параметры стиля в',
	'THEME_LOCATION_EXPLAIN'	=> 'Изображения всегда хранятся на сервере.',
	'THEME_NAME'				=> 'Имя темы',
	'THEME_REFRESHED'			=> 'Тема успешно обновлена.',
	'THEME_UPDATED'				=> 'Класс успешно обновлён.',

	'UNDERLINE'				=> 'Подчёркнутый',
	'UNINSTALLED_IMAGESET'	=> 'Доступные для установки пакеты изображений',
	'UNINSTALLED_STYLE'		=> 'Доступные для установки стили',
	'UNINSTALLED_TEMPLATE'	=> 'Доступные для установки шаблоны',
	'UNINSTALLED_THEME'		=> 'Доступные для установки темы',
	'UNSET'					=> 'Не установлено',

));

?>