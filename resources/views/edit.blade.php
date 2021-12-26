@extends('welcome')

@section('content')

    <div>
        <div>
            <h2>Update Beans Info</h2>
        </div>

            <div>
                <form action="/beans/{{ $beans->id }}" method="POST" class="form-control">
                    @method('PUT')
                    @csrf

                    <ul class="responsive-table">
                        <li class="table-header">
                            <div class="col col-2">NAME</div>
                            <div class="col col-3">CAFFEINE LEVEL</div>
                            <div class="col col-4">COST</div>
                            <div class="col col-5">BEAN TYPE</div>
                            <div class="col col-6">ROAST</div>
                            <div class="col col-7">GRIND</div>
                            <div class="col col-8">ORIGIN</div>
                            <div class="col col-9">ACTION</div>
                        </li>

                        <li>
                            <!-- Name field -->
                            <input type="text" name="name" class="border-t border-r md:border-l" value="{{ $beans->name }}">
                            <!-- CAFFEINE LEVEL field -->
                            <select class="form-control" name="caffeine_level" value="{{ $beans->caffeine_level }}">
                                <option selected value="" disabled>SELECT</option>
                                <option value="decaf">Decaf</option>
                                <option value="low">Low</option>
                                <option value="medium">Medium</option>
                                <option value="high">High</option>
                            </select>
                            <!-- COST field -->
                            <input type="text" name="cost" class="border-t border-r md:border-l" value="{{ $beans->cost }}"></input><span style="margin-left:10px;">/lb</span>
                            <!-- BEAN TYPE field -->
                            <select class="form-control" name="bean_type" value="{{ $beans->bean_type }}">
                                <option selected value="" disabled>SELECT</option>
                                <option value="Arabica">ARABICA</option>
                                <option value="Robusta">ROBUSTA</option>
                                <option value="Liberca">LIBERCA</option>
                                <option value="Excelsa">EXCELSA</option>
                                <option value="Other">OTHER</option>
                            </select>
                            <!-- ROAST field -->
                            <select class="form-control" name="roast" value="{{ $beans->roast }}">
                                <option selected value="" disabled>SELECT</option>
                                <option value="lightk">LIGHT</option>
                                <option value="medium">MEDIUM</option>
                                <option value="dark">DARK</option>
                                <option value="french">FRENCH</option>
                            </select>
                            <!-- GRIND field -->
                            <select class="form-control" name="grind" value="{{ $beans->grind }}">
                                <option selected value="" disabled>SELECT</option>
                                <option value="fine">FINE</option>
                                <option value="medium">MEDIUM</option>
                                <option value="coarse">COARSE</option>
                                <option value="whole-bean">WHOLE-BEAN</option>
                            </select>
                            <!-- COUNTRY OF ORIGIN field -->
                            <input type="text" name="country_of_origin" class="border-t border-r md:border-l" value="{{ $beans->country_of_origin }}">
                            <!-- SUBMIT button -->
                            <button type="submit" class="ml-4">Submit</button>

                        </li>

                        <li>
                            <!-- ERROR MESSAGES - Required Fields -->
                            <p>{{ $errors->first('name') }}<p>
                            <p>{{ $errors->first('caffeine_level') }}<p>
                            <p>{{ $errors->first('cost') }}<p>
                            <p>{{ $errors->first('bean_type') }}<p>
                            <p>{{ $errors->first('roast') }}<p>
                            <p>{{ $errors->first('grind') }}<p>
                            <p>{{ $errors->first('country_of_origin') }}<p>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>


@endsection
