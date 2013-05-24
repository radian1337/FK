<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
            <div id="logo"></div>
            <div id="module_name"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->
        <div id="mainmenu">
                <?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'LOGOWANIE', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'WYLOGUJ ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
                <?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Plan kont', 'url'=>array('/planKont')),
                                array('label'=>'Dekretacja i księgowanie', 'url'=>array('/dekretacjaKsiegowanie')),
                                array('label'=>'Ewidencja VAT sprzedaży', 'url'=>array('/sprzedaz')),
                                array('label'=>'Ewidencja VAT zakupu', 'url'=>array('/zakup')),
                                //array('label'=>'Rozrachunki wg dokumentów', 'url'=>array('/rozrachunkiWgDokumentow')),
                                array('label'=>'Kontrahenci', 'url'=>array('/kontrahenci')),
                                //array('label'=>'Sprawozdania', 'url'=>array('/sprawozdania')),
                                //array('label'=>'Zestawienia', 'url'=>array('/zestawienia'))
			),
		)); ?>
	</div><!-- mainmenu -->
	<div id="content">
            <?php if(isset($this->breadcrumbs)):?>
                    <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                            'links'=>$this->breadcrumbs,
                    )); ?><!-- breadcrumbs -->
            <?php endif?>

            <?php echo $content; ?>
        </div>
	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Arkadiusz Rodak i Damian Duda.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
