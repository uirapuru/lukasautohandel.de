<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version2 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('videos_translation', 'videos_translation_id_videos_id', array(
             'name' => 'videos_translation_id_videos_id',
             'local' => 'id',
             'foreign' => 'id',
             'foreignTable' => 'videos',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->addIndex('videos_translation', 'videos_translation_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('videos_translation', 'videos_translation_id_videos_id');
        $this->removeIndex('videos_translation', 'videos_translation_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
    }
}