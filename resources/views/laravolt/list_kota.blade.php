<label for="exampleInputEmail1">Pilih Kota</label>
{!! Form::select('city_id', $kota, '', [
    'class' => 'form-control',
    'placeholder' => 'Pilih Kota',
    'id' => 'city_id',
]) !!}