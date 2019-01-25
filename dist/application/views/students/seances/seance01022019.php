<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main class="container-fluid below-menu" id="main">
	<div class="container">
		<div class="row white-box">
			<div class="col-12">
				<p class="warning">
						Tout comme on peut faire des fautes en français, on peut faire des fautes en Python !
				</p>
				<p class="example">
					mon_programme.py
				</p>
				<div class="exercice">
					<p>
						Ouvre <?= $editor; ?>.
					</p>
					<p>
						Crée un fichier <span class="file">turtle_introdution.py</span>.
					</p>
					<p>
						Tape le code suivant et exécute-le :
					</p>
					<div class="code-box">
						<pre>
import turtle as trt

trt.forward(50)
trt.right(90)
trt.backward(50)
trt.left(90)

trt.done()
						</pre>
					</div>
					<p>
						Que font les commandes <code>trt.forward</code>, <code>trt.backward</code>, <code>trt.left</code> et <code>trt.right</code> ?
					</p>
				</div>
			</div>
		</div>
	</div>
</main>
