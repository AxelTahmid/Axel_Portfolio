<section id="contact" class="section">
    <h2 class="title">{{ 'CONTACT' }}</h2>
    <div class="section-des">
        Do you want to work together or discuss an idea? Let's tech-talk.
    </div>
    <div class="content-670">
        <p>
            If you have an amazing idea I would love to hear it. If you think I am a perfect fit for your project, do not hesitate to contact me.
        </p>
    </div>

    <a href="https://goo.gl/maps/aj33VEoc8qWVhwXUA" target="_blank">
        <img class="block-right" src="images/contact.jpg" alt="">                    
    </a>

    <div class="content-670">
        <div class="contact-form">
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            <p>
                <input id="name" type="text" name="your-name" placeholder="NAME" >
            </p>
            <p>
                <input id="contact-email" type="email" name="your-email" placeholder="EMAIL" >
            </p>                                    
            <p>
                <input id="subject" type="text" name="your-subject" placeholder="SUBJECT">
            </p>
            <p>
                <textarea id="message" name="your-message" placeholder="MESSAGE"></textarea>
            </p>
            <p class="contact-submit-holder">
                <input type="submit" value="SEND">
            </p>   
        </div> 
    </div>
</section>