@extends('admin.layout.main')

@section('admin-page-title', $isEdit ? 'Edit Service' : 'Service Details')

@section('admin-main-section')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="page-title">{{ $isEdit ? 'Edit Service' : $service->title }}</h1>
            <div>
                <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
                    <i class="fa fa-arrow-left me-2"></i>Back to Services
                </a>
                @if(!$isEdit && auth()->user()->user_role != 3)
                    <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-primary ms-2">
                        <i class="fa fa-edit me-2"></i>Edit Service
                    </a>
                @endif
            </div>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <!-- View Mode Content -->
                    <div id="view-mode" class="{{ $isEdit ? 'd-none' : '' }}">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="d-flex align-items-center mb-4">
                                    <h3 class="me-3">{{ $service->title }}</h3>
                                    <span class="badge badge-{{ $service->status === 'active' ? 'success' : 'danger' }}">
                                        {{ ucfirst($service->status) }}
                                    </span>
                                </div>
                                
                                <div class="mb-4">
                                    <h5 class="fw-semibold">Description</h5>
                                    <p>{{ $service->description }}</p>
                                </div>
                                
                                <div class="mb-4">
                                    <h5 class="fw-semibold">Icon</h5>
                                    <div>
                                        <i class="{{ $service->icon }} fa-2x"></i>
                                        <span class="ms-2">{{ $service->icon }}</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="text-center">
                                    <h5 class="fw-semibold mb-3">Service Image</h5>
                                    <img src="{{ Storage::url($service->image) }}" alt="{{ $service->title }}" 
                                        class="img-fluid rounded shadow-sm" style="max-height: 300px;">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="text-muted mb-0">Created: {{ $service->created_at->format('M d, Y h:i A') }}</p>
                                        <p class="text-muted">Last Updated: {{ $service->updated_at->format('M d, Y h:i A') }}</p>
                                    </div>
                                    
                                    @if(auth()->user()->user_role == 1)
                                        <div>
                                            <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" 
                                                onsubmit="return confirm('Are you sure you want to delete this service?')">
                                                @csrf
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-trash me-2"></i>Delete Service
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Edit Mode Content -->
                    <div id="edit-mode" class="{{ $isEdit ? '' : 'd-none' }}">
                        <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="title">Title</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                            id="title" name="title" value="{{ old('title', $service->title) }}" required>
                                        @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="description">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" 
                                            id="description" name="description" rows="5" required>{{ old('description', $service->description) }}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="icon">Icon (FontAwesome Class)</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="{{ $service->icon }}"></i></span>
                                            <input type="text" class="form-control @error('icon') is-invalid @enderror" 
                                                id="icon" name="icon" value="{{ old('icon', $service->icon) }}" 
                                                placeholder="fas fa-cog" required>
                                        </div>
                                        <small class="form-text text-muted">Enter a FontAwesome icon class, e.g., "fas fa-cog"</small>
                                        @error('icon')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    @if(auth()->user()->user_role == 1)
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="status">Status</label>
                                            <select class="form-control @error('status') is-invalid @enderror" 
                                                id="status" name="status">
                                                <option value="active" {{ old('status', $service->status) === 'active' ? 'selected' : '' }}>Active</option>
                                                <option value="blocked" {{ old('status', $service->status) === 'blocked' ? 'selected' : '' }}>Blocked</option>
                                            </select>
                                            @error('status')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    @endif
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="image">Service Image</label>
                                        <input type="file" class="dropify" name="image" 
                                            data-default-file="{{ Storage::url($service->image) }}" data-bs-height="180" />
                                        <small class="form-text text-muted">Leave empty to keep the current image</small>
                                        @error('image')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-save me-2"></i>Save Changes
                                </button>
                                <button type="button" class="btn btn-secondary ms-2" id="cancel-edit-btn">
                                    <i class="fa fa-times me-2"></i>Cancel
                                </button>
                            </div>
                        </form>
                    </div>
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
    
    <script>
        $(document).ready(function() {
            // Initialize dropify
            $('.dropify').dropify();
            
            // Toggle between view and edit modes only needed when starting in view mode
            @if(!$isEdit)
            $('#edit-toggle-btn').click(function() {
                $('#view-mode').addClass('d-none');
                $('#edit-mode').removeClass('d-none');
            });
            @endif
            
            $('#cancel-edit-btn').click(function() {
                @if($isEdit)
                // When in edit mode, go back to view mode page
                window.location.href = "{{ route('admin.services.view', $service->id) }}";
                @else
                // When toggled to edit, just switch back to view
                $('#edit-mode').addClass('d-none');
                $('#view-mode').removeClass('d-none');
                @endif
            });
        });
    </script>
@endsection 