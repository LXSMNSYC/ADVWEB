<?php
class Migration_Create_genre extends CI_Migration
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
				'genre' => array(
					'type' => 'VARCHAR',
					'constraint' => '100',),
				'color' => array(
					'type' => 'VARCHAR',
					'constraint' => '100',),
						));
			$this->dbforge->add_key('id', TRUE);
			$this->dbforge->create_table('genres');
		}
		public function down()
        {
                $this->dbforge->drop_table('genres');
        }

}
?>