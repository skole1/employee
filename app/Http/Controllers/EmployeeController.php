<?php

namespace App\Http\Controllers;

use DB;
use App\Staff;
use App\State;
use App\StaffBank;
use App\StaffRecord;
use App\StaffQualification;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //

    public function index()
    {
        $states = State::get();
        return view('pages.index', [
            'states' => $states,
        ]);
    }

    public function listEmployee(Staff $staff)
    {
        return view('pages.list_employee', ['staff', $staff]);
    }

    public function postEmployee(Request $request)
    {
        $request->validate([
            'user_id' => ['nullable'],
            'image_upload' => 'required|image',
            'psn_no' => 'required',
            'nin_no' => 'required',
            'grade_level' => 'required',
            'mda' => 'required',
            'dob' => 'required',
            'sex' => 'required',
            'marital_status' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'state' => 'required',
            'lga' => 'required',
            'ward' => 'required',
            'home_town' => 'required',
            'residential_address' => 'required',
            'next_kin_name' => 'required',
            'next_kin_phone' => 'required',
            'next_kin_address' => 'required',
        ]);

        $image = $request->file('file');
        $user_image = time() . '.' . $image->extension();
        $image->move(public_path('images'), $user_image);
        $data = [
            'user_id' => mt_rand(),
            'image_upload' => $user_image,
            'psn_no' => $request->input('psn_no'),
            'nin_no' => $request->input('nin_no'),
            'grade_level' => $request->input('grade_level'),
            'mda' => $request->input('mda'),
            'dob' => $request->input('dob'),
            'sex' => $request->input('sex'),
            'marital_status' => $request->input('marital_status'),
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
            'state' => $request->input('state'),
            'lga' => $request->input('lga'),
            'ward' => $request->input('ward'),
            'home_town' => $request->input('home_town'),
            'residential_address' => $request->input('residential_address'),
            'next_kin_name' => $request->input('next_kin_name'),
            'next_kin_phone' => $request->input('next_kin_phone'),
            'next_kin_address' => $request->input('next_kin_address'),
        ];
        $staff = Staff::create($data);

        StaffRecord::create([
            'staff_id' => $staff->id,
            'department' => $request->input('department'),
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

        StaffQualification::create([
            'staff_id' => $staff->id,
            'highest_qualification' => $request->highest_qualification,
            'course_of_study' => $request->course_of_study,
            'highest_prof_qualification' =>
                $request->highest_prof_qualification,
        ]);

        StaffBank::create([
            'staff_id' => $staff->id,
            'bvn_no' => $request->bvn_no,
            'account_no' => $request->account_no,
            'bank_name' => $request->bank_name,
            'bank_branch' => $request->bank_branch,
            'payment_type' => $request->payment_type,
            'sort_code' => $request->sort_code,
        ]);

        $request->session()->flash('status', 'Staff was successfully added!');
        return redirect()->back();
    }

    public function getLgas($id)
    {
        $lgas = Lga::Where('state_id', $id)->pluck('lga_name', 'id');
        return json_encode($lgas);
    }
}
