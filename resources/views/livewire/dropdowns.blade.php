<div>
    <div class="mb-8">
        <label class="inline-block w-32 font-bold">Aktivitas:</label>
        <select name="aktivitas" wire:model="aktivitas" class="border shadow p-2 bg-white">
            <option value=''>Choose a aktivitas</option>
            @foreach($aktiv as $akt)
                <option value={{ $akt->id_aktivitas }}>{{ $akt->aktivitas }}</option>
            @endforeach
        </select>
    </div> 
    <div class="mb-8">
        <label class="inline-block w-32 font-bold">Waktu:</label>
        <select name="akun" class="border shadow p-2 bg-white">
            <option value=''>Choose a waktu</option>
            @foreach($waktu as $akt)
                <option value={{ $akt->id_jangka_waktu }}> {{ $akt->jangka_waktu }}</option>
            @endforeach
        </select>
    </div> 
    <div class="mb-8">
        <label class="inline-block w-32 font-bold">Akun:</label>
        <select name="akun" class="border shadow p-2 bg-white">
            <option value=''>Choose a akun</option>
            @foreach($akun as $akt)
                <option value={{ $akt->id_akun }}> {{ $akt->no_akun }} {{ $akt->akun }}</option>
            @endforeach
        </select>
    </div> 
</div>