<?php
include 'connection.php';
$query=mysqli_query($con,"SELECT * FROM `jucatori`");
$jucatori=mysqli_num_rows($query);

$query=mysqli_query($con,"SELECT * FROM `proprietati` WHERE `TIP`='1'");
$case=mysqli_num_rows($query);

$query=mysqli_query($con,"SELECT * FROM `proprietati` WHERE `TIP`='2'");
$afaceri=mysqli_num_rows($query);
?>
<html>
<head>
<title>Valyrian Roleplay</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="animate.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="http://ro.allfont.net/allfont.css?fonts=alba-matter" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
(function( $ ) {

    //Function to animate slider captions 
    function doAnimations( elems ) {
        //Cache the animationend event in a variable
        var animEndEv = 'webkitAnimationEnd animationend';
        
        elems.each(function () {
            var $this = $(this),
                $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
            });
        });
    }
    
    //Variables on page load 
    var $myCarousel = $('#carousel-example-generic'),
        $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
        
    //Initialize carousel 
    $myCarousel.carousel();
    
    //Animate captions in first slide on page load 
    doAnimations($firstAnimatingElems);
    
    //Pause carousel  
    $myCarousel.carousel('pause');
    
    
    //Other slides to be animated on carousel slide event 
    $myCarousel.on('slide.bs.carousel', function (e) {
        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
        doAnimations($animatingElems);
    });  
    
})(jQuery);

$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 8000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});


</script>
</head>
<body>
<div class="wrapper container-fluid">
<div class="row no-gutter">
<div class="col-sm-12">
	<div class="bara">
		<div class="logo pull-left"><a href="http://valyrian.ro" class="logoa">Valyrian Roleplay</a></div>
		
		<div class="pull-right link">
			<a href="http://valyrian.ro/forum" class="logob">Forum</a>
			<a href="http://valyrian.ro/ucp" class="logob">UCP</a>
			<a target="target=_blank" href="http://valyrian.ro/banlist.php" class="logob">Ban List</a>
		</div>
		
	</div>
</div>
</div>
</div>

<div class="wrapper container-fluid">
	<div class="row no-gutter">
	<div class="col-sm-12">

		<div id="carousel-example-generic" class="carousel slide"  data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<!-- First slide -->
				<div class="item active">
						<div class="pagina1textlogo" data-animation="animated bounceInDown">
							Valyrian Roleplay
						</div>
						<div class="pagina1text" data-animation="animated bounceInRight">
							Bine ai venit pe serverul Valyrian Roleplay. &#206n continuare &#238&#355i vom prezenta informa&#355iile comunit&#259&#355ii.
						</div>
					<img src="1.png" width="100%" class="peopleCarouselImg">
				</div> <!-- /.item -->
				
				<!-- Second slide -->
				<div class="item">
					<div class="pagina1textlogo" data-animation="animated fadeInRight">
							De ce noi?
						</div>
						<div class="pagina1text" data-animation="animated flipInY">
							Pentru c&#259 suntem singurul server cu actualiz&#259ri zilnice.
						</div>
					<img src="2.png" width="100%" class="peopleCarouselImg">
				</div><!-- /.item -->
				
				<!-- Third slide -->
				<div class="item">
						<div class="pagina1textlogo" data-animation="animated lightSpeedIn">
							&#206nc&#259 nu e&#351ti convins?
						</div>
						<div class="pagina1text" data-animation="animated rotateInUpLeft">
							Atunci o s&#259 &#238&#355i prezent&#259m c&#226teva din sistemele noastre.
						</div>
					<img src="9.png" width="100%" class="peopleCarouselImg">
				</div><!-- /.item -->
			</div><!-- /.carousel-inner -->

		</div><!-- /.carousel -->
	</div>
	</div>
</div>
<!-- /.container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<script src="demo.js"></script>

<div class="wrapper container-fluid">
	<div class="row no-gutter">
		<div class="col-sm-12">
			<div class="cifre">
				<center>Valyrian Roleplay &#238n cifre</center>
			</div>
		</div>
	</div>
</div>

<div class="wrapper container-fluid">
	<div class="row date no-gutter">
		<div class="col-sm-4">
			<center><i class="fa fa-user-circle fa-4x" aria-hidden="true"></i></center>
			<div class="stats">
				<center><span class="count"><?php echo $jucatori; ?></span> juc&#259tori </center>
			</div>
		</div>
		<div class="col-sm-4">
		<center><i class="fa fa-home fa-4x" aria-hidden="true"></i></center>
			<div class="stats">
				<center><span class="count"><?php echo $case; ?></span> case</center>
			</div>
		</div>
		<div class="col-sm-4">
		<center><i class="fa fa-industry fa-4x" aria-hidden="true"></i></center>
			<div class="stats">
				<center><span class="count"><?php echo $afaceri; ?></span> afaceri</center>
			</div>
		</div>
		 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

		<script src="count.js"></script>
	</div>
</div>

<div class="wrapper container-fluid">
	<div class="row no-gutter">
		<div class="col-sm-12">
			<div class="cifre">
				<center>Sistemele noastre</center>
			</div>
		</div>
	</div>
</div>

<div class="wrapper container-fluid">
	<div class="row no-gutter">
		<div class="col-sm-12">
			<div class="sisteme">
					<center><b>O s&#259 iti prezentam cateva din sistemle noastre<br>Pe restul te lasam sa le descoperi pe server</b></center>
					<hr class="style14">
					<center><b><div class="titlu">Sistemul de propriet&#259&#355i</div></b></center>
					<div class="prop">
						Serverul Valyrian Roleplay dispune de un sistem unic de propriet&#259&#355i. Astfel, fiecare juc&#259tor poate avea 10 propriet&#259&#355i, care pot fi fie case, fie afaceri. Propriet&#259&#355ile beneficiaz&#259 de acela&#351i sistem de furniture cu op&#355iune de modificare a pozi&#355iei, retexturare &#351i sistem de u&#351i pe comanda /door.<br><br>
						A&#351adar, fiecare juc&#259tor poate &#238ntocmii o cerere pe forum prin care poate s&#259 &#238i fie amplasat&#259 o proprietate, &#238ntr-un anumit loc, dac&#259 mapping-ul permite acest lucru. Aceast&#259 proprietate poate fi transformat&#259 fie &#238n cas&#259, fie &#238n afacere.<br><br>
						Server-ul dispune de o gam&#259 larg&#259 de afaceri, &#238ncep&#226nd cu cele clasice, precum magazinele de &#238mbr&#259c&#259minte, magazinele generale, cluburile, barurile &#351i p&#226n&#259 la cele unice, adaptate serverelor rom&#226ne&#351ti, precum rent-a-car, centru de reclame sau centru de telefonie.<br><br>
						Propriet&#259&#355ile dispun de interioare specifice at&#226t pentru cele de tip afacere, c&#226t &#351i pentru cele de tip locuin&#355e (case/apartamente), f&#259r&#259 niciun con&#355inut (libere). Aceste interioare pot fi personalizate prin sistemul de mobil&#259 (furniture) ce permite pozi&#355ionarea a 50 de obiecte &#238ntr-o proprietate. Aceste obiecte pot fi modificate u&#351or &#238n pozi&#355ie sau &#238n dimensiuni, iar &#238n plus, sistemul pune la dispozi&#355ia juc&#259torilor amplasarea unor u&#351i mobile, ce pot fi deschise de c&#259tre proprietar prin comanda /door.
					</div>
					
			<div>
		</div>
	</div>
</div>

<div class="wrapper container-fluid">
	<div class="row no-gutter">
		<div class="col-sm-12">
			<div class="sisteme">
					<hr class="style14">
					<center><b><div class="titlu">Sistemul fac&#355iunilor oficiale</div></b></center>
					<div class="prop">
						Serverul Valyrian Roleplay dispune de un sistem pentru fac&#355iunile oficiale. Astfel, fac&#355iunile cu cel mai bun roleplay primesc accesul la fabricarea  drogurilor &#351i la producerea armamentului, plus un sistem propriu de graffiti.<br><br>
						Pe l&#226ng&#259 asta, comunitatea aduce o platform&#259 nou&#259, on-line, pentru achizi&#355ionarea de droguri &#351i de armament, platform&#259 care merge pe principiul deep-web-ului.<br><br>
						Juc&#259torii vor achizi&#355iona &#238n joc, Valcoin (echivalentul Bitcoinului) pentru un pre&#355 cuprins &#238ntre $8.000 &#351i $12.000, pre&#355 care se schimb&#259 &#238n fiecare or&#259. Aceste valcoinuri sunt afi&#351ate &#238n contul web al fiec&#259rui membru, reprezent&#226nd moneda de schimb.<br><br>
						Membrii pot plasa comenzi pe platforma online, pentru arme &#351i droguri, bunurile urm&#226nd s&#259 fie livrate &#238n termen de 7 zile maxim, &#351i ridicate &#238n joc.<br><br>
						Drogurile sunt diferen&#355iate astfel c&#259 semin&#355ele, de exemplu, sunt plantate de c&#259tre posesori,(se creeaz&#259 o planta la pozi&#355ia juc&#259torului) care trebuie culese la timp. &#206n caz contrar, juc&#259torul va primi mai pu&#355ine grame, sau tufa va disp&#259rea.<br><br>
						Plantele pot fi culese de c&#259tre oricine, astfel c&#259, pentru fac&#355iunile oficiale, este o provocare &#238n plus, de a &#238&#351i ap&#259ra drogurile.
					</div>
					
			<div>
		</div>
	</div>
</div>

<!--<div class="wrapper container-fluid">
	<div class="row no-gutter">
		<div class="col-sm-12">
			<div class="sisteme">
					<hr class="style14">
					<center><b><div class="titlu">Sistemul de proprietati</div></b></center>
					<div class="prop">
						Serverul Valyrian Roleplay dispune de un sistem unic de proprietati. Astfel fiecare jucator poate avea 10 proprietati, care pot fi fie case fie afaceri. Proprietatile beneficiaza de acelasi sistem de furniture cu optiune de modoficare a pozitiei, retexturare, si sistem de usii pe comanda /door.<br><br>
						Astfel ca fiecare player poate face o cerere pe forum, prin care doreste sa ii fie amplasata o proprietate, intr-un anumit loc, daca ii permite mappingul exterior. Aceasta proprietate poate fi transformata fie in casa, fie in afacere.<br><br>
						Serverul dispune de o gama larga de afaceri, de la cele clasice, precum magazin de haine, magazin general, club, bar dar si unele unice, pentru serverele romanesti, precum  inchiriaza o masina, centru de reclame, sau centru de telefonie.<br><br>
						Proprietatile dispun de interioare specifice pentru fiecare tip de afacere, si mai multe interioare de case, ce sunt goale la inceput. Acestea pot fi personalizate prin sistemul de mobila ce permite pozitionarea a 50 de obiecte in proprietate, ce pot fi usor modificate ca pozitie, rotatie, pot fi retexturate, iar in plus, sistemul pune la dispozitie amplasarea unor usi mobile, ce pot fi deschise de catre proprietar prin comanda /door.
					</div>
					
			<div>
		</div>
	</div>
</div>-->

<div class="wrapper container-fluid">
	<div class="row no-gutter">
	<div class="sisteme1">
			<hr class="style14">
			<center><b><div class="titlu">Galerie</div></b></center>
							<div class="col-sm-4">
                        <div class="feature-gallery">
                            <img class="thumb" src="6.png" alt="" title="">
                            <div class="fg-overlay">
                                <h2>Sistem dinamic de mobil&#259</h2>
                                <p>Mobileaz&#259-&#355i proprietatea a&#351a cum dore&#351ti</p>
                            </div>
                        </div>
                    </div>
                    <!--/feature-gallery--->

                    <div class="col-sm-4  offset-sm-4">
                        <div class="feature-gallery">
                            <img class="thumb" src="7.png" alt="" title="">
                            <div class="fg-overlay">
                                <h2>Sistem intarctiv pentru fac&#355iunile oficiale</h2>
                                <p>Achizi&#355ioneaz&#259 valcoin pentru a putea cump&#259ra produse de pe Valyrian Hidden Market</p>
                            </div>
                        </div>
                    </div>
                    <!--/feature-gallery--->

                    <div class="col-sm-4">
                        <div class="feature-gallery">
                            <img class="thumb img-responsive" src="8.png" alt="" title="">
                            <div class="fg-overlay">
                                <h2>Valyrian Silk Road</h2>
                                <p>Platform&#259 online creat&#259 de c&#259tre echipa de developeri a comunit&#259&#355ii, ce permite achizi&#355ionarea de droguri &#351i arme.</p>
                            </div>
                        </div>
                    </div>
	</div>
	</div>
</div>
<div class="wrapper container-fluid">
	<div class="row no-gutter">
		<div class="col-sm-12">
			<div class="cifre">
				<center>Sus&#355ine Valyrian Roleplay</center>
			</div>
		</div>
	</div>
</div>

<div class="wrapper container-fluid">
	<div class="row no-gutter sisteme2">
					<hr class="style14">
					<center><b><div class="titlu">Pachetele de donator</div></b></center><br><br><br>
		<div class="col-sm-4">
			<div class="panel price panel-bronze">
						<div class="panel-heading  text-center">
						<h3>PACHETUL BRONZ</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:40px"><strong>15 RON / lun&#259</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item"><i class="icon-ok text-danger"></i> O schimbare de nume pe server</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> O schimbare de nume pe forum</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> O schimbare de num&#259r de telefon</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Posibilitatea schimb&#259rii stilului de lupt&#259</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Posibilitatea bloc&#259rii canalului de mesagerie privat&#259</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Posibilitatea salv&#259rii m&#259&#351tii la p&#259r&#259sirea serverului</li>
						</ul>
						<div class="panel-footer">
							<a class="btn btn-lg btn-block btn buybronze" href="http://valyrian.ro/forum/viewtopic.php?f=33&t=129">Mai multe detalii</a>
						</div>
					</div>
		</div>
		
		<div class="col-sm-4">
			<div class="panel price panel-silver">
						<div class="panel-heading  text-center">
						<h3>PACHETUL SILVER</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:40px"><strong>25 RON / lun&#259</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Trei schimb&#259ri de nume pe server</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Trei schimb&#259ri de nume pe forum</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Trei schimb&#259ri de num&#259r de telefon</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Posibilitatea schimb&#259rii stilului de lupt&#259</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Posibilitatea bloc&#259rii canalului de mesagerie privat&#259</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Posibilitatea salv&#259rii m&#259&#351tii la p&#259r&#259sirea serverului</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Posibilitatea de a plasa dou&#259 anun&#355uri publicitare</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Ad&#259ugarea unui slot permanent pentru ma&#351ini</li>
						</ul>
						<div class="panel-footer">
							<a class="btn btn-lg btn-block btn buysilver" href="http://valyrian.ro/forum/viewtopic.php?f=33&t=129">Mai multe detalii</a>
						</div>
			</div>
		</div>
		
		<div class="col-sm-4">
			<div class="panel price panel-gold">
						<div class="panel-heading  text-center">
						<h3>PACHETUL GOLD</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:40px"><strong>40 RON / lun&#259</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Cinci schimb&#259ri de nume pe server</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Cinci schimb&#259ri de nume pe forum</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Cinci schimb&#259ri de num&#259r de telefon</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Posibilitatea schimb&#259rii stilului de lupt&#259</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Posibilitatea bloc&#259rii canalului de mesagerie privat&#259</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Posibilitatea salv&#259rii m&#259&#351tii la p&#259r&#259sirea serverului</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Posibilitatea de a plasa trei anun&#355uri publicitare</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Ad&#259ugarea a trei sloturi permanente pentru ma&#351ini</li>
						</ul>
						<div class="panel-footer">
							<a class="btn btn-lg btn-block btn buygold" href="http://valyrian.ro/forum/viewtopic.php?f=33&t=129">Mai multe detalii</a>
						</div>
					</div>
		</div>
		
			<div class="col-sm-12">
				<hr class="style14">
				<center><b><div class="titlu">Ma&#351inile de donator</div></b></center><br><br><br>
			</div>
					
		<div class="col-sm-2 col-sm-offset-1">
			<!--<center><img src="1.jpg" alt="" title="" class="pozadon">-->
			<br><b>Patriot</b> 25 RON</center>
		</div>
		
		<div class="col-sm-2">
			<!--<center><img src="2.jpg" alt="" title="" class="pozadon">-->
			<br><b>Cheetah</b> 40 RON</center>
		</div>
		
		<div class="col-sm-2">
			<!--<center><img src="3.jpg" alt="" title="" class="pozadon">-->
			<br><b>Turismo</b> 45 RON</center>
		</div>
		
		<div class="col-sm-2">
			<!--<center><img src="4.jpg" alt="" title="" class="pozadon">-->
			<br><b>Bullet</b> 40 RON</center>
		</div>
		
		<div class="col-sm-2">
			<!--<center><img src="5.jpg" alt="" title="" class="pozadon">-->
			<br><b>Infernus</b> 60 RON</center>
		</div>
	</div>
</div>

<div class="wrapper container-fluid">
	<div class="row no-gutter">
		<div class="col-sm-12">
			<div class="cifre">
				<center>Echipa de administrare</center>
			</div>
		</div>
	</div>
</div>

<div class="wrapper container-fluid">
	<div class="row no-gutter sisteme2">
		<div class="col-sm-10 col-sm-offset-1">
		<table class="w3-table-all">
		<?php
			echo "<thead>
			  <tr class=w3-black>
				<th>Nume</th>
				<th class=pull-right>Func&#355ie</th>
			  </tr>
			</thead>";
			$query=mysqli_query($con,"SELECT * FROM `jucatori` WHERE `Admin`>'0' ORDER BY `Admin` DESC");
			while($row=mysqli_fetch_assoc($query))
			{
				echo "<tr>";
				echo "<td>";
				echo $row['Nume'];
				echo " / ";
				echo $row['NumeForum'];
				echo "</td>";
				echo "<td class=pull-right>";
				if($row['Admin']==8)echo "Fondator";
				if($row['Admin']==7)echo "Administrator principal";
				if($row['Admin']==6)echo "Administrator general";
				if($row['Admin']==5)echo "Administrator coordonator";
				if($row['Admin']==4)echo "Administrator";
				if($row['Admin']==3)echo "Moderator";
				if($row['Admin']==2)echo "Asistent";
				if($row['Admin']==1)echo "Tester";
				echo "</td>";
				echo "</tr>";
			}
		?>
		  </table>
		</div>
	</div>
</div>


</body>
</html>