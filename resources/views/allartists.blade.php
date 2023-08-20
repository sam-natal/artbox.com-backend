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
            <h2 class="content-heading">All Arts</h2>



            <!-- Dynamic Table Full Pagination -->
            <div class="block">
                <div class="block-content block-content-full">

                    <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/be_tables_datatables.js -->

                    <div class="row">
                        @foreach ($artists as $artist)
                        <div class="col-md-3 mt-3">
                            <div class="card text-left" style="box-shadow: 5px 6px 5px 5px #f2f2f2;">
                                <img style="width: 200px;" class="card-img-top p-3" src="{{ Storage::url($artist->profile_picture) }}" alt="">
                                <div class="card-body p-3">
                                    <h4 class="card-title"><label>First Name: </label>{{' '.$artist->first_name}}</h4>
                                    <h4 class="card-text"><label>Last Name:</label>{{' '.$artist->last_name}}</h4>
                                    <h4 class="card-text"><label>Email:</label>{{' '.$artist->email}}</h4>
                                    <h4 class="card-text"><label>Phone:</label>{{' '.$artist->phone}}</h4>
                                    <h4 class="card-text"><label>Bio:</label>{{' '.$artist->bio}}</h4>

                                    <form method="post" action="/delete_artist" enctype="multipart/form-data" style="display: inline-block;">
                                        @csrf
                                        <input type="hidden" class="form-control" name="id" value="{{$artist->id}}" required='true'>
                                        <button type="submit" class="btn btn-outline-danger btn-md">DELETE</button>
                                    </form>

                                    <form method="post" action="/edit_artist" enctype="multipart/form-data" style="display: inline-block;">
                                        @csrf
                                        <input type="hidden" class="form-control" name="id" value="{{$artist->id}}" required='true'>
                                        <button type="submit" class="btn btn-outline-primary btn-md">EDIT</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
            <!-- END Dynamic Table Full Pagination -->

            <!-- END Dynamic Table Simple -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

</x-app-layout>