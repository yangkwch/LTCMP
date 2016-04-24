<?php

namespace App\Http\Controllers;

use App\User;
use App\CustomerCompanyModel;

use Illuminate\Http\Request;

use App\Http\Requests;

class CustomerCompanyController extends Controller
{
    //
    public function createcompany()
    {
    	$companies = CustomerCompanyModel::all();

    	//return view('echo "Test"');
   		return view('customer.company.createcompany', ['companies' => $companies] );
    }

    public function store(Request $request)
    {
       // Validate the request...

        $company = new CustomerCompanyModel;
//*
        //$company->id = 2;

        $company->companyname = $request->companyname;

        if($request->parentcompany)
            $company->parentcompanyid = $request->parentcompany;
        else
            $company->parentcompanyid = 0;

        $company->registeredaddress = $request->registeredaddress;

        $company->description = $request->description;
//*/
        //$company->create(['companyname' => $request->companyname], ['registeredaddress' => $request->registeredaddress], ['description' => $request->description], );

        $company->save();

        //dd($company->id);

        return redirect('/createcompany');
 
    }

}
