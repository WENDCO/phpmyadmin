<?php
/* $Id$ */
// Peter Bakondy <bakondyp@freemail.hu>

$charset = 'iso-8859-2';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = '.';
$byteUnits = array('B�jt', 'KB', 'MB', 'GB');

$day_of_week = array('V', 'H', 'K', 'Sze', 'Cs', 'P', 'Szo');
$month = array('Jan', 'Feb', 'M�rc', '�pr', 'M�j', 'J�n', 'J�l', 'Aug', 'Szept', 'Okt', 'Nov', 'Dec');
// Le�r�s a $datefmt v�ltoz� defini�l�s�hoz:
// http://www.php.net/manual/en/function.strftime.php
$datefmt = '%Y. %B %d. %H:%M';


$strAccessDenied = 'Hozz�f�r�s megtagadva';
$strAction = 'Parancs';
$strAddDeleteColumn = 'Mez&#0337 Oszlopokat Hozz�ad/T�r�l';
$strAddDeleteRow = 'Krit�rium Sort Hozz�ad/T�r�l';
$strAddNewField = '�j mez&#0337 hozz�ad�sa';
$strAddPriv = '�j privil�giumot ad';
$strAddPrivMessage = 'Az �j privil�giumot hozz�adtam.';
$strAddSearchConditions = 'Keres�si felt�telek megad�sa (az \"ahol\" kik�t�sek):';
$strAddToIndex = 'Adj az indexhez &nbsp;%s&nbsp;oszlopot';
$strAddUser = '�j felhaszn�l� hozz�ad�sa';
$strAddUserMessage = 'Az �j felhaszn�l�t felvettem.';
$strAffectedRows = 'Keresett sorok:';
$strAfter = '%s ut�n';
$strAfterInsertBack = 'Vissza az el&#0337z&#0337 oldalra';
$strAfterInsertNewInsert = '�j sor besz�r�sa';
$strAll = 'Mind';
$strAlterOrderBy = 'T�bla megv�ltoz�sa rendezve e szerint:';
$strAnalyzeTable = 'T�bla vizsg�lat';
$strAnd = '�s';
$strAnIndex = 'Indexet hozz�adtam: %s';
$strAny = 'B�rmely';
$strAnyColumn = 'B�rmely oszlop';
$strAnyDatabase = 'B�rmely adatb�zis';
$strAnyHost = 'B�rmely hoszt';
$strAnyTable = 'B�rmely t�bla';
$strAnyUser = 'B�rmely felhaszn�l�';
$strAPrimaryKey = 'Elsodleges kulcsot hozz�adtam: %s';
$strAscending = 'N�vekv&#0337';
$strAtBeginningOfTable = 'A t�bla elej�n�l';
$strAtEndOfTable = 'A t�bla v�g�n�l';
$strAttr = 'Tulajdons�gok';

$strBack = 'Vissza';
$strBinary = 'Bin�ris';
$strBinaryDoNotEdit = 'Bin�ris - nem szerkeszthet&#0337';
$strBookmarkDeleted = 'A k�nyvjelzot t�r�ltem.';
$strBookmarkLabel = 'Felirat';
$strBookmarkQuery = 'Feljegyzett SQL-k�r�s';
$strBookmarkThis = 'Jegyezd fel az SQL-k�r�s';
$strBookmarkView = 'Csak megn�zhet&#0337';
$strBrowse = 'Tartalom';
$strBzip = '"bzip-pel t�m�r�tve"';

$strCantLoadMySQL = 'nem tudom bet�lteni a MySQL b&#0337v�tm�nyt,<br />ellen&#0337rizd a PHP konfigur�ci�t.';
$strCantRenameIdxToPrimary = 'Nem tudom �tnevezni az indexet PRIMARY-v�!';
$strCardinality = 'Sz�moss�g';
$strCarriage = 'Kocsivissza: \\r';
$strChange = 'V�ltoztat';
$strChangePassword = 'Jelsz� megv�ltoztat�sa';
$strCheckAll = '�sszeset kijel�li';
$strCheckDbPriv = 'Adatb�zis Privil�giumok Ellen&#0337rz�se';
$strCheckTable = 'T�bla ellen&#0337rz�s';
$strColumn = 'Oszlop';
$strColumnNames = 'Oszlop nevek';
$strCompleteInserts = 'Mez&#0337neveket is hozz�adja';
$strConfirm = 'Biztos, hogy v�gre akarod hajtani?';
$strCookiesRequired = 'A Cookie-kat most enged�lyeznek kell.';
$strCopyTable = 'T�bla m�sol�sa ide (adatb�zis<b>.</b>t�bla):';
$strCopyTableOK = '%s t�bl�t ide m�soltam: %s.';
$strCreate = 'L�trehoz';
$strCreateIndex = 'K�sz�ts egy indexet a(z)&nbsp;%s&nbsp;. oszlopon';
$strCreateIndexTopic = '�j index l�trehoz�sa';
$strCreateNewDatabase = '�j adatb�zis l�trehoz�sa';
$strCreateNewTable = '�j t�bla l�trehoz�sa az adatb�zisban: %s';
$strCriteria = 'Krit�rium';

$strData = 'Adat';
$strDatabase = 'Adatb�zis ';
$strDatabaseHasBeenDropped = '%s adatb�zist eldobtam.';
$strDatabases = 'adatb�zisok';
$strDatabasesStats = 'Adatb�zis statisztika';
$strDatabaseWildcard = 'Adatb�zis (joker-karakterek elfogadva):';
$strDataOnly = 'Csak adatok';
$strDefault = 'Alap�rtelmezett';
$strDelete = 'T�r�l';
$strDeleted = 'A sort t�r�ltem';
$strDeletedRows = 'T�r�lt sorok:';
$strDeleteFailed = 'T�rl�s meghi�sult!';
$strDeleteUserMessage = '%s felhaszn�l�t t�r�ltem.';
$strDescending = 'Cs�kken&#0337';
$strDisplay = 'Kijelz&#0337';
$strDisplayOrder = 'Kijelz&#0337 rendez�s:';
$strDoAQuery = 'Csin�lj egy "p�lda lek�rdez�st" (helyettes�t&#0337 karakter: "%")';
$strDocu = 'Dokument�ci�';
$strDoYouReally = 'Biztos ez akarod? ';
$strDrop = 'Eldob';
$strDropDB = 'Adatb�zis eldob�sa %s';
$strDropTable = 'T�bla eldob�sa';
$strDumpingData = 'T�bla adatok:';
$strDumpXRows = '%s sor ki�r�sa a %s. sorral kezd&#0337dik';
$strDynamic = 'dinamikus';

$strEdit = 'Szerkeszt';
$strEditPrivileges = 'Privil�giumok szerkeszt�se';
$strEffective = 'Hat�lyos';
$strEmpty = 'Ki�r�t';
$strEmptyResultSet = 'A MySQL �reset adott vissza (nincsenek sorok).';
$strEnd = 'V�ge';
$strEnglishPrivileges = ' Megjegyz�s: A MySQL privil�gium nevek az angolb�l sz�rmaznak ';
$strError = 'Hiba';
$strExport = 'Export';
$strExportToXML = 'Export XML-form�tumba';
$strExtendedInserts = 'Kiterjesztett besz�r�sok';
$strExtra = 'Extra';

$strField = 'Mez&#0337';
$strFieldHasBeenDropped = '%s mez&#0337t eldobtam';
$strFields = 'Mez&#0337k sz�ma';
$strFieldsEmpty = ' A mez&#0337 sz�moss�ga nulla! ';
$strFieldsEnclosedBy = 'Mez&#0337 lez�r�s';
$strFieldsEscapedBy = 'Mez&#0337 escape karakter';
$strFieldsTerminatedBy = 'Mez&#0337 v�ge';
$strFixed = 'r�gz�tett';
$strFlushTable = 'T�bla ki�r�sa ("FLUSH")';
$strFormat = 'Form�tum';
$strFormEmpty = 'Hi�nyz� adat a formban !';
$strFullText = 'Teljes Sz�vegek';
$strFunction = 'Funkci�';

$strGenTime = 'L�trehoz�s ideje';
$strGo = 'V�grehajt';
$strGrants = 'Enged�lyek';
$strGzip = '"gzip-pel t�m�r�tve"';

$strHasBeenAltered = 'megv�ltozott.';
$strHasBeenCreated = 'megsz�letett.';
$strHome = 'Kezd&#0337lap';
$strHomepageOfficial = 'Hivatalos phpMyAdmin Honlap';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Let�lt�s Oldal';
$strHost = 'Hoszt';
$strHostEmpty = 'A hosztn�v �res!';

$strIdxFulltext = 'Fulltext';
$strIfYouWish = 'Ha csak a t�bla n�h�ny oszlop�t akarod megjelen�teni, adj meg egy vessz&#0337kkel elv�lasztott mez&#0337list�t.';
$strIgnore = 'Elutas�t';
$strIndex = 'Index';
$strIndexes = 'Indexek';
$strIndexHasBeenDropped = '%s indexet eldobtam';
$strIndexName = 'Index n�v&nbsp;:';
$strIndexType = 'Index tipus&nbsp;:';
$strInsert = 'Besz�r';
$strInsertAsNewRow = 'Besz�r�s �j sork�nt';
$strInsertedRows = 'Besz�rt sorok:';
$strInsertNewRow = '�j sor besz�r�sa';
$strInsertTextfiles = 'Sz�vegf�jl tartalm�nak besz�r�sa a t�bl�ba';
$strInstructions = 'Parancs';
$strInUse = 'haszn�latban';
$strInvalidName = '"%s" egy fenntartott sz�, nem haszn�lhatod adatb�zis/t�bla/mez&#0337 nevek�nt.';

$strKeepPass = 'Ne v�ltoztasd meg a jelsz�t';
$strKeyname = 'Kulcsn�v';
$strKill = 'Le�ll�t';

$strLength = 'Hossz';
$strLengthSet = 'Hossz/�rt�k*';
$strLimitNumRows = 'Sorok sz�ma oldalank�nt';
$strLineFeed = 'Soremel�s: \\n';
$strLines = 'Sor';
$strLinesTerminatedBy = 'Sorok v�ge';
$strLinkNotFound = 'Link nem tal�lhat�';
$strLinksTo = 'Links to';
$strLocationTextfile = 'A sz�vegf�jlt helye';
$strLogin = 'Bel�p�s';
$strLogout = 'Kil�p�s';
$strLogPassword = 'Jelsz�:';
$strLogUsername = 'Felhaszn�l�i n�v:';

$strModifications = 'A v�ltoz�sokat elmentettem';
$strModify = 'V�ltoz�s';
$strModifyIndexTopic = 'Index v�ltoz�sa';
$strMoveTable = 'T�bla �thelyez�se ide (adatb�zis<b>.</b>t�bla):';
$strMoveTableOK = '%s t�bl�t �thelyeztem ide: %s.';
$strMySQLReloaded = 'MySQL �jrat�ltve.';
$strMySQLSaid = 'MySQL jelzi: ';
$strMySQLServerProcess = 'MySQL %pma_s1%, szerver: %pma_s2%, felhaszn�l�: %pma_s3%';
$strMySQLShowProcess = 'Mutasd meg a folyamatokat';
$strMySQLShowStatus = 'Mutasd meg a MySQL fut�si inform�ci�kat';
$strMySQLShowVars = 'Mutasd meg a MySQL rendszer v�ltoz�kat';

$strName = 'Neve';
$strNext = 'K�vetkez&#0337';
$strNo = 'Nem';
$strNoDatabases = 'Nincs adatb�zis';
$strNoDropDatabases = '"DROP DATABASE" utas�t�s le van tiltva.';
$strNoFrames = 'A phpMyAdmin haszn�lhat�bb egy <b>frame-kezel&#0337</b> b�ng�sz&#0337ben.';
$strNoIndex = 'Nincs index meghat�rozva!';
$strNoIndexPartsDefined = 'Nincs index darab meghat�rozva!';
$strNoModification = 'Nincs v�ltoz�s';
$strNone = 'Nincs';
$strNoPassword = 'Nincs jelsz�';
$strNoPrivileges = 'Nincs privil�gium';
$strNoQuery = 'Nincs SQL k�r�s!';  //to translate
$strNoRights = 'Nincs el�g jogod ennek v�grehajt�s�ra!';
$strNoTablesFound = 'Nincs t�bla az adatb�zisban.';
$strNotNumber = 'Ez nem egy sz�m!';
$strNotValidNumber = ' nem �rv�nyes sorsz�m!';
$strNoUsersFound = 'Nem tal�ltam felhaszn�l�(ka)t.';
$strNull = 'Null';

$strOftenQuotation = 'Gyakran id�z&#0337jel. Opcion�lisan a char �s varchar mez&#0337k lez�rhat�k a \"lez�r�s\"-karakterrel.';
$strOperations = 'Tev�kenys�gek';
$strOptimizeTable = 'T�bla optimaliz�l�s';
$strOptionalControls = 'Opcion�lis. Vez�rl&#0337k, amelyekkel �rhatsz �s olvashatsz speci�lis karaktereket.';
$strOptionally = 'Opcion�lis';
$strOptions = 'Opci�k';
$strOr = 'Vagy';
$strOverhead = 'Fel�l�r�s';

$strPartialText = 'R�szleges Sz�vegek';
$strPassword = 'Jelsz�';
$strPasswordEmpty = 'A jelsz� mez&#0337 �res!';
$strPasswordNotSame = 'A jelszavak nem azonosak!';
$strPHPVersion = 'PHP Verzi�';
$strPmaDocumentation = 'phpMyAdmin dokument�ci�';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> �rt�k�t a konfigur�ci�s f�jlban KELL be�ll�tani!';
$strPos1 = 'Kezdet';
$strPrevious = 'El&#0337z&#0337';
$strPrimary = 'Els&#0337dleges';
$strPrimaryKey = 'Els&#0337dleges kulcs';
$strPrimaryKeyHasBeenDropped = 'Az els&#0337dleges kulcsot eldobtam';
$strPrimaryKeyName = 'Az els&#0337dleges kulcs nev�nek "PRIMARY"-nak kell lennie!';
$strPrimaryKeyWarning = '("PRIMARY"-nak <b>kell</b> lennie, �s <b>csak annak</b> szabad lennie az els&#0337dleges kulcsnak!)';
$strPrintView = 'Nyomtat�si n�zet';
$strPrivileges = 'Privil�giumok';
$strProperties = 'Tulajdons�gok';

$strQBE = 'P�lda lek�rdez�s';
$strQBEDel = 'T�r�l';
$strQBEIns = 'Besz�r';
$strQueryOnDb = 'SQL-k�r�s <b>%s</b> adatb�zison:';

$strRecords = 'Sorok';
$strReferentialIntegrity = 'Hivatkoz�si s�rtetlens�g ellenorz�se:';
$strRelationView = 'Rel�ci� n�zet';
$strReloadFailed = 'MySQL �jrat�lt�se sikertelen.';
$strReloadMySQL = 'MySQL �jrat�lt�se';
$strRememberReload = 'Ne felejtd el �jrat�lteni a szervert.';
$strRenameTable = 'T�bla �tnevez�se erre';
$strRenameTableOK = '%s t�bl�t �tneveztem erre: %s';
$strRepairTable = 'T�bla jav�t�s';
$strReplace = 'Csere';
$strReplaceTable = 'T�bla adatok �s f�jl cser�je';
$strReset = 'T�r�l';
$strReType = '�jra�r�s';
$strRevoke = 'Visszavon';
$strRevokeGrant = 'Visszavon�st enged�lyez';
$strRevokeGrantMessage = 'Visszavontad %s privil�giumait';
$strRevokeMessage = 'Visszavontam a %s privil�giumokat';
$strRevokePriv = 'Privil�giumok visszavon�sa';
$strRowLength = 'Sorhossz';
$strRows = 'Sorok';
$strRowsFrom = 'sor kezdve ezzel:';
$strRowSize = ' Sorm�ret ';
$strRowsModeHorizontal = 'v�zszintes';
$strRowsModeOptions = '%s m�don, a fejl�cet %s soronk�nt megism�telve';
$strRowsModeVertical = 'f�gg&#0337leges';
$strRowsStatistic = 'Sor-statisztika';
$strRunning = 'helye %s';
$strRunQuery = 'K�r�s v�grehajt�sa';
$strRunSQLQuery = 'SQL parancs(ok) futtat�sa a(z) %s adatb�zison';

$strSave = 'Ment';
$strSelect = 'Kiv�laszt';
$strSelectADb = 'V�lassz egy adatb�zist';
$strSelectAll = 'Mindet kijel�li';
$strSelectFields = 'Mez&#0337k kiv�laszt�sa (legal�bb egyet):';
$strSelectNumRows = 'k�r�sben';
$strSend = 'F�jln�v megad�sa';
$strServerChoice = 'Szerver V�laszt�s';
$strServerVersion = 'Szerver verzi�';
$strSetEnumVal = 'Ha a mez&#0337 tipusa "enum" vagy "set", akkor az �rt�keket ilyen form�ban �rd be: \'a\',\'b\',\'c\'...<br />Ha backslash-t ("\") vagy aposztr�fot ("\'") akarsz ezen �rt�kek k�z�tt haszn�lni, haszn�ld a backslash escape karaktert (pl \'\\\\xyz\' vagy \'a\\\'b\').';
$strShow = 'Mutat';
$strShowAll = 'Mutasd mindet';
$strShowCols = 'Mutasd az oszlopokat';
$strShowingRecords = 'Sorok megjelen�t�se ';
$strShowPHPInfo = 'PHP inform�ci�';
$strShowTables = 'Mutasd a t�bl�kat';
$strShowThisQuery = ' Mutasd a parancsot itt �jra ';
$strSingly = '(egyenk�nt)';
$strSize = 'M�ret';
$strSort = 'Sorrendez�s';
$strSpaceUsage = 'Helyfoglal�s';
$strSQL = 'SQL';
$strSQLQuery = 'SQL-k�r�s';
$strStatement = 'Adatok';
$strStrucCSV = 'CSV adat';
$strStrucData = 'Szerkezet �s adatok';
$strStrucDrop = '\'T�bla eldob�s\' hozz�ad�sa';
$strStrucExcelCSV = 'M$ Excel CSV adat';
$strStrucOnly = 'Csak szerkezet';
$strStructure = 'Strukt�ra';
$strSubmit = 'V�grehajt';
$strSuccess = 'Az SQL-k�r�st sikeresen v�grehajtottam';
$strSum = '�sszesen';

$strTable = 't�bla ';
$strTableComments = 'T�bla megjegyz�sek';
$strTableEmpty = 'A t�blan�v helye �res!';
$strTableHasBeenDropped = '%s t�bl�t eldobtam';
$strTableHasBeenEmptied = '%s t�bl�t ki�r�tettem';
$strTableHasBeenFlushed = '%s t�bl�t ki�rtam';
$strTableMaintenance = 'T�bla karbantart�s';
$strTables = '%s t�bla';
$strTableStructure = 'T�bla szerkezet:';
$strTableType = 'T�bla tipusa';
$strTextAreaLength = ' Mivel ez a hossz,<br /> ez a mez&#0337 nem szerkeszthet&#0337 ';
$strTheContent = 'A f�jl tartalm�t beillesztettem.';
$strTheContents = 'A f�jl �s a kiv�lasztott t�bla sorainak tartalm�t azonos els&#0337dleges vagy egyedi kulccsal cser�li ki.';
$strTheTerminator = 'A mez&#0337k lez�r�ja.';
$strTotal = '�sszes';
$strType = 'Tipus';

$strUncheckAll = '�sszeset t�rli';
$strUnique = 'Egyedi';
$strUnselectAll = 'Mindet t�rli';
$strUpdatePrivMessage = 'Friss�tettem a(z) %s privil�giumokat.';
$strUpdateProfile = 'Profil friss�t�s:';
$strUpdateProfileMessage = 'A profilt friss�tettem.';
$strUpdateQuery = 'K�r�s friss�t�s';
$strUsage = 'M�ret';
$strUseBackquotes = 'Id�z&#0337jelek haszn�lata a t�bla- �s mez&#0337nevekn�l';
$strUser = 'Felhaszn�l�';
$strUserEmpty = 'A felhaszn�l�i n�v mez&#0337je �res!';
$strUserName = 'Felhaszn�l�i n�v';
$strUsers = 'Felhaszn�l�k';
$strUseTables = 'T�bl�k haszn�lata';

$strValue = '�rt�k';
$strViewDump = 'T�bla ki�r�s (v�zlat) megn�z�se';
$strViewDumpDB = 'Adatb�zis ki�r�s (v�zlat) megn�z�se';

$strWelcome = '�dv�z�l a %s';
$strWithChecked = 'A kijel�ltekkel v�gzendo m&#0369velet:';
$strWrongUser = 'Rossz felhaszn�l�i n�v/jelsz�. Hozz�f�r�s megtagadva.';

$strYes = 'Igen';

$strZip = '"zippel t�m�r�tve"';

$strConfigureTableCoord = 'Please configure the coordinates for table %s';  //to translate
$strScaleFactorSmall = 'The scale factor is too small to fit the schema on one page';  //to translate
$strDisplayPDF = 'Display PDF schema';  //to translate
$strPageNumber = 'Page number:';  //to translate
?>
