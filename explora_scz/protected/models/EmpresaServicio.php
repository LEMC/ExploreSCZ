<?php

/**
 * This is the model class for table "empresa_servicio".
 *
 * The followings are the available columns in table 'empresa_servicio':
 * @property integer $id
 * @property string $nombre
 * @property string $direccion
 * @property string $ubicacion
 * @property string $email
 * @property integer $id_rubro_fk
 *
 * The followings are the available model relations:
 * @property Promocion[] $promocions
 * @property Suscripcion[] $suscripcions
 * @property Contacto[] $contactos
 * @property Rubro $idRubroFk
 * @property Imagenes[] $imagenes
 */
class EmpresaServicio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empresa_servicio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_rubro_fk', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>50),
			array('direccion, ubicacion, email', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, direccion, ubicacion, email, id_rubro_fk', 'safe', 'on'=>'search'),
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
			'promocions' => array(self::HAS_MANY, 'Promocion', 'id_empresa_servicio_fk'),
			'suscripcions' => array(self::HAS_MANY, 'Suscripcion', 'id_suscriptor'),
			'contactos' => array(self::HAS_MANY, 'Contacto', 'id_contacto'),
			'idRubroFk' => array(self::BELONGS_TO, 'Rubro', 'id_rubro_fk'),
			'imagenes' => array(self::HAS_MANY, 'Imagenes', 'id_origen'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'direccion' => 'Direccion',
			'ubicacion' => 'Ubicacion',
			'email' => 'Email',
<<<<<<< HEAD
			'id_rubro_fk' => 'Rubro',
=======
			'id_rubro_fk' => 'Id Rubro Fk',
>>>>>>> 1e9226f23cb3a091efe2009a2317d5359519a883
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('ubicacion',$this->ubicacion,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('id_rubro_fk',$this->id_rubro_fk);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EmpresaServicio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
