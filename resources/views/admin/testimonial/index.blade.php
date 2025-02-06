@extends('admin.layout.main')

@section('admin-page-title', 'Testimonials')

@section('admin-main-section')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="page-title">Manage Testimonials</h1>
            @if (auth()->user()->user_role == 1)
                <button class="btn btn-primary off-canvas" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Add Testimonial</button>
            @endif
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Testimonials</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottomm" id="file-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0"><i class="fa fa-list"></i></th>
                                    <th class="wd-15p border-bottom-0">Avatar</th>
                                    <th class="wd-20p border-bottom-0">Name</th>
                                    <th class="wd-20p border-bottom-0">Title</th>
                                    <th class="wd-30p border-bottom-0">Description</th>
                                    @if (auth()->user()->user_role == 1)
                                        <th class="wd-25p border-bottom-0">Status</th>
                                    @endif
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonials as $testimonial)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="align-middle text-center"><img alt="avatar"
                                                class="avatar avatar-sm br-7" src="{{ asset($testimonial->avatar) }}"></td>
                                        <td>{{ $testimonial->name }}</td>
                                        <td>{{ $testimonial->title }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($testimonial->description, 30, '...') }}</td>
                                        @if (auth()->user()->user_role == 1)
                                            <td class="text-center">
                                                <label class="custom-switch form-switch mb-0">
                                                    <input type="checkbox" name="custom-switch-radio"
                                                        class="custom-switch-input"
                                                        data-testimonial-id="{{ $testimonial->id }}"
                                                        {{ $testimonial->status == 'active' ? 'checked' : '' }}>
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </td>
                                        @endif
                                        <td class="text-center">
                                            <x-buttons.action-pill-button iconClass="fa fa-eye" iconColor="secondary"
                                                href="{{ route('admin.testimonials.view', $testimonial->id) }}" />

                                            @if (auth()->user()->user_role != 3)
                                                <x-buttons.action-pill-button
                                                    href="{{ route('admin.testimonials.edit', $testimonial->id) }}"
                                                    iconClass="fa fa-pencil" iconColor="warning"
                                                    modalTarget="editUserModal" />
                                            @endif
                                            @if (auth()->user()->user_role == 1)
                                                <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <x-buttons.action-pill-button type="submit" iconClass="fa fa-trash"
                                                        iconColor="danger" />
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

    <!--Add Modal - Right Offcanvas-->
    <x-modal.right-offcanvas title="Add New Testimonial" action="{{ route('admin.testimonials.store') }}" method="POST">

        <div class="col-lg-12 mb-3">
            <label class="form-label mt-0" for="avatar">Avatar</label>
            <input type="file" class="dropify" name="avatar" data-bs-height="180" />
            @error('avatar')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <x-fields.input-field label="Full Name" name="name" />
        <x-fields.input-field label="Title" name="title" />
        <x-fields.input-field label="Description" name="description" />

    </x-modal.right-offcanvas>
    <!--/Right Offcanvas-->

@endsection

@section('custom-script')
    <!-- DATA TABLE JS-->
    <script src="{{ asset('../assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('../assets/js/table-data.js') }}"></script>

    <!-- FILE UPLOADES JS -->
    <script src="{{ asset('../assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('../assets/plugins/fileuploads/js/file-upload.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('input[name="custom-switch-radio"]').change(function() {
                var testimonialId = $(this).data('testimonial-id');
                var status = $(this).prop('checked') ? 'active' : 'blocked';

                $.ajax({
                    url: "{{ route('admin.testimonials.status') }}",
                    method: "PUT",
                    data: {
                        id: testimonialId,
                        status: status,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response.warning) {
                            $.growl.warning1({
                                title: 'Warning',
                                message: response.warning
                            });
                        } else {
                            $.growl.notice1({
                                title: 'Success',
                                message: response.message
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        $.growl.error1({
                            title: 'Error',
                            message: 'An error occurred while updating testimonial status.'
                        });
                    }
                });
            });
        });
    </script>
@endsection
