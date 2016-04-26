<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (c) 2005-2014 Leo Feyer
 * 
 * Core translations are managed using Transifex. To create a new translation
 * or to help to maintain an existing one, please register at transifex.com.
 * 
 * @link http://help.transifex.com/intro/translating.html
 * @link https://www.transifex.com/projects/p/contao/language/de/
 * 
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

// system/modules/core/languages/de/exception.xlf
$GLOBALS['TL_LANG']['XPT']['error'] = 'Es ist ein Fehler aufgetreten';
$GLOBALS['TL_LANG']['XPT']['matter'] = 'Was ist das Problem?';
$GLOBALS['TL_LANG']['XPT']['howToFix'] = 'Wie kann ich das Problem lösen?';
$GLOBALS['TL_LANG']['XPT']['more'] = 'Weitere Informationen';
$GLOBALS['TL_LANG']['XPT']['hint'] = 'Legen Sie ein Template namens <em>%s</em> an, um diese Meldung anzupassen.';
$GLOBALS['TL_LANG']['XPT']['errorOccurred'] = 'Bei der Ausführung des Skriptes ist ein Fehler aufgetreten. Irgendetwas funktioniert nicht richtig.';
$GLOBALS['TL_LANG']['XPT']['errorFixOne'] = 'Öffnen Sie die Datei <code>system/logs/error.log</code> und suchen Sie die zugehörige Fehlermeldung (normalerweise die letzte). Sie können auch folgende Zeile in die lokale Konfigurationsdatei einfügen und diese Seite neu laden:';
$GLOBALS['TL_LANG']['XPT']['errorFixTwo'] = 'Beachten Sie jedoch, dass in diesem Fall <strong>jeder</strong> die Fehlermeldungen auf Ihrer Webseite sehen kann!';
$GLOBALS['TL_LANG']['XPT']['errorExplain'] = 'Die Skriptausführung wurde gestoppt, weil irgendetwas nicht korrekt funktioniert. Die eigentliche Fehlermeldung wird aus Sicherheitsgründen hinter dieser Meldung verborgen und findet sich in der Datei <code>system/logs/error.log</code> (siehe oben). Wenn Sie die Fehlermeldung nicht verstehen oder nicht wissen, wie das Problem zu beheben ist, durchsuchen Sie die <a href="https://contao.org/faq.html" target="_blank">Contao-FAQs</a> oder besuchen Sie die <a href="https://contao.org/support.html" target="_blank">Contao-Supportseite</a>.';
$GLOBALS['TL_LANG']['XPT']['requestToken'] = 'Ungültiger Anfrage-Token';
$GLOBALS['TL_LANG']['XPT']['invalidToken'] = 'Der Request-Token konnte nicht validiert werden.';
$GLOBALS['TL_LANG']['XPT']['tokenRetry'] = 'Bitte <a href="javascript:window.location.href=window.location.href">klicken Sie diesen Link</a> und versuchen Sie es erneut. Verwenden Sie nicht die Zurück-Schaltfläche Ihres Browsers.';
$GLOBALS['TL_LANG']['XPT']['tokenExplainOne'] = 'Der Fehler tritt bei einer POST-Anfrage ohne gültigen Request-Token auf. In Contao 2.10 wurde die Referer-Prüfung durch ein Request-Token-System ersetzt. Wenn das Problem anhält, verwenden Sie eventuell eine inkompatible Drittanbieter-Erweiterung oder haben Ihre Contao-Installation nicht vollständig aktualisiert.';
$GLOBALS['TL_LANG']['XPT']['tokenExplainTwo'] = 'Durchsuchen Sie die <a href="https://contao.org/faq.html" target="_blank">Contao-FAQs</a> oder besuchen Sie die <a href="https://contao.org/support.html" target="_blank">Contao-Supportseite</a> für weitere Informationen.';
$GLOBALS['TL_LANG']['XPT']['incomplete'] = 'Unvollständige Installation';
$GLOBALS['TL_LANG']['XPT']['incompleteInstallation'] = 'Die Installation wurde nicht abgeschlossen, daher kann Contao nicht korrekt funktionieren.';
$GLOBALS['TL_LANG']['XPT']['incompleteFixOne'] = 'Rufen Sie folgende URL in Ihrem Browser auf:';
$GLOBALS['TL_LANG']['XPT']['installPath'] = 'pfad-zur-installation';
$GLOBALS['TL_LANG']['XPT']['incompleteFixTwo'] = 'Dadurch kommen Sie zum Contao-Installtool, das Sie durch den Installationsprozess führen wird.';
$GLOBALS['TL_LANG']['XPT']['incompleteExplain'] = 'Weitere Informationen finden Sie im <a href="https://contao.org/manual/installation.html" target="_blank">Contao-Handbuch</a>.';
$GLOBALS['TL_LANG']['XPT']['notFound'] = 'Seite nicht gefunden';
$GLOBALS['TL_LANG']['XPT']['pageNotFound'] = 'Die angeforderte Seite gibt es nicht unter dieser Domain.';
$GLOBALS['TL_LANG']['XPT']['notFoundFix'] = 'Rufen Sie die <a href="%s">Startseite</a> auf und verwenden Sie die Suche (falls vorhanden), um die gewünschte Seite zu finden. Sie können auch den <a href="%s">Webmaster</a> kontaktieren und ihn über das Problem informieren.';
$GLOBALS['TL_LANG']['XPT']['noForward'] = 'Zielseite nicht gefunden';
$GLOBALS['TL_LANG']['XPT']['noForwardPage'] = 'Gemäß Konfiguration müsste die Applikation die Anfrage zu einer anderen Seite umleiten, jedoch existiert diese Zielseite nicht oder wurde noch nicht veröffentlicht.';
$GLOBALS['TL_LANG']['XPT']['noForwardFix'] = 'Dieses Problem muss vom Administrator der Webseite behoben werden. Wenn Sie ein Besucher sind, können Sie nichts weiter tun als den <a href="%s">Webmaster</a> zu kontaktieren und ihn über das Problem zu informieren.';
$GLOBALS['TL_LANG']['XPT']['noRoot'] = 'Keinen Startpunkt gefunden';
$GLOBALS['TL_LANG']['XPT']['noRootPage'] = 'Es gibt keinen Startpunkt einer Webseite, der zu der angefragten Sprache und/oder Domain passt.';
$GLOBALS['TL_LANG']['XPT']['noRootFix'] = 'Wenn Sie explizit eine Sprache gesetzt haben, gehen Sie zur <a href="%s">Startseite</a> und sehen Sie, ob Sie automatisch weitergeleitet werden. Andernfalls kontaktieren Sie den <a href="%s">Webmaster</a> und informieren Sie ihn über das Problem.';
$GLOBALS['TL_LANG']['XPT']['noLayout'] = 'Kein Layout angegeben';
$GLOBALS['TL_LANG']['XPT']['noLayoutSpecified'] = 'Die angefragte Seite wurde noch nicht mit einem Seitenlayout verknüpft.';
$GLOBALS['TL_LANG']['XPT']['noLayoutFix'] = 'Stellen Sie sicher, dass jeder Startpunkt einer Webseite in der Seitenstruktur mit einem Seitenlayout verknüpft ist.';
$GLOBALS['TL_LANG']['XPT']['noLayoutExplain'] = 'Weitere Informationen finden Sie im <a href="https://contao.org/manual/managing-pages.html" target="_blank">Contao-Handbuch</a>.';
$GLOBALS['TL_LANG']['XPT']['noActive'] = 'Keine aktiven Seiten gefunden';
$GLOBALS['TL_LANG']['XPT']['noActivePages'] = 'Ihre Anfrage bezieht sich auf eine Webseite, die noch keine veröffentlichten Seiten enthält.';
$GLOBALS['TL_LANG']['XPT']['noActiveFix'] = 'Die Webseite befindet sich höchstwahrscheinlich noch im Aufbau und wird in ein paar Tagen online sein. Wenn Sie trotzdem denken, dass es ein Problem gibt, kontaktieren Sie den <a href="%s">Webmaster</a> und informieren Sie ihn darüber.';
$GLOBALS['TL_LANG']['XPT']['forbidden'] = 'Zugriff verweigert';
$GLOBALS['TL_LANG']['XPT']['notAuthenticated'] = 'Sie sind entweder nicht angemeldet oder verfügen nicht über die Rechte, um die angeforderte Seite aufzurufen.';
$GLOBALS['TL_LANG']['XPT']['forbiddenFix'] = 'Wenn Sie nicht angemeldet sind, gehen Sie zur <a href="%s">Startseite</a> und suchen Sie das Anmeldeformular. Wenn es kein Anmeldeformular gibt oder Sie bereits angemeldet sind, kontaktieren Sie den <a href="%s">Webmaster</a> und informieren Sie ihn über das Problem.';
$GLOBALS['TL_LANG']['XPT']['unavailable'] = 'Wir sind gleich zurück';
$GLOBALS['TL_LANG']['XPT']['maintenance'] = 'Die Webseite ist aufgrund von Wartungsarbeiten momentan nicht verfügbar. Bitte versuchen Sie es später noch einmal.';
