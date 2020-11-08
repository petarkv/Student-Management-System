@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            <i class="fa fa-registered"></i> Role
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($role, ['route' => ['roles.update', $role->role_id], 'method' => 'patch']) !!}

                   <!-- Name Field -->
                    <div class="form-group col-md-6">
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
                    </div>
               </div>

                        <div>                                                
                            {!! Form::submit('Update Role', ['class' => 'btn btn-info']) !!}
                        </div>
                    

                        {{-- @include('roles.fields') --}}

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection