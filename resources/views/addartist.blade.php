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

            <!-- Register Forms -->
            <h2 class="content-heading">Add Artist</h2>
            <div class="row">
                <div class="col-md-12">
                    <!-- Bootstrap Register -->
                    <div class="block block-themed">
                        <div class="block-header bg-gd-emerald">
                            <h3 class="block-title">Add Artist</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">

                            <form method="post" action="/add_artist" enctype="multipart/form-data">

                                @csrf                                
                                <div class="form-group row">
                                    <label class=" col-6" for="register1-email">First name:</label>
                                    <label class=" col-6" for="register1-email">Last name:</label>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="f_name" value="" required='true' step=any>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="l_name" value="" required='true' step=any>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class=" col-6" for="register1-email">Email:</label>
                                    <label class=" col-6" for="register1-email">Phone:</label>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="email" value="" required='true' step=any>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="phone" value="" required='true' step=any>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Biography:</label>
                                    <div class="col-12">
                                        <textarea type="" class="form-control" name="bio" value="" rows="4" required='true'></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                        <input type="file" name="profile_pic" id="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-alt-success" name="submit">
                                            <i class="fa fa-plus mr-5"></i> Add
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- END Bootstrap Register -->
                </div>

            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

</x-app-layout>