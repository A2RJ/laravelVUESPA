@extends('layouts.app')

@section('breadcrumb')
<li class="breadcrumb-item">
    jurnal
</li>
@endsection

@section('header')
<h3><i class="fa fa-list"></i> jurnal </h3>
@endsection

@section('tools')
<a href="{{route('jurnal.create')}}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
  Tambah transaksi
</a>
@endsection

@section('content')
<div class="row">
    @foreach($records as $record)
    <div class="col-sm-6">
        @include('cards.jurnal')
    </div>
    @endforeach
</div>
{!! $records->render() !!}
@endSection