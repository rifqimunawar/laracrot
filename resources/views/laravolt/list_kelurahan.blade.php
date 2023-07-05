<label for="exampleInputEmail1">Alamat Kelurahan</label>
{!! Form::select('kelurahan_id', $kelurahan, '', [
    'class' => 'form-control',
    'placeholder' => ' ',
    'id' => 'kelurahan_id',
]) !!}