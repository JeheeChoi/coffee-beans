@extends('welcome')

@section('content')
        <!-- INDEX COFFEE BEANS table shows HERE-->
        <!-- HEADING -->
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
            <div class="ml-4 text-lg leading-7 font-semibold">
                My Coffee Beans
            </div>
        </div>

        <!-- TABLE HEAD ROW -->
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-1">
                <div class="p-6">
            <!-- <div class="ml-12">
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-lg">
                <div class="grid grid-cols-1 md:grid-cols-1"> -->
                    ID
                    NAME
                    CAFFEINE LEVEL
                    COST
                    ROAST
                    GRIND
                    ORIGIN
                </div>
            </div>
        </div>

        <!-- INDEX COFFEE BEANS TABLE BODY -->
        @foreach ($beans as $beans)

        <div class="mt-2 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-1">
                <div class="p-6">
                    {{ $beans->id }}
                    {{ $beans->name }}
                    {{ $beans->caffeine_level }}
                    ${{ $beans->cost }}/lb
                    {{ $beans->bean_type }}
                    {{ $beans->roast }}
                    {{ $beans->grind }}
                    {{ $beans->country_of_origin }}
                        <td><a href="/beans/{{ $beans->id }}/edit"><button type="submit">UPDATE</button></a>
                        <td><button type="submit">DELETE</button>
                </div>
            </div>
        </div>

        @endforeach

        <!-- ADD NEW BEANS SECTION -->
        <div class="mt-8 flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <div class="ml-4 text-lg leading-7 font-semibold">
                Add New Beans
            </div>
        </div>


        <!-- CREATE BEANS FORM -->
        <div class="mt-2 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-1">
                <div class="p-6">
                    <div class="flex items-center">
                        <form action="beans" method="POST" class="form-control">
                            @csrf
                            <!-- Name field -->
                            <div class="ml-4 text-sm leading-7 font-semibold text-gray-900 dark:text-white">NAME :
                                <input type="text" name="name" class="border-t border-r md:border-l" value="{{ old('name') }}">
                            <!-- //Shows error message "The name field is required" -->
                                <div>
                                    {{ $errors->first('name') }}
                                </div>
                            </div>

                            <!-- CAFFEINE LEVEL field -->
                            <div class="ml-4 text-sm leading-7 font-semibold text-gray-900 dark:text-white">CAFFEINE LEVEL :
                                <select class="form-control" name="caffeine_level" value="{{ old('caffeine_level') }}">
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
                            <div class="ml-4 text-sm leading-7 font-semibold text-gray-900 dark:text-white">COST :
                                <input type="text" name="cost" class="border-t border-r md:border-l" value="{{ old('cost') }}"></input><span style="margin-left:10px;">/lb</span>
                            </div>
                            <div>
                                {{ $errors->first('cost') }}
                            </div>

                            <!-- BEAN TYPE field -->
                            <div class="ml-4 text-sm leading-7 font-semibold text-gray-900 dark:text-white">BEAN TYPE :
                                <select class="form-control" name="bean_type" value="{{ old('bean_type') }}">
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
                            <div class="ml-4 text-sm leading-7 font-semibold text-gray-900 dark:text-white">ROAST :
                                <select class="form-control" name="roast" value="{{ old('roast') }}">
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
                            <div class="ml-4 text-sm leading-7 font-semibold text-gray-900 dark:text-white">GRIND :
                                <select class="form-control" name="grind" value="{{ old('grind') }}">
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
                            <div class="p-6 border-t border-gray-200 dark:border-gray-700">

                                <div class="ml-4 text-sm leading-7 font-semibold text-gray-900 dark:text-white">ORIGIN :
                                    <input type="text" name="country_of_origin" class="border-t border-r md:border-l" value="{{ old('country_of_origin') }}">
                                    <div>
                                        {{ $errors->first('country_of_origin') }}
                                    </div>
                                </div>
                                <br/>
                                <button type="submit" class="ml-4">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


@endsection
