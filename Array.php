<?php
	// Trình bày danh sách lớp
	$class = array(
		'Nam' => array(
			'name' => 'Nam', 
			'year' => 1997, 
			'email' => 'nam@gmail.com'
		),
		'Nga' => array(
			'name' => 'Nga',
			'year' => 1998,
			'email' => 'nga@gmail.com'
		),
		'Hương' => array(
			'name' => 'Hương',
			'year' => 1997,
			'email' => 'huong@gmail.com'
		)
	);
	// Hiển thị danh sách lớp
	function showClass($arr) {
		echo "----------------------------<br>";
		$i = 1;
		foreach($arr as $arrNew) {
			echo $i.', '.$arrNew['name'].'-'.$arrNew['year'].'-'.$arrNew['email'].'<br>';
			$i++;
		}
		echo "----------------------------<br>";
	}
	// Kiểm tra tên và đổi email
	function checkNamechangeEmail($arr, $name, $email) {
		foreach($arr as $key => $arrNew) {
			//Nếu phần tử có tên trùng với yêu cầu => đổi email của phần tử
			if ($arrNew['name'] == $name) {
				$arr[$key]['email'] = $email;
			}
		}
		echo "Check Name and Change Email <br>";
		return $arr;
	}
	function addMember($arr, $key, $name, $year, $email) {
		//Thêm một phần tử vào mảng theo dữ liệu đã cho
		$arr[$key]['name'] = $name;
		$arr[$key]['year'] = $year;
		$arr[$key]['email'] = $email;
		echo "Add Member <br>";
		return $arr;
	}
	function removeMember($arr, $name) {
		foreach ($arr as $key => $arrNew) {
			//Nếu phần tử có tên trùng với yêu cầu thì loại bỏ phần tử đó
			if ($arrNew['name'] == $name) {
				unset ($arr[$key]);
			}
		}
		echo "Remove Member <br>";
		return $arr;
	}
	function checkYearchangeEmail($arr, $year, $email) {
		foreach ($arr as $key => $arrNew) {
			// Có năm trùng với yêu cầu => đổi email
			if ($arrNew['year'] == $year) {
				$arr[$key]['email'] = $email;
			}
		}
		echo "Check Year and Change Email <br>";
		return $arr;
	} 
	showClass($class);

	$class = checkNamechangeEmail($class, 'Nam', 'nam97@gmail.com');
	showClass($class);

	$class = addMember($class, 'tung', 'Tung', 2000, 'tung@gmail.com');
	showClass($class);

	$class = removeMember($class, 'Nga');
	showClass($class);

	$class = checkYearchangeEmail($class, 1997, 'test@gmail.com');
	showClass($class);

?>