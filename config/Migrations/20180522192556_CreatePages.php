<?php
use Migrations\AbstractMigration;

class CreatePages extends AbstractMigration
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
        $table = $this->table('pages');
        $table->AddColumn('titulo', 'string');
        $table->AddColumn('url', 'string');
        $table->AddColumn('body' , 'text');
        $table->addColumn('datacadastro', 'timestamp', [
            'default' => 'CURRENT_TIMESTAMP'
            ]);
        $table->addColumn('datamodificacao', 'timestamp', [
            'default' => null,
            'null' => true
        ]);
        $table->create();
    }
}
