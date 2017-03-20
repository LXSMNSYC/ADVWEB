<?php
class Migration_Create_reserves extends CI_Migration
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
				'name' => array(
					'type' => 'VARCHAR',
					'constraint' => 100,),
				'image' => array(
					'type' => 'TEXT',),
				'movie' => array(
					'type' => 'INT',
					'constraint' => 11,),
				'cinema' => array(
					'type' => 'INT',
					'constraint' => 11,),
				'seats' => array(
					'type' => 'INT',
					'constraint' => 11,),
				));
			$this->dbforge->add_key('id', TRUE);
			$this->dbforge->create_table('reserves');
		}
		public function down()
        {
                $this->dbforge->drop_table('reserves');
        }

}
?>