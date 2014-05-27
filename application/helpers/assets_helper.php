<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function assets() {
    echo "<!-- Bootstrap core CSS -->\n";
    echo "<link href=\"".base_url()."assets/css/bootstrap.css\" rel=\"stylesheet\">\n";

    echo "<!-- Add custom CSS here -->\n";
    echo "<link href=\"".base_url()."assets/css/sb-admin.css\" rel=\"stylesheet\">\n";
    echo "<link href=\"".base_url()."assets/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">\n";

    echo "<!-- Bootstrap core JavaScript -->\n";
    echo "<script src=\"".base_url()."assets/js/jquery.min.js\"></script>\n";
    echo "<script src=\"".base_url()."assets/js/bootstrap.js\"></script>\n";
}
function assets_url()
{
    return base_url()."assets/";
}
function assets_loading() {
    echo "<link href=\"".base_url()."assets/css/loading.css\" rel=\"stylesheet\">\n";
}
function assets_default() {
    echo "<!-- Bootstrap core CSS -->\n";
    echo "<link href=\"".base_url()."assets/css/2___bootstrap.css\" rel=\"stylesheet\">\n";
    echo "<link href=\"".base_url()."assets/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">\n";

    echo "<!-- Bootstrap core JavaScript -->\n";
    echo "<script src=\"".base_url()."assets/js/jquery.min.js\"></script>\n";
    echo "<script src=\"".base_url()."assets/js/bootstrap.js\"></script>\n";
}

function assets_modal() {
    echo "<!-- JavaScript -->\n";
    echo "<script src=\"".base_url()."assets/js/jquery.leanModal.min.js\"></script>\n";
  
}
function barcode_icon() {
    return "<img width='32px' src='".base_url()."assets/icons/barcode-icon.png' onMouseOver=src='".base_url()."assets/icons/barcode-icon-hover.png' onMouseOut=src='".base_url()."assets/icons/barcode-icon.png'>";
}
function hand_icon() {
    return "<img width='38px' src='".base_url()."assets/icons/hand.png'  onMouseOver=src='".base_url()."assets/icons/hand-hover.png' onMouseOut=src='".base_url()."assets/icons/hand.png'>";
}

function assets_colorbox() {
    echo "<!-- Colorbox Modal -->\n";
    echo "<script src=\"".base_url()."assets/js/jquery.colorbox-min.js\"></script>\n";
    echo "<style>#colorbox, #cboxOverlay, #cboxWrapper{position:absolute; top:0; left:0; z-index:9999; overflow:hidden;}
#cboxWrapper {max-width:none;}
#cboxOverlay{position:fixed; width:100%; height:100%;}
#cboxMiddleLeft, #cboxBottomLeft{clear:left;}
#cboxContent{position:relative;}
#cboxLoadedContent{overflow:auto; -webkit-overflow-scrolling: touch;}
#cboxTitle{margin:0;}
#cboxLoadingOverlay, #cboxLoadingGraphic{position:absolute; top:0; left:0; width:100%; height:100%;}
#cboxPrevious, #cboxNext, #cboxClose, #cboxSlideshow{cursor:pointer;}
.cboxPhoto{float:left; margin:auto; border:0; display:block; max-width:none; -ms-interpolation-mode:bicubic;}
.cboxIframe{width:100%; height:100%; display:block; border:0;}
#colorbox, #cboxContent, #cboxLoadedContent{box-sizing:content-box; -moz-box-sizing:content-box; -webkit-box-sizing:content-box;}
#cboxOverlay{background:#000;}
#colorbox{outline:0;}
#cboxTopLeft{width:21px; height:21px; background:url(".base_url()."assets/css/images/controls.png) no-repeat -101px 0;}
#cboxTopRight{width:21px; height:21px; background:url(".base_url()."assets/css/images/controls.png) no-repeat -130px 0;}
#cboxBottomLeft{width:21px; height:21px; background:url(".base_url()."assets/css/images/controls.png) no-repeat -101px -29px;}
#cboxBottomRight{width:21px; height:21px; background:url(".base_url()."assets/css/images/controls.png) no-repeat -130px -29px;}
#cboxMiddleLeft{width:21px; background:url(".base_url()."assets/css/images/controls.png) left top repeat-y;}
#cboxMiddleRight{width:21px; background:url(".base_url()."assets/css/images/controls.png) right top repeat-y;}
#cboxTopCenter{height:21px; background:url(".base_url()."assets/css/images/border.png) 0 0 repeat-x;}
#cboxBottomCenter{height:21px; background:url(".base_url()."assets/css/images/border.png) 0 -29px repeat-x;}
#cboxContent{background:#fff; overflow:hidden;}
.cboxIframe{background:#fff;}
#cboxError{padding:50px; border:1px solid #ccc;}
#cboxLoadedContent{margin-bottom:28px;}
#cboxTitle{position:absolute; bottom:4px; left:0; text-align:center; width:100%; color:#949494;}
#cboxCurrent{position:absolute; bottom:4px; left:58px; color:#949494;}
#cboxLoadingOverlay{background:url(".base_url()."assets/css/images/loading_background.png) no-repeat center center;}
#cboxLoadingGraphic{background:url(".base_url()."assets/css/images/loading.gif) no-repeat center center;}
#cboxPrevious, #cboxNext, #cboxSlideshow, #cboxClose {border:0; padding:0; margin:0; overflow:visible; width:auto; background:none; }
#cboxPrevious:active, #cboxNext:active, #cboxSlideshow:active, #cboxClose:active {outline:0;}
#cboxSlideshow{position:absolute; bottom:4px; right:30px; color:#0092ef;}
#cboxPrevious{position:absolute; bottom:0; left:0; background:url(".base_url()."assets/css/images/controls.png) no-repeat -75px 0; width:25px; height:25px; text-indent:-9999px;}
#cboxPrevious:hover{background-position:-75px -25px;}
#cboxNext{position:absolute; bottom:0; left:27px; background:url(".base_url()."assets/css/images/controls.png) no-repeat -50px 0; width:25px; height:25px; text-indent:-9999px;}
#cboxNext:hover{background-position:-50px -25px;}
#cboxClose{position:absolute; bottom:0; right:0; background:url(".base_url()."assets/css/images/controls.png) no-repeat -25px 0; width:25px; height:25px; text-indent:-9999px;}
#cboxClose:hover{background-position:-25px -25px;}
.cboxIE #cboxTopLeft,
.cboxIE #cboxTopCenter,
.cboxIE #cboxTopRight,
.cboxIE #cboxBottomLeft,
.cboxIE #cboxBottomCenter,
.cboxIE #cboxBottomRight,
.cboxIE #cboxMiddleLeft,
.cboxIE #cboxMiddleRight {filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF);}</style>";
    
}
function assets_stupidtable() {
      echo "<script src=\"".base_url()."assets/js/stupidtable.min.js\"></script>\n";
}

function assets_handsontable() {
    echo "<script src=\"".base_url()."assets/js/jquery.handsontable.full.js\"></script>\n";
    echo "<link href=\"".base_url()."assets/css/jquery.handsontable.full.css\" rel=\"stylesheet\">\n";  
}

function assets_icheck() {

    echo "<!-- iCheck -->\n";
    echo "<link href=\"".base_url()."assets/css/square/red.css\" rel=\"stylesheet\">\n";
    echo "<script src=\"".base_url()."assets/js/jquery.icheck.min.js\"></script>\n";
}
function assets_all() {
    assets();
    assets_modal();
    assets_icheck();
    assets_stupidtable();
}
function DateThai($strDate)
{
        date_default_timezone_set('Asia/Bangkok');
        $strYear = date("Y",strtotime($strDate))+543;
        $strMonth= date("n",strtotime($strDate));
        $strDay= date("j",strtotime($strDate));
        $strHour= date("H",strtotime($strDate));
        $strMinute= date("i",strtotime($strDate));
        $strSeconds= date("s",strtotime($strDate));
        $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
        $strMonthThai=$strMonthCut[$strMonth];
        return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
}
function TimeThai($strDate)
{
        date_default_timezone_set('Asia/Bangkok');
        $strHour= date("H",strtotime($strDate));
        $strMinute= date("i",strtotime($strDate));
        $strSeconds= date("s",strtotime($strDate));
        
        return "$strHour : $strMinute";
}