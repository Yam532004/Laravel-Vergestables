@extends('/layouts/_layouts')

@section('content')
<div class="untree_co-section before-footer-section">
    <div class="container">
        <div class="row mb-5">
            <form class="col-md-12" method="post">
                <div class="site-blocks-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-id">ID</th>
                                <th class="product-thumbnail">Image</th>
                                <th class="product-name">VergesName</th>
                                <th class="product-quantity">Count</th>
                                <th class="product-price">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$vergest->id}}</td>
                                <td class="product-thumbnail">
                                    <img src="{{ asset('/images/'.$vergest->images) }}" alt="Image" class="img-fluid">
                                </td>
                                <td class="product-name">
                                    <h2 class="h5 text-black">{{$vergest->name}}</h2>
                                </td>
                                <td class="product-quantity">
                                    {{$vergest->count}}
                                </td>
                                <td class="product-price">{{$vergest->price}}</td>
                                <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div> 
    </div>
</div>
@endsection