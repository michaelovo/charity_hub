
@extends('layouts.master')
@section('nav')
      @include('layouts.nav')
@endsection
@section('page_contents')
<div class="container_12"  style="background-color:#ffffff">
      <div class="grid_6">
        <h2>We Care About Giving</h2>
        <img src="images/page2_img1.jpg" alt="" class="img_inner fleft">
        <div class="extra_wrapper">
          <p class="col2"><a href="#">Education Program – From the Streets… To The Campus  </a></p>
          Sponsor a scholar and help deserving students accomplish their dream of graduating and completing a university degree
          <br>
          <a href="#" class="btn">Learn More</a>
        </div>
        <div class="clear cl1"></div>
        <img src="images/page2_img2.jpg" alt="" class="img_inner fleft">
        <div class="extra_wrapper">
          <p class="col2"><a href="#">Medical Program – Sponsor a Smile </a></p>
          Let’s help children with cleft lip and palate get their smile back.
          <br>
          <a href="#" class="btn">Learn More</a>
        </div>
        <div class="clear cl2"></div>
        <img src="images/page2_img3.jpg" alt="" class="img_inner fleft">
        <div class="extra_wrapper">
          <p class="col2"><a href="#">Dental Program – Sagip Ngipin </a></p>
          Support and contribute to the regular dental clinic service, or sponsor a Dental Mission.
          <br>
          <a href="#" class="btn">Learn More</a>
        </div>
        <div class="clear cl1"></div>
      </div>
      <div class="grid_5 prefix_1">
        <h2>Upcoming Events</h2>
        <ul class="list l1 col2">
          <li>
            <time datetime="2014-01-01">1st<span>Oct</span></time>
            <div class="extra_wraper">
            <a href="#">Fundraiser for Kids: back to school campaign </a></div>
          </li>
          <li>
            <time datetime="2014-01-01">30<span>Sept</span></time>
            <div class="extra_wraper">
              <a href="#">fundraiser for sports and Medical Sciences Academy,Aba college of disable persons.</a>
              </div>
          </li>
          <li>
            <time datetime="2014-01-01">10<span>Oct</span></time>
            <div class="extra_wraper">
              <a href="#">A visit to kaduna prison for food and clothes donation </a>
            </div>
          </li>
          <li>
            <time datetime="2014-01-01">25<span>Nov</span></time>
            <div class="extra_wraper">
              <a href="#">Fundraiser for Internally Displaced Persons in Bornu </a>							</div>
          </li>
        </ul>
      </div>
      </div>
      <div class="hor"> </div>
      @endsection
      @section('footer')
        @include('layouts.footer')
      @endsection
