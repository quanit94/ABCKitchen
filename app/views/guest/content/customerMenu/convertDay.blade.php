<!-- hàm chuyển ngày sang tiếng việt -->
 <?php
	function convertDay($date){
		$day = $date->format("N");
		switch($day){
			case '1':
				echo "Thứ 2";
				break;
			case '2':
				echo "Thứ 3";
				break;
			case '3':
				echo "Thứ 4";
				break;
			case '4':
				echo "Thứ 5";
				break;
			case '5':
				echo "Thứ 6";
				break;
			case '6':
				echo "Thứ 7";
				break;
			case '7':
				echo "CN";	
				break;
		}
	}
?>