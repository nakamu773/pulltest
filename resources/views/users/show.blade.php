@extends('layouts.app')

@section('content')


        @include('users.tabs',['user'=>$user])
        @include('movies.movies', ['movies' => $movies])



@if(Auth::id() == $user->id)


        <h3 class="mt-5">表示名の変更</h3>

        <div class="row mt-5 mb-5">
            <div class="col-sm-6">

                    {!! Form::open(['route' => 'rename','method'=>'put']) !!}
                        <div class="form-group">
                            {!! Form::label('channel','チャンネル名') !!}
                            {!! Form::text('channel', $user->channel, ['class' => 'form-control']) !!}
                        </div>
        
                        <div class="form-group">
                            {!! Form::label('name','名前') !!}
                            {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
                        </div>
        
                        {!! Form::submit('更新する？', ['class' => 'button btn btn-primary mt-2']) !!}
                    {!! Form::close() !!}
                    
            </div>
        </div>
        
        
        <div class="row mt-5 mb-5">
            <div class="col-sm-6">

            {!! link_to_route('delete_confirm','退会する',['id'=>Auth::id()],['class'=>'button btn btn-danger mt-1']) !!}

            </div>
        </div>
        
        <div class="row mt-5 mb-5">
            <div class="col-sm-6">

            {!! link_to_route('user_password_edit','パスワードの変更',['id'=>Auth::id()],['class'=>'button btn btn-danger mt-1']) !!}

            </div>
        </div>
        
@endif

@endsection