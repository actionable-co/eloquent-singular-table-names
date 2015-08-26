<?php

namespace MartinBean\Database\Eloquent;

use Illuminate\Support\Str;

trait SingularTableName
{
    /**
     * Get the table associated with the model.
     *
     * @return string
     */
    public function getTable()
    {
        if (isset($this->table)) {
            return $this->table;
        }
        return str_replace('\\', '', Str::snake(Str::singular(class_basename($this))));
    }
}
