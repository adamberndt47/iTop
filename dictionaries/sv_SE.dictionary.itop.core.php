<?php
Dict::Add('SV SE', 'Swedish', 'Svenska', array(
    'Core:DeletedObjectLabel' => '%1$s (raderad)',
    'Core:DeletedObjectTip' => 'Objektet har raderats den %1$s (%2$s)',

    'Core:UnknownObjectLabel' => 'Objekt hittades inte (klass: %1$s, id: %2$d)',
    'Core:UnknownObjectTip' => 'Objektet kunde inte hittas. Det kan ha raderats tidigare och loggen har sedan dess rensats.',

    'Core:UniquenessDefaultError' => 'Unikhetsregel "%1$s" har ett fel',
    'Core:CheckConsistencyError' => 'Regler för konsekvens följs inte: %1$s',
    'Core:CheckValueError' => 'Oväntat värde för attributet "%1$s" (%2$s): %3$s',

    'Core:AttributeLinkedSet' => 'Array av objekt',
    'Core:AttributeLinkedSet+' => 'Alla typer av objekt av samma klass eller underklass',

    'Core:AttributeLinkedSetDuplicatesFound' => 'Dubbletter hittades i fältet "%1$s": %2$s',

    'Core:AttributeDashboard' => 'Instrumentpanel',
    'Core:AttributeDashboard+' => '',

    'Core:AttributePhoneNumber' => 'Telefonnummer',
    'Core:AttributePhoneNumber+' => '',

    'Core:AttributeObsolescenceDate' => 'Utgångsdatum',
    'Core:AttributeObsolescenceDate+' => '',

    'Core:AttributeTagSet' => 'Lista över taggar',
    'Core:AttributeTagSet+' => '',
    'Core:AttributeSet:placeholder' => 'klicka för att lägga till',
    'Core:Placeholder:CannotBeResolved' => '(%1$s: kan inte lösas)',
    'Core:AttributeClassAttCodeSet:ItemLabel:AttributeFromClass' => '%1$s (%2$s)',
    'Core:AttributeClassAttCodeSet:ItemLabel:AttributeFromOneChildClass' => '%1$s (%2$s från %3$s)',
    'Core:AttributeClassAttCodeSet:ItemLabel:AttributeFromSeveralChildClasses' => '%1$s (%2$s från underklasser)',

    'Core:AttributeCaseLog' => 'Logg',
    'Core:AttributeCaseLog+' => '',

    'Core:AttributeMetaEnum' => 'Beräknad lista',
    'Core:AttributeMetaEnum+' => '',

    'Core:AttributeLinkedSetIndirect' => 'Array av objekt (N-N)',
    'Core:AttributeLinkedSetIndirect+' => 'Alla typer av objekt [underklass] av samma klass',

    'Core:AttributeInteger' => 'Heltal',
    'Core:AttributeInteger+' => 'Numeriskt värde (kan vara negativt)',

    'Core:AttributeDecimal' => 'Decimaltal',
    'Core:AttributeDecimal+' => 'Decimalt värde (kan vara negativt)',

    'Core:AttributeBoolean' => 'Boolean',
    'Core:AttributeBoolean+' => '',
    'Core:AttributeBoolean/Value:null' => '',
    'Core:AttributeBoolean/Value:yes' => 'Ja',
    'Core:AttributeBoolean/Value:no' => 'Nej',

    'Core:AttributeArchiveFlag' => 'Arkivflagga',
    'Core:AttributeArchiveFlag/Value:yes' => 'Ja',
    'Core:AttributeArchiveFlag/Value:yes+' => 'Detta objekt är synligt endast i arkivläge',
    'Core:AttributeArchiveFlag/Value:no' => 'Nej',
    'Core:AttributeArchiveFlag/Label' => 'Arkiverad',
    'Core:AttributeArchiveFlag/Label+' => '',
    'Core:AttributeArchiveDate/Label' => 'Arkivdatum',
    'Core:AttributeArchiveDate/Label+' => '',

    'Core:AttributeObsolescenceFlag' => 'Föråldringsflagga',
    'Core:AttributeObsolescenceFlag/Value:yes' => 'Ja',
    'Core:AttributeObsolescenceFlag/Value:yes+' => 'Detta objekt är exkluderat från påverkansanalys och dolt från sökresultat',
    'Core:AttributeObsolescenceFlag/Value:no' => 'Nej',
    'Core:AttributeObsolescenceFlag/Label' => 'Föråldrad',
    'Core:AttributeObsolescenceFlag/Label+' => 'Beräknas dynamiskt baserat på andra attribut',
    'Core:AttributeObsolescenceDate/Label' => 'Föråldringsdatum',
    'Core:AttributeObsolescenceDate/Label+' => 'Ungefärligt datum när objektet anses vara föråldrat',

    'Core:AttributeString' => 'Sträng',
    'Core:AttributeString+' => 'Alfanumerisk sträng',

    'Core:AttributeClass' => 'Klass',
    'Core:AttributeClass+' => '',

    'Core:AttributeApplicationLanguage' => 'Användarspråk',
    'Core:AttributeApplicationLanguage+' => 'Språk och land (SV SE)',

    'Core:AttributeFinalClass' => 'Klass (auto)',
    'Core:AttributeFinalClass+' => 'Objektets verkliga klass (skapas automatiskt av kärnan)',

    'Core:AttributePassword' => 'Lösenord',
    'Core:AttributePassword+' => 'Lösenord för en extern enhet',

    'Core:AttributeEncryptedString' => 'Krypterad sträng',
    'Core:AttributeEncryptedString+' => 'Sträng krypterad med en lokal nyckel',
    'Core:AttributeEncryptUnknownLibrary' => 'Krypteringsbibliotek angivet (%1$s) är okänt',
    'Core:AttributeEncryptFailedToDecrypt' => '** dekrypteringsfel **',

    'Core:AttributeText' => 'Text',
    'Core:AttributeText+' => 'Flerlinjig teckensträng',

    'Core:AttributeHTML' => 'HTML',
    'Core:AttributeHTML+' => 'HTML-sträng',

    'Core:AttributeEmailAddress' => 'E-postadress',
    'Core:AttributeEmailAddress+' => 'E-postadress',

    'Core:AttributeIPAddress' => 'IP-adress',
    'Core:AttributeIPAddress+' => 'IP-adress',

    'Core:AttributeOQL' => 'OQL',
    'Core:AttributeOQL+' => 'Object Query Language-uttryck',

    'Core:AttributeEnum' => 'Lista',
    'Core:AttributeEnum+' => 'Lista med fördefinierade alfanumeriska strängar',

    'Core:AttributeTemplateString' => 'Mallsträng',
    'Core:AttributeTemplateString+' => 'Sträng som innehåller platshållare',

    'Core:AttributeTemplateText' => 'Malltext',
    'Core:AttributeTemplateText+' => 'Text som innehåller platshållare',

    'Core:AttributeTemplateHTML' => 'Mall HTML',
    'Core:AttributeTemplateHTML+' => 'HTML som innehåller platshållare',

    'Core:AttributeDateTime' => 'Datum/tid',
    'Core:AttributeDateTime+' => 'Datum och tid (år-månad-dag hh:mm:ss)',

    'Core:AttributeDate' => 'Datum',
    'Core:AttributeDate+' => 'Datum (år-månad-dag)',

    'Core:AttributeDeadline' => 'Deadline',
    'Core:AttributeDeadline+' => 'Datum, visat relativt till aktuell tid',

    'Core:AttributeExternalKey' => 'Extern nyckel',
    'Core:AttributeExternalKey+' => 'Extern (eller främmande) nyckel',

    'Core:AttributeHierarchicalKey' => 'Hierarkisk nyckel',
    'Core:AttributeHierarchicalKey+' => 'Extern (eller främmande) nyckel till föräldern',

    'Core:AttributeExternalField' => 'Extern fält',
    'Core:AttributeExternalField+' => 'Fält mappat till en extern nyckel',

    'Core:AttributeURL' => 'URL',
    'Core:AttributeURL+' => 'Absolut eller relativ URL som textsträng',

    'Core:AttributeBlob' => 'Blob',
    'Core:AttributeBlob+' => 'Alla binära innehåll (dokument)',

    'Core:AttributeOneWayPassword' => 'Envägskrypterat lösenord',
    'Core:AttributeOneWayPassword+' => 'Envägskrypterat (hashat) lösenord',

    'Core:AttributeTable' => 'Tabell',
    'Core:AttributeTable+' => 'Indexerat fält med två dimensioner',

    'Core:AttributePropertySet' => 'Egenskaper',
    'Core:AttributePropertySet+' => 'Lista med otyperade egenskaper (namn och värde)',

    'Core:AttributeFriendlyName' => 'Vänligt namn',
    'Core:AttributeFriendlyName+' => 'Attribut skapat automatiskt; det vänliga namnet beräknas efter flera attribut',

    'Core:FriendlyName-Label' => 'Fullständigt namn',
    'Core:FriendlyName-Description' => 'Fullständigt namn',

    'Core:AttributeTag' => 'Taggar',
    'Core:AttributeTag+' => '',

    'Core:Context=REST/JSON' => 'REST',
    'Core:Context=Synchro' => 'Synkronisering',
    'Core:Context=Setup' => 'Installation',
    'Core:Context=GUI:Console' => 'Konsol',
    'Core:Context=CRON' => 'cron',
    'Core:Context=GUI:Portal' => 'Portal',
));
?>
