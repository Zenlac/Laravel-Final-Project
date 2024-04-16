@include('partials.header')
<h1>Inventory List</h1>

    <button>
        <a href="http://127.0.0.1:8000/Create_Product">
            Create Product
        </a>
    </button>

    <button>
    <a href="http://127.0.0.1:8000/Read_Product">
            Read Product
        </a>
    </button>

    <button>
        <a href="http://127.0.0.1:8000/Update_Product">
            Update Product
        </a>
    </button>

    <button>
        <a href="http://127.0.0.1:8000/Delete_Product">
            Delete Product
        </a>
    </button>

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