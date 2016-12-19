<?php

class m161218_204610_add_fk_to_zayavka_table extends CDbMigration
{
	public function up()
	{
		$this->addForeignKey('user_data_fk','zayavka','user_data_id','user_data','id','CASCADE');
	}

	public function down()
	{
		$this->dropForeignKey('user_data_fk','zayavka');
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