@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
            <i class="fa fa-table"></i>  
            @if(!empty($answers)) 
                View Answer
            @else
                Add Answer
            @endif
        </h3>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        @if (session()->has('status'))
        <div class="alert alert-success" >
            <strong>{{ session()->get('status') }}</strong>
        </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                @if(!empty($answers)) 
                    View Answer
                @else
                    Add Answer
                @endif
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" method="post" action="">
                            @csrf
                            <input type="hidden" name="id" value="{{$id}}">
                            <label>Answer</label>
                            @if(!empty($answers)) 
                                {{$answers[0]->answer}} 
                            @else
                                <div class="form-group">
                                    <textarea class="form-control" name="answer" ></textarea>
                                    @if ($errors->has('answer') || session()->has('error'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('answer') }}</strong>
                                        <strong>{{ session()->get('error') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-default">{{__('Section::messages.submit')}}</button>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection