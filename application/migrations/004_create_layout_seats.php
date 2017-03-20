<?php
class Migration_Create_layout_seats extends CI_Migration
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
				'layout' => array(
					'type' => 'INT',
					'constraint' => 11,),
				'column' => array(
					'type' => 'INT',
					'constraint' => 11,),
				'row' => array(
					'type' => 'INT',
					'constraint' => 11,),
				));
			$this->dbforge->add_key('id', TRUE);
			$this->dbforge->create_table('layout_seats');
		}
		public function down()
        {
                $this->dbforge->drop_table('layout_seats');
        }

}
?>