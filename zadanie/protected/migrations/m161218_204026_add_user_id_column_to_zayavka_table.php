<?php

class m161218_204026_add_user_id_column_to_zayavka_table extends CDbMigration
{
	public function up()
	{
		$this->addColumn('zayavka','user_data_id','integer');
	}

	public function down()
	{
		$this->dropColumn('zayavka','user_data_id');
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