<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $tarea->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $tarea->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha de inicio') }}
            {{ Form::text('fecha de inicio', $tarea->fecha de inicio, ['class' => 'form-control' . ($errors->has('fecha de inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha De Inicio']) }}
            {!! $errors->first('fecha de inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora estimada') }}
            {{ Form::text('hora estimada', $tarea->hora estimada, ['class' => 'form-control' . ($errors->has('hora estimada') ? ' is-invalid' : ''), 'placeholder' => 'Hora Estimada']) }}
            {!! $errors->first('hora estimada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoria_id') }}
            {{ Form::text('categoria_id', $tarea->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Id']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('finalizado') }}
            {{ Form::text('finalizado', $tarea->finalizado, ['class' => 'form-control' . ($errors->has('finalizado') ? ' is-invalid' : ''), 'placeholder' => 'Finalizado']) }}
            {!! $errors->first('finalizado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>