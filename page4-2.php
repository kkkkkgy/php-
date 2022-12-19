<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>금주의 학식 식단</title>
</head>
<style>
    img{
        padding-left: 20px;
    }
    ul{
        text-align: center;
        padding: 10px;
    }
    li{
        list-style: none;
        display: inline;
        padding: 0 0 50px 50px;
        font-size: 20px;
    }
    main{
        font-size: 20px;
    }
    #review{
        width : 500px;
        height : 500px;
    }
    nav{
    	background-color : deepskyblue;
    }
    header h1{
        padding-right: 5%;
    }
    aside{
        text-align: right;
    }
</style>
<script>

</script>
<body>
<header><!--<a href="메인 html" --><img src="./img/symbol.jpg" width="80" align="left">
    <h1 align="center"><!--<a href="메인 html" -->금주의 학식 식단</h1> <h5 align = "right"><a href="login.html"> 로그인</a> | <a href="signup.html"> 회원가입</a></h5>
</header>
<nav>
    <ul>
        <li>맛집 리스트</li>
        <li>|</li>
        <li>리뷰</li>
        <li>|</li>
        <li> <a href="page5.html">맛집제보</a></li>
    </ul>
</nav><!-- 수정x-->


<?php

?>

<h2>학식정보</h2>

<style>

table{padding:1em;}

tr{border:1px solid #ccc;}

</style>

<?php

include('simple_html_dom.php');

 

$html = file_get_html('https://www.dongyang.ac.kr/dongyang/130/subview.do');

 
echo '<table>';
echo '<thead><tr><th scope="col">요일</th><th scope="col">식당구분</th><th scope="col">식단내용</th></thead>';
foreach($html->find('.table_1 tbody tr') as $e){
	
	if (strpos($e->innertext, '학생식당')>-1){
		echo '<tr>';
		echo '<td>'.$e->find('th',0)->innertext.'</td>';	
		foreach($e->find('td') as $item){
			echo '<td>'.$item->innertext.'</td>';
		}
		echo '</tr>';
	}
}
echo '</table>';

?>