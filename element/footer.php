<!--<div class="footer navbar-fixed-bottom">-->
<!-- 我们一直在努力  <a class="copyright" href="index.php">--><?php //echo $companyFullName; echo " ".$icpCode?><!--</a><br>-->
<!-- <span><img src="img/qrcode.jpg" class="img-responsive center-block" alt="Responsive image" style="width:50px;height:50px;"></span>-->
<!-- <span class="glyphicon glyphicon-earphone" aria-hidden="true"><a href="tel:15190351982">15190351982</a></span>&nbsp;&nbsp;-->
<!-- <span class="glyphicon glyphicon-envelope" aria-hidden="true"><a href="mailto:info@intemash.com">info@intemash.com</a></span>-->
<!--</div>-->


<footer class="footer">
    <table class="container">
        <tr>
            <td colspan="2"><h5>我们一直在努力</h5></td>
        </tr>
        <tr>
            <td colspan="2"><h6><?php echo $companyFullName;?></h6></td>
        </tr>
        <tr>
            <td rowspan="3" class="text-right" style="width: 50%;"><img src="img/qrcode.jpg" alt="Responsive image" style="width:70px;height:70px;"></td>
            <td class="text-left" style="width: 50%;"><span class="glyphicon glyphicon-earphone" aria-hidden="true"><a href="tel:15190351982">15190351982</a></span>
            </td>
        </tr>
        <tr>
            <td class="text-left"><span class="glyphicon glyphicon-envelope text-left" aria-hidden="true"><a href="mailto:info@intemash.com">info@intemash.com</a></span>
            </td>
        </tr>
        <tr>
            <td class="text-left">
                <a class="copyright" href="index.php"><?php echo ' ' . $icpCode ?></a>
            </td>
        </tr>
    </table>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
<script src="js/particles.min.js"></script>
<script>
    $(function(){
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('particles-js', 'assets/particles.json', function() {
            console.log('callback - particles.js config loaded');
        });
    });
</script>
</body>
</html>