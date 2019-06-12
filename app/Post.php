<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Post extends Model
{
        protected $fillable = ['title', 'body', 'user_id'];

    //table name
   protected $table='posts';
    // primary key
    public $primaryKey='id';
    //Timestamps
    public    $timestamps=true;


    public function user(){
        return $this->belongsTo('App\User');
    }
}
