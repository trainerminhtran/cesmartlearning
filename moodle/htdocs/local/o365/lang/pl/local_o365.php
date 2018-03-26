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

$string['pluginname'] = 'Integracja pakietu Microsoft Office 365';
$string['acp_title'] = 'Panel sterowania administratora pakietu Office&nbsp;365';
$string['acp_healthcheck'] = 'Sprawdzanie kondycji';
$string['acp_parentsite_name'] = 'Moodle';
$string['acp_parentsite_desc'] = 'Strona udostępnianych danych kursu Moodle.';
$string['calendar_user'] = 'Kalendarz osobisty (użytkownika)';
$string['calendar_site'] = 'Kalendarz witryny';
$string['erroracpauthoidcnotconfig'] = 'Najpierw ustaw poświadczenia aplikacji w parametrze auth_oidc.';
$string['erroracplocalo365notconfig'] = 'Najpierw skonfiguruj ustawienia parametru local_o365.';
$string['erroracpnosptoken'] = 'Brak dostępnego tokenu programu SharePoint. Nie udało się pobrać tokenu.';
$string['errorhttpclientbadtempfileloc'] = 'Nie można otworzyć lokalizacji tymczasowej, aby zapisać plik.';
$string['errorhttpclientnofileinput'] = 'Brak parametru pliku w httpclient::put';
$string['errorcouldnotrefreshtoken'] = 'Nie udało się odświeżyć tokenu';
$string['errorcreatingsharepointclient'] = 'Nie udało się pobrać klienta interfejsu API programu SharePoint';
$string['errorchecksystemapiuser'] = 'Nie udało się pobrać tokenu użytkownika interfejsu API systemu. Włącz sprawdzanie kondycji, upewnij się, że skrypt cron platformy Moodle jest uruchomiony i odśwież użytkownika interfejsu API systemu w razie potrzeby.';
$string['erroro365apibadcall'] = 'Błąd w wywołania interfejsu API.';
$string['erroro365apibadcall_message'] = 'Błąd w wywołaniu interfejsu API: {$a}';
$string['erroro365apibadpermission'] = 'Nie znaleziono uprawnienia';
$string['erroro365apicouldnotcreatesite'] = 'Wystąpił problem podczas tworzenia strony.';
$string['erroro365apicoursenotfound'] = 'Nie znaleziono kursu.';
$string['erroro365apiinvalidtoken'] = 'Nieprawidłowy lub wygasły token.';
$string['erroro365apiinvalidmethod'] = 'Nieprawidłowy element httpmethod przekazany do wywołania interfejsu API';
$string['erroro365apinoparentinfo'] = 'Nie znaleziono informacji o folderze nadrzędnym';
$string['erroro365apinotimplemented'] = 'Wymagaj zastąpienia.';
$string['erroro365apinotoken'] = 'Brak tokenu dla danego zasobu i użytkownika. Nie udało się pobrać tokenu. Czy odświeżony token użytkownika wygasł?';
$string['erroro365apisiteexistsnolocal'] = 'Strona już istnienie, ale nie udało się znaleźć lokalnego rekordu.';
$string['errorcouldnotcreatespgroup'] = 'Nie udało się utworzyć grupy programu SharePoint.';
$string['eventapifail'] = 'Błąd interfejsu API';
$string['eventcalendarsubscribed'] = 'Użytkownik włączył subskrypcję kalendarza';
$string['eventcalendarunsubscribed'] = 'Użytkownik wyłączył subskrypcję kalendarza';
$string['healthcheck_fixlink'] = 'Kliknij tutaj, aby rozwiązać problem.';
$string['healthcheck_systemapiuser_title'] = 'Użytkownik interfejsu API systemu';
$string['healthcheck_systemtoken_result_notoken'] = 'Platforma Moodle nie posiada tokenu do komunikowania się z pakietem Office&nbsp;365 jako użytkownik interfejsu API systemu. Ten problem można zazwyczaj rozwiązać przez zresetowanie użytkownika interfejsu API systemu.';
$string['healthcheck_systemtoken_result_noclientcreds'] = 'Brak danych logowania do aplikacji we wtyczce OpenID Connect. Bez tych danych logowania platforma Moodle nie może komunikować się z pakietem Office&nbsp;365. Kliknij tutaj, aby przejść do strony ustawień i wprowadzić swoje dane logowania.';
$string['healthcheck_systemtoken_result_badtoken'] = 'Wystąpił problem podczas komunikacji z pakietem Office&nbsp;365 jako użytkownik interfejsu API systemu. Ten problem można zazwyczaj rozwiązać przez zresetowanie użytkownika interfejsu API systemu.';
$string['healthcheck_systemtoken_result_passed'] = 'Platforma Moodle może komunikować się z pakietem Office&nbsp;365 jako użytkownik interfejsu API systemu.';
$string['settings_aadsync'] = 'Synchronizuj użytkowników z usługą Azure AD';
$string['settings_aadsync_details'] = 'Gdy ta opcja jest włączona, dane użytkowników platformy Moodle i usługi Azure AD są synchronizowane zgodnie z powyższymi opcjami.<br /><br /><b>Uwaga: </b>Proces synchronizacji przebiega w skrypcie cron platformy Moodle i synchronizuje 1000 użytkowników na raz. Domyślnie proces jest uruchamiany raz dziennie o godz. 1:00 w strefie czasowej serwera. Aby szybciej zsynchronizować większe zestawy użytkowników, można zwiększyć częstotliwość wykonywania zadania <b>Synchronizuj użytkowników z usługą Azure AD</b> za pomocą strony <a href="{$a}">Zarządzanie zaplanowanymi zadaniami.</a><br /><br />Szczegółowe informacje zawiera <a href="https://docs.moodle.org/30/en/Office365#User_sync">dokumentacja funkcji synchronizacji użytkowników</a><br /><br />';
$string['settings_aadsync_create'] = 'Utwórz konta na platformie Moodle dla użytkowników w usłudze Azure AD';
$string['settings_aadsync_delete'] = 'Usuwaj poprzednio zsynchronizowane konta na platformie Moodle, gdy zostaną usunięte z usługi Azure AD';
$string['settings_aadsync_match'] = 'Dopasuj wcześniej istniejących użytkowników platformy Moodle do kont o tej samej nazwie w usłudze Azure AD<br /><small>Porównywane będą nazwy użytkownika w pakiecie Office 365 z nazwami użytkownika na platformie Moodle w celu odnalezienia zgodnych. W dopasowaniach wielkość liter nie jest rozróżniana i ignorowany jest element nazwy odpowiadający klientowi pakietu Office 365. Na przykład nazwa BoB.SmiTh na platformie Moodle byłaby zgodna z nazwą bob.smith@example.onmicrosoft.com. Konta Moodle i Office użytkowników, dla których znaleziono zgodność, zostaną połączone i będą oni mogli korzystać z funkcji integracji Office 365/Moodle. Metoda uwierzytelniania użytkownika nie zmieni się, o ile nie zostanie włączone poniższe ustawienie.</small>';
$string['settings_aadsync_matchswitchauth'] = 'Przełącz dopasowanych użytkowników na uwierzytelnianie Office 365 (OpenID Connect)<br /><small>Ta opcja wymaga włączenia powyższego ustawienia „Dopasuj”. Gdy użytkownik jest dopasowany, włączenie tego ustawienia spowoduje przełączenie jego metody uwierzytelniania na OpenID Connect. Będzie się on logować do platformy Moodle danymi logowania do pakietu Office 365. <b>Uwaga:</b> Aby móc korzystać z tego ustawienia, należy pamiętać o włączeniu wtyczki uwierzytelniania OpenID Connect.</small>';
$string['settings_aadtenant'] = 'Dierżawca usługi Azure AD';
$string['settings_aadtenant_details'] = 'Opcja używana do identyfikacji organizacji w usłudze Azure AD. Na przykład: „contoso.onmicrosoft.com”';
$string['settings_azuresetup'] = 'Konfiguracja usługi Azure';
$string['settings_azuresetup_details'] = 'To narzędzie sprawdza, czy wszystkie ustawienia usługi Azure zostały prawidłowo skonfigurowane. Może również naprawić niektóre często występujące błędy.';
$string['settings_azuresetup_update'] = 'Aktualizuj';
$string['settings_azuresetup_checking'] = 'Sprawdzanie...';
$string['settings_azuresetup_missingperms'] = 'Brak uprawnień:';
$string['settings_azuresetup_permscorrect'] = 'Uprawnienia są prawidłowe.';
$string['settings_azuresetup_errorcheck'] = 'Wystąpił błąd podczas próby sprawdzenia konfiguracji usługi Azure.';
$string['settings_azuresetup_unifiedheader'] = 'Ujednolicony interfejs API';
$string['settings_azuresetup_unifieddesc'] = 'Ujednolicony interfejs API zastępuje istniejące interfejsy API poszczególnych aplikacji. Jeżeli jest dostępny, należy go dodać do aplikacji Azure do wykorzystania w przyszłości. Opcjonalnie zastąpi on poprzedni interfejs API.';
$string['settings_azuresetup_unifiederror'] = 'Wystąpił błąd podczas wyszukiwania pomocy do ujednoliconego interfejsu API.';
$string['settings_azuresetup_unifiedactive'] = 'Ujednolicony interfejs API aktywny.';
$string['settings_azuresetup_unifiedmissing'] = 'Nie znaleziono ujednoliconego interfejsu API w tej aplikacji.';
$string['settings_azuresetup_legacyheader'] = 'Interfejs API pakietu Office&nbsp;365';
$string['settings_azuresetup_legacydesc'] = 'Interfejs API pakietu Office&nbsp;365 składa się z interfejsów API poszczególnych aplikacji.';
$string['settings_azuresetup_legacyerror'] = 'Wystąpił błąd podczas sprawdzania ustawień interfejsu API pakietu Office&nbsp;365.';
$string['settings_creategroups'] = 'Utwórz grupy użytkowników';
$string['settings_creategroups_details'] = 'Jeśli ta opcja jest włączona, zostanie utworzona i będzie utrzymywana grupa nauczycieli i studentów w pakiecie Office 365 dla każdego kursu na stronie. Wymagane grupy będą tworzone po każdym uruchomieniu skryptu cron (a wszyscy bieżący użytkownicy będą dodawani). Członkostwo w grupie będzie utrzymywane, gdy użytkownicy będą się rejestrować na kursy na platformie Moodle lub gdy będą się z nich wyrejestrowywać.<br /><b>Uwaga: </b>Ta funkcja wymaga dodania ujednoliconego interfejsu API pakietu Office&nbsp;365 do aplikacji dodanej w usłudze Azure. <a href="https://docs.moodle.org/30/en/Office365#User_groups">Instrukcje i dokumentacja konfiguracji.</a>';
$string['settings_o365china'] = 'Pakiet Office&nbsp;365 dla Chin';
$string['settings_o365china_details'] = 'Zaznacz to pole, jeżeli korzystasz z pakietu Office&nbsp;365 dla Chin.';
$string['settings_debugmode'] = 'Rejestruj komunikaty debugowania';
$string['settings_debugmode_details'] = 'Jeżeli ta opcja jest włączona, informacje będą rejestrowane w pliku dziennika platformy Moodle, aby pomóc w identyfikacji problemów.';
$string['settings_detectoidc'] = 'Dane logowania do aplikacji';
$string['settings_detectoidc_details'] = 'Aby móc się komunikować z pakietem Office&nbsp;365, platforma Moodle musi posiadać dane logowania umożliwiające jej identyfikację. Można je ustawić we wtyczce uwierzytelniania „OpenID Connect”.';
$string['settings_detectoidc_credsvalid'] = 'Dane logowania zostały ustawione.';
$string['settings_detectoidc_credsvalid_link'] = 'Zmień';
$string['settings_detectoidc_credsinvalid'] = 'Dane logowania nie zostały ustawione lub są niepełne.';
$string['settings_detectoidc_credsinvalid_link'] = 'Ustaw dane logowania';
$string['settings_detectperms'] = 'Uprawnienia do aplikacji';
$string['settings_detectperms_details'] = 'Aby korzystać z opcji wtyczki, należy ustawić prawidłowe uprawnienia dla aplikacji w usłudze Azure AD.';
$string['settings_detectperms_nocreds'] = 'Najpierw należy ustawić dane logowania do aplikacji. Patrz ustawienie powyżej.';
$string['settings_detectperms_missing'] = 'Brakuje:';
$string['settings_detectperms_errorfix'] = 'Wystąpił błąd podczas próby naprawy uprawnień. Należy je ustawić ręcznie w usłudze Azure.';
$string['settings_detectperms_fixperms'] = 'Napraw uprawnienia';
$string['settings_detectperms_fixprereq'] = 'Aby naprawić problem automatycznie, użytkownik interfejsu API systemu musi być administratorem, a uprawnienie „Dostęp do katalogu organizacji” musi być włączone w usłudze Azure dla aplikacji Windows Azure Active Directory.';
$string['settings_detectperms_nounified'] = 'Ujednolicony interfejs API nie jest obecny, niektóre nowe funkcje mogą nie działać.';
$string['settings_detectperms_unifiednomissing'] = 'Wszystkie ujednolicone uprawnienia są obecne.';
$string['settings_detectperms_update'] = 'Aktualizuj';
$string['settings_detectperms_valid'] = 'Ustawienia zostały skonfigurowane.';
$string['settings_detectperms_invalid'] = 'Sprawdź uprawnienia w usłudze Azure AD';
$string['settings_enableunifiedapi'] = 'Włącz ujednolicony interfejs API';
$string['settings_enableunifiedapi_details'] = 'Ujednolicony interfejs API jest wersją poglądową interfejsu API, który udostępnia pewne nowe funkcje, takie jak poniższe ustawienie „Utwórz grupy użytkowników”. Docelowo zastąpi on interfejsy API specyficzne dla aplikacji pakietu Office, jednak obecnie jest to wciąż wersja poglądowa, która może ulec zmianą powodującym niedziałanie niektórych funkcji. Aby go wypróbować, włącz to ustawienie i kliknij przycisk „Zapisz zmiany”. Dodaj pozycję „Ujednolicony interfejs API” do swojej aplikacji w usłudze Azure, a następnie wróć do tego miejsca i uruchom poniższe narzędzie „Konfiguracja usługi Azure”.';
$string['settings_header_setup'] = 'Ustawienia konfiguracji';
$string['settings_header_options'] = 'Opcje';
$string['settings_healthcheck'] = 'Sprawdzanie kondycji';
$string['settings_healthcheck_details'] = 'Jeżeli jakaś opcja nie działa prawidłowo, można włączyć funkcję sprawdzania kondycji, która zidentyfikuje problem i zaproponuje rozwiązanie';
$string['settings_healthcheck_linktext'] = 'Sprawdź kondycję';
$string['settings_odburl'] = 'Adres URL usługi OneDrive dla firm';
$string['settings_odburl_details'] = 'Adres URL używany w celu uzyskania dostępu do usługi OneDrive dla firm. Zazwyczaj określa go dzierżawca usługi Azure AD. Na przykład jeżeli dzierżawca usługi Azure AD to „contoso.onmicrosoft.com”, adres ten prawdopodobnie ma postać „contoso-my.sharepoint.com”. Należy wprowadzić tylko nazwę domeny bez ciągu http:// lub https://';
$string['settings_serviceresourceabstract_valid'] = 'Można użyć {$a}.';
$string['settings_serviceresourceabstract_invalid'] = 'Tej wartości nie można użyć.';
$string['settings_serviceresourceabstract_nocreds'] = 'Najpierw ustaw ustawienia logowania do aplikacji';
$string['settings_serviceresourceabstract_empty'] = 'Wprowadź wartość lub kliknij opcję „Wykrywaj”, aby podjąć próbę wykrycia prawidłowej wartości.';
$string['settings_sharepointlink'] = 'Łącze programu SharePoint';
$string['settings_sharepointlink_error'] = 'Wystąpił problem z konfiguracją oprogramowania SharePoint. <br /><br /><ul><li>Jeśli włączone jest rejestrowanie debugowania (powyższe ustawienie „Rejestruj komunikaty debugowania”), więcej informacji może być dostępnych w raporcie dziennika platformy Moodle. (Administracja serwisu > Raporty > Dzienniki).</li><li>Aby ponowić próbę konfiguracji, kliknij opcję „Zmień witrynę”, wybierz nową witrynę programu SharePoint, kliknij przycisk „Zapisz zmiany" u dołu tej strony i uruchom program cron platformy Moodle.</ul>';
$string['settings_sharepointlink_connected'] = 'Platforma Moodle jest połączona z witryną programu SharePoint.';
$string['settings_sharepointlink_changelink'] = 'Zmień witrynę';
$string['settings_sharepointlink_initializing'] = 'Platforma Moodle zakłada tę witrynę programu SharePoint. Zostanie ona wyświetlona przy kolejnym uruchomieniu skryptu cron platformy Moodle.';
$string['settings_sharepointlink_enterurl'] = 'Wprowadź adres URL powyżej.';
$string['settings_sharepointlink_details'] = 'Aby połączyć platformę Moodle z programem SharePoint, wprowadź pełny adres URL witryny programu SharePoint, z którą platforma Moodle ma się połączyć. Jeżeli witryna nie istnieje, platforma Moodle podejmie próbę jej utworzenia.<br /><a href="https://docs.moodle.org/30/en/Office365/SharePoint">Więcej informacji o łączeniu platformy Moodle z programem SharePoint</a>';
$string['settings_sharepointlink_status_invalid'] = 'Nie można użyć tej witryny programu SharePoint.';
$string['settings_sharepointlink_status_notempty'] = 'Można użyć tej witryny, ale taka witryna już istnieje. Platforma Moodle może wchodzić w konflikt z istniejącą treścią. Należy wprowadzić adres nieistniejącej witryny programu SharePoint, aby platforma Moodle ją utworzyła.';
$string['settings_sharepointlink_status_valid'] = 'Ta witryna programu SharePoint zostanie utworzona przez platformę Moodle i będzie zawierać treść platformy Moodle.';
$string['settings_sharepointlink_status_checking'] = 'Sprawdzanie wprowadzonej witryny programu SharePoint...';
$string['settings_systemapiuser'] = 'Użytkownik interfejsu API systemu';
$string['settings_systemapiuser_details'] = 'Dowolny użytkownik usługi Azure AD, ale powinno to być konto administratora lub konto dedykowane. To konto jest wykorzystywane do wykonywania operacji, które nie dotyczą konkretnego użytkownika, np. do zarządzania witrynami programu SharePoint w kursie.';
$string['settings_systemapiuser_change'] = 'Zmień użytkownika';
$string['settings_systemapiuser_usernotset'] = 'Nie ustawiono użytkownika.';
$string['settings_systemapiuser_userset'] = '{$a}';
$string['settings_systemapiuser_setuser'] = 'Ustaw użytkownika';
$string['spsite_group_contributors_name'] = 'Współautorzy {$a}';
$string['spsite_group_contributors_desc'] = 'Wszyscy użytkownicy, którzy mają dostęp do opcji zarządzania plikami w kursie {$a}';
$string['task_calendarsyncin'] = 'Synchronizuj zdarzenia o365 w platformie Moodle';
$string['task_groupcreate'] = 'Utwórz grupy użytkowników w pakiecie Office&nbsp;365';
$string['task_refreshsystemrefreshtoken'] = 'Odśwież token odświeżania użytkownika interfejsu API systemu';
$string['task_syncusers'] = 'Synchronizuj użytkowników z usługą Azure AD.';
$string['task_sharepointinit'] = 'Uruchom program SharePoint.';
$string['ucp_connectionstatus'] = 'Status połączenia';
$string['ucp_calsync_availcal'] = 'Dostępne kalendarze platformy Moodle';
$string['ucp_calsync_title'] = 'Synchronizacja kalendarza programu Outlook';
$string['ucp_calsync_desc'] = 'Zaznaczone kalendarze platformy Moodle zostaną zsynchronizowane z kalendarzem programu Outlook.';
$string['ucp_connection_status'] = 'Połączenie z pakietem Office&nbsp;365 jest:';
$string['ucp_connection_start'] = 'Połącz z pakietem Office&nbsp;365';
$string['ucp_connection_stop'] = 'Zamknij połączenie z pakietem Office&nbsp;365';
$string['ucp_features'] = 'Funkcje pakietu Office&nbsp;365';
$string['ucp_features_intro'] = 'Poniżej podano listę funkcji pakietu Office&nbsp;365, których można używać, aby usprawnić pracę w platformie Moodle.';
$string['ucp_features_intro_notconnected'] = 'Niektóre funkcje mogą być dostępne dopiero po połączeniu z pakietem Office&nbsp;365.';
$string['ucp_general_intro'] = 'Ta opcja umożliwia zarządzanie połączeniem z pakietem Office&nbsp;365.';
$string['ucp_index_aadlogin_title'] = 'Logowanie do pakietu Office&nbsp;365';
$string['ucp_index_aadlogin_desc'] = 'Możesz użyć danych logowania do pakietu Office&nbsp;365, aby zalogować się do platformy Moodle. ';
$string['ucp_index_calendar_title'] = 'Synchronizacja kalendarza programu Outlook';
$string['ucp_index_calendar_desc'] = 'Ta opcja umożliwia skonfigurowanie ustawień synchronizacji kalendarzy platformy Moodle z kalendarzem programu Outlook. Można wyeksportować zdarzenia z kalendarza platformy Moodle do programu Outlook, a także przenieść zdarzenia z kalendarza programu Outlook do platformy Moodle.';
$string['ucp_index_connectionstatus_connected'] = 'Użytkownik jest obecnie połączony z pakietem Office&nbsp;365';
$string['ucp_index_connectionstatus_matched'] = 'Konto użytkownika zostało dopasowane do konta użytkownika <small>"{$a}"</small> pakietu Office&nbsp;365. Aby zakończyć proces nawiązywania połączenia, kliknij łącze poniżej i zaloguj się do pakietu Office&nbsp;365.';
$string['ucp_index_connectionstatus_notconnected'] = 'Użytkownik nie jest obecnie połączony z pakietem Office&nbsp;365';
$string['ucp_index_onenote_title'] = 'Program OneNote';
$string['ucp_index_onenote_desc'] = 'Integracja programu OneNote umożliwia korzystanie z programu OneNote z pakietu Office&nbsp;365 z platformą Moodle. W programie OneNote można pisać prace i robić notatki do kursów.';
$string['ucp_notconnected'] = 'Połącz się z pakietem Office&nbsp;365 przed odwiedzeniem tej strony.';
$string['settings_onenote'] = 'Wyłącz program OneNote w pakiecie Office&nbsp;365';
$string['ucp_status_enabled'] = 'Aktywny';
$string['ucp_status_disabled'] = 'Nie połączono';
$string['ucp_syncwith_title'] = 'Synchronizuj z:';
$string['ucp_syncdir_title'] = 'Zachowanie funkcji synchronizacji:';
$string['ucp_syncdir_out'] = 'Z platformy Moodle do programu Outlook';
$string['ucp_syncdir_in'] = 'Z programu Outlook do platformy Moodle';
$string['ucp_syncdir_both'] = 'Zaktualizuj dane w programie Outlook i na platformie Moodle';
$string['ucp_title'] = 'Panel sterowania pakietu Office&nbsp;365 / platformy Moodle';
$string['ucp_options'] = 'Opcje';
