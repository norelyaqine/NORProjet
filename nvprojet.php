<?php include("exemple.html") ; ?>


<?php $query6 = mysql_query ("SELECT * from ressource where chef_projet='".$chef_projet."'"); ?>
<!-- Menu -->

<div id="page-content">



<h3>Nouveau Projet</h3>
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
                    <input type="text" id="email" name="nom1" data-type="email" data-trigger="change" data-required="true" class="parsley-validated" />
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
                 <?php
                            echo "<select name='chef1' id='selection'>";
                            while($rows2=mysql_fetch_assoc($query6))
                        

                              echo   "<option value=".$rows2['nom']." >".$rows2['nom']." </option>";
                              
                           echo" </select>";
                            ?>
                </div>
          </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        Date du debut:
                    </label>
                </div>
                <div class="form-input">
                    <input type="text" class="col-md-3" id="datepicker2" name="date1" />
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
                    <textarea id="message" name="note1" data-trigger="keyup" data-rangelength="[20,200]" class="parsley-validated"></textarea>
                </div>
            </div>
            <div class="divider"></div>
            <div class="form-row">
                <div class="form-input col-md-10 col-md-offset-2 ">
                    
                         <input type="submit" title="Validate!" >
                    
                </div>
            </div>

        </form>

    </div>
    
</div>





<?php 

if ( isset($_POST['nom1']) && isset($_POST['chef1']) && isset($_POST['date1']) && isset($_POST['note1'])) {

$nom1=$_POST['nom1'];
$chef1=$_POST['chef1'];
$date1=$_POST['date1'];
$note1=$_POST['note1'];


mysql_query ("INSERT INTO projet(nom,chef,date_debut,note,chef_projet) VALUES('$nom1','$chef1','$date1','$note1','$chef_projet')");

}

?>


    </body>
</html>

