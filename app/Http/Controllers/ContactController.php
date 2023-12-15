<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function index(): View
    {
        $contacts = Contact::latest()->paginate(5);
        return view('contact.index',compact('contacts'));
    }
    // public function tampil(): View
    // {
    //     $contact = Contact::latest()->paginate(5);
    //     return view('tampil', compact('contact'));
    // }
    public function create()
    {
        return view('contact.create');
    }
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama'      => 'required',
            'email'     => 'required',
            'tentang'   => 'required',
            'pesan'     => 'required'
        ]);

        //create  product
        Contact::create([
            'nama'      => $request->nama,
            'email'     => $request->email,
            'tentang'   => $request->tentang,
            'pesan'     => $request->pesan,
        ]);

        //redirect to index
        return redirect()->route('contact.index')->with(['success' => 'Pesan Berhasil Diupload!']);
    }

}
