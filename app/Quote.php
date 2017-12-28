<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsToMany;

class Quote extends Model
{
    public function user()
    {
    	return $this->BelongsTo('App\User', 'user_id');
    }
}
