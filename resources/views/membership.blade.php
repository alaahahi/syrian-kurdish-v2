@extends('layouts.content')
@section('content')

        <!-- Inner Banner -->
        <div class="inner-banner inner-bg5">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>{{ trans('text.membership_tit') }}</h3>
                    <ul>
                        <li>
                            <a href="{{ route('/') }}">{{ trans('text.homepage') }}</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li>{{ trans('text.membership') }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Service Dtls -->
        <div class="service-dtls pt-100 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="service-dtls-content">
                            <div class="service-dtls-img">
                                <img src="assets/img/blog/121.png" alt="Service Image">
                            </div>
                            
                        
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="common-catagory">
                            <h3>{{ trans('text.membership_tit') }}</h3>
                            <ul class="catagory accordion">
                                <li class="accordion-item"> 
                                    <a href="javascript:void(0)" class="accordion-title"> {{ trans('text.membership_terms1') }} <i class='bx bx-plus'></i></a>
                                    <div class="accordion-content">
                                    <p>
                                        {{ trans('text.membership_terms_desc1') }}

                                    </p>
                                    
                                    
                                </div>
                                </li>
                               <li class="accordion-item"> 
                                    <a href="javascript:void(0)" class="accordion-title"> {{ trans('text.membership_terms2') }} <i class='bx bx-plus'></i></a>
                                    <div class="accordion-content">
                                    
                                    <ol>
                                    <li> {{ trans('text.membership_terms_desc21') }}</li>
                                    <li> {{ trans('text.membership_terms_desc22') }}</li>
                                     <li> {{ trans('text.membership_terms_desc23') }}</li>
                                    </ol>
                                </div>
                                </li>
                                <li class="accordion-item"> 
                                    <a href="javascript:void(0)" class="accordion-title"> {{ trans('text.membership_terms3') }}<i class='bx bx-plus'></i></a>
                                    <div class="accordion-content">
                                    <p>
                                        {{ trans('text.membership_terms_desc3') }}

                                    </p>
                                    <ol>
                                    <li> {{ trans('text.membership_terms_desc31') }}</li>
                                    <li> {{ trans('text.membership_terms_desc32') }}</li>
                                     <li> {{ trans('text.membership_terms_desc33') }}</li>
                                     <li> {{ trans('text.membership_terms_desc34') }}</li>
                                    <li> {{ trans('text.membership_terms_desc35') }}</li>
                                     <li> {{ trans('text.membership_terms_desc36') }}</li>
                                    </ol>
                                </div>
                                </li>
                                <li class="accordion-item"> 
                                    <a href="javascript:void(0)" class="accordion-title"> {{ trans('text.membership_terms4') }}<i class='bx bx-plus'></i></a>
                                    <div class="accordion-content">
                                    <ol>
                                    <li> {{ trans('text.membership_terms_desc41') }}</li>
                                    <li> {{ trans('text.membership_terms_desc42') }}</li>
                                     <li> {{ trans('text.membership_terms_desc43') }}</li>
                                    </ol>
                                </div>
                                </li>
                                <li class="accordion-item"> 
                                    <a href="javascript:void(0)" class="accordion-title"> {{ trans('text.membership_terms5') }}<i class='bx bx-plus'></i></a>
                                    <div class="accordion-content">
                                     <ol>
                                    <li> {{ trans('text.membership_terms_desc51') }}</li>
                                    <li> {{ trans('text.membership_terms_desc52') }}</li>
                                    <li> {{ trans('text.membership_terms_desc53') }}</li>
                                    <li> {{ trans('text.membership_terms_desc54') }}</li>
                                    <li> {{ trans('text.membership_terms_desc55') }}</li>
                                    <li> {{ trans('text.membership_terms_desc56') }}</li>
                                    <li> {{ trans('text.membership_terms_desc57') }}</li>
                                    <li> {{ trans('text.membership_terms_desc58') }}</li>
                                    <li> {{ trans('text.membership_terms_desc59') }}</li>
                                    <li> {{ trans('text.membership_terms_desc510') }}</li>
                                    <li> {{ trans('text.membership_terms_desc511') }}</li>
                                    <li> {{ trans('text.membership_terms_desc512') }}</li>
                                    <li> {{ trans('text.membership_terms_desc513') }}</li>
                                    <li> {{ trans('text.membership_terms_desc514') }}</li>
                                    </ol>
                                </div>
                                </li>
                                <li class="accordion-item"> 
                                    <a href="javascript:void(0)" class="accordion-title"> {{ trans('text.membership_terms6') }} <i class='bx bx-plus'></i></a>
                                    <div class="accordion-content">
                                    <ol>
                                    <li> {{ trans('text.membership_terms_desc61') }}</li>
                                    <li> {{ trans('text.membership_terms_desc62') }}</li>
                                    </ol>
                                </div>
                                </li>
                                  <li class="accordion-item"> 
                                    <a href="javascript:void(0)" class="accordion-title"> {{ trans('text.membership_terms7') }} <i class='bx bx-plus'></i></a>
                                    <div class="accordion-content">
                                    
                                    <ol>
                                    <li> {{ trans('text.membership_terms_desc81') }}</li>
                                    <li> {{ trans('text.membership_terms_desc82') }}</li>
                                    </ol>
                                </div>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Dtls End -->



    <div class="mem_request pb-90">
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
