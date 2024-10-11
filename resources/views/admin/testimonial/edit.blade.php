@extends('admin.layout.main')

@section('admin-page-title', $isEdit ? 'Edit Testimonial' : 'View Testimonial')

@section('admin-main-section')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="page-title">{{ $isEdit ? 'Edit Testimonial' : 'View Testimonial' }}</h1>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $isEdit ? 'Edit Testimonial' : 'View Testimonial' }}</h3>
                </div>

                <div class="card-body">
                    @if ($isEdit)
                        <form method="POST" action="{{ route('admin.testimonials.update', $testimonial->id) }}"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                    @endif

                    <div class="form-row">
                        <!-- Image Section -->
                        <div class="col-xl-4 mb-3">
                            @if ($isEdit)
                                <label class="form-label mt-0" for="image">Image</label>
                                <input type="file" class="dropify" name="avatar" data-bs-height="180"
                                    data-default-file="{{ asset($testimonial->avatar) }}" />
                                @error('avatar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            @else
                                <div class="text-center">
                                    <img class="img-responsive br-5" style="height: 180px;"
                                        src="{{ asset($testimonial->avatar) }}" alt="Testimonial Image">
                                </div>
                            @endif
                        </div>

                        <!-- Input Fields Section -->
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label mt-0" for="name">Full Name</label>
                                    @if ($isEdit)
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ old('name', $testimonial->name) }}">
                                    @else
                                        <p class="form-control">{{ $testimonial->name }}</p>
                                    @endif
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label mt-0" for="title">Title</label>
                                    @if ($isEdit)
                                        <input type="text" class="form-control" id="title" name="title"
                                            value="{{ old('title', $testimonial->title) }}">
                                    @else
                                        <p class="form-control">{{ $testimonial->title }}</p>
                                    @endif
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label mt-0" for="description">Description</label>
                                    @if ($isEdit)
                                        <input type="text" class="form-control" id="description" name="description"
                                            value="{{ old('description', $testimonial->description) }}">
                                    @else
                                        <p class="form-control">{{ $testimonial->description }}</p>
                                    @endif
                                    @error('description')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($isEdit)
                        <center><button class="btn btn-primary" type="submit">Update Testimonial</button></center>
                    @endif

                    @if ($isEdit)
                        </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

@endsection

@section('custom-script')
    <!-- FILE UPLOAD JS -->
    <script src="{{ asset('../assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('../assets/plugins/fileuploads/js/file-upload.js') }}"></script>

    <!-- INPUT MASK JS -->
    <script src="{{ asset('assets/plugins/input-mask/jquery.mask.min.js') }}"></script>

    <!-- FORM VALIDATION JS -->
    <script src="{{ asset('assets/js/form-validation.js') }}"></script>
@endsection
