			<footer id="footer" class="bora02 section">
				<div class="footer_bora_center bora01">
					<div class="f_center">
						<div class="f_top dp_f dp_c">
							<h1 class="f_logo">
								<img src="/images/f_logo.png" alt="">
							</h1>
							<div class="f_info_box dp_f">
								<!-- <a class="policy_go_btn c_wht" href="" title="Privacy Guideline">Privacy Guideline</a> -->
								<div class="company_wrap">
									<p class="c_wht">LOTTE HEALTHCARE </p>
									<p class="c_wht">30Fl, LOTTE World Tower 300, Olympic-ro, Sonpa-gu, Seoul, Korea, 05551</p>
									<div class="basic_info_wrap dp_f">
										<div class="basic_info">
											<p>CEO : Lee Hoon-ki</p>
											<p class="mobile_flex">
											<span>Contact : </span>
											<span>(Tel) +82-2-3431-8102 <br class='mobileChk'>
											(E-mail) lottehealthcare@lotte.net</span>
											</p>
										</div><!-- 
										<div class="basic_info">
											<p>+82-2-3431-8102</p>
											<p>lottehealthcare@lotte.net</p>
										</div> -->
									</div>
								</div>
							</div>
						</div>
						<div class="f_bot">
							<p class="copyright c_wht txt-r">COPYRIGHT © 2023 LOTTE HEALTHCARE Co., Ltd All Rights Reserved</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<script>
			AOS.init({
				easing: 'ease-out-back',
				duration: 1000,
				disable: function() {
					var maxWidth = 1024;
					return window.innerWidth < maxWidth;
				}
			});
			// 맨위로 가기	
			$('.up_btn').click(function(event){
				event.preventDefault();

				$('html, body').animate({scrollTop:0}, 400);

				return false;
			});	
		</script>
	</body>
</html>
<!-- 알림 메세지 -->
<a id="GblNotice_open" class="GblNotice_open"></a>

<div id="GblNotice" class="popup_background" style="min-width:250px;display:none;">
	<div class="cls_buttonali" id="alertCloseBtn"><button class="GblNotice_close close_button_pop"></button></div>
	<div class="popup_notice">
		<div class="clearfix"><div class="img_clear"><img src="/module/popupoverlay/ico_notice.gif"></div><div class="pop_ttl0">알림</div></div>
		<div class="pop_div_dotted"></div>
		<div class="write_it"><span id="alertTxt"></span></div>
		<div class="btn_ali_pop2" id="alertBtn"><input type="button" class="btn_notice_reg GblNotice_close" value="확인" /></div>
	</div>
</div>

<!-- confirm창 -->
<a id="conFirm_open" class="conFirm_open"></a>
<div id="conFirm" class="popup_background" style="min-width:250px;display:none;">
	<div class="cls_buttonali"><button class="conFirm_close close_button_pop"></button></div>
	<div class="popup_notice">
		<div class="clearfix"><div class="img_clear"><img src="/module/popupoverlay/ico_notice.gif"></div><div class="pop_ttl0">확인</div></div>
		<div class="pop_div_dotted"></div>
		<div class="write_it"><span id="confirmTxt"></span></div>
		<a class="conFirm_close" href="#">
			<div class="btn2_wrap">
				<div class="btn_ali_pop3" id="confirmCancelBtn"><input type="button" class="btn_notice_reg_cancel" value="취소" /></div>
				<div class="btn_ali_pop3" id="confirmBtn"><input type="button" class="btn_notice_reg_add" value="확인"></div>
			</div>
		</a>
	</div>
</div>

<!-- 멀티팝업 -->
<!--
<a id="multiBox_open" class="multiBox_open"></a>
<div id="multiBox" class="popup_background" style="min-width:250px;display:none;">
	<div class="popup_notice">
		<div class="clearfix"><div class="img_clear"><img src="/module/popupoverlay/ico_notice.gif"></div><div class="pop_ttl0" id='multi_ttl'>팝업제목</div><div class="cls_buttonali2"><button class="multiBox_close close_button_pop"></button></div></div>
		<div class="pop_div_dotted"></div>
		<div class="write_it">
			<div id='multiFrame' style="background:#fff;overflow:hidden;position:relative;"></div>
		</div>
	</div>
</div>
-->
<a id="multiBox_open" class="multiBox_open"></a>
<div id="multiBox" class="popup_background" style="min-width:250px;display:none;">
	<div class="cls_buttonali"><button class="multiBox_close close_button_pop"></button></div>
	<div class="popup_notice">
		<div class="write_it">
			<div id='multiFrame' style="margin:30px 0 0 0;background:#fff;overflow:hidden;position:relative;"></div>
		</div>
	</div>
</div>


<!-- 팝업 스크립트 -->
<script>
$(document).ready(function () {
	$('#GblNotice,#conFirm,#multiBox').popup({
		transition: 'all 0.3s',
		blur: false,
		escape:false,
		scrolllock: false
	});

	//숫자만 입력받기
	$('.numberOnly').keydown(function(e){
		fn_Number($(this),e);
	}).keyup(function(e){
		fn_Number($(this),e);
	}).css('imeMode','disabled');


	//input필드 자동완성기능
	jQuery('input').attr("autocomplete","off");
});
</script>
<!-- 팝업 스크립트 -->

<!-- <form name='frm_down' method='post' action='/module/download2.php'>다운로드 폼
<input type='hidden' name='file_name' value="">
<input type='hidden' name='file_rename' value="">
<input type='hidden' name='downfiledir' value="/home/ansanyouth/www/upfile/">
</form> -->

<iframe name='ifra_gbl' src='about:blank' width='0' height='0' frameborder='0' scrolling='no' style='display:none;'></iframe>