<?php 
//Inicio do Dashbord, e declaração das variáveis 

//Variáveis dos menus que serão passadas por referencia assim evita alteração em varios pontos do sistema
// O Get será passado por referência

$pag = @$_GET["pag"];
$menu1 = "Recepcionista";
$menu2 = "Mecanico";
$menu3 = "menu3";
$menu4 = "menu4";
$menu5 = "menu5";
$menu6 = "menu6";
$menu7 = "menu7";
$menu8 = "menu8";
$menu9 = "menu9";
$menu10 = "menu10";

?> <!--Final das declarações de variáveis  -->

<!DOCTYPE html>
 <html lang="pt-br">
<!--Acima está inserindo a linguagem utilizada para a pagina -->

<head> <!--Inicio do Cabeçalho da pagina-->
 	
<meta charset="utf-8"> <!--Setando que a pagina vai utilizar caracteres especiais e a linguagem em portugues Brasil-->
 <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--Setando para a pagina ser compativél com o IE e o Edge-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="">
<meta name="author" content="Luiz Roberto"> <!--Define o nome do autor da pagina -->

<title>Painel Administrativo </title> <!--Aqui define o titulo que vai aparecer na aba do navegador -->

 <!-- Fontes personalizadas para este modelo-->

 <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Estilos personalizados para este modelo-->
<link href="../css/sb-admin-2.min.css" rel="stylesheet">
 <link href="../css/style.css" rel="stylesheet">      
<link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
 <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        
<link rel="shortcut icon" href="../img/Emp/logo-favicon.ico" type="image/x-icon">
 <link rel="icon" href="../img/Emp/logo-favicon.ico" type="image/x-icon">

</head> <!--Final do Cabeçalho da pagina-->

<body id="page-top"> <!--Inico do corpo da pagina identifica o topo da pagina-->

<div id="wrapper"> <!--  Page Wrapper = Emburlhar pagina -->

<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar"> <!-- Sidbar = Barra Lateral, Accordion = Acordeoin/ inicio do efeito acordeon e marca o menu lateral com a cor de fundo verde-->
 <a class="sidebar-brand d-flex align-items-center justify-content-center" href="testeMenu.php"> <!--Brand  = Marca/ Inicia a marcação da barra lateral e insere o nome da pagina-->
   <div class="sidebar-brand-text mx-3"> Administrador </div> <!--Insere o texto Administrador no menu que indica qual é o painel que está acessando -->
</a> <!--Final da marcação da pagina -->
 

<!-- Inicio codígo para o  primeiro menu --> 
<hr class="sidebar-divider my-0"> <!--Divider = Divisor, insere uma linha que vai dividir o cabeçalho do menu-->
 <hr class="sidebar-divider"> <!--Inseri um divisor no menu-->
  <div class="sidebar-heading"> <b><i><h6> Cadastro Geral </i></b></h6> </div> <!--Heading = Cabeçalho,  vai inserir um cabeçalho no menu, h6 = tamanho da fonte-->
   <li class="nav-item"> <!--Nav-Item = Itens de navegação aqui inicia o nemu de navegação 01 -->
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <!--Nav link collapesd = linke de navegação recolhido, Inicio do linke de navegação-->
     <i class="fas fa-users"></i> <!--Inseri um icone do site https://fontawesome.com/, que vai representar os usuarios quando o menu estive recolhido-->
      <span> Cadastro Funcionários </span> <!-- Span = Período, Aqui insere o texto na linha do menu -->
       </a> <!--Final do linke de navegação -->
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <!--aria label leadby = Etiqueta de aréa liberada, Inicio da aréa liberada -->
        <div class="bg-white py-2 collapse-inner rounded"> <!--Inicio da definição do fundo do menu para branco-->
        <h6 class="collapse-header"> Funcionários: </h6> <!-- collapsed header = Cabeçalho recolhido, indica o que vai aparecer no subcabeçalho do menu -->
        <a class="collapse-item" href="index.php?pag=<?php echo $menu1 ?>"> Recepcionistas </a> <!-- Item do menu recolhido que tem referencia a recepcionista -->
        <a class="collapse-item" href="index.php?pag=<?php echo $menu2 ?>"> Mecânicos </a> <!-- Item do menu que tem referencia ao mecânico -->
       <!--Comando para criar itens do menu com separação por cabeçalho  -->
      <div class="bg-white py-2 collapse-inner rounded"> <!--Inicio da definição do fundo do menu para branco-->
     <h6 class="collapse-header">Cadastro de Clientes:</h6> <!-- collapsed header = Cabeçalho recolhido, indica o que vai aparecer no subcabeçalho do menu -->
    <a class="collapse-item" href="index.php?pag=<?php echo $menu1 ?>"> Pessoa Fisíca </a> <!-- Item do menu que tem referencia a Pessoa Fisica -->
   <a class="collapse-item" href="index.php?pag=<?php echo $menu2 ?>"> Pessoa Jurídica </a> <!-- Item do menu que tem referencia a Pessoa Juridica -->
  </div> <!-- Final da definição do fundo do menu branco -->
 </div> <!-- Final da Aréa liberada para etiqueta -->
</li> <!-- Aqui termina o item de navegação 01 -->


<!-- Inicio codígo para o segundo menu --> 
<hr class="sidebar-divider my-0"> <!--Divider = Divisor, insere uma linha que vai dividir os menus 02 -->
 <li class="nav-item"> <!--Inicio dos itens de navegação 02 -->
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTree" aria-expanded="true" aria-controls="collapseTree"> 
  <!-- collapsed utilities = Utilitarios recolhiddos -->
   <i class="fas fa-home"></i> <!-- Inseri um icone no menu 02-->
    <span>Menu 02</span> <!--Spam = Período, aqui vai inserir o texto na linha do menu-->
     </a> <!--Final do utilitarios recolhidos -->
      <div id="collapseTree" class="collapse" aria-labelledby="headingTree" data-parent="#accordionSidebar"><!--Inicia o menu sidebar 02 -->
      <div class="bg-white py-2 collapse-inner rounded"><!-- Collapse inner rounded = Desmoronando interiro arrendondado Inicio -->
     <h6 class="collapse-header"> Item 00 </h6>  
    <a class="collapse-item" href="testeMenu.php?pag=<?php echo $menu3 ?>">Menu 03 </a> <!--Item do menu 02 -->
    <a class="collapse-item" href="testeMenu.php?pag=<?php echo $menu4 ?>"> Menu 04 </a><!--Item do menu 03 -->
   </div><!--Final arredondado-->
  </div><!--Final do menu Sidebar 02 -->
 </li><!--Final dos itens de navegação 02 -->
<hr class="sidebar-divider"> <!--Separado do menu 02-->


<!--Inicio codígo par o terceiro menu -->
<hr class="sidebar-divider my-0"> <!--Divider = Divisor, insere uma linha que vai dividir os menus 03 -->
 <li class="nav-item"> <!-- Inicio 03 -->
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFor" aria-expamded="true" aria-controls="collapseFor"> <!-- Inico 03 -->
   <i class="fa fa-linode" aria-hidden="true"></i> 
    <span> Menu 03 </span>
     </a> <!-- Final 03 -->
      <div id="collapseFor" class="collapse" aria-labelledby="headingFor" data-parent="#accordionSidebar"> <!-- Inicio 03 -->
       <div class="bg-white py-2 collapse-inner rounded"> <!-- Inicio 03 -->
       <h6 class="collapse-header"> Menu 03.1 </h6>
      <a class="collapse-item" href="testeMenu.php?pag=<?php echo $menu6 ?>"> Menu 6 </a>
     <a class="collapse-item" href="testeMenu.php?pag=<?php echo $menu7 ?>"> Menu7 </a> 
    </div> <!-- Final 03 -->
   </div> <!-- Final 03 -->
  </li> <!--Final 03 -->
 <!--Final do terceiro Menu -->
<hr class="sidebar-divider"> <!--Divisor de menu-->


<!-- Inicio codígo para o quarto menu -->
<hr class="sidebar-divider my-0"> <!--Divider = Divisor, insere uma linha que vai dividir os menus 04 -->
 <li class="nav-item"> <!-- Inicio 04 -->
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expamded="true" aria-controls="collapseFive">
   <i class="fa fa-envelope-open" aria-hidden="true"></i>
    <span> Menu 04 </span>  
     </a> 
      <div id="collapseFive" class="collapse" aria-labelleadby="headingFive" data-parente="#accordionSidebar"> <!-- Inicio 04 -->
      <div class="bg-white py-2 collapse-inner rounded"> <!-- Inicio 04 -->
     <h6 class="collapse-header"> Menu 04.1 </h6>
    <a class="collapse-item" href="testeMenu.php?pag=<?php echo $menu8 ?>"> Menu 08 </a>  
   <a class="collapse-item" href="testeMenu.php?pag=<?php echo $menu9 ?>"> Menu 09 </a> 
  </div> <!-- Final 04 -->
 </div> <!-- Final 04 -->
</li> <!-- Final 04  -->
<!-- Final do quarto menu  -->


<hr class="sidebar-divider d-none d-md-block"> <!-- -->


</div> <!--Final do wrapper-->
</ul> <!--Final do efeito acordeon do menu -->

</body> <!-- Final do corpo da pagina-->