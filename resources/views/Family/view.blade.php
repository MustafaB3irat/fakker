@extends('Layouts.main')

@section('style')

    <link rel="stylesheet" href="{{asset('css/Family/view_page_style.css')}}">

@endsection

@section('content')

    <a href="{{route('import')}}" class="btn btn-primary" id="import">Import Data</a>

    @if(count($families)>0)

        <h2 id="title" lang="ar">معلومات العوائل</h2>

        <div class="row" id="container" dir="rtl">

            <table class="table table-striped">


                <thead>


                <tr>


                    <th>
                        <h3>
                            الإسم الكامل
                        </h3>
                    </th>

                    <th>
                        <h3>
                            المنطقة
                        </h3>
                    </th>

                    <th>
                        <h3>
                            رقم الهوية
                        </h3>
                    </th>

                    <th>
                        <h3>
                            رقم للتواصل
                        </h3>
                    </th>

                    <th>
                        <h3>
                            الزيارات
                        </h3>
                    </th>


                    <th>
                        <h3>
                            الحالة
                        </h3>
                    </th>
                </tr>


                </thead>


                <tbody>


                @foreach($families as $family)

                    <tr>

                        <td>
                            <h3><a href="/data/{{$family->id}}" id="name">{{$family->name}}</a></h3>
                        </td>

                        <td>
                            <h3>{{$family->area}}</h3>

                        </td>

                        <td>
                            <h3>{{$family->hawya}}</h3>
                        </td>

                        <td>
                            <h3>{{$family->phone}}</h3>
                        </td>


                        <td>
                            <a class="btn btn-success btn" href="visit/{{$family->id}}" style="width:100%">زيارة</a>
                        </td>


                        <td>
                            <h3>يستحق</h3>
                        </td>


                    </tr>

                @endforeach


                </tbody>

            </table>

            <div class="row" style="justify-content: center">
                {{$families->links()}}
            </div>


        </div>



    @else

        <a id="title" lang="ar" class="btn btn-warning btn-lg" href="{{url('/data/create')}}">لا يوجد عوائل مسجلة
            حالياً، انقر للإضافة</a>


    @endif


@endsection