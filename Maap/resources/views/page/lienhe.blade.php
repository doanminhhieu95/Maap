<form action="{{route('lienhe')}}" method="post" class="contact-form">
{{csrf_field()}}
    <div class="form-block">
        <input name="name" type="text" placeholder="Your Name (required)">
    </div>
    <div class="form-block">
        <input name="email" type="email" placeholder="Your Email (required)">
    </div>
    <div class="form-block">
        <input name="subject" type="text" placeholder="Subject">
    </div>
    <div class="form-block">
        <textarea name="message" placeholder="Your Message"></textarea>
    </div>
    <div class="form-block">
        <button type="submit" class="beta-btn primary">Send Message
            <i class="fa fa-chevron-right"></i>
        </button>
    </div>
</form>