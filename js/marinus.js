function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}


function isEmail(string) {
	return (string.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1);
}



function validateOnSubmitEnvio(){


	if ( (document.formulario.nombre.value=="") )
	{
		alert('Debe ingresar su nombre');
		return false;
	}
	if ( (document.formulario.telefono.value=="") )
		{
			alert('Debe ingresar su Telefono');
			return false;
	}
	if ( (document.formulario.mail.value=="") )
		{
			alert('Debe ingresar su Mail');
			return false;
	}
	if ( (document.formulario.rmail.value=="") )
		{
			alert('Por favor, repita su Mail');
			return false;
		}
	if (!isEmail(document.formulario.mail.value))
	{
		alert('El email ingresado no es valido');
		return false;
	}
	if ( (document.formulario.mail.value)!=(document.formulario.rmail.value) )
	{
		alert('Los mails no coinciden');
		return false;
	}
	return true;

}

function validateOnSubmitAlta(){


	if ( (document.formulario.codigo.value=="") )
	{
		alert('Debe ingresar un codigo');
		return false;
	}
	if ( (document.formulario.precio.value=="") )
		{
			alert('Debe ingresar un precio');
			return false;
	}
	if ( (document.formulario.foto.value=="") )
		{
			alert('Debe seleccionar una foto');
			return false;
	}
	if ( (document.formulario.thumb.value=="") )
		{
			alert('Debe seleccionar una foto chica');
			return false;
		}
	if ( (document.formulario.descripcion.value=="") )
		{
			alert('Debe ingresar una descripcion');
			return false;
		}
	return true;

}