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
                    <div class="btn btn-default">
                        <a href={{ url('/admin/portfolio/create') }}>Добавить портфолио</a>
                    </div>
                    <div class="row">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Название</th>
                                <th scope="col">Клиент</th>
                                <th scope="col">Выполнено</th>
                                <th scope="col">На чём</th>
                                <th scope="col">Путь изображения</th>
                                <th scope="col">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($portfolios as $portfolio)
                                    <tr>
                                        <td>{{$portfolio->title}}</td>
                                        <td>{{$portfolio->client}}</td>
                                        <td>{{$portfolio->released}}</td>
                                        <td>{{$portfolio->technology}}</td>
                                        <td>{{$portfolio->image}}</td>
                                        <td>
                                            <a href={{url('/admin/portfolio/' . $portfolio->id . '/edit')}} class="btn btn-xs btn-default"><i class="fa fa-edit"></i> Edit</a>
                                            {!! Form::open(['action' => ['PortfolioController@delete', $portfolio->id], 'method' => 'delete' ]) !!}
                                                {!! Form::button('Удалить', ['type' => 'submit']) !!}
                                                {{--<a class="btn btn-xs btn-default" data-button-type="delete"><i class="fa fa-trash"></i> Delete</a>--}}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
