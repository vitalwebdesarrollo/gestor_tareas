@extends('layouts.app')

@section('template_title')
    {{ $tarea->name ?? 'Show Tarea' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tarea</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tareas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $tarea->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $tarea->fecha_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Estimada:</strong>
                            {{ $tarea->hora_estimada }}
                        </div>
                        <div class="form-group">
                            <strong>Asignado a:</strong>
                            {{ $tarea->empleado_id }}
                        </div>
                        <div class="form-group">
                            <strong>Finalizada:</strong>
                            {{ $tarea->finalizada }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
