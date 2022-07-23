<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet">

    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="/css/jquery.Bootstrap-PersianDateTimePicker.css" />
    <link rel="icon" href="/image/icon.png">
    <script src="/js/jquery-3.1.0.min.js" type="text/javascript"></script>
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
<div class="col-12 nav">
    <div class="col-4" style="float: right;width: 33.33%">
        <ul>
            <li>
                <a href="/"  style="padding: 0px 0px 0px 0px;">
                    <img src="/image/69524.png" width="25px" height="25px">
                </a>
            </li>
            @if(!Auth::check())
            <li>
                <a href="/login">
                    ورود
                </a>
            </li>
            @else
                <li>
                    <a href="/dashboard">
                        <img src="/image/dashboard.png" width="25px" height="25px">
                    </a>
                </li>
            <li>
                <a href="/logout" style="color: #d20a0a">
                    خروج
                </a>
            </li>
            @endif
        </ul>
    </div>
    <div class="col-8" style="float: right;width: 66.66%">
        <p style='font-size: 45px;color: #ffc800;font-family: "Bebas Neue Book";font-weight: bold;margin: 5px 5px 5px 15px;filter: drop-shadow(2px 2px 10px #ffffff)'>sky Oil Change</p>
    </div>

</div>
