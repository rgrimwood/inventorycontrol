
@extends ('layouts.default')

@section ('content')


    <div class="container">
        <h1 class="mb-4 pb-2">States</h1>

        <div class="row">
            <div class="col-lg-9">
                <a href="/raw_material" class="btn btn-uce">Raw Material</a>
                <a href="/in_process" class="btn btn-uce">In Process</a>
                <a href="/finished" class="btn btn-uce">Finished</a>

                
                <h1 style="padding-top: 25px;">Development Tasks</h1>
                <div style="background-color: rgb(207, 70, 70);">
                    <ul>
                        <li>Make each header option have drop down for more options</li>
                        <li>Make table header dynamic</li>
                        <li>make each of the above state buttons change which table is loaded on this page? Negates the need for indivdual state pages</li>
                        <li>make url wildcard to load different table and buttons (Part of the above point)</li>
                    </ul>
                </div>


                <table class="parts-table" style="width:100%">
                    <h1 style="padding-top: 35px;">Table Header - Make Dynamic (RM, IP, F)</h1>
                    <tr class="parts-column-headers">
                        <th>Part ID</th>
                        <th>Part Name</th>
                        <th>Part Description</th>
                    </tr>

                    {{-- @foreach ($part as $part) 
                        <nav>
                            <tr class="parts-rows">
                                <th><a href="/parts/{{ $part->part_id }}">{{ $part->part_id }}</a></th>
                                <th>{{ $part->part_name }}</th>
                                <th>{{ $part->part_description }}</th>
                            </tr>
                        </nav>
                    @endforeach --}}
                </table>

                <div>
                    <a href="#" class="btn btn-uce">Add Part</a>
                </div>
                
            </div>
        </div>
    </div>

@endsection