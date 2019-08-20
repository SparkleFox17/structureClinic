<section id="contact">
    <div class="container">
        <h1 class="page-header">Contact</h1> 
        <br>
        <div class="half-container">
            <p>
                We are discreetly situated within the Ka-Space Ethical Fashion Boutique and offer
                scheduling by appointment only.
            </p>
            <br/>

            <p>
                Please fill out the form below if you would like to book a
                service, a complimentary consultation, or if you have any questions.
            </p>
            <br>
            <div class="contact-info"> 
                <form id="contact-form" action="./inc/email.php" method="post">
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" name="Name" id="Name">
                        <label class="mdl-textfield__label" for="Name">Name</label>
                    </div>
                    <br>
            
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" name="Phone" id="Phone">
                        <label class="mdl-textfield__label" for="Phone">Phone</label>
                    </div>
                    <br>

                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" name="Email" id="Email">
                        <label class="mdl-textfield__label" for="Email">Email</label>
                    </div>
                    <br>

                    <p>Preferred method of contact?</p><br/>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                        <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="1">
                        <span class="mdl-radio__label">Phone</span>
                    </label>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2" style="margin-left:20px;">
                        <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
                        <span class="mdl-radio__label">Email</span>
                    </label>
                    <br>

                    <div class="mdl-textfield mdl-js-textfield">
                        <textarea class="mdl-textfield__input" type="text" rows= "10" name="Message" id="Message" ></textarea>
                        <label class="mdl-textfield__label" for="Message">Message (optional)</label>
                    </div>
                    <br>

                    <button type="submit" name="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect">
                    Send
                    </button>
                </form>
                <br>
            </div> 
            <br/>
            <p>
                please indicate if you have a preferred appointment date or
                time and we will do our best to accommodate you.
            </p>
            <br/>
            <p><span id="contact-msg"></span></p>
        </div>
    </div> 
    <img id="contact-img" src="./imgs/contact.jpg" /> 
</section>