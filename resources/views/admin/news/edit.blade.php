@extends('admin.layouts.main')

@section('container')
<div class="container-fluid">

	<div class="card">
		<form action="/admin-news/{{ $news->id }}/update" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="oldImage" value="{{ $news->image }}">
            <div class="card-body">
                <div class="row">

                    <div class="form-group col-lg-8">
                        <label for="">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $news->title) }}">
                        @error('title')<small class="form-text text-danger mt-0">{{ $message }}</small>@enderror
                        
                        <label for="" class="mt-3">Image (.jpg/.jpeg/.png)</label>
                        <img src="/storage/{{ $news->image }}" class="img-preview d-block img-fluid mb-2 col-4">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image" id="image" onchange="previewImage()">
                                <label class="custom-file-label" for="gambar">Choose image</label>
                            </div>
                        </div>
                        @error('image')<small class="form-text text-danger mt-0">{{ $message }}</small>@enderror
                    
                        <label for="" class="mt-3">Body</label>
                        <input type="hidden" id="body" name="body" value="{{ old('body', $news->body) }}">
                        <trix-editor input="body"></trix-editor>
                        @error('body')<small class="form-text text-danger mt-0">{{ $message }}</small>@enderror
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

<script>

    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection