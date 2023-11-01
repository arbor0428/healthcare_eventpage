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
            Provide an experience of a virtuous cycle of
            <br>
            healthy behavior and good consumption
			</p>
			<p class="visual_det visual_det2">
            Provide professional care through scientific diagnosis/prescription
            <br>
            (Survey / Medical checkup / Genetic test)
            <br>
            to the general public who do not have expertise
            </p>
		</div>
    </div>
    <div class="s02_cont01_puzzle_wrap p_a">
        <div class="s02_cont01_puzzle02 p_a">
            <img src="/images/sub02/s02_cont01_puzzle02.png" alt="puzzle02">
        </div>
        <div class="s02_cont01_puzzle01 p_a">
            <img src="/images/sub02/s02_cont01_puzzle01.png" alt="puzzle01">
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
            <div class="s02_cont02_box dp_f dp_fc dp_c">
                <div class="s02_cont02_img_wrap dp_f dp_cc p_r">
                    <img class="icon01_02 p_a" src="/images/sub02/s02_cont02_icon01_03.png" alt="진단" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-once="true">
                    <img class="icon01_01 p_a" src="/images/sub02/s02_cont02_icon01_02.png" alt="진단" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="200" data-aos-once="true">
                    <img class="icon01_03 p_a" src="/images/sub02/s02_cont02_icon01_01.png" alt="진단" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="400" data-aos-once="true">
                </div>
                <p class="blk_tit_big montserrat bold2 txt-c c_blk01">Collection</p>
                <p class="s02_cont02_box_det c_blk02 txt-c">
                Gathering all of your health information
                <br>
                in one place
                </p>
            </div>
            <div class="s02_cont02_box dp_f dp_fc dp_c">
                <div class="s02_cont02_img_wrap dp_f dp_cc p_r">
                    <img class="icon02_02 p_a" src="/images/sub02/s02_cont02_icon02_03.png" alt="진단" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="" data-aos-once="true">
                    <img class="icon02_01 p_a" src="/images/sub02/s02_cont02_icon02_02.png" alt="진단" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="200" data-aos-once="true">
                    <img class="icon02_03 p_a" src="/images/sub02/s02_cont02_icon02_01.png" alt="진단" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="400" data-aos-once="true">
                </div>
                <p class="blk_tit_big montserrat bold2 txt-c c_blk01">Analysis</p>
                <p class="s02_cont02_box_det c_blk02 txt-c">
				Analyze and predict information utilizing a recommendation engine from medical expert know-how and AI
                </p>
            </div>
            <div class="s02_cont02_box dp_f dp_fc dp_c">
                <div class="s02_cont02_img_wrap dp_f dp_cc p_r">
                    <img class="icon03_02 p_a" src="/images/sub02/s02_cont02_icon03_03.png" alt="진단" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="000" data-aos-once="true">
                    <img class="icon03_01 p_a" src="/images/sub02/s02_cont02_icon03_02.png" alt="진단" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="200" data-aos-once="true">
                    <img class="icon03_03 p_a" src="/images/sub02/s02_cont02_icon03_01.png" alt="진단" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="400" data-aos-once="true">
                </div>
                <p class="blk_tit_big montserrat bold2 txt-c c_blk01">Recommendation</p>
                <p class="s02_cont02_box_det c_blk02 txt-c">
                    Optimized offerings are recommended based on users' health and their lifestyles.
                 
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
        <p class="s02_cont03_det02 txt-c c_blk02">
        Analyze information with personal recommendation
        <br class="mbr" />
        AI engine based on medical expert know-how
        </p>
        <div class="cazzle_box_wrap dp_sb dp_c">
            <div class="cazzle_img dp_sb">
                <img class="cazzle_img01 p_a" src="/images/sub02/new05.png" alt="핸드폰화면" style="max-width:750px;" />
				<!--
                <img class="cazzle_img02 p_a" src="/images/sub02/new02.png" alt="핸드폰화면">
                <img class="cazzle_img03 p_a" src="/images/sub02/new03.png" alt="핸드폰화면">
                <img class="cazzle_img04 p_a" src="/images/sub02/new04.png" alt="핸드폰화면">
				-->
            </div>
            <div class="cazzle_text_box">
				 <p class="s02_cont03_det01 s02_cont03_det01_ montserrat c_blk01 bold3">CAZZLE for you</p>
                <p class="cazzle_text_tit montserrat bold2 c_blk01">a sustainable lifestyle for the Earth and your health</p>
                <p class="s02_cont03_det02 mbott c_blk02">
                CAZZLE collects your scattered health information
                <br>
                 and assembles it like a puzzle piece by piece,
                <br> 
                 presenting a customized health guide.
                </p>
                <p class="s02_cont03_det02 c_blk02">
				Recommendation AI that gets more accurate the more it knows you.
                <br>
				Creating a fun and healthy life with family and friends.
                <br>
				CAZZLE, who thinks beyond and cares even for the Earth.
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
        <p class="blk_tit_big montserrat bold2 txt-c">Platform to provide everything needed for a healthier life</p>
        <p class="s02_cont03_det02 txt-c c_blk02">
            It is a customized vertical healthcare commerce service that recommends
            <br>
			everything with health, based on health data.
        </p>
		<div class="pill_wrap dp_cc p_r">
			<img src='/images/sub02/s02_cont04_img.png' style='width:100%;' data-aos="fade" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="200" data-aos-once="true" class='pcChk'>
			<img src='/images/sub02/s02_cont04_img_m.png' style='width:100%;' data-aos="fade" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="200" data-aos-once="true" class='mobileChk'>		
		</div>
        <!-- <div class="pill_wrap dp_f dp_cc p_r">
            <div class="pill_box_wrap p_r">
                <img class="pill_text_box01 p_a" src="/images/sub02/pill01.png" alt="">
                <img class="pill_text_box01_m p_a" src="/images/sub02/pill01_m.png" alt="">
                <div class="pill_text_box p_r dp_f dp_fc dp_c dp_cc">
                    <p class="pill_text_tit c_blk01 montserrat bold3">LHP 1.0</p>
                    <p class="pill_cir_tit blk02 c_wht montserrat bold2">Personalization</p>
                    <p class="pill_text_det c_blk02 c_blk02 txt-c">
                        Provides customized lifestyle based group specific service,
                        <br>
                        with personalized health, data-based prescriptions
                        <br>
                        drive rational consumption and value consumption.
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
                        By user activity data enhanced
                        <br>
                        usability, B2H services, etc.
                        <br>
                        Collaborate with professional medical services.
                    </p>
                </div>
            </div>
            <img class="pill_arrow p_a" src="/images/sub02/s02_cont04_arrow.png" alt="pill_arrow">
        </div> -->
    </div>
</section>
<section id="s02_cont05">
    <div class="s02_bg_cir05 bora_gradient p_a radius50 blur50">
		<!---배경용 circle---->
	</div>
    <div class="s_center">
        <p class="blk_tit_big montserrat bold2 txt-c">Easy and interesting healthy analysis</p>
        
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
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        // direction: "vertical",
        centeredSlides: true,
        slidesPerView: '3',
        coverflowEffect: {
            rotate: 0,
            stretch : 1,
            modifier : 1.5,
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
			Fillkey is a dispenser that helps you intake nutritional supplememts easily and conveniently.
		</p>
        <img class="s02_cont06_img" src="/images/sub02/s02_cont06_img.png" alt="dispenser" style="max-width:600px;">
       <!--  <p class="s02_cont06_det c_blk02">Fillkey is a supplement dispenser that helps you take supplement easily and conveniently.</p> -->
    </div>
</section>
<section id="s02_cont06">
    <div class="s_center p_r txt-c">
        <div class="s02_cont06_tit_img txt-c">
            <img src="/images/sub02/s02_cont06_tit2.png" alt="fillkey_tit">
        </div>
		<p class="visual_det">
			Fillpot is a customized premium nutritional supplement offering you a convenient intake experience when equipped to Fillkey<br>
			Experience a new wellness life that changes your daily life
		</p>
        <img class="s02_cont06_img" src="/images/sub02/s02_cont06_img2.png" alt="dispenser" style="max-width:1000px;">
        <!-- <p class="s02_cont06_det c_blk02">Experience a new wellness life that changes your daily life</p> -->
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
                <div class="value_txt_box dp_f dp_c">
                    <div class="two_cir_box bora_two_cir">
                        <!----background 처리----->
                    </div>
                    <p class="value_txt_det">
                    Simple way to get<br>
					supplements by NFC tagging
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
                    A beautiful object placed
                    <br>
                    in the living space
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

    });
</script>
<section id="s02_cont09">
    <div class="s_center">
        <p class="s02_cont03_det01 montserrat c_blk01 bold3 txt-c">COLOR</p>
        <div class="s02_cont09_img_wrap dp_sb dp_wrap">
            <div class="s02_cont09_img">
                <img src="/images/sub02/s02_cont09_pic01.png" alt="dispenser">
            </div>
            <div class="s02_cont09_img">
                <img src="/images/sub02/s02_cont09_pic02.png" alt="dispenser">
            </div>
            <div class="s02_cont09_img">
                <img src="/images/sub02/s02_cont09_pic03.png" alt="dispenser">
            </div>
            <div class="s02_cont09_img">
                <img src="/images/sub02/s02_cont09_pic04.png" alt="dispenser">
            </div>
            <div class="s02_cont09_img">
                <img src="/images/sub02/s02_cont09_pic05.png" alt="dispenser">
            </div>
            <div class="s02_cont09_img">
                <img src="/images/sub02/s02_cont09_pic06.png" alt="dispenser">
            </div>
        </div>
    </div>
    <a class="up_btn dp_fc dp_sb dp_c" href="javascript:avoid(0);">
        <span>TOP</span>
        <img src="/images/topbtn_arrow.png" alt="top">
    </a>
</section>

<?
	include '../footer.php';
?>