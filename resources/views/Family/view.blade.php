@extends('Layouts.main')

@section('style')

    <link rel="stylesheet" href="{{asset('css/Family/view_page_style.css')}}">

    @endsection

@section('content')

    <h2 id="title"  lang="ar">معلومات العوائل</h2>

    <div class="row" id="container"  dir="rtl">

        <div class="col">

            <div class="row">

                <div class="col-md-2" >
                    <h3>الإسم الكامل</h3>
                </div>

                <div class="col-md-2" >
                    <h3>المنطقة</h3>
                </div>

                <div class="col-md-2" >
                    <h3>رقم الهوية</h3>
                </div>

                <div class="col-md-2" >
                    <h3>رقم للتواصل</h3>
                </div>

                <div class="col-md-2">
                    <h3>الزيارات</h3>
                </div>

                <div class="col-md-2" >
                    <h3>الحالة</h3>
                </div>


            </div>

            <hr/>

            @if(count($families)>0)
                @foreach($families as $family)

                    <div class="row">

                        <div class="col-md-2" >
                            <h3><a href="/data/{{$family->id}}" id="name">{{$family->name}}</a></h3>
                        </div>

                        <div class="col-md-2" >
                            <h3>{{$family->area}}</h3>
                        </div>

                        <div class="col-md-2">
                            <h3>{{$family->hawya}}</h3>
                        </div>

                        <div class="col-md-2" >
                            <h3>{{$family->phone}}</h3>
                        </div>

                        <div class="col-md-2" >
                            <a class="btn btn-success btn" href="" style="width:100%">زيارة</a>
                        </div>

                        <div class="col-md-2" >
                            <h3>يستحق</h3>
                        </div>


                    </div>
                    <hr/>
                @endforeach

                <div class="row" style="justify-content: center">

                    {{$families->links()}}
                </div>

            @endif

        </div>
    </div>

@endsection