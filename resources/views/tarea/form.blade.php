<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $tarea->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha de inicio') }}
            {{ Form::text('fecha de inicio', $tarea->fecha de inicio, ['class' => 'form-control' . ($errors->has('fecha de inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha De Inicio']) }}
            {!! $errors->first('fecha de inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Horas estimadas') }}
            {{ Form::text('Horas estimadas', $tarea->Horas estimadas, ['class' => 'form-control' . ($errors->has('Horas estimadas') ? ' is-invalid' : ''), 'placeholder' => 'Horas Estimadas']) }}
            {!! $errors->first('Horas estimadas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('empleado_id') }}
            {{ Form::text('empleado_id', $tarea->empleado_id, ['class' => 'form-control' . ($errors->has('empleado_id') ? ' is-invalid' : ''), 'placeholder' => 'Empleado Id']) }}
            {!! $errors->first('empleado_id', '<div class="invalid-feedback">:message</div>') !!}
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