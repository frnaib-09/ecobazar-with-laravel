@extends('layouts.dashboundary')
@section('title')
Admin Profile
@endsection

@section('content')
<div class="container-fluid p-0">

    <div class="mb-3">
        <h1 class="h3 d-inline align-middle">Edit Profile</h1>
    </div>

    <div class="row">
        <!-- Left Sidebar: Profile Summary (Only Saved DB Image Here) -->
        <div class="col-md-5 col-xl-4">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Profile Overview</h5>
                </div>
                <div class="card-body text-center">
                    <!-- Saved DB Image (preview script ekhane ar render hobe na) -->
                    <img src="{{ getProfileImage() }}"
                        alt="{{ ucwords(auth()->user()->name) }}"
                        class="img-fluid rounded-circle mb-2"
                        width="128"
                        height="128"
                        style="object-fit: cover;" />

                    <h5 class="card-title mb-0">{{ ucwords(auth()->user()->name) }}</h5>
                    <div class="text-muted mb-2">@ {{ auth()->user()->username ?? 'admin' }}</div>
                    <span class="badge bg-primary">Admin</span>
                </div>

                <hr class="my-0" />

                <div class="card-body">
                    <h5 class="h6 card-title">Contact Info</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-1"><span data-feather="mail" class="feather-sm me-1"></span> {{ auth()->user()->email }}</li>
                        <li class="mb-1"><span data-feather="phone" class="feather-sm me-1"></span> {{ auth()->user()->phone }}</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Right Side: Forms Container -->
        <div class="col-md-7 col-xl-8">

            <!-- Card 1: Profile Information -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Update Profile Details</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}">
                                @error('name')
                                <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="{{ auth()->user()->username }}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ auth()->user()->phone }}">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label fw-semibold text-dark">Profile Image</label>

                            <div class="d-flex align-items-center gap-3">
                                <!-- Avatar Preview Thumbnail (Targeted by jQuery script) -->
                                <div class="position-relative">
                                    <img id="showImage"
                                        src="{{ getProfileImage() }}"
                                        alt="Profile Preview"
                                        class="rounded-circle img-thumbnail shadow-sm style-profile-preview"
                                        style="width: 72px; height: 72px; object-fit: cover; border: 2px solid #e9ecef;">
                                </div>

                                <!-- Custom Styled File Input -->
                                <div class="flex-grow-1">
                                    <input class="form-control form-control-md border-1 shadow-none custom-file-input"
                                        type="file"
                                        id="image"
                                        name="photo"
                                        accept="image/*">
                                    <div class="form-text text-muted mt-1" style="font-size: 0.8rem;">
                                        Allowed formats: JPG, PNG, WEBP. (Max: 2MB)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Password Manager -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title mb-0">Change Password</h5>
            </div>
            <div class="card-body">
                <form action="{{ ('admin.password.update') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="old_password" class="form-label">Current Password</label>
                        <input type="password" class="form-control @error('old_password') is-invalid @enderror" id="old_password" name="old_password" placeholder="Enter current password">
                        @error('old_password')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="new_password" class="form-label">New Password</label>
                        <input type="password" class="form-control @error('new_password') is-invalid @enderror" id="new_password" name="new_password" placeholder="Enter new password">
                        @error('new_password')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" placeholder="Confirm new password">
                    </div>

                    <button type="submit" class="btn btn-primary">Update Password</button>
                </form>
            </div>
        </div>
    </div>

</div>

<!-- Live Image Preview Script -->
@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                // Focused live preview strictly on input's adjacent image block
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    });
</script>
@endpush
@endsection
