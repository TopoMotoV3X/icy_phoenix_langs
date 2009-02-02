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
* TheSteffen, KugeLSichA, Tom, Carsten
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
    'Title_ads' => 'Werbung',
    'Title_album' => 'Galerie',
    'Title_birthdays' => 'Geburtstage',
    'Title_center_downloads' => 'Downloads',
    'Title_donate' => 'Spenden',
    'Title_dyn_menu' => 'Navigation',
    'Title_forum' => 'News',
    'Title_forum_attach' => 'News',
    'Title_forum_list' => 'Forum Liste',
    'Title_global_header' => 'Global Header',
    'Title_global_header_simple' => 'Global Header Einfach',
    'Title_gsearch' => 'Google Suche',
    'Title_gsearch_hor' => 'Google Suche',
    'Title_kb' => 'Wissensdatenbank',
    'Title_links' => 'Links',
    'Title_menu' => 'Forum Navigation',
    'Title_nav_header' => 'Header',
    'Title_nav_links' => 'Site Map',
    'Title_nav_logo' => 'Logo',
    'Title_news' => 'News',
    'Title_news_archive' => 'News Archiv',
    'Title_news_posters' => 'Newsschreiber',
    'Title_online_users' => 'Wer ist Online',
    'Title_online_users2' => 'Wer ist Online',
    'Title_paypal' => 'PayPal',
    'Title_poll' => 'Umfrage',
    'Title_random_attach' => 'Zuf�llige Anh�nge',
    'Title_random_topics' => 'Zuf�llige Themen',
    'Title_random_topics_ver' => 'Zuf�llige Themen',
	'Title_random_user' => 'Zuf�llige Benutzer',
    'Title_recent_articles' => 'Neuste Artikel',
    'Title_recent_topics' => 'Neuste Themen',
    'Title_recent_topics_wide' => 'Neuste Themen',
    'Title_referers' => 'Referrers',
    'Title_rss' => 'RSS',
    'Title_search' => 'Suche',
    'Title_sec_menu' => 'Extra-Men�',
    'Title_shoutbox' => '<a href="shoutbox_max.' . $phpEx . '?sid=' . $userdata['session_id'] . '">Shoutbox</a>',
    'Title_staff' => 'Team',
    'Title_statistics' => 'Statistik',
    'Title_style' => 'Style',
    'Title_top_downloads' => 'Top Downloads',
    'Title_top_posters' => 'Top Poster',
    'Title_user_block' => 'Benutzerblock',
    'Title_users_visited' => 'Aktive Benutzer',
    'Title_visit_counter' => 'Besucherz�hler',
    'Title_welcome' => 'Willkommen',
    'Title_wordgraph' => 'Tags',

    'Advanced_GSearch' => 'Erweiterte Google Suche',
    'Advanced_search' => 'Erweiterte Suche',
    'Album' => 'Galerie',
    'All_News_Archives' => 'Alle News Archive',
    'All_News_Categories' => 'Alle News Kategorien',
    'Articles' => 'Artikel',
    'Articles_time' => 'Geschrieben in',
    'Articles_options' => 'Optionen',
    'Article_Reply' => 'Schreibe einen Kommentar',
    'Article_Print' => 'Drucke diesen Artikel',
    'Article_Email' => 'An einen Freund weiterleiten',
    'Censor' => 'Zensieren',
    'Click_to_join_chat' => 'Klicke hier um zum Chat zu gelangen',
    'Comments' => 'Kommentare',
    'Credits' => 'Mods und Credits',
    'Day_users' => '%d registrierte Benutzer haben das Forum in den letzten %d Stunden besucht.',
    'Disable_BBCode_post' => 'BBCode in diesem Beitrag deaktivieren',
    'Disable_HTML_post' => 'HTML in diesem Beitrag deaktivieren',
    'Dls' => 'Downloads',
    'Donate_Funds' => 'Spenden',
    'GSearch' => 'Suche',
    'GSearch2' => 'Google Suche:',
    'GSearch_At' => 'Suche bei',
    'Guest' => 'Gast',
    'Guest_user_total' => '%d Gast',
    'Guest_users_total' => '%d G�ste',
    'Guest_users_zero_total' => 'keine G�ste',
    'Hidden_user_total' => '%d verstecker und ',
    'Hidden_users_total' => '%d versteckte und ',
    'Hidden_users_zero_total' => 'kein versteckter und ',
    'How_Many_Chatters' => 'Es sind zur Zeit <b>%d</b> Benutzer im Chat.',
    'Kb_name' => 'Wissensdatenbank',
    'IP_info' => 'IP Information',
    'Login_to_join_chat' => 'Bitte melde dich an, um zum Chat zu gelangen.',
    'Login_to_vote' => 'Du musst dich anmelden, um Abstimmen zu k�nnen.',
    'Lookup_IP' => 'IP-Adresse nachschlagen',
    'New_donations' => 'Neue Spenden',
    'New_downloads' => 'Neue Downloads',
    'News_And' => 'und hat',
    'News_Archives' => 'News Archive',
    'News_Categories' => 'News Kategorien',
    'News_Cats' => 'News Kategorien',
    'News_Comments' => 'Kommentare',
    'News_Email' => 'Thema per E-Mail versenden',
    'News_Print' => 'Thema ausdrucken',
    'News_Reply' => 'Auf diesen News Beitrag antworten',
    'News_Summary' => 'Dieser News Artikel wurde',
    'News_Views' => 'mal gelesen',
    'No_News_Cats' => 'Es sind leider keine News Kategorien verf�gbar!',
    'No_Pics' => 'Keine Bilder',
    'No_poll' => 'Momentan keine Umfragen',
    'No_topics_found' => 'Es wurden keine Themen gefunden.',
    'None' => 'Keiner',
    'Not_day_users' => '%d registrierte Benutzer haben das Forum in den letzten %d Stunden <span style="color:red">NICHT</span> besucht.',
    'Not_found' => 'Keine Anh�nge gefunden.',
    'Not_rated' => 'Nicht bewertet',
    'ON' => 'am',
    'Online_user_total' => 'Insgesamt ist <b>%d</b> Benutzer online: ',
    'Online_users_total' => 'Insgesamt sind <b>%d</b> Benutzer online: ',
    'Online_users_zero_total' => 'Insgesamt sind <b>0</b> Benutzer online:',
    'Other_IP_this_user' => 'Andere IP Adressen, von denen der Benutzer geschrieben hat',
    'Pic_Title' => 'Bildtitel',
    'Poll' => 'Umfrage',
    'Post_your_comment' => 'Kommentar schreiben',
    'Posted' => 'Geschrieben',
    'Poster' => 'Poster',
    'Posts' => 'Beitr�ge',
    'Rating' => ' Bewertung',
    'Read_Full' => 'Alles lesen',
    'Record_online_users' => 'Der Rekord liegt bei <b>%s</b> Benutzern am %s.',
    'Reg_user_total' => '%d registrierter, ',
    'Reg_users_total' => '%d registrierte, ',
    'Reg_users_zero_total' => 'keine registrierten, ',
    'Register_new_account' => 'Du hast noch kein Benutzer-Konto?<br />Jetzt kostenlos %sregistrieren%s!',
    'Registered_users' => 'Registrierte Benutzer:',
    'Remember_me' => 'Automatisch einloggen',
    'Save_Topic' => 'Das Thema als Datei speichern',
    'Shout_censor' => 'Shout wurde entfernt!',
    'Shout_refresh' => 'Aktualisieren',
    'Shout_text' => 'Dein Text',
    'Shoutbox_date' => 'D G:i \\s\c\h\r\i\e\b ',
    'SH_Visit_counter_statement' => 'Diese Seite hatte seit dem %s <b>%d</b> Besucher.',
    'Tell_Friend' => 'Als E-Mail an einen Freund senden',
    'This_posts_IP' => 'IP Adresse f�r diesen Eintrag',
    'Top_downloads' => 'Top Downloads',
    'Total_votes' => 'Stimmen insgesamt',
    'Users_this_IP' => 'Benutzer, die von dieser IP Adresse geschrieben haben',
    'View' => 'Ansehen',
    'View_comments' => 'Kommentare anzeigen',
    'View_complete_list' => 'Komplette Liste anzeigen',
    'Visit_counter' => 'Besucherz�hler',
    'Visit_counter_statement' => 'Diese Seite wurde seit %s <b>%d</b> mal aufgerufen',
    'Vote' => 'Abstimmen',

    'donated_by' => 'gespendet von',
    'search' => 'Suche',
    'search2' => 'Suche:',
    'search_at' => 'Suche bei',
    'total_topics' => ' Insgesamt <b>%s</b> Themen',


// Blocks Config
/*
    'cms_var_' => '',
    'cms_option_' => '',
    'cms_value_' => '',
*/

    'cms_var_kb_cat_id' => 'Kategorie ID',
    'cms_var_kb_cat_id_explain' => 'W�hle die Kategorie ID der Wissensdatenbank (Dynamisches Men� ID)',
    'cms_var_md_ads_type' => 'Anzeigen Typ',
    'cms_var_md_ads_type_explain' => 'W�hle den Anzeigen Typ (H = Horizontal, V = Vertikal, B = Box, 1 = klein, 2 = mittel, 3 = gro�)',
    'cms_var_md_cat_id' => 'Kategorie um Bilder zu empfangen von',
    'cms_var_md_cat_id_explain' => '0 f�r alle Kategorien oder Eintragungen mit Komma abgegrenzt eingeben',
    'cms_var_md_col' => 'Spaltenanzahl',
    'cms_var_md_col_explain' => 'W�hle die Anzahl der Spalten.',
    'cms_var_md_news_cat_id' => 'Kategorien von der die News abgerufen werden sollen',
    'cms_var_md_news_cat_id_explain' => '0 f�r alle Kategorien oder Eintragungen mit Komma abgegrenzt eingeben',
    'cms_var_md_list_forum_id' => 'Kategorie aufgelistet werden',
    'cms_var_md_list_forum_id_explain' => '0 f�r alle Kategorien oder Eintragungen mit Komma abgegrenzt eingeben',
    'cms_var_md_display_not_visit' => 'Zeige Benutzer die noch nicht besucht haben',
    'cms_var_md_display_not_visit_explain' => 'Setze H�ckchen bei den Benutzer die die Seite noch nicht besucht haben',
    'cms_var_md_full_search_option_text' => 'Voller Suchwahl Text',
    'cms_var_md_full_search_option_text_explain' => 'Text als Standardauswahl anzeigen',
	'cms_var_md_gsearch_banner' => 'Suchseiten Banner',
	'cms_var_md_gsearch_banner_explain' => 'Banner der Website (die URL ohne http://)',
	'cms_var_md_gsearch_site' => 'Suchseite',
	'cms_var_md_gsearch_site_explain' => 'Website auf der die Suche ausgef�hrt wird (die URL ohne http://)',
	'cms_var_md_gsearch_style' => 'Stil',
	'cms_var_md_gsearch_style_explain' => 'W�hle zwischen Horizontal und Vertikal',
	'cms_var_md_gsearch_text' => 'Suchoption Text',
	'cms_var_md_gsearch_text_explain' => 'Der Text der als Standardoption angezeigt wird',
    'cms_var_md_hours_track_users' => 'Anzahl der Stunden in denen die Benutzer beobachtet werden',
    'cms_var_md_hours_track_users_explain' => '',
    'cms_var_md_ignore_auth_view' => 'Ignoriere Ansichtsberechtigung?',
    'cms_var_md_ignore_auth_view_explain' => 'Wenn dies aktiviert ist wird die Ansichtsberechtigung ignoriert (dies ist wichtig wenn du versteckte Foren benutzen willst mit "KEINER" als Ansichtsberechtigung)',
    'cms_var_md_links_code' => 'Links -> Code',
    'cms_var_md_links_code_explain' => 'zeige HTML code f�r deinen eigenen Link Button',
    'cms_var_md_links_own1' => 'Links -> Eigener (Oben)',
    'cms_var_md_links_own1_explain' => 'zeige deinen Link Button �ber den anderen Buttons',
    'cms_var_md_links_own2' => 'Links -> Eigener (Unten)',
    'cms_var_md_links_own2_explain' => 'zeige deinen Link Button unter den anderen Buttons',
    'cms_var_md_links_style' => 'Links -> Style',
    'cms_var_md_links_style_explain' => 'w�hle Feste- oder Scroll-Anzeige',
    'cms_var_md_jumpbox_align' => 'Ausrichtung',
    'cms_var_md_jumpbox_align_explain' => 'W�hle die Ausrichtung',
    'cms_var_md_menu_id' => 'Menue-Block-ID',
    'cms_var_md_menu_id_explain' => 'Gib die ID des Menue-Blocks ein, den du zeigen m�chtest (0 = standard).',
    'cms_var_md_menu_show_hide' => 'Zeige/Verberge Schalter',
    'cms_var_md_menu_show_hide_explain' => 'Aktiviere Zeige/Verberge Schalter um das Menu zu verbergen (es funktioniert nur auf der linken Seite beim GLOBALEN Block!!!).',
    'cms_var_md_news_number' => 'Anzahl der anzuzeigenden News',
    'cms_var_md_news_number_explain' => '',
    'cms_var_md_news_sort' => 'Zuf�llige oder neuste News?',
    'cms_var_md_news_sort_explain' => '',
    'cms_var_md_news_length' => 'L�nge der News',
    'cms_var_md_news_length_explain' => 'Anzahl der anzuzeigenden Buchstaben',
    'cms_var_md_news_archive_type' => 'Zeige Archiv oder Kategorien?',
    'cms_var_md_news_archive_type_explain' => 'W�hle ob Archive oder Kategorien angezeigt werden sollen',
    'cms_var_md_news_images_width' => 'News Bild Breite',
    'cms_var_md_news_images_width_explain' => 'W�hle Bild Breite in Pixel oder Prozent',
    'cms_var_md_news_forum_id' => 'News Forum-ID(s)',
    'cms_var_md_news_forum_id_explain' => 'mit Komma abgegrenzt',
    'cms_var_md_news_length' => 'L�nge der News',
    'cms_var_md_news_length_explain' => 'Anzahl der angezeigten Zeichen (gib 0 ein f�r alle)',
    'cms_var_md_news_posters_page_link' => 'Link zum Archiv',
    'cms_var_md_news_posters_page_link_explain' => 'Der Link zu der Seite die das News Archiv beinhaltet (z.B. <b>index.php</b>)',
    'cms_var_md_news_posters_sort' => 'Sortierung',
    'cms_var_md_news_posters_sort_explain' => 'W�hle die Sortierungsmethode',
    'cms_var_md_news_posters_avatar' => 'Avatare anzeigen',
    'cms_var_md_news_posters_avatar_explain' => '',
    'cms_var_md_num_new_downloads' => 'Neue Downloads',
    'cms_var_md_num_new_downloads_explain' => 'Anzahl der anzuzeigenden Neuen Downloads',
    'cms_var_md_num_news' => 'Anzahl der News im Portal',
    'cms_var_md_num_news_explain' => '',
    'cms_var_md_num_posts' => 'Anzahl der Beitr�ge im Portal',
    'cms_var_md_num_posts_explain' => 'Anzahl der Beitr�ge, die angezeigt werden',
    'cms_var_md_num_random_topics' => 'Anzahl der zuf�lligen Themen',
    'cms_var_md_num_random_topics_explain' => 'Anzahl der anzuzeigenden Themen',
    'cms_var_md_num_random_topics_ver' => 'Anzahl der zuf�lligen Themen',
    'cms_var_md_num_random_topics_ver_explain' => 'Anzahl der Themen, die angezeigt werden',
    'cms_var_md_num_recent_topics' => 'Anzahl der Neuen Themen',
    'cms_var_md_num_recent_topics_explain' => 'Anzahl der anzuzeigenden Themen',
    'cms_var_md_num_recent_topics_wide' => 'Anzahl der Neuen Themen',
    'cms_var_md_num_recent_topics_wide_explain' => 'Anzahl der anzuzeigenden Themen',
    'cms_var_md_num_top_downloads' => 'Top Downloads',
    'cms_var_md_num_top_downloads_explain' => 'Anzahl der anzuzeigenden Top Downloads',
    'cms_var_md_pics_all' => 'Anzeige von welchen Galerien?',
    'cms_var_md_pics_all_explain' => '',
    'cms_var_md_pics_cols_number' => 'Spaltenanzahl',
    'cms_var_md_pics_cols_number_explain' => '',
    'cms_var_md_pics_number' => 'Anzahl der anzuzeigenden Bilder',
    'cms_var_md_pics_number_explain' => '',
    'cms_var_md_pics_rows_number' => 'Reihenanzahl',
    'cms_var_md_pics_rows_number_explain' => '',
    'cms_var_md_pics_sort' => 'Zuf�llige oder neuste Bilder?',
    'cms_var_md_pics_sort_explain' => '',
    'cms_var_md_poll_bar_length' => 'Umfrage Balken L�ngePoll Bar Length',
    'cms_var_md_poll_bar_length_explain' => 'verringern/vergr��ern des Wertes der Umfrage Balken L�nge',
    'cms_var_md_poll_forum_id' => 'Umfrage Forum-ID(s)',
    'cms_var_md_poll_forum_id_explain' => 'mit Komma getrennt',
    'cms_var_md_poll_type' => 'Zuf�llige oder neuste Umfrage?',
    'cms_var_md_poll_type_explain' => 'w�hle hier aus, ob du die neusten oder zuf�llige Umfragen anzeigen m�chtest',
    'cms_var_md_posts_forum_id' => 'Beitrags Forum-ID(s)',
    'cms_var_md_posts_forum_id_explain' => 'mit Komma getrennt',
    'cms_var_md_posts_length' => 'L�nge der Beitr�ge',
    'cms_var_md_posts_length_explain' => 'Anzahl der anzuzeigenden Buchstaben',
    'cms_var_md_posts_random' => 'Neuste oder Zuf�llige?',
    'cms_var_md_posts_random_explain' => 'W�hle neuste oder zuf�llige Themen',
    'cms_var_md_posts_show_portal' => 'Alle Themen oder nur ausgew�hlte?',
    'cms_var_md_posts_show_portal_explain' => 'W�hle alle Themen oder nur die mit "Im Portal anzeigen" aus',
    'cms_var_md_ran_att_forums_excl' => 'Zuf�llige Anh�nge ausschlie�ende Forum-ID(s)',
    'cms_var_md_ran_att_forums_excl_explain' => 'mit Komma getrennt; lasse dies frei f�r keine Ausschl�sse',
    'cms_var_md_ran_att_forums_incl' => 'Zuf�llige Anh�nge einschlie�ende Forum-ID(s)',
    'cms_var_md_ran_att_forums_incl_explain' => 'mit Komma getrennt; lasse dies frei f�r alle Foren',
    'cms_var_md_ran_att_height' => 'Zuf�llige Anh�nge Max H�he',
    'cms_var_md_ran_att_height_explain' => 'Wenn die H�he > die Breite, wird dies als H�he bei der Verwendung des BBCode IMG Tags benutzt',
    'cms_var_md_ran_att_max' => 'Zuf�llige Anh�nge Max Dateien',
    'cms_var_md_ran_att_max_explain' => 'Maximale Anzahl der Dateien',
    'cms_var_md_ran_att_width' => 'Zuf�llige Anh�nge Max Breite',
    'cms_var_md_ran_att_width_explain' => 'Wenn die Breite > die H�he, wird dies als Breite bei der Verwendung des BBCode IMG Tags benutzt',
    'cms_var_md_random_topics_style' => 'Zuf�llige Themen Style',
    'cms_var_md_random_topics_style_explain' => 'w�hle Feste oder Scroll Anzeige',
    'cms_var_md_random_topics_forums' => 'Forum-ID(s)',
    'cms_var_md_random_topics_forums_explain' => 'Forum-ID(s) die verwendet werden sollen (0 = alle)',
    'cms_var_md_random_topics_ver_forums' => 'Forum-ID(s)',
    'cms_var_md_random_topics_ver_forums_explain' => 'Forum-ID(s) die verwendet werden sollen (0 = alle)',
    'cms_var_md_recent_topics_style' => 'Neue Themen Style',
    'cms_var_md_recent_topics_style_explain' => 'w�hle Feste oder Scroll Anzeige',
    'cms_var_md_recent_topics_wide_style' => 'Neue Themen Style',
    'cms_var_md_recent_topics_wide_style_explain' => 'w�hle Feste- oder Scroll-Anzeige',
    'cms_var_md_rss_feeder' => 'RSS-Feed Adresse',
    'cms_var_md_rss_feeder_explain' => 'Gib die Adresse des RSS-Feeds ein. (z.B. http://www.icyphoenix.com/rss.php)',
    'cms_var_md_rss_title' => 'RSS-Feed Titel',
    'cms_var_md_rss_title_explain' => 'Gib den Titel des RSS-Feeds ein (z.B. Icy Phoenix)',
    'cms_var_md_rss_style' => 'RSS Block Style',
    'cms_var_md_rss_style_explain' => 'W�hle zwischen horizontal oder vertikal aus.',
    'cms_var_md_rss_scroll' => 'RSS Block Scroll',
    'cms_var_md_rss_scroll_explain' => 'W�hle zwischen feststehend oder scrollend aus.',
    'cms_var_md_show_background' => 'Kategorie-Hintergrund anzeigen?',
    'cms_var_md_show_background_explain' => 'W�hle JA wenn du m�chtest das die Kategorien einen Hintergrund erhalten sollen.',
    'cms_var_md_show_cats_icon' => 'Zeige Kategorie Icons?',
    'cms_var_md_show_cats_icon_explain' => 'W�hle JA wenn du m�chtest das die Kategorie Icons angezeigt werden sollen.',
    'cms_var_md_show_desc' => 'Link-Beschreibungen anzeigen?',
    'cms_var_md_show_desc_explain' => 'W�hle JA wenn du m�chtest das die Link-Beschreibungen mit einem Maus-Hover Effekt angezeigt werden sollen.',
    'cms_var_md_show_links_icon' => 'Zeige Links Icons?',
    'cms_var_md_show_links_icon_explain' => 'W�hle JA wenn du m�chtest das die Links Icons angezeigt werden sollen.',
    'cms_var_md_show_sep_icon' => 'Separate Icons anzeigen?',
    'cms_var_md_show_sep_icon_explain' => 'W�hle JA wenn du m�chtest das separate Icons angezeigt werden sollen.',
    'cms_var_md_show_title' => 'Kategorie-Namen anzeigen?',
    'cms_var_md_show_title_explain' => 'W�hle JA wenn die Kategorie-Namen angezeigt werden sollen.',
    'cms_var_md_single_post_auto_id' => 'Erhalte ID von Adresse',
    'cms_var_md_single_post_auto_id_explain' => 'Bei Aktivierung wird die ID direkt von der Adresse bezogen (post_id=XXX)',
    'cms_var_md_single_post_id' => 'Beitrags ID',
    'cms_var_md_single_post_id_explain' => 'Gib die Beitrags ID ein',
    'cms_var_md_single_post_retrieve' => 'Einzel Beitrag abrufen',
    'cms_var_md_single_post_retrieve_explain' => 'Bei Aktivierung wird nur ein Beitrag angezeigt, der weiter unten bestimmt wurde, alle anderen Einstellungen werden ignoriert',
    'cms_var_md_scroll_delay' => 'Scroll Verz�gerung',
    'cms_var_md_scroll_delay_explain' => 'Gr��ere Eintr�ge bedeuten langsameres scrollen',
    'cms_var_md_search_option_text' => 'Suchfeld Beschreibung',
    'cms_var_md_search_option_text_explain' => 'Suchfeld Beschreibung',
    'cms_var_md_show_avatars' => 'Avatare anzeigen',
    'cms_var_md_show_avatars_explain' => '',
    'cms_var_md_total_poster' => 'Anzahl der Top Poster',
    'cms_var_md_total_poster_explain' => '',
    'cms_var_md_wordgraph_count' => 'Aktiviere Wort Z�hlungen',
    'cms_var_md_wordgraph_count_explain' => 'Zeige die Gesamtanzahl der W�rter neben jedem Wort',
    'cms_var_md_wordgraph_words' => 'Maximale W�rter',
    'cms_var_md_wordgraph_words_explain' => 'W�hle die Anzahl der maximal anzuzeigenden W�rter',

    'cms_option_All_Topics' => 'Alle Themen',
    'cms_option_Alphabetical' => 'Alphabetisch',
    'cms_option_Archive' => 'Archiv',
    'cms_option_Categories' => 'Kategorien',
    'cms_option_News' => 'News',
    'cms_option_Newest' => 'Neuste',
    'cms_option_Public' => '�ffentlich',
    'cms_option_Public_and_Personal' => '�ffentlich und Pers�nlich',
    'cms_option_Random' => 'Zuf�llige',
    'cms_option_Recent' => 'Neusten',
    'cms_option_Scroll' => 'Scrollend',
    'cms_option_Static' => 'Feststehend',
    'cms_option_Horizontal' => 'Horizontal',
    'cms_option_Vertical' => 'Vertikal',
    'cms_option_Show_In_Portal' => 'Im Portal anzeigen',
    'cms_option_Yes' => 'Ja',
    'cms_option_No' => 'Nein',
    'cms_option_Left' => 'Links',
    'cms_option_Center' => 'Center',
    'cms_option_Right' => 'Rechts',

    'cms_value_All_Topics' => '0',
    'cms_value_Archive' => '0',
    'cms_value_Categories' => '1',
    'cms_value_Newest' => '0',
    'cms_value_Public' => '0',
    'cms_value_Public_and_Personal' => '1',
    'cms_value_Random' => '1',
    'cms_value_Recent' => '0',
    'cms_value_Show_In_Portal' => '1',
	)
);

?>