<?php
// created: 2016-03-04 06:04:56
$dictionary["tcx_Manufacturers"]["fields"]["tcx_manufacturers_opportunities"] = array (
  'name' => 'tcx_manufacturers_opportunities',
  'type' => 'link',
  'relationship' => 'tcx_manufacturers_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_TCX_MANUFACTURERS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'tcx_manufacturers_opportunitiesopportunities_ida',
);
$dictionary["tcx_Manufacturers"]["fields"]["tcx_manufacturers_opportunities_name"] = array (
  'name' => 'tcx_manufacturers_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TCX_MANUFACTURERS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'tcx_manufacturers_opportunitiesopportunities_ida',
  'link' => 'tcx_manufacturers_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["tcx_Manufacturers"]["fields"]["tcx_manufacturers_opportunitiesopportunities_ida"] = array (
  'name' => 'tcx_manufacturers_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'tcx_manufacturers_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TCX_MANUFACTURERS_OPPORTUNITIES_FROM_TCX_MANUFACTURERS_TITLE',
);
