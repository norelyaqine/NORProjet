<!-- AUI Framework -->
<!DOCTYPE html>
    <html>
    <head>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Nouveau Projet</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Favicons -->

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/icons/apple-touch-icon-144-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/icons/apple-touch-icon-114-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/icons/apple-touch-icon-72-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" href="assets/images/icons/apple-touch-icon-57-precomposed.png" />
        <link rel="shortcut icon" href="assets/images/icons/favicon.png" />
        <link rel="stylesheet" type="text/css" href="css/nv.css">

        <!--[if lt IE 9]>
          <script src="assets/js/minified/core/html5shiv.min.js"></script>
          <script src="assets/js/minified/core/respond.min.js"></script>
        <![endif]-->

        <!-- Fides Admin CSS Core -->

        <link rel="stylesheet" type="text/css" href="assets/css/minified/aui-production.min.css" />

        <!-- Theme UI -->

        <link id="layout-theme" rel="stylesheet" type="text/css" href="assets/themes/minified/fides/color-schemes/dark-blue.min.css" />

        <!-- Fides Admin Responsive -->

        <link rel="stylesheet" type="text/css" href="assets/themes/minified/fides/common.min.css" />
        <link rel="stylesheet" type="text/css" href="assets/themes/minified/fides/responsive.min.css" />

        <!-- Fides Admin JS -->

        <script type="text/javascript" src="assets/js/minified/aui-production.min.js"></script>

        <script>
            jQuery(window).load(
                function(){

                    var wait_loading = window.setTimeout( function(){
                      $('#loading').slideUp('fast');
                      jQuery('body').css('overflow','auto');
                    },1000
                    );

                });

        </script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body style="overflow: hidden;">
        

        <div id="loading" class="ui-front loader ui-widget-overlay bg-white opacity-100">
            <img src="assets/images/loader-dark.gif" alt="" />
        </div>

        <div id="page-wrapper" class="demo-example">

            
            <div id="page-header" class="clearfix">
                <div id="header-logo">
                    <a href="javascript:;" class="tooltip-button" data-placement="bottom" title="Close sidebar" id="close-sidebar">
                        <i class="glyph-icon icon-caret-left"></i>
                    </a>
                    <a href="javascript:;" class="tooltip-button hidden" data-placement="bottom" title="Open sidebar" id="rm-close-sidebar">
                        <i class="glyph-icon icon-caret-right"></i>
                    </a>
                    <a href="javascript:;" class="tooltip-button hidden" title="Navigation Menu" id="responsive-open-menu">
                        <i class="glyph-icon icon-align-justify"></i>
                    </a>
                    NORProject <i class="opacity-80"> 1.0</i>
                </div>
                 <div class="hide" id="black-modal-60" title="About">
                    <div class="pad20A">

                        <div class="infobox notice-bg">
                            <div class="bg-azure large btn info-icon">
                                <i class="glyph-icon icon-bullhorn"></i>
                            </div>
                            <h4 class="infobox-title">About</h4>
                            <p>Merci bien d'avoir utiliser notre projet.</p>
                        </div>

                        <h4 class="heading-1 mrg20T clearfix">
                            <div class="heading-content" style="width: auto;">
                                Qui somme nous ? 
                                <small>
                                    Text text text Text text text Text text text Text text text Text text text Text text text 
                                </small>
                            </div>
                            <div class="clear"></div>
                            <div class="divider"></div>
                        </h4>

                        

                    </div>
                </div>

               <div class="dropdown dash-menu">
                    <a href="javascript:;" data-toggle="dropdown" data-placement="left" class="medium btn primary-bg float-right popover-button-header hidden-mobile tooltip-button" title="Menu">
                        <i class="glyph-icon icon-th"></i>
                    </a>
                    <div class="dropdown-menu float-right">
                        <div class="small-box">
                            

                            <div class="bg-gray text-transform-upr font-size-12 font-bold font-gray-dark pad10A">Menu</div>
                            <div class="pad10A dashboard-buttons clearfix">
                                <a href="index.php" class="btn vertical-button remove-border bg-blue" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Retour</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button remove-border bg-red" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Help</span>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- #page-header -->

            <div id="page-sidebar" class="scrollable-content">

                <div id="sidebar-menu">
                    
                        <li>
                            <a href="javascript:;" title="Help &amp; Support">
                                <i class="glyph-icon icon-book"></i>
                                Help &amp; Support
                            </a>
                            <ul>
                                <li>
                                    <a href="docs.html" title="Getting started guide">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Getting started guide
                                    </a>
                                </li>
                                <li>
                                    <a href="http://agileui.com/support-forums" title="Support forums">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Support forums
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                    
                </div>

            </div><!-- #page-sidebar -->
            <div id="page-content-wrapper">
                <div id="page-title">

                          
                           <h3>
                             NORProject
                            <small>
                                 Application gestion de projet
                             </small>
                         </h3>
                    <div id="breadcrumb-right">
                        <div id="sidebar-search">
                            <input type="text" placeholder="Search..." class="autocomplete-input input tooltip-button" data-placement="bottom" title="Type &apos;jav&apos; to see the available tags..." id="" name="" />
                            <i class="glyph-icon icon-search"></i>
                        </div>
                        <div class="float-right">
                            <a href="javascript:;" class="btn medium bg-white tooltip-button black-modal-60 mrg5R" data-placement="bottom" title="Open modal window">
                                <span class="button-content">
                                    <i class="glyph-icon icon-question"></i>
                                </span>
                            </a>

                           
                        </div>
                    </div>
</div><!-- #page-title -->

<!-- Menu -->

<div id="page-content">



<h3>Inscription</h3>
<p class="font-gray-dark">
    The form validation example below doesn't use any additional initialization javascript. It's all done using HTML attributes.
</p>

<div class="example-box">
    <div class="example-code">

        <form id="demo-form-2" action="" class="col-md-10 center-margin" method="POST" />
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        Nom :
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="text" id="email" name="nom" data-type="email" data-trigger="change" data-required="true" class="parsley-validated" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        Prenom:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="text" id="email" name="prenom" data-type="email" data-trigger="change" data-required="true" class="parsley-validated" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        Email:
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="text" id="email" name="email" data-type="email" data-trigger="change" data-required="true" class="parsley-validated" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="" class="label-description">
                        Phone:
                       
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="text" id="email" name="phone" data-type="email" data-trigger="change" data-required="true" class="parsley-validated" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="" class="label-description">
                        login:
                       
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="text" id="email" name="login1" data-type="email" data-trigger="change" data-required="true" class="parsley-validated" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="" class="label-description">
                        mot de passe:
                       
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="password" id="email" name="passe1" data-type="email" data-trigger="change" data-required="true" class="parsley-validated" />
                </div>
            </div>
            <div class="divider"></div>
            <div class="form-row">
                <div class="form-input col-md-10 col-md-offset-2">
                    
                         <input type="submit" title="Validate!">
                    
                </div>
            </div>

        </form>

    </div>
    
</div>





<?php 

if ( isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['login1']) && isset($_POST['passe1'])) {

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$login=$_POST['login1'];
$passe=$_POST['passe1'];



mysql_connect('localhost',"root","");
mysql_select_db('gestion_projet');
mysql_query ("INSERT INTO login (nom,prenom,email,phone,login,passe) VALUES ('$nom','$prenom','$email','$phone','$login','$passe')");

}

?>


    </body>
</html>

