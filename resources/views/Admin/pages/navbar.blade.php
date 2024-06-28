

</head>
<body>

<nav class="cd-side-nav js-cd-side-nav">
  <ul class="cd-side__list js-cd-side__list">
    <li class="cd-side__label"><span>Main</span></li>
    <li class="cd-side__item cd-side__item--has-children cd-side__item--overview js-cd-item--has-children">
      <a href="#0"><i class="bi bi-house-door"></i> User : {{Auth::user()->prenom}}</a>
      <ul class="cd-side__sub-list">
        <li class="cd-side__sub-item"><a href="#0"><i class="bi bi-table"></i> All Data</a></li>
        <li class="cd-side__sub-item"><a href="#0"><i class="bi bi-folder"></i> Category 1</a></li>
        <li class="cd-side__sub-item"><a href="#0"><i class="bi bi-folder"></i> Category 2</a></li>
      </ul>
    </li>

    <li class="cd-side__item cd-side__item--has-children cd-side__item--notifications cd-side__item--selected js-cd-item--has-children">
      <a href="{{route('listes.document')}}"><i class="bi bi-bell"></i> Demandes à traiter</a>
      <ul class="cd-side__sub-list">
        <li class="cd-side__sub-item"><a aria-current="page" href="{{route('ajout.document')}}"><i class="bi bi-file-earmark-plus"></i> Ajout des documents</a></li>
        <li class="cd-side__sub-item"><a href="{{route('home.admin')}}"><i class="bi bi-clipboard-check"></i> Demandes à traiter</a></li>
      </ul>
    </li>

    <li class="cd-side__item">
      <a href="{{route('add.users')}}"><i class="bi bi-person"></i> Utilisateur</a>
    </li>
  </ul>
</nav>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
