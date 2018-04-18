@extends('layouts.back.app') 
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    Detail Sponsor
                </h4>
                <div class="table-responsive m-t-40">
                    <table id="DataTable" class="table table-bordered table-striped">
                        <tr>
                            <th>Title</th>
                            <td>{{ $sponsor->title }}</td>
                        </tr>
                        <tr>
                            <th>Path</th>
                            <td>{{ $sponsor->path }}</td>
                        </tr>
                        <tr>
                            <th>Type</th>
                            <td>{{ ucwords($sponsor->type) }}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><img src="{{ asset($sponsor->path) }}" alt="sldier" width="200" height="200"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 
@section('scripts')
@endsection