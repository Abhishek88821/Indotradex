<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-3">About </h5>
                        </div>
                        @include('partials.errors')
                        <form method="POST" action="{{ route('about.store') }}"
                            class="form-horizontal r-separator" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group mb-3 row pb-3">
                                    <label for="name"
                                        class="col-sm-3 text-end control-label col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title" class="form-control"
                                            placeholder="Enter Product Name Here" value="{{$about->title ?? '' }}" />
                                    </div>
                                </div>
                                <div class="form-group mb-3 row pb-3">
                                    <label for="name" class="col-sm-3 text-end control-label col-form-label">Images </label>
                                    <div class="col-sm-9">
                                        <input type="file" name="images[]" multiple class="d-none image-input" id="image-input" accept="image/*" />
                                        <label for="image-input" class="image-label">
                                            
                                            <div class="image-container">
                                                <div class="preview-container">
                                                    @if ($about->images)
                                                        @foreach (explode(',', $about->images) as $imageId)
                                                            @php
                                                                $upload = App\Models\Upload::find($imageId);
                                                            @endphp
                                            
                                                            @if ($upload)
                                                             
                                                                <img src="{{ asset($upload->filepath) }}" alt="Image" class="preview">
                                                            @else
                                                                <p>Image not found for ID: {{ $imageId }}</p>
                                                            @endif
                                                        @endforeach
                                                    @else
                                                        <img src="{{ asset('images/no_image.png') }}" alt="no_image" class="preview" id="icon-preview">
                                                    @endif
                                                </div>
                                            </div>
                                            
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row pb-3">
                                    <label for="name" class="col-sm-3 text-end control-label col-form-label">Background Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="bgimages" class="d-none image-input" id="bgimage-input" accept="image/*" />
                                        <label for="bgimage-input" class="image-label">
                                            <div class="image-container">
                                            
                                                <img src="{{ asset($about->bgimage->filepath ?? 'images/no_image.png') }}" alt="no_image" class="preview" id="bgimage-preview" style="height: 50px; width: auto;">
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row pb-3">
                                    <label for="name"
                                        class="col-sm-3 text-end control-label col-form-label">Discription</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" name="description" class="form-control"
                                            placeholder="Enter Product Name Here"  >{{$about->description ?? ' '}} </textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row pb-3">
                                    <label for="description"
                                        class="col-sm-3 text-end control-label col-form-label">Meta Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="meta_title" class="form-control"
                                            placeholder=" Enter Meta Title Here" value="{{$about->meta_title ?? ' '}}"  />
                                    </div>
                                </div>
                                <div class="form-group mb-3 row pb-3">
                                    <label for="description"
                                        class="col-sm-3 text-end control-label col-form-label">Meta KayWord</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="meta_keywords" class="form-control"
                                            placeholder=" Enter Meta KeyWord Here"value="{{$about->meta_keywords ?? ' ' }}"/>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row pb-3">
                                    <label for="description"
                                        class="col-sm-3 text-end control-label col-form-label">Meta Description</label>
                                    <div class="col-sm-9">
                                        <Textarea name="meta_description"   placeholder=" Enter Meta Description Here" class="form-control" > {{ $about->meta_description ?? ' ' }}</Textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 border-top">
                                <div class="form-group text-end">
                                    <button type="submit"
                                        class="btn btn-info rounded-pill px-4 waves-effect waves-light">Save</button>
                                  
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const imageInput = document.querySelector('.image-input');
        const previewContainer = document.querySelector('.preview-container');
    
        imageInput.addEventListener('change', function () {
            // Clear previous previews
            previewContainer.innerHTML = '';
    
            if (this.files && this.files.length > 0) {
                for (let i = 0; i < this.files.length; i++) {
                    const reader = new FileReader();
                    const imagePreview = document.createElement('img');
                    imagePreview.className = 'preview';
                    previewContainer.appendChild(imagePreview);
    
                    reader.onload = function (e) {
                        imagePreview.src = e.target.result;
                    };
    
                    reader.readAsDataURL(this.files[i]);
                }
            }
        });
    </script>

<script>
    const addSpecificationButton = document.getElementById('addSpecification');
    const specificationsContainer = document.getElementById('specificationsContainer');

    addSpecificationButton.addEventListener('click', () => {
        const newRow = document.createElement('div');
        newRow.className = 'row';

        const newKeyInput = document.createElement('div');
        newKeyInput.className = 'col-md-6 mb-2';
        newKeyInput.innerHTML = '<input type="text" name="specifications_key[]" class="form-control" placeholder="Key">';

        const newValueInput = document.createElement('div');
        newValueInput.className = 'col-md-6 mb-2';
        newValueInput.innerHTML = '<input type="text" name="specifications_value[]" class="form-control" placeholder="Value">';

        newRow.appendChild(newKeyInput);
        newRow.appendChild(newValueInput);

        specificationsContainer.insertBefore(newRow, addSpecificationButton);
    });
</script>

<script>
    const bgimageInput = document.querySelector('#bgimage-input');
    const bgimagePreview = document.querySelector('#bgimage-preview');

    bgimageInput.addEventListener('change', function () {
        if (this.files && this.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                bgimagePreview.src = e.target.result;
            };

            reader.readAsDataURL(this.files[0]);
        }
    });
</script>
    
</x-app-layout>
