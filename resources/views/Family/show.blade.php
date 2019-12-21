@extends('Layouts.main')

@section('style')

    <link rel="stylesheet" href="{{asset('css/Family/show_page_style.css')}}"/>

@endsection

@section('content')


    <a href="/data" class="btn btn-primary" style="margin: 20px">back</a>


    <div class="row" id="img-container">

        <img id="avatar" src="{{asset('img/favicon.jpg')}}" alt="avatar"/>

    </div>

    <div class="row centralize">

        <h3 lang="ar">{{$Family->name}}</h3>

    </div>


    <div class="row centralize">

        <h3 lang="ar">{{$Family->area}}</h3>

    </div>

    <div class="row centralize">

        <h3 lang="ar">{{$Family->phone}}</h3>

    </div>


    <div class="row" dir="rtl">


        <div class="container py-3">
            <div class="card">
                <div class="row ">
                    <div class="col-md-4">
                        <h3 lang="ar">رقم الهوية</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->hawya}}</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    </div>

    <div class="row" dir="rtl">


        <div class="container py-3">
            <div class="card">
                <div class="row ">
                    <div class="col-md-4">
                        <h3 lang="ar">العنوان بالتفصيل</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->address}}</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>


    <div class="row" dir="rtl">


        <div class="container py-3">
            <div class="card">
                <div class="row ">
                    <div class="col-md-4">
                        <h3 lang="ar">هل يعمل أحد في العائلة</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->workState}}</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <div class="row" dir="rtl">


        <div class="container py-3">
            <div class="card">
                <div class="row ">
                    <div class="col-md-4">
                        <h3 lang="ar">عمل رب الأسرة</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->houseHolderWork}}</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>

    <div class="row" dir="rtl">


        <div class="container py-3">
            <div class="card">
                <div class="row ">
                    <div class="col-md-4">
                        <h3 lang="ar">عمل الأم</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->motherWork}}</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>

    <div class="row" dir="rtl">

        <div class="container py-3">
            <div class="card">
                <div class="row ">
                    <div class="col-md-4">
                        <h3 lang="ar">الحالة الإجتماعية</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->state}}</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>


    <div class="row" dir="rtl">

        <div class="container py-3">
            <div class="card">
                <div class="row ">
                    <div class="col-md-4">
                        <h3 lang="ar">مصدر الدخل</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->incomeSrc}}</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>


    <div class="row" dir="rtl">


        <div class="container py-3">
            <div class="card">
                <div class="row ">
                    <div class="col-md-4">
                        <h3 lang="ar">عدد الأولاد</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->boysNum}}</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>



    <div class="row" dir="rtl">


        <div class="container py-3">
            <div class="card">
                <div class="row ">
                    <div class="col-md-4">
                        <h3 lang="ar">أعمارهم</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->boysAges}}</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="row" dir="rtl">


        <div class="container py-3">
            <div class="card">
                <div class="row ">
                    <div class="col-md-4">
                        <h3 lang="ar">عدد البنات</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->girlsNum}}</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>

    <div class="row" dir="rtl">


        <div class="container py-3">
            <div class="card">
                <div class="row ">
                    <div class="col-md-4">
                        <h3 lang="ar">أعمارهن</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->girlsAges}}</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>

    <div class="row" dir="rtl">


        <div class="container py-3">
            <div class="card">
                <div class="row ">
                    <div class="col-md-4">
                        <h3 lang="ar">نوع التأمين الصحي</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">
                            <h3 lang="ar">{{$Family->assuranceType}}</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <div class="row" dir="rtl">


        <div class="container py-3">
            <div class="card">
                <div class="row ">
                    <div class="col-md-4">
                        <h3 lang="ar">هل يوجد طالب في الجامعة</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->isThereUniStudent}}</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="row" dir="rtl">

        <div class="container py-3">
            <div class="card">
                <div class="row ">
                    <div class="col-md-4">
                        <h3 lang="ar">معلومات الطالب</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->studentDetails}}</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="row" dir="rtl">


        <div class="container py-3">
            <div class="card">
                <div class="row ">
                    <div class="col-md-4">
                        <h3 lang="ar">هل يوجد مريض بحاجة لعلاج أو دواء بشكل مستمر</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->isThereSickPeople_Drugs}}</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>

    <div class="row" dir="rtl">

        <div class="container py-3">
            <div class="card">
                <div class="row ">
                    <div class="col-md-4">
                        <h3 lang="ar">تفاصيل المرض أو الدواء</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">
                            <h3 lang="ar">{{$Family->sicknessDetails}}</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection