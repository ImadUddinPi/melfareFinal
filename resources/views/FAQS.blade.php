@extends('layout')
@section('title') MELFARE - FAQ'S @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')
<section>
<h1 align="center" class="black-text col-md-12" style="font-weight:bold;">Frequently Asked Questions</h1>
  <p align="center"></p>
  <div align="center">
    <!--Grid column-->
      <div align="left" class="col-md-6" style="font-family: 'Balsamiq Sans', cursive;">

        <!--Accordion wrapper-->
        <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

          <!-- Q1 -->
          <div class="card p-3">

            <!-- Card header -->
            <div role="tab" id="headingOne1">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                aria-controls="collapseOne1">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i> Where do products are  made ?
                    
                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>
              
            </div>

            <!-- Card body -->
            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
              data-parent="#accordionEx">
              <div class="card-body">
              Our product providers range from domestic to international pharma giants
              </div>
            </div>

          </div>
          <!-- Q1 -->
          <!--Q2-->
          <div class="card p-3 my-5">

            <!-- Card header -->
            <div role="tab" id="headingOne1">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading2" 
                aria-controls="heading2">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i> Are your ingredients and components are safe & durable ?
                    
                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>
              
            </div>

            <!-- Card body -->
            <div id="heading2" class="collapse" role="tabpanel" aria-labelledby="heading2"
              data-parent="#accordionEx">
              <div class="card-body">
              Our Ingredients are made and provided with utmost care and made with standards being observed
              </div>
            </div>

          </div>
          <!-- Q2 -->

            <!--Q3-->
          <div class="card p-3 my-5">

        
          <!-- Q3 -->
          
           <!--Q4-->
          <div class="card p-3 my-5">

            <!-- Card header -->
            <div role="tab" id="headingOne4">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading4" 
                aria-controls="heading4">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i> How do you monitor and control the quality of your products ?
                    
                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>
              
            </div>

            <!-- Card body -->
            <div id="heading4" class="collapse" role="tabpanel" aria-labelledby="heading4"
              data-parent="#accordionEx">
              <div class="card-body">
              We have a strong check policy regarding the supply chain used to acquire the medicines. We use official gateways provided by the pharma companies
              </div>
            </div>

          </div>
        <!-- Accordion wrapper -->


      </div>
      <!--Grid column-->
      </div>

</section>
@endsection