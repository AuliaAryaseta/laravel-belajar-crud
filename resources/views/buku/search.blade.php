@extends('layouts.master')

@section('content')

	@if(count($data_buku))
	<div class="container">
		<div class="alert alert-warning">
			<div>Ditemukan {{ count($data_buku) }} dengan kata: {{ $cari }}</div>
			<a class="btn btn-sm btn-primary" href="/buku">Kembali</a>
		</div>
		@if(Session::has('pesan'))
			<div class="alert alert-info">{{ Session::get('pesan') }}</div>
		@endif
		<h4>Data Buku</h4>
		<p align="right"><a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Buku</a></p>
		<form class="float-right mt-2 mb-2 p-0" action="{{ route('buku.search') }}" method="get">@csrf
			<input type="text" name="kata" placeholder="Pencarian...">
		</form>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Judul Buku</th>
					<th>Penulis</th>
					<th>Harga</th>
					<th>Tanggal Terbit</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data_buku as $buku)
				<tr>
					<td>{{ ++$no }}</td>
					<td>{{ $buku->judul }}</td>
					<td>{{ $buku->penulis }}</td>
					<td>{{ number_format($buku->harga, 0, ',', '.') }}</td>
					<td>{{ $buku->tgl_terbit->format('d/m/Y') }}</td>
					<td>
						<form action="{{ route('buku.destroy', $buku->id) }}" method="post">
						@csrf
						<a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-warning text-white">Edit</a>
						<button onclick="return confirm('Yakin mau di hapus?')" class="btn btn-danger">Hapus</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="row">
			<div class="col-12">
				<div class="float-right">{{ $data_buku->links() }}</div>
			</div>
		</div>
		@else
			<div class="alert alert-warning">
				<h4>Data {{ $cari }} tidak ditemukan</h4>
				<a class="btn btn-sm btn-primary" href="/buku">Kembali</a>
			</div>
		@endif
	</div>
@endsection