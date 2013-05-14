<?php

/**
 * This is the model class for table "fk_kontrahenci".
 *
 * The followings are the available columns in table 'fk_kontrahenci':
 * @property integer $symbol
 * @property string $nazwa
 * @property string $nip
 * @property string $adres
 * @property string $miejscowosc
 *
 * The followings are the available model relations:
 * @property Sprzedaz[] $sprzedazs
 * @property Zakup[] $zakups
 */
class Kontrahenci extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Kontrahenci the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fk_kontrahenci';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('symbol, nazwa, nip, adres, miejscowosc', 'required'),
			array('symbol', 'length', 'max'=>10),
			array('nazwa', 'length', 'max'=>100),
			array('nip', 'length', 'max'=>13),
			array('adres, miejscowosc', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('symbol, nazwa, nip, adres, miejscowosc', 'safe', 'on'=>'search'),
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
			'sprzedazs' => array(self::HAS_MANY, 'Sprzedaz', 'fk_kontrahenci_symbol'),
			'zakups' => array(self::HAS_MANY, 'Zakup', 'fk_kontrahenci_symbol'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'symbol' => 'Symbol',
			'nazwa' => 'Nazwa',
			'nip' => 'Nip',
			'adres' => 'Adres',
			'miejscowosc' => 'Miejscowosc',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('symbol',$this->symbol);
		$criteria->compare('nazwa',$this->nazwa,true);
		$criteria->compare('nip',$this->nip,true);
		$criteria->compare('adres',$this->adres,true);
		$criteria->compare('miejscowosc',$this->miejscowosc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}