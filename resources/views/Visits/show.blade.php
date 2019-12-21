@extends('Layouts.main')

@section('style')

    <link rel="stylesheet" href="{{asset('css/Visits/show_visits_page.css')}}">

@endsection



@section('content')


    <div class="row" id="header">


        <div class="col" style="float: left">

            <a href="{{url('/data')}}" class="btn btn-primary">Back</a>

        </div>

        <div class="col">

            <button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#createVisitModal">
                Make a
                new Visit
            </button>
        </div>


    </div>


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
                                               id="date">
                                    </div>
                                </div>


                            </div>


                            <input type="hidden" name="id" value="{{$FamilyID}}">

                            <div class="row">


                                <div class="col">

                                    <div class="form-group">
                                        <label for="needs" lang="ar"><strong>احتياجات العائلة</strong></label>
                                        <textarea class="form-control" name="needs"
                                                  id="needs"></textarea>
                                    </div>

                                </div>


                            </div>

                            <div class="row">

                                <div class="col">

                                    <div class="form-group">
                                        <label for="notes" lang="ar"><strong>ملاحظات</strong></label>
                                        <textarea class="form-control" name="notes"
                                                  id="notes"></textarea>
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



@endsection

