@extends('layouts.app')
@section('content')
@hasanyrole('Admin|Vendedor')

<div class="parallax-index">

<!-- ----------------------- -->
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row  d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0 mb-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                <h4 class="f-w-600">{{$user->nombre}} {{$user->apellido}}</h4>
                                @if($user->is_admin)
                                <p>Administrador</p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                @else
                                <p>Vendedor</p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                @if($user->is_admin)
                                <h5 class="m-b-20 p-b-5 b-b-default f-w-600">Información del Administrador No. {{$user->id}}</h5>
                                @else
                                <h5 class="m-b-20 p-b-5 b-b-default f-w-600">Información del Vendedor No. {{$user->id}}</h5>
                                @endif
                                <div class="row">
                                    <div class="col">
                                        <p class="m-b-10 f-w-600">Nombre Completo</p>
                                        <h6 class="text-muted f-w-400">{{$user->nombre}} {{$user->apellido}}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Correo</p>
                                        <h6 class="text-muted f-w-400">{{$user->email}}</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Telefono</p>
                                            <h6 class="text-muted f-w-400">{{$user->celular}}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Fecha de nacimiento</p>
                                            <h6 class="text-muted f-w-400">{{$user->fecha_nacimiento}}</h6>
                                    </div>
                                </div>
                                <br>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Acción</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="/usuarios/{{$user->id}}/edit" class="waves-effect waves-light btn-success btn">Editar</a>
                                        @role('Admin')
                                        @if (Auth::user()->id != $user->id)
                                            <a href="/usuarios/{{$user->id}}/drop" class="waves-effect waves-light btn right btn-danger">Borrar</a>
                                        @endif
                                        @endrole
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="/usuarios" class="waves-effect waves-light btn btn-warning float-right">Regresar</a>
                                    </div>
                                </div>
                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>




@else
@include('components.authAlert')
@endhasanyrole
@endsection
