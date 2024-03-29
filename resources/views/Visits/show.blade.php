@extends('Layouts.main')

@section('style')

    <link rel="stylesheet" href="{{asset('css/Visits/show_visits_page.css')}}">

@endsection



@section('content')

    <div id="familyName" class="row">
        <h3 style="text-align: center" lang="ar"> زيارات عائلة {{$family->name}} </h3>
    </div>


    <div class="row" id="header">


        <div class="col" style="float: left">

            <a href="{{url('/data')}}" class="btn btn-primary btn-lg">Back</a>

        </div>

        <div class="col">

            <button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#createVisitModal">
                Make a
                new Visit
            </button>
        </div>


        <div class="col">


            <form action="{{action('DataController@deserve')}}" method="post" id="deserve">

                {{csrf_field()}}

                <div class="custom-control custom-switch" style="float: right;width: 100%">
                    <input type="checkbox" class="custom-control-input" id="customSwitches" name="deserve" value="1">
                    <label class="custom-control-label" for="customSwitches" lang="ar"
                           style="font-size: 25px">يستحق</label>
                </div>


                <input type="hidden" value="{{$FamilyID}}" name="id">

            </form>


        </div>


    </div>

    <hr>


    <!--   Modal -->


    <div class="modal fade" id="createVisitModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">

        <form accept-charset="UTF-8" role="form" dir="rtl" action="{{action('VisitController@store')}}"
              method="post">

            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" dir="rtl">
                        <h5 class="modal-title" id="exampleModalLabel" lang="ar">إضافة زيارة جديدة</h5>
                    </div>
                    <div class="modal-body">

                        {{ csrf_field() }}
                        <fieldset>

                            <div class="row">


                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="date" lang="ar"><strong>تاريخ الزيارة</strong></label>
                                        <input class="form-control" name="date" type="date"
                                               id="date" required>
                                    </div>
                                </div>


                            </div>


                            <input type="hidden" name="id" value="{{$FamilyID}}">
                            <input type="hidden" name="deserve" value="{{$deserve}}">

                            <div class="row">


                                <div class="col">

                                    <div class="form-group">
                                        <label for="needs" lang="ar"><strong>احتياجات العائلة</strong></label>
                                        <textarea class="form-control" name="needs"
                                                  id="needs" required></textarea>
                                    </div>

                                </div>


                            </div>

                            <div class="row">

                                <div class="col">

                                    <div class="form-group">
                                        <label for="notes" lang="ar"><strong>ملاحظات</strong></label>
                                        <textarea class="form-control" name="notes"
                                                  id="notes" required></textarea>
                                    </div>

                                </div>

                            </div>

                        </fieldset>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                        <input type="submit" name="create" class="btn btn-primary" value="Add Visit">
                    </div>
                </div>
            </div>
        </form>
    </div>






    @if(count($Visits)>0)


        <div class="container my-3 py-5 text-center">


            <div class="row">

                @foreach($Visits as $visit)

                    <div class="col-lg-3 col-md-6" style="margin-top: 20px">

                        <div class="card">


                            <div class="card-body">


                                <img src="{{asset('img/favicon.jpg')}}" alt="avatar"
                                     class="img-fluid rounded-circle w-50 mb-3">

                                <h3>{{$visit->date}}</h3>

                                <hr>

                                <strong class="labels">احتياجات</strong>

                                <p>{{$visit->needs}}</p>

                                <hr>

                                <strong class="labels">ملاحظات</strong>

                                <p>{{$visit->notes}}</p>

                                <hr>

                                <small>Added</small>

                                <small>{{\Carbon\Carbon::parse($visit->created_at)->diffForHumans()}}</small>
                                <br>
                                <small>Updated</small>

                                <small>{{\Carbon\Carbon::parse($visit->updated_at)->diffForHumans()}}</small>
                                <hr>

                                <a href="{{route('showVisitEdit' , [$visit->id , $deserve])}}" class="fas fa-edit"
                                   style="margin: 0 auto"
                                   lang="ar">تعديل</a>

                            </div>

                        </div>

                    </div>

                @endforeach


            </div>


            <div class="row" style="justify-content: center; margin-top: 20px">

                {{$Visits->links()}}
            </div>


        </div>


    @else

        <div class="row mb-5 text-center" dir="rtl">

            <h3 lang="ar">لا يوجد زيارات متعلقة بهذه العائلة، أضف زيارة جديدة</h3>

        </div>

    @endif


    <script type="text/javascript">
        document.getElementById('customSwitches').addEventListener("click", function () {

            document.getElementById('deserve').submit();

        });

        var deserve = "{{$deserve}}";


        if (deserve == "0") {
            document.getElementById('customSwitches').checked = false;
        } else if (deserve == "1") {
            document.getElementById('customSwitches').checked = true;
        }
    </script>



@endsection

