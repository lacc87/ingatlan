<?php  if ( ! defined('BASEPATH')) exit("No direct script access allowed");

class Migration_Create_property extends CI_Migration {
	public function up() {

		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			'address' => array(
				'type' => 'TEXT'
			),
			'description' => array(
				'type' => 'TEXT'
			),
			'price' => array(
				'type' => 'INT',
				'unsigned' => true
			),
			'price_sold' => array(
				'type' => 'INT',
				'unsigned' => true
			),
			'status' => array(
				'type' => 'VARCHAR',
				'constraint' => '64'
			),
			'agent_id' => array(
				'type' => 'INT',
				'unsigned' => true
			),

		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('properties');

	}
}