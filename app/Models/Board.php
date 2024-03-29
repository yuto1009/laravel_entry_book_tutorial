<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'person_id' => 'required',
        'title' => 'required',
        'message' => 'required'
    );

    public function getData()
{
    $personName = $this->person ? $this->person->name : 'No name';
    return $this->id . ': ' . $this->title . ' (' . $personName . ')';
}

    public function person()
    {
        return $this->belongsTo('App\Models\Person');
    }
}
