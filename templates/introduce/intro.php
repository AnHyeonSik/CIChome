<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php'; // this is common library
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1182, initial-scale=1">
    <title>컴퓨터정보통신공학과</title>
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/default.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/side.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/intro.css">
    
</head>
<body>

<!-- End Of Footer -->
<?Header::render();?>
<!-- START Content-->

<div class="main-container">
    <div class="intro-content" >
    	<div class="main_text">
		 <h3>학과소개</h3>
		<p class="mr20 pdb font13 tline2 style6">홍익대학교 과학기술대학 컴퓨터정보통신공학과는 1989년 세종 캠퍼스 설립과 함께 전자전산기공학과로 출발하였다. 1995년 학부제 실시로 전기과와 통합하여 전자·전기·컴퓨터공학부로 개편되면서 전자, 전기, 컴퓨터정보통신의 3개 전공으로 운영되어왔다. 2004년 공학교육인증제가 시행되면서 전공의 효율적인 운영을 위하여 2005학년도부터 전자·전기공학과와 컴퓨터정보통신공학과로 분리하였고,  전자공학 프로그램, 전기공학 프로그램, 컴퓨터정보통신공학 프로그램은 한국공학교육인증원으로부터 2년간 공학교육 인증을 받은 상태이다. 컴퓨터정보통신공학 프로그램은 컴퓨터 및 정보통신 분야의 기술발전 추세에 따른 시대적 요구에 부응하여, 과목신설과 이수체계 재정립, 설계과목 강화, 신임교수 충원, 체계적인 학생지도 등 프로그램의 순환형 자율개선시스템 구축을 통하여 이 분야의 준비된 전문인력의 양성 및 배출을 위해서 노력해 오고 있다.<br><br>홍익대학교 과학기술대학 컴퓨터정보통신공학 프로그램은 공학교육인증 프로그램과 일반 프로그램을 함께 운영한다. 일반 프로그램을 이수한 학생들에게는 “컴퓨터정보통신공학 공학사” (영문명 Bachelor of Science in Engineering)이 수여되며, 공학교육인증 프로그램을 이수한 학생들에게는 “컴퓨터정보통신공학 심화과정 공학사” (영문명 Bachelor of Science in Computer and Information Communications Engineering) 학위가 수여되어 일반 프로그램 이수자들과 명확히 구별된다. 학위명은 졸업장과 성적표에 모두 명기된다.</p>


	</div>
    </div>
    	<?Side::render('intro');?>
</div>
<!-- End Of Content -->



<!-- START Footer-->
<? Footer::render(); ?>

<script src="<?echo HOME_PATH?>/assets/vendor/jquery-1.11.3.min.js"></script>
<script src="<?echo HOME_PATH?>/assets/js/header.js"></script>
<script>
	$("#side-menu-item-c").addClass("hover");
</script>
<!-- End Of Footer-->
</body>
</html>