<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Seu Plano Aqui | Bem Vindo(a)!</title>

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/material-bootstrap-wizard"/>

    <meta name="keywords" content="wizard, bootstrap wizard, creative tim, long forms, 3 step wizard, sign up wizard, beautiful wizard, long forms wizard, wizad with validation, material design, material wizard, bootstrap material wizard">
    <meta name="description" content="Material Bootstrap Wizard is a fully responsive wizard that is inspired by the famous Google's Material Design and comes with 3 useful examples and 5 colors. The Material Bootstrap Wizard is one of the most handy elements that can be used inside a project.">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Material Bootstrap Wizard by Creative Tim">
    <meta itemprop="description" content="Material Bootstrap Wizard is a fully responsive wizard that is inspired by the famous Google's Material Design and comes with 3 useful examples and 5 colors. The Material Bootstrap Wizard is one of the most handy elements that can be used inside a project.">
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/48/opt_mbw_thumbnail.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Material Bootstrap Wizard by Creative Tim">
    <meta name="twitter:description" content="Material Bootstrap Wizard is a fully responsive wizard that is inspired by the famous Google's Material Design and comes with 3 useful examples and 5 colors. The Material Bootstrap Wizard is one of the most handy elements that can be used inside a project.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/48/opt_mbw_thumbnail.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Material Bootstrap Wizard by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/material-bootstrap-wizard/wizard-book-room.html" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/48/opt_mbw_thumbnail.jpg" />
    <meta property="og:description" content="Material Bootstrap Wizard is a fully responsive wizard that is inspired by the famous Google's Material Design and comes with 3 useful examples and 5 colors. The Material Bootstrap Wizard is one of the most handy elements that can be used inside a project." />
    <meta property="og:site_name" content="Creative Tim" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!--  Just for demo purpose, do not include in your project     -->
	<link href="assets/css/demo.css" rel="stylesheet" />
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
	<!-- End Google Tag Manager -->
	</head>

	<body>
		<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div class="image-container set-full-height" style="background-image: url('assets/img/bg.jpg'); background-attachment: fixed;">
	    <!--   Creative Tim Branding   -->
	    <!-- <a href="https://creative-tim.com">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="assets/img/new_logo.png">
	            </div>
	            <div class="brand">
	                Creative Tim
	            </div>
	        </div>
	    </a> -->

		<!--  Made With Material Kit  -->
		<!-- <a href="https://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard" class="made-with-mk">
			<div class="brand">MK</div>
			<div class="made-with">Made with <strong>Material Kit</strong></div>
		</a> -->

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="green" id="wizardProfile">
		                <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
		                    	<div class="wizard-header">
		                    		<div class="logo">
		                    			<img src="assets/img/logo.png">
		                    		</div>
		                        	<!-- <h3 class="wizard-title">
		                        	   Build Your Profile
		                        	</h3> -->
									<h5>Responda nossas perguntas e indicaremos o melhor plano para você!</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#about" data-toggle="tab">Sobre Você</a></li>
			                            <li><a href="#account" data-toggle="tab">Sobre seu consumo</a></li>
			                            <li><a href="#address" data-toggle="tab">Seu plano</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
			                    		<form action="" method="" id="sobre-voce">
			                              <div class="row">
			                                	<h4 class="info-text"> Vamos começar com as informações básicas sobre você!</h4>
			                                	<div class="col-sm-4 col-sm-offset-1">
			                                    	<div class="picture-container">
			                                        	<div class="picture">
	                                        				<img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
			                                            	<input type="file" id="wizard-picture">
			                                        	</div>
			                                        	<h6>Escolha uma imagem se preferir!</h6>
			                                    	</div>
			                                	</div>
			                                	<div class="col-sm-6">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="material-icons">face</i>
														</span>
														<div class="form-group label-floating">
				                                          <label class="control-label">Nome <small>(Obrigatório)</small></label>
				                                          <input name="firstname" type="text" class="form-control">
				                                        </div>
													</div>

													<div class="input-group">
														<span class="input-group-addon">
															<i class="material-icons">record_voice_over</i>
														</span>
														<div class="form-group label-floating">
														  <label class="control-label">Sobrenome <small>(Obrigatório)</small></label>
														  <input name="lastname" type="text" class="form-control">
														</div>
													</div>
			                                	</div>
			                                	<div class="col-sm-10 col-sm-offset-1">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="material-icons">email</i>
														</span>
														<div class="form-group label-floating">
				                                            <label class="control-label">Email <small>(Obrigatório)</small></label>
				                                            <input name="email" type="email" class="form-control">
				                                        </div>
													</div>
			                                	</div>
			                            	</div>
			                            	<div class="row">
			                            		<div class="col-sm-5 col-sm-offset-1">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="material-icons">domain</i>
														</span>
														<div class="form-group label-floating">
				                                            <label class="control-label">Estado <small>(Obrigatório)</small></label>
				                                            <input name="estado" type="text" class="form-control">
				                                        </div>
													</div>
			                                	</div>
			                                	<div class="col-sm-5 col-sm-offset-1" style="margin-left: 0;">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="material-icons">location_city</i>
														</span>
														<div class="form-group label-floating">
				                                            <label class="control-label">Cidade <small>(Obrigatório)</small></label>
				                                            <input name="cidade" type="text" class="form-control">
				                                        </div>
													</div>
			                                	</div>
			                            	</div>
			                    		</form>
		                            </div>
		                            <div class="tab-pane" id="account">
		                            	<form method="" action="" id="sobre-seu-consumo">
			                                <h4 class="info-text"> Responda as seguintes perguntas </h4>
			                                <div class="row">
		                                       <!--  <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="icon">
		                                                    <i class="fa fa-pencil"></i>
		                                                </div>
		                                                <h6>Design</h6>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Code">
		                                                <div class="icon">
		                                                    <i class="fa fa-terminal"></i>
		                                                </div>
		                                                <h6>Code</h6>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Develop">
		                                                <div class="icon">
		                                                    <i class="fa fa-laptop"></i>
		                                                </div>
		                                                <h6>Develop</h6>
		                                            </div>
		                                        </div> -->
		                                        <div class="col-sm-6 col-sm-offset-1 center-div">
		                                        	<h4>Qual é o seu consumo de internet móvel?</h4>
		                                        	<div class="form-group about-us">
														<label class="answer">1) Quantos e-mails (só texto)você envia e/ou recebe por dia?</label>
				                                        <input name="answer_1" accessKey="dados" placeholder="Média de 6 a 10 e-mails em dias comuns" type="number" min="0" class="form-control">
				                                        <input type="hidden" name="valorbase" value="10">
				                                        <input type="hidden" name="typebase" value="Kb">
													</div>
													<div class="form-group about-us">
														<label class="answer">2) Quantos e-mails (com anexo) você envia e/ou recebe por dia?</label>
				                                        <input name="answer_2" accessKey="dados" placeholder="Média de 2 a 3 e-mails em dias comuns" type="number" min="0" class="form-control">
				                                        <input type="hidden" name="valorbase" value="350">
				                                        <input type="hidden" name="typebase" value="Kb">
													</div>
													<div class="form-group about-us">
														<label class="answer">3) Quantos sites você visita por dia? (incluindo as redes sociais)</label>
				                                        <input name="answer_3" accessKey="dados" placeholder="Média de 5 a 8 sites em dias comuns" type="number" min="0" class="form-control">
				                                        <input type="hidden" name="valorbase" value="300">
				                                        <input type="hidden" name="typebase" value="Kb">
													</div>
													<div class="form-group about-us">
														<label class="answer">4) Quantas mensagens você posta nas redes sociais por dia?</label>
				                                        <input name="answer_4" accessKey="dados" placeholder="Média de 3 a 5 postagem em dias comuns" type="number" min="0" class="form-control">
				                                        <input type="hidden" name="valorbase" value="5">
				                                        <input type="hidden" name="typebase" value="Kb">
													</div>
													<div class="form-group about-us">
														<label class="answer">5) Quantas fotos você posta nas redes sociais por dia?</label>
				                                        <input name="answer_5" accessKey="dados" placeholder="Média de 1 a 4 postagens em dias comuns" type="number" min="0" class="form-control">
				                                        <input type="hidden" name="valorbase" value="350">
				                                        <input type="hidden" name="typebase" value="Kb">
													</div>
													<div class="form-group about-us">
														<label class="answer">6) Quantas mensagens você troca em chats de redes sociais por dia?</label>
				                                        <input name="answer_6" accessKey="dados" placeholder="Média de 150 a 200 mensagens em dias comuns" type="number" min="0" class="form-control">
				                                        <input type="hidden" name="valorbase" value="40">
				                                        <input type="hidden" name="typebase" value="Kb">
													</div>
													<div class="form-group about-us">
														<label class="answer">7) Quantos minutos de vídeo você assiste na internet por dia? (incluindo as redes sociais)</label>
				                                        <input name="answer_7" accessKey="dados" placeholder="Média de 10 a 20 minutos em dias comuns" type="number" min="0" class="form-control">
				                                        <input type="hidden" name="valorbase" value="10000">
				                                        <input type="hidden" name="typebase" value="Kb">
													</div>
													<div class="input-group about-us">
														<label class="answer">8) De uma escala de 1 a 5 quanto custuma realizar ligações para própria e para outras operadoras.</label>
														<table class="table">
															<tr>
																<thead>
																	<tr>
																		<th>1</th>
																		<th>2</th>
																		<th>3</th>
																		<th>4</th>
																		<th>5</th>
																	</tr>
																	<tr>
																		<td>
																			<input type="radio" accessKey="dados" name="answer_8" value="1">
																		</td>
																		<td>
																			<input type="radio" accessKey="dados" name="answer_8" value="2">
																		</td>
																		<td>
																			<input type="radio" accessKey="dados" name="answer_8" value="3">
																		</td>
																		<td>
																			<input type="radio" accessKey="dados" name="answer_8" value="4">
																		</td>
																		<td>
																			<input type="radio" accessKey="dados" name="answer_8" value="5">
																		</td>
																	</tr>
																</thead>
															</tr>
														</table>
													</div>

													<!-- <div class="input-group">
														<label class="answer">Quanto você consome de Facebook em média em um dia?</label>
														<table class="table">
															<tr>
																<thead>
																	<tr>
																		<th>0</th>
																		<th>1</th>
																		<th>2</th>
																		<th>3</th>
																		<th>4</th>
																		<th>5</th>
																	</tr>
																	<tr>
																		<td>
																			<input type="radio" accessKey="dados" name="answer_2" value="0">
																		</td>
																		<td>
																			<input type="radio" accessKey="dados" name="answer_2" value="1">
																		</td>
																		<td>
																			<input type="radio" accessKey="dados" name="answer_2" value="2">
																		</td>
																		<td>
																			<input type="radio" accessKey="dados" name="answer_2" value="3">
																		</td>
																		<td>
																			<input type="radio" accessKey="dados" name="answer_2" value="4">
																		</td>
																		<td>
																			<input type="radio" accessKey="dados" name="answer_2" value="5">
																		</td>
																	</tr>
																</thead>
															</tr>
														</table>
													</div>
													<div class="input-group">
														<label class="answer">Quanto você consome de Instagram em média em um dia?</label>
														<table class="table">
															<tr>
																<thead>
																	<tr>
																		<th>0</th>
																		<th>1</th>
																		<th>2</th>
																		<th>3</th>
																		<th>4</th>
																		<th>5</th>
																	</tr>
																	<tr>
																		<td>
																			<input type="radio" accessKey="dados" name="answer_3" value="0">
																		</td>
																		<td>
																			<input type="radio" accessKey="dados" name="answer_3" value="1">
																		</td>
																		<td>
																			<input type="radio" accessKey="dados" name="answer_3" value="2">
																		</td>
																		<td>
																			<input type="radio" accessKey="dados" name="answer_3" value="3">
																		</td>
																		<td>
																			<input type="radio" accessKey="dados" name="answer_3" value="4">
																		</td>
																		<td>
																			<input type="radio" accessKey="dados" name="answer_3" value="5">
																		</td>
																	</tr>
																</thead>
															</tr>
														</table>
													</div>

													<div class="input-group">
														<label class="answer">Quanto você consome de Twitter em média em um dia?</label>
														<table class="table">
															<tr>
																<thead>
																	<tr>
																		<th>0</th>
																		<th>1</th>
																		<th>2</th>
																		<th>3</th>
																		<th>4</th>
																		<th>5</th>
																	</tr>
																	<tr>
																		<td>
																			<input type="radio" accessKey="dados" name="answer_4" value="0">
																		</td>
																		<td>
																			<input type="radio" accessKey="dados" name="answer_4" value="1">
																		</td>
																		<td>
																			<input type="radio" accessKey="dados" name="answer_4" value="2">
																		</td>
																		<td>
																			<input type="radio" accessKey="dados" name="answer_4" value="3">
																		</td>
																		<td>
																			<input type="radio" accessKey="dados" name="answer_4" value="4">
																		</td>
																		<td>
																			<input type="radio" accessKey="dados" name="answer_4" value="5">
																		</td>
																	</tr>
																</thead>
															</tr>
														</table>
													</div>
													<div class="input-group">
														<label class="answer">Quanto você consome de minutos de ligação em um dia?</label>
														<table class="table">
															<tr>
																<thead>
																	<tr>
																		<th>0</th>
																		<th>1</th>
																		<th>2</th>
																		<th>3</th>
																		<th>4</th>
																		<th>5</th>
																	</tr>
																	<tr>
																		<td>
																			<input type="radio" accessKey="tel" name="answer_5" value="0">
																		</td>
																		<td>
																			<input type="radio" accessKey="tel" name="answer_5" value="1">
																		</td>
																		<td>
																			<input type="radio" accessKey="tel" name="answer_5" value="2">
																		</td>
																		<td>
																			<input type="radio" accessKey="tel" name="answer_5" value="3">
																		</td>
																		<td>
																			<input type="radio" accessKey="tel" name="answer_5" value="4">
																		</td>
																		<td>
																			<input type="radio" accessKey="tel" name="answer_5" value="5">
																		</td>
																	</tr>
																</thead>
															</tr>
														</table>
													</div> -->

			                                	</div>

			                                </div>
		                            	</form>
		                            </div>
		                            <div class="tab-pane" id="address">
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                        <h4 class="info-text"> O melhor plano para você é da:  </h4>
		                                    </div>
		                                    <div class="lista_plano">
			                                    <div class="card">
				                                    <div class="col-sm-12 text-center"><img src="" class="img_res" style="width: 30%; margin-bottom: 30px;"></div>
				                                    <div class="col-sm-5 center-div text-center"><strong><h3 class="res_tipo_servico">CONTROLE - TIM BLACK</h3></strong></div>
				                                    <div class="col-sm-5 center-div text-center"><h3 class="res_validade">30 dias</h3></div>
				                                    <div class="col-sm-5 center-div text-center"><h3 class="res_preco">14,99</h3></div>
				                                    <div class="col-sm-5 center-div text-center"><h3 class="res_pacote">2GB - 200min - SMS: 100</h3></div>
				                                    <div class="col-sm-5 center-div text-center"><h3 class="res_app">Apps Inclusos: PROTEGE SAÚDE</h3></div>
				                                    <div class="col-sm-5 center-div text-center"><h3 class="res_appili">Apps Ilimitados: WHATSAPP MENSSEGER</h3></div>
				                                    <div class="col-sm-5 center-div text-center"><h3 class="res_permanenciaMinima">Permanência Mínima: -</h3></div>
				                                    <div class="col-sm-5 center-div text-center"><h3 class="res_obs">Observação: -</h3></div>
				                                    <div class="col-sm-5 center-div text-center"><h3 class="res_obs">Dependentes: -</h3></div><hr>
			                                    </div>
		                                    </div>
		                                    <!-- <div class="col-sm-7 col-sm-offset-1">
	                                        	<div class="form-group label-floating">
	                                        		<label class="control-label">Street Name</label>
	                                    			<input type="text" class="form-control">
	                                        	</div>
		                                    </div>
		                                    <div class="col-sm-3">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Street Number</label>
		                                            <input type="text" class="form-control">
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">City</label>
		                                            <input type="text" class="form-control">
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-5">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Country</label>
	                                            	<select name="country" class="form-control">
														<option disabled="" selected=""></option>
	                                                	<option value="Afghanistan"> Afghanistan </option>
	                                                	<option value="Albania"> Albania </option>
	                                                	<option value="Algeria"> Algeria </option>
	                                                	<option value="American Samoa"> American Samoa </option>
	                                                	<option value="Andorra"> Andorra </option>
	                                                	<option value="Angola"> Angola </option>
	                                                	<option value="Anguilla"> Anguilla </option>
	                                                	<option value="Antarctica"> Antarctica </option>
	                                                	<option value="...">...</option>
	                                            	</select>
		                                        </div>
		                                    </div> -->
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Próximo' />
		                                <input type='button' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Finalizar' />
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Anterior' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div><!-- end row -->
	    </div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	             Made with <a href="https://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard">Material Kit</a>. Developed by  <a href="http://luisrodriguesdev.com.br">Luis Rodrigues.</a>
	        </div>
	    </div>
	</div>

	<!-- <div class="fixed-plugin">
		<div class="dropdown open">
			<a href="#" data-toggle="dropdown">
				<i class="fa fa-cog fa-2x"> </i>
			</a>
			<ul class="dropdown-menu">
				<li class="header-title">Examples</li>
				<li>
					<a href="wizard-book-room.html">
					   <img src="assets/img/thumb-book-room.jpg">
					   Book a Room
					</a>
				</li>
				<li class="active">
					<a href="wizard-build-profile.html">
					   <img src="assets/img/thumb-build-profile.jpg">
					   Build Your Profile
					</a>
				</li>
				<li>
					<a href="wizard-list-place.html">
					   <img src="assets/img/thumb-list-place.jpg">
					   List Your Place
					</a>
				</li>
				<li class="header-title">Colors</li>
				<li class="adjustments-line">
					<a href="javascript:void(0)" class="switch-trigger">
						<div class="text-center">
							<span class="badge filter badge-blue" data-color="blue"></span>
							<span class="badge filter badge-purple" data-color="purple"></span>
							<span class="badge filter badge-green active" data-color="green"></span>
							<span class="badge filter badge-orange" data-color="orange"></span>
							<span class="badge filter badge-red" data-color="red"></span>
						</div>
						<div class="clearfix"></div>
					</a>
				</li>
			   <li class="tutorial">
					<div class="text-center">
						<a href="documentation/components-documentation.html" target="_blank" class="btn btn-default btn-fill btn-block">Documentation</a>
					</div>
				</li>
				<li class="license">
					Personal License
					<div class="text-center">
						<a href="https://www.creative-tim.com/product/material-bootstrap-wizard" target="_blank" class="btn btn-info btn-fill btn-block">Download, it's free!</a>
					</div>
				</li>
			</ul>
		</div>
	</div> -->

</body>
	<!--   Core JS Files   -->
    <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/demo.js" type="text/javascript"></script>
	<script src="assets/js/material-bootstrap-wizard.js" type="text/javascript"></script>

    <!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
</html>
