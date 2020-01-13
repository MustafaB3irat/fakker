@extends('Layouts.main')

@section('style')

    <link rel="stylesheet" href="{{asset('css/Family/create_page_style.css')}}"/>

    <style>

        input[type="radio"] {

            display: inline;
            margin: 5px;
        }

    </style>

@endsection



@section('content')




    <div class="row" style="justify-content: center;margin-top: 30px;">


        <div class="col" style="float: left;">

            <a href="{{url()->previous()}}" class="btn btn-primary btn-lg">Back</a>

        </div>

        <div class="col">
            <h2>تعديل معلومات عائلة</h2>
            <h2 lang="ar">{{ $family->name }} </h2>
        </div>


    </div>


    <div class="row" style="justify-content: center; margin-top: 25px;margin-bottom: 30px">
        <div class="col-md-12 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" dir="rtl"
                          action="{{action('DataController@update',$family->id)}}"
                          method="Post">

                        <input type="hidden" name="_method" value="put"/>

                        {{ csrf_field() }}
                        <fieldset>

                            <div class="row">


                                <div class="col">

                                    <div class="form-group">
                                        <label for="name" lang="ar"><strong>الإسم الكامل</strong></label>
                                        <input class="form-control" placeholder="e.g.Jone Doe" name="name" type="text"
                                               id="name" value="{{$family->name}}" required>
                                    </div>
                                </div>

                                <div class="col">

                                    <div class="form-group">
                                        <label for="phone" lang="ar"><strong>رقم للتواصل</strong></label>
                                        <input class="form-control" placeholder="e.g.05********" name="phone"
                                               type="number" id="phone" value="{{$family->phone}}" required>
                                    </div>

                                </div>

                            </div>


                            <div class="row">

                                <div class="col">

                                    <div class="form-group">
                                        <label for="area" lang="ar"><strong>المنطقة</strong></label>
                                        <input class="form-control" placeholder="e.g.Ramallah" name="area" type="text"
                                               id="area" value="{{$family->area}}" required>
                                    </div>

                                </div>


                                <div class="col">

                                    <div class="form-group">
                                        <label for="address" lang="ar"><strong>العنوان بالتفصيل</strong></label>
                                        <input class="form-control" placeholder="e.g.st.330 ramallah main.St"
                                               name="address" type="text" id="address" value="{{$family->address}}"
                                               required>
                                    </div>


                                </div>


                            </div>


                            <div class="row">


                                <div class="form-group">

                                    <div class="col">


                                        <h5 lang="ar">هل يعمل أحد في العائلة</h5><br/>

                                        <div class="btn-group btn-group-toggle">


                                            <label style="margin-left: 10px; width: 100px;font-size: large"
                                                   id="yes_label">
                                                <input type="radio" name="workState" id="yes" value="1"
                                                       autocomplete="off"
                                                        {{$family->workState == "1" ? "checked" : "" }}>نعم
                                            </label>

                                            <label style="width: 100px;font-size: large" id="no_label">
                                                <input type="radio" name="workState" id="no" value="0"
                                                       {{$family->workState == "0" ? "checked" : "" }}
                                                       autocomplete="off"> لا
                                            </label>


                                        </div>


                                    </div>


                                </div>


                            </div>


                            <hr/>


                            <div class="row">

                                <div class="col">

                                    <div class="form-group">
                                        <label for="haywa" lang="ar"><strong>رقم الهوية</strong></label>
                                        <input class="form-control" placeholder="e.g.40*******" name="hawya"
                                               type="number" id="haywa" value="{{$family->hawya}}" required>
                                    </div>

                                </div>

                                <div class="col">

                                    <div class="form-group">
                                        <label for="state" lang="ar"><strong>الحالة الإجتماعية</strong></label>
                                        <select class="form-control" name="state"
                                                id="state" required>

                                            <option value="single"
                                                    {{$family->state == "single" ? "selected" : "" }} selected>
                                                أعزب/عزباء
                                            </option>
                                            <option value="married" {{$family->state == "married" ? "selected" : "" }}>
                                                متزوج/متزوجة
                                            </option>
                                            <option value="divorced" {{$family->state == "divorced" ? "selected" : "" }}>
                                                مطلق/مطلقة
                                            </option>
                                            <option value="widow" {{$family->state == "widow" ? "selected" : "" }}>
                                                أرمل/أرملة
                                            </option>

                                        </select>
                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col">

                                    <div class="form-group">
                                        <label for="houseHolderWork" lang="ar"><strong>عمل رب الأسرة</strong></label>
                                        <input class="form-control" placeholder="e.g. teacher" name="houseHolderWork"
                                               type="text" id="houseHolderWork" value="{{$family->houseHolderWork}}"
                                               required>
                                    </div>

                                </div>

                                <div class="col">

                                    <div class="form-group">
                                        <label for="houseHolderWork" lang="ar"><strong>عمل الأم</strong></label>
                                        <input class="form-control" placeholder="e.g. house wife" name="motherWork"
                                               type="text" id="motherWork" value="{{$family->motherWork}}" required>
                                    </div>


                                </div>
                            </div>


                            <div class="form-group" id="incomeSrcDiv">
                                <label for="incomeSrc" lang="ar"><strong>مصدر الدخل</strong></label>
                                {{--                                <input class="form-control" placeholder="e.g. agencies" name="incomeSrc" type="text"--}}
                                {{--                                       id="incomeSrc" required value="{{old('incomeSrc')}}">--}}

                                <select name="incomeSrc" id="incomeSrc" class="form-control" required>
                                    <option value="header" disabled="disabled" selected>اختر مصدر الدخل</option>
                                    <option value="شؤون" {{$family->incomeSrc == "شؤون"? "selected" :""}}>شؤون</option>
                                    <option value="زكاة" {{$family->incomeSrc == "زكاة"? "selected" :""}}>زكاة</option>
                                    <option value="وكالة" {{$family->incomeSrc == "وكالة"? "selected" :""}}>وكالة
                                    </option>
                                    <option value="أسرى" {{$family->incomeSrc == "أسرى"? "selected" :""}}>أسرى</option>
                                    <option value="أخرى">أخرى</option>
                                </select>
                            </div>


                            <hr/>

                            <div class="row">

                                <div class="col">

                                    <div class="form-group">
                                        <label for="houseHolderWork" lang="ar"><strong>عدد الأولاد</strong></label>
                                        <input class="form-control" placeholder="e.g. 3" name="boysNum" type="number"
                                               id="boysNum" value="{{$family->boysNum}}" required>
                                    </div>
                                </div>

                                <div class="col">

                                    <div class="form-group">
                                        <label for="boysAges" id="boys_label" lang="ar"><strong>تواريخ الميلاد</strong></label>
                                        <div id="boysAges">


                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">

                                <div class="col">

                                    <div class="form-group">
                                        <label for="houseHolderWork" lang="ar"><strong>عدد البنات</strong></label>
                                        <input class="form-control" placeholder="e.g. 3" name="girlsNum" type="number"
                                               id="girlsNum" value="{{$family->girlsNum}}" required>
                                    </div>
                                </div>

                                <div class="col">


                                    <div class="form-group">
                                        <label for="girlsAges" id="girls_label" lang="ar"><strong>تواريخ
                                                الميلاد</strong></label>

                                        <div id="girlsAges">

                                        </div>

                                    </div>
                                </div>
                            </div>


                            <hr/>


                            <div class="row" style="margin-top: 15px">

                                <div class="col">
                                    <div class="form-group">

                                        <div class="col">


                                            <h5 lang="ar">هل تملك العائلة تأمين صحي</h5><br/>

                                            <div class="btn-group btn-group-toggle">


                                                <label style="margin-left: 10px; width: 100px;font-size: large"
                                                       id="yes_label1">
                                                    <input type="radio" name="assuranceState" id="yes1" value="1"
                                                           autocomplete="off" {{$family->assuranceType != "لا يوجد" ? "checked" : "" }}>
                                                    تمتلك
                                                </label>

                                                <label style="width: 100px;font-size: large" id="no_label1">
                                                    <input type="radio" name="assuranceState" id="no1" value="0"
                                                           autocomplete="off" {{$family->assuranceType == "لا يوجد" ? "checked" : "" }}>
                                                    لا تمتلك
                                                </label>


                                            </div>


                                        </div>


                                    </div>

                                </div>

                                <div class="col">


                                    <div class="form-group">
                                        <label for="assuranceType" lang="ar"><strong>نوع التأمين</strong></label>
                                        <select class="form-control" name="assuranceType"
                                                id="assuranceType">
                                            <option value="header"
                                                    disabled {{$family->assuranceType == "لا يوجد" ? "selected" : "" }}>
                                                أختر نوع التأمين
                                            </option>
                                            <option value="حكومي" {{$family->assuranceType == "حكومي" ? "selected" : "" }}>
                                                حكومي
                                            </option>
                                            <option value="خاص" {{$family->assuranceType == "خاص" ? "selected" : "" }}>
                                                خاص
                                            </option>
                                            <option value="وكالة" {{$family->assuranceType == "وكالة" ? "selected" : "" }}>
                                                وكالة
                                            </option>
                                            <option value="شؤون" {{$family->assuranceType == "شؤون" ? "selected" : "" }}>
                                                شؤون
                                            </option>
                                            <option value="أسرى" {{$family->assuranceType == "أسرى" ? "selected" : "" }}>
                                                أسرى
                                            </option>
                                            <option value="أخرى" {{$family->assuranceType == "أخرى" ? "selected" : "" }}>
                                                أخرى
                                            </option>
                                        </select>
                                    </div>


                                </div>


                            </div>


                            <div class="row" style="margin-top: 15px">

                                <div class="col">
                                    <div class="form-group">

                                        <div class="col">


                                            <h5 lang="ar">هل يوجد طالب جامعي</h5><br/>

                                            <div class="btn-group btn-group-toggle">


                                                <label style="margin-left: 10px; width: 100px;font-size: large"
                                                       id="yes_label2">
                                                    <input type="radio" name="isThereUniStudent" id="yes2" value="1"
                                                           autocomplete="off" checked> يوجد
                                                </label>

                                                <label style="width: 100px;font-size: large" id="no_label2">
                                                    <input type="radio" name="isThereUniStudent" id="no2" value="0"
                                                           autocomplete="off"> لا يوجد
                                                </label>


                                            </div>


                                        </div>


                                    </div>

                                </div>

                                <div class="col">


                                    <div class="form-group">
                                        <label for="studentDetails" lang="ar"><strong>معلومات الطالب</strong></label>
                                        <input class="form-control" placeholder="e.g. ID, University"
                                               name="studentDetails"
                                               type="text" id="studentDetails" value="{{$family->studentDetails}}">
                                    </div>


                                </div>


                            </div>


                            <div class="row" style="margin-top: 15px">

                                <div class="col">
                                    <div class="form-group">

                                        <div class="col">


                                            <h5 lang="ar">هل هناك مريض بحاجة لعلاج أو دواء بشكل مزمن</h5><br/>

                                            <div class="btn-group btn-group-toggle">


                                                <label style="margin-left: 10px; width: 100px;font-size: large"
                                                       id="yes_label3">
                                                    <input type="radio" name="isThereSickPeople_Drugs" id="yes3"
                                                           value="1" autocomplete="off" checked> نعم
                                                </label>

                                                <label style="width: 100px;font-size: large" id="no_label3">
                                                    <input type="radio" name="isThereSickPeople_Drugs" id="no3"
                                                           value="0" autocomplete="off"> لا
                                                </label>


                                            </div>


                                        </div>


                                    </div>

                                </div>

                                <div class="col">


                                    <div class="form-group">
                                        <label for="sicknessDetails" lang="ar"><strong>نوع المرض أو
                                                الدواء</strong></label>
                                        <input class="form-control" placeholder="e.g. ID, University"
                                               name="sicknessDetails"
                                               type="text" id="sicknessDetails" value="{{$family->sicknessDetails}}">
                                    </div>


                                </div>


                            </div>


                            <div class="row">

                                <div class="col-md-12" style="justify-content: center!important; margin-top:30px;">

                                    <input class="btn btn-lg btn-primary " type="submit" value="تعديل" name="create"
                                           id="create" style="width: 50%;display: block;margin: 0 auto">

                                </div>

                            </div>


                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">


        document.getElementById('boysNum').addEventListener("keyup", function () {

            var num = document.getElementById('boysNum').value;

            var div = document.getElementById('boysAges');
            var x;

            div.innerHTML = "";

            if (num == 0)
                document.getElementById('boys_label').innerText = "";
            else
                document.getElementById('boys_label').innerHTML = "<strong>تواريخ الميلاد</strong>";

            for (var i = 0; i < num; i++) {

                x = document.createElement("INPUT");
                x.setAttribute("type", "date");
                x.classList.add("form-control");
                x.style.marginTop = "5px";
                x.required = true;
                x.setAttribute("name", "b_" + (i + 1));

                div.appendChild(x);


            }

        });

        document.getElementById('girlsNum').addEventListener("keyup", function () {

            var num = document.getElementById('girlsNum').value;

            var div = document.getElementById('girlsAges');
            var x;

            div.innerHTML = "";

            if (num == 0)
                document.getElementById('girls_label').innerText = "";
            else
                document.getElementById('girls_label').innerHTML = "<strong>تواريخ الميلاد</strong>";

            for (var i = 0; i < num; i++) {

                x = document.createElement("INPUT");
                x.setAttribute("type", "date");
                x.classList.add("form-control");
                x.style.marginTop = "5px";
                x.required = true;
                x.setAttribute("name", "g_" + (i + 1));

                div.appendChild(x);


            }
        });


        document.getElementById('no1').addEventListener("click", function () {

            document.getElementById('assuranceType').selectedIndex = 0;
            document.getElementById('assuranceType').disabled = true;


        });

        document.getElementById('yes1').addEventListener("click", function () {

            document.getElementById('assuranceType').disabled = false;

        });

        document.getElementById('no2').addEventListener("click", function () {

            document.getElementById('studentDetails').value = "";
            document.getElementById('studentDetails').disabled = true;

        });

        document.getElementById('yes2').addEventListener("click", function () {

            document.getElementById('studentDetails').disabled = false;

        });

        document.getElementById('yes3').addEventListener("click", function () {

            document.getElementById('sicknessDetails').disabled = false;

        });

        document.getElementById('no3').addEventListener("click", function () {

            document.getElementById('sicknessDetails').value = "";
            document.getElementById('sicknessDetails').disabled = true;

        });


        var boysAgesDiv = document.getElementById('boysAges');
        var girlsAgesDiv = document.getElementById('girlsAges');


        var boysNum = '{{$family->boysNum}}';
        var girlsNum = '{{$family->girlsNum}}';


        var boysAges = "{{$family->boysAges}}";
        var girlsAges = "{{$family->girlsAges}}";


        var bAges = boysAges.split(";");

        var gAges = girlsAges.split(";");

        var x;

        for (var i = 1; i <= boysNum; i++) {

            x = document.createElement("INPUT");
            x.setAttribute("type", "date");
            x.setAttribute("name", ("b_" + i));
            x.classList.add("form-control");
            x.style.marginTop = "5px";

            x.value = bAges[i - 1];

            boysAgesDiv.appendChild(x);

        }

        for (i = 1; i <= girlsNum; i++) {

            x = document.createElement("INPUT");
            x.setAttribute("type", "date");
            x.setAttribute("name", ("g_" + i));
            x.classList.add("form-control");
            x.style.marginTop = "5px";

            x.value = gAges[i - 1];

            boysAgesDiv.appendChild(x);

        }


        document.getElementById('incomeSrc').addEventListener("change", function () {


            var div = document.getElementById('incomeSrcDiv');
            var incomeSrc = document.getElementById('incomeSrc');
            var value = incomeSrc.options[incomeSrc.selectedIndex].value;

            if (value == "أخرى") {

                x = document.createElement("INPUT");
                x.setAttribute("type", "text");
                x.setAttribute("name", "incomeSrcOther");
                x.setAttribute("placeholder", "الرجاء إدخال مصدر الدخل ");
                x.classList.add("form-control");
                x.classList.add("col-md-6");
                x.style.marginTop = "10px";
                x.setAttribute("id", "other");
                x.required= true;


                div.appendChild(x);
            } else {

                var other = document.getElementById('other');

                if (other != null)
                    div.removeChild(other);

            }

        });


        var income = "{{$family->incomeSrc}}";

        if (income != "وكالة" && income != "شؤون" && income != "أسرى" && income != "زكاة") {

            var div = document.getElementById('incomeSrcDiv');
            var incomeSrc = document.getElementById('incomeSrc');
            incomeSrc.selectedIndex = 5;
            var value = incomeSrc.options[incomeSrc.selectedIndex].value;

            x = document.createElement("INPUT");
            x.setAttribute("type", "text");
            x.setAttribute("name", "incomeSrcOther");
            x.setAttribute("placeholder", "الرجاء إدخال مصدر الدخل ");
            x.classList.add("form-control");
            x.classList.add("col-md-6");
            x.style.marginTop = "10px";
            x.setAttribute("id", "other");
            x.required= true;
            x.setAttribute("value", income);


            div.appendChild(x);


        }


    </script>



@endsection