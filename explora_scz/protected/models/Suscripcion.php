<?php

/**
 * This is the model class for table "suscripcion".
 *
 * The followings are the available columns in table 'suscripcion':
 * @property integer $id
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property integer $id_plan_fk
 * @property integer $id_suscriptor
 * @property integer $id_tipo_suscriptor_fk
 *
 * The followings are the available model relations:
 * @property Plan $idPlanFk
 * @property TipoSuscriptores $idTipoSuscriptorFk
 * @property EmpresaServicio $idSuscriptor
 */
class Suscripcion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'suscripcion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_plan_fk, id_suscriptor, id_tipo_suscriptor_fk', 'numerical', 'integerOnly'=>true),
			array('fecha_inicio, fecha_fin', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fecha_inicio, fecha_fin, id_plan_fk, id_suscriptor, id_tipo_suscriptor_fk', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idPlanFk' => array(self::BELONGS_TO, 'Plan', 'id_plan_fk'),
			'idTipoSuscriptorFk' => array(self::BELONGS_TO, 'TipoSuscriptores', 'id_tipo_suscriptor_fk'),
			'idSuscriptor' => array(self::BELONGS_TO, 'EmpresaServicio', 'id_suscriptor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fecha_inicio' => 'Fecha Inicio',
			'fecha_fin' => 'Fecha Fin',
			'id_plan_fk' => 'Id Plan Fk',
			'id_suscriptor' => 'Id Suscriptor',
			'id_tipo_suscriptor_fk' => 'Id Tipo Suscriptor Fk',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('fecha_fin',$this->fecha_fin,true);
		$criteria->compare('id_plan_fk',$this->id_plan_fk);
		$criteria->compare('id_suscriptor',$this->id_suscriptor);
		$criteria->compare('id_tipo_suscriptor_fk',$this->id_tipo_suscriptor_fk);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Suscripcion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
