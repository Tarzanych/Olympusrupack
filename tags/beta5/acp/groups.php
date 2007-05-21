<?php
/** 
*
* acp_groups [Russian]
*
* @package language
* @version $Id: groups.php,v 1.15 2007/01/24 11:29:56 acydburn Exp $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Здесь вы можете управлять всеми группами пользователей, можете удалять, создавать и редактировать уже существующие группы. Вы можете назначить модераторов, переключать открытый/закрытый статус группы, задавать её имя и описание.',
	'ADD_USERS'						=> 'Добавить пользователей',
	'ADD_USERS_EXPLAIN'				=> 'Здесь вы можете добавить новых пользователей в группу. Вы можете выбрать, станет ли эта группа новой группой по умолчанию для выбранных пользователей. Дополнительно можно назначить лидеров группы. Задавайте каждое имя пользователя с новой строки.',

	'COPY_PERMISSIONS'				=> 'Копировать права доступа из',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'После создания группа будет иметь те же права доступа, что и выбранная здесь.',
	'CREATE_GROUP'					=> 'Создать группу',

	'GROUPS_NO_MEMBERS'				=> 'В этой группе нет членов',
	'GROUPS_NO_MODS'				=> 'Лидеры группы не назначены',
	'GROUP_APPROVE'					=> 'Одобрить члена группы',
	'GROUP_APPROVED'				=> 'Одобренные члены группы',
	'GROUP_AVATAR'					=> 'Аватара группы',
	'GROUP_AVATAR_EXPLAIN'			=> 'Это изображение будет отображаться в панели управления группами.',
	'GROUP_CLOSED'					=> 'Закрытая',
	'GROUP_COLOR'					=> 'Цвет группы',
	'GROUP_COLOR_EXPLAIN'			=> 'Определяет цвет имён членов группы на конференции, не заполняйте поле, чтобы оставить цвет пользователей по умолчанию.',
	'GROUP_CREATED'					=> 'Группа успешно создана.',
	'GROUP_DEFAULT'					=> 'Задать группой по умолчанию для пользователя',
	'GROUP_DEFS_UPDATED'			=> 'Для всех выбранных пользователей установлена группа по умолчанию.',
	'GROUP_DELETE'					=> 'Удалить пользователя из группы',
	'GROUP_DELETED'					=> 'Группа удалена, для её членов успешно установлены новые группы по умолчанию.',
	'GROUP_DEMOTE'					=> 'Снять лидера группы',
	'GROUP_DESC'					=> 'Описание группы',
	'GROUP_DETAILS'					=> 'Информация о группе',
	'GROUP_DST'						=> 'Летнее время группы',
	'GROUP_EDIT_EXPLAIN'			=> 'Здесь вы можете редактировать существующую группу. Можно изменять её имя, описание и тип (открытая, закрытая и т.п.). Вы можете также установить некоторые дополнительные настройки группы, такие, как цвет, звание и т.п. Текущие настройки пользователей будут заменены в соответствии с произведёнными здесь изменениями. Учтите, что члены группы могут изменять свои аватары только если вы предоставили им для этого соответствующие права.',
	'GROUP_ERR_USERS_EXIST'			=> 'Указанный пользователь уже является членом этой группы',
	'GROUP_FOUNDER_MANAGE'			=> 'Управление только основателем',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Ограничить управление этой группой, разрешив его только основателям через администраторский раздел.',
	'GROUP_HIDDEN'					=> 'Скрытая',
	'GROUP_LANG'					=> 'Язык группы',
	'GROUP_LEAD'					=> 'Лидеры группы',
	'GROUP_LEADERS_ADDED'			=> 'Новые лидеры группы успешно назначены.',
	'GROUP_LEGEND'					=> 'Отображать группу в легенде',
	'GROUP_LIST'					=> 'Действующие члены группы',
	'GROUP_LIST_EXPLAIN'			=> 'Полный список всех пользователей, являющихся в настойщее время членами этой группы. Вы можете удалять членов групп (за исключением некоторых специальных групп) или добавлять новых, которых вы считаете подходящими.',
	'GROUP_MEMBERS'					=> 'Члены группы',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Полный список всех членов этой группы. Он состоит из отдельных разделов для лидеров, кандидатов и действующих членов группы. Отсюда вы можете управлять всеми аспектами членства и распределения ролей в группе. Для того, чтобы удалить лидера, но оставить его в группе, используйте Снять вместо Удалить. Аналогично используйте Назначить для того, чтобы сделать действующего члена группы её лидером.',
	'GROUP_MESSAGE_LIMIT'			=> 'Ограничение количества личных сообщений в каждой папке для группы',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Эта настройка заменяет ограничения, установленные для папок пользователей. 0 означает, что будет использовано ограничение для пользователей по умолчанию.',
	'GROUP_MODS_ADDED'				=> 'Новые лидеры группы успешно добавлены.',
	'GROUP_MODS_DEMOTED'			=> 'Лидеры группы успешно сняты.',
	'GROUP_MODS_PROMOTED'			=> 'Члены группы успешно назначены.',
	'GROUP_NAME'					=> 'Имя группы',
	'GROUP_OPEN'					=> 'Открытая',
	'GROUP_PENDING'					=> 'Кандидаты',
	'GROUP_PROMOTE'					=> 'Назначить лидером группы',
	'GROUP_RANK'					=> 'Звание группы',
	'GROUP_RECEIVE_PM'				=> 'Группа может получать личные сообщения',
	'GROUP_REQUEST'					=> 'Запрос',
	'GROUP_SETTINGS'				=> 'Задать настройки пользователей',
	'GROUP_SETTINGS_EXPLAIN'		=> 'Здесь вы можете принудительно изменить текущие настройки пользователей. Учтите, что эти настройки не сохраняются для самой группы. Они существуют для быстрого изменения настроек всех пользователей в этой группе.',
	'GROUP_SETTINGS_SAVE'			=> 'Расширенные настройки группы',
	'GROUP_TIMEZONE'				=> 'Часовой пояс группы',
	'GROUP_TYPE'					=> 'Тип группы',
	'GROUP_TYPE_EXPLAIN'			=> 'Определяет, какие пользователи могут становиться членами группы или просматривать эту группу.',
	'GROUP_UPDATED'					=> 'Настройки группы успешно обновлены.',
	'GROUP_USERS_ADDED'				=> 'Новые пользователи успешно добавлены в группу.',
	'GROUP_USERS_EXIST'				=> 'Выбранные пользователи уже являются членами группы.',
	'GROUP_USERS_REMOVE'			=> 'Пользователи удалены из группы, для них успешно установлены новые группы по умолчанию.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Сделать группой по умолчанию для каждого её члена',
	'MEMBERS'				=> 'Члены группы',

	'NO_GROUP'					=> 'группа не задана.',
	'NO_GROUPS_CREATED'			=> 'Группы отсутствуют.',
	'NO_PERMISSIONS'			=> 'Не копировать права доступа',
	'NO_USERS'					=> 'Вы не задали ни одного пользователя.',

	'SPECIAL_GROUPS'			=> 'Предустановленные группы',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Предустановленные группы - это специальные группы, которые не могут быть удалены или изменены напрямую. Однако, вы можете добавлять пользователей и редактировать основные настройки. Щёлкнув «По умолчанию», вы можете сделать соответствующую группу группой по умолчанию для всех её членов.',

	'TOTAL_MEMBERS'				=> 'Членов',

	'USERS_APPROVED'				=> 'Пользователи успешно одобрены.',
	'USER_DEFAULT'					=> 'По умолчанию',
	'USER_DEF_GROUPS'				=> 'Пользовательские группы',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Это группы, созданные вами или другим администратором конференции. Вы можете управлять членством,  редактировать свойства группы, или даже удалить её. Щёлкнув «По умолчанию», вы можете сделать соответствующую группу группой по умолчанию для всех её членов.',
	'USER_GROUP_DEFAULT'			=> 'Сделать группой по умолчанию',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Ответ «Да» означает, что эта группа будет установлена как группа по умолчанию для добавленных пользователей',
	'USER_GROUP_LEADER'				=> 'Назначить лидером группы',
));

?>