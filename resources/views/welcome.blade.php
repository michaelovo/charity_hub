
@extends('layouts.master')

@section('nav')
      @include('layouts.nav')
  @endsection

@section('page_contents')
  @include('layouts.slider')

<!--==============================Content=================================-->

<div class="content">
<div class="container_12" style="background-color:#FFFFFF">
  <div class="grid_6">

    <h2 align="center">Our Mission</h2>
    <img src="images/page1_img1.jpg" alt="" class="img_inner fleft">
    <div class="extra_wrapper">

      <p class="col2"><a href="#"></a></p>
       To be a dynamic and caring organization that inspires positive action and helps create an environment of love, respect... <a href="#" class="btn">Learn More</a></p>
       <br>

    </div>
    <div class="clear"></div>
  </div>


  <div class="grid_5 prefix_1">
    <h2>Our Vision</h2>

    <div class="rel1">
      <p>
      To improve the quality of life of the marginalized sectors of society by influencing individuals, groups and institutions into realizing their humanitarian concern; and by providing a venue for them to contribute their resources through relevant and responsive programs.
      <a href="#" class="btn">Learn More</a>
      </p>

    </div>
    <!--a href="#" class="btn">Learn More</a-->
  </div>
			<!-- Footer -->

      @endsection
      @section('footer')
        @include('layouts.footer')
      @endsection
