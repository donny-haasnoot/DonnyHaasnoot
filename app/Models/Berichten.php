<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Berichten extends Model
{
    protected $fillable = [
        'id','title', 'content',
    ];
}
