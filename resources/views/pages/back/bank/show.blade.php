@extends('layouts.back.app') 

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    Detail Bank
                </h4>
                <div class="table-responsive m-t-40">
                    <table id="DataTable" class="table table-bordered table-striped">
                        <tr>
                            <th>Bank</th>
                            <td>{{ $bank->title }}</td>
                        </tr>
                        <tr>
                            <th>Number</th>
                            <td>{{ $bank->number }}</td>
                        </tr>
                        <tr>
                            <th>Owner</th>
                            <td>{{ $bank->owner }}</td>
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