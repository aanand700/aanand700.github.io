@extends('layouts.main')

<?php
$states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'];

?>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Please Complete Your Profile</h4>
                    </div>
                    <div class="card-body">
                        <form id="user-details-form">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input class="form-control" type="text" name="address" required placeholder="Address">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <input class="form-control" type="text" name="city" required placeholder="City">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">State</label>
                                <select class="form-control" name="state">
                                    <option value="">Select State</option>
                                    @foreach ($states as $data)
                                        <option value="{{ $data }}">{{ $data }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">ZIP Code</label>
                                <input class="form-control" type="number" name="zip_code" required placeholder="ZIP Code">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Utility Name</label>
                                <input class="form-control" type="text" name="utility_name" required
                                    placeholder="Utility Name">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Utility Account Number</label>
                                <input class="form-control" type="number" name="utility_acc_number" required
                                    placeholder="Utility Account Number">
                            </div>

                            <div class="mb-3 text-center">
                                <button class="btn btn-success" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    <script>
        $(document).ready(function() {
            $('#user-details-form').on('submit', function(event) {
                event.preventDefault();

                // Show loading alert
                Swal.fire({
                    title: 'Processing...',
                    text: 'Please wait while we process your data.',
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                $.ajax({
                    url: '/submit-user-details',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        Swal.fire({
                            title: 'Success!',
                            text: 'Your details have been submitted successfully.',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            window.location.href =
                                '/'; // Redirect to dashboard after submission
                        });
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'There was an issue with your submission. Please try again.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });
        });
    </script>
@endpush
