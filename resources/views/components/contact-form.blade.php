<!-- ==================== Contact ==================== -->
<section id="contact" class="section">
    <h2 class="title">CONTACT</h2>
    <div class="section-des">
        Do you want to work together or discuss an idea? Let's tech-talk.
    </div>
    <div class="content-670">
        <p>
            If you have an amazing idea I would love to hear it. If you think I am a perfect fit for your project, do not hesitate to contact me.
        </p>
    </div>

    <a href="https://goo.gl/maps/aj33VEoc8qWVhwXUA" target="_blank">
        <img class="block-right" src="images/map.png" alt="">                    
    </a>

    <div class="content-670">
        <div class="contact-form">
            <form method="POST" action="{{ route('contact-form.store') }}"> 
                {{ csrf_field() }} 
            <p>
                <input id="name" type="text" name="your-name" placeholder="NAME" value="{{ old('name') }}">
            </p>
            <p>
                <input id="contact-email" type="email" name="your-email" placeholder="EMAIL" value="{{ old('email') }}">
            </p>                                    
            <p>
                <input id="subject" type="text" name="your-subject" placeholder="SUBJECT" value="{{ old('subject') }}">
            </p>
            <p>
                <textarea id="message" name="your-message" placeholder="MESSAGE">{{ old('message') }}</textarea>
            </p>
            <p class="contact-submit-holder">
                <input type="submit" value="SEND">
            </p>   
            </form>                             
        </div> 
    </div>

</section>
<!-- ================== Contact END ================== -->