<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


use Illuminate\Database\Eloquent\SoftDeletes;

use App\Http\Requests\CvRequest;


class Cv extends Model
{
    use SoftDeletes;

    public function user() {
        return $this->belongsTo('App\User');
    }
}


