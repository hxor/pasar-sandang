<div class="form-body">
    <h3 class="card-title">Tesimony</h3>
    <hr>
    <div class="row p-t-20">
        <div class="col-md-12">
            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                {!! Form::label('name', 'Name', ['class' => 'form-control-label']) !!}
                {!! Form::text('name', null, ["class" => $errors->has('name') ? 'form-control form-control-danger' : 'form-control', 'id' => 'name', 'required' => 'required', 'autofocus']) !!}
                <div class="form-control-feedback">{{ $errors->first('name') }}</div>
            </div>
            <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                {!! Form::label('title', 'Title', ['class' => 'form-control-label']) !!}
                {!! Form::text('title', null, ["class" => $errors->has('title') ? 'form-control form-control-danger' : 'form-control', 'id' => 'title', 'required' => 'required']) !!}
                <div class="form-control-feedback">{{ $errors->first('title') }}</div>
            </div>
            <div class="form-group{{ $errors->has('content') ? ' has-danger' : '' }}">
                {!! Form::label('content', 'Testimony', ['class' => 'form-control-label']) !!}
                {!! Form::textarea('content', null, ["class" => $errors->has('content') ? 'form-control form-control-danger' : 'form-control', 'id' => 'content']) !!}
                <div class="form-control-feedback">{{ $errors->first('content') }}</div>
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