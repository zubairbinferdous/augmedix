@extends('welcome')
@section('main_content')
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <!-- Base Horizontal Form With Icons -->
                    <div class="form-element py-30 multiple-column">
                        {{-- <h4 class="font-20 mb-20">Multiple Column</h4> --}}

                        <!-- Form -->
                        <form method="POST" action="{{ route('add.tread.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Name</label>
                                        <input type="text" name="name_tread" class="theme-input-style"
                                            placeholder="Name">
                                    </div>
                                </div>
                                {{-- <input type="hidden" name="user_id" class="theme-input-style"
                                    value="{{ Auth::user()->id }}"> --}}
                                <div class="col-lg-4">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Unite</label>
                                        <input type="number" name="unite_tread" class="theme-input-style"
                                            placeholder="Unite">
                                    </div>
                                    <!-- End Form Group -->


                                </div>
                                <div class="col-lg-4">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Open</label>
                                        <input type="number" name="open_tread" class="theme-input-style"
                                            placeholder="Open">
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                            </div>

                            <!-- Form Row -->
                            <div class="form-group pt-1">
                                {{-- <div class="d-flex align-items-center mb-3">
                                    <!-- Custom Checkbox -->
                                    <label class="custom-checkbox position-relative mr-2">
                                        <input type="checkbox" id="check5">
                                        <span class="checkmark"></span>
                                    </label>
                                    <!-- End Custom Checkbox -->

                                    <label for="check5">Remember me</label>
                                </div> --}}
                            </div>
                            <!-- End Form Row -->

                            <!-- Form Row -->
                            <div class="form-row">
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn long">ADD
                                        DATA</button>
                                </div>
                            </div>
                            <!-- End Form Row -->
                        </form>
                        <!-- End Form -->
                    </div>
                    <!-- End Horizontal Form With Icons -->
                </div>
            </div>
        </div>
    </div>
@endsection
