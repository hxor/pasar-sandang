@extends('layouts.back.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header">
                <h4 class="m-b-0 text-white">Input Form</h4>
            </div>
            <div class="card-body">
                {!! Form::model($slider, ['route' => ['admin.sliders.update', $slider->id], 'method' => 'PUT', 'class' => 'form-material']) !!}
                    @include('pages.back.sliders._form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection