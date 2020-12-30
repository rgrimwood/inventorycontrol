
@extends ('layouts.default')

@section ('content')

    <div class="container">
        <h1 class="mb-4 pb-2">Employees</h1>

        <div class="row">
            <div class="col-lg-9">
                    {{-- <a href="/states" class="btn btn-uce">States</a> --}}
                </div>


                <div>
                    <p>DEVELOPMENT TASKS</p>
                    <div style="background-color: rgb(207, 70, 70)">
                        <p>- Make each header option have drop down for more options</p>
                        <p>- Add table side scrolling for screens smaller than 1000px</p>
                    </div>
                </div>


                <table class="employees-table" style="width:100%">
                    <tr class="employees-column-headers">
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Date of Birth</th>
                        <th>National Insurance</th>
                        <th>Work Email</th>
                        <th>Contact Number</th>
                        <th>Date of Employment</th>
                        <th>Department Manager</th>
                    </tr>

                    @foreach ($employee as $employee) 
                        <nav>
                            <tr class="employees-rows">
                                <th>{{ $employee -> first_name }}</th>
                                <th>{{ $employee -> last_name }}</th>
                                <th>{{ $employee -> date_of_birth }}</th>
                                <th>{{ $employee -> national_insurance }}</th>
                                <th>{{ $employee -> emp_email }}</th>
                                <th>{{ $employee -> mobile }}</th>
                                <th>{{ $employee -> date_of_employment }}</th>
                                <th></th>
                            </tr>
                        </nav>
                    @endforeach
                </table>

                <div>
                    <a href="" class="btn btn-uce">Add Employee</a>
                </div>
                
            </div>
        </div>

    </div>
@endsection