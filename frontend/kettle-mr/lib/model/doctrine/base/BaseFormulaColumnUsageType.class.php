<?php

/**
 * BaseFormulaColumnUsageType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $formula_column_usage_type_id
 * @property string $formula_column_usage_type
 * @property Doctrine_Collection $TableColumn
 * @property Doctrine_Collection $BusinessFormulaLogic
 * @property Doctrine_Collection $FormulaColumnUsageTypeFormulaColumnFk
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFormulaColumnUsageType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('formula_column_usage_type');
        $this->hasColumn('formula_column_usage_type_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('formula_column_usage_type', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('TableColumn', array(
             'refClass' => 'FormulaColumn',
             'local' => 'formula_column_usage_type_id',
             'foreign' => 'table_column_formula_column_usage_type_id'));

        $this->hasMany('BusinessFormulaLogic', array(
             'refClass' => 'FormulaColumn',
             'local' => 'formula_column_usage_type_id',
             'foreign' => 'business_formula_logic_formula_column_usage_type_id'));

        $this->hasMany('FormulaColumn as FormulaColumnUsageTypeFormulaColumnFk', array(
             'local' => 'formula_column_usage_type_id',
             'foreign' => 'formula_column_usage_type_id'));
    }
}