<?php
$S_KEY = 'zuinanji!@#123';

//$k = 201612092025
//$t = 84a6e8cb5859af63ae772aff66643070
//默认值

$k = $_GET['k'];
$t = $_GET['t'];

$check = false;

if($t == md5($k.$S_KEY)){
	$check = true;
}

?>


<!DOCTYPE html>
<html class="VACT_body_page_text1"   >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=320,minimum-scale=0.5, maximum-scale=5, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="   "/> <!--SEO -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>醉南鸡产品溯源查询系统</title>
    <style>
	
		/*全局通用函数*/#body_loading > div { background-color: #333;height: 100%;width: 6px;display: inline-block;margin-right: 5px;-webkit-animation: stretchdelay 1.2s infinite ease-in-out;animation: stretchdelay 1.2s infinite ease-in-out;}#body_loading .load_rect2 { -webkit-animation-delay: -1.1s;animation-delay: -1.1s;}#body_loading .load_rect3 { -webkit-animation-delay: -1s;animation-delay: -1s;}#body_loading .load_rect4 { -webkit-animation-delay: -0.9s;animation-delay: -0.9s;}@-webkit-keyframes stretchdelay { 0%, 40%, 100% {  -webkit-transform: scaleY(0.4);} 20% {  -webkit-transform: scaleY(1);}}@keyframes stretchdelay { 0%, 40%, 100% {  transform: scaleY(0.4); -webkit-transform: scaleY(0.4);} 20% {  transform: scaleY(1); -webkit-transform: scaleY(1);}}#use_template { width: 183px;height: 171px;position: fixed;background-image: url();top: 0;right: 30px;border: 0;}#use_template:hover { background-position: 0 -171px;}#gdt-audit { width: 100%;height: 100%;background-color: #ccc;background-color: rgba(255, 255, 255, 0.6);position: fixed;top: 0;left: 0;z-index: 9999999998;}#gdt-audit .tips { text-align: center;font-size: 14px;font-weight: bold;color: #333;}#gdt-audit .tips img { width: 30px;height: 30px;margin-bottom: 5px;}#gdt-audit .tipsClose { width: 16px;height: 16px;top: 10px;right: 10px;background-size: 16px 16px;z-index: 9999999999;position: absolute;cursor: pointer;background-image: url();}#preview-tips { background: #FEFEDA;color: #333;border: 1px solid #EDE09A;padding: 5px;text-align: center;line-height: 30px;}#preview-tips .bold { color: #FE7119;}#preview-tips img { vertical-align: middle;}/**页面编辑模式基本元素**/.VACT_headerWrapper,.VACT_mainWrapper,.VACT_footererWrapper { margin: 0 auto;position: relative;_overflow: hidden;}.VACT_main { position: relative;margin: 0 auto;}.VACT_inner { position: relative;height: auto;}.VACT_mobile .VACT_mainWrapper { overflow-x: hidden;}.VACT_mobile .VACT_main { width: 320px;margin: 0 auto;}/* 和bootstrap一致，以保证编辑器中效果和预览效果一致 */h1,h2,h3,h4,h5,h6 { margin: 10px 0;font-family: inherit;font-weight: bold;line-height: 20px;color: inherit;text-rendering: optimizelegibility;}h1,h2,h3 { line-height: 40px;}h1 { font-size: 38.5px;}h2 { font-size: 31.5px;}h3 { font-size: 24.5px;}h4 { font-size: 17.5px;}h5 { font-size: 14px;}h6 { font-size: 11.9px;}p { margin: 0 0 10px;}button:focus { outline: none;}button::-moz-focus-inner { border: none;}ul,ol { padding: 0;margin: 0 0 10px 25px;}li { line-height: 20px;}/* gaston为导入模板用 */div .emptyContainer { background-color: transparent;border-radius: 0;-webkit-border-radius: 0;-moz-border-radius: 0;behavior: url(/edit/initjs/pie.php);position: relative;z-index: 0;_border-radius: none;border: 0px;}body { background-color: none;font-size: 14px;margin: 0px;}body,input,button,select,textarea { font-family: "Heiti SC","DroidSans","微软雅黑", arial, sans-serif;}body img { border: 0;}a:link,a:visited,a:hover,a:active { text-decoration: none;}.v_basic_color_a1 { color: #fdfdfc;}.v_basic_color_a2 { color: #d1cdc2;}.v_basic_color_a3 { color: #a69e87;}.v_basic_color_a4 { color: #726b55;}.v_basic_color_a5 { color: #383429;}.v_basic_color_b1 { color: #ffe0b8;}.v_basic_color_b2 { color: #ffb452;}.v_basic_color_b3 { color: #eb8500;}.v_basic_color_b4 { color: #854b00;}.v_basic_color_b5 { color: #1f1100;}.v_basic_color_c1 { color: #c4cdd4;}.v_basic_color_c2 { color: #899aa9;}.v_basic_color_c3 { color: #566776;}.v_basic_color_c4 { color: #2b343b;}.v_basic_color_c5 { color: #000000;}.v_basic_color_d1 { color: #d7dbdf;}.v_basic_color_d2 { color: #9fa9b2;}.v_basic_color_d3 { color: #687683;}.v_basic_color_d4 { color: #3b434a;}.v_basic_color_d5 { color: #0e0f11;}.v_basic_color_e1 { color: #fcd8c5;}.v_basic_color_e2 { color: #f69864;}.v_basic_color_e3 { color: #e85a0d;}.v_basic_color_e4 { color: #873408;}.v_basic_color_e5 { color: #270f02;}.VACT_main_page_index_box{    ;    background-image:none;    ;    ;    *zoom:1;}.VACT_main_page_index{    ;    background-image:none;    ;    ;    ;    height: 562px;    width: 320px;    *zoom:1;}.VACT_main_page_index .VACT_inner{     height: 562px;    width: 320px;}.VACT_main_page_text1_box{    background-color: rgba(0, 0, 0, 0);    background-image:none;    background-repeat: repeat;    background-position: top center;    *zoom:1;}.VACT_main_page_text1{    background-color: rgba(0, 0, 0, 0);    background-image:none;    background-repeat: no-repeat;    background-position: center center;    ;    height: 1328px;    width: 320px;    *zoom:1;}.VACT_main_page_text1 .VACT_inner{     height: 1328px;    width: 320px;}.VACT_main_page_color_box{    ;    background-image:none;    ;    ;    *zoom:1;}.VACT_main_page_color{    ;    background-image:none;    ;    ;    ;    ;    ;    *zoom:1;}.VACT_main_page_color .VACT_inner{     ;    ;}.VACT_main_page_repeat_box{    ;    background-image:none;    ;    ;    *zoom:1;}.VACT_main_page_repeat{    ;    background-image:none;    ;    ;    ;    ;    ;    *zoom:1;}.VACT_main_page_repeat .VACT_inner{     ;    ;}.VACT_main_page_attachment_box{    ;    background-image:none;    ;    ;    *zoom:1;}.VACT_main_page_attachment{    ;    background-image:none;    ;    ;    ;    ;    ;    *zoom:1;}.VACT_main_page_attachment .VACT_inner{     ;    ;}.VACT_main_page_position_box{    ;    background-image:none;    ;    ;    *zoom:1;}.VACT_main_page_position{    ;    background-image:none;    ;    ;    ;    ;    ;    *zoom:1;}.VACT_main_page_position .VACT_inner{     ;    ;}.VACT_main_page_size_box{    ;    background-image:none;    ;    ;    *zoom:1;}.VACT_main_page_size{    ;    background-image:none;    ;    ;    ;    ;    ;    *zoom:1;}.VACT_main_page_size .VACT_inner{     ;    ;}.VACT_body_page_text1{     background-color: rgba(0, 0, 0, 0);    background-image:none;    background-attachment: scroll;    background-repeat: no-repeat;    background-position: top center;    background-size: cover;    *zoom:1;}
.v_image_style1 {
  opacity: ;
  border-color: #d7dbdf;
  border-width: 0px;
  border-style: solid;
  overflow: hidden;
}

.v_line_style1 .hr{
  	margin:0;
  	opacity: ;
  	height:0;
  	border:none;
  	border-bottom: 4px solid @v_basic_color_a2;
 }

.v_line_style2 .hr{
  	margin:0;
  	opacity: ;
  	width:0;
  	height: 100%;
  	border:none;
  	border-left: 4px solid @v_basic_color_a2;
  }


.v_line_style3 .hr{
  	margin:0;
  	opacity: ;
  	height:0;
  	border:none;
  	border-bottom: 4px dotted @v_basic_color_a2;
  }


.v_line_style4 .hr{
  	margin:0;
  	opacity: ;
  	width:0;
  	height: 100%;
  	border:none;
  	border-left: 4px dotted @v_basic_color_a2;
  }




.v_box_style1 { 
  border-color: #687683;
  border-width: 0px;
  background-color: #06c29c;
  -pie-background: #06c29c;
  border-style: solid;
  border-radius: 0px;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  position: relative;
  z-index: 0;
  _border-radius: none;
  behavior: url(/edit/initjs/pie.php);
  opacity: ;
}

.v_gallery_style1 {
  opacity: ;
}
.v_gallery_style1 ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
.v_gallery_style1 .i_gallery {
  position: relative;
  border: 0px solid #687683;
  border-radius: 0px;
}
.v_gallery_style1 .i_galleryPrev,
.v_gallery_style1 .i_galleryNext {
  width: 21px;
  height: 39px;
  display: block;
  background: url("/edit/resource/images/gallery_prev.png");
  position: absolute;
  top: 20%;
  left: 10px;
  cursor: pointer;
}
.v_gallery_style1 .i_galleryNext {
  background: url("/edit/resource/images/gallery_next.png");
  left: auto;
  right: 10px;
}
.v_gallery_style1 .i_galleryNav {
  width: 100%;
  position: absolute;
  text-align: center;
}
.v_gallery_style1 .i_galleryList {
  position: absolute;
  overflow: hidden;
}
.v_gallery_style1 .i_galleryList ul {
  width: 100%;
  height: 100%;
  position: absolute;
}
.v_gallery_style1 .i_galleryList li {
  width: 100%;
  height: 100%;
  position: absolute;
}
.v_gallery_style1 .i_galleryInfo {
  width: 100%;
  background: rgba(255, 255, 255, 0.6);
  position: absolute;
  bottom: 0;
  left: 0;
}
.v_gallery_style1 .i_galleryInfo h2 {
  height: 30px;
  margin: 0;
  padding: 0;
  color: #000;
  text-align: left;
  font-size: 12px;
  font-weight: bold;
  line-height: 30px;
  text-indent: 10px;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}
.v_gallery_style1 .i_galleryInfo p {
  height: 25px;
  margin: 0;
  padding: 0;
  color: #000;
  text-align: left;
  font-size: 12px;
  line-height: 25px;
  text-indent: 10px;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}
.v_gallery_style1 .i_galleryImg img {
  width: 100%;
}
.v_gallery_style1 .i_galleryThumbs {
  position: absolute;
  overflow: hidden;
}
.v_gallery_style1 .i_galleryThumbs li {
  float: left;
  cursor: pointer;
}
.v_gallery_style1 .i_galleryThumbs li.active {
  cursor: auto;
}
.v_gallery_style1 .i_galleryNav_point {
  display: none;
}
.v_gallery_style1 .i_galleryNav_point a {
  width: 8px;
  height: 8px;
  border: 1px solid #50524D;
  background-color: #50524D;
  border-radius: 8px;
  display: inline-block;
  margin: 10px 5px;
  text-indent: -9999px;
  cursor: pointer;
}
.v_gallery_style1 .i_galleryNav_point a.active {
  background: #BFBFBD;
  border: 1px solid #BFBFBD;
}
.v_gallery_style1 .i_galleryNav_line a {
  height: 5px;
  background: #7f7f7f;
  display: block;
  float: left;
  text-indent: -9999px;
  cursor: pointer;
}
.v_gallery_style1 .i_galleryNav_line a.active {
  background: #000;
}
.v_gallery_style1 .i_galleryNav_number a {
  width: 16px;
  height: 16px;
  background: #e0e0e0;
  border: 1px solid #fff;
  margin: 10px 5px;
  display: inline-block;
  text-align: center;
  line-height: 16px;
  cursor: pointer;
}
.v_gallery_style1 .i_galleryNav_number a.active {
  background: #999;
  font-weight: bold;
}


.v_paragraph_style1 {
  border-color: #687683;
  border-width: 0px;
  background-color: rgba(0,0,0,0);
  -pie-background: rgba(0,0,0,0);
  border-style: solid;
  border-radius: 0px;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  position: relative;
  z-index: 0;
  _border-radius: none;
  behavior: url(/edit/initjs/pie.php);
  opacity: ;
  line-height: 1.5em;
  word-break: break-all;
}
.v_paragraph_style1 p {
  margin: 0px !important;
}
.v_paragraph_style1 span {
  word-break: normal;
  word-wrap: break-word;
}



.v_button_style1 {
  opacity: ; 
  cursor: pointer;
  width: 100%;
  height: 100%;
  border: 0;
  padding: 0;
  color: #ffffff;
  border-radius: 0px;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  behavior: url(/edit/initjs/pie.php);
  position: relative;
  z-index: 0;
  _border-radius: none;
  font-size: 16px;
  font-weight: normal;
  font-style: normal;
  background: #06c29c;
  border-color: #06c29c;
  border-width: 0px;
  border-style: solid;
  background-size: cover;
  overflow: hidden;
  box-sizing: border-box;
}
.v_button_style1:hover {
  border: none;
  outline: none;
  box-shadow: 2px 2px 2px #ccc;
}

.v_button_style2 {
  opacity: ;
  cursor: pointer;
  padding: 0;
  color: #ffffff;
  border-radius: 0px;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  behavior: url(/edit/initjs/pie.php);
  position: relative;
  z-index: 0;
  _border-radius: none;
  font-size: 16px;
  font-weight: normal;
  font-style: normal;
  background: gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#06c29c));
  background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#06c29c));
  border: 0;
  border-color: #edeeef;
  border-width: 0px;
  border-style: solid;
  background-size: cover;
  overflow: hidden;
  box-sizing: border-box;
}
.v_button_style2:hover {
  border: none;
  outline: none;
  box-shadow: 2px 2px 2px #ccc;
}

.v_button_style3 {
  opacity: ;
  cursor: pointer;
  padding: 0;
  color: #fdfdfc;
  border-radius: 0px;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  behavior: url(/edit/initjs/pie.php);
  position: relative;
  z-index: 0;
  _border-radius: none;
  font-size: 16px;
  font-weight: normal;
  font-style: normal;
  background: #06c29c;
  border: 0;
  border-color: #edeeef;
  border-width: 0px;
  border-style: solid;
  background-size: cover;
  overflow: hidden;
  box-sizing: border-box;
}
.v_button_style3:hover {
  border: none;
  outline: none;
  box-shadow: 2px 2px 2px #ccc;
}

.v_button_style5 {
  opacity: ;
  cursor: pointer;
  padding: 0;
  color: #ffffff;
  border-radius: 0px;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  behavior: url(/edit/initjs/pie.php);
  position: relative;
  z-index: 0;
  _border-radius: none;
  font-size: 16px;
  font-weight: normal;
  font-style: normal;
  border: 0;
  background: #06c29c;
  border-color: #edeeef;
  border-width: 0px;
  border-style: solid;
  overflow: hidden;
  background-position: 10% center;
  background-repeat: no-repeat;
  background-size: 20px 20px;
  box-sizing: border-box;
  width: 100%;
  height: 100%;
}
.v_button_style5:hover {
  border: none;
  outline: none;
  box-shadow: 2px 2px 2px #ccc;
}




.v_connectqq_style1{
	width: 100%;
	height: 100%;
}

.v_maps_style1{
    position: absolute;
}
.maps_address{
    width: 100%;
    height: 30px;
    position: absolute;
    bottom: 0;
    left: 0;
    line-height: 30px;
    color: #fff;
    z-index: 999;
}
.maps_address h2{
    width: 100%;
    background: rgba(0, 0, 0, 0.5);
    padding: 0;
    margin: 0;
    position: absolute;
    bottom: 0;
    left: 0;
    line-height: 30px;
    text-indent: 10px;
    font-size: 14px;
}
.maps_address .maps_control_prev,
.maps_address .maps_control_next{
    width: 24px;
    height: 24px;
    position: absolute;
    top: 3px;
    display: block;
    cursor: pointer;
}
.maps_address .maps_control_prev{
    background: url(./platform/panel/images/maps/prev.png);
    right: 30px;
}
.maps_address .maps_control_next{
    background: url(./platform/panel/images/maps/next.png);
    right: 5px;
}

@-webkit-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) translatez(0) rotatey(0) scale(1);
    -webkit-animation-timing-function: ease-out;
  }
  40% {
    -webkit-transform: perspective(400px) translatez(150px) rotatey(170deg) scale(1);
    -webkit-animation-timing-function: ease-out;
  }
  50% {
    -webkit-transform: perspective(400px) translatez(150px) rotatey(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
  }
  80% {
    -webkit-transform: perspective(400px) translatez(0) rotatey(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
  }
  100% {
    -webkit-transform: perspective(400px) translatez(0) rotatey(360deg) scale(1);
    -webkit-animation-timing-function: ease-in;
  }
}
@-moz-keyframes flip {
  0% {
    -moz-transform: perspective(400px) translatez(0) rotatey(0) scale(1);
    -moz-animation-timing-function: ease-out;
  }
  40% {
    -moz-transform: perspective(400px) translatez(150px) rotatey(170deg) scale(1);
    -moz-animation-timing-function: ease-out;
  }
  50% {
    -moz-transform: perspective(400px) translatez(150px) rotatey(190deg) scale(1);
    -moz-animation-timing-function: ease-in;
  }
  80% {
    -moz-transform: perspective(400px) translatez(0) rotatey(360deg) scale(0.95);
    -moz-animation-timing-function: ease-in;
  }
  100% {
    -moz-transform: perspective(400px) translatez(0) rotatey(360deg) scale(1);
    -moz-animation-timing-function: ease-in;
  }
}
@keyframes flip {
  0% {
    transform: perspective(400px) translatez(0) rotatey(0) scale(1);
    animation-timing-function: ease-out;
  }
  40% {
    transform: perspective(400px) translatez(150px) rotatey(170deg) scale(1);
    animation-timing-function: ease-out;
  }
  50% {
    transform: perspective(400px) translatez(150px) rotatey(190deg) scale(1);
    animation-timing-function: ease-in;
  }
  80% {
    transform: perspective(400px) translatez(0) rotatey(360deg) scale(0.95);
    animation-timing-function: ease-in;
  }
  100% {
    transform: perspective(400px) translatez(0) rotatey(360deg) scale(1);
    animation-timing-function: ease-in;
  }
}
/*roll in start*/
@-webkit-keyframes rollin {
  0% {
    opacity: 0;
    -webkit-transform: translatex(-100%) rotate(-120deg);
  }
  100% {
    opacity: 1;
    -webkit-transform: translatex(0px) rotate(0deg);
  }
}
@-moz-keyframes rollin {
  0% {
    opacity: 0;
    -moz-transform: translatex(-100%) rotate(-120deg);
  }
  100% {
    opacity: 1;
    -moz-transform: translatex(0px) rotate(0deg);
  }
}
@-o-keyframes rollin {
  0% {
    opacity: 0;
    -o-transform: translatex(-100%) rotate(-120deg);
  }
  100% {
    opacity: 1;
    -o-transform: translatex(0px) rotate(0deg);
  }
}
@keyframes rollin {
  0% {
    opacity: 0;
    transform: translatex(-100%) rotate(-120deg);
  }
  100% {
    opacity: 1;
    transform: translatex(0px) rotate(0deg);
  }
}
.animated.rollin {
  -webkit-animation-name: rollin;
  -moz-animation-name: rollin;
  -o-animation-name: rollin;
  animation-name: rollin;
}
/*roll in end*/
/*slideInLeft start*/
@-webkit-keyframes slideinleft {
  0% {
    opacity: 0;
    -webkit-transform: translatex(-2000px);
  }
  100% {
    -webkit-transform: translatex(0);
  }
}
@-moz-keyframes slideinleft {
  0% {
    opacity: 0;
    -moz-transform: translatex(-2000px);
  }
  100% {
    -moz-transform: translatex(0);
  }
}
@-o-keyframes slideinleft {
  0% {
    opacity: 0;
    -o-transform: translatex(-2000px);
  }
  100% {
    -o-transform: translatex(0);
  }
}
@keyframes slideinleft {
  0% {
    opacity: 0;
    transform: translatex(-2000px);
  }
  100% {
    transform: translatex(0);
  }
}
.slideinleft {
  -webkit-animation-name: slideinleft;
  -moz-animation-name: slideinleft;
  -o-animation-name: slideinleft;
  animation-name: slideinleft;
}
/*slideInLeft end*/
/*slideInRight start*/
@-webkit-keyframes slideinright {
  0% {
    opacity: 0;
    -webkit-transform: translatex(2000px);
  }
  100% {
    -webkit-transform: translatex(0);
  }
}
@-moz-keyframes slideinright {
  0% {
    opacity: 0;
    -moz-transform: translatex(2000px);
  }
  100% {
    -moz-transform: translatex(0);
  }
}
@-o-keyframes slideinright {
  0% {
    opacity: 0;
    -o-transform: translatex(2000px);
  }
  100% {
    -o-transform: translatex(0);
  }
}
@keyframes slideinright {
  0% {
    opacity: 0;
    transform: translatex(2000px);
  }
  100% {
    transform: translatex(0);
  }
}
.slideinright {
  -webkit-animation-name: slideinright;
  -moz-animation-name: slideinright;
  -o-animation-name: slideinright;
  animation-name: slideinright;
}
/*slideInRight end*/
/*zoom start*/
@-webkit-keyframes animate-zoom {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.1);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
  }
}
@-moz-keyframes animate-zoom {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.1);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
  }
}
@-o-keyframes animate-zoom {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.1);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
  }
}
@keyframes animate-zoom {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.1);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
  }
}
.animated.animate-zoom {
  -webkit-animation-name: animate-zoom;
  -moz-animation-name: animate-zoom;
  -o-animation-name: animate-zoom;
  animation-name: animate-zoom;
}
/*zoom end*/
/*reduce start*/
@-webkit-keyframes animate-reduce {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
  }
}
@-moz-keyframes animate-reduce {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
  }
}
@-o-keyframes animate-reduce {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
  }
}
@keyframes animate-reduce {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
  }
}
.animated.animate-reduce {
  -webkit-animation-name: animate-reduce;
  -moz-animation-name: animate-reduce;
  -o-animation-name: animate-reduce;
  animation-name: animate-reduce;
}
/*reduce end*/
.v_mobileSchemeNav_style1 {
  /*索引偶数0开始*/
  /*索引奇数1开始*/
  /*bottomSchemeNav*/
  /*放大起始位置*/
  /*缩小*/
  /*放大终点位置*/
  /*左侧进入*/
  /*右侧进入*/
  /*通用动画*/
}
.v_mobileSchemeNav_style1 .clear:after {
  content: ".";
  display: block;
  height: 0;
  clear: both;
  visibility: hidden;
}
.v_mobileSchemeNav_style1 .clear {
  zoom: 1;
  display: block;
}
.v_mobileSchemeNav_style1 .mobile-block-menu {
  width: 252px;
  font-size: 16px;
  margin: 0;
  padding: 0;
}
.v_mobileSchemeNav_style1 .mobile-block-menu li {
  position: relative;
  margin-bottom: 2px;
  box-sizing: border-box;
  width: 125px;
  height: 45px;
  line-height: 40px;
  text-align: center;
  white-space: nowrap;
  text-overflow: ellipsis;
  -o-text-overflow: ellipsis;
  overflow: hidden;
}
.v_mobileSchemeNav_style1 .mobile-block-menu li:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #ffffff;
  z-index: -1;
  opacity: ;
}
.v_mobileSchemeNav_style1 .mobile-block-menu li a {
  font-size: 14px;
  font-family: "Microsoft YaHei";
  padding: 2px;
  display: block;
  cursor: pointer;
  color: #000000;
  text-decoration: none;
}
.v_mobileSchemeNav_style1 .mobile-block-menu li a:hover {
  text-decoration: none;
}
.v_mobileSchemeNav_style1 .mobile-block-menu li:nth-child(odd) {
  float: left;
}
.v_mobileSchemeNav_style1 .mobile-block-menu li:nth-child(even) {
  float: right;
}
.v_mobileSchemeNav_style1 .industry-scheme-menu {
  width: 320px;
  height: 45px;
  background: #ffffff;
  opacity: ;
}
.v_mobileSchemeNav_style1 .industry-scheme-menu > a,
.v_mobileSchemeNav_style1 .industry-scheme-menu > div {
  float: left;
  width: 25%;
  height: 100%;
  position: relative;
  cursor: pointer;
}
.v_mobileSchemeNav_style1 .industry-scheme-menu .return {
  background: url(/images/icon_scheme_return.png) no-repeat center center;
  background-size: 19px 17px;
}
.v_mobileSchemeNav_style1 .industry-scheme-menu .home {
  background: url(/images/icon_scheme_home.png) no-repeat center center;
  background-size: 19px 17px;
}
.v_mobileSchemeNav_style1 .industry-scheme-menu .phone {
  background: url(/images/icon_scheme_phone.png) no-repeat center center;
  background-size: 18px 18px;
}
.v_mobileSchemeNav_style1 .industry-scheme-menu .menu {
  background: url(/images/icon_scheme_menu.png) no-repeat center center;
  background-size: 20px 14px;
}
.v_mobileSchemeNav_style1 .industry-scheme-menu .menu ul {
  position: absolute;
  right: 10px;
  bottom: 45px;
  padding: 0 10px;
  font-size: 14px;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  background-color: #ffffff;
  display: none;
}
.v_mobileSchemeNav_style1 .industry-scheme-menu .menu ul li {
  border-bottom: 1px solid #6a6b6c;
}
.v_mobileSchemeNav_style1 .industry-scheme-menu .menu ul li:last-child {
  border: none;
}
.v_mobileSchemeNav_style1 .industry-scheme-menu .menu ul li a {
  display: block;
  width: 75px;
  height: 38px;
  line-height: 38px;
  white-space: nowrap;
  text-overflow: ellipsis;
  -o-text-overflow: ellipsis;
  overflow: hidden;
  text-align: center;
  color: #000000;
}
.v_mobileSchemeNav_style1 .industry-scheme-menu ul:after {
  content: '';
  width: 0;
  height: 0;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-top: 10px solid #ffffff;
  position: absolute;
  right: 22%;
}
.v_mobileSchemeNav_style1 .nav-default-zoom {
  -webkit-transform: scale(0.1);
}
.v_mobileSchemeNav_style1 .nav-default-reduce {
  -webkit-transform: scale(3);
}
.v_mobileSchemeNav_style1 .nav-animate-reduce {
  -webkit-transform: scale(1);
}
.v_mobileSchemeNav_style1 .nav-animate-zoom {
  -webkit-transform: scale(1);
}
.v_mobileSchemeNav_style1 .nav-default-left-in {
  opacity: 0;
  -webkit-transform: translatex(-500px);
}
.v_mobileSchemeNav_style1 .nav-animate-left-in {
  opacity: 1;
  -webkit-transform: translatex(0);
}
.v_mobileSchemeNav_style1 .nav-default-right-in {
  opacity: 0;
  -webkit-transform: translatex(500px);
}
.v_mobileSchemeNav_style1 .nav-animate-right-in {
  opacity: 1;
  -webkit-transform: translatex(0);
}
.v_mobileSchemeNav_style1 .animated {
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
}
.v_mobileSchemeNav_style1 .animated.flip {
  -o-animation-name: flip;
  -moz-animation-name: flip;
  -webkit-animation-name: flip;
  animation-name: flip;
}


@-webkit-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) translatez(0) rotatey(0) scale(1);
    -webkit-animation-timing-function: ease-out;
  }
  40% {
    -webkit-transform: perspective(400px) translatez(150px) rotatey(170deg) scale(1);
    -webkit-animation-timing-function: ease-out;
  }
  50% {
    -webkit-transform: perspective(400px) translatez(150px) rotatey(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
  }
  80% {
    -webkit-transform: perspective(400px) translatez(0) rotatey(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
  }
  100% {
    -webkit-transform: perspective(400px) translatez(0) rotatey(360deg) scale(1);
    -webkit-animation-timing-function: ease-in;
  }
}
@-moz-keyframes flip {
  0% {
    -moz-transform: perspective(400px) translatez(0) rotatey(0) scale(1);
    -moz-animation-timing-function: ease-out;
  }
  40% {
    -moz-transform: perspective(400px) translatez(150px) rotatey(170deg) scale(1);
    -moz-animation-timing-function: ease-out;
  }
  50% {
    -moz-transform: perspective(400px) translatez(150px) rotatey(190deg) scale(1);
    -moz-animation-timing-function: ease-in;
  }
  80% {
    -moz-transform: perspective(400px) translatez(0) rotatey(360deg) scale(0.95);
    -moz-animation-timing-function: ease-in;
  }
  100% {
    -moz-transform: perspective(400px) translatez(0) rotatey(360deg) scale(1);
    -moz-animation-timing-function: ease-in;
  }
}
@keyframes flip {
  0% {
    transform: perspective(400px) translatez(0) rotatey(0) scale(1);
    animation-timing-function: ease-out;
  }
  40% {
    transform: perspective(400px) translatez(150px) rotatey(170deg) scale(1);
    animation-timing-function: ease-out;
  }
  50% {
    transform: perspective(400px) translatez(150px) rotatey(190deg) scale(1);
    animation-timing-function: ease-in;
  }
  80% {
    transform: perspective(400px) translatez(0) rotatey(360deg) scale(0.95);
    animation-timing-function: ease-in;
  }
  100% {
    transform: perspective(400px) translatez(0) rotatey(360deg) scale(1);
    animation-timing-function: ease-in;
  }
}
/*roll in start*/
@-webkit-keyframes rollin {
  0% {
    opacity: 0;
    -webkit-transform: translatex(-100%) rotate(-120deg);
  }
  100% {
    opacity: 1;
    -webkit-transform: translatex(0px) rotate(0deg);
  }
}
@-moz-keyframes rollin {
  0% {
    opacity: 0;
    -moz-transform: translatex(-100%) rotate(-120deg);
  }
  100% {
    opacity: 1;
    -moz-transform: translatex(0px) rotate(0deg);
  }
}
@-o-keyframes rollin {
  0% {
    opacity: 0;
    -o-transform: translatex(-100%) rotate(-120deg);
  }
  100% {
    opacity: 1;
    -o-transform: translatex(0px) rotate(0deg);
  }
}
@keyframes rollin {
  0% {
    opacity: 0;
    transform: translatex(-100%) rotate(-120deg);
  }
  100% {
    opacity: 1;
    transform: translatex(0px) rotate(0deg);
  }
}
.animated.rollin {
  -webkit-animation-name: rollin;
  -moz-animation-name: rollin;
  -o-animation-name: rollin;
  animation-name: rollin;
}
/*roll in end*/
/*slideInLeft start*/
@-webkit-keyframes slideinleft {
  0% {
    opacity: 0;
    -webkit-transform: translatex(-2000px);
  }
  100% {
    -webkit-transform: translatex(0);
  }
}
@-moz-keyframes slideinleft {
  0% {
    opacity: 0;
    -moz-transform: translatex(-2000px);
  }
  100% {
    -moz-transform: translatex(0);
  }
}
@-o-keyframes slideinleft {
  0% {
    opacity: 0;
    -o-transform: translatex(-2000px);
  }
  100% {
    -o-transform: translatex(0);
  }
}
@keyframes slideinleft {
  0% {
    opacity: 0;
    transform: translatex(-2000px);
  }
  100% {
    transform: translatex(0);
  }
}
.slideinleft {
  -webkit-animation-name: slideinleft;
  -moz-animation-name: slideinleft;
  -o-animation-name: slideinleft;
  animation-name: slideinleft;
}
/*slideInLeft end*/
/*slideInRight start*/
@-webkit-keyframes slideinright {
  0% {
    opacity: 0;
    -webkit-transform: translatex(2000px);
  }
  100% {
    -webkit-transform: translatex(0);
  }
}
@-moz-keyframes slideinright {
  0% {
    opacity: 0;
    -moz-transform: translatex(2000px);
  }
  100% {
    -moz-transform: translatex(0);
  }
}
@-o-keyframes slideinright {
  0% {
    opacity: 0;
    -o-transform: translatex(2000px);
  }
  100% {
    -o-transform: translatex(0);
  }
}
@keyframes slideinright {
  0% {
    opacity: 0;
    transform: translatex(2000px);
  }
  100% {
    transform: translatex(0);
  }
}
.slideinright {
  -webkit-animation-name: slideinright;
  -moz-animation-name: slideinright;
  -o-animation-name: slideinright;
  animation-name: slideinright;
}
/*slideInRight end*/
/*zoom start*/
@-webkit-keyframes animate-zoom {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.1);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
  }
}
@-moz-keyframes animate-zoom {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.1);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
  }
}
@-o-keyframes animate-zoom {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.1);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
  }
}
@keyframes animate-zoom {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.1);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
  }
}
.animated.animate-zoom {
  -webkit-animation-name: animate-zoom;
  -moz-animation-name: animate-zoom;
  -o-animation-name: animate-zoom;
  animation-name: animate-zoom;
}
/*zoom end*/
/*reduce start*/
@-webkit-keyframes animate-reduce {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
  }
}
@-moz-keyframes animate-reduce {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
  }
}
@-o-keyframes animate-reduce {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
  }
}
@keyframes animate-reduce {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
  }
}
.animated.animate-reduce {
  -webkit-animation-name: animate-reduce;
  -moz-animation-name: animate-reduce;
  -o-animation-name: animate-reduce;
  animation-name: animate-reduce;
}
/*reduce end*/
.v_picTextNav_style1 {
  /*圆形*/
  /*方形带阴影*/
  /*样式四*/
  /*样式五*/
  /*放大起始位置*/
  /*缩小*/
  /*放大终点位置*/
  /*左侧进入*/
  /*右侧进入*/
  /*通用动画*/
}
.v_picTextNav_style1 .clear:after {
  content: ".";
  display: block;
  height: 0;
  clear: both;
  visibility: hidden;
}
.v_picTextNav_style1 .clear {
  zoom: 1;
  display: block;
}
.v_picTextNav_style1 .shop-menu-with-pic {
  width: 190px;
  margin: 0;
  padding: 0;
  font-size: 14px;
}
.v_picTextNav_style1 .sizeControl {
  display: none;
}
.v_picTextNav_style1 .shop-menu-with-pic li {
  float: left;
  width: 90px;
  height: 90px;
  overflow: hidden;
  margin: 2px;
  position: relative;
  display: inline-block;
}
.v_picTextNav_style1 .shop-menu-with-pic li:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: #000000;
  opacity: ;
}
.v_picTextNav_style1 .shop-menu-with-pic li:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 64px;
  background: url('') repeat center center;
  background-size: 35px 35px;
}
.v_picTextNav_style1 .shop-menu-with-pic li a {
  display: block;
  text-align: center;
  padding-top: 63px;
  font-size: 14px;
  position: relative;
  z-index: 100;
  text-decoration: none;
  color: #ffffff;
}
.v_picTextNav_style1 .shop-menu-pic-round {
  width: 260px;
}
.v_picTextNav_style1 .shop-menu-pic-round li {
  margin: 10px 18px;
  border-radius: 50%;
  border: 2px solid white;
}
.v_picTextNav_style1 .shop-menu-pic-round li a {
  color: #ffffff;
  padding-top: 56px;
}
.v_picTextNav_style1 .shop-menu-pic-round li:after {
  width: 35px;
  height: 35px;
  left: 29px;
  top: 11px;
  /*	height: 59px;*/
}
.v_picTextNav_style1 .shop-menu-pic-round li a:after {
  height: 63px;
}
.v_picTextNav_style1 .shop-menu-pic-round li:before {
  border-radius: 50%;
}
.v_picTextNav_style1 .shop-menu-pic-shadow {
  width: 312px;
  margin: 0 auto;
}
.v_picTextNav_style1 .shop-menu-pic-shadow li {
  width: 91px;
  height: 101px;
  margin: 6px;
  /*border: 1px solid ~"#000000";*/
  border-radius: 3px;
  box-shadow: 1px 1px 2px #c6c5c4;
}
.v_picTextNav_style1 .shop-menu-pic-shadow li:before {
  content: "";
  background: #000000;
}
.v_picTextNav_style1 .shop-menu-pic-shadow li:after {
  height: 71px;
  /*占位*/
  background-color: #000000;
  background-size: 100% 100%;
}
.v_picTextNav_style1 .shop-menu-pic-shadow li a {
  padding-top: 76px;
  box-sizing: border-box;
  color: #ffffff;
}
.v_picTextNav_style1 .shop-menu-with-pic-1 {
  width: 280px;
  margin: 0 auto;
}
.v_picTextNav_style1 .shop-menu-with-pic-1 li {
  width: 65px;
  height: 75px;
  margin-bottom: 20px;
}
.v_picTextNav_style1 .shop-menu-with-pic-1 li a {
  padding-top: 53px;
}
.v_picTextNav_style1 .shop-menu-with-pic-1 li:before {
  content: "";
  position: absolute;
  width: 65px;
  height: 75px;
  background-color: #000000;
  opacity: ;
}
.v_picTextNav_style1 .shop-menu-with-pic-1 li:after {
  content: "";
  top: 3px;
  left: 7px;
  width: 44px;
  height: 44px;
  margin: 0 auto;
  border-radius: 50%;
  background-size: 20px 20px;
  border: 2px solid white;
}
.v_picTextNav_style1 .shop-menu-with-pic-2 {
  width: 253px;
  margin: 0 auto;
}
.v_picTextNav_style1 .shop-menu-with-pic-2 li {
  width: 80px;
  height: 80px;
  border-radius: 5px;
  margin: 2px;
}
.v_picTextNav_style1 .shop-menu-with-pic-2 li:before {
  border-radius: 5px;
  width: 80px;
  height: 80px;
  position: absolute;
}
.v_picTextNav_style1 .shop-menu-with-pic-2 li:after {
  top: 10px;
  left: 25px;
  width: 30px;
  height: 30px;
  margin: 0 auto;
  border-radius: 50%;
  background-size: 20px 20px;
  border: 2px solid white;
}
.v_picTextNav_style1 .shop-menu-with-pic-2 li a {
  padding-top: 52px;
}
.v_picTextNav_style1 .nav-default-zoom {
  -webkit-transform: scale(0.1);
}
.v_picTextNav_style1 .nav-default-reduce {
  -webkit-transform: scale(3);
}
.v_picTextNav_style1 .nav-animate-reduce {
  -webkit-transform: scale(1);
}
.v_picTextNav_style1 .nav-animate-zoom {
  -webkit-transform: scale(1);
}
.v_picTextNav_style1 .nav-default-left-in {
  opacity: 0;
  -webkit-transform: translatex(-500px);
}
.v_picTextNav_style1 .nav-animate-left-in {
  opacity: 1;
  -webkit-transform: translatex(0);
}
.v_picTextNav_style1 .nav-default-right-in {
  opacity: 0;
  -webkit-transform: translatex(500px);
}
.v_picTextNav_style1 .nav-animate-right-in {
  opacity: 1;
  -webkit-transform: translatex(0);
}
.v_picTextNav_style1 .animated {
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
}
.v_picTextNav_style1 .animated.flip {
  -o-animation-name: flip;
  -moz-animation-name: flip;
  -webkit-animation-name: flip;
  animation-name: flip;
}


@-webkit-keyframes spin {
    0%   {-webkit-transform: rotate(0deg)}
    100% {-webkit-transform: rotate(360deg)}
}
@-webkit-keyframes flow {
    0%   {
        -webkit-transform: rotate(0deg) scale(0.9);
        opacity:0.7;
        top:0px;
    }
    50%  {
        -webkit-transform: rotate(180deg) scale(0.6);
        opacity:0.6;
        top:-20px;
    }
    100% {
        -webkit-transform: rotate(360deg) scale(0.4);
        opacity:0.4;
        top:-40px;
    }
}
.v_audio_style1{
	width: 100%;
	height: 100%;
}
.v_audio_style1 .audio_play{
	    display:block;
        width: 100%;
        height: 100%;
	}
.v_audio_style1 .icon-music{
        width: 27px;
	    height:27px;
	    display:block;
	    background-position:0 0;
        background-size:27px 27px;
	}
.v_audio_style1 .audio_play .icon-music{
        -webkit-animation: spin 1.2s infinite linear;
    }
.v_audio_style1 .audio_puse .icon-music{
	    -webkit-animation: none;
    }
 .v_audio_style1 .icon_box{
        position:absolute;
        top:-10px;
    }



.v_shape_style1  .shape{
  	margin:0;
  	opacity: ;
} 
.v_shape_style1 svg,
.v_shape_style1 svg *{
    fill: @v_basic_color_a2 ;
  }

.v_shape_style2 .shape{
    top: 0;
  	margin:0;
  	opacity: ;
}
.v_shape_style2 svg,
.v_shape_style2 svg *{
    fill: @v_basic_color_a2;
  }

.v_shape_style3 .shape{
    top: 0;
  	margin:0;
  	opacity: ;
}
.v_shape_style3 svg,
.v_shape_style3 svg *{
    fill: @v_basic_color_a2;
  }

.v_shape_style4 .shape{
    top: 0;
  	margin:0;
  	opacity: ;
}
.v_shape_style4 svg,
.v_shape_style4 svg *{
    fill: @v_basic_color_a2;
  }

.v_shape_style5 .shape{
    top: 0;
  	margin:0;
  	opacity: ;
}
.v_shape_style5 svg,
.v_shape_style5 svg *{
    fill: @v_basic_color_a2;
  }

.v_shape_style6 .shape{
    top: 0;
  	margin:0;
  	opacity: ;
}
.v_shape_style6 svg,
.v_shape_style6 svg *{
    fill: @v_basic_color_a2;
  }

.v_shape_style7 .shape{
    top: 0;
  	margin:0;
  	opacity: ;
}
.v_shape_style7 svg,
.v_shape_style7 svg *{
    fill: @v_basic_color_a2;
  }

.v_shape_style8 .shape{
    top: 0;
  	margin:0;
  	opacity: ;
}
.v_shape_style8 svg,
.v_shape_style8 svg *{
    fill: @v_basic_color_a2;
  }

.v_shape_style9 .shape{
    top: 0;
  	margin:0;
  	opacity: ;
}
.v_shape_style9 svg,
.v_shape_style9 svg *{
    fill: @v_basic_color_a2;
  }

.v_shape_style10 .shape{
    top: 0;
  	margin:0;
  	opacity: ;
}
.v_shape_style10 svg,
.v_shape_style10 svg *{
    fill: @v_basic_color_a2;
  }

.v_arrowLine_style1 {
  zoom: 1;   
}
.v_arrowLine_style1 .lineWrap {
  width: 100%;
  height: 100%;
  display:table;
  display:flex;
  opacity: ;
}
.v_arrowLine_style1 .leftArrow {
  position: absolute;
  left: -2px;
  top: 0;
  height: 100%;
  width: 40px;
  z-index: 2;
  display: table-cell;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: left center;
  background-image: none;;
}
.v_arrowLine_style1 .lineBox {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  z-index: 1;
  display: table-cell;
  vertical-align: middle;
  background-position: center center;
}
.v_arrowLine_style1 .line {
  height: 2px;
  height: 2px;
  width: 100%;
  position: absolute;
  margin: auto;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-repeat-x: repeat;
  background-repeat-y: no-repeat;
  background-image: url('data:image/svg+xml;utf8,<?xml version="1.0" encoding="UTF-8" standalone="no"?> <svg viewBox="0 0 426.66666 4" height="4" version="1.1" width="427" xmlns="http://www.w3.org/2000/svg"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.0.1</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><rect x="0" y="0" width="427" height="4" r="0" rx="0" ry="0" fill="#ffffff" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="0" y="0" width="427" height="4" r="0" rx="0" ry="0" fill="#06c29c" stroke="#FFF" stroke-width="0" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></rect></svg>');;
}
.v_arrowLine_style1 .rightArrow {
  position: absolute;
  right: -2px;
  top: 0;
  height: 100%;
  width: 40px;
  z-index: 2;
  display: table-cell;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: right center;
  background-image: none;;
}


.v_graphical_style1 .graphical {
  margin: 0;
  opacity: ;
  position: absolute;
  top: 0;
  left: 0;
}
.v_graphical_style1 .bg-img,
.v_graphical_style1 .svg-wrapper {
  position: absolute;
  top: 0;
  left: 0;
}
.v_graphical_style1 .bg-img {
  opacity: ;
}
.v_graphical_style1 .svg-wrapper {
  width: 100%;
  height: 100%;
}
.v_graphical_style1 svg,
.v_graphical_style1 svg .ctrl-color1 {
  fill: #06c29c !important;
}

.v_albums_style1 {
  border-color: #687683;
  border-width: 0px;
  background-color: rgba(0,0,0,0);
  -pie-background: rgba(0,0,0,0);
  border-style: solid;
  border-radius: 0px;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  position: relative;
  z-index: 0;
  _border-radius: none;
  behavior: url(/edit/initjs/pie.php);
  opacity: ;
  line-height: 1.5em;
  word-break: break-all;
  mystyle: 111;
}
.image_set .image_container {
  float: left;
  margin: 0;
}
.image_set .circle {
  width: 90%;
  height: 90%;
  background-image: url(./platform/app/albums/pic1.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 50% 50%;
  -webkit-mask: url(./platform/app/albums/svg/circle.svg);
  -webkit-mask-size: cover;
}
.image_set .rect {
  width: 90%;
  height: 90%;
  background-image: url(./img/pic1.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 50% 50%;
  -webkit-mask: url(./platform/app/albums/svg/rect.svg);
  -webkit-mask-size: cover;
}
.image_set .rect_radius {
  width: 90%;
  height: 90%;
  background-image: url(./img/pic1.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 50% 50%;
  -webkit-mask: url(./svg/circle.svg);
  -webkit-mask-size: cover;
  border-radius: 15%;
}


.vAct_modexBox_image_1481272546013_css {
  opacity: 1;
  border-color: #d7dbdf;
  border-width: 0px;
  border-style: solid;
  overflow: hidden;
}.vAct_modexBox_paragraph_148127248416807_css {
  border-color: ;
  border-width: ;
  background-color: ;
  -pie-background: ;
  border-style: ;
  border-radius: ;
  -webkit-border-radius: ;
  -moz-border-radius: ;
  position: relative;
  z-index: 0;
  _border-radius: none;
  behavior: url(/edit/initjs/pie.php);
  opacity: ;
  line-height: 1.5em;
  word-break: break-all;
}
.vAct_modexBox_paragraph_148127248416807_css p {
  margin: 0px !important;
}
.vAct_modexBox_paragraph_148127248416807_css span {
  word-break: normal;
  word-wrap: break-word;
}.vAct_modexBox_image_14812724841549_css {
  opacity: 1;
  border-color: @v_basic_color_d1;
  border-width: 0px;
  border-style: solid;
  overflow: hidden;
}.vAct_modexBox_paragraph_148127248455741_css {
  border-color: ;
  border-width: ;
  background-color: ;
  -pie-background: ;
  border-style: ;
  border-radius: ;
  -webkit-border-radius: ;
  -moz-border-radius: ;
  position: relative;
  z-index: 0;
  _border-radius: none;
  behavior: url(/edit/initjs/pie.php);
  opacity: ;
  line-height: 1.5em;
  word-break: break-all;
}
.vAct_modexBox_paragraph_148127248455741_css p {
  margin: 0px !important;
}
.vAct_modexBox_paragraph_148127248455741_css span {
  word-break: normal;
  word-wrap: break-word;
}.vAct_modexBox_paragraph_148127248436569_css {
  border-color: ;
  border-width: ;
  background-color: ;
  -pie-background: ;
  border-style: ;
  border-radius: ;
  -webkit-border-radius: ;
  -moz-border-radius: ;
  position: relative;
  z-index: 0;
  _border-radius: none;
  behavior: url(/edit/initjs/pie.php);
  opacity: ;
  line-height: 1.5em;
  word-break: break-all;
}
.vAct_modexBox_paragraph_148127248436569_css p {
  margin: 0px !important;
}
.vAct_modexBox_paragraph_148127248436569_css span {
  word-break: normal;
  word-wrap: break-word;
}.vAct_modexBox_paragraph_148127248445559_css {
  border-color: ;
  border-width: ;
  background-color: ;
  -pie-background: ;
  border-style: ;
  border-radius: ;
  -webkit-border-radius: ;
  -moz-border-radius: ;
  position: relative;
  z-index: 0;
  _border-radius: none;
  behavior: url(/edit/initjs/pie.php);
  opacity: ;
  line-height: 1.5em;
  word-break: break-all;
}
.vAct_modexBox_paragraph_148127248445559_css p {
  margin: 0px !important;
}
.vAct_modexBox_paragraph_148127248445559_css span {
  word-break: normal;
  word-wrap: break-word;
}.vAct_modexBox_paragraph_1481274795804_css {
  border-color: ;
  border-width: ;
  background-color: ;
  -pie-background: ;
  border-style: ;
  border-radius: ;
  -webkit-border-radius: ;
  -moz-border-radius: ;
  position: relative;
  z-index: 0;
  _border-radius: none;
  behavior: url(/edit/initjs/pie.php);
  opacity: ;
  line-height: 1.5em;
  word-break: break-all;
}
.vAct_modexBox_paragraph_1481274795804_css p {
  margin: 0px !important;
}
.vAct_modexBox_paragraph_1481274795804_css span {
  word-break: normal;
  word-wrap: break-word;
}.vAct_modexBox_paragraph_148127248445256_css {
  border-color: ;
  border-width: ;
  background-color: ;
  -pie-background: ;
  border-style: ;
  border-radius: ;
  -webkit-border-radius: ;
  -moz-border-radius: ;
  position: relative;
  z-index: 0;
  _border-radius: none;
  behavior: url(/edit/initjs/pie.php);
  opacity: ;
  line-height: 1.5em;
  word-break: break-all;
}
.vAct_modexBox_paragraph_148127248445256_css p {
  margin: 0px !important;
}
.vAct_modexBox_paragraph_148127248445256_css span {
  word-break: normal;
  word-wrap: break-word;
}.vAct_modexBox_arrowLine_148127248422318_css {
  zoom: 1;   
}
.vAct_modexBox_arrowLine_148127248422318_css .lineWrap {
  width: 100%;
  height: 100%;
  display:table;
  display:flex;
  opacity: 1;
}
.vAct_modexBox_arrowLine_148127248422318_css .leftArrow {
  position: absolute;
  left: -2px;
  top: 0;
  height: 100%;
  width: 40px;
  z-index: 2;
  display: table-cell;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: left center;
  background-image: none;;
}
.vAct_modexBox_arrowLine_148127248422318_css .lineBox {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  z-index: 1;
  display: table-cell;
  vertical-align: middle;
  background-position: center center;
}
.vAct_modexBox_arrowLine_148127248422318_css .line {
  height: 2px;
  height: 2px;
  width: 100%;
  position: absolute;
  margin: auto;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-repeat-x: repeat;
  background-repeat-y: no-repeat;
  background-image: url('data:image/svg+xml;utf8,<?xml version="1.0" encoding="UTF-8" standalone="no"?> <svg viewBox="0 0 426.66666 4" height="4" version="1.1" width="427" xmlns="http://www.w3.org/2000/svg"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.0.1</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><rect x="0" y="0" width="427" height="4" r="0" rx="0" ry="0" fill="#ffffff" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="0" y="0" width="427" height="4" r="0" rx="0" ry="0" fill="#ff9900" stroke="#FFF" stroke-width="0" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></rect></svg>');;
}
.vAct_modexBox_arrowLine_148127248422318_css .rightArrow {
  position: absolute;
  right: -2px;
  top: 0;
  height: 100%;
  width: 40px;
  z-index: 2;
  display: table-cell;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: right center;
  background-image: none;;
}
.vAct_modexBox_arrowLine_148127248490535_css {
  zoom: 1;   
}
.vAct_modexBox_arrowLine_148127248490535_css .lineWrap {
  width: 100%;
  height: 100%;
  display:table;
  display:flex;
  opacity: 1;
}
.vAct_modexBox_arrowLine_148127248490535_css .leftArrow {
  position: absolute;
  left: -2px;
  top: 0;
  height: 100%;
  width: 40px;
  z-index: 2;
  display: table-cell;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: left center;
  background-image: none;;
}
.vAct_modexBox_arrowLine_148127248490535_css .lineBox {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  z-index: 1;
  display: table-cell;
  vertical-align: middle;
  background-position: center center;
}
.vAct_modexBox_arrowLine_148127248490535_css .line {
  height: 2px;
  height: 2px;
  width: 100%;
  position: absolute;
  margin: auto;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-repeat-x: repeat;
  background-repeat-y: no-repeat;
  background-image: url('data:image/svg+xml;utf8,<?xml version="1.0" encoding="UTF-8" standalone="no"?> <svg viewBox="0 0 426.66666 4" height="4" version="1.1" width="427" xmlns="http://www.w3.org/2000/svg"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.0.1</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><rect x="0" y="0" width="427" height="4" r="0" rx="0" ry="0" fill="#ffffff" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="0" y="0" width="427" height="4" r="0" rx="0" ry="0" fill="#ff9900" stroke="#FFF" stroke-width="0" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></rect></svg>');;
}
.vAct_modexBox_arrowLine_148127248490535_css .rightArrow {
  position: absolute;
  right: -2px;
  top: 0;
  height: 100%;
  width: 40px;
  z-index: 2;
  display: table-cell;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: right center;
  background-image: none;;
}
.vAct_modexBox_arrowLine_1481274758135_css {
  zoom: 1;   
}
.vAct_modexBox_arrowLine_1481274758135_css .lineWrap {
  width: 100%;
  height: 100%;
  display:table;
  display:flex;
  opacity: 1;
}
.vAct_modexBox_arrowLine_1481274758135_css .leftArrow {
  position: absolute;
  left: -2px;
  top: 0;
  height: 100%;
  width: 40px;
  z-index: 2;
  display: table-cell;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: left center;
  background-image: none;;
}
.vAct_modexBox_arrowLine_1481274758135_css .lineBox {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  z-index: 1;
  display: table-cell;
  vertical-align: middle;
  background-position: center center;
}
.vAct_modexBox_arrowLine_1481274758135_css .line {
  height: 2px;
  height: 2px;
  width: 100%;
  position: absolute;
  margin: auto;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-repeat-x: repeat;
  background-repeat-y: no-repeat;
  background-image: url('data:image/svg+xml;utf8,<?xml version="1.0" encoding="UTF-8" standalone="no"?> <svg viewBox="0 0 426.66666 4" height="4" version="1.1" width="427" xmlns="http://www.w3.org/2000/svg"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.0.1</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><rect x="0" y="0" width="427" height="4" r="0" rx="0" ry="0" fill="#ffffff" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="0" y="0" width="427" height="4" r="0" rx="0" ry="0" fill="#ff9900" stroke="#FFF" stroke-width="0" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></rect></svg>');;
}
.vAct_modexBox_arrowLine_1481274758135_css .rightArrow {
  position: absolute;
  right: -2px;
  top: 0;
  height: 100%;
  width: 40px;
  z-index: 2;
  display: table-cell;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: right center;
  background-image: none;;
}
.vAct_modexBox_paragraph_1481272748950_css {
  border-color: ;
  border-width: ;
  background-color: ;
  -pie-background: ;
  border-style: ;
  border-radius: ;
  -webkit-border-radius: ;
  -moz-border-radius: ;
  position: relative;
  z-index: 0;
  _border-radius: none;
  behavior: url(/edit/initjs/pie.php);
  opacity: ;
  line-height: 1.5em;
  word-break: break-all;
}
.vAct_modexBox_paragraph_1481272748950_css p {
  margin: 0px !important;
}
.vAct_modexBox_paragraph_1481272748950_css span {
  word-break: normal;
  word-wrap: break-word;
}.vAct_modexBox_arrowLine_1481272779307_css {
  zoom: 1;   
}
.vAct_modexBox_arrowLine_1481272779307_css .lineWrap {
  width: 100%;
  height: 100%;
  display:table;
  display:flex;
  opacity: 1;
}
.vAct_modexBox_arrowLine_1481272779307_css .leftArrow {
  position: absolute;
  left: -2px;
  top: 0;
  height: 100%;
  width: 40px;
  z-index: 2;
  display: table-cell;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: left center;
  background-image: none;;
}
.vAct_modexBox_arrowLine_1481272779307_css .lineBox {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  z-index: 1;
  display: table-cell;
  vertical-align: middle;
  background-position: center center;
}
.vAct_modexBox_arrowLine_1481272779307_css .line {
  height: 2px;
  height: 2px;
  width: 100%;
  position: absolute;
  margin: auto;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-repeat-x: repeat;
  background-repeat-y: no-repeat;
  background-image: url('data:image/svg+xml;utf8,<?xml version="1.0" encoding="UTF-8" standalone="no"?> <svg viewBox="0 0 426.66666 4" height="4" version="1.1" width="427" xmlns="http://www.w3.org/2000/svg"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.0.1</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><rect x="0" y="0" width="427" height="4" r="0" rx="0" ry="0" fill="#ffffff" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="0" y="0" width="427" height="4" r="0" rx="0" ry="0" fill="#ff9900" stroke="#FFF" stroke-width="0" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></rect></svg>');;
}
.vAct_modexBox_arrowLine_1481272779307_css .rightArrow {
  position: absolute;
  right: -2px;
  top: 0;
  height: 100%;
  width: 40px;
  z-index: 2;
  display: table-cell;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: right center;
  background-image: none;;
}
.vAct_modexBox_image_1481272968368_css {
  opacity: 1;
  border-color: #d7dbdf;
  border-width: 0px;
  border-style: solid;
  overflow: hidden;
}.vAct_modexBox_paragraph_1481273281129_css {
  border-color: ;
  border-width: ;
  background-color: ;
  -pie-background: ;
  border-style: ;
  border-radius: ;
  -webkit-border-radius: ;
  -moz-border-radius: ;
  position: relative;
  z-index: 0;
  _border-radius: none;
  behavior: url(/edit/initjs/pie.php);
  opacity: ;
  line-height: 1.5em;
  word-break: break-all;
}
.vAct_modexBox_paragraph_1481273281129_css p {
  margin: 0px !important;
}
.vAct_modexBox_paragraph_1481273281129_css span {
  word-break: normal;
  word-wrap: break-word;
}.vAct_modexBox_paragraph_1481273756550_css {
  border-color: ;
  border-width: ;
  background-color: ;
  -pie-background: ;
  border-style: ;
  border-radius: ;
  -webkit-border-radius: ;
  -moz-border-radius: ;
  position: relative;
  z-index: 0;
  _border-radius: none;
  behavior: url(/edit/initjs/pie.php);
  opacity: ;
  line-height: 1.5em;
  word-break: break-all;
}
.vAct_modexBox_paragraph_1481273756550_css p {
  margin: 0px !important;
}
.vAct_modexBox_paragraph_1481273756550_css span {
  word-break: normal;
  word-wrap: break-word;
}.vAct_modexBox_image_1481274570910_css {
  opacity: 1;
  border-color: #d7dbdf;
  border-width: 0px;
  border-style: solid;
  overflow: hidden;
}.vAct_modexBox_image_1481274682728_css {
  opacity: 1;
  border-color: #d7dbdf;
  border-width: 0px;
  border-style: solid;
  overflow: hidden;
}.vAct_modexBox_image_1481274773123_css {
  opacity: 1;
  border-color: #d7dbdf;
  border-width: 0px;
  border-style: solid;
  overflow: hidden;
}.vAct_modexBox_image_1481274844898_css {
  opacity: 1;
  border-color: #d7dbdf;
  border-width: 0px;
  border-style: solid;
  overflow: hidden;
}.vAct_modexBox_arrowLine_1481274936606_css {
  zoom: 1;   
}
.vAct_modexBox_arrowLine_1481274936606_css .lineWrap {
  width: 100%;
  height: 100%;
  display:table;
  display:flex;
  opacity: 1;
}
.vAct_modexBox_arrowLine_1481274936606_css .leftArrow {
  position: absolute;
  left: -2px;
  top: 0;
  height: 100%;
  width: 40px;
  z-index: 2;
  display: table-cell;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: left center;
  background-image: none;;
}
.vAct_modexBox_arrowLine_1481274936606_css .lineBox {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  z-index: 1;
  display: table-cell;
  vertical-align: middle;
  background-position: center center;
}
.vAct_modexBox_arrowLine_1481274936606_css .line {
  height: 2px;
  height: 2px;
  width: 100%;
  position: absolute;
  margin: auto;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-repeat-x: repeat;
  background-repeat-y: no-repeat;
  background-image: url('data:image/svg+xml;utf8,<?xml version="1.0" encoding="UTF-8" standalone="no"?> <svg viewBox="0 0 426.66666 4" height="4" version="1.1" width="427" xmlns="http://www.w3.org/2000/svg"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.0.1</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><rect x="0" y="0" width="427" height="4" r="0" rx="0" ry="0" fill="#ffffff" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="0" y="0" width="427" height="4" r="0" rx="0" ry="0" fill="#ff9900" stroke="#FFF" stroke-width="0" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></rect></svg>');;
}
.vAct_modexBox_arrowLine_1481274936606_css .rightArrow {
  position: absolute;
  right: -2px;
  top: 0;
  height: 100%;
  width: 40px;
  z-index: 2;
  display: table-cell;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: right center;
  background-image: none;;
}
.vAct_modexBox_arrowLine_1481274989751_css {
  zoom: 1;   
}
.vAct_modexBox_arrowLine_1481274989751_css .lineWrap {
  width: 100%;
  height: 100%;
  display:table;
  display:flex;
  opacity: 1;
}
.vAct_modexBox_arrowLine_1481274989751_css .leftArrow {
  position: absolute;
  left: -2px;
  top: 0;
  height: 100%;
  width: 40px;
  z-index: 2;
  display: table-cell;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: left center;
  background-image: none;;
}
.vAct_modexBox_arrowLine_1481274989751_css .lineBox {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  z-index: 1;
  display: table-cell;
  vertical-align: middle;
  background-position: center center;
}
.vAct_modexBox_arrowLine_1481274989751_css .line {
  height: 2px;
  height: 2px;
  width: 100%;
  position: absolute;
  margin: auto;
  top: 0;
  left: 0; 
  right: 0;
  bottom: 0;
  background-repeat-x: repeat;
  background-repeat-y: no-repeat;
  background-image: url('data:image/svg+xml;utf8,<?xml version="1.0" encoding="UTF-8" standalone="no"?> <svg viewBox="0 0 426.66666 4" height="4" version="1.1" width="427" xmlns="http://www.w3.org/2000/svg"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.0.1</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><rect x="0" y="0" width="427" height="4" r="0" rx="0" ry="0" fill="#ffffff" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="0" y="0" width="427" height="4" r="0" rx="0" ry="0" fill="#ff9900" stroke="#FFF" stroke-width="0" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></rect></svg>');;
}
.vAct_modexBox_arrowLine_1481274989751_css .rightArrow {
  position: absolute;
  right: -2px;
  top: 0;
  height: 100%;
  width: 40px;
  z-index: 2;
  display: table-cell;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: right center;
  background-image: none;;
}
.vAct_modexBox_button_1481275333987_css {
  opacity: 1;
  cursor: pointer;
  padding: 0;
  color: #ffffff;
  border-radius: 3px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  behavior: url(/edit/initjs/pie.php);
  position: relative;
  z-index: 0;
  _border-radius: none;
  font-size: 16px;
  font-weight: normal;
  font-style: normal;
  border: 0;
  background: #ff9900;
  border-color: #edeeef;
  border-width: 0px;
  border-style: solid;
  overflow: hidden;
  background-position: 10% center;
  background-repeat: no-repeat;
  background-size: 20px 20px;
  box-sizing: border-box;
  width: 100%;
  height: 100%;
}
.vAct_modexBox_button_1481275333987_css:hover {
  border: none;
  outline: none;
  box-shadow: 2px 2px 2px #ccc;
}.vAct_modexBox_button_1481275420054_css {
  opacity: 1;
  cursor: pointer;
  padding: 0;
  color: #ffffff;
  border-radius: 3px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  behavior: url(/edit/initjs/pie.php);
  position: relative;
  z-index: 0;
  _border-radius: none;
  font-size: 16px;
  font-weight: normal;
  font-style: normal;
  border: 0;
  background: #ff9900;
  border-color: #edeeef;
  border-width: 0px;
  border-style: solid;
  overflow: hidden;
  background-position: 10% center;
  background-repeat: no-repeat;
  background-size: 20px 20px;
  box-sizing: border-box;
  width: 100%;
  height: 100%;
}
.vAct_modexBox_button_1481275420054_css:hover {
  border: none;
  outline: none;
  box-shadow: 2px 2px 2px #ccc;
}
	</style>
</head>
<body class="VACT_mobile" style="overflow-x:hidden;border:0px;">



<div class="VACT_main " >
    <!-- <div class="VACT_grid"></div> -->
    <!-- 头部 -->
    <div class="VACT_headerWrapper_box">
        <div id="VACT_headerWrapper" class="VACT_headerWrapper vAct_modexBox_header">
            <div container="1" class="VACT_inner"><!-- vAct_modexBox_header --></div>
        </div>
    </div>
    <!-- 主内容 -->
    <div class="VACT_main_page_text1_box">
        <div id="VACT_mainWrapper" class="VACT_mainWrapper vAct_modexBox_main VACT_main_page_text1">
            <div container="1" class="VACT_inner">

<div id="vAct_modexBox_image_1481272546013" class="VACT_modelBox&#x20;vAct_modexBox_image_1481272546013&#x20;" data-align="" style="position:absolute;width:127px;height:53px;left:9px;z-index:50000;top:13px;"><div class="v_image_style1&#x20;vAct_modexBox_image_1481272546013_css" style="width:127px;height:53px;"><img style="cursor:default;width:100%;height:100%;" src="http&#x3A;&#x2F;&#x2F;fl1.gtimg.com&#x2F;flpartition0&#x2F;409&#x2F;2001820409&#x2F;204&#x2F;571242170810704261504916572940.png&#x21;t254x106.png" id="imageId_584a6d92417d6" class="imageId_584a6d92417d6" data-scaling="scale"></img></div><!-- vAct_modexBox_image_1481272546013 --></div>

<div id="vAct_modexBox_paragraph_148127248416807" class="VACT_modelBox&#x20;vAct_modexBox_paragraph_148127248416807&#x20;" data-align="" style="position:absolute;width:146px;height:32px;left:61px;z-index:50001;top:729px;"><div style="width:146px;height:100%;word-break:normal;" class="VAct_urlCheck&#x20;v_paragraph_st&lt;x&gt;yle1&#x20;vAct_modexBox_paragraph_148127248416807_css"><p><font color="#ff8c00"><span style="font-size: 16px; line-height: 32px;"><b>文昌鸡供应</b></span></font></p>
</div><!-- vAct_modexBox_paragraph_148127248416807 --></div>

<div id="vAct_modexBox_image_14812724841549" class="VACT_modelBox&#x20;vAct_modexBox_image_14812724841549&#x20;" data-align="" style="position:absolute;width:319px;height:107px;left:0px;z-index:50002;top:570px;"><div class="v_image_style1&#x20;vAct_modexBox_image_14812724841549_css" style="width:319px;height:107.994791667px;"><img style="cursor:default;width:100%" src="http&#x3A;&#x2F;&#x2F;fl2.gtimg.com&#x2F;flpartition0&#x2F;2112&#x2F;2000682112&#x2F;301&#x2F;9789624980201043022583157112131.jpg" id="imageId_584a76737eff7" class="imageId_584a76737eff7" data-scaling="flexible-left"></img></div><!-- vAct_modexBox_image_14812724841549 --></div>

<div id="vAct_modexBox_paragraph_148127248455741" class="VACT_modelBox&#x20;vAct_modexBox_paragraph_148127248455741&#x20;" data-align="" style="position:absolute;width:245px;height:63px;left:61px;z-index:50004;top:762px;"><div style="width:245px;height:100%;word-break:normal;" class="VAct_urlCheck&#x20;v_paragraph_st&lt;x&gt;yle1&#x20;vAct_modexBox_paragraph_148127248455741_css"><p><font color="#696969"><span style="font-size: 13px;"><b>原产地直供，采用空运，快递，同城冷链等物流渠道，为餐厅，酒楼等餐饮场所专业批发文昌鸡</b></span></font></p>
</div><!-- vAct_modexBox_paragraph_148127248455741 --></div>

<div id="vAct_modexBox_paragraph_148127248436569" class="VACT_modelBox&#x20;vAct_modexBox_paragraph_148127248436569&#x20;" data-align="" style="position:absolute;width:146px;height:32px;left:61px;z-index:50005;top:851px;"><div style="width:146px;height:100%;word-break:normal;" class="VAct_urlCheck&#x20;v_paragraph_st&lt;x&gt;yle1&#x20;vAct_modexBox_paragraph_148127248436569_css"><p><font color="#ff8c00"><span style="font-size: 16px; line-height: 32px;"><b>文昌鸡菜品零售</b></span></font></p>
</div><!-- vAct_modexBox_paragraph_148127248436569 --></div>

<div id="vAct_modexBox_paragraph_148127248445559" class="VACT_modelBox&#x20;vAct_modexBox_paragraph_148127248445559&#x20;" data-align="" style="position:absolute;width:245px;height:63px;left:61px;z-index:50006;top:889px;"><div style="width:245px;height:100%;word-break:normal;" class="VAct_urlCheck&#x20;v_paragraph_st&lt;x&gt;yle1&#x20;vAct_modexBox_paragraph_148127248445559_css"><p><font color="#696969"><span style="font-size: 13px;"><b>拥有实体店，以及微信等在线销售渠道，顾客可以采取电话订购，微信下单等多种购买方式，深圳同城热食现做派送上门。</b></span></font></p>
</div><!-- vAct_modexBox_paragraph_148127248445559 --></div>

<div id="vAct_modexBox_paragraph_1481274795804" class="VACT_modelBox&#x20;vAct_modexBox_paragraph_1481274795804&#x20;" data-align="" style="position:absolute;width:245px;height:63px;left:61px;z-index:50025;top:1032px;"><div style="width:245px;height:100%;word-break:normal;" class="VAct_urlCheck&#x20;v_paragraph_st&lt;x&gt;yle1&#x20;vAct_modexBox_paragraph_1481274795804_css"><p><font color="#696969"><span style="font-size: 13px;"><b>研究各种标准化菜品，和挖掘多种供应链渠道，提供多种代理运营合作方式，可零成本加盟。</b></span></font></p>
</div><!-- vAct_modexBox_paragraph_1481274795804 --></div>

<div id="vAct_modexBox_paragraph_148127248445256" class="VACT_modelBox&#x20;vAct_modexBox_paragraph_148127248445256&#x20;" data-align="" style="position:absolute;width:146px;height:32px;left:61px;z-index:50007;top:995px;"><div style="width:146px;height:100%;word-break:normal;" class="VAct_urlCheck&#x20;v_paragraph_st&lt;x&gt;yle1&#x20;vAct_modexBox_paragraph_148127248445256_css"><p><font color="#ff8c00"><span style="font-size: 16px; line-height: 32px;"><b>代理合作加盟</b></span></font></p>
</div><!-- vAct_modexBox_paragraph_148127248445256 --></div>

<div id="vAct_modexBox_arrowLine_148127248422318" class="VACT_modelBox&#x20;vAct_modexBox_arrowLine_148127248422318&#x20;" data-align="" style="position:absolute;width:69px;height:30px;left:-2px;z-index:50012;transform:rotate(90deg);-webkit-transform:rotate(90deg);top:782px;"><div container="1" type="arrowLine" class="v_arrowLine_st&lt;x&gt;yle1&#x20;vAct_modexBox_arrowLine_148127248422318_css" style="width:69px;height:30px;"><div class="lineWrap"><div class="leftArrow"></div><div class="lineBox"><div class="line"></div></div><div class="rightArrow"></div></div></div><!-- vAct_modexBox_arrowLine_148127248422318 --></div>

<div id="vAct_modexBox_arrowLine_148127248490535" class="VACT_modelBox&#x20;vAct_modexBox_arrowLine_148127248490535&#x20;" data-align="" style="position:absolute;width:81px;height:30px;left:-9px;z-index:50013;transform:rotate(90deg);-webkit-transform:rotate(90deg);top:908px;"><div container="1" type="arrowLine" class="v_arrowLine_st&lt;x&gt;yle1&#x20;vAct_modexBox_arrowLine_148127248490535_css" style="width:81px;height:30px;"><div class="lineWrap"><div class="leftArrow"></div><div class="lineBox"><div class="line"></div></div><div class="rightArrow"></div></div></div><!-- vAct_modexBox_arrowLine_148127248490535 --></div>

<div id="vAct_modexBox_arrowLine_1481274758135" class="VACT_modelBox&#x20;vAct_modexBox_arrowLine_1481274758135&#x20;" data-align="" style="position:absolute;width:81px;height:30px;left:-9px;z-index:50023;transform:rotate(90deg);-webkit-transform:rotate(90deg);top:1046px;"><div container="1" type="arrowLine" class="v_arrowLine_st&lt;x&gt;yle1&#x20;vAct_modexBox_arrowLine_1481274758135_css" style="width:81px;height:30px;"><div class="lineWrap"><div class="leftArrow"></div><div class="lineBox"><div class="line"></div></div><div class="rightArrow"></div></div></div><!-- vAct_modexBox_arrowLine_1481274758135 --></div>

<div id="vAct_modexBox_paragraph_1481272748950" class="VACT_modelBox&#x20;vAct_modexBox_paragraph_1481272748950&#x20;" data-align="" style="position:absolute;width:131px;height:23px;left:176px;z-index:50015;top:25px;"><div style="width:131px;height:100%;word-break:normal;" class="VAct_urlCheck&#x20;v_paragraph_st&lt;x&gt;yle1&#x20;vAct_modexBox_paragraph_1481272748950_css"><p><span style="font-size:20px;"><strong><span style="padding: 2px; word-break: normal;">产品查询系统</span></strong></span></p>
</div><!-- vAct_modexBox_paragraph_1481272748950 --></div>

<div id="vAct_modexBox_arrowLine_1481272779307" class="VACT_modelBox&#x20;vAct_modexBox_arrowLine_1481272779307&#x20;" data-align="" style="position:absolute;width:320px;height:30px;left:0px;z-index:50016;top:73px;"><div container="1" type="arrowLine" class="v_arrowLine_st&lt;x&gt;yle1&#x20;vAct_modexBox_arrowLine_1481272779307_css" style="width:320px;height:30px;"><div class="lineWrap"><div class="leftArrow"></div><div class="lineBox"><div class="line"></div></div><div class="rightArrow"></div></div></div><!-- vAct_modexBox_arrowLine_1481272779307 --></div>


<?if($check){?>
<div id="vAct_modexBox_image_1481272968368" class="VACT_modelBox&#x20;vAct_modexBox_image_1481272968368&#x20;" data-align="" style="position:absolute;width:55px;height:60px;left:2px;z-index:50018;top:114px;"><div class="v_image_style1&#x20;vAct_modexBox_image_1481272968368_css" style="width:55px;height:60px;">
<img style="cursor:default;width:100%;height:100%;" src="http&#x3A;&#x2F;&#x2F;fl5.gtimg.com&#x2F;flpartition0&#x2F;7088&#x2F;631007088&#x2F;762&#x2F;2754922528171269701821720695901.jpg&#x21;t110x120.jpg" id="imageId_584a70f463925" class="imageId_584a70f463925" data-scaling="scale"></img></div><!-- vAct_modexBox_image_1481272968368 --></div>
<div id="vAct_modexBox_paragraph_1481273281129" class="VACT_modelBox&#x20;vAct_modexBox_paragraph_1481273281129&#x20;" data-align="" style="position:absolute;width:247px;height:46px;left:68px;z-index:50019;top:123px;"><div style="width:247px;height:100%;word-break:normal;" class="VAct_urlCheck&#x20;v_paragraph_st&lt;x&gt;yle1&#x20;vAct_modexBox_paragraph_1481273281129_css"><p><span style="font-size:20px;"><b>您查询的产品为醉南鸡经营的产品，感谢您的支持！</b></span></p>
</div></div>
<?}else{?>
<div id="vAct_modexBox_paragraph_1481273281129" class="VACT_modelBox&#x20;vAct_modexBox_paragraph_1481273281129&#x20;" data-align="" style="position:absolute;width:247px;height:46px;left:68px;z-index:50019;top:123px;"><div style="width:247px;height:100%;word-break:normal;" class="VAct_urlCheck&#x20;v_paragraph_st&lt;x&gt;yle1&#x20;vAct_modexBox_paragraph_1481273281129_css"><p><span style="font-size:20px;color:red"><b>该产品为非醉南鸡经营生产的，请联系我们！</b></span></p>
</div></div>
<?}?>
<div id="vAct_modexBox_paragraph_1481273756550" class="VACT_modelBox&#x20;vAct_modexBox_paragraph_1481273756550&#x20;" data-align="" style="position:absolute;width:310px;height:63px;left:5px;z-index:50020;top:467px;"><div style="width:310px;height:100%;word-break:normal;" class="VAct_urlCheck&#x20;v_paragraph_st&lt;x&gt;yle1&#x20;vAct_modexBox_paragraph_1481273756550_css"><p>深圳醉南鸡餐饮管理有限公司专注海南文昌鸡批发，菜品研发、文昌鸡食材供应。是致力于打造海南文昌鸡特色精品菜系的现代化餐饮管理公司。</p>
</div><!-- vAct_modexBox_paragraph_1481273756550 --></div>

<div id="vAct_modexBox_image_1481274570910" class="VACT_modelBox&#x20;vAct_modexBox_image_1481274570910&#x20;" data-align="" style="position:absolute;width:24px;height:24px;left:20px;z-index:50021;top:732px;"><div class="v_image_style1&#x20;vAct_modexBox_image_1481274570910_css" style="width:24px;height:24px;"><img style="cursor:default;width:100%;height:100%;" src="http&#x3A;&#x2F;&#x2F;fl1.gtimg.com&#x2F;flpartition0&#x2F;7088&#x2F;631007088&#x2F;635&#x2F;70409517502299557113831763401231.png&#x21;t48x48.png" id="imageId_584a767368c7f" class="imageId_584a767368c7f" data-scaling="scale"></img></div><!-- vAct_modexBox_image_1481274570910 --></div>

<div id="vAct_modexBox_image_1481274682728" class="VACT_modelBox&#x20;vAct_modexBox_image_1481274682728&#x20;" data-align="" style="position:absolute;width:24px;height:24px;left:19px;z-index:50022;top:851px;"><div class="v_image_style1&#x20;vAct_modexBox_image_1481274682728_css" style="width:24px;height:24px;"><img style="cursor:default;width:100%;height:100%;" src="http&#x3A;&#x2F;&#x2F;fl1.gtimg.com&#x2F;flpartition0&#x2F;7088&#x2F;631007088&#x2F;635&#x2F;70409517502299557113831763401231.png&#x21;t48x48.png" id="imageId_584a76736b9ec" class="imageId_584a76736b9ec" data-scaling="scale"></img></div><!-- vAct_modexBox_image_1481274682728 --></div>

<div id="vAct_modexBox_image_1481274773123" class="VACT_modelBox&#x20;vAct_modexBox_image_1481274773123&#x20;" data-align="" style="position:absolute;width:24px;height:24px;left:19px;z-index:50024;top:988px;"><div class="v_image_style1&#x20;vAct_modexBox_image_1481274773123_css" style="width:24px;height:24px;"><img style="cursor:default;width:100%;height:100%;" src="http&#x3A;&#x2F;&#x2F;fl1.gtimg.com&#x2F;flpartition0&#x2F;7088&#x2F;631007088&#x2F;635&#x2F;70409517502299557113831763401231.png&#x21;t48x48.png" id="imageId_584a767377188" class="imageId_584a767377188" data-scaling="scale"></img></div><!-- vAct_modexBox_image_1481274773123 --></div>

<div id="vAct_modexBox_image_1481274844898" class="VACT_modelBox&#x20;vAct_modexBox_image_1481274844898&#x20;" data-align="" style="position:absolute;width:320px;height:189px;left:0px;z-index:50026;top:248px;"><div class="v_image_style1&#x20;vAct_modexBox_image_1481274844898_css" style="width:320px;height:189px;"><img style="cursor:default;width:100%;height:100%;" src="http&#x3A;&#x2F;&#x2F;fl4.gtimg.com&#x2F;flpartition0&#x2F;7088&#x2F;631007088&#x2F;642&#x2F;2142208841950297514791692610729.jpg" id="imageId_584a76737c1df" class="imageId_584a76737c1df" data-scaling="scale"></img></div><!-- vAct_modexBox_image_1481274844898 --></div>

<div id="vAct_modexBox_arrowLine_1481274936606" class="VACT_modelBox&#x20;vAct_modexBox_arrowLine_1481274936606&#x20;" data-align="" style="position:absolute;width:320px;height:30px;left:-1px;z-index:50027;top:212px;"><div container="1" type="arrowLine" class="v_arrowLine_st&lt;x&gt;yle1&#x20;vAct_modexBox_arrowLine_1481274936606_css" style="width:320px;height:30px;"><div class="lineWrap"><div class="leftArrow"></div><div class="lineBox"><div class="line"></div></div><div class="rightArrow"></div></div></div><!-- vAct_modexBox_arrowLine_1481274936606 --></div>

<div id="vAct_modexBox_arrowLine_1481274989751" class="VACT_modelBox&#x20;vAct_modexBox_arrowLine_1481274989751&#x20;" data-align="" style="position:absolute;width:320px;height:30px;left:0px;z-index:50028;top:1117px;"><div container="1" type="arrowLine" class="v_arrowLine_st&lt;x&gt;yle1&#x20;vAct_modexBox_arrowLine_1481274989751_css" style="width:320px;height:30px;"><div class="lineWrap"><div class="leftArrow"></div><div class="lineBox"><div class="line"></div></div><div class="rightArrow"></div></div></div><!-- vAct_modexBox_arrowLine_1481274989751 --></div>

<div id="vAct_modexBox_button_1481275333987" class="VACT_modelBox&#x20;vAct_modexBox_button_1481275333987&#x20;" data-align="" style="position:absolute;width:256px;height:57px;left:29px;z-index:50034;top:1151px;"><button onclick="window.location.href='http://www.zuinanji.net'" id="buttonId_584a7aa17c92f" type="button" class="v_button_style5&#x20;vAct_modexBox_button_1481275333987_css" style="width:256px;height:57px;">访问官网</button><!-- vAct_modexBox_button_1481275333987 --></div>

<div id="vAct_modexBox_button_1481275420054" class="VACT_modelBox&#x20;vAct_modexBox_button_1481275420054&#x20;" data-align="" style="position:absolute;width:256px;height:57px;left:30px;z-index:50035;top:1237px;"><button id="buttonId_584a7b388608f" type="button" class="v_button_style5&#x20;vAct_modexBox_button_1481275420054_css" style="width:256px;height:57px;">电话：18575521512</button><!-- vAct_modexBox_button_1481275420054 --></div>

<div id="vAct_modexBox_phone_1481276158055" class="VACT_modelBox&#x20;vAct_modexBox_phone_1481276158055&#x20;" data-align="" style="position:absolute;width:185px;height:91px;left:50px;z-index:50040;top:1237px;"><div class="v_phone_style1&#x20;vAct_modexBox_phone_1481276158055_css" style="width:185px;height:91px;"><a href="tel:18575521512" style="width:185px;height:91px;position:absolute;top:0px;"><img src="http&#x3A;&#x2F;&#x2F;fl3.gtimg.com&#x2F;flpartition0&#x2F;2112&#x2F;2000682112&#x2F;711&#x2F;5247185112062076100611237101909.png&#x3F;rd&#x3D;6250164" alt="&#x62E8;&#x6253;&#x7535;&#x8BDD;" title="&#x62E8;&#x6253;&#x7535;&#x8BDD;" style="width:185px;height:91px;position:absolute;top:0px;"></img></a></div><!-- vAct_modexBox_phone_1481276158055 --></div></div>
        </div>
    </div>
    <!-- 底部 -->
    <div class="VACT_footererWrapper_box">
        <div id="VACT_footererWrapper" class="VACT_footererWrapper vAct_modexBox_footer">
            <div container="1" class="VACT_inner"><!-- vAct_modexBox_footer --></div>
        </div>
    </div>
    <!-- 流式布局 -->
    <div class="VACT_FlowlayoutWrapper"><!-- VACT_FlowlayoutWrapper --></div>
</div>


</body>
</html>

