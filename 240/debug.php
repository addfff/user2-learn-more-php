<h1>9 + 10 = ?</h1>

<?

	
	function callDebug($ori, $sepatutnya){
		echo '<div style="color:red">Real: ';
		echo $ori;
		echo '</div><div sytle="color:green"> Target: ';
		echo $sepatutnya;
		echo '</div>';
	}

	$total = 9 + 10;
	callDebug($total, "21");
?>