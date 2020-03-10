<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
	<style type="text/css">
	.wrap {
	width: 1000px;
	margin:15px auto;
	padding-top: 35px;
	</style>

<body class="wrap">
	<form method="POST" action="tugas1buatcek.php">
		<h3 align="center"> DATA DIRI </h3>
		<table width="500" align="center" cellpadding="2" cellspacing="2">
			<tr>
				<td align="right"> Nama </td>
				<td> : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td align="right"> Email </td>
				<td> : </td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td align="right"> Tempat lahir </td>
				<td> : </td>
				<td><input type="text" name="tmplahir"></td> 
				
			</tr>
			<tr>
				<td align="right"> Tgl lahir </td>
				<td> : </td>
				<td><input type="date" name="tgllahir"></td>
			</tr>
			<tr>
				<td align="right"> Alamat </td>
				<td> : </td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td align="right"> Jenis Kelamin </td>
				<td> : </td>
				<td><input type="radio" name="kelamin" id="laki-laki" value="laki-laki">
					<label for="radio">Laki - laki </label>
					<input type="radio" name="kelamin" id="Perempuan" value="Perempuan">
                 <label for="radio2">Perempuan </label></td>
			</tr>
			<tr>
			  <td align="right"> Agama </td>
				<td> : </td>
			<td><select name="agama" id="agama" tabindex="1">
			  <option value="Islam">Islam</option>
			  <option value="Kristen">Kristen</option>
			  <option value="Katolik">Katolik</option>
			  <option value="Hindu">Hindu</option>
			  <option value="Budha">Budha</option>
			  <option value="Konghuchu">Konghuchu</option>
            </select></td>
			</tr>
			<tr>
				<td align="right"> No. Telepon </td>
				<td> : </td>
				<td><input type="text" name="telepon"></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="btnLogin" value="Login">
				<input type="reset" name="reset" value="reset"></td>
			</tr>
		</table>
	</form>
</body>
</html>
