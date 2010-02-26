<?php
if (!defined('DIRECT_ACCESS')) { header( 'Location: ../../' ); exit(); }
//*****************************************************************//
// Pixie: The Small, Simple, Site Maker.                           //
// ----------------------------------------------------------------//
// Licence: GNU General Public License v3                   	   //
// Title: Language File (Česky). 
// Author: Daniel Čekan (DJDaca), djdaca(zavinac)orangesoft.cz     //
//*****************************************************************//
if (!isset($delete)) { $delete = NULL; }
if (!isset($username)) { $username = NULL; }
$lang = array(
	// system
	'skip_to' => 'Skoč na obsah',
	'view_site' => 'Zobrazit stránku',
	'logout' => 'Odhlásit',
	'license' => 'Vyvinuto pod licencí',
	'tag_line' => 'Malé jednoduché CMS',
	'latest_referrals' => 'Poslední reference',
	'latest_activity' => 'Poslední aktivita',
	'feed_subscribe' => 'Odebírat',
	'rss_feed' => 'RSS Feed',
	'when' => 'Kdy?',
	'who' => 'Kdo?',
	'what' => 'Co?',
	'from' => 'Odkud?',
	'switch_to' => 'Přepnout na',
	'a_few_seconds' => '5 vteřin',
	'a_minute' => '1 minuta',
	'minutes' => 'minuty',
	'a_hour' => '1 hodina',
	'hours' => 'hodiny',
	'a_day' => '1 den',
	'days' => 'dny',
	'ago' => 'později.',
	'user' => 'Uživatel',
	'to' => 'do',
	'database_backup' => 'Záloha databáze',
	'database_info' => 'Ujistěte se, že databáze je zálohována často. Použijte tlačítko zálohování databáze. Zálohy jsou uloženy v souborech / sqlbackups / a lze je stáhnout z níže uvedeného seznamu. Vaše nejnovější zálohy jsou zvýrazněny.',
	'database_backups' => 'Záloha',
	'download' => 'Stáhnout',
	'delete' => 'Smazat',
	'delete_file' => 'Smazat soubor?',
	'theme_info' => 'Aktuálně nainstalované motivy jsou uvedeny níže. Můžete nainstalovat další motivy nahráním téma do admin / themes složky. Více témat, je možné stáhnout z <a href="http://www.getpixie.co.uk"> www.getpixie.co.uk </ a> nebo si můžete snadno vytvořit své vlastní pomocí CSS. Aktuální téma je zvýrazněno.',
	'theme_pick' => 'Vyberte si motiv pro vaše stránky',
	'theme_apply' => 'Použij tento motiv',
	'sure_delete_page' => 'Jste si jisti, že chcete smazat',
	'sure_empty_page' => 'Jste si jisti, že chcete prázdný',
	'settings_page' => 'stránku',
	'settings_plugin' => 'doplňek nastavení',
	'plugins' => 'Doplňky',
	'plugins_info' => 'Doplňky přinesou nové funkce na určité stránky vašeho webu.',
	'empty' => 'Prázdný',
	'oops' => 'Sakra!',
	'feature_disabled' => 'Tato funkce je momentálně vypnuta. Je třeba počkat na příští verzi Pixie!',
	'pages_in_navigation' => 'Stránky v navigaci',
	'pages_in_navigation_info' => 'Tyto stránky se zobrazí ve vašich webových stránkách v navigaci, změnit pořadí vašich stránek můžete přetáhnutím nahoru a dolů pomocí šipek. Stránka v horní části seznamu se objeví první ve vaší navigaci.', 
	'pages_outside_navigation' => 'Stránky mimo navigaci',
	'pages_outside_navigation_info' => 'Tyto stránky jsou viditelné na veřejnosti, ale nejsou uvedeny na vašich webových stránkách v navigaci.', 
	'pages_disabled' => 'Zakázané stránky',
	'pages_disabled_info' => 'Tyto stránky nejsou viditelné.',
	'edit_user' => 'Editovat Uživatele',
	'create_user' => 'Vytvořit nového uživatele',
	'create_user_info' => 'Email,na který vám bude zaslán nový uživatel s podrobnostmi o tom, jak se přihlásit a náhodně vygenerované heslo.',
	'user_info' => 'Níže je seznam uživatelů, kteří mají přístup k Pixie. Můžete přidat více uživatelů, které pomáhají spravovat své stránky pomocí formuláře na pravé straně. Super uživatelský účet, je zvýrazněn.',
	'user_delete_confirm' => 'Jste si jisti že chcete vymazat uživatele:',
	'tags' => 'Tagy',
	'upload' => 'Nahrát',
	'file_manager_info' => 'Maximální velikost souboru je nastavena na 100Mb. Prosím o trpělivost při nahrávání velkých souborů.',
	'file_manager_latest' => 'Poslední uploady',
	'file_manager_tagged' => 'Všechny označené soubory:',
	'filename' => 'Jméno souboru',
	'filedate' => 'Datum změny',
	'results_from' => 'Výsledky z',
	'sure_delete_entry' => 'Smazat záznam',
	'from_the' => 'od',
	'page_settings' => 'Nastavení stránek',
	'advanced' => 'Rozšířené',
	'your_site_has' => 'Vaše stránky',
	'visitors_online' => 'návštěvník(ů) online.',	
	'in_the_last' => 'V posledním',
	'site_visitors' => 'Návštěvníků stránek.',
	'page_views' => 'Shlédnutí.',
	'spam_attacks' => 'Spam utoků',
	'last_login_on' => 'Naposledy přihlášen:',
	'quick' => 'Rychlé',
	'links' => 'Odkazy',
	'new_entry' => 'Přidat nový ',
	'entry' => 'záznam.',
	'edit' => 'Editovat ',
	'page' => 'stránka.',
	'blog' => 'Blog.',
	'search' => 'Vyhledávání',
	'forums' => 'Diskuze.',
	'downloads' => 'Stažení.',
	'create_backup' => 'Vytvořit zálohu',
	'button_backup' => 'Zazálohuj databázy',
	'page_type' => 'Typ stránky',
	'settings_page_new' => 'Vytvořit novou',
	'total_records' => 'Celkem záznamů',
	'showing_from_record' => 'zobrazeno od záznamu',
	'page(s)' => 'stránka(y)',
	'help' => 'Nápověda',
	'statistics' => 'Statistiky',
	'help_settings_page_type' => 'Při přidávání nové stránky si můžete vybrat ze tří typů:',
	'help_settings_page_dynamic' => 'Příklady dynamických stránek jsou blogy a zpravodajské stránky. Tyto stránky podporují kanály RSS a komentování.',
	'help_settings_page_static' => 'Statická stránka je prostý blok HTML kódu (PHP chcete-li). Tyto stránky jsou vhodné pro statický nebo zřídka aktualizovaný obsah.',
	'help_settings_page_module' => 'Modul stránky přidává konkrétní obsah vašich stránek. Moduly lze stáhnout z <a href="http://www.getpixie.co.uk"> www.getpixie.co.uk </a>, jehož vzor je událostí modulu. Moduly jsou někdy spojeny s pluginy.',
	'help_settings_user_type' => 'Při přidávání nového uživatele si můžete vybrat ze tří typů:',
	'help_settings_user_admin' => '<b> Administrator </ b> - Správci mají přístup k celé Pixie, mohou upravit nastavení, psát obsah a dělat cokoliv se jim zlíbí.',
	'help_settings_user_client' => '<b> Klient </ b> - klient může jen přidat obsah do Pixie, nejsou schopni upravit nastavení webu.',
	'help_settings_user_user' => '<b>Uživatel</b> - Pixie uživatel má přístup pouze ke kartě Nástěnka, mají profil Pixie a vidí statistiky.',
	'install_module' => 'Instaluj nový doplněk nebo modul',
	'select_module' => 'Vyberte modul nebo plugin který chcete aktivovat',
	'all_installed' => 'Všechny dostupné moduly a pluginy jsou v současné době aktivní a nainstalované.',

	// system messages
	'error_save_settings' => 'Chyba při ukládání nastavení.',
	'ok_save_settings' => 'Vaše nové nastavení bylo uspěšně uloženo a aplikováno.',
	'comment_spam' => 'Spam v komentáři blokován.',
	'failed_login' => 'Neúspěšný pokus o přihlášení.',
	'login_exceeded' => 'Překročili jste maximální množství pokusů (3) pro přihlášení k Pixie, prosím, zkuste to znovu za 24 hodin.',
	'logins_exceeded' => '3 pokusy o přihlášení se nezdařilo zjistit. Pixie zablokoval této IP adresy po dobu 24 hodin.',
	'ok_login' => 'Uživatel ' . $username . ' přihlášen.',
	'failed_protected_page' => 'Nelze smazat stránku 404, možná pokus o hack.',
	'ok_delete_page' => 'Úspěšně smazáno',
	'ok_delete_entry' => 'Úspěšně vymazán záznam (#' . $delete . ') z',
	'failed_delete' => 'Nelze smazat položku (#' . $delete . ').',
	'login_missing' => 'Uveďte, prosím, požadované přihlašovací údaje.',
	'login_incorrect' => 'Vaše přihlašovací údaje jsou nesprávné.',
	'forgotten_missing' => 'Neposkytl jste platné uživatelské jméno nebo e-mailovou adresu.',
	'forgotten_ok' => 'Nové heslo bylo zasláno na vaši e-mailovou adresu.',
	'forgotten_log_error' => 'Neúspěšný pokus o obnovení hesla.',
	'forgotten_log_ok' => 'Nové heslo bylo zasláno na',
	'rss_access_attempt' => 'Neoprávněný pokus o přístup k soukromým RSS. Možná se budete muset přihlásit znovu k odběru v administraci Pixie.',
	'unknown_error' => 'Něco se pokazilo. Je možné (ale málo pravděpodobné) že spadla databáze (nebo jste vstal nesprávnou nohou z postele :o))?',
	'unknown_edit_url' => 'URL poskytnuté pro upravu této stránky není platné.',
	'unknown_referrer' => 'Neznámý Referrer.',
	'profile_name_error' => 'Prosím vlošte vaše jméno a příjmení.', 
	'profile_email_error' => 'Uveďte prosím platný email.', 
	'profile_web_error' => 'Uveďte prosím platnou webovou adresu.', 
	'profile_ok' => 'Váš profil byl upraven.',
	'profile_password_error' => 'Pixie se nepodařilo uložit své nové heslo. Proč to nezkusit znovu?',
	'profile_password_ok' => 'Vaše Pixie heslo bylo aktualizováno. Budete ho muset použít při příštím  přihlášení.',
	'profile_password_invalid' => 'Špatné současné heslo.',
	'profile_password_invalid_length' => 'Heslo musí mít alespon 6 znaků.',
	'profile_password_match_error' => 'Hesla nesouhlasí.',
	'profile_password_missing' => 'Uveťe prosím všechny povinné informace.',
	'site_name_error' => 'Vaše stránky musí mít jméno.',
	'site_url_error' =>  'Uveďte prosím platnou URL adresu.',
	'backup_ok' => 'Uspěšně vytvořena nová záloha databáze.',
	'backup_delete_ok' => 'Uspěšně smazána záloha databáze:',
	'backup_delete_no' => 'Nelze odstranit poslední zálohy.',
	'backup_delete_error' => 'Pixie nebyl schopen odstranit zálohu.',
	'theme_ok' => 'Téma bylo aplikováno na vaše webové stránky.',
	'theme_error' => 'Pixie nebyl schopen změnit vaše téma.',
	'all_content_deleted' => 'Veškerý obsah byl smazán z ',
	'user_delete_ok' => 'byl eliminován z Pixie.',
	'user_delete_error' => 'Nemohu odstranit uživatele.',
	'user_name_missing' => 'Uveďte prosím uživatelské jméno.',
	'user_realname_missing' => 'Uveďte prosím vaše jméno a příjmení.',
	'user_password_missing' => 'Uveďte prosím vaše heslo.',
	'user_email_error' => 'Uveďte prosím platnou e-mailovou adresu.',
	'user_update_ok' => 'Uložené nové nastavení pro uživatele ',
	'user_duplicate' => 'Uživatel s tímto přilašovacím jménem již existuje, prosím zvolte jiné.',
	'user_new_ok' => 'Vytvořen nový uživatel:',
	'saved_new_settings_for' => 'Uložené nové nastavení pro ',
	'file_upload_error' => 'Pixie má problém uložit informace o souboru do databáze, soubor může být již nahrán.',
	'file_upload_tag_error' => 'Ujisťete se prosím že jste soubor otagovaly.',
	'file_delete_ok' => 'Uspěšně smazán soubor:',
	'file_delete_fail' => 'Pixie nebyl schopen odstranit soubor:',
	'form_build_fail' => 'Nelze vytvořit upravitelný formulář... nastavil jsi správné detaily tabulky ve svém modulu?',
	'date_error' => 'Uvedl jsi nesprávné datum.',
	'email_error' => 'Ujistěte se že jste zadali platnou e-mailovou adresu.',
	'url_error' => 'Ujistěte se že jste zadali platnou adresu URL.',
	'is_required' => 'je povinné pole.',
	'saved_new' => 'Nový záznam uložen',
	'in_the' => 'v',
	'on_the' => 'o',
	'saved_new_page' => 'Vytvořena nová stránka',
	'save_update_entry' => 'Uložené aktualizace pro vstup',
	'bad_cookie' => 'Cookie se skazil (smrdí!), Budete se muset znovu přihlásit.',
	'no_module_selected' => 'Nevybral jsi žádný modul / plugin pro instalaci prosím zkus to znova.',
	'install_module_ok' => 'byl úspěšně nainstalován.',

	// helper
	'helper_plugin' => 'Můžete upravit nastavení doplnků, můžete vyprázdnit doplněk nebo odstranit ho použitím tlačítka nahoře. Pokud odstraníte doplněk například komentářů návštěvníci vašich stránek již nebudou moci komentovat články.',
	'helper_nocontent' => 'Tato stránka nemá žádný obsah, použijte zelené tlačítko nad přidat první vstup (zelené tlačítko není k dispozici na doplňku pro komentáře).',
	'helper_nopages' => 'Moudrý člověk kdysi řekl, že web bez stránek je jako pták bez křídel ... to ptostě nejde. Použijte formulář vpravo pro přidání první stránky na váš web. Poté co to uděláte, tato zpráva zmizí.',
	'helper_nopages404' => 'Váš web jednu stránku má, tou stránkou je chyba 404 a můžete ji editovat níže.',
	'helper_nopagesadmin' => 'Můžete <a href="?s=settings">přidat více stránek v sekci \'Nastavení\'</a> Pixie.', 
	'helper_nopagesuser' => 'Kontaktujte administrátora těchto stránek a zeptejte se ho zda by nechtěl přidat nějaké vaše stránky na web.',
	'helper_search' => 'Žádné záznamy nebyly nalezeny. Zkuste hledat znovu.', 
	
	// navigation
	'nav1_settings' => 'Nastavení',
	'nav1_publish' => 'Publikovat',
	'nav1_home' => 'Nástěnka',
	'nav2_home' => 'Domů',
	'nav2_profile' => 'Profil',
	'nav2_security' => 'Heslo',
	'nav2_logs' => 'Logy',
	'nav2_delete' => 'Smazat učet',
	'nav2_pages' => 'Stránky',
	'nav2_files' => 'Správce souborů',
	'nav2_backup' => 'Záloha',
	'nav2_users' => 'Uživatelé',
	'nav2_blocks' => 'Bloky',
	'nav2_theme' => 'Témata',
	'nav2_site' => 'Web',
	'nav2_settings' => 'Nastavení',

	// forms
	'form_login' => 'Přihlášení',
	'form_username' => 'Uživatelské jméno',
	'form_password' => 'Heslo',
	'form_rememberme' => 'Pamatovat si přihlášení na tomto počítači?',
	'form_forgotten' => 'Zapoměl jste heslo?',
	'form_returnto' => 'Vrátit se do ',
	'form_help_forgotten' => 'Prosím, zadejte své uživatelské jméno nebo e-mail pro Váš účet Pixie. Vaše heslo bude resetováno a zasláno na Váš e-mail.',
	'form_resetpassword' => 'Resetovat heslo',
	'form_name' => 'Jméno a příjmení',
	'form_usernameoremail' => 'Uživatelské jméno nebo e-mailová adresa',
	'form_telephone' => 'Telefon',
	'form_email' => 'Email',
	'form_website' => 'Můj Web',
	'form_occupation' => 'Zaměstnání',
	'form_address_street' => 'Ulice',
	'form_address_town' => 'Město',
	'form_address_county' => 'Stát',
	'form_address_pcode' => 'PSČ',
	'form_address_country' => 'Země',
	'form_address_biography' => 'Životopis',
	'form_fl1' => 'Moje oblíbené odkazy',
	'form_button_save' => 'Uložit',
	'form_button_update' => 'Upravit',
	'form_button_cancel' => 'Cancel',
	'form_button_install' => 'Instalovat',
	'form_button_create_page' => 'Vytvořit stránku',
	'form_current_password' => 'Současné heslo',
	'form_new_password' => 'Nové heslo',
	'form_confirm_password' => 'Potvrď heslo',
	'form_tags' => 'Tagy',
	'form_content' => 'Obsah',
	'form_comments' => 'Komentáře',
	'form_public' => 'Veřejné',
	'form_optional'=> '(volitelné)',
	'form_required'=> '*',
	'form_title'=> 'Titulek',
	'form_posted'=> 'Datum &amp; Čas',
	'form_date' => 'Datum &amp; Čas',
	'form_help_comments' => 'Chcete aby lidé se mohli vyjádřit k tomuto příspěvku?',
	'form_help_public' => 'Chcete tento příspěvek/stránku zveřejnit? (vyberte ne pro uložení jako koncept).',
	'form_help_tags' => 'Tagy fungují jako kategorie a dělat věci snáze najde. Zadejte klíčová slova oddělená mezerami.',
	'form_help_current_tags' => 'Návrhy:',
	'form_help_current_blocks' => 'Bloky jsou k dispozici:',
	'form_php_warning' => '(Tato stránka obsahuje PHP. WYSIWYG editor, byl zakázán, aby byla umožněna bezpečná editace tohoto pokročilého kódu)',
	'form_legend_site_settings' => 'Upravte nastavení pro vaše webové stránky',
	'form_site_name' => 'Jméno webstránky',
	'form_help_site_name' => 'Jak byste chtěli své stránky nazvat?',
	'form_page_name' => 'SEO/URL',
	'form_help_page_name' => 'Toto bude použito k vytvoření seo URL Vaší stránky (např. http://www.yoursite.com/<b> nejakastranka </b>/).',
	'form_page_display_name' => 'Nadpis stránky',
	'form_help_page_display_name' => 'Jak chcete stránku pojmenovat?',
	'form_page_description' => 'Popis stánky',
	'form_help_page_description' => 'Vyplnte popis Vaší stránky.',
	'form_page_blocks' => 'Bloky stránky',
	'form_help_page_blocks' => 'Bloky jsou další obsah, na stránce. Blok názvy by měly být odděleny mezerami. (manipulace s bloky se zdokonalí v budoucích verzích Pixie).',
	'form_searchable' => 'Prohledávatelný',
	'form_help_searchable' => 'Chcete tuto stránku zobrazit ve veřejném vyhledávání?',
	'form_posts_per_page' => 'Články na této stránce',
	'form_help_posts_per_page' => 'Kolik byste chtěli ukázat záznamů na této stránce?',
	'form_rss' => 'RSS',
	'form_help_rss' => 'Chtěli byste tuto stránku generovat s RSS jejího obsahu?',
	'form_in_navigation' => 'V navigaci',
	'form_help_in_navigation' => 'Chtěli byste tuto stránku zobrazovat ve Vaší webové navigaci?',
	'form_site_url' => 'Web URL',
	'form_help_site_url' => 'Jaké je URL Vašeho webu? (např http://www.yoursite.com/nejakaslozka/).',
	'form_site_homepage' => 'Homepage',
	'form_help_homepage' => 'Kterou stránku chcete aby Vaši návsštěvníci viděli první?',
	'form_site_keywords' => 'Klíčová slova stránky',
	'form_help_site_keywords' => 'Napište seznam klíčových slov oddělených čárkami. (např. tato, stránka, pravidla).',
	'form_site_author' => 'Autor webu',
	'form_site_copyright' => 'Copyright webu',
	'form_site_curl' => 'Čistá URLs?',
	'form_help_site_curl' => 'Chtěli byste, aby Váš web používal čistá URL? Čistá URL vypadá jako www.yoursite.com/clean/ fungují jako www.yoursite.com?s=clean.',
	'form_legend_pixie_settings' => 'Upravit způsob chování Pixie',
	'form_pixie_language' => 'Jazyk',
	'form_help_pixie_language' => 'Zadejte jazyk který chcete použít v Pixie.',
	'form_pixie_timezone' => 'Časová zóna',
	'form_help_pixie_timezone' => 'Vyberte aktuální časové zóny ad Pixie může zobrazit správný čas.',
	'form_pixie_dst' => 'Letní čas',
	'form_help_pixie_dst' => 'Chtěli byste Pixie donutit k automatickému nastavení času v závislosti na letní čas?',
	'form_pixie_date' => 'Datum &amp; Čas',
	'form_help_pixie_date' => 'Vyberte svůj upřednostňovaný formát data a času.',
	'form_pixie_rte' => 'WYSIWYG editor',
	'form_help_pixie_rte' => 'Chtěli byste používat textový editor Ckeditor? (To umožňuje snadnou editaci textu, ale není plně podporován ve všech prohlížečích).',
	'form_pixie_logs' => 'Logy vyprší',
	'form_help_pixie_logs' => 'Po kolika dnech chcete vymazat log soubory?',
	'form_pixie_sysmess' => 'Systemová zpráva',
	'form_help_pixie_sysmess' => 'Tato zpráva se zobrazí každému uživateli při přihlášení do Pixie.',
	'form_help_settings_page_type' => 'Jaký typ stránky byste rád vytvořil?',
	'form_legend_user_settings' => 'Nastavení uživatelů',
	'form_user_username' => 'Uživatelské jméno',
	'form_help_user_username' => 'Uživatelské jméno nesmí obsahovat mezery.',
	'form_user_realname' => 'Jméno a příjmení',
	'form_help_user_realname' => 'Vyplňte jméno a příjmení uživatele.',
	'form_user_permissions' => 'Práva',
	'form_help_user_permissions' => 'Jaká práva chcete aby tento uživatel měl?',
	'form_help_user_permissions_block' => 'Jaký typ uživatele to bude?',
	'form_button_create_user' => 'Vytvořit uživatele',
	'form_upload_file' => 'Soubor',
	'form_help_upload_file' => 'Vyberte soubor z vašeho počítače.',
	'form_help_upload_tags' => 'Klíčová slova oddělená mezerami.',
	'form_upload_replace_files' => 'Nahradit soubory?', 
	'form_help_upload_replace_files' => 'Zkoušíte nahradit existují soubor?',
	'form_search_words' => 'Klíčová slova pro vyhledávání',
	'form_privs' => 'Práva webu',
	'form_help_privs' => 'Kdo bude mít možnost upravit tuto stránku?', 
	
	//email
	'email_newpassword_subject' => 'Pixie (' . str_replace('http://', "", $site_url) . ') - Nové heslo',
	'email_changepassword_subject' => 'Pixie (' . str_replace('http://', "", $site_url) . ') - Změněné heslo',
	'email_newpassword_message' => 'Vaše heslo bylo nastaveno na: ',
	'email_account_close_message' => 'Váš pixie učet byl zrušen @ '.$site_url.'. Prosím kontaktujte administrátora ad Vám řekne proč.',
	'email_account_close_subject' => 'Pixie (' . str_replace('http://', "", $site_url) . ') - Učet zrušen',
	'email_account_edit_subject' =>	'Pixie (' . str_replace('http://', "", $site_url) . ') - Důležité informace týkající se vašeho účtu',
	'email_account_new_subject' => 'Pixie (' . str_replace('http://', "", $site_url) . ') - Nový učet',
	
	//front end
	'continue_reading' => 'Pokračovat ve čtení',
	'permalink' => 'Permalink',
	'theme' => 'Téma',
	'navigation' => 'Navigace',
	'skip_to_content' => 'Skoč na obsah &raquo;',
	'skip_to_nav' => 'Skoč na navigaci &raquo;',
	'by' => 'Podle',
	'on' => 'na',
	'view' => 'Přečti',
	'profile' => 'profil',
	'all_posts_tagged' => 'všechny články otagovány',
	'permalink_to' => 'Trvalý odkaz na',
	'comments' => 'Komentáře',
	'comment' => 'Komentář',
	'no_comments' => 'Žádné komentáře...',
	'comment_closed' => 'Komentáře jsou uzavřeny.',
	'comment_thanks' => 'Děkujeme za Váš komentář.',
	'comment_leave' => 'Zanechat komentář',
	'comment_form_info' => 'Comment form is <a href="http://gravatar.com" title="Get a Gravatar">Gravatar</a> and <a href="http://www.cocomment.com" title="Track and share your comments">coComment</a> enabled.',
	'comment_name' => 'Jméno',
	'comment_email' => 'Email',
	'comment_web' => 'Website',
	'comment_button_leave' => 'Vložit komentář',
	'comment_name_error' => 'Uveďte prosím své jméno.',
	'comment_email_error' => 'Uveďte prosím, platnou e-mailovou adresu.',
	'comment_web_error' => 'Uveďte prosím platnou webovou adresu.',
	'comment_throttle_error' => 'Jste odesíláním komentářů příliš rychle, zpomalte.',
	'comment_comment_error' => 'Uveďte prosím komentář.',	
	'comment_save_log' => 'Komentovali: ',
	'tagged' => 'Taggováno',
	'tag' => 'Tag',
	'popular' => 'Nejpopulárnější',
	'archives' => 'Archiv',
	'posts' => 'příspěvky',
	'last_updated' => 'Naposledy aktualizováno',
	'edit_post' => 'Editovat tento příspěvek',
	'edit_page' => 'Editovat tuto stránku',
	'popular_posts' => 'Nejpopulárnější Stránky',
	'next_post' => 'Další příspěvek',
	'next_page' => 'Další stránka',
	'previous_post' => 'Předchozí článek',
	'previous_page' => 'Předchozí stránka',
	'dynamic_page' => 'Stránka',
	'user_name_dup' => 'Chyba při ukládání nového ' . $table_name . ' vstup. Možné duplicitní uživatelské jméno.',
	'user_name_save_ok' => 'Uložené nový uživatel ' . $uname . ', dočasné heslo byl vytvořen (<b>' . $password . '</b>).',
	'file_del_filemanager_fail' => 'Soubor smazat nepodařilo. Prosím, ručně odstranit soubor.',
	'upload_filemanager_fail' => 'Nahrávání selhalo. Zkontrolujte, že složka je zapisovat a má správná oprávnění nastavit.',
	'filemanager_max_upload' => 'Váš hostitelský server bude přijímat obrázky pro maximální velikost souboru : ',
	'ck_select_file' => 'Klikněte na název souboru pro vytvoření odkazu.',
	'ck_toggle_advanced' => 'Přepnout pokročilý režim'
);
?>