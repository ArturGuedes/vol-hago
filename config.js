      
var nm = "";
var ea = "";
var email_verific = "";

function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  var nome = profile.getName();
  var foto = profile.getImageUrl();
  var login = profile.getEmail();

  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
  console.log('T: '+ profile.getGivenName());


  if(login != "")
  {
    { $.ajax({
     type: "get",
     url: "consulta_login.php?pagina=pesquisar_usuario",
     data: {
      consultar: "login_consulta",
      login: login
    },
    dataType: "json",
    success: function(data)
    {
     console.log("Teste "+data.login); 
     if (data.login != undefined)
     {      
            localStorage.setItem('name_log', data.nome);
            localStorage.setItem('e-mail', data.login);
            localStorage.setItem('data_nasc', data.data_nasc);
            localStorage.setItem('escolaridade', data.escolaridade);
            localStorage.setItem('endereco', data.endereco);
            localStorage.setItem('senha', data.senha);
            window.location.replace("time.php");
    }
    else
    {
      window.location.replace("cadastro.php");
                   //alert(nm+ "OIII");
                   localStorage.setItem('name', nome);
                   localStorage.setItem('e-mail', login);

                 }            
               }
             })
  }
}
else
{
  window.location.replace("cadastro.php");
 //alert(nm+ "OIII");
 localStorage.setItem('name', nome);
 localStorage.setItem('e-mail', login);
 localStorage.setItem('photo', foto);
}




}

function repassaValores()
{

  $('#qtd_filhos').hide();
  $('#lbl').hide();

  $('#nome').val(localStorage.getItem('name'));
  $('#login').val(localStorage.getItem('e-mail'));
 //   alert(localStorage.getItem('name') + "V: * ");   

 $('input[name=sim]').change(function(){
  var id = $(this).val();
//  alert(id);

$("#nao").prop('checked', false);
$('#qtd_filhos').show();
$('#lbl').show();

});

 $('input[name=nao]').change(function(){
  var id = $(this).val();
  //alert(id);

  $("#sim").prop('checked', false);
  $('#qtd_filhos').hide();
  $('#lbl').hide();

});

}


function cadastrar()
{

  var login = $("#login").val();
  var senha = $("#senha").val();
  var data_nasc = $("#data_nasc").val();
  var nome = $("#nome").val();
  var endereco = $("#endereco").val();
  var telefone = $("#telefone").val();
  var profissao = $("#profissao").val();
  var escolaridade = $("#escolaridade").val();
  var dados_medicos = $("#dados_medicos").val();
  var feedback = $("#feedback").val();


  var qtd_filhos = $("#qtd_filhos").val();
  var sexo = $("#sexo").val();
  var estado_civil = $("#estado_civil").val();


  var verifica_visible = $('#qtd_filhos').is(':visible');

  if(verifica_visible && qtd_filhos == "")
  {
    alert("Ativo");
  }

  if(login != "" && senha != "" && data_nasc != "" && nome != "" && endereco != "" && telefone != "" && profissao != "" && escolaridade != "" && feedback != "")
   { $.ajax({
     type: "post",
     url: "cadastrar.php?pagina=cadastrar_usuario",
     data: "login="+login+"&senha="+senha+"&nome="+nome+"&data_nasc="+data_nasc+"&endereco="+endereco+"&telefone="+telefone+"&profissao="+profissao+"&escolaridade="+escolaridade+"&dados_medicos="+dados_medicos+"&feedback="+feedback+"&qtd_filhos="+qtd_filhos+"&sexo="+sexo+"&estado_civil="+estado_civil,
     
     beforeSend: function()
     {
      alert("Salvando...");
    },
    success: function(data)
    {
     alert(data);  

   }
 })
}
else
{
  alert("É necessário o preenchimento de todos os campos!");
}

}



function login()
{

  var login = $('#login_logon').val();
  var senha = $('#senha_logon').val();

if(login != "" && senha != "")
{        $.ajax({
         type: "get",
         url: "consulta_login.php?pagina=pesquisar_usuario",
         data: {
          consultar: "login",
          login: login,
          senha: senha
        },
        dataType: "json",
        success: function(data)
        {
           console.log(data); 

           if(data.login == login)
           {
            alert("Bem-Vindo(a) "+data.nome);
            localStorage.setItem('name_log', data.nome);
            localStorage.setItem('e-mail', data.login);
            localStorage.setItem('data_nasc', data.data_nasc);
            localStorage.setItem('escolaridade', data.escolaridade);
            localStorage.setItem('endereco', data.endereco);
            localStorage.setItem('senha', data.senha);
            //exibir_time();
            window.location.replace("time.php");
          }
          else
          {
            alert("Login/Senha incorretos, por favor tente novamente");
          }
        }
      })
  }
  else
  {
    alert("Campos em branco");
  }
}


function exibir_time()
{

  var a = localStorage.getItem('name_log');

  document.getElementById('nome_log').innerText = a;

  gerenciamento();

  if(localStorage.getItem('name_log') == "" || localStorage.getItem('name_log') == undefined)
  {
     window.location.replace("login.php");
  }
}


function gerenciamento(a)
{
  $('#perfil').click(function(){

    window.location.replace("time.php");

  })
    
}

function onlPerfil()
{

var a = localStorage.getItem('name_log');

  document.getElementById('nome_log').innerText = a;

  gerenciamento();

  
  var nome = localStorage.getItem('name_log');
  var email = localStorage.getItem('e-mail');
  var data_nasc = localStorage.getItem('data_nasc');
  var escolaridade = localStorage.getItem('escolaridade');
  var endereco = localStorage.getItem('endereco');
  var senha = localStorage.getItem('senha');

  document.getElementById('nome_edit').innerText = nome;
  document.getElementById('data_edit').innerText = data_nasc;
  document.getElementById('escolaridade_edit').innerText = escolaridade;
  document.getElementById('endereco_edit').innerText = endereco;
  document.getElementById('senha_edit').innerText = senha;
  document.getElementById('email_edit').innerText = email;




    
}


function sair()
{
  window.location.replace("login.php");
  localStorage.removeItem('name_log');
  localStorage.removeItem('e-mail');
  localStorage.removeItem('data_nasc');
  localStorage.removeItem('escolaridade');
  localStorage.removeItem('endereco');
  localStorage.removeItem('senha');

}

