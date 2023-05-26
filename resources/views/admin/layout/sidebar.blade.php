<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
  <li class="nav-item"><a class="nav-link" href="{{ url('admin/credenciales') }}"><i class="nav-icon icon-magnet"></i> {{ trans('admin.credenciale.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/tipodeconexions') }}"><i class="nav-icon icon-drop"></i> {{ trans('admin.tipodeconexion.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/estados') }}"><i class="nav-icon icon-book-open"></i> {{ trans('admin.estado.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/servidors') }}"><i class="nav-icon icon-energy"></i> {{ trans('admin.servidor.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/cat-informaciones') }}"><i class="nav-icon icon-ghost"></i> {{ trans('admin.cat-informacione.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/grupos') }}"><i class="nav-icon icon-compass"></i> {{ trans('admin.grupo.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/tipo-debds') }}"><i class="nav-icon icon-flag"></i> {{ trans('admin.tipo-debd.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/verifications') }}"><i class="nav-icon icon-energy"></i> {{ trans('admin.verification.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
