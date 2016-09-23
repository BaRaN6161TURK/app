<?php
/** French (Français)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Agzennay
 * @author Cedric31
 * @author ChrisPtDe
 * @author Coyau
 * @author Crochet.david
 * @author Csisc
 * @author Damouns
 * @author DavidL
 * @author Delhovlyn
 * @author Dereckson
 * @author Diti
 * @author Dodoïste
 * @author Elfix
 * @author Enzoreg
 * @author Esbardu
 * @author Fryed-peach
 * @author Giro720
 * @author Gomoko
 * @author Grondin
 * @author Guillom
 * @author Hashar
 * @author Hercule
 * @author Houcinee1
 * @author Hégésippe Cormier
 * @author IAlex
 * @author Jagwar
 * @author Jean-Frédéric
 * @author JeanVoisin
 * @author Jens Liebenau
 * @author Klutzy
 * @author Korg
 * @author Korrigan
 * @author Krinkle
 * @author Kropotkine 113
 * @author Litlok
 * @author Lloffiwr
 * @author Louperivois
 * @author Lucyin
 * @author McDutchie
 * @author Meithal
 * @author Moyg
 * @author Nicolas Raoul
 * @author Od1n
 * @author Omnipaedista
 * @author Peter17
 * @author PieRRoMaN
 * @author Quentinv57
 * @author Remember the dot
 * @author Robby
 * @author Sandji
 * @author Seb35
 * @author Sherbrooke
 * @author Skalman
 * @author The Evil IP address
 * @author TouzaxA
 * @author Tpt
 * @author Urhixidur
 * @author Verdy p
 * @author Wyz
 * @author Yumeki
 * @author Zebulon84
 * @author Zetud
 * @author Горан Анђелковић
 * @author לערי ריינהארט
 */

$bookstoreList = array(
	'Amazon.fr'    => 'http://www.amazon.fr/exec/obidos/ISBN=$1',
	'fnac.com'     => 'http://www3.fnac.com/advanced/book.do?isbn=$1',
	'chapitre.com' => 'http://www.chapitre.com/frame_rec.asp?isbn=$1',
);

$namespaceNames = array(
	NS_MEDIA            => 'Média',
	NS_SPECIAL          => 'Spécial',
	NS_TALK             => 'Discussion',
	NS_USER             => 'Utilisateur',
	NS_USER_TALK        => 'Discussion_utilisateur',
	NS_PROJECT_TALK     => 'Discussion_$1',
	NS_FILE             => 'Fichier',
	NS_FILE_TALK        => 'Discussion_fichier',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Discussion_MediaWiki',
	NS_TEMPLATE         => 'Modèle',
	NS_TEMPLATE_TALK    => 'Discussion_modèle',
	NS_HELP             => 'Aide',
	NS_HELP_TALK        => 'Discussion_aide',
	NS_CATEGORY         => 'Catégorie',
	NS_CATEGORY_TALK    => 'Discussion_catégorie',
);

$namespaceAliases = array(
	'Discuter' => NS_TALK,
	'Discussion_Utilisateur' => NS_USER_TALK,
	'Discussion_Fichier' => NS_FILE_TALK,
	'Discussion_Image' => NS_FILE_TALK,
	'Discussion_Modèle' => NS_TEMPLATE_TALK,
	'Discussion_Aide' => NS_HELP_TALK,
	'Discussion_Catégorie' => NS_CATEGORY_TALK
);

$linkTrail = '/^([a-zàâçéèêîôûäëïöüùÇÉÂÊÎÔÛÄËÏÖÜÀÈÙ]+)(.*)$/sDu';

$dateFormats = array(
	'mdy time' => 'H:i',
	'mdy date' => 'F j, Y',
	'mdy both' => 'F j, Y à H:i',

	'dmy time' => 'H:i',
	'dmy date' => 'j F Y',
	'dmy both' => 'j F Y à H:i',

	'ymd time' => 'H:i',
	'ymd date' => 'Y F j',
	'ymd both' => 'Y F j à H:i',
);

$magicWords = array(
	'redirect'                => array( '0', '#REDIRECTION', '#REDIRECT' ),
	'notoc'                   => array( '0', '__AUCUNSOMMAIRE__', '__AUCUNETDM__', '__NOTOC__' ),
	'nogallery'               => array( '0', '__AUCUNEGALERIE__', '__NOGALLERY__' ),
	'forcetoc'                => array( '0', '__FORCERSOMMAIRE__', '__FORCERTDM__', '__FORCETOC__' ),
	'toc'                     => array( '0', '__SOMMAIRE__', '__TDM__', '__TOC__' ),
	'noeditsection'           => array( '0', '__SECTIONNONEDITABLE__', '__NOEDITSECTION__' ),
	'noheader'                => array( '0', '__AUCUNENTETE__', '__NOHEADER__' ),
	'currentmonth'            => array( '1', 'MOISACTUEL', 'MOIS2ACTUEL', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonth1'           => array( '1', 'MOIS1ACTUEL', 'CURRENTMONTH1' ),
	'currentmonthname'        => array( '1', 'NOMMOISACTUEL', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'     => array( '1', 'NOMGENMOISACTUEL', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'      => array( '1', 'ABREVMOISACTUEL', 'CURRENTMONTHABBREV' ),
	'currentday'              => array( '1', 'JOURACTUEL', 'JOUR1ACTUEL', 'CURRENTDAY' ),
	'currentday2'             => array( '1', 'JOUR2ACTUEL', 'CURRENTDAY2' ),
	'currentdayname'          => array( '1', 'NOMJOURACTUEL', 'CURRENTDAYNAME' ),
	'currentyear'             => array( '1', 'ANNEEACTUELLE', 'CURRENTYEAR' ),
	'currenttime'             => array( '1', 'HORAIREACTUEL', 'CURRENTTIME' ),
	'currenthour'             => array( '1', 'HEUREACTUELLE', 'CURRENTHOUR' ),
	'localmonth'              => array( '1', 'MOISLOCAL', 'MOIS2LOCAL', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonth1'             => array( '1', 'MOIS1LOCAL', 'LOCALMONTH1' ),
	'localmonthname'          => array( '1', 'NOMMOISLOCAL', 'LOCALMONTHNAME' ),
	'localmonthnamegen'       => array( '1', 'NOMGENMOISLOCAL', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'        => array( '1', 'ABREVMOISLOCAL', 'LOCALMONTHABBREV' ),
	'localday'                => array( '1', 'JOURLOCAL', 'JOUR1LOCAL', 'LOCALDAY' ),
	'localday2'               => array( '1', 'JOUR2LOCAL', 'LOCALDAY2' ),
	'localdayname'            => array( '1', 'NOMJOURLOCAL', 'LOCALDAYNAME' ),
	'localyear'               => array( '1', 'ANNEELOCALE', 'LOCALYEAR' ),
	'localtime'               => array( '1', 'HORAIRELOCAL', 'LOCALTIME' ),
	'localhour'               => array( '1', 'HEURELOCALE', 'LOCALHOUR' ),
	'numberofpages'           => array( '1', 'NOMBREPAGES', 'NUMBEROFPAGES' ),
	'numberofarticles'        => array( '1', 'NOMBREARTICLES', 'NUMBEROFARTICLES' ),
	'numberoffiles'           => array( '1', 'NOMBREFICHIERS', 'NUMBEROFFILES' ),
	'numberofusers'           => array( '1', 'NOMBREUTILISATEURS', 'NUMBEROFUSERS' ),
	'numberofactiveusers'     => array( '1', 'NOMBREUTILISATEURSACTIFS', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'           => array( '1', 'NOMBREMODIFS', 'NUMBEROFEDITS' ),
	'numberofviews'           => array( '1', 'NOMBREVUES', 'NUMBEROFVIEWS' ),
	'pagename'                => array( '1', 'NOMPAGE', 'PAGENAME' ),
	'pagenamee'               => array( '1', 'NOMPAGEX', 'PAGENAMEE' ),
	'namespace'               => array( '1', 'ESPACENOMMAGE', 'NAMESPACE' ),
	'namespacee'              => array( '1', 'ESPACENOMMAGEX', 'NAMESPACEE' ),
	'talkspace'               => array( '1', 'ESPACEDISCUSSION', 'TALKSPACE' ),
	'talkspacee'              => array( '1', 'ESPACEDISCUSSIONX', 'TALKSPACEE' ),
	'subjectspace'            => array( '1', 'ESPACESUJET', 'ESPACEARTICLE', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'           => array( '1', 'ESPACESUJETX', 'ESPACEARTICLEX', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'            => array( '1', 'NOMPAGECOMPLET', 'FULLPAGENAME' ),
	'fullpagenamee'           => array( '1', 'NOMPAGECOMPLETX', 'FULLPAGENAMEE' ),
	'subpagename'             => array( '1', 'NOMSOUSPAGE', 'SUBPAGENAME' ),
	'subpagenamee'            => array( '1', 'NOMSOUSPAGEX', 'SUBPAGENAMEE' ),
	'basepagename'            => array( '1', 'NOMBASEDEPAGE', 'BASEPAGENAME' ),
	'basepagenamee'           => array( '1', 'NOMBASEDEPAGEX', 'BASEPAGENAMEE' ),
	'talkpagename'            => array( '1', 'NOMPAGEDISCUSSION', 'TALKPAGENAME' ),
	'talkpagenamee'           => array( '1', 'NOMPAGEDISCUSSIONX', 'TALKPAGENAMEE' ),
	'subjectpagename'         => array( '1', 'NOMPAGESUJET', 'NOMPAGEARTICLE', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'        => array( '1', 'NOMPAGESUJETX', 'NOMPAGEARTICLEX', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'img_thumbnail'           => array( '1', 'vignette', 'thumbnail', 'thumb' ),
	'img_manualthumb'         => array( '1', 'vignette=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'               => array( '1', 'droite', 'right' ),
	'img_left'                => array( '1', 'gauche', 'left' ),
	'img_none'                => array( '1', 'néant', 'neant', 'none' ),
	'img_center'              => array( '1', 'centré', 'center', 'centre' ),
	'img_framed'              => array( '1', 'cadre', 'encadré', 'encadre', 'framed', 'enframed', 'frame' ),
	'img_frameless'           => array( '1', 'sans_cadre', 'non_encadré', 'non_encadre', 'frameless' ),
	'img_upright'             => array( '1', 'redresse', 'redresse=$1', 'redresse $1', 'upright', 'upright=$1', 'upright $1' ),
	'img_border'              => array( '1', 'bordure', 'border' ),
	'img_baseline'            => array( '1', 'ligne_de_base', 'base', 'baseline' ),
	'img_sub'                 => array( '1', 'indice', 'ind', 'sub' ),
	'img_super'               => array( '1', 'exposant', 'exp', 'super', 'sup' ),
	'img_top'                 => array( '1', 'haut', 'top' ),
	'img_text_top'            => array( '1', 'haut-texte', 'haut-txt', 'text-top' ),
	'img_middle'              => array( '1', 'milieu', 'middle' ),
	'img_bottom'              => array( '1', 'bas', 'bottom' ),
	'img_text_bottom'         => array( '1', 'bas-texte', 'bas-txt', 'text-bottom' ),
	'img_link'                => array( '1', 'lien=$1', 'link=$1' ),
	'sitename'                => array( '1', 'NOMSITE', 'SITENAME' ),
	'ns'                      => array( '0', 'ESPACEN:', 'NS:' ),
	'nse'                     => array( '0', 'ESPACENX:', 'NSE:' ),
	'localurl'                => array( '0', 'URLLOCALE:', 'LOCALURL:' ),
	'localurle'               => array( '0', 'URLLOCALEX:', 'LOCALURLE:' ),
	'articlepath'             => array( '0', 'CHEMINARTICLE', 'ARTICLEPATH' ),
	'server'                  => array( '0', 'SERVEUR', 'SERVER' ),
	'servername'              => array( '0', 'NOMSERVEUR', 'SERVERNAME' ),
	'scriptpath'              => array( '0', 'CHEMINSCRIPT', 'SCRIPTPATH' ),
	'stylepath'               => array( '0', 'CHEMINSTYLE', 'STYLEPATH' ),
	'grammar'                 => array( '0', 'GRAMMAIRE:', 'GRAMMAR:' ),
	'gender'                  => array( '0', 'GENRE:', 'GENDER:' ),
	'notitleconvert'          => array( '0', '__SANSCONVERSIONTITRE__', '__SANSCT__', '__NOTITLECONVERT__', '__NOTC__' ),
	'nocontentconvert'        => array( '0', '__SANSCONVERSIONCONTENU__', '__SANSCC__', '__NOCONTENTCONVERT__', '__NOCC__' ),
	'currentweek'             => array( '1', 'SEMAINEACTUELLE', 'CURRENTWEEK' ),
	'currentdow'              => array( '1', 'JDSACTUEL', 'CURRENTDOW' ),
	'localweek'               => array( '1', 'SEMAINELOCALE', 'LOCALWEEK' ),
	'localdow'                => array( '1', 'JDSLOCAL', 'LOCALDOW' ),
	'revisionid'              => array( '1', 'IDVERSION', 'REVISIONID' ),
	'revisionday'             => array( '1', 'JOURVERSION', 'JOUR1VERSION', 'REVISIONDAY' ),
	'revisionday2'            => array( '1', 'JOUR2VERSION', 'REVISIONDAY2' ),
	'revisionmonth'           => array( '1', 'MOISVERSION', 'REVISIONMONTH' ),
	'revisionmonth1'          => array( '1', 'MOISVERSION1', 'REVISIONMONTH1' ),
	'revisionyear'            => array( '1', 'ANNEEVERSION', 'REVISIONYEAR' ),
	'revisiontimestamp'       => array( '1', 'INSTANTVERSION', 'REVISIONTIMESTAMP' ),
	'revisionuser'            => array( '1', 'UTILISATEURVERSION', 'REVISIONUSER' ),
	'plural'                  => array( '0', 'PLURIEL:', 'PLURAL:' ),
	'fullurl'                 => array( '0', 'URLCOMPLETE:', 'FULLURL:' ),
	'fullurle'                => array( '0', 'URLCOMPLETEX:', 'FULLURLE:' ),
	'lcfirst'                 => array( '0', 'INITMINUS:', 'LCFIRST:' ),
	'ucfirst'                 => array( '0', 'INITMAJUS:', 'INITCAPIT:', 'UCFIRST:' ),
	'lc'                      => array( '0', 'MINUS:', 'LC:' ),
	'uc'                      => array( '0', 'MAJUS:', 'CAPIT:', 'UC:' ),
	'raw'                     => array( '0', 'BRUT:', 'RAW:' ),
	'displaytitle'            => array( '1', 'AFFICHERTITRE', 'DISPLAYTITLE' ),
	'rawsuffix'               => array( '1', 'BRUT', 'B', 'R' ),
	'newsectionlink'          => array( '1', '__LIENNOUVELLESECTION__', '__NEWSECTIONLINK__' ),
	'nonewsectionlink'        => array( '1', '__AUCUNLIENNOUVELLESECTION__', '__NONEWSECTIONLINK__' ),
	'currentversion'          => array( '1', 'VERSIONACTUELLE', 'CURRENTVERSION' ),
	'urlencode'               => array( '0', 'ENCODEURL:', 'URLENCODE:' ),
	'anchorencode'            => array( '0', 'ENCODEANCRE', 'ANCHORENCODE' ),
	'currenttimestamp'        => array( '1', 'INSTANTACTUEL', 'CURRENTTIMESTAMP' ),
	'localtimestamp'          => array( '1', 'INSTANTLOCAL', 'LOCALTIMESTAMP' ),
	'directionmark'           => array( '1', 'MARQUEDIRECTION', 'MARQUEDIR', 'DIRECTIONMARK', 'DIRMARK' ),
	'language'                => array( '0', '#LANGUE:', '#LANGUAGE:' ),
	'contentlanguage'         => array( '1', 'LANGUECONTENU', 'LANGCONTENU', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'        => array( '1', 'PAGESDANSESPACE:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'          => array( '1', 'NOMBREADMINS', 'NUMBEROFADMINS' ),
	'formatnum'               => array( '0', 'FORMATNOMBRE', 'FORMATNUM' ),
	'padleft'                 => array( '0', 'BOURRAGEGAUCHE', 'BOURREGAUCHE', 'PADLEFT' ),
	'padright'                => array( '0', 'BOURRAGEDROITE', 'BOURREDROITE', 'PADRIGHT' ),
	'special'                 => array( '0', 'spécial', 'special' ),
	'defaultsort'             => array( '1', 'CLEFDETRI:', 'CLEDETRI:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'filepath'                => array( '0', 'CHEMIN:', 'FILEPATH:' ),
	'tag'                     => array( '0', 'balise', 'tag' ),
	'hiddencat'               => array( '1', '__CATCACHEE__', '__HIDDENCAT__' ),
	'pagesincategory'         => array( '1', 'PAGESDANSCAT', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                => array( '1', 'TAILLEPAGE', 'PAGESIZE' ),
	'noindex'                 => array( '1', '__AUCUNINDEX__', '__NOINDEX__' ),
	'numberingroup'           => array( '1', 'NOMBREDANSGROUPE', 'NBDANSGROUPE', 'NUMBERINGROUP', 'NUMINGROUP' ),
	'staticredirect'          => array( '1', '__REDIRECTIONSTATIQUE__', '__STATICREDIRECT__' ),
	'protectionlevel'         => array( '1', 'NIVEAUDEPROTECTION', 'PROTECTIONLEVEL' ),
	'url_path'                => array( '0', 'CHEMIN', 'PATH' ),
);

$specialPageAliases = array(
	'Activeusers'               => array( 'Utilisateurs_actifs', 'UtilisateursActifs' ),
	'Allmessages'               => array( 'Messages_système', 'Messages_systeme', 'Messagessystème', 'Messagessysteme' ),
	'Allpages'                  => array( 'Toutes_les_pages', 'ToutesLesPages' ),
	'Ancientpages'              => array( 'Pages_anciennes', 'PagesAnciennes', 'Anciennes_pages', 'AnciennesPages' ),
	'Badtitle'                  => array( 'MauvaisTitre', 'Mauvais_titre' ),
	'Blankpage'                 => array( 'Page_blanche', 'PageBlanche' ),
	'Block'                     => array( 'Bloquer', 'Blocage' ),
	'Blockme'                   => array( 'Bloquez-moi', 'Bloquezmoi' ),
	'Booksources'               => array( 'Ouvrages_de_référence', 'Ouvrages_de_reference', 'Ouvragesderéférence', 'Ouvragesdereference', 'Recherche_ISBN', 'Recherche_isbn', 'RechercheISBN', 'Rechercheisbn' ),
	'BrokenRedirects'           => array( 'Redirections_cassées', 'RedirectionCassées', 'Redirections_cassees', 'RedirectionsCassees' ),
	'Categories'                => array( 'Catégories' ),
	'ChangePassword'            => array( 'Changement_du_mot_de_passe', 'ChangementDuMotDePasse' ),
	'Confirmemail'              => array( 'Confirmer_l\'adresse_de_contact', 'Confirmer_le_courriel', 'ConfirmerLeCourriel' ),
	'CreateAccount'             => array( 'Créer_un_compte', 'CréerUnCompte', 'CréerCompte' ),
	'Deadendpages'              => array( 'Pages_en_impasse', 'PagesEnImpasse' ),
	'DeletedContributions'      => array( 'Contributions_supprimées', 'ContributionsSupprimées', 'ContributionSupprimees' ),
	'Disambiguations'           => array( 'Homonymies', 'Homonymie', 'Pages_d\'homonymie' ),
	'DoubleRedirects'           => array( 'Doubles_redirections', 'DoublesRedirections', 'Redirections_doubles', 'RedirectionsDoubles' ),
	'Emailuser'                 => array( 'Envoyer_un_courriel', 'EnvoyerUnCourriel', 'Courriel', 'Envoyer_un_e-mail', 'EnvoyerUnEMail', 'E-mail', 'EMail' ),
	'Export'                    => array( 'Exporter', 'Exportation' ),
	'Fewestrevisions'           => array( 'Pages_les_moins_modifiées', 'PagesLesMoinsModifiées', 'Pages_les_moins_modifiees', 'PagesLesMoinsModifiees', 'Les_moins_modifiés', 'LesMoinsModifiés', 'Les_moins_modifies', 'LesMoinsModifies' ),
	'FileDuplicateSearch'       => array( 'Recherche_fichier_en_double', 'RechercheFichierEnDouble' ),
	'Filepath'                  => array( 'Chemin_du_fichier', 'CheminDuFichier', 'CheminFichier' ),
	'Import'                    => array( 'Importer', 'Importation' ),
	'Invalidateemail'           => array( 'Invalider_le_courriel', 'Invalider_courriel', 'InvaliderCourriel' ),
	'BlockList'                 => array( 'Liste_des_blocages', 'ListeDesBlocages', 'Blocages', 'Utilisateurs_bloqués', 'UtilisateursBloqués', 'Utilisateurs_bloques', 'UtilisateursBloques', 'IP_bloquées', 'IPBloquees', 'IPBloquées' ),
	'LinkSearch'                => array( 'Recherche_de_lien', 'Recherche_de_liens' ),
	'Listadmins'                => array( 'Liste_des_administrateurs', 'Listedesadministrateurs', 'Liste_des_admins', 'Listedesadmins', 'Liste_admins', 'Listeadmins' ),
	'Listbots'                  => array( 'Liste_des_bots', 'ListedesBots' ),
	'Listfiles'                 => array( 'Liste_des_fichiers', 'ListeDesFichiers', 'Liste_des_images', 'ListeDesImages' ),
	'Listgrouprights'           => array( 'Liste_des_droits_de_groupe', 'ListeDesDroitsDeGroupes' ),
	'Listredirects'             => array( 'Liste_des_redirections', 'Listedesredirections', 'Liste_des_redirects', 'Listedesredirects', 'Liste_redirections', 'Listeredirections', 'Liste_redirects', 'Listeredirects' ),
	'Listusers'                 => array( 'Liste_des_utilisateurs', 'ListeDesUtilisateurs', 'Utilisateurs' ),
	'Lockdb'                    => array( 'Verrouiller_la_base', 'Verrouillerlabase', 'Verrouiller_base', 'Verrouillerbase', 'Verrouiller_BD', 'VerrouillerBD', 'Verrouiller_bd', 'Verrouillerbd' ),
	'Log'                       => array( 'Journal', 'Journaux' ),
	'Lonelypages'               => array( 'Pages_orphelines', 'PagesOrphelines' ),
	'Longpages'                 => array( 'Pages_longues', 'PagesLongues' ),
	'MergeHistory'              => array( 'Fusionner_les_historiques', 'FusionnerHistoriques', 'Fusionner_l\'historique', 'Fusionnerlhistorique' ),
	'MIMEsearch'                => array( 'Recherche_MIME', 'RechercheMIME', 'Recherche_mime', 'Recherchemime' ),
	'Mostcategories'            => array( 'Pages_les_plus_catégorisées', 'PagesLesPlusCatégorisées', 'Pages_les_plus_categorisees', 'PagesLesPlusCategorisees', 'Les_plus_catégorisés', 'LesPlusCatégorisés', 'Les_plus_categorises', 'LesPlusCategorises' ),
	'Mostimages'                => array( 'Fichiers_les_plus_liés', 'FichiersLesPlusLiés', 'Fichiers_les_plus_lies', 'FichiersLesPlusLies', 'Fichiers_les_plus_utilisés', 'FichiersLesPlusUtilisés', 'Fichiers_les_plus_utilises', 'FichiersLesPlusUtilises', 'Images_les_plus_liées', 'ImagesLesPlusLiées', 'Images_les_plus_liees', 'ImagesLesPlusLiees', 'Images_les_plus_utilisées', 'ImagesLesPlusUtilisées', 'Images_les_plus_utilisees', 'ImagesLesPlusUtilisees' ),
	'Mostlinked'                => array( 'Pages_les_plus_liées', 'PagesLesPlusLiées', 'Pages_les_plus_liees', 'PagesLesPlusLiees', 'Les_plus_liées', 'LesPlusLiées', 'Les_plus_liees', 'LesPlusLiees' ),
	'Mostlinkedcategories'      => array( 'Catégories_les_plus_liées', 'CatégoriesLesPlusLiées', 'Categories_les_plus_liees', 'CategoriesLesPlusLiees', 'Catégories_les_plus_utilisées', 'CatégoriesLesPlusUtilisées', 'Categories_les_plus_utilisees', 'CategoriesLesPlusUtilisees' ),
	'Mostlinkedtemplates'       => array( 'Modèles_les_plus_liés', 'ModèlesLesPlusLiés', 'Modeles_les_plus_lies', 'ModelesLesPlusLies', 'Modèles_les_plus_utilisés', 'ModèlesLesPlusUtilisés', 'Modeles_les_plus_utilises', 'ModelesLesPlusUtilises' ),
	'Mostrevisions'             => array( 'Pages_les_plus_modifiées', 'PagesLesPlusModifiées', 'Pages_les_plus_modifiees', 'PagesLesPlusModifiees', 'Les_plus_modifiés', 'LesPlusModifiés', 'Les_plus_modifies', 'LesPlusModifies' ),
	'Movepage'                  => array( 'Renommer_une_page', 'Renommer', 'Renommage' ),
	'Mycontributions'           => array( 'Mes_contributions', 'Mescontributions' ),
	'Mypage'                    => array( 'Ma_page', 'Mapage' ),
	'Mytalk'                    => array( 'Mes_discussions', 'Mesdiscussions' ),
	'Newimages'                 => array( 'Nouveaux_fichiers', 'NouveauxFichiers', 'Nouvelles_images', 'NouvellesImages' ),
	'Newpages'                  => array( 'Nouvelles_pages', 'NouvellesPages', 'Pages_récentes', 'PagesRécentes', 'Pages_recentes', 'PagesRecentes' ),
	'PasswordReset'             => array( 'Réinitialisation_du_mot_de_passe', 'RéinitialisationDuMotDePasse' ),
	'PermanentLink'             => array( 'LienPermanent', 'Lien_permanent' ),
	'Popularpages'              => array( 'Pages_les_plus_visitées', 'Pages_les_plus_visitees', 'Pageslesplusvisitées', 'Pageslesplusvisitees' ),
	'Preferences'               => array( 'Préférences' ),
	'Prefixindex'               => array( 'Index', 'Préfixes', 'Prefixes' ),
	'Protectedpages'            => array( 'Pages_protégées', 'PagesProtégées', 'Pages_protegees', 'PagesProtegees' ),
	'Protectedtitles'           => array( 'Titres_protégés', 'TitresProtégés', 'Titres_proteges', 'TitresProteges' ),
	'Randompage'                => array( 'Page_au_hasard', 'PageAuHasard', 'Au_hasard', 'AuHasard', 'Aléatoire', 'Aleatoire' ),
	'Randomredirect'            => array( 'Redirection_au_hasard', 'Redirect_au_hasard', 'Redirectionauhasard', 'Redirectauhasard', 'Redirection_aléatoire', 'Redirect_aléatoire', 'Redirectionaléatoire', 'Redirectaléatoire', 'Redirection_aleatoire', 'Redirect_aleatoire', 'Redirectionaleatoire', 'Redirectaleatoire' ),
	'Recentchanges'             => array( 'Modifications_récentes', 'Modifications_recentes', 'ModificationsRécentes', 'ModificationsRecentes' ),
	'Recentchangeslinked'       => array( 'Suivi_des_liens', 'SuiviDesLiens' ),
	'Revisiondelete'            => array( 'Versions_supprimées', 'Versions_supprimees', 'Versionsupprimées', 'Versionsupprimees' ),
	'Search'                    => array( 'Recherche', 'Rechercher', 'Chercher' ),
	'Shortpages'                => array( 'Pages_courtes', 'PagesCourtes' ),
	'Specialpages'              => array( 'Pages_spéciales', 'PagesSpéciales', 'Pages_speciales', 'PagesSpeciales' ),
	'Statistics'                => array( 'Statistiques', 'Stats' ),
	'Tags'                      => array( 'Balises' ),
	'Unblock'                   => array( 'Débloquer', 'Déblocage' ),
	'Uncategorizedcategories'   => array( 'Catégories_non_catégorisées', 'CatégoriesNonCatégorisées', 'Categories_non_categorisees', 'CategoriesNonCategorisees', 'Catégories_sans_catégorie', 'CatégoriesSansCatégorie', 'Categories_sans_categorie', 'CategoriesSansCategorie' ),
	'Uncategorizedimages'       => array( 'Fichiers_non_catégorisés', 'FichiersNonCatégorisés', 'Fichiers_non_categorises', 'FichiersNonCategorises', 'Fichiers_sans_catégorie', 'FichiersSansCatégorie', 'Fichiers_sans_categorie', 'FichiersSansCategorie', 'Images_non_catégorisées', 'ImagesNonCatégorisées', 'Images_non_categorisees', 'ImagesNonCategorisees', 'Images_sans_catégorie', 'ImagesSansCatégorie', 'Images_sans_categorie', 'ImagesSansCategorie' ),
	'Uncategorizedpages'        => array( 'Pages_non_catégorisées', 'PagesNonCatégorisées', 'Pages_non_categorisees', 'PagesNonCategorisees', 'Pages_sans_catégorie', 'PagesSansCatégorie', 'Pages_sans_categorie', 'PagesSansCategorie' ),
	'Uncategorizedtemplates'    => array( 'Modèles_non_catégorisés', 'ModèlesNonCatégorisés', 'Modeles_non_categorises', 'ModelesNonCategorises', 'Modèles_sans_catégorie', 'ModèlesSansCatégorie', 'Modeles_sans_catégorie', 'ModelesSansCatégorie' ),
	'Undelete'                  => array( 'Restaurer', 'Restauration' ),
	'Unlockdb'                  => array( 'Déverrouiller_la_base', 'Déverrouillerlabase', 'Deverrouiller_la_base', 'Deverrouillerlabase', 'Déverrouiller_base', 'Déverrouillerbase', 'Deverrouiller_base', 'Deverrouillerbase', 'Déverrouiller_BD', 'DéverrouillerBD', 'Deverrouiller_BD', 'DeverrouillerBD', 'Déverrouiller_bd', 'Déverrouillerbd', 'Deverrouiller_bd', 'Deverrouillerbd' ),
	'Unusedcategories'          => array( 'Catégories_inutilisées', 'CatégoriesInutilisées', 'Categories_inutilisees', 'CategoriesInutilisees', 'Catégories_non_utilisées', 'CatégoriesNonUtilisées', 'Categories_non_utilisees', 'CategoriesNonUtilisees' ),
	'Unusedimages'              => array( 'Fichiers_inutilisés', 'FichiersInutilisés', 'Fichiers_inutilises', 'FichiersInutilises', 'Fichiers_non_utilisés', 'FichiersNon_utilisés', 'Fichiers_non_utilises', 'FichiersNon_utilises', 'Images_inutilisées', 'ImagesInutilisées', 'Images_inutilisees', 'ImagesInutilisees', 'Images_non_utilisées', 'ImagesNonUtilisées', 'Images_non_utilisees', 'ImagesNonUtilisees' ),
	'Unusedtemplates'           => array( 'Modèles_inutilisés', 'Modèlesinutilisés', 'Modeles_inutilises', 'Modelesinutilises', 'Modèles_non_utilisés', 'Modèlesnonutilisés', 'Modeles_non_utilises', 'Modelesnonutilises' ),
	'Unwatchedpages'            => array( 'Pages_non_suivies', 'Pagesnonsuivies' ),
	'Upload'                    => array( 'Téléverser', 'Televerser', 'Téléversement', 'Televersement', 'Téléchargement', 'Telechargement' ),
	'Userlogin'                 => array( 'Connexion', 'Identification' ),
	'Userlogout'                => array( 'Déconnexion', 'Deconnexion' ),
	'Userrights'                => array( 'Permissions', 'Droits', 'Droits_des_utilisateurs' ),
	'Wantedcategories'          => array( 'Catégories_demandées', 'CatégoriesDemandées', 'Categories_demandees', 'CategoriesDemandees' ),
	'Wantedfiles'               => array( 'Fichiers_demandés', 'FichiersDemandés', 'Fichiers_demandes', 'FichiersDemandes' ),
	'Wantedpages'               => array( 'Pages_demandées', 'PagesDemandées', 'Pages_demandees', 'PagesDemandees', 'Liens_brisés', 'LiensBrisés', 'Liens_brises', 'LiensBrises' ),
	'Wantedtemplates'           => array( 'Modèles_demandés', 'ModèlesDemandés', 'Modeles_demandes', 'ModelesDemandes' ),
	'Watchlist'                 => array( 'Liste_de_suivi', 'ListeDeSuivi', 'Suivi' ),
	'Whatlinkshere'             => array( 'Pages_liées', 'PagesLiées', 'Pages_liees', 'PagesLiees' ),
	'Withoutinterwiki'          => array( 'Sans_interwiki', 'Sansinterwiki', 'Sans_interwikis', 'Sansinterwikis' ),
);

$separatorTransformTable = array( ',' => "\xc2\xa0", '.' => ',' );
