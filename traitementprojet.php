<?php include("exemple.html") ; ?>

<!-- Menu -->

<div id="page-content">



<h3>Gestion de Projet</h3>
<p class="font-gray-dark">
    The form validation example below doesn't use any additional initialization javascript. It's all done using HTML attributes.
</p>

<div class="example-box">
    <div class="example-code">

        <form id="demo-form-2" action="" class="col-md-10 center-margin" method="" />
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        Nom:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="text" id="email" name="email" data-type="email" data-trigger="change" data-required="true" class="parsley-validated" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        Durée:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="text" id="email" name="email" data-type="email" data-trigger="change" data-required="true" class="parsley-validated" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        Début:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="text" id="website" name="website" data-trigger="change" data-type="url" class="parsley-validated" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        Fin:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="text" id="website" name="website" data-trigger="change" data-type="url" class="parsley-validated" />
                </div>
            </div>
             <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        Prédécesseur:
                    </label>
                </div>
                <div class="form-input col-md-10">
                    <input type="text" id="website" name="website" data-trigger="change" data-type="url" class="parsley-validated" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="" class="label-description">
                        Nom de ressource:
                        <span class="required">*</span>
                    </label>
                </div>
                <div class="form-input col-md-10">
                     <input type="text" id="website" name="resseource" data-trigger="change" data-type="url" class="parsley-validated" />
                </div>
            </div>
            <div class="divider"></div>
            <div class="form-row">
                <input type="hidden" name="superhidden" id="superhidden" />
                <div class="form-input col-md-10 col-md-offset-2">
                    <a href="javascript:;" class="btn medium primary-bg radius-all-4" id="demo-form-2-valid" onclick="javascript:$(&apos;#demo-form-2&apos;).parsley( &apos;validate&apos; );" title="Validate!">
                        <span class="button-content">
                            Valider
                        </span>
                    </a>
                </div>
            </div>

        </form>

    </div>
    
</div>