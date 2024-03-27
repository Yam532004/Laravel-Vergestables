@extends('/layouts/_layouts')

@section('content')
<section id="w366_home_featured_product-2" class="widget w366_home_featured_product">
    <section id="home-featured-products">
        <div class="wrapper">
            <div class="inner">
                <div>
                    <h1 style="text-align: center;">Add new car</h1>
                </div>
                <div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <span style="color: red;">Add new product fail</span>
                    </div>
                    @endif
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('create-product') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            @if ($errors->has('name'))
                            <label for="name" style="color: red;">Name: </label>
                            @else
                            <label for="name">Name: </label>
                            @endif
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" placeholder="Enter name" value="{{ old('name') }}">
                            @error('name')
                            <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>

                       

                        <div class="form-group">
                            @if ($errors->has('currentPrice'))
                            <label for="currentPrice" style="color: red;">Current Price: </label>
                            @else
                            <label for="currentPrice">Current Price: </label>
                            @endif
                            <input type="number" class="form-control" id="currentPrice" name="currentPrice" placeholder="Current Price" value="{{ old('currentPrice') }}">
                            @error('currentPrice')
                            <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            @if ($errors->has('amountPrice'))
                            <label for="amountPrice" style="color: red;">Amount Price: </label>
                            @else
                            <label for="amountPrice">Amount Price: </label>
                            @endif
                            <input type="number" class="form-control" id="amountPrice" name="amountPrice" placeholder="Amount Price" value="{{ old('amountPrice') }}">
                            @error('amountPrice')
                            <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>

                        <select class="form-select" aria-label="Default select example" name="category">
                            <option selected>Open this select menu</option>
                            @foreach($categories as $category )
                            <option value="{{$category->id}}">{{ $category->name}}</option>
                            @endforeach
                            @error('category')
                            <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </select>

                        
                        <div class="form-group">
                            @if ($errors->has('describles'))
                            <label for="describles" style="color: red;">Describles:  </label>
                            @else
                            <label for="describles">Describles:  </label>
                            @endif
                            <input type="text" class="form-control" id="describles" name="describles" placeholder="Describles" value="{{ old('describles') }}">
                            @error('describles')
                            <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image" @error('model') style="color: red;" @enderror>Image: </label>
                            <input type="file" id="imageInput" name="image" onchange="previewImage(event)" accept="image/*">
                            <img src="" alt="Preview Image" id="imagePreview" style="display: none; max-width: 200px; max-height: 200px">
                            @error('image')
                            <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>



                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <script>
                    function previewImage(event) {
                        var input = event.target;

                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function(e) {
                                var imagePreview = document.getElementById('imagePreview');
                                imagePreview.src = e.target.result;
                                imagePreview.style.display = 'block';
                                var imageUrl = URL.createObjectURL(input.files[0]);
                                localStorage.setItem('selectedImage', imageUrl);
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                </script>
            </div>
        </div>
        </div>
    </section>
</section>

@endsection