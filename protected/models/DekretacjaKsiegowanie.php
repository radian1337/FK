<?php

/**
 * This is the model class for table "fk_dekretacja_ksiegowanie".
 *
 * The followings are the available columns in table 'fk_dekretacja_ksiegowanie':
 * @property integer $numer_ksiegowy
 * @property string $zadekretowal
 * @property integer $zaksiegowane
 * @property string $fk_zakup_sprzedaz_dowod
 *
 * The followings are the available model relations:
 * @property ZakupSprzedaz $fkZakupSprzedazDowod
 */
class DekretacjaKsiegowanie extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DekretacjaKsiegowanie the static model class
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
		return 'fk_dekretacja_ksiegowanie';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('zadekretowal, fk_zakup_sprzedaz_dowod', 'required'),
			array('zaksiegowane', 'numerical', 'integerOnly'=>true),
			array('zadekretowal', 'length', 'max'=>30),
			array('fk_zakup_sprzedaz_dowod', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('numer_ksiegowy, zadekretowal, zaksiegowane, fk_zakup_sprzedaz_dowod', 'safe', 'on'=>'search'),
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
			'fkZakupSprzedazDowod' => array(self::BELONGS_TO, 'ZakupSprzedaz', 'fk_zakup_sprzedaz_dowod'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'numer_ksiegowy' => 'Numer Ksiegowy',
			'zadekretowal' => 'Zadekretowal',
			'zaksiegowane' => 'Zaksiegowane',
			'fk_zakup_sprzedaz_dowod' => 'Fk Zakup Sprzedaz Dowod',
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

		$criteria->compare('numer_ksiegowy',$this->numer_ksiegowy);
		$criteria->compare('zadekretowal',$this->zadekretowal,true);
		$criteria->compare('zaksiegowane',$this->zaksiegowane);
		$criteria->compare('fk_zakup_sprzedaz_dowod',$this->fk_zakup_sprzedaz_dowod,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}