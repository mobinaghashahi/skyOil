@if (\Session::has('error'))
    <div class="alert alert-danger col-12" style="text-align: center;direction: rtl">
        {!! \Session::get('error') !!}
    </div>
@endif
