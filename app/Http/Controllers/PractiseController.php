<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PractiseController extends Controller
{
    public function index()
    {
        //********************************************************************///
        // InnerJoin
        //********************************************************************///
        // $db = DB::table('employee')
        //         ->select('employee.employee_name',
        //                  'employee.employee_email',
        //                  'employee.employee_phone',
        //                  'employee.employee_age',
        //                  'employee.employee_dob',
        //                  'company.id',
        //                  'company.company_name')
        //         ->join('company','employee.company_id', '=', 'company.id')
        //         ->where('company.company_name' , '=' , 'Dalda')
        //         ->get();

        // echo "<pre>";
        // print_r($db);

        //********************************************************************///
        // LeftJoin
        //********************************************************************///


            // $db = DB::table('employee')
            //         ->select('employee.employee_name',
            //                  'employee.employee_email',
            //                  'employee.employee_phone',
            //                  'employee.employee_age',
            //                  'employee.employee_dob',
            //                  'company.id',
            //                  'company.company_name')
            //         ->leftJoin('company','employee.company_id', '=', 'company.id')
            //         ->get();

            // echo "<pre>";
            // print_r($db);

        //********************************************************************///
        // RightJoin
        //********************************************************************///

            // $db = DB::table('employee')
            //         ->select('employee.employee_name',
            //                  'employee.employee_email',
            //                  'employee.employee_phone',
            //                  'employee.employee_age',
            //                  'employee.employee_dob',
            //                  'company.id',
            //                  'company.company_name')
            //         ->RightJoin('company','employee.company_id', '=', 'company.id')
            //         ->get();

            // echo "<pre>";
            // print_r($db);

        
        //********************************************************************///
        // CrossJoin
        //********************************************************************///

            //     $db = DB::table('employee')
            //             ->select('employee.employee_name',
            //                      'employee.employee_email',
            //                      'employee.employee_phone',
            //                      'employee.employee_age',
            //                      'employee.employee_dob',
            //                      'company.id',
            //                      'company.company_name')
            //             ->CrossJoin('company')
            //             ->get();

            // echo "<pre>";
            // print_r($db);
    }
}
