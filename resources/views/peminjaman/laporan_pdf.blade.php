<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laporan Peminjaman</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
		body {
			font-family: Arial, sans-serif;
			font-size: 10pt;
			margin: 20px;
		}

		table {
			width: 100%;
			border-collapse: collapse;
		}

		table th,
		table td {
			padding: 8px;
			text-align: left;
			border: 1px solid #ddd;
		}

		table th {
			background-color: #f8f9fa;
			font-weight: bold;
		}

		h3 {
			font-size: 18px;
			margin-bottom: 20px;
		}

		.table-container {
			margin-top: 30px;
		}

		.table-responsive {
			overflow-x: auto;
		}

		.header-info {
			font-size: 12px;
			color: #333;
			margin-bottom: 10px;
		}
	</style>
</head>

<body>

	<center>
		<h3>Laporan Peminjaman</h3>
	</center>

	<!-- Form Pencarian -->
	<div class="container">
		<form action="{{ route('cetak.laporan') }}" method="GET" class="form-inline mb-3">
			<input type="text" name="search" placeholder="Search..." class="form-control" value="{{ request()->search }}">
			<button type="submit" class="btn btn-info ml-2"><i class="fa-solid fa-print"></i> Cetak</button>
		</form>
	</div>


	<!-- Periode dan Jumlah Peminjaman -->
	<div class="header-info">
		<p>Periode: {{ $startDate }} - {{ $endDate }}</p>
		<p>Jumlah Peminjaman: {{ $riwayat_peminjaman->count() }}</p>
	</div>

	<!-- Tabel Data Peminjaman -->
	<div class="table-container">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Judul Buku</th>
					<th>Kode Buku</th>
					<th>Tanggal Pinjam</th>
					<th>Tanggal Wajib Pengembalian</th>
					<th>Tanggal Pengembalian</th>
				</tr>
			</thead>
			<tbody>
				@forelse ($riwayat_peminjaman as $item)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $item->user->name }}</td>
					<td>{{ $item->buku->judul }}</td>
					<td>{{ $item->buku->kode_buku }}</td>
					<td>{{ \Carbon\Carbon::parse($item->tanggal_pinjam)->format('d M Y') }}</td>
					<td>{{ \Carbon\Carbon::parse($item->tanggal_wajib_kembali)->format('d M Y') }}</td>
					<td>{{ $item->tanggal_pengembalian ? \Carbon\Carbon::parse($item->tanggal_pengembalian)->format('d M Y') : 'Belum Kembali' }}</td>
				</tr>
				@empty
				<tr>
					<td colspan="7" class="text-center">Tidak ada data peminjaman yang sesuai</td>
				</tr>
				@endforelse
			</tbody>
		</table>
	</div>

</body>

</html>