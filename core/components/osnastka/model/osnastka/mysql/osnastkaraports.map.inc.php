<?php
$xpdo_meta_map['OsnastkaRaports']= array (
  'package' => 'osnastka',
  'version' => '1.1',
  'table' => 'osnastka_raports',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'z' => 0,
    'mm' => 0,
    'is_uses' => 0,
  ),
  'fieldMeta' => 
  array (
    'z' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'pk',
    ),
    'mm' => 
    array (
      'dbtype' => 'float',
      'phptype' => 'float',
      'null' => false,
      'default' => 0,
    ),
    'is_uses' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'boolean',
      'null' => false,
      'default' => 0,
    ),
  ),
  'indexes' => 
  array (
    'z' => 
    array (
      'alias' => 'Z',
      'primary' => true,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'z' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'mm' => 
    array (
      'alias' => 'MM',
      'primary' => false,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'mm' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
);
