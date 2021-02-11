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
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Food</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <button class="btn btn-primary" onclick="location.href='<?= base_url('admin/food/create') ?>'">
                        Create Food
                    </button>
                </div>
                <div class="card-body">
                    <table class='table table-striped' id="table1">
                        <thead>
                            <th>Name</th>
                            <th>Price</th>
                            <th class="text-center">Status</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sambel Goreng Tempe</td>
                                <td>Rp12000</td>
                                <td class="text-center">
                                    <span class="badge bg-success">Available</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Sambel Goreng Telur</td>
                                <td>Rp17000</td>
                                <td class="text-center">
                                    <span class="badge bg-danger">Not Available</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Ikan Mujair</td>
                                <td>Rp7000</td>
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
    <?php $this->load->view('templates/footer') ?>
    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <?php $this->load->view('templates/end') ?>