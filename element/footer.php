<!--<div class="footer navbar-fixed-bottom">-->
<!-- 我们一直在努力  <a class="copyright" href="index.php">--><?php //echo $companyFullName; echo " ".$icpCode?><!--</a><br>-->
<!-- <span><img src="img/qrcode.jpg" class="img-responsive center-block" alt="Responsive image" style="width:50px;height:50px;"></span>-->
<!-- <span class="glyphicon glyphicon-earphone" aria-hidden="true"><a href="tel:15190351982">15190351982</a></span>&nbsp;&nbsp;-->
<!-- <span class="glyphicon glyphicon-envelope" aria-hidden="true"><a href="mailto:info@intemash.com">info@intemash.com</a></span>-->
<!--</div>-->

<!--<footer class="footer">-->
<!--    <table class="container">-->
<!--        <tr>-->
<!--            <td rowspan="4" class="text-right" style="width: 50%;"><img src="img/qrcode.jpg" alt="Responsive image" style="width:70px;height:70px;"></td>-->
<!--            <td class="text-left">科技创造自由生活</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td class="text-left" style="width: 50%;">-->
<!--                <svg class="icon" aria-hidden="true">-->
<!--                    <use xlink:href="#icon-dianhua"></use>-->
<!--                </svg>-->
<!--                <a href="tel:15190351982">15190351982</a>-->
<!--            </td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td class="text-left">-->
<!--                <svg class="icon" aria-hidden="true">-->
<!--                    <use xlink:href="#icon-youxiang"></use>-->
<!--                </svg>-->
<!--                <a href="mailto:info@intemash.com">info@intemash.com</a>-->
<!--            </td>-->
<!--        </tr>-->
<!--    </table>-->
<!--</footer>-->

<!--<footer class="footer">-->
<!--    <div class="row">-->
<!--        <div class="col-5 text-right footer-col-left">-->
<!--            <img src="img/qrcode.jpg" alt="Responsive image" style="width:70px;height:70px;">-->
<!--        </div>-->
<!--        <div class="col-7 align-self-center">-->
<!--        <div class="row">-->
<!--            <div class="col-12 footer-col-right">-->
<!--                    <div class="col-12 text-left footer-col-right">-->
<!--                        <svg class="icon" aria-hidden="true">-->
<!--                            <use xlink:href="#icon-dianhua"></use>-->
<!--                        </svg>-->
<!--                        <a href="tel:15190351982">15190351982</a>-->
<!--                    </div>-->
<!--                    <div class="col-12 text-left footer-col-right">-->
<!--                        <svg class="icon" aria-hidden="true">-->
<!--                            <use xlink:href="#icon-youxiang"></use>-->
<!--                        </svg>-->
<!--                        <a href="mailto:info@intemash.com">info@test.com</a>-->
<!--                    </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->

<div class="row">
    <div class="col-5 text-right footer-col-left">
        <img src="img/<?php echo $qrcodeImg;?>" alt="Responsive image" style="width:70px;height:70px;">
    </div>
    <div class="col-7 align-self-center">
        <div class="row">
            <div class="col-12 footer-col-right">
                <div class="col-12 text-left footer-col-right">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-qq"></use>
                    </svg>
                    <a href="tel:15190351982"><?php echo $contactQQ?></a>
                </div>
                <div class="col-12 text-left footer-col-right">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-dianhua"></use>
                    </svg>
                    <a href="tel:15190351982"><?php echo $contactPhone?></a>
                </div>
                <div class="col-12 text-left footer-col-right">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-youxiang"></use>
                    </svg>
                    <a href="mailto:info@test.com"><?php echo $contactMail?></a>
                </div>
            </div>
        </div>
    </div>
</div>

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
<!--阿里字体-->
<script src="//at.alicdn.com/t/font_520464_w5k4r97sz0azto6r.js"></script>

<!--swiper-->
<!--<script src="js/swiper.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/js/swiper.min.js"></script>
<script>
    $(function(){
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('particles-js', 'assets/particlesjs-config.json', function() {
            console.log('callback - particles.js config loaded');
        });

        var swiperOne = new Swiper('.swiper-container-index', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows : true,
            },
            autoHeight: true,
            autoplay: {
                delay: 3000,
            },
            // 如果需要前进后退按钮
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            preloadImages:false,
        });

        var swiperTwo = new Swiper('.swiper-container', {
            effect: 'flip',
            grabCursor: true,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });

        var swiperThree = new Swiper('.swiper-container-website', {
            effect: 'fade',
            grabCursor: true,
            autoplay: {
                delay: 3000,
            },
            pagination: {
                el: '.swiper-pagination',
            },
            fadeEffect: {
                crossFade: true
            },
        });
    });
</script>
</body>
</html>