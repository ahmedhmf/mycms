<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
class Page extends Model
{
  use NodeTrait;
  protected $fillable =[
    'title', 'uri', 'content'
  ];

  public function user(){
    return $this->belongsTo('App\User');
  }

  public function updateOrder($order, $orderPage){
    $relative=Page::findOrFail($orderPage);
    if($order =='before'){
      $this->beforeNode($relative)->save();
    }
    else if($order =='after'){
      $this->afterNode($relative)->save();
    }
    else {
      $relative->appendNode($this)->save();
    }

    Page::fixTree();
  }
}
