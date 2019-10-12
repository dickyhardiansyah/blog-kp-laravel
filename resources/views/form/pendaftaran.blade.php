<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2>www.malasngoding.com</h2>
	<h3>Data pendaftaran</h3>
 
	<a href="form-pendaftaran/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>
 
	<table>
		<tr>
			<th>Nama</th>
		</tr>
		@php
			        $no = 1;	
		        @endphp
		@foreach($pendaftaran as $p)
		<tr>
			<td>{{ $no++ }}</td>
			<td>{{ $p->nama_siswa }}</td>
			<td>
				<a href="form-pendaftaran/edit/{{ $p->no_registrasi }}">Edit</a>
				|
				<a href="form-pendaftaran/hapus/{{ $p->no_registrasi }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>