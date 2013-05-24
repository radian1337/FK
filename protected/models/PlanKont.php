<?php

/**
 * This is the model class for table "fk_plan_kont".
 *
 * The followings are the available columns in table 'fk_plan_kont':
 * @property string $numer
 * @property string $nazwa
 * @property string $opis
 *
 * The followings are the available model relations:
 * @property ZakupSprzedaz[] $fkZakupSprzedazs
 */
class PlanKont extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PlanKont the static model class
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
		return 'fk_plan_kont';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numer, nazwa', 'required'),
			array('numer', 'length', 'max'=>24),
			array('nazwa, opis', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('numer, nazwa, opis', 'safe', 'on'=>'search'),
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
			'fkZakupSprzedazs' => array(self::MANY_MANY, 'ZakupSprzedaz', 'fk_polaczenie_kont(fk_plan_kont_numer, fk_sprzedaz_dowod)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'numer' => 'Numer',
			'nazwa' => 'Nazwa',
			'opis' => 'Opis',
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

		$criteria->compare('numer',$this->numer,true);
		$criteria->compare('nazwa',$this->nazwa,true);
		$criteria->compare('opis',$this->opis,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}