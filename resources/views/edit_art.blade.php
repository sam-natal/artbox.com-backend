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
            <h2 class="content-heading">Edit Art</h2>
            <div class="row">
                <div class="col-md-12">
                    <!-- Bootstrap Register -->
                    <div class="block block-themed">
                        <div class="block-header bg-gd-emerald">
                            <h3 class="block-title">Edit Art</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">

                            <form method="post" action="/edited_art" enctype="multipart/form-data">

                                @csrf

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Art name:</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="title" value="{{$art[0]->title}}" required='true'>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Description:</label>
                                    <div class="col-12">
                                        <textarea type="" class="form-control" name="description" value="" rows="4" required='true'>{{$art[0]->description}}</textarea>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class=" col-12" for="register1-email">Art properties:</label>
                                    <div class="col-6">
                                        <input type="number" class="form-control" name="width" value="{{$art[0]->width}}" required='true' placeholder="Width" step=any>
                                    </div>
                                    <div class="col-6">
                                        <input type="number" class="form-control" name="height" value="{{$art[0]->height}}" required='true' placeholder="Height" step=any>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                        <select class="form-control" name="category" value="" required='true'>
                                            @switch($art[0]->category_id)
                                            @case(1)
                                            <option value="1">People</option>
                                            @break

                                            @case(2)
                                            <option value="2">Animals</option>
                                            @break

                                            @case(3)
                                            <option value="3">Abstract</option>
                                            @break

                                            @case(4)
                                            <option value="4">Flowers</option>
                                            @break

                                            @endswitch
                                            <option value="1">People</option>
                                            <option value="2">Animals</option>
                                            <option value="3">Abstract</option>
                                            <option value="4">Flowers</option>
                                        </select>
                                    </div>

                                    <div class="col-6">
                                        <select class="form-control" name="orientation" value="" required='true'>
                                            <option value="{{$art[0]->orientation == 'pot' ? 'pot' : 'lan'}}">{{$art[0]->orientation == 'pot' ? 'Potrait' : 'Landscape'}}</option>
                                            <option value="lan">Landscape</option>
                                            <option value="pot">Potrait</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                        <input type="number" class="form-control" name="price" value="{{$art[0]->price}}" required='true' placeholder="Price">
                                    </div>

                                    <div class="col-6">
                                        <select class="form-control" name="artist" value="" required='true'>
                                            <option value="">Select artist...</option>
                                            @foreach ($artists as $artist)
                                            <option value="{{$artist->id}}">{{$artist->first_name.' '.$artist->last_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                        <input type="file" name="image" id="">
                                    </div>
                                </div>

                                <input type="hidden" class="form-control" name="id" value="{{$art[0]->id}}" required='true'>

                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-alt-success" name="submit">
                                            <i class="fa fa-save mr-5"></i> Save
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