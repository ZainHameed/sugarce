<?php
 // created: 2016-03-04 06:04:56
$layout_defs["Accounts"]["subpanel_setup"]['tcx_manufacturers_accounts'] = array (
  'order' => 100,
  'module' => 'tcx_Manufacturers',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TCX_MANUFACTURERS_ACCOUNTS_FROM_TCX_MANUFACTURERS_TITLE',
  'get_subpanel_data' => 'tcx_manufacturers_accounts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
