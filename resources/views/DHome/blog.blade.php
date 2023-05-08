<x-master>
    @section('content')

        <body>

            <div class="pq-breadcrumb" style="background-image:url('images/blog.jpg'); ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <nav aria-label="breadcrumb">
                                <div class="pq-breadcrumb-title">
                                    <h2 class="pq-section-title"> Our Blog</h2>
                                </div>
                                <div class="pq-breadcrumb-container mt-2">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('Dschc') }}"><i
                                                    class="fas fa-home mr-2"></i>Home</a></li>
                                        <li class="breadcrumb-item active" style="color: black">Blog</li>
                                    </ol>
                                </div>
                            </nav>
                        </div>
                        <div class="col-lg-4">
                            <div class="pq-breadcrumb-img text-right wow fadeInRight"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=================================
                                 Banner end-->
            <!--=================================
                                 2-colume-grid start-->
            <section class="1-colume-grid pq-pb-210">
                <div class="container" >
                    <div class="pq-blog pq-blog-col-1">
                        <div class="row">
                            @foreach ($get as $gt)
                                <div class="col-lg-3" >
                                    <div class="pq-blog-post" style="height: 650px">
                                        <div class="pq-post-media"> <img src="{{ asset('storages/' . $gt->myimage) }}"
                                                class="img-fluid" alt="blogimage" style="height: 300px;">
                                            <div class="pq-post-date">
                                                @php
                                                $newDateFormat3 = \Carbon\Carbon::parse($gt->date)->format('d-M-y');
                                            @endphp
                                                <a href="" > <span>{{ $newDateFormat3 }}</span></a>
                                            </div>
                                        </div>




                                        <div class="pq-blog-contain" >
                                            <div class="pq-post-meta">
                                                <ul>
                                                    <li class="pq-post-author"><i class="fa fa-user"></i>admin</li>
                                                    <li class="pq-post-comment"><i class="fa fa-comments"></i></li>
                                                </ul>
                                            </div>
                                            <h5 class="pq-blog-title" style="font-size: 15px">{{ $gt->title }}
                                            </h5>

                                            <div class="pq-btn-container">
                                                <a href="{{ route('BlogEx', $gt->id) }}" class="pq-button pq-button-flat">
                                                    <div class="pq-button-block"> <span class="pq-button-text">Read
                                                            More</span> <i class="ion ion-plus-round"></i>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                </div>
            </section>



        </body>
    @endsection
</x-master>
