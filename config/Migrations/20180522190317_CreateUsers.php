<?php
use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('username', 'string');
        $table->addColumn('password', 'string', [
            'limit' => 100
        ]);
        $table->addColumn('datacadastro', 'timestamp', [
            'default' => 'CURRENT_TIMESTAMP'
            ]);
        $table->addColumn('datamodificacao', 'timestamp', [
            'default' => null,
            'null' => true
        ]);
        $table->addColumn('ativo', 'boolean', [
            'default' => 0,
            'null' => true
            ]);
            $table->create();
    }
}
