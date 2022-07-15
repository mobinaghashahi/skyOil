@if ($errors->any())
    @foreach($errors->all() as $error)
        <div class="col-12" style="justify-content: center;display: flex">
            <div class="col-4">
                <p style="color: #ffffff;text-align: center;background-color: #ff2e2e;direction:rtl;line-height: 15px;padding: 10px;border-radius: 10px">{{$error}}</p>
            </div>
        </div>
    @endforeach
@endif
