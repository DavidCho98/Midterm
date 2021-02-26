<?php

namespace App\Http\Controllers;

use App\Models\AssessmentModel;
use App\Services\Business\SecurityService;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    private $service;

    public function __construct(){
        $this->service = new SecurityService();
    }

    public function index(Request $request)
    {
        //requesting all the values from the input
        $username = $request->input('username');
        $password = $request->input('password');
        $email = $request->input('email');
        $age = $request->input('age');

        //put it into the data array
        $data = ['username' => $username, 'password' =>$password, 'email' =>$email, 'age' =>$age];

        //put the data inside the model
        $assessments = new AssessmentModel($username, $password, $email, $age);

        //use the function from the business layers to compare
        $result = $this->service->compare($assessments);

        //
        if($result){
            echo"Completed the comparison successfully";
            return view('assessment');

        }else{
            echo"Comparison failed";
            return view('assessment');

        }
    }
}
