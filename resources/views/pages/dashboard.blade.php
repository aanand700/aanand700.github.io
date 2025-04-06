<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Available Rebate Programs</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="students.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Available Rebate Programs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card comman-shadow">
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title student-info">Available Rebate Programs <span><a
                                            href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="form-group local-forms">
                                    <label>Zip Code <span class="login-danger">*</span></label>
                                    <input class="form-control" type="number" placeholder="Enter ZIP Code">
                                </div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="form-group local-forms">
                                    <label>Building Type <span class="login-danger">*</span></label>
                                    <select class="form-control select">
                                        <option>Select Building Type</option>
                                        <option>Industrial</option>
                                        <option>Commercial</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="student-submit">
                                    <button type="submit" class="btn btn-primary custom-btn-submit">Search
                                        Programs</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-12 col-md-6 ">
            <div class="card flex-fill bg-white">
                <div class="card-header">
                    <h5 class="card-title mb-0">Existing Building Commissioning</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Optimize your building's performance through comprehensive Commissioning
                        services</p>
                    <a href="javascript:void(0)" class="btn btn-primary custom-btn-submit" data-bs-toggle="modal"
                        data-bs-target="#EBCModal">Apply</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 ">
            <div class="card flex-fill bg-white">
                <div class="card-header">
                    <h5 class="card-title mb-0">Deep Retrofit Pay 4 Performance</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Get rewarded for implementing deep energy retrofits in your building.</p>
                    <a href="javascript:void(0)" class="btn btn-primary custom-btn-submit" data-bs-toggle="modal"
                        data-bs-target="#DRPPModal">Apply</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 ">
            <div class="card flex-fill bg-white">
                <div class="card-header">
                    <h5 class="card-title mb-0">Simple Business Rebate</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Quick rebates for simple energy efficiency upgrades.</p>
                    <a href="javascript:void(0)" class="btn btn-primary custom-btn-submit" data-bs-toggle="modal"
                        data-bs-target="#SBRModal">Apply</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 ">
            <div class="card flex-fill bg-white">
                <div class="card-header">
                    <h5 class="card-title mb-0">Project Development Initiative</h5>
                </div>

                <div class="card-body">
                    <p class="card-text">Get assistance in developing and implementing energy efficiency projects.</p>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                            data-bs-toggle="modal" data-bs-target="#PDIModal">
                        <label class="form-check-label" for="flexCheckDefault">
                            Allow AI agent to handle communication on your behalf
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- EBC Modal -->
<x-modal-component modalID="EBCModal" modalLabel="Apply  Existing Building Commissioning">
    <form method="POST" action="{{ route('store.ebc') }}" enctype="multipart/form-data" id="storeEBCModal">
        @csrf

        <x-input-component type="text" name="first_name" value="{{ auth()->user()->name ?? '' }}"
            label="Customer First Name"></x-input-component>

        <x-input-component type="text" name="last_name" value="{{ auth()->user()->name ?? '' }}"
            label="Customer Last Name"></x-input-component>

        <x-input-component type="text" name="address" value="{{ auth()->user()->userDetails->address ?? '' }}"
            label="Address"></x-input-component>

        <x-input-component type="text" name="city" value="{{ auth()->user()->userDetails->city ?? '' }}"
            label="City"></x-input-component>

        <x-select-component name="state" label="State" :value="['Alabama', 'Alaska', 'Arizona', 'Arkansas']"></x-select-component>

        <x-input-component type="number" name="zip_code" value="{{ auth()->user()->userDetails->zip_code ?? '' }}"
            label="Zip Code"></x-input-component>

        <x-input-component type="email" name="email" value="{{ auth()->user()->email ?? '' }}"
            label="Email"></x-input-component>

        <x-input-component type="text" name="baseline_kwh" value=""
            label="Baseline kWh consumption per year"></x-input-component>

        <x-select-component name="program_option" label="Program Option Choice"
            :value="['Year 1 (out of 3)', 'Year 1 (out of 5)']"></x-select-component>

        <x-input-component type="text" name="scl_meter" value=""
            label="SCL Meter Number"></x-input-component>

        <x-input-component type="file" name="purchase_invoices" value=""
            label="Purchase invoices"></x-input-component>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</x-modal-component>

<!-- DRPP Modal -->
<x-modal-component modalID="DRPPModal" modalLabel="Apply Deep Retrofit Pay 4 Performance">
    <form method="POST" action="{{ route('store.drpp') }}" enctype="multipart/form-data" id="storeDRPPModal">
        @csrf
        <x-select-component name="program_type" label="Program Type" :value="['Commercial', 'Industrial']"></x-select-component>

        <x-input-component type="text" name="contact_first_name" value="{{ auth()->user()->name ?? '' }}"
            label="Project Contact First Name"></x-input-component>

        <x-input-component type="text" name="contact_last_name" value="{{ auth()->user()->name ?? '' }}"
            label="Project Contact Last Name"></x-input-component>

        <x-input-component type="text" name="address" value="{{ auth()->user()->userDetails->address ?? '' }}"
            label="Address"></x-input-component>

        <x-input-component type="text" name="city" value="{{ auth()->user()->userDetails->city ?? '' }}"
            label="City"></x-input-component>

        <x-select-component name="state" label="State" :value="$states"></x-select-component>

        <x-input-component type="number" name="zip_code" value="{{ auth()->user()->userDetails->zip_code ?? '' }}"
            label="Zip Code"></x-input-component>

        <x-input-component type="text" name="scl_account"
            value="{{ auth()->user()->userDetails->utility_acc_number ?? '' }}"
            label="SCL Account No."></x-input-component>

        <x-input-component type="email" name="contact_email" value="{{ auth()->user()->email ?? '' }}"
            label="Project Contact Email"></x-input-component>

        <x-input-component type="number" name="baseline_kwh" value=""
            label="Baseline kWh consumption per year"></x-input-component>

        <x-input-component type="text" name="contractor_company" value=""
            label="Contractor Company"></x-input-component>

        <x-input-component type="text" name="contractor_name" value=""
            label="Contractor Name"></x-input-component>

        <x-input-component type="email" name="contractor_email" value=""
            label="Contractor Email"></x-input-component>

        <x-input-component type="text" name="sdci_permit" value=""
            label="SDCI Permit Number"></x-input-component>

        <x-input-component type="file" name="equipment_pictures" value=""
            label="Equipment Pictures"></x-input-component>

        <x-input-component type="file" name="purchase_invoices" value=""
            label="Purchase Invoices"></x-input-component>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</x-modal-component>


<!-- SBR Modal -->
<x-modal-component modalID="SBRModal" modalLabel="Apply Simple Business Rebate">
    <form method="POST" action="{{ route('store.sbr') }}" enctype="multipart/form-data" id="storeSBRModal">
        @csrf
        <x-input-component type="text" name="facility_name" value=""
            label="Facility Name"></x-input-component>

        <x-input-component type="text" name="installation_street" value=""
            label="Installation Street"></x-input-component>

        <x-input-component type="text" name="installation_city"
            value="{{ auth()->user()->userDetails->city ?? '' }}" label="Installation City"></x-input-component>

        <x-input-component type="text" name="installation_state"
            value="{{ auth()->user()->userDetails->state ?? '' }}" label="Installation State"></x-input-component>

        <x-input-component type="text" name="installation_zip_code"
            value="{{ auth()->user()->userDetails->zip_code ?? '' }}"
            label="Installation ZIP Code"></x-input-component>

        <x-select-component name="building_type" label="Building Type" :value="['Bank', 'Data Center', 'Religious Worship', 'Grocery', 'Laboratory', 'Library']"></x-select-component>

        <x-select-component name="is_new_building" label="Is this a new construction project?"
            :value="['Yes', 'No']"></x-select-component>

        <x-input-component type="text" name="first_name" value="{{ auth()->user()->name ?? '' }}"
            label="Customer First Name"></x-input-component>

        <x-input-component type="text" name="last_name" value="{{ auth()->user()->name ?? '' }}"
            label="Customer Last Name"></x-input-component>

        <x-input-component type="email" name="customer_email" value="{{ auth()->user()->email ?? '' }}"
            label="Customer Email"></x-input-component>

        <x-input-component type="number" name="phone_number" value="{{ auth()->user()->phone_number ?? '' }}"
            label="Phone Number"></x-input-component>

        <x-input-component type="number" name="account_number"
            value="{{ auth()->user()->userDetails->utility_acc_number ?? '' }}"
            label="Account Number"></x-input-component>

        <x-input-component type="file" name="picture_of_the_building" value=""
            label="Picture of the Building"></x-input-component>

        <x-input-component type="file" name="purchase_invoices" value=""
            label="Purchase Invoices"></x-input-component>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</x-modal-component>


<!-- PDI Modal -->
<x-modal-component modalID="PDIModal" modalLabel="Apply Project Development Initiative">
    <form method="POST" action="{{ route('store.sbr') }}" enctype="multipart/form-data" id="storePDIModal">
        @csrf
        <x-input-component type="text" name="program_name" value=""
            label="Program Name"></x-input-component>

        <x-input-component type="text" name="phone_number" value="{{ auth()->user()->phone_number ?? '' }}"
            label="Phone Number"></x-input-component>

        <x-input-component type="text" name="email" value="{{ auth()->user()->email ?? '' }}"
            label="Email"></x-input-component>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</x-modal-component>

@push('js')
    <script>
        function handleFormSubmission(formID, url, successMessage, errorMessage) {
            $(formID).on('submit', function(e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Submitting...',
                    text: 'Please wait while we process your request.',
                    didOpen: () => {
                        Swal.showLoading();
                    },
                    allowOutsideClick: false
                });

                var formData = new FormData(this);

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        Swal.close();
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: successMessage,
                        }).then((result) => {
                            window.location.href = '/';
                            $(formID)[0].reset();
                        });
                    },
                    error: function(xhr, status, error) {
                        Swal.close();
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: errorMessage,
                        });
                    }
                });
            });
        }

        // Call the handleFormSubmission function for each modal
        $(document).ready(function() {
            handleFormSubmission('#storeEBCModal', '{{ route('store.ebc') }}',
                'Your information has been successfully submitted.', 'Something went wrong. Please try again.');

            handleFormSubmission('#storeDRPPModal', '{{ route('store.drpp') }}',
                'Your Deep Retrofit Pay 4 Performance application has been submitted.',
                'Something went wrong. Please try again.');

            handleFormSubmission('#storeSBRModal', '{{ route('store.sbr') }}',
                'Your Simple Business Rebate application has been submitted.',
                'Something went wrong. Please try again.');

            handleFormSubmission('#storePDIModal', '{{ route('store.pdi') }}',
                'Your Project Development Initiative application has been submitted.',
                'Something went wrong. Please try again.');
        });
    </script>
@endpush

@push('css')
    <style>
        .custom-btn-submit {
            background-color: #4aa44c !important;
            border-color: #4aa44c !important;
        }


        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
@endpush
