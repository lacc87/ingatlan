<?php  if ( ! defined('BASEPATH')) exit("No direct script access allowed");

class Migration_Create_agent extends CI_Migration {
	public function up() {

		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'unique' => TRUE
			),
			'pwd' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('agents');

	}
}