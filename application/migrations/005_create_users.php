	<?php
class Migration_Create_users extends CI_Migration
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
				'username' => array(
					'type' => 'VARCHAR',
					'constraint' => 100,),
				'email' => array(
					'type' => 'VARCHAR',
					'constraint' => 100,),
				'password' => array(
					'type' => 'VARCHAR',
					'constraint' => 255,),
				'is_admin' => array(
					'type' => 'INT',
					'constraint' => 11,),
				));
			$this->dbforge->add_key('id', TRUE);
			$this->dbforge->create_table('users');
		}
		public function down()
        {
                $this->dbforge->drop_table('users');
        }

}
?>