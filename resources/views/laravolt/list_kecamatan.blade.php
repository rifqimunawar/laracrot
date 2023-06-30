<label for="exampleInputEmail1">Pilih Kecamatan</label>
{!! Form::select('kecamatan_id', $kecamatan, '', [
    'class' => 'form-control',
    'placeholder' => 'Pilih Kecamatan',
    'id' => 'kecamatan_id',
]) !!}