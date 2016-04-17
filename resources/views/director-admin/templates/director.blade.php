<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Director | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">
    {!!Html::style('assets/director-admin/css/bootstrap.min.css')!!}
    {!!Html::style('assets/director-admin/css/font-awesome.min.css')!!}
    {!!Html::style('assets/director-admin/css/ionicons.min.css')!!}
    {!!Html::style('assets/director-admin/css/morris/morris.css')!!}
    {!!Html::style('assets/director-admin/css/jvectormap/jquery-jvectormap-1.2.2.css')!!}
    {!!Html::style('assets/director-admin/css/datepicker/datepicker3.css')!!}
    {!!Html::style('assets/director-admin/css/daterangepicker/daterangepicker-bs3.css')!!}
    {!!Html::style('assets/director-admin/css/iCheck/all.css')!!}
    {!!Html::style('http://fonts.googleapis.com/css?family=Lato')!!}
    {!!Html::style('assets/director-admin/css/style.css')!!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        {!!Html::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')!!}
        {!!Html::script('https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js')!!}
    <![endif]-->

    <style type="text/css"></style>
</head>
<body class="skin-black">
    @include('director-admin.templates.header')
    <div class="wrapper row-offcanvas row-offcanvas-left">
        @include('director-admin.templates.aside')
        <aside class="right-side">
            <section class="content">
                @yield('content')
            </section>
                
        </aside>
    </div>
    {!!Html::script('http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js')!!}
    {!!Html::script('assets/director-admin/js/jquery.min.js')!!}
    {!!Html::script('assets/director-admin/js/jquery-ui-1.10.3.min.js')!!}
    {!!Html::script('assets/director-admin/js/bootstrap.min.js')!!}
    {!!Html::script('assets/director-admin/js/plugins/daterangepicker/daterangepicker.js')!!}
    {!!Html::script('assets/director-admin/js/plugins/chart.js')!!}
    {!!Html::script('assets/director-admin/js/plugins/iCheck/icheck.min.js')!!}
    {!!Html::script('assets/director-admin/js/plugins/fullcalendar/fullcalendar.js')!!}
    {!!Html::script('assets/director-admin/js/Director/app.js')!!}
    {!!Html::script('assets/director-admin/js/Director/dashboard.js')!!}
</body>
</html>