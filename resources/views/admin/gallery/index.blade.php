@extends('admin.layouts.main')

@section('container')
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
				<a href="admin-gallery/create" class="btn btn-sm btn-primary float-right ml-3">Create Data</a>
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Date</th>
                        <th width="1">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($images as $img)
                        
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $img->name }}</td>
                        <td><img src="/storage/{{ $img->image }}" alt="{{ $img->image }}" style="width: 100px;max-height: 120px;overflow: hidden;"></td>
                        <td>{{ $img->created_at }}</td>
                        </td>
                        <td>
                            <a href="/admin-gallery/{{ $img->id }}/update" class="btn btn-sm btn-success border-0 col-12 mb-2">Update</a>
                            <form action="/admin-gallery/{{ $img->id }}/delete" method="POST">
                                @csrf
                                <button class="btn btn-sm btn-danger border-0 col-12" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
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