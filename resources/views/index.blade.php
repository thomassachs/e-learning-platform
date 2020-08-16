@extends('layouts.app')

@section('content')


    <!-- Body Start -->
    	<div class="wrapper">
    		<div class="sa4d25">
    			<div class="container-fluid">
    				<div class="row">
    					<div class="col-xl-9 col-lg-8">

    						<div class="section3125 ">
    							<h4 class="item_title">Featured Courses</h4>
    							<a href="#" class="see150">See all</a>
    							<div class="la5lo1">
    								<div class="owl-carousel featured_courses owl-theme">
                                        @foreach ($courses as $course)
                                            <div class="item">
        										<div class="fcrse_1 mb-20">
        											<a href="/course/{{ $course->storageName }}" class="fcrse_img">
        												<img src="storage/courses/{{ $course->status }}/{{ $course->storageName }}/{{ $course->imagePath }}" alt=""  height="200">
        												<div class="course-overlay">
        													<div class="badge_seller">Bestseller</div>
        													<div class="crse_reviews">
        														<i class='uil uil-star'></i>4.5
        													</div>
        													<span class="play_btn1"><i class="uil uil-play"></i></span>
        													<div class="crse_timer">
        														25 hours
        													</div>
        												</div>
        											</a>
        											<div class="fcrse_content">
        												<div class="eps_dots more_dropdown">
        													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
        													<div class="dropdown-content">
        														<span><i class='uil uil-share-alt'></i>Share</span>
        														<span><i class="uil uil-clock-three"></i>Save</span>
        														<span><i class='uil uil-ban'></i>Not Interested</span>
        														<span><i class="uil uil-windsock"></i>Report</span>
        													 </div>
        												</div>
        												<div class="vdtodt">
        													<span class="vdt14">109k views</span>
        													<span class="vdt14">15 days ago</span>
        												</div>
        												<a href="/course/{{ $course->storageName }}" class="crse14s">{{ $course->title }}</a>
        												<a href="#" class="crse-cate">Web Development | Python</a>
        												<div class="auth1lnkprce">
        													<p class="cr1fot">By <a href="#">{{ $course->user->name }}</a></p>
        													<div class="prce142">$10</div>
        												</div>
        											</div>
        										</div>
        									</div>
                                        @endforeach


    								</div>
    							</div>
    						</div>
    						<div class="section3125 mt-30">
    							<h4 class="item_title">Newest Courses</h4>
    							<a href="#" class="see150">See all</a>
    							<div class="la5lo1">
    								<div class="owl-carousel featured_courses owl-theme">
    									<div class="item">
    										<div class="fcrse_1 mb-20">
    											<a href="course_detail_view.html" class="fcrse_img">
    												<img src="images/courses/img-14.jpg" alt="">
    												<div class="course-overlay">
    													<span class="play_btn1"><i class="uil uil-play"></i></span>
    													<div class="crse_timer">
    														12 hours
    													</div>
    												</div>
    											</a>
    											<div class="fcrse_content">
    												<div class="eps_dots more_dropdown">
    													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
    													<div class="dropdown-content">
    														<span><i class='uil uil-share-alt'></i>Share</span>
    														<span><i class="uil uil-clock-three"></i>Save</span>
    														<span><i class='uil uil-ban'></i>Not Interested</span>
    														<span><i class="uil uil-windsock"></i>Report</span>
    													 </div>
    												</div>
    												<div class="vdtodt">
    													<span class="vdt14">15 views</span>
    													<span class="vdt14">10 min ago</span>
    												</div>
    												<a href="course_detail_view.html" class="crse14s">Build Responsive Real World Websites with HTML5 and CSS3</a>
    												<a href="#" class="crse-cate">Development | CSS</a>
    												<div class="auth1lnkprce">
    													<p class="cr1fot">By <a href="#">John Doe</a></p>
    													<div class="prce142">$4</div>
    												</div>
    											</div>
    										</div>
    									</div>
    									<div class="item">
    										<div class="fcrse_1 mb-20">
    											<a href="course_detail_view.html" class="fcrse_img">
    												<img src="images/courses/img-11.jpg" alt="">
    												<div class="course-overlay">
    													<span class="play_btn1"><i class="uil uil-play"></i></span>
    													<div class="crse_timer">
    														28 hours
    													</div>
    												</div>
    											</a>
    											<div class="fcrse_content">
    												<div class="eps_dots more_dropdown">
    													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
    													<div class="dropdown-content">
    														<span><i class='uil uil-share-alt'></i>Share</span>
    														<span><i class="uil uil-clock-three"></i>Save</span>
    														<span><i class='uil uil-ban'></i>Not Interested</span>
    														<span><i class="uil uil-windsock"></i>Report</span>
    													 </div>
    												</div>
    												<div class="vdtodt">
    													<span class="vdt14">5 views</span>
    													<span class="vdt14">15 Min ago</span>
    												</div>
    												<a href="course_detail_view.html" class="crse14s">The Complete JavaScript Course 2020: Build Real Projects!</a>
    												<a href="#" class="crse-cate">Development | JavaScript</a>
    												<div class="auth1lnkprce">
    													<p class="cr1fot">By <a href="#">Jassica William</a></p>
    													<div class="prce142">$5</div>
    												</div>
    											</div>
    										</div>
    									</div>
    									<div class="item">
    										<div class="fcrse_1 mb-20">
    											<a href="course_detail_view.html" class="fcrse_img">
    												<img src="images/courses/img-18.jpg" alt="">
    												<div class="course-overlay">
    													<span class="play_btn1"><i class="uil uil-play"></i></span>
    													<div class="crse_timer">
    														15 hours
    													</div>
    												</div>
    											</a>
    											<div class="fcrse_content">
    												<div class="eps_dots more_dropdown">
    													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
    													<div class="dropdown-content">
    														<span><i class='uil uil-share-alt'></i>Share</span>
    														<span><i class="uil uil-clock-three"></i>Save</span>
    														<span><i class='uil uil-ban'></i>Not Interested</span>
    														<span><i class="uil uil-windsock"></i>Report</span>
    													 </div>
    												</div>
    												<div class="vdtodt">
    													<span class="vdt14">25 views</span>
    													<span class="vdt14">2 Hour ago</span>
    												</div>
    												<a href="course_detail_view.html" class="crse14s">The Complete Front-End Web Development Course!</a>
    												<a href="#" class="crse-cate">Development | Web Development</a>
    												<div class="auth1lnkprce">
    													<p class="cr1fot">By <a href="#">Joginder Singh</a></p>
    													<div class="prce142">$9</div>
    												</div>
    											</div>
    										</div>
    									</div>
    									<div class="item">
    										<div class="fcrse_1 mb-20">
    											<a href="course_detail_view.html" class="fcrse_img">
    												<img src="images/courses/img-19.jpg" alt="">
    												<div class="course-overlay">
    													<div class="crse_reviews">
    														<i class='uil uil-star'></i>5.0
    													</div>
    													<span class="play_btn1"><i class="uil uil-play"></i></span>
    													<div class="crse_timer">
    														1 hour
    													</div>
    												</div>
    											</a>
    											<div class="fcrse_content">
    												<div class="eps_dots more_dropdown">
    													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
    													<div class="dropdown-content">
    														<span><i class='uil uil-share-alt'></i>Share</span>
    														<span><i class="uil uil-clock-three"></i>Save</span>
    														<span><i class='uil uil-ban'></i>Not Interested</span>
    														<span><i class="uil uil-windsock"></i>Report</span>
    													 </div>
    												</div>
    												<div class="vdtodt">
    													<span class="vdt14">15 views</span>
    													<span class="vdt14">6 hours ago</span>
    												</div>
    												<a href="course_detail_view.html" class="crse14s">Ethical Hacking - Most Advanced Level Penetration Testing</a>
    												<a href="#" class="crse-cate">IT &amp; Software | Ethical Hacking</a>
    												<div class="auth1lnkprce">
    													<p class="cr1fot">By <a href="#">Poonam Verma</a></p>
    													<div class="prce142">$10</div>
    												</div>
    											</div>
    										</div>
    									</div>
    									<div class="item">
    										<div class="fcrse_1 mb-20">
    											<a href="#" class="fcrse_img">
    												<img src="images/courses/img-12.jpg" alt="">
    												<div class="course-overlay">
    													<div class="crse_reviews">
    														<i class='uil uil-star'></i>3.5
    													</div>
    													<span class="play_btn1"><i class="uil uil-play"></i></span>
    													<div class="crse_timer">
    														28 hours
    													</div>
    												</div>
    											</a>
    											<div class="fcrse_content">
    												<div class="eps_dots more_dropdown">
    													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
    													<div class="dropdown-content">
    														<span><i class='uil uil-share-alt'></i>Share</span>
    														<span><i class="uil uil-clock-three"></i>Save</span>
    														<span><i class='uil uil-ban'></i>Not Interested</span>
    														<span><i class="uil uil-windsock"></i>Report</span>
    													 </div>
    												</div>
    												<div class="vdtodt">
    													<span class="vdt14">45 views</span>
    													<span class="vdt14">20 hours ago</span>
    												</div>
    												<a href="course_detail_view.html" class="crse14s">Advanced CSS and Sass: Flexbox, Grid, Animations and More!</a>
    												<a href="#" class="crse-cate">Development | Sass</a>
    												<div class="auth1lnkprce">
    													<p class="cr1fot">By <a href="#">Rock William</a></p>
    													<div class="prce142">$6</div>
    												</div>
    											</div>
    										</div>
    									</div>
    									<div class="item">
    										<div class="fcrse_1 mb-20">
    											<a href="#" class="fcrse_img">
    												<img src="images/courses/img-13.jpg" alt="">
    												<div class="course-overlay">
    													<span class="play_btn1"><i class="uil uil-play"></i></span>
    													<div class="crse_timer">
    														30 hours
    													</div>
    												</div>
    											</a>
    											<div class="fcrse_content">
    												<div class="eps_dots more_dropdown">
    													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
    													<div class="dropdown-content">
    														<span><i class='uil uil-share-alt'></i>Share</span>
    														<span><i class="uil uil-clock-three"></i>Save</span>
    														<span><i class='uil uil-ban'></i>Not Interested</span>
    														<span><i class="uil uil-windsock"></i>Report</span>
    													 </div>
    												</div>
    												<div class="vdtodt">
    													<span class="vdt14">20 Views</span>
    													<span class="vdt14">1 day ago</span>
    												</div>
    												<a href="course_detail_view.html" class="crse14s">The Complete Node.js Developer Course (3rd Edition)</a>
    												<a href="#" class="crse-cate">Development | Node.js</a>
    												<div class="auth1lnkprce">
    													<p class="cr1fot">By <a href="#">John Doe</a></p>
    													<div class="prce142">$3</div>
    												</div>
    											</div>
    										</div>
    									</div>
    									<div class="item">
    										<div class="fcrse_1 mb-20">
    											<a href="#" class="fcrse_img">
    												<img src="images/courses/img-20.jpg" alt="">
    												<div class="course-overlay">
    													<div class="crse_reviews">
    														<i class='uil uil-star'></i>5.0
    													</div>
    													<span class="play_btn1"><i class="uil uil-play"></i></span>
    													<div class="crse_timer">
    														21 hours
    													</div>
    												</div>
    											</a>
    											<div class="fcrse_content">
    												<div class="eps_dots more_dropdown">
    													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
    													<div class="dropdown-content">
    														<span><i class='uil uil-share-alt'></i>Share</span>
    														<span><i class="uil uil-clock-three"></i>Save</span>
    														<span><i class='uil uil-ban'></i>Not Interested</span>
    														<span><i class="uil uil-windsock"></i>Report</span>
    													 </div>
    												</div>
    												<div class="vdtodt">
    													<span class="vdt14">200 Views</span>
    													<span class="vdt14">4 days ago</span>
    												</div>
    												<a href="course_detail_view.html" class="crse14s">WordPress Development - Themes, Plugins &amp; Gutenberg</a>
    												<a href="#" class="crse-cate">Design | Wordpress</a>
    												<div class="auth1lnkprce">
    													<p class="cr1fot">By <a href="#">Joy Dua</a></p>
    													<div class="prce142">$14</div>
    												</div>
    											</div>
    										</div>
    									</div>
    									<div class="item">
    										<div class="fcrse_1 mb-20">
    											<a href="course_detail_view.html" class="fcrse_img">
    												<img src="images/courses/img-16.jpg" alt="">
    												<div class="course-overlay">
    													<span class="play_btn1"><i class="uil uil-play"></i></span>
    													<div class="crse_timer">
    														22 hours
    													</div>
    												</div>
    											</a>
    											<div class="fcrse_content">
    												<div class="eps_dots more_dropdown">
    													<a href="#"><i class='uil uil-ellipsis-v'></i></a>
    													<div class="dropdown-content">
    														<span><i class='uil uil-share-alt'></i>Share</span>
    														<span><i class="uil uil-clock-three"></i>Save</span>
    														<span><i class='uil uil-ban'></i>Not Interested</span>
    														<span><i class="uil uil-windsock"></i>Report</span>
    													 </div>
    												</div>
    												<div class="vdtodt">
    													<span class="vdt14">11 Views</span>
    													<span class="vdt14">5 Days ago</span>
    												</div>
    												<a href="course_detail_view.html" class="crse14s">Vue JS 2 - The Complete Guide (incl. Vue Router & Vuex)</a>
    												<a href="#" class="crse-cate">Development | Vue JS</a>
    												<div class="auth1lnkprce">
    													<p class="cr1fot">By <a href="#">Manreet Kaur</a></p>
    													<div class="prce142">$10</div>
    												</div>
    											</div>
    										</div>
    									</div>
    								</div>
    							</div>
    						</div>
    						<div class="section3126">
    							<div class="row">
    								<div class="col-xl-6 col-lg-12 col-md-6">
    									<div class="value_props">
    										<div class="value_icon">
    											<i class='uil uil-history'></i>
    										</div>
    										<div class="value_content">
    											<h4>Go at your own pace</h4>
    											<p>Enjoy lifetime access to courses on Edututs+'s website</p>
    										</div>
    									</div>
    								</div>
    								<div class="col-xl-6 col-lg-12 col-md-6">
    									<div class="value_props">
    										<div class="value_icon">
    											<i class='uil uil-user-check'></i>
    										</div>
    										<div class="value_content">
    											<h4>Learn from industry experts</h4>
    											<p>Select from top instructors around the world</p>
    										</div>
    									</div>
    								</div>
    								<div class="col-xl-6 col-lg-12 col-md-6">
    									<div class="value_props">
    										<div class="value_icon">
    											<i class='uil uil-play-circle'></i>
    										</div>
    										<div class="value_content">
    											<h4>Find video courses on almost any topic</h4>
    											<p>Build your library for your career and personal growth</p>
    										</div>
    									</div>
    								</div>
    								<div class="col-xl-6 col-lg-12 col-md-6">
    									<div class="value_props">
    										<div class="value_icon">
    											<i class='uil uil-presentation-play'></i>
    										</div>
    										<div class="value_content">
    											<h4>100,000 online courses</h4>
    											<p>Explore a variety of fresh topics</p>
    										</div>
    									</div>
    								</div>
    							</div>
    						</div>
    						<div class="section3125 mt-50">
    							<h4 class="item_title">Popular Instructors</h4>
    							<a href="all_instructor.html" class="see150">See all</a>
    							<div class="la5lo1">
    								<div class="owl-carousel top_instrutors owl-theme">
    									<div class="item">
    										<div class="fcrse_1 mb-20">
    											<div class="tutor_img">
    												<a href="instructor_profile_view.html"><img src="images/left-imgs/img-1.jpg" alt=""></a>
    											</div>
    											<div class="tutor_content_dt">
    												<div class="tutor150">
    													<a href="instructor_profile_view.html" class="tutor_name">John Doe</a>
    													<div class="mef78" title="Verify">
    														<i class="uil uil-check-circle"></i>
    													</div>
    												</div>
    												<div class="tutor_cate">Wordpress &amp; Plugin Tutor</div>
    												<ul class="tutor_social_links">
    													<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
    													<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
    													<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
    													<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
    												</ul>
    												<div class="tut1250">
    													<span class="vdt15">100K Students</span>
    													<span class="vdt15">15 Courses</span>
    												</div>
    											</div>
    										</div>
    									</div>
    									<div class="item">
    										<div class="fcrse_1 mb-20">
    											<div class="tutor_img">
    												<a href="instructor_profile_view.html"><img src="images/left-imgs/img-2.jpg" alt=""></a>
    											</div>
    											<div class="tutor_content_dt">
    												<div class="tutor150">
    													<a href="instructor_profile_view.html" class="tutor_name">Kerstin Cable</a>
    													<div class="mef78" title="Verify">
    														<i class="uil uil-check-circle"></i>
    													</div>
    												</div>
    												<div class="tutor_cate">Language Learning Coach, Writer, Online Tutor</div>
    												<ul class="tutor_social_links">
    													<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
    													<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
    													<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
    													<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
    												</ul>
    												<div class="tut1250">
    													<span class="vdt15">14K Students</span>
    													<span class="vdt15">11 Courses</span>
    												</div>
    											</div>
    										</div>
    									</div>
    									<div class="item">
    										<div class="fcrse_1 mb-20">
    											<div class="tutor_img">
    												<a href="instructor_profile_view.html"><img src="images/left-imgs/img-3.jpg" alt=""></a>
    											</div>
    											<div class="tutor_content_dt">
    												<div class="tutor150">
    													<a href="instructor_profile_view.html" class="tutor_name">Jose Portilla</a>
    													<div class="mef78" title="Verify">
    														<i class="uil uil-check-circle"></i>
    													</div>
    												</div>
    												<div class="tutor_cate">Head of Data Science, Pierian Data Inc.</div>
    												<ul class="tutor_social_links">
    													<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
    													<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
    													<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
    													<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
    												</ul>
    												<div class="tut1250">
    													<span class="vdt15">1M Students</span>
    													<span class="vdt15">25 Courses</span>
    												</div>
    											</div>
    										</div>
    									</div>
    									<div class="item">
    										<div class="fcrse_1 mb-20">
    											<div class="tutor_img">
    												<a href="instructor_profile_view.html"><img src="images/left-imgs/img-4.jpg" alt=""></a>
    											</div>
    											<div class="tutor_content_dt">
    												<div class="tutor150">
    													<a href="instructor_profile_view.html" class="tutor_name">Farhat Amin</a>
    													<div class="mef78" title="Verify">
    														<i class="uil uil-check-circle"></i>
    													</div>
    												</div>
    												<div class="tutor_cate">Cookery Coach</div>
    												<ul class="tutor_social_links">
    													<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
    													<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
    													<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
    													<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
    												</ul>
    												<div class="tut1250">
    													<span class="vdt15">1.5K Students</span>
    													<span class="vdt15">9 Courses</span>
    												</div>
    											</div>
    										</div>
    									</div>
    									<div class="item">
    										<div class="fcrse_1 mb-20">
    											<div class="tutor_img">
    												<a href="instructor_profile_view.html"><img src="images/left-imgs/img-5.jpg" alt=""></a>
    											</div>
    											<div class="tutor_content_dt">
    												<div class="tutor150">
    													<a href="instructor_profile_view.html" class="tutor_name">Kyle Pew</a>
    													<div class="mef78" title="Verify">
    														<i class="uil uil-check-circle"></i>
    													</div>
    												</div>
    												<div class="tutor_cate">Microsoft Certified Trainer - 380,000+ Udemy Students</div>
    												<ul class="tutor_social_links">
    													<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
    													<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
    													<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
    													<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
    												</ul>
    												<div class="tut1250">
    													<span class="vdt15">300K Students</span>
    													<span class="vdt15">18 Courses</span>
    												</div>
    											</div>
    										</div>
    									</div>
    									<div class="item">
    										<div class="fcrse_1 mb-20">
    											<div class="tutor_img">
    												<a href="instructor_profile_view.html"><img src="images/left-imgs/img-7.jpg" alt=""></a>
    											</div>
    											<div class="tutor_content_dt">
    												<div class="tutor150">
    													<a href="instructor_profile_view.html" class="tutor_name">Jaysen Batchelor</a>
    													<div class="mef78" title="Verify">
    														<i class="uil uil-check-circle"></i>
    													</div>
    												</div>
    												<div class="tutor_cate">Illustrator &amp; Designer</div>
    												<ul class="tutor_social_links">
    													<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
    													<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
    													<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
    													<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
    												</ul>
    												<div class="tut1250">
    													<span class="vdt15">491K Students</span>
    													<span class="vdt15">13 Courses</span>
    												</div>
    											</div>
    										</div>
    									</div>
    									<div class="item">
    										<div class="fcrse_1 mb-20">
    											<div class="tutor_img">
    												<a href="instructor_profile_view.html"><img src="images/left-imgs/img-8.jpg" alt=""></a>
    											</div>
    											<div class="tutor_content_dt">
    												<div class="tutor150">
    													<a href="instructor_profile_view.html" class="tutor_name">Quinton Batchelor</a>
    													<div class="mef78" title="Verify">
    														<i class="uil uil-check-circle"></i>
    													</div>
    												</div>
    												<div class="tutor_cate">Photographer & Instructor</div>
    												<ul class="tutor_social_links">
    													<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
    													<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
    													<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
    													<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
    												</ul>
    												<div class="tut1250">
    													<span class="vdt15">364K Students</span>
    													<span class="vdt15">6 Courses</span>
    												</div>
    											</div>
    										</div>
    									</div>
    									<div class="item">
    										<div class="fcrse_1 mb-20">
    											<div class="tutor_img">
    												<a href="instructor_profile_view.html"><img src="images/left-imgs/img-6.jpg" alt=""></a>
    											</div>
    											<div class="tutor_content_dt">
    												<div class="tutor150">
    													<a href="instructor_profile_view.html" class="tutor_name">Eli Natoli</a>
    													<div class="mef78" title="Verify">
    														<i class="uil uil-check-circle"></i>
    													</div>
    												</div>
    												<div class="tutor_cate">Entrepreneur - Passionate Teacher</div>
    												<ul class="tutor_social_links">
    													<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
    													<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
    													<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
    													<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
    												</ul>
    												<div class="tut1250">
    													<span class="vdt15">615K Students</span>
    													<span class="vdt15">12 Courses</span>
    												</div>
    											</div>
    										</div>
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>
    					<div class="col-xl-3 col-lg-4">
    						<div class="right_side">
    							<div class="fcrse_2 mb-30">
    								<div class="tutor_img">
    									<a href="my_instructor_profile_view.html"><img src="images/left-imgs/img-10.jpg" alt=""></a>
    								</div>
    								<div class="tutor_content_dt">
    									<div class="tutor150">
    										<a href="my_instructor_profile_view.html" class="tutor_name">Joginder Singh</a>
    										<div class="mef78" title="Verify">
    											<i class="uil uil-check-circle"></i>
    										</div>
    									</div>
    									<div class="tutor_cate">Web Developer, Designer, and Teacher</div>
    									<ul class="tutor_social_links">
    										<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
    										<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
    										<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
    										<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
    									</ul>
    									<div class="tut1250">
    										<span class="vdt15">615K Students</span>
    										<span class="vdt15">12 Courses</span>
    									</div>
    									<a href="my_instructor_profile_view.html" class="prfle12link">Go To Profile</a>
    								</div>
    							</div>
    							<div class="fcrse_3">
    								<div class="cater_ttle">
    									<h4>Live Streaming</h4>
    								</div>
    								<div class="live_text">
    									<div class="live_icon"><i class="uil uil-kayak"></i></div>
    									<div class="live-content">
    										<p>Set up your channel and stream live to your students</p>
    										<button class="live_link" onclick="window.location.href = 'add_streaming.html';">Get Started</button>
    										<span class="livinfo">Info : This feature only for 'Instructors'.</span>
    									</div>
    								</div>
    							</div>
    							<div class="get1452">
    								<h4>Get personalized recommendations</h4>
    								<p>Answer a few questions for your top picks</p>
    								<button class="Get_btn" onclick="window.location.href = '#';">Get Started</button>
    							</div>
    							<div class="fcrse_3">
    								<div class="cater_ttle">
    									<h4>Top Categories</h4>
    								</div>
    								<ul class="allcate15">
    									<li><a href="#" class="ct_item"><i class='uil uil-arrow'></i>Development</a></li>
    									<li><a href="#" class="ct_item"><i class='uil uil-graph-bar'></i>Business</a></li>
    									<li><a href="#" class="ct_item"><i class='uil uil-monitor'></i>IT and Software</a></li>
    									<li><a href="#" class="ct_item"><i class='uil uil-ruler'></i>Design</a></li>
    									<li><a href="#" class="ct_item"><i class='uil uil-chart-line'></i>Marketing</a></li>
    									<li><a href="#" class="ct_item"><i class='uil uil-book-open'></i>Personal Development</a></li>
    									<li><a href="#" class="ct_item"><i class='uil uil-camera'></i>Photography</a></li>
    									<li><a href="#" class="ct_item"><i class='uil uil-music'></i>Music</a></li>
    								</ul>
    							</div>
    							<div class="strttech120">
    								<h4>Become an Instructor</h4>
    								<p>Top instructors from around the world teach millions of students on Cursus. We provide the tools and skills to teach what you love.</p>
    								<button class="Get_btn" onclick="window.location.href = '#';">Start Teaching</button>
    							</div>
    						</div>
    					</div>
    					<div class="col-xl-12 col-lg-12">
    						<div class="section3125 mt-30">
    							<h4 class="item_title">What Our Student Have Today</h4>
    							<div class="la5lo1">
    								<div class="owl-carousel Student_says owl-theme">
    									<div class="item">
    										<div class="fcrse_4 mb-20">
    											<div class="say_content">
    												<p>"Donec ac ex eu arcu euismod feugiat. In venenatis bibendum nisi, in placerat eros ultricies vitae. Praesent pellentesque blandit scelerisque. Suspendisse potenti."</p>
    											</div>
    											<div class="st_group">
    												<div class="stud_img">
    													<img src="images/left-imgs/img-4.jpg" alt="">
    												</div>
    												<h4>Jassica William</h4>
    											</div>
    										</div>
    									</div>
    									<div class="item">
    										<div class="fcrse_4 mb-20">
    											<div class="say_content">
    												<p>"Cras id enim lectus. Fusce at arcu tincidunt, iaculis libero quis, vulputate mauris. Morbi facilisis vitae ligula id aliquam. Nunc consectetur malesuada bibendum."</p>
    											</div>
    											<div class="st_group">
    												<div class="stud_img">
    													<img src="images/left-imgs/img-1.jpg" alt="">
    												</div>
    												<h4>Rock Smith</h4>
    											</div>
    										</div>
    									</div>
    									<div class="item">
    										<div class="fcrse_4 mb-20">
    											<div class="say_content">
    												<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos eros ac, sagittis orci."</p>
    											</div>
    											<div class="st_group">
    												<div class="stud_img">
    													<img src="images/left-imgs/img-7.jpg" alt="">
    												</div>
    												<h4>Luoci Marchant</h4>
    											</div>
    										</div>
    									</div>
    									<div class="item">
    										<div class="fcrse_4 mb-20">
    											<div class="say_content">
    												<p>"Nulla bibendum lectus pharetra, tempus eros ac, sagittis orci. Suspendisse posuere dolor neque, at finibus mauris lobortis in.  Pellentesque vitae laoreet tortor."</p>
    											</div>
    											<div class="st_group">
    												<div class="stud_img">
    													<img src="images/left-imgs/img-6.jpg" alt="">
    												</div>
    												<h4>Poonam Sharma</h4>
    											</div>
    										</div>
    									</div>
    									<div class="item">
    										<div class="fcrse_4 mb-20">
    											<div class="say_content">
    												<p>"Curabitur placerat justo ac mauris condimentum ultricies. In magna tellus, eleifend et volutpat id, sagittis vitae est.  Pellentesque vitae laoreet tortor."</p>
    											</div>
    											<div class="st_group">
    												<div class="stud_img">
    													<img src="images/left-imgs/img-3.jpg" alt="">
    												</div>
    												<h4>Davinder Singh</h4>
    											</div>
    										</div>
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		<footer class="footer mt-30">
    			<div class="container">
    				<div class="row">
    					<div class="col-lg-3 col-md-3 col-sm-6">
    						<div class="item_f1">
    							<a href="about_us.html">About</a>
    							<a href="our_blog.html">Blog</a>
    							<a href="career.html">Careers</a>
    							<a href="press.html">Press</a>
    						</div>
    					</div>
    					<div class="col-lg-3 col-md-3 col-sm-6">
    						<div class="item_f1">
    							<a href="help.html">Help</a>
    							<a href="coming_soon.html">Advertise</a>
    							<a href="coming_soon.html">Developers</a>
    							<a href="contact_us.html">Contact Us</a>
    						</div>
    					</div>
    					<div class="col-lg-3 col-md-3 col-sm-6">
    						<div class="item_f1">
    							<a href="terms_of_use.html">Copyright Policy</a>
    							<a href="terms_of_use.html">Terms</a>
    							<a href="terms_of_use.html">Privacy Policy</a>
    							<a href="#">Sitemap</a>
    						</div>
    					</div>
    					<div class="col-lg-3 col-md-3 col-sm-6">
    						<div class="item_f3">
    							<a href="#" class="btn1542">Teach on Cursus</a>
    							<div class="lng_btn">
    								<div class="ui language bottom right pointing dropdown floating" id="languages" data-content="Select Language">
    									<a href="#"><i class='uil uil-globe lft'></i>Language<i class='uil uil-angle-down rgt'></i></a>
    									<div class="menu">
    										<div class="scrolling menu">
    											<div class="item" data-percent="100" data-value="en" data-english="English">
    												<span class="description">English</span>
    												English
    											</div>
    											<div class="item" data-percent="94" data-value="da" data-english="Danish">
    												<span class="description">dansk</span>
    												Danish
    											</div>
    											<div class="item" data-percent="94" data-value="es" data-english="Spanish">
    												<span class="description">Español</span>
    												Spanish
    											</div>
    											<div class="item" data-percent="34" data-value="zh" data-english="Chinese">
    												<span class="description">简体中文</span>
    												Chinese
    											</div>
    											<div class="item" data-percent="54" data-value="zh_TW" data-english="Chinese (Taiwan)">
    												<span class="description">中文 (臺灣)</span>
    												Chinese (Taiwan)
    											</div>
    											<div class="item" data-percent="79" data-value="fa" data-english="Persian">
    												<span class="description">پارسی</span>
    												Persian
    											</div>
    											<div class="item" data-percent="41" data-value="fr" data-english="French">
    												<span class="description">Français</span>
    												French
    											</div>
    											<div class="item" data-percent="37" data-value="el" data-english="Greek">
    												<span class="description">ελληνικά</span>
    												Greek
    											</div>
    											<div class="item" data-percent="37" data-value="ru" data-english="Russian">
    												<span class="description">Русский</span>
    												Russian
    											</div>
    											<div class="item" data-percent="36" data-value="de" data-english="German">
    												<span class="description">Deutsch</span>
    												German
    											</div>
    											<div class="item" data-percent="23" data-value="it" data-english="Italian">
    												<span class="description">Italiano</span>
    												Italian
    											</div>
    											<div class="item" data-percent="21" data-value="nl" data-english="Dutch">
    												<span class="description">Nederlands</span>
    												Dutch
    											</div>
    											<div class="item" data-percent="19" data-value="pt_BR" data-english="Portuguese">
    												<span class="description">Português(BR)</span>
    												Portuguese
    											</div>
    											<div class="item" data-percent="17" data-value="id" data-english="Indonesian">
    												<span class="description">Indonesian</span>
    												Indonesian
    											</div>
    											<div class="item" data-percent="12" data-value="lt" data-english="Lithuanian">
    												<span class="description">Lietuvių</span>
    												Lithuanian
    											</div>
    											<div class="item" data-percent="11" data-value="tr" data-english="Turkish">
    												<span class="description">Türkçe</span>
    												Turkish
    											</div>
    											<div class="item" data-percent="10" data-value="kr" data-english="Korean">
    												<span class="description">한국어</span>
    												Korean
    											</div>
    											<div class="item" data-percent="7" data-value="ar" data-english="Arabic">
    												<span class="description">العربية</span>
    												Arabic
    											</div>
    											<div class="item" data-percent="6" data-value="hu" data-english="Hungarian">
    												<span class="description">Magyar</span>
    												Hungarian
    											</div>
    											<div class="item" data-percent="6" data-value="vi" data-english="Vietnamese">
    												<span class="description">tiếng Việt</span>
    												Vietnamese
    											</div>
    											<div class="item" data-percent="5" data-value="sv" data-english="Swedish">
    												<span class="description">svenska</span>
    												Swedish
    											</div>
    											<div class="item" data-precent="4" data-value="pl" data-english="Polish">
    												<span class="description">polski</span>
    												Polish
    											</div>
    											<div class="item" data-percent="6" data-value="ja" data-english="Japanese">
    												<span class="description">日本語</span>
    												Japanese
    											</div>
    											<div class="item" data-percent="0" data-value="ro" data-english="Romanian">
    												<span class="description">românește</span>
    												Romanian
    											</div>
    										</div>
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>
    					<div class="col-lg-12">
    						<div class="footer_bottm">
    							<div class="row">
    								<div class="col-md-6">
    									<ul class="fotb_left">
    										<li>
    											<a href="index.html">
    												<div class="footer_logo">
    													<img src="images/logo1.svg" alt="">
    												</div>
    											</a>
    										</li>
    										<li>
    											<p>© 2020 <strong>Cursus</strong>. All Rights Reserved.</p>
    										</li>
    									</ul>
    								</div>
    								<div class="col-md-6">
    									<div class="edu_social_links">
    										<a href="#"><i class="fab fa-facebook-f"></i></a>
    										<a href="#"><i class="fab fa-twitter"></i></a>
    										<a href="#"><i class="fab fa-google-plus-g"></i></a>
    										<a href="#"><i class="fab fa-linkedin-in"></i></a>
    										<a href="#"><i class="fab fa-instagram"></i></a>
    										<a href="#"><i class="fab fa-youtube"></i></a>
    										<a href="#"><i class="fab fa-pinterest-p"></i></a>
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</footer>
    	</div>
    	<!-- Body End -->


@endsection('content')
