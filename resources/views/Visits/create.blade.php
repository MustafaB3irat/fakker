@extends('Layouts.main')


@section('style')

    <link rel="stylesheet" href="{{asset('css/Visits/create_page.css')}}">
@endsection



@section('content')



    <div class="row" style="justify-content: center; margin-top: 25px;margin-bottom: 30px">
        <div class="col-md-12 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" dir="rtl" action="{{action('VisitController@store')}}"
                          method="post">

                        {{ csrf_field() }}
                        <fieldset>

                            <div class="row">


                                <div class="col-md-3">

                                    <div class="form-group">
                                        <label for="date" lang="ar"><strong>تاريخ الزيارة</strong></label>
                                        <input class="form-control" name="date" type="date"
                                               id="date">
                                    </div>
                                </div>


                            </div>


                            <div class="row">


                                <div class="col-md-5">

                                    <div class="form-group">
                                        <label for="needs" lang="ar"><strong>احتياجات العائلة</strong></label>
                                        <textarea class="form-control" name="needs"
                                                  id="needs"></textarea>
                                    </div>

                                </div>


                            </div>

                            <div class="row">

                                <div class="col-md-5">

                                    <div class="form-group">
                                        <label for="notes" lang="ar"><strong>ملاحظات</strong></label>
                                        <textarea class="form-control" name="notes"
                                                  id="notes"></textarea>
                                    </div>

                                </div>

                            </div>


                            <hr/>


                            <div class="row">

                                <div class="col-md-12" style="justify-content: center!important; margin-top:30px;">

                                    <input class="btn btn-lg btn-primary " type="submit" value="إضافة الزيارة"
                                           name="create"
                                           id="create" style="width: 50%;display: block;margin: 0 auto">

                                </div>

                            </div>


                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>






@endsection