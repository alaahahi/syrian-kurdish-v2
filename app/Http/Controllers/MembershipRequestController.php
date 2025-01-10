<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MembershipRequest;

class MembershipRequestController extends Controller
{
    public function store(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'personalPhoto' => 'nullable|image|max:2048',
            'nameKurdish' => 'required|string|max:255',
            'nameArabic' => 'required|string|max:255',
            'nameEnglish' => 'required|string|max:255',
            'birthPlaceDate' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'bloodType' => 'nullable|string|max:255',
            'nationality' => 'required|string|max:255',
            'residenceAddress' => 'required|string|max:255',
            'phoneNumber' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'facebookLink' => 'nullable|url|max:255',
            'education' => 'required|string|max:255',
            'graduationDate' => 'required|date',
            'KurdishLang' => 'nullable|string|max:255',
            'ArabicLang' => 'nullable|string|max:255',
            'EnglishLang' => 'nullable|string|max:255',
            'KurdishLangCertifications' => 'nullable|string|max:255',
            'ArabicLangCertifications' => 'nullable|string|max:255',
            'EnglishLangCertifications' => 'nullable|string|max:255',
            'pastExperiences' => 'nullable|string',
            'currentJob' => 'required|string|max:255',
            'jobTitle' => 'required|string|max:255',
            'hiringDate' => 'required|date',
            'institution' => 'required|string|max:255',
            'agreement' => 'required|accepted',
        ]);

        // Handle file upload
        if ($request->hasFile('personalPhoto')) {
            $path = $request->file('personalPhoto')->store('public/photos');
        } else {
            $path = null;
        }

        // Save to the database
        $membershipRequest = new MembershipRequest([
            'personalPhoto' => $path,
            'nameKurdish' => $request->nameKurdish,
            'nameArabic' => $request->nameArabic,
            'nameEnglish' => $request->nameEnglish,
            'birthPlaceDate' => $request->birthPlaceDate,
            'gender' => $request->gender,
            'bloodType' => $request->bloodType,
            'nationality' => $request->nationality,
            'residenceAddress' => $request->residenceAddress,
            'phoneNumber' => $request->phoneNumber,
            'email' => $request->email,
            'facebookLink' => $request->facebookLink,
            'education' => $request->education,
            'graduationDate' => $request->graduationDate,
            'KurdishLang' => $request->KurdishLang,
            'ArabicLang' => $request->ArabicLang,
            'EnglishLang' => $request->EnglishLang,
            'KurdishLangCertifications' => $request->KurdishLangCertifications,
            'ArabicLangCertifications' => $request->ArabicLangCertifications,
            'EnglishLangCertifications' => $request->EnglishLangCertifications,
            'pastExperiences' => $request->pastExperiences,
            'currentJob' => $request->currentJob,
            'jobTitle' => $request->jobTitle,
            'hiringDate' => $request->hiringDate,
            'institution' => $request->institution,
            'agreement' => $request->agreement,
        ]);

        $membershipRequest->save();

        return redirect()->route('membership.form')->with('success', 'Your request has been submitted successfully.');
    }
}
