<?php
/** Icelandic (íslenska)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Cessator
 * @author Friðrik Bragi Dýrfjörð
 * @author Gott wisst
 * @author Jóna Þórunn
 * @author Kaganer
 * @author Krun
 * @author Maxí
 * @author S.Örvarr.S
 * @author Snævar
 * @author Spacebirdy
 * @author Steinninn
 * @author Urhixidur
 * @author Ævar Arnfjörð Bjarmason
 * @author לערי ריינהארט
 */

$namespaceNames = array(
	NS_MEDIA            => 'Miðill',
	NS_SPECIAL          => 'Kerfissíða',
	NS_TALK             => 'Spjall',
	NS_USER             => 'Notandi',
	NS_USER_TALK        => 'Notandaspjall',
	NS_PROJECT_TALK     => '$1spjall',
	NS_FILE             => 'Mynd',
	NS_FILE_TALK        => 'Myndaspjall',
	NS_MEDIAWIKI        => 'Melding',
	NS_MEDIAWIKI_TALK   => 'Meldingarspjall',
	NS_TEMPLATE         => 'Snið',
	NS_TEMPLATE_TALK    => 'Sniðaspjall',
	NS_HELP             => 'Hjálp',
	NS_HELP_TALK        => 'Hjálparspjall',
	NS_CATEGORY         => 'Flokkur',
	NS_CATEGORY_TALK    => 'Flokkaspjall',
);

$datePreferences = array(
	'default',
	'dmyt',
	'short dmyt',
	'tdmy',
	'short tdmy',
	'ISO 8601',
);

$datePreferenceMigrationMap = array(
	'default',
	'dmyt',
	'short dmyt',
	'tdmy',
	'short tdmy',
);

$defaultDateFormat = 'dmyt';

$dateFormats = array(
	'dmyt time' => 'H:i',
	'dmyt date' => 'j. F Y',
	'dmyt both' => 'j. F Y "kl." H:i',

	'short dmyt time' => 'H:i',
	'short dmyt date' => 'j. M. Y',
	'short dmyt both' => 'j. M. Y "kl." H:i',

	'tdmy time' => 'H:i',
	'tdmy date' => 'j. F Y',
	'tdmy both' => 'H:i, j. F Y',

	'short tdmy time' => 'H:i',
	'short tdmy date' => 'j. M. Y',
	'short tdmy both' => 'H:i, j. M. Y',
);

$magicWords = array(
	'redirect'                => array( '0', '#tilvísun', '#TILVÍSUN', '#REDIRECT' ),
	'nogallery'               => array( '0', '__EMSAFN__', '__NOGALLERY__' ),
	'currentday'              => array( '1', 'NÚDAGUR', 'CURRENTDAY' ),
	'currentday2'             => array( '1', 'NÚDAGUR2', 'CURRENTDAY2' ),
	'currentdayname'          => array( '1', 'NÚDAGNAFN', 'CURRENTDAYNAME' ),
	'currentyear'             => array( '1', 'NÚÁR', 'CURRENTYEAR' ),
	'currenttime'             => array( '1', 'NÚTÍMI', 'CURRENTTIME' ),
	'currenthour'             => array( '1', 'NÚKTÍMI', 'CURRENTHOUR' ),
	'localmonth'              => array( '1', 'STMÁN', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonthname'          => array( '1', 'STMÁNNAFN', 'LOCALMONTHNAME' ),
	'localmonthabbrev'        => array( '1', 'STMÁNST', 'LOCALMONTHABBREV' ),
	'localday'                => array( '1', 'STDAGUR', 'LOCALDAY' ),
	'localday2'               => array( '1', 'STDAGUR2', 'LOCALDAY2' ),
	'localdayname'            => array( '1', 'STDAGNAFN', 'LOCALDAYNAME' ),
	'localyear'               => array( '1', 'STÁR', 'LOCALYEAR' ),
	'localtime'               => array( '1', 'STTÍMI', 'LOCALTIME' ),
	'localhour'               => array( '1', 'STKTÍMI', 'LOCALHOUR' ),
	'numberofpages'           => array( '1', 'FJLSÍÐA', 'NUMBEROFPAGES' ),
	'numberofarticles'        => array( '1', 'FJLGREINA', 'NUMBEROFARTICLES' ),
	'numberoffiles'           => array( '1', 'FJLSKJALA', 'NUMBEROFFILES' ),
	'numberofusers'           => array( '1', 'FJLNOT', 'NUMBEROFUSERS' ),
	'numberofedits'           => array( '1', 'FJLBREYT', 'NUMBEROFEDITS' ),
	'pagename'                => array( '1', 'SÍÐUNAFN', 'PAGENAME' ),
	'namespace'               => array( '1', 'NAFNSVÆÐI', 'NAMESPACE' ),
	'talkspace'               => array( '1', 'SPJALLSVÆÐI', 'TALKSPACE' ),
	'fullpagename'            => array( '1', 'FULLTSÍÐUNF', 'FULLPAGENAME' ),
	'img_manualthumb'         => array( '1', 'þumall', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'               => array( '1', 'hægri', 'right' ),
	'img_left'                => array( '1', 'vinstri', 'left' ),
	'img_none'                => array( '1', 'engin', 'none' ),
	'img_width'               => array( '1', '$1dp', '$1px' ),
	'img_center'              => array( '1', 'miðja', 'center', 'centre' ),
	'img_sub'                 => array( '1', 'undir', 'sub' ),
	'img_super'               => array( '1', 'yfir', 'super', 'sup' ),
	'img_top'                 => array( '1', 'efst', 'top' ),
	'img_bottom'              => array( '1', 'neðst', 'bottom' ),
	'img_text_bottom'         => array( '1', 'texti-neðst', 'text-bottom' ),
	'ns'                      => array( '0', 'NR:', 'NS:' ),
	'server'                  => array( '0', 'VEFÞJ', 'SERVER' ),
	'servername'              => array( '0', 'VEFÞJNF', 'SERVERNAME' ),
	'grammar'                 => array( '0', 'MÁLFRÆÐI:', 'GRAMMAR:' ),
	'currentweek'             => array( '1', 'NÚVIKA', 'CURRENTWEEK' ),
	'localweek'               => array( '1', 'STVIKA', 'LOCALWEEK' ),
	'plural'                  => array( '0', 'FLTALA:', 'PLURAL:' ),
	'raw'                     => array( '0', 'HRÁ:', 'RAW:' ),
	'displaytitle'            => array( '1', 'SÝNATITIL', 'DISPLAYTITLE' ),
	'language'                => array( '0', '#TUNGUMÁL', '#LANGUAGE:' ),
	'special'                 => array( '0', 'kerfissíða', 'special' ),
);

$specialPageAliases = array(
	'Activeusers'               => array( 'Virkir_notendur' ),
	'Allmessages'               => array( 'Meldingar' ),
	'Allpages'                  => array( 'Allar_síður' ),
	'Ancientpages'              => array( 'Elstu_síður' ),
	'Blankpage'                 => array( 'Auð_síða' ),
	'Block'                     => array( 'Banna_vistföng' ),
	'Blockme'                   => array( 'Banna_mig' ),
	'Booksources'               => array( 'Bókaheimildir' ),
	'BrokenRedirects'           => array( 'Brotnar_tilvísanir' ),
	'Categories'                => array( 'Flokkar' ),
	'ChangeEmail'               => array( 'Breyta_netfangi' ),
	'ChangePassword'            => array( 'Endurkalla_aðgangsorðið' ),
	'ComparePages'              => array( 'Bera_saman_síður' ),
	'Confirmemail'              => array( 'Staðfesta_netfang' ),
	'Contributions'             => array( 'Framlög' ),
	'CreateAccount'             => array( 'Búa_til_aðgang' ),
	'Deadendpages'              => array( 'Botnlangar' ),
	'DeletedContributions'      => array( 'Edd_framlög' ),
	'Disambiguations'           => array( 'Tenglar_í_aðgreiningarsíður' ),
	'DoubleRedirects'           => array( 'Tvöfaldar_tilvísanir' ),
	'EditWatchlist'             => array( 'Breyta_vaktlista' ),
	'Emailuser'                 => array( 'Senda_tölvupóst' ),
	'Export'                    => array( 'Flytja_út' ),
	'Fewestrevisions'           => array( 'Fæstar_útgáfur' ),
	'FileDuplicateSearch'       => array( 'Afritunarskráarleit' ),
	'Filepath'                  => array( 'Skráarslóð' ),
	'Import'                    => array( 'Flytja_inn' ),
	'Invalidateemail'           => array( 'Rangt_netfang' ),
	'BlockList'                 => array( 'Bönnuð_vistföng' ),
	'Listadmins'                => array( 'Stjórnendalisti' ),
	'Listbots'                  => array( 'Vélmennalisti' ),
	'Listfiles'                 => array( 'Myndalisti' ),
	'Listgrouprights'           => array( 'Réttindalisti' ),
	'Listredirects'             => array( 'Tilvísanalisti' ),
	'Listusers'                 => array( 'Notendalisti' ),
	'Lockdb'                    => array( 'Læsa_gagnagrunni' ),
	'Log'                       => array( 'Aðgerðaskrár' ),
	'Lonelypages'               => array( 'Munaðarlausar_síður' ),
	'Longpages'                 => array( 'Langar_síður' ),
	'MergeHistory'              => array( 'Sameina_breytingaskrá' ),
	'MIMEsearch'                => array( 'MIME-leit' ),
	'Mostcategories'            => array( 'Flestir_flokkar' ),
	'Mostimages'                => array( 'Flestar_myndir' ),
	'Mostlinked'                => array( 'Mest_ítengt' ),
	'Mostlinkedcategories'      => array( 'Mest_ítengdu_flokkar' ),
	'Mostlinkedtemplates'       => array( 'Mest_ítengdu_snið' ),
	'Mostrevisions'             => array( 'Flestar_útgáfur' ),
	'Movepage'                  => array( 'Færa_síðu' ),
	'Mycontributions'           => array( 'Framlög_mín' ),
	'Mypage'                    => array( 'Notandasíða_mín' ),
	'Mytalk'                    => array( 'Spjallasíða_mín' ),
	'Myuploads'                 => array( 'Upplöðin_mín' ),
	'Newimages'                 => array( 'Nýjar_myndir' ),
	'Newpages'                  => array( 'Nýjustu_greinar' ),
	'PasswordReset'             => array( 'Endursetja_lykilorð' ),
	'Popularpages'              => array( 'Vinsælar_síður' ),
	'Preferences'               => array( 'Stillingar' ),
	'Prefixindex'               => array( 'Forskeyti' ),
	'Protectedpages'            => array( 'Verndaðar_síður' ),
	'Protectedtitles'           => array( 'Verndaðir_titlar' ),
	'Randompage'                => array( 'Handahófsvalin_síða' ),
	'Randomredirect'            => array( 'Handahófsvalin_tilvísun' ),
	'Recentchanges'             => array( 'Nýlegar_breytingar' ),
	'Recentchangeslinked'       => array( 'Nýlegar_breytingar_tengdar' ),
	'Revisiondelete'            => array( 'Eyðingarendurskoðun' ),
	'Search'                    => array( 'Leit' ),
	'Shortpages'                => array( 'Stuttar_síður' ),
	'Specialpages'              => array( 'Kerfissíður' ),
	'Statistics'                => array( 'Tölfræði' ),
	'Unblock'                   => array( 'Afbönnun' ),
	'Uncategorizedcategories'   => array( 'Óflokkaðir_flokkar' ),
	'Uncategorizedimages'       => array( 'Óflokkaðar_myndir' ),
	'Uncategorizedpages'        => array( 'Óflokkaðar_síður' ),
	'Uncategorizedtemplates'    => array( 'Óflokkuð_snið' ),
	'Undelete'                  => array( 'Endurvekja_eydda_síðu' ),
	'Unlockdb'                  => array( 'Opna_gagnagrunn' ),
	'Unusedcategories'          => array( 'Ónotaðir_flokkar' ),
	'Unusedimages'              => array( 'Munaðarlausar_myndir' ),
	'Unusedtemplates'           => array( 'Ónotuð_snið' ),
	'Unwatchedpages'            => array( 'Óvaktaðar_síður' ),
	'Upload'                    => array( 'Hlaða_inn' ),
	'Userlogin'                 => array( 'Innskrá' ),
	'Userlogout'                => array( 'Útskrá' ),
	'Userrights'                => array( 'Notandaréttindi' ),
	'Version'                   => array( 'Útgáfa' ),
	'Wantedcategories'          => array( 'Eftirsóttir_flokkar' ),
	'Wantedpages'               => array( 'Eftirsóttar_síður' ),
	'Wantedtemplates'           => array( 'Eftirsótt_snið' ),
	'Watchlist'                 => array( 'Vaktlistinn' ),
	'Whatlinkshere'             => array( 'Síður_sem_tengjast_hingað' ),
	'Withoutinterwiki'          => array( 'Síður_án_tungumálatengla' ),
);

$separatorTransformTable = array( ',' => '.', '.' => ',' );
$linkPrefixExtension = true;
$linkTrail = '/^([áðéíóúýþæöa-z-–]+)(.*)$/sDu';

