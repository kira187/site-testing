
{{--  <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">  --}}

@extends('layouts.theme')

@section('TituloPage')
    <h2>Usuarios</h2>
@stop

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a>Prueba</a>
    </li>
    <li class="breadcrumb-item active">
        <strong>Listado de usuarios</strong>
    </li>
@stop


@section('content')
<div class="row">
    <div class="col-lg-12">
    <div class="ibox ">
        <div class="ibox-title">
            <h5>Listado de usuarios</h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content">        
            <table class="table table-bordered">
                <thead>
                <tr>                 
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="#"><i class="fa fa-check text-navy"></i></a> |
                            <a href="#"><i class="fa fa-trash text-navy"></i></a>
                        </td>
                    </tr>                     
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>
@stop


@section('scripts')
    {{--  @include('snippets.data-table-js', ['tablaId' => 'cogs', 'opciones' => json_encode(['paging' => false, 'order' => [0, 'desc']])])  --}}

    <script>
    $(document).ready(function(){
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf', title: 'ExampleFile'},

                {extend: 'print',
                 customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                }
                }
            ]

        });

    });
</script>

@endsection
