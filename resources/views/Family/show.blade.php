@extends('Layouts.main')

@section('style')

    <link rel="stylesheet" href="{{asset('css/Family/show_page_style.css')}}"/>

@endsection

@section('content')


    <a href="/data" class="btn btn-primary btn-lg" style="margin: 20px">back</a>

    <a href="{{route('data.edit',$Family->id)}}" class="btn btn-success btn-lg"
       style="margin: 20px;float: right">Edit</a>



    <div class="row header" id="img-container">

        <img id="avatar" src="{{asset('img/family1.png')}}" alt="avatar"/>

    </div>

    <div class="row header centralize">

        <h3 lang="ar">{{$Family->name}}</h3>

    </div>


    <div class="row header centralize">

        <h3 lang="ar">{{$Family->area}}</h3>

    </div>

    <div class="row header centralize">

        <h3 lang="ar" style="color: red">{{$Family->phone}}</h3>

    </div>
    <br>
    <br>

    <hr>

    <h3 lang="ar" class="titles">المعلومات الأساسية</h3>

    <br>


    <div class="row" dir="rtl">


        <div class="container py-3">
            <div class="card">
                <div class="row ">

                    <br>
                    <br>

                    <div class="col-md-4">
                        <h3 lang="ar">رقم الهوية</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->hawya}}</h3>
                        </div>
                    </div>


                    <br>
                    <br>
                    <br>


                    <div class="col-md-4">
                        <h3 lang="ar">العنوان بالتفصيل</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->address}}</h3>
                        </div>
                    </div>


                    <br>
                    <br>
                    <br>


                    <div class="col-md-4">
                        <h3 lang="ar">هل يعمل أحد في العائلة</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->workState}}</h3>
                        </div>
                    </div>

                    <br>
                    <br>
                    <br>

                    <div class="col-md-4">
                        <h3 lang="ar">عمل رب الأسرة</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->houseHolderWork}}</h3>
                        </div>
                    </div>


                    <br>
                    <br>
                    <br>

                    <div class="col-md-4">
                        <h3 lang="ar">عمل الأم</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->motherWork}}</h3>
                        </div>
                    </div>

                    <br>
                    <br>
                    <br>

                    <div class="col-md-4">
                        <h3 lang="ar">الحالة الإجتماعية</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->state}}</h3>
                        </div>
                    </div>


                    <br>
                    <br>
                    <br>


                    <div class="col-md-4">
                        <h3 lang="ar">مصدر الدخل</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->incomeSrc}}</h3>
                        </div>
                    </div>

                    <br>
                    <br>
                    <br>

                    <div class="col-md-4">
                        <h3 lang="ar">نوع التأمين الصحي</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">
                            <h3 lang="ar">{{$Family->assuranceType}}</h3>
                        </div>
                    </div>


                    <br>
                    <br>

                </div>
            </div>
        </div>


    </div>




    <hr>


    <h3 lang="ar" class="titles">المعلومات الثانوية</h3>


    <div class="row" dir="rtl">


        <div class="container py-3">
            <div class="card">
                <div class="row ">

                    <br>
                    <br>

                    <div class="col-md-4">
                        <h3 lang="ar">عدد الأولاد</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->boysNum}}</h3>
                        </div>
                    </div>


                    <br>
                    <br>
                    <br>

                    <div class="col-md-4">
                        <h3 lang="ar">أعمارهم</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->boysAges}}</h3>
                        </div>
                    </div>


                    <br>
                    <br>
                    <br>

                    <div class="col-md-4">
                        <h3 lang="ar">عدد البنات</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->girlsNum}}</h3>
                        </div>
                    </div>

                    <br>
                    <br>
                    <br>

                    <div class="col-md-4">
                        <h3 lang="ar">أعمارهن</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->girlsAges}}</h3>
                        </div>
                    </div>

                    <br>
                    <br>
                    <br>


                    <div class="col-md-4">
                        <h3 lang="ar">هل يوجد طالب في الجامعة</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->isThereUniStudent}}</h3>
                        </div>
                    </div>


                    <br>
                    <br>
                    <br>


                    <div class="col-md-4">
                        <h3 lang="ar">معلومات الطالب</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->studentDetails}}</h3>
                        </div>
                    </div>

                    <br>
                    <br>
                    <br>

                    <div class="col-md-4">
                        <h3 lang="ar">هل يوجد مريض بحاجة لعلاج أو دواء بشكل مستمر</h3>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">

                            <h3 lang="ar">{{$Family->isThereSickPeople_Drugs}}</h3>
                        </div>
                    </div>

                    <br>
                    <br>
                    <br>


                </div>
            </div>
        </div>

    </div>


@endsection