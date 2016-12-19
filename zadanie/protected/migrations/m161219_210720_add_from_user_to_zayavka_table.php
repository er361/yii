<?php

class m161219_210720_add_from_user_to_zayavka_table extends CDbMigration
{
	public function up()
	{
		$this->addColumn('zayavka','from_user','varchar(50)');
	}

	public function down()
	{
		$this->dropColumn('zayavka','from_user');
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