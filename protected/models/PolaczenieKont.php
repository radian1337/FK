<?php

/**
 * This is the model class for table "fk_polaczenie_kont".
 *
 * The followings are the available columns in table 'fk_polaczenie_kont':
 * @property string $fk_sprzedaz_dowod
 * @property string $fk_plan_kont_numer
 */
class PolaczenieKont extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PolaczenieKont the static model class
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
		return 'fk_polaczenie_kont';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fk_sprzedaz_dowod, fk_plan_kont_numer', 'required'),
			array('fk_sprzedaz_dowod', 'length', 'max'=>50),
			array('fk_plan_kont_numer', 'length', 'max'=>24),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('fk_sprzedaz_dowod, fk_plan_kont_numer', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fk_sprzedaz_dowod' => 'Fk Sprzedaz Dowod',
			'fk_plan_kont_numer' => 'Fk Plan Kont Numer',
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

		$criteria->compare('fk_sprzedaz_dowod',$this->fk_sprzedaz_dowod,true);
		$criteria->compare('fk_plan_kont_numer',$this->fk_plan_kont_numer,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}