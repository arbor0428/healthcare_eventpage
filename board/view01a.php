<?
	if($uid){

		//조회수증가
		$sql = "update tb_board_list set hit = hit + 1 where uid='$uid'";
		$result = mysql_query($sql);


		$sql = "select * from tb_board_list where uid='$uid'";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);

		$uid = $row["uid"];
		$site = $row["site"];
		$userid = $row["userid"];
		$title = $row["title"];
		$name = $row["name"];
		$email = $row["email"];
		$ment = $row["ment"];
		$data01 = $row["data01"];
		$data02 = $row["data02"];
		$data03 = $row["data03"];
		$data04 = $row["data04"];
		$data05 = $row["data05"];
		$reg_date=$row["reg_date"];
		$reg_dateTxt = date("Y.m.d",$reg_date);
		$reg_dateTxt2 = date("Y년 m월 d일",$reg_date);

		//저장된 파일명
		$userfile01 = $row["userfile01"];
		$userfile02 = $row["userfile02"];
		$userfile03 = $row["userfile03"];
		$userfile04 = $row["userfile04"];
		$userfile05 = $row["userfile05"];

		//실제 파일명
		$realfile01 = $row["realfile01"];
		$realfile02 = $row["realfile02"];
		$realfile03 = $row["realfile03"];
		$realfile04 = $row["realfile04"];
		$realfile05 = $row["realfile05"];

		if($data02){
			$data02Arr = explode('/',$data02);
		}
		//$ment = Util::textareaDecodeing($ment);
		//$data01 = Util::textareaDecodeing($data01);
	}



?>



<script language='javascript'>
function reg_del(){

	if(confirm('글을 삭제하시겠습니까?')){
		form = document.FRM;
		form.type.value = 'del'
		form.action = '<?=$boardRoot?>proc.php';
		form.submit();
	}else{
		return;
	}

}

function reg_list(){
	form = document.FRM;
	form.type.value = 'list';
	form.action = './sub02';
	form.submit();

}

function reg_modify(){
	form = document.FRM;
	form.type.value = 'edit';
	form.action = './sub02';
	form.submit();

}

function reg_reply(){
	form = document.FRM;
	form.type.value = 're_write';
	form.action = './sub02';
	form.submit();

}

function error_msg(mod){
	if(mod == 'r'){
		alert('답글작성 권한이 없습니다');
		return;

	}else if(mod == 'w'){
		alert('글쓰기 권한이 없습니다');
		return;

	}
}
</script>

<style>
.view_content_text iframe{width:100% !important;}
</style>

<form name='FRM' action="<?=$PHP_SELF?>" method='post'>
<input type='hidden' name='type' value='<?=$type?>'>
<input type='hidden' name='uid' value='<?=$uid?>'>
<input type='hidden' name='upid' value='<?=$uid?>'><!-- 답글작성용 -->
<input type='hidden' name='next_url' value='<?=$PHP_SELF?>'>
<input type='hidden' name='record_start' value='<?=$record_start?>'>
<input type='hidden' name='field' value='<?=$field?>'>
<input type='hidden' name='word' value='<?=$word?>'>
<input type='hidden' name='table_id' value='<?=$table_id?>'>
<input type='hidden' name='strRoot' value='<?=$strRoot?>'>
<input type='hidden' name='boardRoot' value='<?=$boardRoot?>'>

<input type='hidden' name='dbfile01' value='<?=$userfile01?>'>
<input type='hidden' name='dbfile02' value='<?=$userfile02?>'>
<input type='hidden' name='dbfile03' value='<?=$userfile03?>'>
<input type='hidden' name='dbfile04' value='<?=$userfile04?>'>
<input type='hidden' name='dbfile05' value='<?=$userfile05?>'>

<input type='hidden' name='realfile01' value='<?=$realfile01?>'>
<input type='hidden' name='realfile02' value='<?=$realfile02?>'>
<input type='hidden' name='realfile03' value='<?=$realfile03?>'>
<input type='hidden' name='realfile04' value='<?=$realfile04?>'>
<input type='hidden' name='realfile05' value='<?=$realfile05?>'>

<input type='hidden' name='site' value='<?=$site?>'>

<!--등록-->




<div id="view_wrap" class="p_r">
    <div class="view_visual">
        <div class="view_content_wrap nopadd">
            <p class="vv_tit01 dp_f dp_c c_wht">
                <span class="c_wht"><?=$reg_dateTxt?></span>
                <span class="s_bar"></span>
                <span class="c_wht">언론보도</span>
            </p>
            <p class="vv_tit02 c_wht vitro bold2"><?=$title?></p>
        </div>
    </div>
    <div class="view_content_wrap">
        <a class="goback_btn dp_f dp_c" href="javascript:reg_list()">
            <img src="/images/sub01/list_go_back.png" alt="">
            <span class="c_blk01">뒤로 가기</span>
        </a>
        <div class="view_img_wrap">
            <img src="/board/upfile/<?=$userfile01?>" alt="" style='width:100%;'>
        </div>
        <div class="bora_content_box">
            <ul>
                <li><?=$data01?></li>
            </ul>
        </div>
        <div class="view_content_text">
            <p class="view_content_date c_blk01 bold2"><?=$reg_dateTxt2?></p>
            <p class="c_blk02">
                <?=$ment?>
            </p>
            <ul class="hash_tag_list dp_f dp_c">
				<?
					for($k=0; $k<count($data02Arr); $k++){
						echo'<li class="c_blk01">'.$data02Arr[$k].'</li>';
					}
				?>
                <!-- <li class="c_blk01">뉴스</li>
                <li class="c_blk01">해시태그</li>
                <li class="c_blk01">해시태그해시태그</li>
                <li class="c_blk01">해시태그</li>
                <li class="c_blk01">뉴스</li> -->
            </ul>
        </div>
        <a class="red01 c_wht list_page_btn dp_sb dp_c" href="javascript:reg_list();">
            <span>언론보도</span>
            <img src="/images/sub01/list_go_to_btn.png" alt="">
        </a>
		


<?
	//수정 & 삭제버튼 설정
	if($GBL_MTYPE){
		if(($GBL_MTYPE == 'A' && $site==$GBL_SITE) || $GBL_USERID == $userid){
			$btn_tbl_type = 'ok';

		}else{
			$btn_tbl_type = 'pwd';

		}

	}else{
		$btn_tbl_type = 'pwd';
	}

	if($btn_tbl_type == 'ok'){
?>
	<a href="javascript:reg_modify();" class='btn grn'>수정</a>&nbsp;
	<a href="javascript:reg_del();" class='btn red'>삭제</a>&nbsp;
<?
	}
?>
				



    </div>


    <a class="up_btn dp_fc dp_sb dp_c" href="">
        <span>TOP</span>
        <img src="/images/topbtn_arrow.png" alt="">
    </a>
</div>

<style>
    header {
        position: absolute;
        width: 100%;
    }
    header .gnb > li > a span {
        color: #fff;
    }
    header .m-btn .bar_top, 
    header .m-btn .bar_bot {
        background-color: #fff;
    }
    header .m-btn .bar_mid .bar_mid_c01{
        background-color: #fff;
    }
    header .m-btn .bar_mid .bar_mid_c02{
        background-color: #fff;
    }
    header .gnb > li > a .h_arrow {
        background-image: url("/images/wht_h_arrow_off.png");
    }
</style>









</form>

<iframe name='ifra_down' src='about:blank' width='0' height='0' frameborder='0' scrolling='0'></iframe>