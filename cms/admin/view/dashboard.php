	<?php 
		session_start();
		if($_SESSION["email"]==true){
			// echo"welcome  " . $_SESSION["email"];
		}else{
			header("../index.php");
			
			exit();
		}
		
		include ("header.php");
	?>
	<title>dashboard</title>

	

	<div class="content">
		<p>
			Our second typeface consideration relates to rendering. Some fonts, replete with beautiful glyphs and exceptional kerning as they may be,<span> simply don’t render very well at small sizes.</span> You will have noticed that embedded fonts are often reserved for headings, while system fonts (such as Verdana here) are relied on for body text.<br><br>

			One of the advantages of Verdana is that it is a “well-hinted” font. Delta hinting is the provision of information within a font that <span>specifically</span> enhances the way it renders at small sizes on screen. The smaller the font, the fewer the pixels that make up individual glyphs,<span>requiring intelligent reconfiguration to keep the font legible. It’s an art that should be familiar to any Web designer</span>  who’s ever tried to make tiny icons comprehensible.<br><br>

			Hinting is a tricky and time-consuming process, and not many Web fonts are hinted comprehensively. Note the congealed upper portion of the <strong>bowl in the lowercase</strong> “b” in the otherwise impressive Crimson font, for instance. This small unfortunate glitch is distracting and slightly detracts from a comfortable reading experience. The effect is illustrated below and can be seen in context as a demo.<br><br>

			Unsatisfactory Hinting<br>
			Slightly unsatisfactory hinting for the Crimson Roman style. I love Crimson all the same.<br><br>

			The good news is that, as font embedding becomes more commonplace, font designers are increasingly taking care of rendering and are supplying ever better hinting instructions. Typekit itself has even intervened by manually re-hinting popular fonts such as Museo. Your best bet is to view on-page demonstrations of the fonts you are considering, to see how well they turn out. Save time by avoiding, sight unseen, any fonts with the words “thin” or “narrow” in their names.
		</p>
	</div>
<?php include("footer.php") ?>
