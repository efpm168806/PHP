<?php
	switch ($_GET["month"]) {
	case "1月":
		echo "1月<br><br>";
		echo "<body background='http://www.ezwinpoker.com/wp-content/uploads/2016/02/1%E6%9C%88.jpg'>";
		break;
	case "2月":
		echo "2月<br><br>";
		echo "<body background='http://www.kodomonoshiro.com/contents/upload-images/201381217551.jpg'>";
		break;
	case "3月":
		echo "3月<br><br>";
		echo "<body background='http://占い最新トレンドニュースサイト.jp/wp-content/uploads/2015/01/sa0.jpg'>";
		break;
	case "4月":
		echo "4月<br><br>";
		echo "<body background='http://blog-imgs-90.fc2.com/s/i/z/sizuko/20160331200356e70.png'>";
		break;
	case "5月":
		echo "5月<br><br>";
		echo "<body background='http://2.blog.xuite.net/2/0/b/d/240381152/blog_4071595/txt/222683119/5.jpg'>";
		break;
	case "6月":
		echo "6月<br><br>";
		echo "<body background='http://japan.people.com.cn/NMediaFile/2015/0604/MAIN201506041344000384557796769.jpg'>";
		break;
	case "7月":
		echo "7月<br><br>";
		echo "<body background='http://misaki.rdy.jp/illust/kisetu/summer/title/sozai/7x203.jpg'>";
		break;
	case "8月":
		echo "8月<br><br>";
		echo "<body background='http://komae-kosodate.net/article/2016080100231/files/illust4292.png'>";
		break;
	case "9月":
		echo "9月<br><br>";
		echo "<body background='http://komae-kosodate.net/article/2016082200014/files/9.png'>";
		break;
	case "10月":
		echo "10月<br><br>";
		echo "<body background='http://www.2016年占い.jp/wp-content/uploads/10x103.jpg'>";
		break;
	case "11月":
		echo "11月<br><br>";
		echo "<body background='http://www.wanpug.com/illust/illust4298.png'>";
		break;

	default:
		echo "12月<br><br>";
		echo "<body background='http://moriokact.net/illust4300.png%2012gatu.png'>";
		break;
		
}

$datetime = new Datetime("now",new DateTimeZone('Asia/Taipei')); 
$s_date="now";
$e_date="2017-12-31 24:0:0";

echo "現在台灣時間：";
echo $datetime->format('Y-m-d')." ";
echo $datetime->format("H:i:s")." ";
echo $datetime->format("T")."<br><br>";

echo "2017年12月31日是世界末日，還距離現在相差:"."<br>";
$second1=floor((strtotime($e_date)-strtotime($s_date)));
echo floor($second1/86400).'天';
echo floor(($second1%86400)/3600).'小時';
echo floor((($second1%86400)%3600)/60).'分鐘';
echo floor((($second1%86400)%3600)%60)."秒<br>";








?>
