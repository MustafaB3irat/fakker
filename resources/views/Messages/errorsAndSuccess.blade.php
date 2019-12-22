
@if(count($errors)>0)
    <div class="alert alert-danger" style="margin-top: 20px;text-align: right"><strong lang="ar" >الرجاء التأكد من البيانات المدخلة</strong></div>

@endif


@if(session('success'))

    <div class="alert alert-success" style="margin-top: 20px;text-align: right"><strong lang="ar" >تمت العملية بنجاح</strong></div>

    @endif