$(document).ready(function(){
    $('.carrossel').slick({
      dots: true, // Adiciona indicadores de navegação
      infinite: true, // Navegação infinita
      speed: 500, // Velocidade da transição
      slidesToShow: 1, // Quantidade de slides visíveis
      slidesToScroll: 1 // Quantidade de slides a serem percorridos
    });
  });  