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

$string['pluginname'] = 'Integrazione Microsoft Office 365';
$string['acp_title'] = 'Pannello di controllo per amministrare Office 365';
$string['acp_healthcheck'] = 'Controllo stato';
$string['acp_parentsite_name'] = 'Moodle';
$string['acp_parentsite_desc'] = 'Sito per dati del corso Moodle condivisi.';
$string['calendar_user'] = 'Calendario personale (Utente)';
$string['calendar_site'] = 'Calendario del sito';
$string['erroracpauthoidcnotconfig'] = 'Impostare innanzitutto le credenziali dell\'applicazione in auth_oidc.';
$string['erroracplocalo365notconfig'] = 'Configurare innanzitutto local_o365.';
$string['erroracpnosptoken'] = 'Non aveva un token SharePoint disponibile e non poteva ottenerne uno.';
$string['errorhttpclientbadtempfileloc'] = 'Impossibile aprire percorso temporaneo per memorizzare file.';
$string['errorhttpclientnofileinput'] = 'Nessun parametro file in httpclient::put';
$string['errorcouldnotrefreshtoken'] = 'Impossibile aggiornare token';
$string['errorcreatingsharepointclient'] = 'Impossibile ottenere client API SharePoint';
$string['errorchecksystemapiuser'] = 'Impossibile ottenere un token utente API di sistema. Eseguire il controllo stato, assicurarsi che cron Moodle sia in esecuzione e aggiornare l\'utente API di sistema, se necessario.';
$string['erroro365apibadcall'] = 'Errore nella chiamata API.';
$string['erroro365apibadcall_message'] = 'Errore nella chiamata API: {$a}';
$string['erroro365apibadpermission'] = 'Autorizzazione non trovata';
$string['erroro365apicouldnotcreatesite'] = 'Problema durante la creazione del sito.';
$string['erroro365apicoursenotfound'] = 'Corso non trovato.';
$string['erroro365apiinvalidtoken'] = 'Token non valido o scaduto.';
$string['erroro365apiinvalidmethod'] = 'httpmethod non valido passato ad apicall';
$string['erroro365apinoparentinfo'] = 'Impossibile trovare informazioni sulla cartella superiore';
$string['erroro365apinotimplemented'] = 'Deve essere ignorata.';
$string['erroro365apinotoken'] = 'Non aveva un token per la risorsa e l\'utente specificati e non poteva ottenerne uno. Il token di aggiornamento dell\'utente è scaduto?';
$string['erroro365apisiteexistsnolocal'] = 'Il sito esiste già, ma non è possibile trovare il record locale.';
$string['errorcouldnotcreatespgroup'] = 'Impossibile creare il gruppo SharePoint.';
$string['eventapifail'] = 'Errore API';
$string['eventcalendarsubscribed'] = 'L\'utente ha effettuato la sottoscrizione a un calendario';
$string['eventcalendarunsubscribed'] = 'L\'utente ha annullato la sottoscrizione a un calendario';
$string['healthcheck_fixlink'] = 'Fare clic qui per correggere.';
$string['healthcheck_systemapiuser_title'] = 'Utente API di sistema';
$string['healthcheck_systemtoken_result_notoken'] = 'Moodle non dispone di un token per comunicare con Office 365 come utente API di sistema. Questo problema può in genere essere risolto ripristinando l\'utente API di sistema.';
$string['healthcheck_systemtoken_result_noclientcreds'] = 'Il plugin OpenID Connect non contiene le credenziali dell\'applicazione. Senza queste credenziali Moodle non può comunicare con Office 365. Fai clic qui per visitare la pagina delle impostazioni e immettere le credenziali.';
$string['healthcheck_systemtoken_result_badtoken'] = 'Si è verificato un problema durante la comunicazione con Office 365 come utente API di sistema. Questo può essere in genere risolto ripristinando l\'utente API di sistema.';
$string['healthcheck_systemtoken_result_passed'] = 'Moodle può comunicare con Office 365 come utente API di sistema.';
$string['settings_aadsync'] = 'Sincronizza utenti con Azure AD';
$string['settings_aadsync_details'] = 'Abilitando questa opzione, gli utenti Moodle e Azure AD vengono sincronizzati in base alle opzioni precedenti.<br /><br /><b>Nota: </b>il processo di sincronizzazione viene eseguito nel cron Moodle e sincronizza 1000 utenti alla volta. Per default, viene eseguito una volta al giorno alle 1:00 nel fuso orario locale per il server. Per sincronizzare grandi insiemi di utenti più rapidamente, è possibile incrementare la frequenza dell\'attività <b>Sincronizza utenti con Azure AD</b> utilizzando la <a href="{$a}">pagina di gestione delle attività pianificate.</a><br /><br />Per istruzioni più dettagliate, consultare la <a href="https://docs.moodle.org/30/en/Office365#User_sync">documentazione di sincronizzazione utente</a><br /><br />';
$string['settings_aadsync_create'] = 'Crea account in Moodle per utenti in Azure AD';
$string['settings_aadsync_delete'] = 'Elimina gli account sincronizzati in precedenza in Moodle quando vengono eliminati da Azure AD';
$string['settings_aadsync_match'] = 'Trova corrispondenza tra utenti Moodle preesistenti e account con lo stesso nome in Azure AD<br /><small>Questa opzione consente di trovare delle corrispondenze confrontando il nome utente di Office 365 con quello di Moodle. La ricerca delle corrispondenze tiene conto di maiuscole e minuscole, mentre ignora il tenant Office 365. Ad esempio, viene rilevata la corrispondenza tra il nome utente BoB.SmiTh di Moodle e bob.smith@example.onmicrosoft.com. Gli utenti con corrispondenza potranno utilizzare tutte le funzioni di integrazione di Office 365/Moodle e i loro account di Office e Moodle verranno connessi. Il metodo di autenticazione di tali utenti non subirà modifiche, salvo nel caso in cui l\'impostazione indicata sotto venga abilitata.</small>';
$string['settings_aadsync_matchswitchauth'] = 'Converti gli utenti con corrispondenza all\'autenticazione di Office 365 (OpenID Connect)<br /><small>Questa operazione richiede l\'attivazione dell\'impostazione "Corrispondenza". Quando viene trovata la corrispondenza per l\'utente, attivando questa impostazione si converte il metodo di autenticazione dell\'utente su OpenID Connect. In questo modo, l\'utente potrà accedere a Moodle con le sue credenziali di Office 365. <b>Nota:</b> verifica che il plugin di autenticazione di OpenID Connect sia abilitato se desideri utilizzare questa impostazione.</small>';
$string['settings_aadtenant'] = 'Tenant Azure AD';
$string['settings_aadtenant_details'] = 'Utilizzato per identificare l\'organizzazione all\'interno di Azure AD. Ad esempio: "contoso.onmicrosoft.com"';
$string['settings_azuresetup'] = 'Impostazione di Azure';
$string['settings_azuresetup_details'] = 'Questo strumento esegue la verifica in Azure per assicurarsi che le impostazioni siano corrette. Può anche correggere alcuni errori comuni.';
$string['settings_azuresetup_update'] = 'Aggiorna';
$string['settings_azuresetup_checking'] = 'Verifica in corso...';
$string['settings_azuresetup_missingperms'] = 'Autorizzazioni mancanti:';
$string['settings_azuresetup_permscorrect'] = 'Le autorizzazioni sono corrette.';
$string['settings_azuresetup_errorcheck'] = 'Errore durante il tentativo di verifica dell\'impostazione Azure.';
$string['settings_azuresetup_unifiedheader'] = 'API unificata';
$string['settings_azuresetup_unifieddesc'] = 'L\'API unificata sostituisce le API specifiche delle applicazioni esistenti. Se disponibile, aggiungere questa API all\'applicazione Azure per la compatibilità futura. L\'API precedente verrà sostituita dall\'API unificata.';
$string['settings_azuresetup_unifiederror'] = 'Si è verificato un errore durante la verifica del supporto API unificata.';
$string['settings_azuresetup_unifiedactive'] = 'API unificata attiva.';
$string['settings_azuresetup_unifiedmissing'] = 'L\'API unificata non è stata trovata per questa applicazione.';
$string['settings_azuresetup_legacyheader'] = 'API di Office 365';
$string['settings_azuresetup_legacydesc'] = 'L\'API di Office 365 è costituita dalle API specifiche delle applicazioni.';
$string['settings_azuresetup_legacyerror'] = 'Si è verificato un errore durante la verifica delle impostazioni dell\'API di Office 365.';
$string['settings_creategroups'] = 'Crea gruppi utenti';
$string['settings_creategroups_details'] = 'Crea e mantiene un gruppo di docenti e studenti in Office 365 per ogni corso sul sito. Verranno creati i gruppi necessari eseguiti da ogni cron (e aggiunti tutti i membri correnti). In seguito, l\'appartenenza al gruppo verrà mantenuta mentre utenti vengono iscritti o rimossi dai corsi Moodle.<br /><b>Nota: </b>questa funzione richiede che l\'API unificata Office 365 venga aggiunta all\'applicazione che è stata aggiunta in Azure. <a href="https://docs.moodle.org/30/en/Office365#User_groups">Istruzioni e documentazione per il setup.</a>';
$string['settings_o365china'] = 'Office 365 per la Cina';
$string['settings_o365china_details'] = 'Seleziona questa opzione se utilizzi Office 365 per la Cina.';
$string['settings_debugmode'] = 'Registra messaggi di debug';
$string['settings_debugmode_details'] = 'Abilitando questa opzione, le informazioni verranno registrate nel log di Moodle per risolvere problemi di identificazione.';
$string['settings_detectoidc'] = 'Credenziali applicazione';
$string['settings_detectoidc_details'] = 'Per comunicare con Office 365, Moodle richiede le credenziali di identificazione, che sono impostate nel plugin di autenticazione "OpenID Connect".';
$string['settings_detectoidc_credsvalid'] = 'Le credenziali sono state impostate.';
$string['settings_detectoidc_credsvalid_link'] = 'Cambia';
$string['settings_detectoidc_credsinvalid'] = 'Le credenziali non sono state impostate o sono incomplete.';
$string['settings_detectoidc_credsinvalid_link'] = 'Imposta credenziali';
$string['settings_detectperms'] = 'Autorizzazioni applicazione';
$string['settings_detectperms_details'] = 'Per utilizzare le funzioni di plugin è necessario impostare le autorizzazioni corrette per l\'applicazione in Azure AD.';
$string['settings_detectperms_nocreds'] = 'Impostare innanzitutto le credenziali applicazione. Consultare l\'impostazione precedente.';
$string['settings_detectperms_missing'] = 'Mancante:';
$string['settings_detectperms_errorfix'] = 'Si è verificato un errore durante il tentativo di correzione delle autorizzazioni. Impostare manualmente in Azure.';
$string['settings_detectperms_fixperms'] = 'Correggi autorizzazioni';
$string['settings_detectperms_fixprereq'] = 'Per eseguire la correzione automaticamente, l\'utente API di sistema deve essere un amministratore e l\'autorizzazione "Accedi alla directory dell\'organizzazione" deve essere abilitata in Azure per l\'applicazione "Windows Azure Active Directory".';
$string['settings_detectperms_nounified'] = 'API unificata non presente, alcune nuove funzioni non sono utilizzabili.';
$string['settings_detectperms_unifiednomissing'] = 'Tutte le autorizzazioni unificate sono presenti.';
$string['settings_detectperms_update'] = 'Aggiorna';
$string['settings_detectperms_valid'] = 'Le autorizzazioni sono state impostate.';
$string['settings_detectperms_invalid'] = 'Verifica autorizzazioni in Azure AD';
$string['settings_enableunifiedapi'] = 'Attiva l\'API unificata';
$string['settings_enableunifiedapi_details'] = 'L\'API unificata è un\'API di anteprima che fornisce alcune nuove funzioni come ad esempio "Crea gruppi di utenti". È possibile che si sostituisca alle API specifiche delle applicazioni Office, anche se sempre in modalità di anteprima, ed è soggetta a modifiche che potrebbero ostacolarne la funzionalità. Se desideri provarla, attiva questa impostazione e fai clic su "Salva modifiche". Aggiungi l\'"API unificata" alla tua applicazione in Azure, poi torna qui ed esegui lo strumento "Configurazione di Azure" qui di seguito.';
$string['settings_header_setup'] = 'Imposta';
$string['settings_header_options'] = 'Opzioni';
$string['settings_healthcheck'] = 'Controllo stato';
$string['settings_healthcheck_details'] = 'Se il funzionamento non è quello previsto, l\'esecuzione di un controllo stato consente di identificare il problema e proporre soluzioni';
$string['settings_healthcheck_linktext'] = 'Esegui controllo stato';
$string['settings_odburl'] = 'URL di OneDrive for Business';
$string['settings_odburl_details'] = 'L\'URL utilizzato per accedere a OneDrive for Business. Può essere in genere determinato dal tenant Azure AD. Ad esempio, se il tenant Azure AD è "contoso.onmicrosoft.com", è probabile che l\'URL sia "contoso-my.sharepoint.com". Immettere solo il nome del dominio senza includere http:// o https://';
$string['settings_serviceresourceabstract_valid'] = '{$a} è utilizzabile.';
$string['settings_serviceresourceabstract_invalid'] = 'Il valore non sembra utilizzabile.';
$string['settings_serviceresourceabstract_nocreds'] = 'Impostare innanzitutto le credenziali dell\'applicazione.';
$string['settings_serviceresourceabstract_empty'] = 'Immettere un valore o fare clic su "Rileva" per rilevare il valore corretto.';
$string['settings_sharepointlink'] = 'Link a SharePoint';
$string['settings_sharepointlink_error'] = 'Si è verificato un problema nel configurare SharePoint. <br /><br /><ul><li>Se hai abilitato la registrazione debug (l\'impostazione "Registra messaggi di debug" sopra), potrebbero essere disponibili altre informazioni nel report log di Moodle (Amministrazione sito > Report > Log).</li><li>Per tentare di nuovo la configurazione, fare clic su "Cambia sito", scegliere un nuovo sito SharePoint, fare clic su "Salva modifiche" in fondo alla pagina ed eseguire il cron di Moodle.</ul>';
$string['settings_sharepointlink_connected'] = 'Moodle è connesso a questo sito SharePoint.';
$string['settings_sharepointlink_changelink'] = 'Cambia sito';
$string['settings_sharepointlink_initializing'] = 'Moodle sta impostando questo sito SharePoint. Questa condizione si verifica durante la prossima esecuzione del cron Moodle.';
$string['settings_sharepointlink_enterurl'] = 'Immettere un URL.';
$string['settings_sharepointlink_details'] = 'Per collegare Moodle e SharePoint, immettere l\'URL completo di un sito SharePoint per Moodle a cui connettersi. Se il sito non esiste, Moodle tenterà di crearlo.<br /><a href="https://docs.moodle.org/30/en/Office365/SharePoint">Ulteriori informazioni sulla connessione di Moodle e SharePoint</a>';
$string['settings_sharepointlink_status_invalid'] = 'Non è un sito SharePoint utilizzabile.';
$string['settings_sharepointlink_status_notempty'] = 'Questo sito è utilizzabile ma esiste già. Si può verificare un conflitto tra Moodle e il contenuto esistente. Per risultati ottimali, immettere un sito SharePoint che non esiste e che verrà creato da Moodle.';
$string['settings_sharepointlink_status_valid'] = 'Questo sito SharePoint verrà creato da Moodle e utilizzato per il contenuto Moodle.';
$string['settings_sharepointlink_status_checking'] = 'Verifica sito SharePoint inserito in corso...';
$string['settings_systemapiuser'] = 'Utente API di sistema';
$string['settings_systemapiuser_details'] = 'Qualsiasi utente Azure AD, ma deve essere l\'account di un amministratore, o un account dedicato. Questo account viene utilizzato per eseguire operazioni che non sono specifiche dell\'utente. Ad esempio, la gestione dei siti SharePoint del corso.';
$string['settings_systemapiuser_change'] = 'Cambia utente';
$string['settings_systemapiuser_usernotset'] = 'Nessun utente impostato.';
$string['settings_systemapiuser_userset'] = '{$a}';
$string['settings_systemapiuser_setuser'] = 'Imposta utente';
$string['spsite_group_contributors_name'] = '{$a} contributori';
$string['spsite_group_contributors_desc'] = 'Tutti gli utenti che dispongono dell\'accesso per gestire i file del corso {$a}';
$string['task_calendarsyncin'] = 'Sincronizza eventi o365 in Moodle';
$string['task_groupcreate'] = 'Crea gruppi di utenti in Office 365';
$string['task_refreshsystemrefreshtoken'] = 'Aggiorna token utente API di sistema';
$string['task_syncusers'] = 'Sincronizza utenti con Azure AD.';
$string['task_sharepointinit'] = 'Inizializza SharePoint.';
$string['ucp_connectionstatus'] = 'Stato connessione';
$string['ucp_calsync_availcal'] = 'Calendari Moodle disponibili';
$string['ucp_calsync_title'] = 'Sincronizzazione calendario Outlook';
$string['ucp_calsync_desc'] = 'I calendari selezionati verranno sincronizzati da Moodle nel calendario Outlook.';
$string['ucp_connection_status'] = 'La connessione a Office 365 è:';
$string['ucp_connection_start'] = 'Connetti a Office 365';
$string['ucp_connection_stop'] = 'Disconnetti da Office 365';
$string['ucp_features'] = 'Funzioni Office&nbsp;365';
$string['ucp_features_intro'] = 'Di seguito è disponibile un elenco delle funzioni che è possibile utilizzare per migliorare Moodle con Office&nbsp;365.';
$string['ucp_features_intro_notconnected'] = 'Alcune di queste potrebbero non essere disponibili finché non si è connessi a Office&nbsp;365.';
$string['ucp_general_intro'] = 'Qui puoi gestire la connessione a Office 365.';
$string['ucp_index_aadlogin_title'] = 'Login a Office 365';
$string['ucp_index_aadlogin_desc'] = 'Puoi utilizzare le tue credenziali di Office 365 per accedere a Moodle. ';
$string['ucp_index_calendar_title'] = 'Sincronizzazione calendario Outlook';
$string['ucp_index_calendar_desc'] = 'Qui puoi impostare la sincronizzazione tra i calendari Moodle e Outlook. Puoi esportare eventi del calendario Moodle in Outlook e portare gli eventi Outlook in Moodle.';
$string['ucp_index_connectionstatus_connected'] = 'Sei attualmente connesso a Office 365';
$string['ucp_index_connectionstatus_matched'] = 'Sei stato associato a un utente Office&nbsp;365 <small>"{$a}"</small>. Per completare questa connessione, fai clic sul collegamento sottostante ed effettua il login a Office&nbsp;365.';
$string['ucp_index_connectionstatus_notconnected'] = 'Non sei attualmente connesso a Office 365';
$string['ucp_index_onenote_title'] = 'OneNote';
$string['ucp_index_onenote_desc'] = 'L\'integrazione OneNote consente di utilizzare OneNote di Office 365 con Moodle. Puoi portare a termine i compiti utilizzando OneNote e prendere facilmente appunti per i tuoi corsi.';
$string['ucp_notconnected'] = 'Connettiti a Office 365 prima di iniziare la visita qui.';
$string['settings_onenote'] = 'Disabilita OneNote di Office 365';
$string['ucp_status_enabled'] = 'Attivo';
$string['ucp_status_disabled'] = 'Non connesso';
$string['ucp_syncwith_title'] = 'Sincronizza con:';
$string['ucp_syncdir_title'] = 'Comportamento di sincronizzazione:';
$string['ucp_syncdir_out'] = 'Da Moodle a Outlook';
$string['ucp_syncdir_in'] = 'Da Outlook a Moodle';
$string['ucp_syncdir_both'] = 'Aggiorna Outlook e Moodle';
$string['ucp_title'] = 'Pannello di controllo di Office 365/Moodle';
$string['ucp_options'] = 'Opzioni';
