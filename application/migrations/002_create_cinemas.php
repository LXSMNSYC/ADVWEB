<?php
class Migration_Create_cinemas extends CI_Migration
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
					'constraint' => '100',),
				'location' => array(
					'type' => 'VARCHAR',
					'constraint' => '100',),
				'layout' => array(
					'type' => 'INT',
					'constraint' => 11,),
				));
			$this->dbforge->add_key('id', TRUE);
			$this->dbforge->create_table('cinemas');
		}
		public function down()
        {
                $this->dbforge->drop_table('cinemas');
        }

}
?>