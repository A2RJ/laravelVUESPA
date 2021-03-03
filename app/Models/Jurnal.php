<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;
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
    // use SoftDeletes;

    /**
     * Database table name
     */
    protected $table = 'jurnal';
    /**
     * Mass assignable columns
     */
    protected $guarded = [];
    protected $fillable = [
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
    protected $dates = [];

    public function joinTable()
    {
        return DB::table('jurnal')
        ->Join('aktivitas',
            'jurnal.id_aktivitas',
            '=',
            'aktivitas.id_aktivitas'
        )
        ->Join('akun', [
            ['jurnal.id_aktivitas', '=', 'akun.id_aktivitas'],
            ['jurnal.no_akun', '=', 'akun.no_akun']
        ])
        ->select('jurnal.id', 'jurnal.id_aktivitas', 'jurnal.created_at', 'aktivitas.aktivitas', 'akun.no_akun', 'akun.akun', 'jurnal.keterangan', 'akun.debet', 'jurnal.jum_debet', 'akun.kredit', 'jurnal.jum_kredit')
        ->paginate(10);
    }

    public function sumdebet($aktivitas, $akun)
    {
        return DB::table('jurnal')
        // ->join('akun', 'jurnal.id_aktivitas', 'akun.id_aktivitas')
        ->where('jurnal.id_aktivitas', '=', $aktivitas)
        ->where('jurnal.no_akun', '=', $akun)
        // ->where('jurnal.created_at', $bulan)
        ->sum('jurnal.jum_debet');
    }

    static function jurnal()
    {
        return DB::table('jurnal')
        ->Join('aktivitas',
            'jurnal.id_aktivitas',
            '=',
            'aktivitas.id_aktivitas'
        )
        ->Join('akun', [
            ['jurnal.id_aktivitas', '=', 'akun.id_aktivitas'],
            ['jurnal.no_akun', '=', 'akun.no_akun']
        ])
        ->select('jurnal.id','aktivitas.aktivitas', 'jurnal.id_aktivitas', 'jurnal.created_at', 'aktivitas.aktivitas', 'akun.no_akun', 'akun.akun', 'jurnal.keterangan', 'akun.debet', 'jurnal.jum_debet', 'akun.kredit', 'jurnal.jum_kredit')
        ->get();
    }

    public function cari($id)
    {
        return DB::table('jurnal')
            ->Join('aktivitas', 'jurnal.id_aktivitas', '=', 'aktivitas.id_aktivitas')
            ->Join('akun', [
                ['jurnal.id_aktivitas', '=', 'akun.id_aktivitas'],
                ['jurnal.no_akun', '=', 'akun.no_akun']
            ])
            ->select('jurnal.id', 'jurnal.id_aktivitas', 'jurnal.created_at', 'aktivitas.aktivitas', 'akun.no_akun', 'akun.akun', 'jurnal.keterangan', 'akun.debet', 'jurnal.jum_debet', 'akun.kredit', 'jurnal.jum_kredit')
            ->where('jurnal.created_at', 'LIKE', '%' . $id . '%')
            ->orWhere('aktivitas.aktivitas', 'LIKE', '%' . $id . '%')
            ->orWhere('jurnal.keterangan', 'LIKE', '%' . $id . '%')
            ->paginate(10);
    }
    
}
