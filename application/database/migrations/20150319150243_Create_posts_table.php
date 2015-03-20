<?php

/**
 * Migration: Create Posts Table
 *
 * Created by: SprintPHP
 * Created on: 2015-03-19 15:02pm
 */
class Migration_create_posts_table extends CI_Migration {

    public function up ()
    {
		$fields = [
		'id' => [
			'type' => 'int',
			'unsigned' => true,
			'auto_increment' => true,
			'constraint' => 9,
		],		'title' => [
			'type' => 'varchar',
			'constraint' => 255,
			'null' => true,
			'default' => '',
		],		'body' => [
			'type' => 'text',
			'null' => true,
		],		'deleted' => [
			'type' => 'tinyint',
			'constraint' => 1,
			'default' => 0,
		],		'created_on' => [
			'type' => 'datetime',
		],	];

		$this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', true);
	    $this->dbforge->create_table('posts');
	
    }

    //--------------------------------------------------------------------

    public function down ()
    {
		$this->dbforge->drop_table('posts');
    }

    //--------------------------------------------------------------------

}