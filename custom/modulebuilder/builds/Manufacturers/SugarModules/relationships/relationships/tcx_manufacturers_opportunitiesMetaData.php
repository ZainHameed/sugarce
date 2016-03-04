<?php
// created: 2016-03-04 06:04:56
$dictionary["tcx_manufacturers_opportunities"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'tcx_manufacturers_opportunities' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'tcx_Manufacturers',
      'rhs_table' => 'tcx_manufacturers',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tcx_manufacturers_opportunities_c',
      'join_key_lhs' => 'tcx_manufacturers_opportunitiesopportunities_ida',
      'join_key_rhs' => 'tcx_manufacturers_opportunitiestcx_manufacturers_idb',
    ),
  ),
  'table' => 'tcx_manufacturers_opportunities_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'tcx_manufacturers_opportunitiesopportunities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tcx_manufacturers_opportunitiestcx_manufacturers_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tcx_manufacturers_opportunitiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tcx_manufacturers_opportunities_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tcx_manufacturers_opportunitiesopportunities_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'tcx_manufacturers_opportunities_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tcx_manufacturers_opportunitiestcx_manufacturers_idb',
      ),
    ),
  ),
);