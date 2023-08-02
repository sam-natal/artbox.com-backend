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
            <h2 class="content-heading">Add Art</h2>
            <div class="row">
                <div class="col-md-12">
                    <!-- Bootstrap Register -->
                    <div class="block block-themed">
                        <div class="block-header bg-gd-emerald">
                            <h3 class="block-title">Add Art</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">

                            <form method="post" action="/postart" enctype="multipart/form-data">

                                @csrf

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Art name:</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="title" value="" required='true'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Description:</label>
                                    <div class="col-12">
                                        <textarea type="" class="form-control" name="description" value="" rows="4" required='true'></textarea>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class=" col-12" for="register1-email">Art properties:</label>
                                    <div class="col-6">
                                        <input type="number" class="form-control" name="width" value="" required='true' placeholder="Width" step=any>
                                    </div>
                                    <div class="col-6">
                                        <input type="number" class="form-control" name="height" value="" required='true' placeholder="Height" step=any>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                        <select class="form-control" name="category" value="" required='true'>
                                            <option value="">Select category...</option>
                                            <option value="1">People</option>
                                            <option value="2">Animals</option>
                                            <option value="3">Abstract</option>
                                            <option value="4">Flowers</option>
                                        </select>
                                    </div>

                                    <div class="col-6">
                                        <select class="form-control" name="orientation" value="" required='true'>
                                            <option value="">Select orientation...</option>
                                            <option value="lan">Landscape</option>
                                            <option value="pot">Potrait</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                        <input type="number" class="form-control" name="price" value="" required='true' placeholder="Price">
                                    </div>
                                    <div class="col-6">
                                        <input type="file" name="image" id="">
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