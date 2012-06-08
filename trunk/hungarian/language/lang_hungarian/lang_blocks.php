<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Lopalong
*
*/

if (!defined('IN_ICYPHOENIX'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// BLOCKS TITLES - BEGIN
	'cms_block_ads' => 'Ads',
	'cms_block_ads_tla' => 'Ads TLA',
	'cms_block_ads_tla_new' => 'Ads TLA Új',
	'cms_block_ajax_shoutbox' => 'AJAX Chat',
	'cms_block_album' => 'Album',
	'cms_block_birthdays' => 'Születésnapok',
	'cms_block_calendar' => 'Naptár',
	'cms_block_calendar_events' => 'Események',
	'cms_block_center_downloads' => 'Letöltések',
	'cms_block_clock' => 'Óra',
	'cms_block_donate' => 'Adományok',
	'cms_block_dyn_menu' => 'Navigációs menü',
	'cms_block_flash' => 'Flash',
	'cms_block_flash_news' => 'Flash Hírek',
	'cms_block_forum' => 'Hírek',
	'cms_block_forum_articles' => 'Cikkek',
	'cms_block_forum_attach' => 'Bővített Hírek',
	'cms_block_forum_list' => 'Fórum lista',
	'cms_block_full_search' => 'Teljes keresés',
	'cms_block_global_header' => 'Globális fejléc',
	'cms_block_global_header_simple' => 'Egyszerű globális fejléc',
	'cms_block_gsearch' => 'Google keresés',
	'cms_block_gsearch_hor' => 'Google vízszintes keresés',
	'cms_block_index' => 'Oldaltérkép',
	'cms_block_jumpbox' => 'Ugrás',
	'cms_block_kb' => 'Tudásbázis',
	'cms_block_links' => 'Linkek',
	'cms_block_menu' => 'Oldal navigáció',
	'cms_block_nav_header' => 'Fejléc',
	'cms_block_nav_links' => 'Oldaltérkép',
	'cms_block_nav_logo' => 'Logó',
	'cms_block_new_downloads' => 'Új letöltések',
	'cms_block_news' => 'Hírek',
	'cms_block_news_archive' => 'Archívum',
	'cms_block_news_posters' => 'Hír beküldők',
	'cms_block_online_users' => 'Ki van itt',
	'cms_block_online_users_chat' => 'Chat Online',
	'cms_block_paypal' => 'PayPal',
	'cms_block_paypal_donate' => 'Adományok',
	'cms_block_plugin_guestbook' => 'Vendégkönyv',
	'cms_block_poll' => 'Szavazás',
	'cms_block_random_attach' => 'Véletlenszerű csatolmány',
	'cms_block_random_quote' => 'Véletlenszerű idézet',
	'cms_block_random_topics' => 'Véletlenszerű témák',
	'cms_block_random_topics_ver' => 'Véletlenszerű témák',
	'cms_block_random_user' => 'Véletlenszerű felhasználók',
	'cms_block_recent_articles' => 'Legfrissebb cikkek',
	'cms_block_recent_topics' => 'Legfrissebb témák',
	'cms_block_recent_topics_wide' => 'Legfrissebb témák',
	'cms_block_referers' => 'Hivatkozók',
	'cms_block_rss' => 'RSS',
	'cms_block_search' => 'Keresés',
	'cms_block_sec_menu' => 'Extra Menü',
	'cms_block_sh_visit_counter' => 'Látogatás számláló',
	'cms_block_shoutbox' => 'Üzenőfal',
	'cms_block_staff' => 'A csapat',
	'cms_block_statistics' => 'Statisztika',
	'cms_block_style' => 'Megjelenés',
	'cms_block_tags' => 'Címkék',
	'cms_block_top_downloads' => 'Legnépszerűbb letöltések',
	'cms_block_top_likes' => 'Népszerű témák',
	'cms_block_top_nav' => 'Top Nav',
	'cms_block_top_posters' => 'Legtöbbet hozzászólók',
	'cms_block_user_block' => 'Felhasználói blokk',
	'cms_block_users_visited' => 'Aktív felhasználók',
	'cms_block_visit_counter' => 'Látogatás számláló',
	'cms_block_welcome' => 'Üdvözlünk',
	'cms_block_wordgraph' => 'Címkék (Felhők)',
	'cms_block_xs_news' => 'Hírek',
	// BLOCKS TITLES - END

	'Advanced_GSearch' => 'Bővített Google keresés',
	'Advanced_search' => 'Bővített keresés',
	'Album' => 'Album',
	'All_News_Archives' => 'Összes hírarchívum',
	'All_News_Categories' => 'Összes hírkategória',
	'Articles' => 'Cikkek',
	'Articles_time' => 'Beküldve',
	'Articles_options' => 'Lehetőségek',
	'Article_Reply' => 'Hozzászólás írása',
	'Article_Print' => 'Cikk nyomtatása',
	'Article_Email' => 'Küldés E-mailben',
	'Censor' => 'Cenzúra',
	'CHAT_CLICK_TO_CHAT' => 'Kattints a felhasználó nevére privát chathez',
	'CHAT_NO_USERS' => 'Nincs elérhető felhasználó',
	'CHAT_ONLINE_DESCRIPTION' => 'Elérhető felhasználók az elmúlt 10 percben',
	'CHAT_PUBLIC_ROOM' => 'Chat Publikus szoba',
	'Click_to_join_chat' => 'Kattints ide a belépéshez',
	'Comments' => 'Hozzászólások',
	'Credits' => 'Készítők',
	'Day_users' => '%d regisztrált felhasználó járt itt az elmúlt %d órában:',
	'Disable_BBCode_post' => 'BBKód letiltása ebben a hozzászólásban',
	'Disable_HTML_post' => 'HTML letiltása ebben a hozzászólásban',
	'Dls' => 'Letöltés',
	'Donate_Funds' => 'Adomány küldése',
	'GSearch' => 'Keresés',
	'GSearch2' => 'Google keresés:',
	'GSearch_At' => 'Keresés itt:',
	'Guest' => 'Vendég',
	'Guest_user_total' => '%d vendég,',
	'Guest_users_total' => '%d vendég,',
	'Guest_users_zero_total' => '0 vendég,',
	'Hidden_user_total' => '%d rejtett és ',
	'Hidden_users_total' => '%d rejtett és ',
	'Hidden_users_zero_total' => '0 rejtett és ',
	'How_Many_Chatters' => 'Összesen <b>%d</b> felhasználó tartózkodik a chaten jelenleg.',
	'Kb_name' => 'Tudásbázis',
	'IP_info' => 'IP Információk',
	'Login_to_join_chat' => 'A chat használatához be kell jelentkezned',
	'Login_to_vote' => 'A szavazáshoz be kell jelentkezned',
	'Lookup_IP' => 'IP cím keresése',
	'New_donations' => 'Új adományok',
	'New_downloads' => 'Új letöltések',
	'News_And' => 'és',
	'News_Archives' => 'Hírarchívum',
	'News_Categories' => 'Hírkategóriák',
	'News_Cats' => 'Hírkategóriák',
	'News_Comments' => 'hozzászólást küldtek be.',
	'News_Email' => 'Téma küldése E-mailben',
	'News_Print' => 'Téma nyomtatása',
	'News_Reply' => 'Válasz küldése erre a hírre',
	'News_Summary' => 'Ezt a hírt eddig',
	'News_Views' => 'alkalommal tekintették meg,',
	'No_News_Cats' => 'Nincs hírkategória!',
	'No_Pics' => 'Nincsenek képek',
	'No_poll' => 'Nincs szavazás jelenleg',
	'No_topics_found' => 'Nem található téma.',
	'None' => 'Nincs',
	'Not_day_users' => '%d regisztrált felhasználó <span style="color:red">NEM</span> lépett be az elmúlt %d órában:',
	'Not_found' => 'Nem található csatolmány.',
	'Not_rated' => 'Nincs értékelve',
	'Online_user_total' => 'Összesen <b>%d</b> felhasználó elérhető:',
	'Online_users_total' => 'Összesen <b>%d</b> felhasználó elérhető:',
	'Online_users_zero_total' => 'Összesen <b>0</b> felhasználó elérhető:',
	'Other_IP_this_user' => 'IP címek megtekintése, amelyekről ez a felhasználó bejelentkezett',
	'PAYPAL_DONATE_AMOUNT' => 'Összesen %s adományt kaptunk.',
	'PAYPAL_DONATE_DES' => 'Amennyiben hasznosnak találod az oldalt, kérjük segítsd <a href="%s">adományozással</a> a munkánkat.',
	'PAYPAL_DONATE_USERS' => '<b>%d</b> felhasználó már adományozott.',
	'Pic_Title' => 'Kép címe',
	'Poll' => 'Szavazás',
	'Post_your_comment' => 'Hozzászólás küldése',
	'Posted' => 'Beküldve',
	'POSTED_ON' => 'ekkor:',
	'Poster' => 'Beküldő',
	'Posts' => 'Hozzászólások',
	'Rating' => ' Értékelések',
	'Read_Full' => 'Bővebben',
	'Record_online_users' => 'Valaha jelen lévő legtöbb felhasználó: <b>%s</b> fő, ekkor: %s',
	'Reg_user_total' => '%d regisztrált, ',
	'Reg_users_total' => '%d regisztrált, ',
	'Reg_users_zero_total' => '0 regisztrált, ',
	'Register_new_account' => 'Még nincs felhasználód?<br /> %sItt%s ingyen regisztrálhatsz egyet',
	'Registered_users' => 'Regisztrált felhasználók:',
	'Remember_me' => 'Automatikus bejelentkezés',
	'Save_Topic' => 'Téma mentése fájlként',
	'Shout_refresh' => 'Frissítés',
	'Shout_text' => 'Szöveg',
	'Shoutbox_date' => 'D G:i \\w\r\o\t\e ',
	'SH_Visit_counter_statement' => 'Az oldalnak <b>%d</b> látogatója van %s óta',
	'Tell_Friend' => 'Oldal küldése e-mailben egy barátnak',
	'This_posts_IP' => 'Hozzászólás IP címe',
	'Top_downloads' => 'Legnépszerűbb letöltések',
	'TOP_LIKES_NO_TOPICS' => 'Nincs téma kedvelve az elmúlt 24 órában.',
	'TOP_LIKES_DESC' => 'Legnépszerűbb téma az elmúlt 24 órában',
	'Total_votes' => 'Összes szavazat',
	'Users_this_IP' => 'Erről IP címről hozzászóló felhasználók',
	'View' => 'Megtekintés',
	'View_comments' => 'Hozzászólások megtekintése',
	'View_complete_list' => 'Teljes lista megtekintése',
	'Visit_counter' => 'Látogatás számláló',
	'Visit_counter_statement' => 'Ezt az oldalt <b>%d</b> alkalommal tekintették meg %s óta',
	'Vote' => 'Vote',

	'donated_by' => 'admonyozta:',
	'search' => 'Keresés',
	'search2' => 'Keresés:',
	'search_at' => 'Keresés itt:',
	'total_topics' => ' <b>%s</b> témában',

	)
);

?>