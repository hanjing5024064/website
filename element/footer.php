<!--<div class="footer navbar-fixed-bottom">-->
<!-- 我们一直在努力  <a class="copyright" href="index.php">--><?php //echo $companyFullName; echo " ".$icpCode?><!--</a><br>-->
<!-- <span><img src="img/qrcode.jpg" class="img-responsive center-block" alt="Responsive image" style="width:50px;height:50px;"></span>-->
<!-- <span class="glyphicon glyphicon-earphone" aria-hidden="true"><a href="tel:15190351982">15190351982</a></span>&nbsp;&nbsp;-->
<!-- <span class="glyphicon glyphicon-envelope" aria-hidden="true"><a href="mailto:info@intemash.com">info@intemash.com</a></span>-->
<!--</div>-->

<div class="footer navbar-fixed-bottom">
 我们一直在努力<br>  <a class="copyright" href="index.php"><?php echo $companyFullName; echo " ".$icpCode?></a><br>
 <div class="text-center">
<table width="100%">
 <tr>
  <td rowspan="2" width="50%" class="text-right"><span class="text-right" style="float: right; margin-right: 10px;"><img src="img/qrcode.jpg" class="img-responsive center-block" alt="Responsive image" style="width:50px;height:50px;"/></span></td>
  <td class="text-left"><a href="tel:15190351982"><span class="glyphicon glyphicon-earphone" aria-hidden="true"><?php echo $contactPhone?></span></a></td>
 </tr>
 <tr>
  <td class="text-left"><a href="mailto:info@intemash.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"><?php echo $contactMail?></span></a></td>
 </tr>
</table>
 </div>
</div>
</body>
</html>