<!doctype html>
<html lang="en">
    <?php
            include 'head.php';
    ?>
    <body>
        
        <?php
            include 'header.php';
            session_start();
        ?>
        
        <div class="container">
            <form method="POST" action="../updateUser.php">
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="firstName">First name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First name" value="<?php echo $_SESSION['user']['firstname'] ?>" required>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="lastName">Last name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last name" value="<?php echo $_SESSION['user']['lastname'] ?>" required>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="userName">Username</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                      </div>
                      <input type="text" class="form-control" id="userName" name="userName" placeholder="Username" value="<?php echo $_SESSION['user']['username'] ?>" aria-describedby="validationTooltipUsernamePrepend" required>
                      <div class="invalid-tooltip">
                        Please choose a unique and valid username.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $_SESSION['user']['email'] ?>" required>
                    <div class="invalid-tooltip">
                      Please provide a valid e-mail.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="birthday">Birthday</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Birthday" value="<?php echo $_SESSION['user']['birthday'] ?>" required>
                    <div class="invalid-tooltip">
                      Please provide a valid birthday.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" value="<?php echo $_SESSION['user']['phonenumber'] ?>" required>
                    <div class="invalid-tooltip">
                      Please provide a valid phone number.
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-8 mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?php echo $_SESSION['user']['address'] ?>" required>
                    <div class="invalid-tooltip">
                      Please provide a valid address.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $_SESSION['user']['password'] ?>" required>
                    <div class="invalid-tooltip">
                      Please provide a valid password.
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    
    </body>

</html>


