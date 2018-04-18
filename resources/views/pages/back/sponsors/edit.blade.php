@extends('layouts.back.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header">
                <h4 class="m-b-0 text-white">Input Form</h4>
            </div>
            <div class="card-body">
                {!! Form::model($sponsor, ['route' => ['admin.sponsors.update', $sponsor->id], 'method' => 'PUT', 'class' => 'form-material']) !!}
                    @include('pages.back.sponsors._form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection