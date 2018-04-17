<div class="form-body">
    <h3 class="card-title">Home Slider</h3>
    <hr>
    <div class="row p-t-20">
        <div class="col-md-12">
            <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                {!! Form::label('title', 'Title', ['class' => 'form-control-label']) !!}
                {!! Form::text('title', null, ["class" => $errors->has('title') ? 'form-control form-control-danger' : 'form-control', 'id' => 'title', 'required' => 'required', 'autofocus']) !!}
                <div class="form-control-feedback">{{ $errors->first('title') }}</div>
            </div>
            <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                {!! Form::label('path', 'Slider') !!}
                <div class="input-group">
                    {!! Form::text('path', null, ['id' => 'path', "class" => $errors->has('title') ? 'form-control form-control-danger' : 'form-control', 'placeholder' => 'Upload  Image', 'readonly']) !!}
                    <span class="input-group-btn">
                        <a id="lfm" data-input="path" data-preview="holder" class="btn btn-success text-white">
                            <i class="fa fa-cloud-upload"></i> Choose
                        </a>
                    </span>
                </div>
                <!-- if -->
                <!-- <img src="#" id="holder" style="margin-top:15px;max-height:254px;max-width: 152px;"> -->
                <!-- endif -->
                <img id="holder" style="margin-top:15px;max-height:254px;max-width: 152px;">
            </div>
            <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                {!! Form::label('status', 'Status') !!}
                {!! Form::select('status', [0 => 'Draft', 1 => 'Publish'], null, ['id' => 'status', 'class' => $errors->has('status') ? 'form-control form-control-danger' : 'form-control']) !!}
                <div class="form-control-feedback">{{ $errors->first('status') }}</div>
            </div>
        </div>
    </div>
</div>
<div class="form-actions">
    {!! Form::submit("Save", ['class' => 'btn btn-outline-success']) !!}
    {!! Form::reset("Cancel", ['class' => 'btn btn-outline-inverse']) !!}
</div>

@section('scripts')
    <script src="{{ asset('vendor/laravel-filemanager/js/lfm.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#lfm').filemanager('image');
        });
    </script>
@endsection