<body style="background-Color: #2C3639;">

    <div class="container">

        <div style="margin-top: 7%;" class="card o-hidden border-0 shadow-lg col-lg-6 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 style="color: black; font-weight: bolder" class="h4  mb-4">Daftar</h1>
                            </div>
                            <form method="post" action="<?php echo base_url('registrasi/index') ?>" class="user"> 
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Nama" name="nama">
                                    <?php echo form_error('nama', '<div class="text-danger small ml-2 mt-2">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Username" name="username">
                                    <?php echo form_error('username', '<div class="text-danger small ml-2 mt-2">', '</div>') ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" maxlength="10" placeholder="Password" name="password_1">
                                        <?php echo form_error('password_1', '<div class="text-danger small ml-2 mt-2">', '</div>') ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" maxlength="10" placeholder="Ulangi Password" name="password_2">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Telepon" name="hp">
                                    <?php echo form_error('hp', '<div class="text-danger small ml-2 mt-2">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Alamat" name="alamat">
                                    <?php echo form_error('alamat', '<div class="text-danger small ml-2 mt-2">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="kecamatan" name="kecamatan" required>
                                        <option data-harga="">Kecamatan</option>
                                        <option value="Cempaka Putih">Cempaka Putih</option>
                                        <option value="Gambir">Gambir</option>
                                        <option value="Johar Baru">Johar Baru</option>
                                        <option value="Kemayoran">Kemayoran</option>
                                        <option value="Menteng">Menteng</option>
                                        <option value="Sawah Besar">Sawah Besar</option>
                                        <option value="Senen">Senen</option> 
                                        <option value="Tanah Abang">Tanah Abang</option> 
                                    </select>
                                </div>
                                <button style="background-color: #FF4C29; color: white" type="submit" class="btn btn-user btn-block">Daftar Akun</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('auth/login') ?>">Sudah punya akun? silahkan login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>