<?
	include '../head.php';
?>

<link rel="stylesheet" type="text/css" href="/js/fullPage.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.1/jquery.slimscroll.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/15309/jquery.fullPage.min.js"></script>
<script>
	$(document).ready(function () {
	$(".header").addClass("full");
    
	/* Slide variable */
	var slideIndexBis = 1;
	var sliding = false;

	i=0;
	$('#fullpage').fullpage({
		lockAnchors: true,
		anchors: ['s03_cont01', 's03_cont02', 's03_cont03', ''],
		sectionsColor: ['', '', ''],
		responsive: 768,
		responsiveWidth: 768,
		navigation: true,
		afterLoad: function(anchorLink2, index2){//addClass
			if(index2==1){
				$(".header").addClass("full");
			}
			if(index2==2){

			}
			if(index2==3){

			}
			if(index2==4){

			}
		},
	
		onLeave: function(anchorLink2, index2){//removeClass
			if(index2!=1){
				$(".header").removeClass("full");
			}
			if(index2!=2){

			}
			if(index2!=3){
				
			}
			if(index2!=4){
				
			}
		},
	});
	var footerSection = $('#footer');
	$('.footerSection').html(footerSection);
});
	
</script>
<style>
	.lang_btn{display:none;}
	header{position:fixed; left: 0; width: 100%;}
	
	.fullpage-wrapper {
		width: 100% !important;
		transform: none !important;
	}
	.fullpage-wrapper .fp-section {
		width: 100% !important;
		position: absolute;
		left: 0;
		top: 0;
		visibility: hidden;
		opacity: 0;
		z-index: 0;
		transition: all 0.7s ease-in-out;
	}
	.fullpage-wrapper .fp-section.active {
		visibility: visible;
		opacity: 1;
		z-index: 1;
	}
	.fullpage-wrapper .fp-section .fp-slidesContainer {
		width: 100% !important;
		transform: none !important;
	}
	.fullpage-wrapper .fp-section .fp-slidesContainer .fp-slide {
		width: 100% !important;
		position: absolute;
		left: 0;
		top: 0;
		visibility: hidden;
		opacity: 0;
		z-index: 0;
		transition: all 0.7s ease-in-out;
	}
	.fullpage-wrapper .fp-section .fp-slidesContainer .fp-slide.active {
		visibility: visible;
		opacity: 1;
		z-index: 1;
	}
	#fp-nav ul li, .fp-slidesNav ul li {
		width: 16px;
		height: 16px;
		margin: 15px 7px;
	}
	#fp-nav ul li a {
		border: 2px solid #FB5B56;
		background-color: transparent;
		display: block;
		width: 16px;
		height: 16px;
		border-radius: 50%;
		box-sizing:border-box;
	}
	#fp-nav ul li a.active {
		border: 2px solid #FB5B56;
		background-color: #FB5B56;
		width: 16px;
		height: 16px;
		border-radius: 50%;
		box-sizing:border-box;
	}
	#fp-nav ul li a, .fp-slidesNav ul li a {
		width: 16px; 
		height: 16px;
		box-sizing:border-box;
	}
	#fp-nav ul li a.active span, .fp-slidesNav ul li a.active span, #fp-nav ul li:hover a.active span, .fp-slidesNav ul li:hover a.active span {
		display: none;
	}
	#fp-nav ul li a span, .fp-slidesNav ul li a span {
		display: none;
	}
	@media (max-width: 760px) { 
	.s_center {
		width: 86%;
	}
	#fp-nav ul li, .fp-slidesNav ul li {
		width: 14px;
		height: 14px;
		margin: 10px 0px;
	}
	#fp-nav ul li a {
		border: 2px solid #FB5B56;
		background-color: transparent;
		display: block;
		width: 14px;
		height: 14px;
		border-radius: 50%;
		box-sizing:border-box;
	}
	#fp-nav ul li a.active {
		border: 2px solid #FB5B56;
		background-color: #FB5B56;
		width: 14px;
		height: 14px;
		border-radius: 50%;
		box-sizing:border-box;
	}
	#fp-nav ul li a, .fp-slidesNav ul li a {
		width: 14px; 
		height: 14px;
		box-sizing:border-box;
	}
	}
</style>
	<?
		include '../header.php';
	?>

<div id='fullpage'>
	<section id="s03_cont01" class="section">
		<div class="s_center p_r">
			<div class="txtBox p_a">
				<p class="s03_cont01_txt_tit c_wht bold2 montserrat">
					Visit LOTTE HEALTHCARE’s showroom to discuss
					<br>
					how you can innovate your business.
				</p>
				<p class="s03_cont01_txt_det c_wht montserrat">#8095, DIGITAL HEALTH, NORTH HALL, LVCC</p>
				<img src="/images/sub03/s03_cont01_01.png" alt="map01">
			</div>
			<div class="imgWrap p_a">
				<div class="imgWrap_img p_r">
					<img class="p_a" src="/images/sub03/s03_cont01_02.png" alt="map02">
					<div class="place_btn place_btn01 p_a">
						<div class="num dp_f dp_c dp_cc c_wht bold2">01</div>
						<div class="hover_txt p_a c_wht">Main Gate</div>
					</div>
					<div class="place_btn place_btn02 p_a">
						<div class="num dp_f dp_c dp_cc c_wht bold2">02</div>
						<div class="hover_txt p_a c_wht">Introduction</div>
					</div>
					<div class="place_btn place_btn03 p_a">
						<div class="num dp_f dp_c dp_cc c_wht bold2">03</div>
						<div class="hover_txt p_a c_wht">CAZZLE Experience</div>
					</div>
					<div class="place_btn place_btn04 p_a">
						<div class="num dp_f dp_c dp_cc c_wht bold2">04</div>
						<div class="hover_txt p_a c_wht">Now & Next</div>
					</div>
					<div class="place_btn place_btn05 p_a">
						<div class="num dp_f dp_c dp_cc c_wht bold2">05</div>
						<div class="hover_txt p_a c_wht">Partners</div>
					</div>
					<div class="place_btn place_btn06 p_a">
						<div class="num dp_f dp_c dp_cc c_wht bold2">06</div>
						<div class="hover_txt p_a c_wht">Reception</div>
					</div>
					<div class="place_btn place_btn07 p_a">
						<div class="num dp_f dp_c dp_cc c_wht bold2">07</div>
						<div class="hover_txt p_a c_wht">Meeting Room</div>
					</div>
				</div>
				<div class="place_list_wrap dp_f dp_end p_a">
					<ul class="place_list">
						<li class="c_wht dp_f dp_c">01&nbsp; Main Gate</li>
						<li class="c_wht dp_f dp_c">02&nbsp; Introduction</li>
						<li class="c_wht dp_f dp_c">03&nbsp; CAZZLE Experience</li>
						<li class="c_wht dp_f dp_c">04&nbsp; Now & Next</li>
						<li class="c_wht dp_f dp_c">05&nbsp; Partners</li>
						<li class="c_wht dp_f dp_c">06&nbsp; Reception</li>
						<li class="c_wht dp_f dp_c">07&nbsp; Meeting Room</li>
					</ul>
				</div>
			</div>
			<div class="downSide p_a">
				<a href="#s03_cont02">
					<img src="/images/sub03/s03_down_arrow.png" alt="down_arrow">
				</a>
			</div>
		</div>
	</section>
	<section id="s03_cont02" class="section">
		<div class="s_center dp_sb dp_c hght100">
			<div class="visual_textbox">
				<h3 class="visual_tit montserrat bold3">
					Meet your CAZZLEMON 
					<Br>
					for a happy and healthy life!
				</h3>
				<p class="visual_det">
					Do you plan to go CES 2023 Exhibition? 
					<br>
					Meet your CAZZLEMON for a happier and healthier life
					<br>
					through a simple balance game checking your eating, exercising, 
					<br>
					and sleeping habits at the LOTTE HEALTHCARE booth.
				</p>
				<div class="more_btn_wrap">
					<div class="back_bg"><!---hover용 뒷배경----></div>
					<a class="more_btn dp_sb dp_c" href="" title="Learn more">
						<span class="more_text dp_b txt-c">Location of <br> LOTTE HEALTHCARE Booth</span>
						<span class="more_arrow"><!---화살표---></span>
					</a>
				</div>
			</div>
			<div class="s03_cont02_img_wrap">
				<img src="/images/sub03/s03_cont02.png" alt="image">
			</div>
		</div>
		<div class="downSide p_a">
			<a href="#s03_cont03">
				<img src="/images/sub03/s03_down_arrow.png" alt="down_arrow">
			</a>
		</div>
	</section>
	<section id="s03_cont03" class="section">
		<div class="upSide p_a">
			<a href="#s03_cont02">
				<img src="/images/sub03/s03_down_arrow.png" alt="down_arrow">
			</a>
		</div>
		<div class="s_center dp_f dp_fc dp_cc hght100">
			<p class="s03_cont03_tit montserrat txt-c" style="color: #191919;">CHECK YOUR CAZZLEMON!</p>
			<p class="s03_cont03_det c_blk02 txt-c">Find the CAZZLEMON that is similar to your current health status!</p>
			
			<ul class="cazzlemons_go_list dp_sb">
                <li>
                    <a class="dp_b dp_cc p_r" href="./character01.php">
						<div class="imgwrap p_r">
                        	<img class="p_a" src="/images/sub03/gazelle.svg" alt="Gazelle">
						</div>
                        <span class="dp_b txt-c c_blk02">Gazelle</span>
                    </a>
                </li>
                <li>
                    <a class="dp_b dp_cc p_r" href="./character04.php">
						<div class="imgwrap p_r">
                        	<img class="p_a" src="/images/sub03/koala.svg" alt="Koala">
						</div>
                        <span class="dp_b txt-c c_blk02">Koala</span>
                    </a>
                </li>
                <li>
                    <a class="dp_b dp_cc p_r" href="./character03.php">
						<div class="imgwrap p_r">
                        	<img class="p_a" src="/images/sub03/eagle.svg" alt="Eagle">
						</div>
                        <span class="dp_b txt-c c_blk02">Eagle</span>
                    </a>
                </li>
                <li>
                    <a class="dp_b dp_cc p_r" href="./character02.php">
						<div class="imgwrap p_r">
                        	<img class="p_a" src="/images/sub03/elephant.svg" alt="Elephant">
						</div>
						<span class="dp_b txt-c c_blk02">Elephant</span>
                    </a>
                </li>
                <li>
                    <a class="dp_b dp_cc p_r" href="./character07.php">
						<div class="imgwrap p_r">
                        	<img class="p_a bear" src="/images/sub03/bear.svg" alt="Bear">
						</div>
                        <span class="dp_b txt-c c_blk02">Bear</span>
                    </a>
                </li>
                <li>
                    <a class="dp_b dp_cc p_r" href="./character05.php">
						<div class="imgwrap p_r">
							<img class="p_a" src="/images/sub03/squirrel.svg" alt="Squirrel">
						</div>
						<span class="dp_b txt-c c_blk02">Squirrel</span>
                    </a>
                </li>
                <li>
                    <a class="dp_b dp_cc p_r" href="./character08.php">
						<div class="imgwrap p_r">
							<img class="p_a" src="/images/sub03/raccoon.svg" alt="Raccoon">
						</div>
                        <span class="dp_b txt-c c_blk02">Raccoon</span>
                    </a>
                </li>
				<li>
                    <a class="dp_b dp_cc p_r" href="./character06.php">
						<div class="imgwrap p_r">
							<img class="jaguar p_a" src="/images/sub03/jaguar.svg" alt="Raccoon">
						</div>
                        <span class="dp_b txt-c c_blk02">Jaguar</span>
                    </a>
                </li>
            </ul>
		</div>
	</section>
	<!--<div class="footerSection">
			//include '../footer_full.php';
	</div>-->
<script>
	$(".imgWrap_img .place_btn .num").on("mouseenter",function(){
		$(this).siblings(".hover_txt").css('display','inline-block');
	});
	$(".imgWrap_img .place_btn").on("mouseleave",function(){
		$(this).children(".hover_txt").css('display','none');
	});
</script>
</div>
