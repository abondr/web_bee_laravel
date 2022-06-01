<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $table = 'menu_items';

    protected $appends = array('children');

    public function getChildrenAttribute()
    {
        return MenuItem::find($this->parent_id); // links this->course_id to courses.id
    }
}
