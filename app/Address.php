<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Address extends Model
{
    protected $fillable=['addressline1','addressline2','email','full_name','phone'];
}

 