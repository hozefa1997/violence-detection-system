<?php

$path = $_POST['spath'];
$result = json_decode(exec("python3 KerasBuild/main.py $path"),true);
echo $result;
?>

<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4 text-danger text-center  ">
		<h1>Violent Video:</h1>
	</div>
	<div class="col-md-4"></div>
</div>
<div class="row">
	<div class="col-md-4"></div>
		<table class="table white-color col-md-4">4
			<thead>
				<tr>
					<th>Item</th>
					<th>Value</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Gun : </td>
					<td><?= round($result['guns'],2) ?></td>
				</tr>
				<tr>
					<td>Knife : </td>
					<td><?= round($result['knife'],2) ?></td>
				</tr>
				<tr>
					<td>Fist Fight : </td>
					<td><?= round($result['fist fight'],2) ?></td>
				</tr>
			</tbody>
		</table>
	<div class="col-md-4"></div>
</div>