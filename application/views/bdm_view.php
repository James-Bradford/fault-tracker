<!-- Load Header -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('includes/header', array('title' => $title));
?>

<div class="row pb-3">
    <div class="col-md-12">
        <div class="card rounded-0 bg-light">
            <div class="card-body">
                <a class="btn btn-primary rounded-0" href="managers/report?step=1"><i class="fa fa-plus"></i>&nbsp;Report Fault</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card rounded-0 bg-light">
            <div class="card-header bg-light border-bottom-0">
                <h2 class="font-weight-light"><i class="fa fa-envelope-open-o"></i>&nbsp;<b>Open Requests</b></h2>
            </div>
            <div class="card-body p-0">

                <!-- Table Start -->
                <table class="table table-striped border-top-0 pb-0 mb-0">
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
        </div>
    </div>
</div>


<div class="row pt-3 pb-3">

<!-- Column Start -->
    <div class="col-md-12">

    <!-- Reccent Requests Card Start -->
        <div class="card rounded-0 bg-light">
            <div class="card-header bg-light border-bottom-0">
                <h2 class="font-weight-light"><i class="fa fa-envelope-o"></i>&nbsp;<b>Recent Requests</b></h2>
            </div>
            <div class="card-body p-0">

            <!-- Table Start -->
                <table class="table table-striped border-top-0 pb-0 mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Equipment</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Toaster</td>
                            <td>Open</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Microwave</td>
                            <td>Open</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Fridge</td>
                            <td>Under Review</td>
                        </tr>

                    </tbody>
                </table>
            <!-- Table End -->

            </div>
        </div>
        <!-- Recent Requests Card End -->

    </div>
    <!-- Column End -->

</div>

<!-- Load Footer -->
<?php $this->load->view('includes/footer'); ?>