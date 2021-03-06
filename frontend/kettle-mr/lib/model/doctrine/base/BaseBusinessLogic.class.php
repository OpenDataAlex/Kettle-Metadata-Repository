<?php

/**
 * BaseBusinessLogic
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $business_logic_id
 * @property string $logical_name
 * @property not-supported-16 $description
 * @property integer $revision
 * @property Doctrine_Collection $TableColumn
 * @property Doctrine_Collection $BusinessLogicLogicalColumnFk
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBusinessLogic extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('business_logic');
        $this->hasColumn('business_logic_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('logical_name', 'string', 45, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 45,
             ));
        $this->hasColumn('description', 'not-supported-16', null, array(
             'type' => 'not-supported-16',
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
        $this->hasMany('TableColumn', array(
             'refClass' => 'LogicalColumn',
             'local' => 'business_logic_id',
             'foreign' => 'table_column_business_logic_id'));

        $this->hasMany('LogicalColumn as BusinessLogicLogicalColumnFk', array(
             'local' => 'business_logic_id',
             'foreign' => 'business_logic_id'));
    }
}