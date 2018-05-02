@extends('layouts.back.app') 

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    Detail Testimony
                </h4>
                <div class="table-responsive m-t-40">
                    <table id="DataTable" class="table table-bordered table-striped">
                        <tr>
                            <th>Name</th>
                            <td>{{ $bank->name }}</td>
                        </tr>
                        <tr>
                            <th>Title</th>
                            <td>{{ $bank->title }}</td>
                        </tr>
                        <tr>
                            <th>Testimony</th>
                            <td>{{ $bank->content }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{ $bank->status == 1 ? 'Publish' : 'Draft' }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection