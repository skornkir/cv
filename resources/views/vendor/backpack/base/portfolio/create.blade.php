@extends('backpack::layout')

@section('header')
    <section class="content-header">
        <h1>
            Портфолио
        </h1>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    {!! Form::open(['action' => 'PortfolioController@store', 'files' => 'true'])  !!}
                    <div class="form-group">
                        <div class="col-md-8">
                            {{Form::label('image', 'Изображение')}}
                        </div>
                        <div class="col-md-8">
                            {{Form::file('image')}}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8">
                            {!! Form::label('title', 'Название') !!}
                        </div>
                        <div class="col-md-8">
                            {!! Form::text('title') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8">
                            {!! Form::label('client', 'Клиент') !!}
                        </div>
                        <div class="col-md-8">
                            {!! Form::text('client') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8">
                            {!! Form::label('technology', 'Технология') !!}
                        </div>
                        <div class="col-md-8">
                            {!! Form::text('technology') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8">
                            {!! Form::label('released', 'Завершен') !!}
                        </div>
                        <div class="col-md-8">
                            {!! Form::text('released') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8">
                            {!! Form::label('description', 'Описание') !!}
                        </div>
                        <div class="col-md-8">
                            {!! Form::textarea('description') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8">
                            {!! Form::button('Сохранить', ['type' => 'submit', 'class' => 'btn']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
