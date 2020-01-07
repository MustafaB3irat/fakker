@extends('Layouts.main')


@section('style')

@endsection


@section('content')


    <div class="container my-3 py-5 text-center">


        <div class="row" style="justify-content: center">

            <div class="col-lg-3 col-md-6" style="margin-top: 20px">

                <div class="card">


                    <div class="card-body">


                        <form action="{{action('DataController@importExcel')}}" method="post"
                              enctype="multipart/form-data">

                            @csrf

                            <fieldset>


                                <div class="row">


                                    <div class="form-group">

                                        <label for="file" lang="ar"><h3>اختر ملف المعلومات</h3></label>

                                        <input type="file" name="file" id="file" class="form-control-file"
                                               accept=".xlsx,.xls,.csv" style="margin: 25px">

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-12" style="justify-content: center!important; margin-top:30px;">

                                        <input class="btn btn-lg btn-primary " type="submit" value="Import"
                                               name="import"
                                               id="create" style="width: 50%;display: block;margin: 0 auto">

                                    </div>

                                </div>


                            </fieldset>

                        </form>


                    </div>

                </div>

            </div>


        </div>

    </div>




@endsection