<header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
     <span style="color:blue;"> Samakeyit</span>
    </div>

    <div class="cd-search js-cd-search">
      <form>
        <input class="reset" type="search" placeholder="Search...">
      </form>
    </div>

    <button class="reset cd-nav-trigger js-cd-nav-trigger" aria-label="Toggle menu"><span></span></button>

    <ul class="cd-nav__list js-cd-nav__list">

      <li class="cd-nav__item cd-nav__item--has-children cd-nav__item--account js-cd-item--has-children">
        <a href="#0">
          <img src="{{asset('storage/'.Auth::user()->profile)}}" alt="avatar">
          <span>Account</span>
        </a>

        <ul class="cd-nav__sub-list">
          <li class="cd-nav__sub-item"><a href="{{route('update_.ccount.users')}}">Mon compte</a></li>
          <li class="cd-nav__sub-item"><a href="{{route('logout.authentification')}}">Deconnection</a></li>
        </ul>
      </li>
    </ul>
  </header> <!-- .cd-main-header -->
