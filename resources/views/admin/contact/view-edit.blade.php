@extends('admin.layout.main')

@section('admin-page-title', $isEdit ? 'Edit Contact' : 'View Contact')

@section('admin-main-section')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="page-title">{{ $isEdit ? 'Edit Contact' : 'View Contact' }}</h1>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $isEdit ? 'Edit Contact' : 'View Contact' }}</h3>
                </div>

                <div class="card-body">
                    @if ($isEdit)
                        <form method="POST" action="{{ route('admin.contacts.update', $contact->id) }}">
                            @method('PUT')
                            @csrf
                    @endif

                    <div class="form-row">
                        <!-- Input Fields Section -->
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label mt-0" for="name">Full Name</label>
                                    @if ($isEdit)
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ old('name', $contact->name) }}">
                                    @else
                                        <p class="form-control">{{ $contact->name }}</p>
                                    @endif
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label mt-0" for="email">Email Address</label>
                                    @if ($isEdit)
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{ old('email', $contact->email) }}">
                                    @else
                                        <p class="form-control">{{ $contact->email }}</p>
                                    @endif
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label class="form-label mt-0" for="subject">Subject</label>
                                    @if ($isEdit)
                                        <input type="text" class="form-control" id="subject" name="subject"
                                            value="{{ old('subject', $contact->subject) }}">
                                    @else
                                        <p class="form-control">{{ $contact->subject }}</p>
                                    @endif
                                    @error('subject')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label class="form-label mt-0" for="message">Message</label>
                                    @if ($isEdit)
                                        <textarea class="form-control" id="message" name="message" rows="5">{{ old('message', $contact->message) }}</textarea>
                                    @else
                                        <p class="form-control">{{ $contact->message }}</p>
                                    @endif
                                    @error('message')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                    </div>

                    @if ($isEdit)
                        <center><button class="btn btn-primary" type="submit">Update Contact</button></center>
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
