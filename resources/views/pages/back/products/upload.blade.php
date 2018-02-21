@extends('layouts.back.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header">
                <h4 class="m-b-0 text-white">Input Form</h4>
            </div>
            <div class="card-body">
                <div class="form-body">
                    <h3 class="card-title">Upload Images Product</h3>
                    <hr>
                    {!! Form::open(['method' => 'POST', 'route' => ['admin.products.images.upload', $product->id], 'class' => 'dropzone']) !!}
                    {!! Form::close() !!}
                    <hr>
                    @if ($product->images()->count() > 0)
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Path</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product->images as $image)
                                    <tr>
                                        <td>{{ $image->id }}</td>
                                        <td><img src="{{ $image->image_path }}" alt="" height="150" width="120"></td>
                                        <td>{{ $image->path }}</td>
                                        <td>
                                            {!! Form::model($image, ['route' => ['admin.products.images.destroy', $image->id], 'method' => 'delete']) !!}
                                                <button type="submit" class="btn waves-effect waves-light btn-outline-danger btn-sm js-submit-confirm">Delete</button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @endforeach                                    
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
                <div class="form-actions">
                    <a href="{{ route('admin.products.index') }}" class="btn btn-outline-success">Finish</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection