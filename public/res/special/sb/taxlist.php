<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <style>
        table,td,th,p{
            padding:0;
            margin:0;
        }
        table,td,th{
            border:1px solid #000000;
            border-collapse:collapse;
            text-align:center;
            font-size:10.5pt;
            height:7.82mm;
        }
    </style>

</head>
<body>
<p style="width:185mm;text-align:center;font-size:16pt;padding-top:2mm;padding-bottom:3mm;">个人所得税纳税清单</p>
<table style="border:none;" >
    <tr>
        <td style="border:none;width:56mm;text-align:right">税务机关：广东省地方税务局</td>
        <td style="border:none;width:66mm;text-align:right">打印日期：&nbsp;2018年&nbsp;5&nbsp;月&nbsp;9&nbsp;日</td>
        <td style="border:none;width:53mm;text-align:right">查验码：&nbsp;201805000314734</td>
    </tr>

</table>
<table>
    <tr>
        <td style="width:30mm;">纳税人名称</td>
        <td style="width:41mm;">蒋小红</td>
        <td style="width:60mm;">纳税人身份证件类型</td>
        <td style="width:49mm;padding-right:0.9px;">身份证</td>
    </tr>
    <tr>
        <td style="width:30mm;font-size:8pt;">纳税人身份证件号码</td>
        <td colspan="3">51160219860905730X</td>
    </tr>
</table>
<table>
    <thead>
    <tr id="header" >
        <th style="width:30mm;">所得项目</th>
        <th style="width:21mm;font-size:9.5pt;">申报日期</th>
        <th style="width:21mm;">申报收入额</th>
        <th style="width:21mm;">实缴税额</th>
        <th style="width:27mm;">税款所属时期</th>
        <th style="width:36mm;">征收机关</th>
        <th style="width:22mm;font-size:9.5pt;">入库时间</th>
    </tr>
    </thead>
    <tbody>
    <?php for($i=0;$i<12;$i++){?>
        <tr>
            <td style="font-size:7pt;">工资薪金所得</td>
            <td style="">2017-02-11</td>
            <td style="">7,480.00</td>
            <td style="">255.00</td>
            <td style="word-wrap:break-word;">2017-01-01<br/>
                至2017-01-31</td>
            <td style="font-size:8pt;word-wrap:break-word;">东莞市地方税务<br/>&nbsp;局东坑税务分局</td>
            <td style="">2017-02-12</td>
        </tr>
    <?php } ?>
    <tr>
        <td>本页小计</td>
        <td colspan="6" style="text-align:right">￥1,298.23</td>
    </tr>
    <tr>
        <td>合计</td>
        <td colspan="6" style="text-align:right">￥1,298.23</td>
    </tr>
    <tr>
        <td style="font-size:8pt;">税款金额合计（大写）</td>
        <td colspan="6" style="text-align:left">壹仟贰佰玖拾捌元贰角叁分</td>
    </tr>
    </tbody>
</table>
<table>
    <tr>
        <td style="width:30mm;height:35mm;"><img src="<?php WEB_ROOT ?>/public/res/images/a.jpg" width=111 /></td>
        <td style="width:40mm;"><img src="<?php echo WEB_ROOT ?>/public/res/images/b.jpg" width=85 /></td>
        <td style="width:111mm;padding-right:0.3px;vertical-align:middle;line-height:5mm;">感谢您为祖国繁荣昌盛做出贡献！<br/><br/>
            Thank you for your contribution to<br/><br/>
            China's flourishing and prosperity!</td>
    </tr>
</table>
<table>
    <tr>
        <td style="border:none;width:107mm;text-align:right;">第 1 页/共 1 页</td>
        <td style="border:none;width:69mm;text-align:right;">查验网址：www.gdltax.gov.cn</td>
    </tr>
</table>

</body>
</html>