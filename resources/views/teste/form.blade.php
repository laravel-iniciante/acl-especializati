@extends('dashboard.app')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{route('home')}}">Início</a></li>
    <li class="breadcrumb-item active"> <a href="{{route('user.index')}}">Usuários</a></li>
    <li class="breadcrumb-item active"> Alterar usuário</li>
@endsection

@section('content')

    @include('layouts.form.form-errors-message')
    <form method="POST" action="{{route('test_save')}}" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header bg-transparent"> <b>Alterar usuário</b> </div>
            <div class="card-body">

            {{csrf_field()}}


            

<hr>

            {!! 
                $form->checkbox('status')
                    ->wrapCol(' Ativo ')
                    ->value(1)
                    ->model($user, 'status')
                    ->make(); 
            !!}
<hr>



            </div>
            <div class="card-footer text-right">
                <a class="btn btn-link" href="{{route('user.index')}}">cancelar</a>
                <input type="submit" value="Alterar" class="btn btn-success">
            </div>
        </div>
     </form>
@endsection
