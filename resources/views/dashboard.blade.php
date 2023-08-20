<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <div class="row gutters-tiny invisible" data-toggle="appear">
                <!-- Row #1 -->
                <div class="col-6 col-md-4 col-xl-4">
                    <a class="block text-center" href="{{ url('/sales') }}">
                        <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
                            <div class="ribbon-box">12</div>
                            <p class="mt-5">
                                <img style="width: 50px; position:relative; left:165px;" src="assets/img/icons/icons8-sale-64.png" alt="" />
                            </p>
                            <p class="font-w600 text-white">
                                Weekly Sales
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-4">
                    <a class="block text-center" href="{{ url('/sales') }}">
                        <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
                            <div class="ribbon-box">12</div>
                            <p class="mt-5">
                                <img style="width: 50px; position:relative; left:165px;" src="assets/img/icons/icons8-calling-64.png" alt="" />
                            </p>
                            <p class="font-w600 text-white">
                                Weekly Orders
                            </p>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-xl-4">
                    <a class="block text-center" href="{{ url('/allarts') }}">
                        <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-sea">
                            <div class="ribbon-box">{{ $totalArts}}</div>
                            <p class="mt-5">
                                <!-- <i class="si si-target fa-3x text-white-op"></i> -->
                                <img style="width: 50px; position:relative; left:165px;" src="assets/img/icons/icons8-art-64.png" alt="" />
                            </p>
                            <p class="font-w600 text-white">
                                Arts
                            </p>
                        </div>
                    </a>
                </div>

                <!-- END Row #1 -->
            </div>
        </div>
        <div class="content">
            <div class="row gutters-tiny invisible" data-toggle="appear">
                <!-- Row #2 -->
                <div class="col-6 col-md-4 col-xl-4 ">
                    <a class="block text-center" href="{{ url('/managechat') }}">
                        <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
                            <div class="ribbon-box">50</div>
                            <p class="mt-5">
                                <img style="width: 50px; position:relative; left:165px;" src="assets/img/icons/icons8-messages-64.png" alt="" />
                            </p>
                            <p class="font-w600 text-white">
                                New messages
                            </p>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-xl-4">
                    <a class="block text-center" href="manage-services.php">
                        <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
                            <div class="ribbon-box">90000</div>
                            <p class="mt-5">
                                <img style="width: 50px; position:relative; left:165px;" src="assets/img/icons/icons8-customer-royalty-64.png" alt="" />
                            </p>
                            <p class="font-w600 text-white">
                                Customers
                            </p>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-xl-4">
                    <a class="block text-center" href="user.html">
                        <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-sea">
                            <div class="ribbon-box">12</div>
                            <p class="mt-5">
                                <!-- <i class="si si-bubbles fa-3x text-white-op"></i> -->
                                <img style="width: 50px; position:relative; left:165px;" src="assets/img/icons/icons8-revenue-64.png" alt="" />
                            </p>
                            <p class="font-w600 text-white">
                                Revenues
                            </p>
                        </div>
                    </a>
                </div>
                <!-- END Row #2 -->
            </div>
        </div>

        <div class="content">
            <div class="row gutters-tiny invisible" data-toggle="appear">
                <!-- Row #3 -->
                <div class="col-6 col-md-4 col-xl-4 ">
                    <a class="block text-center" href="{{ url('/allartists') }}">
                        <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
                            <div class="ribbon-box">{{ $totalArtists}}</div>
                            <p class="mt-5">
                                <img style="width: 50px; position:relative; left:165px;" src="assets/img/icons/icons8-artist-96.png" alt="" />
                            </p>
                            <p class="font-w600 text-white">
                                Artists
                            </p>
                        </div>
                    </a>
                </div>
                <!-- END Row #3 -->
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->


</x-app-layout>