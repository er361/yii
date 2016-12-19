<?php

class m161218_134325_create_zayavka_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('zayavka',array(
           'id'=>'pk',
            'text'=>'text',
            'odobreno'=>'bool',
            'prichina'=>'varchar(500)'
        ));
	}

	public function down()
	{
        $this->dropTable('zayavka');
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