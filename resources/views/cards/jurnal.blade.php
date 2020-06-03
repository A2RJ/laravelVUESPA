<div class="card card-default">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-9">
                <a href="{{route('jurnal.show',$record->id)}}"> Detail</a>
            </div>
            <div class="col-sm-3 text-right">
                <div class="btn-group">
                    <a class="btn btn-secondary" href="{{route('jurnal.edit',$record->id)}}">
    <span class="fa fa-pencil">Ubah</span>
</a>
                    <form onsubmit="return confirm('Are you sure you want to delete?')"
      action="{{route('jurnal.destroy',$record->id)}}"
      method="post"
      style="display: inline">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button type="submit" class="btn btn-secondary cursor-pointer">
        <i class="text-danger fa fa-remove"></i> Hapus
    </button>
</form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-block">
        <table class="table table-bordered table-striped">
            <tbody>
            		<tr>
			<th>Tanggal</th>
			<td>{{$record->tanggal}}</td>
		</tr>
		<tr>
			<th>Aktivitas</th>
			<td>{{$record->aktivitas}}</td>
		</tr>
		<tr>
			<th>No Akun</th>
			<td>{{$record->no_akun}}</td>
		</tr>
		<tr>
			<th>Jum Debet</th>
			<td>{{$record->jum_debet}}</td>
		</tr>
		<tr>
			<th>Jum Kredit</th>
			<td>{{$record->jum_kredit}}</td>
		</tr>

            </tbody>
        </table>
    </div>
</div>
