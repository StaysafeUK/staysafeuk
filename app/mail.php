<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mail extends Model
{
    public function path()
    {
        return route('message.mail', $this);
    }

}
