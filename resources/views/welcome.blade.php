<!DOCTYPE html>
<html>
<head>
	<title>Andika Widyanto</title>
</head>
<body>
	<h1>Pelatihan Laravel</h1>
	@php
		$nilai = 70;
		$grade = "";
		$nama = "PalComTech <i> For Better Future </i>";
	@endphp
	<p>{!! $nama !!}</p>

	@for($angka=1;$angka<=10;$angka++)
	{{ $angka }}
	@endfor

	@if($nilai<70 && $nilai>60)
		{!! $grade = "C" !!}
	@elseif($nilai<60 && $nilai>50)
		{!! $grade = "D" !!}
	@else
		{!! $grade = "A" !!}
	@endif

</body>
</html>