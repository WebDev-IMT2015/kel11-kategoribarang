<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    
    {!! Form::label('namabarang', 'Nama', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('namabarang', null, ['class' => 'form-control']) !!}
<<<<<<< HEAD
        {{-- {!! $errors->first('namabarang', '<p class="help-block">:message</p>') !!} --}}
=======
<<<<<<< HEAD
        {{-- {!! $errors->first('namabarang', '<p class="help-block">:message</p>') !!} --}}
=======
        {!! $errors->first('namabarang', '<p class="help-block">:message</p>') !!}
>>>>>>> da67f18e6a667ab590035177838c48931c8fbeae
>>>>>>> 94aa69675c1827965b87377634694aa4e3748821
        <br>
    </div>
    
    {!! Form::label('tipe', 'Tipe', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tipe', null, ['class' => 'form-control']) !!}
<<<<<<< HEAD
       {{--  {!! $errors->first('tipe', '<p class="help-block">:message</p>') !!} --}}
=======
<<<<<<< HEAD
       {{--  {!! $errors->first('tipe', '<p class="help-block">:message</p>') !!} --}}
=======
        {!! $errors->first('tipe', '<p class="help-block">:message</p>') !!}
>>>>>>> da67f18e6a667ab590035177838c48931c8fbeae
>>>>>>> 94aa69675c1827965b87377634694aa4e3748821
        <br>
    </div>
    
    {!! Form::label('deskripsi', 'Deskripsi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('deskripsi', null, ['class' => 'form-control']) !!}
<<<<<<< HEAD
        {{-- {!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!} --}}
=======
<<<<<<< HEAD
        {{-- {!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!} --}}
=======
        {!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!}
>>>>>>> da67f18e6a667ab590035177838c48931c8fbeae
>>>>>>> 94aa69675c1827965b87377634694aa4e3748821
        <br>
    </div>
    
    {!! Form::label('dimensi', 'Dimensi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('dimensi', null, ['class' => 'form-control']) !!}
<<<<<<< HEAD
        {{-- {!! $errors->first('dimensi', '<p class="help-block">:message</p>') !!} --}}
=======
<<<<<<< HEAD
        {{-- {!! $errors->first('dimensi', '<p class="help-block">:message</p>') !!} --}}
=======
        {!! $errors->first('dimensi', '<p class="help-block">:message</p>') !!}
>>>>>>> da67f18e6a667ab590035177838c48931c8fbeae
>>>>>>> 94aa69675c1827965b87377634694aa4e3748821
        <br>
    </div>
    
    {!! Form::label('berat', 'Berat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('berat', null, ['class' => 'form-control']) !!}
<<<<<<< HEAD
        {{-- {!! $errors->first('berat', '<p class="help-block">:message</p>') !!} --}}
=======
<<<<<<< HEAD
        {{-- {!! $errors->first('berat', '<p class="help-block">:message</p>') !!} --}}
=======
        {!! $errors->first('berat', '<p class="help-block">:message</p>') !!}
>>>>>>> da67f18e6a667ab590035177838c48931c8fbeae
>>>>>>> 94aa69675c1827965b87377634694aa4e3748821
        <br>
    </div>
    
    {!! Form::label('foto', 'Foto', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
          {{-- {!! Form::text('foto', null, ['class' => 'form-control']) !!} --}}
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 94aa69675c1827965b87377634694aa4e3748821
          {{-- {{ Form::open(array('url'=>'form-submit','files'=>true)) }} --}}
               {!! Form::file('foto', null ,['class' => 'form-control']) !!}
          {{-- {{ Form::image('img/picture.jpg', 'a picture') }} --}}
          {{-- {!! $errors->first('foto', '<p class="help-block">:message</p>') !!} --}}
<<<<<<< HEAD
=======
=======
          {{ Form::open(array('url'=>'form-submit','files'=>true)) }}
          {{ Form::file('foto','',array('id'=>'','class'=>'')) }}
        {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
>>>>>>> da67f18e6a667ab590035177838c48931c8fbeae
>>>>>>> 94aa69675c1827965b87377634694aa4e3748821
        <br>
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Tambahkan Barang', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
