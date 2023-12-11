@extends('welcome')
@section('main_content')
    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <div class="card mb-30">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <h4 class="font-20">portfolio</h4>

                            <div class="d-flex flex-wrap">
                                <!-- Date Picker -->
                                {{-- <div class="dashboard-date style--six mr-20 mt-3 mt-sm-0">
                                    <span class="input-group-addon">
                                        <img src="../../assets/img/svg/calender-color.svg" alt="" class="svg">
                                    </span>

                                    <input type="text" id="default-date" value="28 October 2019">
                                </div> --}}
                                <!-- End Date Picker -->


                                <!-- Dropdown Button -->
                                <div class="dropdown-button mt-3 mt-sm-0">
                                    <a href="{{ route('addTread') }}" class="details-btn"> Add Your Tread <i
                                            class="icofont-arrow-right"></i></a></td>
                                </div>
                                {{-- <div class="dropdown-button mt-3 mt-sm-0">
                                    <a href="" class="details-btn"> Add Your Tread <i
                                            class="icofont-arrow-right"></i></a></td>
                                </div> --}}

                                <!-- End Dropdown Button -->
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Invoice List Table -->
                        <table class="text-nowrap dh-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Unite</th>
                                    <th>Open</th>
                                    <th>Amount</th>
                                    <th>Current</th>
                                    <th>Value</th>
                                    <th>P/L</th>
                                    <th>P/L %</th>


                                </tr>
                            </thead>
                            <tbody>

                                @php
                                    $current = 90;
                                @endphp
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item->TreadName }}</td>
                                        <td>{{ $item->Unite }}</td>
                                        <td>{{ $item->Open }}</td>
                                        <td>{{ $item->Unite * $item->Open }}</td>
                                        <td> {{ $current }} </td>
                                        <td>{{ $item->Unite * $current }}</td>
                                        <td>{{ $item->Unite * $current - $item->Unite * $item->Open }}</td>
                                        <td>-</td>
                                    </tr>
                                @endforeach



                            </tbody>
                        </table>
                        <!-- End Invoice List Table -->
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
