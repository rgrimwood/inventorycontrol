@extends ('layouts.default')

@section ('content')


    <div class="container">
        {{-- <h1 class="mb-4 pb-2">Part {{ $part->part_id }}</h1> --}}


        <!--DEVELOPMENT TASKS-->
        <h4 class="mb-2 pb-1" style="text-decoration: underline;">DEVELOPMENT TASKS</h4>
        <ul class="mb-4 pb-2">
            <li>Visually same as Part page except all information must now exist within an editable form</li>
            <li>send new part creaton to this page - make displayed information default values. NULLS. Must add values to certain boxes to save. If not cancel new part</li>
            <li>Maybe add edit processes here ---- Maybe create seperate card?</li>
            <li>Link Edit Part forms to database</li>
            <li>Figure out the routing and url structure for this page</li>
        </ul>
        <!--DEVELOPMENT TASKS END-->


        <div class="row">
            <div class="col-lg-9">
            </div>
            <div>
                <p>Part Name = </p>
                <p>Part Description = </p>
                <p>Raw Material = quantity, stock location</p>
                <p>In processes = for each process, quantities, stock locations</p>
                <p>finished = quantity, stock location</p>

                <div>
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="part-name" class="col-md-4 col-form-label text-md-right">{{ __('Part Name') }}</label>

                            <div class="col-md-6">
                                <input id="part-name" type="text" class="form-control @error('part-name') is-invalid @enderror" name="part-name" value="{{ old('part-name') }}" required autocomplete="part-name" autofocus>

                                @error('part-name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="part-description" class="col-md-4 col-form-label text-md-right">{{ __('Part Description') }}</label>

                            <div class="col-md-6">
                                <input id="part-description" type="part-description" class="form-control @error('part-description') is-invalid @enderror" name="part-description" value="{{ old('part-description') }}" required autocomplete="part-description">

                                @error('part-description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- MAYBE ADD PROCESSES? -->

                        {{-- <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div> --}}
                    </form>
                </div>

                <div>
                    <a href="" class="btn btn-uce">Save Changes</a>
                    <a href="" class="btn btn-uce">Cancel Changes</a>
                    <a href="" class="btn btn-uce">Delete Part</a>
                </div>
                
            </div>
        </div>
    </div>
@endsection