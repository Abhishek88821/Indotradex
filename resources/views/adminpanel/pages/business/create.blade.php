<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-3">Add New Business</h5>
                            <a href="{{ route('admin.business') }}" class="btn btn-outline-primary">List</a>
                        </div>
                        @include('partials.errors')
                        <form method="POST" action="{{ route('admin.business.store') }}"
                            class="form-horizontal r-separator" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group mb-3 row pb-3">
                                    <label for="name"
                                        class="col-sm-3 text-end control-label col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Enter Product Name Here" value="{{old('name')}}" />
                                    </div>
                                </div>
                            

                                <div class="form-group mb-3 row pb-3">
                                    <label for="name" class="col-sm-3 text-end control-label col-form-label">Image  {{old('image')}} </label>
                                    <div class="col-sm-9">
                                        <input type="file" name="image" class="d-none image-input" id="image-input" accept="image/*"  value="{{ old('image') }}"/>
                                        <label for="image-input" class="image-label">
                                        <div class="image-container">
                                            <img src="{{ asset('images/no_image.png') }}" alt="no_image" class="preview" id="image-preview">
                                        </div>
                                        </label>

                                    </div>
                                </div>
                                <div class="form-group mb-3 row pb-3">
                                    <label for="description"
                                        class="col-sm-3 text-end control-label col-form-label">Short Description</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" name="short_desc"  class="form-control" placeholder=" Enter Short Description Here" style="min-height:100%">{{ old('short_desc')}}</textarea>
                                    </div>
                                </div>
                              
                                <div class="form-group mb-3 row pb-3">
                                    <label for="description"
                                        class="col-sm-3 text-end control-label col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" name="description"  class="form-control" placeholder=" Enter Description Here" style="min-height:100%">{{ old('description')}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row pb-3">
                                    <label for="description"
                                        class="col-sm-3 text-end control-label col-form-label">Display Order</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="order" class="form-control"
                                            placeholder=" Enter Display Order Here" value="{{old('order')}}" />
                                    </div>
                                </div>
                                <div class="form-group mb-3 row pb-3">
                                    <label for="description"
                                        class="col-sm-3 text-end control-label col-form-label">Display Status</label>
                                    <div class="col-sm-9">
                                        <select name="status" class="form-control">
                                            <option value="1" {{ old('status', '1') == '1' ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Deactive</option>
                                        </select>                                        
                                    </div>
                                </div>
                                {{-- <div class="form-group mb-3 row pb-3">
                                    <label for="description"
                                        class="col-sm-3 text-end control-label col-form-label">Meta Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="meta_title" class="form-control"
                                            placeholder=" Enter Meta Title Here" value="{{ old('meta_title', '') }}"  />
                                    </div>
                                </div>
                                <div class="form-group mb-3 row pb-3">
                                    <label for="description"
                                        class="col-sm-3 text-end control-label col-form-label">Meta KayWord</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="meta_keywords" class="form-control"
                                            placeholder=" Enter Meta KeyWord Here"value="{{ old('meta_keywords', '') }}"/>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row pb-3">
                                    <label for="description"
                                        class="col-sm-3 text-end control-label col-form-label">Meta Description</label>
                                    <div class="col-sm-9">
                                        <Textarea name="meta_description"   placeholder=" Enter Meta Description Here" class="form-control" > {{ old('meta_description', '') }}</Textarea>
                                    </div>
                                </div> --}}
                                <div class="form-group mb-3 row pb-3">
                                    <label for="name"
                                        class="col-sm-3 text-end control-label col-form-label">Slug</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="slug" class="form-control"
                                            placeholder=" Enter Product Slug Here" value="{{old('slug')}}" />
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 border-top">
                                <div class="form-group text-end">
                                    <button type="submit"
                                        class="btn btn-info rounded-pill px-4 waves-effect waves-light">Save</button>
                                    <a href="{{ route('admin.business.create') }}"
                                        class="btn btn-dark rounded-pill px-4 waves-effect waves-light">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const imageInputs = document.querySelectorAll('.image-input');
        const imagePreviews = document.querySelectorAll('.preview');
    
        imagePreviews.forEach(preview => {
            preview.addEventListener('click', () => {
                const inputId = preview.getAttribute('for');
                const input = document.getElementById(inputId);
                input.click();
            });
        });
    
        imageInputs.forEach(input => {
            input.addEventListener('change', function() {
                const previewId = input.getAttribute('id') === 'image-input' ? 'image-preview' : 'icon-preview';
                const previewImage = document.querySelector(`#${previewId}`);
    
                if (input.files && input.files[0]) {
                    const reader = new FileReader();
    
                    reader.onload = function(e) {
                        previewImage.src = e.target.result;
                    };
    
                    reader.readAsDataURL(input.files[0]);
                }
            });
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
    
</x-app-layout>
