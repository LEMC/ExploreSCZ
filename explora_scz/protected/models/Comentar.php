<?php

/**
 * This is the model class for table "comentar".
 *
 * The followings are the available columns in table 'comentar':
 * @property integer $id
 * @property string $email
 * @property string $nombre
 * @property string $comentario
 * @property integer $id_lugar_turistico_fk
 *
 * The followings are the available model relations:
 * @property LugarTuristico $idLugarTuristicoFk
 */
class Comentar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'comentar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_lugar_turistico_fk', 'numerical', 'integerOnly'=>true),
			array('email', 'length', 'max'=>50),
			array('nombre', 'length', 'max'=>60),
			array('comentario', 'length', 'max'=>120),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, email, nombre, comentario, id_lugar_turistico_fk', 'safe', 'on'=>'search'),
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
			'idLugarTuristicoFk' => array(self::BELONGS_TO, 'LugarTuristico', 'id_lugar_turistico_fk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'email' => 'Email',
			'nombre' => 'Nombre',
			'comentario' => 'Comentario',
			'id_lugar_turistico_fk' => 'Id Lugar Turistico Fk',
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
		$criteria->compare('email',$this->email,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('comentario',$this->comentario,true);
		$criteria->compare('id_lugar_turistico_fk',$this->id_lugar_turistico_fk);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Comentar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
