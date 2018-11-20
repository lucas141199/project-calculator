<?php
/*
Plugin Name: Segundo plugin
Description: Meu primeiro plugin se consiste em colocar um slider na home do site
Author: Lucas Vinicius Salvador Lopes.
*/

function relacionados_function( $atts ){
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>teste</title>
		<META http-equiv=Content-Type content="text/html; charset=windows-1252">
		<SCRIPT language=javascript><!--
var username = "dmoreira";
var cat = "3408";
// --></SCRIPT>
<SCRIPT language=javascript src="Calculator_arquivos/banner_popup_js.htm" 
type=text/javascript></SCRIPT>
<!-- hpG end -->
<SCRIPT language=javascript>

var computed = false;
var memory = 0;
var	bin = 0;

function addChar(input, character)
{
	if (computed) reset();
	if (input.value == null || input.value == '0') input.value = character;
	else
	{
	input.value += character;
	computed = false;
	}
}

function reset()
{
	document.f.display.value=0;
	document.f.stack.value=0;
	computed = false;
}

function swipe()
{
	document.f.stack.value=0;
	computed=true;
}

function wipe()
{
	document.f.display.value='';
	computed=false;
}

function newSlate()
{
	reset();
	memory=0;
	bin=0;
}

function deleteChar(input)
{
	input.value = input.value.substring(0, input.value.length - 1);
	computed = false;
}

function changeSign(input)
{
	if(input.value.substring(0, 1) == '-')
	input.value = input.value.substring(1, input.value.length);
  else
  input.value = '-' + input.value;
	computed = false;
}

function testFirst()
{
	var a = (document.f.stack.value.substring(0,1));
	if (a == '-' || a == '.' || a == '0'  || a== '1' || a == '2' || a =='3' || a == '4' || a == '5' || a == '6' || a == '7' || a == '8' || a == '9')
	testLast()
	else
	alert('Error...\n\nEnter Number First!');
	computed = true;
}

function testLast()
{
	var b = (document.f.stack.value.substring(document.f.stack.value.length,document.f.stack.value.length-1))
	if (b == '0' || b == '1' || b == '2' || b =='3' || b == '4' || b == '5' || b == '6' || b == '7' || b == '8' || b == '9')
	goOperation()
	else
	alert('Error...\n\nEntry Incomplete!');
	computed = true;
}

function goOperation()
{
	document.f.display.value=eval(document.f.stack.value) * 100.00 /100.00;
	computed = true;
}

function cos()
{
	document.f.display.value=Math.cos(document.f.display.value);
	swipe();
	computed=true;
}

function acos()
{
	document.f.display.value=Math.acos(document.f.display.value);
	swipe();
	computed=true;
}

function sin()
{
	document.f.display.value=Math.sin(document.f.display.value);
	swipe();
	computed=true;
}

function asin()
{
	document.f.display.value=Math.asin(document.f.display.value);
	swipe();
	computed=true;
}

function tan()
{
	document.f.display.value=Math.tan(document.f.display.value);
	swipe();
	computed=true;
}

function atan()
{
	document.f.display.value=Math.atan(document.f.display.value);
	swipe();
	computed=true;
}

function log()
{
	document.f.display.value=Math.log(document.f.display.value);
	swipe();
	computed=true;
}

function exp()
{
	document.f.display.value=Math.exp(document.f.display.value);	
	swipe();
	computed=true;
}

function sqrt()
{
	document.f.display.value=Math.sqrt(document.f.display.value);
	swipe();
	computed=true;
}

function abs()
{
	document.f.display.value=Math.abs(document.f.display.value);
	swipe();
	computed=true;
}

function square()
{
	document.f.display.value=Math.pow((document.f.display.value), 2);
	swipe();
	computed=true;
}

function cube()
{
	document.f.display.value=Math.pow((document.f.display.value), 3);
	swipe();
	computed=true;
}

function perCent()
{
	addChar(document.f.stack,'/100');
	wipe();
	computed=false;
}

function round()
{
	document.f.display.value=Math.round(document.f.display.value);
	swipe(this.form);
	computed=true;
}

random.m=714025; random.a=4096; random.c=150889;
random.seed= (new Date()).getTime()%random.m;

function random()
{
	random.seed = (random.seed*random.a + random.c) % random.m;
	mikesnum=(random.seed/random.m);
	computed=true;
}

function mem(c)
{
	if (c == 1)
	{
		memory =(document.f.display.value * 1);
		document.f.display.value='';
		swipe(this.form);
		computed = false;
	}
	
	if (c == -1)
	{
		document.f.display.value = memory ;
		document.f.stack.value = document.f.display.value;
		computed = false;
	}
	
	if (c == 0)
	{
		document.f.display.value = 0;
		document.f.stack.value=0; memory = 0;
		computed = false;
	}
	
	if (c == 2)
	{
		bin = (document.f.display.value * 1);
		document.f.display.value='';
		swipe(this.form);
		computed = false;
	}
	
	if (c == -2)
	{
		document.f.display.value = bin ;
		document.f.stack.value = document.f.display.value; bin = 0;
		computed = false;
	}
	
	if (c == 3)
	{
		document.f.display.value = 0; 	
		document.f.stack.value=0;
		bin = 0;
		computed = false;
	}
}	

function onlyTwo()
{
	document.f.display.value=(document.f.display.value * 100);
	document.f.display.value=Math.round(document.f.display.value)/100;
	swipe();
	computed=true;
}

function helpFile()
{
  var content="AJUDA     \n\n"+
              "< - >     Arredonda o n° para cima ou para baixo\n"+
              "<00>    Arredonda para cima ou para baixo em duas casas decimais\n"+
              "Num     Gera um n° randômico não-criptografado\n"+
              "M+        Adiciona uma única entrada da memória\n"+
              "MR       Lembra o primeiro item gravado na memória\n"+
              "MC       Limpa o primeiro item da memória\n"+
              "M2+      Adiciona uma outra única entrada da memória\n"+
              "M2R     Lembra o segundo item gravado na memória\n"+
              "M2C     Limpa o segundo item da memória\n"+
              "C          Limpa tudo, exceto as memórias 1 e 2\n"+
              "Clear    Reseta tudo para zero\n"+
              "+-         Inverte o valor atual para negativo/positivo       \n"+
              "<-         Deleta o último valor escolhido\n"+
              "X2        Retorna o quadrado perfeito do valor atual\n"+
              "X3        Retorna o cubo perfeito do valor atual \n"+
              "%          Divide o valor atual por 1000 para obter porcentagem\n"+
              "Sqrt      Retorna a raiz quadrada do n° mostrado\n\n"+
              "E1/2 Pi Ln2 Ln10    Retorna as propriedades matemáticas\n\n"+
              "Log Abs Atan Tan\n"+
              "Acos Cos Asen Sen   Retorna o cálculo matemático do valor atual"
              
  alert(content);
}


//-- END -->

</SCRIPT>
<META content="Microsoft FrontPage 5.0" name=GENERATOR>
	</head>
	<body text=#ffffff bgColor=#FFFFFF onload=reset();>
	<CENTER>
<P><br>
<br>
<br>
&nbsp; 
<FORM name=f>
<TABLE cellSpacing=0 cellPadding=2 width=400 bgColor=#FFFFFF border=5 style="border-collapse: collapse" bordercolor="#000000">
  <TBODY>
  <TR>
    <TD align=right bgColor=#c0c0c0 colSpan=7><INPUT size=50 value=0 
      name=display> <INPUT type=hidden value=0 name=stack> </TD></TR>
  <TR>
    <TD 
    bgColor=#99FFCC><INPUT onclick=helpFile(); type=button value=" Help "></TD>
    <TD bgColor=#99FFCC><INPUT onclick=random()+addChar(display,mikesnum)+addChar(stack,mikesnum); type=button value=" Num "></TD>
    <TD 
    bgColor=#99FFCC><INPUT onclick=onlyTwo(); type=button value=" <00> "></TD>
    <TD bgColor=#99FFCC><INPUT onclick=round(); type=button value=" <-> "></TD>
    <TD bgColor=#FF99FF><INPUT onclick=mem(2); type=button value=" M2+ "></TD>
    <TD bgColor=#FF99FF><INPUT onclick=mem(-2); type=button value="M2R "></TD>
    <TD bgColor=#FF99FF><INPUT onclick=mem(3); type=button value=" M2C"></TD></TR>
  <TR>
    <TD 
    bgColor=#99FFCC><INPUT onclick=newSlate(); type=button value=" Clear"></TD>
    <TD bgColor=#99FFCC><INPUT onclick=addChar(display.value)+cube(); type=button value="   x ³  "></TD>
    <TD bgColor=#99FFCC><INPUT onclick=addChar(display.value)+square(); type=button value="   x ²  "></TD>
    <TD 
bgColor=#99FFCC><INPUT onclick=perCent(); type=button value="  %  "></TD>
    <TD bgColor=#FF99FF><INPUT onclick=mem(1); type=button value="  M+  "></TD>
    <TD bgColor=#FF99FF><INPUT onclick=mem(-1); type=button value=" MR  "></TD>
    <TD 
bgColor=#FF99FF><INPUT onclick=mem(0); type=button value=" MC  "></TD></TR>
  <TR>
    <TD bgColor=#99FFCC><INPUT onclick=wipe()+addChar(display,Math.E)+addChar(stack,Math.E); type=button value="    E     "></TD>
    <TD bgColor=#99FFCC><INPUT onclick=addChar(display.value)+exp(); type=button value="  Exp  "></TD>
    <TD bgColor=#99FFCC><INPUT onclick=addChar(stack)+sqrt(); type=button value=" Sqrt  "></TD>
    <TD bgColor=#99FFCC><INPUT onclick="addChar(stack,'/')+wipe()+addChar(display,'/');" type=button value=" ÷  "></TD>
    <TD bgColor=#FFFF99><INPUT onclick="addChar(display,'7')+addChar(stack,'7');" type=button value="    7    "></TD>
    <TD bgColor=#FFFF99><INPUT onclick="addChar(display,'8')+addChar(stack,'8');" type=button value="    8    "></TD>
    <TD bgColor=#FFFF99><INPUT onclick="addChar(display,'9')+addChar(stack,'9');" type=button value="    9    "></TD></TR>
  <TR>
    <TD bgColor=#99FFCC><INPUT onclick=wipe()+addChar(display,Math.SQRT1_2)+addChar(stack,Math.SQRT1_2); type=button value=Sqrt½></TD>
    <TD bgColor=#99FFCC><INPUT onclick=addChar(display.value)+log(); type=button value="  Log "></TD>
    <TD bgColor=#99FFCC><INPUT onclick=addChar(display.value)+abs(); type=button value="  Abs "></TD>
    <TD bgColor=#99FFCC><INPUT onclick="addChar(stack,'*')+wipe()+addChar(display,'*');" type=button value="  × "></TD>
    <TD bgColor=#FFFF99><INPUT onclick="addChar(display,'4')+addChar(stack,'4');" type=button value="    4    "></TD>
    <TD bgColor=#FFFF99><INPUT onclick="addChar(display,'5')+addChar(stack,'5');" type=button value="    5    "></TD>
    <TD bgColor=#FFFF99><INPUT onclick="addChar(display,'6')+addChar(stack,'6');" type=button value="    6    "></TD></TR>
  <TR>
    <TD bgColor=#99FFCC><INPUT onclick=wipe()+addChar(display,Math.LN2)+addChar(stack,Math.LN2); type=button value="  Ln2   "></TD>
    <TD bgColor=#99FFCC><INPUT onclick=addChar(display.value)+atan(); type=button value=ATan></TD>
    <TD bgColor=#99FFCC><INPUT onclick=addChar(display.value)+tan(); type=button value="  Tan "></TD>
    <TD bgColor=#99FFCC><INPUT onclick="addChar(stack,'-')+wipe()+addChar(display,'-');" type=button value="    -   "></TD>
    <TD bgColor=#FFFF99><INPUT onclick="addChar(display,'1')+addChar(stack,'1');" type=button value="    1    "></TD>
    <TD bgColor=#FFFF99><INPUT onclick="addChar(display,'2')+addChar(stack,'2');" type=button value="    2    "></TD>
    <TD bgColor=#FFFF99><INPUT onclick="addChar(display,'3')+addChar(stack,'3');" type=button value="    3    "></TD></TR>
  <TR>
    <TD bgColor=#99FFCC><INPUT onclick=wipe()+addChar(display,Math.LN10)+addChar(stack,Math.LN10); type=button value=" Ln10 "></TD>
    <TD bgColor=#99FFCC><INPUT onclick=addChar(display.value)+acos(); type=button value=ACos></TD>
    <TD bgColor=#99FFCC><INPUT onclick=addChar(display.value)+cos(); type=button value="  Cos "></TD>
    <TD bgColor=#99FFCC><INPUT onclick="addChar(stack,'+')+wipe()+addChar(display,'+');" type=button value="   +   "></TD>
    <TD bgColor=#FFFF99><INPUT onclick=changeSign(display)+changeSign(stack); type=button value="  ±  "></TD>
    <TD bgColor=#FFFF99><INPUT onclick="addChar(display,'.')+addChar(stack,'.');" type=button value="     .    "></TD>
    <TD bgColor=#FFFF99><INPUT onclick="addChar(display,'0')+addChar(stack,'0');" type=button value="    0    "></TD></TR>
  <TR>
    <TD bgColor=#99FFCC><INPUT onclick=wipe()+addChar(display,Math.PI)+addChar(stack,Math.PI); type=button value="    Pi    "></TD>
    <TD bgColor=#99FFCC><INPUT onclick=addChar(display.value)+asin(); type=button value=" ASen"></TD>
    <TD bgColor=#99FFCC><INPUT onclick=addChar(display.value)+sin()+swipe(); type=button value=Seno></TD>
    <TD bgColor=#99FFCC><INPUT onclick=deleteChar(display)+deleteChar(stack); type=button value="   <-  "></TD>
    <TD bgColor=#FFFF99 colSpan=2><INPUT onclick=testFirst()+swipe(); type=button value="          =          "></TD>
    <TD 
    bgColor=#FFFF99><INPUT onclick=reset(); type=button value="    C   "></TD></TR></TBODY></TABLE></FORM></CENTER>

<CENTER>&nbsp;</CENTER>
	</body>
	</html>
<?php
}
add_shortcode( 'relacionados', 'relacionados_function');
?>

