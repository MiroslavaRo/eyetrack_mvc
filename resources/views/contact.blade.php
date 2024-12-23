<x-layout>
    <div class="container " style="margin-top:130px">
        <div class="row d-flex justify-content-evenly ">
            <!-- Contact us -->
            <section class="col-md-6 col-lg-4 mt-lg-0 orderm-3">
                <h2 class="text-capitalize text-center mb-4">Пишете ни</h2>
                <form action="{{ route('submit_form') }}" method="POST">
                    <div class="form-group mb-3">
                        <input placeholder="Тема" type="text" class="form-control border-green" id="subject"
                            name="subject" value="{{ old('subject') }}" required>
                        @error('subject')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input placeholder="Имена" type="text" class="form-control border-green" id="name" name="name" value="{{ old('name') }}"
                            required>
                        @error('name')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input placeholder="Email" type="email" class="form-control border-green" id="email"
                            name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <textarea placeholder="Съобщение" class="form-control border-green" id="message" name="message"
                            rows="3" required>{{ old('message') }}</textarea>
                        @error('message')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-center mt-4">
                        <button type="reset" class="btn bg-yellow col-4 col-lg-3 me-2">Изтрий</button>
                        <button type="submit" class="btn bg-green text-white  col-4  col-lg-3">Изпрати</button>
                    </div>

                </form>
            </section>
            <div class="container d-md-none my-5 orderm-2">
                <div class="border-bottom ">
                </div>
            </div>
            <!-- Location -->
            <section class="col-md-5 col-lg-4 mt-md-0">
                <h2 class="text-capitalize text-center mb-4">Локация</h2>
                <div class="mb-3 ">
                    <img src="imgs/phone.svg" class="contacts" alt="Phone">
                    <span class="ms-2">+00000000</span>
                </div>
                <div class="">
                    <img src="imgs/email.svg" class="contacts" alt="Email">
                    <span class="ms-2">email@mail.com</span>
                </div>

                <div class="my-3 ">
                    <img src="imgs/address.svg" class="contacts" alt="Address">
                    <span class="ms-2">Варна,
                        Младост,
                        ж.к.
                        Младост
                        бл. 144</span>
                </div>
                <ul class="my-4 mx-auto mb-2 navbar-nav d-flex flex-row justify-content-center gap-3">
                    <li class="nav-item rounded-circle bg-yellow ">
                        <a class="nav-link p-2" href="https://instagram.com"><img src="imgs/instagram-logo.svg" class="socials"
                                alt="instagram"></a>
                    </li>
                    <li class="nav-item rounded-circle bg-yellow">
                        <a class="nav-link p-2" href="https://facebook.com"><img src="imgs/facebook-logo.svg" class="socials"
                                alt="facebook"></a>
                    </li>
                    <li class="nav-item rounded-circle bg-yellow">
                        <a class="nav-link p-2 " href="https://bsky.app"><img src="imgs/Bluesky_Logo.svg" class="socials"
                                alt="bluesky"></a>
                    </li>
                </ul>
                <iframe class="my-3 w-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11545.532494564492!2d27.870026327747524!3d43.22808214084792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a45497771a90ad%3A0xad636f4fc4a9aa60!2sDelta%20Planet%20Mall!5e0!3m2!1suk!2sbg!4v1734040275201!5m2!1suk!2sbg"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
        </div>

    </div>
</x-layout>