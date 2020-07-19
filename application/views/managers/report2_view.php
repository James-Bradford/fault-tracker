
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
                    
                <h1>Step 2: <span class="font-weight-light">Known fixes</span></h1>

                <div class="progress" style="height:20px">
                    <div class="progress-bar" style="width:40%;height:20px"></div>
                </div>
                </br>

                <p>If there are any known fixes for common issues, you will see them below.  If they fix the fault, you can cancel this request</p>
                <input type="text" class="form-control rounded-0" placeholder="Search" name="searchBox" id="searchBox" />

            </div>
         <!-- Card Header End -->


            <div class="card-body p-0">

            <!-- Table Start -->
                <table class="table table-striped border-top-0 pb-0 mb-0" id="table">
                    <thead>
                        <tr>
                            <th>Issue</th>
                            <th>Known Fix</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Won't turn on</td>
                            <td>Check fusebox</td>
                        </tr>
                        <tr>
                            <td>Gets too hot</td>
                            <td>Turn it off and on again</td>
                        </tr>
                        <tr>
                            <td>Is on fire</td>
                            <td>Run away from it</td>
                        </tr>

                    </tbody>
                </table>
            <!-- Table End -->

            </div>

            <!-- Card Footer Start -->
            <div class="card-footer bg-light">
                <a class="btn btn-dark rounded-0 float-left" href="/managers/report?step=1"><i class="fa fa-chevron-left"></i></a>
                <a class="btn btn-dark rounded-0 float-right" href="/managers/report?step=3"><i class="fa fa-chevron-right"></i></a>
            </div>
            <!-- Card Footer End -->


        </div>
    </div>
</div>

<!-- Load Footer -->
<?php $this->load->view('includes/footer'); ?>


<!-- Table Search Script -->
<script src="/public/js/search.js"></script>