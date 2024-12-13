@extends('admin.layout.main')

@section('admin-page-title', $isEdit ? 'Edit Job Opening' : 'View Job Opening')

@section('admin-main-section')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="page-title">{{ $isEdit ? 'Edit Job Opening' : 'View Job Opening' }}</h1>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $isEdit ? 'Edit Job Opening' : 'View Job Opening' }}</h3>
                </div>
                <div class="card-body">
                    @if ($isEdit)
                        <form method="POST" action="{{ route('admin.careers.update', $career->id) }}">
                            @method('PUT')
                            @csrf
                    @endif

                    <div class="form-row">
                        <!-- Job Title -->
                        <div class="col-xl-4 mb-3">
                            <label class="form-label mt-0" for="title">Job Title</label>
                            @if ($isEdit)
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ old('title', $career->title) }}">
                            @else
                                <p class="form-control">{{ $career->title }}</p>
                            @endif
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Location -->
                        <div class="col-xl-4 mb-3">
                            <label class="form-label mt-0" for="location">Location</label>
                            @if ($isEdit)
                                <input type="text" class="form-control" id="location" name="location"
                                    value="{{ old('location', $career->location) }}">
                            @else
                                <p class="form-control">{{ $career->location }}</p>
                            @endif
                            @error('location')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Job Type -->
                        <div class="col-xl-4 mb-3">
                            <label class="form-label mt-0" for="type">Job Type</label>
                            @if ($isEdit)
                                <select class="form-select form-control" id="type" name="type">
                                    <option value="full-time"
                                        {{ old('type', $career->type) == 'full-time' ? 'selected' : '' }}>
                                        Full-Time</option>
                                    <option value="part-time"
                                        {{ old('type', $career->type) == 'part-time' ? 'selected' : '' }}>
                                        Part-Time</option>
                                    <option value="contract"
                                        {{ old('type', $career->type) == 'contract' ? 'selected' : '' }}>
                                        Contract</option>
                                </select>
                            @else
                                <p class="form-control">{{ ucfirst($career->type) }}</p>
                            @endif
                            @error('type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Job Description -->
                        <div class="col-xl-12 mb-3">
                            <label class="form-label mt-0" for="description">Description</label>
                            @if ($isEdit)
                                <textarea class="form-control" id="description" name="description">{{ old('description', $career->description) }}</textarea>
                            @else
                                <p class="form-control">{{ $career->description }}</p>
                            @endif
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    @if ($isEdit)
                        <center><button class="btn btn-primary" type="submit">Update Job Opening</button></center>
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
    <!-- FORMVALIDATION JS -->
    <script src="{{ asset('assets/js/form-validation.js') }}"></script>
@endsection
