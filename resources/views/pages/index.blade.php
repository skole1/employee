@extends('layouts.app')

@section('title')
    Home | IdeasTech Solution Inc.
@endsection
@section('inner-title')
    Add Employee <small class="text-sm"><a href="#"><span class="badge bg-primary">+</span> Employee Master</a></small> 
@endsection
@section('content')
        @if(session()->has('status'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ session()->get('status') }}</strong>
            </div>
        @endif
    <form action="{{ route('employee.add') }}" method="POST" id="employeeForm">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h3 class="card-title font-weight-bold">Add Employee</h3>
            
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                    </div>
                    </div>
                    <div class="card-body">
                        {{-- Basic Detals --}}
                        <div class="card">
                            <div class="card-header bg-light font-weight-bold">Basic Information</div>
                            <div class="card-body">
                                {{-- Row Start --}}
                                <div class="row mt-2">
                                    <div class="col-4">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle"
                                                 src="{{ asset('dist/img/user4-128x128.jpg') ? asset('dist/img/user4-128x128.jpg'): asset('dist/img/user4-128x128.jpg')  }}"
                                                 alt="User profile picture"
                                                 name="image_upload"
                                                 id="image_upload"
                                                 onchange="previewFile(this)"
                                                 >
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <input type="file" name="file" id="file" class="text-center form-control form-control-sm mt-4">
                                    </div>
                                    <div class="col-5">
                                        <a class="btn btn-outline-primary btn-sm text-dark text-center mt-4 mb-3" onclick="previewFile(this)">Upload Passport</a>
                                    </div>
                                </div>
                                {{-- Rowend --}}
                                {{-- Row Start --}}
                                <div class="row mt-2">
                                    <div class="col-3">
                                      <label for="">PSN No.</label>
                                      <input type="text" name="psn_no" id="psn_no" class="form-control form-control-sm" placeholder="PSN No.">
                                    </div>
                                    <div class="col-4">
                                      <label for="">National ID</label>
                                      <input type="text" name="nin_no" id="nin_no" class="form-control form-control-sm" placeholder="National ID">
                                    </div>
                                    <div class="col-5">
                                      <label for="">Grade Level</label>
                                        <select class="select2bs4 form-control form-control-sm" name="grade_level" id="grade_level" data-placeholder="Grade Level"
                                                style="width: 100%;">
                                            <option>Select</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- Rowend --}}
                                {{-- Row Start --}}
                                <div class="row mt-2">
                                    <div class="col-3">
                                        <label for="">MDA</label>
                                        <select class="select2bs4 form-control form-control-sm" name="mda" id="mda" data-placeholder="Select a State"
                                                style="width: 100%;">
                                            <option>Select</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                      <label for="">Date of birth</label>
                                      <input type="date" class="form-control form-control-sm" name="dob" id="dob" placeholder="Date of birth">
                                    </div>
                                    <div class="col-5">
                                        <label for="">Sex</label>
                                        <select class="select2bs4 form-control form-control-sm" name="sex" id="sex" data-placeholder="Select a State"
                                                style="width: 100%;">
                                            <option>Select</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- Rowend --}}
                                {{-- Row Start --}}
                                <div class="row mt-2">
                                    <div class="col-3">
                                        <label for="">Marital Status</label>
                                        <select class="select2bs4 form-control form-control-sm" name="marital_status" id="marital_status" data-placeholder="Select a State"
                                                style="width: 100%;">
                                            <option>Select</option>
                                            <option>Married</option>
                                            <option>Single</option>
                                            <option>Divorce</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                      <label for="">Phone Number</label>
                                      <input type="phone" class="form-control form-control-sm" name="phone_number" id="phone_number" placeholder="Phone Number">
                                    </div>
                                    <div class="col-5">
                                      <label for="">Email</label>
                                      <input type="email" name="email" id="email" class="form-control form-control-sm" placeholder="Email">
                                    </div>
                                </div>
                                {{-- Rowend --}}
                                {{-- Row Start --}}
                                <div class="row mt-2">
                                    <div class="col-3">
                                        <label for="">State</label>
                                        <select class="select2bs4 form-control form-control-sm" name="state" id="state" data-dependent="lga">
                                                style="width: 100%;">
                                            <option>Select</option>
                                            @foreach ($states as $state )
                                                <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label for="">LGA</label>
                                        <select class="select2bs4 form-control form-control-sm" name="lga" id="lga" data-placeholder="Select a State">
                                                style="width: 100%;">
                                            <option>Select</option>
                                        </select>
                                      
                                    </div>
                                    <div class="col-5">
                                        <label for="">Ward</label>
                                      <input type="text" name="ward" id="ward" class="form-control form-control-sm" placeholder="Ward">
                                      
                                    </div>
                                </div>
                                {{-- Rowend --}}
                                {{-- Row Start --}}
                                <div class="row mt-2">
                                    <div class="col-md-5">
                                        <label for="">Home Town</label>
                                        <input type="text" name="home_town" id="home_town" class="form-control form-control-sm" placeholder="Home Town">
                                    </div>
                                    <div class="col-7">
                                        <label for="">Residential Address</label>
                                        <textarea name="residential_address" id="residential_address" cols="3" rows="2" class="form-control form-control-sm" placeholder="Residential Address"></textarea>

                                    </div> 
                                    
                                </div>
                                {{-- Rowend --}}
                            </div>
                        </div>
                        {{-- Next of Kin --}}
                        <div class="card">
                            <div class="card-header bg-light font-weight-bold">Next of Kin Details</div>
                            <div class="card-body">
                                {{-- Row Start --}}
                                <div class="row mt-2">
                                    <div class="col-3">
                                      <label for="">Name of Next of Kin</label>
                                      <input type="text" name="next_kin_name" id="next_kin_name" class="form-control form-control-sm" placeholder="Name of Next of Kin">
                                    </div>
                                    <div class="col-4">
                                      <label for="">phone Number of Next of Kin</label>
                                      <input type="text"name="next_kin_phone" id="next_kin_phone" class="form-control form-control-sm" placeholder="phone Number of Next of Kin">
                                    </div>
                                    <div class="col-5">
                                        <label for="">Address of Next of Kin</label>
                                        <textarea name="next_kin_address" id="next_kin_address" cols="3" rows="2" class="form-control form-control-sm" placeholder="Address of Next of Kin"></textarea>
                                    </div>
                                </div>
                                {{-- Rowend --}}
                            </div>
                        </div>
                        {{-- Records of Employment --}}
                        <div class="card">
                            <div class="card-header bg-light font-weight-bold">Record of Employment</div>
                            <div class="card-body">
                                {{-- Row Start --}}
                                <div class="row mt-2">
                                    <div class="col-3">
                                    <label for="">Department/Directorate</label>
                                    <input type="text" name="department" id="department" class="form-control form-control-sm" placeholder="Department/Directorate">
                                    </div>
                                    <div class="col-4">
                                    <label for="">Unit</label>
                                    <input type="text" name="unit" id="unit" class="form-control form-control-sm" placeholder="Unit">
                                    </div>
                                    <div class="col-5">
                                        <label for="">Section</label>
                                        <input type="text" name="section" id="section" class="form-control form-control-sm" placeholder="Section">
                                    </div>
                                </div>
                                {{-- Rowend --}}
                                {{-- Row Start --}}
                                <div class="row mt-2">
                                    <div class="col-3">
                                        <label for="">Date of First Appointment</label>
                                        <input type="date" name="dofa" id="dofa" class="form-control form-control-sm" placeholder="Date of First Appointment">
                                    </div>
                                    <div class="col-4">
                                    <label for="">Confirmation Date</label>
                                    <input type="date" name="confirm_date" id="confirm_date" class="form-control form-control-sm" placeholder="Confirmation Date">
                                    </div>
                                    <div class="col-5">
                                    <label for="">Last Promotion</label>
                                    <input type="date" name="last_promotion_date" id="last_promotion_date" class="form-control form-control-sm" placeholder="Last Promotion">
                                    </div>
                                </div>
                                {{-- Rowend --}}
                                {{-- Row Start --}}
                                <div class="row mt-2">
                                    <div class="col-3">
                                        <label for="">Appointment Type</label>
                                        <select class="select2bs4 form-control form-control-sm" name="appointment_type" id="appointment_type" data-placeholder="Select a State"
                                                style="width: 100%;">
                                            <option>Select</option>
                                            <option>Permanent</option>
                                            <option>Contract</option>
                                            <option>Temporary</option>
                                            <option>Other(Specify)</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                    <label for="">Current Grade Level</label>
                                    <input type="phone" name="current_grade_level" id="current_grade_level" class="form-control form-control-sm" placeholder="Current Grade Level">
                                    </div>
                                    <div class="col-5">
                                    <label for="">Present Rank</label>
                                    <input type="text" name="present_rank" id="present_rank" class="form-control form-control-sm" placeholder="Present Rank">
                                    </div>
                                </div>
                                {{-- Rowend --}}
                                {{-- Row Start --}}
                                <div class="row mt-2">
                                    <div class="col-6">
                                        <label for="">Present Cadre</label>
                                    <input type="text" name="present_cadre" id="present_cadre" class="form-control form-control-sm" placeholder="Present Cadre">
                                    </div>
                                    <div class="col-6">
                                    <label for="">Present Station</label>
                                    <input type="text" name="present_station" id="present_station" class="form-control form-control-sm" placeholder="Present Station">
                                    </div>
                                </div>
                                {{-- Rowend --}}
                            </div>
                        </div>
                        {{-- Educational Qualification --}}
                        <div class="card">
                            <div class="card-header bg-light font-weight-bold">Educational Qualification</div>
                            <div class="card-body">
                                {{-- Row Start --}}
                                <div class="row mt-2">
                                    <div class="col-5">
                                        <label for="">Highest Qualification</label>
                                        <select class="select2bs4 form-control form-control-sm" name="highest_qualification" id="highest_qualification" data-placeholder="Select a State"
                                                style="width: 100%;">
                                            <option>Select</option>
                                            <option>Primary</option>
                                            <option>Secondary</option>
                                            <option>Certificate</option>
                                            <option>Diploma</option>
                                            <option>HND</option>
                                            <option>Degree</option>
                                            <option>Masters</option>
                                            <option>PhD.</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                    <label for="">Field/Course of Study</label>
                                    <input type="text" name="course_of_study" id="course_of_study" class="form-control form-control-sm" placeholder="Field/Course of Study">
                                    </div>
                                    <div class="col-4">
                                        <label for="">Highest Professional Qualification</label>
                                        <input type="text" name="highest_prof_qualification" id="highest_prof_qualification" class="form-control form-control-sm" placeholder="Highest Professional Qualification">
                                    </div>
                                </div>
                                {{-- Rowend --}}
                            </div>
                        </div>
                        {{-- Bank Details --}}
                        <div class="card">
                            <div class="card-header bg-light font-weight-bold">Bank Details</div>
                            <div class="card-body">
                                {{-- Row Start --}}
                                <div class="row mt-2">
                                    <div class="col-6">
                                        <label for="">BVN No.</label>
                                        <input type="text" name="bvn_no" id="bvn_no" class="form-control form-control-sm" placeholder="BVN No.">
                                    </div>
                                    <div class="col-6">
                                        <label for="">Account Number</label>
                                        <input type="text" name="account_no" id="account_no" class="form-control form-control-sm" placeholder="Account Number">
                                    </div>
                                </div>
                                {{-- Rowend --}}
                                {{-- Row Start --}}
                                <div class="row mt-2">
                                    <div class="col-6">
                                        <label for="">Bank Name</label>
                                        <input type="text" name="bank_name" id="bank_name" class="form-control form-control-sm" placeholder="Bank Name">
                                    </div>
                                    <div class="col-6">
                                        <label for="">Bank Branch</label>
                                        <input type="text" name="bank_branch" id="bank_branch" class="form-control form-control-sm" placeholder="Bank Branch">
                                    </div>
                                </div>
                                {{-- Rowend --}}
                                {{-- Row Start --}}
                                <div class="row mt-2">
                                    <div class="col-6">
                                        <label for="">Payment Type</label>
                                        <select class="select2bs4 form-control form-control-sm" name="payment_type" id="payment_type" data-placeholder="Select a State"
                                                style="width: 100%;">
                                            <option>Select</option>
                                            <option>Bank Barnch</option>
                                            <option>Remita</option>
                                            <option>POS</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="">Sort code</label>
                                        <input type="text" name="sort_code" id="sort_code" class="form-control form-control-sm" placeholder="Sort code">
                                    </div>
                                </div>
                                {{-- Rowend --}}
                            </div>
                        </div>
                        @csrf
                        <div class="float-right">
                            <button type="submit" class="btn btn-primary btn-sm toastrDefaultSuccess"><i class="fa fa-save"></i> Save Employee</button>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </form>    
@endsection
@section('scripts')
<script>
    toastr.success("Successfully added to the database");
</script>
<script>
    function previewFile(input)
    {
        var file = $('input[type=file]').get(0).files[0];
        if(file){
            var reader = new FileReader();
            reader.onload = function(){
                $('#image_upload').attr('src', reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
</script>

<script>
    $(document).ready(function(){
        $('select[name="state"]').on('change', function(){
           var state_id = $(this).val();
           if(state_id){
                $.ajax({
                    url:'/staff/'+state_id,
                    method:'GET',
                    dataType:'json',
                    success:function(data){
                        console.log(data);
                        $('select[name="lga"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="lga"]')
                                .append('<option value="'+key+'">'+value+'</option>');
                        });
                    }
                });
           }else{
            $('select[name="lga"]').empty();
           }
        })
    });
</script>
@endsection
