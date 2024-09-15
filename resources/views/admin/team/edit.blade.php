@extends('admin.layout.main')

@section('admin-page-title', $isEdit ? 'Edit Team' : 'View Team')

@section('admin-main-section')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="page-title">{{ $isEdit ? 'Edit Team' : 'View Team' }}</h1>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $isEdit ? 'Edit Team' : 'View Team' }}</h3>
                </div>

                <div class="card-body">
                    @if ($isEdit)
                        <form method="POST" action="{{ route('admin.teams.update', $team->id) }}"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                    @endif

                    <div class="form-row">
                        <!-- Image Section -->
                        <div class="col-xl-4 mb-3">
                            @if ($isEdit)
                                <label class="form-label mt-0" for="image">Image</label>
                                <input type="file" class="dropify" name="image" data-bs-height="180"
                                    data-default-file="{{ asset($team->image) }}" />
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            @else
                                <div class="text-center">
                                    <img class="img-responsive br-5" style="height: 180px;" src="{{ asset($team->image) }}"
                                        alt="Thumb-1">
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
                                            value="{{ old('name', $team->name) }}">
                                    @else
                                        <p class="form-control">{{ $team->name }}</p>
                                    @endif
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label mt-0" for="designation">Designation</label>
                                    @if ($isEdit)
                                        <input type="text" class="form-control" id="designation" name="designation"
                                            value="{{ old('designation', $team->designation) }}">
                                    @else
                                        <p class="form-control">{{ $team->designation }}</p>
                                    @endif
                                    @error('designation')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label mt-0" for="linkedin">LinkedIn</label>
                                    @if ($isEdit)
                                        <input type="text" class="form-control" id="linkedin" name="linkedin"
                                            value="{{ old('linkedin', $team->linkedin) }}">
                                    @else
                                        <p class="form-control">
                                            {{ $team->linkedin ? $team->linkedin : 'Empty' }}
                                        </p>
                                    @endif
                                    @error('linkedin')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label mt-0" for="twitter">Twitter</label>
                                    @if ($isEdit)
                                        <input type="text" class="form-control" id="twitter" name="twitter"
                                            value="{{ old('twitter', $team->twitter) }}">
                                    @else
                                        <p class="form-control">
                                            {{ $team->twitter ? $team->twitter : 'Empty' }}
                                        </p>
                                    @endif
                                    @error('twitter')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label mt-0" for="facebook">Facebook</label>
                                    @if ($isEdit)
                                        <input type="text" class="form-control" id="facebook" name="facebook"
                                            value="{{ old('facebook', $team->facebook) }}">
                                    @else
                                        <p class="form-control">
                                            {{ $team->facebook ? $team->facebook : 'Empty' }}
                                        </p>
                                    @endif
                                    @error('facebook')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label mt-0" for="instagram">Instagram</label>
                                    @if ($isEdit)
                                        <input type="text" class="form-control" id="instagram" name="instagram"
                                            value="{{ old('instagram', $team->instagram) }}">
                                    @else
                                        <p class="form-control">
                                            {{ $team->instagram ? $team->instagram : 'Empty' }}
                                        </p>
                                    @endif
                                    @error('instagram')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label mt-0" for="youtube">YouTube</label>
                                    @if ($isEdit)
                                        <input type="text" class="form-control" id="youtube" name="youtube"
                                            value="{{ old('youtube', $team->youtube) }}">
                                    @else
                                        <p class="form-control">
                                            {{ $team->youtube ? $team->youtube : 'Empty' }}
                                        </p>
                                    @endif
                                    @error('youtube')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                    </div>

                    @if ($isEdit)
                        <center><button class="btn btn-primary" type="submit">Update Team</button></center>
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
    <!-- FILE UPLOADES JS -->
    <script src="{{ asset('../assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('../assets/plugins/fileuploads/js/file-upload.js') }}"></script>

    <!-- INPUT MASK JS-->
    <script src="{{ asset('assets/plugins/input-mask/jquery.mask.min.js') }}"></script>

    <!-- FORMVALIDATION JS -->
    <script src="{{ asset('assets/js/form-validation.js') }}"></script>
@endsection
