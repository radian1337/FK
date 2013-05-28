<?php

/**
 * This is the model class for table "fk_zakup_sprzedaz".
 *
 * The followings are the available columns in table 'fk_zakup_sprzedaz':
 * @property string $dowod
 * @property integer $transakcjaVAT
 * @property string $data
 * @property string $nr_dokumentu
 * @property string $netto
 * @property string $vat
 * @property string $brutto
 * @property string $fk_kontrahenci_symbol
 * @property string $fk_plan_kont_numer
 *
 * The followings are the available model relations:
 * @property DekretacjaKsiegowanie[] $dekretacjaKsiegowanies
 * @property Kontrahenci $fkKontrahenciSymbol
 * @property PlanKont $fkPlanKontNumer
 */
class ZakupSprzedaz extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ZakupSprzedaz the static model class
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
		return 'fk_zakup_sprzedaz';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dowod, transakcjaVAT, nr_dokumentu, netto, vat, brutto, fk_kontrahenci_symbol, fk_plan_kont_numer', 'required'),
			array('transakcjaVAT', 'numerical', 'integerOnly'=>true),
			array('dowod', 'length', 'max'=>50),
			array('nr_dokumentu', 'length', 'max'=>45),
			array('netto, vat, brutto', 'length', 'max'=>20),
			array('fk_kontrahenci_symbol', 'length', 'max'=>10),
			array('fk_plan_kont_numer', 'length', 'max'=>24),
			array('data', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('dowod, transakcjaVAT, data, nr_dokumentu, netto, vat, brutto, fk_kontrahenci_symbol, fk_plan_kont_numer', 'safe', 'on'=>'search'),
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
			'dekretacjaKsiegowanies' => array(self::HAS_MANY, 'DekretacjaKsiegowanie', 'fk_zakup_sprzedaz_dowod'),
			'fkKontrahenciSymbol' => array(self::BELONGS_TO, 'Kontrahenci', 'fk_kontrahenci_symbol'),
			'fkPlanKontNumer' => array(self::BELONGS_TO, 'PlanKont', 'fk_plan_kont_numer'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'dowod' => 'Dowod',
			'transakcjaVAT' => 'Transakcja Vat',
			'data' => 'Data',
			'nr_dokumentu' => 'Nr Dokumentu',
			'netto' => 'Netto',
			'vat' => 'Vat',
			'brutto' => 'Brutto',
			'fk_kontrahenci_symbol' => 'Fk Kontrahenci Symbol',
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

		$criteria->compare('dowod',$this->dowod,true);
		$criteria->compare('transakcjaVAT',$this->transakcjaVAT);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('nr_dokumentu',$this->nr_dokumentu,true);
		$criteria->compare('netto',$this->netto,true);
		$criteria->compare('vat',$this->vat,true);
		$criteria->compare('brutto',$this->brutto,true);
		$criteria->compare('fk_kontrahenci_symbol',$this->fk_kontrahenci_symbol,true);
		$criteria->compare('fk_plan_kont_numer',$this->fk_plan_kont_numer,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}