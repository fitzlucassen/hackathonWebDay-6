<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >

		<link type="text/css" rel="stylesheet" href="style.css" />

		<title>Défi numéro 6</title>
		<?php
			include('initialize.php');
		?>
	</head>
	<body>
		<div class="grid" style="width: <?php echo $len; ?>px; height: <?php echo $len; ?>px;">
			<?php
				for ($i = 0; $i < count($g); $i++) { 
					for ($j = 0; $j < count($g); $j++) { 
						$top = ($i * 21) + $i;
						$left = ($j * 21) + $j;
			?>
						<div class="case case<?php echo $g[$i][$j]; ?> top<?php echo $top;?> left<?php echo $left;?>" style="top: <?php echo $top; ?>px;left: <?php echo $left; ?>px;">
							<?php echo $g[$i][$j]; ?>
						</div>
			<?php
					}
				}
			?>
		</div>
	</body>

	<script src="jquery.js"></script>
	<script>var output = '<?php echo str_replace("\n", "@@", $output); ?>';</script>
	<script src="script.js"></script>
</html>
