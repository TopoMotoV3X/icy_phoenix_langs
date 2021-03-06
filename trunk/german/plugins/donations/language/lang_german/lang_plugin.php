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
* David Lewis (Highway of Life) http://startrekguide.com
* TheSteffen
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

// Donations - BEGIN
$lang['MG_DONATIONS'] = 'Spenden';
$lang['MG_DONATE'] = 'Spende';
$lang['MUST_ENTER_DONATION'] = 'Du musst mindestens den Betrag und die Beschreibung ausfüllen.';
$lang['DONATION_ADD'] = 'Spende hinzufügen';
$lang['DONATION_ADDED'] = 'Spende hinzugefügt';
$lang['DONATION_UPDATED'] = 'Spende aktualisiert';
$lang['DONATION_REMOVED'] = 'Spende entfernt';
$lang['DONATION_VIEW'] = 'Spende anzeigen';
$lang['AMOUNT'] = 'Betrag';
$lang['NO_DONATIONS'] = 'Keine Spenden';
$lang['CLICK_RETURN_DONATIONS'] = 'Klicke %shier%s, um zu den Spenden zurückzukehren.';
// Donations - END

$lang = array_merge($lang, array(
	'cms_page_name_donations' => 'Spenden',

	'9000_DONATIONS' => 'Spenden',
	'9110_DONATIONS_CONFIG' => 'Konfiguration',
	'PLUGIN_DONATIONS_GENERAL' => 'Einstellungen',

	'ACP_DONATION_MOD_SETTINGS' => 'Spenden-Einstellungen',
	'ACP_DONATION_MOD_SETTINGS_EXPLAIN' => 'Verwalte Spenden-Einstellungen',

	'CONVERT_PERCENTAGE' => 'Währungsumrechnung in Prozent',
	'CONVERT_PERCENTAGE_EXPLAIN' => 'Gib die Währungsumrechnung in Prozent an, um die Währung umzurechnen (5 = 5%).',
	'COUNTRY' => 'Land',
	'COUNTRY_EXPLAIN' => '',
	'CURRENCY_NOT_RECOGNISED' => 'Der Währungscode: %s wurde nicht erkannt',

	'DEFAULT_COUNTRY' => 'Standard Land',
	'DEFAULT_CURRENCY' => 'Standard Währung',
	'DONATE_AMOUNT' => 'Betrag der Spende',
	'DONATE_AMOUNT_EXPLAIN'  => '',
	'DONATION_CANCELED' => 'Spenden-Transaktion abgebrochen',
	'DONATE_EXPLAIN' => 'Mache eine einmalige Spende über PayPal.',
	'DONATE_MINIMUM' => 'Minimum Spenden-Betrag',
	'DONATE_MINIMUM_EXPLAIN' => 'Gib einen Minimum Spenden-Betrag in der Standardwährung an.',
	'DONATE_TO_SITENAME' => 'Spende an %s',
	'DONATE_TO_SITENAME_EXPLAIN' => '<b>Unterstütze %1$s durch eine Spende über PayPal</b><br /><br />
	Deine Spende trägt dazu bei, dass wir unsere Serverkosten bezahlen können und diese Website (zum Nutzen des Projekts und unserer Benutzer) weiterhin online bleibt.<br /><br />
	Wenn du <b>%1$s</b> unterstützt, mit dem Minimumbeitrag von <b>%2$s</b>, wirst du automatisch zur <b>%3$s</b> Gruppe hinzugefügt und du erhälst wahrscheinlich auch zusätzlichen Nutzen auf der Website. Vergewissere dich, dass du angemeldet bist bevor du spendest, damit du korrekt identifiziert werden kannst.<br /><br />
	Wenn es dir möglich ist mehr als %2$s zu spenden, dann wird uns dies motivieren Belohnungen für unsere Unterstützer zu geben und hilft uns dementsprechend mehr.<br /><br />
	Vielen Dank im Voraus für jede Unterstützung.',
	'DONATION_MESSAGE' => 'Spenden-Nachricht (Anmerkung)',
	'DONATION_RECEIVED_VERIFIED' => 'Spende erhalten (bestätigt) von %s',
	'DONATION_RECEIVED_UNVERIFIED' => 'Spende erhalten (nicht bestätigt) von %s',
	'DONATION_RECEIVED_MSG_VERIFIED' => 'Hallo,
	Du hast eine Spende von %2$s ( %1$s ) in Höhe von %3$s erhalten.
	Diese Transaktion wurde bereits überprüft und es ist keine Aktion erforderlich.',
	'DONATION_RECEIVED_MSG_UNVERIFIED' => 'Hallo,
	Du hast eine Spende von %2$s ( %1$s ) in Höhe von %3$s erhalten.',

	'DONATION_TRANSACTION_ID' => 'Spenden-ID',
	'DONATION_TXN_ID' => 'Transaktion-ID',
	'DONATION_TXN_TYPE' => 'Transaktion-Typ',
	'DONATION_CONFIRMED' => 'Bestätigung',
	'DONATION_USER_ID' => 'Benutzer-ID',
	'DONATION_USERNAME' => 'Benutzername',
	'DONATION_ITEM_NAME' => 'Artikelname',
	'DONATION_ITEM_NUMBER' => 'Artikelnummer',
	'DONATION_PAYMENT_TIME' => 'Zahlungsfrist',
	'DONATION_BUSINESS' => 'Firma',
	'DONATION_PAYMENT_STATUS' => 'Status der Zahlung',
	'DONATION_PAYMENT_GROSS' => 'Zahlung (Brutto)',
	'DONATION_PAYMENT_FEE' => 'Gebühr',
	'DONATION_PAYMENT_TYPE' => 'Zahlungsart',
	'DONATION_MC_CURRENCY' => 'Währung',
	'DONATION_PAYMENT_DATE' => 'Zahltag',
	'DONATION_PAYER_ID' => 'Zahler ID',
	'DONATION_PAYER_EMAIL' => 'Zahler E-Mail',
	'DONATION_PAYER_WEBSITE' => 'URL der Webseite',
	'DONATION_PAYER_WEBSITE_TEXT' => 'Beschreibung der Webseite',
	'DONATION_PAYER_WEBSITE_SPONSOR' => 'URL und Beschreibung der Webseite anzeigen',
	'DONATION_PAYER_WEBSITE_SPONSOR_EXPLAIN' => 'Durch Auswahl dieser Option wird die URL der Webseite zusammen mit der Beschreibung der Webseite angezeigt (dadurch kann ein gesponserter Link verwendet werden).',
	'DONATION_PAYER_STATUS' => 'Zahler Status',
	'DONATION_FIRST_NAME' => 'Vorname',
	'DONATION_LAST_NAME' => 'Nachname',
	'DONATION_MEMO' => 'Anmerkung',

	'ERROR_LOGGING' => 'Fehler protokollieren',
	'ERROR_LOGGING_EXPLAIN' => 'Fehlermeldungen und Daten werden hier gespeichert /logs/transactions.log',
	'ERROR_NO_EXCHANGE_DATA' => 'Fehler: Keine Datenübermittlung',

	'FOUNDER_MANAGE' => 'Nur Gründer berechtigt',
	'FOUNDER_MANAGE_EXPLAIN' => 'Wenn diese Option aktiviert ist, kann nur der Gründer die Einstellungen dieses Plug-ins anpassen.',

	'HTTP_ERROR' => 'HTTP Fehler beim Versuch einer Verbindung',

	'INVALID_TRANSACTION_RECORD' => 'Ungültiger Transaktionsbericht: Kein Transaktion-ID gefunden',

	'MOD_DISABLED' => 'Dieses Plug-in ist derzeit deaktiviert, kontaktiere bitte einen Administrator.',
	'MOD_INSTALLED_SUCCESSFULLY' => 'Plug-in erfolgreich installiert: Version %s',
	'MOD_UPDATED_SUCCESSFULLY' => 'Plug-in erfolgreich aktualisiert zu Version %s',

	'NO_SUBJECT' => 'Kein Betreff angegeben',
	'NOT_AUTHORIZED' => 'Nicht berechtigt',
	'NO_TRANSACTION_ID' => 'Kein Transaktion-ID angegeben',

	'PAYPAL_ADDRESS' => 'PayPal Adresse',
	'PAYPAL_DEBUG' => 'Fehlersuche (debug) einschalten',
	'PAYPAL_DEBUG_EXPLAIN' => 'Gründer benutzen immer die Sandbox und jede Transaktion wird detailliert gespeichert. Schalte es für eine normale Benutzung aus.',
	'PAYPAL_STYLE' => 'PayPal Style',
	'PAYPAL_STYLE_EXPLAIN' => 'Gib den Namen vom PayPal Style an, falls vorhanden.',
	'PHP5_OR_ABOVE_REQUIRED' => 'PHP 5.0 oder höher ist erforderlich, um dieses Plug-in zu verwenden. PHP4 wird seit 2008 nicht mehr aktualisiert.',

	'SANDBOX_ADDRESS' => 'PayPal Sandbox Adresse',
	'SANDBOX_TESTING' => 'Sandbox testen',
	'SEND_CONFIRM_PM' => 'Sende Bestätigungs-PN',
	'SEND_CONFIRM_PM_EXPLAIN' => 'Wähle Nein aus, wenn stattdessen eine Bestätigungs-E-Mail senden möchtest.',
	'SUPPORTER_REWARDS' => 'Unterstützer-Belohnung',
	'SUPPORTERS_GROUP' => 'Unterstützer Gruppe',
	'SUPPORTERS_GROUP_EXPLAIN' => 'Wähle die Gruppe aus, in die ein Benutzer automatisch hinzugefügt werden soll.',
	'SUPPORTERS_GROUP_ID' => 'Unterstützer Gruppen-ID',

	'THANKS_DONATION' => 'Vielen Dank für deine Spende',
	'TRANSACTION_ALREADY_CONFIRMED' => 'Diese Transaktion wurde bereits bestätigt.',
	'TRANSACTION_NOT_VALID' => 'Diese Transaktion ist nicht gültig oder stammt nicht von dieser Seite.',
	'TRANSACTION_NOT_VERIFIED' => 'Transaktion nicht bestätigt. Klicke auf den folgenden Link, um die Transaktion zu bestätigen: %s',
	'TRANSACTION_VERIFIED' => 'Transaktion bestätigt',
	'TRANSACTION_VERIFICATION_FAILED' => 'Transaktion-Bestätigung fehlgeschlagen',

	'UPDATE_MOD_REQUIRED' => 'Du musst dieses Plug-in aktualisieren, um fortfahren zu können. Klicke %shier%s, um das Plug-in zu aktualisieren.',

	'currency_code' => array(
		'USD' => 'U.S. Dollars (USD)',
		'AUD' => 'Australische Dollar (AUD)',
		'CAD' => 'Kanadische Dollar (CAD)',
		'CZK' => 'Tschechische Kronen (CZK)',
		'DKK' => 'Dänische Kronen (DKK)',
		'EUR' => 'Euro (EUR)',
		'HKD' => 'Hongkong-Dollar (HKD)',
		'HUF' => 'Ungarische Forint (HUF)',
		'NZD' => 'Neuseeland-Dollar (NZD)',
		'NOK' => 'Norwegische Kronen (NOK)',
		'PLN' => 'Polnische Zloty (PLN)',
		'GBP' => 'Britische Pfund (GBP)',
		'SGD' => 'Singapur-Dollar (SGD)',
		'SEK' => 'Schwedische Kronen (SEK)',
		'CHF' => 'Schweizer Franken (CHF)',
		'JPY' => 'Japanische Yen (JPY)',
	),

	'country_options' => array(
		'US' => 'Vereinigte Staaten von Amerika',
		'AL' => 'Albanien',
		'DZ' => 'Algerien',
		'AD' => 'Andorra',
		'AO' => 'Angola',
		'AI' => 'Anguilla',
		'AG' => 'Antigua und Barbuda',
		'AR' => 'Argentinien',
		'AM' => 'Armenien',
		'AW' => 'Aruba',
		'AU' => 'Australien',
		'AT' => 'Österreich',
		'AZ' => 'Aserbaidschan',
		'BS' => 'Bahamas',
		'BH' => 'Bahrain',
		'BB' => 'Barbados',
		'BE' => 'Belgien',
		'BZ' => 'Belize',
		'BJ' => 'Benin',
		'BM' => 'Bermudas',
		'BT' => 'Bhutan',
		'BO' => 'Bolivien',
		'BA' => 'Bosnien-Herzegowina',
		'BW' => 'Botswana',
		'BR' => 'Brasilien',
		'VG' => 'Virgin Island (Brit.)',
		'BN' => 'Brunei',
		'BG' => 'Bulgarien',
		'BF' => 'Burkina Faso',
		'BI' => 'Burundi',
		'KH' => 'Kambodscha',
		'CA' => 'Kanada',
		'CV' => 'Kap Verde',
		'KY' => 'Kaiman Inseln',
		'TD' => 'Tschad',
		'CL' => 'Chile',
		'C2' => 'China',
		'CO' => 'Kolumbien',
		'KM' => 'Komoren',
		'CK' => 'Cook Inseln',
		'CR' => 'Costa Rica',
		'HR' => 'Kroatien',
		'CY' => 'Zypern',
		'CZ' => 'Tschechische Republik',
		'CD' => 'Kongo, Demokratische Republik',
		'DK' => 'Dänemark',
		'DJ' => 'Djibuti',
		'DM' => 'Dominika',
		'DO' => 'Dominikanische Republik',
		'EC' => 'Ecuador',
		'SV' => 'El Salvador',
		'ER' => 'Eritrea',
		'EE' => 'Estland',
		'ET' => 'Äthiopien',
		'FK' => 'Falkland Inseln',
		'FO' => 'Färöer Inseln',
		'FM' => 'Mikronesien',
		'FJ' => 'Fidschi',
		'FI' => 'Finnland',
		'FR' => 'Frankreich',
		'GF' => 'Französisch Guyana',
		'PF' => 'Französisch Polynesien',
		'GA' => 'Gabun',
		'GM' => 'Gambia',
		'DE' => 'Deutschland',
		'GI' => 'Gibraltar',
		'GR' => 'Griechenland',
		'GL' => 'Grönland',
		'GD' => 'Grenada',
		'GP' => 'Guadeloupe',
		'GT' => 'Guatemala',
		'GN' => 'Guinea',
		'GW' => 'Guinea Bissau',
		'GY' => 'Guyana',
		'HN' => 'Honduras',
		'HK' => 'Hong Kong',
		'HU' => 'Ungarn',
		'IS' => 'Island',
		'IN' => 'Indien',
		'ID' => 'Indonesien',
		'IE' => 'Irland',
		'IL' => 'Israel',
		'IT' => 'Italien',
		'JM' => 'Jamaika',
		'JP' => 'Japan',
		'JO' => 'Jordanien',
		'KZ' => 'Kasachstan',
		'KE' => 'Kenia',
		'KI' => 'Kiribati',
		'KW' => 'Kuwait',
		'KG' => 'Kirgisistan',
		'LA' => 'Laos',
		'LV' => 'Lettland',
		'LS' => 'Lesotho',
		'LI' => 'Liechtenstein',
		'LT' => 'Litauen',
		'LU' => 'Luxemburg',
		'MG' => 'Madagaskar',
		'MW' => 'Malawi',
		'MY' => 'Malaysia',
		'MV' => 'Malediven',
		'ML' => 'Mali',
		'MT' => 'Malta',
		'MH' => 'Marshall Inseln',
		'MQ' => 'Martinique',
		'MR' => 'Mauretanien',
		'MU' => 'Mauritius',
		'YT' => 'Mayotte',
		'MX' => 'Mexiko',
		'MN' => 'Mongolei',
		'MS' => 'Montserrat',
		'MA' => 'Marokko',
		'MZ' => 'Mocambique',
		'NA' => 'Namibia',
		'NR' => 'Nauru',
		'NP' => 'Nepal',
		'NL' => 'Niederlande',
		'AN' => 'Niederländische Antillen',
		'NC' => 'Neukaledonien',
		'NZ' => 'Neuseeland',
		'NI' => 'Nicaragua',
		'NE' => 'Niger',
		'NU' => 'Niue',
		'NF' => 'Norfolk Inseln',
		'NO' => 'Norwegen',
		'OM' => 'Oman',
		'PW' => 'Palau',
		'PA' => 'Panama',
		'PG' => 'Papua Neuguinea',
		'PE' => 'Peru',
		'PH' => 'Philippinen',
		'PN' => 'Pitcairn',
		'PL' => 'Polen',
		'PT' => 'Portugal',
		'QA' => 'Qatar',
		'CG' => 'Kongo',
		'RE' => 'Reunion',
		'RO' => 'Rumänien',
		'RU' => 'Rußland',
		'RW' => 'Ruanda',
		'VC' => 'St. Vincent',
		'WS' => 'Samoa',
		'SM' => 'San Marino',
		'ST' => 'Sao Tome',
		'SA' => 'Saudi Arabien',
		'SN' => 'Senegal',
		'SC' => 'Seychellen',
		'SL' => 'Sierra Leone',
		'SG' => 'Singapur',
		'SK' => 'Slowakei',
		'SI' => 'Slowenien',
		'SB' => 'Solomon Inseln',
		'SO' => 'Somalia',
		'ZA' => 'Südafrika',
		'KR' => 'Süd Korea',
		'ES' => 'Spanien',
		'LK' => 'Sri Lanka',
		'SH' => 'St. Helena',
		'KN' => 'St. Kitts Nevis Anguilla',
		'LC' => 'Saint Lucia',
		'PM' => 'St. Pierre und Miquelon',
		'SR' => 'Surinam',
		'SJ' => 'Svalbard und Jan Mayen Islands',
		'SZ' => 'Swasiland',
		'SE' => 'Schweden',
		'CH' => 'Schweiz',
		'TW' => 'Taiwan',
		'TJ' => 'Tadschikistan',
		'TZ' => 'Tansania',
		'TH' => 'Thailand',
		'TG' => 'Togo',
		'TO' => 'Tonga',
		'TT' => 'Trinidad Tobago',
		'TN' => 'Tunesien',
		'TR' => 'Türkei',
		'TM' => 'Turkmenistan',
		'TC' => 'Turks und Kaikos Inseln',
		'TV' => 'Tuvalu',
		'UG' => 'Uganda',
		'UA' => 'Ukraine',
		'AE' => 'Vereinigte Arabische Emirate',
		'GB' => 'Großbritannien (UK)',
		'UY' => 'Uruguay',
		'VU' => 'Vanuatu',
		'VA' => 'Vatikan Stadt',
		'VE' => 'Venezuela',
		'VN' => 'Vietnam',
		'WF' => 'Wallis et Futuna',
		'YE' => 'Jemen',
		'ZM' => 'Sambia',
	),
	)
);

?>