@extends('layouts.back.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header">
                <h4 class="m-b-0 text-white">Input Form</h4>
            </div>
            <div class="card-body">
                {!! Form::model($category, ['route' => ['admin.categories.update', $category->id], 'method' => 'PUT', 'class' => 'form-material']) !!}
                    <div class="form-body">
                        <h3 class="card-title">Category</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                        {!! Form::label('title', 'Title', ['class' => 'form-control-label']) !!}
                                        {!! Form::text('title', null, ["class" => $errors->has('title') ? 'form-control form-control-danger' : 'form-control', 'id' => 'title', 'required' => 'required', 'autofocus']) !!}
                                        <div class="form-control-feedback">{{ $errors->first('title') }}</div>
                                    </div>
                                    <div class="form-group{{ $errors->has('parent_id') ? ' has-danger' : '' }}">
                                        {!! Form::label('parent_id', 'Parent ID') !!}
                                        {!! Form::select('parent_id', ['' => ' - ']+$categories, null, ['id' => 'parent_id', 'class' => $errors->has('parent_id') ? 'form-control form-control-danger' : 'form-control']) !!}
                                        <div class="form-control-feedback">{{ $errors->first('parent_id') }}</div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        {!! Form::submit("Save", ['class' => 'btn btn-outline-success']) !!}
                        {!! Form::reset("Cancel", ['class' => 'btn btn-outline-inverse']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection