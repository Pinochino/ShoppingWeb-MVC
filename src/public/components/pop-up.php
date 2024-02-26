<!-- <a class="uk-button uk-button-default" href="#pop-up" uk-toggle>Open</a> -->

<div id="pop-up" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-animation-slide-top-medium uk-animation-fade">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="uk-flex uk-flex-between uk-animation-scale-up">
            <div class="pop-up-img">
                <img src="/src/public/resource/Images/All-departments/Pop-up.webp" alt="" class="img img-scaledown">
            </div>
            <div class="pop-up-information">
                <div class="pop-up-header">
                    <p>Todays's your day</p>
                </div>
                <div class="pop-up-body">
                    <span>$30 off +</span>
                    <span>Free Shipping</span>
                    <p>When you sign up for emails!</p>
                </div>
                <div class="pop-up-footer">
                    <div class="pop-up-email">
                        <input type="text" name="email" id="" placeholder="Enter Your Email ... ">
                        <button type="button">Sign up</button>
                    </div>
                    <div class="check-pop-up">
                        <input type="radio" name="" id="">
                        <span>Don't show this popup again</span>
                       
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
            UIkit.modal('#myModal').show();
        });

        </script>