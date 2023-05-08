<x-master>
    @section('content')
        <div class="blog-single pq-pt-130 pq-pb-210">
            <div class="container">
                <div class="row">
                    <h5 style="padding-bottom: 20px; color:#498fce"> <span class="fa fa-bullhorn"></span> Updates From Our Blog</h5>

                    @foreach ($get as $gt)
                        <div class="col-xl-10 col-lg-10 col-md-12">

                            <div class="pq-blog-post">
                                <div class="pq-post-media"> <img src="{{ asset('storages/' . $gt->myimage) }}" class="img-fluid"
                                        alt="blogimage" style="height: 700px; width: 1100px;">
                                    <div class="pq-post-date">
                                        <a href="#"> <span>{{ $gt->date }}</span></a>
                                    </div>
                                </div>
                                <div class="pq-blog-contain">
                                    <div class="pq-post-meta">
                                        <ul>
                                            <li class="pq-post-author"><i class="fa fa-user"></i>admin</li>
                                            <li class="pq-post-comment"><i class="fa fa-comments"></i></li>
                                        </ul>
                                    </div>
                                    <h5 class="pq-blog-title">{{ $gt->title }}
                                    </h5>
                                    <div class="pq-blog-info">
                                        <p>{{ $gt->post }}</p>
                                    </div>

                                </div>
                            </div>



                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection
</x-master>
