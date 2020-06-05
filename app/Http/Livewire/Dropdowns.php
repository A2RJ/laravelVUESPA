<?php

namespace App\Http\Livewire;

use App\Models\aktivitas;
use App\Models\akun;
use App\Models\jangka_waktu;
use Livewire\Component;

class Dropdowns extends Component
{ 
    public $aktivitas;

    public function render()
    {
        return view('livewire.dropdowns')->withAktiv(Aktivitas::all())->withWaktu(Jangka_waktu::where('id_jangka_waktu', $this->aktivitas)->get())->withAkun(Akun::where('id_akun', $this->aktivitas)->get()); 
    }
}
