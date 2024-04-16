@include('partials.header')
<h1>Inventory List</h1>
<table border='1'>
    <tr>
        <td>ID</td>
        <td>PRODUCT</td>
        <td>QUANTITY</td>
        <td>PRICE</td>
    </tr>
    @foreach ($inventory as $bk)
    <tr>
        <td>{{$bk['id']}}</td>
        <td>{{$bk['product']}}</td>
        <td>{{$bk['quantity']}}</td>
        <td>{{$bk['price']}}</td>
    </tr>
    @endforeach
</table>


@include('partials.footer')