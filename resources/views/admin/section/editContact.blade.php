@extends('admin.layouts.main')

@section('container')
<div class="container-fluid">

	<div class="card">
		<form action="/admin-section/{{ $section->id }}/update" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="oldImage" value="{{ $section->image }}">
            <div class="card-body">
                <div class="row">

                    <div class="form-group col-lg-8">
                        <label for="">Data</label>
                        <input type="text" class="form-control @error('body') is-invalid @enderror" name="body" value="{{ old('body', $section->body) }}">
                        @error('body')<small class="form-text text-danger mt-0">{{ $message }}</small>@enderror
                    </div>

                </div>
            </div>

            <div class="card-footer bg-white">
                <a href="/admin-section"><button type="button" class="btn btn-secondary col-2">Cancel</button></a>
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