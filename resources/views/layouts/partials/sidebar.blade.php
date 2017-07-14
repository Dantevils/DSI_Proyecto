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
            <li class="header">{{ Auth::user()->tipo }}</li> <!--Perfil de usuario-->
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('Home') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-book'></i> <span>{{ trans('Convenios') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('Convenio.create')}}">{{ trans('Registrar') }}</a></li>
                    <li><a href="{{ route('Convenio.index')}}">{{ trans('Modificar') }}</a></li>
                    {{-- <li><a href="">{{ trans('Asociar Insitucion') }}</a></li> --}}
                    <li><a href="{{ route('Consulta.index') }}">{{ trans('Consultar Convenios') }}</a></li>   
                      <li><a href="">{{ trans('Consultar Cordinadores') }}</a></li><!--No terminada-->
                      <!--Solo para el administrador-->
                        <li><a href="{{ route('Cordinador.index') }}">{{ trans('Permisos de usuarios') }}</a></li>
                  
                </ul>
            </li>
                <!--CRUD Actividades-->
             <li class="treeview">
                <a href="#"><i class='fa fa-calendar'></i> <span>{{ trans('Actividades') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('Actividad.create')}}">{{ trans('Registrar') }}</a></li>
                    <li><a href="{{ route('Actividad.index')}}">{{ trans('Modificar') }}</a></li> <!--Editar y eliminar-->
            </ul>
            </li>


                <!--CRUD Instituciones-->
            <li class="treeview">
                <a href="#"><i class='fa fa-graduation-cap'></i> <span>{{ trans('Insituciones') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('Institucion.create')}}">{{ trans('Registrar') }}</a></li>
                    <li><a href="{{ route('Institucion.index')}}">{{ trans('Modificar') }}</a></li> 
                    </ul>
                    </li>

                    <!--CRUD Objetivos-->
            <li class="treeview">
                <a href="#"><i class='fa fa-cubes'></i> <span>{{ trans('Objetivos') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('Objetivo.create')}}">{{ trans('Registrar') }}</a></li>
                    <li><a href="{{ route('Objetivo.index')}}">{{ trans('Modificar') }}</a></li>                  
                </ul>
            </li>

           
            <!--Otros modulos de que no se desarrollaron-->
            <li><a href="#"><i class='fa fa-close'></i> <span>{{ trans('Parámetros') }}</span></a></li>
            <li><a href="#"><i class='fa fa-close'></i> <span>{{ trans('Act.Convenios') }}</span></a></li>
            <li><a href="#"><i class='fa fa-close'></i> <span>{{ trans('Institucion') }}</span></a></li>
            <li><a href="#"><i class='fa fa-close'></i> <span>{{ trans('Documentos') }}</span></a></li>
            <li><a href="#"><i class='fa fa-close'></i> <span>{{ trans('Publicacion') }}</span></a></li>
            <li><a href="#"><i class='fa fa-close'></i> <span>{{ trans('Consultas') }}</span></a></li>
            <li><a href="#"><i class='fa fa-close'></i> <span>{{ trans('Gestion') }}</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>