<?php
/* @var $this AgenciaViajeController */
/* @var $model AgenciaViaje */
/* @var $form CActiveForm */
?>
<<<<<<< HEAD
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery-1.12.3.js', CClientScript::POS_HEAD); ?>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
    var map;
    var markersArray = [];
    function initialize() {

        var mapProp = {
            center: new google.maps.LatLng(-17.773536, -63.175736),
            zoom: 5,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: true,
            mapTypeControlOptions:
                    {
                        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                        poistion: google.maps.ControlPosition.TOP_RIGHT,
                        mapTypeIds: [google.maps.MapTypeId.ROADMAP,
                            google.maps.MapTypeId.TERRAIN,
                            google.maps.MapTypeId.HYBRID,
                            google.maps.MapTypeId.SATELLITE]
                    },
            navigationControl: true,
            navigationControlOptions:
                    {
                        style: google.maps.NavigationControlStyle.ZOOM_PAN
                    },
            scaleControl: true,
            disableDoubleClickZoom: true,
            draggable: true,
            streetViewControl: true
        };
        map = new google.maps.Map(document.getElementById("googleMap")
                , mapProp);
        google.maps.event.addListener(map, "click", function (event) {
            // place a marker
            deleteOverlays();
            placeMarker(event.latLng);

            //// display the lat/lng in your form's lat/lng fields
            document.getElementById("AgenciaViaje_ubicacion").value = event.latLng.lat()+";"+event.latLng.lng();
//            document.getElementById("clienteofertante-longitud").value = event.latLng.lng();
            //document.getElementById("lat").value = event.latLng.lat();
            //document.getElementById("lon").value = event.latLng.lng();
        });
        //var marker = new google.maps.Marker({
        //    position: new google.maps.LatLng(-17.773536, -63.175736),
        //    map: map,
        //    draggable: true,
        //    animation: google.maps.Animation.DROP,
        //    title: 'Click me'
        //});
    }
    function placeMarker(location) {
        var marker = new google.maps.Marker({
            position: location,
            map: map
        });

        //map.setCenter(location);
        markersArray.push(marker);
    }
    function deleteOverlays() {
        if (markersArray) {
            for (i in markersArray) {
                markersArray[i].setMap(null);
            }
            markersArray.length = 0;
        }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    var nombre = null;
    var descripcion = null;
    var valoracion = null;
    var evento = null;
    var ubicacion = null;
    $(document).ready(function () {
        document.getElementById("save_agencia").addEventListener("click", guardarRecordatorio, false);
    });
    function guardarRecordatorio() {

        nombre = document.getElementById("AgenciaViaje_nombre").value;
        descripcion = document.getElementById("AgenciaViaje_direccion").value;
        valoracion = document.getElementById("AgenciaViaje_valoracion").value;
        evento = document.getElementById("AgenciaViaje_id_eventos_fk").value;
        ubicacion = document.getElementById("AgenciaViaje_ubicacion").value;
        $.ajax({
            url: '<?php echo Yii::app()->baseUrl; ?>/agenciaviaje/guardarevento',
            type: 'POST',
            data: {
                nombre: nombre,
                descripcion: descripcion,
                valoracion: valoracion,
                evento: evento,
                ubicacion: ubicacion,
            },
            success: function (data) {
            
                document.location.href = "/explora_scz/";
            }
        });
    }
</script>

<div class="col-xs-12 connectedSortable">
    <div class="box box-primary">
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'agencia-viaje-form',
            'action' => Yii::app()->createUrl($this->route),
            'method' => 'POST',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
                'validateOnChange' => true,
            ),
        ));
        ?>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group success">
                        <?php echo $form->labelEx($model, 'nombre'); ?>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                            <?php echo $form->textField($model, 'nombre', array('size' => 60, 'maxlength' => 60)); ?>
                            <?php echo $form->error($model, 'nombre'); ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group success">
                        <?php echo $form->labelEx($model, 'direccion'); ?>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
                            <?php echo $form->textField($model, 'direccion', array('size' => 60, 'maxlength' => 60)); ?>
                            <?php echo $form->error($model, 'direccion'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group success">
                    <?php echo $form->labelEx($model, 'valoracion'); ?>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                        <?php echo $form->textField($model, 'valoracion', array('size' => 60, 'maxlength' => 60)); ?>
                        <?php echo $form->error($model, 'valoracion'); ?>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group success">
                    <?php echo $form->labelEx($model, 'id_eventos_fk'); ?>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
                        <?php echo $form->dropDownList($model, 'id_eventos_fk', CHtml::listData(Eventos::model()->findAll(), 'id', 'nombre'), array('class' => 'form-control', 'disabled' => false)); ?>
                        <?php echo $form->error($model, 'id_eventos_fk'); ?>
                    </div>
                </div>
            </div>
        </div>    

        <div class="row">
            <div class="col-md-6">
                <div class="form-group success">
                    <?php echo $form->labelEx($model, 'ubicacion'); ?>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                        <?php echo $form->textField($model, 'ubicacion', array('size' => 60, 'maxlength' => 60)); ?>
                        <?php echo $form->error($model, 'ubicacion'); ?>
                    </div>
                </div>
            </div>     
            <div class="col-md-6">
                <div class="form-group success">
                    <?php //echo $form->labelEx($model, 'ubicacion'); ?>
                    <div class="input-group">
                        <!--<span class="input-group-addon"><i class="fa fa-text-width"></i></span>-->
                        <div class="table-responsive" id="googleMap"style="width:400px;height:380px;"></div>
                        <?php //echo $form->error($model, 'ubicacion'); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-4">                    
    </div>
    <div class="col-md-4">
        <button type="button" id="save_agencia" class=" fa fa-floppy-o btn btn-success btn-block ">   GUARDAR</button>
    </div>
    <div class="col-md-4">                    
    </div>
</div>
=======

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'agencia-viaje-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ubicacion'); ?>
		<?php echo $form->textField($model,'ubicacion',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'ubicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valoracion'); ?>
		<?php echo $form->textField($model,'valoracion',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'valoracion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_eventos_fk'); ?>
		<?php echo $form->textField($model,'id_eventos_fk'); ?>
		<?php echo $form->error($model,'id_eventos_fk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
>>>>>>> 1e9226f23cb3a091efe2009a2317d5359519a883
