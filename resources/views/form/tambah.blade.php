<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data pendaftaran</h3>
 
	<a href="/"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="proses" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> 
		<br/>
		<input type="submit" value="Simpan Data">
	</form>
	
</body>
</html>