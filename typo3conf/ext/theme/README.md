# TYPO3 Workshop "theme" Extension

Diese Extension beinhaltet die Dateien unserer Provider Extension, in welcher wir die Integration der Website gespeichert haben.

## ext:theme und Website (DB, fileadmin) importieren

Möchtest du dir einen aktuellen Stand "importieren", so sind folgende Schritte zutun:

  * Vorraussetzung ist das du eine laufende TYPO3 Instanz hast.
  * Am einfachsten ist es, dieses Repository als Zip Datei herunterzuladen.
  * Anschließend entpacken und daraus die bestehende Extension "theme" (`typo3conf/ext/theme`) entnehmen und überschreiben.
  * Um nun den Inhalt der Website (gesamte Datenbank und etwaige Bilder) zu importieren, findest du im Ordner `typo3conf/ext/theme/Resources/Private/Dumps/` den Datenbank-Dump gemeinsam mit dem Ordner `fileadmin` (stets aus dem neuesten Unterordner - sind nach Datum benannt).
  * * Erster Schritt ist den Dump in deine bestehende Datenbank zu importieren (die aktuelle Datenbank wird überschrieben)
  * * Zweiter Schritt: Kopieren des Ordners `fileadmin` in den Root der TYPO3 Website (dabei wird der bestehende `fileadmin` überschrieben).
  * Nun sollte das Frontend bzw TYPO3 Backend erreichbar sein.
  * * Erscheint ggf. ein Error so kann man über das Install Tool bzw. wenn dies nicht ausreichend ist, durch das Leeren des Ordners `typo3temp` den TYPO3 Cache leeren.
  * * Der verwendete Benutzer und das dazugehörige Passwort wird auf der Loginmaske des TYPO3 Backends dargestellt. Dies wurde durch den MySQL-Import ebenso neu gesetzt, da der Inhalt der gesamten Datenbank ausgetauscht wurde (Seiten, Inhalte, Backendbenutzer, etc..)
  * Extensionabhängigkeiten erfüllen:
  * * Um die Abhängigkeiten zu anderen 3rd Party Extensions automatisch zu erfüllen, kann man dies durch Deinstallieren und anschließendes Installieren der Theme Extension erreichen. (Beim Installieren einer Extension werden auch die Abhängigkeiten berücksichtigt und automatisch von TYPO3 aus dem Internet geladen und installiert (`typo3conf/ext/theme/ext_emconf.php`))