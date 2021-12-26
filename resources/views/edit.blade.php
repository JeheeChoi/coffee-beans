@extends('welcome')

@section('content')

    <div>

        <div>
            Update Beans Info
        </div>

        <div>
            <div>
                <form action="/beans/{{ $beans->id }}" method="POST" class="form-control">
                    @method('PUT')
                    @csrf
                    <!-- Name field -->
                    <div>NAME :
                        <input type="text" name="name" class="border-t border-r md:border-l" value="{{ $beans->name }}">
                    <!-- //Shows error message "The name field is required" -->
                        <div>
                            {{ $errors->first('name') }}
                        </div>
                    </div>

                    <!-- CAFFEINE LEVEL field -->
                    <div>CAFFEINE LEVEL :
                        <select class="form-control" name="caffeine_level" value="{{ $beans->caffeine_level }}">
                            <option selected value="" disabled>SELECT</option>
                            <option value="decaf">Decaf</option>
                            <option value="low">Low</option>
                            <option value="medium">Medium</option>
                            <option value="high">High</option>
                        </select>
                        <div>
                            {{ $errors->first('caffeine_level') }}
                        </div>
                    </div>

                    <!-- COST field -->
                    <div>COST :
                        <input type="text" name="cost" class="border-t border-r md:border-l" value="{{ $beans->cost }}"></input><span style="margin-left:10px;">/lb</span>
                    </div>
                    <div>
                        {{ $errors->first('cost') }}
                    </div>

                    <!-- BEAN TYPE field -->
                    <div>BEAN TYPE :
                        <select class="form-control" name="bean_type" value="{{ $beans->bean_type }}">
                            <option selected value="" disabled>SELECT</option>
                            <option value="Arabica">ARABICA</option>
                            <option value="Robusta">ROBUSTA</option>
                            <option value="Liberca">LIBERCA</option>
                            <option value="Excelsa">EXCELSA</option>
                            <option value="Other">OTHER</option>
                        </select>
                        <div>
                            {{ $errors->first('bean_type') }}
                        </div>
                    </div>

                    <!-- ROAST field -->
                    <div>ROAST :
                        <select class="form-control" name="roast" value="{{ $beans->roast }}">
                            <option selected value="" disabled>SELECT</option>
                            <option value="lightk">LIGHT</option>
                            <option value="medium">MEDIUM</option>
                            <option value="dark">DARK</option>
                            <option value="french">FRENCH</option>
                        </select>
                        <div>
                            {{ $errors->first('roast') }}
                        </div>
                    </div>

                    <!-- GRIND field -->
                    <div>GRIND :
                        <select class="form-control" name="grind" value="{{ $beans->grind }}">
                            <option selected value="" disabled>SELECT</option>
                            <option value="fine">FINE</option>
                            <option value="medium">MEDIUM</option>
                            <option value="coarse">COARSE</option>
                            <option value="whole-bean">WHOLE-BEAN</option>
                        </select>
                        <div>
                            {{ $errors->first('grind') }}
                        </div>
                    </div>

                    <!-- COUNTRY OF ORIGIN field -->
                    <div>ORIGIN :
                        <input type="text" name="country_of_origin" class="border-t border-r md:border-l" value="{{ $beans->country_of_origin }}">
                        <div>
                            {{ $errors->first('country_of_origin') }}
                        </div>
                    </div>
                    <br/>
                    <button type="submit" class="ml-4">Submit</button>
                </form>

            </div>
        </div>
    </div>


@endsection
