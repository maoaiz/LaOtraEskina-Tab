<?php
$url = "http://mauricioaizaga.com/LaOtraEskina/";/*Cambiar este link dependiendo del servidor en que se encuentre alojado*/
//$url="";
$titulo = "La Otra Eskina &gt; ".$musico;
$page="http://www.facebook.com/LaOtraEskinaPereira?sk=app_161408067264807";
$integrantes= array(//fotos pequeñas para seleccionar en la pestaña Integrantes
	"elider"	=> $url."img/bordes/elider.jpg",
	"daniel"	=> $url."img/bordes/daniel.jpg",
	"wilmar"	=> $url."img/bordes/wilmar.jpg",
	"gordon"	=> $url."img/bordes/gordon.jpg",
	"clavijo"	=> $url."img/bordes/pipe.jpg",
	"raul"		=> $url."img/bordes/raul.jpg",
);
$fotos= array(//fotos del menú (scrollable) de integrantes
	"elider"	=> $url."img/bordes/elider-nom.jpg",
	"daniel"	=> $url."img/bordes/daniel-nom.jpg",
	"wilmar"	=> $url."img/bordes/wilmar-nom.jpg",
	"gordon"	=> $url."img/bordes/gordon-nom.jpg",
	"clavijo"	=> $url."img/bordes/pipe-nom.jpg",
	"raul"		=> $url."img/bordes/raul-nom.jpg",
);

$videos = array(//Estos son videos alojados en YouTube, el code corresponde a la variable 'v' que se pasa como parametro cada vez que se reproduce un video en la pagina.
	array("num"=>"1","nombre"=>"Contigo","code"=>"sgoX7qhGSi8"),
	array("num"=>"2","nombre"=>"Solo y Perdido","code"=>"TSsjHQyEZzE"),
	array("num"=>"3","nombre"=>"Segundo plato","code"=>"etHDJT1UVvI"),
	array("num"=>"4","nombre"=>"Miedos","code"=>"SuXkBblg8Bk"),
	array("num"=>"5","nombre"=>"Guaskatronik 1","code"=>"noOjveouUHM")
);

$canciones = array(
	array ("num"=>"0","nombre"=>"Solo y Perdido <span style='color:yellow;font-size:10px'>Nueva</span>","album"=>"La Otra Eskina","href"=>"music/songs/La_Otra_Eskina__Solo_y_Perdido.mp3"),
	array ("num"=>"1","nombre"=>"Contigo","album"=>"La Otra Eskina","href"=>"music/songs/La_Otra_Eskina__Contigo.mp3"),
	array ("num"=>"2","nombre"=>"Miedos","album"=>"Miedos","href"=>"music/songs/La_Otra_Eskina__Miedos.mp3"),
	array ("num"=>"3","nombre"=>"La Pena","album"=>"Miedos","href"=>"music/songs/La_Otra_Eskina__La_Pena.mp3"),
	array ("num"=>"4","nombre"=>"Cancion Para Silvana","album"=>"Cancion Para Silvana","href"=>"music/songs/La_Otra_Eskina__Cancion_Para_Silvana.mp3"),
	array ("num"=>"5","nombre"=>"Guas k tronik 2","album"=>"Guas K Tronik","href"=>"music/songs/Guascatronik_2.mp3"),
	array ("num"=>"6","nombre"=>"Guas k tronik 3","album"=>"Guas K Tronik","href"=>"music/songs/Guaskatronik_3.mp3"),
	array ("num"=>"7","nombre"=>"Guas k tronik 1","album"=>"Guas K Tronik","href"=>"music/songs/Guascatronik_1.mp3"),
	array ("num"=>"8","nombre"=>"Yo lo sé","album"=>"Tan Cerca","href"=>"music/songs/La_Otra_Eskina__Yo_Lo_Se.mp3"),
	array ("num"=>"9","nombre"=>"Ay Amor","album"=>"Tan Cerca","href"=>"music/songs/La_Otra_Eskina__Ay_Amor.mp3"),
	array ("num"=>"10","nombre"=>"Miel y sal","album"=>"Tan Cerca","href"=>"music/songs/La_Otra_Eskina__Miel_y_Sal.mp3"),
	array ("num"=>"11","nombre"=>"Estas Aquí","album"=>"Tan Cerca","href"=>"music/songs/La_Otra_Eskina__Estas_Aqui.mp3"),
	array ("num"=>"12","nombre"=>"Nuestro Amanecer<!--<div style='font-size:8px;margin-top:-5px;float:left;margin-left:-85px;width:85px'>(Versión Guitarra)</div>-->","album"=>"Canción Para Silvana Bonus Track","href"=>"music/songs/La_Otra_Eskina__Nuestro_amanecer_VG.mp3")
);

$letras = array(
	array ("num"=>"0","nombre"=>"Solo y Perdido","letra"=>"Aún no está disponible!
esperala Pronto!"),
	array ("num"=>"1","nombre"=>"Contigo","letra"=>"
ANOCHE SOÑE CONTIGO
Y DORMI MEJOR
EMPAQUE EN UNA CAJITA
TODOS TUS BESOS

Y ESTA MAÑANA
CUANDO EL SOL ME DESPERTO
BUSQUE DE NUEVO EL MODO
E`CONCILIAR EL SUEÑO

Y ES QUE CONTIGO LA VIDA
SABE MEJOR
CONTIGO APRENDO A QUERER
LO QUE YO NO QUIERO

NI AUNQUE ESTE EN EL MISMO INFIERNO
ME DA CALOR
CONTIGO NUNCA ME MOJAN
LOS AGUACEROS

ME QUEDO CONTIGO AMOR
ME QUEDO CONTIGO
ME QUEDO CONTIGO
CONTIGO MI AMOR CONTIGO (BIS)

CONTIGO EL SOL NO SE ESCONDE
CUANDO SE VA
CONTIGO ENCUENTRO MIL RIOS
QUE VAN AL MAR

Y CUANDO CAIGO O NO CAIGO 
SI ESTOY CONTIGO
FUE SOLO QUE ME ACOSTE
PARA DESCANSAR.

ME QUEDO CONTIGO AMOR
ME QUEDO CONTIGO
ME QUEDO CONTIGO
CONTIGO MI AMOR CONTIGO (BIS)
	
	
	
	"),array ("num"=>"2","nombre"=>"Miedos","letra"=>"
HA PASADO ALGUN TIEMPO Y EN VANO
HE VENIDO A TU PUERTA  A TOCAR
MI CORAZON A GRITOS TE HA LLAMADO
LA RAZON NO ME DEJA ENTRAR.

ESPERANDO ENCONTRAR
UN ESPACIO PARA HABLAR
LA DISCULPA PERFECTA
O EL MOMENTO INDICADO

SI ENTENDIERAS QUE AL MIRARTE
MI TRISTEZA SE VA A MARTE
MIS SENTIDOS SE PIERDEN
LAS PALABRAS SE ESCAPAN
NO LO PUEDO EVITAR.

PORQUE YO
NO HE PODIDO VENCER ESE MIEDO
A EXPRESASR LO QUE SIENTO MUY DENTRO
DE MI CORAZON (BIS TODO)	"),

array ("num"=>"3","nombre"=>"La Pena","letra"=>"
NO QUIERO ABURRIR A NADIE CON ESTA PENA
NO QUERO QUE NADIE ME TENGA COMPASION
YO CREO QUE CADA QUIEN HACE LO QUE CONVENGA
PERO ES QUE ME ESTA MATANDO MI CORAZON
ME SERO POR FAVOR TRAIGASE UN TRAGO E`RON.

LA QUISE COMO JAMAS NUNCA QUISE A NADIE
LA QUIERO A PESAR DE QUE MUERA DE DOLOR
Y ES QUE EL AMOR QUE LE TENGO NO CABE EN MI ALMA
Y ES QUE AUN ME SUDAN LAS MANOS CON SU CALOR
TODAVIA SE ME APARECE EN CADA RINCON

TARIGO UN DOLOR TRAIGO UNA PENA
TRAIGO AGRIETAO EL CORAZON
QUE ME DESTAPEN LA BOTELLA
QUE QUIEROPERDER LA RAZON (BIS)

LA QUISE COMO JAMAS… (BIS)

TRAIGO UN DOLOR TRAIGO UNA PENA…
TU AMOR ES UN DOLOR, DOLOR QUE ME MATA.

TRAIGO UN DOLOR TRAIGO UNA PENA…
PENA QUE ME AGRIETA EL CORAZON.

TRAIGO UN DOLR TRAIGO UNA PENA…
AY, QU ELLA NO AGUANTO ESTA PENA.

TRAIGO UN DOLOR TRAIGO UNA PENA…
PA OLVIDARME DE ELLA.

QUE ME DESTAPEN LA BOTELLA…
Y BORRAR SU RECUERDO QUE ME ATORMENTA.

TRAIGO UN DOLOR TRAIGO UNA PENA…
COMO SI EL LICOR ME LIBRARA DE ELLA.

QUE ME DESTAPEN LA BOTELLA…
AMOR, AMOR, AMOR, AMOR QUE ES CONDENA.

TARIGO UN DOLOR TRAIGO UNA PENA
TRAIGO AGRIETAO EL CORAZON
QUE ME DESTAPEN LA BOTELLA
QUE QUIEROPERDER LA RAZON (BIS)	
	
	")
	,array ("num"=>"4","nombre"=>"Cancion Para Silvana","letra"=>"
CANTARE HOY MUY FUERTE
AUNQUE CASI NO PUEDA,
ESTE CUERPO CANSADO
Y LA VOZ QUE NO AFINA
EN ESTE LUGAR.

CANTARE HOY MUY FUERTE
AUNQUE CASI NO PUEDA YA,
EN UN MUNDO TAN MUDO
QUISIERA Y NO PUEDO
TAN SOLO PENSAR.

QUIERO QUE ME PROMETAS BIEN
QUE NUNCA VAS A OLVIDAR,
ESAS NOCHES ETERNAS
QUE JUNTOS HICIMOS
SIN NADA GUARDAR.

QUIERO QUE ME RECUERDES OH,
TE VOY A EXTRAÑAR MUJER,
Y SI UN DIA NO VUELVO
NO DUDES QUE SIEMPRE
TE VOY A QUERER.

DE MI PECHO HOY BROTA
LA ANGUSTIA QUE LLORA,
POR UN AMOR QUE VI
NACER Y CRECER
Y YA NUNCA VOLVER.

FUNDETE EN UN ABRAZO,
¡HUM! TE QUIERO BIEN CERCA A MI,
VEN QUE QUIERO QUE SIENTAS
QUE ESTA TRISTEZA
HA LLEGADO A SU FIN.

QUIERO QUE ME PROMETAS BIEN
QUE NUNCA VAS A OLVIDAR,
QUE UN CHIQUILLO EN TU CUERPO
POZO SU TERNURA
HASTA HACERTE SOÑAR.

Y BAJO ESTA NOCHE
YO ESPERO POR TI MUJER
Y SI UN DIA NO VUELVO
NO DUDES QUE SIEMPRE
TE VOY A QUERER.

Y SI UN DIA NO VUELVO
NO DUDES QUE SIEMPRE
TE VOY A QUERER.

	"),array ("num"=>"5","nombre"=>"Guas K Tronik 2","letra"=>"
Mijita prenda la vela pero préndela
Ligero que me agarra un animal
Me está picando muy duro
Arribita en la rodilla debe ser un alacrán

Que desespero por Dios
Que animal pa picar duro
Lo siento como una aguja
Debe ser algún vampiro que me va a chupar
La sangre o alguna maldita bruja

CORO
Prende la vela, ¿en donde esta?
Está en la mesa ya voy pa ya
Prende la vela, ¿en donde esta?
Está en la mesa ya voy pa ya

Yo necesito una negra
Que me comprenda y me dé su amor. (BIS)

Pa mi puede ser bien ñata
Bien narizona, bien cumbambona
Boqui trompona.
Que sea pati torcida o bien garetas como Leonor.

El todo es que tenga
El todo es que tenga
El todo es que tenga ella conmigo buena intención

El todo es que tenga
El todo es que tenga
El todo es que tenga bien limpiecito su corazón.


Pimpón es un muñeco
Muy grande de cartón
Se la va la carita
Con agua y con jabón

Pimpón siempre  se peina
Con peine de marfil
Se lava la carita
Se peina y hace así

Eso no es vida, no, no, no,
Eso no es vida
Si eso no es vida,
Que pasa entumida.

Es serle fiel a una mujer
Y entregarle su querer.
Cuando este cuchito
Yo lo pienso hacer.

Mambrú se fue a la guerra
Qué horror que horror que pena
Mambrú se fue a la guerra
No sé cuando vendrá

Do re mi, do re fa.
No sé cuando vendrá.

	"),array ("num"=>"6","nombre"=>"Guas K Tronik 3","letra"=>"
Yo a vos te tengo
Metida entre mis sesos
Y a tuita hora mi pensado es pa tú
Emborrachao te vivo arrecordando
Y hasta en la sopa yo veo a su mercé.


Puñalada y media me meto en la barriga
Donde me digas que tú no eres de yo
Y quizasmente me sampe la otra media
En esa presa que llaman corazón.

En una cantina la encontré,
en una cantina la perdí,
y hoy voy de cantina en cantina,
buscando a la ingrata que me abandonó.

Coro
Si no me querés, te corto la cara
con una cuchilla de esas de ajeitar,
el día de la boda
te doy puñaladas, te arranco el ombligo
y mato tu mamá.

Estoy oji hundio
En los meros huesos
Tuitico Culi seco de tanto sufrir
Y vos jarretona
Echando barriga
Durmiendo con otro
Y burlándote de yo.

Un hombre sin amor no vale nada
Aunque tenga en el bolsillo mucha plata,
Sin mujeres la vida es pendejada
Por eso es mejor meter la pata
Con una mujercita que sea más bien feíta
Porque si es muy bonita se vuelve muy ingrata.

Tres cosas hay muy buenas en la vida:
Los billetes, la mujer y el aguardiente.
Tener lo que uno quiere es muy sencillo
Pero es mejor tener uno su bizcocho.
Qué bueno es tener plata pero por toneladas,
Pa darle a las mujeres solteras y casadas.

	"),array ("num"=>"7","nombre"=>"Guas K Tronik 1","letra"=>"
MI MUJER SI ES DESCARADA
QUE BERRACA PA SI TRAGA
ELLA SACA TODO FIAO
YE EL BOBO AQUÍ ES EL QUE PAGA

ESTRENA CADA OCHO DIAS
LA MALDITA GENOVEBA
ELLA VIVE TIRANDO PERCHA
Y YO MOSTRANDO LAS…

BOBO COMO AQUÍ ESTA EL CLARO
BOBO COMO AQUÍ ESTA EL CLARO
CLARO COMO AQUÍ ESTA EL BOBO
QUE LE DA GUSTO Y LE DA DE TODO

BOBO COMO AQUÍ ESTA EL CLARO
BOBO COMO AQUÍ ESTA EL CLARO
CLARO COMO AQUÍ ESTA EL BOBO 
QUE POR MARRANO ES QUE PAGA TODO

Satanás es un Negro
Yo Lo Conozco Yo Lo Conozco
Tiene cachos y cola
Y Es más Bien sonso 
Y es más bien sonso
A veces se presenta como un
Buey, Otras como un marrano
Como un hombre, como un Gran Señor
Y le gustan las viejas
Que son muy habladoras
 Y que tienen la lengua
 Más larga Que un Guaral
 Que Quitan Honras
Que Hablan de Sus Maridos
Y Que En vez  de hacer Bien
Hacen mal

LLevátela Negrito LLevátela lucijer
Llevala hasta al injierno y hacele hasta pa' vender
LLevátela Negrito LLevátela lucijer
Llevala hasta al infierno y hacele hasta pa vender

En mi tierra todo es gloria
Cuando se canta el joropo, (bis)
Si es que vamos a bailar
El mundo parece poco...
Y vamos bailando, Y vamos cantando,
Y vamos tocando, ¡caramba!,
Que me vuelvo loco.
Sírvame un trago de a cinco,
Sírvame otro de a cincuenta,
Y sirva y sirva sin descanso,
Hasta que pierda la cuenta.
Y vamos a bailar al son de este joropo
La vida hay que gozar.

No hay guayabo que resista
Este joropo caliente,
Por eso les aconsejo
Mi compadre un aguardiente,
Felices vienen y van
Sin pensar en el dinero,
Tocando tiple y guitarra
Pa' cantar el sanjuanero… (Bis)

	"),array ("num"=>"8","nombre"=>"Yo lo sé","letra"=>"
COMO HE DE LORAR
LO QUE ALGUNA VEZ VIVI
SI LO QUE TU SIENTES HOY
DESGARRO MI CORAZON

COMO PODER EVITAR 
QUE TAMBIEN LO SUFRAS TU
NO ES MUY TARDE PARA VER
TU MERECES MUCHO MAS

NO FUE JUSTO TODO AQUELLO
QUE  VIVIMOS SIN QUERER
Y NO JUSTO QUE LO BELLO
SE NOS MUERA EN UNA AYER

YO LO SE, YO LO SE,
SI ALGUNA VEZ TUVE ESA DUDA
AL IGUAL QUE TU SOÑE.

YO LO SE, YO LO SE,
Y EN ESE MISMO CAMINO
 AL IGUAL QUE TU LLORE
ALGUNA VEZ.

NO SE VIVIR
NI TAMPOCO SE PORQUE
TANTOS CAMINOS EN LA VIDA
Y ESCOJIMOS PADECER.

PERO YA VEZ AQUÍ ESTAS
 ESPERANDO IGUAL QUE YO,
QUE SE HAGA REALIDAD UNA OPORTUNIDAD

DE SOÑAR, DE CANTAR,
HAZ SUFRIDO YO LO SE
 PERO EN MI HAY SINCERIDAD

YA NO MÁS, YA NO MÁS.
VUELVE A MI TE LO  SUPLICO 
NO TE HE DEJADO DE AMAR,
ES VERDAD.

YO LO SE, YO LO SE… (BIS)

YA LO SE
LO VIVI ALGUNA VEZ.

HE LLORADO, HE CANTADO EL PASADO
HE SUFRIDO ASI.

YA NO SE VIVIR, SI TU NO ESTAS AQUÍ.

YA NO SE VIVIR ASI, TE NECESITO JUNTO A MI.

	"),array ("num"=>"9","nombre"=>"Ay Amor","letra"=>"
HOY EL DIA SE HACE LENTO 
HOY ME MATA TU RECUERDO 
HOY TODO 
ES UNA TEMPESTAD POR DENTRO.

TODO SE ME HACE UN INFIERNO
EN VERDAD ESTOY MURIENDO
SIN TU AMOR
NO AGUANTO MAS NO MAS NO PUEDO.

AY AMOR COMO TE QUIERO 
NO TE VAYAS NO ME DEJES
ES QUE NO HAYE NADA PARA 
QUE TE SALGAS DE MI MENTE

AY AMOR QUE ESTOY MURIENDO
SIN TUS MANOS, SIN TUS BESOS,
QUIERO Y POR MAS QUE LO INTENTO,
NO ME ABRAZAN TUS RECUERDOS.

AY AMOR COMO TE QUIERO… (BIS)

HOY EL MUNDO ME DA MIEDO 
HOY LA CALLE ES UN DESIERTO
VUELVE AMOR
VUELVE QUE ESTA MI VIDA EN JUEGO

AY AMOR COMO TE QUIERO… (BIS)

	"),array ("num"=>"10","nombre"=>"Miel y Sal","letra"=>"
Y PASA EL TIEMPO COMO PASA UN HURACAN
Y SE A ACABADO CUANDO APENAS VA A EMPEZAR
Y PIENSAS Y NO HAY NADA QUE PENSAR
Y NO HAY MANERA DE QUE VUELVAS HACIA ATRÁS
SI NO LO HICISTE NO LO HARAS NUNCA, JAMAS.
EL JUEGO A COMENZADO Y NO VUELVE A COMENZAR.

DONDE ESTAS, DONDE VAS.
LOS BESOS QUE ME HAS DADO ME ATRAPARON
Y ME HAN CONDENADO
SI TE VAS, VOLVERAS.
HAY DEUDAS QUE HAS DEJADO Y LAS TIENES QUE PAGAR.

Y SUBE, SUBE COMO LAVA DE UN VOLCAN
Y BAJO, BAJO HASTA EL ABISMO DE TU MAR
QUE MAS DA SI ESTE MUNDO VA A ESTALLAR
NO, NO TE ESCAPES QUE NO HAY FORMA DE ESCAPAR
NO HAY UN LUGAR DONDE TE PUEDAS OCULTAR,
ME TENDRAS QUE BESAR, ASI TE SEPA A MIEL O A SAL… (BIS)

	"),array ("num"=>"11","nombre"=>"Estas Aquí","letra"=>"
ESTAS AQUÍ MUY DENTRO DE MI CORAZON
ESTAS AQUÍ AHONDANDO EN MI ALMA
SIN PEDIRME EXPLICACION

ESTAS AQUÍ QUERIENDOME A POQUITOS
BUSCANDO UNA RAZON 
PARA ACERCARTE UN POCO MAS A MI

ESTOY AQUÍ MUY LEJOS DE TU CORAZON
ESTOY AQUÍ BUSCANDO
 DARTE UN POQUITO MAS DE AMOR

ESTOY AQUÍ AMANDOTE HASTA MORIR 
HAYANDO UNA CANCION
 PARA ACERCARTE UN POCO MAS A MI

QUE VAS A HACER MI VIDA
CUANDO YA NO ESTE
VERAS TU CORAZON VENCIDO
BUACANDO LA MANERA DE VIVIR SIN MÍ

SI NO ENCUENTRAS LA SALIDA
PARA DECIDIR
YA NO TE SIENTAS MAS PERDIDA
QUE ESTOY MURIENDO DE VIVIR SIN TI

	"),array ("num"=>"12","nombre"=>"Nuestro Amanecer (Versión Guitarra)- Bonus Track","letra"=>"
Bonus Track - Versión Guitarra

	")
);
?>
