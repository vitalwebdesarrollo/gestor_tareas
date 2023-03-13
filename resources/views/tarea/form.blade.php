<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $tarea->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_inicio') }}
            {{ Form::input('datetime-local', 'fecha_inicio', date('d-m-Y\Th:m:s',  strtotime($tarea->fecha_inicio)), array('class' => 'form-control',)) }}
            {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_estimada') }}
            {{ Form::number('hora_estimada', $tarea->hora_estimada, ['class' => 'form-control' . ($errors->has('hora_estimada') ? ' is-invalid' : ''), 'placeholder' => 'Hora Estimada']) }}
            {!! $errors->first('hora_estimada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
      
        <!-- Select de lista de los empleados que se vayan creando -->
        <div class="form-group">
            {{ Form::label('Asignado a') }}
            {{ Form::select('empleado_id', $empleado, $tarea->empleado_id, ['class' => 'form-control' . ($errors->has('empleado_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar']) }}
            {!! $errors->first('empleado_id', '<div class="invalid-feedback">:message</div>') !!}  
            
        </div>

        
        <div class="form-group">
            {{ Form::label('Finalizada') }}
            <div class="form-check {{ $errors->has('finalizada') ? 'is_valid' : ''}}">
                <input type="checkbox" name="finalizada" id="finalizada" value="1"
                @checked($tarea-finalizada || old('finalizada', 0 )=== 1)>
                <label class="form-check-label" for="finalizada"> {{trans('¿Termino la?')}}</label>
           </div>
<br>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>