<!DOCTYPE html>
<html>
<head>
    <title>List Produk</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="ml-10 mt-20">
        <h1 class="text-2xl font-bold mb-4">List Produk</h1>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b" >No</th>
                    <th class="py-2 px-4 border-b" >Nama Produk</th>
                    <th class="py-2 px-4 border-b" >Deskripsi Produk</th>
                    <th class="py-2 px-4 border-b" >Harga Produk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nama as $index => $item)
                    <tr>
                        <td class="py-2 px-4 border-b" >{{ $index + 1 }}</td>
                        <td class="py-2 px-4 border-b" >{{ $item}}</td>
                        <td class="py-2 px-4 border-b" >{{ $desc[$index]}}</td>
                        <td class="py-2 px-4 border-b" >{{ $harga[$index] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>



