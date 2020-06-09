
@extends('layouts/app')

@section('content')
<div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
  <div class="lg:text-center">
    <p class="text-base leading-6 text-indigo-600 font-semibold tracking-wide uppercase">Transactions
    </p>
    <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
      A better way to send money
    </h3>
    <p class="mt-4 max-w-2xl text-xl leading-7 text-gray-500 lg:mx-auto">
      Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.
    </p>
  </div>

  <div class="inline-block relative w-64">
    <form action="jurnals" method="post" class="mb-5">
      {{ csrf_field() }}
      <label for="aktivitas" class="block text-gray-700 text-sm font-bold mb-2">Aktivitas</label>
      <select id="selectAktivitas" name="aktivitas" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
        <option>Pilih Aktivitas</option>
        @foreach ($aktivitas as $akt)
          <option value="{{ $akt->id_aktivitas }}">{{ $akt->aktivitas }}</option>
        @endforeach
      </select>
      <div class="inline-block relative w-64">
        <label for="selectWaktu" class="block text-gray-700 text-sm font-bold mb-2">Waktu</label>
        <select id="selectWaktu" name="jangka_waktu" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
          <option value="">Pilih Waktu</option>
        </select>
      </div>
      <div class="inline-block relative w-64">
        <label for="selectAkun" class="block text-gray-700 text-sm font-bold mb-2">Akun</label>
        <select id="selectAkun" name="no_akun" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
          <option value="">Pilih Akun</option>
        </select>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="keterangan">Keterangan</label>
        <input name="keterangan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="keterangan" type="text" placeholder="Input keterangan">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="debet">Debet</label>
        <input name="jum_debet" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="debet" type="text" placeholder="Input jumlah debet">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="kredit">kredit</label>
        <input name="jum_kredit" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="kredit" type="text" placeholder="Input jumlah kredit">
      </div>
      <button class="bg-transparent hover:bg-teal-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        Button
      </button>
    </form>
  </div>
</div>

@if (session('status'))
  <div class="bg-indigo-900 text-center py-4 lg:px-4">
    <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
      <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">{{ session('status') }}</span>
      <!-- <span class="font-semibold mr-2 text-left flex-auto">{{ session('status') }}</span> -->
    </div>
  </div>
@endif
<div class="max-w-screen-xl mx-auto py-4 sm:px-6 lg:px-8">
  <table class="table-auto">
    <thead>
      <tr>
        <th class="px-4 py-2">No.</th>
        <th class="px-4 py-2">Aktivitas</th>
        <th class="px-4 py-2">Akun</th>
        <th class="px-4 py-2">Keterangan</th>
        <th class="px-4 py-2">Debet</th>
        <th class="px-4 py-2">Kredit</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($records as $record)
      <tr>
        <td class="border px-4 py-2">{{ $loop->iteration }}</td>
        <td class="border px-4 py-2">{{ $record->aktivitas }}</td>
        <td class="border px-4 py-2">{{ $record->no_akun }}{{ $record->akun }}</td>
        <td class="border px-4 py-2">{{ $record->keterangan }}</td>
        <td class="border px-4 py-2">{{ $record->jum_debet }}</td>
        <td class="border px-4 py-2">{{ $record->jum_kredit }} {{  $record->jangka_waktu  }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>





@endSection