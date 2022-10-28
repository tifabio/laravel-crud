@extends('adminlte::page')

@section('template_title')
    Change Password
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Change Password</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('users.change-password', $user->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    
                                    <div class="form-group">
                                        {{ Form::label('Password') }}
                                        {{ Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Password']) }}
                                        {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('Confirm password') }}
                                        {{ Form::password('password_confirmation', ['class' => 'form-control' . ($errors->has('confirm-password') ? ' is-invalid' : ''), 'placeholder' => 'Confirm password']) }}
                                        {!! $errors->first('password_confirmation', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                </div>
                                <div class="box-footer mt20">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
