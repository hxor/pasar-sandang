@extends('layouts.back.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header">
                <h4 class="m-b-0 text-white">Input Form</h4>
            </div>
            <div class="card-body">
                {!! Form::model($product, ['route' => ['admin.products.update', $product->id], 'method' => 'PUT', 'class' => 'form-material']) !!}
                    <div class="form-body">
                        <h3 class="card-title">Product</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    {!! Form::label('name', 'Product', ['class' => 'form-control-label']) !!}
                                    {!! Form::text('name', null, ["class" => $errors->has('name') ? 'form-control form-control-danger' : 'form-control', 'id' => 'name', 'required' => 'required', 'autofocus']) !!}
                                    <div class="form-control-feedback">{{ $errors->first('name') }}</div>
                                </div>
                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                    {!! Form::label('description', 'Description', ['class' => 'form-control-label']) !!}
                                    {!! Form::textarea('description', null, ["class" => $errors->has('description') ? 'form-control form-control-danger' : 'form-control', 'id' => 'description']) !!}
                                    <div class="form-control-feedback">{{ $errors->first('description') }}</div>
                                </div>
                                <div class="form-group{{ $errors->has('category_lists') ? ' has-danger' : '' }}">
                                    {!! Form::label('category_lists', 'Categories') !!}
                                    {!! Form::select('category_lists[]', $categories, null, ['id' => 'category_lists', 'class' => $errors->has('category_lists') ? 'form-control form-control-danger select2' : 'form-control select2', 'multiple']) !!}
                                    <div class="form-control-feedback">{{ $errors->first('parent_id') }}</div>
                                </div>
                                <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                    {!! Form::label('price', 'Price', ['class' => 'form-control-label']) !!}
                                    {!! Form::number('price', null, ["class" => $errors->has('price') ? 'form-control form-control-danger' : 'form-control', 'id' => 'price', 'required' => 'required']) !!}
                                    <div class="form-control-feedback">{{ $errors->first('price') }}</div>
                                </div>
                                <div class="form-group{{ $errors->has('weight') ? ' has-danger' : '' }}">
                                    {!! Form::label('weight', 'Weight (gr)', ['class' => 'form-control-label']) !!}
                                    {!! Form::number('weight', null, ["class" => $errors->has('weight') ? 'form-control form-control-danger' : 'form-control', 'id' => 'weight', 'required' => 'required']) !!}
                                    <div class="form-control-feedback">{{ $errors->first('weight') }}</div>
                                </div>
                                <div class="form-group{{ $errors->has('hotoffer') ? ' has-danger' : '' }}">
                                    {!! Form::label('hotoffer', 'is Hot Offer ?') !!}
                                    {!! Form::select('hotoffer', [false => 'No', true => 'Yes'] , null, ['id' => 'hotoffer', 'class' => $errors->has('hotoffer') ? 'form-control form-control-danger' : 'form-control']) !!}
                                    <div class="form-control-feedback">{{ $errors->first('hotoffer') }}</div>
                                </div>
                                <div class="form-group{{ $errors->has('stock') ? ' has-danger' : '' }}">
                                    {!! Form::label('stock', 'is Ready Stock ?') !!}
                                    {!! Form::select('stock', [true => 'Yes', false => 'No'] , null, ['id' => 'stock', 'class' => $errors->has('stock') ? 'form-control form-control-danger' : 'form-control']) !!}
                                    <div class="form-control-feedback">{{ $errors->first('stock') }}</div>
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
<script>
    $(document).ready(function() {
        tinymce.init({
          selector: 'textarea',
          height: 200,
          menubar: false,
          plugins: [
            'advlist autolink lists link image charmap print preview anchor textcolor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code help wordcount'
          ],
          toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
          content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css']
        });
    });
</script>
@endsection

@section('scripts')
@endsection