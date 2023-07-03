<label for="exampleInputEmail1">Alamat Kecamatan</label>
{!! Form::select('kecamatan_id', $kecamatan, '', [
    'class' => 'form-control',
    'placeholder' => 'Pilih Kecamatan',
    'id' => 'kecamatan_id',
]) !!}