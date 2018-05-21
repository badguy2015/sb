<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<style>
    .header_font{
        font-size:16pt;
        line-height:120%
    }
    .align_center{
        text-align:center;
    }
    .normal_font{
        font-size:10.5pt;
        line-height:120%
    }
    .fl{
        float:left;
    }
    .fr{
        float:right;
    }
    #h1{
        position:absolute;
        top: 77px;
        left: 84px;
    }
    #h2{
        margin-left: 8cm;
    }
    #h3{
        margin-right: 1cm;
    }
    #main_table{

    }
    table{
        /*border-collapse:collapse;*/
        border: 1px solid #000000;
    }
</style>
<body>
    <p class="header_font align_center">个人所得税纳税清单</p>
<!--    <p class="normal_font">-->
<!--        <span class="fl" id="h1">税务机关： 广东省地方税务局</span>-->
<!--        <span class="" id="h2">打印日期： 2018年 5 月 11 日</span>-->
<!--        <span class="fr" id="h3">查验码: 201805000318742</span>-->
<!--    </p>-->
<table>
    <tr>
    <td width="">纳税人名称</td>
    <td>李雷雷</td>
    <td>纳税人身份证件类型</td>
    <td>身份证</td>
    </tr>
    <tr>
        <td>纳税人身份证件号码</td>
        <td>632122196808113543</td>
    </tr>
</table>
    <table id="main_table" class="normal_font">
        <tr>
            <th>所得项目</th>
            <th>申报日期</th>
            <th>申报收入额</th>
            <th>实缴税额</th>
            <th>税款所属时期</th>
            <th>征收机关</th>
            <th>入库时间</th>
        </tr>
        <?php for($i=0;$i<12;$i++){?>
        <tr>
            <td>工资薪金所得</td>
            <td>2017-02-11</td>
            <td>7,480.00</td>
            <td>255.00</td>
            <td>2017-01-01
                至2017-01-31</td>
            <td>东莞市地方税务<br/>
                局东坑税务分局</td>
            <td>2017-02-12</td>
        </tr>
        <?php } ?>
<!--        <tr>-->
<!--            <td>本页小计</td>-->
<!--            <td>￥2,834.10</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>合计</td>-->
<!--            <td>￥2,834.10</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>税款金额合计（大写）</td>-->
<!--            <td>贰仟捌佰叁拾肆元壹角</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>图片</td>-->
<!--            <td>图片</td>-->
<!--            <td>感谢您为祖国繁荣昌盛做出贡献！<br/>-->
<!--                Thank you for your contribution to<br/>-->
<!--                China's flourishing and prosperity!</td>-->
<!--        </tr>-->
    </table>
    <p>第 1 页/共 1 页 查验网址：www.gdltax.gov.cn</p>
</body>
</html>