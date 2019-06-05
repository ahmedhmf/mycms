<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
  protected $fillable =[
    'title', 'uri', 'content'
  ];
  
  public function user(){
    return $this->belongsTo('App\User');
  }
}
