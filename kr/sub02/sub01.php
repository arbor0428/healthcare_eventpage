<?
	include '../head.php';
?>
<div id="wrap">
<?
	include '../header.php';
?>
<section id="s02_cont01">
    <div class="s02_bg_cir01 bora02 p_a radius50 blur50">
		<!---배경용 circle---->
	</div>
    <div class="s_center p_r dp_f dp_c">
        <div class="s02_cont01_txt_box">
			<h3 class="visual_tit montserrat bold3">
                WHAT WE OFFER
			</h3>
			<p class="visual_det visual_det2">
               건강한 행동과 착한 소비의 선순환 경험
			</p>
			<p class="visual_det visual_det2">
                전문 지식이 없는 일반인에게 과학적 진단/처방
                <br>
                (문진/건강검진 정보/유전자)을 통한 전문 케어를 제공합니다.
            </p>
		</div>
    </div>
    <div class="s02_cont01_puzzle_wrap p_a">
        <div class="s02_cont01_puzzle02 p_a">
            <img src="/images/sub02/s02_cont01_puzzle02.png" alt="퍼즐2">
        </div>
        <div class="s02_cont01_puzzle01 p_a">
            <img src="/images/sub02/s02_cont01_puzzle01.png" alt="퍼즐1">
        </div>
    </div>
</section>
<section id="s02_cont02">
    <div class="s02_bg_line01 p_a">
        <svg id="s02_cont02_line" xmlns="http://www.w3.org/2000/svg" width="1927.994" height="839.248" viewBox="0 0 1927.994 839.248">
            <path id="" data-name="" d="M-4915.151,1590.909c377.193-212.121,504.815,18.182,709.01,245.454s405.553,72.727,442.422,12.121,450.93-290.909,768.567,490.909" transform="translate(4919.236 -1504.054)" fill="none" stroke="#777cfc" stroke-linecap="round" stroke-linejoin="round" stroke-width="6" stroke-dasharray="2 30"/>
        </svg>
	</div>
    <script>
		var myPath = document.querySelector("#s02_cont02_line path");
		var length = myPath.getTotalLength();
		console.log(length);
	</script>
	<style>
		#s02_cont02_line {
            width: 100%;
			stroke-dasharray: 1928; stroke-dashoffset: 1928;
			animation: dash 50s linear infinite;
		}
		@keyframes dash {
			0% {
				stroke-dashoffset: 1928; 
			}
			50% {
				stroke-dashoffset: 0;  
			}
			100% {
				stroke-dashoffset: -1928;
			}
		}
	</style>
    <div class="s_center p_r">
        <div class="s02_cont02_box_wrap dp_sb">
            <div class="s02_cont02_box dp_f dp_fc dp_c" >
                <div class="s02_cont02_img_wrap dp_f dp_cc p_r">
                    <img class="icon01_02 p_a" src="/images/sub02/s02_cont02_icon01_03.png" alt="진단" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-once="true">
                    <img class="icon01_01 p_a" src="/images/sub02/s02_cont02_icon01_02.png" alt="진단" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="200" data-aos-once="true">
                    <img class="icon01_03 p_a" src="/images/sub02/s02_cont02_icon01_01.png" alt="진단" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="400" data-aos-once="true">
                </div>
                <p class="blk_tit_big vitro bold2 txt-c">수집</p>
                <p class="s02_cont02_box_det c_blk02 txt-c">
                    모든 건강 정보를
                    <br>
                    한 곳에 수집합니다.
                </p>
            </div>
            <div class="s02_cont02_box dp_f dp_fc dp_c">
                <div class="s02_cont02_img_wrap dp_f dp_cc p_r">
                    <img class="icon02_02 p_a" src="/images/sub02/s02_cont02_icon02_03.png" alt="진단" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="600" data-aos-once="true">
                    <img class="icon02_01 p_a" src="/images/sub02/s02_cont02_icon02_02.png" alt="진단" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="800" data-aos-once="true">
                    <img class="icon02_03 p_a" src="/images/sub02/s02_cont02_icon02_01.png" alt="진단" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="1000" data-aos-once="true">
                </div>
                <p class="blk_tit_big vitro bold2 txt-c">분석</p>
                <p class="s02_cont02_box_det c_blk02 txt-c">
                    의료 임상 전문가 노하우 및 인공지능
                    <br>
                    기술 기반 추천 엔진으로 정보를 분석합니다.
                </p>
            </div>
            <div class="s02_cont02_box dp_f dp_fc dp_c">
                <div class="s02_cont02_img_wrap dp_f dp_cc p_r">
                    <img class="icon03_02 p_a" src="/images/sub02/s02_cont02_icon03_03.png" alt="진단" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="1200" data-aos-once="true">
                    <img class="icon03_01 p_a" src="/images/sub02/s02_cont02_icon03_02.png" alt="진단" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="1400" data-aos-once="true">
                    <img class="icon03_03 p_a" src="/images/sub02/s02_cont02_icon03_01.png" alt="진단" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="1600" data-aos-once="true">
                </div>
                <p class="blk_tit_big vitro bold2 txt-c">추천</p>
                <p class="s02_cont02_box_det c_blk02 txt-c">
					개인의 건강과 라이프스타일에 최적화된
                    <br>
					건강 가이드를 추천합니다.
                </p>
            </div>
        </div>
    </div>
</section>
<section id="s02_cont03">
    <div class="s02_bg_cir02 bora_gradient p_a radius50 blur50">
		<!---배경용 circle---->
	</div>
    <div class="s_center p_r">
        <div class="s02_cont03_tit_img txt-c">
            <img src="/images/sub02/s02_cont03_tit.png" alt="CAZZLE">
        </div>
        <p class="s02_cont03_det01 montserrat c_blk01 bold3 txt-c">What is CAZZLE?</p>
        <p class="s02_cont03_det02 txt-c c_blk02">케어(Care)를 퍼즐(Puzzle)처럼 즐겁게 할 수 있도록 건강이 필요한 모든 순간에 함께하는 건강 파트너입니다.</p>
        <div class="cazzle_box_wrap dp_sb dp_c">
            <div class="cazzle_img dp_sb">
                <img class="cazzle_img01 p_a" src="/images/sub02/new05.png" alt="핸드폰화면" style="max-width:750px;">
				<!--
                <img class="cazzle_img02 p_a" src="/images/sub02/new02.png" alt="핸드폰화면">
                <img class="cazzle_img03 p_a" src="/images/sub02/new03.png" alt="핸드폰화면">
                <img class="cazzle_img04 p_a" src="/images/sub02/new04.png" alt="핸드폰화면">
				-->
            </div>
            <div class="cazzle_text_box">
                <p class="cazzle_text_tit vitro bold2">당신과 지구의 지속가능한 라이프를 위한 CAZZLE</p>
                <p class="s02_cont03_det02 mbott c_blk02">
                    CAZZLE은 퍼즐 조각처럼 흩어져 있는 당신의 건강 정보들을
                    <br>
                    모으고 분석하여 맞춤형 건강 가이드를 제시합니다.
                </p>
                <p class="s02_cont03_det02 c_blk02">
                    당신을 알면 알수록 정확해지는 추천 AI와 
                    <br>
                    가족, 친구와 함께 건강해지는 다양한 기능, 
                    <br>
					지구를 생각한 착한 소비로 
                    <br>
					모두를 위한 건강 라이프를 시작하세요.
                </p>
            </div>
        </div>
    </div>
</section>
<section id="s02_cont04">
    <div class="s02_bg_cir03 bora_gradient p_a radius50 blur50">
		<!---배경용 circle---->
	</div>
    <div class="s02_bg_cir04 bora_gradient p_a radius50 blur50">
		<!---배경용 circle---->
	</div>
    <div class="s_center p_r">
        <p class="blk_tit_big vitro bold2 txt-c">더 건강한 삶을 위한 모든 것을 제공하는 헬스케어 서비스</p>
        <p class="s02_cont03_det02 txt-c c_blk02">
			건강 데이터 기반으로 당신의 건강과 관련된 모든 것을 추천하는
			<br>
			맞춤형 헬스케어 버티컬 커머스입니다.
        </p>
		<div class="pill_wrap dp_cc p_r">
			<img src='/images/sub02/s02_cont04_img.png' style='width:100%;' data-aos="fade" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="400"  data-aos-once="true" class='pcChk'>
			<img src='/images/sub02/s02_cont04_img_m.png' style='width:100%;' data-aos="fade" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="400" data-aos-once="true"  class='mobileChk'>			
		</div>
        <!-- <div class="pill_wrap dp_f dp_cc p_r">
            <div class="pill_box_wrap p_r">
                <img class="pill_text_box01 p_a" src="/images/sub02/pill01.png" alt="">
                <img class="pill_text_box01_m p_a" src="/images/sub02/pill01_m.png" alt="">
                <div class="pill_text_box p_r dp_f dp_fc dp_c dp_cc">
                    <p class="pill_text_tit c_blk01 montserrat bold3">LHP 1.0</p>
                    <p class="pill_cir_tit blk02 c_wht montserrat bold2">Personalization</p>
                    <p class="pill_text_det c_blk02 c_blk02 txt-c">
                        라이프 스타일 기반 그룹별 맞춤 서비스를 제공하고
                        <br>
                        건강 데이터 기반 개인별 맞춤 처방하여 
                        <br>
                        합리적 소비 및 가치 소비를 유도합니다.
                    </p>
                </div>
            </div>
            <div class="pill_box_wrap p_r">
                <img class="pill_text_box02 p_a" src="/images/sub02/pill02.png" alt="">
                <img class="pill_text_box02_m p_a" src="/images/sub02/pill02_m.png" alt="">
                <div class="pill_text_box p_r dp_f dp_fc dp_c dp_cc">
                    <p class="pill_text_tit c_bora02 montserrat bold3">LHP NEXT</p>
                    <p class="pill_cir_tit bora02 c_wht montserrat bold2">Hyper-personalized services</p>
                    <p class="pill_text_det c_blk02 c_blk02 txt-c">
                        사용자의 활동 데이터를 통한 
                        <br>
                        사용성을 강화하고 B2H 서비스 등 
                        <br>
                        전문 의료 서비스를 연계합니다.
                    </p>
                </div>
            </div>
            <img class="pill_arrow p_a" src="/images/sub02/s02_cont04_arrow.png" alt="화살표">
        </div> -->
    </div>
</section>
<section id="s02_cont05">
    <div class="s02_bg_cir05 bora_gradient p_a radius50 blur50">
		<!---배경용 circle---->
	</div>
    <div class="s_center">
        <p class="blk_tit_big vitro bold2 txt-c">건강 분석 결과를 쉽고 재미있게</p>
        <div class="p_r">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dp_f dp_c dp_cc">
                        <img src="/images/phone/01.png" alt="ces2023">
                    </div>
                    <div class="swiper-slide dp_f dp_c dp_cc">
                        <img src="/images/phone/02.png" alt="ces2023">
                    </div>
                    <div class="swiper-slide dp_f dp_c dp_cc">
                        <img src="/images/phone/03.png" alt="ces2023">
                    </div>
                    <div class="swiper-slide dp_f dp_c dp_cc">
                        <img src="/images/phone/04.png" alt="ces2023">
                    </div>
                    <div class="swiper-slide dp_f dp_c dp_cc">
                        <img src="/images/phone/05.png" alt="ces2023">
                    </div>
                    <div class="swiper-slide dp_f dp_c dp_cc">
                        <img src="/images/phone/06.png" alt="ces2023">
                    </div>
                    <div class="swiper-slide dp_f dp_c dp_cc">
                        <img src="/images/phone/07.png" alt="ces2023">
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>

            <div class="phone_border p_a">
                <img src="/images/sub02/phone_border.png" alt="">
            </div>
        </div>
    </div>
</section>
<script>
    let swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        loop: true,
        navigation: {
            nextEl: "#s02_cont05 .swiper-button-next",
            prevEl: "#s02_cont05 .swiper-button-prev",
        },
        // direction: "vertical",
        centeredSlides: true,
        slidesPerView: '3',
        coverflowEffect: {
            rotate: 0,
            stretch :0.1,
            modifier :1.5,
            depth: 300,
            slideShadows: false,
            // stretch: 50
        },

    });
</script>
<section id="s02_cont06" style='padding-bottom:40px;'>
    <div class="s_center p_r txt-c ">
        <div class="s02_cont06_tit_img txt-c">
            <img src="/images/sub02/s02_cont06_tit.png" alt="fillkey_tit">
        </div>
		<p class="visual_det">
			Fillkey는 영양제를 쉽고 간편하게 섭취할 수 있도록 도와주는 영양제 디스펜서입니다.
		</p>
        <img class="s02_cont06_img" src="/images/sub02/s02_cont06_img.png" alt="dispenser" style="max-width:600px;">
        <!-- <p class="s02_cont06_det c_blk02">필키는 영양제를 쉽고 간편하게 섭취할 수 있도록 도와주는 영양제 디스펜서입니다.</p> -->
    </div>
</section>
<section id="s02_cont06">
    <div class="s_center p_r txt-c">
        <div class="s02_cont06_tit_img txt-c">
            <img src="/images/sub02/s02_cont06_tit2.png" alt="fillkey_tit">
        </div>
		<p class="visual_det">
			Fillpot은 개인 맞춤형 프리미엄 영양제로 Fillkey에 장착하면 보다 편리한 섭취를 경험할 수 있습니다.<br>
			일상이 바뀌는 새로운 웰니스 라이프를 경험하세요.
		</p>
        <img class="s02_cont06_img" src="/images/sub02/s02_cont06_img2.png" alt="dispenser" style="max-width:1000px;">
        <!-- <p class="s02_cont06_det c_blk02">일상이 바뀌는 새로운 웰니스 라이프를 경험하세요.</p> -->
    </div>
</section>
<section id="s02_cont07">
    <div class="s_center">
        <p class="s02_cont07_tit montserrat bold3">Lifestyle Dispenser</p>
        <div class="value_box_wrap dp_sb p_r">
            <div class="value_box">
                <div class="value_img_box">
                    <!----background 처리----->
                </div>
                <div class="value_txt_box">
                    <div class="two_cir_box bora_two_cir">
                        <!----background 처리----->
                    </div>
                    <p class="value_txt_det">
                        NFC 태깅 한 번에 끝나는
                        <br>
                        간편한 영양제 섭취
                    </p>
                </div>
            </div>
            <div class="value_box">
                <div class="value_img_box">
                    <!----background 처리----->
                </div>
                <div class="value_txt_box">
                    <div class="two_cir_box blue_two_cir">
                        <!----background 처리----->
                    </div>
                    <p class="value_txt_det">
                        Living 공간에 
                        <br>
                        놓이는 아름다운 하나의 Object
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section id="s02_cont08">
    <div class="s02_bg_cir06 bora_gradient p_a radius50 blur50">
		-배경용 circle--
	</div>
    <div class="s_center p_r">
        <p class="s02_cont03_det01 montserrat c_blk01 bold3 txt-c">VIEW</p>

        <div class="swiper-container02">
            <div class="swiper-wrapper">
                <div class="swiper-slide dp_f dp_c dp_cc">
                    <img src="/images/sub02/view01.png" alt="ces2023">
                </div>
                <div class="swiper-slide dp_f dp_c dp_cc">
                    <img src="/images/sub02/view02.png" alt="ces2023">
                </div>
                <div class="swiper-slide dp_f dp_c dp_cc">
                    <img src="/images/sub02/view03.png" alt="ces2023">
                </div>
                <div class="swiper-slide dp_f dp_c dp_cc">
                    <img src="/images/sub02/view04.png" alt="ces2023">
                </div>
                <div class="swiper-slide dp_f dp_c dp_cc">
                    <img src="/images/sub02/view05.png" alt="ces2023">
                </div>
                <div class="swiper-slide dp_f dp_c dp_cc">
                    <img src="/images/sub02/view06.png" alt="ces2023">
                </div>
                <div class="swiper-slide dp_f dp_c dp_cc">
                    <img src="/images/sub02/view07.png" alt="ces2023">
                </div>
            </div>
        </div>
        <div class="swiper-button-next02"></div>
        <div class="swiper-button-prev02"></div>

    </div>
</section> -->
<script>
    let swiper02 = new Swiper('.swiper-container02', {
        effect: 'coverflow',
        grabCursor: true,
        loop: true,
        navigation: {
            nextEl: "#s02_cont08 .swiper-button-next02",
            prevEl: "#s02_cont08 .swiper-button-prev02",
        },
        // direction: "vertical",
        centeredSlides: true,
        slidesPerView: '3',
        coverflowEffect: {
            rotate: 0,
            stretch: -250,
            modifier :1,
            depth: 500,
            slideShadows: false,
            // stretch: 50
        },
        breakpoints: {
            1920: {
                coverflowEffect: {
                    rotate: 0,
                    stretch: -250,
                    modifier :1,
                    depth: 500,
                    slideShadows: false,
                    // stretch: 50
                },
            },
        
            768: {
                coverflowEffect: {
                    rotate: 0,
                    stretch: -180,
                    modifier :1,
                    depth: 500,
                    slideShadows: false,
                    // stretch: 50
                },
            },
        },

    });

    
</script>
<section id="s02_cont09">
    <div class="s_center">
        <p class="s02_cont03_det01 montserrat c_blk01 bold3 txt-c">COLOR</p>
        <div class="s02_cont09_img_wrap dp_sb dp_wrap">
            <div class="s02_cont09_img" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-once="true">
                <img src="/images/sub02/s02_cont09_pic01.png" alt="dispenser">
            </div>
            <div class="s02_cont09_img" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="200" data-aos-once="true">
                <img src="/images/sub02/s02_cont09_pic02.png" alt="dispenser">
            </div>
            <div class="s02_cont09_img" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="400" data-aos-once="true">
                <img src="/images/sub02/s02_cont09_pic03.png" alt="dispenser">
            </div>
            <div class="s02_cont09_img" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="600" data-aos-once="true">
                <img src="/images/sub02/s02_cont09_pic04.png" alt="dispenser">
            </div>
            <div class="s02_cont09_img" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="800" data-aos-once="true">
                <img src="/images/sub02/s02_cont09_pic05.png" alt="dispenser">
            </div>
            <div class="s02_cont09_img" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="1000" data-aos-once="true">
                <img src="/images/sub02/s02_cont09_pic06.png" alt="dispenser">
            </div>
        </div>
    </div>
    <a class="up_btn dp_fc dp_sb dp_c" href="javascript:avoid(0)">
        <span>TOP</span>
        <img src="/images/topbtn_arrow.png" alt="top">
    </a>
</section>

<?
	include '../footer.php';
?>