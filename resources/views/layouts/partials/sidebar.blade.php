<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li> <!--Perfil de usuario-->
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('Home') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('Convenios') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('Convenio.create')}}">{{ trans('Registrar') }}</a></li>
                    <li><a href="{{ route('Convenio.index')}}">{{ trans('Modificar') }}</a></li>
                    <li><a href="#">{{ trans('Eliminar') }}</a></li>
                    <li><a href="#">{{ trans('Asociar Insitucion') }}</a></li>
                     <li><a href="#">{{ trans('Consultar Concenios') }}</a></li>
                      <li><a href="#">{{ trans('Consultar Cordinadores') }}</a></li>
                    
                </ul>
            </li>
            <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('Parámetros') }}</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('Act.Convenios') }}</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('Institucion') }}</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('Documentos') }}</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('Publicacion') }}</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('Consultas') }}</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('Gestion') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>