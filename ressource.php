<?php include("exemple.html") ; ?>

<!-- Menu -->




<div id="page-content">



<h3>Nouveau Ressource</h3>
<p class="font-gray-dark">
    Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text 
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
                    <input type="text" id="nom" name="nom"  />
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
                    <input type="text" id="type" name="type"  />
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        Email:
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="text" id="email" name="email"  />
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        groupe:
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="text" id="group" name="group"  />
                </div>
            </div>
             <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        Cout d'utilisation:
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="text" id="cout" name="cout"  />
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="" class="label-description">
                        Note:
                        <span>20 chars min, 200 max</span>
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <textarea id="message" name="note" ></textarea>
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

if ( isset($_POST['nom']) && isset($_POST['type'])) {

$nom=$_POST['nom'];
$type=$_POST['type'];
$email=$_POST['email'];
$group=$_POST['group'];
$cout=$_POST['cout'];
$note=$_POST['note'];

mysql_connect('localhost',"root","");
mysql_select_db('gestion_projet');
mysql_query ("INSERT INTO ressource VALUES('$nom','$type','$email','$group','$cout','$note','$chef_projet')");
}

?>


                	</div><!-- #page-content -->
            </div><!-- #page-main -->
        </div><!-- #page-wrapper -->

    </body>
</html>

