@extends('layouts.main')

@section('style')
@endsection



@section('content')



    <div class="row" style="justify-content: center; margin-top: 25px;margin-bottom: 30px">

        <div class="col-md-12 col-md-offset-4">

            <div class="panel panel-default">

                <div class="panel-body">

                    <form action="{{action('DataController@visualize')}}" dir="rtl" method="get">


                        {{csrf_field()}}

                        <fieldset>
                            <div class="row">
                                <div class="col">

                                    <div class="form-group">
                                        <label for="chartType" lang="ar" style="float: right;font-weight: bold">اختر
                                            نوع التقرير</label>
                                        <select name="chartType" id="chartType" class="form-control">

                                            <option value="bar" selected>Bar Chart</option>
                                            <option value="line">Line Chart</option>
                                            <option value="pie">Pie Chart</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="row">

                                <div class="col">

                                    <div class="form-group">

                                        <label for="dataType" lang="ar" style="float: right;font-weight: bold">صنف
                                            حسب</label>
                                        <select name="dataType" id="dataType" class="form-control">
                                            <option value="area" selected>المنطقة</option>
                                            <option value="state">الحالة الإجتماعية</option>
                                        </select>
                                    </div>

                                </div>
                            </div>


                            <div class="row">

                                <div class="col-md-12" style="justify-content: center!important; margin-top:30px;">

                                    <input class="btn btn-lg btn-primary " type="submit" value="تصنيف" name="report"
                                           id="report" style="width: 50%;display: block;margin: 0 auto">

                                </div>

                            </div>

                        </fieldset>


                    </form>

                </div>
            </div>
        </div>
    </div>





    <div id="visual-div" style="justify-content: center; margin-top: 25px;margin-bottom: 30px">
        @if($chart != null)
            {!! $chart->container() !!}
            {!! $chart->script() !!}
        @endif
    </div>

@endsection
