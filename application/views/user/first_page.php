<title>Welcome to Panel</title>

<div class="container">

    <!-- Include Flash Data File -->

    <div class="jumbotron">
    	<h3>Control Panel</h3>
    </div>

    <div class="jumbotron">
        <h3 class="display-4">Welcome to <?= $this->session->userdata('USER_NAME') ?></h3>
        <hr class="my-4">
        <h5 class="display-6">Email :  <?= $this->session->userdata('USER_EMAIL') ?></h5>
        <h5 class="display-6">Active: <?= $this->session->userdata('IS_ACTIVE') ?></h5>
        <h5 class="display-6">Designation: <?= $this->session->userdata('Designation') ?></h5>
        <h5 class="display-6">ID: <?= $this->session->userdata('USER_ID') ?></h5>
        <h5 class="display-6">Browser: <?= $this->agent->browser() ?></h5>
        <h5 class="display-6">Operating System: <?= $this->agent->platform() ?></h5>

        <a href="<?= base_url('Users/logout') ?>" class="btn-outline-danger my-2 my-sm-0">Logout</a>


    </div>
</div>


</div>
