/*! =========================================================
 *
 * Material Bootstrap Wizard - V1.0.1
 *
 * =========================================================
 *
 * Copyright 2016 Creative Tim (http://www.creative-tim.com/product/material-bootstrap-wizard)
 *
 *
 *                       _oo0oo_
 *                      o8888888o
 *                      88" . "88
 *                      (| -_- |)
 *                      0\  =  /0
 *                    ___/`---'\___
 *                  .' \|     |// '.
 *                 / \|||  :  |||// \
 *                / _||||| -:- |||||- \
 *               |   | \\  -  /// |   |
 *               | \_|  ''\---/''  |_/ |
 *               \  .-\__  '-'  ___/-. /
 *             ___'. .'  /--.--\  `. .'___
 *          ."" '<  `.___\_<|>_/___.' >' "".
 *         | | :  `- \`.;`\ _ /`;.`/ - ` : | |
 *         \  \ `_.   \_ __\ /__ _/   .-` /  /
 *     =====`-.____`.___ \_____/___.-`___.-'=====
 *                       `=---='
 *
 *     ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 *
 *               Buddha Bless:  "No Bugs"
 *
 * ========================================================= */

// Material Bootstrap Wizard Functions

searchVisible = 0;
transparent = true;

$(document).ready(function(){

    $.material.init();

    //vars

    /*  Activate the tooltips      */
    $('[rel="tooltip"]').tooltip();

    // Code for the Validator
    var $validator = $('.wizard-card #sobre-voce').validate({
		  rules: {
		    firstname: {
		      required: false,
		      minlength: 3
		    },
		    lastname: {
		      required: false,
		      minlength: 3
		    },
            email: {
              required: false,
              minlength: 3
            },
            estado: {
              required: true,
              minlength: 2
            },
            cidade: {
              required: true,
              minlength: 2
            }
        },

        errorPlacement: function(error, element) {
            $(element).parent('div').addClass('has-error');
         }
	});

     // Code for the Validator
    var $validator_sobre = $('.wizard-card #sobre-seu-consumo').validate({
          rules: {
            answer_1: {
              required: true,
              minlength: 1
            },
            answer_2: {
              required: true,
              minlength: 1
            },
            answer_3: {
              required: true,
              minlength: 1
            },
            answer_4: {
              required: true,
              minlength: 1
            },
            answer_5: {
              required: true,
              minlength: 1
            },
            answer_6: {
              required: true,
              minlength: 1
            },
            answer_7: {
              required: true,
              minlength: 1
            },
            answer_7: {
              required: true,
              minlength: 1
            }
        },

        errorPlacement: function(error, element) {
            $(element).parent('div').addClass('has-error');
         }
    });

    // Wizard Initialization
  	$('.wizard-card').bootstrapWizard({
        'tabClass': 'nav nav-pills',
        'nextSelector': '.btn-next',
        'previousSelector': '.btn-previous',

        onNext: function(tab, navigation, index) {
            var $valid = $('.wizard-card #sobre-voce').valid();
        	var $valid_2 = $('.wizard-card #sobre-seu-consumo').valid();
        	if(!$valid) {
        		$validator.focusInvalid();
        		return false;
        	}else if(!$valid_2){
                $validator_sobre.focusInvalid();
                return false;
            }
        },

        onInit: function(tab, navigation, index){

          //check number of tabs and fill the entire row
          var $total = navigation.find('li').length;
          $width = 100/$total;
          var $wizard = navigation.closest('.wizard-card');

          $display_width = $(document).width();

          if($display_width < 600 && $total > 3){
              $width = 50;
          }

           navigation.find('li').css('width',$width + '%');
           $first_li = navigation.find('li:first-child a').html();
           $moving_div = $('<div class="moving-tab">' + $first_li + '</div>');
           $('.wizard-card .wizard-navigation').append($moving_div);
           refreshAnimation($wizard, index);
           $('.moving-tab').css('transition','transform 0s');
       },

        onTabClick: function(tab, navigation, index){
            var $valid = $('.wizard-card #sobre-voce').valid();
            var $valid_2 = $('.wizard-card #sobre-seu-consumo').valid();

            if(!$valid){
                return false;
            }else if (!$valid_2) {
                return false;
            }else{
                return true;
            }

        },

        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $wizard = navigation.closest('.wizard-card');

            if ($current == 3) {
                //Algoritmo============================================================================
                var planos = [
                            {nome:'Oi Controle!', op:'oi', dados:230, minutos:60, preco:'R$99,00'},
                            {nome:'TIM Plano  Pós-Pago', op:'tim', dados:190, minutos:50, preco:'R$79,00'},
                            {nome:'Vivo Pós!', op:'vivo', dados:150, minutos:10, preco:'R$49,00'},
                            {nome:'TIM Infinity pré!', op:'tim', dados:140, minutos:20, preco:'R$49,00'},
                            {nome:'Vivo Controle!', op:'vivo', dados:100, minutos:10, preco:'R$39,00'}
                            ];
                
                var answers     = $('.about-us input[type=number]');
                var totalKb     = 0;
                var totalweek   = 0;
                var totalmonth  = 0;

                for (var i = 0; i < answers.length; i++) {
                    totalKb = totalKb + ($(answers[i]).val()*$(answers[i]).siblings('[name=valorbase]').val());
                }

                totalweek = 7*totalKb;
                totalweek = formatBytes(totalweek);
                totalmonth= 30*totalKb;
                totalmonth= formatBytes(totalmonth); 
                $.post(location.href+'assets/ajax/verifica_plano.php', {totalKb:totalKb, totalweek:totalweek, totalmonth:totalmonth}, function(data, textStatus, xhr) {
                    // $(window).offset().top = 0;
                    if (data != '') {
                        data = $.parseJSON(data);
                        var res = '';
                        var oplink = {"TIM":"https://www.tim.com.br/", "CLARO":"https://www.claro.com.br/", "VIVO":"https://www.vivo.com.br/", "OI":"https://www.oi.com.br/"};
                        for (var i = 0; i < data.length; i++) {
                            
                            res+= '<div class="card">';
                            res+= '<div class="col-sm-12 text-center"><img src="assets/img/logo_'+(data[i].operadora.toLowerCase())+'.png" class="img_res" style="width: 30%; margin-bottom: 30px;"></div>';
                            res+= '<div class="col-sm-5 center-div text-center"><strong><h3 class="res_tipo_servico">'+data[i].tipo+' - '+data[i].servico+'</h3></strong></div>';
                            res+= '<div class="col-sm-5 center-div text-center"><h3 class="res_validade">'+data[i].validade+'</h3></div>';
                            res+= '<div class="col-sm-5 center-div text-center"><h3 class="res_preco">R$'+data[i].valor+'</h3></div>';
                            res+= '<div class="col-sm-5 center-div text-center"><h3 class="res_pacote">'+data[i].internet+' - '+data[i].minutos+' - SMS: '+data[i].sms+'</h3></div>';
                            res+= '<div class="col-sm-5 center-div text-center"><h3 class="res_app">Apps Inclusos: '+data[i].aplicativos+'</h3></div>';
                            res+= '<div class="col-sm-5 center-div text-center"><h3 class="res_appili">Apps Ilimitados: '+data[i].aplicativosIlimitados+'</h3></div>';
                            res+= '<div class="col-sm-5 center-div text-center"><h3 class="res_permanenciaMinima">Permanência Mínima: '+data[i].permanenciaMinima+'</h3></div>';
                            res+= '<div class="col-sm-5 center-div text-center"><h3 class="res_obs">Observação: '+((data[i].obs == null) ? '-' : data[i].obs)+'</h3></div>';
                            res+= '<div class="col-sm-5 center-div text-center"><h3 class="res_obs">Dependentes: '+((data[i].dependentes == null) ? '-' : data[i].dependentes)+'</h3></div>';
                            res+= '<center><a href="'+oplink[data[i].operadora]+'" target="_blank" class="btn btn-success">Ir para o site</a></center> <hr>';
                            
                            res+= '</div>';
                        }
                        var aviso = '<div style="width: 90%; margin: 0 auto; text-align: justify;"><p>O intuito desse site é propor um plano de telefonia móvel que se encaixe melhor com o perfil dos usuários, e está sujeito a alterações das características dos planos de acordo com cada operadora. Não nos responsabilizamos por eventuais mudanças. Favor, entre em contato com a operadora escolhida para validar a oferta e contratá-la</p></div>';
                        $('.lista_plano').html(res+aviso);
                    }
                });

                // $('.img_res')[0].src = "assets/img/logo_"+planos[i].op+".png";
                // $('.plano_res').text(planos[i].nome);
                // $('.dado_res').text('Pacote: '+planos[i].dados+'MB');
                // $('.min_res').text('Minutos: '+planos[i].minutos+' min');
                // $('.preco_res').text('Preço: '+planos[i].preco);
            }

            // If it's the last tab then hide the last button and show the finish instead
            if($current >= $total) {
                $($wizard).find('.btn-next').hide();
                $($wizard).find('.btn-finish').show();
            } else {
                $($wizard).find('.btn-next').show();
                $($wizard).find('.btn-finish').hide();
            }

            button_text = navigation.find('li:nth-child(' + $current + ') a').html();

            setTimeout(function(){
                $('.moving-tab').text(button_text);
            }, 150);

            var checkbox = $('.footer-checkbox');

            if( !index == 0 ){
                $(checkbox).css({
                    'opacity':'0',
                    'visibility':'hidden',
                    'position':'absolute'
                });
            } else {
                $(checkbox).css({
                    'opacity':'1',
                    'visibility':'visible'
                });
            }

            refreshAnimation($wizard, index);
        }
  	});


    // Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
    });

    $('[data-toggle="wizard-radio"]').click(function(){
        wizard = $(this).closest('.wizard-card');
        wizard.find('[data-toggle="wizard-radio"]').removeClass('active');
        $(this).addClass('active');
        $(wizard).find('[type="radio"]').removeAttr('checked');
        $(this).find('[type="radio"]').attr('checked','true');
    });

    $('[data-toggle="wizard-checkbox"]').click(function(){
        if( $(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).find('[type="checkbox"]').removeAttr('checked');
        } else {
            $(this).addClass('active');
            $(this).find('[type="checkbox"]').attr('checked','true');
        }
    });

    $('.set-full-height').css('height', 'auto');

});


function formatBytes(bytes){
  if      (bytes >= 1000000000) { bytes = (bytes / 1000000000).toFixed(2) + "TB"; }
  else if (bytes >= 1000000)    { bytes = (bytes / 1000000).toFixed(2) + "GB"; }
  else if (bytes >= 1000)       { bytes = (bytes / 1000).toFixed(2) + "MB"; }
  else if (bytes > 1)           { bytes = bytes + "KB"; }
  else if (bytes == 1)          { bytes = bytes + "KB"; }
  else                          { bytes = "0 bytes"; }
  return bytes.replace('.',',');
}

 //Function to show image before upload

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$(window).resize(function(){
    $('.wizard-card').each(function(){
        $wizard = $(this);
        index = $wizard.bootstrapWizard('currentIndex');
        refreshAnimation($wizard, index);

        $('.moving-tab').css({
            'transition': 'transform 0s'
        });
    });
});

function refreshAnimation($wizard, index){
    total_steps = $wizard.find('li').length;
    move_distance = $wizard.width() / total_steps;
    step_width = move_distance;
    move_distance *= index;

    $current = index + 1;

    if($current == 1){
        move_distance -= 8;
    } else if($current == total_steps){
        move_distance += 8;
    }

    $wizard.find('.moving-tab').css('width', step_width);
    $('.moving-tab').css({
        'transform':'translate3d(' + move_distance + 'px, 0, 0)',
        'transition': 'all 0.5s cubic-bezier(0.29, 1.42, 0.79, 1)'

    });
}

materialDesign = {

    checkScrollForTransparentNavbar: debounce(function() {
                if($(document).scrollTop() > 260 ) {
                    if(transparent) {
                        transparent = false;
                        $('.navbar-color-on-scroll').removeClass('navbar-transparent');
                    }
                } else {
                    if( !transparent ) {
                        transparent = true;
                        $('.navbar-color-on-scroll').addClass('navbar-transparent');
                    }
                }
        }, 17)

}

function debounce(func, wait, immediate) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		clearTimeout(timeout);
		timeout = setTimeout(function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		}, wait);
		if (immediate && !timeout) func.apply(context, args);
	};
};

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-46172202-1', 'auto');
ga('send', 'pageview');
