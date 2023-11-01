

<script language='javascript'>

function click_del(txt,uid){

	if(confirm(txt+' 글을 삭제하시겠습니까?')){
		form = document.frm01;
		form.uid.value = uid;
		form.type.value = 'del'
		form.action = '<?=$boardRoot?>proc.php';
		form.submit();
	}else{
		return;
	}

	

}


function All_del(){

    var chk = document.getElementsByName('chk[]');
	var isChk = false;

    for(var i = 0; i < chk.length; i++){
		if(chk[i].checked)	isChk = true; 
    }

	if(!isChk){
		alert('삭제하실 글을 선택하여 주십시오.');
		return;
	}

	if(confirm('선택하신 글을 삭제하시겠습니까?')){

		form = document.frm01;

		form.type.value = 'all_del'
		form.action = '<?=$boardRoot?>proc.php';
		form.submit();

	}

}


function reg_register(){
	form = document.frm01;
	form.type.value = 'write';
	form.action = './sub02';
	form.submit();
}

function reg_modify(uid){
	form = document.frm01;
	form.type.value = 'edit';
	form.uid.value = uid;
	form.action = './sub02';
	form.submit();
}

function reg_view(uid){
	form = document.frm01;
	form.type.value = 'view';
	form.uid.value = uid;
	form.action = './sub02';
	form.submit();
}


function error_msg(mod){
	if(mod == 'r'){
		alert('글읽기 권한이 없습니다');
		return;

	}else if(mod == 'w'){
		alert('글쓰기 권한이 없습니다');
		return;

	}
}

function goSearch(){
	form = document.frm01;

	form.type.value = '';
	form.uid.value = '';
	form.record_start.value = '';
	form.action = '<?=$PHP_SELF?>';
	form.target = '';
	form.submit();
}

</script>


<form name='frm01' method='post' action='<?=$PHP_SELF?>'>
<input type="text" style="display: none;">  <!-- 텍스트박스 1개이상 처리.. 자동전송방지 -->
<input type='hidden' name='type' value=''>
<input type='hidden' name='uid' value=''>
<input type='hidden' name='record_start' value='<?=$record_start?>'>
<input type='hidden' name='table_id' value='<?=$table_id?>'>
<input type='hidden' name='next_url' value='<?=$PHP_SELF?>'>
<input type='hidden' name='strRoot' value='<?=$strRoot?>'>
<input type='hidden' name='boardRoot' value='<?=$boardRoot?>'>




<div id="list_wrap" class="p_r">
    <div class="s_center">
        <h3 class="visual_tit montserrat bold3 txt-c">
            NEWSROOM
        </h3>
        <div class="searchWrap dp_f dp_cc dp_c">
           <select name="field" class="board-select">
				<option value='title' <?if($field == 'title') echo 'selected';?>>Tittle</option>
            </select>
            <div class="inputWrap p_r">
                <input type="text" placeholder="Please enter keywords">
                <a class="search_btn p_a" href="javascript:goSearch();"><img src="/images/sub01/icon_search.png" alt=""></a>
            </div>
        </div>
		<?
			//글쓰기 권한 설정
			include $boardRoot.'chk_write.php';
		?>
		<?=$btn_write?>
				

		<div class="list_box_wrap">


<?
//새글표시기간
$newday = 3;

if($total_record != '0'){
	$i = $total_record - ($current_page - 1) * $record_count;

	$line_num = 0;

	while($row = mysql_fetch_array($result)){

		$uid = $row["uid"];

		$site = $row["site"];
		$userid = $row["userid"];
		$userfile01 = $row["userfile01"];
		$userfile02 = $row["userfile02"];
		$userfile03 = $row["userfile03"];
		$userfile04 = $row["userfile04"];
		$userfile05 = $row["userfile05"];
		$notice_chk = $row["notice_chk"];
		$title = $row["title"];
		$name = $row["name"];
		$hit = $row["hit"];
		$hitTxt = number_format($hit);
		$pwd_chk = $row["pwd_chk"];
		$ment = $row["ment"];
		
		$reg_date=$row["reg_date"];

		$data01=$row["data01"];
		$data02=$row["data02"];
		$data03=$row["data03"];	

		$reg_date1 = date("Y",$reg_date);
		$reg_date2 = date("d",$reg_date);
		$reg_date3 = date("F",$reg_date);


		//글읽기 권한 설정
		include $boardRoot.'chk_view.php';

		

	
?>
		<div class="list_box">
			<a class="dp_sb" <?=$btn_link?> style='cursor:pointer;'>
				<div class="list_img_box" style='background:url(/board/upfile/<?=$userfile01?>) center center no-repeat;background-size:cover;'>
				</div>
				<div class="list_text_box dp_sb dp_fc">
					<div class="list_text">
						<h4 class="list_tit c_blk01"><?=$title?></h4>
						<p class="list_det c_blk02"><?=$data01?></p>
					</div>
					<span class="list_date c_blk02"><?=$reg_date3?> <?=$reg_date2?>, <?=$reg_date1?></span>
				</div>
			</a>
		</div>


<?
		

		$i--;
		$line_num++;
	}
}else{
?>

			<div style='text-align:center;min-height:500px;'>	
				등록된 게시물이 없습니다
			</div>
<?
}
?>



    </div>
    <a class="up_btn dp_fc dp_sb dp_c" href="">
        <span>TOP</span>
        <img src="/images/topbtn_arrow.png" alt="">
    </a>
</div>

</form>