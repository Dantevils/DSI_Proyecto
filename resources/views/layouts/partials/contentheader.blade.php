<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {{-- @yield('contentheader_title', 'Page Header here')--}}
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a><i class="fa fa-dashboard"></i>@yield('Padre')</a></li><li class="active">@yield('Hijo')</li>
    </ol>
</section>