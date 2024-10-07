*,*:before,*:after{
	box-sizing:border-box;
}
:root{
	--index:calc(1vw + 1vh);
	--indexW:1vw;
	--indexH:1vh;
}
 body{
	position:relative;
	margin:0 auto;
	
	text-rendering: optimizeLegibility;
}
.WWin{
	min-width:100vw
}
.HWin{
	min-height:100vh
}
dl,ul,ol,div,section{
	line-height:0;
	font-size:0
}

h1,h2,h3,h4,p,input,figure,blockquote,dl,dd, ul, ol{
	margin:0;
	text-rendering:optimizeSpeed
}
input,button,ul,ol{
	padding:0px;
}
hr{
	border-width:0
}
a {
	color:inherit;
}

mark {
	background: transparent;
}

#body.MXAT .containPaint {
	contain: paint;
}

.contentBox{
	box-sizing:content-box;
}
.borderBoxBox{
	box-sizing: border-box;
}
.inline,input,button,textarea,select,a,strong,em,span,i,time,b,nobr,abbr,mark{
	font-size:inherit;
	line-height:inherit;
	font-weight:inherit;
	text-decoration:none
}
 
ul{
	list-style:none
}
button{
	border:none
}
table tr th{
	font-style:normal
}
select,video{
	width:100%
}
input{
	min-width:15px
}
img,video,.inline{
	max-width:100%
}
img{
	height:auto
}
img.-hor{
	min-width:100%;
	max-width:200%;
	height:100%
}
svg{
	width:1.5rem;
	height:1.5rem
}
svg.-auto{
	width:auto;
	height:auto;
}



.autoSize,.autoW{
	width:auto !important
}

.autoSize,.autoH{
	height:auto !important
}
.b900{
	font-weight:900 !important
}
.b800{
	font-weight:800 !important
}
.b700{
	font-weight:700 !important
}
.b600{
	font-weight:600 !important
}
.b500{
	font-weight:500 !important
}
 .b400{
	font-weight:400 !important
}
.b300{
	font-weight:300 !important
}
.b200{
	font-weight:200 !important
}
.b100{
	font-weight:100 !important
}
.noEventsAll *{
	pointer-events:none !important
}
.yesEventsAll *{
	pointer-events:all !important
}
.noEvents{
	pointer-events:none !important
}
.yesEvents{
	pointer-events:all !important
}
.Inline{
	display:inline !important
}
.float{
	float:left
}
.floatR{
	float:right
}
.clear {
	clear: both;
}
.lie>*,.inline{
	display:inline-block;
	vertical-align:top
}
.lie>*{
	width:auto
}


#body.Z2 .noneZ2,
#body .En, #body .Ru, body .none,.Rano,body meta{
	display:none
}


.Fade,
.Start-fade,
.Start .fade {opacity: 0;}

#body.Z2 .blockZ2,
#body .Block,
#body.load .rano,
#body.en .En,
#body.ru .Ru,
body,img,video,input,.block{
	display:block
}
.None{
	display:none !important
}

.Spot,
#body > .Abs,
.Abs{
	position:absolute
}
.Milk{
	bottom:100%;
}
.Abs.-t{
	top:0;
}
.Abs.-left{
	right:100%
}
.Abs.-lt{
	left:0;
	top:0;
}
.Abs.-ltb{
	left:0;
	top:0;
	bottom:0;
}
.Abs.-lb{
	left:0;
	bottom:0
}
.Abs.-l{
	left:0;
}
.Abs.-r{
	right:0;
}

.Abs.-right{
	left:100%;
}

.Abs.-b{
	bottom:0;
}
.Abs.-bottom{
	top:100%;
}
.Abs.-top{
	bottom:100%;
}
.Abs.-rt{
	right:0;
	top:0;
}
.Abs.-rb{
	right:0;
	bottom:0;
}

.Abs.-tb{
	top:0;
	bottom:0;
}

.Abs.x-navBottom {
	bottom:30px;
}

.-All,.Abs.-all{
	bottom:0;
	left:0;
	top:0;
	right:0;
}

.Spot.-center {
	left:50%;
	top:50%;
}

.Spot.-slit {
	left:50%;
	top:0;
	bottom:0;
}



#body .Fix{
	position:fixed;
}
.relative{
	position:relative;
}
.hidden{
	overflow:hidden;
}
.menu.lie>*{
	margin-bottom:0;
}

.rotate-l{
	transform:rotate(90deg);
}
 .rotate-l2{
	transform:rotate(180deg);
}
.rotate-r{
	transform:rotate(-90deg);
}
.rotate-r2{
	transform:rotate(-180deg);
}
hr,.ghost,.visible,.Op,.opVersa{
	opacity:0;
}
.Nowrap *,.nowrap{
	white-space:nowrap;
}

@media (min-width:800px) and (max-width:8000px){
	#body,.body{
		max-width:5200px;
	}
	#body .Abs_PC{
		position:absolute;
	}
	#body .Abs_PC.-all{
		bottom:0;
		left:0;
		top:0;
		right:0;
	}
	#body .Abs_PC.-t{
		top:0
	}
	#body .Abs_PC.-l{
		left:0
	}
	#body .Abs_PC.-r{
		right:0
	}
	#body .Abs_PC.-rb{
		right:0;
		bottom:0
	}
	.HWin_PC{
		min-height:100vh;
	}
	#body .Abs_PC.-right{
		left:100%;
	}


	#body:not(.asideClose) .show-asideClose,
	#body.asideClose .show-asideOpen,
	.none_PC{
		display:none !important;
	}
	.noEvents_PC{
		pointer-events:none !important;
	}
	.inline_PC{
		display:inline-block;
	}
	.nowrap_PC{
		white-space:nowrap;
	}
	.hidden_PC{
		overflow:hidden;
	}
	.nowrap-max{
		max-width:160px;
	}
	.relative_PC{
		position:relative;
	}
	.gstrm{
		display:none;
	}
	.Abs.-rightScroll{
		right:16px
	}
	.shift-left_PC{
		margin-left:-7px;
	}
	.shift-left_SPC{
		margin-left:-5px;
	}
}
@media (min-width:1361px) and (max-width:6000px){
	.stop_80{
		display:none !important
	}
}

@media screen and (max-width:1816px){
	.none_200{
		display:none !important
	}
	.block_200{
		display:block
	}
}

@media screen and (max-width:1616px){
	.none_100{
		display:none !important
	}
	.block_100{
		display:block
	}
}


@media screen and (max-width:1446px){
	.none_90{
		display:none !important
	}
	.block_90{
		display:block
	}
}


@media screen and (max-width:1360px){
	.none_80{
		display:none !important
	}
	.block_80{
		display:block
	}
}


@media screen and (max-width:1280px){
	.none_70{
		display:none !important
	}
	#body .block_70{
		display:block
	}
}

@media (min-width:799px) and (max-width:1280px){
	#body .block-70{
		display:block
	}
}


@media screen and (max-width:1143px){
	.none_60{
		display:none !important
	}
	.block_60{
		display:block
	}
	.flex_60 {
		display:flex !important;
	}
}

@media (min-width:799px) and (max-width:1080px){
	#body.AR_v .Beyond_ARV,
	.flex-beyond,
	.Beyond {display:flex !important}

	.Beyond_inlneBlock {display:inline-block !important}

	.hidden_beyond{
		overflow:hidden;
	}

	.none_Beyond {
		display:none;
	}
}
@media (min-width:799px) and (max-width:1080px){
	.none-beyond{
		display:none !important
	}
}
@media screen and (max-width:1080px){
	.none_beyond{
		display:none !important
	}
	.block_beyond{
		display:block !important
	}
}
@media screen and (max-width:920px){
	.none_pad{
		display:none !important
	}
}
@media screen and (max-width:799px){

	#body .Fix_mbl{
		position:fixed;
	}

	#body .Abs_mbl.-left{
		right:100%;
	}


	.float_mbl {
		float:left;
	}
	.ghostMbl{
		opacity:0;
	}

	#body .morda-display {
		display:none;
	}
	
	.none_mbl{
		display:none !important
	}

	.hidden_mbl {
		overflow: hidden;
	}
	

	.block_mbl {
		display:block
	}

	#body.schema-morda .morda-display,
	.flex_mbl{
		display:flex;
	}

	.op_mbl{
		opacity:0
	}
	.relative_mbl{
		position:relative
	}
	.Abs.-rightScroll{
		right:0
	}

	.Abs_mbl{
		position: absolute;
	}

	.Abs_mbl.-lt,
	.Abs_mbl.-rt{
		top:0;
	}

	.Abs_mbl.-l,
	.Abs_mbl.-lt{
		left:0;
	}

	.Abs_mbl.-r,
	.Abs_mbl.-rt{
		right:0;
	}
}
@media (min-width:481px) and (max-width:799px){
	.gstrm.var-480{
		display:none
	}
}

@media screen and (max-width:799px){
	#body,.Mbl{
		max-width:480px
	}
	.b600_mbl{
		font-weight:600 !important
	}
	.hidden_mbl{
		overflow:hidden;
	}
}

#body.load .Preloader {display:none}
.Preloader {
	width: 14px;
	height: 14px;
	z-index: 0 !important;
}
  
.Preloader {
	  animation: Preloader_clock 500ms linear infinite;
}
  
.Preloader,
.Preloader::after {
	  content: '';
	  position: absolute;
	  right: 0;
	  bottom: 0;
}

.Preloader {
	left: 45%;
	top: 45%;
}

.Preloader::after {
	left: 0;
	top: 0;
}
  
.Preloader::after {
	opacity:.5;
	border: 2px solid #000;
	border-radius: 50%;
	border-left-color: transparent;
	border-bottom-color: transparent;
	animation: Preloader_rotate 1000ms cubic-bezier(.4,0,.22,1) infinite;
}

.Preloader.vol-white::after {
	border-top-color: #fff;
	border-right-color: #fff;
}

  
@keyframes Preloader_rotate {
	0% { -webkit-transform: rotate(0) }
	50% { -webkit-transform: rotate(-140deg) }
	100% { -webkit-transform: rotate(0) }
}
@keyframes Preloader_clock {
	0% { transform: rotate(0deg) }
	100% { transform: rotate(360deg) }
}

  