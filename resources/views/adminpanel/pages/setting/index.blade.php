<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-3">Setting</h5>
                            
                        </div>
                        @include('partials.errors')
                        <form method="POST" action="{{ route('setting.store') }}"
                            class="form-horizontal r-separator" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                
                                <div class="form-group mb-3 row pb-3">
                                    <label for="description"
                                        class="col-sm-3 text-end control-label col-form-label"> Promotional Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nav_header" class="form-control"
                                            placeholder=" Enter Promotional Title Here" value="{{ $setting->nav_header ?? '' }}" />
                                    </div>
                                </div>

                                <div class="form-group mb-3 row pb-3">
                                    <label for="description"
                                        class="col-sm-3 text-end control-label col-form-label">About Footer</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" name="about_footer"  class="form-control" placeholder=" Enter Footer Description Here" style="min-height:100%">{{ $setting->about_footer ?? ''}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row pb-3">
                                    <label for="description"
                                        class="col-sm-3 text-end control-label col-form-label">Facebook</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="facebook" class="form-control"
                                            placeholder=" Enter Facebook Link  Here" value="{{$setting->facebook ?? ''}}" />
                                    </div>
                                </div>
                                <div class="form-group mb-3 row pb-3">
                                    <label for="description"
                                        class="col-sm-3 text-end control-label col-form-label">Twiter</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="twiter" class="form-control"
                                            placeholder=" Enter Twiter Link  Here" value="{{$setting->twiter ?? ''}}" />
                                    </div>
                                </div>
                                  
                                <div class="form-group mb-3 row pb-3">
                                    <label for="description"
                                        class="col-sm-3 text-end control-label col-form-label">Linkedin</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="linkedin" class="form-control"
                                            placeholder=" Enter Twiter Link  Here" value="{{$setting->linkedin ?? ''}}" />
                                    </div>
                                </div>

                                <div class="form-group mb-3 row pb-3">
                                    <label for="description"
                                        class="col-sm-3 text-end control-label col-form-label">Copyright</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="copyright" class="form-control"
                                            placeholder=" Enter Copyright   Here" value="{{$setting->copyright ?? ''}}" />
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 border-top">
                                <div class="form-group text-end">
                                    <button type="submit"
                                        class="btn btn-info rounded-pill px-4 waves-effect waves-light">Save</button>
                                    <a href="{{ route('setting.create') }}"
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
