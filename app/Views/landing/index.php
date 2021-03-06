<?= $this->extend('landing/layout/base')?>
<?= $this->section('content')?>
<div class="banner">
   	  <div class="container_wrap">
   		<h1>What are you looking for?</h1>
   	       <div class="dropdown-buttons">   
            		  <div class="dropdown-button">           			
            			<select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
            			<option value="0">Dubai</option>	
						<option value="1">Australia</option>
						<option value="2">Sri Lanka</option>
						<option value="3"> New Zealand</option>
						<option value="4">Pakistan</option>
						<option value="5">United Kingdom</option>
						<option value="6">United states</option>
						<option value="7">Russia</option>
						<option value="8">Mirum</option>
					  </select>
					</div>
				     <div class="dropdown-button">
					  <select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
            			<option value="0">Hotels</option>	
						<option value="1">tempor</option>
						<option value="2">congue</option>
						<option value="3">maxim </option>
						<option value="4">mutationem</option>
						<option value="5">hendrerit </option>
						<option value="5"></option>
						<option value="5"></option>
					  </select>
					 </div>
				   </div>  
		    <form>
				<input type="text" value="Keyword, name, date, ..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Keyword, name, date, ...';}">
			    <div class="contact_btn">
	               <label class="btn1 btn-2 btn-2g"><input name="submit" type="submit" id="submit" value="Search"></label>
	            </div>
			</form>        		
   		    <div class="clearfix"></div>
         </div>
   </div>
   <div class="content_top">
   	  <div class="container">
   		<div class="col-md-4 bottom_nav">
   		   <div class="content_menu">
				<ul>
					<li class="active"><a href="#">Recommended</a></li> 
					<li><a href="#">Latest</a></li> 
					<li><a href="#">Highlights</a></li> 
				</ul>
			</div>
		</div>
		<div class="col-md-4 content_dropdown1">
		   <div class="content_dropdown">    
		       <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
            			<option value="0">Dubai</option>	
						<option value="1">tempor</option>
						<option value="2">congue</option>
						<option value="3">maxim </option>
						<option value="4">mutationem</option>
						<option value="5">hendrerit </option>
						<option value="5"></option>
						<option value="5"></option>
		        </select>
		     </div>
		     <div class="content_dropdown">    
		       <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
            			<option value="0">Show Map</option>	
						<option value="1">tempor</option>
						<option value="2">congue</option>
						<option value="3">maxim </option>
						<option value="4">mutationem</option>
						<option value="5">hendrerit </option>
						<option value="5"></option>
						<option value="5"></option>
		        </select>
		       </div>
		</div>
		<div class="col-md-4 filter_grid">
			<ul class="filter">
				<li class="fil">Filter :</li>
				<li><a href=""> <i class="icon1"> </i> </a></li>
				<li><a href=""> <i class="icon2"> </i> </a></li>
				<li><a href=""> <i class="icon3"> </i> </a></li>
				<li><a href=""> <i class="icon4"> </i> </a></li>
				<li><a href=""> <i class="icon5"> </i> </a></li>
			</ul>
		</div>
   	</div>
   </div>
   <div class="content_middle">
   	  <div class="container">
   	    <div class="content_middle_box">
          <div class="top_grid">
   			<div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img"><img src="<?= base_url('landing/images/pic1.jpg')?>" class="img-responsive" alt=""/></div>
   				    <div class="sale">$2.980</div>
   			          <div class="mask">
                        <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="<?= base_url('landing/images/star.png')?>" alt=""/></li>
                        	<li class="set"><img src="<?= base_url('landing/images/set.png')?>" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                       </div>
                   </div> 
                   <i class="home"></i>
   				 <div class="inner_wrap">
   				 	<h3>Lorem Ipsum is simply dummy text</h3>
   				 	<ul class="star1">
   				 	  <h4 class="green">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="<?= base_url('landing/images/star1.png')?>" alt="">(236)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img1"><img src="<?= ('landing/images/pic6.jpg')?>" class="img-responsive" alt=""/></div>
   				     <div class="mask">
                        <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="<?= ('landing/images/star.png')?>" alt=""/></li>
                        	<li class="set"><img src="<?= ('landing/images/set.png')?>" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                 <i class="home1"> </i>
   				 <div class="inner_wrap">
   				 	<h3>Lorem Ipsum is simply dummy text</h3>
   				 	<ul class="star1">
   				 	  <h4 class="yellow">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="<?= ('landing/images/star2.png')?>" alt="">(136)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img2"><img src="<?= base_url('landing/images/pic2.jpg')?>" class="img-responsive" alt=""/></div>
   				     <div class="mask">
                        <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="<?= base_url('landing/images/star.png')?>" alt=""/></li>
                        	<li class="set"><img src="<?= base_url('landing/images/set.png')?>" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                 <i class="home2"> </i>
   				 <div class="inner_wrap">
   				 	<h3>Lorem Ipsum is simply dummy text</h3>
   				 	<ul class="star1">
   				 	  <h4 class="blue">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="<?= base_url('landing/images/star2.png')?>" alt="">(136)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img"><img src="<?= base_url('landing/images/pic3.jpg')?>" class="img-responsive" alt=""/></div>
   				     <div class="sale">$2.980</div>
   			          <div class="mask">
                      <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="<?= base_url('landing/images/star.png')?>" alt=""/></li>
                        	<li class="set"><img src="<?= base_url('landing/images/set.png')?>" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                  <i class="home"></i>
   				  <div class="inner_wrap">
   				 	<h3>Lorem Ipsum is simply dummy text</h3>
   				 	<ul class="star1">
   				 	  <h4 class="green">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="<?= base_url('landing/images/star1.png')?>" alt="">(236)</a></li>
   				 	</ul>
   				  </div>
   			   </div>
   			</div>
   			<div class="clearfix"> </div>
   		</div>
   	    <div class="middle_grid wow fadeInUp" data-wow-delay="0.4s">
   			<div class="col-md-6 index-grids">
   			   <div class="grid1">
   			     <div class="index_img"><img src="<?= base_url('landing/images/pic4.jpg')?>" class="img-responsive" alt=""/></div>
   				  <i class="m_home"> </i>
                  <ul class="vision">
                  	 <li>Vision Agency</li>
                  	 <li class="desc"><a href="#"> <img src="<?= base_url('landing/images/star1.png')?>" alt="">(236)</a></li>
                  </ul>
   				  <div class="inner_wrap1">
   				 	<ul class="item_module">
   				 	 	<li class="module_left"><img src="<?= base_url('landing/images/m1.jpg')?>" class="img-responsive" alt=""/></li>
   				 	 	<li class="module_right">
   				 	 		<img src="<?= base_url('landing/images/m_star.png')?>" class="img-responsive" alt=""/>
   				 	 		<h5>Lucy-p</h5>
   				 	 		<p>"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat."</p>
   				 	 		<a href="single.html" class="content_btn">....read more</a>
   				 	 	</li>
   				 	 	<div class="clearfix"> </div>
   				 	 </ul>
   				  </div>
   			   </div>
   			</div>
   			<div class="col-md-6 index-grids">
   			   <div class="grid1">
   			     <div class="index_img1"><img src="<?= base_url('landing/images/pic5.jpg')?>" class="img-responsive" alt=""/></div>
   				  <i class="m_home1"> </i>
                  <ul class="vision">
                  	 <li>Vision Agency</li>
                  	 <li class="desc"><a href="#"> <img src="<?= ('landing/images/star2.png')?>" alt="">(236)</a></li>
                  </ul>
   				  <div class="inner_wrap1">
   				 	<ul class="item_module">
   				 	 	<li class="module_left"><img src="<?= base_url('landing/images/m2.jpg')?>" class="img-responsive" alt=""/></li>
   				 	 	<li class="module_right">
   				 	 		<img src="<?= base_url('landing/images/m_star1.png')?>" class="img-responsive" alt=""/>
   				 	 		<h5>Lucy-p</h5>
   				 	 		<p>"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat."</p>
   				 	 		<a href="single.html" class="content_btn">....read more</a>
   				 	 	</li>
   				 	 	<div class="clearfix"> </div>
   				 	 </ul>
   				  </div>
   			   </div>
   			</div>
   			<div class="clearfix"> </div>
   		</div>
   		<div class="top_grid wow fadeInRight" data-wow-delay="0.4s">
   			<div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img"><img src="<?= base_url('landing/images/pic1.jpg')?>" class="img-responsive" alt=""/></div>
   				     <div class="sale">$2.980</div>
   			          <div class="mask">
                       <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="<?= base_url('landing/images/star.png')?>" alt=""/></li>
                        	<li class="set"><img src="<?= base_url('landing/images/set.png')?>" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                        </div>
                    </div> 
                    <i class="home"></i>
   				 <div class="inner_wrap">
   				 	<h3>Lorem Ipsum is simply dummy text</h3>
   				 	<ul class="star1">
   				 	  <h4 class="green">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="<?= base_url('landing/images/star1.png')?>" alt="">(236)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img1"><img src="<?= base_url('landing/images/pic2.jpg')?>" class="img-responsive" alt=""/></div>
   				     <div class="mask">
                        <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="<?= base_url('landing/images/star.png')?>" alt=""/></li>
                        	<li class="set"><img src="<?= base_url('landing/images/set.png')?>" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                 <i class="home1"> </i>
   				 <div class="inner_wrap">
   				 	<h3>Lorem Ipsum is simply dummy text</h3>
   				 	<ul class="star1">
   				 	  <h4 class="yellow">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="<?= base_url('landing/images/star2.png')?>" alt="">(136)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img2"><img src="<?= base_url('landing/images/pic6.jpg')?>" class="img-responsive" alt=""/></div>
   				     <div class="mask">
                        <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="<?= base_url('landing/images/star.png')?>" alt=""/></li>
                        	<li class="set"><img src="<?= base_url('landing/images/set.png')?>" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                 <i class="home2"> </i>
   				 <div class="inner_wrap">
   				 	<h3>Lorem Ipsum is simply dummy text</h3>
   				 	<ul class="star1">
   				 	  <h4 class="blue">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="<?= base_url('landing/images/star2.png')?>" alt="">(136)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img"><img src="<?= base_url('landing/images/pic3.jpg')?>" class="img-responsive" alt=""/></div>
   				     <div class="sale">$2.980</div>
   			          <div class="mask">
                      <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="<?= base_url('landing/images/star.png')?>" alt=""/></li>
                        	<li class="set"><img src="<?= base_url('landing/images/set.png')?>" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                  <i class="home"></i>
   				  <div class="inner_wrap">
   				 	<h3>Lorem Ipsum is simply dummy text</h3>
   				 	<ul class="star1">
   				 	  <h4 class="green">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="<?= base_url('landing/images/star1.png')?>" alt="">(236)</a></li>
   				 	</ul>
   				  </div>
   			   </div>
   			</div>
   			<div class="clearfix"> </div>
   		</div>
   		<div class="bottom_grid wow bounce" data-wow-delay="0.4s">
   		  <div class="col-md-6 index-grids">
   			   <div class="grid1">
   			     <div class="index_img1"><img src="<?= base_url('landing/images/pic5.jpg')?>" class="img-responsive" alt=""/></div>
   				  <i class="m_home1"> </i>
                  <ul class="vision">
                  	 <li>Vision Agency</li>
                  	 <li class="desc"><a href="#"> <img src="<?= base_url('landing/images/star2.png')?>" alt="">(236)</a></li>
                  </ul>
   				  <div class="inner_wrap1">
   				 	<ul class="item_module">
   				 	 	<li class="module_left"><img src="<?= base_url('landing/images/m2.jpg')?>" class="img-responsive" alt=""/></li>
   				 	 	<li class="module_right">
   				 	 		<img src="<?= base_url('landing/images/m_star.png')?>" class="img-responsive" alt=""/>
   				 	 		<h5>Lucy-p</h5>
   				 	 		<p>"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat."</p>
   				 	 		<a href="single.html" class="content_btn">....read more</a>
   				 	 	</li>
   				 	 	<div class="clearfix"> </div>
   				 	 </ul>
   				  </div>
   			   </div>
   			</div>
   			<div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img"><img src="<?= base_url('landing/images/pic3.jpg')?>" class="img-responsive" alt=""/></div>
   				     <div class="sale">$2.980</div>
   			          <div class="mask">
                      <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="<?= base_url('landing/images/star.png')?>" alt=""/></li>
                        	<li class="set"><img src="<?= base_url('landing/images/set.png')?>" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                  <i class="b_home"></i>
   				  <div class="inner_wrap2">
   				 	<h3>Lorem Ipsum is simply dummy text</h3>
   				 	<ul class="star1">
   				 	  <h4 class="green">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="<?= base_url('landing/images/star1.png')?>" alt="">(236)</a></li>
   				 	</ul>
   				  </div>
   			   </div>
   			</div>
   			<div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img1"><img src="<?= base_url('landing/images/pic2.jpg')?>" class="img-responsive" alt=""/></div>
   				     <div class="mask">
                        <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="<?= base_url('landing/images/star.png')?>" alt=""/></li>
                        	<li class="set"><img src="<?= base_url('landing/images/set.png')?>" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                 <i class="b_home1"> </i>
   				 <div class="inner_wrap2">
   				 	<h3>Lorem Ipsum is simply dummy text</h3>
   				 	<ul class="star1">
   				 	  <h4 class="yellow">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="<?= base_url('landing/images/star2.png')?>" alt="">(136)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="clearfix"></div>
   			</div>
   		  </div>
   		  <div class="offering">
   		  	  <h2>What can Hotel Deluxe offer to you ?</h2>
   		  	  <h3>Ut wisi enim ad minim veniam, quis</h3>
   		  	  <ul class="icons wow fadeInUp" data-wow-delay="0.4s">
   		  	  	 <li><i class="icon1"> </i><span class="one"> </span></li>
   		  	  	 <li><i class="icon2"> </i><span class="two"> </span></li>
   		  	  	 <li><i class="icon3"> </i><span class="three"> </span></li>
   		  	  	 <li><i class="icon4"> </i><span class="four"> </span></li>
   		  	  	 <li><i class="icon5"> </i></li>
   		  	  </ul>
   		  	  <div class="real">
   		  	  	<h4>Reality</h4>
   		  	  	<div class="col-sm-6">
   		  	  	  <ul class="service_grid">
   	   				<i class="s1"> </i>
   	   				 <li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
   	   				   <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod maxim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum</p>
   	   				 </li>
   	   				 <div class="clearfix"> </div>
   	   			   </ul>
   	   			 </div>
   	   			 <div class="col-sm-6">
   		  	  	  <ul class="service_grid">
   	   				<i class="s2"> </i>
   	   				 <li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
   	   				   <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod maxim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum</p>
   	   				 </li>
   	   				 <div class="clearfix"> </div>
   	   			   </ul>
   	   			 </div>
   	   			 <div class="clearfix"> </div>
   	   			 </div>
   		  	  </div>
   		  </div>
   	  </div>
   </div>
<?= $this->endSection()?>