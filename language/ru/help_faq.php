<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'Вход на конференцию и регистрация'
	),
	array(
		0 => 'Зачем мне нужно регистрироваться?',
		1 => 'Вы можете этого и не делать. Всё зависит от того, как администратор настроил конференцию: должны ли вы зарегистрироваться, чтобы размещать сообщения, или нет. Тем не менее регистрация даёт вам дополнительные возможности, которые недоступны анонимным пользователям: аватары, личные сообщения, отправка email-сообщений, участие в группах и т. д. Регистрация займёт у вас всего пару минут, поэтому мы рекомендуем это сделать.'
	),
		0 => 'Что такое COPPA?',
		1 => 'COPPA (Children’s Online Privacy Protection Act of 1998), или Акт о защите частных прав ребёнка в интернете от 1998 г. — это закон Соединённых Штатов, требующий от сайтов, которые могут собирать информацию от несовершеннолетних младше 13 лет, иметь на это письменное согласие родителей. Допустимо наличие иного вида подтверждения того, что опекуны разрешают сбор личной информации от несовершеннолетних младше 13 лет. Если вы не уверены, применимо ли это к вам, как к регистрирующемуся на конференции, или к самой конференции, обратитесь за помощью к юрисконсульту. Обратите внимание, что phpBB Limited  администрация данной конференции не может давать рекомендаций по правовым вопросам и не является объектом юридических отношений, кроме указанных в ответе на вопрос «С кем можно связаться по вопросу некорректного использования и/или юридических вопросов, связанных с этой конференцией?».<br /><strong>Примечание переводчика: в России данный акт не имеет юридической силы.</strong>',
	),
	array(
		0 => 'Почему я не могу зарегистрироваться?',
		1 => 'Возможно, администратор конференции отключил регистрацию новых пользователей на конференции. Также возможно, что он заблокировал ваш IP-адрес или запретил имя, под которым вы пытаетесь зарегистрироваться. Обратитесь за помощью к администратору конференции.',
	),
	array(
		0 => 'Я только что зарегистрировался, но не могу войти!',
		1 => 'Сначала проверьте свои имя пользователя и пароль. Если они верны, то возможны два варианта. Если включена поддержка COPPA и при регистрации вы указали, что вам менее 13 лет, следуйте полученным инструкциям. На некоторых конференциях требуется, чтобы все новые учётные записи были активированы пользователями или администратором до входа в систему. Эта информация отображается в процессе регистрации. Если вам было прислано email-сообщение, следуйте полученным инструкциям. Если email-сообщение не получено, то возможно, что вы указали неправильный адрес email либо он заблокирован спам-фильтром. Если вы уверены, что ввели правильный адрес email, попробуйте связаться с администратором.'
	),
	array(
		0 => 'Почему я не могу войти?',
		1 => 'Существует несколько возможных причин. Прежде всего убедитесь, что вы правильно вводите имя пользователя и пароль. Если данные введены правильно, свяжитесь с администратором, чтобы проверить, не был ли вам закрыт доступ к конференции. Также возможно, что допущена ошибка в конфигурации конференции, свяжитесь с администратором для исправления настроек.'
	),
	array(
		0 => 'Я давно зарегистрирован, но больше не могу войти!',
		1 => 'Возможно, администратор по какой-то причине деактивировал или удалил вашу учётную запись. Кроме того, многие конференции периодически удаляют пользователей, длительное время не оставляющих сообщения, чтобы уменьшить размер базы данных. Если это произошло, попробуйте зарегистрироваться снова и активнее участвовать в дискуссиях.'
	),
	array(
		0 => 'Я забыл пароль!',
		1 => 'Не паникуйте! Хотя пароль нельзя восстановить, можно легко получить новый. Перейдите на страницу входа на конференцию и щёлкните на ссылку <em>Забыли пароль?</em>. Следуйте инструкциям, и скоро вы снова сможете войти на конференцию.<br />Если не удалось получить новый пароль, свяжитесь с администратором конференции.'
	),
	array(
		0 => 'Почему мне периодически приходится повторять ввод имени и пароля?',
		1 => 'Если вы не отметили флажком пункт <em>Запомнить меня</em>, вы сможете оставаться под своим именем на конференции только некоторое ограниченное время. Это сделано для того, чтобы никто другой не смог воспользоваться вашей учётной записью. Для того, чтобы вам не приходилось вводить имя пользователя и пароль каждый раз, вы можете отметить флажком пункт <em>Запомнить меня</em> при входе на конференцию. Не рекомендуется делать это на общедоступном компьютере, например в библиотеке, интернет-кафе, университете и т. д. Если пункт <em>Запомнить меня</em> отсутствует, значит, администратор отключил эту функцию.'
	),
	array(
		0 => 'Что делает функция «Удалить cookies конференции»?',
		1 => 'Она удаляет все созданные cookies, которые позволяют вам оставаться авторизованным на этой конференции, а также выполняют другие функции, такие как отслеживание прочитанных сообщений, если эта возможность включена администратором. Если вы испытываете трудности с входом или выходом с конференции, возможно, удаление cookies может помочь.',
	),
	array(
	array(
		0 => '--',
		1 => 'Параметры и настройки пользователя'
	),
	array(
		0 => 'Как мне изменить мои настройки?',
		1 => 'Если вы являетесь зарегистрированным пользователем, все ваши настройки хранятся в базе данных конференции. Чтобы изменить их, щёлкните на имени пользователя вверху страницы и перейдите по ссылке <em>Личный раздел</em>. Там вы можете изменить все свои настройки.'
	),
	array(
		0 => 'Как сделать, чтобы я не появлялся в списке активных пользователей?',
		1 => 'На закладке «Личные настройки» в личном разделе вы найдёте опцию <em>Скрывать моё пребывание на конференции</em>. Выберите <em>Да</em>, и вы будете видны только администраторам, модераторам и самому себе. Для всех остальных вы будете скрытым пользователем.'
	),
	array(
		0 => 'На конференции неправильное время!',
		1 => 'Возможно, отображается время, относящееся к другому часовому поясу, а не к тому, в котором находитесь вы. В этом случае измените в личных настройках часовой пояс на тот, в котором вы находитесь: Москва, Киев и т. д. Учтите, что изменять часовой пояс, как и большинство настроек, могут только зарегистрированные пользователи. Если вы не зарегистрированы, то сейчас удачный момент сделать это. '
	),
	array(
		0 => 'Я изменил часовой пояс, но время всё равно неправильное!',
		1 => 'Если вы уверены, что правильно указали часовой пояс, но время отображается по-прежнему неверное, значит, неправильно установлено время на сервере. Уведомите администратора для устранения проблемы.'
	),
	array(
		0 => 'Моего языка нет в списке!',
		1 => 'Администратор не установил поддержку вашего языка на конференции, или же просто никто не перевёл phpBB на ваш язык. Попробуйте узнать у администратора конференции, может ли он установить нужный вам языковой пакет. Если такого языкового пакета не существует, то вы сами можете перевести phpBB на свой язык. Дополнительную информацию вы можете получить на сайте <a href="https://www.phpbb.com/">phpBB</a>&reg;.'
	),
	array(
		0 => 'Что означают изображения рядом с моим именем пользователя?',
		1 => 'Вместе с именем пользователя могут присутствовать два изображения. Одно из них может относиться к вашему званию, обычно это звёздочки, квадратики или точки, указывающие на то, сколько сообщений вы оставили или на ваш статус на конференции. Другое, обычно более крупное, изображение известно как «аватара» и обычно уникально для каждого пользователя. '
	),
	array(
		0 => 'Как мне включить отображение аватары?',
		1 => 'На закладке «Профиль» личного раздела вы можете добавить аватару с использованием четырёх инструментов:  «Граватар», «Галерея аватар», «Удалённая аватара» или «Загружаемая аватара». От администратора зависит, включена ли поддержка аватар, и какие типы аватар могут быть доступны. Если вы не можете использовать аватары, свяжитесь с администратором конференции для выяснения причин.',
 	),
	array(
		0 => 'Что такое звание и как я могу изменить его?',
		1 => 'Звания, отображаемые под вашим именем, отражают количество созданных вами сообщений или идентифицируют определённых пользователей: например, модераторов и администраторов. Обычно вы не можете напрямую изменять наименования званий на конференции, так как они установлены её администратором. Пожалуйста, не засоряйте конференцию ненужными сообщениями только для того, чтобы повысить своё звание. На большинстве конференций это запрещено, и модератор или администратор понизят значение вашего счётчика сообщений.'
	),
	array(
		0 => 'Когда я щёлкаю по ссылке «email», от меня требуют войти на конференцию!',
		1 => 'Только зарегистрированные пользователи могут отправлять email-сообщения другим пользователям через встроенную в конференцию форму, и только если администратор включил такую возможность. Это сделано для того, чтобы предотвратить злоупотребления почтовой системой анонимными пользователями.'
	),
	array(
		0 => '--',
		1 => 'Создание сообщений'
	),
	array(
		0 => 'Как мне создать новую тему или сообщение?',
		1 => 'Для создания новой темы в форуме щёлкните по кнопке «Новая тема». Для размещения сообщения в теме щёлкните по кнопке «Ответить». Возможно, придётся зарегистрироваться, прежде чем отправить сообщение. Перечень ваших прав доступа находится внизу страниц форума или темы. Например: «Вы можете начинать темы», «Вы можете добавлять вложения» и т. п.'
	),
	array(
		0 => 'Как мне отредактировать или удалить сообщение?',
		1 => 'Если вы не являетесь администратором или модератором конференции, вы можете редактировать и удалять только свои собственные сообщения. Вы можете перейти к редактированию, щёлкнув по кнопке <em>Правка</em> в соответствующем сообщении, иногда только в течение ограниченного времени после его создания. Если кто-то уже ответил на сообщение, то под ним появится небольшая надпись, которая показывает количество правок, а также дату и время последней из них. Эта надпись не появляется, если сообщение редактировал администратор или модератор, хотя они могут сами написать о сделанных изменениях по своему усмотрению. Учтите, что обычные пользователи не могут удалить сообщение, если на него уже кто-то ответил.'
	),
	array(
		0 => 'Как мне добавить подпись к своему сообщению?',
		1 => 'Чтобы добавить подпись к сообщению, вы должны сначала создать её в личном разделе. После этого вы можете отметить флажком пункт <em>Присоединить подпись</em> в форме отправки сообщения, чтобы подпись добавилась. Вы также можете настроить добавление подписи по умолчанию ко всем вашим сообщениям, сделав соответствующий выбор в параграфе «Отправка сообщений» пункта «Личные настройки» в личном разделе. Несмотря на это, вы сможете отменить добавление подписи в отдельных сообщениях, убрав флажок <em>Присоединить подпись</em> в форме отправки сообщения.'
	),
	array(
		0 => 'Как мне создать опрос?',
		1 => 'При создании темы или редактировании первого сообщения темы щёлкните на закладке или перейдите в форму <em>Создать опрос</em> под основной формой для создания сообщения, в зависимости от используемого стиля; если вы не видите такой закладки или формы, то вы не имеете прав на создание опросов. Задайте тему и как минимум два варианта ответа в соответствующих полях, убедившись, что каждый вариант находится на отдельной строке текстового поля. Вы также можете задать количество вариантов, которые могут выбрать пользователи при голосовании, с помощью опции «Вариантов ответа», период проведения опроса в днях (0 означает, что опрос будет постоянным) и возможность пользователей изменять вариант, за который они проголосовали.'
	),
	array(
		0 => 'Почему я не могу добавить больше вариантов ответа?',
		1 => 'Ограничение количества вариантов ответа устанавливается администратором конференции. Если вам нужно добавить количество вариантов, превышающее это ограничение, свяжитесь с администратором конференции.'
	),
	array(
		0 => 'Как мне отредактировать или удалить опрос?',
		1 => 'Так же, как и сообщения, опросы могут редактироваться только их создателями, модераторами или администраторами. Для редактирования опроса перейдите к редактированию первого сообщения в теме; опрос всегда связан именно с ним. Если никто не успел проголосовать, то вы можете удалить опрос или отредактировать любой из вариантов ответа. Однако если кто-то уже проголосовал, то только модераторы или администраторы могут отредактировать или удалить опрос. Это сделано для того, чтобы нельзя было менять варианты ответов во время голосования.'
	),
	array(
		0 => 'Почему мне недоступны некоторые форумы?',
		1 => 'Некоторые форумы доступны только определённым пользователям или группам пользователей. Чтобы просматривать такие форумы, создавать в них темы и оставлять сообщения, совершать другие действия, вам может потребоваться специальное разрешение. Свяжитесь с модератором или администратором конференции для получения такого разрешения.'
	),
	array(
		0 => 'Почему я не могу добавлять вложения?',
		1 => 'Право добавления вложений может быть предоставлено на уровне форума, группы или пользователя. Администратор конференции может не разрешить добавление вложений в определённых форумах. Также возможно, что добавлять вложения разрешено только членам определённых групп. Если вы не знаете, почему не можете добавлять вложения, свяжитесь с администратором конференции.'
	),
	array(
		0 => 'Почему я получил предупреждение?',
		1 => 'На каждой конференции администраторы устанавливают свой собственный свод правил. Если вы нарушили правило, вы можете получить предупреждение. Учтите, что это решение администратора конференции, и phpBB Limited не имеет никакого отношения к предупреждениям, вынесенным на данном сайте. Если вы не знаете, за что получили предупреждение, свяжитесь с администратором конференции.'
	),
	array(
		0 => 'Как мне пожаловаться на сообщения модератору?',
		1 => 'Рядом с каждым сообщением вы увидите кнопку, предназначенную для отправки жалобы на него, если это разрешено администратором конференции. Щёлкнув по этой кнопке, вы пройдёте через ряд шагов, необходимых для оправки жалобы на сообщение.'
	),
	array(
		0 => 'Что означает кнопка «Сохранить» при создании сообщения?',
		1 => 'Эта кнопка позволяет вам сохранять сообщения для того, чтобы закончить и отправить их позже. Для загрузки сохранённого сообщения перейдите в параграф «Черновики» личного раздела.'
	),
	array(
		0 => 'Почему моё сообщение требует одобрения?',
		1 => 'Администратор конференции может решить, что сообщения требуют предварительного просмотра перед отправкой на форум. Возможно также, что администратор включил вас в группу пользователей, сообщения которых, по его или её мнению, должны быть предварительно просмотрены перед отправкой. Пожалуйста, свяжитесь с администратором конференции для получения дополнительной информации.'
	),
	array(
		0 => 'Как мне вновь поднять мою тему?',
		1 => 'Щёлкнув по ссылке «Поднять тему» при просмотре темы, вы можете «поднять» её в верхнюю часть первой страницы форума. Если этого не происходит, то это означает, что возможность поднятия тем могла быть отключена, или время, которое должно пройти до повторного поднятия темы, ещё не прошло. Также можно поднять тему, просто ответив на неё, однако удостоверьтесь, что тем самым вы не нарушаете правила конференции, на которой находитесь.'
	),
	array(
		0 => '--',
		1 => 'Форматирование сообщений и типы создаваемых тем'
	),
	array(
		0 => 'Что такое BBCode?',
		1 => 'BBCode — это особая реализация HTML, предлагающая большие возможности по форматированию отдельных частей сообщения. Возможность использования BBCode определяется администратором, однако BBCode также может быть отключён на уровне сообщения в форме для его отправки. BBCode очень похож на HTML, но теги в нём заключаются в квадратные скобки [ и ], а не в &lt; и &gt;. За дополнительной информацией о BBCode обратитесь к руководству по BBCode, ссылка на которое доступна из формы отправки сообщений.'
	),
	array(
		0 => 'Могу ли я использовать HTML?',
		1 => 'Нет. На этой конференции невозможны отправка и обработка HTML-кода в сообщениях. Большая часть возможностей HTML по форматированию сообщений может быть реализована с использованием BBCode.'
	),
	array(
		0 => 'Что такое смайлики?',
		1 => 'Смайлики, или эмотиконы — это маленькие картинки, которые могут быть использованы для выражения чувств, например :) означает радость, а :( означает грусть. Полный список смайликов можно увидеть в форме создания сообщений. Только не перестарайтесь, используя их: они легко могут сделать сообщение нечитаемым, и модератор может отредактировать ваше сообщение или вообще удалить его. Администратор конференции также может ограничить количество смайликов, которое можно использовать в сообщении.'
	),
	array(
		0 => 'Могу ли я добавлять изображения к сообщениям?',
		1 => 'Да, вы можете размещать изображения в ваших сообщениях. Если администратор разрешил добавлять вложения, вы можете загрузить изображение на конференцию. Если нет, вы должны указать ссылку на изображение, сохранённое на общедоступном веб-сервере. Пример ссылки: http://www.example.com/my-picture.gif. Вы не можете указывать ссылку ни на изображения, хранящиеся на вашем компьютере (если он не является общедоступным сервером), ни на изображения, для доступа к которым необходима аутентификация, как, например, на почтовые ящики Hotmail или Yahoo, защищённые паролями сайты и т. п. Для указания ссылок на изображения используйте в сообщениях тег BBCode [img].'
	),
	array(
		0 => 'Что такое важные объявления?',
		1 => 'Эти объявления содержат важную информацию, и вы должны прочесть их по возможности. Они появляются вверху каждого из форумов и в вашем личном разделе. Права на создание важных объявлений предоставляются администратором конференции.'
	),
	array(
		0 => 'Что такое объявления?',
		1 => 'Объявления чаще всего содержат важную информацию для форума, на котором вы находитесь в настоящий момент, и вы должны прочесть их по возможности. Объявления появляются вверху каждой страницы форума, в котором они созданы. Так же, как и с важными объявлениями, права на создание объявлений предоставляются администратором.'
	),
	array(
		0 => 'Что такое прилепленные темы?',
		1 => 'Прилепленные темы в форуме находятся ниже всех объявлений и только на его первой странице. Они чаще всего содержат достаточно важную информацию, поэтому вы должны прочесть их по возможности. Так же, как и с объявлениями, права на создание прилепленных тем предоставляются администратором конференции.'
	),
	array(
		0 => 'Что такое закрытые темы?',
		1 => 'Это такие темы, в которых пользователи больше не могут оставлять сообщения, и все находящиеся в них опросы автоматически завершаются. Темы могут быть закрыты по многим причинам модератором форума или администратором конференции. Вы также можете иметь возможность закрывать созданные вами темы, в зависимости от прав, предоставленных вам администратором конференции.'
	),
	array(
		0 => 'Что такое значки тем?',
		1 => 'Значки тем — это выбранные авторами изображения, связанные с сообщениями и отражающие их содержание. Возможность использования значков тем зависит от разрешений, установленных администратором конференции.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Уровни пользователей и группы'
	),
	array(
		0 => 'Кто такие администраторы?',
		1 => 'Администраторы — это пользователи, наделённые высшим уровнем контроля над конференцией. Они могут управлять всеми аспектами работы конференции, включая разграничение прав доступа, отключение пользователей, создание групп пользователей, назначение модераторов и т. п., в зависимости от прав, предоставленных им создателем конференции. Они также могут обладать всеми возможностями модераторов во всех форумах, в зависимости от настроек, произведённых создателем конференции.'
	),
	array(
		0 => 'Кто такие модераторы?',
		1 => 'Модераторы — это пользователи (или группы пользователей), которые ежедневно следят за форумами. Они имеют право редактировать или удалять сообщения, закрывать, открывать, перемещать, удалять и объединять темы на форуме, за который они отвечают. Основные задачи модераторов — не допускать несоответствия содержания сообщений обсуждаемым темам (оффтопик), оскорблений.'
	),
	array(
		0 => 'Что такое группы пользователей?',
		1 => 'Группы пользователей разбивают сообщество на структурные части, управляемые администратором конференции. Каждый пользователь может состоять в нескольких группах, и каждой группе могут быть назначены индивидуальные права доступа. Это облегчает администраторам назначение прав доступа одновременно большому количеству пользователей, например, изменение модераторских прав или предоставление пользователям доступа к приватным форумам.'
	),
	array(
		0 => 'Где находятся группы и как мне вступить в них?',
		1 => 'Вы можете получить информацию обо всех существующих группах по ссылке «Группы» в вашем личном разделе. Если вы хотите вступить в одну из них, нажмите соответствующую кнопку. Однако не все группы общедоступны. Некоторые могут требовать одобрения для вступления в них, могут быть закрытыми или даже скрытыми. Если группа общедоступна, то вы можете запросить членство в ней, щёлкнув по соответствующей кнопке. Если требуется одобрение на участие в группе, вы можете отправить запрос на вступление, щёлкнув по соответствующей кнопке. Лидер группы должен будет одобрить ваше участие в группе и может спросить, зачем вы хотите присоединиться. Пожалуйста, не беспокойте лидера группы, если он отклонил ваш запрос; у него могут быть для этого свои причины.'
	),
	array(
		0 => 'Как мне стать лидером группы?',
		1 => 'Лидеры групп обычно назначаются при их создании администраторами конференции. Если вы заинтересованы в создании группы, сначала свяжитесь с администратором; попробуйте отправить ему личное сообщение.'
	),
	array(
		0 => 'Почему названия некоторых групп имеют разные цвета?',
		1 => 'Администратор конференции может присваивать цвета участникам групп для того, чтобы их было проще отличать друг от друга.'
	),
	array(
		0 => 'Что такое группа по умолчанию?',
		1 => 'Если вы состоите более чем в одной группе, ваша группа по умолчанию используется для того, чтобы определить, какие групповые цвет и звание должны быть вам присвоены. Администратор конференции может предоставить вам разрешение самому изменять вашу группу по умолчанию в личном разделе.'
	),
	array(
		0 => 'Что означает ссылка «Наша команда»?',
		1 => 'На этой странице вы найдёте список администраторов и модераторов конференции и другую информацию, такую как сведения о форумах, которые они модерируют.'
	),
	array(
		0 => '--',
		1 => 'Личные сообщения'
	),
	array(
		0 => 'Я не могу отправить личные сообщения!',
		1 => 'Это может быть вызвано тремя причинами: вы не зарегистрированы и/или не вошли на конференцию, администратор запретил отправку личных сообщений на всей конференции или же администратор запретил это вам лично. Свяжитесь с администратором конференции для получения дополнительной информации.'
	),
	array(
		0 => 'Я постоянно получаю нежелательные личные сообщения!',
		1 => 'Вы можете автоматически удалять личные сообщения пользователей, используя правила для сообщений в вашем личном разделе. Если вы получаете оскорбительные личные сообщения от конкретного пользователя, отправьте жалобы на сообщения модераторам; они могут запретить пользователю отправку личных сообщений.'
	),
	array(
		0 => 'Я получил спам или оскорбительный email от кого-то с этой конференции!',
		1 => 'Мы сожалеем об этом. Форма отправки email на данной конференции включает меры предосторожности и возможность отслеживания пользователей, отправляющих подобные сообщения. Отправьте email-сообщение администратору конференции с полной копией полученного письма. Очень важно включить все заголовки, в которых содержится детальная информация об отправителе. Администратор конференции сможет в этом случае принять меры.'
	),
	array(
		0 => '--',
		1 => 'Друзья и недруги'
	),
	array(
		0 => 'Что означают списки друзей и недругов?',
		1 => 'Вы можете включать в эти списки других пользователей конференции. Пользователи, добавленные в список друзей, будут указаны в вашем личном разделе для получения быстрого доступа к информации о том, находятся ли они сейчас в сети, и для отправки им личных сообщений. Сообщения от этих пользователей также могут выделяться, если это поддерживается стилем конференции. Если вы добавили пользователей в список недругов, то любые отправленные ими сообщения будут скрыты по умолчанию.'
	),
	array(
		0 => 'Как мне добавлять/удалять пользователей в списках моих друзей и недругов?',
		1 => 'Вы можете добавлять пользователей в свой список двумя способами. В профиле каждого пользователя есть ссылка для его добавления в список друзей или недругов. Кроме того, вы можете сделать это прямо из вашего личного раздела, непосредственным вводом имени пользователя. Вы можете также удалять пользователей из соответствующих списков на той же странице.'
	),
	array(
		0 => '--',
		1 => 'Поиск по форумам'
	),
	array(
		0 => 'Как мне выполнить поиск по форуму или форумам?',
		1 => 'Задайте условие поиска в соответствующем поле, расположенном на главной странице конференции, страницах просмотра форума или темы. Вы можете осуществить расширенный поиск, щёлкнув по ссылке «Расширенный поиск», доступной на всех страницах конференции. Способ доступа к поиску может зависеть от используемого стиля.'
	),
	array(
		0 => 'Почему мой поиск не даёт результатов?',
		1 => 'Ваш поисковый запрос, возможно, был слишком неопределённым и включал много общих слов, поиск по которым в phpBB не осуществляется. Будьте более конкретны и используйте возможности расширенного поиска.'
	),
	array(
		0 => 'В результате моего поиска я получил пустую страницу!',
		1 => 'Ваш поиск дал слишком большое количество результатов, которые веб-сервер не смог обработать. Используйте «Расширенный поиск», более точно задавайте условия поиска и форумы, на которых он должен быть осуществлён.'
	),
	array(
		0 => 'Как мне найти пользователя конференции?',
		1 => 'Перейдите на страницу «Пользователи» и щёлкните по ссылке «Найти пользователя».'
	),
	array(
		0 => 'Как мне найти свои сообщения и созданные мной темы?',
		1 => 'Вы можете найти свои сообщения, щёлкнув по ссылке «Показать ваши сообщения» в личном разделе на главной странице, по ссылке «Найти сообщения пользователя» в на странице вашего профиля на конференции, или по ссылке «Ваши сообщения» в меню «Ссылки» на главной странице. Чтобы найти созданные вами темы, используйте страницу расширенного поиска, заполнив соответствующие поля.'
	),
	array(
		0 => '--',
		1 => 'Подписки и закладки'
	),
	array(
		0 => 'Чем отличаются закладки от подписки?',
		1 => 'В phpBB 3.0 закладки были больше похожи на закладки в вашем веб-браузере. Вы не получали предупреждений о произошедших изменениях. В phpBB 3.0 закладки больше напоминают подписки на темы. Вы можете получать уведомления об обновлениях в теме, находящейся у вас в закладках. В случае подписки, вы будете получать уведомления об изменениях в теме или форуме. Настройки уведомлений для закладок и подписок можно задать на закладке «Личные настройки» личного раздела.'
	),
	array(
		0 => 'Как мне сделать закладку или подписаться на определённую тему?',
		1 => 'Можно подписаться на определённую тему, щёлкнув по соответствующей ссылке в меню «Управление темой», которое находится в верхней и нижней части на странице просмотра тем. <br />Replying to a topic with the “Notify me when a reply is posted” option checked will also subscribe you to the topic. Отметив галочкой пункт «Сообщать мне о получении ответа» при отправке сообщения, вы также будете подписаны на соответствующую тему.'
	),
		0 => 'Как мне подписаться на определённый форум?',
		1 => 'Чтобы подписаться на определённый форум, щёлкните по ссылке «Подписаться на форум» в нижней части страницы просмотра соответствующего форума.',
	array(
		0 => 'Как мне отказаться от подписки?',
		1 => 'Для отказа от подписки перейдите в личный раздел и щёлкните по ссылке «Подписки».'
	),
	array(
		0 => '--',
		1 => 'Вложения'
	),
	array(
		0 => 'Какие вложения разрешены на этой конференции?',
		1 => 'Администратор каждой конференции может разрешить или запретить определённые типы вложений. Если вы не знаете, какие вложения разрешены, свяжитесь с администратором конференции для получения помощи.'
	),
	array(
		0 => 'Как мне найти мои вложения?',
		1 => 'Чтобы найти список добавленных вами вложений, перейдите в ваш личный раздел и щёлкните по ссылке «Вложения».'
	),
	array(
		0 => '--',
		1 => 'Информация о phpBB'
	),
	array(
		0 => 'Кто написал эту конференцию?',
		1 => 'Это программное обеспечение (в его исходной форме) создано и распространяется <a href="https://www.phpbb.com/">phpBB Limited</a>. Оно доступно на условиях GNU General Public Licence, версии 2 (GPL-2.0) и может свободно распространяться. Для получения более подробных сведений перейдите по ссылке <a href="https://www.phpbb.com/about/">About phpBB</a>.'
	),
	array(
		0 => 'Почему здесь нет такой-то функции?',
		1 => 'Это программное обеспечение было создано и лицензировано phpBB Limited. Если вы считаете, что какая-то функция должна быть добавлена, посетите <a href="https://www.phpbb.com/ideas/">Центр идей phpBB</a>, где можно отдать свой голос за уже поданные идеи или предложить собственные.'
	),
	array(
		0 => 'С кем можно связаться по вопросу некорректного использования и/или юридических вопросов, связанных с этой конференцией?',
		1 => 'Вы можете связаться с любым из администраторов, перечисленных в списке на странице «Наша команда». Если вы не получили ответа, свяжитесь с владельцем домена (сделайте <a href="http://www.google.com/search?q=whois">whois lookup</a>) или, если конференция находится на бесплатном домене (например, chat.ru, Yahoo!, free.fr, f2s.com и т. п.), с руководством или техподдержкой данного домена. Учтите, что phpBB Limited <strong>не имеет никакого контроля над данной конференцией</strong> и не может нести никакой ответственности за то, кем и как данная конференция используется. Не обращайтесь к phpBB Limited по юридическим вопросам (о приостановке работы конференции, ответственности за неё и т. д.), которые <strong>не относятся напрямую</strong> к сайту phpBB.com или которые частично относятся к программному обеспечению phpBB Limited. Если же вы всё-таки пошлёте email в адрес phpBB Limited об использовании данной конференции <strong>третьей стороной</strong>, то не ждите подробного письма, или вы можете вообще не получить ответа.'
	),
	array(
		0 => 'Как мне связаться с администратором конференции?',
		1 => 'Все пользователи данной конференции могут использовать соответствующую форму на странице «Связаться с администрацией», если данная функция включена администратором.<br />Зарегистрированные пользователи также могут воспользоваться контактами на странице «Наша команда».',
	),
);
