<?php

/**
 * This is the model class for table "contacto".
 *
 * The followings are the available columns in table 'contacto':
 * @property integer $id
 * @property string $nombre
 * @property integer $id_contacto
 * @property integer $id_tipo_contacto_fk
 *
 * The followings are the available model relations:
 * @property TipoContacto $idTipoContactoFk
 * @property EmpresaServicio $idContacto
 */
class Contacto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contacto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_contacto, id_tipo_contacto_fk', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, id_contacto, id_tipo_contacto_fk', 'safe', 'on'=>'search'),
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
			'idTipoContactoFk' => array(self::BELONGS_TO, 'TipoContacto', 'id_tipo_contacto_fk'),
			'idContacto' => array(self::BELONGS_TO, 'EmpresaServicio', 'id_contacto'),
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
			'id_contacto' => 'Id Contacto',
			'id_tipo_contacto_fk' => 'Id Tipo Contacto Fk',
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
		$criteria->compare('id_contacto',$this->id_contacto);
		$criteria->compare('id_tipo_contacto_fk',$this->id_tipo_contacto_fk);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contacto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
