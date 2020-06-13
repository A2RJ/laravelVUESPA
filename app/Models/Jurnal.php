<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
/**
    @property varchar $aktivitas aktivitas
    @property varchar $jangka_waktu jangka waktu
    @property varchar $no_akun no akun
    @property text $keterangan keterangan
    @property varchar $jum_debet jum debet
    @property varchar $jum_kredit jum kredit
    @property timestamp $created_at created at
    @property timestamp $updated_at updated at
    @property timestamp $deleted_at deleted at
   
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
    protected $guarded = [];
    protected $fillable=[
        'aktivitas',
        'jangka_waktu',
        'no_akun',
        'keterangan',
        'jum_debet',
        'jum_kredit'
        ];

    /**
    * Date time columns.
    */
    protected $dates=[];

    public function joinTable()
    {
        return DB::table('aktivitas')
            ->join('akun', 'aktivitas.id_aktivitas', '=', 'akun.id_akun')
            ->select('aktivitas.*', 'akun.*')
            ->get();
    }




}