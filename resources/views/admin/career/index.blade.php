@extends('admin.layout.main')

@section('admin-page-title', 'Career Openings')

@section('admin-main-section')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="page-title">Manage Career Openings</h1>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Job Openings</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="file-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0"><i class="fa fa-list"></i></th>
                                    <th class="wd-20p border-bottom-0">Job Title</th>
                                    <th class="wd-20p border-bottom-0">Description</th>
                                    <th class="wd-15p border-bottom-0">Location</th>
                                    <th class="wd-15p border-bottom-0">Type</th>
                                    <th class="wd-15p border-bottom-0">Status</th>
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobOpenings as $jobOpening)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($jobOpening->title, 20, '...') }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($jobOpening->description, 30, '...') }}</td>
                                        <td>{{ $jobOpening->location }}</td>
                                        <td>{{ ucfirst($jobOpening->type) }}</td>
                                        <td>
                                            <span
                                                class="badge badge-{{ $jobOpening->status == 'active' ? 'success' : 'danger' }}">
                                                {{ ucfirst($jobOpening->status) }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <x-buttons.action-pill-button iconClass="fa fa-eye" iconColor="secondary"
                                                href="{{ route('admin.careers.view', $jobOpening->id) }}" />

                                            @if (auth()->user()->user_role != 3)
                                                <x-buttons.action-pill-button
                                                    href="{{ route('admin.careers.edit', $jobOpening->id) }}"
                                                    iconClass="fa fa-pencil" iconColor="warning"
                                                    modalTarget="editCareerModal" />
                                            @endif

                                            @if (auth()->user()->user_role == 1)
                                                <x-buttons.action-pill-button
                                                    href="{{ route('admin.careers.destroy', $jobOpening->id) }}"
                                                    iconClass="fa fa-trash" iconColor="danger" />
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

    <!-- Add Modal - Right Offcanvas -->
    {{-- <x-modal.right-offcanvas title="Add New Job Opening" action="{{ route('admin.careers.store') }}" method="POST">
        <x-fields.input-field label="Job Title" name="title" />
        <x-fields.textarea-field label="Description" name="description" />
        <x-fields.input-field label="Location" name="location" />
        <x-fields.select-field label="Job Type" name="type" :options="['full-time', 'part-time', 'contract']" />
        <x-fields.select-field label="Status" name="status" :options="['active', 'blocked']" />
    </x-modal.right-offcanvas> --}}
    <!--/Right Offcanvas-->

@endsection

@section('custom-script')
    <!-- DATA TABLE JS -->
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
                var careerId = $(this).data('career-id');
                var status = $(this).prop('checked') ? 'active' : 'blocked';

                $.ajax({
                    url: "{{ route('admin.careers.status') }}",
                    method: "PUT",
                    data: {
                        id: careerId,
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
                            message: 'An error occurred while updating job opening status.'
                        });
                    }
                });
            });
        });
    </script>
@endsection
