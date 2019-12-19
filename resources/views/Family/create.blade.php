@extends('layouts.main')


@section('style')

    <link rel="stylesheet" href="{{asset('css/createPage/create_page_style.css')}}"/>

@endsection


@section('content')


    <div class="row" style="justify-content: center;margin-top: 15px;">

        <h2 lang="ar">تسجيل عائلة جديدة</h2>


    </div>


    <div class="row" style="justify-content: center; margin-top: 25px;margin-bottom: 30px">
        <div class="col-md-12 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" dir="rtl" action="{{action('DataController@store')}}" method="post">

                        {{ csrf_field() }}
                        <fieldset>

                            <div class="row">


                                <div class="col">

                                    <div class="form-group">
                                        <label for="name" lang="ar"><strong>الإسم الكامل</strong></label>
                                        <input class="form-control" placeholder="e.g.Jone Doe" name="name" type="text"
                                               id="name">
                                    </div>
                                </div>

                                <div class="col">

                                    <div class="form-group">
                                        <label for="phone" lang="ar"><strong>رقم للتواصل</strong></label>
                                        <input class="form-control" placeholder="e.g.05********" name="phone"
                                               type="number" id="phone">
                                    </div>

                                </div>

                            </div>


                            <div class="row">

                                <div class="col">

                                    <div class="form-group">
                                        <label for="area" lang="ar"><strong>المنطقة</strong></label>
                                        <input class="form-control" placeholder="e.g.Ramallah" name="area" type="text"
                                               id="area">
                                    </div>

                                </div>


                                <div class="col">

                                    <div class="form-group">
                                        <label for="address" lang="ar"><strong>العنوان بالتفصيل</strong></label>
                                        <input class="form-control" placeholder="e.g.st.330 ramallah main.St"
                                               name="address" type="text" id="address">
                                    </div>


                                </div>


                            </div>


                            <div class="row">


                                <div class="form-group">

                                    <div class="col">


                                        <h5 lang="ar">هل يعمل أحد في العائلة</h5><br/>

                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">


                                            <label class="btn btn-success" style="margin-left: 10px; width: 100px"
                                                   id="yes_label">
                                                <input type="radio" name="workState" id="yes" value="1" autocomplete="off" checked
                                                       onclick=" document.getElementById('no_label').classList.remove('btn-success');document.getElementById('no_label').classList.add('btn-danger');document.getElementById('yes_label').classList.remove('btn-danger');
            document.getElementById('yes_label').classList.add('btn-success');"> نعم
                                            </label>

                                            <label class="btn btn-danger" style="width: 100px" id="no_label">
                                                <input type="radio" name="workState" id="no" value="0" autocomplete="off"
                                                       onclick=" document.getElementById('yes_label').classList.remove('btn-success');document.getElementById('yes_label').classList.add('btn-danger');document.getElementById('no_label').classList.remove('btn-danger');
            document.getElementById('no_label').classList.add('btn-success');"> لا
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
                                               type="number" id="haywa">
                                    </div>

                                </div>

                                <div class="col">

                                    <div class="form-group">
                                        <label for="state" lang="ar"><strong>الحالة الإجتماعية</strong></label>
                                        <select class="form-control" name="state"
                                               id="state">

                                            <option value="single">أعزب/عزباء</option>
                                            <option value="married">متزوج/متزوجة</option>
                                            <option value="divorced">مطلق/مطلقة</option>
                                            <option value="widow">أرمل/أرملة</option>

                                        </select>
                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col">

                                    <div class="form-group">
                                        <label for="houseHolderWork" lang="ar"><strong>عمل رب الأسرة</strong></label>
                                        <input class="form-control" placeholder="e.g. teacher" name="houseHolderWork"
                                               type="text" id="houseHolderWork">
                                    </div>

                                </div>

                                <div class="col">

                                    <div class="form-group">
                                        <label for="houseHolderWork" lang="ar"><strong>عمل الأم</strong></label>
                                        <input class="form-control" placeholder="e.g. house wife" name="motherWork"
                                               type="text" id="motherWork">
                                    </div>


                                </div>
                            </div>


                            <div class="form-group">
                                <label for="incomeSrc" lang="ar"><strong>مصدر الدخل</strong></label>
                                <input class="form-control" placeholder="e.g. agencies" name="incomeSrc" type="text"
                                       id="incomeSrc">
                            </div>


                            <hr/>

                            <div class="row">

                                <div class="col">

                                    <div class="form-group">
                                        <label for="houseHolderWork" lang="ar"><strong>عدد الأولاد</strong></label>
                                        <input class="form-control" placeholder="e.g. 3" name="boysNum" type="number"
                                               id="boysNum">
                                    </div>
                                </div>

                                <div class="col">

                                    <div class="form-group">
                                        <label for="boysAges" lang="ar"><strong>أعمارهم</strong></label>
                                        <input class="form-control" placeholder="e.g. 10,20,30" name="boysAges"
                                               type="text" id="boysAges">
                                    </div>

                                </div>
                            </div>


                            <div class="row">

                                <div class="col">

                                    <div class="form-group">
                                        <label for="houseHolderWork" lang="ar"><strong>عدد البنات</strong></label>
                                        <input class="form-control" placeholder="e.g. 3" name="girlsNum" type="number"
                                               id="girlsNum">
                                    </div>
                                </div>

                                <div class="col">


                                    <div class="form-group">
                                        <label for="girlsAges" lang="ar"><strong>أعمارهن</strong></label>
                                        <input class="form-control" placeholder="e.g. 10,15,13" name="girlsAges"
                                               type="text" id="girlsAges">
                                    </div>
                                </div>
                            </div>


                            <hr/>



                            <div class="row" style="margin-top: 15px">

                                <div class="col">
                                <div class="form-group">

                                    <div class="col">


                                        <h5 lang="ar">هل تملك العائلة تأمين صحي</h5><br/>

                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">


                                            <label class="btn btn-success" style="margin-left: 10px; width: 100px"
                                                   id="yes_label1">
                                                <input type="radio" name="assuranceState" id="yes1"  value="1"autocomplete="off" checked
                                                       onclick=" document.getElementById('no_label1').classList.remove('btn-success');document.getElementById('no_label1').classList.add('btn-danger');document.getElementById('yes_label1').classList.remove('btn-danger');
            document.getElementById('yes_label1').classList.add('btn-success');"> تمتلك
                                            </label>

                                            <label class="btn btn-danger" style="width: 100px" id="no_label1">
                                                <input type="radio" name="assuranceState" id="no1" value="0" autocomplete="off"
                                                       onclick=" document.getElementById('yes_label1').classList.remove('btn-success');document.getElementById('yes_label1').classList.add('btn-danger');document.getElementById('no_label1').classList.remove('btn-danger');
            document.getElementById('no_label1').classList.add('btn-success');">  لا تمتلك
                                            </label>


                                        </div>


                                    </div>


                                </div>

                                </div>

                                <div class="col">


                                    <div class="form-group">
                                        <label for="assuranceType" lang="ar"><strong>نوع التأمين</strong></label>
                                        <input class="form-control" placeholder="e.g. private" name="assuranceType"
                                               type="text" id="assuranceType">
                                    </div>


                                </div>


                            </div>





                            <div class="row"  style="margin-top: 15px">

                                <div class="col">
                                    <div class="form-group">

                                        <div class="col">


                                            <h5 lang="ar">هل يوجد طالب جامعي</h5><br/>

                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">


                                                <label class="btn btn-success" style="margin-left: 10px; width: 100px"
                                                       id="yes_label2">
                                                    <input type="radio" name="isThereUniStudent" id="yes2" value="1" autocomplete="off" checked
                                                           onclick=" document.getElementById('no_label2').classList.remove('btn-success');document.getElementById('no_label2').classList.add('btn-danger');document.getElementById('yes_label2').classList.remove('btn-danger');
            document.getElementById('yes_label2').classList.add('btn-success');"> يوجد
                                                </label>

                                                <label class="btn btn-danger" style="width: 100px" id="no_label2">
                                                    <input type="radio" name="isThereUniStudent" id="no2" value="0" autocomplete="off"
                                                           onclick=" document.getElementById('yes_label2').classList.remove('btn-success');document.getElementById('yes_label2').classList.add('btn-danger');document.getElementById('no_label2').classList.remove('btn-danger');
            document.getElementById('no_label2').classList.add('btn-success');"> لا يوجد
                                                </label>


                                            </div>


                                        </div>


                                    </div>

                                </div>

                                <div class="col">


                                    <div class="form-group">
                                        <label for="studentDetails" lang="ar"><strong>معلومات الطالب</strong></label>
                                        <input class="form-control" placeholder="e.g. ID, University" name="studentDetails"
                                               type="text" id="studentDetails">
                                    </div>


                                </div>


                            </div>





                            <div class="row"  style="margin-top: 15px">

                                <div class="col">
                                    <div class="form-group">

                                        <div class="col">


                                            <h5 lang="ar">هل هناك مريض بحاجة لعلاج أو دواء بشكل مزمن</h5><br/>

                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">


                                                <label class="btn btn-success" style="margin-left: 10px; width: 100px"
                                                       id="yes_label3">
                                                    <input type="radio" name="isThereSickPeople_Drugs" id="yes3" value="1" autocomplete="off" checked
                                                           onclick=" document.getElementById('no_label3').classList.remove('btn-success');document.getElementById('no_label3').classList.add('btn-danger');document.getElementById('yes_label3').classList.remove('btn-danger');
            document.getElementById('yes_label3').classList.add('btn-success');"> نعم
                                                </label>

                                                <label class="btn btn-danger" style="width: 100px" id="no_label3">
                                                    <input type="radio" name="isThereSickPeople_Drugs" id="no3" value="0" autocomplete="off"
                                                           onclick=" document.getElementById('yes_label3').classList.remove('btn-success');document.getElementById('yes_label3').classList.add('btn-danger');document.getElementById('no_label3').classList.remove('btn-danger');
            document.getElementById('no_label3').classList.add('btn-success');"> لا
                                                </label>


                                            </div>


                                        </div>


                                    </div>

                                </div>

                                <div class="col">


                                    <div class="form-group">
                                        <label for="sicknessDetails" lang="ar"><strong>نوع المرض أو الدواء</strong></label>
                                        <input class="form-control" placeholder="e.g. ID, University" name="sicknessDetails"
                                               type="text" id="sicknessDetails">
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


    <script type="text/javascript" >


        document.getElementById('no1').addEventListener("click" , function () {

            document.getElementById('assuranceType').disabled=true;

        });

        document.getElementById('yes1').addEventListener("click" , function () {

            document.getElementById('assuranceType').disabled=false;

        });

        document.getElementById('no2').addEventListener("click" , function () {

            document.getElementById('studentDetails').disabled=true;

        });

        document.getElementById('yes2').addEventListener("click" , function () {

            document.getElementById('studentDetails').disabled=false;

        });

        document.getElementById('yes3').addEventListener("click" , function () {

            document.getElementById('sicknessDetails').disabled=false;

        });

        document.getElementById('no3').addEventListener("click" , function () {

            document.getElementById('sicknessDetails').disabled=true;

        });





    </script>


@endsection