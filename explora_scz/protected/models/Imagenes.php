<?php

/**
 * This is the model class for table "imagenes".
 *
 * The followings are the available columns in table 'imagenes':
 * @property integer $id
 * @property string $url
 * @property integer $id_origen
 * @property integer $id_tipo_imagen_fk
 *
 * The followings are the available model relations:
 * @property TipoImagen $idTipoImagenFk
 * @property EmpresaServicio $idOrigen
 */
<<<<<<< HEAD
class Imagenes extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'imagenes';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id_origen, id_tipo_imagen_fk', 'numerical', 'integerOnly' => true),
            array('url', 'length', 'max' => 60),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, url, id_origen, id_tipo_imagen_fk', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'idTipoImagenFk' => array(self::BELONGS_TO, 'TipoImagen', 'id_tipo_imagen_fk'),
            'idOrigen' => array(self::BELONGS_TO, 'EmpresaServicio', 'id_origen'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'url' => 'ruta',
            'id_origen' => 'Empresa',
            'id_tipo_imagen_fk' => 'Tipo',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('url', $this->url, true);
        $criteria->compare('id_origen', $this->id_origen);
        $criteria->compare('id_tipo_imagen_fk', $this->id_tipo_imagen_fk);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Imagenes the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getEmpresa() {
        $sql = "select id,nombre from empresa_servicio";
        $sqlReturn = Yii::app()->db->createCommand($sql)->queryAll();
        return $sqlReturn;
    }

    public function getLugarTuristico() {
        $sql = "select id,nombre from lugar_turistico";
        $sqlReturn = Yii::app()->db->createCommand($sql)->queryAll();
        return $sqlReturn;
    }

    public function getAgenciaViaje() {
        $sql = "select id,nombre from agencia_viaje" ;
        $sqlReturn = Yii::app()->db->createCommand($sql)->queryAll();
        return $sqlReturn;
    }

=======
class Imagenes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'imagenes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_origen, id_tipo_imagen_fk', 'numerical', 'integerOnly'=>true),
			array('url', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, url, id_origen, id_tipo_imagen_fk', 'safe', 'on'=>'search'),
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
			'idTipoImagenFk' => array(self::BELONGS_TO, 'TipoImagen', 'id_tipo_imagen_fk'),
			'idOrigen' => array(self::BELONGS_TO, 'EmpresaServicio', 'id_origen'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'url' => 'Url',
			'id_origen' => 'Id Origen',
			'id_tipo_imagen_fk' => 'Id Tipo Imagen Fk',
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
		$criteria->compare('url',$this->url,true);
		$criteria->compare('id_origen',$this->id_origen);
		$criteria->compare('id_tipo_imagen_fk',$this->id_tipo_imagen_fk);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Imagenes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
>>>>>>> 1e9226f23cb3a091efe2009a2317d5359519a883
}
