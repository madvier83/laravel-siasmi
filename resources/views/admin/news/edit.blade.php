@extends('admin.layouts.main')

@section('container')
<div class="container-fluid">

	<div class="card">
		<form action="/admin-news/{{ $news->id }}/update" method="post">
            @csrf
            <div class="card-body">
                <div class="row">

                    <div class="form-group col-lg-8">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ old('title', $news->title) }}">
                        <small class="form-text text-danger mt-0"></small>
                        
                        <label for="" class="mt-3">Image (.jpg/.jpeg/.png)</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" value="{{ old('image', $news->image) }}">
                                <label class="custom-file-label" for="gambar">Choose image</label>
                            </div>
                        </div>
                        <small class="form-text text-danger mt-0"></small>
                    
                        <label for="" class="mt-3">Body</label>
                        <input type="hidden" id="body" name="body" value="{{ old('body', $news->body) }}">
                        <trix-editor input="body"></trix-editor>
                        <small class="form-text text-danger mt-0"></small>
                    </div>

                </div>
            </div>

            <div class="card-footer bg-white">
                <a href="/admin-news"><button type="button" class="btn btn-secondary col-2">Cancel</button></a>
                <button type="submit" class="btn btn-success col-2">Update</button>
            </div>
        </form>
	</div>

</div>
@endsection