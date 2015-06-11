<?php
	// Afficher les erreurs à l'écran
	ini_set('display_errors', 1);

	require_once '../core/Grid.class.php';
	require_once '../core/FreePrincess.class.php';

	$Grid = new Grid();
	$g = $Grid->generateGrid();
	$len = count($g[0]) * 22;

	$FreePrincess = new FreePrincess(count($g[0]), $g);
	// Fonction à coder
	$output = $FreePrincess->displayPathToPrincess();
	// Fin code
	
