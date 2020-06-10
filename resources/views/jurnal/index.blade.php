@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

    <form action="{{url('jurnal/store')}}" method="POST" class="mb-4">
        {{ csrf_field() }}
        
        <div class="form-group">
            <label for="selectAktivitas">Aktivitas</label>
            <select class="form-control" id="selectAktivitas" name="aktivitas">
                <option value="">Pilih</option>
                @foreach ($aktivitas as $akt)
                    <option value="{{ $akt->id_aktivitas }}">{{ $akt->aktivitas }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="selectWaktu">Waktu</label>
            <select class="form-control" id="selectWaktu" name="waktu">
                <option value="">Pilih</option>
            </select>
        </div>
        <div class="form-group">
            <label for="selectAkun">Akun</label>
            <select class="form-control" id="selectAkun" name="no_akun">
                <option value="">Pilih</option>
            </select>
        </div>
        <div class="input-group mb-3">
        <label for="keterangan">keterangan</label>
            <input type="text" class="form-control" name="keterangan" placeholder="keterangan" aria-label="keterangan" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
        <label for="debet">debet</label>
            <input type="text" class="form-control" name="jum_debet" placeholder="debet" aria-label="debet" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
        <label for="kredit">kredit</label>
            <input type="text" class="form-control" name="jum_kredit" placeholder="kredit" aria-label="kredit" aria-describedby="basic-addon1">
        </div>
        <button type="submit" class="btn btn-md btn-primary">Submit</button>
    </form>


    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif


    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($records as $record)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $record->aktivitas }}</td>
                <td>{{ $record->no_akun }}</td>
                <td>{{ $record->keterangan }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection