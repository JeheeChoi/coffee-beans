@extends('welcome')

@section('content')
    <!-- INDEX COFFEE BEANS table shows HERE-->

    <!-- TABLE HEAD ROW -->
    <ul class="responsive-table">
        <li class="table-header">
        <div class="col col-1">ID</div>
        <div class="col col-2">NAME</div>
        <div class="col col-3">CAFFEINE LEVEL</div>
        <div class="col col-4">COST</div>
        <div class="col col-5">BEAN TYPE</div>
        <div class="col col-6">ROAST</div>
        <div class="col col-7">GRIND</div>
        <div class="col col-8">ORIGIN</div>
        <div class="col col-9">OPTIONAL/</div>
        <div class="col col-10">ACTIVITY</div>

        </li>

        <!-- INDEX COFFEE BEANS TABLE BODY -->
        @foreach ($beans as $beans)

        <li class="table-row">
        <div class="col col-1" data-label="Job Id">{{ $beans->id }}</div>
        <div class="col col-2" data-label="Customer Name">{{ $beans->name }}</div>
        <div class="col col-3" data-label="Amount">{{ $beans->caffeine_level }}</div>
        <div class="col col-4" data-label="Payment Status">${{ $beans->cost }}/lb</div>
        <div class="col col-5" data-label="Customer Name">{{ $beans->bean_type }}</div>
        <div class="col col-6" data-label="Amount">{{ $beans->roast }}</div>
        <div class="col col-7" data-label="Payment Status">{{ $beans->grind }}</div>
        <div class="col col-8" data-label="Payment Status">{{ $beans->country_of_origin }}</div>
        <div class="col col-9"><a href="/beans/{{ $beans->id }}/edit"><button type="submit">UPDATE</button></a></div>
        <div class="col col-10"><a href="/beans/{{ $beans->id }}" method="DELETE"><button type="submit">DELETE</button></a></div>
        </li>

        @endforeach

    </ul>
        <!-- ADD NEW BEANS SECTION -->
        <div>
            <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> -->
            <div>
                <h2>Add New Beans</h2>
            </div>
        </div>


    <!-- CREATE BEANS FORM -->
    <div>
        <form action="beans" method="POST" class="form-control">
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
                    <input type="text" name="name" value="{{ old('name') }}">

                    <select class="form-control" name="caffeine_level" value="{{ old('caffeine_level') }}">
                    <option selected value="" disabled>SELECT</option>
                    <option value="decaf">Decaf</option>
                    <option value="low">Low</option>
                    <option value="medium">Medium</option>
                    <option value="high">High</option>
                    </select>

                    <input type="text" name="cost" value="{{ old('cost') }}">
                    <span>/lb</span>

                    <select class="form-control" name="bean_type" value="{{ old('bean_type') }}">
                        <option selected value="" disabled>SELECT</option>
                        <option value="Arabica">ARABICA</option>
                        <option value="Robusta">ROBUSTA</option>
                        <option value="Liberca">LIBERCA</option>
                        <option value="Excelsa">EXCELSA</option>
                        <option value="Other">OTHER</option>
                    </select>

                    <select class="form-control" name="roast" value="{{ old('roast') }}">
                        <option selected value="" disabled>SELECT</option>
                        <option value="lightk">LIGHT</option>
                        <option value="medium">MEDIUM</option>
                        <option value="dark">DARK</option>
                        <option value="french">FRENCH</option>
                    </select>

                    <select class="form-control" name="grind" value="{{ old('grind') }}">
                        <option selected value="" disabled>SELECT</option>
                        <option value="fine">FINE</option>
                        <option value="medium">MEDIUM</option>
                        <option value="coarse">COARSE</option>
                        <option value="whole-bean">WHOLE-BEAN</option>
                    </select>

                    <input type="text" name="country_of_origin" class="border-t border-r md:border-l" value="{{ old('country_of_origin') }}">
                    <button type="submit" class="ml-4">Submit</button>
                </li>
            </ul>
        </form>
    </div>


@endsection
