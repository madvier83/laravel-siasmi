@extends('admin.layouts.main')

@section('container')
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
				<a href="admin-news/create" class="btn btn-sm btn-primary float-right ml-3">Create Data</a>
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Isi</th>
                        <th>Tanggal</th>
                        <th width="1">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $n)
                        
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $n->title }}</td>
                        <td><img src="" alt="" height="100px">{{ $n->image }}</td>
                        <td>{{ $n->body }}</td>
                        <td>{{ $n->created_at }}</td>
                        </td>
                        <td>
                            <a href="/admin-news/{{ $n->id }}/update" class="badge btn-success col-12 mb-1">Update</a>
                            <form action="/admin-news/{{ $n->id }}/delete" method="POST">
                                @csrf
                                <button class="badge btn-danger border-0 col-12" onclick="return confirm('are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection