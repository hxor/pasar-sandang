@extends('layouts.back.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    Data Table
                    <a href="{{ route('admin.bank.create') }}" class="btn btn-outline-info waves-effect waves-light pull-right" style="margin-top: -8px;">Create Data</a>
                </h4>
                <div class="table-responsive m-t-40">
                    <table id="DataTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Bank</th>
                                <th>Number</th>
                                <th>Owner</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#DataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('table.bank') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'title', name: 'title'},
                {data: 'number', name: 'number'},
                {data: 'owner', name: 'owner'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    });
</script>
@endsection