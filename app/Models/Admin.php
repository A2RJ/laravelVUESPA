<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $name name
@property varchar $email email
@property varchar $password password
@property timestamp $created_at created at
@property timestamp $updated_at updated at
   
 */
class Admin extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'admin';

    /**
    * Mass assignable columns
    */
    protected $fillable= ['name', 'email', 'password'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}