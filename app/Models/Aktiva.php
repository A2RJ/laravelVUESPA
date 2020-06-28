<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $abtt abtt
@property varchar $abt abt
@property varchar $abp abp
@property date $updated_at updated at
   
 */
class Aktiva extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'aktiva';

    /**
    * Mass assignable columns
    */
    protected $fillable=['abtt',
'abt',
'abp'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}