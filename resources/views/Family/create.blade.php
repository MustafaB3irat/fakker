@extends('layouts.main')


@section('style')

    <link rel="stylesheet" href="{{asset('css/createPage/create_page_style.css')}}" />

    @endsection


@section('content')


    <div class="row" style="justify-content: center; margin-top: 15px;margin-bottom: 15px">
        <div class="col-md-12 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong></strong></h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" dir="rtl">
                        <fieldset>

                            <div class="row">


                                <div class="col">

                                    <div class="form-group">
                                        <label for="name" lang="ar"><strong>الإسم الكامل</strong></label>
                                        <input class="form-control" placeholder="e.g.Jone Doe" name="name" type="text" id="name">
                                    </div>
                                </div>

                                <div class="col">

                                    <div class="form-group">
                                        <label for="phone" lang="ar"><strong>رقم للتواصل</strong></label>
                                        <input class="form-control" placeholder="e.g.05********" name="phone" type="number" id="phone">
                                    </div>

                                </div>

                            </div>


                            <div class="row">

                                <div class="col">

                                    <div class="form-group">
                                        <label for="area" lang="ar"><strong>المنطقة</strong></label>
                                        <input class="form-control" placeholder="e.g.Ramallah" name="area" type="text" id="area">
                                    </div>

                                </div>


                                <div class="col">

                                    <div class="form-group">
                                        <label for="address" lang="ar"><strong>العنوان بالتفصيل</strong></label>
                                        <input class="form-control" placeholder="e.g.st.330 ramallah main.St" name="address" type="text" id="address">
                                    </div>


                                </div>



                            </div>



                            <div class="row">


                                <div class="form-group">

                                    <div class="col">


                                        <h4>هل يعمل أحد في العائلة</h4>

                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">


                                            <div class="row">


                                                <label class="btn btn-secondary active" style="margin-left: 10px">
                                                    <input type="radio" name="workState" id="yes" autocomplete="off" checked> نعم
                                                </label>

                                                <label class="btn btn-secondary">
                                                    <input type="radio" name="workState" id="no" autocomplete="off"> لا
                                                </label>

                                            </div>


                                        </div>


                                    </div>



                                </div>


                            </div>










                            <div class="row">

                                <div class="col">

                                    <div class="form-group">
                                        <label for="haywa" lang="ar" ><strong>رقم الهوية</strong></label>
                                        <input class="form-control" placeholder="e.g.40*******" name="hawya" type="number" id="haywa">
                                    </div>

                                </div>

                                <div class="col">

                                    <div class="form-group">
                                        <label for="state" lang="ar"><strong>الحالة الإجتماعية</strong></label>
                                        <input class="form-control" placeholder="e.g. Married" name="state" type="text" id="state">
                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col">

                                    <div class="form-group">
                                        <label for="houseHolderWork" lang="ar"><strong>عمل رب الأسرة</strong></label>
                                        <input class="form-control" placeholder="e.g. teacher" name="houseHolderWork" type="text" id="houseHolderWork">
                                    </div>

                                </div>

                                <div class="col">

                                    <div class="form-group">
                                        <label for="houseHolderWork" lang="ar"><strong>عمل الأم</strong></label>
                                        <input class="form-control" placeholder="e.g. house wife" name="motherWork" type="text" id="motherWork">
                                    </div>


                                </div>
                            </div>




                            <div class="form-group">
                                <label for="incomeSrc" lang="ar"><strong>مصدر الدخل</strong></label>
                                <input class="form-control" placeholder="e.g. agencies" name="incomeSrc" type="text" id="incomeSrc">
                            </div>


                            <div class="row">

                                <div class="col">

                                    <div class="form-group">
                                        <label for="houseHolderWork" lang="ar"><strong>عدد الأولاد</strong></label>
                                        <input class="form-control" placeholder="e.g. 3" name="bousNum" type="number" id="boysNum">
                                    </div>
                                </div>

                                <div class="col">

                                    <div class="form-group">
                                        <label for="boysAges" lang="ar"><strong>أعمارهم</strong></label>
                                        <input class="form-control" placeholder="e.g. 10,20,30" name="boysAges" type="text" id="boysAges">
                                    </div>

                                </div>
                            </div>



                            <div class="row">

                                <div class="col">

                                    <div class="form-group">
                                        <label for="houseHolderWork" lang="ar"><strong>عدد البنات</strong></label>
                                        <input class="form-control" placeholder="e.g. 3" name="girlsNum" type="number" id="girlsNum">
                                    </div>
                                </div>

                                <div class="col">


                                    <div class="form-group">
                                        <label for="girlsAges" lang="ar"><strong>أعمارهن</strong></label>
                                        <input class="form-control" placeholder="e.g. 10,15,13" name="girlsAges" type="text" id="girlsAges">
                                    </div>
                                </div>
                            </div>




                            /* ADD section here Assurance */

                            /*  add uni student q here */
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="تسجيل"  name="create" id="create">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection