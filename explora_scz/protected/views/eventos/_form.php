<?php
/* @var $this EventosController */
/* @var $model Eventos */
/* @var $form CActiveForm */
?>
<<<<<<< HEAD
<?php
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->clientScript;

$cs->registerScriptFile($baseUrl . '/js/jquery-1.12.3.js', 0);
?>
<?php // Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery-1.12.3.js', CClientScript::POS_HEAD);      ?>

<script>
    var nombre = null;
    var descripcion = null;
    var fecha_incio = null;
    var fecha_fin = null;
    var precion = null;
    var lugar_partida = null;
    var hora_partida = null;
    var swdetalle = true;
    $(document).ready(function () {
//        alert("AS");
//        $("#hora_del_evento").inputmask("hh:mm", {"placeholder": "HH:MM"});
        document.getElementById("save_evento").addEventListener("click", guardarRecordatorio, false);
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

    function guardarRecordatorio() {

        nombre = document.getElementById("Eventos_nombre").value;
        descripcion = document.getElementById("Eventos_descripcion").value;
        fecha_incio = document.getElementById("Eventos_fecha_inicio").value;
        fecha_fin = document.getElementById("Eventos_fecha_fin").value;
        precion = document.getElementById("Eventos_precio").value;
        lugar_partida = document.getElementById("lugar_partida").value;
        hora_partida = document.getElementById("hora_del_evento").value;
        $.ajax({
            url: '<?php echo Yii::app()->baseUrl; ?>/eventos/guardarevento',
            type: 'POST',
            data: {
                nombre: nombre,
                descripcion: descripcion,
                fecha_incio: fecha_incio,
                fecha_fin: fecha_fin,
                precio: precion,
                lugar_partida: lugar_partida,
                hora_partida: hora_partida,
            },
            success: function (data) {
//                alert("2");
                document.location.href = "/explora_scz/";
            }
        });
    }
</script>    

<div class="col-xs-12 connectedSortable">
    <div class="box box-primary">
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'eventos-form',
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
                            <?php echo $form->textField($model, 'nombre'); ?>
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

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group success">
                        <?php echo $form->labelEx($model, 'fecha_inicio'); ?>                                
                        <div class="input-group">                            
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <?php
                            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                'id' => CHtml::getIdByName(get_class($model) . '[fecha_inicio]'),
                                'model' => $model,
                                'name' => 'fecha_inicio',
                                'attribute' => 'fecha_inicio',
                                'value' => date('dd/mm/yy h:i:s'),
                                'language' => 'es',
                                'options' => array(
                                    'autoSize' => false,
                                    'showSecond' => FALSE,
                                    'dateFormat' => 'dd-mm-yy',
                                    'changeYear' => true,
                                    'changeMonth' => true,
                                    'showAnim' => 'slide',
                                    'constraintInput' => true,
                                    'currentText' => 'Now',
                                    'timeFormat' => 'hh:mm:ss',
                                ),
                                'htmlOptions' => array(
                                    'placeholder' => 'dia/mes/año',
                                    'class' => 'form-control',
                                ),
                            ));
                            ?>
                            <?php echo $form->error($model, 'fecha_inicio'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group success">
                        <?php echo $form->labelEx($model, 'fecha_fin'); ?>    
                        <div class="input-group">                            
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <?php
                            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                'id' => CHtml::getIdByName(get_class($model) . '[fecha_fin]'),
                                'model' => $model,
                                'name' => 'fecha_fin',
                                'attribute' => 'fecha_fin',
                                'value' => date('dd/mm/yy h:i:s'),
                                'language' => 'es',
                                'options' => array(
                                    'autoSize' => false,
                                    'showSecond' => FALSE,
                                    'dateFormat' => 'dd-mm-yy',
                                    'changeYear' => true,
                                    'changeMonth' => true,
                                    'showAnim' => 'slide',
                                    'constraintInput' => true,
                                    'currentText' => 'Now',
                                    'timeFormat' => 'hh:mm:ss',
                                ),
                                'htmlOptions' => array(
                                    'placeholder' => 'dia/mes/año',
                                    'class' => 'form-control',
                                ),
                            ));
                            ?>
                            <?php echo $form->error($model, 'fecha_fin'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group success">
                        <?php echo $form->labelEx($model, 'precio'); ?>
                        <div class="input-group">                            
                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                            <?php echo $form->textField($model, 'precio'); ?>
                            <?php echo $form->error($model, 'precio'); ?>
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
            <div class="ROW">
                <div>

                </div>
            </div>

            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">                    
    </div>
    <div class="col-md-4">
        <button type="button" id="save_evento" class=" fa fa-floppy-o btn btn-success btn-block ">   GUARDAR</button>
    </div>
    <div class="col-md-4">                    
    </div>
</div>
=======

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'eventos-form',
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
		<?php echo $form->textField($model,'nombre'); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio'); ?>
		<?php echo $form->textField($model,'precio'); ?>
		<?php echo $form->error($model,'precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_inicio'); ?>
		<?php echo $form->textField($model,'fecha_inicio'); ?>
		<?php echo $form->error($model,'fecha_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_fin'); ?>
		<?php echo $form->textField($model,'fecha_fin'); ?>
		<?php echo $form->error($model,'fecha_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_descripcion_fk'); ?>
		<?php echo $form->textField($model,'id_descripcion_fk'); ?>
		<?php echo $form->error($model,'id_descripcion_fk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
>>>>>>> 1e9226f23cb3a091efe2009a2317d5359519a883
