<?php

/**
 * BaseTableColumn
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $column_id
 * @property integer $column_name
 * @property integer $column_type
 * @property integer $table_id
 * @property integer $revision
 * @property TableName $TableId
 * @property Doctrine_Collection $BusinessLogic
 * @property Doctrine_Collection $BusinessFormulaLogic
 * @property Doctrine_Collection $FormulaColumnUsageType
 * @property Doctrine_Collection $ColumnColumnStatisticFk
 * @property Doctrine_Collection $ColumnFormulaColumnFk
 * @property Doctrine_Collection $ColumnLogicalColumnFk
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTableColumn extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('table_column');
        $this->hasColumn('column_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('column_name', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('column_type', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('table_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('revision', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('TableName as TableId', array(
             'local' => 'table_id',
             'foreign' => 'table_id'));

        $this->hasMany('BusinessLogic', array(
             'refClass' => 'LogicalColumn',
             'local' => 'column_id',
             'foreign' => 'business_logic_column_id'));

        $this->hasMany('BusinessFormulaLogic', array(
             'refClass' => 'FormulaColumn',
             'local' => 'column_id',
             'foreign' => 'business_formula_logic_column_id'));

        $this->hasMany('FormulaColumnUsageType', array(
             'refClass' => 'FormulaColumn',
             'local' => 'column_id',
             'foreign' => 'formula_column_usage_type_column_id'));

        $this->hasMany('ColumnStats as ColumnColumnStatisticFk', array(
             'local' => 'column_id',
             'foreign' => 'column_id'));

        $this->hasMany('FormulaColumn as ColumnFormulaColumnFk', array(
             'local' => 'column_id',
             'foreign' => 'column_id'));

        $this->hasMany('LogicalColumn as ColumnLogicalColumnFk', array(
             'local' => 'column_id',
             'foreign' => 'column_id'));
    }
}