<x-app-layout>
    <style>
       
    
    .preview-image img {
        display: inline-block;
        margin: 5px;
        max-width: 70px;
        max-height: 70px;
    }

    .delete-button {
        display: block;
        margin-top: 5px;
        background-color: red;
        color: white;
        border: none;
        cursor: pointer;
        
    }
    #resourceimagePreviews{
        display: flex;
    }


    </style>


    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-3">Edit Tranding Project</h5>
                            <a href="{{ route('admin.project') }}" class="btn btn-outline-primary">List</a>
                        </div>
                        @include('partials.errors')
                        <form method="POST" action="{{ route('admin.project.update',['id' => $project->id ]) }}"
                            class="form-horizontal r-separator" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="card-body">
                                <div class="form-group mb-3 row pb-3">
                                    <label for="name"
                                        class="col-sm-3 text-end control-label col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Enter Product Name Here" value="{{$project->name}}" />
                                    </div>
                                </div>
                            

                                <div class="form-group mb-3 row pb-3">
                                    <label for="name" class="col-sm-3 text-end control-label col-form-label">Image  {{old('image')}} </label>
                                    <div class="col-sm-9">
                                        <input type="file" name="image" class="d-none image-input" id="image-input" accept="image/*"  value="{{ old('image') }}"/>
                                        <label for="image-input" class="image-label">
                                        <div class="image-container">
                                            <img src="{{ asset( $project->images->filepath ) }}" alt="no_image" class="preview" id="image-preview" style="height: 120px;">
                                        </div>
                                        </label>

                                    </div>
                                </div>
                             

                                <div class="form-group mb-3 row pb-3">
                                    <label for="name"
                                        class="col-sm-3 text-end control-label col-form-label">Category</label>
                                    <div class="col-sm-9">
                                        <select name="category" class="form-control">
                                            <option value="" disabled>Select Category</option>
                                            @foreach ($trandingCategory as $category)
                                                <option value="{{ $category->id }}" {{ $project->category_id == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row pb-3">
                                    <label for="description"
                                        class="col-sm-3 text-end control-label col-form-label">About Resources</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" name="resouces_about"  class="form-control" placeholder=" Enter About Resources Here" style="min-height:100%">{{ $project->resouces_about }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row pb-3">
                                    <label for="description"
                                        class="col-sm-3 text-end control-label col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" name="description"  class="form-control" placeholder=" Enter Description Here" style="min-height:100%">{{ $project->description }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row pb-3">
                                    <label class="col-sm-3 text-end control-label col-form-label">Project Features</label>
                                    <div class="col-sm-9" id="FeaturesContainer">
                                        @if ($project->features)
                                       
                                            @foreach (json_decode($project->features) as $index => $key)
                                                <div class="row">
                                                    <div class="col-md-6 mb-2">
                                                        <input type="text" name="features_key[]" class="form-control" placeholder="Key" value="{{ $key->key }}">
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <input type="text" name="features_value[]" class="form-control" placeholder="Value" value="{{  $key->value  }}">
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="row">
                                                <div class="col-md-6 mb-2">
                                                    <input type="text" name="features_key[]" class="form-control" placeholder="Key">
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <input type="text" name="features_value[]" class="form-control" placeholder="Value">
                                                </div>
                                            </div>
                                        @endif
                                        <button type="button" class="btn btn-secondary btn-sm mt-2" id="addFeatures">Add Another</button>
                                    </div>                                    
                                </div>
                                
                                

                                <div class="form-group mb-3 row pb-3">
                                    <label class="col-sm-3 text-end control-label col-form-label">Parameters</label>
                                    <div class="col-sm-9" id="ParametersContainer">
                                        @if ($project->parameters)
                                            @foreach (json_decode($project->parameters) as $index => $keys)
                                                <div class="row">
                                                    <div class="col-md-6 mb-2">
                                                        <input type="text" name="parameters_key[]" class="form-control" placeholder="Key" value="{{ $keys->key }}">
                                                    </div>
                                                    <div class="col-md-5 mb-2">
                                                        <input type="text" name="parameters_value[]" class="form-control" placeholder="Value" value="{{ $keys->value }}">
                                                    </div>
                                                    <div class="col-md-1 mb-2">
                                                        <button type="button" class="btn btn-danger btn-sm delete-parameter">Delete</button>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="row">
                                                <div class="col-md-6 mb-2">
                                                    <input type="text" name="parameters_key[]" class="form-control" placeholder="Key">
                                                </div>
                                                <div class="col-md-5 mb-2">
                                                    <input type="text" name="parameters_value[]" class="form-control" placeholder="Value">
                                                </div>
                                                <div class="col-md-1 mb-2">
                                                    <button type="button" class="btn btn-danger btn-sm delete-parameter">X</button>
                                                </div>
                                            </div>
                                        @endif
                                        <button type="button" class="btn btn-secondary btn-sm mt-2" id="addParameters">Add Another</button>
                                    </div>                                    
                                </div> 
                                
           

                                
                                <div class="form-group mb-3 row pb-3">
                                    <label for="description"
                                        class="col-sm-3 text-end control-label col-form-label">Display Order</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="display_order" class="form-control"
                                            placeholder=" Enter Display Order Here" value="{{ $project->order }}" />
                                    </div>
                                </div>
                                <div class="form-group mb-3 row pb-3">
                                    <label for="description"
                                        class="col-sm-3 text-end control-label col-form-label">Display Status</label>
                                    <div class="col-sm-9">
                                        <select name="status" class="form-control">
                                            <option value="1" {{ $project->status == '1' ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ $project->status  == '0' ? 'selected' : '' }}>Deactive</option>
                                        </select>                                        
                                    </div>
                                </div>
                                <div class="form-group mb-3 row pb-3">
                                    <label for="description"
                                        class="col-sm-3 text-end control-label col-form-label">Meta Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="meta_title" class="form-control"
                                            placeholder=" Enter Meta Title Here" value="{{ $project->meta_title ?? '' }}"  />
                                    </div>
                                </div>
                                <div class="form-group mb-3 row pb-3">
                                    <label for="description"
                                        class="col-sm-3 text-end control-label col-form-label">Meta KayWord</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="meta_keywords" class="form-control"
                                            placeholder=" Enter Meta KeyWord Here"value="{{  $project->meta_keywords }}"/>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row pb-3">
                                    <label for="description"
                                        class="col-sm-3 text-end control-label col-form-label">Meta Description</label>
                                    <div class="col-sm-9">
                                        <Textarea name="meta_description"   placeholder=" Enter Meta Description Here" class="form-control" > {{  $project->meta_description ?? '' }}</Textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row pb-3">
                                    <label for="name"
                                        class="col-sm-3 text-end control-label col-form-label">Slug</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="slug" class="form-control"
                                            placeholder=" Enter Product Slug Here" value="{{ $project->slug ?? ''}}" />
                                    </div>
                                </div>

                                <div class="form-group mb-3 row pb-3">
                                    <label for="name"
                                        class="col-sm-3 text-end control-label col-form-label">Upload Pdf file</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="download_pdf" class="form-control"
                                            placeholder=" Enter Product Slug Here" value="{{old('download_pdf')}}" accept="pdf/*" />
                                            @if( $project->download_pdf != null)
                                            <a href="/{{$project->pdf->filepath}}" target="__blank">{{$project->pdf->file_original_name}} <i class="fa fa-upload" aria-hidden="true"></i></a>
                                            @endif
                                    </div>
                                </div>
                                <div class="form-group mb-3 row pb-3">
                                    <label for="name" class="col-sm-3 text-end control-label col-form-label">Resources Images</label>
                                    <div class="col-sm-9">
                                        <input type="file" id="imageInput" class="form-control" multiple name="resouces_images[]" >
                                        @if($project->resouces_images != null)
                                        <div id="resourceimagePreviews">
                                      
                                            @foreach( json_decode($project->resouces_images) as $list)
                                            <div class="image-container">
                                            
                                                <img src="{{ asset( App\Models\Upload::findorfail($list)->filepath ) }}" alt="no_image" class="preview p-2 m-2" id="image-preview" style="height: 120px;">
                                            </div>
                                            @endforeach
                                        </div>
                                        @endif
                                    </div>
                                </div>

                            </div>

                           
                            
                              
                            <div class="p-3 border-top">
                                <div class="form-group text-end">
                                    <button type="submit"
                                        class="btn btn-info rounded-pill px-4 waves-effect waves-light">Save</button>
                                    <a href="{{ route('admin.project.store') }}"
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
    // features 
    const addFeaturesButton = document.getElementById('addFeatures');
const featuresContainer = document.getElementById('FeaturesContainer');

addFeaturesButton.addEventListener('click', () => {
    const newRow = document.createElement('div');
    newRow.className = 'row';

    const newKeyInput = document.createElement('div');
    newKeyInput.className = 'col-md-6 mb-2';
    newKeyInput.innerHTML = '<input type="text" name="features_key[]" class="form-control" placeholder="Key">';

    const newValueInput = document.createElement('div');
    newValueInput.className = 'col-md-6 mb-2';
    newValueInput.innerHTML = '<input type="text" name="features_value[]" class="form-control" placeholder="Value">';

    newRow.appendChild(newKeyInput);
    newRow.appendChild(newValueInput);

    featuresContainer.insertBefore(newRow, addFeaturesButton);
});


// parameter 
const addParametersButton = document.getElementById('addParameters');
const parametersContainer = document.getElementById('ParametersContainer');

addParametersButton.addEventListener('click', () => {
    const newRow = document.createElement('div');
    newRow.className = 'row';

    const newKeyInput = document.createElement('div');
    newKeyInput.className = 'col-md-6 mb-2';
    newKeyInput.innerHTML = '<input type="text" name="parameters_key[]" class="form-control" placeholder="Key">';

    const newValueInput = document.createElement('div');
    newValueInput.className = 'col-md-5 mb-2';
    newValueInput.innerHTML = '<input type="text" name="parameters_value[]" class="form-control" placeholder="Value">';

    const deleteButton = document.createElement('div');
    deleteButton.className = 'col-md-1 mb-2';
    deleteButton.innerHTML = '<button type="button" class="btn btn-danger btn-sm delete-parameter">X</button>';

    newRow.appendChild(newKeyInput);
    newRow.appendChild(newValueInput);
    newRow.appendChild(deleteButton);

    parametersContainer.insertBefore(newRow, addParametersButton);

    // Attach event listener to the delete button
    deleteButton.querySelector('.delete-parameter').addEventListener('click', () => {
        parametersContainer.removeChild(newRow);
    });
});

// Attach event listeners to existing delete buttons
const deleteButtons = document.querySelectorAll('.delete-parameter');
deleteButtons.forEach((button) => {
    button.addEventListener('click', () => {
        const row = button.closest('.row');
        parametersContainer.removeChild(row);
    });
});


</script>

<script>
    const imageInput = document.getElementById('imageInput');
    const resourceimagePreviews = document.getElementById('resourceimagePreviews');
    const selectedFiles = []; // Array to store selected files

    imageInput.addEventListener('change', function () {
        for (let i = 0; i < this.files.length; i++) {
            const file = this.files[i];
            if (file.type.startsWith('image/')) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    const preview = document.createElement('div');
                    preview.classList.add('preview-image');
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    const deleteButton = document.createElement('button');
                    deleteButton.textContent = 'X';
                    deleteButton.classList.add('delete-button');
                    deleteButton.addEventListener('click', function () {
                        // Remove the corresponding file from the array
                        selectedFiles.splice(selectedFiles.indexOf(file), 1);
                        // Remove the preview
                        preview.remove();
                        // Update the input files
                        imageInput.files = new FileList(selectedFiles);
                    });
                    preview.appendChild(img);
                    preview.appendChild(deleteButton);
                    resourceimagePreviews.appendChild(preview);

                    // Add the file to the array
                    selectedFiles.push(file);
                };

                reader.readAsDataURL(file);
            }
        }
    });
</script>

</x-app-layout>
