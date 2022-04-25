@extends('admin.layouts.main')

@section('container')
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Body</th>
                        <th>Updated at</th>
                        <th width="1">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($section as $n)
                        
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $n->name }}</td>
                        <td><img src="/storage/{{ $n->image }}" alt="{{ $n->image }}" style="width: 100px;max-height: 120px;overflow: hidden;"></td>
                        <td class="small">{{ substr($n->body,0,250)}}...</td>
                        <td>{{ $n->updated_at }}</td>
                        </td>
                        <td>
                            <a href="/admin-section/{{ $n->name }}" class="btn btn-sm btn-success border-0 col-12 mb-2">Update</a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@if(session('create'))
<script>
    Swal.fire(
        'Success!',
        '{{ session('create') }}',
        'success'
    );
</script>
@endif
@if(session('update'))
<script>
    Swal.fire(
        'Success!',
        '{{ session('update') }}',
        'success'
    );
</script>
@endif
@if(session('delete'))
<script>
    Swal.fire(
        'Success!',
        '{{ session('delete') }}',
        'success'
    );
</script>
@endif

@endsection