<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AboutMe;
use Illuminate\Support\Facades\Storage;

class AboutMeController extends Controller
{
    public function index(){
        $data = AboutMe::first();
        return view('admin.about_me.index',compact('data'));
    }
    public function create(Request $request)
    {
        $aboutMe = AboutMe::first();
        if ($aboutMe) {
            $validatedData = $request->validate([
                'your_job' => 'max:255',
                'description' => 'nullable',
                'picture' => 'nullable|image',
                'name' => 'max:255',
                'title' => 'max:255',
                'phone' => 'max:255',
                'address' => 'nullable',
                'birthday' => 'max:255',
                'experience' => 'max:255',
                'email' => 'max:255',
                'frellance' => 'max:255',
            ]);

            if ($request->description) {
                $validatedData['description'] = nl2br($request->description);
            }

            if ($request->hasFile('picture')) {
                $validatedData['picture'] = $request->file('picture')->store('img-foto-profile');
            
                if ($aboutMe->picture) {
                    Storage::delete($aboutMe->picture);
                }
            }

            $aboutMe->update($validatedData);
        } else {
            $validatedData = $request->validate([
                'your_job' => 'max:255',
                'description' => 'nullable',
                'picture' => 'nullable|image',
                'name' => 'max:255',
                'title' => 'max:255',
                'phone' => 'max:255',
                'address' => 'nullable',
                'birthday' => 'max:255',
                'experience' => 'max:255',
                'email' => 'max:255',
                'frellance' => 'max:255',
            ]);

            if ($request->description) {
                $validatedData['description'] = nl2br($request->description);
            }

            if ($request->hasFile('picture')) {
                $validatedData['picture'] = $request->file('picture')->store('img-foto-profile');
            }

            AboutMe::create($validatedData);
        }
        return redirect()->back()->with('berhasil', 'Data Telah Berhasil Diperbarui!');

    }



}
