<?php
// Copyright (C) 2024 Combodo SAS
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>
/**
 * @author      Benjamin Planque <benjamin.planque@combodo.com>
 * @copyright   Copyright (C) 2024 Combodo SAS
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//////////////////////////////////////////////////////////////////////
// Note: The classes have been grouped by categories: bizmodel
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
// Classes in 'bizmodel'
//////////////////////////////////////////////////////////////////////
//

Dict::Add('SV SV', 'Swedish', 'Svenska', array(
'Portal:Title' => ITOP_APPLICATION_SHORT.' Användarportal',
    'Portal:NoRequestMgmt' => 'Du har omdirigerats till denna sida eftersom ditt konto är konfigurerat med profilen "Portal-användare". Tyvärr har inte '.ITOP_APPLICATION_SHORT.' installerats med funktionen "Begäranhantering". Vänligen kontakta din administratör.',
    'Portal:Refresh' => 'Uppdatera',
    'Portal:Back' => 'Tillbaka',
    'Portal:WelcomeUserOrg' => 'Välkommen %1$s, från %2$s',
    'Portal:TitleDetailsFor_Request' => 'Detaljer för begäran',
    'Portal:ShowOngoing' => 'Visa öppna ärenden',
    'Portal:ShowClosed' => 'Visa stängda ärenden',
    'Portal:CreateNewRequest' => 'Skapa ett nytt ärenden',
    'Portal:CreateNewRequestItil' => 'Skapa ett nytt ärende',
    'Portal:CreateNewIncidentItil' => 'Skapa en ny incidentrapport',
    'Portal:ChangeMyPassword' => 'Byt mitt lösenord',
    'Portal:Disconnect' => 'Koppla från',
    'Portal:OpenRequests' => 'Mina öppna ärenden',
    'Portal:ClosedRequests' => 'Mina stängda ärenden',
    'Portal:ResolvedRequests' => 'Mina lösta ärende',
    'Portal:SelectService' => 'Välj en tjänst från katalogen:',
    'Portal:PleaseSelectOneService' => 'Vänligen välj en tjänst',
    'Portal:SelectSubcategoryFrom_Service' => 'Välj en underkategori för tjänsten %1$s:',
    'Portal:PleaseSelectAServiceSubCategory' => 'Vänligen välj en underkategori',
    'Portal:DescriptionOfTheRequest' => 'Ange beskrivningen av din begäran:',
    'Portal:TitleRequestDetailsFor_Request' => 'Detaljer för ärende %1$s:',
    'Portal:NoOpenRequest' => 'Inga ärenden i denna kategori',
    'Portal:NoClosedRequest' => 'Inga ärenden i denna kategori',
    'Portal:Button:ReopenTicket' => 'Återöppna detta ärende',
    'Portal:Button:CloseTicket' => 'Stäng detta ärende',
    'Portal:Button:UpdateRequest' => 'Uppdatera ärende',
    'Portal:EnterYourCommentsOnTicket' => 'Ange dina kommentarer om lösningen av detta ärende:',
    'Portal:ErrorNoContactForThisUser' => 'Fel: den aktuella användaren är inte associerad med en Kontakt/Person. Vänligen kontakta din administratör.',
    'Portal:Attachments' => 'Bilagor',
    'Portal:AddAttachment' => ' Lägg till bilaga ',
    'Portal:RemoveAttachment' => ' Ta bort bilaga ',
    'Portal:Attachment_No_To_Ticket_Name' => 'Bilaga #%1$d till %2$s (%3$s)',
    'Portal:SelectRequestTemplate' => 'Välj en mall för %1$s',
));
