<?
$arJSIBlockConfig = array(
	'px_filestyle' => array(
		'js' => '/js/pxfileStyle/jquery.filestyle.js',
		'css' => '/js/pxfileStyle/jquery.filestyle.css',
		'rel' => array('jquery'),
		'skip_core' => true
    ),	
	'px_jquery_form' => array(
		'js' => '/js/jquery_form/jquery.form.min.js',
		'rel' => array('jquery'),
		'skip_core' => true
    ),
	'px_jscrollpane' => array(
		'js' => '/js/jScrollPane/jquery.jscrollpane.min.js',
        'css' => '/js/jScrollPane/jquery.jscrollpane.css',
		'rel' => array('jquery'),
		'skip_core' => true
    ),
	'px_coreuiselect' => array(
		'js' => '/js/coreUISelect/jquery.core-ui-select.js',
        'css' => '/js/coreUISelect/core-ui-select.css',
		'rel' => array('jquery', 'pxpl_jscrollpane'),
		'skip_core' => true
    ),
	'px_mousewheel' => array(
        'js' => '/js/mousewheel/jquery.mousewheel-3.0.6.pack.js',
		'rel' => array('jquery'),
		'skip_core' => true
    ),
	'px_pxfancy'=>array(
		'js'=>'/js/pxfancy/jquery.pxfancy.js',
		'css'=>'/js/pxfancy/jquery.pxfancy.css',
		'rel' => array('jquery'),
		'skip_core' => true
	),
	'px_maskedinput'=>array(
		'js'=>'/js/maskedinput/jquery.maskedinput.min.js',
		'rel' => array('jquery'),
		'skip_core' => true
	)
);
foreach ($arJSIBlockConfig as $ext => $arExt) {
	CJSCore::RegisterExt($ext, $arExt);
}
?>