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
 *
 * The followings are the available model relations:
 * @property DekretacjaKsiegowanie[] $dekretacjaKsiegowanies
 * @property PlanKont[] $fkPlanKonts
 * @property Kontrahenci $fkKontrahenciSymbol
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
			array('dowod, transakcjaVAT, data, nr_dokumentu, netto, vat, brutto, fk_kontrahenci_symbol', 'required'),
			array('transakcjaVAT', 'numerical', 'integerOnly'=>true),
			array('dowod', 'length', 'max'=>50),
			array('nr_dokumentu', 'length', 'max'=>45),
			array('netto, vat, brutto', 'length', 'max'=>20),
			array('fk_kontrahenci_symbol', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('dowod, transakcjaVAT, data, nr_dokumentu, netto, vat, brutto, fk_kontrahenci_symbol', 'safe', 'on'=>'search'),
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
			'fkPlanKonts' => array(self::MANY_MANY, 'PlanKont', 'fk_polaczenie_kont(fk_sprzedaz_dowod, fk_plan_kont_numer)'),
			'fkKontrahenciSymbol' => array(self::BELONGS_TO, 'Kontrahenci', 'fk_kontrahenci_symbol'),
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

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}