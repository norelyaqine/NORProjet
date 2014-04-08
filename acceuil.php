<?php include("exemple.html") ; ?>

<?php
mysql_connect('localhost',"root","");
mysql_select_db('gestion_projet');
$requette = mysql_query ("SELECT * from projet where chef_projet='".$chef_projet."' ORDER BY id DESC LIMIT 2");
$requette1 = mysql_query ("SELECT id , chef , count(*) from projet where chef_projet='".$chef_projet."' group by chef;");


?>

<!-- Menu -->

<div class="col-md-6">

                
                    <div class="infobox error-bg mrg0A">
                    <p>Affichage des  dernieres projet effectuer par <b><?php echo $donnee['nom'] ; ?></b> </p>
                    </div>
                     <table class="table text-center">
                           <tbody>

                          <?php while($donnee1=mysql_fetch_array($requette)){    ?>
                               <tr>
                           <td><?php echo $donnee1['id'] ;?></td>
                         <td class="font-bold text-left"><?php echo $donnee1['nom'] ;?></td>
                         <td class="text-left"><a href="javascript:;" title=""><?php echo $donnee1['chef'] ;?></a></td>
                         <td><div class="label bg-orange"><?php echo $donnee1['date_debut'] ;?></div></td>
                         <td class="text-right">
                            <div class="dropdown">
                                <a href="javascript:;" title="" class="btn medium bg-gray" data-toggle="dropdown">
                                    <span class="button-content">
                                        <i class="glyph-icon font-size-11 icon-cog"></i>
                                        <i class="glyph-icon font-size-11 icon-chevron-down"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu float-right">

                                    <li>
                                        <a href="javascript:;" title="">
                                            <i class="glyph-icon icon-edit mrg5R"></i>
                                            Modifier
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" title="">
                                            <i class="glyph-icon icon-calendar mrg5R"></i>
                                            Affichier
                                        </a>
                                    </li>
                                
                                    <li class="divider"></li>
                                    <li>
                                        <a href="javascript:;" class="font-red" title="">
                                            <i class="glyph-icon icon-remove mrg5R"></i>
                                            Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                               </tr>
                           <?php } ?>
                           </tbody>
                       </table>

  <div class="content-box box-toggle button-toggle">
                 <h3 class="content-box-header primary-bg">
                <span class="float-left">Statistique ( Nombre de projet efféctuer par chaque chef de projet ).</span>
                <a href="#" class="float-right icon-separator btn toggle-button" title="Toggle Box">
                    <i class="glyph-icon icon-toggle icon-chevron-up"></i>
                </a>
                <a href="#" class="float-right icon-separator btn refresh-button" data-style="dark" data-theme="bg-white" data-opacity="60">
                    <i class="glyph-icon icon-refresh"></i>
                </a>
                <span class="badge label btn bg-blue-alt font-size-11 mrg10R float-right">Menu</span>
            </h3>
            <div class="content-box-wrapper">
                <div class="content-box">

            <table class="table text-center">
                <tbody>

                <?php while($donnee2=mysql_fetch_array($requette1)){    ?>
                    <tr>
                        
                        <td class="font-bold text-left"><?php echo $donnee2[0] ;?></td>
                        <td class="text-left"><a href="javascript:;" title=""><?php echo $donnee2[1] ;?></a></td>
                        <td><div class="label bg-orange"><?php echo $donnee2[2] ;?></div></td>
                        <td class="text-right">
                            <div class="dropdown">
                               
                                
                            </div>
                        </td>
                    </tr>
            <?php } ?>
                </tbody>
            </table>
</div>
            </div>
        </div>
 





</div>




<div class="col-md-6">

        
        <div class="row">
            <div class="col-lg-6">

                <div class="dashboard-panel content-box remove-border bg-blue-alt">
                    <div class="content-box-wrapper">
                        <div class="header"> Projet <span> date de mise a jour</span>
                        
                         </div>
                        <img src="projet.png" class="imgreseau" align="center">
                    </div>
                    <div class="button-pane">
                        <div class="heading medium"> Traitement de Projet</div>
                        <a href="myGantt0.php" class="medium btn bg-yellow float-right tooltip-button" data-placement="top" title="Ajouter un nouveau Projet">
                            <i class="glyph-icon icon-plus"></i>
                        </a>
                    </div>
                </div>

                <div class="dashboard-panel content-box remove-border bg-orange">
                    <div class="content-box-wrapper">
                         <div class="header"> Réseau <span> date de mise a jour</span> 

                         </div>
                       <img src="reseaux.png" class="imgreseau" align="center">
                    </div>
                    <div class="button-pane">
                        <div class="heading medium">
                             Traitement du Reseau
                        </div>
                        <a href="#" class="medium btn bg-yellow float-right tooltip-button" data-placement="top" title="Ajouter un nouveau Réseau">
                            <i class="glyph-icon icon-plus"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">

                <div class="dashboard-panel content-box remove-border bg-green">
                    <div class="content-box-wrapper">
                         <div class="header"> Ressource  <span> date de mise a jour</span> </div>
                        <img src="businessman.png" class="imgreseau" align="center">
                    </div>
                    <div class="button-pane">
                        <div class="heading medium">
                             Nouveau Ressource
                        </div>
                        <a href="ressource.php" class="medium btn bg-yellow float-right tooltip-button" data-placement="top" title="Ajouter un nouveau ressource">
                            <i class="glyph-icon icon-plus"></i>
                        </a>
                    </div>
                </div>

                <div class="dashboard-panel content-box remove-border bg-yellow">
                    <div class="content-box-wrapper">
                         <div class="header"> Rapports <span> date de mise a jour</span> </div>
                       <img src="rapport.png" class="imgreseau" align="center">
                    </div>
                    <div class="button-pane">
                        <div class="heading medium">
                           Traitement des Rpports
                        </div>
                        <a href="#" class="medium btn bg-yellow float-right tooltip-button" data-placement="top" title="Traitement des Rapports">
                            <i class="glyph-icon icon-plus"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>



        
       <!-- <div class="content-box nav-list-horizontal">
            <ul class="row">
                <li>
                    <a href="javascript:;" title="">
                        <i class="glyph-icon font-purple icon-dashboard"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="javascript:;" title="">
                        <i class="glyph-icon font-blue-alt icon-map-marker"></i>
                        Location
                    </a>
                </li>
                <li>
                    <a href="javascript:;" title="">
                        <i class="glyph-icon font-green icon-bullhorn"></i>
                        Announcements
                    </a>
                </li>
                <li>
                    <a href="javascript:;" title="">
                        <i class="glyph-icon font-red icon-camera"></i>
                        Photo Gallery
                    </a>
                </li>
            </ul>
        </div> -->


                	</div><!-- #page-content -->
            </div><!-- #page-main -->
        </div><!-- #page-wrapper -->

<!-- *********************** -->


    </body>
</html>

