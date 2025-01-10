@extends('layouts.content')
@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg3">
        <div class="container">
            <div class="inner-title text-center">
                <h3> {{ trans('text.membership_request') }}</h3>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">{{ trans('text.homepage') }}</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevrons-right'></i>
                    </li>
                    <li>{{ trans('text.membership_request') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <div class="mem_request">
        <div class="container">
            <div class="card shadow-sm p-4">
                <div class="card-header text-primary text-center">
                    <h4>{{ trans('text.Membership_form_of_the_Syrian_Kurdish_Journalists_Network') }}</h4>
                </div>
                <form action="{{ route('membership.submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <form>
                            <!-- الصورة الشخصية -->
                            <div class="mb-3">
                                <label for="personalPhoto" class="form-label">{{ trans('text.personal_photo') }}</label>
                                <input type="file" class="form-control" id="personalPhoto" name="personalPhoto">
                            </div>
        
                            <!-- المعلومات الشخصية -->
                            <h5 class="mb-3">{{ trans('text.personal_information') }}</h5>
                            <div class="mb-3 row">
                                <div class="col-md-4">
                                    <label for="nameKurdish" class="form-label">{{ trans('text.full_name_kurdish') }}</label>
                                    <input type="text" class="form-control" id="nameKurdish" name="nameKurdish" placeholder="{{ trans('text.placeholder_kurdish') }}">
                                </div>
                                <div class="col-md-4">
                                    <label for="nameArabic" class="form-label">{{ trans('text.full_name_arabic') }}</label>
                                    <input type="text" class="form-control" id="nameArabic" name="nameArabic" placeholder="{{ trans('text.placeholder_arabic') }}">
                                </div>
                                <div class="col-md-4">
                                    <label for="nameEnglish" class="form-label">{{ trans('text.full_name_english') }}</label>
                                    <input type="text" class="form-control" id="nameEnglish" name="nameEnglish" placeholder="{{ trans('text.placeholder_english') }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <label for="birthPlaceDate" class="form-label">{{ trans('text.birth_place_date') }}</label>
                                    <input type="text" class="form-control" id="birthPlaceDate" name="birthPlaceDate">
                                </div>
                                <div class="col-md-3">
                                    <label for="gender" class="form-label">{{ trans('text.gender') }}</label>
                                    <select class="form-select" id="gender" name="gender">
                                        <option value="">{{ trans('text.gender_select') }}</option>
                                        <option value="male">{{ trans('text.gender_male') }}</option>
                                        <option value="female">{{ trans('text.gender_female') }}</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="bloodType" class="form-label">{{ trans('text.blood_type') }}</label>
                                    <input type="text" class="form-control" id="bloodType" name="bloodType" placeholder="{{ trans('text.blood_type_placeholder') }}">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nationality" class="form-label">{{ trans('text.nationality') }}</label>
                                <input type="text" class="form-control" id="nationality" name="nationality">
                            </div>
        
                            <!-- العنوان -->
                            <h5 class="mb-3">{{ trans('text.residence_address') }}</h5>
                            <div class="mb-3">
                                <label for="residenceAddress" class="form-label">{{ trans('text.residence_address') }}</label>
                                <input type="text" class="form-control" id="residenceAddress" name="residenceAddress">
                            </div>
                            <div class="mb-3">
                                <label for="phoneNumber" class="form-label">{{ trans('text.phone_number') }}</label>
                                <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="{{ trans('text.phone_number_placeholder') }}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ trans('text.email') }}</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="{{ trans('text.email_placeholder') }}">
                            </div>
                            <div class="mb-3">
                                <label for="facebookLink" class="form-label">{{ trans('text.facebook_link') }}</label>
                                <input type="url" class="form-control" id="facebookLink" name="facebookLink" placeholder="{{ trans('text.facebook_link_placeholder') }}">
                            </div>
        
                            <!-- الشهادة الدراسية -->
                            <h5 class="mb-3">{{ trans('text.educational_certificate') }}</h5>
                            <div class="mb-3">
                                <label for="education" class="form-label">{{ trans('text.education') }}</label>
                                <input type="text" class="form-control" id="education" name="education">
                            </div>
                            <div class="mb-3">
                                <label for="graduationDate" class="form-label">{{ trans('text.graduation_date') }}</label>
                                <input type="date" class="form-control" id="graduationDate" name="graduationDate">
                            </div>
        
                            <!-- اللغات -->
                            <h5 class="mb-3">{{ trans('text.languages') }}</h5>
                            <div class="mb-3">
                                <label class="form-label">{{ trans('text.kurdish') }}</label>
                                <input type="text" class="form-control mb-2" id="KurdishLang" name="KurdishLang" placeholder="{{ trans('text.proficiency_degree') }}">
                                <input type="text" class="form-control" id="KurdishLangCertifications" name="KurdishLangCertifications" placeholder="{{ trans('text.certifications_if_any') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">{{ trans('text.arabic') }}</label>
                                <input type="text" class="form-control mb-2" id="ArabicLang" name="ArabicLang" placeholder="{{ trans('text.proficiency_degree') }}">
                                <input type="text" class="form-control" id="ArabicLangCertifications" name="ArabicLangCertifications" placeholder="{{ trans('text.certifications_if_any') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">{{ trans('text.english') }}</label>
                                <input type="text" class="form-control mb-2" id="EnglishLang" name="EnglishLang" placeholder="{{ trans('text.proficiency_degree') }}">
                                <input type="text" class="form-control" id="EnglishLangCertifications" name="EnglishLangCertifications" placeholder="{{ trans('text.certifications_if_any') }}">
                            </div>
        
                            <!-- العمل -->
                            <h5 class="mb-3">{{ trans('text.work') }}</h5>
                            <div class="mb-3">
                                <label for="pastExperiences" class="form-label">{{ trans('text.past_experiences') }}</label>
                                <textarea class="form-control" id="pastExperiences" name="pastExperiences" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="currentJob" class="form-label">{{ trans('text.current_job') }}</label>
                                <input type="text" class="form-control" id="currentJob" name="currentJob">
                            </div>
                            <div class="mb-3">
                                <label for="jobTitle" class="form-label">{{ trans('text.job_title') }}</label>
                                <input type="text" class="form-control" id="jobTitle" name="jobTitle">
                            </div>
                            <div class="mb-3">
                                <label for="hiringDate" class="form-label">{{ trans('text.hiring_date') }}</label>
                                <input type="date" class="form-control" id="hiringDate" name="hiringDate">
                            </div>
                            <div class="mb-3">
                                <label for="institution" class="form-label">{{ trans('text.institution') }}</label>
                                <input type="text" class="form-control" id="institution" name="institution">
                            </div>
        
                            <!-- التعهد -->
                            <h5 class="mb-3">{{ trans('text.commitment') }}</h5>
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="agreement" name="agreement" required>
                                <label class="form-check-label" for="agreement">{{ trans('text.agreement_label') }}</label>
                            </div>
        
                            <!-- التوقيع والتاريخ -->
                            {{-- <div class="mb-3">
                                <label for="signature" class="form-label">{{ trans('text.signature') }}</label>
                                <input type="text" class="form-control" id="signature" name="signature">
                            </div>
                            <div class="mb-3">
                                <label for="submissionDate" class="form-label">{{ trans('text.submission_date') }}</label>
                                <input type="date" class="form-control" id="submissionDate" name="submissionDate">
                            </div> --}}
        
                            <div class="text-center">
                                <button type="submit" class="btn default-btn">{{ trans('text.submit_request') }}</button>
                            </div>
                        </form>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection
