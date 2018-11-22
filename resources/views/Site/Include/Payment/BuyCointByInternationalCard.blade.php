<form method="post" action="">
	@csrf
	<div class="col-md-12 col-xs-12 pt-2 pb-2">
		<div class="col-md-3"><label>Amount Of Money($)(no taxes, fees)<i class="text-red">*</i></label></div>
		<div class="col-md-6">
			<input type="number" name="BuyCoint[money]" class="form-control" placeholder="ex : 5" value="" min=1 required>
		</div>
	</div>
	<div class="col-md-12 col-xs-12 pt-2 pb-2">
		<div class="col-md-3"><label>Your Name<i class="text-red">*</i></label></div>
		<div class="col-md-6">
			<input type="text" name="BuyCoint[name]" class="form-control" placeholder="ex : Nguyễn Văn A" required>
		</div>
	</div>
	<div class="col-md-12 col-xs-12 pt-2 pb-2">
		<div class="col-md-3"><label>Your Email<i class="text-red">*</i></label></div>
		<div class="col-md-6">
			<input type="email" name="BuyCoint[email]" class="form-control" placeholder="ex : nguyenvana@gmail.com" required>
		</div>
	</div>
	<div class="col-md-12 col-xs-12 pt-2 pb-2">
		<div class="col-md-3"><label>Your Telephone<i class="text-red">*</i></label></div>
		<div class="col-md-6">
			<input type="text" name="BuyCoint[telephone]" class="form-control" placeholder="ex : 0966291026" required>
		</div>
	</div>
	<div class="col-md-12 col-xs-12 pt-2 pb-2">
		<div class="col-md-3"><label>Your Country<i class="text-red">*</i></label></div>
		<div class="col-md-6">
			<input type="text" name="BuyCoint[country]" class="form-control" placeholder="ex : Việt Nam" required>
		</div>
	</div>
	<div class="col-md-12 col-xs-12 pt-2 pb-2">
		<div class="col-md-3"><label>Your City<i class="text-red">*</i></label></div>
		<div class="col-md-6">
			<input type="text" name="BuyCoint[city]" class="form-control" placeholder="ex : Hà Nội" required>
		</div>
	</div>
	<div class="col-md-12 col-xs-12 pt-2 pb-2">
		<div class="col-md-3"><label>Your Address<i class="text-red">*</i></label></div>
		<div class="col-md-6">
			<input type="text" name="BuyCoint[telephone]" class="form-control" placeholder="ex : Gia Lâm, Hà Nội" required>
		</div>
	</div>
	<div class="col-md-12 col-xs-12 pt-2 pb-2">
		<div class="col-md-3"><label>The Content Of Your Message<i class="text-red">*</i></label></div>
		<div class="col-md-6">
			<textarea class="form-control" rows="4" name="BuyCoint[message]" placeholder="ex : buy coint" required></textarea>
		</div>
	</div>
	@include('Site.Include.PostNews.Capcha')
	@include('Site.Include.Payment.NotificationInternationalCard')
	@include('Site.Include.PostNews.Button')
</form>