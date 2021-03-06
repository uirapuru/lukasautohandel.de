<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version1 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('videos_translation', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'primary' => '1',
             ),
             'title' => 
             array(
              'type' => 'string',
              'length' => '100',
              'notnull' => '1',
              'unique' => '',
             ),
             'description' => 
             array(
              'type' => 'string',
              'length' => '400',
              'notnull' => '1',
              'unique' => '',
             ),
             'lang' => 
             array(
              'fixed' => '1',
              'primary' => '1',
              'type' => 'string',
              'length' => '2',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
              1 => 'lang',
             ),
             ));
        $this->removeColumn('videos', 'title');
        $this->removeColumn('videos', 'description');
    }

    public function down()
    {
        $this->dropTable('videos_translation');
        $this->addColumn('videos', 'title', 'string', '100', array(
             'notnull' => '1',
             'unique' => '',
             ));
        $this->addColumn('videos', 'description', 'string', '400', array(
             'notnull' => '1',
             'unique' => '',
             ));
    }
}