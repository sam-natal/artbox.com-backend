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
            <h2 class="content-heading">Today Events</h2>



            <!-- Dynamic Table Full Pagination -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Events</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                        <thead>
                            <tr>
                                <th class="text-center"></th>
                                <th> ID</th>
                                <th class="d-none d-sm-table-cell">Events Name</th>
                                <th class="d-none d-sm-table-cell">Speaker</th>
                                <th class="d-none d-sm-table-cell">Location</th>
                                <th class="d-none d-sm-table-cell">Category</th>
                                <th class="d-none d-sm-table-cell">Description</th>
                                <th class="d-none d-sm-table-cell">date and time</th>
                                <th class="d-none d-sm-table-cell">Uploaded File</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="text-center"></td>
                                <td class="font-w600">1</td>
                                <td class="font-w600">Education</td>
                                <td class="font-w600">Kelvin Msindai</td>
                                <td class="font-w600">Kigamboni</td>
                                <td class="font-w600">Status</td>
                                <td class="font-w600">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem sed beatae expedita.</td>
                                <td class="font-w600">12:23</td>
                                <td class="font-w600">
                                    <img width="16px" src="assets/img/avatars/avatar0.jpg" alt="">
                                </td>


                                <!-- <td class="d-none d-sm-table-cell"><a href="view-booking-detail.php?editid={{--<?php echo htmlentities($row->ID); ?>--}}&&bookingid={{--<?php echo htmlentities($row->BookingID); ?>--}}"><i class="fa fa-eye" aria-hidden="true"></i></a></td> -->
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Dynamic Table Full Pagination -->

            <!-- END Dynamic Table Simple -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

</x-app-layout>