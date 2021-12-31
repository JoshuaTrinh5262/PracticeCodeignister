<?php 
class Migration_Add_user extends MY_Migration {
  public function up() {
      $this->dbforge->add_field(
         array(
            'id_user' => array(
               'type' => 'INT',
               'constraint' => 11,
               'unsigned' => true,
               'auto_increment' => true
            ),
            'firstname_staff' => array(
               'type' => 'VARCHAR',
               'constraint' => '255',
            ),
            'lastname_staff' => array(
               'type' => 'VARCHAR',
               'constraint' => '255',
            ),
            'gmail_user' => array(
               'type' => 'VARCHAR',
               'constraint' => '255',
               'null' => true,
            ),
            'phonenumber_user' => array(
               'type' => 'VARCHAR',
               'constraint' => '255',
               'null' => true,
            ),
            'password_user' => array(
               'type' => 'VARCHAR',
               'constraint' => '255',
            ),
            'avatar_user' => array(
               'type' => 'VARCHAR',
               'constraint' => '255',
            ),
            'deleted' => array(
               'type' => 'TINYINT',
               'constraint' => '4',
               'DEFAULT' => '0',
            ),
         )
      );
    $this->dbforge->add_field("created_datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP");
    $this->dbforge->add_field("updated_datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP");
    $this->dbforge->add_key('id_user', TRUE);
    $this->dbforge->create_table('user');
  }
  public function down() {
      $this->dbforge->drop_table('user');
  }
}