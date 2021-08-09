{{-- Record of Employment --}}
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

{{-- Educational Qualification --}}
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
                <select class="select2bs4 form-control form-control-sm" name="" data-placeholder="Select a State"
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
              <input type="text" class="form-control form-control-sm" placeholder="Field/Course of Study">
            </div>
            <div class="col-4">
                <label for="">Highest Professional Qualification</label>
                <input type="text" class="form-control form-control-sm" placeholder="Highest Professional Qualification">
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

$request->validate([
            'staff_id' => ['nullable'],
            'department' => 'required',
            'unit' => 'required',
            'section' => 'required',
            'dofa' => 'required',
            'confirm_date' => 'required',
            'last_promotion_date' => 'required',
            'appointment_type' => 'required',
            'current_grade_level' => 'required',
            'present_rank' => 'required',
            'present_cadre' => 'required',
            'present_station' => 'required',
        ]);

        StaffRecord::create([
            'staff_id' => $staff_id,
            'department' => $request->department,
            'unit' => $request->unit,
            'section' => $request->section,
            'dofa' => $request->dofa,
            'confirm_date' => $request->confirm_date,
            'last_promotion_date' => $request->last_promotion_date,
            'appointment_type' => $request->appointment_type,
            'current_grade_level' => $request->current_grade_level,
            'present_rank' => $request->present_rank,
            'present_cadre' => $request->present_cadre,
            'present_station' => $request->present_station,
        ]);

        $request->validate([
            'staff_id' => 'required',
            'highest_qualification' => 'required',
            'course_of_study' => 'required',
            'highest_prof_qualification' => 'required',
        ]);

        StaffQualification::create([
            'staff_id' => $staff_id,
            'highest_qualification' => $request->highest_qualification,
            'course_of_study' => $request->course_of_study,
            'highest_prof_qualification' =>
                $request->highest_prof_qualification,
        ]);

        $request->validate([
            'staff_id' => 'required',
            'bvn_no' => 'required',
            'account_no' => 'required',
            'bank_name' => 'required',
            'bank_branch' => 'required',
            'payment_type' => 'required',
            'sort_code' => 'required',
        ]);

        StaffBank::create([
            'staff_id' => $staff_id,
            'bvn_no' => $request->bvn_no,
            'bank_name' => $request->bank_name,
            'bank_branch' => $request->bank_branch,
            'payment_type' => $request->payment_type,
            'sort_code' => $request->sort_code,
        ]);

Relation ship
        public function user()
    {
        return $this->belongsToMany('App\User');
    }

    public function StaffBank()
    {
        return $this->hasOne('App\StaffBank');
    }

    public function StaffQualification()
    {
        return $this->hasOne('App\StaffQualification');
    }

    public function StaffRecord()
    {
        return $this->hasOne('App\StaffRecord');
    }


    // $employee = new Staff();
        // $employee->user_id = mt_rand();
        // $employee->psn_no = $request->psn_no;
        // $employee->nin_no = $request->nin_no;
        // $employee->grade_level = $request->grade_level;
        // $employee->mda = $request->mda;
        // $employee->dob = $request->dob;
        // $employee->sex = $request->sex;
        // $employee->marital_status = $request->marital_status;
        // $employee->phone_number = $request->phone_number;
        // $employee->email = $request->email;
        // $employee->state = $request->state;
        // $employee->lga = $request->lga;
        // $employee->ward = $request->ward;
        // $employee->home_town = $request->home_town;
        // $employee->residential_address = $request->residential_address;
        // $employee->next_kin_name = $request->next_kin_name;
        // $employee->next_kin_phone = $request->next_kin_phone;
        // $employee->next_kin_address = $request->next_kin_address;
        // $employee->save();
