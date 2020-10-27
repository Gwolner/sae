<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("SAE - Sistema de Assistência Estudantil"); } else { echo strip_tags("SAE - Sistema de Assistência Estudantil"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
<?php
header("X-XSS-Protection: 0");
?>
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
 </SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_aluno/form_aluno_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_aluno_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_binicio_off = "<?php echo $this->arr_buttons['binicio_off']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bavanca_off = "<?php echo $this->arr_buttons['bavanca_off']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bretorna_off = "<?php echo $this->arr_buttons['bretorna_off']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
var Nav_bfinal_off  = "<?php echo $this->arr_buttons['bfinal_off']['type']; ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).show();
       $("#sc_b_ini_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_ini_" + str_pos).show();
       $("#gbl_sc_b_ini_off_" + str_pos).hide();
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).show();
       $("#sc_b_ret_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_ret_" + str_pos).show();
       $("#gbl_sc_b_ret_off_" + str_pos).hide();
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).hide();
       $("#sc_b_ini_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_ini_" + str_pos).hide();
       $("#gbl_sc_b_ini_off_" + str_pos).show();
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).hide();
       $("#sc_b_ret_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_ret_" + str_pos).hide();
       $("#gbl_sc_b_ret_off_" + str_pos).show();
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).show();
       $("#sc_b_fim_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_fim_" + str_pos).show();
       $("#gbl_sc_b_fim_off_" + str_pos).hide();
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).show();
       $("#sc_b_avc_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_avc_" + str_pos).show();
       $("#gbl_sc_b_avc_off_" + str_pos).hide();
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).hide();
       $("#sc_b_fim_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_fim_" + str_pos).hide();
       $("#gbl_sc_b_fim_off_" + str_pos).show();
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).hide();
       $("#sc_b_avc_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_avc_" + str_pos).hide();
       $("#gbl_sc_b_avc_off_" + str_pos).show();
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}
 function nm_marca_check(check_obj, tem_seq)
 {
    seq = 0;
    len_check = document.F1.elements.length;
    if (document.F1.elements[check_obj + "[]"])
    {
        tem_seq = "N";
    }
    else if (document.F1.elements[check_obj + "[0]"])
    {
        tem_seq = "S";
    }
    for (i = 0; i < len_check; i++)
    {
        tst_obj = check_obj + "[]";
        if (tem_seq == "S")
        {
            tst_obj = check_obj + "[" + seq + "]";
        }
        if (document.F1.elements[i].name == tst_obj)
        {
            document.F1.elements[i].checked = true;
            seq++;
        }
    }
 }
 function nm_limpa_check(check_obj, tem_seq)
 {
    seq = 0;
    len_check = document.F1.elements.length;
    if (document.F1.elements[check_obj + "[]"])
    {
        tem_seq = "N";
    }
    else if (document.F1.elements[check_obj + "[0]"])
    {
        tem_seq = "S";
    }
    for (i = 0; i < len_check; i++)
    {
        tst_obj = check_obj + "[]";
        if (tem_seq == "S")
        {
            tst_obj = check_obj + "[" + seq + "]";
        }
        if (document.F1.elements[i].name == tst_obj)
        {
            document.F1.elements[i].checked = false;
            seq++;
        }
    }
 }
<?php

include_once('form_aluno_jquery.php');

?>

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  var i, iTestWidth, iMaxLabelWidth = 0, $labelList = $(".scUiLabelWidthFix");
  for (i = 0; i < $labelList.length; i++) {
    iTestWidth = $($labelList[i]).width();
    sTestWidth = iTestWidth + "";
    if ("" == iTestWidth) {
      iTestWidth = 0;
    }
    else if ("px" == sTestWidth.substr(sTestWidth.length - 2)) {
      iTestWidth = parseInt(sTestWidth.substr(0, sTestWidth.length - 2));
    }
    iMaxLabelWidth = Math.max(iMaxLabelWidth, iTestWidth);
  }
  if (0 < iMaxLabelWidth) {
    $(".scUiLabelWidthFix").css("width", iMaxLabelWidth + "px");
  }
<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).load(function() {
   });
 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
    if ("hidden_bloco_0" == block_id) {
      scAjaxDetailHeight("form_fardamento_tradicional", "290");
      scAjaxDetailHeight("form_fardamento_educacao_fisica", "290");
    }
    if ("hidden_bloco_1" == block_id) {
      scAjaxDetailHeight("form_emprestimo", "520");
    }
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['recarga'];
}
?>
<body class="scFormPage" style="<?php echo $str_iframe_body; ?>">
<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("form_aluno_js0.php");
?>
<script type="text/javascript"> 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
 </script>
<form name="F1" method="post" 
               action="./" 
               target="_self"> 
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['insert_validation']; ?>">
<?php
}
?>
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="script_case_session" value="<?php  echo $this->form_encode_input(session_id()); ?>"> 
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>"> 
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" /> 
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_aluno'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_aluno'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<script type="text/javascript">
var scMsgDefTitle = "<?php echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl']; ?>";
var scMsgDefButton = "Ok";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->page; ?>";
</script>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0 >
 <tr>
  <td>
  <div class="scFormBorder">
   <table width='100%' cellspacing=0 cellpadding=0>
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['mostra_cab'] != "N"))
  {
?>
<tr><td>
<style>
#lin1_col1 { padding-left:9px; padding-top:7px;  height:27px; overflow:hidden; text-align:left;}			 
#lin1_col2 { padding-right:9px; padding-top:7px; height:27px; text-align:right; overflow:hidden;   font-size:12px; font-weight:normal;}
</style>

<div style="width: 100%">
 <div class="scFormHeader" style="height:11px; display: block; border-width:0px; "></div>
 <div style="height:37px; border-width:0px 0px 1px 0px;  border-style: dashed; border-color:#ddd; display: block">
 	<table style="width:100%; border-collapse:collapse; padding:0;">
    	<tr>
        	<td id="lin1_col1" class="scFormHeaderFont"><span><?php if ($this->nmgp_opcao == "novo") { echo "SAE - Sistema de Assistência Estudantil"; } else { echo "SAE - Sistema de Assistência Estudantil"; } ?></span></td>
            <td id="lin1_col2" class="scFormHeaderFont"><span><?php echo date($this->dateDefaultFormat()); ?></span></td>
        </tr>
    </table>		 
 </div>
</div>
</td></tr>
<?php
  }
?>
<tr><td>
<?php
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; text-align: center; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['empty_filter'] = true;
       }
  }
  else
  {
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="50%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['mensagem']))
    {
        $this->nm_new_label['mensagem'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $mensagem = $this->mensagem;
   $sStyleHidden_mensagem = '';
   if (isset($this->nmgp_cmp_hidden['mensagem']) && $this->nmgp_cmp_hidden['mensagem'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mensagem']);
       $sStyleHidden_mensagem = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mensagem = 'display: none;';
   $sStyleReadInp_mensagem = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mensagem']) && $this->nmgp_cmp_readonly['mensagem'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mensagem']);
       $sStyleReadLab_mensagem = '';
       $sStyleReadInp_mensagem = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mensagem']) && $this->nmgp_cmp_hidden['mensagem'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="mensagem" value="<?php echo $this->form_encode_input($mensagem) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_mensagem_label" id="hidden_field_label_mensagem" style="<?php echo $sStyleHidden_mensagem; ?>"><span id="id_label_mensagem"><?php echo $this->nm_new_label['mensagem']; ?></span></TD>
    <TD class="scFormDataOdd css_mensagem_line" id="hidden_field_data_mensagem" style="<?php echo $sStyleHidden_mensagem; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_mensagem_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="mensagem" value="<?php echo $this->form_encode_input($mensagem); ?>"><span id="id_ajax_label_mensagem"><?php echo nl2br($mensagem); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mensagem_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mensagem_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nome_aluno']))
    {
        $this->nm_new_label['nome_aluno'] = "Nome do aluno";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nome_aluno = $this->nome_aluno;
   $sStyleHidden_nome_aluno = '';
   if (isset($this->nmgp_cmp_hidden['nome_aluno']) && $this->nmgp_cmp_hidden['nome_aluno'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nome_aluno']);
       $sStyleHidden_nome_aluno = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nome_aluno = 'display: none;';
   $sStyleReadInp_nome_aluno = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nome_aluno']) && $this->nmgp_cmp_readonly['nome_aluno'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nome_aluno']);
       $sStyleReadLab_nome_aluno = '';
       $sStyleReadInp_nome_aluno = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nome_aluno']) && $this->nmgp_cmp_hidden['nome_aluno'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nome_aluno" value="<?php echo $this->form_encode_input($nome_aluno) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_nome_aluno_label" id="hidden_field_label_nome_aluno" style="<?php echo $sStyleHidden_nome_aluno; ?>"><span id="id_label_nome_aluno"><?php echo $this->nm_new_label['nome_aluno']; ?></span></TD>
    <TD class="scFormDataOdd css_nome_aluno_line" id="hidden_field_data_nome_aluno" style="<?php echo $sStyleHidden_nome_aluno; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nome_aluno_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="nome_aluno" value="<?php echo $this->form_encode_input($nome_aluno); ?>"><span id="id_ajax_label_nome_aluno"><?php echo nl2br($nome_aluno); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nome_aluno_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nome_aluno_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['curso']))
    {
        $this->nm_new_label['curso'] = "Curso";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $curso = $this->curso;
   $sStyleHidden_curso = '';
   if (isset($this->nmgp_cmp_hidden['curso']) && $this->nmgp_cmp_hidden['curso'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['curso']);
       $sStyleHidden_curso = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_curso = 'display: none;';
   $sStyleReadInp_curso = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['curso']) && $this->nmgp_cmp_readonly['curso'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['curso']);
       $sStyleReadLab_curso = '';
       $sStyleReadInp_curso = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['curso']) && $this->nmgp_cmp_hidden['curso'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="curso" value="<?php echo $this->form_encode_input($curso) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_curso_label" id="hidden_field_label_curso" style="<?php echo $sStyleHidden_curso; ?>"><span id="id_label_curso"><?php echo $this->nm_new_label['curso']; ?></span></TD>
    <TD class="scFormDataOdd css_curso_line" id="hidden_field_data_curso" style="<?php echo $sStyleHidden_curso; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_curso_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="curso" value="<?php echo $this->form_encode_input($curso); ?>"><span id="id_ajax_label_curso"><?php echo nl2br($curso); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_curso_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_curso_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['turno']))
    {
        $this->nm_new_label['turno'] = "Turno";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $turno = $this->turno;
   $sStyleHidden_turno = '';
   if (isset($this->nmgp_cmp_hidden['turno']) && $this->nmgp_cmp_hidden['turno'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['turno']);
       $sStyleHidden_turno = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_turno = 'display: none;';
   $sStyleReadInp_turno = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['turno']) && $this->nmgp_cmp_readonly['turno'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['turno']);
       $sStyleReadLab_turno = '';
       $sStyleReadInp_turno = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['turno']) && $this->nmgp_cmp_hidden['turno'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="turno" value="<?php echo $this->form_encode_input($turno) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_turno_label" id="hidden_field_label_turno" style="<?php echo $sStyleHidden_turno; ?>"><span id="id_label_turno"><?php echo $this->nm_new_label['turno']; ?></span></TD>
    <TD class="scFormDataOdd css_turno_line" id="hidden_field_data_turno" style="<?php echo $sStyleHidden_turno; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_turno_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="turno" value="<?php echo $this->form_encode_input($turno); ?>"><span id="id_ajax_label_turno"><?php echo nl2br($turno); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_turno_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_turno_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['matricula']))
    {
        $this->nm_new_label['matricula'] = "Matrícula";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $matricula = $this->matricula;
   $sStyleHidden_matricula = '';
   if (isset($this->nmgp_cmp_hidden['matricula']) && $this->nmgp_cmp_hidden['matricula'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['matricula']);
       $sStyleHidden_matricula = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_matricula = 'display: none;';
   $sStyleReadInp_matricula = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['matricula']) && $this->nmgp_cmp_readonly['matricula'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['matricula']);
       $sStyleReadLab_matricula = '';
       $sStyleReadInp_matricula = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['matricula']) && $this->nmgp_cmp_hidden['matricula'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="matricula" value="<?php echo $this->form_encode_input($matricula) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_matricula_label" id="hidden_field_label_matricula" style="<?php echo $sStyleHidden_matricula; ?>"><span id="id_label_matricula"><?php echo $this->nm_new_label['matricula']; ?></span></TD>
    <TD class="scFormDataOdd css_matricula_line" id="hidden_field_data_matricula" style="<?php echo $sStyleHidden_matricula; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_matricula_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="matricula" value="<?php echo $this->form_encode_input($matricula); ?>"><span id="id_ajax_label_matricula"><?php echo nl2br($matricula); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_matricula_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_matricula_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cpf']))
    {
        $this->nm_new_label['cpf'] = "CPF";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cpf = $this->cpf;
   $sStyleHidden_cpf = '';
   if (isset($this->nmgp_cmp_hidden['cpf']) && $this->nmgp_cmp_hidden['cpf'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cpf']);
       $sStyleHidden_cpf = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cpf = 'display: none;';
   $sStyleReadInp_cpf = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cpf']) && $this->nmgp_cmp_readonly['cpf'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cpf']);
       $sStyleReadLab_cpf = '';
       $sStyleReadInp_cpf = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cpf']) && $this->nmgp_cmp_hidden['cpf'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cpf" value="<?php echo $this->form_encode_input($cpf) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cpf_label" id="hidden_field_label_cpf" style="<?php echo $sStyleHidden_cpf; ?>"><span id="id_label_cpf"><?php echo $this->nm_new_label['cpf']; ?></span></TD>
    <TD class="scFormDataOdd css_cpf_line" id="hidden_field_data_cpf" style="<?php echo $sStyleHidden_cpf; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cpf_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="cpf" value="<?php echo $this->form_encode_input($cpf); ?>"><span id="id_ajax_label_cpf"><?php echo nl2br($cpf); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cpf_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cpf_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['celular']))
    {
        $this->nm_new_label['celular'] = "Celular";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $celular = $this->celular;
   $sStyleHidden_celular = '';
   if (isset($this->nmgp_cmp_hidden['celular']) && $this->nmgp_cmp_hidden['celular'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['celular']);
       $sStyleHidden_celular = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_celular = 'display: none;';
   $sStyleReadInp_celular = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['celular']) && $this->nmgp_cmp_readonly['celular'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['celular']);
       $sStyleReadLab_celular = '';
       $sStyleReadInp_celular = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['celular']) && $this->nmgp_cmp_hidden['celular'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="celular" value="<?php echo $this->form_encode_input($celular) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_celular_label" id="hidden_field_label_celular" style="<?php echo $sStyleHidden_celular; ?>"><span id="id_label_celular"><?php echo $this->nm_new_label['celular']; ?></span></TD>
    <TD class="scFormDataOdd css_celular_line" id="hidden_field_data_celular" style="<?php echo $sStyleHidden_celular; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_celular_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="celular" value="<?php echo $this->form_encode_input($celular); ?>"><span id="id_ajax_label_celular"><?php echo nl2br($celular); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_celular_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_celular_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['email']))
    {
        $this->nm_new_label['email'] = "Email";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $email = $this->email;
   $sStyleHidden_email = '';
   if (isset($this->nmgp_cmp_hidden['email']) && $this->nmgp_cmp_hidden['email'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['email']);
       $sStyleHidden_email = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_email = 'display: none;';
   $sStyleReadInp_email = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['email']) && $this->nmgp_cmp_readonly['email'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['email']);
       $sStyleReadLab_email = '';
       $sStyleReadInp_email = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['email']) && $this->nmgp_cmp_hidden['email'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="email" value="<?php echo $this->form_encode_input($email) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_email_label" id="hidden_field_label_email" style="<?php echo $sStyleHidden_email; ?>"><span id="id_label_email"><?php echo $this->nm_new_label['email']; ?></span></TD>
    <TD class="scFormDataOdd css_email_line" id="hidden_field_data_email" style="<?php echo $sStyleHidden_email; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_email_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="email" value="<?php echo $this->form_encode_input($email); ?>"><span id="id_ajax_label_email"><?php echo nl2br($email); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_email_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_email_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fardamento']))
    {
        $this->nm_new_label['fardamento'] = "Fardamento";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fardamento = $this->fardamento;
   $sStyleHidden_fardamento = '';
   if (isset($this->nmgp_cmp_hidden['fardamento']) && $this->nmgp_cmp_hidden['fardamento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fardamento']);
       $sStyleHidden_fardamento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fardamento = 'display: none;';
   $sStyleReadInp_fardamento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fardamento']) && $this->nmgp_cmp_readonly['fardamento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fardamento']);
       $sStyleReadLab_fardamento = '';
       $sStyleReadInp_fardamento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fardamento']) && $this->nmgp_cmp_hidden['fardamento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fardamento" value="<?php echo $this->form_encode_input($fardamento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fardamento_label" id="hidden_field_label_fardamento" style="<?php echo $sStyleHidden_fardamento; ?>"><span id="id_label_fardamento"><?php echo $this->nm_new_label['fardamento']; ?></span></TD>
    <TD class="scFormDataOdd css_fardamento_line" id="hidden_field_data_fardamento" style="<?php echo $sStyleHidden_fardamento; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_fardamento_line" style="vertical-align: top;padding: 0px">
<?php
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_tradicional']['embutida_proc']  = false;
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_tradicional']['embutida_form']  = true;
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_tradicional']['embutida_call']  = true;
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_tradicional']['embutida_multi'] = false;
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_tradicional']['embutida_liga_form_insert'] = 'on';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_tradicional']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_tradicional']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_tradicional']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_tradicional']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_tradicional']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_tradicional']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_tradicional']['embutida_liga_tp_pag'] = 'parcial';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_tradicional']['embutida_parms'] = "NM_btn_insert?#?S?@?NM_btn_update?#?S?@?NM_btn_delete?#?S?@?NM_btn_navega?#?N?@?";
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_tradicional']['foreign_key']['id_aluno'] = $this->nmgp_dados_form['id_aluno'];
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_tradicional']['where_filter'] = "id_aluno = " . $this->nmgp_dados_form['id_aluno'] . "";
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_tradicional']['where_detal']  = "id_aluno = " . $this->nmgp_dados_form['id_aluno'] . "";
 if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['total'] < 0)
 {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_tradicional']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_aluno_empty.htm' : $this->Ini->link_form_fardamento_tradicional_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page . '&script_case_session=' . session_id() . '&script_case_detail=Y&sc_ifr_height=290');
?>
<iframe border="0" id="nmsc_iframe_liga_form_fardamento_tradicional"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="290" width="370" name="nmsc_iframe_liga_form_fardamento_tradicional"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fardamento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fardamento_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fardamento_ed_fis']))
    {
        $this->nm_new_label['fardamento_ed_fis'] = "Fardamento Educação Física";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fardamento_ed_fis = $this->fardamento_ed_fis;
   $sStyleHidden_fardamento_ed_fis = '';
   if (isset($this->nmgp_cmp_hidden['fardamento_ed_fis']) && $this->nmgp_cmp_hidden['fardamento_ed_fis'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fardamento_ed_fis']);
       $sStyleHidden_fardamento_ed_fis = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fardamento_ed_fis = 'display: none;';
   $sStyleReadInp_fardamento_ed_fis = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fardamento_ed_fis']) && $this->nmgp_cmp_readonly['fardamento_ed_fis'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fardamento_ed_fis']);
       $sStyleReadLab_fardamento_ed_fis = '';
       $sStyleReadInp_fardamento_ed_fis = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fardamento_ed_fis']) && $this->nmgp_cmp_hidden['fardamento_ed_fis'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fardamento_ed_fis" value="<?php echo $this->form_encode_input($fardamento_ed_fis) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fardamento_ed_fis_label" id="hidden_field_label_fardamento_ed_fis" style="<?php echo $sStyleHidden_fardamento_ed_fis; ?>"><span id="id_label_fardamento_ed_fis"><?php echo $this->nm_new_label['fardamento_ed_fis']; ?></span></TD>
    <TD class="scFormDataOdd css_fardamento_ed_fis_line" id="hidden_field_data_fardamento_ed_fis" style="<?php echo $sStyleHidden_fardamento_ed_fis; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_fardamento_ed_fis_line" style="vertical-align: top;padding: 0px">
<?php
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_educacao_fisica']['embutida_proc']  = false;
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_educacao_fisica']['embutida_form']  = true;
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_educacao_fisica']['embutida_call']  = true;
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_educacao_fisica']['embutida_multi'] = false;
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_educacao_fisica']['embutida_liga_form_insert'] = 'on';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_educacao_fisica']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_educacao_fisica']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_educacao_fisica']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_educacao_fisica']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_educacao_fisica']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_educacao_fisica']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_educacao_fisica']['embutida_liga_tp_pag'] = 'parcial';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_educacao_fisica']['embutida_parms'] = "id_aluno?#?" . $this->nmgp_dados_form['id_aluno'] . "?@?NM_btn_insert?#?S?@?NM_btn_update?#?S?@?NM_btn_delete?#?S?@?NM_btn_navega?#?N?@?";
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_educacao_fisica']['foreign_key']['id_aluno'] = $this->nmgp_dados_form['id_aluno'];
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_educacao_fisica']['where_filter'] = "id_aluno = " . $this->nmgp_dados_form['id_aluno'] . "";
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_educacao_fisica']['where_detal']  = "id_aluno = " . $this->nmgp_dados_form['id_aluno'] . "";
 if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['total'] < 0)
 {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_fardamento_educacao_fisica']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_aluno_empty.htm' : $this->Ini->link_form_fardamento_educacao_fisica_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page . '&script_case_session=' . session_id() . '&script_case_detail=Y&sc_ifr_height=290');
?>
<iframe border="0" id="nmsc_iframe_liga_form_fardamento_educacao_fisica"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="290" width="370" name="nmsc_iframe_liga_form_fardamento_educacao_fisica"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fardamento_ed_fis_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fardamento_ed_fis_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 


   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_1"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="25" height="">
<div id="div_hidden_bloco_1"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_1" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['emprestimos']))
    {
        $this->nm_new_label['emprestimos'] = "Empréstimos";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emprestimos = $this->emprestimos;
   $sStyleHidden_emprestimos = '';
   if (isset($this->nmgp_cmp_hidden['emprestimos']) && $this->nmgp_cmp_hidden['emprestimos'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emprestimos']);
       $sStyleHidden_emprestimos = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emprestimos = 'display: none;';
   $sStyleReadInp_emprestimos = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emprestimos']) && $this->nmgp_cmp_readonly['emprestimos'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emprestimos']);
       $sStyleReadLab_emprestimos = '';
       $sStyleReadInp_emprestimos = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emprestimos']) && $this->nmgp_cmp_hidden['emprestimos'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="emprestimos" value="<?php echo $this->form_encode_input($emprestimos) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_emprestimos_label" id="hidden_field_label_emprestimos" style="<?php echo $sStyleHidden_emprestimos; ?>"><span id="id_label_emprestimos"><?php echo $this->nm_new_label['emprestimos']; ?></span></TD>
    <TD class="scFormDataOdd css_emprestimos_line" id="hidden_field_data_emprestimos" style="<?php echo $sStyleHidden_emprestimos; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_emprestimos_line" style="vertical-align: top;padding: 0px">
<?php
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_emprestimo']['embutida_proc']  = false;
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_emprestimo']['embutida_form']  = true;
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_emprestimo']['embutida_call']  = true;
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_emprestimo']['embutida_multi'] = true;
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_emprestimo']['embutida_liga_form_insert'] = 'on';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_emprestimo']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_emprestimo']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_emprestimo']['embutida_liga_form_btn_nav'] = 'on';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_emprestimo']['embutida_liga_grid_edit'] = '';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_emprestimo']['embutida_liga_grid_edit_link'] = '';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_emprestimo']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_emprestimo']['embutida_liga_tp_pag'] = 'parcial';
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_emprestimo']['embutida_parms'] = "NM_btn_insert?#?S?@?NM_btn_update?#?S?@?NM_btn_delete?#?S?@?NM_btn_navega?#?S?@?";
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_emprestimo']['foreign_key']['id_aluno'] = $this->nmgp_dados_form['id_aluno'];
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_emprestimo']['where_filter'] = "id_aluno = " . $this->nmgp_dados_form['id_aluno'] . "";
 $_SESSION['sc_session'][$this->Ini->sc_page]['form_emprestimo']['where_detal']  = "id_aluno = " . $this->nmgp_dados_form['id_aluno'] . "";
 if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['total'] < 0)
 {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_emprestimo']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_aluno_empty.htm' : $this->Ini->link_form_emprestimo_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page . '&script_case_session=' . session_id() . '&script_case_detail=Y&sc_ifr_height=520');
?>
<iframe border="0" id="nmsc_iframe_liga_form_emprestimo"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="520" width="700" name="nmsc_iframe_liga_form_emprestimo"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emprestimos_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emprestimos_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['data_entrega']))
    {
        $this->nm_new_label['data_entrega'] = "Data de empréstimo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $data_entrega = $this->data_entrega;
   $sStyleHidden_data_entrega = '';
   if (isset($this->nmgp_cmp_hidden['data_entrega']) && $this->nmgp_cmp_hidden['data_entrega'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['data_entrega']);
       $sStyleHidden_data_entrega = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_data_entrega = 'display: none;';
   $sStyleReadInp_data_entrega = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['data_entrega']) && $this->nmgp_cmp_readonly['data_entrega'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['data_entrega']);
       $sStyleReadLab_data_entrega = '';
       $sStyleReadInp_data_entrega = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['data_entrega']) && $this->nmgp_cmp_hidden['data_entrega'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="data_entrega" value="<?php echo $this->form_encode_input($data_entrega) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_data_entrega_label" id="hidden_field_label_data_entrega" style="<?php echo $sStyleHidden_data_entrega; ?>"><span id="id_label_data_entrega"><?php echo $this->nm_new_label['data_entrega']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['php_cmp_required']['data_entrega']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['php_cmp_required']['data_entrega'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_data_entrega_line" id="hidden_field_data_data_entrega" style="<?php echo $sStyleHidden_data_entrega; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_data_entrega_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["data_entrega"]) &&  $this->nmgp_cmp_readonly["data_entrega"] == "on") { 

 ?>
<input type="hidden" name="data_entrega" value="<?php echo $this->form_encode_input($data_entrega) . "\">" . $data_entrega . ""; ?>
<?php } else { ?>
<span id="id_read_on_data_entrega" class="sc-ui-readonly-data_entrega css_data_entrega_line" style="<?php echo $sStyleReadLab_data_entrega; ?>"><?php echo $this->form_encode_input($data_entrega); ?></span><span id="id_read_off_data_entrega" style="white-space: nowrap;<?php echo $sStyleReadInp_data_entrega; ?>">
 <input class="sc-js-input scFormObjectOdd css_data_entrega_obj" style="" id="id_sc_field_data_entrega" type=text name="data_entrega" value="<?php echo $this->form_encode_input($data_entrega) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['data_entrega']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['data_entrega']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['data_entrega']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_data_entrega_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_data_entrega_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['data_devolucao']))
    {
        $this->nm_new_label['data_devolucao'] = "Data de devolução";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $data_devolucao = $this->data_devolucao;
   $sStyleHidden_data_devolucao = '';
   if (isset($this->nmgp_cmp_hidden['data_devolucao']) && $this->nmgp_cmp_hidden['data_devolucao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['data_devolucao']);
       $sStyleHidden_data_devolucao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_data_devolucao = 'display: none;';
   $sStyleReadInp_data_devolucao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['data_devolucao']) && $this->nmgp_cmp_readonly['data_devolucao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['data_devolucao']);
       $sStyleReadLab_data_devolucao = '';
       $sStyleReadInp_data_devolucao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['data_devolucao']) && $this->nmgp_cmp_hidden['data_devolucao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="data_devolucao" value="<?php echo $this->form_encode_input($data_devolucao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_data_devolucao_label" id="hidden_field_label_data_devolucao" style="<?php echo $sStyleHidden_data_devolucao; ?>"><span id="id_label_data_devolucao"><?php echo $this->nm_new_label['data_devolucao']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['php_cmp_required']['data_devolucao']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['php_cmp_required']['data_devolucao'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_data_devolucao_line" id="hidden_field_data_data_devolucao" style="<?php echo $sStyleHidden_data_devolucao; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_data_devolucao_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["data_devolucao"]) &&  $this->nmgp_cmp_readonly["data_devolucao"] == "on") { 

 ?>
<input type="hidden" name="data_devolucao" value="<?php echo $this->form_encode_input($data_devolucao) . "\">" . $data_devolucao . ""; ?>
<?php } else { ?>
<span id="id_read_on_data_devolucao" class="sc-ui-readonly-data_devolucao css_data_devolucao_line" style="<?php echo $sStyleReadLab_data_devolucao; ?>"><?php echo $this->form_encode_input($data_devolucao); ?></span><span id="id_read_off_data_devolucao" style="white-space: nowrap;<?php echo $sStyleReadInp_data_devolucao; ?>">
 <input class="sc-js-input scFormObjectOdd css_data_devolucao_obj" style="" id="id_sc_field_data_devolucao" type=text name="data_devolucao" value="<?php echo $this->form_encode_input($data_devolucao) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['data_devolucao']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['data_devolucao']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['data_devolucao']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_data_devolucao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_data_devolucao_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['livros']))
   {
       $this->nm_new_label['livros'] = "Didáticos";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $livros = $this->livros;
   $sStyleHidden_livros = '';
   if (isset($this->nmgp_cmp_hidden['livros']) && $this->nmgp_cmp_hidden['livros'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['livros']);
       $sStyleHidden_livros = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_livros = 'display: none;';
   $sStyleReadInp_livros = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['livros']) && $this->nmgp_cmp_readonly['livros'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['livros']);
       $sStyleReadLab_livros = '';
       $sStyleReadInp_livros = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['livros']) && $this->nmgp_cmp_hidden['livros'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="livros" value="<?php echo $this->form_encode_input($this->livros) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->livros_1 = explode(";", trim($this->livros));
  } 
  else
  {
      if (empty($this->livros))
      {
          $this->livros_1 = array(); 
      } 
      else
      {
          $this->livros_1 = $this->livros; 
          $this->livros= ""; 
          foreach ($this->livros_1 as $cada_livros)
          {
             if (!empty($this->livros))
             {
                 $this->livros.= ";"; 
             } 
             $this->livros.= $cada_livros; 
          } 
      } 
  } 
?> 

    <TD class="scFormLabelOdd scUiLabelWidthFix css_livros_label" id="hidden_field_label_livros" style="<?php echo $sStyleHidden_livros; ?>"><span id="id_label_livros"><?php echo $this->nm_new_label['livros']; ?></span></TD>
    <TD class="scFormDataOdd css_livros_line" id="hidden_field_data_livros" style="<?php echo $sStyleHidden_livros; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_livros_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["livros"]) &&  $this->nmgp_cmp_readonly["livros"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livros']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livros'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livros']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livros'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livros']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livros'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livros']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livros'] = array(); 
    }

   $old_value_data_entrega = $this->data_entrega;
   $old_value_data_devolucao = $this->data_devolucao;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_data_entrega = $this->data_entrega;
   $unformatted_value_data_devolucao = $this->data_devolucao;

   $nm_comando = "SELECT el.id_estoque_livro, concat(el.materia, \" \", vol.desc_volume) AS Livro
FROM estoque_livro el
INNER JOIN volume vol
ON el.id_volume = vol.id_volume
WHERE vol.id_volume = 1 && el.materia != 'paradidatico' && el.id_estoque_livro 
not in(select id_estoque_livro from emprestimo where id_aluno = " . $_SESSION['id_aluno'] . " && status = 'emprestado')";

   $this->data_entrega = $old_value_data_entrega;
   $this->data_devolucao = $old_value_data_devolucao;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livros'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $livros_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          foreach ($this->livros_1 as $Dados)
          {
              if ($Dados === $cadaselect[1])
              {
                  $livros_look .= $cadaselect[0] . "&nbsp;";
                  break;
              }
          }
          $x++; 
   }

?>
<input type="hidden" name="livros" value="<?php echo $this->form_encode_input($livros) . "\">" . $livros_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livros']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livros'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livros']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livros'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livros']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livros'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livros']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livros'] = array(); 
    }

   $old_value_data_entrega = $this->data_entrega;
   $old_value_data_devolucao = $this->data_devolucao;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_data_entrega = $this->data_entrega;
   $unformatted_value_data_devolucao = $this->data_devolucao;

   $nm_comando = "SELECT el.id_estoque_livro, concat(el.materia, \" \", vol.desc_volume) AS Livro
FROM estoque_livro el
INNER JOIN volume vol
ON el.id_volume = vol.id_volume
WHERE vol.id_volume = 1 && el.materia != 'paradidatico' && el.id_estoque_livro 
not in(select id_estoque_livro from emprestimo where id_aluno = " . $_SESSION['id_aluno'] . " && status = 'emprestado')";

   $this->data_entrega = $old_value_data_entrega;
   $this->data_devolucao = $old_value_data_devolucao;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livros'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $x = 0; 
   $livros_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          foreach ($this->livros_1 as $Dados)
          {
              if ($Dados === $cadaselect[1])
              {
                  $livros_look .= $cadaselect[0] . "<br>";
                  break;
              }
          }
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_livros\" class=\"css_livros_line\" style=\"" .  $sStyleReadLab_livros . "\">" . $this->form_encode_input($livros_look) . "</span><span id=\"id_read_off_livros\" style=\"" . $sStyleReadInp_livros . "\">";
   echo "<TABLE style=\"border-collapse: collapse; border-width: 0\">\r\n";
   echo "<TR>\r\n";
   echo "  <TD style=\"padding: 0\">\r\n";
   echo "<div id=\"idAjaxCheckbox_livros\" style=\"display: inline-block\">\r\n";
   $y = 0 ; 
   echo "<table border=\"0\" cellpaddiing=\"0\" cellspacing=\"0\">\r\n";
   echo " <tr>\r\n";
   $todox = str_replace("?#?@?@?", "?#?@ ?@?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   unset($cadacheck); 
   while (!empty($todo[$x])) 
   {
          $cadacheck = explode("?#?", $todo[$x]) ; 
          if ($y == 4)
          {
              echo " </tr>\r\n";
              echo " <tr>\r\n";
              $y = 0;
          }
          echo "  <td class=\"scFormDataFontOdd  css_livros_line\">\r\n";
          echo "      <input type=checkbox class=\"sc-ui-checkbox-livros sc-ui-checkbox-livros\" name=\"livros[]\" value=\"$cadacheck[1]\"" ; 
          foreach ($this->livros_1 as $Dados)
          {
              if ($Dados === $cadacheck[1])
              {
                  echo " checked" ; 
                  break;
              }
          }
          if (strtoupper($cadacheck[2]) == "S") 
          {
              if (empty($this->livros)) 
              {
                  echo " checked" ; 
              } 
          } 
          echo "  onClick=\"\"  style=\"float:left; position:relative; top: -3px;\">" ; 
          echo $cadacheck[0] ; 
          $x++ ; 
          $y++ ; 
          echo "  </td>\r\n";
   } 
   echo " </tr>\r\n";
   echo "</table>";
   echo "</div>\r\n";
   echo "  </TD>\r\n";
   echo "</TR>\r\n";
   echo "<TR>\r\n";
   echo "  <TD style=\"padding: 0\">\r\n";
   echo "   <IMG SRC=\"" . $this->Ini->path_img_global . "/img_select_all.gif\" ALIGN=\"absmiddle\" onClick=\"nm_marca_check('livros', 'N'); return false;\" style=\"cursor: pointer\">&nbsp;\r\n";
   echo "   <IMG SRC=\"" . $this->Ini->path_img_global . "/img_select_none.gif\" ALIGN=\"absmiddle\" onClick=\"nm_limpa_check('livros', 'N');  return false;\" style=\"cursor: pointer\">\r\n";
   echo "  </TD>\r\n";
   echo "</TR>\r\n";
   echo "</TABLE>\r\n";
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_livros_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_livros_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['livrov2']))
   {
       $this->nm_new_label['livrov2'] = "";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $livrov2 = $this->livrov2;
   $sStyleHidden_livrov2 = '';
   if (isset($this->nmgp_cmp_hidden['livrov2']) && $this->nmgp_cmp_hidden['livrov2'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['livrov2']);
       $sStyleHidden_livrov2 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_livrov2 = 'display: none;';
   $sStyleReadInp_livrov2 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['livrov2']) && $this->nmgp_cmp_readonly['livrov2'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['livrov2']);
       $sStyleReadLab_livrov2 = '';
       $sStyleReadInp_livrov2 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['livrov2']) && $this->nmgp_cmp_hidden['livrov2'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="livrov2" value="<?php echo $this->form_encode_input($this->livrov2) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->livrov2_1 = explode(";", trim($this->livrov2));
  } 
  else
  {
      if (empty($this->livrov2))
      {
          $this->livrov2_1 = array(); 
      } 
      else
      {
          $this->livrov2_1 = $this->livrov2; 
          $this->livrov2= ""; 
          foreach ($this->livrov2_1 as $cada_livrov2)
          {
             if (!empty($this->livrov2))
             {
                 $this->livrov2.= ";"; 
             } 
             $this->livrov2.= $cada_livrov2; 
          } 
      } 
  } 
?> 

    <TD class="scFormLabelOdd scUiLabelWidthFix css_livrov2_label" id="hidden_field_label_livrov2" style="<?php echo $sStyleHidden_livrov2; ?>"><span id="id_label_livrov2"><?php echo $this->nm_new_label['livrov2']; ?></span></TD>
    <TD class="scFormDataOdd css_livrov2_line" id="hidden_field_data_livrov2" style="<?php echo $sStyleHidden_livrov2; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_livrov2_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["livrov2"]) &&  $this->nmgp_cmp_readonly["livrov2"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov2']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov2'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov2']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov2'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov2']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov2'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov2']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov2'] = array(); 
    }

   $old_value_data_entrega = $this->data_entrega;
   $old_value_data_devolucao = $this->data_devolucao;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_data_entrega = $this->data_entrega;
   $unformatted_value_data_devolucao = $this->data_devolucao;

   $nm_comando = "SELECT el.id_estoque_livro, concat(el.materia, \" \", vol.desc_volume) AS Livro
FROM estoque_livro el
INNER JOIN volume vol
ON el.id_volume = vol.id_volume
WHERE vol.id_volume = 2 && el.materia != 'paradidatico' && el.id_estoque_livro 
not in(select id_estoque_livro from emprestimo where id_aluno = " . $_SESSION['id_aluno'] . " && status = 'emprestado')";

   $this->data_entrega = $old_value_data_entrega;
   $this->data_devolucao = $old_value_data_devolucao;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov2'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $livrov2_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          foreach ($this->livrov2_1 as $Dados)
          {
              if ($Dados === $cadaselect[1])
              {
                  $livrov2_look .= $cadaselect[0] . "&nbsp;";
                  break;
              }
          }
          $x++; 
   }

?>
<input type="hidden" name="livrov2" value="<?php echo $this->form_encode_input($livrov2) . "\">" . $livrov2_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov2']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov2'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov2']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov2'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov2']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov2'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov2']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov2'] = array(); 
    }

   $old_value_data_entrega = $this->data_entrega;
   $old_value_data_devolucao = $this->data_devolucao;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_data_entrega = $this->data_entrega;
   $unformatted_value_data_devolucao = $this->data_devolucao;

   $nm_comando = "SELECT el.id_estoque_livro, concat(el.materia, \" \", vol.desc_volume) AS Livro
FROM estoque_livro el
INNER JOIN volume vol
ON el.id_volume = vol.id_volume
WHERE vol.id_volume = 2 && el.materia != 'paradidatico' && el.id_estoque_livro 
not in(select id_estoque_livro from emprestimo where id_aluno = " . $_SESSION['id_aluno'] . " && status = 'emprestado')";

   $this->data_entrega = $old_value_data_entrega;
   $this->data_devolucao = $old_value_data_devolucao;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov2'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $x = 0; 
   $livrov2_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          foreach ($this->livrov2_1 as $Dados)
          {
              if ($Dados === $cadaselect[1])
              {
                  $livrov2_look .= $cadaselect[0] . "<br>";
                  break;
              }
          }
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_livrov2\" class=\"css_livrov2_line\" style=\"" .  $sStyleReadLab_livrov2 . "\">" . $this->form_encode_input($livrov2_look) . "</span><span id=\"id_read_off_livrov2\" style=\"" . $sStyleReadInp_livrov2 . "\">";
   echo "<TABLE style=\"border-collapse: collapse; border-width: 0\">\r\n";
   echo "<TR>\r\n";
   echo "  <TD style=\"padding: 0\">\r\n";
   echo "<div id=\"idAjaxCheckbox_livrov2\" style=\"display: inline-block\">\r\n";
   $y = 0 ; 
   echo "<table border=\"0\" cellpaddiing=\"0\" cellspacing=\"0\">\r\n";
   echo " <tr>\r\n";
   $todox = str_replace("?#?@?@?", "?#?@ ?@?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   unset($cadacheck); 
   while (!empty($todo[$x])) 
   {
          $cadacheck = explode("?#?", $todo[$x]) ; 
          if ($y == 4)
          {
              echo " </tr>\r\n";
              echo " <tr>\r\n";
              $y = 0;
          }
          echo "  <td class=\"scFormDataFontOdd  css_livrov2_line\">\r\n";
          echo "      <input type=checkbox class=\"sc-ui-checkbox-livrov2 sc-ui-checkbox-livrov2\" name=\"livrov2[]\" value=\"$cadacheck[1]\"" ; 
          foreach ($this->livrov2_1 as $Dados)
          {
              if ($Dados === $cadacheck[1])
              {
                  echo " checked" ; 
                  break;
              }
          }
          if (strtoupper($cadacheck[2]) == "S") 
          {
              if (empty($this->livrov2)) 
              {
                  echo " checked" ; 
              } 
          } 
          echo "  onClick=\"\"  style=\"float:left; position:relative; top: -3px;\">" ; 
          echo $cadacheck[0] ; 
          $x++ ; 
          $y++ ; 
          echo "  </td>\r\n";
   } 
   echo " </tr>\r\n";
   echo "</table>";
   echo "</div>\r\n";
   echo "  </TD>\r\n";
   echo "</TR>\r\n";
   echo "<TR>\r\n";
   echo "  <TD style=\"padding: 0\">\r\n";
   echo "   <IMG SRC=\"" . $this->Ini->path_img_global . "/img_select_all.gif\" ALIGN=\"absmiddle\" onClick=\"nm_marca_check('livrov2', 'N'); return false;\" style=\"cursor: pointer\">&nbsp;\r\n";
   echo "   <IMG SRC=\"" . $this->Ini->path_img_global . "/img_select_none.gif\" ALIGN=\"absmiddle\" onClick=\"nm_limpa_check('livrov2', 'N');  return false;\" style=\"cursor: pointer\">\r\n";
   echo "  </TD>\r\n";
   echo "</TR>\r\n";
   echo "</TABLE>\r\n";
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_livrov2_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_livrov2_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['livrov3']))
   {
       $this->nm_new_label['livrov3'] = "";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $livrov3 = $this->livrov3;
   $sStyleHidden_livrov3 = '';
   if (isset($this->nmgp_cmp_hidden['livrov3']) && $this->nmgp_cmp_hidden['livrov3'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['livrov3']);
       $sStyleHidden_livrov3 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_livrov3 = 'display: none;';
   $sStyleReadInp_livrov3 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['livrov3']) && $this->nmgp_cmp_readonly['livrov3'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['livrov3']);
       $sStyleReadLab_livrov3 = '';
       $sStyleReadInp_livrov3 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['livrov3']) && $this->nmgp_cmp_hidden['livrov3'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="livrov3" value="<?php echo $this->form_encode_input($this->livrov3) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->livrov3_1 = explode(";", trim($this->livrov3));
  } 
  else
  {
      if (empty($this->livrov3))
      {
          $this->livrov3_1 = array(); 
      } 
      else
      {
          $this->livrov3_1 = $this->livrov3; 
          $this->livrov3= ""; 
          foreach ($this->livrov3_1 as $cada_livrov3)
          {
             if (!empty($this->livrov3))
             {
                 $this->livrov3.= ";"; 
             } 
             $this->livrov3.= $cada_livrov3; 
          } 
      } 
  } 
?> 

    <TD class="scFormLabelOdd scUiLabelWidthFix css_livrov3_label" id="hidden_field_label_livrov3" style="<?php echo $sStyleHidden_livrov3; ?>"><span id="id_label_livrov3"><?php echo $this->nm_new_label['livrov3']; ?></span></TD>
    <TD class="scFormDataOdd css_livrov3_line" id="hidden_field_data_livrov3" style="<?php echo $sStyleHidden_livrov3; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_livrov3_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["livrov3"]) &&  $this->nmgp_cmp_readonly["livrov3"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov3']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov3'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov3']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov3'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov3']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov3'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov3']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov3'] = array(); 
    }

   $old_value_data_entrega = $this->data_entrega;
   $old_value_data_devolucao = $this->data_devolucao;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_data_entrega = $this->data_entrega;
   $unformatted_value_data_devolucao = $this->data_devolucao;

   $nm_comando = "SELECT el.id_estoque_livro, concat(el.materia, \" \", vol.desc_volume) AS Livro
FROM estoque_livro el
INNER JOIN volume vol
ON el.id_volume = vol.id_volume
WHERE vol.id_volume = 3 && el.materia != 'paradidatico' && el.id_estoque_livro 
not in(select id_estoque_livro from emprestimo where id_aluno = " . $_SESSION['id_aluno'] . " && status = 'emprestado')";

   $this->data_entrega = $old_value_data_entrega;
   $this->data_devolucao = $old_value_data_devolucao;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov3'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $livrov3_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          foreach ($this->livrov3_1 as $Dados)
          {
              if ($Dados === $cadaselect[1])
              {
                  $livrov3_look .= $cadaselect[0] . "&nbsp;";
                  break;
              }
          }
          $x++; 
   }

?>
<input type="hidden" name="livrov3" value="<?php echo $this->form_encode_input($livrov3) . "\">" . $livrov3_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov3']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov3'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov3']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov3'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov3']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov3'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov3']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov3'] = array(); 
    }

   $old_value_data_entrega = $this->data_entrega;
   $old_value_data_devolucao = $this->data_devolucao;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_data_entrega = $this->data_entrega;
   $unformatted_value_data_devolucao = $this->data_devolucao;

   $nm_comando = "SELECT el.id_estoque_livro, concat(el.materia, \" \", vol.desc_volume) AS Livro
FROM estoque_livro el
INNER JOIN volume vol
ON el.id_volume = vol.id_volume
WHERE vol.id_volume = 3 && el.materia != 'paradidatico' && el.id_estoque_livro 
not in(select id_estoque_livro from emprestimo where id_aluno = " . $_SESSION['id_aluno'] . " && status = 'emprestado')";

   $this->data_entrega = $old_value_data_entrega;
   $this->data_devolucao = $old_value_data_devolucao;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrov3'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $x = 0; 
   $livrov3_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          foreach ($this->livrov3_1 as $Dados)
          {
              if ($Dados === $cadaselect[1])
              {
                  $livrov3_look .= $cadaselect[0] . "<br>";
                  break;
              }
          }
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_livrov3\" class=\"css_livrov3_line\" style=\"" .  $sStyleReadLab_livrov3 . "\">" . $this->form_encode_input($livrov3_look) . "</span><span id=\"id_read_off_livrov3\" style=\"" . $sStyleReadInp_livrov3 . "\">";
   echo "<TABLE style=\"border-collapse: collapse; border-width: 0\">\r\n";
   echo "<TR>\r\n";
   echo "  <TD style=\"padding: 0\">\r\n";
   echo "<div id=\"idAjaxCheckbox_livrov3\" style=\"display: inline-block\">\r\n";
   $y = 0 ; 
   echo "<table border=\"0\" cellpaddiing=\"0\" cellspacing=\"0\">\r\n";
   echo " <tr>\r\n";
   $todox = str_replace("?#?@?@?", "?#?@ ?@?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   unset($cadacheck); 
   while (!empty($todo[$x])) 
   {
          $cadacheck = explode("?#?", $todo[$x]) ; 
          if ($y == 4)
          {
              echo " </tr>\r\n";
              echo " <tr>\r\n";
              $y = 0;
          }
          echo "  <td class=\"scFormDataFontOdd  css_livrov3_line\">\r\n";
          echo "      <input type=checkbox class=\"sc-ui-checkbox-livrov3 sc-ui-checkbox-livrov3\" name=\"livrov3[]\" value=\"$cadacheck[1]\"" ; 
          foreach ($this->livrov3_1 as $Dados)
          {
              if ($Dados === $cadacheck[1])
              {
                  echo " checked" ; 
                  break;
              }
          }
          if (strtoupper($cadacheck[2]) == "S") 
          {
              if (empty($this->livrov3)) 
              {
                  echo " checked" ; 
              } 
          } 
          echo "  onClick=\"\"  style=\"float:left; position:relative; top: -3px;\">" ; 
          echo $cadacheck[0] ; 
          $x++ ; 
          $y++ ; 
          echo "  </td>\r\n";
   } 
   echo " </tr>\r\n";
   echo "</table>";
   echo "</div>\r\n";
   echo "  </TD>\r\n";
   echo "</TR>\r\n";
   echo "<TR>\r\n";
   echo "  <TD style=\"padding: 0\">\r\n";
   echo "   <IMG SRC=\"" . $this->Ini->path_img_global . "/img_select_all.gif\" ALIGN=\"absmiddle\" onClick=\"nm_marca_check('livrov3', 'N'); return false;\" style=\"cursor: pointer\">&nbsp;\r\n";
   echo "   <IMG SRC=\"" . $this->Ini->path_img_global . "/img_select_none.gif\" ALIGN=\"absmiddle\" onClick=\"nm_limpa_check('livrov3', 'N');  return false;\" style=\"cursor: pointer\">\r\n";
   echo "  </TD>\r\n";
   echo "</TR>\r\n";
   echo "</TABLE>\r\n";
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_livrov3_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_livrov3_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['livrovu']))
   {
       $this->nm_new_label['livrovu'] = "";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $livrovu = $this->livrovu;
   $sStyleHidden_livrovu = '';
   if (isset($this->nmgp_cmp_hidden['livrovu']) && $this->nmgp_cmp_hidden['livrovu'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['livrovu']);
       $sStyleHidden_livrovu = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_livrovu = 'display: none;';
   $sStyleReadInp_livrovu = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['livrovu']) && $this->nmgp_cmp_readonly['livrovu'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['livrovu']);
       $sStyleReadLab_livrovu = '';
       $sStyleReadInp_livrovu = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['livrovu']) && $this->nmgp_cmp_hidden['livrovu'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="livrovu" value="<?php echo $this->form_encode_input($this->livrovu) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->livrovu_1 = explode(";", trim($this->livrovu));
  } 
  else
  {
      if (empty($this->livrovu))
      {
          $this->livrovu_1 = array(); 
      } 
      else
      {
          $this->livrovu_1 = $this->livrovu; 
          $this->livrovu= ""; 
          foreach ($this->livrovu_1 as $cada_livrovu)
          {
             if (!empty($this->livrovu))
             {
                 $this->livrovu.= ";"; 
             } 
             $this->livrovu.= $cada_livrovu; 
          } 
      } 
  } 
?> 

    <TD class="scFormLabelOdd scUiLabelWidthFix css_livrovu_label" id="hidden_field_label_livrovu" style="<?php echo $sStyleHidden_livrovu; ?>"><span id="id_label_livrovu"><?php echo $this->nm_new_label['livrovu']; ?></span></TD>
    <TD class="scFormDataOdd css_livrovu_line" id="hidden_field_data_livrovu" style="<?php echo $sStyleHidden_livrovu; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_livrovu_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["livrovu"]) &&  $this->nmgp_cmp_readonly["livrovu"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrovu']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrovu'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrovu']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrovu'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrovu']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrovu'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrovu']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrovu'] = array(); 
    }

   $old_value_data_entrega = $this->data_entrega;
   $old_value_data_devolucao = $this->data_devolucao;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_data_entrega = $this->data_entrega;
   $unformatted_value_data_devolucao = $this->data_devolucao;

   $nm_comando = "SELECT el.id_estoque_livro, concat(el.materia, \" \", vol.desc_volume) AS Livro
FROM estoque_livro el
INNER JOIN volume vol
ON el.id_volume = vol.id_volume
WHERE vol.id_volume = 4 && el.materia != 'paradidatico' && el.id_estoque_livro 
not in(select id_estoque_livro from emprestimo where id_aluno = " . $_SESSION['id_aluno'] . " && status = 'emprestado')";

   $this->data_entrega = $old_value_data_entrega;
   $this->data_devolucao = $old_value_data_devolucao;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrovu'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $livrovu_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          foreach ($this->livrovu_1 as $Dados)
          {
              if ($Dados === $cadaselect[1])
              {
                  $livrovu_look .= $cadaselect[0] . "&nbsp;";
                  break;
              }
          }
          $x++; 
   }

?>
<input type="hidden" name="livrovu" value="<?php echo $this->form_encode_input($livrovu) . "\">" . $livrovu_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrovu']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrovu'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrovu']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrovu'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrovu']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrovu'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrovu']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrovu'] = array(); 
    }

   $old_value_data_entrega = $this->data_entrega;
   $old_value_data_devolucao = $this->data_devolucao;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_data_entrega = $this->data_entrega;
   $unformatted_value_data_devolucao = $this->data_devolucao;

   $nm_comando = "SELECT el.id_estoque_livro, concat(el.materia, \" \", vol.desc_volume) AS Livro
FROM estoque_livro el
INNER JOIN volume vol
ON el.id_volume = vol.id_volume
WHERE vol.id_volume = 4 && el.materia != 'paradidatico' && el.id_estoque_livro 
not in(select id_estoque_livro from emprestimo where id_aluno = " . $_SESSION['id_aluno'] . " && status = 'emprestado')";

   $this->data_entrega = $old_value_data_entrega;
   $this->data_devolucao = $old_value_data_devolucao;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_livrovu'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $x = 0; 
   $livrovu_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          foreach ($this->livrovu_1 as $Dados)
          {
              if ($Dados === $cadaselect[1])
              {
                  $livrovu_look .= $cadaselect[0] . "<br>";
                  break;
              }
          }
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_livrovu\" class=\"css_livrovu_line\" style=\"" .  $sStyleReadLab_livrovu . "\">" . $this->form_encode_input($livrovu_look) . "</span><span id=\"id_read_off_livrovu\" style=\"" . $sStyleReadInp_livrovu . "\">";
   echo "<TABLE style=\"border-collapse: collapse; border-width: 0\">\r\n";
   echo "<TR>\r\n";
   echo "  <TD style=\"padding: 0\">\r\n";
   echo "<div id=\"idAjaxCheckbox_livrovu\" style=\"display: inline-block\">\r\n";
   $y = 0 ; 
   echo "<table border=\"0\" cellpaddiing=\"0\" cellspacing=\"0\">\r\n";
   echo " <tr>\r\n";
   $todox = str_replace("?#?@?@?", "?#?@ ?@?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   unset($cadacheck); 
   while (!empty($todo[$x])) 
   {
          $cadacheck = explode("?#?", $todo[$x]) ; 
          if ($y == 4)
          {
              echo " </tr>\r\n";
              echo " <tr>\r\n";
              $y = 0;
          }
          echo "  <td class=\"scFormDataFontOdd  css_livrovu_line\">\r\n";
          echo "      <input type=checkbox class=\"sc-ui-checkbox-livrovu sc-ui-checkbox-livrovu\" name=\"livrovu[]\" value=\"$cadacheck[1]\"" ; 
          foreach ($this->livrovu_1 as $Dados)
          {
              if ($Dados === $cadacheck[1])
              {
                  echo " checked" ; 
                  break;
              }
          }
          if (strtoupper($cadacheck[2]) == "S") 
          {
              if (empty($this->livrovu)) 
              {
                  echo " checked" ; 
              } 
          } 
          echo "  onClick=\"\"  style=\"float:left; position:relative; top: -3px;\">" ; 
          echo $cadacheck[0] ; 
          $x++ ; 
          $y++ ; 
          echo "  </td>\r\n";
   } 
   echo " </tr>\r\n";
   echo "</table>";
   echo "</div>\r\n";
   echo "  </TD>\r\n";
   echo "</TR>\r\n";
   echo "<TR>\r\n";
   echo "  <TD style=\"padding: 0\">\r\n";
   echo "   <IMG SRC=\"" . $this->Ini->path_img_global . "/img_select_all.gif\" ALIGN=\"absmiddle\" onClick=\"nm_marca_check('livrovu', 'N'); return false;\" style=\"cursor: pointer\">&nbsp;\r\n";
   echo "   <IMG SRC=\"" . $this->Ini->path_img_global . "/img_select_none.gif\" ALIGN=\"absmiddle\" onClick=\"nm_limpa_check('livrovu', 'N');  return false;\" style=\"cursor: pointer\">\r\n";
   echo "  </TD>\r\n";
   echo "</TR>\r\n";
   echo "</TABLE>\r\n";
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_livrovu_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_livrovu_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['paradidatico']))
   {
       $this->nm_new_label['paradidatico'] = "Paradidáticos";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $paradidatico = $this->paradidatico;
   $sStyleHidden_paradidatico = '';
   if (isset($this->nmgp_cmp_hidden['paradidatico']) && $this->nmgp_cmp_hidden['paradidatico'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['paradidatico']);
       $sStyleHidden_paradidatico = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_paradidatico = 'display: none;';
   $sStyleReadInp_paradidatico = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['paradidatico']) && $this->nmgp_cmp_readonly['paradidatico'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['paradidatico']);
       $sStyleReadLab_paradidatico = '';
       $sStyleReadInp_paradidatico = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['paradidatico']) && $this->nmgp_cmp_hidden['paradidatico'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="paradidatico" value="<?php echo $this->form_encode_input($this->paradidatico) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->paradidatico_1 = explode(";", trim($this->paradidatico));
  } 
  else
  {
      if (empty($this->paradidatico))
      {
          $this->paradidatico_1 = array(); 
      } 
      else
      {
          $this->paradidatico_1 = $this->paradidatico; 
          $this->paradidatico= ""; 
          foreach ($this->paradidatico_1 as $cada_paradidatico)
          {
             if (!empty($this->paradidatico))
             {
                 $this->paradidatico.= ";"; 
             } 
             $this->paradidatico.= $cada_paradidatico; 
          } 
      } 
  } 
?> 

    <TD class="scFormLabelOdd scUiLabelWidthFix css_paradidatico_label" id="hidden_field_label_paradidatico" style="<?php echo $sStyleHidden_paradidatico; ?>"><span id="id_label_paradidatico"><?php echo $this->nm_new_label['paradidatico']; ?></span></TD>
    <TD class="scFormDataOdd css_paradidatico_line" id="hidden_field_data_paradidatico" style="<?php echo $sStyleHidden_paradidatico; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_paradidatico_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["paradidatico"]) &&  $this->nmgp_cmp_readonly["paradidatico"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_paradidatico']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_paradidatico'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_paradidatico']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_paradidatico'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_paradidatico']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_paradidatico'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_paradidatico']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_paradidatico'] = array(); 
    }

   $old_value_data_entrega = $this->data_entrega;
   $old_value_data_devolucao = $this->data_devolucao;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_data_entrega = $this->data_entrega;
   $unformatted_value_data_devolucao = $this->data_devolucao;

   $nm_comando = "SELECT el.id_estoque_livro, concat(el.titulo, \" \", vol.desc_volume) AS Livro
FROM estoque_livro el
INNER JOIN volume vol
ON el.id_volume = vol.id_volume
WHERE materia = 'paradidatico ' && el.id_estoque_livro 
not in(select id_estoque_livro from emprestimo where id_aluno = " . $_SESSION['id_aluno'] . " && status = 'emprestado')";

   $this->data_entrega = $old_value_data_entrega;
   $this->data_devolucao = $old_value_data_devolucao;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_paradidatico'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $paradidatico_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          foreach ($this->paradidatico_1 as $Dados)
          {
              if ($Dados === $cadaselect[1])
              {
                  $paradidatico_look .= $cadaselect[0] . "&nbsp;";
                  break;
              }
          }
          $x++; 
   }

?>
<input type="hidden" name="paradidatico" value="<?php echo $this->form_encode_input($paradidatico) . "\">" . $paradidatico_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_paradidatico']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_paradidatico'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_paradidatico']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_paradidatico'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_paradidatico']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_paradidatico'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_paradidatico']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_paradidatico'] = array(); 
    }

   $old_value_data_entrega = $this->data_entrega;
   $old_value_data_devolucao = $this->data_devolucao;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_data_entrega = $this->data_entrega;
   $unformatted_value_data_devolucao = $this->data_devolucao;

   $nm_comando = "SELECT el.id_estoque_livro, concat(el.titulo, \" \", vol.desc_volume) AS Livro
FROM estoque_livro el
INNER JOIN volume vol
ON el.id_volume = vol.id_volume
WHERE materia = 'paradidatico ' && el.id_estoque_livro 
not in(select id_estoque_livro from emprestimo where id_aluno = " . $_SESSION['id_aluno'] . " && status = 'emprestado')";

   $this->data_entrega = $old_value_data_entrega;
   $this->data_devolucao = $old_value_data_devolucao;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['Lookup_paradidatico'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $x = 0; 
   $paradidatico_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          foreach ($this->paradidatico_1 as $Dados)
          {
              if ($Dados === $cadaselect[1])
              {
                  $paradidatico_look .= $cadaselect[0] . "<br>";
                  break;
              }
          }
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_paradidatico\" class=\"css_paradidatico_line\" style=\"" .  $sStyleReadLab_paradidatico . "\">" . $this->form_encode_input($paradidatico_look) . "</span><span id=\"id_read_off_paradidatico\" style=\"" . $sStyleReadInp_paradidatico . "\">";
   echo "<TABLE style=\"border-collapse: collapse; border-width: 0\">\r\n";
   echo "<TR>\r\n";
   echo "  <TD style=\"padding: 0\">\r\n";
   echo "<div id=\"idAjaxCheckbox_paradidatico\" style=\"display: inline-block\">\r\n";
   $y = 0 ; 
   echo "<table border=\"0\" cellpaddiing=\"0\" cellspacing=\"0\">\r\n";
   echo " <tr>\r\n";
   $todox = str_replace("?#?@?@?", "?#?@ ?@?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   unset($cadacheck); 
   while (!empty($todo[$x])) 
   {
          $cadacheck = explode("?#?", $todo[$x]) ; 
          if ($y == 3)
          {
              echo " </tr>\r\n";
              echo " <tr>\r\n";
              $y = 0;
          }
          echo "  <td class=\"scFormDataFontOdd  css_paradidatico_line\">\r\n";
          echo "      <input type=checkbox class=\"sc-ui-checkbox-paradidatico sc-ui-checkbox-paradidatico\" name=\"paradidatico[]\" value=\"$cadacheck[1]\"" ; 
          foreach ($this->paradidatico_1 as $Dados)
          {
              if ($Dados === $cadacheck[1])
              {
                  echo " checked" ; 
                  break;
              }
          }
          if (strtoupper($cadacheck[2]) == "S") 
          {
              if (empty($this->paradidatico)) 
              {
                  echo " checked" ; 
              } 
          } 
          echo "  onClick=\"\"  style=\"float:left; position:relative; top: -3px;\">" ; 
          echo $cadacheck[0] ; 
          $x++ ; 
          $y++ ; 
          echo "  </td>\r\n";
   } 
   echo " </tr>\r\n";
   echo "</table>";
   echo "</div>\r\n";
   echo "  </TD>\r\n";
   echo "</TR>\r\n";
   echo "<TR>\r\n";
   echo "  <TD style=\"padding: 0\">\r\n";
   echo "   <IMG SRC=\"" . $this->Ini->path_img_global . "/img_select_all.gif\" ALIGN=\"absmiddle\" onClick=\"nm_marca_check('paradidatico', 'N'); return false;\" style=\"cursor: pointer\">&nbsp;\r\n";
   echo "   <IMG SRC=\"" . $this->Ini->path_img_global . "/img_select_none.gif\" ALIGN=\"absmiddle\" onClick=\"nm_limpa_check('paradidatico', 'N');  return false;\" style=\"cursor: pointer\">\r\n";
   echo "  </TD>\r\n";
   echo "</TR>\r\n";
   echo "</TABLE>\r\n";
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_paradidatico_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_paradidatico_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 


   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
<?php
  }
?>
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['run_iframe'] != "R")
{
    $NM_btn = false;
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "balterar", "nm_atualiza ('alterar');", "nm_atualiza ('alterar');", "sc_b_upd_b", "", "Realizar Empréstimo", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['Voltar'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "voltar", "sc_btn_Voltar()", "sc_btn_Voltar()", "sc_Voltar_bot", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if (isset($this->NMSC_modal) && $this->NMSC_modal == "ok") {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
</td></tr> 
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['mostra_cab'] != "N"))
  {
?>
</td></tr> 
<tr><td><table width="100%"> 
<style>
#rod_col1 { margin:0px; padding: 3px 0 0 5px; float:left; overflow:hidden;}
#rod_col2 { margin:0px; padding: 3px 5px 0 0; float:right; overflow:hidden; text-align:right;}

</style>

<table style="width: 100%; height:20px;" cellpadding="0px" cellspacing="0px" class="scFormFooter">
    <tr>
        <td>
            <span class="scFormFooterFont" id="rod_col1"></span>
        </td>
        <td>
            <span class="scFormFooterFont" id="rod_col2"></span>
        </td>
    </tr>
</table><?php
  }
?>
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none; position: absolute; left: 50px; top: 50px"><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0,1);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.visibility = 'hidden';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
$(window).bind("load", function() {
<?php
  $nm_sc_blocos_da_pag = array(0,1);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.visibility = '';";
      }
  }
?>
});
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['masterValue']))
{
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['masterValue'] as $cmp_master => $val_master)
{
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
}
unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['masterValue']);
?>
}
<?php
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_aluno");
 parent.scAjaxDetailHeight("form_aluno", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_aluno", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_aluno", <?php echo $sTamanhoIframe; ?>);
 }
</script>
<?php
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
?>
<script type="text/javascript">
_scAjaxShowMessage(scMsgDefTitle, "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", false, sc_ajaxMsgTime, false, "Ok", 0, 0, 0, 0, "", "", "", false, true);
</script>
<?php
}
?>
<?php
if ('' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_aluno']['sc_modal'])
{
?>
  parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
elseif ($this->lig_edit_lookup)
{
?>
  opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
?>
}
if (bLigEditLookupCall)
{
  scLigEditLookupCall();
}
<?php
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
<script type="text/javascript">
$(function() {
 $("#sc-id-mobile-in").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("in");
 });
 $("#sc-id-mobile-out").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("out");
 });
});
function scMobileDisplayControl(sOption) {
 $("#sc-id-mobile-control").val(sOption);
 nm_atualiza("recarga_mobile");
}
</script>
<?php
       if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'])
       {
?>
<span id="sc-id-mobile-in"><?php echo $this->Ini->Nm_lang['lang_version_mobile']; ?></span>
<?php
       }
?>
</body> 
</html> 
