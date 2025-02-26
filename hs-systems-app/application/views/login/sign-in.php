<div class="container-fluid">
    <div class="row">
        <main class="form-signin w-100 m-auto">
                <form class="text-center" action="<?php echo INDEX_PAGE; ?>login/log_in" method="POST">
                
                    <div class="form-floating text-center align-items-center">
                        <img src="https://hairlessskin.mx/assets/img/logo.svg" alt="" class="img-fluid" width="80%">
                    </div>
          
                    <div class="form-floating">
                        <input type="text" name="LSf47vWou0wNVEsEuT1i" class="form-control" id="floatingInput" placeholder="<?php echo $user_txt; ?>">
                        <label for="floatingInput text-capitalize"><?php echo $user_txt; ?></label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="PHt0gjv8TbmLTQCWVB81" class="form-control" id="floatingPassword" placeholder="<?php echo $password_txt; ?>">
                        <label for="floatingPassword text-capitalize"><?php echo $password_txt; ?></label>
                    </div>

                    <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" name="Mbv2GRxrFw8vMe1P5Pgo" value="remember-me" id="flexCheckDefault">
                        <label class="form-check-label text-capitalize" for="flexCheckDefault">
                        <?php echo $remenber_txt; ?>
                        </label>
                    </div>
                    <button class="btn btn-primary w-100 py-2 text-capitalize" type="submit"><?php echo $aceptar_txt; ?></button>
                </form>
        </main>
    </div>
</div>