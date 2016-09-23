<?php
/** Franco-Provençal (arpetan)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Cedric31
 * @author ChrisPtDe
 * @author Reedy
 * @author לערי ריינהארט
 */

$fallback = 'fr';

$bookstoreList = array(
    'Amazon.fr'    => 'http://www.amazon.fr/exec/obidos/ISBN=$1',
    'alapage.fr'   => 'http://www.alapage.com/mx/?tp=F&type=101&l_isbn=$1&donnee_appel=ALASQ&devise=&',
    'fnac.com'     => 'http://www3.fnac.com/advanced/book.do?isbn=$1',
    'chapitre.com' => 'http://www.chapitre.com/frame_rec.asp?isbn=$1',
);

$namespaceNames = array(
	NS_MEDIA            => 'Mèdia',
	NS_SPECIAL          => 'Spèciâl',
	NS_TALK             => 'Discussion',
	NS_USER             => 'Utilisator',
	NS_USER_TALK        => 'Discussion_utilisator',
	NS_PROJECT_TALK     => 'Discussion_$1',
	NS_FILE             => 'Fichiér',
	NS_FILE_TALK        => 'Discussion_fichiér',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Discussion_MediaWiki',
	NS_TEMPLATE         => 'Modèlo',
	NS_TEMPLATE_TALK    => 'Discussion_modèlo',
	NS_HELP             => 'Éde',
	NS_HELP_TALK        => 'Discussion_éde',
	NS_CATEGORY         => 'Catègorie',
	NS_CATEGORY_TALK    => 'Discussion_catègorie',
);

$namespaceAliases = array(
	'Discutar'              => NS_TALK,
	'Usanciér'              => NS_USER,
	'Discussion_usanciér'   => NS_USER_TALK,
	'Émâge'                 => NS_FILE,
	'Discussion_Émâge'      => NS_FILE_TALK,
	'Discussion_Modèlo'     => NS_TEMPLATE_TALK,
	'Discussion_Éde'        => NS_HELP_TALK,
	'Discussion_Catègorie'  => NS_CATEGORY_TALK
);

$specialPageAliases = array(
	'Activeusers'               => array( 'Usanciérs_actifs', 'UsanciérsActifs' ),
	'Allmessages'               => array( 'Mèssâjos_sistèmo', 'MèssâjosSistèmo' ),
	'Allpages'                  => array( 'Totes_les_pâges', 'TotesLesPâges' ),
	'Ancientpages'              => array( 'Pâges_les_muens_dèrriérement_changiês', 'PâgesLesMuensDèrriérementChangiês' ),
	'Blankpage'                 => array( 'Pâge_voueda', 'PâgeVoueda' ),
	'Block'                     => array( 'Blocar', 'Blocâjo' ),
	'Blockme'                   => array( 'Blocâd-mè', 'BlocâdMè' ),
	'Booksources'               => array( 'Ôvres_de_refèrence', 'ÔvresDeRefèrence' ),
	'BrokenRedirects'           => array( 'Redirèccions_câsses', 'RedirèccionsCâsses' ),
	'Categories'                => array( 'Catègories' ),
	'ChangePassword'            => array( 'Changement_de_contresegno', 'ChangementDeContresegno' ),
	'Confirmemail'              => array( 'Confirmar_l\'adrèce_èlèctronica', 'ConfirmarLAdrèceÈlèctronica' ),
	'Contributions'             => array( 'Contribucions' ),
	'CreateAccount'             => array( 'Fâre_un_compto', 'FâreUnCompto' ),
	'Deadendpages'              => array( 'Pâges_en_cul-de-sac', 'PâgesEnCulDeSac' ),
	'DeletedContributions'      => array( 'Contribucions_suprimâs', 'ContribucionsSuprimâs' ),
	'Disambiguations'           => array( 'Homonimia', 'Homonimies', 'Pâges_d\'homonimia', 'PâgesDHomonimia' ),
	'DoubleRedirects'           => array( 'Redirèccions_dobles', 'RedirèccionsDobles' ),
	'Emailuser'                 => array( 'Mandar_un_mèssâjo', 'MandarUnMèssâjo', 'Mèssâjo' ),
	'Export'                    => array( 'Èxportar', 'Èxportacion' ),
	'Fewestrevisions'           => array( 'Pâges_les_muens_changiês', 'PâgesLesMuensChangiês' ),
	'FileDuplicateSearch'       => array( 'Rechèrche_des_fichiérs_en_doblo', 'RechèrcheDesFichiérsEnDoblo' ),
	'Filepath'                  => array( 'Chemin_d\'accès_du_fichiér', 'CheminDAccèsDuFichiér' ),
	'Import'                    => array( 'Importar', 'Importacion' ),
	'Invalidateemail'           => array( 'Envalidar_l\'adrèce_èlèctronica', 'EnvalidarLAdrèceÈlèctronica' ),
	'BlockList'                 => array( 'Lista_des_blocâjos', 'ListaDesBlocâjos', 'Blocâjos', 'Usanciérs_blocâs', 'UsanciérsBlocâs', 'Adrèces_IP_blocâs', 'AdrècesIPBlocâs' ),
	'LinkSearch'                => array( 'Rechèrche_de_lims', 'RechèrcheDeLims' ),
	'Listadmins'                => array( 'Lista_ux_administrators', 'ListaUxAdministrators' ),
	'Listbots'                  => array( 'Lista_ux_bots', 'ListaUxBots' ),
	'Listfiles'                 => array( 'Lista_des_fichiérs', 'ListaDesFichiérs', 'Lista_de_les_émâges', 'ListaDeLesÉmâges' ),
	'Listgrouprights'           => array( 'Lista_des_drêts_a_les_tropes_d\'usanciérs', 'ListaDesDrêtsALesTropesDUsanciérs' ),
	'Listredirects'             => array( 'Lista_de_les_redirèccions', 'ListaDeLesRedirèccions' ),
	'Listusers'                 => array( 'Lista_ux_usanciérs', 'ListaUxUsanciérs', 'Usanciérs' ),
	'Lockdb'                    => array( 'Vèrrolyér_la_bâsa_de_balyês', 'VèrrolyérLaBâsaDeBalyês' ),
	'Log'                       => array( 'Jornal', 'Jornals' ),
	'Lonelypages'               => array( 'Pâges_orfenes', 'PâgesOrfenes' ),
	'Longpages'                 => array( 'Pâges_longes', 'PâgesLonges' ),
	'MergeHistory'              => array( 'Fusionar_los_historicos', 'FusionarLosHistoricos' ),
	'MIMEsearch'                => array( 'Rechèrche_per_tipo_de_contegnu_MIME', 'RechèrchePerTipoDeContegnuMIME' ),
	'Mostcategories'            => array( 'Pâges_utilisent_lo_més_de_catègories', 'PâgesUtilisentLoMésDeCatègories' ),
	'Mostimages'                => array( 'Fichiérs_los_ples_liyês', 'FichiérsLosPlesLiyês', 'Fichiérs_los_ples_utilisâs', 'FichiérsLosPlesUtilisâs', 'Émâges_les_ples_liyês', 'ÉmâgesLesPlesLiyês', 'Émâges_les_ples_utilisâs', 'ÉmâgesLesPlesUtilisâs' ),
	'Mostlinked'                => array( 'Pâges_les_ples_liyês', 'PâgesLesPlesLiyês' ),
	'Mostlinkedcategories'      => array( 'Catègories_les_ples_liyês', 'CatègoriesLesPlesLiyês', 'Catègories_les_ples_utilisâs', 'CatègoriesLesPlesUtilisâs' ),
	'Mostlinkedtemplates'       => array( 'Modèlos_los_ples_liyês', 'ModèlosLosPlesLiyês', 'Modèlos_los_ples_utilisâs', 'ModèlosLosPlesUtilisâs' ),
	'Mostrevisions'             => array( 'Pâges_les_ples_changiês', 'PâgesLesPlesChangiês' ),
	'Movepage'                  => array( 'Renomar_una_pâge', 'RenomarUnaPâge', 'Changement_de_nom', 'ChangementDeNom' ),
	'Mycontributions'           => array( 'Mes_contribucions', 'MesContribucions' ),
	'Mypage'                    => array( 'Ma_pâge', 'MaPâge' ),
	'Mytalk'                    => array( 'Mes_discussions', 'MesDiscussions' ),
	'Newimages'                 => array( 'Novéls_fichiérs', 'NovélsFichiérs', 'Émâges_novèles', 'ÉmâgesNovèles' ),
	'Newpages'                  => array( 'Pâges_novèles', 'PâgesNovèles' ),
	'PermanentLink'             => array( 'Lim_fixo', 'LimFixo' ),
	'Popularpages'              => array( 'Pâges_les_ples_consultâs', 'PâgesLesPlesConsultâs' ),
	'Preferences'               => array( 'Prèferences' ),
	'Prefixindex'               => array( 'Endèxe_des_prèfixos', 'EndèxeDesPrèfixos' ),
	'Protectedpages'            => array( 'Pâges_protègiês', 'PâgesProtègiês' ),
	'Protectedtitles'           => array( 'Titros_protègiês', 'TitrosProtègiês' ),
	'Randompage'                => array( 'Pâge_a_l\'hasârd', 'PâgeALHasârd' ),
	'Randomredirect'            => array( 'Redirèccion_a_l\'hasârd', 'RedirèccionALHasârd' ),
	'Recentchanges'             => array( 'Dèrriérs_changements', 'DèrriérsChangements' ),
	'Recentchangeslinked'       => array( 'Survelyence_des_lims', 'SurvelyenceDesLims' ),
	'Revisiondelete'            => array( 'Vèrsions_suprimâs', 'VèrsionsSuprimâs' ),
	'Search'                    => array( 'Rechèrchiér', 'Rechèrche' ),
	'Shortpages'                => array( 'Pâges_côrtes', 'PâgesCôrtes' ),
	'Specialpages'              => array( 'Pâges_spèciâles', 'PâgesSpèciâles' ),
	'Statistics'                => array( 'Statistiques' ),
	'Tags'                      => array( 'Balises' ),
	'Uncategorizedcategories'   => array( 'Catègories_sen_catègorie', 'CatègoriesSenCatègorie' ),
	'Uncategorizedimages'       => array( 'Fichiérs_sen_catègorie', 'FichiérsSenCatègorie', 'Émâges_sen_catègorie', 'ÉmâgesSenCatègorie' ),
	'Uncategorizedpages'        => array( 'Pâges_sen_catègorie', 'PâgesSenCatègorie' ),
	'Uncategorizedtemplates'    => array( 'Modèlos_sen_catègorie', 'ModèlosSenCatègorie' ),
	'Undelete'                  => array( 'Refâre', 'Rèstoracion' ),
	'Unlockdb'                  => array( 'Dèvèrrolyér_la_bâsa_de_balyês', 'DèvèrrolyérLaBâsaDeBalyês' ),
	'Unusedcategories'          => array( 'Catègories_inutilisâs', 'CatègoriesInutilisâs' ),
	'Unusedimages'              => array( 'Fichiérs_inutilisâs', 'FichiérsInutilisâs', 'Émâges_inutilisâs', 'ÉmâgesInutilisâs' ),
	'Unusedtemplates'           => array( 'Modèlos_inutilisâs', 'ModèlosInutilisâs' ),
	'Unwatchedpages'            => array( 'Pâges_pas_siuvues', 'PâgesPasSiuvues' ),
	'Upload'                    => array( 'Tèlèchargiér', 'Tèlèchargement' ),
	'Userlogin'                 => array( 'Branchiér', 'Branchement' ),
	'Userlogout'                => array( 'Dèbranchiér', 'Dèbranchement' ),
	'Userrights'                => array( 'Drêts_d\'usanciér', 'DrêtsDUsanciér' ),
	'Version'                   => array( 'Vèrsion' ),
	'Wantedcategories'          => array( 'Catègories_les_ples_demandâs', 'CatègoriesLesPlesDemandâs' ),
	'Wantedfiles'               => array( 'Fichiérs_los_ples_demandâs', 'FichiérsLosPlesDemandâs' ),
	'Wantedpages'               => array( 'Pâges_les_ples_demandâs', 'PâgesLesPlesDemandâs', 'Lims_câssos', 'LimsCâssos' ),
	'Wantedtemplates'           => array( 'Modèlos_los_ples_demandâs', 'ModèlosLosPlesDemandâs' ),
	'Watchlist'                 => array( 'Lista_de_survelyence', 'ListaDeSurvelyence', 'Survelyence' ),
	'Whatlinkshere'             => array( 'Pâges_liyês', 'PâgesLiyês' ),
	'Withoutinterwiki'          => array( 'Pâges_sen_lims_entèrlengoues', 'PâgesSenLimsEntèrlengoues', 'Pâges_sen_lims_entèrvouiqui', 'PâgesSenLimsEntèrvouiqui' ),
);

$magicWords = array(
	'redirect'                => array( '0', '#REDIRÈCCION', '#REDIRECTION', '#REDIRECT' ),
	'notoc'                   => array( '0', '__NION_SOMÈRO__', '__NIONA_TRÂBLA__', '__AUCUNSOMMAIRE__', '__AUCUNETDM__', '__NOTOC__' ),
	'nogallery'               => array( '0', '__NIONA_GALERIE__', '__AUCUNEGALERIE__', '__NOGALLERY__' ),
	'forcetoc'                => array( '0', '__FORCIÉR_LO_SOMÈRO__', '__FORCIÉR_LA_TRÂBLA__', '__FORCERSOMMAIRE__', '__FORCERTDM__', '__FORCETOC__' ),
	'toc'                     => array( '0', '__SOMÈRO__', '__TRÂBLA__', '__SOMMAIRE__', '__TDM__', '__TOC__' ),
	'noeditsection'           => array( '0', '__SÈCCION_QUE_PÔT_PAS_ÉTRE_CHANGIÊ__', '__SECTIONNONEDITABLE__', '__NOEDITSECTION__' ),
	'noheader'                => array( '0', '__NION_EN_TÉTA__', '__AUCUNENTETE__', '__NOHEADER__' ),
	'currentmonth'            => array( '1', 'MÊS_D_ORA', 'MÊS_D_ORA_2', 'MOISACTUEL', 'MOIS2ACTUEL', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonth1'           => array( '1', 'MÊS_D_ORA_1', 'MOIS1ACTUEL', 'CURRENTMONTH1' ),
	'currentmonthname'        => array( '1', 'NOM_DU_MÊS_D_ORA', 'NOMMOISACTUEL', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'     => array( '1', 'GÈNITIF_DU_NOM_DU_MÊS_D_ORA', 'NOMGENMOISACTUEL', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'      => array( '1', 'ABRÈV_DU_MÊS_D_ORA', 'ABREVMOISACTUEL', 'CURRENTMONTHABBREV' ),
	'currentday'              => array( '1', 'JORN_D_ORA', 'JOURACTUEL', 'JOUR1ACTUEL', 'CURRENTDAY' ),
	'currentday2'             => array( '1', 'JORN_D_ORA_2', 'JOUR2ACTUEL', 'CURRENTDAY2' ),
	'currentdayname'          => array( '1', 'NOM_DU_JORN_D_ORA', 'NOMJOURACTUEL', 'CURRENTDAYNAME' ),
	'currentyear'             => array( '1', 'AN_D_ORA', 'ANNEEACTUELLE', 'CURRENTYEAR' ),
	'currenttime'             => array( '1', 'HORÈRO_D_ORA', 'HORAIREACTUEL', 'CURRENTTIME' ),
	'currenthour'             => array( '1', 'HORA_D_ORA', 'HEUREACTUELLE', 'CURRENTHOUR' ),
	'localmonth'              => array( '1', 'MÊS_LOCAL', 'MÊS_LOCAL_2', 'MOISLOCAL', 'MOIS2LOCAL', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonth1'             => array( '1', 'MÊS_LOCAL_1', 'MOIS1LOCAL', 'LOCALMONTH1' ),
	'localmonthname'          => array( '1', 'NOM_DU_MÊS_LOCAL', 'NOMMOISLOCAL', 'LOCALMONTHNAME' ),
	'localmonthnamegen'       => array( '1', 'GÈNITIF_DU_NOM_DU_MÊS_LOCAL', 'NOMGENMOISLOCAL', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'        => array( '1', 'ABRÈV_DU_MÊS_LOCAL', 'ABREVMOISLOCAL', 'LOCALMONTHABBREV' ),
	'localday'                => array( '1', 'JORN_LOCAL', 'JOURLOCAL', 'JOUR1LOCAL', 'LOCALDAY' ),
	'localday2'               => array( '1', 'JORN_LOCAL_2', 'JOUR2LOCAL', 'LOCALDAY2' ),
	'localdayname'            => array( '1', 'NOM_DU_JORN_LOCAL', 'NOMJOURLOCAL', 'LOCALDAYNAME' ),
	'localyear'               => array( '1', 'AN_LOCAL', 'ANNEELOCALE', 'LOCALYEAR' ),
	'localtime'               => array( '1', 'HORÈRO_LOCAL', 'HORAIRELOCAL', 'LOCALTIME' ),
	'localhour'               => array( '1', 'HORA_LOCALA', 'HEURELOCALE', 'LOCALHOUR' ),
	'numberofpages'           => array( '1', 'NOMBRO_DE_PÂGES', 'NOMBREPAGES', 'NUMBEROFPAGES' ),
	'numberofarticles'        => array( '1', 'NOMBRO_D_ARTICLLOS', 'NOMBREARTICLES', 'NUMBEROFARTICLES' ),
	'numberoffiles'           => array( '1', 'NOMBRO_DE_FICHIÉRS', 'NOMBREFICHIERS', 'NUMBEROFFILES' ),
	'numberofusers'           => array( '1', 'NOMBRO_D_USANCIÉRS', 'NOMBREUTILISATEURS', 'NUMBEROFUSERS' ),
	'numberofactiveusers'     => array( '1', 'NOMBRO_D_USANCIÉRS_ACTIFS', 'NOMBREUTILISATEURSACTIFS', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'           => array( '1', 'NOMBRO_DE_CHANGEMENTS', 'NOMBREMODIFS', 'NUMBEROFEDITS' ),
	'numberofviews'           => array( '1', 'NOMBRO_DE_VUES', 'NOMBREVUES', 'NUMBEROFVIEWS' ),
	'pagename'                => array( '1', 'NOM_DE_LA_PÂGE', 'NOMPAGE', 'PAGENAME' ),
	'pagenamee'               => array( '1', 'NOM_DE_LA_PÂGE_URL', 'NOMPAGEX', 'PAGENAMEE' ),
	'namespace'               => array( '1', 'ÈSPÂÇO_DE_NOMS', 'ESPACENOMMAGE', 'NAMESPACE' ),
	'namespacee'              => array( '1', 'ÈSPÂÇO_DE_NOMS_URL', 'ESPACENOMMAGEX', 'NAMESPACEE' ),
	'talkspace'               => array( '1', 'ÈSPÂÇO_DE_DISCUSSION', 'ESPACEDISCUSSION', 'TALKSPACE' ),
	'talkspacee'              => array( '1', 'ÈSPÂÇO_DE_DISCUSSION_URL', 'ESPACEDISCUSSIONX', 'TALKSPACEE' ),
	'subjectspace'            => array( '1', 'ÈSPÂÇO_DU_SUJÈT', 'ÈSPÂÇO_DE_L_ARTICLLO', 'ESPACESUJET', 'ESPACEARTICLE', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'           => array( '1', 'ÈSPÂÇO_DU_SUJÈT_URL', 'ÈSPÂÇO_DE_L_ARTICLLO_URL', 'ESPACESUJETX', 'ESPACEARTICLEX', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'            => array( '1', 'NOM_COMPLÈT_DE_LA_PÂGE', 'NOMPAGECOMPLET', 'FULLPAGENAME' ),
	'fullpagenamee'           => array( '1', 'NOM_COMPLÈT_DE_LA_PÂGE_URL', 'NOMPAGECOMPLETX', 'FULLPAGENAMEE' ),
	'subpagename'             => array( '1', 'NOM_DE_LA_SOT_PÂGE', 'NOMSOUSPAGE', 'SUBPAGENAME' ),
	'subpagenamee'            => array( '1', 'NOM_DE_LA_SOT_PÂGE_URL', 'NOMSOUSPAGEX', 'SUBPAGENAMEE' ),
	'basepagename'            => array( '1', 'NOM_DE_LA_PÂGE_DE_BÂSA', 'NOMBASEDEPAGE', 'BASEPAGENAME' ),
	'basepagenamee'           => array( '1', 'NOM_DE_LA_PÂGE_DE_BÂSA_URL', 'NOMBASEDEPAGEX', 'BASEPAGENAMEE' ),
	'talkpagename'            => array( '1', 'NOM_DE_LA_PÂGE_DE_DISCUSSION', 'NOMPAGEDISCUSSION', 'TALKPAGENAME' ),
	'talkpagenamee'           => array( '1', 'NOM_DE_LA_PÂGE_DE_DISCUSSION_URL', 'NOMPAGEDISCUSSIONX', 'TALKPAGENAMEE' ),
	'subjectpagename'         => array( '1', 'NOM_DE_LA_PÂGE_DU_SUJÈT', 'NOM_DE_LA_PÂGE_DE_L_ARTICLLO', 'NOMPAGESUJET', 'NOMPAGEARTICLE', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'        => array( '1', 'NOM_DE_LA_PÂGE_DU_SUJÈT_URL', 'NOM_DE_LA_PÂGE_DE_L_ARTICLLO_URL', 'NOMPAGESUJETX', 'NOMPAGEARTICLEX', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'msg'                     => array( '0', 'MSJ:', 'MSG:' ),
	'msgnw'                   => array( '0', 'MSJNV:', 'MSGNW:' ),
	'img_thumbnail'           => array( '1', 'figura', 'vignette', 'thumbnail', 'thumb' ),
	'img_manualthumb'         => array( '1', 'figura=$1', 'vignette=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'               => array( '1', 'drêta', 'droite', 'right' ),
	'img_left'                => array( '1', 'gôche', 'gauche', 'left' ),
	'img_none'                => array( '1', 'vouedo', 'néant', 'neant', 'none' ),
	'img_center'              => array( '1', 'centrâ', 'centré', 'center', 'centre' ),
	'img_framed'              => array( '1', 'encâdrâ', 'câdro', 'cadre', 'encadré', 'encadre', 'framed', 'enframed', 'frame' ),
	'img_frameless'           => array( '1', 'sen_câdro', 'pas_encâdrâ', 'sans_cadre', 'non_encadré', 'non_encadre', 'frameless' ),
	'img_page'                => array( '1', 'pâge=$1', 'pâge $1', 'page=$1', 'page $1' ),
	'img_upright'             => array( '1', 'drêt', 'drêt=$1', 'drêt $1', 'redresse', 'redresse=$1', 'redresse $1', 'upright', 'upright=$1', 'upright $1' ),
	'img_border'              => array( '1', 'bordura', 'bordure', 'border' ),
	'img_baseline'            => array( '1', 'legne_de_bâsa', 'ligne_de_base', 'base', 'baseline' ),
	'img_sub'                 => array( '1', 'segno', 'indice', 'ind', 'sub' ),
	'img_super'               => array( '1', 'èxposent', 'èxp', 'exposant', 'exp', 'super', 'sup' ),
	'img_top'                 => array( '1', 'd\'amont', 'haut', 'top' ),
	'img_text_top'            => array( '1', 'tèxto-d\'amont', 'haut-texte', 'haut-txt', 'text-top' ),
	'img_middle'              => array( '1', 'entre-mié', 'milieu', 'middle' ),
	'img_bottom'              => array( '1', 'd\'avâl', 'bas', 'bottom' ),
	'img_text_bottom'         => array( '1', 'tèxto-d\'avâl', 'bas-texte', 'bas-txt', 'text-bottom' ),
	'img_link'                => array( '1', 'lim=$1', 'lien=$1', 'link=$1' ),
	'int'                     => array( '0', 'ENT:', 'INT:' ),
	'sitename'                => array( '1', 'NOM_DU_SETO', 'NOMSITE', 'SITENAME' ),
	'ns'                      => array( '0', 'ÈDN:', 'ESPACEN:', 'NS:' ),
	'nse'                     => array( '0', 'ÈDN_URL:', 'ESPACENX:', 'NSE:' ),
	'localurl'                => array( '0', 'URL_LOCALA:', 'URLLOCALE:', 'LOCALURL:' ),
	'localurle'               => array( '0', 'URL_LOCALA_URL:', 'URLLOCALEX:', 'LOCALURLE:' ),
	'articlepath'             => array( '0', 'CHEMIN_DE_L_ARTICLLO', 'CHEMINARTICLE', 'ARTICLEPATH' ),
	'server'                  => array( '0', 'SÈRVOR', 'SERVEUR', 'SERVER' ),
	'servername'              => array( '0', 'NOM_DU_SÈRVOR', 'NOMSERVEUR', 'SERVERNAME' ),
	'scriptpath'              => array( '0', 'CHEMIN_DU_SCRIPTE', 'CHEMINSCRIPT', 'SCRIPTPATH' ),
	'stylepath'               => array( '0', 'CHEMIN_DU_STILO', 'CHEMINSTYLE', 'STYLEPATH' ),
	'grammar'                 => array( '0', 'GRAMÈRE:', 'GRAMMAIRE:', 'GRAMMAR:' ),
	'gender'                  => array( '0', 'GENRO:', 'GENRE:', 'GENDER:' ),
	'notitleconvert'          => array( '0', '__SEN_CONVÈRSION_DE_TITRO__', '__SENCDT__', '__SANSCONVERSIONTITRE__', '__SANSCT__', '__NOTITLECONVERT__', '__NOTC__' ),
	'nocontentconvert'        => array( '0', '__SEN_CONVÈRSION_DE_CONTEGNU__', '__SENCDC__', '__SANSCONVERSIONCONTENU__', '__SANSCC__', '__NOCONTENTCONVERT__', '__NOCC__' ),
	'currentweek'             => array( '1', 'SEMANA_D_ORA', 'SEMAINEACTUELLE', 'CURRENTWEEK' ),
	'currentdow'              => array( '1', 'JDS_D_ORA', 'JDSACTUEL', 'CURRENTDOW' ),
	'localweek'               => array( '1', 'SEMANA_LOCALA', 'SEMAINELOCALE', 'LOCALWEEK' ),
	'localdow'                => array( '1', 'JDS_LOCAL', 'JDSLOCAL', 'LOCALDOW' ),
	'revisionid'              => array( '1', 'NUMERÔ_DE_LA_VÈRSION', 'IDVERSION', 'REVISIONID' ),
	'revisionday'             => array( '1', 'JORN_DE_LA_VÈRSION', 'JOURVERSION', 'JOUR1VERSION', 'REVISIONDAY' ),
	'revisionday2'            => array( '1', 'JORN_DE_LA_VÈRSION_2', 'JOUR2VERSION', 'REVISIONDAY2' ),
	'revisionmonth'           => array( '1', 'MÊS_DE_LA_VÈRSION', 'MOISVERSION', 'REVISIONMONTH' ),
	'revisionmonth1'          => array( '1', 'MÊS_DE_LA_VÈRSION_1', 'MOISVERSION1', 'REVISIONMONTH1' ),
	'revisionyear'            => array( '1', 'AN_DE_LA_VÈRSION', 'ANNEEVERSION', 'REVISIONYEAR' ),
	'revisiontimestamp'       => array( '1', 'DÂTA_ET_HORA_DE_LA_VÈRSION', 'INSTANTVERSION', 'REVISIONTIMESTAMP' ),
	'revisionuser'            => array( '1', 'USANCIÉR_DE_LA_VÈRSION', 'UTILISATEURVERSION', 'REVISIONUSER' ),
	'plural'                  => array( '0', 'PLURÂL:', 'PLURIEL:', 'PLURAL:' ),
	'fullurl'                 => array( '0', 'URL_COMPLÈTA:', 'URLCOMPLETE:', 'FULLURL:' ),
	'fullurle'                => array( '0', 'URL_COMPLÈTA_URL:', 'URLCOMPLETEX:', 'FULLURLE:' ),
	'lcfirst'                 => array( '0', 'PREMIÉRE_PETIÔTA_LÈTRA:', 'INITMINUS:', 'LCFIRST:' ),
	'ucfirst'                 => array( '0', 'PREMIÉRE_GRANTA_LÈTRA:', 'INITMAJUS:', 'INITCAPIT:', 'UCFIRST:' ),
	'lc'                      => array( '0', 'PETIÔTA_LÈTRA:', 'MINUS:', 'LC:' ),
	'uc'                      => array( '0', 'GRANTA_LÈTRA:', 'MAJUS:', 'CAPIT:', 'UC:' ),
	'raw'                     => array( '0', 'BRUTO:', 'BRUT:', 'RAW:' ),
	'displaytitle'            => array( '1', 'FÂRE_VÊRE_LO_TITRO', 'AFFICHERTITRE', 'DISPLAYTITLE' ),
	'rawsuffix'               => array( '1', 'B', 'BRUT', 'R' ),
	'newsectionlink'          => array( '1', '__LIM_DE_NOVÈLA_SÈCCION__', '__LIENNOUVELLESECTION__', '__NEWSECTIONLINK__' ),
	'nonewsectionlink'        => array( '1', '__NION_LIM_DE_NOVÈLA_SÈCCION__', '__AUCUNLIENNOUVELLESECTION__', '__NONEWSECTIONLINK__' ),
	'currentversion'          => array( '1', 'VÈRSION_D_ORA', 'VERSIONACTUELLE', 'CURRENTVERSION' ),
	'urlencode'               => array( '0', 'URL_ENCODÂ:', 'ENCODEURL:', 'URLENCODE:' ),
	'anchorencode'            => array( '0', 'ANCRO_ENCODÂ', 'ENCODEANCRE', 'ANCHORENCODE' ),
	'currenttimestamp'        => array( '1', 'DÂTA_ET_HORA_D_ORA', 'INSTANTACTUEL', 'CURRENTTIMESTAMP' ),
	'localtimestamp'          => array( '1', 'DÂTA_ET_HORA_LOCALA', 'INSTANTLOCAL', 'LOCALTIMESTAMP' ),
	'directionmark'           => array( '1', 'MÂRCA_DE_DIRÈCCION', 'MARQUEDIRECTION', 'MARQUEDIR', 'DIRECTIONMARK', 'DIRMARK' ),
	'language'                => array( '0', '#LENGOUA:', '#LANGUE:', '#LANGUAGE:' ),
	'contentlanguage'         => array( '1', 'LENGOUA_DU_CONTEGNU', 'LANGUECONTENU', 'LANGCONTENU', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'        => array( '1', 'PÂGES_DENS_L_ÈSPÂÇO_DE_NOMS:', 'PÂGES_DENS_L_ÈDN:', 'PAGESDANSESPACE:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'          => array( '1', 'NOMBRO_D_ADMINS', 'NOMBREADMINS', 'NUMBEROFADMINS' ),
	'formatnum'               => array( '0', 'FORMAT_NOMBRO', 'FORMATNOMBRE', 'FORMATNUM' ),
	'padleft'                 => array( '0', 'BORRÂJO_A_GÔCHE', 'BOURRAGEGAUCHE', 'BOURREGAUCHE', 'PADLEFT' ),
	'padright'                => array( '0', 'BORRÂJO_A_DRÊTA', 'BOURRAGEDROITE', 'BOURREDROITE', 'PADRIGHT' ),
	'special'                 => array( '0', 'spèciâl', 'spécial', 'special' ),
	'defaultsort'             => array( '1', 'CLLÂF_DE_TRI:', 'CLEFDETRI:', 'CLEDETRI:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'filepath'                => array( '0', 'CHEMIN_D_ACCÈS:', 'CHEMIN:', 'FILEPATH:' ),
	'tag'                     => array( '0', 'balisa', 'balise', 'tag' ),
	'hiddencat'               => array( '1', '__CATÈGORIE_CACHIÊ__', '__CATCACHEE__', '__HIDDENCAT__' ),
	'pagesincategory'         => array( '1', 'PÂGES_DENS_LA_CATÈGORIE', 'PAGESDANSCAT', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                => array( '1', 'TALYE_DE_LA_PÂGE', 'TAILLEPAGE', 'PAGESIZE' ),
	'index'                   => array( '1', '__ENDÈXE__', '__INDEX__' ),
	'noindex'                 => array( '1', '__NION_ENDÈXE__', '__AUCUNINDEX__', '__NOINDEX__' ),
	'numberingroup'           => array( '1', 'NOMBRO_D_USANCIÉRS_DENS_LA_TROPA', 'NOMBREDANSGROUPE', 'NBDANSGROUPE', 'NUMBERINGROUP', 'NUMINGROUP' ),
	'staticredirect'          => array( '1', '__REDIRÈCCION_IMOBILA__', '__REDIRECTIONSTATIQUE__', '__STATICREDIRECT__' ),
	'protectionlevel'         => array( '1', 'NIVÉL_DE_PROTÈCCION', 'NIVEAUDEPROTECTION', 'PROTECTIONLEVEL' ),
	'formatdate'              => array( '0', 'format_de_dâta', 'formatdate', 'dateformat' ),
	'url_path'                => array( '0', 'CHEMIN', 'PATH' ),
	'url_wiki'                => array( '0', 'VOUIQUI', 'WIKI' ),
);

$linkTrail = '/^([a-zàâçéèêîœôû·’æäåāăëēïīòöōùü‘]+)(.*)$/sDu';

$dateFormats = array(
    'mdy time' => 'H:i',
    'mdy date' => 'F j, Y',
    'mdy both' => 'F j, Y "a" H:i',

    'dmy time' => 'H:i',
    'dmy date' => 'j F Y',
    'dmy both' => 'j F Y "a" H:i',

    'ymd time' => 'H:i',
    'ymd date' => 'Y F j',
    'ymd both' => 'Y F j "a" H:i',
);

$separatorTransformTable = array( ',' => "\xc2\xa0", '.' => ',' );

