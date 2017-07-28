<?php
/**
 * manage 管理商品 主要是处理管理商品
 *
 * @author        zangmiao <838881690@qq.com>
 * @copyright     Copyright (c) 2011-2015 octmami. All rights reserved.
 * @link          http://mall.octmami.com
 * @package       Manage.controller
 * @license       http://www.octmami.com/license
 * @version       v1.2.0
 */
$this->breadcrumbs=array(
    '商品管理',
    '商品管理'=>'/admin.php?r=order/product/index',
);
?>
<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/chosen.css" />
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/chosen.jquery.min.js" ></script>
<style>
    caption{
        background-color: #438EB9;
        width: 100%;
        height: 40px;
        color: #fff;
        font-size: 16px;
        padding:8px 0 0 20px;
    }
    .form-group{
        display: inline;margin-right: 20px;margin-top: 5px;
    }
    form{
        margin-bottom: 10px;
    }
    select{
        width: 120px;
    }
    .button-s-r{
        margin-top:10px
    }
    #form_field_select_3_color_chosen a.chosen-single{
        height: 38px;
        padding-top: 6px;
        -webkit-border-radius: 0px !important;
        -moz-border-radius: 0px !important;
        border-radius: 0px !important;
        border:1px solid #CCCCCC !important;
    }
    #form_field_select_3_color_chosen a.chosen-single div b{
        padding-top:7px;
    }
    a.chosen-single.chosen-default{
        height: 30px;
        background: none;
        padding-top: 3px;
        -webkit-border-radius: 0px !important;
        -moz-border-radius: 0px !important;
        border-radius: 0px !important;
        border:1px solid #CCCCCC !important;
    }
   .chosen-container-single a.chosen-single{
        height: 30px;
        background: none;
        padding-top: 3px;
        -webkit-border-radius: 0px !important;
        -moz-border-radius: 0px !important;
        border-radius: 0px !important;
        border:1px solid #CCCCCC !important;
    }#form_field_select_3_color_chosen a.chosen-single{
        height: 38px;
        padding-top: 6px;
        -webkit-border-radius: 0px !important;
        -moz-border-radius: 0px !important;
        border-radius: 0px !important;
        border:1px solid #CCCCCC !important;
    }
    #form_field_select_3_color_chosen a.chosen-single div b{
        padding-top:7px;
    }
    a.chosen-single.chosen-default{
        height: 30px;
        background: none;
        padding-top: 3px;
        -webkit-border-radius: 0px !important;
        -moz-border-radius: 0px !important;
        border-radius: 0px !important;
        border:1px solid #CCCCCC !important;
    }
   .chosen-container-single a.chosen-single{
        height: 30px;
        background: none;
        padding-top: 3px;
        -webkit-border-radius: 0px !important;
        -moz-border-radius: 0px !important;
        border-radius: 0px !important;
        border:1px solid #CCCCCC !important;
    }
    i.icon-pencil{
        padding: 5px;font-size:17px;
    }
    i.icon-copy{
        color:green;font-size:17px;
    }
</style>
    <form action="" method="get">
        <input type="hidden" name="r" value="order/product/index">
        <div class="form-group">
            <label class="form-field-select-3">流水号：</label>
            <select class="width-18 chosen-select" name="param[serialNum]"   data-placeholder="选择流水号" id="form-field-select-3 lsh">
                <option value="">请选择</option>
                <?php foreach( $selectFilter['serialNum'] as $k => $v){ ?>
                    <option value="<?php echo $v['serial_num']; ?>" <?php if( isset($param['serialNum']) && $param['serialNum'] == $v['serial_num'] ) { echo "selected"; } ?>><?php echo $v['serial_num']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label class="form-field-select-3">款号：</label>
            <select class="width-17 chosen-select" name="param[modelSn]"   data-placeholder="选择款号" id="form-field-select-3 kh">
                <option value="">请选择</option>
                <?php foreach( $selectFilter['modelSn'] as $k=> $v ) { ?>
                    <option value="<?php echo $v['model_sn']; ?>" <?php if( isset($param['modelSn']) && $param['modelSn'] == $v['model_sn'] ) { echo "selected"; } ?>><?php echo $v['model_sn']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label class="form-field-select-3">品名：</label>
            <select class="width-10 chosen-select" name="param[name]"   data-placeholder="选择品名" id="form-field-select-3 pm">
                <option value="">请选择</option>
                <?php foreach( $selectFilter['name'] as $k=> $v){ ?>
                    <option value="<?php echo $v['name']; ?>" <?php if( isset($param['name']) && $param['name'] == $v['name'] ) { echo "selected"; } ?>><?php echo $v['name']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="name">大类:</label>
            <select id="catb" name="param[catBig]">
                <option value="">请选择</option>
                <?php foreach($selectFilter['catBig'] as $k => $v ) { ?>
                    <option value="<?php echo $v['big_id']; ?>" <?php if( isset($param['catBig']) && $param['catBig'] == $v['big_id'] ){ echo "selected"; } ?>><?php echo $v['cat_name']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="name">中类:</label>
            <select id="catm" name="param[catMiddle]">
                <option value="">请选择</option>
                <?php foreach($selectFilter['catMiddle'] as $k => $v ) { ?>
                    <option value="<?php echo $v['middle_id']; ?>" <?php if( isset($param['catMiddle']) && $param['catMiddle'] == $v['middle_id'] ){ echo "selected"; } ?>><?php echo $v['cat_name']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="name">小类:</label>
            <select id="cats" name="param[catSmall]">
                <option value="">请选择</option>
                <?php foreach($selectFilter['catSmall'] as $k => $v ) { ?>
                    <option value="<?php echo $v['small_id']; ?>" <?php if( isset($param['catSmall']) && $param['catSmall'] == $v['small_id'] ){ echo "selected"; } ?>><?php echo $v['cat_name']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label class="form-field-select-3">色号：</label>
            <select class="width-17 chosen-select" name="param[color]"   data-placeholder="选择色号" id="form-field-select-3 sh">
                <option value="">请选择</option>
                <?php foreach($selectFilter['color'] as $k=> $v) { ?>
                    <option value="<?php echo $v['color_id']; ?>" <?php if( isset($param['color']) && $param['color'] == $v['color_id'] ) { echo "selected"; } ?>><?php echo $v['color_name']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="name">价格带:</label>
            <select id="jgd" name="param[priceList]">
                <option value="">请选择</option>
                <?php foreach($selectFilter['priceList'] as $k => $v) { ?>
                    <option value="<?php echo $k ?>" <?php if( isset($param['priceList']) && $param['priceList'] == $k ) { echo "selected"; } ?>><?php echo $v; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="button-s-r">
            <button class="btn btn-primary  btn-xs" type="submit">搜索</button>
            <button class="btn btn-primary  btn-xs"><a href="admin.php?r=order/product/index" style="color: #fff;text-decoration: none;">清空</a></button>
        </div>
    </form>
<div class="form-group">
    <a href="/admin.php?r=order/product/add"><button class="btn btn-default btn-sm">添加商品</button></a>
    <a href="/admin.php?r=order/product/import"><button class="btn btn-default btn-sm">全新商品导入</button></a>
    <a href="/admin.php?r=order/product/export"><button class="btn btn-default btn-sm">导出商品</button></a>
    <a href="/admin.php?r=order/product/check"><button class="btn btn-default btn-sm">检查错误</button></a>
    <?php if($is_error){ ?>
        <a href="/admin.php?r=order/product/dealerror"><button class="btn btn-sm btn-success">一键处理错误商品</button></a>
        <b style="font-size: 38px">☜</b><b>出现这个请点击处理，否则系统会出问题</b>
    <?php } ?>
</div>
<table class="table table-striped table-bordered table-hover" style="margin-top: 5px;">
    <caption class="text-left">商品列表</caption>
    <thead>
    <tr>
        <th width="25"><input type="checkbox"></th>
        <th width="40">操作</th>
        <th width="60">流水号</th>
        <th width="60">款号</th>
        <th width="100">品名</th>
        <th width="100">大类</th>
        <th width="100">中类</th>
        <th width="100">小类</th>
        <th width="100">色号</th>
        <th width="100">吊牌价</th>
        <th width="100">商品状态</th>
    </tr>
    </thead>
    <tbody>

    <?php
    if(!empty($select_option)) {
    foreach($select_option as $k=>$v){ ?>
    <tr>
        <td width="25"><input type="checkbox"></td>
        <td width="40">
            <a href="admin.php?r=order/product/update&serial_num=<?php echo $v['serial_num']; ?>"><i class="icon-pencil"></i></a>
       &nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.php?r=order/product/copy&serial_num=<?php echo $v['serial_num']; ?>"><i class="icon-copy"></i></a>
        </td>
        <td width="60"><?php echo $v['serial_num'] ?></td>
        <td width="100"><?php echo $v['model_sn'] ?></td>
        <td width="100"><?php echo $v['name'] ?></td>
        <td width="100"><?php echo $v['cat_name'] ?></td>
        <td width="100"><?php echo $v['cat_middle'] ?></td>
        <td width="100"><?php echo $v['small_cat_name'] ?></td>
        <td width="100"><?php echo $v['color_name'] ?></td>
        <td width="100"><?php echo $v['cost_price'] ?></td>
        <td width="100"><?php if($v['is_down'] == '0'){echo "正常";}else{echo "<b class='text-danger'>下架</b>";} ?></td>
    </tr>
    <?php } }else{ ?>
      <td colspan='10' align='center'><b><i>对不起，没有查到任何信息</i></b></td>
    <?php } ?>
    </tbody>
</table>
<div class="row"  style="width:100%;background-color: #f5f5f5;padding: 20px">
    <?php $this->widget(
        'bootstrap.widgets.TbLinkPager',
        array(
            'pages' => $pages,
            'currentPage'=>$pageIndex,
            'pageSize'=>$this->pagesize
        )
    );?>
</div>

<script>
    $(document).ready(function () {
        $(".chosen-select").chosen();
        $("#catb").change(function(){
            var cat=$("#catb  option:selected").val();
            if(cat==""){
                return false;
            }
            $.ajax({
                type: "get",
                url: "/admin.php?r=order/product/AjaxCatMiddle&catBig="+cat,
                dataType: "json",
                data: cat,
                success:function (data) {
                    if(data.code == 200){
                        $("#catm").empty().append("<option value=''>请选择</option>");
                        $("#cats").empty().append("<option value=''>请选择</option>");
                        $.each(data.data.middle, function (i, data) {
                            $("#catm").append("<option value='" + data.middle_id + "'>" + data.cat_name + "</option>");
                        });
                        $.each(data.data.small, function (i, data) {
                            $("#cats").append("<option value='" + data.small_id + "'>" + data.cat_name + "</option>");
                        });
                    }else if(data.code == 400){
                        alertMsg(data.msg);
                    }
                }
            });
        });
//        $("#catm").change(function(){
//            var cat=$("#catm  option:selected").val();
//            if(cat==""){
//                return false;
//            }
//            $.ajax({
//                type: "get",
//                url: "/admin.php?r=order/product/AjaxCatSmall&catSmall="+cat,
//                dataType: "json",
//                data: cat,
//                success:function (data) {
//                    if(data.code == 200){
//                        $("#cats").empty().append("<option value=''>请选择</option>");
//                        $.each(data.data, function (i, data) {
//                            $("#cats").append("<option value='" + data.small_id + "'>" + data.cat_name + "</option>");
//                        });
//                    }else if(data.code == 400){
//                        alertMsg(data.msg);
//                    }
//                }
//            });
//        });
    });
</script>
