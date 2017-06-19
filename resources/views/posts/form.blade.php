<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('namabarang', 'Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('namabarang', null, ['class' => 'form-control']) !!}
        {!! $errors->first('namabarang', '<p class="help-block">:message</p>') !!}
    </div>
    {!! Form::label('tipe', 'Type', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tipe', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tipe', '<p class="help-block">:message</p>') !!}
    </div>
    {!! Form::label('deskripsi', 'deskripsi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('deskripsi', null, ['class' => 'form-control']) !!}
        {!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!}
    </div>
    {!! Form::label('dimensi', 'dimensi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('dimensi', null, ['class' => 'form-control']) !!}
        {!! $errors->first('dimensi', '<p class="help-block">:message</p>') !!}
    </div>
    {!! Form::label('berat', 'berat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('berat', null, ['class' => 'form-control']) !!}
        {!! $errors->first('berat', '<p class="help-block">:message</p>') !!}
    </div>
    {!! Form::label('foto', 'foto', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('foto', null, ['class' => 'form-control']) !!}
        {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
