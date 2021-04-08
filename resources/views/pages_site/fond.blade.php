<!DOCTYPE html>
<html>
<head>
<!-- Licence Pro Servicetique -->
<link rel='stylesheet' href='/mon_style.css'>
@yield('entete')
<title>
@yield('titre')
</title>
</head>
<body>
<div class="container">
<ul>
	<li><a href="{{ url('/creer') }}"> Créer nouveau membre </a></li>
	<li><a href="{{ url('/membres') }}">Liste des membres </a></li>
	<li><a href="{{ url('/home') }}">Se connecter / S'inscrire </a></li>
</ul>
<div class="titre_contenu">
@yield('titre_contenu')
</div>
<div class="contenu">
@yield('contenu')
</div>
<div class="pied_page">@yield('pied_page')</div>
</div>
</body>
</html>


