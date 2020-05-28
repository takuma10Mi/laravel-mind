<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>速習Laravel</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.m in.css" />
</head>
<body>
<table class="table"> <tr>
<th>書名</th> <th>価格</th> <th>出版社</th> <th>刊行日</th>
</tr>
@foreach ($records as $record)
<tr>
<td>{{ $record->title }}</td> <td>{{ $record->price }}円</td>
rel="stylesheet"
65
<td>{{ $record->publisher }}</td>
<td>{{ $record->published }}</td> </tr>
@endforeach </table> </body> </html>