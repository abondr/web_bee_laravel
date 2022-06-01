<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Event extends Model
{
    
    protected $table = 'events';

    protected $appends = array('workshops');

    public function getWorkshopsAttribute() {
        DB::enableQueryLog();
        DB::getQueryLog();
        return Workshop::where('event_id','=',$this->id)->get();
    }
}
