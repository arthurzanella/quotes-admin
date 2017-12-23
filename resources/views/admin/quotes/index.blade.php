@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Quotes</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{ route('admin.quotes.create') }}" class="btn btn-default">
                                    <span class='glyphicon glyphicon-plus'></span>
                                </a>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px;">#</th>
                                        <th>Quote</th>
                                        <th>Author</th>
                                        <th style="width: 1px"></th>
                                        <th style="width: 1px"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($quotes as $quote)
                                        <tr>
                                            <td>{{ $quote->id  }}</td>
                                            <td>{{ $quote->quote }}</td>
                                            <td>{{ $quote->author }}</td>
                                            <td>
                                                <a href="{{ route('admin.quotes.edit',['id' => $quote->id]) }}" class="btn btn-primary btn-xs" role="button">
                                                    <span class='glyphicon glyphicon-pencil'></span>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.quotes.destroy', ['id' => $quote->id]) }}" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button class="btn btn-primary btn-xs">
                                                        <span class='glyphicon glyphicon-trash'></span>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>
                                {{ $quotes->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection