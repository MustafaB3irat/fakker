@extends('layouts.main')


@section('style')

    <link rel="stylesheet" href="{{asset('css/Family/create_page_style.css')}}"/>

@endsection


@section('content')


    <div class="row" style="justify-content: center;margin-top: 15px;">

        <h2 lang="ar">تسجيل عائلة جديدة</h2>


    </div>


    <div class="row" style="justify-content: center; margin-top: 25px;margin-bottom: 30px">
        <div class="col-md-12 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" dir="rtl" action="{{action('DataController@store')}}"
                          method="post">

                        {{ csrf_field() }}
                        <fieldset>

                            <div class="row">


                                <div class="col">

                                    <div class="form-group">
                                        <label for="name" lang="ar"><strong>الإسم الكامل</strong></label>
                                        <input class="form-control" placeholder="e.g.Jone Doe" name="name" type="text"
                                               id="name" required value="{{old('name')}}">
                                    </div>
                                </div>

                                <div class="col">

                                    <div class="form-group">
                                        <label for="phone" lang="ar"><strong>رقم للتواصل</strong></label>
                                        <input class="form-control" placeholder="e.g.05********" name="phone"
                                               type="number" id="phone" required value="{{old('phone')}}">
                                    </div>

                                </div>

                            </div>


                            <div class="row">

                                <div class="col">

                                    <div class="form-group">
                                        <label for="area" lang="ar"><strong>المنطقة</strong></label>
                                        <input class="form-control" placeholder="e.g.Ramallah" name="area" type="text"
                                               id="area" required value="{{old('area')}}">
                                    </div>

                                </div>


                                <div class="col">

                                    <div class="form-group">
                                        <label for="address" lang="ar"><strong>العنوان بالتفصيل</strong></label>
                                        <input class="form-control" placeholder="e.g.st.330 ramallah main.St"
                                               name="address" type="text" id="address" required
                                               value="{{old('address')}}">
                                    </div>


                                </div>


                            </div>


                            <div class="row">


                                <div class="form-group">

                                    <div class="col">


                                        <h5 lang="ar">هل يعمل أحد في العائلة</h5><br/>

                                        <div class="btn-group btn-group-toggle">


                                            <label class="btn btn-success" style="margin-left: 10px; width: 100px"
                                                   id="yes_label">
                                                <input type="radio" name="workState" id="yes" value="1"
                                                       autocomplete="off" checked
                                                       onclick=" document.getElementById('no_label').classList.remove('btn-success');document.getElementById('no_label').classList.add('btn-danger');document.getElementById('yes_label').classList.remove('btn-danger');
            document.getElementById('yes_label').classList.add('btn-success');" {{old('workState') == "1"? "checked" :""}}>
                                                نعم
                                            </label>

                                            <label class="btn btn-danger" style="width: 100px" id="no_label">
                                                <input type="radio" name="workState" id="no" value="0"
                                                       autocomplete="off"
                                                       onclick=" document.getElementById('yes_label').classList.remove('btn-success');document.getElementById('yes_label').classList.add('btn-danger');document.getElementById('no_label').classList.remove('btn-danger');
            document.getElementById('no_label').classList.add('btn-success');" {{old('workState') == "0"? "checked" :""}}>
                                                لا
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
                                               type="number" id="haywa" required value="{{old('hawya')}}">
                                    </div>

                                </div>

                                <div class="col">

                                    <div class="form-group">
                                        <label for="state" lang="ar"><strong>الحالة الإجتماعية</strong></label>
                                        <select class="form-control" name="state"
                                                id="state" required>

                                            <option value="single"
                                                    selected {{old('state') == "single"? "selected" :""}}>أعزب/عزباء
                                            </option>
                                            <option value="married" {{old('state') == "married"? "selected" :""}}>
                                                متزوج/متزوجة
                                            </option>
                                            <option value="divorced" {{old('state') == "divorced"? "selected" :""}}>
                                                مطلق/مطلقة
                                            </option>
                                            <option value="widow" {{old('state') == "widow"? "selected" :""}}>
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
                                               type="text" id="houseHolderWork" required value="{{old('houseHolderWork')
                                               }}">
                                    </div>

                                </div>

                                <div class="col">

                                    <div class="form-group">
                                        <label for="houseHolderWork" lang="ar"><strong>عمل الأم</strong></label>
                                        <input class="form-control" placeholder="e.g. house wife" name="motherWork"
                                               type="text" id="motherWork" required value="{{old('motherWork')}}">
                                    </div>


                                </div>
                            </div>


                            <div class="form-group" id="incomeSrcDiv">
                                <label for="incomeSrc" lang="ar"><strong>مصدر الدخل</strong></label>
                                {{--                                <input class="form-control" placeholder="e.g. agencies" name="incomeSrc" type="text"--}}
                                {{--                                       id="incomeSrc" required value="{{old('incomeSrc')}}">--}}

                                <select name="incomeSrc" id="incomeSrc" class="form-control" required>
                                    <option value="header" disabled="disabled" selected>اختر مصدر الدخل</option>
                                    <option value="شؤون" {{old('incomeSrc') == "شؤون"? "selected" :""}}>شؤون</option>
                                    <option value="زكاة" {{old('incomeSrc') == "زكاة"? "selected" :""}}>زكاة</option>
                                    <option value="وكالة" {{old('incomeSrc') == "وكالة"? "selected" :""}}>وكالة</option>
                                    <option value="أسرى" {{old('incomeSrc') == "أسرى"? "selected" :""}}>أسرى</option>
                                    <option value="أخرى">أخرى</option>
                                </select>
                            </div>


                            <hr/>

                            <div class="row">

                                <div class="col">

                                    <div class="form-group">
                                        <label for="houseHolderWork" lang="ar"><strong>عدد الأولاد</strong></label>
                                        <input class="form-control" placeholder="e.g. 3" name="boysNum" type="number"
                                               id="boysNum" required>
                                    </div>
                                </div>

                                <div class="col">

                                    <div class="form-group">
                                        <label for="boysAges" id="boys_label" lang="ar"><strong>تواريخ الميلاد</strong></label>
                                        <div id="boysAges">

                                            <input class="form-control" type="text" disabled="disabled"
                                                   placeholder="أدخل عدد الأولاد أولاً">

                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="row">

                                <div class="col">

                                    <div class="form-group">
                                        <label for="houseHolderWork" lang="ar"><strong>عدد
                                                البنات</strong></label>
                                        <input class="form-control" placeholder="e.g. 3" name="girlsNum" type="number"
                                               id="girlsNum" required>
                                    </div>
                                </div>

                                <div class="col">


                                    <div class="form-group">
                                        <label for="girlsAges" id="girls_label" lang="ar"><strong>تواريخ
                                                الميلاد</strong></label>

                                        <div id="girlsAges">
                                            <input class="form-control" placeholder="أدخل عدد البنات أولاً"
                                                   disabled="disabled">
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


                                                <label class="btn btn-success" style="margin-left: 10px; width: 100px"
                                                       id="yes_label1">
                                                    <input type="radio" name="assuranceState" id="yes1" value="1"
                                                           autocomplete="off" checked
                                                           onclick=" document.getElementById('no_label1').classList.remove('btn-success');document.getElementById('no_label1').classList.add('btn-danger');document.getElementById('yes_label1').classList.remove('btn-danger');
            document.getElementById('yes_label1').classList.add('btn-success');" {{old('assuranceState') == "1"? "checked" :""}}>
                                                    تمتلك
                                                </label>

                                                <label class="btn btn-danger" style="width: 100px" id="no_label1">
                                                    <input type="radio" name="assuranceState" id="no1" value="0"
                                                           autocomplete="off"
                                                           onclick=" document.getElementById('yes_label1').classList.remove('btn-success');document.getElementById('yes_label1').classList.add('btn-danger');document.getElementById('no_label1').classList.remove('btn-danger');
            document.getElementById('no_label1').classList.add('btn-success');" {{old('assuranceState') == "0"? "checked" :""}}>
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
                                            <option value="header" disabled selected>أختر نوع التأمين</option>
                                            <option value="حكومي" {{old('assuranceType') == "حكومي"? "selected" :""}}>
                                                حكومي
                                            </option>
                                            <option value="خاص" {{old('assuranceType') == "خاص"? "selected" :""}}>خاص
                                            </option>
                                            <option value="وكالة" {{old('assuranceType') == "وكالة"? "selected" :""}}>
                                                وكالة
                                            </option>
                                            <option value="شؤون" {{old('assuranceType') == "شؤون"? "selected" :""}}>
                                                شؤون
                                            </option>
                                            <option value="أسرى" {{old('assuranceType') == "أسرى"? "selected" :""}}>
                                                أسرى
                                            </option>
                                            <option value="أخرى" {{old('assuranceType') == "أخرى"? "selected" :""}}>
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


                                                <label class="btn btn-success" style="margin-left: 10px; width: 100px"
                                                       id="yes_label2">
                                                    <input type="radio" name="isThereUniStudent" id="yes2" value="1"
                                                           autocomplete="off" checked
                                                           onclick=" document.getElementById('no_label2').classList.remove('btn-success');document.getElementById('no_label2').classList.add('btn-danger');document.getElementById('yes_label2').classList.remove('btn-danger');
            document.getElementById('yes_label2').classList.add('btn-success');" {{old('isThereUniStudent') == "1"? "checked" :""}}>
                                                    يوجد
                                                </label>

                                                <label class="btn btn-danger" style="width: 100px" id="no_label2">
                                                    <input type="radio" name="isThereUniStudent" id="no2" value="0"
                                                           autocomplete="off"
                                                           onclick=" document.getElementById('yes_label2').classList.remove('btn-success');document.getElementById('yes_label2').classList.add('btn-danger');document.getElementById('no_label2').classList.remove('btn-danger');
            document.getElementById('no_label2').classList.add('btn-success');" {{old('isThereUniStudent') == "0"? "checked" :""}}>
                                                    لا يوجد
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
                                               type="text" id="studentDetails" value="{{old('studentDetails')}}">
                                    </div>


                                </div>


                            </div>


                            <div class="row" style="margin-top: 15px">

                                <div class="col">
                                    <div class="form-group">

                                        <div class="col">


                                            <h5 lang="ar">هل هناك مريض بحاجة لعلاج أو دواء بشكل مزمن</h5><br/>

                                            <div class="btn-group btn-group-toggle">


                                                <label class="btn btn-success" style="margin-left: 10px; width: 100px"
                                                       id="yes_label3">
                                                    <input type="radio" name="isThereSickPeople_Drugs" id="yes3"
                                                           value="1" autocomplete="off" checked
                                                           onclick=" document.getElementById('no_label3').classList.remove('btn-success');document.getElementById('no_label3').classList.add('btn-danger');document.getElementById('yes_label3').classList.remove('btn-danger');
            document.getElementById('yes_label3').classList.add('btn-success');" {{old('isThereSickPeople_Drugs') == "1"? "checked" :""}}>
                                                    نعم
                                                </label>

                                                <label class="btn btn-danger" style="width: 100px" id="no_label3">
                                                    <input type="radio" name="isThereSickPeople_Drugs" id="no3"
                                                           value="0" autocomplete="off"
                                                           onclick="" {{old('isThereSickPeople_Drugs') == "0"? "checked" :""}}>
                                                    لا
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
                                               type="text" id="sicknessDetails" value="{{old('sicknessDetails')}}">
                                    </div>


                                </div>


                            </div>


                            <div class="row">

                                <div class="col-md-12" style="justify-content: center!important; margin-top:30px;">

                                    <input class="btn btn-lg btn-primary " type="submit" value="تسجيل" name="create"
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


        var income = "{{old('incomeSrc')}}";

        if (income != "" && income != "وكالة" && income != "شؤون" && income != "أسرى" && income != "زكاة") {

            var div = document.getElementById('incomeSrcDiv');
            var incomeSrc = document.getElementById('incomeSrc');
            incomeSrc.selectedIndex = 5;
            var value = incomeSrc.options[incomeSrc.selectedIndex].value;


            var x = document.createElement("INPUT");
            x.setAttribute("type", "text");
            x.setAttribute("name", "incomeSrcOther");
            x.setAttribute("placeholder", "الرجاء إدخال مصدر الدخل ");
            x.classList.add("form-control");
            x.classList.add("col-md-6");
            x.style.marginTop = "10px";
            x.setAttribute("id", "other");
            x.setAttribute("value", income);
            x.required = true;

            div.appendChild(x);


        }


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

            document.getElementById('assuranceType').disabled = true;

        });

        document.getElementById('yes1').addEventListener("click", function () {

            document.getElementById('assuranceType').disabled = false;

        });

        document.getElementById('no2').addEventListener("click", function () {

            document.getElementById('studentDetails').disabled = true;


        });

        document.getElementById('yes2').addEventListener("click", function () {

            document.getElementById('studentDetails').disabled = false;

        });

        document.getElementById('yes3').addEventListener("click", function () {

            document.getElementById('sicknessDetails').disabled = false;

        });

        document.getElementById('no3').addEventListener("click", function () {

            document.getElementById('sicknessDetails').disabled = true;
            document.getElementById('yes_label3').classList.remove('btn-success');
            document.getElementById('yes_label3').classList.add('btn-danger');
            document.getElementById('no_label3').classList.remove('btn-danger');
            document.getElementById('no_label3').classList.add('btn-success');

        });


        document.getElementById('incomeSrc').addEventListener("change", function () {

            var div = document.getElementById('incomeSrcDiv');
            var incomeSrc = document.getElementById('incomeSrc');
            var value = incomeSrc.options[incomeSrc.selectedIndex].value;

            if (value == "أخرى") {

                var x = document.createElement("INPUT");
                x.setAttribute("type", "text");
                x.setAttribute("name", "incomeSrcOther");
                x.setAttribute("placeholder", "الرجاء إدخال مصدر الدخل ");
                x.classList.add("form-control");
                x.classList.add("col-md-6");
                x.style.marginTop = "10px";
                x.setAttribute("id", "other");
                x.required = true;


                div.appendChild(x);
            } else {

                var other = document.getElementById('other');

                if (other != null)
                    div.removeChild(other);

            }


        });


    </script>


@endsection