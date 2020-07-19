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
                    
                <h1>Step 1: <span class="font-weight-light">Choose equipment</span></h1>

                <div class="progress" style="height:20px">
                    <div class="progress-bar" style="width:20%;height:20px"></div>
                </div>
                </br>

                <input type="text" class="form-control rounded-0" placeholder="Search" name="searchBox" id="searchBox" />

            </div>
         <!-- Card Header End -->


            <div class="card-body p-0">

            <!-- Table Start -->
                <table class="table table-striped border-top-0 pb-0 mb-0" id="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Equipment</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Toaster</td>
                            <td>Open</td>
                            <td><button class="btn btn-lg float-right py-0 px-2"><i class="fa fa-close text-dark"></i></button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Microwave</td>
                            <td>Open</td>
                            <td><button class="btn btn-lg float-right py-0 px-2"><i class="fa fa-close text-dark"></i></button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Fridge</td>
                            <td>Under Review</td>
                            <td><button class="btn btn-lg float-right py-0 px-2"><i class="fa fa-close text-dark"></i></button></td>
                        </tr>

                    </tbody>
                </table>
            <!-- Table End -->

            </div>

            <!-- Card Footer Start -->
            <div class="card-footer bg-light">
                <a class="btn btn-dark rounded-0 float-right" href="/managers/report?step=2"><i class="fa fa-chevron-right"></i></a>
            </div>
            <!-- Card Footer End -->


        </div>
    </div>
</div>

<!-- Load Footer -->
<?php $this->load->view('includes/footer'); ?>


<!-- Table Search Script -->
<script src="/public/js/search.js"></script>