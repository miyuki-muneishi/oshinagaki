@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-4">
            @include('layouts.menu')
        </div>
        <div class="col-sm-8">
            <div class="text-center">
                <h1>個人設定</h1>
            </div>

            {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::label('email', '(半角)', ['class' => 'text-muted small']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                <div class="col-sm-6 float-right" style="margin-right:-15px">
                    {!! Form::submit('登録', ['class' => 'btn btn-primary float-right btn-block', 'onclick' => 'return conf_message();']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection