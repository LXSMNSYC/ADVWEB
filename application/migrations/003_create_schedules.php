<?php
class Migration_Create_schedules extends CI_Migration
{
		public function __construct(){
			parent::__construct();
		}
		
		public function up() {
			$this->dbforge->add_field(array(
				'id' => array(
					'type' => 'INT',
					'constraint' => 11,
					'unsigned' => TRUE,
					'auto_increment' => TRUE),
				'movie' => array(
					'type' => 'INT',
					'constraint' => 11,),
				'cinema' => array(
					'type' => 'INT',
					'constraint' => 11,),
				'cinema_name' => array(
					'type' => 'VARCHAR',
					'constraint' => 256,),
				'cinema_location' => array(
					'type' => 'TEXT',),
				'price' => array(
					'type' => 'DECIMAL',
					'constraint' => '8,2',),
				'time_start' => array(
					'type' => 'TIME',),
				'time_end' => array(
					'type' => 'TIME',),
				'date_start' => array(
					'type' => 'DATE',),
				'date_end' => array(
					'type' => 'DATE',),
				'created' => array(
					'type' => 'DATETIME',),
				'modified' => array(
					'type' => 'DATETIME',),
				));
			$this->dbforge->add_key('id', TRUE);
			$this->dbforge->create_table('schedules');
		}
		public function down()
        {
                $this->dbforge->drop_table('schedules');
        }

}
?>