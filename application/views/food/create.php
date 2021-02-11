<?php $this->load->view('templates/header') ?>
<link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">
<?php $this->load->view('templates/sidebar') ?>
<?php $this->load->view('templates/navbar') ?>
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Food</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/food') ?>">Food</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Please fill this form bellow correctly
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="">Food Name</label>
                            <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Selling Price</label>
                            <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-8">
                        <table class="table table-bordered table-hover border-primary">
                            <thead>
                                <th>Ingredients Name</th>
                                <th>Unit</th>
                                <th>Price</th>
                                <th>Qty</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Bawang Merah</td>
                                    <td>Gr</td>
                                    <td>5000</td>
                                    <td>200</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <th>Ingredients References</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Bawang Merah</td>
                                </tr>
                                <tr>
                                    <td>Bawang Putih</td>
                                </tr>
                                <tr>
                                    <td>Bawang Daun</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('templates/footer') ?>
<script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
<?php $this->load->view('templates/end') ?>