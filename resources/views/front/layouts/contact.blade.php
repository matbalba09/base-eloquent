<div>
    <!-- <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> -->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.41574945576!2d121.08999991535231!3d14.68906547883941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ba103f4bd421%3A0xa78d74162653a36!2s5%20Kaligayahan%20St%2C%20Quezon%20City%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1629237686189!5m2!1sen!2sph"
        style="border: 0; width: 100%; height: 350px"
        allowfullscreen=""
        loading="lazy"
    ></iframe>
</div>

<div class="container">
    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="info">
                <div class="address">
                    <h4>Location:</h4>
                    <p>5 Kaligayahan St, Quezon City, Metro Manila</p>
                </div>

                <div class="email">
                    <h4>Email:</h4>
                    <p>clevermindsphils@gmail.com</p>
                </div>

                <div class="phone">
                    <h4>Call:</h4>
                    <p>+284049784</p>
                </div>
            </div>
        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">
            <form
                action="forms/contact.php"
                method="post"
                role="form"
                class="php-email-form"
            >
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            id="name"
                            placeholder="Your Name"
                            required
                        />
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            id="email"
                            placeholder="Your Email"
                            required
                        />
                    </div>
                </div>
                <div class="form-group mt-3">
                    <input
                        type="text"
                        class="form-control"
                        name="subject"
                        id="subject"
                        placeholder="Subject"
                        required
                    />
                </div>
                <div class="form-group mt-3">
                    <textarea
                        class="form-control"
                        name="message"
                        rows="5"
                        placeholder="Message"
                        required
                    ></textarea>
                </div>
                <!-- <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">
                        Your message has been sent. Thank you!
                    </div>
                </div> -->
                <div class="text-center pt-4">
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>
