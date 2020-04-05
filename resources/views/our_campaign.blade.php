
@extends('layouts.master')
@section('nav')
      @include('layouts.nav')
@endsection
@section('page_contents')
<!--NEWS SECTION STARTS-->
			<div class="container_12"  style="background-color:#ffffff" >
				<div class="grid_3" >
					<h2>Latest News</h2>
					<ul class="list">
						<li>
							<time datetime="2018-01-01">2<span>Sept</span></time>
							<div class="extra_wrapper">
								<div class="title col2"><a href="#">A new cause to help</a></div>
								Back to school campaign as students resumes school.
							</div>
						</li>
						<li>
							<time datetime="2014-01-01">22<span>Aug</span></time>
							<div class="extra_wrapper">
								<div class="title col2"><a href="#">Hope again</a></div>
								Prisoners were made to dream again
							</div>
						</li>
						<li>
							<time datetime="2014-01-01">20<span>Feb</span></time>
							<div class="extra_wrapper">
								<div class="title col2"><a href="#">Inner city mission</a></div>
								giving the hopeless child a new lease of life.
							</div>
						</li>
						<li>
							<time datetime="2014-01-01">05<span>Mar</span></time>
							<div class="extra_wrapper">
								<div class="title col2"><a href="#">A touch of smile</a></div>
								As internally displaced persons smiles again...
							</div>
						</li>
					</ul>
					<blockquote class="bq1">
			<div class="title">Testimonials</div>
			<p>...I eventually finished my degree...Thanks to Christopher Ayobami Family Foundation. </p>
						<div class="">Joseph Oyeneku</div>
					</blockquote>
				</div>
				<div class="grid_9">
					<h2>Our Campaigns</h2>
					<section id ="section-home">
						<ul id="da-thumbs" class="da-thumbs">
							<li>
								<a href="#">
								<img src="images/th1.jpg" alt="" />
								<div><span>Helping Adults</span></div>
								</a>
							</li>
							<li>
								<a href="#">
								<img src="images/th2.jpg" alt="" />
								<div><span>Helping Children</span></div>
								</a>
							</li>
							<li>
								<a href="#">
								<img src="images/th3.jpg" alt="" />
								<div><span>Empowering Women</span></div>
								</a>
							</li>
							<li>

								<a href="#">
								<img src="images/th4.jpg" alt="" />
								<div><span>Homes for Veterans</span></div>
								</a>
							</li>
							<li>
								<a href="#">
								<img src="images/th5.jpg" alt="" />
								<div><span>Saving Lives</span></div>
								</a>
							</li>
							<li>
								<a href="#">
								<img src="images/th6.jpg" alt="" />
								<div><span>Invest in Kids</span></div>
								</a>
							</li>
							<li>
								<a href="#">
								<img src="images/th7.jpg" alt="" />
								<div><span>Healthy Nutrition</span></div>
								</a>
							</li>
							<li>
								<a href="#">
								<img src="images/th8.jpg" alt="" />
								<div><span>Educated World</span></div>
								</a>
							</li>
							<li>
								<a href="#">
								<img src="images/th9.jpg" alt="" />
								<div><span>Against Hunger</span></div>
								</a>
							</li>
						</ul>
					</section>
          @endsection
          @section('footer')
            @include('layouts.footer')
          @endsection
