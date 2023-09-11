<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\CarHistory;
use App\Models\Maintence;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    
    public function index()
    {
        if (session::has('customer')) {
            return view('home'); 
        } else {
            return redirect()->route('login-view');
        }
    }
    public function login()
    {
        return view('login');
    }
   
   
    public function showSignupForm()
    {
        return view('auth.signup');
    }


    

    public function register(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|max:25',
        'email' => 'required|email|unique:customer', 
        'password' => 'required|confirmed|min:6',
        'password_confirmation' => 'required|min:6'
    ]);

    $data = $request->all();
    $data['password'] = Hash::make($request->password);
    $customer = Customer::create($data);

    return redirect()->route('login-view')->with('success', 'Registration successful! Please log in.');
}





public function loginUser(Request $request)
{
    $validated = $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    $customer = Customer::where('email', $request->email)->first();

    if ($customer && Hash::check($request->password, $customer->password)) {
  
      Session::put('customer', $customer);
 

    
        return redirect()->route('home')->with('success', 'Login successful.');
    } else {
        return redirect()->route('login-view')->with('error', 'Login failed. Please try again.');
    }
}





public function addcar(Request $request)
{
    $validated = $request->validate([
        'Car_Name' => 'required|max:255',
        'Car_Number' => 'required|max:255|unique:carhistory,Car_Number',
        'Car_Model' => 'required|max:255',
        'Car_Description' => 'required',
    ]);

    $data = $request->all();

    $customer = session('customer'); 
  
    if ($customer) {
        $data['customer_id'] = $customer->id; 

        $carHistory = new CarHistory($data);
        $carHistory->save();

        return redirect()->route('carHistory-view')->with('success', 'Car added successfully.');
    } else {
        return redirect()->route('carHistory-view')->with('error', 'Session data not available or not valid.');
    }
}



 


    public function logout()
    {
        session()->flush();
        return redirect('login');
    }
 
   public function CarHistory()
{
    $customer = session('customer'); 
  
    if ($customer) {
        $data['customer_id'] = $customer->id; 
    
        $cars = CarHistory::where('customer_id', $data['customer_id'])->get();
    
        return view('Car_History', compact('cars'));
    }

    return dd('not found');
}
public function deleteCar(CarHistory $car)
{
    $customer = session('customer'); 
  
    if ($customer && $car->customer_id == $customer->id) {
        $car->delete();
        return redirect()->route('carHistory-view')->with('success', 'Car deleted successfully.');
    } else {
        return redirect()->route('carHistory-view')->with('error', 'You are not authorized to delete this car.');
    }
}

    public function addcarView()
    {
        return view('addcar');
    }
    public function editCar(Request $request)
    {

        try {
            $validated = $request->validate([
                'car_id' => 'required|exists:car_histories,id',
                'edit_car_name' => 'required|max:255',
                'edit_car_model' => 'required|max:255',
                'edit_car_number' => 'required|max:255',
                'edit_car_description' => 'required',
            ]);
    
            $car = CarHistory::find($request->car_id);
          
            dd($car);
    
            $customer = session::get('customer'); 
            if ($customer) {
                if ($car->customer_id != $customer->id) {
                    dd($customer);
                    return redirect()->back()->with('error', 'You are not authorized to edit this car.');
                }
    
                $car->Car_Name = $request->edit_car_name;
                $car->Car_Model = $request->edit_car_model;
                $car->Car_Number = $request->edit_car_number;
                $car->Car_Description = $request->edit_car_description;
                $car->save();
    
                return redirect()->route('carHistory-view')->with('success', 'Car details updated successfully.');
            } else {
                return redirect()->route('carHistory-view')->with('error', 'Session data not available or not valid.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while updating car details.');
        }
    }
    
    public function carMaintenanceView()
    {
        $customerId = session('customer')['id'];
        $customerName = Customer::where('id', $customerId)->value('name');
        $maintenances = Maintence::with(['carHistory.customer'])
            ->whereHas('carHistory.customer', function ($query) use ($customerId) {
                $query->where('id', $customerId);
            })
            ->get();
    
        return view('Car_maintence', [
            'maintenances' => $maintenances,
            'customerId' => $customerId, 
            'customerName' => $customerName,
        ]);
    }
    
    
    public function getCarMaintenance(CarHistory $car)
    {
      

        return view('addcarmaintence');
    }
    public function addmaintenance(Request $request)
{
    $validated = $request->validate([
        'Car_Number' => 'required|exists:carhistory,Car_Number',
        'Maintence_Name' => 'required',
        'Maintence_Worth' => 'required',
        'Maintence_Description' => 'required',
    ]);

    $carNumber = $request->input('Car_Number');
    $car =  CarHistory::where('Car_Number', $carNumber)->first(); 


    if ($car) {
        
        
        $Car_ID = $car->id;
        $data = [
          
            'Car_id' => $Car_ID,
            'Car_Number' => $carNumber,
            'Maintence_Name' => $request->input('Maintence_Name'),
            'Maintence_Worth' => $request->input('Maintence_Worth'),

            'Maintence_Description' => $request->input('Maintence_Description'),
        ];

        Maintence::create($data);

        return redirect()->route('car-maintenance-view')->with('Car_ID', $Car_ID);
    } else {
        return redirect()->route('/')->with('error', 'Invalid car number.');
    }
}
public function deleteMaintenance(Maintence $maintenance)
{
    $customer = session('customer'); 
  
    if ($customer && $maintenance->carHistory->customer_id == $customer->id) {
        $maintenance->delete();
        return redirect()->route('car-maintenance-view')->with('success', 'Maintenance history deleted successfully.');
    } else {
        return redirect()->route('car-maintenance-view')->with('error', 'You are not authorized to delete this maintenance history.');
    }
}

}
    

    
    
    
    

    