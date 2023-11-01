
	<header class="header">
		<div class="h_center dp_sb dp_c">
			<div class="logo_gnb_wrap dp_f dp_c">
				<h1 class="logo"><a href="/en/main"><img src="/images/h_logo.png" alt=""></a></h1>
				<ul class="gnb dp_f dp_c">
					<li>
						<a class="dp_f dp_c" href="/en/sub01/sub01" title="COMPANY">
							<span>COMPANY</span>
							<span class="h_arrow"></span>
						</a>
						<ul class="depth2">
							<li><a href="/en/sub01/sub01#s01_cont02" title="About">About</a></li>
							<li><a href="/en/sub01/sub01#s01_cont03" title="BUSINESS">Business</a></li>
							<!-- <li><a href="/en/sub01/sub01#s01_cont05" title="PARTNER SERVICE">Partner Service</a></li> -->
							<li><a href="/en/sub01/sub02" title="News Room">News Room</a></li>
						</ul>
					</li>
					<li>
						<a class="dp_f dp_c" href="/en/sub02/sub01" title="PRODUCT">
							<span>PRODUCT</span>
							<span class="h_arrow"></span>
						</a>
						<ul class="depth2">
							<li><a href="/en/sub02/sub01#s02_cont03" title="CAZZLE">CAZZLE</a></li>
							<li><a href="/en/sub02/sub01#s02_cont06" title="Fillkey & Fillpot">Fillkey & Fillpot</a></li>
						</ul>
					</li>
					<li>
						<a class="dp_f dp_c" href="/en/ces2023/sub01#s03_cont01" title="CES 2023">
							<span>CES 2023</span>
							<span class="h_arrow"></span>
						</a>
						<ul class="depth2">
							<li><a href="/en/ces2023/sub01#s03_cont01" title="전시 부스 안내">CES 2023</a></li>
							<li><a class="c_blue01" href="/en/ces2023/sub01#s03_cont02" title="CAZZLEMON">CAZZLEMON</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="right_btn_wrap dp_f dp_c">
				<ul class="lang_btn dp_f dp_c">
					<li><a class="dp_f dp_c dp_cc" href="/kr/main" title="한국어">KR</a></li>
					<li><a class="dp_f dp_c dp_cc" href="javascript:void(0)" title="영어">EN</a></li>
				</ul>
				<div class="m-navWrap">
					<div class="bBg"><!--뒷배경--></div>
					<div class="m-navbox on">	
						<ul class="m-nav">
							<li>
								<a href="/en/sub01/sub01" title="Company">
									<span class="menuTxt" data-text="Company">Company</span>
									<span class="underline"></span>
								</a>
								<ul class="m-depth2">
									<li><a href="/en/sub01/sub01#s01_cont02" title="About">About</a></li>
									<li><a href="/en/sub01/sub01#s01_cont03" title="Business">Business</a></li>
									<!-- <li><a href="/en/sub01/sub01#s01_cont05" title="Partner Service">Partner Service</a></li> -->
									<li><a href="/en/sub01/sub02" title="News Room">News Room</a></li>
								</ul>
							</li>
							<li>
								<a href="/en/sub02/sub01" title="Product">
									<span class="menuTxt" data-text="Product">Product</span>
									<span class="underline"></span>
								</a>
								<ul class="m-depth2">
									<li><a href="/en/sub02/sub01#s02_cont03">CAZZLE</a></li>
									<li><a href="/en/sub02/sub01#s02_cont06">Fillkey & Fillpot</a></li>
								</ul>
							</li>
							<li>
								<a href="/en/ces2023/sub01#s03_cont01"" title="CES 2023">
									<span class="menuTxt" data-text="CES 2023">CES 2023</span>
									<span class="underline"></span>
								</a>
								<ul class="m-depth2">
									<li><a href="/en/ces2023/sub01#s03_cont01">CES 2023</a></li>
									<li><a href="/en/ces2023/sub01#s03_cont02">CAZZLEMON</a></li>
								</ul>
							</li>
						</ul>
						<div class="m-comp-info">
							<p class="txt-r">
								30Fl, LOTTE World Tower 300, Olympic-ro, <br>
								Sonpa-gu, Seoul, Korea, 05551
							</p>	
							<p class="txt-r">
								+82-2-3431-8102
								<br>
								lottehealthcare@lotte.net
							</p>
						</div>
					</div>
				</div>
				<button type="button" id="btnFullMenu" class="m-btn">
					메인메뉴 열기
					<div class="bar_top"></div>
					<div class="bar_mid dp_sb dp_c">
						<div class="bar_mid_c01"></div>
						<div class="bar_mid_c02"></div>
					</div>
					<div class="bar_bot"></div>
				</button>
			</div>
		</div>
	</header>

	<script>
		//메뉴
		var flag = true;
		$(".m-btn").click(function(event){

			event.preventDefault();
			if(flag){
				$("header").addClass("openFull");
				$(".m-navWrap").css({"width":"100%"});
				$(".m-btn").css("position","fixed").css("right","5%");
				$(".bBg").stop().fadeIn();
				$(".m-navbox").stop().addClass("on");

				flag= false;
			} else {
				$("header").removeClass("openFull");
				$(".bBg").stop().fadeOut();
				$(".m-navWrap").css({"width":"0"});
				$(".m-btn").css("position","relative").css("right","0");
				$(".m-navbox").stop().removeClass("on");
				$(".m-navWrap .m-nav > li > a").removeClass("active");
				$(".m-navWrap .m-nav > li .m-depth2").removeClass("active");

				flag= true;
			}
		});

		$("header .gnb > li").on("mouseenter",function(){

			let tabNumber = $(this).index();

			$(".depth2").stop().slideUp(100);
			$(".depth2").eq(tabNumber).stop().slideDown(100);
			$(this).children("a").addClass("on");

		});

		$("header .gnb > li").on("mouseleave",function(){

			$(".depth2").stop().slideUp(100);
			$("header .gnb > li > a").removeClass("on");

		});

		$(".m-navWrap .m-nav > li").on("mouseenter",function(){
		
			$(".m-navWrap .m-nav > li > a").removeClass("active");
			$(this).children("a").addClass("active");

		});

		$(".m-navWrap .m-nav > li").on("mouseleave",function(){
		
			$(".m-navWrap .m-nav > li > a").removeClass("active");

		});
		$(".m-navWrap .m-nav li a").on("click",function(){
		
			$("header").removeClass("openFull");
			$(".bBg").stop().fadeOut();
			$(".m-navWrap").css({"width":"0"});
			$(".m-navbox").stop().removeClass("on");
			$(".m-navWrap .m-nav > li > a").removeClass("active");
			$(".m-navWrap .m-nav > li .m-depth2").removeClass("active");
			
			flag= true;
		});


		$(window).on('scroll', function() {
			var footerHei = $('footer').outerHeight();
			var sT = $(window).scrollTop();
			var val = $(document).height() - $(window).height() - footerHei;

			if (sT >= val)
			$('.up_btn').addClass('on')
			else
			$('.up_btn').removeClass('on')

		});


	function snslink(sns){

		getCode = window.location.href;

		if(sns == 'fbook'){
			window.open('http://facebook.com/sharer.php?u='+getCode, '', 'resizable=no,status=no,location=no,toolbar=no,menubar=no,fullscreen=no,scrollbars=no,dependent=no,width=600,height=600');

		}else if(sns == 'twitter'){
			window.open('http://twitter.com/share?url='+getCode, '', 'resizable=no,status=no,location=no,toolbar=no,menubar=no,fullscreen=no,scrollbars=no,dependent=no,width=600,height=600');

		}else if(sns == 'linkedin'){
			//skins/boad/kor_smart/view06b_next.php
			snsTitle = encodeURI($('#snsTitle').text());
			snsTitle = 'Your CAZZLEMON is';
			snsMent = encodeURI($('#snsMent').text());
			u = 'https://www.linkedin.com/shareArticle?mini=true&url='+encodeURIComponent(getCode)+'&title='+snsTitle+'&summary='+snsMent+'&source='+encodeURIComponent(getCode);

			window.open(u, '', 'resizable=no,status=no,location=no,toolbar=no,menubar=no,fullscreen=no,scrollbars=no,dependent=no,width=600,height=600');

		}
		
	}


	</script>