<?php
/* @var $this LugarTuristicoController */
/* @var $model LugarTuristico */
/* @var $form CActiveForm */
?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery-1.12.3.js', CClientScript::POS_HEAD); ?>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
    var map;
    var markersArray = [];
     $(document).ready(function () {
        document.getElementById("save_agencia").addEventListener("click", guardarRecordatorio, false);
        
        $("#row_descripcion").toggle();
        $("#ver_descripcion").click(function () {
            $("#row_descripcion").toggle();
            if (swdetalle) {
                $("#ver_descripcion").html('OCULTAR DESCRIPCION');
            } else {
                $("#ver_descripcion").html('VER DESCRIPCION');
            }
            swdetalle = !swdetalle;
        });
    });
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
            document.getElementById("LugarTuristico_ubicacion").value = event.latLng.lat() + ";" + event.latLng.lng();
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
    var direccion = null;
    var ubicacion = null;
    var lugarpartida = null;
    var tipocategoria = null;
    var horaevento = null;
    var swdetalle = true;
   
    function guardarRecordatorio() {

        nombre = document.getElementById("LugarTuristico_nombre").value;
        descripcion = document.getElementById("LugarTuristico_descripcion").value;
        valoracion = document.getElementById("LugarTuristico_valoracion").value;
        direccion = document.getElementById("LugarTuristico_direccion").value;
        tipocategoria = document.getElementById("LugarTuristico_id_tipo_categoria_fk").value;
        ubicacion = document.getElementById("LugarTuristico_ubicacion").value;
        lugarpartida = document.getElementById("lugar_partida").value;
        horaevento = document.getElementById("hora_del_evento").value;
        $.ajax({
            url: '<?php echo Yii::app()->baseUrl; ?>/lugarturistico/guardarevento',
            type: 'POST',
            data: {
                nombre: nombre,
                descripcion: descripcion,
                valoracion: valoracion,
                direccion: direccion,
                tipocategoria: tipocategoria,
                ubicacion: ubicacion,
                lugarpartida: lugarpartida,
                horaevento: horaevento,
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
            'id' => 'lugar-turistico-form',
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
                        <?php echo $form->labelEx($model, 'descripcion'); ?>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
                            <?php echo $form->textField($model, 'descripcion', array('size' => 60, 'maxlength' => 100)); ?>
                            <?php echo $form->error($model, 'descripcion'); ?>
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
                        <?php echo $form->textField($model, 'valoracion', array('size' => 20, 'maxlength' => 20)); ?>
                        <?php echo $form->error($model, 'valoracion'); ?>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group success">
                    <?php echo $form->labelEx($model, 'direccion'); ?>                                           
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
                        <?php echo $form->textField($model, 'direccion'); ?>
                        <?php echo $form->error($model, 'direccion'); ?>
                    </div>
                </div>
            </div>
        </div>    
        <div class="row">
            <!--            <div class="col-md-6">
                            <div class="form-group success">
            <?php //echo $form->labelEx($model, 'id_descripcion_partida'); ?>                                        
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
            <?php //echo $form->dropDownList($model, 'id_descripcion_partida', CHtml::listData(Descripcion::model()->findAll(), 'id', 'lugar_partida'), array('class' => 'form-control', 'disabled' => false)); ?>                        
            <?php //echo $form->error($model, 'id_descripcion_partida'); ?>    
                                </div>
                            </div>
                        </div>-->
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
                    <?php echo $form->labelEx($model, 'id_tipo_categoria_fk'); ?>                                                    
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
                        <?php echo $form->dropDownList($model, 'id_tipo_categoria_fk', CHtml::listData(TipoCategoria::model()->findAll(), 'id', 'nombre'), array('class' => 'form-control', 'disabled' => false)); ?>                        
                        <?php echo $form->error($model, 'id_tipo_categoria_fk'); ?>
                    </div>
                </div>
            </div>
        </div>    

        <div class="row">

            <div class="col-md-12">
                <div class="form-group success">
                    <?php //echo $form->labelEx($model, 'ubicacion'); ?>
                    <div class="input-group">
                        <!--<span class="input-group-addon"><i class="fa fa-text-width"></i></span>-->
                        <div class="table-responsive" id="googleMap"style="width:850px;height:380px;"></div>
                        <?php //echo $form->error($model, 'ubicacion'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" >
            <div class="col-md-12">
                <!--<div class="form-group success">-->
                <!--<div class="input-group">-->
                <button type="button" class="btn btn-primary btn-block" id="ver_descripcion">VER DESCRIPCION</button>
                <!--</div>-->
                <!--</div>-->                    
            </div>
            <div class=" row content VerPlan" id="row_descripcion">                                             
                <div class="col-md-6">
                    <div class="form-group success">  
                        <div><label>Lugar de Partida</label></div>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-clock-o"></i>                               
                            </div>
                            <input type="text" id="lugar_partida">
                        </div> 

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group success ">
                        <div><label>Hora de Partida</label></div>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-clock-o"></i>
                            </div>                        
                            <input type="text" id="hora_del_evento" class="form-control" value="hh:mm:ss"/>                       
                            <?php // echo $form->error($model, 'hora_del_evento'); ?>
                        </div>  

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
