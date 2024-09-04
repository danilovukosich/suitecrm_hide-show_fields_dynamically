<?php
$module_name = 'asd_asd';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/modules/asd_asd/metadata/js/editview_js.js',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'nombre',
            'label' => 'LBL_NOMBRE',
          ),
          1 => 
          array (
            'name' => 'sino',
            'studio' => 'visible',
            'label' => 'LBL_SINO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'campo_test',
            'label' => 'LBL_CAMPO_TEST',
          ),
          1 => 
          array (
            'name' => 'kajshdfajs_c',
            'label' => 'LBL_KAJSHDFAJS',
          ),
        ),
      ),
    ),
  ),
  'js' => array(
    'custom/modules/asd_asd/metadata/js/editview_js.js', // Verifica que esta ruta sea correcta
),

);
;
?>
