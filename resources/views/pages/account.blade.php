<?php
// error_reporting(E_ALL & ~E_NOTICE); // Displays errors - Just for development - Remove before going live
// ini_set('display_errors','On');     // Displays errors - Just for development - Remove before going live

// $Employee = new Employee($Conn);

// $employee_info = $Employee->getEmployeeInformation();
// print $employee_info;
?>


@extends ('layouts.default')

@section ('content')


<div>
    <h1 class="mb-4 pb-2">My Account</h1>
    <p>Welcome to your account. From here you can view your account information.</p>

    <h2>My Information</h2>

        <div>
            <!-- <?php// foreach($employee_info as $info) { ?>
                <nav>
                    <tr class="parts-rows">
                        <th><?php// echo $info['employee_id'];?></th>
                        <th><?php// echo $info['first_name']?></th>
                        <th><?php// echo $info['last_name']?></th>
                        <th><?php// echo $info['date_of_employment']?></th>
                        <th><?php// echo $info['national_insurance']?></th>
                        <th><?php// echo $info['date_of_birth']?></th>
                    </tr>
                </nav>
            <?php //} ?> -->
        </div>


</div>

@endsection