<?php

namespace LaravelCurd\Curd\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelCurd\Curd\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return view
     */
    public function index() {
        
        $customer = Customer::orderby('id', 'desc')->get();
        return view('curd::pages.details', compact('customer'));
    }

    /**
     * store customer data.
     *@param  \Illuminate\Http\Request  $request
     * @return redirect
     */
    public function storeData(Request $request) {
        
        $request->validate(['name' => 'required|alpha',
                            'email' => 'required|email',
                            'phone' => 'required|digits:10',]);
        
        Customer::create($request->all());
        session()->flash('msg', 'Inserted Successfully');
        return redirect('index');
    }

    /**
     * delete customer data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return redirect
     */
    public function deleteData(Request $request) {
        
        Customer::find($request->id)->delete();
        session()->flash('msg', 'Deleted Successfully');
        return redirect('index');
    }

    /**
     * show update form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return view
     */
    public function showUpdate(Request $request) {
        
        $customer = Customer::find($request->id);
        return view('curd::pages.updateForm', compact('customer'));
    }

    /**
     * update customer data
     *
     * @param  \Illuminate\Http\Request  $request
     * @return redirect
     */
    public function updateData(Request $request) {
        
        $request->validate(['name' => 'required|alpha',
                            'email' => 'required|email',
                            'phone' => 'required|digits:10']);
        
        $customer = Customer::find($request->id);
        $customer['name'] = $request->name;
        $customer['email'] = $request->email;
        $customer['phone'] = $request->phone;
        $customer->save();
        session()->flash('msg', 'Updated Successfully');
        return redirect('index');
                
    }

}
