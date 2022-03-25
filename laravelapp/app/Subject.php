<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
       'person_id' => 'required|exists:people,1d',
       'name' => 'required|max:10',
   );

   public function getData()
   {
       return $this->id . ': ' . $this->name;
   }
}

