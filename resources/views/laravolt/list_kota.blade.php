<label for="exampleInputEmail1">Alamat Kota</label>
{!! Form::select('city_id', $kota, '', [
    'class' => 'form-control',
    'placeholder' => 'Pilih Kota',
    'id' => 'city_id',
]) !!}