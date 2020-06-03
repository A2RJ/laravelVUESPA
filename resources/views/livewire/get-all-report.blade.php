<div>
<table class="table table-bordered table-striped">
    <thead>
    <tr>
    	<th>Tanggal </th>
		<th>Aktivitas </th>
		<th>No Akun </th>
		<th>Jum Debet </th>
		<th>Jum Kredit </th>
		<th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    @foreach($records as $record)
    <tr>	 	<td> {{$record->tanggal }} </td>
	 	<td> {{$record->aktivitas }} </td>
	 	<td> {{$record->no_akun }} </td>
	 	<td> {{$record->jum_debet }} </td>
	 	<td> {{$record->jum_kredit }} </td>
	<td><a class="btn btn-secondary" href="{{route('jurnal.show',$record->id)}}">
    <span class="fa fa-eye"></span>
</a><a class="btn btn-secondary" href="{{route('jurnal.edit',$record->id)}}">
    <span class="fa fa-pencil"></span>
</a>
<form onsubmit="return confirm('Are you sure you want to delete?')"
      action="{{route('jurnal.destroy',$record->id)}}"
      method="post"
      style="display: inline">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button type="submit" class="btn btn-secondary cursor-pointer">
        <i class="text-danger fa fa-remove"></i>
    </button>
</form></td></tr>

    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <td colspan="3">
            {{{$records->render()}}}
        </td>
    </tr>
    </tfoot>
</table>
</div>
