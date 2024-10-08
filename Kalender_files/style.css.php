@charset "utf-8";
/* Allgemein */
body
{
	background-color: white;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	width: 100%;
	height: 100%;
	margin:0px;
	border-width:0px;
	border-style:none;
	padding:0px;
}
body.main /* Workaround fuer Farbverlauf im IE statt ShadowBox */
{
	background-color: white;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	height: 100%;
	width: 100%;
	margin:0px;
	border-width: 2px;
	border-style: none;
	padding:0px;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#cccccc',endColorstr='#ffffff');
}
html
{
	height: 100%;
}
iframe
{
	margin:0px;
	padding:0px;
	height: 100%;

	 /* border-width:1px;
	border-style:solid;  */
}
textarea
{
	font-family: Arial, Helvetica, sans-serif;
}
form
{
	font-family: Arial, Helvetica, sans-serif;
}
p
{
	margin-top: 0px;
}
hr
{
	color:#CCCCCC;
	height:1px;
}
ul
{
	padding-left: 0px;
	padding-top: 2px;
	padding-bottom: 2px;
	margin-left: 6px;
}
ol
{
	padding-left: 13px;
	padding-top: 2px;
	padding-bottom: 2px;
	margin-left: 6px;
}
ul li
{
	list-style-image:url(images/square_blue.png);
	padding-left: 0px;
	padding-top: 2px;
	padding-bottom: 2px;
	margin-left: 6px;
}
li.ui-menu-item
{
	list-style-image:none;
}
.btn-testtool
{
	width: 200px;
	margin-top: 20px;
}
#menue
{
	bottom: 2%;
	width: 17%;
	height: 81%;
	z-index: 10;
	padding: 0px;
	margin: 0px;
}
html>body #menue
{
	position:absolute;
}

#content
{
	bottom: 2%;
	width:81%;
	height:81%;
	z-index: 10;
	left:18%;
	padding: 0px;
	margin: 0px;
}
#content /* Hack für IE8 */
{
	*width: 75\%;
	*left: 21\%;
}
html>body #content
{
	position:absolute;
}

/*   Druckausgabe */
@media print
{
	#menue
	{
		display:none;
	}
	#content
	{
	width:98%;
	z-index: 10;
	left:1%;
	}
}
input.TextBox
{
	background-color: White;
}
/*
==== Formularfelder und Buttons ====
*/

/* Such-Feld CIS-Suche */
input.search input.text
{
	background-color: #E9ECEE;
	border-width: 1px;
	border-style:solid;
	border-color: #A5AFB6;
}
#globalsearch
{
	background-color: #E9ECEE;
	border-width: 1px;
	border-style:solid;
	border-color: #A5AFB6;
	height: 25px;
}
/* Login-Button CIS-Seite */
input.cis_login
{
	cursor: pointer;
	color: #666666;
	border: 1px solid #A5AFB6;
	background-color: #E9ECEE;
	width: 150px;
	height: 35px;
	font-size: 20px;
}
#GlobalMenu
{
	margin-top: 3px;
	text-align: right;
}
.home_logo
{
	background-image:url(styles/tw/TWLogo_klein.jpg);
	background-repeat: no-repeat;
	width:170px;
	height:53px;
}

div.tip
{
	position: absolute;
	display: none;
	width: 300px;
	background-color: #f7f7ee;
	padding: 3px 7px 4px 6px;
	border: 1px solid #336;
	background-color: #f7f7ee;
	text-align: left;
}
#header
{
	vertical-align:middle;
}

/*
==== Links ====
*/
a /*allgmeiner Link, Hauptmenuelinks*/
{
	color: #0086CC; /*tw-blau*/
	text-decoration: none;
	cursor: pointer;
}
a:hover /*link ohne Item-Definition*/
{
	color: #0086CC; /*tw-blau*/
	text-decoration: underline;
}
a.ItemTesttool
{
	color: #000;
	line-height: 25px;
	display:block;
	padding: 5px 10px 5px 10px;
}

a.ItemTesttool.navButton
{
	background-color: #0a629c;
	color: white;
	padding: 10px;
}
a.ItemTesttoolAktiv
{
	color: #000;
	line-height: 25px;
	display:block;
	padding: 5px 10px 5px 10px;
	text-decoration: none;
}
a.ItemTesttoolBeendet
{
	color: #C7C8C9;
	line-height: 25px;
	display:block;
	padding: 5px 10px 5px 10px;
	cursor: default;
	text-decoration: none;
}
a:hover.ItemTesttool
{
	color: #000;
	line-height: 25px;
	text-decoration: none;
	padding: 5px 10px 5px 10px;
}
a:hover.ItemTesttool.navButton
{
	background-color: steelblue;
	color: white;
	padding: 10px;
}
a.HyperItem /* ? */
{
	color: Black; text-decoration: none;
	font-weight: bold;
}
a:hover.HyperItem /* ? */
{
	color: #008381; text-decoration: none;
	font-weight: bold;
}
a[onClick]:hover.Item /* ? */
{
	color: Black; text-decoration: none;
}
a:hover.Item /*allgemeine Links, Hauptmenuelink*/
{
	color: #0086CC; /*tw-blau*/
	text-decoration: underline;
}
a.Item2 /* zB in den Lehrveranstaltungen (Buttons) verwendet bei den Lektoren */
{
	color: Black; text-decoration: none;
}
a:hover.Item2 /* zB in den Lehrveranstaltungen (Buttons) verwendet bei den Lektoren */
{
	color: #008381; text-decoration: none;
}
a.MenuItem /* Hauptmenuelink zum aufklappen */
{
	color: #0086CC; text-decoration: none;
	font-weight: bold;
}
a:hover.MenuItem /* Hauptmenuelink zum aufklappen */
{
	color: #0086CC; /*tw-blau*/
	text-decoration: none;
	font-weight: bold;
}
a:focus.MenuItem /* Hauptmenuelink zum aufklappen */
{
	color: #0086CC; /*tw-blau*/
	text-decoration: none;
	font-weight: bold;
}
A.stpl_detail
{
	font-size:x-small;
	color:#000000;
	text-decoration:none;
}
A.stpl_detail:hover
{
	font-size:x-small;
	color:#000000;
	text-decoration:underline;
	/*cursor:hand;*/
}
a.head
{
   color:#ffffff;
}
a.head:hover
{
	color:#000000;
}


/*
==== Tables ====
*/
TABLE
{
	font-size: 13px;
}
TABLE.header
{
	width:100%;
	height:100%;
	/* background-image:url(../skin/images/header.png); */
	/* background-repeat:no-repeat; */
	background-color: white;
	position: relative;
}
TABLE.header_content
{
	height: 13%;
	width: 100%;
	position: absolute;
	z-index:4;
}
/* Firefox Hack, da er den absolute-Wert der position als einziger nicht richtig dargestellt hat*/
@-moz-document url-prefix()
{
    TABLE.header_content
    {
        height: 13%;
		width: 100%;
		position: relative;
		z-index:4;
    }
}
TABLE.cmstable /* Die Haupttable aller CMS-Contentseiten */
{
	margin: 0px;
	padding: 0px;
	border: none;
	width: 100%;
}
TABLE.tabcontent
{
	margin: 0px;
	padding: 0px;
	border-style: none;
	width: 100%;
	background-color: white;
	vertical-align: top;
	border-spacing:0;
}
TABLE.menue
{
	margin: 0px;
	padding: 0px;
	border-style: none;
	width: 100%;
}
TABLE.menue TD
{
	padding-bottom: 2px;
	padding-top: 2px;
}
TABLE.tabcontent2
{
	margin: 0px;
	padding: 0px;
	border-style: none;
}
TABLE.tabborder
{
	width: 100%;
	/*border: 1px solid black; foo*/
}
TABLE#tabterm
{
	margin:auto;
}

.well
{
	background-color: white;
	border: 2px solid #add4ea;
}
td.rand /* Seitenraender des CIS */
{
	font-size: 11px;
	padding-top: 0px;
	padding-left: 6px;
	width: 3%;
	height: 100%;
	vertical-align: middle;
}
td.boxshadow /* Farbverlauf im Hintergrund der CIS*/
{
	position: relative;
	width:94%;
	height: 100%;
	box-shadow: 0px 100px 0px 0px #FFFFFF, /* Unterer weisser Rand bei sehr kleinen Aufloesungen */
				0px 0px 5px 5px #888, /* schmaler dunkler Schatten */
				/*0px 300px 5px 5px #888, /* schmaler dunkler Schatten unten bei sehr kleinen Aufloesungen*/
				20px 20px 70px 30px #DDDDDD, /* heller Verlauf rechts */
				-20px 20px 70px 30px #DDDDDD; /* heller Verlauf links */
}
td.ContentHeader
{
	background-color: #A5AFB6; /*#DCE4EF;*/
	font-weight: bold;
	height: 19px;
}
td.ContentHeader2
{
	color: #0086CC; /*tw-blau */
	font-weight: normal;
}
td.ContentHeader3
{
	color: #0086CC;; /*tw-blau */
	font-weight: bold;
}
td.MarkLine
{
	background-color: #F2F2F2; /*wie EEEEEE; also grau fast weiss */
}
td.HeaderTesttool /*fuer die Button-Optik beim Testtool*/
{
	color: #FFFFFF;
	background-color: #00639C;
	white-space:nowrap;
	line-height: 25px;
	box-shadow: inset 0 0 2px #FFFFFF;
	padding: 10px;
	width: 170px;
}
td.HeaderTesttoolSTG /*fuer die Button-Optik der Quereinstiegs-Studiengänge beim Testtool*/
{
	color: white;
	border: 2px solid #73a9d6;
	padding: 10px;
	max-width: 100px;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: normal;
}
td.Inaktiv  /*fuer Inaktive Items bei der Raumbeschreibung */
{
  background-color: #F2F2F2; /*wie EEEEEE; also grau fast weiss */
  color: #CFCFCF;
  text-decoration: line-through;
}
td.ItemTesttool /*fuer die Button-Optik beim Testtool*/
{
	color: #000;
	white-space: initial;
	box-shadow: inset 0 0 2px #00639C;
	width: 170px;
	display: inline-block;
}
td:hover.ItemTesttool
{
	color: #000;
	white-space: initial;
	box-shadow: inset 0px 0px 2px 2px #00639C;
	width: 170px;
	display: inline-block;
}
td.ItemTesttoolAktiv /*fuer die Button-Optik beim Testtool*/
{
	color: #000;
	white-space: initial;
	box-shadow: 0px 0px 2px 2px #00639C;
}
td.ItemTesttoolBeendet /*fuer die Button-Optik beim Testtool*/
{
	background-color: #FFFFFF;
	white-space: initial;
	box-shadow: inset 0px 0px 2px 2px #EAECED;
}
td:hover.ItemTesttoolBeendet
{
	color: #EAECED;
	background-color: #FFFFFF;
	white-space: initial;
	box-shadow: inset 0px 0px 2px 2px #EAECED;
}
div.TesttoolTitle /* Ueberschrift auf den Titelfolien */
{
	font-size: 400%;
	font-family: Helvetica, Arial, sans-serif;
	text-transform: uppercase;
	color: #FFFFFF;
	white-space: nowrap;
	text-shadow: -1px 0 #00639C, 0 1px #00639C, 1px 0 #00639C, 0 -1px #00639C;
	margin: 0 0 20px 0;
}
td.tdwidth10
{
	width: 5px;
	/* width: 10px; */
}
td.tdwidth30
{
	width: 30px;
}
td.tdgreen
{
	background-color: #CCFFCC;
}
td.tdborder
{
	text-align: center;
	border:2px solid black;
	background-color: #ffffff;
}
td.tdwrap
{
	white-space: nowrap;
	color: #0086CC;
}
td.tdvertical /* Für Ausrichtung der Icons bei der LV-Übersicht */
{
	vertical-align: top;
	padding: 10px 0 10px 0;
	width: 33.33%;
	/* height: 100px; */
}
td.menubox /* Navigationsboxen in den CIS-Contentseiten */
{
	width: 20%;
	height: 10px;
	background-color: #eeeeee;
	padding: 20px 15px 20px 15px;
	vertical-align: middle;
}
td.menubox p
{
	line-height: 110%;
}
td.cmscontent
{
	vertical-align: top;
	padding-right: 25px;
	padding-left: 0px;
}
td.teambox
{
	vertical-align: top;
	padding-top: 20px;
}
TR.liste
{
	background-color: #D3DCE3; /*grau wie #DDDDDD*/
}
TR.liste0
{
	background-color: #FFFFFF; /*wei�*/
}
TR.liste1
{
	background-color: #EEEEEE; /*grau fast wei�*/
}
TR.tryellow
{
	background-color: #FFFF99;
}

/* private/profile/zeitsperre.php */
TABLE#zeitsperren
{
	/*border: 1px solid black; foo*/
	width:100%;
}
TABLE#zeitsperren TH
{
	background-color: #DDDDDD; /*hellgrau*/
}
TABLE#zeitsperren TH.feiertag
{
	background-color: #FFFF00; /*grelles gelb*/
}
TABLE#zeitsperren TD.feiertag
{
	background-color: #FFFF22; /*bissi helleres gelb*/
}
TABLE#zeitsperren TD
{
	background-color: #EEEEEE; /*grau fast wei�*/
}

/*
==== Stundenplan ====
*/

TABLE.stdplan
{
	margin: 0px;
	padding: 0px;
	/* border: 1px solid; */
	width: 100%;
	background-color: white;
	vertical-align: top;
	border-spacing:1;
}
TABLE.stdplan TH
{
	background-color: #A5AFB6;
}
TABLE.stdplan TD
{
	background-color: #E9ECEE;
}

/*reservation delete-"x"*/
TABLE.stdplan div.reservdelete {
	text-align: right;
	margin-bottom:-4px;
	padding-top: 2px;
	padding-right: 2px;
}

.row-even { /*liste1*/
 background-color:#f2f2f2;
}

.row-odd { /*liste0*/
  background-color:#ffffff;
}

/*lecturer reservation rows*/
td.lecturercell {
	border: 1px solid;
}

td.lecturercell div.lecturercellname {
	width: 95%;
	float: left;
}

td.lecturercell div.lecturercelldelete {
	width: 5%;
	float: left;
	text-align: right;
	cursor: pointer;
}

/*
==== Fonts ====
*/

h1
{
	color: black;
	padding: 0px;
	padding-bottom: 20px;
	/* padding-left: 10px; */
	/* width:20%; */
	margin:0px;
	white-space:nowrap;
	font-size: 20px;
	/* letter-spacing: 2px;
	border-bottom:solid 1px #0086CC;*/
	font-weight:normal;
}
h1 td
{
	color: #ffffff;
	background-color: #009e84;
}
h2
{
	margin: 0px;
	padding-top: 0px;
	padding-bottom: 15px;
	/* padding-left: 10px; */
	font-weight: bold;
	font-size: 15px;
}
h3
{
	margin: 0px;
	padding-top: 0px; /* 20px */
	padding-bottom: 2px;
	font-weight: bold;
	font-size:13px;
}
h4
{
	margin: 0px;
	padding: 0px;
	text-decoration: underline;
	font-weight: normal;
	font-size:13px;
}
.error
{
	color: #ff0000;
}
#news .news
{
	width: 99%;
	background-color: #A5AFB6; /* grauvariante A5AFB6 */
}
#news .news .titel table
{
	padding: 3px 10px 3px 10px;
	color: #ffffff;
	font-weight: 500;
}
#news .news .text
{
	background-color: #E9ECEE; /* grauvariante E9ECEE */
	padding: 10px;
}

/* Margin von ersten und letzten P tag entfernen, da sonst
   breite Raender entstehen koenne*/
#news .news .text p:first-child
{
	margin-top:0px;

}
#news .news .text p:last-child
{
	margin-bottom:0px;
}

/*
==== Images ====
*/
img.testtoolfrage
{
	max-width:400px;
	max-height:300px;
}
img.testtoolvorschlag
{
	max-width:200px;
	max-height:150px;
}
img
{
	border: 0;
}
img.lvplanbutton
{
	border:0;
	vertical-align: bottom;
}
img#layout
{
	border: 1px solid #AAAAAA;
}
img.lv
{
	width: 40px;
	height: 40px;
	padding-bottom: 5px;
}
/*img.header_left
{
	position: absolute;
	left: 0px;
	z-index: 1;
	max-width: 100%;
	height: 16%;
}
img.header_right
{
	position: absolute;
	right: 0px;
	z-index: 2;
	max-width: 100%;
	height: 16%;
}*/
img.header_logo
{
	position: absolute;
	left: 16px;
	top: 3%;
	z-index: 5000;
	height: 8%;
}
img.screenshot_boxshadow
{
	border: 1px solid grey;
	box-shadow: 0px 0px 5px 5px #888888;
	margin-left: 10px;
}
a:hover img.screenshot_boxshadow
{
	border: 1px solid grey;
	box-shadow: 0px 0px 5px 5px #0086CC;
	margin-left: 10px;
}
/*
==== Farben ====
*/

.grey
{
	color: #999999;
}
#bgcolor0
{
	background-color: #CC0000;
}
#bgcolor1
{
	background-color: #FF2200;
}
#bgcolor2
{
	background-color: #FF9922;
}
#bgcolor3
{
	background-color: #FFFF55;
}
#bgcolor4
{
	background-color: #88FF88;
}
#bgcolor5
{
	background-color: #AAFFAA;
}
#bgcolor6
{
	background-color: #CCFFCC;
}
.studentnote
{
	font-weight:bold;
}
.benotungstool_tabs
{
	border-top: 1px solid gray;
	border-left: 1px solid gray;
	border-right: 1px solid gray;
	text-align: center;
}
.benotungstool_tabs_active
{
	border-top: 2px solid gray;
	border-left: 2px solid gray;
	border-right: 2px solid gray;
	background-color: #eeeeee;
	text-align: center;
}
.benotungstool_subtab
{
	border-top: 1px solid gray;
	border-bottom: 1px solid gray;
}
.ok
{
	color: green;
}
.ausblenden {display:none;}
.einblenden {display:block;}

/* Inaktive Elemente in einem DropDown */
option.inactive
{
	text-decoration:line-through;
}

/* Difference Engine */
.diffchange-inline
{
	background-color: yellow;
}
.diff-deletedline
{
	background-color: lightgray;
}
.diff-marker
{
	background-color: none;
}
.diff-addedline
{
	background-color: lightgreen;
}

.suchmarker
{
	font-weight: bold;
	text-decoration: underline;
	font-size: medium;
}
.suchergebnis:hover
{
	background-color: #EEEEEE;
}
.suchergebnis a
{
	font-weight: bold;
}
.suchergebnis
{
	padding-bottom: 15px;
}
.suchicon
{
	margin:0px;
	height: 14px;
}
.suchicon:hover
{
	cursor:pointer;
	cursor:hand;
}

/*
==== Kalender-Jump-Effekt im LV-Plan ====
*/
div.hoverbox div.preview div.hoverbox_inhalt
{
	display:none;
	vertical-align: top;
}
div.preview
{
	position: relative;
	vertical-align: top;
}
div.hoverbox div.preview:hover div.hoverbox_inhalt
{
	display: block;
	position: absolute;
	top: 15px;
	left: -190px;
	z-index: 2;
	border:1px;
	border-color:grey;
	background-color:white;
}
table.hoverbox
{
	border:1px;
	border-style:solid;
	border-color:grey;
	padding: 5px;
}

/*
==== Gestaltung des Hauptmenues ====
*/

ul.menu
{
	padding:0;
	margin:0;
	font-family:Arial, Helvetica, sans-serif;
	color:#0086CC;
	font-size:13px;
	line-height:15px;
	width:200px;
	list-style-type:none;
}
#menu
{
	padding:0;
	margin:0;
	font-family:Arial, Helvetica, sans-serif;
	color:#0086CC;
	font-size:13px;
	line-height:18px;
	width:200px;
	list-style-type:none;
}
#menu a
{
	display:block;
	padding:0 0 0 5px;
	outline:none;
	text-decoration:none;
}
#menu li
{
	margin:0 0 0 10px;
	padding: 5px 0 0 0;
	display:block;
	border:1px solid #FFFFFF;
}
#menu a.selected
{
	padding:0 0 0 5px;
}
#menu a:hover
{
	text-decoration: underline;
}
#menu a.leaf
{
	color: #616B71;
	padding-left: 5px;
}


/* LV Angebot im Studienplan */
.angebot
{
	border: 1px solid #edd400;
}

/* Empfehlung im Studienplan */
.empfehlung
{
	border: 1px solid green;
}

/*
==== Menubox-Effekt am Seitenrand. Nettes Feature aber dzt. nicht sinnvoll einsetzbar ====
*/

/*
div.hoverbox div.preview div.hoverbox_inhalt
{
	display:none;
}

div.preview
{
	position:relative;
}


div.hoverbox div.preview:hover div.hoverbox_inhalt
{
	display: block;
	position: absolute;
	top: -21px;
	left: -158px;
	z-index: 1;
	border:1px;
	border-color:grey;
	background-color:white;
}
table.hoverbox
{

	border:1px;
	border-style:solid;
	border-color:grey;
}
*/

body.bewerbung table,
body.anwesenheit table {
	border-collapse: collapse;
	width: 100%;
}

body.bewerbung table.reihungstest,
body.anwesenheit table {
	table-layout: fixed;
}

body.bewerbung table th,
body.bewerbung table td,
body.anwesenheit table th,
body.anwesenheit table td {
	padding: 3px;
	border: 1px solid black;
	text-align: center;
}

body.bewerbung table.reihungstest td:nth-child(5) {
	text-align: left;
}

body.bewerbung .ui-tabs-vertical .ui-tabs-panel {
	width: 75em;
}

body.bewerbung table.reihungstest th:nth-child(1),
body.bewerbung table.reihungstest th:nth-child(2),
body.bewerbung table.reihungstest th:nth-child(3),
body.bewerbung table.reihungstest th:nth-child(4),
body.bewerbung table.reihungstest th:nth-child(6) {
	width: 10%;
}

body.bewerbung table.reihungstest th:nth-child(5) {
	width: 50%;
}

body.anwesenheit {
	padding-bottom: 20px;
}

body.anwesenheit div.lv {
	margin: 10px;
	padding-top: 10px;
	padding-left: 10px;
	background-color: #f2f8ff;
	border: 1px solid #2353b2;
}

body.anwesenheit div.lv + div.lv {
/*	border-top: 1px dashed rgb(193,193,193);*/
}

body.anwesenheit div.lv > div {
	width: 300px;
	display: inline-block;
	vertical-align: middle;
}

body.anwesenheit div.progress-wrapper {
	border: 1px solid black;
}

body.anwesenheit div.progress {
	height: 20px;
}

body.anwesenheit div.progress.green {
	background-color: #008000;
}

body.anwesenheit div.progress.yellow {
	background-color: #ffa500;
}

body.anwesenheit div.progress.red {
	background-color: #dc143c;
}

body.anwesenheit span.fehlstunden-details {
	cursor: pointer;
	font-weight: bold;
}

body.anwesenheit table {
	margin: 5px;
}

body.anwesenheit form {
	margin: 10px;
}

div.header_logo
{
	position: absolute;
	left: 16px;
	top: 3%;
	z-index: 5000;

	background-image:url(styles/tw/logo_250x130.png);
	background-repeat: no-repeat;
	width:170px;
	height:51px;
	background-size: contain;
}

td.headerbar
{
	background-image: url(styles/tw/header.png);
	background-position: top;
	background-repeat: repeat-x;"
}

div.cis_logo
{
	background-image:url(styles/tw/cis_logo_text_400x78.png);
	background-repeat: no-repeat;
	width: 400px;
	height: 78px;
}

