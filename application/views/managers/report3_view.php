
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
                    
                <h1>Step 3: <span class="font-weight-light">Problem description</span></h1>

                <div class="progress" style="height:20px">
                    <div class="progress-bar" style="width:60%;height:20px"></div>
                </div>
                </br>

                <p>Describe in as much detail as possible what the fault is.</p>
                <textarea type="text" class="form-control rounded-0" placeholder="Fault Description" name="description" id="description" cols=4 rows=4></textarea>

            </div>
         <!-- Card Header End -->

            <!-- Card Footer Start -->
            <div class="card-footer bg-light">
                <a class="btn btn-dark rounded-0 float-left" href="/managers/report?step=2"><i class="fa fa-chevron-left"></i></a>
                <a class="btn btn-dark rounded-0 float-right" href="/managers/report?step=4"><i class="fa fa-chevron-right"></i></a>
            </div>
            <!-- Card Footer End -->


        </div>
    </div>
</div>

<!-- Load Footer -->
<?php $this->load->view('includes/footer'); ?>


<!-- Table Search Script -->
<script src="/public/js/search.js"></script>