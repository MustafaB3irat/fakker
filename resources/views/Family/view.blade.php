@extends('Layouts.main')

@section('style')

    <link rel="stylesheet" href="{{asset('css/Family/view_page_style.css')}}">

@endsection

@section('content')

    <div id="error" class="alert alert-danger" lang="ar" dir="rtl" style="visibility: hidden;text-align: right;margin-top: 20px;font-size: 18px"></div>

    <a href="{{route('import')}}" class="btn btn-primary" id="import">Import Data</a>

    @if(count($families)>0)

        <h2 id="title" lang="ar">معلومات العوائل</h2>

        <div class="row" id="container" dir="rtl">

            <table class="table table-striped">


                <thead>

                <tr>


                    <th colspan="2">
                        <select name="filter" id="filter" style="width: 100%;font-size: 20px">
                            <option value="header" disabled selected>طريقة البحث</option>
                            <option value="name">بحث عن اسم</option>
                            <option value="phone">بحث عن رقم جوال</option>
                            <option value="area">بحث عن منطقة</option>
                            <option value="hawya">بحث عن رقم هوية</option>
                        </select>
                    </th>

                    <th colspan="2">
                        <input type="text" id="filter_input"
                               style="width: 100%;text-align: center;font-size: 16px;font-weight: bold" lang="rtl">
                    </th>

                    <th colspan="2">
                        <a href="#" class="btn btn-dark" style="width: 100%" onclick=" return filter(event)">ابحث</a>
                    </th>


                </tr>


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


    <script type="text/javascript">

        function filter(event) {
            event.preventDefault();

            var e = document.getElementById('filter');
            var filter_input = document.getElementById('filter_input').value;
            var filter = e.options[e.selectedIndex].value;

            if (filter == "header" || filter_input == "" || filter_input == null) {
                document.getElementById('error').style.visibility = 'visible';
                document.getElementById('error').innerText = "الرجاء اختيار طريقة البحث وقيمتها";
                return false;

            } else {
                document.getElementById('error').style.visibility = 'hidden';
                document.getElementById('error').innerText = "";
                window.location.href = "?filter[" + filter + "]=" + filter_input;

            }
        }

    </script>

@endsection

