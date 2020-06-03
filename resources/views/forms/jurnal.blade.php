<form action="{{isset($route)?$route:route('jurnal.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
    <div class="form-group">
    <label for="tanggal">Tanggal</label>
    <div class="input-group">
        <input type="date" class="form-control {{ $errors->has('tanggal') ? ' is-invalid' : '' }}" name="tanggal" id="tanggal"
               value="{{old('tanggal',$model->tanggal)}}"
               placeholder="" required="required" >
        <div class="input-group-addon">
            <label for="tanggal" class="fa fa-calendar">
            </label>
        </div>
    </div>
      @if($errors->has('tanggal'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('tanggal') }}</strong>
    </div>
  @endif
</div>

    <div class="form-group">
        <label for="aktivitas">Aktivitas</label>
        <input type="text" class="form-control {{ $errors->has('aktivitas') ? ' is-invalid' : '' }}" name="aktivitas" id="aktivitas" value="{{old('aktivitas',$model->aktivitas)}}" placeholder="" maxlength="40" required="required" >
          @if($errors->has('aktivitas'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('aktivitas') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="no_akun">No Akun</label>
        <input type="text" class="form-control {{ $errors->has('no_akun') ? ' is-invalid' : '' }}" name="no_akun" id="no_akun" value="{{old('no_akun',$model->no_akun)}}" placeholder="" maxlength="4" required="required" >
          @if($errors->has('no_akun'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('no_akun') }}</strong>
    </div>
  @endif 
    </div>

<div class="form-group">
    <label for="keterangan">Keterangan</label>
    <textarea id="keterangan" name="keterangan" class="form-control {{ $errors->has('keterangan') ? ' is-invalid' : '' }}" rows="3">{{old('keterangan',$model->keterangan)}}</textarea>
      @if($errors->has('keterangan'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('keterangan') }}</strong>
    </div>
  @endif
</div> 

    <div class="form-group">
        <label for="jum_debet">Jum Debet</label>
        <input type="text" class="form-control {{ $errors->has('jum_debet') ? ' is-invalid' : '' }}" name="jum_debet" id="jum_debet" value="{{old('jum_debet',$model->jum_debet)}}" placeholder="" maxlength="13" required="required" >
          @if($errors->has('jum_debet'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('jum_debet') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="jum_kredit">Jum Kredit</label>
        <input type="text" class="form-control {{ $errors->has('jum_kredit') ? ' is-invalid' : '' }}" name="jum_kredit" id="jum_kredit" value="{{old('jum_kredit',$model->jum_kredit)}}" placeholder="" maxlength="13" required="required" >
          @if($errors->has('jum_kredit'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('jum_kredit') }}</strong>
    </div>
  @endif 
    </div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>