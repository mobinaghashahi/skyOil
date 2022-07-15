@if (\Session::has('msg'))
    <div class="alert alert-success col-12" style="text-align: center">
        {!! \Session::get('msg') !!}
    </div>
@endif
