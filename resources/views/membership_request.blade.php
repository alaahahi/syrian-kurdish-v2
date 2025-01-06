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
                    <h4>استمارة عضوية شبكة الصحفيين الكُرد السوريين</h4>
                </div>
                <div class="card-body">
                    <form>
                        <!-- الصورة الشخصية -->
                        <div class="mb-3">
                            <label for="personalPhoto" class="form-label">الصورة الشخصية</label>
                            <input type="file" class="form-control" id="personalPhoto">
                        </div>

                        <!-- المعلومات الشخصية -->
                        <h5 class="mb-3">المعلومات الشخصية</h5>
                        <div class="mb-3 row">
                            <div class="col-md-4">
                                <label for="nameKurdish" class="form-label">الاسم بالكُردية</label>
                                <input type="text" class="form-control" id="nameKurdish" placeholder="Kurdî">
                            </div>
                            <div class="col-md-4">
                                <label for="nameArabic" class="form-label">الاسم بالعربية</label>
                                <input type="text" class="form-control" id="nameArabic" placeholder="العربية">
                            </div>
                            <div class="col-md-4">
                                <label for="nameEnglish" class="form-label">الاسم بالإنكليزية</label>
                                <input type="text" class="form-control" id="nameEnglish" placeholder="English">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-6">
                                <label for="birthPlaceDate" class="form-label">مكان وتاريخ الولادة</label>
                                <input type="text" class="form-control" id="birthPlaceDate">
                            </div>
                            <div class="col-md-3">
                                <label for="gender" class="form-label">الجنس</label>
                                <select class="form-select" id="gender">
                                    <option value="">اختر...</option>
                                    <option value="male">ذكر</option>
                                    <option value="female">أنثى</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="bloodType" class="form-label">زمرة الدم</label>
                                <input type="text" class="form-control" id="bloodType" placeholder="مثال: A+">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nationality" class="form-label">الجنسية</label>
                            <input type="text" class="form-control" id="nationality">
                        </div>

                        <!-- العنوان -->
                        <h5 class="mb-3">العنوان</h5>
                        <div class="mb-3">
                            <label for="residenceAddress" class="form-label">عنوان الإقامة</label>
                            <input type="text" class="form-control" id="residenceAddress">
                        </div>
                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">رقم الموبايل (الواتس)</label>
                            <input type="tel" class="form-control" id="phoneNumber" placeholder="+963-XXXXXXXXX">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">البريد الإلكتروني</label>
                            <input type="email" class="form-control" id="email" placeholder="example@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="facebookLink" class="form-label">فيس بوك (اختياري)</label>
                            <input type="url" class="form-control" id="facebookLink"
                                placeholder="رابط حسابك على فيس بوك">
                        </div>

                        <!-- الشهادة الدراسية -->
                        <h5 class="mb-3">الشهادة الدراسية</h5>
                        <div class="mb-3">
                            <label for="education" class="form-label">التحصيل العلمي</label>
                            <input type="text" class="form-control" id="education">
                        </div>
                        <div class="mb-3">
                            <label for="graduationDate" class="form-label">تاريخ الحصول عليها</label>
                            <input type="date" class="form-control" id="graduationDate">
                        </div>

                        <!-- اللغات -->
                        <h5 class="mb-3">اللُغات</h5>
                        <div class="mb-3">
                            <label class="form-label">الكُردية</label>
                            <input type="text" class="form-control mb-2" placeholder="درجة الإتقان">
                            <input type="text" class="form-control" placeholder="الشهادات (إن وجدت)">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">العربية</label>
                            <input type="text" class="form-control mb-2" placeholder="درجة الإتقان">
                            <input type="text" class="form-control" placeholder="الشهادات (إن وجدت)">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">الإنكليزية</label>
                            <input type="text" class="form-control mb-2" placeholder="درجة الإتقان">
                            <input type="text" class="form-control" placeholder="الشهادات (إن وجدت)">
                        </div>

                        <!-- العمل -->
                        <h5 class="mb-3">العمل</h5>
                        <div class="mb-3">
                            <label for="pastExperiences" class="form-label">الخبرات السابقة</label>
                            <textarea class="form-control" id="pastExperiences" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="currentJob" class="form-label">العمل الحالي</label>
                            <input type="text" class="form-control" id="currentJob">
                        </div>
                        <div class="mb-3">
                            <label for="jobTitle" class="form-label">الوظيفة</label>
                            <input type="text" class="form-control" id="jobTitle">
                        </div>
                        <div class="mb-3">
                            <label for="hiringDate" class="form-label">تاريخ التعيين</label>
                            <input type="date" class="form-control" id="hiringDate">
                        </div>
                        <div class="mb-3">
                            <label for="institution" class="form-label">المؤسسة</label>
                            <input type="text" class="form-control" id="institution">
                        </div>

                        <!-- التعهد -->
                        <h5 class="mb-3">التعهد</h5>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="agreement" required>
                            <label class="form-check-label" for="agreement">أتعهد بالالتزام بالنظام الأساسي للشبكة وميثاق
                                الشرف الصحفي.</label>
                        </div>

                        <!-- التوقيع والتاريخ -->
                        <div class="mb-3">
                            <label for="signature" class="form-label">توقيع صاحب الطلب</label>
                            <input type="text" class="form-control" id="signature">
                        </div>
                        <div class="mb-3">
                            <label for="submissionDate" class="form-label">تاريخ التقديم</label>
                            <input type="date" class="form-control" id="submissionDate">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn default-btn">إرسال الطلب</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
