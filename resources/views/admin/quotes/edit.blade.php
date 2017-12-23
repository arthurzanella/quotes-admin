@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Edit a quote</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('admin.quotes.update', ['id' => $quote->id]) }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('quote') ? ' has-error' : '' }}">
                                <label>Quote</label>
                                
                                    <input id="quote" type="text" class="form-control" name="quote" value="{{ $quote['quote'] }}" required autofocus>
                                    @if ($errors->has('quote'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('quote') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group{{ $errors->has('author') ? ' has-error' : '' }}">
                                <label>Author</label>
                                
                                    <input id="author" type="text" class="form-control" name="author" value="{{ $quote['author'] }}" required autofocus>
                                    @if ($errors->has('author'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('author') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <input type="hidden" name="_method" value="PUT">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection