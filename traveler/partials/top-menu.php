<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="./">Traveler <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<?php foreach($menus as $menu){?>
						<li>
							<a href="<?php echo $menu['link']; ?>">
							<?php echo $menu['name']; ?>
							</a>
						</li>
						<?php } ?>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>