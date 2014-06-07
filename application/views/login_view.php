            <section class="main-section">
                <section class="full-width content-section">
                    <div class="row">
                        <div class="small-12 medium-12 large-12 columns">
                            <h2>Administrator Login</h2>
                        </div>
                    </div>
                </section>
                <section class="full-width services-section">
                    <div class="row">
                        <div class="small-12 medium-12 large-12 columns">
                            <?php echo validation_errors(); ?>
                            <?php echo form_open('verifylogin'); ?>
                                <label for="username">Username:</label>
                                <input type="text" size="20" id="username" name="username"/>
                                <br/>
                                <label for="password">Password:</label>
                                <input type="password" size="20" id="password" name="password"/>
                                <br/>
                                <input type="submit" class="button expand" value="Login"/>
                            </form>
                        </div>
                    </div>
                </section>
            </section>