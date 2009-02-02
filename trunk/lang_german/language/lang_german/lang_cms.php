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
// MG CMS - BEGIN
    'CMS_WELCOME' => 'Willkommen bei Icy Phoenix',
    'BP_Title' => 'Position der Bl�cke anlegen',
    'BP_Explain' => 'Von diesem Bedienpanel aus, kannst du die Positionen der Bl�cke hinzuf�gen, bearbeiten und l�schen. Die Standard Positionen sind \'header\', \'footer\', \'right\', \'left\' und \'center\'. Diese Positionen sind vom Layout der bestimmten Site Page abh�ngig. Nur existierende Positionen f�r die Site Page m�ssen hier hinzugef�gt werden. Positions Keys die nicht in dem entsprechenden Layout vorhanden sind werden auf der Site Page nicht angezeigt. Jeder Position Tag Key und Charakter muss f�r jede Site Page einzigartig sein.',
    'BP_Position' => 'Position Charakter',
    'BP_Key' => 'Position Tag Key',
    'BP_Layout' => 'Site Page',
    'BP_Add_Position' => 'Neue Position hinzuf�gen',
    'No_bp_selected' => 'Keine Position zum bearbeiten ausgew�hlt',
    'BP_Edit_Position' => 'Bearbeite Block Position',
    'Must_enter_bp' => 'Du musst ein Position Tag Key, Position Charakter und Site Page angeben',
    'BP_updated' => 'Block Position Aktualisiert',
    'BP_added' => 'Block Position hinzugef�gt',
    'Click_return_bpadmin' => 'Klicke %shier%s, um zur Block Positions Administration zur�ckzukehren',
    'BP_removed' => 'Block Position entfernt',
    'Portal_wide' => 'Globale Bl�cke',

    'No_layout_selected' => 'Keine Site Page zum bearbeiten ausgew�hlt',
    'Layout_Title' => 'Site Pages',
    'Layout_Explain' => 'Von diesem Bedienpanel aus kannst du die Layout Informationen der Site Page hinzuf�gen, bearbeiten oder l�schen. Mehrere Site Pages k�nnen das gleiche Layout verwenden. Die ausgew�hlte Layout Template Datei muss im Layout Verzeichnis in deinem Template Verzeichnis liegen. Du solltest nicht die Standard Site Page l�schen. Das L�schen einer Site Page l�scht auch die Block Positionen und Bl�cke die dieser Seite zugeordnet sind. Du kannst auch die Bl�cke die jeder Seite zugordnet sind bearbeiten und komplett neue Seiten mit einem gew�nschten Name erstellen (z.B.: mypage.php).',
    'Layout_Special_Explain' => 'Add, edit or delete blocks for standard pages of your site (i.e.: forum, view topic, memberlist, downloads, album, etc.).',
    'Layout_Name' => 'Name',
    'Layout_Template' => 'Template Datei',
    'Layout_Edit' => 'Bearbeite Site Page',
    'Layout_Page' => 'Seiten-ID',
    'Layout_View' => 'Anzeige bei',
    'Layout_Edit_Perm' => 'Bearbeite Berechtigungen',
    'Layout_Global_Blocks' => 'Zeige Globale Bl�cke',
    'Layout_Page_Nav' => 'Page Navigation Block (Breadcrumbs)',
    'Must_enter_layout' => 'Du muss einen Namen und eine Template Datei angeben',
    'Layout_updated' => 'Site Page aktualisiert',
    'Click_return_layoutadmin' => 'Klicke %shier%s, um zur Site Page Administration zur�ckzukehren',
    'Layout_added' => 'Site Page hinzugef�gt',
    'Layout_removed' => 'Site Page entfernt',
    'Layout_Add' => 'Site Page hinzuf�gen',
    'Layout_BP_added' => 'Layout Config Datei verf�gbar: Block Position Tags automatisch eingef�gt',
    'Layout_default' => 'Standard',
    'Layout_make_default' => 'Setze als Standard',

    'Blocks_Title' => 'Bl�cke Verwalrung',
    'Blocks_Explain' => 'Von diesem Bedienpanel aus kannst du Bl�cke f�r jede verf�gbare Site Page hinzuf�gen, bearbeiten, l�schen und verschieben. F�r jede hinzugef�gte Block Datei muss ein Block Template vorhanden sein.',
    'Blocks_Duplicate_Explain' => 'Von diesem Bedienpanel aus kannst du Bl�cke von anderen Layouts duplizieren. Nur Bl�cke die mit dem ausgew�hlten Layout kompatibel sind werden angezeigt. Um Bl�cke zu duplizieren musst du nur die Box, f�r jeden Block den du hinzuf�gen willst, ankreuzen und dann nur noch "Bl�cke duplizieren" am Seitenende anklicken.',
    'Blocks_Creation_01' => 'Hinzuf�gen/Bearbeiten Block Seite 1 von 2',
    'Blocks_Creation_02' => 'Hinzuf�gen/Bearbeiten Block Seite 2 von 2',
    'Standard_Pages' => 'Standard Seiten',
    'Custom_Pages' => 'Benutzerspezifische Seiten',
    'Custom_Pages_ADV' => 'CMS Seiten ADV',
    'Choose_Layout' => 'W�hle Site Page',
    'B_Title' => 'Titel',
    'B_Position' => 'Position',
    'B_Active' => 'Aktivieren',
    'B_Display' => 'Inhalt',
    'B_HTML' => 'HTML',
    'B_BBCode' => 'BBCode',
    'B_Type' => 'Typ',
    'B_Border' => 'Zeige Umrandung',
    'B_Border_and_Background' => 'Rahmen und Hintergrund',
    'B_Titlebar' => 'Zeige Titelbar',
    'B_Titlebar_Content' => 'Titlebar',
    'B_Background' => 'Zeige Hintergrund',
    'B_Local' => 'Beschr�nke Titelbar',
    'B_Cache' => 'Cache?',
    'B_Cachetime' => 'Cache Dauer',
    'B_Groups' => 'Benutzergruppen',
    'B_All' => 'Alle',
    'B_Guests' => 'Nur G�ste',
    'B_Reg' => 'Registrierte Benutzer',
    'B_Mod' => 'Moderatoren',
    'B_Admin' => 'Administratoren',
    'B_None' => 'Keiner',
    'B_Layout' => 'Site Page',
    'B_Page' => 'Page ID',
    'B_Add' => 'Block hinzuf�gen',
    'B_Duplicate' => 'Bl�cke duplizieren',
    'B_Update' => 'Bl�cke aktualisieren',
    'Yes' => 'Ja',
    'No' => 'Nein',
    'Enabled' => 'Aktiviert',
    'Disabled' => 'Deaktiviert',
    'B_Text' => 'Text',
    'B_File' => 'Block Datei',
    'B_Move_Up' => 'nach Oben',
    'B_Move_Down' => 'nach Unten',
    'B_View' => 'Zeige bei',
    'B_Text_Block' => 'Text oder HTML Block',
    'No_blocks_selected' => 'kein Block ausgew�hlt',
    'B_Content' => 'Inhalt',
    'B_Blockfile' => 'Block Datei',
    'Block_Edit' => 'Block Bearbeitung',
    'Block_updated' => 'Block wurde aktualisiert',
    'Blocks_updated' => 'Bl�cke wurden aktualisiert',
    'Must_enter_block' => 'Du musst einen Block Titel eingeben',
    'Block_added' => 'Block wurde hinzugef�gt',
    'Blocks_added' => 'Bl�cke wurden hinzugef�gt',
    'Blocks_duplicated' => 'Bl�cke wurden dupliziert',
    'Click_return_blocksadmin' => 'Klicke %shier%s, um zum Block Management zur�ckzukehren',
    'Block_removed' => 'Block wurde gel�scht',
    'B_BV_added' => 'Block Config Datei verf�gbar: Block Variablen automatisch eingef�gt',

    'BV_Title' => 'Block Variablen',
    'BV_Explain' => 'Von diesem Bedienpanel aus kannst du die Block Variablen die auf den Site Pages verwendet werden, hinzuf�gen, bearbeiten und l�schen. Diese Variablen k�nnen dann durch die Home Page Konfigurations Seite eingestellt werden um dein Portal zu personalisieren.',
    'BV_Label' => 'Feld Label',
    'BV_Sub_Label' => 'Feld Info',
    'BV_Name' => 'Config Name',
    'BV_Options' => 'Optionen',
    'BV_Values' => 'Feld Werte',
    'BV_Type' => 'Kontroll Typ',
    'BV_Block' => 'Block',
    'BV_Add_Variable' => 'Block Variable hinzuf�gen',
    'No_bv_selected' => 'Keine weitere Block Variable zum konfigurieren gefunden, klicke auf "Absenden" um diesen Block zu speichern.',
    'BV_Edit_Variable' => 'Block Variable bearbeiten',
    'Must_enter_bv' => 'Du musst ein Feld Label und ein Config Name angeben',
    'BV_updated' => 'Block Variable wurde aktualisiert',
    'BV_added' => 'Block Variable wurde hinzuf�gt',
    'Click_return_bvadmin' => 'Klicke %shier%s, um zur Block Variablen Konfiguration zur�ckzukehren',
    'Config_Name_Explain' => 'Darf kein Leerzeichen haben',
    'Field_Options_Explain' => 'F�r Dropdown-Listen vorgeschrieben und<br />f�r Radio Buttons (Kommagetrennt).',
    'Field_Values_Explain' => 'F�r Dropdown-Listen vorgeschrieben und<br />f�r Radio Buttons (Kommagetrennt).',
    'BV_removed' => 'Block Variable wurde entfernt',

    'Config_updated' => 'Konfiguration wurde aktualisiert',
    'Click_return_config' => 'Klicke %shier%s, um zur Konfiguration zur�ckzukehren',
    'Portal_Config' => 'Site Pages Konfiguration',
    'Portal_Explain' => 'Von diesem Bedienpanel aus, kannst du alle Konfigurationen die f�r deine Site Pages ben�tigt werden, einstellen. Block Variablen die auf dieser Seite gelistet sind, k�nnen auf der Block Variablen Config Seite erstellt/aktualisiert werden',
    'Portal_General_Config' => 'Allgemeine Konfiguration',
    'Default_Portal' => 'Standard Site Page',
    'Default_Portal_Explain' => 'Homepage der Seite',
    'Cache_Enabled' => 'Aktiviere Cache System',
    'Cache_Enabled_Explain' => 'F�r schnelleres Laden der Site Pages Information',
    'Confirm_delete_item' => 'Bist du sicher, dass du diesen Artikel l�schen willst?',
    'Cache_cleared' => 'Cache Dateien wurden gel�scht',

    'cms_pos_header' => '�berschrift',
    'cms_pos_headerleft' => 'Links',
    'cms_pos_headercenter' => 'Oben/Center',
    'cms_pos_footercenter' => 'Unten/Center',
    'cms_pos_footerright' => 'Rechts',
    'cms_pos_footer' => 'Seiten Footer',
    'cms_pos_nav' => 'Navigationsleiste',
    'cms_pos_left' => 'Links',
    'cms_pos_center' => 'Center',
    'cms_pos_right' => 'Rechts',
    'cms_pos_xsnews' => 'News (Center)',
    'cms_pos_centerbottom' => 'Unten/Center',
    'cms_pos_toprow' => 'Top',
    'cms_pos_column1' => 'Column 1 (Links)',
    'cms_pos_column2' => 'Column 2 (Rechts)',
    'cms_pos_bottomrow' => 'Unten',
    'cms_pos_ghtop' => 'Header Top',
    'cms_pos_ghbottom' => 'Header Bottom',
    'cms_pos_ghleft' => 'Header Centre (Left)',
    'cms_pos_ghright' => 'Header Centre (Right)',
//  'cms_pos_' => '',

    'cms_block_ads' => 'Anzeigen',
    'cms_block_ajax_shoutbox' => 'AJAX Chat',
    'cms_block_album' => 'Galerie',
    'cms_block_birthdays' => 'Geburtstage',
    'cms_block_calendar' => 'Kalender',
    'cms_block_center_downloads' => 'Downloads',
    'cms_block_clock' => 'Uhr',
    'cms_block_donate' => 'Spenden',
    'cms_block_dyn_menu' => 'Dynamisches Men�',
    'cms_block_forum' => 'News',
    'cms_block_forum_attach' => 'Erweiterte News',
    'cms_block_forum_list' => 'Forum Liste',
    'cms_block_full_search' => 'Komplette Suche',
    'cms_block_global_header' => 'Global Header',
    'cms_block_global_header_simple' => 'Global Header Simple',
    'cms_block_gsearch' => 'Google Suche',
    'cms_block_gsearch_hor' => 'Google Suche (Horizontal)',
    'cms_block_index' => 'Site Map',
    'cms_block_jumpbox' => 'Jumpbox',
    'cms_block_kb' => 'Wissensdatenbank',
    'cms_block_links' => 'Links',
    'cms_block_menu' => 'Forum Navigation',
    'cms_block_nav_header' => 'Header',
    'cms_block_nav_links' => 'Site Map',
	'cms_block_nav_logo' => 'Logo',
    'cms_block_new_downloads' => 'Neue Downloads',
    'cms_block_news' => 'News',
	'cms_block_news_archive' => 'News Archive',
	'cms_block_news_posters' => 'News Posters',
    'cms_block_online_users' => 'Wer ist online',
    'cms_block_online_users2' => 'Wer ist online',
    'cms_block_paypal' => 'PayPal',
    'cms_block_poll' => 'Umfrage',
    'cms_block_random_attach' => 'Zuf�llige Anh�nge',
    'cms_block_random_quote' => 'Zuf�lliges Zitat',
    'cms_block_random_topics' => 'Zuf�llige Themen',
    'cms_block_random_topics_ver' => 'Zuf�llige Themen',
	'cms_block_random_user' => 'Zuf�llige Benutzer',
    'cms_block_recent_articles' => 'Neuste Artikel',
    'cms_block_recent_topics' => 'Neuste Themen',
    'cms_block_recent_topics_wide' => 'Neuste Themen',
    'cms_block_referers' => 'Referrer',
    'cms_block_rss' => 'RSS',
    'cms_block_search' => 'Suche',
    'cms_block_sec_menu' => 'Extra Men�',
    'cms_block_shoutbox' => 'Shoutbox',
    'cms_block_staff' => 'Staff',
    'cms_block_statistics' => 'Statistiken',
    'cms_block_style' => 'Style',
    'cms_block_top_downloads' => 'Beste Downloads',
    'cms_block_top_nav' => 'Top Nav',
    'cms_block_top_posters' => 'Beste Beitragserfasser',
    'cms_block_user_block' => 'Benutzer Block',
    'cms_block_users_visited' => 'Aktive Benutzer',
    'cms_block_visit_counter' => 'Besucher Z�hler',
    'cms_block_welcome' => 'Willkommen',
    'cms_block_wordgraph' => 'Tags',
    'cms_block_xs_news' => 'News',
//  'cms_block_' => '',

    'cms_var_cms_style' => 'CMS Modern Style',
    'cms_var_cms_style_explain' => 'Modern Style for CMS consists in a modern layout with top transparent menu, while classic style has side menu',
    'cms_var_header_width' => 'Globale linke Spalten-Breite',
    'cms_var_header_width_explain' => 'Breite der linken Side-Wide Spalte in Pixeln',
    'cms_var_footer_width' => 'Globale rechte Spalten-Breite',
    'cms_var_footer_width_explain' => 'Breite der rechten Side-Wide Spalte in Pixeln',
    'cms_var_md_cache_file_locking' => 'Cache Datei Blockierung',
    'cms_var_md_cache_file_locking_explain' => 'Kann Cache Korruption unter schlechten Umst�nden vermeiden',
    'cms_var_md_cache_write_control' => 'Cache Schreib Kontrolle',
    'cms_var_md_cache_write_control_explain' => 'Erkennt einige korrupte Cache Dateien',
    'cms_var_md_cache_read_control' => 'Cache Lese Kontrolle',
    'cms_var_md_cache_read_control_explain' => 'Ein Kontroll-Schl�ssel wird in der Cache Datei hinterlegt',
    'cms_var_md_cache_read_type' => 'Cache Lese Kontroll Art',
    'cms_var_md_cache_read_type_explain' => 'Art der Lese-Kontrolle (nur wenn Lese-Kontrolle aktiviert ist)',
    'cms_var_md_cache_filename_protect' => 'Cache Dateinamen Schutz',
    'cms_var_md_cache_filename_protect_explain' => 'Verschl�sselt Cache Datei Namen f�r h�here Sicherheit',
    'cms_var_md_cache_serialize' => 'Cache Automatische Anordnung',
    'cms_var_md_cache_serialize_explain' => 'Aktiviert / Deaktiviert automatische Anordnung',
//  'cms_var_' => '',

    'CMS_Config_updated' => 'Konfigurations-Update erfolgreich',
    'CMS_Click_return_config' => 'Klicke %shier%s, um zu den Einstellungen zur�ckzukehren',
    'CMS_Click_return_cms' => 'Klicke %shier%s, um zur CMS-Verwaltung zur�ckzukehren',
    'CMS_Title' => 'CMS',
    'CMS_Management' => 'CMS-Verwaltung',
    'CMS_Config' => 'CMS Konfiguration',
    'CMS_Guest' => 'Gast',
    'CMS_Reg' => 'Registrierte',
    'CMS_VIP' => 'VIP',
    'CMS_Publisher' => 'Ver�ffentlicher',
    'CMS_Reviewer' => 'Reviewer',
    'CMS_Content_Manager' => 'Inhalts-Manager',
    'CMS_ACP' => 'Bearbeite diese Seite',
    'CMS_Pages' => 'Site Pages',
    'CMS_ID' => 'ID',
    'CMS_Actions' => 'Aktionen',
    'CMS_Layout' => 'Layout',
    'CMS_Blocks' => 'Bl�cke',
    'CMS_Name' => 'Name',
    'CMS_Description' => 'Beschreibung',
    'CMS_Filename' => 'Dateiname',
    'CMS_Filename_Explain' => '<i>(Um eine neue Datei zu erstellen, muss dein Server richtig konfiguriert sein. Sonst wird dieses Feature nicht unterst�tzt.)</i>',
    'CMS_Filename_Explain_OK' => '<i>Nach einem schnellen Test scheint es, dass dein Server die automatische Datei-Erstellung erlaubt. Darum sollte die Datei automatisch erstellt werden.</i>',
    'CMS_Filename_Explain_NO' => '<i>Nach einem schnellen Test scheint es, dass dein Server die automatische Datei-Erstellung <b>NICHT ERLAUBT</b>. Wenn du eine neue Datei mit einem neuen Namen erstellen m�chtest, solltest du deshalb die Datei von Hand erstellen (kopiere die <b>index_empty.php</b> auf deinen Server und benenne sie, wie gew�nscht, um). Alternativ kannst du die richtigen Berechtigungen f�r dein Stammverzeichnis (root) setzen, so dass das Verfahren automatisch ausgef�hrt werden kann.</i>',
    'CMS_Template' => 'Template',
    'CMS_FileAlreadyExists' => 'Die Datei die du gerade versuchst zu erstellen existiert bereits. Bitte w�hle einen anderen Dateinamen.',
    'CMS_FileCreationSuccess' => 'Die neue Seite wurde automatisch erstellt.',
    'CMS_FileCreationError' => 'Die Datei konnte nicht erstellt werden.',
    'CMS_FileCreationManual' => 'Bitte erstelle eine Kopie der index_empty.php und gib ihr den Namen den du f�r die neue Seite verwendet hast. Lade die Datei in dein Stammverzeichnis (root).',
    'CMS_Permissions' => 'Befugnisse',
    'CMS_Global_Header' => 'Global Header',
    'CMS_Global_Blocks' => 'Globale Bl�cke',
    'CMS_Edit' => 'Bearbeiten',
    'CMS_Delete' => 'L�schen',
    'CMS_Preview' => 'Vorschau',
    'CMS_Configure_Blocks' => 'Bl�cke einstellen',
    'CMS_Page_Permissions' => 'Seiten-Berechtigung',
    'CMS_Page_Permissions_Explain' => 'Auf dieser Seite kannst du das Benutzer-Level einstellen, das f�r die Seite erforderlich ist. Au�erdem kannst du f�r jede Seite ausw�hlen, ob der Block global angezeigt wird oder nicht (um dieses Feature nutzen zu k�nnen, muss "Globale Bl�cke" in der <b>CMS Konfiguration</b>) aktiviert sein.',
    'CMS_Page' => 'Seite',
	'CMS_ADS' => 'Banner &amp; Sponsoren',
//  'CMS_' => '',
// MG CMS - END

// MG CMS MENU - BEGIN
    'CMS_Menu_Page' => 'Dynamisches Men�',
    'CMS_Menu_Page_Explain' => 'Auf dieser Seite kannst du benutzerdefinierte Men�s erstellen, um sie dann auf den CMS Seiten als Block anzuzeigen. Wenn du eine Kategorie oder Link erstellst, kannst du die Sprachschl�ssel verwenden oder einen eigenen Namen. Du kannst auch das Berechtigungs-Level ausw�hlen, das zum Aufrufen eines Links ben�tigt wird und ob der Link im selben oder einem Neuen Fenster ge�ffnet werden soll.',

    'CMS_Menu_New_Menu' => 'Erstelle einen neuen Men� Block',
    'CMS_Menu_New_cat' => 'Erstelle eine neue Kategorie',
    'CMS_Menu_New_link' => 'Erstelle einen neuen Link',
    'CMS_Menu_Edit_menu_links_button' => 'Bearbeite Links in diesem Men�',
    'CMS_Menu_Edit_cat_button' => 'Bearbeite Kategorie',
    'CMS_Menu_Edit_link_button' => 'Bearbeite Link',
    'CMS_Menu_Set_auth' => 'Berechtigung',
    'CMS_Menu_New_menu_name' => 'Men�-Name',
    'CMS_Menu_New_cat_name' => 'Kategorie-Name',
    'CMS_Menu_New_link_name' => 'Link-Name',
    'CMS_Menu_Default_link' => 'Standard Link (<b>*</b> wird ignoriert)',
    'CMS_Menu_No_default_link' => 'Kein Standard Link (verwende benutzerdefinierte Einstellung)',
    'CMS_Menu_New_menu_des' => 'Men�-Beschreibung',
    'CMS_Menu_New_cat_des' => 'Kategorie-Beschreibung',
    'CMS_Menu_New_link_des' => 'Link-Beschreibung',
    'CMS_Menu_Choose_cat' => 'W�hle Kategorie',
    'CMS_Menu_Choose_cat_desc' => 'W�hle die Kategorie wo der Link angezeigt werden soll.',
    'CMS_Menu_link_status' => 'Status',
    'CMS_Menu_Icon' => 'Icon',
    'CMS_Menu_No_Icon' => 'Kein Icon',
    'CMS_Menu_Standard_Icon' => 'Standard Icon',
    'CMS_Menu_link_external' => 'Externer Link',
    'CMS_Menu_New_link_name_key' => 'Sprach-Variable (in der Datei <b>lang_dyn_menu.php</b> bestimmt)',
    'CMS_Menu_No_lang_key' => 'Keine Sprach-Variable (verwende den angegebenen Namen)',
    'CMS_Menu_New_link_url' => 'URL dieses Links',
    'CMS_Menu_New_cat_link_url' => 'URL dieser Kategorie (wenn keine URL angegeben wird, kannst du die Kategorie auf- und zuklappen um die Beitr�ge zu sehen)',
    'CMS_Menu_Update' => 'Men� aktualisieren',

    'Click_Return_CMS_Menu' => 'Klicke %shier%s, um zur Men�-Administration zur�ckzukehren',

    'Menu_created' => 'Men� wurde erfolgreich erstellt.',
    'Cat_created' => 'Kategorie wurde erfolgreich erstellt.',
    'Link_created' => 'Link wurde erfolgreich erstellt.',
    'Menu_updated' => 'Men� wurde erfolgreich aktualisiert.',
    'Cat_updated' => 'Kategorie wurde erfolgreich aktualisiert.',
    'Link_updated' => 'Link wurde erfolgreich aktualisiert.',
    'Menu_deleted' => 'Men� wurde erfolgreich gel�scht.',
    'Cat_deleted' => 'Kategorie wurde erfolgreich entfernt.',
    'Link_deleted' => 'Link wurde erfolgreich entfernt.',

    'CMS_Menu_Not_Exist' => 'Dieses Men� existiert nicht.',
    'CMS_Menu_Items_Not_Exist' => 'Dieses Men� hat keine Kategorie. Klicke auf hinzuf�gen, um eine zu erstellen.',
    'CMS_Menu_No_Cats_Exist' => 'Dieser Men�-Block hat keine Kategorie. Bevor du einen Link erstellen kannst, mu�t du eine Kategorie anlegen.',
    'CMS_Menu_Item_Not_Exist' => 'Dieser Men�-Eintrag existiert nicht.',
    'CMS_Menu_Item_Add_Edit' => 'Men�-Eintrag hinzuf�gen/bearbeiten.',
// MG CMS MENU - END

// CMS - ADV - BEGIN
    'CMS_ADV' => 'CMS ADV',
    'CMS_LINKS' => 'Links',
    'CMS_SETTINGS' => 'Einstellungen',
    'CMS_ADV_USERSLIST' => 'CMS Benutzer',
    'CMS_ADV_CUSTOM_PAGES' => 'Light Pages',
    'CMS_ADV_DEFAULT_TEMPLATE' => 'Standard',
    'CMS_ADV_DEFAULT_TEMPLATE_OPTION' => '-- Template default --',

    'BLOCK_MOVE' => 'Block verschieben',
    'TURN_ACTIVE' => 'Block aktivieren/deaktivieren',
    'TURN_BORDER' => 'Rahmen aktivieren/deaktivieren',
    'TURN_TITLEBAR' => 'Titel Bar aktivieren/deaktivieren',
    'TURN_LOCAL' => ' aktivieren/deaktivieren Location Titel',
    'TURN_BACKGROUND' => 'Hintergrund aktivieren/deaktivieren',

    'BLOCKS_POSITION_SAVE' => 'Bl�cke Position sichern',
    'BLOCKS_POSITION_UPDATED' => 'Bl�cke Postition erfolgreich gesichert',

    'INVALID_BLOCKS' => 'Ung�ltige Position der Bl�cke',
// CMS - ADV - END
	)
);
?>