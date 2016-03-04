<?php
// created: 2016-03-04 06:04:56
$dictionary["tcx_Manufacturers"]["fields"]["tcx_manufacturers_accounts"] = array (
  'name' => 'tcx_manufacturers_accounts',
  'type' => 'link',
  'relationship' => 'tcx_manufacturers_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_TCX_MANUFACTURERS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'tcx_manufacturers_accountsaccounts_ida',
);
$dictionary["tcx_Manufacturers"]["fields"]["tcx_manufacturers_accounts_name"] = array (
  'name' => 'tcx_manufacturers_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TCX_MANUFACTURERS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'tcx_manufacturers_accountsaccounts_ida',
  'link' => 'tcx_manufacturers_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["tcx_Manufacturers"]["fields"]["tcx_manufacturers_accountsaccounts_ida"] = array (
  'name' => 'tcx_manufacturers_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'tcx_manufacturers_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TCX_MANUFACTURERS_ACCOUNTS_FROM_TCX_MANUFACTURERS_TITLE',
);
