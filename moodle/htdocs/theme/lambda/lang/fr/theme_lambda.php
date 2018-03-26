<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Parent theme: Bootstrapbase by Bas Brands
 * Built on: Essential by Julian Ridden
 *
 * @package   theme_lambda
 * @copyright 2017 redPIthemes
 *
 */

/* Core */
$string['configtitle'] = 'lambda';
$string['pluginname'] = 'lambda';
$string['choosereadme'] = '
<div class="clearfix">
<div style="margin-bottom:20px;">
<p style="text-align:center;"><img class="img-polaroid" src="lambda/pix/screenshot.jpg" /></p>
</div>
<hr />
<div class="prom-box prom-box-default shadow2" style="margin-bottom:20px;">
<h2>Theme Lambda - Thème adaptable pour Moodle</h2>
</div>
<h4>Résumé du thème</h4>
<div style="color: #888; text-transform: uppercase; margin-bottom:20px;">
<p>Compatibilité: Moodle 2.5/2.6/2.7/2.8/2.9/3.0/3.1/3.2/3.3/3.4<br />Version du thème : 1.70<br />Parent theme: Bootstrapbase by Bas Brands<br />Built on: Essential by Julian Ridden</p>
</div>
<hr />
<p style="text-align:center;"><img class="img-polaroid" src="lambda/pix/redPIthemes.jpg" /></p>';

/* Settings - General */
$string['settings_general'] = 'Paramètres généraux';
$string['logo'] = 'Logo';
$string['logodesc'] = 'Veuillez téléverser votre logo personnalisé ici. Si vous téléversez un logo, il apparaîtra dans l\'entête de la page.';
$string['logo_res'] = 'Dimensions standards du logo';
$string['logo_res_desc'] = 'Fixez la hauteur de votre logo à 90px au maximum. Activer cette option permet à votre logo de s\'adapter aux résolutions des différents écrans, vous pouvez aussi utiliser une version @2 pour les écrans en haute-résolution.';
$string['home_button'] = 'Bouton de la page d\'accueil';
$string['home_button_desc'] = 'Sélectionnez dans la liste le texte que vous désirez utiliser comme bouton pour accéder à la page d\'accueil (le premier bouton dans le menu personnalisé)';
$string['home_button_shortname'] = 'Nom abrégé du site';
$string['home_button_frontpage'] = 'Page d\'accueil';
$string['home_button_frontpagedashboard'] = 'Page d\'accueil (utilisateurs non authentifiés) / Tableau de bord (utilisateurs authentifiés)';
$string['pagewidth'] = 'Largeur de la page';
$string['pagewidthdesc'] = 'Sélectionnez dans la liste la présentation souhaitée.';
$string['boxed_wide'] = 'Encadré - largeur fixe';
$string['boxed_narrow'] = 'Encadré - largeur fixe étroite';
$string['boxed_variable'] = 'Encadré - largeur variable';
$string['full_wide'] = 'Largeur variable';
$string['footnote'] = 'Pied de page';
$string['footnotedesc'] = 'Tout ce que vous placez dans cette zone de texte sera affiché dans le pied de chaque page de Moodle; par exemple le Copyright et le nom de votre organisation.';
$string['customcss'] = 'CSS personalisé';
$string['customcssdesc'] = 'Chaque règle CSS que vous ajoutez à cette zone de texte sera utilisée sur toutes les pages de Moodle, ce qui rend plus facile la personnalisation de ce thème.';

/* Settings - Background */
$string['settings_background'] = 'Fond de la page';
$string['list_bg'] = 'Sélectionnez dans la liste';
$string['list_bg_desc'] = 'Sélectionnez l\'image de fond pour les pages depuis la liste des images proposées en standard avec le thème.<br /><strong>Note : </strong>Si vous téléversez une image avec l\'option suivante, votre choix fait dans cette liste sera remplacé par l\'image téléversée.';
$string['pagebackground'] = 'Téléverser une image personnelle';
$string['pagebackgrounddesc'] = 'Téléversez votre propre image de fond. Si aucune image n\'est téléversée ici, celle que vous avez sélectionnée dans la liste sera utilisée comme image de fond.';
$string['page_bg_repeat'] = 'Répéter l\'image téléversée ?';
$string['page_bg_repeat_desc'] = 'Si vous avez téléversé une image et que vous désirez l\'utiliser comme un motif, vous devez sélectionner cette option pour répéter cette image horizontalement et verticalement sur la page.<br />Dans le cas contraire, si vous laissez l\'option non cochée, l\'image sera affichée de manière à ce qu\'elle occupe toute la fenêtre du navigateur web.';

/* Settings - Colors */
$string['settings_colors'] = 'Couleurs';
$string['maincolor'] = 'Couleur du thème';
$string['maincolordesc'] = 'La couleur principale de votre thème - cette valeur va modifier plusieurs éléments dans le site pour produire la couleur choisie dans l\'entier de votre site Moodle';
$string['linkcolor'] = 'Couleur des liens';
$string['linkcolordesc'] = 'La couleur des liens. Vous pouvez aussi utiliser la couleur principale de votre thème, mais des couleurs peuvent s\'avérer difficile à lire. Dans ce cas vous pouvez sélectionner une couleur plus foncée ici.';
$string['mainhovercolor'] = 'Couleur des liens survolés';
$string['mainhovercolordesc'] = 'La couleur des liens lorsque votre pointeur passe par dessus ceux-ci - utilisé notamment pour les liens, les menus, etc.';
$string['def_buttoncolor'] = 'Bouton par défaut';
$string['def_buttoncolordesc'] = 'Couleur pour le bouton sélectionné par défaut';
$string['def_buttonhovercolor'] = 'Bouton par défaut (Sélectionné)';
$string['def_buttonhovercolordesc'] = 'Couleur lorsque le bouton par défaut est survolé par le curseur';
$string['menufirstlevelcolor'] = 'Menu 1er niveau';
$string['menufirstlevelcolordesc'] = 'Couleur pour la barre de navigation';
$string['menufirstlevel_linkcolor'] = 'Menu 1er niveau - les liens';
$string['menufirstlevel_linkcolordesc'] = 'Couleur pour afficher les liens dans la barre de navigation';
$string['menusecondlevelcolor'] = 'Menu 2e niveau';
$string['menusecondlevelcolordesc'] = 'Couleur du menu déroulant de navigation';
$string['menusecondlevel_linkcolor'] = 'Menu 2e niveau - les liens';
$string['menusecondlevel_linkcolordesc'] = 'Couleur des liens dans le menu déroulant';
$string['footercolor'] = 'Couleur d\'arrière-plan pour le pied de page';
$string['footercolordesc'] = 'Fixe la couleur de l\'arrière-plan pour la boîte sur le pied de toutes les pages du site';
$string['footerheadingcolor'] = 'Couleur des titres dans le pied de page';
$string['footerheadingcolordesc'] = 'Fixe la couleur du titre des blocs présents dans le pied de page du site';
$string['footertextcolor'] = 'Couleur du texte dans le pied de pages';
$string['footertextcolordesc'] = 'Fixe la couleur du texte présent dans le pied de page du site';
$string['copyrightcolor'] = 'Couleur du Copyright dans le pied de pages';
$string['copyrightcolordesc'] = 'Fixe la couleur dans laquelle est affiché le Copyright dans le pied de page du site';
$string['copyright_textcolor'] = 'Couleur du texte du Copyright';
$string['copyright_textcolordesc'] = 'Fixe la couleur du texte dans la boîte d\'information sur le Copyright du site';

/* Settings - blocks */
$string['settings_blocks'] = 'Blocs Moodle';
$string['block_layout'] = 'Sélectionnez la présentation des blocs';
$string['block_layout_opt0'] = 'Affichage par défaut de Lambda ';
$string['block_layout_opt1'] = 'Affichage standard de Moodle';
$string['block_layout_opt2'] = 'Blocs en marge dans un menu';
$string['block_layout_desc'] = 'Vous pouvez choisir entre :<br /><ul><li>Affichage par défaut de Lambda : les deux zones de blocs sont affichées ensemble à droite de la zone principale d\'affichage</li><li>Affichage standard de Moodle : les deux zones de blocs sont affichées de chaque côté de la zone principale d\'affichage</li><li>Blocs en marge dans un menu : Vous pouvez créer un menu contenant les blocs déplacés en marge à gauche de la page</li></ul><strong>Veuillez noter : </strong>Vous ne pouvez rétracter le contenu des blocs qu\'avec les options <em>Affichage par défaut de Lambda</em> et <em>Affichage standard de Moodle</em>.';
$string['sidebar_frontpage'] = 'Activer le menu des blocs déplacés aussi sur la page d\'accueil';
$string['sidebar_frontpage_desc'] = 'Si vous avez choisi l\'option des blocs en marge dans un menu, dans l\'option des blocs de Moodle ci-dessus, vous pouvez alors choisir si le menu est aussi activé sur la page d\'accueil de Moodle ou non. La page d\'accueil possède une région supplémentaire pour les blocs accessibles aux administrateurs, de ce fait vous pouvez considérer que le menu des blocs déplacés n\'est pas nécessaire ici.<br /><strong>Veuillez noter : </strong>Si vous avez choisi une autre disposition des blocs que celle du menu de blocs déplacés, alors ce paramètre n\'aura aucun effet sur l\'affichage de la page.';
$string['block_style'] = 'Choisissez le style de bloc';
$string['block_style_opt0'] = 'style de bloc 01';
$string['block_style_opt1'] = 'style de bloc 02';
$string['block_style_opt2'] = 'style de bloc 03';
$string['block_style_desc'] = 'Vous pouvez choisir entre les styles suivants :<div class="row-fluid"><div class="span4"><p><img class="img-responsive img-polaroid" src="http://redpithemes.com/Documentation/assets/img/options-blocks-1.jpg" /><p>style de bloc 01</div><div class="span4"><p><img class="img-responsive img-polaroid" src="http://redpithemes.com/Documentation/assets/img/options-blocks-2.jpg" /><p>style de bloc 02</div><div class="span4"><p><img class="img-responsive img-polaroid" src="http://redpithemes.com/Documentation/assets/img/options-blocks-3.jpg" /><p>style de bloc 03</div></div>';
$string['block_icons'] = 'Icônes des blocs du thème Lambda';
$string['block_icons_opt0'] = 'en couleurs (défaut)';
$string['block_icons_opt1'] = 'monochrome';
$string['block_icons_opt2'] = 'aucun (masque les icônes des blocs)';
$string['block_icons_desc'] = 'Choisissez un style pour les icônes des blocs.';

/* Settings - Socials */
$string['settings_socials'] = 'Réseaux sociaux';
$string['socialsheadingsub'] = 'Promouvez votre site auprès des utilisateurs avec les réseaux sociaux';
$string['socialsdesc'] = 'Indiquez les liens directs vers les différents réseaux sociaux sur lesquels vous faite la promotion de votre institution.';
$string['facebook'] = 'URL de Facebook';
$string['facebookdesc'] = 'Entrez l\'URL de votre page Facebook. (par ex. : https://www.facebook.com/moncollege)';
$string['twitter'] = 'URL de Twitter';
$string['twitterdesc'] = 'Entrez l\'URL de votre flux Tweeter. (par ex. : https://www.twitter.com/moncollege)';
$string['googleplus'] = 'URL de Google+';
$string['googleplusdesc'] = 'Entrez l\'URL de votre profil Google+. (par ex. : https://plus.google.com/+moncollege)';
$string['youtube'] = 'URL de YouTube';
$string['youtubedesc'] = 'Entrez l\'URL de votre canal YouTube. (par ex. : https://www.youtube.com/user/moncollege)';
$string['flickr'] = 'URL de Flickr';
$string['flickrdesc'] = 'Entrez l\'URL de votre page Flickr. (par ex. : http://www.flickr.com/photos/moncollege)';
$string['pinterest'] = 'URL de Pinterest';
$string['pinterestdesc'] = 'Entrez l\'URL de votre page Pinterest. (par ex. : http://pinterest.com/mycollege/monpinboard)';
$string['instagram'] = 'URL d\'Instagram';
$string['instagramdesc'] = 'Entrez l\'URL de votre page Instagram. (par ex. : http://instagram.com/moncollege)';
$string['linkedin'] = 'URL de LinkedIn';
$string['linkedindesc'] = 'Entrez l\'URL de votre page LinkedIn. (par ex. : http://www.linkedin.com/company/moncollege)';
$string['website'] = 'URL de votre site web';
$string['websitedesc'] = 'Entrez l\'URL de votre propre site web. (par ex. : http://www.moncollege.ch)';
$string['socials_mail'] = 'Adresse de courriel';
$string['socials_mail_desc'] = 'Entrez le code HTML pour accéder à votre adresse courriel. (par ex. : info@mycollege.com)';
$string['socials_color'] = 'Couleur des icônes pour les réseaux sociaux';
$string['socials_color_desc'] = 'Sélectionnez la couleur que vous désirez appliquer aux icônes des réseaux sociaux.';
$string['socials_position'] = 'Position des icônes';
$string['socials_position_desc'] = 'Choisissez où vous désirez placer les icônes des réseaux sociaux : footer (pied de page) ou header (en-tête).';

/* Settings - Fonts */
$string['settings_fonts'] = 'Polices';
$string['fontselect_heading'] = 'Sélecteur de police - En-têtes';
$string['fontselectdesc_heading'] = 'Sélectionnez la police depuis la liste des polices disponibles.';
$string['fontselect_body'] = 'Sélecteur de police - Corps';
$string['fontselectdesc_body'] = 'Sélectionnez la police depuis la liste des polices disponibles.';
$string['font_body_size'] = 'Taille du corps';
$string['font_body_size_desc'] = 'Ajustez la taille des caractères pour l\'ensemble du texte dans le corps des pages.';
$string['font_languages'] = 'Typographie additionnelle';
$string['font_languages_desc'] = 'Certaines polices de caractères disponibles dans la bibliothèque de Google Font supportent des typographies additionnelles pour différents langages. Plus vous sélectionnez de typographies additionnelles, plus votre site Moodle peut être ralenti. Ne sélectionnez donc que les typographies dont vous avez besoin.<br /><strong>Veuillez noter : </strong>La bibliothèque de Google Font ne propose pas toutes les typographies pour toutes les polices de caractères. En cas de doute, vous devriez sélectionner <i>Open Sans</i>.';
$string['font_languages_latinext'] = 'Latin étendu';
$string['font_languages_cyrillic'] = 'Cyrillique';
$string['font_languages_cyrillicext'] = 'Cyrillique étendu';
$string['font_languages_greek'] = 'Grec';
$string['font_languages_greekext'] = 'Grec étendu';

/* Settings - Slider */
$string['settings_slider'] = 'Diaporama';
$string['slideshowheading'] = 'Diaporama page d\'accueil';
$string['slideshowheadingsub'] = 'Diaporama dynamique sur la page d\'accueil';
$string['slideshowdesc'] = 'Cette option crée un diaporama dynamique de 1 à 5 diapositives, pour mettre en avant des éléments importants de votre site.<br /><b>Note : </b>Vous devez téléverser au moins une image pour que le diaporama apparaisse sur la page. L\'en-tête, l\'accroche, et l\'URL sont optionnels..';
$string['slideshow_slide1'] = 'Diaporama - diapo 1';
$string['slideshow_slide2'] = 'Diaporama - diapo 2';
$string['slideshow_slide3'] = 'Diaporama - diapo 3';
$string['slideshow_slide4'] = 'Diaporama - diapo 4';
$string['slideshow_slide5'] = 'Diaporama - diapo 5';
$string['slideshow_options'] = 'Diaporama - Options';
$string['slidetitle'] = 'En-tête de la diapo';
$string['slidetitledesc'] = 'Entrez un titre pour votre diapositive';
$string['slideimage'] = 'Image de la diapo';
$string['slideimagedesc'] = 'Téléverser une image.';
$string['slidecaption'] = 'Accroche de la diapo';
$string['slidecaptiondesc'] = 'Entrez un texte d\'accroche pour votre diapo';
$string['slide_url'] = 'URL de la diapo';
$string['slide_url_desc'] = 'Si vous indiquez une URL, un bouton « Continuer… » apparaît sur votre diapositive et permet de se rendre sur la page liée.';
$string['slideshowpattern'] = 'Motif/Superposition';
$string['slideshowpatterndesc'] = 'Choisissez un motif qui vient se superposer de manière transparente sur vos images.';
$string['pattern1'] = 'aucun';
$string['pattern2'] = 'pointillé - serré';
$string['pattern3'] = 'pointillé - lâche';
$string['pattern4'] = 'lignes - horizontales';
$string['pattern5'] = 'lignes - verticales';
$string['slideshow_advance'] ='AvanceAuto';
$string['slideshow_advance_desc'] ='Selectionnez cette option si vous désirez que votre diaporama avance automatiquement d\'une diapo à l\'autre après une certaine durée de temps';
$string['slideshow_nav'] ='Boutons de navigation';
$string['slideshow_nav_desc'] ='Si cette option est sélectionnée, des boutons de navigation (précédant, suivant, joue/stop) seront affichés seulement lorsque l\'utilisateur place le curseur sur le diaporama. Dans le cas contraire, ces boutons seront affichés tout le temps.';
$string['slideshow_loader'] ='Indicateur de chargement';
$string['slideshow_loader_desc'] ='Chosissez le style de l\'indicateur de chargement des images (cercle, barre, aucun). Si vous choisissez « cercle » certains vieux navigateurs comme IE8 ne peuvent pas l\'afficher et utiliseront une barre à la place.';
$string['slideshow_imgfx'] ='Effets pour les images';
$string['slideshow_imgfx_desc'] ='Indiquez dans cette rubrique le nom de l\'effet de transition à appliquer aux images. Les valeurs possibles sont : <br /><i>random, simpleFade, curtainTopLeft, curtainTopRight, curtainBottomLeft, curtainBottomRight, curtainSliceLeft, curtainSliceRight, blindCurtainTopLeft, blindCurtainTopRight, blindCurtainBottomLeft, blindCurtainBottomRight, blindCurtainSliceBottom, blindCurtainSliceTop, stampede, mosaic, mosaicReverse, mosaicRandom, mosaicSpiral, mosaicSpiralReverse, topLeftBottomRight, bottomRightTopLeft, bottomLeftTopRight, bottomLeftTopRight, scrollLeft, scrollRight, scrollHorz, scrollBottom, scrollTop</i>';
$string['slideshow_txtfx'] ='Effets pour les textes';
$string['slideshow_txtfx_desc'] ='Indiquez dans cette rubrique le nom de l\'effet de transition à appliquer au texte de toutes les diapositives. Les options possibles sont :<br /><i>moveFromLeft, moveFromRight, moveFromTop, moveFromBottom, fadeIn, fadeFromLeft, fadeFromRight, fadeFromTop, fadeFromBottom</i>';

/* Settings - Carousel */
$string['settings_carousel'] = 'Carousel';
$string['carouselheadingsub'] = 'Paramètres pour le carrousel de la page d\’accueil';
$string['carouseldesc'] = 'Vous pouvez paramétrer ici le carrousel de la page d\'accueil.<br /><strong>Veuillez noter : </strong>Vous devez téléverser au moins une image pour que le carrousel apparaisse. Le texte d\'accroche apparaît lorsque le pointeur est placé sur l\'image, il est optionnel.';
$string['carousel_position'] = 'Position du carrousel';
$string['carousel_positiondesc'] = 'Choisissez une position pour afficher le carrousel.<br />Vous pouvez placer le carrousel en haut ou en bas de la zone principale de la page.';
$string['carousel_h'] = 'Titre';
$string['carousel_h_desc'] = 'Le titre à affiche au-dessus du carrousel de la page d\'accueil.';
$string['carousel_hi'] = 'Style du titre';
$string['carousel_hi_desc'] = 'Définissez le style du titre : de &lt;h1&gt; pour le titre principal. &lt;h6&gt; pour le titre le moins important.';
$string['carousel_add_html'] = 'Contenu HTML additionnel';
$string['carousel_add_html_desc'] = 'Tout contenu additionnel sera placé à gauche du carrousel de la page d\'accueil.<br /><strong>Note : </strong>Vous devez utiliser le langage HTML pour formater votre texte.';
$string['carousel_slides'] = 'Nombre de diapositives';
$string['carousel_slides_desc'] = 'Choisissez le nombre de diapositives que comportera votre carrousel.';
$string['carousel_image'] = 'Image';
$string['carousel_imagedesc'] = 'Téléversez l\'image qui apparaîtra dans le carrousel.';
$string['carousel_heading'] = 'Accroche - Titre';
$string['carousel_heading_desc'] = 'Entrez un titre pour votre image – ceci sera utilisé comme une accroche qui apparaît lorsque le pointeur est placé sur l\'image.<br /><strong>Note : </strong>Vous devez donner un titre pour que l\'accroche apparaisse.';
$string['carousel_caption'] = 'Accroche - Texte';
$string['carousel_caption_desc'] = 'Entrez l\'accroche à afficher lorsque le curseur est placé sur l\'image.';
$string['carousel_url'] = 'Accroche - URL';
$string['carousel_urldesc'] = 'Ceci va créer un bouton qui apparaît en même temps que l\'accroche avec un lien vers l\'URL que vous avez indiqué.';
$string['carousel_btntext'] = 'Accroche - Texte du lien';
$string['carousel_btntextdesc'] = 'Entrez un texte qui servira de lien URL.';
$string['carousel_color'] = 'Accroche - Couleur';
$string['carousel_colordesc'] = 'Choisissez une couleur pour le texte de l\'accroche.';

/* Settings - Login */
$string['settings_login'] = 'Connexion et navigation';
$string['custom_login'] = 'Page de connexion personnalisée';
$string['custom_login_desc'] = 'Sélectionnez cette option pour afficher une version personnalisée de la page de connexion standard de Moodle.';
$string['mycourses_dropdown'] = 'Menu déroulant MesCours';
$string['mycourses_dropdown_desc'] = 'Affiche les cours dans lesquels un utilisateur est inscrit sous la forme d\'un item dans le menu personnel.';
$string['hide_breadcrumb'] = 'Cacher le fil d\'Ariane';
$string['hide_breadcrumb_desc'] = 'Cache la navigation par le fil d\'Ariane de Moodle aux utilisateurs non authentifiés et aux invités ?';
$string['shadow_effect'] = 'Effet ombré';
$string['shadow_effect_desc'] = 'Crée un effet d\'ombre au menu personnalisé de Moodle et au diaporama ?';
$string['login_link'] = 'Lien additionnel pour la connexion';
$string['login_link_desc'] = 'Affiche un lien additionnel dans le formulaire de connexion du thème.';
$string['moodle_login_page'] = 'Page de connexion de Moodle';
$string['custom_login_link_url'] = 'URL de la page de connexion personnalisée';
$string['custom_login_link_url_desc'] = 'Entrez ici l\'URL du lien additionel à ajouter au formulaire de connexion vers une page de connexion personnalisée. Ceci remplace le paramètre de l\'option précédente.';
$string['custom_login_link_txt'] = 'Texte pour le lien vers la page personnalisée de connexion';
$string['custom_login_link_txt_desc'] = 'Entrez ici le texte du lien supplémentaire à ajouter au formulaire de connexion. Ceci remplace le paramètre de l\'option précédente.';
$string['auth_googleoauth2'] = 'Oauth2';
$string['auth_googleoauth2_desc'] = 'Utilisez le système d\'authentification Oauth2 de Moodle au lieu du formulaire standard ?<br /><strong>Veuillez noter : </strong>Vous devez d\'abord installer ce plug-in additionnel depuis la page des plug-ins. Ce plug-in permet à vos utilisateurs d\'utiliser leur compte Google / Facebook / Github / Linkedin / Windows Live / VK / Battle.net pour se connecter à votre Moodle. A la première connexion, un nouveau compte utilisateur est créé.';

/* Theme */
$string['visibleadminonly'] ='Les blocs placés dans la zone ci-dessous ne sont affichés qu\'aux administrateurs du site.';
$string['region-side-post'] = 'Droite';
$string['region-side-pre'] = 'Gauche';
$string['region-footer-left'] = 'Pied de page (gauche)';
$string['region-footer-middle'] = 'Pied de page (centre)';
$string['region-footer-right'] = 'Pied de page (droite)';
$string['region-hidden-dock'] = 'Caché aux utilisateurs';
$string['nextsection'] = '';
$string['previoussection'] = '';
$string['backtotop'] = '';