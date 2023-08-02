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
            <h2 class="content-heading">Orders amd sales</h2>
            <!-- Dynamic Table Full Pagination -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">All sales</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                        <thead>
                            <tr>
                                <th class="text-center"></th>
                                <th> No</th>
                                <th class="d-none d-sm-table-cell">Fullname</th>
                                <th class="d-none d-sm-table-cell">email</th>
                                <th class="d-none d-sm-table-cell">Phonenumber</th>
                                <th class="d-none d-sm-table-cell">Organization</th>
                                <th class="d-none d-sm-table-cell">Position</th>

                                <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="text-center"></td>
                                <td class="font-w600">1</td>

                                <td class="font-w600">Kelvin Msindai</td>
                                <td class="font-w600">kevoo@example.com</td>
                                <td class="font-w600">0768341223</td>
                                <td class="font-w600">THS</td>

                                <td class="font-w600">developer</td>
                                <td class="font-w600"><img style="width: 50px;" src="assets/img/photos/photo34.jpg" alt=""></td>

                                <td class="d-none d-sm-table-cell"><a href=""><img title="delete" style="width: 16px;" src="assets/img/photos/delete.png" alt=""></a></td>
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