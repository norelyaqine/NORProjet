
<?php include("exemple.html") ; ?>

<?php
mysql_connect('localhost',"root","");
mysql_select_db('gestion_projet');
$query1 = mysql_query ("SELECT * from projet where chef_projet='".$chef_projet."'");

?>


<div id="page-content">



<h3>Nouveau Projet</h3>
<p class="font-gray-dark">
    The form validation example below doesn't use any additional initialization javascript. It's all done using HTML attributes.
</p>

<div class="example-box">
    <div class="example-code">

        <form id="demo-form-2" action="myGantt.php" class="col-md-10 center-margin" method="GET"  />
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        Nom du projet:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <?php
                            echo "<select name='projet' id='selection'>";
                            while($rows1=mysql_fetch_assoc($query1))
                        

                              echo   "<option value=".$rows1['id']." >".$rows1['nom']." </option>";
                              
                           echo" </select>";
                            ?>
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






</body>
</html>