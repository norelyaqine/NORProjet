<?php include("exemple.html") ; ?>

<!-- Menu -->

<?php


if ( isset($_GET['nom'])) {
   $name = $_GET['nom'];

mysql_connect('localhost',"root","");
mysql_select_db('gestion_projet');
$requette = mysql_query ("SELECT * from projet where nom='".$name."' and chef_projet='".$chef_projet."' ;");
$donnee=mysql_fetch_array($requette);


}


?>


<div id="page-content">



<h3>Modification du Projet</h3>
<p class="font-gray-dark">
    The form validation example below doesn't use any additional initialization javascript. It's all done using HTML attributes.
</p>

<div class="example-box">
    <div class="example-code">

        <form id="demo-form-2" action="" class="col-md-10 center-margin" method="POST"  />
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        Nom du projet:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="text" value="<?php echo $donnee['nom'] ; ?>" id="email" name="nom" data-type="email" data-trigger="change" data-required="true" class="parsley-validated" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        Chef du projet:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="text" id="email" name="chef" value="<?php echo $donnee['chef'] ; ?>" data-type="email" data-trigger="change" data-required="true" class="parsley-validated" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        Date du debut:
                    </label>
                </div>
                <div class="form-input">
                    <input type="text" value="<?php echo $donnee['date_debut'] ; ?>" class="col-md-3" id="datepicker2" name="date" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="" class="label-description">
                        Note:
                        <span>200 chars max</span>
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="text" id="email" name="note" value="<?php echo $donnee['note'] ; ?>" data-type="email" data-trigger="change" data-required="true" class="parsley-validated" />
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

if ( isset($_POST['nom']) && isset($_POST['chef']) && isset($_POST['date']) && isset($_POST['note'])) {

$nom=$_POST['nom'];
$chef=$_POST['chef'];
$date=$_POST['date'];
$note=$_POST['note'];
echo $nom;
mysql_connect('localhost',"root","");
mysql_select_db('gestion_projet');
mysql_query ("UPDATE projet set nom='".$nom."',chef='".$chef."',date_debut='".$date."',note='".$note."' where nom = '".$name."'; ");
//
}

?>

    </body>
</html>

