<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property date $tanggal tanggal
@property varchar $aktivitas aktivitas
@property varchar $no_akun no akun
@property text $keterangan keterangan
@property varchar $jum_debet jum debet
@property varchar $jum_kredit jum kredit
   
 */
class Jurnal extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'jurnal';

    /**
    * Mass assignable columns
    */
    protected $fillable=[
        'jum_kredit',
'tanggal',
'aktivitas',
'no_akun',
'keterangan',
'jum_debet',
'jum_kredit'
];

    /**
    * Date time columns.
    */
    protected $dates=['tanggal'];




}