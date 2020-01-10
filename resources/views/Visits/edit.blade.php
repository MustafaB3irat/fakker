@extends('layouts.main')


@section('style')
<style>
    label{
        float: right;
    }

</style>
@endsection


@section('content')

    <a href="{{url()->previous()}}" class="btn btn-primary" style="margin-top: 20px">Back</a>


    <form accept-charset="UTF-8" role="form" dir="rtl" action="{{action('VisitController@update')}}"
          method="post">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" dir="rtl">
                    <h5 class="modal-title" id="exampleModalLabel" lang="ar">تعديل معلومات الزيارة</h5>
                </div>
                <div class="modal-body">

                    {{ csrf_field() }}
                    <fieldset>

                        <input type="hidden" name="family_id" value="{{$visit->family_id}}">

                        <input type="hidden" name="id" value="{{$visit->id}}">

                        <div class="row">


                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="date" lang="ar"><strong>تاريخ الزيارة</strong></label>
                                    <input class="form-control" name="date" type="date"
                                           id="date" value="{{$visit->date}}" required>


                                </div>
                            </div>


                        </div>


                        <div class="row">


                            <div class="col">

                                <div class="form-group">
                                    <label for="needs" lang="ar"><strong>احتياجات العائلة</strong></label>
                                    <textarea class="form-control" name="needs"
                                              id="needs" required>{{$visit->needs}}</textarea>
                                </div>

                            </div>


                        </div>

                        <div class="row">

                            <div class="col">

                                <div class="form-group">
                                    <label for="notes" lang="ar"><strong>ملاحظات</strong></label>
                                    <textarea class="form-control" name="notes"
                                              id="notes" required>{{$visit->notes}}</textarea>
                                </div>

                            </div>

                        </div>

                    </fieldset>

                </div>
                <div class="modal-footer">
                    <input type="submit" name="Edit" class="btn btn-primary" value="Edit Visit" style="margin: 0 auto">
                </div>
            </div>
        </div>
    </form>



@endsection