<?php

/**
 * BaseColumnStats
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $column_statistic_id
 * @property integer $column_id
 * @property string $column_min
 * @property string $column_max
 * @property string $column_regex
 * @property integer $column_distinct_value
 * @property integer $column_mart_usage
 * @property integer $column_solution_usage
 * @property TableColumn $ColumnId
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseColumnStats extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('column_stats');
        $this->hasColumn('column_statistic_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('column_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('column_min', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
        $this->hasColumn('column_max', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
        $this->hasColumn('column_regex', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
        $this->hasColumn('column_distinct_value', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('column_mart_usage', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('column_solution_usage', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('TableColumn as ColumnId', array(
             'local' => 'column_id',
             'foreign' => 'column_id'));
    }
}