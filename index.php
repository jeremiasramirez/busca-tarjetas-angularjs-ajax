<!DOCTYPE html>
<html lang="en" dir="ltr" ng-app="ajaxApp">
	<head>
		<meta charset="utf-8">
		<title>Busca tu lenguaje</title>
		<link rel="stylesheet" href="public/css/main.css">
		<link rel="stylesheet" href="public/css/lib/jeremias-lib.css">
		<link rel="stylesheet" href="public/css/lib/animate.css">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<script type="text/javascript" src="node_modules/angular/angular.min.js"></script>
		<script type="text/javascript" src="public/js/main.js"></script>
	</head>
	<body style="background-color: #eee">
 
<p class="alert--error">Data externa Ajax </p>

<div ng-controller="dataExtern">
	<input type="text" ng-model="search__card" placeholder="Search programing language"><br><br>

	<button ng-click="mostrar()" class="btn--add" 
	 ng-hide="btn2">Mostrar todos</button>

	<button ng-click="ocultar()" class="btn--rm" 
	ng-hide="btn">Ocultar cards</button>

	<div ng-repeat="data in datos | filter:search__card" ng-hide="sh" style="background-color: #EAD2FF" 
	class="animated fadeInUp">
		
		<p>Nombre <strong>{{data.name}}</strong></p>

		<p>Version <strong>{{data.version}}</strong></p>

		<p>Description <strong>{{data.description}}</strong></p>

		<p>Main <strong>{{data.main}}</strong></p>

	<br>
	<br>

	</div>

</div>
 
	</body>
</html>
