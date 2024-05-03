
@extends('Frontend.app')


@section('front')



<!-- product section -->
<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Our <span>NewArrivals</span>
          </h2>
       </div>
       @foreach ($newproduct as $products )
       <div class="row">




          <div class="col-sm-6 col-md-4 col-lg-4">
             <div class="box">
                <div class="option_container">
                   <div class="options">

                       <a href="{{ route('addbook.to.cart', $products->id) }}" class="option1">
                           Add To Cart
                      </a>
                      <a href="" class="option2">
                          Buy Now
                       </a>
                   </div>
               </div>
               <div class="img-box">
                   <img src="/{{ $products->image }}" alt="" width="700" height="2000" >
               </div>
               <div class="detail-box">
                   <h5>
                       {{$products->eyeproductname}}
                   </h5>
                   <h6>
                       ₹{{$products->price}}
                   </h6>
               </div>
           </div>
       </div>
   </div>

       @endforeach






       <div class="btn-box">
          <a href="">
          View All products
          </a>
       </div>
    </div>
   </section>
   <!-- end product section -->

@endsection
