<?php $this->load->view('header');?>
<br>
<br>
<br>
<br>
<?php //print_r($rule1); ?>
<div class="row">
	<div class="col-sm-12">
		<h2>Sistem pakar membeli iPhone</h2>
		<br>
		<br>
		<form method="post" action="<?php echo base_url('index.php/cf/proses'); ?>">
			

			<?php 
			$i=0;
			foreach ($rule1 as $value) { 
			// for ($i=0; $i < 3; $i++) { ?>
				<b><?php echo $value; ?></b>
				<div class="radio">
				  <label>
				    <input type="radio" name="<?php echo 'rule1_'.($i+1); ?>" id="" value=1 checked>
				    Ya
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="<?php echo 'rule1_'.($i+1); ?>" id="" value=0.8>
				    Mestinya Ya
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="<?php echo 'rule1_'.($i+1); ?>" id="" value=0.5>
				    Mungkin
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="<?php echo 'rule1_'.($i+1); ?>" id="" value=0>
				    Tidak tahu
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="<?php echo 'rule1_'.($i+1); ?>" id="" value=-0.5>
				    Mungkin tidak
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="<?php echo 'rule1_'.($i+1); ?>" id="" value=-0.8>
				    Mestinya tidak
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="<?php echo 'rule1_'.($i+1); ?>" id="" value=-1>
				    Tidak
				  </label>
				</div>
				<?php 
				$i++;
			} ?>
			<br>
			<br>
			<?php 
			$i=0;
			foreach ($rule2 as $value) { 
			// for ($i=0; $i < 3; $i++) { ?>
				<b><?php echo $value; ?></b>
				<div class="radio">
				  <label>
				    <input type="radio" name="<?php echo 'rule2_'.($i+1); ?>" id="" value=1 checked>
				    Ya
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="<?php echo 'rule2_'.($i+1); ?>" id="" value=0.8>
				    Mestinya Ya
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="<?php echo 'rule2_'.($i+1); ?>" id="" value=0.5>
				    Mungkin
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="<?php echo 'rule2_'.($i+1); ?>" id="" value=0>
				    Tidak tahu
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="<?php echo 'rule2_'.($i+1); ?>" id="" value=-0.5>
				    Mungkin tidak
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="<?php echo 'rule2_'.($i+1); ?>" id="" value=-0.8>
				    Mestinya tidak
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="<?php echo 'rule2_'.($i+1); ?>" id="" value=-1>
				    Tidak
				  </label>
				</div>
				<?php 
				$i++;
			} ?>
			<br>
			<br>
			<?php 
			$i=0;
			foreach ($rule3 as $value) { 
			// for ($i=0; $i < 3; $i++) { ?>
				<b><?php echo $value; ?></b>
				<div class="radio">
				  <label>
				    <input type="radio" name="<?php echo 'rule3_'.($i+1); ?>" id="" value=1 checked>
				    Ya
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="<?php echo 'rule3_'.($i+1); ?>" id="" value=0.8>
				    Mestinya Ya
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="<?php echo 'rule3_'.($i+1); ?>" id="" value=0.5>
				    Mungkin
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="<?php echo 'rule3_'.($i+1); ?>" id="" value=0>
				    Tidak tahu
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="<?php echo 'rule3_'.($i+1); ?>" id="" value=-0.5>
				    Mungkin tidak
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="<?php echo 'rule3_'.($i+1); ?>" id="" value=-0.8>
				    Mestinya tidak
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="<?php echo 'rule3_'.($i+1); ?>" id="" value=-1>
				    Tidak
				  </label>
				</div>
				<?php 
				$i++;
			} ?>
			<br>
			<input class="btn btn-primary" type="submit" value="Submit">
			<br>
			<br>
			<br>
		</form>
	</div>
</div>

<?php $this->load->view('footer');?>