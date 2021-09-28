<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    function merchandise() {
        return $this=>hasMany('App\Merchandise');
    }
}
