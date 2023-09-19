<x-app-layout>
    <div class="container-fluid">

        <div class="container mt-5">

            <div class="row d-flex justify-content-center">

                <div class="col-md-7">

                    <div class="card p-3 py-4">

                        <div class="text-center">
                            <img src="https://i.imgur.com/bDLhJiP.jpg" width="100" class="rounded-circle">
                        </div>

                        <div class="text-center mt-3">
                            <span class="bg-secondary p-1 px-4 rounded text-white">
                                {{ Auth::guard('admin')->user()->role == 1 ? "Admin" : "SubAdmin" }}
                            </span>
                            <h5 class="mt-2 mb-0">{{ Auth::guard('admin')->user()->name }}</h5>
                            <span>{{ Auth::guard('admin')->user()->email }}</span>

                            <div class="buttons mt-3">
                                <!-- Change Password Button -->
                                <a href="#"  data-bs-toggle="modal" data-bs-target="#changePasswordModal" class="btn btn-outline-primary px-4">Change Password</a>
                                <!-- Create SubAdmin Button -->
                                <a href="#" data-bs-toggle="modal" data-bs-target="#createsubadmin" class="btn btn-outline-primary px-4">Create SubAdmin</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    {{-- change password  --}}
    <div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Add your change password form here -->
                    <!-- For example: -->
                    <form   id="change-password-form">
                        @csrf
                        <div class=" form-group">
                            <label for="current_password">Current Password</label>
                            <input type="password" name="current_password" id="" class="form-control">
                        </div>

                        <div class=" form-group">
                            <label for="new_password">New Password</label>
                            <input type="password" name="new_password" id="" class="form-control" >
                        </div>

                        <button type="submit" class="btn btn-primary m-2">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


     {{-- Create subAmdin --}}

     <div class="modal fade" id="createsubadmin" tabindex="-1" aria-labelledby="createsubadminModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createsubadminModalLabel">Create New SubAdmin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Add your create subadmin form here -->
                    <form id="create-new-subadmin-form">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
    

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
    
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
    
                        <button type="submit" class="btn btn-primary m-2">Create SubAdmin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#change-password-form').submit(function (e) {
                e.preventDefault();
    
                // Serialize the form data
                var formData = $(this).serialize();
                $.ajax({
                    type: 'POST',
                    url: '{{ route('admin.changePassword') }}',
                    data: formData,
                    success: function (response) {
                    if (response.success) {
                        $('#changePasswordModal').modal('hide');
                        $('#change-password-form')[0].reset();
                        alert('Password changed successfully.');
                    } else {
                        console.log('Password change failed: ' + response.message);
                       
                        alert('Password change failed: ' + response.message);
                    }
                },
                error: function (xhr, status, error) {
                  
                    console.error('An error occurred while changing the password: ' + error.message);
                  
                    alert('An error occurred while changing the password. Please try again later.');
                }
                });
            });
        });
    </script>

<script>
    $(document).ready(function () {
        $('#create-new-subadmin-form').submit(function (e) {
            e.preventDefault();

            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.createSubAdmin') }}',
                data: formData,
                success: function (response) {
                    if (response.success) {
                        $('#createsubadmin').modal('hide');
                        $('#create-new-subadmin-form')[0].reset();
                        alert('SubAdmin created successfully.');
                    } else {
                        console.log('SubAdmin creation failed.');
                        alert('SubAdmin creation failed.');
                    }
                },
                error: function (xhr, status, error) {
                    console.error('An error occurred while creating a SubAdmin: ' + error.message);
                    alert('An error occurred while creating a SubAdmin. Please try again later.');
                }
            });
        });
    });
</script>


    
    
    
</x-app-layout>
