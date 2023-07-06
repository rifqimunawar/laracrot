<label for="exampleInputEmail1">Alamat Kota</label>
{!! Form::select('city_id', $kota, '', [
    'class' => 'form-control',
    'placeholder' => ' ',
    'id' => 'city_id',
]) !!}