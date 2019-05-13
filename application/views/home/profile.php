	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">

			<div class="row">
				<div class="col-1">
					<div class="row mb-4">
						<h2 class="ltext-103 cl5">
							Profil
						</h2>
					</div>
					<div class="row">
						<a href="<?= base_url(); ?>profile/ubah/<?= $this->session->userdata('id'); ?>">
							<h2 class="mtext-110 cl5">
								Ubah Profil
							</h2>
						</a>

					</div>
				</div>

				<div class="size-210 bor10 m-lr-auto flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-user"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Nama Pengguna
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
								<?= $profile['namaPembeli']; ?>
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Alamat
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
								<?= $profile['alamat']; ?>
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								No. Telp
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								<?= $profile['noTelepon']; ?>
							</p>
						</div>
					</div>

					<div class="flex-w w-full mb-5">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Email
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								<?= $profile['email']; ?>
							</p>
						</div>
					</div>
					<a href="<?= base_url("auth/logout"); ?>">
						<button class="flex-c-m stext-101 cl0 size-121 bor1  btn-danger p-lr-15 trans-04 ">
							Keluar
						</button>
					</a>

				</div>
			</div>
		</div>
		</div>
	</section>