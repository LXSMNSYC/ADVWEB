<?php
class Migration_Create_movies extends CI_Migration
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
				'description' => array(
					'type' => 'TEXT',),
				'image' => array(
					'type' => 'TEXT',),
				'rating' => array(
					'type' => 'INT',
					'constraint' => 11,
					'unsigned' => TRUE,),
				'genre' => array(
					'type' => 'INT',
					'constraint' => 11,),
				'created' => array(
					'type' => 'DATETIME',),
				'modified' => array(
					'type' => 'DATETIME',),
						));
			$this->dbforge->add_key('id', TRUE);
			$this->dbforge->create_table('movies');
		}
		public function down()
        {
                $this->dbforge->drop_table('movies');
        }

}
?>