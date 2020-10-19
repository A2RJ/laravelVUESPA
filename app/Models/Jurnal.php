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
        'id_aktivitas',
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
        return DB::table('jurnal')
        ->join('aktivitas', 'jurnal.id_aktivitas', '=', 'aktivitas.id_aktivitas')
        ->join('akun', 'jurnal.no_akun', '=', 'akun.id')
        ->select('jurnal.created_at', 'aktivitas.aktivitas', 'akun.no_akun', 'jurnal.keterangan', 'akun.debet', 'jurnal.jum_debet', 'akun.kredit', 'jurnal.jum_kredit',)
        ->paginate(15);
    }

    

}