<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
class ContactController extends Controller
{


    public function index(Request $request)
  {
    $contacts = DB::table('Contacts')->get();
    if ($request->has('search')) {
        $contacts = DB::table('Contacts')->where('name', 'like', '%' . $request->search . '%')
        ->orWhere('email', 'like', '%' . $request->search . '%')
        ->get();
               // $contacts->where('name', 'like', '%' . $request->search . '%')
                     //     ->orWhere('email', 'like', '%' . $request->search . '%');
            }
    
            if ($request->has('sort')) {
                //$contacts->orderBy($request->sort, 'asc');

                $contacts = DB::table('Contacts')->orderBy($request->sort, 'asc')
                ->get();
            }
    //dd($contacts);
    return view('index', compact('contacts'));
  }
    // public function index(Request $request)
    // {
    //     $contacts = DB::table('Contacts')->get();//Contact::all();

    //     if ($request->has('search')) {
    //         $contacts->where('name', 'like', '%' . $request->search . '%')
    //                  ->orWhere('email', 'like', '%' . $request->search . '%');
    //     }

    //     if ($request->has('sort')) {
    //         $contacts->orderBy($request->sort, 'asc');
    //     }

    //     return view('index', ['contacts' => $contacts]);
    // }


    
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:contacts',
        ]);

        Contact::create($request->all());

        return redirect()->route('contacts.index')->with('success', 'Contact created successfully.');
    }

    public function show(Request $request)
    {
        $contact = DB::table('Contacts')
        ->whereId( $request->post ) 
        ->first();

         
        return view('show', compact('contact'));
    }

    public function edit(Request $request)
    {

        $contact = DB::table('Contacts')
        ->whereId( $request->post ) 
        ->first();

        return view('edit', compact('contact'));
    }


    public function update(Request $request) {
       $contact= Contact::whereId($request->post)->update(
            ['name' => $request->name, 'email' => $request->email,
            'phone' => $request->phone, 'address' => $request->address]
        );
      
        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully.');
    }


    // public function update(Request $request, Contact $contact)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email|unique:contacts,email,' . $request->post,
    //     ]);

    //     //$contact->update($request->all());
    //     $contact=  DB::table('contacts')
    //     ->whereId( $request->id)
    //     ->update([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'phone' => $request->phone,
    //         'address' => $request->address
        
    //     ]);
    //     dd($contact);

    //     return redirect()->route('contacts.index')->with('success', 'Contact updated successfully.');
    // }

    public function destroy(Request $request) 
    {
        Contact::whereId($request->post)->delete();

        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
    }


}
