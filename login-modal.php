<div class="modal fade" id="login-modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">        
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
        <h4>LOGIN</h4>
    </div>
        <div class="modal-body">
                    <form method="post" action="login_script.php">
                        <div class="form-group">
                    <p>Don't have an Account? <a href="signup.php">Register</a></p>
                </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Enter E-mail" class="form-control"  pattern="[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Enter Password" class="form-control" pattern=".{6,}" title="Must contain at least 6 characters" required>
                        </div>
                        <div><p class="text-danger">
                            <?php
                            if(isset($_GET['error'])){
                                echo $_GET['error'];
                            }
                            ?>
                            </p>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Login</button><br><br>
                        </div>
                        <div class="form-group">
                    <p><a href="settings.php">Forgot Password?</a></p>
                </div>
                    </form>
        </div>                    
    </div>
    </div>
</div>


