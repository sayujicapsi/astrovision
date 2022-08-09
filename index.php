<?php


// $actual_link =  (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
// $url = $actual_link.'/img/data.json';
// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($curl, CURLOPT_HEADER, false);
// $data = curl_exec($curl);
// curl_close($curl);
$data = file_get_contents('data.json');
$data = json_decode($data,true);
usort($data, function($x, $y) {
    return $y['amount'] <=> $x['amount'];
});

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="data.json" type="text/javascript"></script>

	<table class="table">
		<thead>
			<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Amount</th>
			</tr>
		</thead>
		<tbody id="data1">
			<?php
				foreach ($data as $key => $value) {
					# code...
				?>
					<tr>
						<td><?php  echo $value['name']; ?></td>
						<td><?php  echo $value['email']; ?></td>
						<td><?php  echo $value['amount']; ?></td>
						
					</tr>

				<?php
				}

			?>

		</tbody>

	</table>

	


</body>
</html>