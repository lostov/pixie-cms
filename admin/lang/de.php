<?php
if (!defined('DIRECT_ACCESS')) { header( 'Location: ../../' ); exit(); }
//*****************************************************************//
// Pixie: The Small, Simple, Site Maker.                           //
// ----------------------------------------------------------------//
// Licence: GNU General Public License v3                   	   //
// Title: Language File (Deutsch).                                 //
//*****************************************************************//
if (!isset($delete)) { $delete = NULL; }
if (!isset($username)) { $username = NULL; }
$lang = array(
	// system
	'skip_to' => 'Springe zu Inhalt',
	'view_site' => 'Seite anzeigen',
	'logout' => 'Abmelden',
	'license' => 'Ver&ouml;ffentlicht unter der',
	'tag_line' => 'Der schmale, einfache, Seitenerzeuger',
	'latest_referrals' => 'Letzte Referrals',
	'latest_activity' => 'Letzte Aktivit&auml;ten',
	'feed_subscribe' => 'Abbonieren',
	'rss_feed' => 'RSS Feed',
	'when' => 'Wann?',
	'who' => 'Wer?',
	'what' => 'Was?',
	'from' => 'Von?',
	'switch_to' => 'Wechseln zu',
	'a_few_seconds' => 'Ein paar Sekunden',
	'a_minute' => '1 Minute',
	'minutes' => 'Minuten',
	'a_hour' => '1 Stunde',
	'hours' => 'Stunden',
	'a_day' => '1 Tag',
	'days' => 'Tage',
	'ago' => 'vorbei.',
	'user' => 'Benutzer',
	'to' => 'zu',
	'database_backup' => 'Sicherung der Datenbank',
	'database_info' => 'Stelle sicher, dass die Datenbank regelm&auml;&szlig;ig gesichert wird. Benutze rechts die Schaltfl&auml;che um ein manuelle Sicherung der Datenbank zu erstellen. Die Sicherung wird in das files/sqlbackup Verzeichnis abgelegt und kann von der Liste unten heruntergeladen werden. Die letzte Sicherung ist hervorgehoben.',
	'database_backups' => 'Sicherungen',
	'download' => 'Download',
	'delete' => 'L&ouml;schen',
	'delete_file' => 'Datei l&ouml;schen?',
	'theme_info' => '	Die derzeit installierten Themes sind unten aufgelistet. Weitere Themes k&ouml;nnen installiert werden indem sie in das admin/themes Verzeichnis hochgeladen werden. Zus&auml;tzliche Themes k&ouml;nnen unter <a href="http://www.getpixie.co.uk">www.getpixie.co.uk</a> heruntergeladen oder mittels CSS selbst erstellt werden. Das aktuelle Theme der Seite ist hervorgehoben.',
	'theme_pick' => 'W&auml;hle ein Theme f&uuml;r die Seite',
	'theme_apply' => 'Theme &uuml;bernehmen',
	'sure_delete_	page' => 'Wirklich l&ouml;schen',
	'sure_empty_page' => 'Wirklich den Inhalt entfernen von',
	'settings_page' => 'Seite',
	'settings_plugin' => 'Plugin',
	'plugins' => 'Plugins',
	'plugins_info' => 'Plugins bringen Zusatzfunktionalit&auml;ten f&uuml;r bestimmte Seiten der Website.',
	'empty' => 'Inhalt(e) leeren der',
	'oops' => 'Ooops!',
	'feature_disabled' => 'Diese Funktion ist zur Zeit gesperrt. Die n&auml;chste Version von Pixie wird sie beinhalten!',
	'pages_in_navigation' => 'Seiten in der Navigation',
	'pages_in_navigation_info' => 'Diese Seiten erscheinen in der Website Navigation, um die Reihenfolge der Seiten zu ver&auml;ndern, ziehe sie durch die Benutzung der Pfeile nach oben oder unten. Die Seite oben in der Liste wird als Erste in der Navigation angezeigt.', 
	'pages_outside_navigation' => 'Seiten au&szlig;erhalb der Navigation',
	'pages_outside_navigation_info' => 'Diese Seiten sind &ouml;ffentlich sichtbar, werden aber nicht in der Websitenavigation angezeigt.', 
	'pages_disabled' => 'Gesperrte Seiten',
	'pages_disabled_info' => 'Diese Seiten k&ouml;nnen nicht angezeigt werden.',
	'edit_user' => 'Bearbeite Benutzer',
	'create_user' => 'Neuen Benutzer erstellen',
	'create_user_info' => 'Eine E-Mail mit Angaben wie der Benutzer sich anmelden sowie Anmeldeinformationen mit einem zufallsgenerierten Passwort werden an den Benutzer gesandt.',
	'user_info' => 'Unten ist eine Liste mit Benutzern die Zugriff auf Pixie haben. Es k&ouml;nnen Benutzer &uuml;ber das Formular rechts hinzugef&uuml;gt werden die bei der Pflege der Website helfen. Der Administratorzugang ist hervorgehoben.',
	'user_delete_confirm' => 'Wirklich sicher den nachstehenden Benutzer zu l&ouml;schen:',
	'tags' => 'Tags',
	'upload' => 'Hochladen',
	'file_manager_info' => 'Max. Dateigr&ouml;&szlig;e ist 100MB. Bitte Geduld beim Hochladen gro&szlig;er Dateien.',
	'file_manager_latest' => 'Zuletzt hochgeladen',
	'file_manager_tagged' => 'Alle Dateien markiert:',
	'filename' => 'Dateiname',
	'filedate' => '&Auml;nderungsdatum',
	'results_from' => 'Ergebnisse von',
	'sure_delete_entry' => 'L&ouml;sche Eintrag',
	'from_the' => 'von der',
	'page_settings' => 'Seiteneinstellungen',
	'advanced' => 'Erweiterte',
	'your_site_has' => 'Deine Seite hat',
	'visitors_online' => 'Besucher online.',	
	'in_the_last' => 'Zuletzt',
	'site_visitors' => 'Seiten Besucher.',
	'page_views' => 'Seitenaufrufe.',
	'spam_attacks' => 'Spam Attacken',
	'last_login_on' => 'Letzte Anmeldung am:',
	'quick' => 'Quick',
	'links' => 'Links',
	'new_entry' => 'Hinzuf&uuml;gen ',
	'entry' => 'Eintrag.',
	'edit' => 'Bearbeiten ',
	'page' => 'Seite.',
	'blog' => 'Blog.',
	'search' => 'Suche',
	'forums' => 'Foren.',
	'downloads' => 'Downloads.',
	'create_backup' => 'Erstelle Sicherung',
	'button_backup' => 'Datenbank sichern',
	'page_type' => 'Seitentyp',
	'settings_page_new' => 'Erstelle eine neue',
	'total_records' => 'Gesamtzahl der Aufzeichnungen',
	'showing_from_record' => 'showing from record',
	'page(s)' => 'Seiten',
	'help' => 'Hilfe',
	'statistics' => 'Statistiken',
	'help_settings_page_type' => 'Beim Erstellen einer neuen Seite kann zw. folgenden drei Typen gew&auml;hlt werden:',
	'help_settings_page_dynamic' => 'Beispiele von dynamischen Seiten sind Blogs und Newsseiten. Diese Seiten unterst&uuml;tzen RSS Feeds und Kommentare.',
	'help_settings_page_static' => 'Eine statische Seite ist einfach ein Block von HTML (und - wenn gewollt - PHP). Diese Seiten sind geeignet f&uuml;r statische und selten zu aktualisierende Inhalte.',
	'help_settings_page_module' => 'Eine Modulseite f&uuml;gt der Seite spezielle Inhalte hinzu. Module k&ouml;nnen unter <a href="http://www.getpixie.co.uk">www.getpixie.co.uk</a> heruntergeladen werden. Ein Beispiel davon ist das Eventmodule. Manche Module sind mit Plugins geb&uuml;ndelt.',
	'help_settings_user_type' => 'Beim hinzuf&uuml;gen von Benutzern kann zw. folgenden drei Typen gew&auml;hlt werden:',
	'help_settings_user_admin' => '<b>Administrator</b> - Administratoren haben vollen Zugriff auf Pixie, sie k&ouml;nnen Einstellungen bearbeiten, Inhalte schreiben, und machen was immer sie wollen.',
	'help_settings_user_client' => '<b>Client</b> - Ein Klient kann nur Inhalte zu Pixie hinzuf&uuml;gen, sie k&ouml;nnen jedoch nicht die Einstellungen einer Seite bearbeiten.',
	'help_settings_user_user' => '<b>User</b> - Eine Pixie Benutzer hat nur Zugriff auf das Dashboard tab. Sie haben ein Pixie Profile und k&ouml;nnen die Website Statistiken einsehen.',
	'install_module' => 'Neues Modul oder Plugin installieren',
	'select_module' => 'W&auml;hle das Modul oder Plugin welches aktiviert werden soll',
	'all_installed' => 'Alle verf&uuml;gbaren Module und Plugins sind derzeit aktiv und installiert.',

	// system messages
	'error_save_settings' => 'Error saving settings.',
	'ok_save_settings' => 'Die neuen Einstellungen wurden gespeichert und &uuml;bernommen.',
	'comment_spam' => 'Spamkommentar geblockt.',
	'failed_login' => 'Fehlgeschlagener Loginversuch.',
	'login_exceeded' => 'Die maximale Anzahlen von Loginversuchen (3) bei Pixie wurde erreicht), bitte versuchees in 24 Stunden erneut.',
	'logins_exceeded' => '3 fehlerhafte Loginversuche erkannt. Pixie hat diese IP-Adresse f&uuml;r 24 Stunden blockiert.',
	'ok_login' => 'Benutzer ' . $username . ' eingeloggt.',
	'failed_protected_page' => 'Nicht m&ouml;glich die 404 Seite zu l&ouml;schen, m&ouml;glicherweise Hackversuch.',
	'ok_delete_page' => 'Erfolgreich gel&ouml;scht',
	'ok_delete_entry' => 'Erfolgreich Eintrag (#' . $delete . ') gel&ouml;scht von der',
	'failed_delete' => 'Nicht m&ouml;glich Eintrag (#' . $delete . ') zu l&ouml;schen.',
	'login_missing' => 'Bitte ben&ouml;tigte Informationen eingeben.',
	'login_incorrect' => 'Die Anmeldeinformationen sind nicht korrekt.',
	'forgotten_missing' => 'Es wurde kein g&uuml;ltiger Benutzername oder keine g&uuml;ltige E-Mail Adresse angegeben.',
	'forgotten_ok' => 'Ein neues Passwort wurde an die E-Mail Adresse gesandt.',
	'forgotten_log_error' => 'Zur&uuml;cksetzen des Passworts fehlgeschlagen.',
	'forgotten_log_ok' => 'Ein neues Passwort wurde gesendet an ',
	'rss_access_attempt' => 'Unautorisierter Zugriffsversuch auf einen privaten RSS Feed. Bitte inneralb von Pixie erneut f&uuml;r den Feed eintragen.',
	'unknown_error' => 'Etwas ging schief. Es ist m&ouml;glich (aber nicht wahrscheinlich), dass die Datenbank nicht erreichbar ist oder du mit dem falschen Fu&szlig; aufgestanden bist?',
	'unknown_edit_url' => 'Die angegebene URL zum Bearbeiten der Seite ist ung&uuml;ltig .',
	'unknown_referrer' => 'Unbekannte Herkunft.',
	'profile_name_error' => 'Bitte den vollen Namen angeben.', 
	'profile_email_error' => 'Bitte eine g&uuml;ltige E-Mail Adresse angeben.', 
	'profile_web_error' => 'Bitte eine g&uuml;ltige Webadresse angeben.', 
	'profile_ok' => 'Das Profil wurde aktualisiert.',
	'profile_password_error' => 'Pixie war es nicht m&ouml;glich das neue Passwort zu speichern. Warum nicht nochmal versuchen?',
	'profile_password_ok' => 'Das Pixie Passwort wurde aktualisiert. Es wird bei der n&auml;chsten Anmelden ben&ouml;tigt.',
	'profile_password_invalid' => 'Das angegebene und aktuell verwendete Passwort ist nicht korrekt.',
	'profile_password_invalid_length' => 'Passw&ouml;rter m&uuml;ssen min. 6 Zeichen lang sein.',
	'profile_password_match_error' => 'Die angegebenen Passw&ouml;rter stimmen nicht &uuml;berein.',
	'profile_password_missing' => 'Bitte alle ben&ouml;tigten Felder ausf&uuml;llen.',
	'site_name_error' => 'Die Seite ben&ouml;tigt einen Namen.',
	'site_url_error' =>  'Bitte eine g&uuml;ltige Website URL angeben.',
	'backup_ok' => 'Erfolgreich eine neue Sicherung der Datenbank erstellt.',
	'backup_delete_ok' => 'Die Sicherung erfolgreich gelöscht :',
	'backup_delete_no' => 'Die letzte Sicherung kann nicht gel&ouml;scht werden.',
	'backup_delete_error' => 'Pixie war es nicht m&ouml;glich die Sicherung zu l&ouml;schen.',
	'theme_ok' => 'Das neue Theme wurde f&uuml;r die Website &uuml;bernommen.',
	'theme_error' => 'Pixie war es nicht m&ouml;glich das Them zu &auml;ndern.',
	'all_content_deleted' => 'Der komplette Inhalt wurde gel&ouml;scht von der',
	'user_delete_ok' => 'wurde aus Pixie gel&ouml;scht.',
	'user_delete_error' => 'Es ist nicht m&ouml;glich den Benutzer zu l&ouml;schen',
	'user_name_missing' => 'Bitte einen Benutzernamen angeben.',
	'user_realname_missing' => 'Bitte einen Namen angeben.',
	'user_password_missing' => 'Bitte ein Passwort angeben.',
	'user_email_error' => 'Bitte eine g&uuml;ltige E-Mail Adresse angeben.',
	'user_update_ok' => 'Neue Einstellungen gespeichert f&uuml;r',
	'user_duplicate' => 'Ein Benutzer mit dem angebenen Benutzernamen existiert bereits, versuch einen anderen.',
	'user_new_ok' => 'Neuen Benutzer erstellt:',
	'saved_new_settings_for' => 'Einstellungen gespeichert f&uuml;r',
	'file_upload_error' => 'Pixie hat ein Problem die Dateiinformationen in die Datenbank einzuf&uuml;gen, die Datei wird vielleicht noch hochgeladen.',
	'file_upload_tag_error' => 'Bitte stelle sicher, dass die hochgeladenen Informationen einen tag besitzen.',
	'file_delete_ok' => 'Erfolgreich folgende Datei gel&ouml;scht:',
	'file_delete_fail' => 'Pixie war es nicht m&ouml;glich folgende Datei zu l&ouml;schen:',
	'form_build_fail' => 'Nicht m&ouml;glich ein editierbares Formular zu erstellen... wurden die korrekten Tabellendetails im Modul angegeben?',
	'date_error' => 'Ein ung&uuml;ltiges Datum wurden angegeben.',
	'email_error' => 'Bitte stelle sicher, dass eine g&uuml;ltige E-Mail Adresse angegeben wurde.',
	'url_error' => 'Bitte stelle sicher, dass eine g&uuml;ltige URL angegeben wurde.',
	'is_required' => 'ist ein ben&ouml;tigtes Feld.',
	'saved_new' => 'Neuen Eintrag gespeichert',
	'in_the' => 'auf der',
	'on_the' => 'auf der',
	'saved_new_page' => 'neue Seite erstellt',
	'save_update_entry' => 'Aktualisierungen gespeichert f&uuml;r Eintrag',
	'bad_cookie' => 'Das Cookie ist abgelaufen (stinkt!), es ist n&ouml;tig sich erneut anzumelden.',
	'no_module_selected' => 'Kein Modul oder Plugin zur Installation ausgew&auml;hlt, bitte nochmal versuchen.',
	'install_module_ok' => 'wurde erfolgreich installiert.',

	// helper
	'helper_plugin' => 'Es ist nicht m&ouml;glich Einstellungen von Plugins zu bearbeiten, es kann aber mittels des Schalters oben geleert oder gel&ouml;scht werden. Wenn ein Plugin gel&ouml;scht wird, z. Bsp. das Kommentarplugin, so es ist Besuchern der Website nicht m&ouml;glich Kommentare auf dynamischen Seiten zu hinterlassen.',
	'helper_nocontent' => 'Diese Seite hat keinen Inhalt, benutze den gr&uuml;nen Schalter oben um einen Ersten Eintrag hinzuzuf&uuml;gen (der gr&uuml;ne Schalter ist nicht im Kommentarplugin verf&uuml;gbar).',
	'helper_nopages' => 'Ein waiser Mann hat einmal gesagt, dass eine Website ohne Seiten wie ein Vogel ohne Fl&uuml;gel ist... es geht nirgens hin. Benutzer das Formular rechts um die Erste Seite zur Website hinzuzuf&uuml;gen. Wenn das einmal getan wurde, so wird diese aufschlussreiche Nachricht verschwinden.',
	'helper_nopages404' => 'Die Website hat eine Seite, diese Seite ist die 404 Error Seite und sie kann unten bearbeitet werden.',
	'helper_nopagesadmin' => 'Du kannst <a href="?s=settings">mehr Seiten hinzuf&uuml;gen \'Setup Stuff\' Sektion</a> von Pixie.', 
	'helper_nopagesuser' => 'Kontaktiere einen Site Administrator und bitte ihn einigen Seiten zur Website hinzuzuf&uuml;gen.',
	'helper_search' => 'Keine Eintr&auml;ge gefunden. Versuche eine erneute Suche.', 
	
	// navigation
	'nav1_settings' => 'Einstellungen',
	'nav1_publish' => 'Ver&ouml;ffentlichen',
	'nav1_home' => 'Dashboard',
	'nav2_home' => 'Heimat',
	'nav2_profile' => 'Profil',
	'nav2_security' => 'Passwort',
	'nav2_logs' => 'Logs',
	'nav2_delete' => 'L&ouml;sche Zugang',
	'nav2_pages' => 'Seiten',
	'nav2_files' => 'Datei Manager',
	'nav2_backup' => 'Sicherung',
	'nav2_users' => 'Benutzer',
	'nav2_blocks' => 'Bl&ouml;cke',
	'nav2_theme' => 'Theme',
	'nav2_site' => 'Website',
	'nav2_settings' => 'Einstellungen',

	// forms
	'form_login' => 'Anmelden',
	'form_username' => 'Benutzername',
	'form_password' => 'Passwort',
	'form_rememberme' => 'An diesem Computer angemeldet bleiben?',
	'form_forgotten' => 'Passwort vergessen?',
	'form_returnto' => 'Zur&uuml;ck zu ',
	'form_help_forgotten' => 'Bitte die E-Mail Adresse oder den Benutzernamen des Pixiezugangs angeben. Das Passwort wird zur&uuml;ckgesetzt und als E-Mail zugesandt.',
	'form_resetpassword' => 'Passwort zur&uuml;cksetzen',
	'form_name' => 'Voller Name',
	'form_usernameoremail' => 'Benutzername oder E-Mail Adresse',
	'form_telephone' => 'Telefon',
	'form_email' => 'E-Mail',
	'form_website' => 'Meine Website',
	'form_occupation' => 'Beruf',
	'form_address_street' => 'Stra&szlig;e',
	'form_address_town' => 'Stadt',
	'form_address_county' => 'Bundesland',
	'form_address_pcode' => 'Postleitzahl',
	'form_address_country' => 'Land',
	'form_address_biography' => 'Biographie',
	'form_fl1' => 'Meine beliebtesten Links',
	'form_button_save' => 'Speichern',
	'form_button_update' => 'Aktualisieren',
	'form_button_cancel' => 'Abbrechen',
	'form_button_install' => 'Installieren',
	'form_button_create_page' => 'Seite erzeugen',
	'form_current_password' => 'Aktuelles Passwort',
	'form_new_password' => 'Neues Passwort',
	'form_confirm_password' => 'Passwort best&auml;tigen',
	'form_tags' => 'Tags',
	'form_content' => 'Inhalt',
	'form_comments' => 'Kommentare',
	'form_public' => '&Ouml;ffentlich',
	'form_optional'=> '(optional)',
	'form_required'=> '*',
	'form_title'=> 'Titel',
	'form_posted'=> 'Datum &amp; Uhrzeit',
	'form_date' => 'Datum &amp; Uhrzeit',
	'form_help_comments' => 'Soll es Besuchern gestattet sein den Artikel zu kommentieren?',
	'form_help_public' => 'Soll dieser Post / diese Seite &ouml;ffentlich zug&auml;nglich sein? (W&auml;hle Nein um ihn/es als Entwurf zu speichern).',
	'form_help_tags' => 'Tags funktionieren wie Kategorien und erleichtern es Dinge zu finden. Trenne Schl&uuml;sselw&ouml;rter durch Leerzeichen.',
	'form_help_current_tags' => 'Ratschl&auml;ge:',
	'form_help_current_blocks' => 'Verf&uuml;gbare Bl&ouml;cke:',
	'form_php_warning' => '(Diese Seite enth&auml;lt PHP. Der Rich Text Editor wurde deaktiviert um ein ein sicheres Bearbeiten des erweiterten Codes zu erm&ouml;glichen)',
	'form_legend_site_settings' => 'Einstellungen f&uuml;r die Website anpassen',
	'form_site_name' => 'Name der Website',
	'form_help_site_name' => 'Wie soll die Website hei&szlig;en?',
	'form_page_name' => 'Slug/URL',
	'form_help_page_name' => 'Dies wird genutzt um die URL der Website zu erstellen (z.B. http://www.deineseite.de/).',
	'form_page_display_name' => 'Seitenanzeigename',
	'form_help_page_display_name' => 'Wie soll die Seite hei&szlig;en?',
	'form_page_description' => 'Seitenbeschreibung',
	'form_help_page_description' => 'Beschreibung der Seite.',
	'form_page_blocks' => 'Seitenbl&ouml;cke',
	'form_help_page_blocks' => 'Bl&ouml;cke sind extra Inhalte welche sich auch auf der Seite befinden. Die Namen der Bl&ouml;cke werden mit Leerzeichen getrennt. (Die Blockhandhabung wird in einer zuk&uuml;nftigen Version von Pixie verbessert).',
	'form_searchable' => 'Durchsuchbar',
	'form_help_searchable' => 'Soll die Seite in &ouml;ffentlichen Suchen auftauchen?',
	'form_posts_per_page' => 'Posts auf dieser Seite',
	'form_help_posts_per_page' => 'Wie viele Eintr&auml;ge sollen auf dieser Seite angezeigt werden?',
	'form_rss' => 'RSS',
	'form_help_rss' => 'Soll diese Seite einen RSS Feed ihres Inhalts erhalten?',
	'form_in_navigation' => 'In Navigation',
	'form_help_in_navigation' => 'Soll die Seite in der Websitenavigation angezeigt werden?',
	'form_site_url' => 'Website URL',
	'form_help_site_url' => 'Wie lautet die URL der Website? (e.g. http://www.deineseite.de/).',
	'form_site_homepage' => 'Homepage',
	'form_help_homepage' => 'Welche Seite sollen die Besucher als Erstes sehen?',
	'form_site_keywords' => 'Website Schl&uuml;sselw&ouml;rter',
	'form_help_site_keywords' => 'Schreibe eine Liste von Schl&uuml;sselw&ouml;rtern getrennt durch Kommas. (z. B. diese, Seite, rult).',
	'form_site_author' => 'Website Autor',
	'form_site_copyright' => 'Website Copyright',
	'form_site_curl' => 'Clean URLs?',
	'form_help_site_curl' => 'Soll die Seite clean URLs verwenden?  Clean URLs sehen aus wie www.deineseite.de/clean/ anstelle von www.deineseite.de?s=clean. Clean URLs funktionieren nur auf Linux Hosts.',
	'form_legend_pixie_settings' => 'Passe an wie sich Pixie verhalten soll',
	'form_pixie_language' => 'Sprache',
	'form_help_pixie_language' => 'W&auml;hle die Sprache die verwendet werden soll.',
	'form_pixie_timezone' => 'Zeitzone',
	'form_help_pixie_timezone' => 'W&auml;hle die aktuelle Zeitzone so dass Pixie die korrekte Zeit anzeigen kann.',
	'form_pixie_dst' => 'Sommerzeit',
	'form_help_pixie_dst' => 'Soll Pixie die Uhrzeit automatisch entsprechend der Sommerzeit anpassen?',
	'form_pixie_date' => 'Datum &amp; Uhrzeit',
	'form_help_pixie_date' => 'W&auml;hle das bevorzugte Datums- und Uhrzeitformat.',
	'form_pixie_rte' => 'Rich Text Editor',
	'form_help_pixie_rte' => 'Soll der Ckeditor Texteditor verwendet werden? (Es macht das Bearbeiten von Textpassagen wirklich einfacher, ist aber nicht von allen Browsern voll unterst&uuml;tzt).',
	'form_pixie_logs' => 'Logs laufen ab',
	'form_help_pixie_logs' => 'Nach wieviel Tagen sollen die Logdateien bereinigt werden?',
	'form_pixie_sysmess' => 'Systemnachricht',
	'form_help_pixie_sysmess' => 'Diese Nachricht wird jedem Pixiebenutzer angezeigt wenn er sich bei Pixie anmeldet.',
	'form_help_settings_page_type' => 'Was f&uuml;r ein Seitentyp soll erzeugt werden?',
	'form_legend_user_settings' => 'Benutzereinstellungen',
	'form_user_username' => 'Benutzername',
	'form_help_user_username' => 'Benutzername k&ouml;nnen keine Leerzeichen entalten.',
	'form_user_realname' => 'Voller Name',
	'form_help_user_realname' => 'Gib den vollen Namen des Benutzers an.',
	'form_user_permissions' => 'Berechtigungen',
	'form_help_user_permissions' => 'Welche Berechtigungen soll der Benutzer haben?',
	'form_help_user_permissions_block' => 'Welcher Typ von Benutzer wird dies sein?',
	'form_button_create_user' => 'Benutzer erstellen',
	'form_upload_file' => 'Datei',
	'form_help_upload_file' => 'W&auml;hle eine Datei vom Computer die hochgeladen werden soll.',
	'form_help_upload_tags' => 'Schl&uuml;sselw&ouml;rter mit Leerzeichen trennen.',
	'form_upload_replace_files' => 'Dateien ersetzen?', 
	'form_help_upload_replace_files' => 'Wird versucht eine bestehende Datei zu ersetzen?',
	'form_search_words' => 'Schl&uuml;sselw&ouml;rter',
	'form_privs' => 'Seitenberechtigungen',
	'form_help_privs' => 'Wem soll es erlaubt sein die Seite zu bearbeiten?', 
	
	//email
	'email_newpassword_subject' => 'Pixie (' . str_replace('http://', "", $site_url) . ') - Neues Passwort',
	'email_changepassword_subject' => 'Pixie (' . str_replace('http://', "", $site_url) . ') - Passwort ge&auml;ndert',
	'email_newpassword_message' => 'Das Passwort wurde gesetzt zu: ',
	'email_account_close_message' => 'Der Pixiezugang wurde gesperrt @ ' . $site_url . '. Bitte kontaktiere f&uuml;r weitere Informationen den Administrator der Website.',
	'email_account_close_subject' => 'Pixie (' . str_replace('http://', "", $site_url) . ') - Zugang gesperrt',
	'email_account_edit_subject' =>	'Pixie (' . str_replace('http://', "", $site_url) . ') - Wichtige Informationen zum Zugang',
	'email_account_new_subject' => 'Pixie (' . str_replace('http://', "", $site_url) . ') - Neuer Zugang',
		
	//front end
	'continue_reading' => 'Weiterlesen',
	'permalink' => 'Permalink',
	'theme' => 'Theme',
	'navigation' => 'Navigation',
	'skip_to_content' => 'Springe zu Inhalt &raquo;',
	'skip_to_nav' => 'Springe zu Navigation &raquo;',
	'by' => 'von',
	'on' => 'an',
	'view' => 'Zeige',
	'profile' => 'Profil',
	'all_posts_tagged' => 'Alle Posts getagged',
	'permalink_to' => 'Permanent Link zu',
	'comments' => 'Kommentare',
	'comment' => 'Kommentar',
	'no_comments' => 'Noch keine Kommentare...',
	'comment_closed' => 'Kommentare sind jetzt gesperrt.',
	'comment_thanks' => 'Danke f&uuml;r den Kommentar.',
	'comment_leave' => 'Schreibe einen Kommentar',
	'comment_form_info' => 'Kommentarformular ist <a href="http://gravatar.com" title="Get a Gravatar">Gravatar</a> und <a href="http://www.cocomment.com" title="Verfolge und teile die Kommentare">coComment</a> aktiviert.',
	'comment_name' => 'Name',
	'comment_email' => 'E-Mail',
	'comment_web' => 'Website',
	'comment_button_leave' => 'Kommentar eintragen',
	'comment_name_error' => 'Bitte Namen eintragen.',
	'comment_email_error' => 'Bitte eine g&uuml;ltige E-Mail Adresse angeben.',
	'comment_web_error' => 'Bitte eine g&uuml;ltige Webadresse angeben.',
	'comment_throttle_error' => 'Sie sind das Veröffentlichen von Kommentaren zu schnell, zu verlangsamen.',
	'comment_comment_error' => 'Bitte einen Kommentar eingeben.',	
	'comment_save_log' => 'Kommentar zu: ',
	'tagged' => 'Tagged',
	'tag' => 'Tag',
	'popular' => 'Am beliebtesten',
	'archives' => 'Archiv',
	'posts' => 'Posts',
	'last_updated' => 'Letzte Aktualisierung',
	'edit_post' => 'Post bearbeiten',
	'edit_page' => 'Diese Seite bearbeiten',
	'popular_posts' => 'Beliebteste Posts',
	'next_post' => 'N&auml;chster Post',
	'next_page' => 'N&auml;chste Seite',
	'previous_post' => 'Vorheriger Post',
	'previous_page' => 'Vorherige Seite',
	'dynamic_page' => 'Seite',
	'user_name_dup' => 'Fehler beim Speichern der neuen ' . $table_name . ' Eintrag. Mögliche doppelte Benutzernamen.',
	'user_name_save_ok' => 'Gespeichert neuen Benutzer ' . $uname . ', ein temporäres Passwort wurde erstellt (<b>' . $password . '</b>).',
	'file_del_filemanager_fail' => 'Löschen der Datei fehlgeschlagen. Bitte löschen Sie die Datei manuell.',
	'upload_filemanager_fail' => 'Hochladen fehlgeschlagen. Bitte überprüfen Sie, dass der Ordner ist beschreibbar und hat die richtigen Berechtigungen gesetzt.',
	'filemanager_max_upload' => 'Ihr Host-Server akzeptiert Uploads für die maximale Dateigröße von : ',
	'ck_select_file' => 'Klicken Sie auf eine Datei mit Namen einen Link erstellen.',
	'ck_toggle_advanced' => 'Toggle erweiterten Modus'
);
?>