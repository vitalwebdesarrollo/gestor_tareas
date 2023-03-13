@extends('layouts.app')

@section('template_title')
    Tarea
@endsection

@section('content')

<!--filtro fecha de inicio --->
<form action="{{ route('tarea.search') }}" method="POST">
    @csrf
    <br>
    <div class="container">
        <div class="row">
            <div class="container-fluid">
                <div class="form group row">
                    <label for="date" class="col-form-label col-sm-2">Fecha de inicio de</label>
                    <div class="col-sm-3"><input type="date" class="form-control input-sm" id="fromDate" name="fromDate" required></div>
                    <label for="date" class="col-form-label col-sm-2">Fecha inicio hasta</label>
                    <div class="col-sm-3"><input type="date" class="form-control input-sm" id="toDate" name="toDate" required></div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn" name="search" title="Buscar"><img src="https://img.icons8.com/windows/24/null/search--v1.png"/></button></div>
                    </div>
                </div>

            </div>
        </div>


    </div>
</form>

<!--Aquí iria la codificación de descarga en pdf y excel -->


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tarea') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tareas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nueva tarea') }}
                                </a>
                              </div>
                        </div>


                        


                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Descripcion</th>
										<th>Fecha Inicio</th>
										<th>Hora Estimada (Horas)</th>
										<th>Asignado a</th>
										<th>Estado</th>
                                        

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($tareas as $tarea)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tarea->descripcion }}</td>
											<td>{{ $tarea->fecha_inicio }}</td>
											<td>{{ $tarea->hora_estimada }}</td>
											<td>{{ $tarea->empleado->nombre }}</td>
											<td id="resp{{ $tarea->finalizada }}">
                                            @if($tarea->finalizada == 1)
                                            <p class="btn btn-sm btn-success">Finalizada</p>
                                            @else
                                            <p class="btn btn-sm btn-light">Activa</p>
                                            @endif

                                            </td>
                                            
                                            <td>
                                                <form action="{{ route('tareas.destroy',$tarea->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tareas.show',$tarea->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tareas.edit',$tarea->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>

                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tareas->links() !!}
            </div>
        </div>
    </div>
@endsection


