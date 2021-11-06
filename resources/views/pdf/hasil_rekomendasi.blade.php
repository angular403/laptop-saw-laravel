<!DOCTYPE html>
<html>
<head>
	<title>Hasil Rekomendasi</title>
	<style type="text/css">
		table{
			width: 100%;
			border-collapse: collapse;
		}
		table tr td,table tr th{
			padding: 4px;
			border: 1px solid gray;
			font-size: 10pt;
		}
		.center{
			text-align: center;
		}
		.inline{
			white-space: nowrap;
		}
	</style>
</head>
<body>
<div style="width: 100%;text-align: center;">
	<h2>Hasil Rekomendasi</h2>
</div>
<table>
	<thead>
		<tr>
            <th>Company</th>
            <th>Product</th>
            <th>Screen Resolution</th>
            <th>Inches</th>
            <th>Ram</th>
            <th>Weight</th>
            <th>Prices</th>
            <th>Nilai Preferensi</th>
            <th>Tanggal</th>
		</tr>
	</thead>
	<tbody>
		@foreach($matrix_preferensi as $data)
		<tr>
            <td>{{$data->Company}}</td>
            <td>{{$data->Product}}</td>
            <td>{{$data->ScreenResolution}}</td>
            <td class="center">{{$data->Inches}}</td>
            <td class="center">{{$data->Ram}}</td>
            <td class="center">{{$data->Weight}}</td>
            <td>{{$data->Price_euros}}</td>
            <td class="center">{{number_format($data->nilai_preferensi,2)}}</td>
            <td class="inline">{{$data->tanggal}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
</body>
</html>