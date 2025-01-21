<?php
/**
 * @copyright Copyright (C) 2024 Combodo SAS
 * @license https://opensource.org/licenses/AGPL-3.0
 */

// Portal
Dict::Add('SV SV', 'Swedish', 'Svenska', array(
    'Page:DefaultTitle' => '%1$s Användarportal',
    'Page:PleaseWait' => 'Vänligen vänta...',
    'Page:Home' => 'Hem',
    'Page:GoPortalHome' => 'Startsida',
    'Page:GoPreviousPage' => 'Föregående sida',
    'Page:ReloadPage' => 'Ladda om sidan',
    'Portal:Button:Submit' => 'Skicka',
    'Portal:Button:Apply' => 'Uppdatera',
    'Portal:Button:Cancel' => 'Avbryt',
    'Portal:Button:Close' => 'Stäng',
    'Portal:Button:Add' => 'Lägg till',
    'Portal:Button:Remove' => 'Ta bort',
    'Portal:Button:Delete' => 'Radera',
    'Portal:EnvironmentBanner:Title' => 'Du är för närvarande i <strong>%1$s</strong>-läge',
    'Portal:EnvironmentBanner:GoToProduction' => 'Gå tillbaka till PRODUKTIONS-läge',
    'Error:HTTP:400' => 'Felaktig begäran',
    'Error:HTTP:401' => 'Autentisering',
    'Error:HTTP:404' => 'Sidan hittades inte',
    'Error:HTTP:500' => 'Oj! Ett fel har inträffat.',
    'Error:HTTP:GetHelp' => 'Kontakta din %1$s-administratör om problemet kvarstår.',
    'Error:XHR:Fail' => 'Kunde inte läsa in data, kontakta din %1$s-administratör',
    'Portal:ErrorUserLoggedOut' => 'Du har loggats ut och måste logga in igen för att fortsätta.',
    'Portal:Datatables:Language:Processing' => 'Vänligen vänta...',
    'Portal:Datatables:Language:Search' => 'Filtrera:',
    'Portal:Datatables:Language:LengthMenu' => 'Visa _MENU_ poster per sida',
    'Portal:Datatables:Language:ZeroRecords' => 'Inga resultat',
    'Portal:Datatables:Language:Info' => 'Sida _PAGE_ av _PAGES_',
    'Portal:Datatables:Language:InfoEmpty' => 'Ingen information',
    'Portal:Datatables:Language:InfoFiltered' => 'filtrerad från totalt _MAX_ poster',
    'Portal:Datatables:Language:EmptyTable' => 'Ingen data tillgänglig i denna tabell',
    'Portal:Datatables:Language:DisplayLength:All' => 'Alla',
    'Portal:Datatables:Language:Paginate:First' => 'Första',
    'Portal:Datatables:Language:Paginate:Previous' => 'Föregående',
    'Portal:Datatables:Language:Paginate:Next' => 'Nästa',
    'Portal:Datatables:Language:Paginate:Last' => 'Sista',
    'Portal:Datatables:Language:Sort:Ascending' => 'aktivera för stigande sortering',
    'Portal:Datatables:Language:Sort:Descending' => 'aktivera för fallande sortering',
    'Portal:Autocomplete:NoResult' => 'Ingen data',
    'Portal:Attachments:DropZone:Message' => 'Släpp dina filer här för att lägga till dem som bilagor',
    'Portal:File:None' => 'Ingen fil',
    'Portal:File:DisplayInfo' => '<a href="%2$s" class="file_download_link">%1$s</a>',
    'Portal:File:DisplayInfo+' => '%1$s (%2$s) <a href="%3$s" class="file_open_link" target="_blank">Öppna</a> / <a href="%4$s" class="file_download_link">Ladda ner</a>',
    'Portal:Calendar-FirstDayOfWeek' => 'sv-se',
));

// Object form
Dict::Add('SV SV', 'Swedish', 'Svenska', array(
    'Portal:Form:Caselog:Entry:Close:Tooltip' => 'Stäng denna post',
    'Portal:Form:Close:Warning' => 'Vill du lämna detta formulär? Inmatad data kan gå förlorad',
    'Portal:Error:ObjectCannotBeCreated' => 'Fel: objektet kan inte skapas. Kontrollera associerade objekt och bilagor innan du skickar detta formulär igen.',
    'Portal:Error:ObjectCannotBeUpdated' => 'Fel: objektet kan inte uppdateras. Kontrollera associerade objekt och bilagor innan du skickar detta formulär igen.',
));

// UserProfile brick
Dict::Add('SV SV', 'Swedish', 'Svenska', array(
    'Brick:Portal:UserProfile:Name' => 'Användarprofil',
    'Brick:Portal:UserProfile:Navigation:Dropdown:MyProfil' => 'Min profil',
    'Brick:Portal:UserProfile:Navigation:Dropdown:Logout' => 'Logga ut',
    'Brick:Portal:UserProfile:Password:Title' => 'Lösenord',
    'Brick:Portal:UserProfile:Password:ChoosePassword' => 'Välj lösenord',
    'Brick:Portal:UserProfile:Password:ConfirmPassword' => 'Bekräfta lösenord',
    'Brick:Portal:UserProfile:Password:CantChangeContactAdministrator' => 'För att ändra ditt lösenord, kontakta din %1$s-administratör',
    'Brick:Portal:UserProfile:Password:CantChangeForUnknownReason' => 'Kan inte ändra lösenord, vänligen kontakta din %1$s-administratör',
    'Brick:Portal:UserProfile:PersonalInformations:Title' => 'Personlig information',
    'Brick:Portal:UserProfile:Photo:Title' => 'Foto',
));

// AggregatePageBrick
Dict::Add('SV SV', 'Swedish', 'Svenska', array(
    'Brick:Portal:AggregatePage:DefaultTitle' => 'Instrumentpanel',
));

// BrowseBrick brick
Dict::Add('SV SV', 'Swedish', 'Svenska', array(
    'Brick:Portal:Browse:Name' => 'Bläddra bland objekt',
    'Brick:Portal:Browse:Mode:List' => 'Lista',
    'Brick:Portal:Browse:Mode:Tree' => 'Träd',
    'Brick:Portal:Browse:Mode:Mosaic' => 'Mosaik',
    'Brick:Portal:Browse:Action:Drilldown' => 'Utforska',
    'Brick:Portal:Browse:Action:View' => 'Detaljer',
    'Brick:Portal:Browse:Action:Edit' => 'Redigera',
    'Brick:Portal:Browse:Action:Create' => 'Skapa',
    'Brick:Portal:Browse:Action:CreateObjectFromThis' => 'Ny %1$s',
    'Brick:Portal:Browse:Tree:ExpandAll' => 'Expandera alla',
    'Brick:Portal:Browse:Tree:CollapseAll' => 'Komprimera alla',
    'Brick:Portal:Browse:Filter:NoData' => 'Inga objekt',
));

// ManageBrick brick
Dict::Add('SV SV', 'Swedish', 'Svenska', array(
    'Brick:Portal:Manage:Name' => 'Hantera objekt',
    'Brick:Portal:Manage:Table:NoData' => 'Inga objekt.',
    'Brick:Portal:Manage:Table:ItemActions' => 'Åtgärder',
    'Brick:Portal:Manage:DisplayMode:list' => 'Lista',
    'Brick:Portal:Manage:DisplayMode:pie-chart' => 'Cirkeldiagram',
    'Brick:Portal:Manage:DisplayMode:bar-chart' => 'Stapeldiagram',
    'Brick:Portal:Manage:Others' => 'Övriga',
    'Brick:Portal:Manage:All' => 'Alla',
    'Brick:Portal:Manage:Group' => 'Grupp',
    'Brick:Portal:Manage:fct:count' => 'Totalt',
    'Brick:Portal:Manage:fct:sum' => 'Summa',
    'Brick:Portal:Manage:fct:avg' => 'Medelvärde',
    'Brick:Portal:Manage:fct:min' => 'Min',
    'Brick:Portal:Manage:fct:max' => 'Max',
));

// ObjectBrick brick
Dict::Add('SV SV', 'Swedish', 'Svenska', array(
    'Brick:Portal:Object:Name' => 'Objekt',
    'Brick:Portal:Object:Form:Create:Title' => 'Nytt %1$s',
    'Brick:Portal:Object:Form:Edit:Title' => 'Uppdaterar %2$s (%1$s)',
    'Brick:Portal:Object:Form:View:Title' => '%1$s: %2$s',
    'Brick:Portal:Object:Form:Stimulus:Title' => 'Vänligen fyll i följande information:',
    'Brick:Portal:Object:Form:Message:Saved' => 'Sparad',
    'Brick:Portal:Object:Form:Message:ObjectSaved' => '%1$s sparad',
    'Brick:Portal:Object:Search:Regular:Title' => 'Välj %1$s (%2$s)',
    'Brick:Portal:Object:Search:Hierarchy:Title' => 'Välj %1$s (%2$s)',
    'Brick:Portal:Object:Copy:TextToCopy' => '%2$s',
    'Brick:Portal:Object:Copy:Tooltip' => 'Kopiera objektlänk',
    'Brick:Portal:Object:Copy:CopiedTooltip' => 'Kopierad'
));

// CreateBrick brick
Dict::Add('SV SV', 'Swedish', 'Svenska', array(
    'Brick:Portal:Create:Name' => 'Snabbskapa',
    'Brick:Portal:Create:ChooseType' => 'Vänligen välj en typ',
));

// Filter brick
Dict::Add('SV SV', 'Swedish', 'Svenska', array(
    'Brick:Portal:Filter:Name' => 'Förfiltrera en bricka',
    'Brick:Portal:Filter:SearchInput:Placeholder' => 't.ex. anslut wifi',
    'Brick:Portal:Filter:SearchInput:Submit' => 'Sök',
));
