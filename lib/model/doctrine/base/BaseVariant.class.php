<?php

/**
 * BaseVariant
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property Doctrine_Collection $Car
 * 
 * @method string              getName() Returns the current record's "name" value
 * @method Doctrine_Collection getCar()  Returns the current record's "Car" collection
 * @method Variant             setName() Sets the current record's "name" value
 * @method Variant             setCar()  Sets the current record's "Car" collection
 * 
 * @package    ThomasCloud
 * @subpackage model
 * @author     Grzegorz Kaszuba
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseVariant extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('variants');
        $this->hasColumn('name', 'string', 1024, array(
             'type' => 'string',
             'length' => 1024,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Car', array(
             'local' => 'id',
             'foreign' => 'variant_id'));
    }
}