<?php include 'header.php';?>
<section class="wrapper rd-calc">
	<div class="container rd-calc-cont">
		<div class="row">
			<div class="col-md-9 mx-auto">
				<h2>
					Recurring Deposits (RD) Maturity Value Calculator
				</h2>
				<p>
					An online financial calculator to calculate the maturity value of your recurring deposit. Recurring deposit is different from a fixed deposit in the sense that in recurring deposit the deposit amount is paid in installments (monthly) for the same interest rates as applicable in fixed deposits. In the below Recurring Deposits (RD) Maturity Value calculator, select the currency and enter the values for installment amount, interest rate and period and click calculate to find the maturity value.
				</p>
				<form action="#">
					<div class="row">
						<div class="col-md-6 mx-auto">
							<div class="form-group">
								<input type="text" name="" id="rd-mi" class="form-control norad cust-inp" placeholder="Monthly Installments">
							</div>
							<div class="form-group">
								<input type="text" name="" id="rd-roi" class="form-control norad cust-inp" placeholder="Rate of interest">
							</div>
							<div class="form-group">
								<input type="text" name="" id="rd-nm" class="form-control norad cust-inp" placeholder="Number of Months">
							</div>
							<div class="form-group">
								<select class="form-control norad custom-select" id="rd-comp">
									<option value="12">Compounding Monthly</option>
									<option selected="" value="4">Compounding Quaterly</option>
									<option value="2">Compounding Biannually</option>
									<option value="1">Compounding Annully</option>
								</select>								
							</div>
							<div class="form-group">
								<input type="text" name="" id="rd-mv" class="form-control norad cust-inp" placeholder="Maturity Value" disabled="">
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-custom col-5 norad text-uppercase">Submit</button>
								<button type="reset" class="btn btn-custom col-5 norad text-uppercase">Reset</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<?php include 'footer.php';?>