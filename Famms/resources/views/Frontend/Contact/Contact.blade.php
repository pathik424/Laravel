
@extends('Frontend.app')


@section('front')




<!-- inner page section -->
<section class="inner_page_head">
    <div class="container_fuild">
       <div class="row">
          <div class="col-md-12">
             <div class="full">
                <h3>Contact us</h3>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- end inner page section -->
 <!-- why section -->
 <section class="why_section layout_padding">
    <div class="container">

       <div class="row">
          <div class="col-lg-8 offset-lg-2">
             <div class="full">
                <form action="" method="POST">
                    @csrf
                   <fieldset>
                      <input type="text" placeholder="Enter your full name" name="fullname" required />
                      <input type="email" placeholder="Enter your email address" name="email" required />
                      <input type="text" placeholder="Enter subject" name="subject" required />
                      {{-- <textarea name="" id="" cols="30" rows="10"></textarea>
                      <input type="text" placeholder="message" name="message" required> --}}
                      <textarea placeholder="Enter your message" name="message" required></textarea>
                      <input type="submit" value="Submit" />
                   </fieldset>
                </form>
             </div>
          </div>
       </div>
    </div>
 </section>

 @endsection
