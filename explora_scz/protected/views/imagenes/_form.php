<?php
/* @var $this ImagenesController */
/* @var $model Imagenes */
/* @var $form CActiveForm */
?>
<?php
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->clientScript;

$cs->registerScriptFile($baseUrl . '/js/jquery-1.12.3.js', 0);
?>
<?php // Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery-1.12.3.js', CClientScript::POS_HEAD);               ?>

<script>
    var tipo = null;
    var descripcion = null;
    $(document).ready(function () {
//        alert("AS");
//        $("#hora_del_evento").inputmask("hh:mm", {"placeholder": "HH:MM"});
        document.getElementById("save_agencia").addEventListener("click", guardarRecordatorio, false);
        document.getElementById("Imagenes_id_tipo_imagen_fk").addEventListener("blur", getOrigen, false);
        
    });
    function getOrigen(){
        tipo=document.getElementById("Imagenes_id_tipo_imagen_fk").value;
        $.ajax({
            url: '<?php echo Yii::app()->baseUrl; ?>/imagenes/getorigen',
            type: 'POST',
            data: {
                tipo: tipo,
            },
            success: function (data) {                
                   var resp = $.parseJSON(data);
                $('#Imagenes_id_origen >option').remove();
                $('#Imagenes_id_origen').append(resp.datos);
                $('#Imagenes_id_origen').show();
            }
        });
    }
    function guardarRecordatorio() {

        $.ajax({
            url: '<?php echo Yii::app()->baseUrl; ?>/imagenes/guardarevento',
            type: 'POST',
            data: {
         
            },
            success: function (data) {
//                alert("2");
                document.location.href = "http://localhost:90/BootstrapFileupload/";
            }
        });
    }
</script>  

<div class="col-xs-12 connectedSortable">
    <div class="box box-primary">
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'imagenes-form',
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
                        <?php echo $form->labelEx($model, 'id_tipo_imagen_fk'); ?>                                                                      
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>                            
                            <?php echo $form->dropDownList($model, 'id_tipo_imagen_fk', CHtml::listData(TipoImagen::model()->findAll(), 'id', 'nombre'), array('class' => 'form-control', 'disabled' => false)); ?>
                            <?php echo $form->error($model, 'id_tipo_imagen_fk'); ?>  
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group success">
                        <?php echo $form->labelEx($model, 'id_origen'); ?>                        
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                <?php echo $form->dropDownList($model, 'id_origen', array('0' => 'Seleccione una Opción'), array('class' => 'form-control')); ?>                                                                       
                                <?php echo $form->error($model, 'id_origen'); ?>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>
<div class="row">
    <div class="col-md-4">                    
    </div>
    <div class="col-md-4">
        <button type="button" id="save_agencia" class=" fa fa-floppy-o btn btn-success btn-block ">   SUBIR IMAGEN</button>
    </div>
    <div class="col-md-4">                    
    </div>
</div>
