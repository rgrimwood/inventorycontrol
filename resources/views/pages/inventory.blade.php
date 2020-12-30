
@extends ('layouts.default')

@section ('content')

    <div class="container">
        <h1 class="mb-4 pb-2">Inventory</h1>

        <div class="row">
            <div class="col-lg-9">

                <a href="/states" class="btn btn-uce">States</a>
                

                <div>
                    <p>DEVELOPMENT TASKS</p>
                    <div style="background-color: rgb(207, 70, 70)">
                        <p>- Make each header option have drop down for more options (Sort by etc.)</p>
                        <p>- Add filter options</p>
                        <p>- Total quantity = total of that item in all states</p>
                    </div>
                </div>


                <table class="parts-table" style="width:100%">
                    <tr class="parts-column-headers">
                        <th>Part ID</th>
                        <th>Part Name</th>
                        <th>Part Description</th>
                        <th>Total Quantity</th>
                    </tr>

                    @foreach ($part as $part) 
                        <nav>
                            <tr class="parts-rows">
                                <th><a href="/part/{{ $part->part_id }}">{{ $part->part_id }}</a></th>
                                <th>{{ $part->part_name }}</th>
                                <th>{{ $part->part_description }}</th>
                                <th>0</th>
                            </tr>
                        </nav>
                    @endforeach
                </table>

                <div>
                    <a href="#" class="btn btn-uce">Add Part</a>
                </div>
                
            </div>
        </div>

    </div>
@endsection