<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-red layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<h1 class="page-header">PAYMENT METHODS</h1>
	        		<div class="box box-solid">
	        			<div class="box-body">
		        		    <form method="post" action="sales.php">
                                <div class="form-group has-feedback">
                                    Email
                                    <input type="text" class="form-control" name="email" value="<?php echo (isset($user['email'])) ? $user['email'] : '' ?>">
                                    <input type="hidden" class="form-control" name="pay" value="<?php echo 'PAY-'.uniqid()?>">
                                </div>
                                <div class="form-group has-feedback">
                                    Pembayaran
                                    <select class="form-control" name="payment-method">
                                        <option value="Transfer">Transfer</option>
                                        <option value="COD">COD</option>
                                        <option value="DANA">DANA</option>
                                    </select>
                                </div>
                                <div class="form-group has-feedback">
                                    <button type="submit" class='btn btn-primary btn-lg btn-flat'>Proses Bayar</button>
                                </div>
                            </form>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  	<?php $pdo->close(); ?>
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>

</body>
</html>