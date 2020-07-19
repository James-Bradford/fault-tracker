
<!-- Load Header -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('includes/header');
?>

<div class="row pt-3 pb-3">
    <div class="col-md-12">
        <div class="card rounded-0 bg-light">

        <!-- Card Header Start -->
            <div class="card-header bg-light border-bottom-0">
                    
                <h1>Step 4: <span class="font-weight-light">Summary</span></h1>

                <div class="progress" style="height:20px">
                    <div class="progress-bar" style="width:60%;height:20px"></div>
                </div>

            </div>
         <!-- Card Header End -->

         <!-- Card Body Start -->
            <div class="card-body">
                <h2 class="font-weight-light"><b>Manufacturer: &nbsp;</b>Duke</h2>
                <h2 class="font-weight-light"><b>Model: &nbsp;</b>MerryChef 1400</h2>
                <h2 class="font-weight-light"><b>Fault Description: &nbsp;</b></h2>
                <p class="font-weight-light">It won't turn on the buttons on the front won't work.  I have tried the circuit breaker.</p>
            </div>
         <!-- Card Body End -->

            <!-- Card Footer Start -->
            <div class="card-footer bg-light">
                <a class="btn btn-dark rounded-0 float-left" href="/managers/report?step=3"><i class="fa fa-chevron-left"></i></a>
                <a class="btn btn-dark rounded-0 float-right" href="/managers/report?step=submit">Submit</a>
            </div>
            <!-- Card Footer End -->


        </div>
    </div>
</div>

<!-- Load Footer -->
<?php $this->load->view('includes/footer'); ?>


<!-- Table Search Script -->
<script src="/public/js/search.js"></script>