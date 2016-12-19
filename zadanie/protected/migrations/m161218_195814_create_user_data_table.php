<?php

class m161218_195814_create_user_data_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('user_data',array(
			'id'=>'pk',
			'type'=>'char(50)',
			'name'=>'varchar(50)',
			'familia'=>'varchar(50)',
			'otchestvo'=>'varchar(50)',
			'birthdate'=>'char(30)',
			'address'=>'varchar(100)',
			'nationality'=>'varchar(50)',
			'id_number'=>'varchar(50)'
		));
	}

	public function down()
	{
		$this->dropTable('user_data');
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