<?php include("exemple.html") ; ?>

<!-- Menu -->

<div id="page-content">



<h3>Nouveau Projet</h3>
<p class="font-gray-dark">
    The form validation example below doesn't use any additional initialization javascript. It's all done using HTML attributes.
</p>

<div class="example-box">
    <div class="example-code">

        <form id="demo-form-2" action="supressource.php" class="col-md-10 center-margin" method="GET"  />
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        Nom du ressource:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="text" id="email" name="nom" data-type="email" data-trigger="change" data-required="true" class="parsley-validated" />
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

