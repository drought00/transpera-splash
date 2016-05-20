{{ Theme::asset()->usePath()->add('css-splash.css', 'css/splash.css') }}
{{ Theme::asset()->usePath()->add('js-splash.js', 'js/splash.js') }}

<div class="splashBody">
    <div class="splashWrapper">
        <div class="splashContent">
            <div class="splashLeft">
                <div class="countDownWrapper">
                    <div class="logoContainer">
                        <img class="splashImage" src="{{URL::to('/')}}/themes/pogi/assets/img/transperaLogo.png"/>
                    </div>
                    <div class="countDownCont">
                        <div class="countDownBlock">
                            <span id="days" class="countdownElms daysCount"></span>
                            <span class="countDownLabels">Days</span>
                        </div>
                        <div class="countDownBlock">
                            <span id="hour" class="countdownElms hoursCount"></span>
                            <span class="countDownLabels">Hours</span>
                        </div>
                        <div class="countDownBlock">
                            <span id="mins" class="countdownElms minutesCount"></span>
                            <span class="countDownLabels">Minutes</span>
                        </div>
                        <div class="countDownBlock">
                            <span id="secs" class="countdownElms secCount"></span>
                            <span class="countDownLabels">Seconds</span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="comingSoonCont">
                        <h3 class="comingSoon">Coming Soon...</h3>
                    </div>
                </div>
            </div>
            <div class="splashRight">
                <div class="splashRightWrapper">
                    <img class="splashImage" src="{{URL::to('/')}}/themes/pogi/assets/img/splashImage.png"/>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>