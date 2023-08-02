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
                <div class="block-header block-header-default">
                    <h3 class="block-title">Conference</h3>
                </div>
                <div class="block-content block-content-full">

                    <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/be_tables_datatables.js -->

                    <div class="row">
                        @foreach ($arts as $art)
                        <div class="col-md-3 mt-3">
                            <div class="card text-left" style="box-shadow: 5px 6px 5px 5px #f2f2f2;">
                                <img style="width: 200px;" class="card-img-top p-3" src="{{ Storage::url($art->image_path) }}" alt="">
                                <div class="card-body p-3">
                                    <h4 class="card-title"><label>Title: </label>{{'  '.$art->title}}</h4>
                                    <h4 class="card-text"><label>Description:</label>{{'   '.$art->description}}</h4>
                                    <h4 class="card-text"><label>Width:</label>{{'   '.$art->width}}</h4>
                                    <h4 class="card-text"><label>Height:</label>{{'   '.$art->height}}</h4>
                                    <h4 class="card-text"><label>Category:</label>{{'   '.$art->category_id}}</h4>  
                                    <h4 class="card-text"><label>Orientation:</label>{{'   '.$art->orientation}}</h4>  
                                    <h4 class="card-text"><label>Price:</label>{{'   $ '.$art->price}}</h4>
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