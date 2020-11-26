@extends('template')

@section('title','PalComTech')

@section('content')
	<div class="col-md-10 offset-md-2">
		<div class="card">
			<div class="card-body">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Instruktur</th>
							<th>Nama Cabang</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Andika Widyanto</td>
							<td>STMIK PalComTech</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Krisna Islami</td>
							<td>LKP PalComTech Palembang</td>
						</tr>
						<tr>
							<td>3</td>
							<td>M. Ilham</td>
							<td>LKP PalComTech OPI Palembang</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection