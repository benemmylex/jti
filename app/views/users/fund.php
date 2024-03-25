<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Fund Account
            <small>Fund your account in less than 3 minutes</small>
        </h1>
        <?php echo $breadcrumb; ?>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12" id="msg">
                <?php echo $this->session->userdata('msg'); ?>
            </div>
        </div>
        <!-- Info boxes -->
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="box no-border">
                    <div class="box-header with-border">
                        <h3 class="text-center">Pay With USDT</h3>
                    </div>
                    <div class="box-body">
                        <img src="https://api.qrserver.com/v1/create-qr-code/?data=<?php echo $this->Util_model->get_option("usdt_address"); ?>&amp;size=150x150" width="150" height="150" class="center-block">
                        <div class="well top-2x text-center">
                            <p class="no-display" id="usdt-address">
                                <?php echo $this->Util_model->get_option("usdt_address"); ?></p>
                            <p class="text-bold">Wallet Address</p>
                            <?php echo $this->Util_model->get_option("usdt_address"); ?>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-primary btn-lg btn-block" onclick="copyToClipboard($(this), $('#usdt-address'))"><i class='fa fa-copy'></i> Click To
                            Copy Address</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="box no-border">
                    <div class="box-header with-border">
                        <h3 class="text-center">Pay With Bitcoin</h3>
                    </div>
                    <div class="box-body">
                        <img src="https://api.qrserver.com/v1/create-qr-code/?data=<?php echo $this->Util_model->get_option("btc_address"); ?>&amp;size=150x150" width="150" height="150" class="center-block">
                        <div class="well top-2x text-center">
                            <p class="no-display" id="btc-address">
                                <?php echo $this->Util_model->get_option("btc_address"); ?></p>
                            <p class="text-bold">Wallet Address</p>
                            <?php echo $this->Util_model->get_option("btc_address"); ?>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-primary btn-lg btn-block" onclick="copyToClipboard($(this), $('#btc-address'))"><i class='fa fa-copy'></i> Click To
                            Copy Address</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="box no-border">
                    <div class="box-header with-border">
                        <h3 class="text-center">Pay With Ethereum</h3>
                    </div>
                    <div class="box-body">
                        <img src="https://api.qrserver.com/v1/create-qr-code/?data=<?php echo $this->Util_model->get_option("eth_address"); ?>&amp;size=150x150" width="150" height="150" class="center-block">
                        <div class="well top-2x text-center">
                            <p class="no-display" id="eth-address">
                                <?php echo $this->Util_model->get_option("eth_address"); ?></p>
                            <p class="text-bold">Wallet Address</p>
                            <?php echo $this->Util_model->get_option("eth_address"); ?>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-primary btn-lg btn-block" onclick="copyToClipboard($(this), $('#eth-address'))"><i class='fa fa-copy'></i> Click To
                            Copy Address</button>
                    </div>
                </div>
            </div>
            <!--<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="box no-border">
                    <div class="box-header with-border">
                        <h3 class="text-center">Pay With Perfect Money</h3>
                    </div>
                    <div class="box-body">
                        <img src="<?php echo base_url(); ?>assets/img/cryptocurrency/pm.png" class="center-block">
                        <div class="well top-2x text-center">
                            <p class="no-display" id="pm-address">1NAwNogPNeu8AXS2Sm1MbZcQ9GLbZv9z00</p>
                            <p class="text-bold">Wallet Address</p>
                            1NAwNogPNeu8AXS2Sm1MbZcQ9GLbZv9z00
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-primary btn-lg btn-block" onclick="copyToClipboard($(this), $('#pm-address'))"><i class='fa fa-copy'></i> Click To Copy Address</button>
                    </div>
                </div>
            </div>-->
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6">
                <div class="box no-border">
                    <div class="box-header with-border">
                        <h2 class="box-title">
                            Account Funding Form <span class="danger">Crypto</span><small>Make sure to fill immediately
                                after payment</small>
                        </h2>
                    </div>
                    <div class="box-body">
                        <div class="col-xs-12">
                            <?php echo form_open(base_url() . "home/book_funding"); ?>
                            <div class="form-group">
                                <label>Select Payment Method</label>
                                <select class="form-control" name="method">
                                    <option class="">-Select payment method-</option>
                                    <option class="usdt">USDT</option>
                                    <option class="Bitcoin">Bitcoin</option>
                                    <option class="Etherium">Ethereum</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Transaction ID</label>
                                <input class="form-control" name="trans_id" placeholder="Enter transaction ID" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Amount (USD)</label>
                                <input class="form-control" name="amount" placeholder="Enter the amount in USD" autocomplete="off">
                            </div>
                            <hr>
                            <button class="btn btn-primary btn-flat btn-block" type="submit">Book Funding</button>
                            <?php echo form_close(); ?>
                        </div>
                        <div class="col-xs-12">
                            <div class="alert alert-info top-2x bottom-2x">
                                <p>Your funded amount will be credited within 12 hours of booking</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <hr />

                <div class="col-xs-12 col-md-6 col-lg-6">
                    <div class="box no-border">
                        <div class="box-header with-border">
                            <h2 class="box-title">
                                Bank Details
                            </h2>
                        </div>
                        <div class="box-body">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>Bank name</label>
                                    <input class="form-control" value="<?= $this->Util_model->get_option('bank_name') ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Account number</label>
                                    <input class="form-control" value="<?= $this->Util_model->get_option('account_name') ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Account name</label>
                                    <input class="form-control" value="<?= $this->Util_model->get_option('account_number') ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Account type</label>
                                    <input class="form-control" value="<?= $this->Util_model->get_option('account_type') ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Branch</label>
                                    <input class="form-control" value="<?= $this->Util_model->get_option('branch') ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Beneficiary reference</label>
                                    <input class="form-control" value="<?= $this->Util_model->get_option('beneficiary_reference') ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-6">
                    <div class="box no-border">
                        <div class="box-header with-border">
                            <h2 class="box-title">
                                Account Funding Form <span class="danger">Bank Transfer</span><small> Make sure to fill
                                    immediately after payment</small>
                            </h2>
                        </div>
                        <div class="box-body">
                            <div class="col-xs-12">
                                <?php echo form_open(base_url() . "home/book_funding_bank_transfer"); ?>

                                <div class="form-group">
                                    <label>Bank name</label>
                                    <input class="form-control" name="bank_name" placeholder="Enter bank name" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Account name</label>
                                    <input class="form-control" name="account_name" placeholder="Enter account name" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Account Number</label>
                                    <input class="form-control" name="account_number" placeholder="Enter account number" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Branch</label>
                                    <input class="form-control" name="branch" placeholder="Enter branch" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Country</label>
                                    <input class="form-control" name="country" placeholder="Enter country" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Amount (USD)</label>
                                    <input class="form-control" name="amount" placeholder="Enter the amount in USD" autocomplete="off">
                                </div>
                                <hr>
                                <button class="btn btn-primary btn-flat btn-block" type="submit">Book Funding</button>
                                <?php echo form_close(); ?>
                            </div>
                            <div class="col-xs-12">
                                <div class="alert alert-info top-2x bottom-2x">
                                    <p>Your funded amount will be credited within 12 hours of booking</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>