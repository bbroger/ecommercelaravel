@extends('admin/main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add Category
                    <a class="pull-right" href="{{ url('admin/categories') }}">View Categories</a>
                </div>
                <div class="panel-body">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{ Session::get('success')  }}
                    </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>                
                @endif
                    {!! Form::open(['url' => 'admin/categories',  'files' => true]) !!}               
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::input('text', 'name', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Name']) !!}
						{!! Form::label('desc', 'Description') !!}
                        {!! Form::input('textarea', 'description', '', ['class' => 'form-control', 'placeholder' => 'Description']) !!}
						{!! Form::label('image', 'Image') !!}
                        {!! Form::file('category_image') !!}
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
