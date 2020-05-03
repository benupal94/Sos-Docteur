<div class="sidebar" data-color="rose" data-background-color="black" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
  <div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text logo-mini">
      {{ __('') }}
    </a>
    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
      {{ __('SOS DOCTEUR') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <div class="user">
      <div class="photo">
        <img src="{{ auth()->user()->profilePicture() }}" />
      </div>
      <div class="user-info">
        <a data-toggle="collapse" href="#collapseExample" class="username">
          <span>
            {{ auth()->user()->name }}
            <b class="caret"></b>
          </span>
        </a>
        <div class="collapse" id="collapseExample">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> MP </span>
                <span class="sidebar-normal"> My Profile </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> EP </span>
                <span class="sidebar-normal"> Edit Profile </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> S </span>
                <span class="sidebar-normal"> Settings </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Tableau de bord') }}</p>
        </a>
      </li>

      <li class="nav-item {{ ($menuParent == 'laravel' || $activePage == 'dashboard') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" {{ ($menuParent == 'laravel' || $activePage == 'dashboard') ? ' aria-expanded="true"' : '' }}>
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Professionel de santé') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($menuParent == 'dashboard' || $menuParent == 'laravel') ? ' show' : '' }}" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <i class="material-icons">calendar_view_day</i>
                <span class="sidebar-normal">{{ __('Liste') }} </span>
              </a>
            </li>
            @can('manage-users', App\User::class)
              <li class="nav-item{{ $activePage == 'role-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('role.index') }}">
                  <i class="material-icons">av_timer</i>
                  <span class="sidebar-normal"> {{ __('Historique patient') }} </span>
                </a>
              </li>
            @endcan
            @can('manage-users', App\User::class)
              <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('user.index') }}">
                  <i class="material-icons">event</i>
                  <span class="sidebar-normal"> {{ __('Aganda') }} </span>
                </a>
              </li>
            @endcan
            @can('manage-items', App\User::class)
              <li class="nav-item{{ $activePage == 'category-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('category.index') }}">
                  <span class="sidebar-mini"> CM </span>
                  <span class="sidebar-normal"> {{ __('Disponibilité') }} </span>
                </a>
              </li>
            @endcan
          </ul>
        </div>
      </li>

      <li class="nav-item {{ ($menuParent == 'laravel' || $activePage == 'dashboard2') ? ' ' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample2" {{ ($menuParent == 'laravel' || $activePage == 'dashboard2') ? ' aria-expanded="true"' : '' }}>
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('SOS - Ambulance') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($menuParent == 'dashboard2' || $menuParent == 'laravel') ? ' show' : '' }}" id="laravelExample2">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'commande' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Commander') }} </span>
              </a>
            </li>
            @can('manage-users', App\User::class)
              <li class="nav-item{{ $activePage == 'role-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('role.index') }}">
                  <span class="sidebar-mini"> RM </span>
                  <span class="sidebar-normal"> {{ __('Disponibilité') }} </span>
                </a>
              </li>
            @endcan
          </ul>
        </div>
      </li>

      <li class="nav-item {{ ($menuParent == 'laravel' || $activePage == 'anonce') ? ' ' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelAnonce" {{ ($menuParent == 'laravel' || $activePage == 'anonce') ? ' aria-expanded="true"' : '' }}>
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Annonce') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($menuParent == 'anonce' || $menuParent == 'laravel') ? ' show' : '' }}" id="laravelAnonce">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'form_regular' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('type_info.create') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Catégorie') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'create-info' ? '' : '' }}">
              <a class="nav-link" href="{{ route('info.create') }}">
                <span class="sidebar-mini"> RM </span>
                <span class="sidebar-normal"> {{ __('Publlication') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'create-info' ? '' : '' }}">
              <a class="nav-link" href="{{ route('info.liste') }}">
                <span class="sidebar-mini"> RM </span>
                <span class="sidebar-normal"> {{ __('Articles') }} </span>
              </a>
            </li>

          </ul>
        </div>
      </li>

      <li class="nav-item{{ $activePage == 'site' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Site Web') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'parainage' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Parainage') }}</p>
        </a>
      </li>

    </ul>
  </div>
</div>
