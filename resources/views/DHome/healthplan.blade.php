<x-master>
    @section('content')







<body>

   <div class="pq-breadcrumb" style="background-image:url('images/scheme2.png');">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-12">
               <nav aria-label="breadcrumb">
                  <div class="pq-breadcrumb-title">
                     <h2>Health Plans</h2>
                  </div>
                  <div class="pq-breadcrumb-container mt-2">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href={{ route("Dschc") }}><i class="fas fa-home mr-2"></i>Home</a></li>
                        <li class="breadcrumb-item active">Health Plans</li>
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
         pricing-plan start-->
   <section class="pricing-plan">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-12">
               <div class="pq-section pq-style-1 text-center"> <span class="pq-section-sub-title">Delta State
                     Contributory Health Scheme</span>
                  <h4 class="">The following health plans are under the scheme:</h4>
               </div>
            </div>
            <div class="col-xl-3 col-md-6" >
               <div class="pq-pricing-plan pq-style-1 active" style="height: 710px; ">
                  <div class="pq-pricing-head"> <span class="pq-title"> Equity Health Plan </span>
                     <div class="pq-service-media"> <i class=" flaticon-medical-report-1"></i> </div>

                  </div>
                  <p style="padding: 20px;">This is a plan for the vulnerable groups. These includes children under
                     five, pregnant women,
                     elderly (above 65) and the physically and mentally challenged individuals. Other criteria for
                     eligibility into the health plan shall be approved by the State Executive Council on the
                     recommendation(s) of the commission. The point of entry shall be designated Primary Health care
                     facilities.</p>

               </div>
            </div>
            <div class="col-xl-3 col-md-6 mt-4 mt-lg-0 mt-md-0" >
               <div class="pq-pricing-plan pq-style-1 active " style="height: 710px;">
                  <div class="pq-pricing-head"> <span class="pq-title">Formal Health Plan </span>
                     <div class="pq-service-media"> <i class=" flaticon-consulting"></i> </div>

                  </div>
                  <p style="padding: 20px;">This is a contributory plan for all public – sector employees and organized
                     private sector
                     employees as defined wherein all shall make contributions as determined by the board.</p>

               </div>
            </div>
            <div class="col-xl-3 col-md-6 mt-4 mt-lg-0 mt-md-0" >
               <div class="pq-pricing-plan pq-style-1 active " style="height: 710px;">
                  <div class="pq-pricing-head"> <span class="pq-title">Informal Health Plan </span>
                     <div class="pq-service-media"> <i class=" flaticon-medical-prescription"></i> </div>
                  </div>
                  <p style="padding: 20px;">This is an affordable plan providing a prescribed package of healthcare
                     services at prescribed
                     contributions accessible to all residents not covered by the other health plans. Premium
                     contribution
                     for this health plan is <b> ₦7,000.00.</b></p>

               </div>
            </div>
            <div class="col-xl-3 col-md-6 mt-4 mt-xl-0">
               <div class="pq-pricing-plan pq-style-1 active" style="height: 710px;">
                  <div class="pq-pricing-head"> <span class="pq-title">Private Health Plan</span>
                     <div class="pq-service-media"> <i class="  flaticon-care"></i> </div>

                  </div>
                  <p style="padding: 20px;">This consist of a variety of packages providing extra healthcare services in direct proportion to
                     the contribution made by the individuals. Eligibility will be for those that subscribe and those
                     approved to benefit by the commission.</p>

               </div>
            </div>
         </div>
      </div>
   </section>



</body>


@endsection
</x-master>
