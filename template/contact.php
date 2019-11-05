<section id="contact">
    <div class="container">
        <h1 class="page-header">Contact</h1> 
        <br><br/>
        <div class="half-container">
            <p>
                We are situated within the KASPACE Ethical Fashion Shop at 185 Carlaw Ave, Toronto.  Services are offered by appointment only.
                <br/><br/>
                Please indicate if you have a preferred appointment date or time and we will do our best to accommodate you.
            </p>

            <div class="contact-info"> 
                <form id="contact-form" action="./inc/email.php" method="post">
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" name="Name" id="Name">
                        <label class="mdl-textfield__label" for="Name">Name</label>
                    </div>
                    <br>

                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" name="Email" id="Email">
                        <label class="mdl-textfield__label" for="Email">Email</label>
                    </div>
                    <br>

                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" name="Phone" id="Phone">
                        <label class="mdl-textfield__label" for="Phone">Phone</label>
                    </div>
                    <br>

                    <p style="margin-bottom:-20px;">Preferred method of contact?</p><br/>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1" style="margin-right:20px;">
                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1">
                        <span class="mdl-radio__label">Phone</span>
                    </label>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2" style="margin-left:20px;">
                        <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
                        <span class="mdl-radio__label">Email</span>
                    </label>
                    <br>

                    <div class="mdl-textfield mdl-js-textfield">
                        <div style="border:1px solid #bdbdbd;">
                            <textarea class="mdl-textfield__input" type="text" rows="9" name="Message" id="Message" placeholder="Please ask us a question or indicate if you have a preferred appointment date"></textarea>
                            <label class="mdl-textfield__label" for="Message">Message (optional)</label>
                        </div>
                    </div>
                    <br>

                    <button type="submit" name="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect">
                    Send
                    </button>
                </form>
                <br>
            </div> 
            <p>
                You can contact us directly at:
                <br/>
                <a href="admin@structureclinic.ca">Admin@structureclinic.ca</a>
            </p>
            <br/>
            <p><span id="contact-msg"></span></p>
        </div>
        <img id="contact-img" src="./imgs/contact.jpg" /> 
    </div> 
    
</section>