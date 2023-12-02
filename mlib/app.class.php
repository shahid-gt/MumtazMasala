<?php
session_start();
class app
{
	protected $database;
	protected $conn;
	protected $stmt;
	protected $prefix;
	protected $tableprefix;
	protected $total_rows = 0;
	protected $total_pages = 1;
	protected $start = 1;
	protected $end = 1;
	function __construct()
	{
		if ( !defined('INI_PATH') )
			define('INI_PATH', APP_PATH.'/config/config.ini');
		$settings = parse_ini_file(INI_PATH, TRUE) or die('Unable to open ' . INI_PATH . '.');
		try {
			$this->conn = new PDO($settings['database']['driver'].':host='.$settings['database']['host'].';port='.(isset($settings['database']['port']) ? $settings['database']['port'] : '').';dbname='.$settings['database']['schema'], $settings['database']['username'], $settings['database']['password'], array( PDO::ATTR_PERSISTENT => false));
			$this->database = $settings['database']['schema'];
		} catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br />Check /config/config.ini";
			die();
		}
		$this->prefix = $settings['database']['prefix'];
		$this->tableprefix = $this->database.'.'.$this->prefix;
	}

	function getList($sql, $params = array(), $pg = 1, $limit = 0)
	{
		$offset = ($pg-1)*$limit;
		$rows = $this->query($sql, $params, $limit, $offset);
		return $rows;
	}

	public function query($sql, $sqlparams = array(), $limit = 0, $offset = 0)
	{
		$this->execute($sql, $sqlparams);
		$this->total_rows = $this->stmt->rowCount();
		$this->total_pages = 1;
		$this->start = 1;
		$this->end = $this->total_rows;
		if ( $limit > 0 )
		{
			$this->start = $offset + 1;
			$this->end = $offset + $limit;
			$this->total_pages = ceil($this->total_rows/$limit);
			$sql .= " LIMIT " . $offset . ", " . $limit;
			$this->execute($sql, $sqlparams);
		}
		if ( $this->end > $this->total_rows ) $this->end = $this->total_rows;
		if ( $this->total_pages == 0 ) $this->total_pages = 1;
		$rows = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
		return $rows;
	}
	
	public function execute($sql, $sqlparams = array())
	{
		$this->stmt = $this->conn->prepare($sql);
		if (!$this->stmt)
		{
			echo "<pre>";
			echo $sql;
			print_r($this->conn->errorInfo());
			exit;
		}
		if ( !empty($sqlparams) )
		{
			for($params=0; $params<count($sqlparams); $params++)
				$this->stmt->bindParam($params+1, $sqlparams[$params]);
		}
		$obj = $this->stmt->execute();
		if ( !$obj )
		{
			echo '<pre>';
			echo $sql;
			print_r($this->stmt->errorInfo());
			exit;
		}
		return $obj;
	}
	
	public function getPrefix()
	{
		return $this->tableprefix;
	}
	
	public function getTotal()
	{
		return $this->total_rows;
	}
	
	public function getPages()
	{
		return $this->total_pages;
	}
	
	public function getStart()
	{
		return $this->start;
	}
	
	public function getEnd()
	{
		return $this->end;
	}
	
	public function save($table, $fields, $id)
	{
		if ( $id == 0 )
		{
			$sql  = "INSERT INTO ".$this->tableprefix.$table." VALUES()";
			$this->execute($sql);
			$id = $this->conn->lastInsertId();
		}
		$params = array();
		$sql = '';
		foreach($fields as $k => $v)
		{
			if ( $sql .= '' ) $sql .= ', ';
			$sql .= '`' . $k . '` = ?';
			$params[] = $v['value'];
		}
		$sql = 'UPDATE '.$this->tableprefix.$table.' SET '.$sql.' WHERE id = ?';
		$params[] = $id;
		$this->execute($sql, $params);
		return $id;
	}
	
	public function getCategoryId($brand_id)
	{
		$category_id = 0;
		$sql = "SELECT category_id FROM ".$this->getPrefix()."brands WHERE id = ?";
		$params = array($brand_id);
		$rows = $this->getList($sql, $params);
		if ( count($rows) > 0 )
			$category_id = $rows[0]['category_id'];
		return $category_id;
	}
}

class request
{
	protected $request;
	public function __construct()
	{
		if ( $this->method() == 'GET' )
			$this->request = $_GET;
		if ( $this->method() == 'POST' )
			$this->request = $_POST;
		$this->request = $_REQUEST;
		$_GET		= array();
		$_POST		= array();
		$_REQUEST	= array();
	}
	
	public function request()
	{
		return $this->request;
	}
	
	public function get($variable, $value = '')
	{
		$return = $value;
		if ( isset($this->request[$variable]) ) $return = $this->request[$variable];
		return $return;
	}

	public function set($variable, $value)
	{
		$this->request[$variable] = $value;
	}
	
	public function method()
	{
		return $_SERVER['REQUEST_METHOD'];
	}
}

class session
{
	public function get($variable, $value = '')
	{
		$return = $value;
		if ( isset($_SESSION[$variable]) ) $return = $_SESSION[$variable];
		return $return;
	}
	
	public function set($variable, $value)
	{
		$_SESSION[$variable] = $value;
	}
}

class response
{
	public function redirect($url)
	{
		header("Location: $url");
		exit;
	}
}

class excel
{
	function export2excelcommon($sheet_title, $xlsfile, $xlstitle, $colary, $rows)
	{
		global $objPHPExcel;
		$sheet_title = substr($sheet_title, 0, 30);
		$alphaend = 'A';
		$x=0;
		foreach($colary as $col)
		{
			$cols[$alphaend] = isset($col['width']) ? $col['width'] : '10';
			$x++;
			if ( $x != count($colary) )
				$alphaend++;
		}

		require_once  'phpexcel/Classes/PHPExcel.php';
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->getProperties()->setCreator($xlstitle)
								 ->setLastModifiedBy($xlstitle)
								 ->setTitle($xlstitle)
								 ->setSubject($xlstitle)
								 ->setDescription($xlstitle)
								 ->setKeywords($xlstitle)
								 ->setCategory($xlstitle);
		$this->colwidth($cols);
		$no=1;
		$alpha = 'A';
		foreach($colary as $col)
		{
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpha.$no, $col['caption']);
			$alpha++;
		}

		// data
		foreach($rows as $row)
		{
			$no++;
			$alpha = 'A';
			foreach($colary as $key => $col)
			{
				$prefix = isset($col['prefix']) ? $col['prefix'] : '';
				$value = $row[$key];
				if ( isset($col['round']) ) $value = number_format($value, $col['round']);
				$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpha.$no, $prefix.$value);
				$alpha++;
			}
		}
		$no++;

		/* write to Excel sheet */
		$objPHPExcel->getActiveSheet()->setTitle($sheet_title);
		$objPHPExcel->setActiveSheetIndex(0);

		// Redirect output to a client’s web browser (Excel2007)
		// header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$xlsfile.'.xlsx"');
		header('Cache-Control: max-age=0');
		// If you're serving to IE 9, then the following may be needed
		header('Cache-Control: max-age=1');

		// If you're serving to IE over SSL, then the following may be needed
		header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
		header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
		header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
		header ('Pragma: public'); // HTTP/1.0

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');
		exit;
	}
	
	function export2excel($sheet_title, $xlsfile, $xlstitle, $colary, $rows)
	{
		global $objPHPExcel;
		$sheet_title = substr($sheet_title, 0, 30);
		$alphaend = 'A';
		$x=0;
		foreach($colary as $col)
		{
			$cols[$alphaend] = isset($col['width']) ? $col['width'] : '10';
			$x++;
			if ( $x != count($colary) )
				$alphaend++;
		}

		require_once  'phpexcel/Classes/PHPExcel.php';
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->getProperties()->setCreator($xlstitle)
								 ->setLastModifiedBy($xlstitle)
								 ->setTitle($xlstitle)
								 ->setSubject($xlstitle)
								 ->setDescription($xlstitle)
								 ->setKeywords($xlstitle)
								 ->setCategory($xlstitle);
		$this->colwidth($cols);
		$style = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			)
		);
		$cssStyle = array( 'font'  => array('color' => array('rgb' => 'FF0000')));
		$no=1;
		$range = 'G'.$no.':J'.$no;
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells($range);
		$objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$no, "Below 3 Months");
		$objPHPExcel->setActiveSheetIndex(0)->getStyle($range)->applyFromArray($style);
		$objPHPExcel->getActiveSheet()->getStyle($range)->applyFromArray($cssStyle);

		$range = 'K'.$no.':M'.$no;
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells($range);
		$objPHPExcel->setActiveSheetIndex(0)->setCellValue('K'.$no, "3 Months - 6 Months");
		$objPHPExcel->setActiveSheetIndex(0)->getStyle($range)->applyFromArray($style);
		$objPHPExcel->getActiveSheet()->getStyle($range)->applyFromArray($cssStyle);
		
		$range = 'N'.$no.':P'.$no;
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells($range);
		$objPHPExcel->setActiveSheetIndex(0)->setCellValue('N'.$no, "6 Months - 11 Months");
		$objPHPExcel->setActiveSheetIndex(0)->getStyle($range)->applyFromArray($style);
		$objPHPExcel->getActiveSheet()->getStyle($range)->applyFromArray($cssStyle);
		
		$range = 'Q'.$no.':S'.$no;
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells($range);
		$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Q'.$no, "Above 11 Months");
		$objPHPExcel->setActiveSheetIndex(0)->getStyle($range)->applyFromArray($style);
		$objPHPExcel->getActiveSheet()->getStyle($range)->applyFromArray($cssStyle);
		
		$objPHPExcel->getActiveSheet()->getProtection()->setPassword('derestrop');
		$objPHPExcel->getActiveSheet()->getProtection()->setSheet(true);
		$alpha = 'A';
		$no++;
		foreach($colary as $col)
		{
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpha.$no, $col['caption']);
			$alpha++;
		}
		$objPHPExcel->getActiveSheet()->getStyle('A'.$no.':'.$alpha.$no)->applyFromArray($cssStyle);

		// data
		foreach($rows as $row)
		{
			$no++;
			$alpha = 'A';
			foreach($colary as $key => $col)
			{
				$prefix = isset($col['prefix']) ? $col['prefix'] : '';
				$value = $row[$key];
				if ( isset($col['round']) ) $value = number_format($value, $col['round']);
				$objPHPExcel->setActiveSheetIndex(0)->setCellValue($alpha.$no, $prefix.$value);
				$alpha++;
			}
			$objPHPExcel->getActiveSheet()->getStyle('F'.$no.':S'.$no)->getProtection()->setLocked(PHPExcel_Style_Protection::PROTECTION_UNPROTECTED);
			$objPHPExcel->getActiveSheet()->getStyle('A'.$no.':E'.$no)->applyFromArray($cssStyle);
		}
		$no++;
		$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$no, 'end');
		$objPHPExcel->getActiveSheet()->getStyle('A'.$no)->applyFromArray($cssStyle);

		/* write to Excel sheet */
		$objPHPExcel->getActiveSheet()->setTitle($sheet_title);
		$objPHPExcel->setActiveSheetIndex(0);

		// Redirect output to a client’s web browser (Excel2007)
		// header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$xlsfile.'.xlsx"');
		header('Cache-Control: max-age=0');
		// If you're serving to IE 9, then the following may be needed
		header('Cache-Control: max-age=1');

		// If you're serving to IE over SSL, then the following may be needed
		header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
		header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
		header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
		header ('Pragma: public'); // HTTP/1.0

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');
		exit;
	}

	function cellColor($cells,$color)
	{
		global $objPHPExcel;
		$objPHPExcel->getActiveSheet()->getStyle($cells)->getFill()
		->applyFromArray(array('type' => PHPExcel_Style_Fill::FILL_SOLID,
		'startcolor' => array('rgb' => $color)
		));
	}

	function colwidth($cols)
	{
		global $objPHPExcel;
		foreach($cols as $col => $width)
		{
			$objPHPExcel->getActiveSheet()->getColumnDimension($col)->setWidth($width);
		}
	}
	function setborder($cells)
	{
		global $objPHPExcel, $no;
		$styleArray = array(
			'borders' => array(
				'bottom' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			),
			'alignment' => array(
				'vertical' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			)
		);
		$objPHPExcel->getActiveSheet()->getStyle($cells)->applyFromArray($styleArray);
		$styleArray = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			)
		);
	}
}

class lib
{
	public function view_caption($name, $field, $ob, $ot)
	{
		global $web;
		if ( $ot == "asc" ) $oa = "desc"; else $oa = "asc";
		$return_str = "";
		$return_str .= "<strong>";
		if ( $field != "" )
		{
			$return_str .= "<a href=\"JavaScript:sortit('".$field."','";
			if ( $ob == $field ) $return_str .= $oa; else $return_str .= "asc";
			$return_str .= "');\" class=\"menu\">";
		}
		$return_str .= $name;
		if ( $field != "" )
		{
			$return_str .= "</a>";
			if ( $ob == $field ) $return_str .= "&nbsp;<img src=\"".$web['themepath']."/assets/img/".$oa.".gif\">";
		}
		$return_str .= "</strong>";
		return $return_str;
	}

	public function format_date($dt, $format = 'd-m-Y')
	{
		$dta = explode(' ', $dt);
		$dtary = explode('-', $dta[0]);
		return date($format, mktime(0, 0, 0, $dtary[1], $dtary[2], $dtary[0]));
	}
	
	public function send_mail($fl, $to, $from, $subj, $fldname, $fldvalue, $debug = false)
	{
		$hd = "From: " . $from . "\r\nContent-type: text/html\r\n";
		$fd = fopen($fl, "r");
		$tot = "";
		while ( $m = fgets($fd, 4096) ) $tot .= $m;
		fclose($fd);
		preg_match_all('/##(.*?)##/', $tot, $fields);
		for($x=0; $x<count($fields[1]); $x++)
		{
			$tot = str_replace("##" . $fields[1][$x] . "##", $fldvalue[$fields[1][$x]], $tot);
		}
		if ( $debug == true ) { echo $tot; exit; }
		@mail($to, $subj, $tot, $hd);
	}
	
	public function get_remote()
	{
		return $_SERVER['REMOTE_ADDR'];
	}
	
	public function getdropdown($table, $field1, $field2, $value, $condition = '', $params = array())
	{
		global $app;
		$str = '';
		if ( !is_array($field2) ) $field2 = array($field2);
		$sql  = "SELECT ".$field1.", ".implode(", ", $field2)." FROM ".$app->getPrefix().$table;
		if ( $condition != '' )
			$sql .= ' '.$condition;
		$rows = $app->getList($sql, $params);
		foreach($rows as $row)
		{
			$field2_value = '';
			foreach($field2 as $field)
			{
				if ( !empty($field2_value) ) $field2_value .= ' ';
				$field2_value .= $row[$field];
			}
			$str .= '<option value="'.$row[$field1].'"';
			if ( $row[$field1] == $value ) $str .= ' selected="selected"';
			$str .= '>'.$field2_value.'</option>';
			$str .= "\r\n";
		}
		return $str;
	}
	
	public function getdropdownarray($items, $value)
	{
		$str = '';
		foreach($items as $key => $item)
		{
			$str .= '<option value="'.$key.'"';
			if ( $key == $value ) $str .= ' selected="selected"';
			$str .= '>'.$item.'</option>';
			$str .= "\r\n";
		}
		return $str;
	}
	
	function imgrepair($str)
	{
		return str_replace(" ", "+", $str);
	}
	
	public function writebase64img($imgstr, $imgfile, $imgtype = 'jpeg')
	{
		$imgstr = str_replace('data:image/'.$imgtype.';base64,', '', $imgstr);
		$imgstr = base64_decode($imgstr);
		$fd = fopen($imgfile, "w");
		fwrite($fd, $imgstr);
		fclose($fd);
	}
	
	public function amountinword($amount)
	{
		$number = $amount;
		$no = round($number);
		$point = round($number - $no, 2) * 100;
		$hundred = null;
		$digits_1 = strlen($no);
		$i = 0;
		$str = array();
		$words = array('0' => '', '1' => 'one', '2' => 'two',
		'3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
		'7' => 'seven', '8' => 'eight', '9' => 'nine',
		'10' => 'ten', '11' => 'eleven', '12' => 'twelve',
		'13' => 'thirteen', '14' => 'fourteen',
		'15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
		'18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
		'30' => 'thirty', '40' => 'forty', '50' => 'fifty',
		'60' => 'sixty', '70' => 'seventy',
		'80' => 'eighty', '90' => 'ninety');
		$digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
		while ($i < $digits_1) {
			$divider = ($i == 2) ? 10 : 100;
			$number = floor($no % $divider);
			$no = floor($no / $divider);
			$i += ($divider == 10) ? 1 : 2;
			if ($number) {
				$plural = (($counter = count($str)) && $number > 9) ? 's' : null;
				$hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
				$str [] = ($number < 21) ? $words[$number] .
				" " . $digits[$counter] . $plural . " " . $hundred
				:
				$words[floor($number / 10) * 10]
				. " " . $words[$number % 10] . " "
				. $digits[$counter] . $plural . " " . $hundred;
			} else $str[] = null;
		}
		$str = array_reverse($str);
		$result = implode('', $str);
		$points = ($point) ?
		"." . $words[$point / 10] . " " . 
			  $words[$point = $point % 10] : '';
		//return "Rupees ". $result . $points . " Paise Only";
		return "Rupees ". $result . "only";
	}
	
	function getYoutubeImage($video_url)
	{
		if ( empty($video_url) )
			return '';
		$ary = explode('v=', $video_url);
		$video_id = $ary[count($ary)-1];
		$dev_key = "AIzaSyCeHOJx90gDytpGT7oboH-ZhRkR_JmaWzs";
		$url = "https://www.googleapis.com/youtube/v3/videos?part=snippet,contentDetails,statistics&id=".$video_id."&key=".$dev_key;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		$output = curl_exec($ch);
		curl_close($ch);
		$video_data = json_decode($output, 'assos');
		$retary['video_image'] = '';
		$retary['video_title'] = '';
		if ( isset($video_data['items'][0]['snippet']['thumbnails']['medium']['url']) )
			$retary['video_image'] = $video_data['items'][0]['snippet']['thumbnails']['medium']['url'];
		if ( isset($video_data['items'][0]['snippet']['title']) )
			$retary['video_title'] = $video_data['items'][0]['snippet']['title'];
		$retary['video_code'] = $video_id;
		return $retary;
	}

	function listimg($img, $web, $size = 30)
	{
		$image = $web['themepath'].'/assets/img/noimg.jpg';
		if ( !empty($img) && file_exists($web['filepath'].$img) )
			$image = $web['fileurl'].$img;
		$html  = '';
		$html .= '<img src="'.$image.'" style="width: auto; height: '.$size.'px;"  />';
		return $html;
	}

	function showimg($field, $web, $size = 100, $others = [])
	{
		if ( isset($web['id']) && empty($web['id']) ) return '';
		$img = $web['fields'][$field]['value'];
		$image = $web['themepath'].'/assets/img/noimg.jpg';
		if ( !empty($img) && file_exists($web['filepath'].$img) )
			$image = $web['fileurl'].$img;
		$astart = '<a href="'.$image.'" target="_blank">';
		$aend = '</a>';
		if ( !empty($others) )
		{
			$ary = explode('.', $img);
			$image = $web['themepath'].'/assets/img/'.$ary[count($ary)-1].'.png';
		}
		$html  = '';
		$html .= '<div class="form-group">';
		$html .= '	<div class="col-lg-10 col-lg-offset-2">';
		$html .= '		'.$astart.'<img src="'.$image.'" style="width: auto; height: '.$size.'px;"  />'.$aend;
		$html .= '		<input type="hidden" name="'.$field.'" id="'.$field.'" value="'.$img.'" />';
		$html .= '	</div>';
		$html .= '</div>';
		return $html;
	}

	function isSecure() {
		return
			(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
			|| $_SERVER['SERVER_PORT'] == 443;
	}
}

function createthumb($image, $newimage, $resizew=80, $resizeh = 80)
{
	$size=GetimageSize($image);
	$ow = $size[0];
	$oh = $size[1];
	$oh=round($resizew*$oh/$ow);
	$ow = $resizew;
	if ( $oh > $resizeh )
	{
		$ow=round($resizeh*$ow/$oh);
		$oh = $resizeh;
	}
	if ( preg_match('/\.jpg/i', $newimage) )
		$images_orig = ImageCreateFromJPEG($image);
	if ( preg_match('/\.jpeg/i', $newimage) )
		$images_orig = ImageCreateFromJPEG($image);
	if ( preg_match('/\.png/i', $newimage) )
		$images_orig = ImageCreateFromPNG($image);
	if ( preg_match('/\.gif/i', $newimage) )
		$images_orig = ImageCreateFromGIF($image);
	$photoX = ImagesX($images_orig);
	$photoY = ImagesY($images_orig);
	$images_fin = ImageCreateTrueColor($ow, $oh);
	if ( preg_match('/\.png/i', $newimage) )
	{
		imagealphablending($images_fin, false);
		imagesavealpha($images_fin, true);
	}
	ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $ow+1, $oh+1, $photoX, $photoY);
	$imgdone = false;
	if ( !$imgdone && preg_match('/\.webp/i', $newimage) )
	{
		$imgdone = true;
		imagewebp($images_fin, $newimage);
	}
	if ( !$imgdone && preg_match('/\.png/i', $newimage) )
	{
		$imgdone = true;
		imagepng($images_fin, $newimage);
	}
	if ( !$imgdone && (preg_match('/\.jpg/i', $newimage) || preg_match('/\.jpeg/i', $newimage)) )
	{
		$imgdone = true;
		ImageJPEG($images_fin, $newimage);
	}
	if ( !$imgdone && preg_match('/\.gif/i', $newimage) )
	{
		$imgdone = true;
		imagegif($images_fin, $newimage);
	}
	ImageDestroy($images_orig);
	ImageDestroy($images_fin);
}

$request = new request();
$response = new response();
$session = new session();
$lib = new lib();
$app = new app();
$excel = new excel();

//require_once(dirname(__FILE__).'/../../../lib/Twig/lib/Twig/Autoloader.php');
require_once(dirname(__FILE__).'/Twig/lib/Twig/Autoloader.php');
Twig_Autoloader::register();
if ( !isset($template_path) )
	$template_path = array(APP_PATH.'/templates', APP_PATH.'/admin/templates');
if ( !isset($cache_path) )
	$cache_path = APP_PATH.'/admin/cache';
$loader = new Twig_Loader_Filesystem($template_path);
$twig = new Twig_Environment($loader, array(
	'debug' => true,
	'cache' => $cache_path,
));
$twig->addExtension(new Twig_Extension_Debug());
$twig->addFunction(new Twig_SimpleFunction('__', '__'));
$twig->addGlobal('request', $request);
$twig->addGlobal('response', $response);
$twig->addGlobal('session', $session);
$twig->addGlobal('lib', $lib);
$twig->addGlobal('app', $app);

$twig->registerUndefinedFunctionCallback(function ($name) {
    if (function_exists($name)) {
        return new Twig_Function_Function($name);
    }

    return false;
});
