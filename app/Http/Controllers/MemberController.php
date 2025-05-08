<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::paginate(15);
        return view('member.dashboard', compact('members'));
    }

    public function create()
    {
        return view('member.add');
    }

    public function adding(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:5|max:100',
            'phone' => 'required|numeric|digits_between:9,15',
            'profil_photos' => 'required|mimes:jpeg,png,jpg,heic|file|max:2048', // MAX UPLOAD 2MB
        ]);

        if ($request->hasFile('profil_photos')) {
            $photos = $request->file('profil_photos');
            $photoPath = $photos->store('profiles', 'public');

            Member::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'profil_photos' => $photoPath,
            ]);
        }

        return redirect()->route('member.index')->with('success', 'Good! Member Successfully Added 🎉');
    }

    public function update(Member $member)
    {
        return view('member.update', compact('member'));
    }

    public function updating(Request $request, Member $member)
    {
        // ARRAY VALIDASI
        $validated = $request->validate([
            'name'          => 'required|string|min:5|max:100',
            'phone'         => 'required|numeric|digits_between:9,15',
            'profil_photos' => 'nullable|mimes:jpeg,png,jpg,heic|file|max:2048',  // MAX UPLOAD 2MB
        ]);

        if ($request->hasFile('profil_photos')) {

            // IF HAPUS FILE LAMA JIKA ADA
            if ($member->profil_photos && $member->profil_photos !== 'profil_image.png' && Storage::disk('public')->exists($member->profil_photos)) {
                Storage::disk('public')->delete($member->profil_photos);
            }

            $path = $request->file('profil_photos')->store('profiles', 'public');
            $validated['profil_photos'] = $path;
        }

        $member->update([
            'name'  => $validated['name'],
            'phone' => $validated['phone'],

            // AMBIL FOTO BARU JIKA BERUBAH
            ...Arr::only($validated, ['profil_photos']),
        ]);

        return redirect()->route('member.index')->with('success', 'Successfully update 🎉');

    }

    public function destroy(Member $member)
    {
        // HAPUS FILE PROFIL RARI DISK 'PUBLIC STORAGE' (JIKA ADA)
        if ($member->profil_photos && $member->profil_photos !== 'profil_image.png' && Storage::disk('public')->exists($member->profil_photos)) {
            Storage::disk('public')->delete($member->profil_photos);
        }

        $member->delete();

        return redirect()->route('member.index')->with('success', 'Member successfully deletion 🎉');
    }

}
