<x-master>
    @section('content')

        <body>




            <div class="appoinment-form  appointment-page pq-pt-130 ">
                <div class="container" style="margin-bottom: 200px">
                    <div class="row">
                        <div class="col-xl-12">
                            <h4>Write a Blog Post</h4>
                            <div class="appoinment-box">

                                <form action="{{ route("Store") }}" class="pq-applyform" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="pq-appointment">
                                        <div class="row">
                                            <div class="col-lg-12"></div>
                                            <label> <span class="pq-appointment-title"> Image: </span>
                                                <span class="form-control-wrap your-country">

                                                    <input type="file" class="custom-file-input" id="customFile"
                                                        name="myimage">
                                        </div>

                                        <div class="col-lg-12">
                                            <label> <span class="pq-appointment-title"> Date: </span>
                                                <span class="form-control-wrap your-country">

                                                    <input type="date" value="" class="form-control pq-bg-white"
                                                        aria-invalid="false" name="date">
                                                </span>
                                        </div>
                                        <div class="col-lg-12">
                                            <label> <span class="pq-appointment-title"> Blog Title:
                                                </span>
                                                <input type="text" class="form-control pq-bg-white "
                                                     name="title">
                                        </div>

                                        <div class="col-lg-12">
                                            <label> <span class="pq-appointment-title"> Blog Post:
                                                </span>
                                                <textarea cols="2000" id="message" rows="2000" aria-invalid="false" class="form-control pq-bg-white"
                                                    placeholder="Article" name="post"></textarea>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit">SUBMIT</button>
                                            {{-- <a class="pq-button form-btn">
                                                <div class="pq-button-block">
                                                    <span class="pq-button-text me-0">SUBMIT</span>
                                                </div>
                                            </a> --}}

                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>

                    </div>
                </div>

            </div>



        </body>
    @endsection
</x-master>
