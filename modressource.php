<?php include("exemple.html") ; ?>

<!-- Menu -->

<?php


if ( isset($_GET['nom'])) {
   $name = $_GET['nom'];

mysql_connect('localhost',"root","");
mysql_select_db('gestion_projet');
$requette = mysql_query ("SELECT * from ressource where nom='".$name."' and chef_projet='".$chef_projet."' ;");
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

        <form id="demo-form-2" action="" class="col-md-10 center-margin" method="POST" />
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        Nom:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="text" id="nom" name="nom" value="<?php echo $donnee['nom'] ; ?>"  />
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        Type de ressource:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="text" id="type" name="type" value="<?php echo $donnee['type'] ; ?>" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        Email:
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="text" id="email" name="email"  value="<?php echo $donnee['email'] ; ?>" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        groupe:
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="text" id="group" name="group" value="<?php echo $donnee['group'] ; ?>" />
                </div>
            </div>
             <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        Cout d'utilisation:
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="text" id="cout" name="cout" value="<?php echo $donnee['cout'] ; ?>" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="" class="label-description">
                        Note:
                        
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="text" id="cout" name="note" value="<?php echo $donnee['note'] ; ?>" />
                </div>
            </div>
            <div class="divider"></div>
            <div class="form-row">
               
                <div class="form-input col-md-10 col-md-offset-2">
                    
                      <input type="submit" title="Validate!" >
                    
                </div>
            </div>

        </form>

    </div>
    
</div>





<?php 

if (isset($_POST['nom'])){

$nom=$_POST['nom'];
$type=$_POST['type'];
$email=$_POST['email'];
$group=$_POST['group'];
$cout=$_POST['cout'];
$note=$_POST['note'];

mysql_connect('localhost',"root","");
mysql_select_db('gestion_projet');
mysql_query ("UPDATE ressource set nom='".$nom."',type='".$type."',email='".$email."',cout='".$cout."',note='".$note."' where nom = '".$name."'; ");
//,group='".$group."'
}

?>

    </body>
</html>

