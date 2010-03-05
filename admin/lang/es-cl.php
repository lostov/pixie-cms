<?phpif (!defined('DIRECT_ACCESS')) { header( 'Location: ../../' ); exit(); }//*****************************************************************//// Pixie: The Small, Simple, Site Maker.                           //// ----------------------------------------------------------------//// Licence: GNU General Public License v3                          //// Title: Language - Spanish (Catalan)				   //// This is not native Spanish, it is catalonian Spanish.	   //// Author: Carlos ElÃ­as                                            ////*****************************************************************//if (!isset($delete)) { $delete = NULL; }if (!isset($username)) { $username = NULL; }if (!isset($uname)) { $uname = NULL; }if (!isset($password)) { $password = NULL; }if (!isset($table_name)) { $table_name = NULL; }if (!isset($site_url)) { $site_url = NULL; }$lang = array(    // system    'skip_to' => 'Ir al contenido',    'view_site' => 'Ver sitio',    'logout' => 'Salir',    'license' => 'Liberdo bajo la',    'tag_line' => 'El petit, simple, creador de la web',    'latest_referrals' => 'Últimes referències',    'latest_activity' => 'Darrera activitat',    'feed_subscribe' => 'Suscribirse',    'rss_feed' => 'RSS Feed',    'when' => 'Quan?',    'who' => 'qui?',    'what' => 'què?',    'from' => 'des de?',    'switch_to' => 'Cambiar a',    'a_few_seconds' => 'Algunos segundos',    'a_minute' => '1 minuto',    'minutes' => 'minutos',    'a_hour' => '1 hora',    'hours' => 'horas',    'a_day' => '1 dia',    'days' => 'dia',    'ago' => 'fa.',    'user' => 'Usuario',    'to' => 'a',    'database_backup' => 'Respaldar BD',    'database_info' => 'Este seguro de que su base de datos sea respaldada frecuentemente, use el boton de la derecha para respaldar manualmente su base de datos. Los respaldos se guardan en /files/sqlbackups/ y puede ser descargado desde la lista de abajo. Los ultimos respaldos estan destacados.',    'database_backups' => 'Respaldos',    'download' => 'Descargar',    'delete' => 'Borrar',    'delete_file' => 'Eliminar arxiu?',    'theme_info' => 'Els temes instal actualment s\'enumeren a continuació. Podeu instal lar més temes mitjançant la pujada d\'un tema a l\'admin / carpeta de temes. Més temes poden ser descarregats de <a href="http://www.getpixie.co.uk"> www.getpixie.co.uk </ a> o vostè pot crear fàcilment el seu propi utilitzant CSS. El tema del lloc actual es ressalta.',    'theme_pick' => 'Escoge un tema para tu sitio',    'theme_apply' => 'Aplicar este tema',    'sure_delete_page' => 'Esta seguro que desea eliminar',    'sure_empty_page' => 'Esta seguro que desea limpiar',    'settings_page' => '(Settings Page)',    'settings_plugin' => 'plugin',    'plugins' => 'Plugins',    'plugins_info' => 'Connectors portar funcionalitat extra a certes pàgines del seu lloc web.',    'empty' => 'Limpiar',    'oops' => 'Ooops!',    'feature_disabled' => 'Esta caracteristica esta deshabilitada, la proxima versionde Pixie la tendra.',    'pages_in_navigation' => 'Paginas en el menu',    'pages_in_navigation_info' => 'Estas paginas aparecen en el menu de su pagina, Para cambiar el orden tomelas con el mouse y arrestrelas a la posicion deseada. La pagina que este primero en la lista es la que aparece primero en el menu.',    'pages_outside_navigation' => 'Paginas fuera del menu',    'pages_outside_navigation_info' => 'Estas paginas estan visibles para el publico pero no aparecen en el menu de su sitio',     'pages_disabled' => 'Paginas deshabilitadas',    'pages_disabled_info' => 'Estas paginas no son visibles',    'edit_user' => 'Editar Usuario',    'create_user' => 'Crear nuevo usuario',    'create_user_info' => 'Un email sera enviado al nuevo usuario con los detalles de como ingresar al sitio, ademas se le generara un password aleatorio',    'user_info' => 'Abajo hay una lista de los usuarios que tienen accesso a Pixie. Puedes crear mas usuarios para ayudarle a mantener su sitio usando el formulario de la derecha, la cuenta super usuario esta destacada.',    'user_delete_confirm' => 'Esta seguro que desea eliminar el usuario:',    'tags' => 'Etiquetas',    'upload' => 'Subido',    'file_manager_info' => 'La mida màxima s\'estableix en 100Mb. Porfavor sea paciente cuando sube archivos grandes',    'file_manager_latest' => 'Ultimos Subidos',    'file_manager_tagged' => 'Todos los archivos etiquetados:',    'filename' => 'Nombre de archivo',    'filedate' => 'Modificar fecha',    'results_from' => 'Resoltado formulario',    'sure_delete_entry' => 'Eliminar entrada',    'from_the' => 'desde el',    'page_settings' => 'Configuració de pàgina',    'advanced' => 'Avanzado',    'your_site_has' => 'Su sitio tiene',    'visitors_online' => 'visita(s) online.',        'in_the_last' => 'En els últims',    'site_visitors' => 'Visitas en el sitio.',    'page_views' => 'Visites a la pàgina.',    'spam_attacks' => 'Ataques Spam',    'last_login_on' => 'Darrera entrada en :',    'quick' => '(Quick Links)',    'links' => 'Links',    'new_entry' => 'Afegeix un ',    'entry' => '(Entry number)', //another grammar error this goes first in spanish e.g. "Entrada Nombre"    'edit' => 'Editar ',    'page' => 'pàgina.',    'blog' => 'Blog.',    'search' => 'Buscar',    'forums' => 'Foros.',    'downloads' => 'Descargas.',    'create_backup' => 'Crear Respaldo',    'button_backup' => 'Respaldar la Base de datos',    'page_type' => 'Tipo de pagina',    'settings_page_new' => 'Crear nueva',    'total_records' => 'Todos los guardados',    'showing_from_record' => 'Mostrar guardados',    'page(s)' => 'pagina(s)',    'help' => 'Ayuda',    'statistics' => 'Estadisticas',    'help_settings_page_type' => 'Cuando cree una pagina nueva puede escoger estros tres tipos:',    'help_settings_page_dynamic' => 'Ejemplos de paginas dinamicas son los blogs y noticias, estas paginas tiene soporte RSS y comentarios',    'help_settings_page_static' => 'Una pagina estatica es simplemente un bloque HTML (o PHP si prefiere), Estas paginas son las paginas que raramente debe actualizar',    'help_settings_page_module' => 'Una pàgina de mòdul afegeix el contingut específic del seu lloc. Els mòduls poden ser descarregats de <a href="http://www.getpixie.co.uk"> www.getpixie.co.uk </ a>, un exemple que és el mòdul d\'esdeveniments. Els mòduls són de vegades inclòs amb plugins.',    'help_settings_user_type' => 'Quan s\'afegeix un nou usuari pot triar entre tres tipus :',    'help_settings_user_admin' => '<b>Administrador</b> - Los Administradores tienen accesso a todo los parametros de Pixie, ellos pueden editar las confuguraciones, escribir contenido y hacer lo que ellos deseen.',    'help_settings_user_client' => '<b>Cliente</b> - Un client només pot afegir contingut a Pixie, no són capaços de modificar la configuració d\'un lloc',    'help_settings_user_user' => '<b>Usuario</b> - Un usuario de Pixie solo tiene accesso al Tablero, ellos tienen un perfil Pixie y pueden ver las estadisticas del sitio',    'install_module' => 'Instalar un nuevo plugin o modulo',    'select_module' => 'Seleccione el modulo o plugin que desea activar',    'all_installed' => 'Todos los plugins o modulos disponibles se encuentran instalados y activados.',    // system messages    'error_save_settings' => 'Error en desar la configuració.',    'ok_save_settings' => 'La nova configuració s\'han salvat i aplicada.',    'comment_spam' => 'Comentario spam bloqueado.',    'failed_login' => 'Fallo al ingresar al sitio.',    'login_exceeded' => 'Usted a excedido el la cantidad maxima de intentos (3) para ingresar a Pixie, porfavor intente en 24 horas.',    'logins_exceeded' => 'Se detectaron 3 intentos fallidos al ingresar, Pixie a bloqueado su IP por 24 horas.',    'ok_login' => 'Usuario ' . $username . ' ingresÃ³ al sistema.',    'failed_protected_page' => 'No se puede eliminar la pagina 404, puede ser un posible intento de hack.',    'ok_delete_page' => 'Se elimino correctamente la',    'ok_delete_entry' => 'Se elimino correctamente la entrada (#' . $delete . ') de el',    'failed_delete' => 'No se puede eliminar (#' . $delete . ').',    'login_missing' => 'Porfavor provea la informacion de ingreso requerida.',    'login_incorrect' => 'Los datos de su ingreso son incorrectos.',    'forgotten_missing' => 'El usuario o email no es valido.',    'forgotten_ok' => 'Un nuevo password fue enviado a su email.',    'forgotten_log_error' => 'Error al intentar reiniciar el password.',    'forgotten_log_ok' => 'Un nuevo password fue enviado a ',    'rss_access_attempt' => 'Acesso denegado al intentar acceder a un RSS privado, Usted debera subscribirse nuevamente desde Pixie.',    'unknown_error' => 'Algo salio mal. Es posible (pero poco probable) que la base de datos se haya caido o usted se levanto con el pie izquierdo hoy',    'unknown_edit_url' => 'L\'adreça URL proporcionada per a editar aquesta pàgina no és vàlida.',    'unknown_referrer' => 'Referencia Desconosida.',    'profile_name_error' => 'Porfavor introduzca su nombre completo.',     'profile_email_error' => 'Porfavor introduzca un email valido.',     'profile_web_error' => 'Porfavor introduzca un sitio web valido.',     'profile_ok' => 'El seu perfil ha estat actualitzat.',    'profile_password_error' => 'A Pixie le fue imposible guardar su nuevo password, Intente nuevamente',    'profile_password_ok' => 'Su password de Pixie fue actualizado, Lo necesitara la proxima ves que ingresa al sitio.',    'profile_password_invalid' => 'No ingreso un password actual valido.',    'profile_password_invalid_length' => 'Los passwords deben tener por lo menos 6 caracteres.',    'profile_password_match_error' => 'Los passwords que ingreso no coinciden.',    'profile_password_missing' => 'Porfavor ingresa toda la informacion requerida',    'site_name_error' => 'Su sitio necesita un nombre.',    'site_url_error' =>  'Porfavor introdusca una URL valida.',    'backup_ok' => 'Se creo con exito el respaldo de la base de datos.',    'backup_delete_ok' => 'Se elimino correctamente el respaldo:',    'backup_delete_no' => 'No puede eliminar el respaldo mas reciente.',    'backup_delete_error' => 'Pixie no puede eliminar este respaldo.',    'theme_ok' => 'Se le aplico el tema a su sitio.',    'theme_error' => 'Pixie no puede cambiar el tema.',    'all_content_deleted' => 'Todo el contenido fue eliminado de',    'user_delete_ok' => 'Fue eliminado de Pixie.',    'user_delete_error' => 'No se puede eliminar usuario',    'user_name_missing' => 'Porfavor ingrese un usuario.',    'user_realname_missing' => 'Porfavor ingrese un nombre.',    'user_password_missing' => 'Porfavor ingrese un password.',    'user_email_error' => 'Porfavor ingrese un email valido.',    'user_update_ok' => 'Configuracions guardades nou',    'user_duplicate' => 'Un usuario con ese nombre ya existe, pruebe otro.',    'user_new_ok' => 'Creado nuevo usuario:',    'saved_new_settings_for' => 'Guardada la nueva configuracion para',    'file_upload_error' => 'Pixie hi havia un problema de la inserció de la informació d\'arxiu a la base de dades, l\'arxiu es pot haver pujat encara.',    'file_upload_tag_error' => 'Porfavor asegurese de etiquetar sus archivos subidos.',    'file_delete_ok' => 'Se elimino correctamente:',    'file_delete_fail' => 'Pixie no pudo eliminar:',    'form_build_fail' => 'o es pot construir una forma editable ... Sabia vostè subministrar la informació taula correcta en el mòdul?',    'date_error' => 'Ingreso una fecha invalida.',    'email_error' => 'Asegurese de introducir un email valido.',    'url_error' => 'Asegurese de introducir una URL valida.',    'is_required' => 'requerido.',    'saved_new' => 'Guardada nueva entrada',    'in_the' => 'en la',    'on_the' => 'en la',    'saved_new_page' => 'Creada nueva pagina',    'save_update_entry' => 'Guardados los cambios de su entrada',    'bad_cookie' => 'Cookie de sessió ha caducat. Vostè haurà d\'ingressar de nou.',    'no_module_selected' => 'No selecciono ningun modulo o plugin para instalar, intente denuevo.',    'install_module_ok' => 'se instalo correctamente.',    // helper    'helper_plugin' => 'Vostè no pot modificar la configuració dels connectors, que no obstant això es pot buidar un plugin o eliminar usant els botons de dalt. Si esborreu un plugin, per exemple el plugin de comentaris, els usuaris ja no serà capaç de deixar comentaris a les seves pàgines dinàmiques.',    'helper_nocontent' => 'Aquesta pàgina no té cap contingut, utilitzeu el botó verd de dalt per afegir la primera entrada (en el botó verd no està disponible en el plugin de comentaris).',    'helper_nopages' => 'Un home savi va dir una vegada que un lloc web sense pàgines és com un ocell sense ales ... la seva no va enlloc. Utilitzeu el formulari a la dreta per afegir la primera pàgina del seu lloc. Una vegada que vostè ha fet que aquest missatge profund desapareixerà.',    'helper_nopages404' => 'Al seu lloc només compta amb una pàgina, aquesta pàgina és la pàgina d\'error 404 i es pot editar més endavant.',    'helper_nopagesadmin' => 'Podeu <a href="?s=settings"> afegir més pàgines en les coses \ "Configuració \" secció </ a> de Pixie.',    'helper_nopagesuser' => 'En contacte amb l\'administrador del lloc i els demanem que afegir pàgines al seu lloc web.',    'helper_search' => 'No s\'han trobat. Proveu a cercar de nou.',        // navigation    'nav1_settings' => 'Configuració',    'nav1_publish' => 'Publicar',    'nav1_home' => 'Tablero',    'nav2_home' => 'Inicio',    'nav2_profile' => 'Perfil',    'nav2_security' => 'Password',    'nav2_logs' => 'Registros',    'nav2_delete' => 'Eliminar Cuenta',    'nav2_pages' => 'Paginas',    'nav2_files' => 'Administrador de Archivos',    'nav2_backup' => 'Respaldo',    'nav2_users' => 'Usuarios',    'nav2_blocks' => 'Bloques',    'nav2_theme' => 'Tema',    'nav2_site' => 'Sitio',    'nav2_settings' => 'Configuració',    // forms    'form_login' => 'Ingresar',    'form_username' => 'Nombre de usuario',    'form_password' => 'Password',    'form_rememberme' => 'Romandre connectat a aquest ordinador?',    'form_forgotten' => 'Heu oblidat la contrasenya?',    'form_returnto' => 'Volver a ',    'form_help_forgotten' => 'Porfavor ingrese su email o nombre de usuario para su cuenta Pixie. Su password sera enviado a su correo.',    'form_resetpassword' => 'Generar nuevamente el Password',    'form_name' => 'Nombre Completo',    'form_usernameoremail' => 'Nombre de usuario o Email',    'form_telephone' => 'Telèfon',    'form_email' => 'Email',    'form_website' => 'Sitio web',    'form_occupation' => 'Trabajo',    'form_address_street' => 'Direcció',    'form_address_town' => 'Ciudad',    'form_address_county' => 'Comtat',    'form_address_pcode' => 'Codi Postal',    'form_address_country' => 'Pais',    'form_address_biography' => 'Biografia',    'form_fl1' => 'Sus Links Favoritos',    'form_button_save' => 'Guardar',    'form_button_update' => 'Actualizar',    'form_button_cancel' => 'Cancelar',    'form_button_install' => 'Instalar',    'form_button_create_page' => 'Crea una pàgina',    'form_current_password' => 'Password Actual',    'form_new_password' => 'Nuevo Password',    'form_confirm_password' => 'Confirmar Password',    'form_tags' => 'Etiquetas',    'form_content' => 'Contenido',    'form_comments' => 'Comentarios',    'form_public' => 'Pública',    'form_optional'=> '(opcional)',    'form_required'=> '*',    'form_title'=> 'Titulo',    'form_posted'=> 'Fecha &amp; Hora',    'form_date' => 'Fecha &amp; Hora',    'form_help_comments' => 'Li agrada que la gent pugui fer comentaris sobre aquest missatge?',    'form_help_public' => 'T \'ha agradat aquest post / pàgina sigui visible pel públic? (Seleccioneu No per guardar-lo com un esborrany.)',    'form_help_tags' => 'Etiquetes funcionen com les categories i fer les coses més fàcils de trobar. Introduïu les paraules clau separades per espais.',    'form_help_current_tags' => 'Sugerencias:',    'form_help_current_blocks' => 'Bloques Disponibles:',    'form_php_warning' => '(Aquesta pàgina conté PHP. L\'editor de text enriquit s\'ha deshabilitat per permetre l\'edició d\'aquest codi de seguretat avançada.)',    'form_legend_site_settings' => 'Ajustar la configuració del seu lloc web',    'form_site_name' => 'Nombre del sitio',    'form_help_site_name' => 'Què li agradaria que el seu lloc es diu?',    'form_page_name' => 'Nombre de la URL',    'form_help_page_name' => 'Això serà utilitzat per crear la URL de la pàgina (per exemple, http://www.seu-lloc.com/ <b> somepage </ b> /.)',    'form_page_display_name' => 'Nombre de la presentació pàgina',    'form_help_page_display_name' => 'Què li agradaria que el seu lloc es diu?',    'form_page_description' => 'De descripció de pàgina',    'form_help_page_description' => 'Escriure una descripció de la teva pàgina.',    'form_page_blocks' => 'Bloques de la pàgina',    'form_help_page_blocks' => 'Los Bloques son areas extra de contenido. Los nombres de los Bloques deberan estar separados por espacios. (El manejo de Bloques sera mejorado en versiones futuras de Pixie).',    'form_searchable' => 'Indexable',    'form_help_searchable' => 'Us agrada aquesta pàgina per aparèixer a les cerques del públic?',    'form_posts_per_page' => 'Entradas en esta pàgina',    'form_help_posts_per_page' => 'Quantes visites vols mostra en aquesta pàgina?',    'form_rss' => 'RSS',    'form_help_rss' => 'Us agrada aquesta pàgina per generar un feed RSS del seu contingut?',    'form_in_navigation' => 'En el menu',    'form_help_in_navigation' => 'De Navegació',    'form_site_url' => 'URL del lloc',    'form_help_site_url' => 'Quina és la URL del teu lloc web? (per exemple, http://www.seu-lloc.com/alguna-carpeta/.)',    'form_site_homepage' => 'Pàgina d\'inici',    'form_help_homepage' => 'Què pàgina del seu lloc web vols que vegin els usuaris en primer lloc?',    'form_site_keywords' => 'Palabras clave del sitio',    'form_help_site_keywords' => 'Escriba palabras clave separadas por coma. (ej: este, sitio, la, lleva).',    'form_site_author' => 'Autor del sitio',    'form_site_copyright' => 'Copyright del sitio',    'form_site_curl' => 'URLs Claras?',    'form_help_site_curl' => 'Vol que el seu lloc per a usar URL nets? Un URL net sembla www.www.seu-lloc.com/net/ com apposed a www.seu-lloc.com?s=net. Neteja de treball URL a Linux només els hosts.',    'form_legend_pixie_settings' => 'Configure la forma en la que Pixie se comporta',    'form_pixie_language' => 'Lenguage',    'form_help_pixie_language' => 'Seleccione el lenguage que desea utilizar.',    'form_pixie_timezone' => 'Zona horaria',    'form_help_pixie_timezone' => 'Seleccione su zona horaria para que se muestre la hora correctamente.',    'form_pixie_dst' => 'Horario de ahorro de energia',    'form_help_pixie_dst' => 'Us agradaria Pixie per ajustar automàticament el temps d\'acord amb l\'horari d\'estiu?',    'form_pixie_date' => 'Fecha &amp; Hora',    'form_help_pixie_date' => 'Seleccione su formato preferido para fecha y hora.',    'form_pixie_rte' => 'Editor de texto',    'form_help_pixie_rte' => 'Li agradaria utilitzar l\'editor de text Ckeditor? (Es fa l\'edició del seu lloc realment fàcil.)',    'form_pixie_logs' => 'Tiempo en el que expiren los registros (Logs)',    'form_help_pixie_logs' => 'Després de dies que vols esborrar el fitxer de registre? (Logs)',    'form_pixie_sysmess' => 'Mensaje del Sistema',    'form_help_pixie_sysmess' => 'Este mensaje sera mostrado para cada usuario de Pixie al ingresar al sistema',    'form_help_settings_page_type' => 'Quin tipus de pàgina que t\'agradaria fer?',    'form_legend_user_settings' => 'Configuració d\'usuari',    'form_user_username' => 'Nombre de usuario',    'form_help_user_username' => 'Los nombres de usuario no pueden llevar espacios',    'form_user_realname' => 'Nombre Completo',    'form_help_user_realname' => 'Ingrese el nombre completo del usuario',    'form_user_permissions' => 'Permisos',    'form_help_user_permissions' => 'Què permisos li agradaria tenir aquest usuari?',    'form_help_user_permissions_block' => 'Quin tipus d\'usuari serà això?',    'form_button_create_user' => 'Crear usuario',    'form_upload_file' => 'Archivo',    'form_help_upload_file' => 'Seleccione un archivo de su computador para subir.',    'form_help_upload_tags' => 'Palabras clave separadas por espacios',    'form_upload_replace_files' => 'Reemplaceu els arxius?',     'form_help_upload_replace_files' => 'Estàs tractant de reemplaçar un fitxer existent?',    'form_search_words' => 'Palabras clave',    'form_privs' => 'Permisos de la Pàgina',    'form_help_privs' => 'Qui li agradaria ser capaç d\'editar aquesta pàgina?',         //email    'email_newpassword_subject' => 'Nuevo password para (' . str_replace('http://', "", $site_url) . ') ',    'email_changepassword_subject' => 'Password cambiado (' . str_replace('http://', "", $site_url) . ') ',    'email_newpassword_message' => 'Su password fue enviado a: ',    'email_account_close_message' => 'Su cuenta de Pixie fue cerrada en ' . $site_url . '. Poseu-vos en contacte amb l\'administrador del lloc per més informació.',    'email_account_close_subject' => 'Cuenta cerrada (' . str_replace('http://', "", $site_url) . ') ',    'email_account_edit_subject' =>    'Informació important sobre el seu compte (' . str_replace('http://', "", $site_url) . ') ',    'email_account_new_subject' => 'Nueva cuenta (' . str_replace('http://', "", $site_url) . ') ',        //front end    'continue_reading' => 'Seguir llegint',    'permalink' => 'Permalink',    'theme' => 'Tema',    'navigation' => 'Navegació',    'skip_to_content' => 'Ir al contenido &raquo;',    'skip_to_nav' => 'Salta a la navegació &raquo;',    'by' => 'Por',    'on' => 'el',    'view' => 'Ver',    'profile' => 'perfil',    'all_posts_tagged' => 'todas las entradas con etiquetas',    'permalink_to' => 'Link permanente a',    'comments' => 'Comentarios',    'comment' => 'Comentario',    'no_comments' => 'Sin comentarios...',    'comment_closed' => 'Comentarios cerrados.',    'comment_thanks' => 'Gracias por tu comentario.',    'comment_leave' => 'Dejar un comentario',    'comment_form_info' => 'El formulario de comentarios posee <a href="http://gravatar.com" title="Consigue un Gravatar">Gravatar</a> y <a href="http://www.cocomment.com" title="Sigue y comparte tus comentarios">coComment</a>.',    'comment_name' => 'Nombre',    'comment_email' => 'Email',    'comment_web' => 'Web',    'comment_button_leave' => 'Enviar comentario',    'comment_name_error' => 'Porfavor introduzca su Nombre.',    'comment_email_error' => 'Porfavor introduzca un Email valido.',    'comment_web_error' => 'Porfavor introduzca un sitio web valido.',    'comment_throttle_error' => 'Ets publicant comentaris massa de pressa, més a poc a poc.',    'comment_comment_error' => 'Introduzca un comentario.',        'comment_save_log' => 'Comentado en : ',    'tagged' => 'Etiquetas',    'tag' => 'Etiqueta',    'popular' => 'Els més populars',    'archives' => 'Archivos',    'posts' => 'entradas',    'last_updated' => 'Darrera actualització',    'edit_post' => 'Editar esta entrada',    'edit_page' => 'Editar esta pàgina',    'popular_posts' => 'Entradas populares',    'next_post' => 'Siguiente entrada',    'next_page' => 'Siguiente pàgina',    'previous_post' => 'Entrada anterior',    'previous_page' => 'Pàgina anterior',    'dynamic_page' => 'Pàgina',	'user_name_dup' => 'S\'ha produït un error en desar el entrada ' . $table_name . ' nou. Possible, el nom d\'usuari duplicats.',	'user_name_save_ok' => 'Guardades per l\'usuari nou ' . $uname . ', una contrasenya temporal s\'ha creat (<b>' . $password . '</b>).',	'file_del_filemanager_fail' => 'Eliminació de fitxers no. Si us plau, esborreu manualment l\'arxiu.',	'upload_filemanager_fail' => 'Upload failed. Please check that the folder is writeable and has the correct permissions set.',	'filemanager_max_upload' => 'El servidor d\'acollida acceptarà que es pugin per la mida màxima d\'arxiu d\' : ',	'ck_select_file' => 'Feu clic a un fitxer pel seu nom per crear un vincle.',	'ck_toggle_advanced' => 'Activar mode avançat');?> 