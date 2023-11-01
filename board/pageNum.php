<div class="numWrap">
	<ul class="dp_f dp_c dp_cc">
	<?
	if(!$fName)	$fName = 'frm01';

	if($total_record != '0'){
		if($total_record > $record_count){
			/*
			if($current_page * $record_count > $record_count * $link_count) {
				$pre_group_start = ($group * $record_count * $link_count) - $record_count;
				echo ("<li><a href=javascript:pageNum('$fName','$pre_group_start'); class='prev_btn dp_f dp_c dp_cc'><img src='/images/sub01/list_prev.png' alt='이전'></a> ");
			}else{
				echo ("<li><a href=javascript:pageNum('$fName','$pre_group_start'); class='prev_btn dp_f dp_c dp_cc'><img src='/images/sub01/list_prev.png' alt='이전'></a> ");
			}
*/

			if($total_page > 1 && ($record_start !=0 )) {
				$pre_page_start = $record_start - $record_count;
				echo ("<li><a href=javascript:pageNum('$fName','$pre_page_start'); class='prev_btn dp_f dp_c dp_cc'><img src='/images/sub01/list_prev.png' alt='이전'></a> ");
			}else{
				echo ("<li><a href=javascript:pageNum('$fName','$pre_page_start'); class='prev_btn dp_f dp_c dp_cc'><img src='/images/sub01/list_prev.png' alt='이전'></a> ");
			}







			for($i=0; $i<$link_count; $i++){
				$input_start = ($group * $link_count + $i) * $record_count; 

				$link = ($group * $link_count + $i) + 1;

				if($input_start < $total_record) {
					if($input_start != $record_start) {
						echo ("<li><a href=javascript:pageNum('$fName','$input_start'); class='num bora01 c_wht dp_f dp_c dp_cc'>$link</a></li>");
					} else {
						echo ("<li><a href=javascript:pageNum('$fName','$input_start'); class='num bora02 c_wht dp_f dp_c dp_cc'>$link</a></li>");
					}
				}
			}





			if($total_page > 1 && ($record_start != ($total_page * $record_count - $record_count))) {
				$next_page_start = $record_start + $record_count;
				echo ("<li><a href=javascript:pageNum('$fName','$next_page_start'); class='next_btn dp_f dp_c dp_cc'><img src='/images/sub01/list_next.png' alt='이후'></a></li>");
			}else{
				$next_page_start = $record_start;
				echo ("<li><a href=javascript:pageNum('$fName','$next_page_start'); class='next_btn dp_f dp_c dp_cc'><img src='/images/sub01/list_next.png' alt='이후'></a></li>");
			}

/*
			if($total_record > (($group + 1) * $record_count * $link_count)) {
				$next_group_start = ($group + 1) * $record_count* $link_count;
				echo("<li><a href=javascript:pageNum('$fName','$next_group_start'); class='next_btn dp_f dp_c dp_cc'><img src='/images/sub01/list_next.png' alt='이후'></a></li>");
			}else{
				$next_group_start = $record_start;
				echo("<li><a href=javascript:pageNum('$fName','$next_group_start'); class='next_btn dp_f dp_c dp_cc'><img src='/images/sub01/list_next.png' alt='이후'></a></li>");
			}
*/


			  
		}else{
			echo ("<li><a href='#' class='num bora02 c_wht dp_f dp_c dp_cc'>1</a></li>");
		}
	}
	?>
	</ul>
</div>