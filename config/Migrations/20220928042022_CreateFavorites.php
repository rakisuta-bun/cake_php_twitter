<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateFavorites extends AbstractMigration
{
    public $autoId = false;

    /**
     * Up Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-up-method
     * @return void
     */
    public function up()
    {

        $this->table('tweets')
            ->removeColumn('modfied')
            ->update();

        $this->table('users')
            ->removeColumn('modfied')
            ->update();
        $this->table('favorites')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('tweet_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('tweets')
            ->addColumn('modified', 'datetime', [
                'after' => 'created',
                'default' => null,
                'length' => null,
                'null' => true,
            ])
            ->update();

        $this->table('users')
            ->addColumn('modified', 'datetime', [
                'after' => 'created',
                'default' => null,
                'length' => null,
                'null' => true,
            ])
            ->update();
    }

    /**
     * Down Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-down-method
     * @return void
     */
    public function down()
    {

        $this->table('tweets')
            ->addColumn('modfied', 'datetime', [
                'after' => 'created',
                'default' => null,
                'length' => null,
                'null' => true,
            ])
            ->removeColumn('modified')
            ->update();

        $this->table('users')
            ->addColumn('modfied', 'datetime', [
                'after' => 'created',
                'default' => null,
                'length' => null,
                'null' => true,
            ])
            ->removeColumn('modified')
            ->update();

        $this->table('favorites')->drop()->save();
    }
}
