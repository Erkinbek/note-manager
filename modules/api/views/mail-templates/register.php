<?php
	/* @var $this \yii\web\View view component instance */
	/* @var $message \yii\mail\MessageInterface the message being composed */
	/* @var $content string main view render result */
?>
<?php $this->beginPage() ?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
		<meta content="text/html; charset=<?= Yii::$app->charset ?>" http-equiv="Content-Type"/>
		<meta content="width=device-width" name="viewport"/>
		<meta lang="en">
		<!--[if !mso]><!-->
		<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
		<!--<![endif]-->
		<title></title>
		<!--[if !mso]><!-->
		<!--<![endif]-->
		<style type="text/css">
			body {
				margin: 0;
				padding: 0;
			}

			table,
			td,
			tr {
				vertical-align: top;
				border-collapse: collapse;
			}

			* {
				line-height: inherit;
			}

			a[x-apple-data-detectors=true] {
				color: inherit !important;
				text-decoration: none !important;
			}
		</style>
		<style id="media-query" type="text/css">
			@media (max-width: 680px) {

				.block-grid,
				.col {
					min-width: 320px !important;
					max-width: 100% !important;
					display: block !important;
				}

				.block-grid {
					width: 100% !important;
				}

				.col {
					width: 100% !important;
				}

				.col>div {
					margin: 0 auto;
				}

				img.fullwidth,
				img.fullwidthOnMobile {
					max-width: 100% !important;
				}

				.no-stack .col {
					min-width: 0 !important;
					display: table-cell !important;
				}

				.no-stack.two-up .col {
					width: 50% !important;
				}

				.no-stack .col.num4 {
					width: 33% !important;
				}

				.no-stack .col.num8 {
					width: 66% !important;
				}

				.no-stack .col.num4 {
					width: 33% !important;
				}

				.no-stack .col.num3 {
					width: 25% !important;
				}

				.no-stack .col.num6 {
					width: 50% !important;
				}

				.no-stack .col.num9 {
					width: 75% !important;
				}

				.video-block {
					max-width: none !important;
				}

				.mobile_hide {
					min-height: 0px;
					max-height: 0px;
					max-width: 0px;
					display: none;
					overflow: hidden;
					font-size: 0px;
				}

				.desktop_hide {
					display: block !important;
					max-height: none !important;
				}
			}
		</style>
		<?php $this->head() ?>
	</head>
	<body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #DAE9FF;">
	<?php $this->beginBody() ?>
	<table bgcolor="#DAE9FF" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="table-layout: fixed; vertical-align: top; min-width: 320px; Margin: 0 auto; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #DAE9FF; width: 100%;" valign="top" width="100%">
		<tbody>
		<tr style="vertical-align: top;" valign="top">
			<td style="word-break: break-word; vertical-align: top;" valign="top">
				<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color:#DAE9FF"><![endif]-->
				<div style="background-color:transparent;">
					<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 660px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
						<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
							<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:660px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
							<!--[if (mso)|(IE)]><td align="center" width="660" style="background-color:transparent;width:660px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
							<div class="col num12" style="min-width: 320px; max-width: 660px; display: table-cell; vertical-align: top; width: 660px;">
								<div style="width:100% !important;">
									<!--[if (!mso)&(!IE)]><!-->
									<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
										<!--<![endif]-->
										<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
											<tbody>
											<tr style="vertical-align: top;" valign="top">
												<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
													<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" height="15" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 15px; width: 100%;" valign="top" width="100%">
														<tbody>
														<tr style="vertical-align: top;" valign="top">
															<td height="15" style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
														</tr>
														</tbody>
													</table>
												</td>
											</tr>
											</tbody>
										</table>
										<!--[if (!mso)&(!IE)]><!-->
									</div>
									<!--<![endif]-->
								</div>
							</div>
							<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
							<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
						</div>
					</div>
				</div>
				<div style="background-color:transparent;">
					<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 660px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
						<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
							<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:660px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
							<!--[if (mso)|(IE)]><td align="center" width="660" style="background-color:transparent;width:660px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
							<div class="col num12" style="min-width: 320px; max-width: 660px; display: table-cell; vertical-align: top; width: 660px;">
								<div style="width:100% !important;">
									<!--[if (!mso)&(!IE)]><!-->
									<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
										<!--<![endif]-->
										<div align="center" class="img-container center autowidth fullwidth">
											<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="" align="center"><![endif]--><img align="center" alt="Image" border="0" class="center autowidth fullwidth" src="https://i.ibb.co/gt7Jk8M/top-rounded.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; border: 0; height: auto; width: 100%; max-width: 660px; display: block;" title="Image" width="660"/>
											<!--[if mso]></td></tr></table><![endif]-->
										</div>
										<!--[if (!mso)&(!IE)]><!-->
									</div>
									<!--<![endif]-->
								</div>
							</div>
							<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
							<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
						</div>
					</div>
				</div>
				<div style="background-color:transparent;">
					<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 660px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #FFFFFF;">
						<div style="border-collapse: collapse;display: table;width: 100%;background-color:#FFFFFF;">
							<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:660px"><tr class="layout-full-width" style="background-color:#FFFFFF"><![endif]-->
							<!--[if (mso)|(IE)]><td align="center" width="660" style="background-color:#FFFFFF;width:660px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:0px;"><![endif]-->
							<div class="col num12" style="min-width: 320px; max-width: 660px; display: table-cell; vertical-align: top; width: 660px;">
								<div style="width:100% !important;">
									<!--[if (!mso)&(!IE)]><!-->
									<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
										<!--<![endif]-->
										<div align="center" class="img-container center fixedwidth" style="padding-right: 25px;padding-left: 25px;">
											<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 25px;padding-left: 25px;" align="center"><![endif]-->
											<div style="font-size:1px;line-height:10px"> </div>

											<img align="center" alt="Image" border="0" class="center fixedwidth" src="https://i.ibb.co/fNy4JSQ/Logo.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; border: 0; height: auto; width: 100%; max-width: 198px; display: block;" title="Image" width="198"/>
											<div style="font-size:1px;line-height:25px"> </div>
											<!--[if mso]></td></tr></table><![endif]-->
										</div>
										<!--[if (!mso)&(!IE)]><!-->
									</div>
									<!--<![endif]-->
								</div>
							</div>
							<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
							<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
						</div>
					</div>
				</div>
				<div style="background-image:url('https://i.ibb.co/bdcWnWB/bg-hero.jpg');background-position:top center;background-repeat:no-repeat;background-color:transparent;">
					<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 660px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #1a1953;">
						<div style="border-collapse: collapse;display: table;width: 100%;background-color:#1a1953;">
							<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-image:url('images/bg_hero.jpg');background-position:top center;background-repeat:no-repeat;background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:660px"><tr class="layout-full-width" style="background-color:#1a1953"><![endif]-->
							<!--[if (mso)|(IE)]><td align="center" width="660" style="background-color:#1a1953;width:660px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:35px; padding-bottom:0px;"><![endif]-->
							<div class="col num12" style="min-width: 320px; max-width: 660px; display: table-cell; vertical-align: top; width: 660px;">
								<div style="width:100% !important;">
									<!--[if (!mso)&(!IE)]><!-->
									<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:35px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
										<!--<![endif]-->
										<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
										<div style="color:#555555;font-family:'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
											<div style="font-size: 12px; line-height: 1.2; font-family: 'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif; color: #555555; mso-line-height-alt: 14px;">
												<p style="font-size: 26px; line-height: 1.2; text-align: center; mso-line-height-alt: 31px; margin: 0;"><span style="color: #ffffff; font-size: 26px; background-color: #5ed38b;"> <span style="font-size: 26px;">HURRY UP!</span> </span></p>
											</div>
										</div>
										<!--[if mso]></td></tr></table><![endif]-->
										<div align="center" class="img-container center autowidth fullwidth" style="padding-right: 0px;padding-left: 0px;">
											<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]--><img align="center" alt="Image" border="0" class="center autowidth fullwidth" src="https://i.ibb.co/sCvGPM8/hero-character-mecha.gif" style="text-decoration: none; -ms-interpolation-mode: bicubic; border: 0; height: auto; width: 100%; max-width: 660px; display: block;" title="Image" width="660"/>
											<!--[if mso]></td></tr></table><![endif]-->
										</div>
										<!--[if (!mso)&(!IE)]><!-->
									</div>
									<!--<![endif]-->
								</div>
							</div>
							<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
							<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
						</div>
					</div>
				</div>
				<div style="background-color:transparent;">
					<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 660px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #3c46bf;">
						<div style="border-collapse: collapse;display: table;width: 100%;background-color:#3c46bf;background-image:url('https://i.ibb.co/ZcxPhBb/bg-intro.jpg');background-position:top center;background-repeat:no-repeat">
							<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:660px"><tr class="layout-full-width" style="background-color:#3c46bf"><![endif]-->
							<!--[if (mso)|(IE)]><td align="center" width="660" style="background-color:#3c46bf;width:660px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
							<div class="col num12" style="min-width: 320px; max-width: 660px; display: table-cell; vertical-align: top; width: 660px;">
								<div style="width:100% !important;">
									<!--[if (!mso)&(!IE)]><!-->
									<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
										<!--<![endif]-->
										<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
											<tbody>
											<tr style="vertical-align: top;" valign="top">
												<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
													<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" height="5" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 5px; width: 100%;" valign="top" width="100%">
														<tbody>
														<tr style="vertical-align: top;" valign="top">
															<td height="5" style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
														</tr>
														</tbody>
													</table>
												</td>
											</tr>
											</tbody>
										</table>
										<!--[if (!mso)&(!IE)]><!-->
									</div>
									<!--<![endif]-->
								</div>
							</div>
							<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
							<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
						</div>
					</div>
				</div>
				<div style="background-color:transparent;">
					<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 660px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #3c46bf;">
						<div style="border-collapse: collapse;display: table;width: 100%;background-color:#3c46bf;">
							<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:660px"><tr class="layout-full-width" style="background-color:#3c46bf"><![endif]-->
							<!--[if (mso)|(IE)]><td align="center" width="660" style="background-color:#3c46bf;width:660px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:30px;"><![endif]-->
							<div class="col num12" style="min-width: 320px; max-width: 660px; display: table-cell; vertical-align: top; width: 660px;">
								<div style="width:100% !important;">
									<!--[if (!mso)&(!IE)]><!-->
									<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:30px; padding-right: 0px; padding-left: 0px;">
										<!--<![endif]-->
										<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
										<div style="color:#FF8097;font-family:'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height:1.2;padding-top:0px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
											<div style="font-size: 12px; line-height: 1.2; font-family: 'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif; color: #FF8097; mso-line-height-alt: 14px;">
												<p style="font-size: 46px; line-height: 1.2; text-align: center; mso-line-height-alt: 55px; margin: 0;"><span style="font-size: 46px;"><strong>Assalomu alaykum :) Welcome! </strong></span></p>
											</div>
										</div>
										<!--[if mso]></td></tr></table><![endif]-->
										<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 50px; padding-left: 50px; padding-top: 0px; padding-bottom: 20px; font-family: Arial, sans-serif"><![endif]-->
										<div style="color:#FFFFFF;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height:1.8;padding-top:0px;padding-right:50px;padding-bottom:20px;padding-left:50px;">
											<div style="font-size: 12px; line-height: 1.8; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; color: #FFFFFF; mso-line-height-alt: 22px;">
												<p style="font-size: 16px; line-height: 1.8; text-align: center; mso-line-height-alt: 29px; margin: 0;">
													<span style="font-size: 16px;">
														Hello <?= $fio ?>, you are registered with this email. For activating your account please click a button.
														If you aren't activate last 48 hours we automatically deleting your account. If you aren't registered this email
														just ignore the email.
													</span>
												</p>
											</div>
										</div>
										<!--[if mso]></td></tr></table><![endif]-->
										<div align="center" class="button-container" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
											<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"><tr><td style="padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="" style="height:40.5pt; width:235.5pt; v-text-anchor:middle;" arcsize="93%" stroke="false" fillcolor="#5ed38b"><w:anchorlock/><v:textbox inset="0,0,0,0"><center style="color:#ffffff; font-family:Arial, sans-serif; font-size:22px"><![endif]-->
											<div style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#5ed38b;border-radius:50px;-webkit-border-radius:50px;-moz-border-radius:50px;width:auto; width:auto;;border-top:1px solid #5ed38b;border-right:1px solid #5ed38b;border-bottom:1px solid #5ed38b;border-left:1px solid #5ed38b;padding-top:5px;padding-bottom:5px;font-family:'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;"><span style="padding-left:60px;padding-right:55px;font-size:22px;display:inline-block;">
<span style="font-size: 16px; line-height: 2; mso-line-height-alt: 32px;"><span style="font-size: 22px; line-height: 44px;"> <a style="text-decoration: none;" href="http://notes.loc/api/user/activate?email=<?= $email ?>&token=<?= $token ?>">ACTIVATE</a> </span></span>
</span></div>
											<!--[if mso]></center></v:textbox></v:roundrect></td></tr></table><![endif]-->
										</div>
										<!--[if (!mso)&(!IE)]><!-->
									</div>
									<!--<![endif]-->
								</div>
							</div>
							<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
							<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
						</div>
					</div>
				</div>
				<div style="background-color:transparent;">
					<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 660px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #FFFFFF;">
						<div style="border-collapse: collapse;display: table;width: 100%;background-color:#FFFFFF;">
							<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:660px"><tr class="layout-full-width" style="background-color:#FFFFFF"><![endif]-->
							<!--[if (mso)|(IE)]><td align="center" width="660" style="background-color:#FFFFFF;width:660px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:15px; padding-bottom:15px;"><![endif]-->
							<div class="col num12" style="min-width: 320px; max-width: 660px; display: table-cell; vertical-align: top; width: 660px;">
								<div style="width:100% !important;">
									<!--[if (!mso)&(!IE)]><!-->
									<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:15px; padding-bottom:15px; padding-right: 0px; padding-left: 0px;">
										<!--<![endif]-->
										<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 50px; padding-left: 50px; padding-top: 15px; padding-bottom: 15px; font-family: Arial, sans-serif"><![endif]-->
										<div style="color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height:1.5;padding-top:15px;padding-right:50px;padding-bottom:15px;padding-left:50px;">
											<div style="font-size: 12px; line-height: 1.5; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; color: #555555; mso-line-height-alt: 18px;">
												<p style="font-size: 12px; line-height: 1.5; text-align: center; mso-line-height-alt: 18px; margin: 0;"><span style="font-size: 12px;">Open source personal app project</span></p>
											</div>
										</div>
										<!--[if mso]></td></tr></table><![endif]-->
										<!--[if (!mso)&(!IE)]><!-->
									</div>
									<!--<![endif]-->
								</div>
							</div>
							<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
							<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
						</div>
					</div>
				</div>
				<div style="background-color:transparent;">
					<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 660px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
						<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
							<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:660px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
							<!--[if (mso)|(IE)]><td align="center" width="660" style="background-color:transparent;width:660px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
							<div class="col num12" style="min-width: 320px; max-width: 660px; display: table-cell; vertical-align: top; width: 660px;">
								<div style="width:100% !important;">
									<!--[if (!mso)&(!IE)]><!-->
									<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
										<!--<![endif]-->
										<div align="center" class="img-container center autowidth fullwidth" style="padding-right: 0px;padding-left: 0px;">
											<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]-->
											<img align="center" alt="Image" border="0" class="center autowidth fullwidth" src="https://i.ibb.co/v4FH9nr/bottom-rounded.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; border: 0; height: auto; width: 100%; max-width: 660px; display: block;" title="Image" width="660"/>
											<!--[if mso]></td></tr></table><![endif]-->
										</div>
										<!--[if (!mso)&(!IE)]><!-->
									</div>
									<!--<![endif]-->
								</div>
							</div>
							<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
							<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
						</div>
					</div>
				</div>
				<div style="background-color:transparent;">
					<div class="block-grid two-up no-stack" style="Margin: 0 auto; min-width: 320px; max-width: 660px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
						<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
							<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:660px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
							<!--[if (mso)|(IE)]><td align="center" width="330" style="background-color:transparent;width:330px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:15px; padding-bottom:40px;"><![endif]-->
							<div class="col num6" style="min-width: 320px; max-width: 330px; display: table-cell; vertical-align: top; width: 330px;">
								<div style="width:100% !important;">
									<!--[if (!mso)&(!IE)]><!-->
									<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:15px; padding-bottom:40px; padding-right: 0px; padding-left: 0px;">
										<!--<![endif]-->
										<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
										<div style="color:#1a1953;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
											<div style="font-size: 12px; line-height: 1.2; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; color: #1a1953; mso-line-height-alt: 14px;">
												<p style="font-size: 11px; line-height: 1.2; mso-line-height-alt: 13px; margin: 0;"><span style="font-size: 11px;"><strong>PersonalApp </strong>Open source project<br/>Copyright Erkin Pardayev 2019 </span></p>
											</div>
										</div>
										<!--[if mso]></td></tr></table><![endif]-->
										<!--[if (!mso)&(!IE)]><!-->
									</div>
									<!--<![endif]-->
								</div>
							</div>
							<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
							<!--[if (mso)|(IE)]></td><td align="center" width="330" style="background-color:transparent;width:330px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:20px; padding-bottom:5px;"><![endif]-->
							<div class="col num6" style="min-width: 320px; max-width: 330px; display: table-cell; vertical-align: top; width: 330px;">
								<div style="width:100% !important;">
									<!--[if (!mso)&(!IE)]><!-->
									<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:20px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
										<!--<![endif]-->
										<table cellpadding="0" cellspacing="0" class="social_icons" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" valign="top" width="100%">
											<tbody>
											<tr style="vertical-align: top;" valign="top">
												<td style="word-break: break-word; vertical-align: top; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
													<table activate="activate" align="right" alignment="alignment" cellpadding="0" cellspacing="0" class="social_table" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: undefined; mso-table-tspace: 0; mso-table-rspace: 0; mso-table-bspace: 0; mso-table-lspace: 0;" to="to" valign="top">
														<tbody>
														<tr align="right" style="vertical-align: top; display: inline-block; text-align: right;" valign="top">
															<td style="word-break: break-word; vertical-align: top; padding-bottom: 5px; padding-right: 0px; padding-left: 5px;" valign="top"><a href="https://www.facebook.com/" target="_blank"><img alt="Facebook" height="32" src="https://i.ibb.co/W3ZzbVd/facebook-2x.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: none; display: block;" title="Facebook" width="32"/></a></td>
															<td style="word-break: break-word; vertical-align: top; padding-bottom: 5px; padding-right: 0px; padding-left: 5px;" valign="top"><a href="https://twitter.com/" target="_blank"><img alt="Twitter" height="32" src="https://i.ibb.co/7r3DVWM/twitter-2x.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: none; display: block;" title="Twitter" width="32"/></a></td>
															<td style="word-break: break-word; vertical-align: top; padding-bottom: 5px; padding-right: 0px; padding-left: 5px;" valign="top"><a href="https://instagram.com/" target="_blank"><img alt="Instagram" height="32" src="https://i.ibb.co/Q7gQHJs/instagram-2x.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: none; display: block;" title="Instagram" width="32"/></a></td>
														</tr>
														</tbody>
													</table>
												</td>
											</tr>
											</tbody>
										</table>
										<!--[if (!mso)&(!IE)]><!-->
									</div>
									<!--<![endif]-->
								</div>
							</div>
							<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
							<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
						</div>
					</div>
				</div>
				<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
			</td>
		</tr>
		</tbody>
	</table>
	<!--[if (IE)]></div><![endif]-->
	<?php $this->endBody() ?>
	</body>
	</html>
<?php $this->endPage() ?>