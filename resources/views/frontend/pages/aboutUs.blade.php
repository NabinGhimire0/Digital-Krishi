<x-guest-layout>
    <div
        style="background: rgba(106,169,108);
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 0px );
    -webkit-backdrop-filter: blur( 0px );
">
        @include('frontend/layouts/inc/nav')

    </div>

    <main style="">

        <div class="wrapper" style="min-height: 53svh;margin-block: 2rem">
            <center>
                <h1>About us</h1>
            </center>
            <p style="text-align: justify; width:80%; margin-inline: auto;margin-block: 1.8rem">
                {{ GoogleTranslate::trans(
                    "Welcome to Digital
                                Krishi, where our main goal is to help farmers succeed and make farming better for everyone. We want to
                                use new and smart ways to support farmers in growing crops that are good for the environment and bring
                                success. Farmers are like the strong backbone of our society, providing food for everyone and making our
                                communities thrive.
                
                                At Digital Krishi, we believe in making things easier for farmers and giving them the tools they need.
                                We know that farmers are essential for our well-being, and we're here to make their journey easier.
                                Whether you're a new farmer or have been doing it for a while, we're here to provide helpful information
                                and support.",
                    \App::getLocale(),
                ) }}
            </p>
            <p style="text-align: justify; width:80%; margin-inline: auto;margin-block: 1.8rem">
                {{ GoogleTranslate::trans(
                    "We also think it's
                                important for farmers to work together and share their knowledge. That's why we have a community where
                                farmers can connect, learn from each other, and support one another. It's like a digital neighborhood
                                for farmers!
                
                                Our digital marketplace is another way we help farmers. We connect them with reliable suppliers and
                                buyers, making it simpler for them to get what they need and sell their products at fair prices.",
                    \App::getLocale(),
                ) }}
            </p>

        </div>
    </main>

</x-guest-layout>
