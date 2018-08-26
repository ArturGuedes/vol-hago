var arrayfeed_id = ["1","2","3","4","5","6","7","8","9","10","11","12"];
var arrayfeed_desc = [
"A realização do maior evento voluntario de limpeza e gestão de praias da america latina.",
"",
"3",
"4",
"5",
"A realização do maior evento voluntario de limpeza e gestão Urbana da america latina.",
"7",
"8",
"9",
"10",
"11",
"A realização do maior evento voluntario de doação de Animais da america latina."];
var arrayfeed_img =[
"PrefeituradeNiteori",
"GoTec",
"enel",
"OngCaozinhoFeliz",
"AquaRIo",
"PrefeituradeNiteori",
"JorceAcao",
"AquaRIo",
"OngCaozinhoFeliz",
"enel",
"GoTec",
"PrefeituradeNiteori"];
var arrayfeed_type = [
"Acao",
"outhers",
"outhers",
"outhers",
"outhers",
"Acao",
"outhers",
"outhers",
"outhers",
"outhers",
"outhers",
"Acao"];
var arrayfeed_title  = [
"Limpeza da Praia de Icarai.",
"A Cristina Subiu de nivel em Simpatia.",
"O Lucas Gomez Passou de nivel em Aprendizado.",
"O Athur subiu de niel em de conficaca.",
"O Pedro Subiu de nivel, e Conversacao",
"Feira de Concientizacao sobre Limpeza urbana",
"o Wendel subiu de nivel em Dedicacao",
"O João Pedro subiu de nivel em esforco",
"Marizene subiu de bonto em Solidariedade",
"A Cristina Subiu de nivel em Simpatia",
"O João Pedro subiu de nivel em esforco",
"Doação de Animais"];
var arrayfeed_times = [
"26-08-2018",
"24-08-2018",
"22-08-2018",
"20-08-2018",
"18-08-2018",
"16-08-2018",
"14-08-2018",
"12-08-2018",
"10-08-2018",
"08-08-2018",
"06-08-2018",
"04-08-2018"];
var arrayfeed_Nomes = [
"Prefeitura de Niteroi",
"Cristina",
"Lucas",
"Athur",
"Pedro",
"Prefeitura de Niteroi",
"Wendel",
"João Pedro",
"Marizene",
"Cristina",
"João Pedro",
"Prefeitura de Niteroi"];
var arrayfeed_NomeEmp = [
" Area Praiana de Niteroi, ponto de encontro pier.",
"Acompanhe a Evolucao de Cristina na Hago",
"Acompanhe a Evolucao do Lucas Gomez na Hago",
"Acompanhe a Evolucao do Arthur na Hago",
"Acompanhe a Evolucao do Pedro na Hago",
"6",
"Acompanhe a Evolucao do Wendel na Hago",
"Acompanhe a Evolucao do João Pedro na Hago",
"Acompanhe a Evolucao da Marizene na Hago",
"Acompanhe a Evolucao da Cristina na Hago",
"Acompanhe a Evolucao do João na Hago",
"12"];
var quant= 6;

ag();
  
function somarquant(){
  quant = quant +3;
  ag();
}

function ag() {
  var itens = $(".container").empty();
  var scntDiv = $('.container');
  if(quant<arrayfeed_id.length ){
    for (var i = 0 ; i <= quant -1 ; i++) {
    if(arrayfeed_type[i]!="Acao"){
    $('<div class="card">'+
      '<div class="avatar"></div>'+
      '<h3>'+arrayfeed_title[i]+'</h3>'+
      '<p>'+arrayfeed_times[i]+'<br>'+arrayfeed_NomeEmp[i]+'</p>'+
      '</div>').appendTo(scntDiv);
    }else{
      $('<div class="card big">'+
        '<img src="assets/imgs/limpeza_das_praias.jpg" alt="">'+
        '<div>'+
        '<h2>'+arrayfeed_title[i]+'</h2>'+
        '<p>'+arrayfeed_desc[i]+'</p>'+
        '<br>'+
          '<div>'+
            '<img src="assets/icons/facebook-placeholder-for-locate-places-on-maps.png" alt="">Endereço'+arrayfeed_NomeEmp[i]+
          '</div>'+
        '<br>'+
        '<div>'+
          '<img src="assets/icons/calendar-with-a-clock-time-tools.png" alt="">Data: '+arrayfeed_times[i]+
        '</div>'+
        '<br>'+
        '<div>'+
        '<img src="assets/icons/multiple-users-silhouette.png" alt="">@'+arrayfeed_img[i]+
        '</div>'+
        '</div>'+
        '</div>').appendTo(scntDiv);
    }
  }
  $('<button  onclick="somarquant()"> bbbb</button> ').appendTo(scntDiv);
  }else{
    for (var i = 0 ; i <= arrayfeed_id.length -1 ; i++) {
    if(arrayfeed_type[i]!="Acao"){
    $('<div class="card">'+
      '<div class="avatar"></div>'+
      '<p>Data:'+arrayfeed_times[i]+'<br>Nome'+arrayfeed_Nomes[i]+'</p>'+
      '</div>').appendTo(scntDiv);
    }else{
      $('<div class="card big">'+
        '<img src="assets/imgs/limpeza_das_praias.jpg" alt="">'+
        '<div>'+
        '<h2>Titulo: '+arrayfeed_title[i]+'</h2>'+
        '<p>Descrição: '+arrayfeed_desc[i]+'</p>'+
        '<br>'+
          '<div>'+
            '<img src="assets/icons/facebook-placeholder-for-locate-places-on-maps.png" alt="">Endereço'+arrayfeed_NomeEmp[i]+
          '</div>'+
        '<br>'+
        '<div>'+
          '<img src="assets/icons/calendar-with-a-clock-time-tools.png" alt="">Data: '+arrayfeed_times[i]+
        '</div>'+
        '<br>'+
        '<div>'+
        '<img src="assets/icons/multiple-users-silhouette.png" alt="">@'+arrayfeed_img[i]+
        '</div>'+
        '</div>'+
        '</div>').appendTo(scntDiv);
    }
  
  }
  $('<button onclick="somarquant()"> bbbb</button> ').appendTo(scntDiv);
  }
  
}

