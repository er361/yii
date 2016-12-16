<?php

class m161214_195333_create_spravka_template_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('spravka_template',array(
            'id' => 'pk',
            'type' => 'varchar(500)',
            'template' => 'text'
        ));
	}

	public function down()
	{
		$this->dropTable('spravka_template');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}