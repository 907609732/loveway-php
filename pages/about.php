<?php
if ($templateMode) {
    include('./includes/header.php');
}
?>
<br /><br />
<div class="mdui-card mdui-hoverable" style="border-radius: 16px">
    <div class="mdui-card-media">
        <img style="max-height: 1000px" src="https://img.llilii.cn/compression/vocaloid/kagamine/32639516_p2.jpg" />
    </div>
    <div class="mdui-card-primary">
        <div class="mdui-card-primary-title">关于本站</div>
        <div class="mdui-card-primary-subtitle">ABOUT US</div>
    </div>
    <div class="mdui-card-content">
        <div class="mdui-typo">
            <?php echo getInfo('about_content') ?>
            <br><br>
            <!-- 本程序使用GPL2.0协议开源，请遵守此协议，请勿删除本处版权，否则原作者保留一切法律权利 -->
            <div class="mdui-divider"></div><br>
            程序版本:V1.5.9<br />
            作者博客:<a href="cyc.五成.中国" class="text-decoration: none;">五成的主页</a><br />作者邮箱:907609732@qq.com<br>
        </div>
    </div>
</div>
<br /><br />