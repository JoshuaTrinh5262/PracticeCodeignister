<?php 
class Migration_Add_genre extends MY_Migration {
  public function up() {
      $this->dbforge->add_field(
         array(
            'id_genre' => array(
               'type' => 'INT',
               'constraint' => 11,
               'unsigned' => true,
               'auto_increment' => true
            ),
            'name_genre' => array(
               'type' => 'VARCHAR',
               'constraint' => '255',
            ),
            'description_genre' => array(
               'type' => 'VARCHAR',
               'constraint' => '255',
               'null' => true,
            ),
            'category_genre' => array(
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
    $this->dbforge->add_key('id_genre', TRUE);
    $this->dbforge->create_table('genre');
  }
  public function down() {
      $this->dbforge->drop_table('genre');
  }
}