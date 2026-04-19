<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class RemoveUsernameFromUsers extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('users');

        if ($table->hasColumn('username')) {
            $table->removeColumn('username');
        }

        $table->update();
    }
}
