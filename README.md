SimpleColumns
=============

Funktionsumfang
---------------

Mit SimpleColumns lassen sich Inhaltselemente einfach und ohne Änderungen am Template oder Stylesheet in Spalten anordnen. Unterstützt werden 2- bis 5-spaltige Layouts für alle Inhaltselemente. Die Elemente können auch über mehrere Spalten reichen, also bspw. ein 4-spaltiges Layout mit 3 Spalten, bei der die letzte Spalte über zwei Spalten reicht.

Anpassungen
-----------

Die Positionierung wird standardmäßig über ein eingebautes Stylesheet realisiert. Das Stylesheet lässt sich in der `localconfig.php` einfach über `$GLOBALS['SIMPLECOLUMNS']['style']='…'` austauschen oder ganz entfernen, sodass eigene Styledefinitionen möglich sind, ohne ein unnötiges Stylesheet laden zu müssen.

Für alle Elemente werden eindeutige Klassennamen vergeben:

* Allgemein: `sc`, `sc-first`, `sc-last`, `sc-close` für die erste, letzte und manuell geschlossene Spalte
* Spalten: `sc2` bis `sc5` für normale Spalten und `sc3-2` bis `sc5-4` für breitere Spalten
* erste und letzte Spalte: `sc2-first` bis `sc5-last` für normale Spalten und `sc3-2-first` bis `sc5-4-last` für breitere Spalten
* Damit kann jedes Element eindeutig identifiziert und definiert werden.

Die Standardstyles arbeiten mit Prozentangaben und sollten mit den meisten Layout funktionieren. In den Inhaltselementen müssen keine Zeilen begonnen oder beendet werden – das geschieht automatisch. Wichtig ist nur, dass pro Zeile immer die passenden Spalten vorhanden sind.

Zusätzlich kann eine Zeile auch manuell beendet werden, sodass bspw. eine 3-spaltige Zeile schon nach zwei Elementen endet. Dies ist aber nur notwendig, wenn die Zeile vorzeitig beendet werden soll oder wenn nachfolgende Elemente, die nicht mit `simple_columns` positioniert werden, nicht richtig dargestellt werden.