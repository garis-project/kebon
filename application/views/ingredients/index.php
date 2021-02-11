<?php $this->load->view('templates/header') ?>
<link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">
<?php $this->load->view('templates/sidebar') ?>
<?php $this->load->view('templates/navbar') ?>
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Ingredients</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ingredients</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Create Ingredients
                </button>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Unit</th>
                        <th>Stock</th>
                        <th class="text-center">Status</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bawang Putih</td>
                            <td>Rp22000</td>
                            <td>Gram</td>
                            <td>1000</td>
                            <td class="text-center">
                                <span class="badge bg-success">Available</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Bawang Daun</td>
                            <td>Rp5000</td>
                            <td>Gram</td>
                            <td>1000</td>
                            <td class="text-center">
                                <span class="badge bg-success">Available</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Bawang Merah</td>
                            <td>Rp12000</td>
                            <td>Gram</td>
                            <td>1000</td>
                            <td class="text-center">
                                <span class="badge bg-success">Available</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Create a new ingredients</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Ingredients Name</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Ingredients Unit</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Kg</option>
                                    <option value="">Gr</option>
                                    <option value="">Liter</option>
                                    <option value="">Pcs</option>
                                    <option value="">Box</option>
                                </select>
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Scale</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Stock</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer') ?>
<script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
<?php $this->load->view('templates/end') ?>