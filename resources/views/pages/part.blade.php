@extends ('layouts.default')

@section ('content')

    <div class="container">
        <h1 class="mb-4 pb-2">Part {{ $part->part_id }}</h1>


        <!--DEVELOPMENT TASKS-->
        <h4 class="mb-2 pb-1" style="text-decoration: underline;">DEVELOPMENT TASKS</h4>
            <ul class="mb-4 pb-2">
                <li>Create a table for data for data to be stored in</li>
                <li>data for a part must be dynamic dependant on the selection</li>
                <li>access this page from selection from a list (stock, states etc.) or from search result.</li>
            </ul>

        <div class="row">
            <div class="col-lg-9">

                <p>Part Name = {{ $part->part_name }} </p>
                <p>Part Description = {{ $part->part_description }} </p>
                <p>Raw Material = quantity, stock location</p>
                <p>In processes = for each process, quantities, stock locations</p>
                <p>finished = quantity, stock location</p>

                <div class="mt-4 pt-4">
                    <a href="/edit_part/{{ $part->part_id }}" class="btn btn-uce">Edit Part</a>
                </div>

            
            </div>
        </div>
    </div>

@endsection
