<div class="container">
    <div class="row my-4 px-4">
        @foreach($products as $item)
        <div class="col-md-3 px-4 my-5">
            <a href="{{ url('Shop/'.$item->url) }}">
                <img src="{{ asset('Uploads/Products/'.$item->image1) }}" alt="" class="img-fluid" style="width: 200%; height: 80%; object-fit: cover;">
            </a>
            <div class="py-2" style="background:white;">
                <span class="black-text my-3" style="font-weight:bold; font-family: 'Balsamiq Sans', cursive;">{{ $item->name }}</span>
                <br>
                Price: ₹ {{ $item->price }}<br>
                <!-- Add other product details here -->
                
                <!-- Add rating stars here -->
                <br>
                <a href="{{ url('Shop/'.$item->url) }}" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>
        @endforeach
    </div>