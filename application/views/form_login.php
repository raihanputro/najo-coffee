<body style="background-Color: #2C3639; padding-top: 10%">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div     class="card o-hidden border-0 shadow-lg">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 style="color: black; font-weight: bolder" class="h4 mb-4">Login <?= $this->uri->segment(1)=='admin'?'Admin':'' ?></h1>
                                    </div>
                                    <?php echo $this->session->flashdata('pesan') ?>
                                    <form method="post" action="<?php echo base_url('auth/login') ?>" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Username" name="username">
                                            <?php echo form_error('username', '<div class="text-danger small ml-2 mt-2">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputPassword" maxlength="10" placeholder="Password" name="password">
                                                <?php echo form_error('password', '<div class="text-danger small ml-2 mt-2">', '</div>') ?>
                                        </div>
                                        <button style="background-color: #FF4C29; color: white" type="submit" class="btn form-control">Login</button>
                                    </form>
                                    <?php if ($this->uri->segment(1) != 'admin') { ?>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url('registrasi/index'); ?>">Belum punya akun? Daftar!</a>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
