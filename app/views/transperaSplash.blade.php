{{ Theme::asset()->usePath()->add('css-splash.css', 'css/splash.css') }}
{{ Theme::asset()->usePath()->add('js-splash.js', 'js/splash.js') }}

<div class="splashBody">
    <div class="splashWrapper">
        <div class="splashContent">
            <div class="splashLeft">
                <div class="logoContainer">
                    <img class="splashImage" src="{{URL::to('/')}}/themes/pogi/assets/img/transperaLogo.png"/>
                </div>
                <div class="countDownCont">
                    <div class="countDownBlock">
                        <span class="countdownElms daysCount"></span>
                        <span class="countdownElms daysCount">Days</span>
                    </div>
                    <div class="countDownBlock">
                        <span class="countdownElms hoursCount"></span>
                        <span class="countdownElms hoursCount">Hours</span>
                    </div>
                    <div class="countDownBlock">
                        <span class="countdownElms minutesCount"></span>
                        <span class="countdownElms minutesCount">Minutes</span>
                    </div>
                    <div class="countDownBlock">
                        <span class="countdownElms secCount"></span>
                        <span class="countdownElms secCount">Seconds</span>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="splashRight">
                <img class="splashImage" src="{{URL::to('/')}}/themes/pogi/assets/img/splashImage.png"/>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>