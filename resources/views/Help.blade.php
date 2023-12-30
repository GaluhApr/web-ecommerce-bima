@extends('layout')
@section('title') Gainloe @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')
<style>


    @media  screen and (max-width: 700px) {
    #helpcenterindesktopmode{
          display:none;
      }
      #helpcenterinmobilemode{
          display:block;
      }
    }
    
    @media  screen and (min-width: 700px) {
        #helpcenterindesktopmode{
          display:block;
      }
      #helpcenterinmobilemode{
          display:none;
      }
    }
     </style> 
     
    <div class="container">
    <div class="row d-flex align-items-center ">

    <!--All Product-->
@php
$Products=App\Models\Products::where('status','=','1')->get();
@endphp
    <!-- Products Starts Here -->
<section id="Products" align="center" class="px-5 wow animated fadeInUpBig fast" style=" font-family: 'Balsamiq Sans', cursive;">
  
  <h1 class="black-text" style="font-weight:bold;">PRODUCTS</h1> 
  <div align="center">
      <p  class="col-md-2" style=" border-bottom: 2px solid #003399;"></p>
  </div>
  <div  class="row my-4 px-4 "  style="width:120%;" >
    @foreach($Products as $item)
    <div class="col-md-3 px-4 my-5"  >
        <a href="{{url('Shop/'.$item->url)}}">
            <img src=" {{asset('Uploads/Products/'.$item->image1)}}" alt="" class="img-fluid"  style=" width: 200%; height: 80%; object-fit: cover;"  >
            </a>
        <div class="py-2" style="background:white;">
          <span class="black-text my-3" style="font-weight:bold; font-family: 'Balsamiq Sans', cursive;">{{$item->name}}</span>
          <br>
          Price : ₹ {{$item->price}}<br>
            @if($item->rating==1)
                          <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        @elseif($item->rating==2)
                        <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                          @elseif($item->rating==3)
                          <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        
                          @elseif($item->rating==4)
                          <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        
                          @else
                          <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                          @endif
                           
                          <br>
         
             <a href="Shop/{{$item->url}}" class="btn  btn-primary">Selengkapnya</a>
          
        </div>
    </div>  
   @endforeach

  </div>
 
  <hr class="col-md-6"> 
</section>
<!-- Products Ends Here --> 
    <!--End of All Product-->

<!--Mobile Mode-->
<section id="helpcenterinmobilemode" align="center"  class="wow fadeInUp" id="featuredproducts">
    <h1 align="center" class="black-text col-md-12" style="font-weight:bold;">Help Center</h1>
    
    <div align="center" id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
    <div class="col-12 col-md-3">
    <div class="card mb-2">
    <img class="card-img-top  animated pulse infinite slow" src="https://codyhouse.co/demo-templates/mercurio/assets/img/card-v8-img-1.jpg" alt="Card image cap">
    <div class="card-body">
    <h4 class="card-title font-weight-bold">FAQ'S</h4>
    
    <a href="Frequently-Asked-Questions" class="btn btn-primary btn-md btn-rounded  animated pulse infinite slow">READ MORE</a>
    </div>
    </div>
    </div>
    </div>
    <div class="carousel-item">
    <div class="col-12 col-md-3">
    <div class="card mb-2">
    <img class="card-img-top  animated pulse infinite slow" src="https://codyhouse.co/demo-templates/mercurio/assets/img/card-v8-img-3.jpg" alt="Card image cap">
    <div class="card-body">
    <h4 class="card-title font-weight-bold">Shipping & Returns</h4>
    
    <a href="Shipping-and-Returns" class="btn btn-primary btn-md btn-rounded  animated pulse infinite slow">READ MORE</a>
    </div>
    </div>
    </div>
    </div>
    <div class="carousel-item">
    <div class="col-12 col-md-3">
    <div class="card mb-2">
    <img class="card-img-top  animated pulse infinite slow" src="https://codyhouse.co/demo-templates/mercurio/assets/img/card-v8-img-4.jpg" alt="Card image cap">
    <div class="card-body">
    <h4 class="card-title font-weight-bold">Contact Us</h4>
    
    <a href="Contact" class="btn btn-primary btn-md btn-rounded  animated pulse infinite slow">READ MORE</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <div class="controls-top">
    <a class="btn btn-primary animated pulse infinite slow" style="border-radius:50px;" href="#carousel-example-multi" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
    <a class="btn btn-primary animated pulse infinite slow" style="border-radius:50px;" href="#carousel-example-multi" data-slide="next"><i class="fas fa-chevron-right"></i></a>
    </div>
    
    </div>
    </section>
    <!-- End of Mobile Mode-->
    </div>
    </div>
    </section>
</div>
</div> 
@endsection