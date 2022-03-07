<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class gebruikers extends Model
{
    protected $fillable = [
        'id','gebruiker', 'wachtwoord', 'email',
    ];
}
