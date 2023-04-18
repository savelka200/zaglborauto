-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 18 2023 г., 08:20
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_select`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `color` text NOT NULL DEFAULT '#ffffff7e',
  `priority` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `color`, `priority`) VALUES
(1, 'Не определено', '#ffffff2b', -1),
(4, 'Почта', '#00ccff2b', 0),
(6, 'GLPI', '#ff00ae2b', 100),
(7, 'Мониторинг', '#006eff2b', 0),
(8, 'Внутренняя работа', '#00ffcc2b', 0),
(9, 'Закупки', '#ff00002b', 0),
(10, 'Связь', '#8000ff2b', 0),
(11, 'Оценка авто', '#8c00ff2b', 0),
(12, 'Инструменты', '#00ff4c2b', 0),
(13, 'Регистраторы домена', '#4400ff2b', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `pic` text NOT NULL DEFAULT 'res/undefied.png',
  `url` text NOT NULL,
  `categ_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `content`
--

INSERT INTO `content` (`id`, `text`, `pic`, `url`, `categ_id`) VALUES
(1, 'Nextcloud', 'img/1680708605nexcloud.png', 'https://nextcloud.borauto.ru/', 8),
(2, 'Bitrix24', 'img/1680711453bitrix-24-logo.png', 'https://bitrix.borauto.ru/', 8),
(3, 'GLPI ОИТ', 'img/1680711524itpng.png', 'https://it.glpi.borauto.ru/', 6),
(4, 'GLPI АХО', 'img/1680711557ahopng.png', 'https://ahs.glpi.borauto.ru/', 6),
(5, 'Zimbra admin', 'img/16807116381-62.png', 'https://mail.borauto.ru:7071/zimbraAdmin/', 4),
(6, 'Zimbra client', 'img/16807116541-62.png', 'https://mail.borauto.ru/', 4),
(7, 'GLPI TEST', 'img/1680779710project_logo.png', 'http://10.0.1.135/', 6),
(8, 'Grafana', 'img/1680780461avatar.png', 'http://10.0.0.130:3000/login', 7),
(9, 'Xwiki', 'img/16807953605848296acef1014c0b5e49fc (2).png', 'http://xwiki/xwiki/bin/view/Main/', 8),
(11, 'Borauto wiki', 'img/168111058250008.png', 'https://info.borauto.ru/', 8),
(12, 'Zabbix', 'img/1681110865post-logo_Zabbix-1010x550.png', 'http://10.1.1.150/zabbix/', 7),
(13, 'FreePBX', 'img/1681111222external-contentduck.png', 'http://10.127.1.35', 12),
(14, 'PFsense', 'img/1681111458PfSense_logo.svg.png', 'http://pfsense/', 12),
(15, 'Passbolt', 'img/1681111671passbolt.png', 'http://10.0.0.154/', 12),
(16, 'PowerBI', 'img/1681111845Power-BI-Logo-2013.png', 'http://sv-powerbi-loc/Reports/browse', 7),
(17, 'Ossim', 'img/1681112183AlienVault_OSSIM_Software_Logo.png', 'https://10.127.1.78/ossim/session/login.php', 12),
(18, 'Nginx', 'img/1681112307nginx-logo-png-nginx-logo-3630x2496.png', 'http://10.127.1.54:48789', 12),
(19, 'Moodle', 'img/1681113039moodle-LMS.png', 'https://sdo.borauto.ru/login/index.php', 8),
(20, 'Haraba', 'img/1681113155_.png', 'https://haraba.ru/', 11),
(21, 'Autoinspect', 'img/1681113573unnamed.png', 'https://autoinspect.borauto.ru:8080/', 11),
(22, 'Portainer', 'img/1681113947portainer-ce_200x200.png', 'http://10.127.1.43:9000/', 12),
(23, 'MTS', 'img/1681130723MTS-logo-2048x1152.png', 'https://lk-b2b.mts.ru/mts_business_web/home', 10),
(24, 'Мегафон', 'img/16811307643-1.png', 'https://b2blk.megafon.ru/login', 10),
(25, 'Ситилинк', 'img/1681130971Фон.png', 'https://www.citilink.ru/', 9),
(26, 'DNS', 'img/1681131056DNS logo (1).png', 'https://www.dns-shop.ru/', 9),
(27, 'Urbackup', 'img/16811311510020_19707_1495181200_UrBackup_256x256 (1).png', 'http://10.127.1.36:55414/', 12),
(28, 'WAC', 'img/1681131806122518_0825_WindowsAdmi2.png', 'https://10.127.1.51/', 12),
(29, 'Xibo', 'img/1681131968logo.png', 'http://10.127.1.65/login', 12),
(32, 'Билайн', 'img/16813047401660979814_50-kartinkin-net-p-oboi-bilain-krasivo-55.png', 'https://my.beeline.ru/login.xhtml', 10),
(33, 'Октелл24', 'img/1681304985blue_retina.png', 'https://oktell.okdesk.ru/users/sign_in', 10),
(34, 'Webnames', 'img/1681305336WEBNAMES.png', 'https://www.webnames.ru/scripts/auth.pl#list', 13),
(35, 'REG.ru', 'img/1681305432reg.ru_.png', 'https://b2b.reg.ru/', 13),
(36, 'NIC.ru', 'img/1681305484nic-logo-e1651131661436.png', 'https://www.nic.ru/auth/login/', 13),
(37, 'R01', 'img/168130556797s.png', 'https://partner.r01.ru/', 13);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `rights` text NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `rights`) VALUES
(1, 'krutoy_tipok', 'c890b72e2da6e0fe7033d6b7d8684188', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
