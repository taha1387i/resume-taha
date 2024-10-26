
    @extends('layouts-fa.app-fa')

    @section('section-fa')

        <!-- hobabs -->
        <ul id="hobab">
            <li class="hhobab hh-1"></li>
            <li class="hhobab hh-2"></li>
            <li class="hhobab hh-3"></li>
            <li class="hhobab hh-4"></li>
            <li class="hhobab hh-5"></li>
            <li class="hhobab hh-6"></li>
            <li class="hhobab hh-7"></li>
            <li class="hhobab hh-8"></li>
            <li class="hhobab hh-9"></li>
            <li class="hhobab hh-10"></li>
            <li class="hhobab hh-11"></li>
            <li class="hhobab hh-12"></li>
            <li class="hhobab hh-13"></li>
        </ul>
        <!-- end hobabs -->

        <!-- main taha-rezome-fa -->
        <div class="container-fluid flex">
            <div class="col-md-6">
                <div class="hello mt-5 animate__animated animate__backInRight"></div>
                <h3 class="mt-4 animate__animated animate__backInRight">رزومه من :</h3>
                <h3 class="mt-4 animate__animated animate__backInRight">برنامه نویس فول استک سایت</h3>

                <p class="mt-4 fs-5 animate__animated animate__backInRight">
                    برنامه نویس فول استک سایت هستم و با فریم ورک های :
                    <br>
                    <br>
                    فریم ورک های فرانت : Bootstrap , Talwindcss , Ulkit

                    <br>
                    <br>

                    فریم ورک های بک اند : Laravel
                </p>

                <div class="mt-5 ms-auto me-auto d-flex justify-content-center">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-info ms-3 p-3 w-50 animate__animated animate__backInRight" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <a href="#modal" class="text-white text-decoration-none">بیاید صحبت کنیم</a>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <h1 class="modal-title ms-auto fs-5" id="staticBackdropLabel">راه های ارتباطی با من</h1>
                                </div>
                                <div class="modal-body">

                                    <div class="d-flex justify-content-between mb-5">
                                        <a href="https://eitaa.com/taha1387_i" target="_blank">
                                            <img class="img" src="{{ asset('src/img/eitaa.png') }}" width="44px">
                                        </a>

                                        <a href="https://www.aparat.com/taha1387_i" target="_blank">
                                            <img class="img" src="{{ asset('src/img/Aparat.png') }}" alt="" width="55px">
                                        </a>

                                        <a href="https://rubika.ir/taha1387_i" target="_blank">
                                            <img class="img" src="{{ asset('src/img/rubika.png') }}" width="48px">
                                        </a>
                                    </div>

                                    <div class="d-flex justify-content-between mb-5">
                                        <a href="https://www.instagram.com/taha1387_i/" target="_blank">
                                            <img class="img" src="{{ asset('src/img/Instagram.png') }}" alt="">
                                        </a>

                                        <a href="https:/github.com/taha1387i" target="_blank">
                                            <img class="img" src="{{ asset('src/img/GitHub.png') }}" width="54px">
                                        </a>

                                        <a href="https://wa.me/+989385474802" target="_blank">
                                            <img class="img" src="{{ asset('src/img/WhatsApp.png') }}" alt="">
                                        </a>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <a href="https://linkedin.com/in/taha-ebrahimnezhad-047654334" target="_blank">
                                            <img class="img" src="{{ asset('src/img/LinkedIn.png') }}" alt="">
                                        </a>

                                        <a href="http://twitter.com/taha1387_i" target="_blank">
                                            <img class="img" src="{{ asset('src/img/TwitterX.png') }}" alt="">
                                        </a>

                                        <a href="https://www.t.me/taha1387_i" target="_blank">
                                            <img class="img" src="{{ asset('src/img/Telegram.png') }}" alt="" width="53px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="w-50 animate__animated animate__backInRight">
                        <button type="button" class="btn btn-primary p-3 w-100">سایت شرکت ما</button>
                    </a>

                </div>
            </div>

            <!-- img -->
            <div class="col-md-6">
                <div class="animate__animated animate__backInLeft responsive-none">
                    <img src="{{ asset('src/img/me-photo.jpg') }}" data-tilt class="ms-auto me-auto mt-5 rounded-full" width="414px" alt="طاها" style="height: 25rem;">
                </div>
            </div>
            <!-- end img -->
        </div>

    @endsection
