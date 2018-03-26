<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package local_o365
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Integración de Microsoft Office 365';
$string['acp_title'] = 'Panel de control de administración de Office&nbsp;365';
$string['acp_healthcheck'] = 'Comprobación de estado';
$string['acp_parentsite_name'] = 'Moodle';
$string['acp_parentsite_desc'] = 'Sitio para datos de cursos de Moodle.';
$string['calendar_user'] = 'Calendario personal (usuario)';
$string['calendar_site'] = 'Calendario de todo el sitio';
$string['erroracpauthoidcnotconfig'] = 'Establezca las credenciales de la aplicación en auth_oidc primero.';
$string['erroracplocalo365notconfig'] = 'Configure local_o365 primero.';
$string['erroracpnosptoken'] = 'No tiene una ficha de SharePoint disponible y no se pudo obtener una.';
$string['errorhttpclientbadtempfileloc'] = 'No se pudo abrir la ubicación temporal para almacenar el archivo.';
$string['errorhttpclientnofileinput'] = 'No hay parámetros del archivo en httpclient::put';
$string['errorcouldnotrefreshtoken'] = 'No se pudo actualizar la ficha';
$string['errorcreatingsharepointclient'] = 'No se pudo obtener el cliente de api de SharePoint';
$string['errorchecksystemapiuser'] = 'No se pudo abrir una ficha de usuario de API del sistema, ejecute la comprobación de estado, asegúrese de que se esté ejecutando el cron de Moodle y actualice la API del sistema si es necesario.';
$string['erroro365apibadcall'] = 'Error en la llamada a API.';
$string['erroro365apibadcall_message'] = 'Error en la llamada a la API: {$a}';
$string['erroro365apibadpermission'] = 'No se encontró el permiso';
$string['erroro365apicouldnotcreatesite'] = 'Problema al crear el sitio.';
$string['erroro365apicoursenotfound'] = 'No se pudo encontrar el curso.';
$string['erroro365apiinvalidtoken'] = 'Ficha no válida o vencida.';
$string['erroro365apiinvalidmethod'] = 'Método http no válido pasado a llamada de api';
$string['erroro365apinoparentinfo'] = 'No se pudo encontrar la información de la carpeta principal';
$string['erroro365apinotimplemented'] = 'Este debe ser anulado.';
$string['erroro365apinotoken'] = 'No posee una ficha para el recurso y usuario brindados, y no se pudo obtener una. ¿Venció la ficha actualizada del usuario?';
$string['erroro365apisiteexistsnolocal'] = 'El sitio ya existe, pero no se pudo encontrar el registro local.';
$string['errorcouldnotcreatespgroup'] = 'No se pudo crear el grupo de SharePoint.';
$string['eventapifail'] = 'Falla de API';
$string['eventcalendarsubscribed'] = 'El usuario se suscribió a un calendario';
$string['eventcalendarunsubscribed'] = 'El usuario canceló la suscripción a un calendario';
$string['healthcheck_fixlink'] = 'Haga clic aquí para corregirlo.';
$string['healthcheck_systemapiuser_title'] = 'Usuario de API del sistema';
$string['healthcheck_systemtoken_result_notoken'] = 'Moodle no tiene una ficha para comunicarse con Officenbsp;365 como usuario de API del sistema. Generalmente, esto puede resolverse restableciendo el usuario de API del sistema.';
$string['healthcheck_systemtoken_result_noclientcreds'] = 'No hay credenciales de aplicación presentes en el complemento OpenID Connect. Sin estas credenciales, Moodle no puede establecer ninguna comunicación con Officenbsp;365. Haga clic aquí para visitar la página de configuración e ingresar sus credenciales.';
$string['healthcheck_systemtoken_result_badtoken'] = 'Ocurrió un problema al comunicarse con Officenbsp;365 como usuario de API del sistema. Generalmente, esto puede resolverse restableciendo el usuario de API del sistema.';
$string['healthcheck_systemtoken_result_passed'] = 'Moodle puede comunicarse con Officenbsp;365 como usuario de API del sistema.';
$string['settings_aadsync'] = 'Sincronizar usuarios con Azure AD';
$string['settings_aadsync_details'] = 'Cuando está habilitado, los usuarios de Moodle y Azure AD se sincronizan según las opciones anteriores.<br /><br /><b>Nota: </b>El trabajo de sincronización se ejecuta en el cron de Moodle y sincroniza 1000 usuarios por vez. De manera predeterminada, se ejecuta una vez por día a las 1:00 a. m. en la zona horaria local del servidor. Para sincronizar conjuntos de usuarios más grandes más rápidamente, puede aumentar la frecuencia de la tarea <b>Sincronizar usuarios con Azure AD</b> utilizando la <a href="{$a}">página Administración de tareas programadas.</a><br /><br />Para obtener instrucciones más detalladas, consulte la <a href="https://docs.moodle.org/30/en/Office365#User_sync">documentación de sincronización de usuarios</a><br /><br />';
$string['settings_aadsync_create'] = 'Crear cuentas en Moodle para usuarios en Azure AD';
$string['settings_aadsync_delete'] = 'Eliminar cuentas previamente sincronizadas en Moodle cuando se eliminen de Azure AD';
$string['settings_aadsync_match'] = 'Hacer coincidir a los usuarios preexistentes de Moodle con las cuentas del mismo nombre en Azure AD<br /><small>Esto buscará el nombre de usuario en Office 365 y el nombre de usuario en Moodle e intentará encontrar coincidencias. Las coincidencias distinguen mayúsculas de minúsculas y omiten el abonado de Office 365. Por ejemplo, BoB.SmiTh en Moodle coincidirá con bob.smith@example.onmicrosoft.com. Los usuarios que coincidan tendrán sus cuentas de Moodle y Office conectadas y podrán usar todas las características de integración de Office 365/Moodle. El método de autenticación del usuario no cambiará al menos que se habilite el ajuste a continuación.</small>';
$string['settings_aadsync_matchswitchauth'] = 'Cambiar usuarios coincidentes a la autenticación de Office 365 (OpenID Connect)<br /><small>Esto requiere que se habilite el ajuste "Hacer coincidir" de arriba. Cuando se hace coincidir a un usuario, al habilitar este ajuste se cambia el método de autenticación a OpenID Connect. Deberán iniciar sesión en Moodle con las credenciales de Office 365. <b>Nota:</b> Asegúrese de que el complemento de autenticación de OpenID Connect esté habilitado si desea utilizar este ajuste.</small>';
$string['settings_aadtenant'] = 'Abonado de Azure AD';
$string['settings_aadtenant_details'] = 'Se utiliza para identificar a su organización dentro de Azure AD. Por ejemplo: "contoso.onmicrosoft.com"';
$string['settings_azuresetup'] = 'Configuración de Azure';
$string['settings_azuresetup_details'] = 'Esta herramienta verifica con Azure para garantizar que todo esté configurado correctamente. También puede corregir algunos errores comunes.';
$string['settings_azuresetup_update'] = 'Actualizar';
$string['settings_azuresetup_checking'] = 'Verificando...';
$string['settings_azuresetup_missingperms'] = 'Permisos faltantes:';
$string['settings_azuresetup_permscorrect'] = 'Los permisos son correctos.';
$string['settings_azuresetup_errorcheck'] = 'Ocurrió un error al intentar verificar la configuración de Azure.';
$string['settings_azuresetup_unifiedheader'] = 'API unificada';
$string['settings_azuresetup_unifieddesc'] = 'La API unificada reemplaza a las API específicas de la aplicación existentes. Si está disponible, debe agregarla a la aplicación Azure para estar preparado para el futuro. Eventualmente, reemplazará a la API de legado.';
$string['settings_azuresetup_unifiederror'] = 'Ocurrió un error al verificar el soporte de la API unificada.';
$string['settings_azuresetup_unifiedactive'] = 'API unificada activa.';
$string['settings_azuresetup_unifiedmissing'] = 'No se encontró la API unificada en esta aplicación.';
$string['settings_azuresetup_legacyheader'] = 'API de Office&nbsp;365';
$string['settings_azuresetup_legacydesc'] = 'La API de Office&nbsp;365 está compuesta de API específicas de la aplicación.';
$string['settings_azuresetup_legacyerror'] = 'Ocurrió un error al verificar la configuración de la API de Office&nbsp;365.';
$string['settings_creategroups'] = 'Crear grupos de usuarios';
$string['settings_creategroups_details'] = 'Si está habilitado, creará y mantendrá un grupo de profesores y alumnos en Office&nbsp;365 para cada curso del sitio. Esto creará todas las ejecuciones de cron de cada grupo necesario (y agregará todos los miembros actuales). Después de esto, se mantendrá la membresía de grupos a medida que los usuarios se inscriban o cancelen la inscripción desde cursos de Moodle.<br /><b>Nota: </b>Esta característica requiere agregar la API unificada de Office&nbsp;365 a la aplicación agregada en Azure. <a href="https://docs.moodle.org/30/en/Office365#User_groups">Instrucciones y documentación de configuración.</a>';
$string['settings_o365china'] = 'Office&nbsp;365 para China';
$string['settings_o365china_details'] = 'Marque esta opción si está utilizando Office&nbsp;365 para China.';
$string['settings_debugmode'] = 'Grabar mensajes de depuración';
$string['settings_debugmode_details'] = 'Si está habilitado, se registrará la información en el registro de Moodle que puede ayudar a identificar problemas.';
$string['settings_detectoidc'] = 'Credenciales de la aplicación';
$string['settings_detectoidc_details'] = 'Para comunicarse con Office&nbsp;365, Moodle necesita credenciales para identificarse. Estas se establecen en el complemento de autenticación "OpenID Connect".';
$string['settings_detectoidc_credsvalid'] = 'Se establecieron las credenciales.';
$string['settings_detectoidc_credsvalid_link'] = 'Cambiar';
$string['settings_detectoidc_credsinvalid'] = 'No se establecieron las credenciales o están incompletas.';
$string['settings_detectoidc_credsinvalid_link'] = 'Establecer credenciales';
$string['settings_detectperms'] = 'Permisos de la aplicación';
$string['settings_detectperms_details'] = 'Para usar las características del complemento, deben establecerse los permisos correctos para la aplicación en Azure AD.';
$string['settings_detectperms_nocreds'] = 'Debe establecer las credenciales primero. Consulte la configuración anterior.';
$string['settings_detectperms_missing'] = 'Ausente:';
$string['settings_detectperms_errorfix'] = 'Ocurrió un error al intentar corregir los permisos. Configúrelos manualmente en Azure.';
$string['settings_detectperms_fixperms'] = 'Corregir permisos';
$string['settings_detectperms_fixprereq'] = 'Para corregir esto automáticamente, el usuario de la API del sistema debe ser un administrador, y debe habilitarse el permiso "Acceder al directorio de su organización" en Azure para la aplicación "Windows Azure Active Directory".';
$string['settings_detectperms_nounified'] = 'La API unificada no está presente, es posible que algunas características no funcionen.';
$string['settings_detectperms_unifiednomissing'] = 'Todos los permisos unificados presentes.';
$string['settings_detectperms_update'] = 'Actualizar';
$string['settings_detectperms_valid'] = 'Se configuraron los permisos.';
$string['settings_detectperms_invalid'] = 'Compruebe los permisos en Azure AD';
$string['settings_enableunifiedapi'] = 'Habilitar API unificada';
$string['settings_enableunifiedapi_details'] = 'La API unificada es una API de vista previa que ofrece algunas características nuevas como el ajuste "Crear grupos de usuarios" a continuación. Eventualmente reemplazará a las API de Office específicas de la aplicación, sin embargo, aún está en vista previa y está sujeta a cambios que pueden interrumpir cierta funcionalidad. Si desea probarla, habilite este ajuste y haga clic en "Guardar cambios". Agregue la "API unificada" a su aplicación en Azure y luego vuelva aquí y ejecute la herramienta "Configuración de Azure" a continuación.';
$string['settings_header_setup'] = 'Ajuste';
$string['settings_header_options'] = 'Opciones';
$string['settings_healthcheck'] = 'Comprobación de estado';
$string['settings_healthcheck_details'] = 'Si algo no está funcionando correctamente, puede realizar una comprobación de estado para identificar el problema y proponer soluciones.';
$string['settings_healthcheck_linktext'] = 'Realizar comprobación de estado';
$string['settings_odburl'] = 'URL de OneDrive for Business';
$string['settings_odburl_details'] = 'La URL para acceder a OneDrive for Business. Generalmente, esto puede determinarse por el abonado de Azure AD. Por ejemplo, si su abonado de Azure AD es "contoso.onmicrosoft.com", probablemente será "contoso-my.sharepoint.com". Ingrese solo el nombre de dominio, no incluya http:// o https://';
$string['settings_serviceresourceabstract_valid'] = '{$a} se puede usar.';
$string['settings_serviceresourceabstract_invalid'] = 'Al parecer, esta valor no se puede usar.';
$string['settings_serviceresourceabstract_nocreds'] = 'Configure las credenciales de la aplicación primero.';
$string['settings_serviceresourceabstract_empty'] = 'Ingrese un valor o haga clic en "Detectar" para intentar detectar el valor correcto.';
$string['settings_sharepointlink'] = 'Enlace de SharePoint';
$string['settings_sharepointlink_error'] = 'Ocurrió un problema al configurar SharePoint. <br /><br /><ul><li>Si habilitó el registro de depuración (ajuste "Registrar mensajes de depuración" de arriba), es posible que disponga de más información en el informe de registro de Moodle. (Administración del sitio > Informes > Registros).</li><li>Para volver a configurar, haga clic en "Cambiar sitio", elija un nuevo sitio de SharePoint, haga clic en "Guardar cambios" en la parte inferior de esta página, y ejecute el cron de Moodle.</ul>';
$string['settings_sharepointlink_connected'] = 'Moodle está conectado a este sitio de SharePoint.';
$string['settings_sharepointlink_changelink'] = 'Cambiar sitio';
$string['settings_sharepointlink_initializing'] = 'Moodle está configurando este sitio de SharePoint. Esto sucederá durante la próxima ejecución del cron de Moodle.';
$string['settings_sharepointlink_enterurl'] = 'Ingrese una URL arriba.';
$string['settings_sharepointlink_details'] = 'Para conectar Moodle y SharePoint, ingrese la URL completa de un sitio de SharePoint para conectar a Moodle. Si el sitio no existe, Moodle intentará crearlo.<br /><a href="https://docs.moodle.org/30/en/Office365/SharePoint">Leer más acerca de conectar Moodle y SharePoint</a>';
$string['settings_sharepointlink_status_invalid'] = 'Este no es un sitio de SharePoint que se pueda usar.';
$string['settings_sharepointlink_status_notempty'] = 'Este sitio se puede usar, pero ya existe. Es posible que Moodle entre en conflicto con el contenido existente. Para obtener mejores resultados, ingrese un sitio de SharePoint que no exista y Moodle lo creará.';
$string['settings_sharepointlink_status_valid'] = 'Moodle creará este sitio de SharePoint y se utilizará para contenido de Moodle.';
$string['settings_sharepointlink_status_checking'] = 'Verificando el sitio de SharePoint ingresado...';
$string['settings_systemapiuser'] = 'Usuario de API del sistema';
$string['settings_systemapiuser_details'] = 'Cualquier usuario de Azure AD, pero debe ser la cuenta de un administrador o una cuenta dedicada. Esta cuenta se utiliza para realizar operaciones no específicas del usuario. Por ejemplo, administrar sitios de SharePoint de cursos.';
$string['settings_systemapiuser_change'] = 'Cambiar usuario';
$string['settings_systemapiuser_usernotset'] = 'No se estableció el usuario.';
$string['settings_systemapiuser_userset'] = '{$a}';
$string['settings_systemapiuser_setuser'] = 'Establecer usuario';
$string['spsite_group_contributors_name'] = '{$a} contribuidores';
$string['spsite_group_contributors_desc'] = 'Todos los usuarios que tienen acceso para administrar los archivos del curso {$a}';
$string['task_calendarsyncin'] = 'Sincronizar eventos de o365 en Moodle';
$string['task_groupcreate'] = 'Crear grupos de usuarios en Office&nbsp;365';
$string['task_refreshsystemrefreshtoken'] = 'Actualizar ficha de actualización de usuario de API del sistema';
$string['task_syncusers'] = 'Sincronizar usuarios con Azure AD.';
$string['task_sharepointinit'] = 'Inicializar SharePoint.';
$string['ucp_connectionstatus'] = 'Estado de conexión';
$string['ucp_calsync_availcal'] = 'Calendarios de Moodle disponibles';
$string['ucp_calsync_title'] = 'Sincronización de calendario de Outlook';
$string['ucp_calsync_desc'] = 'Los calendarios seleccionados se sincronizarán desde Moodle con el calendario de Outlook.';
$string['ucp_connection_status'] = 'La conexión de Office&nbsp;365 es:';
$string['ucp_connection_start'] = 'Conectar a Office&nbsp;365';
$string['ucp_connection_stop'] = 'Desconectar de Office&nbsp;365';
$string['ucp_features'] = 'Características de Office&nbsp;365';
$string['ucp_features_intro'] = 'A continuación encontrará una lista de características que puede utilizar para mejorar Moodle con Office&nbsp;365.';
$string['ucp_features_intro_notconnected'] = 'Es posible que algunas no estén disponibles hasta que se conecte a Office&nbsp;365.';
$string['ucp_general_intro'] = 'Aquí puede gestionar su conexión a Office&nbsp;365.';
$string['ucp_index_aadlogin_title'] = 'Inicio de sesión de Office&nbsp;365';
$string['ucp_index_aadlogin_desc'] = 'Puede usar sus credenciales de Office&nbsp;365 para iniciar sesión en Moodle. ';
$string['ucp_index_calendar_title'] = 'Sincronización de calendario de Outlook';
$string['ucp_index_calendar_desc'] = 'Aquí puede configurar la sincronización entre sus calendarios de Moodle y Outlook. Puede exportar eventos del calendario de Moodle a Outlook, y traer eventos de Outlook a Moodle.';
$string['ucp_index_connectionstatus_connected'] = 'Actualmente, está conectado a Office&nbsp;365';
$string['ucp_index_connectionstatus_matched'] = 'Ha coincidido con el usuario de Office&nbsp;365 <small>"{$a}"</small>. Para completar esta conexión, haga clic en el enlace a continuación e inicie sesión en Office&nbsp;365.';
$string['ucp_index_connectionstatus_notconnected'] = 'Actualmente, no está conectado a Office&nbsp;365';
$string['ucp_index_onenote_title'] = 'OneNote';
$string['ucp_index_onenote_desc'] = 'La integración de OneNote le permite utilizar Office&nbsp;365 OneNote con Moodle. Puede completar tareas con OneNote y tomar notas de para sus cursos fácilmente .';
$string['ucp_notconnected'] = 'Conéctese a Office&nbsp;365 antes de entrar aquí.';
$string['settings_onenote'] = 'Deshabilitar Office&nbsp;365 OneNote';
$string['ucp_status_enabled'] = 'Activa';
$string['ucp_status_disabled'] = 'No conectado';
$string['ucp_syncwith_title'] = 'Sincronizar con:';
$string['ucp_syncdir_title'] = 'Comportamiento de sincronización:';
$string['ucp_syncdir_out'] = 'De Moodle a Outlook';
$string['ucp_syncdir_in'] = 'De Outlook a Moodle';
$string['ucp_syncdir_both'] = 'Actualizar Outlook y Moodle';
$string['ucp_title'] = 'Panel de control de Office&nbsp;365/Moodle';
$string['ucp_options'] = 'Opciones';
