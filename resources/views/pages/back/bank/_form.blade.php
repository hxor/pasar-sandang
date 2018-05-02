<div class="form-body">
    <h3 class="card-title">Bank</h3>
    <hr>
    <div class="row p-t-20">
        <div class="col-md-12">
            <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                {!! Form::label('title', 'Bank', ['class' => 'form-control-label']) !!}
                {!! Form::text('title', null, ["class" => $errors->has('title') ? 'form-control form-control-danger' : 'form-control', 'id' => 'title', 'required' => 'required', 'autofocus']) !!}
                <div class="form-control-feedback">{{ $errors->first('title') }}</div>
            </div>
            <div class="form-group{{ $errors->has('number') ? ' has-danger' : '' }}">
                {!! Form::label('number', 'Number', ['class' => 'form-control-label']) !!}
                {!! Form::number('number', null, ["class" => $errors->has('number') ? 'form-control form-control-danger' : 'form-control', 'id' => 'number', 'required' => 'required']) !!}
                <div class="form-control-feedback">{{ $errors->first('number') }}</div>
            </div>
            <div class="form-group{{ $errors->has('owner') ? ' has-danger' : '' }}">
                {!! Form::label('owner', 'Owner', ['class' => 'form-control-label']) !!}
                {!! Form::text('owner', null, ["class" => $errors->has('owner') ? 'form-control form-control-danger' : 'form-control', 'id' => 'owner', 'required' => 'required']) !!}
                <div class="form-control-feedback">{{ $errors->first('owner') }}</div>
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