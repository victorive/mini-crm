<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CompaniesController extends Controller
{

    public function index()
    {
        return view('companies.index', [
            'companies' => Company::paginate(10)
        ]);
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        try {
            
            $details = $request->validate([
                'name' => 'required',
                'email' => 'required', 'email',
                'website' => 'url'
            ]);
    
            if($request->hasFile('logo')){

                // $request->validate([
                //     'logo' => Rule::dimensions(['min_width=100','min_height=100'])
                // ]);
                
                $details['logo'] = $request->file('logo')->store('logos', 'public');
            }
    
            Company::create($details);

        } catch (\Throwable $th) {
            
            return back()->with('message', 'Company Creation Failed! ' . $th->getMessage());
        }

        return redirect('/companies')->with('message', 'Company created!');
    }

    public function show($id)
    {
        return view('companies.show', [
            'company' => Company::find($id)
        ]);
    }

    public function edit($id)
    {
        return view('companies.edit', [
            'company' => Company::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        try {
            
            $details = $request->validate([
                'name' => 'required',
                'email' => ['required', 'email'],
                'website' => 'required'
            ]);
    
            if($request->hasFile('logo')){
    
                // $request->validate([
                //     'logo' => Rule::dimensions(['min_width=100','min_height=100'])
                // ]);
                
                $details['logo'] = $request->file('logo')->store('logos', 'public');
            }
    
            Company::where('id', $id)->update($details);

        } catch (\Throwable $th) {
            
            return back()->with('message', 'Company Update Failed! ' . $th->getMessage());
        }

        return back()->with('message', 'Company updated!');
    }

    public function destroy($id)
    {
        try {
            
            Company::where('id', $id)->delete();

        } catch (\Throwable $th) {
            
            return back()->with('message', 'Delete Failed! ' . $th->getMessage());;
        }

        return back()->with('message', 'Company deleted');
    }
}
