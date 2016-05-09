<?php

/**
 * This is the model class for table "lugar_turistico".
 *
 * The followings are the available columns in table 'lugar_turistico':
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $direccion
 * @property string $ubicacion
 * @property string $valoracion
 * @property integer $id_descripcion_partida
 * @property integer $id_tipo_categoria_fk
 *
 * The followings are the available model relations:
 * @property Comentar[] $comentars
 * @property Descripcion $idDescripcionPartida
 * @property TipoCategoria $idTipoCategoriaFk
 */
class LugarTuristico extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lugar_turistico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tipo_categoria_fk', 'required'),
			array('id_descripcion_partida, id_tipo_categoria_fk', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>60),
			array('descripcion', 'length', 'max'=>100),
			array('valoracion', 'length', 'max'=>20),
			array('direccion, ubicacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, descripcion, direccion, ubicacion, valoracion, id_descripcion_partida, id_tipo_categoria_fk', 'safe', 'on'=>'search'),
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
			'comentars' => array(self::HAS_MANY, 'Comentar', 'id_lugar_turistico_fk'),
			'idDescripcionPartida' => array(self::BELONGS_TO, 'Descripcion', 'id_descripcion_partida'),
			'idTipoCategoriaFk' => array(self::BELONGS_TO, 'TipoCategoria', 'id_tipo_categoria_fk'),
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
			'descripcion' => 'Descripcion',
			'direccion' => 'Direccion',
			'ubicacion' => 'Ubicacion',
			'valoracion' => 'Valoracion',
			'id_descripcion_partida' => 'Descripcion Partida',
			'id_tipo_categoria_fk' => 'Tipo Categoria',
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
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('ubicacion',$this->ubicacion,true);
		$criteria->compare('valoracion',$this->valoracion,true);
		$criteria->compare('id_descripcion_partida',$this->id_descripcion_partida);
		$criteria->compare('id_tipo_categoria_fk',$this->id_tipo_categoria_fk);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LugarTuristico the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
