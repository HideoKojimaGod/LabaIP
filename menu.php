<?php
	 class Menu
	 {
	 	static $items = ['<li class="active"><a>Start</a></li>',
							'<li class="active"><a>About</a></li>',
							'<li class="active"><a>Top List</a></li>'];
		static $reference_items = ['<li><a href="index.php?page=1">Start</a></li>',
									'<li><a href="index.php?page=2">About</a></li>',
									'<li><a href="index.php?page=3">Top List</a></li>'];

		static $begin = '<div class="container">
			<div clas="row">
				<div class="navbar navbar-inverse navbar-fixed-top">
					<div class="container">
						<div class="navbar-header">
							<a class="navbar-brand" href="index.php?page=1">Doro</a>
						</div>
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav">';
		static $end = '</ul>
					</div>
				</div>
			</div>
		</div>
		</div>';

								
	 	static public function renderMenu($num)
	 	{
	 		switch($num)
	 		{
	 			case 1:
	 				return self::$begin.self::$items[0].self::$reference_items[1].self::$reference_items[2].self::$end;
	 				break;
	 			case 2:
	 				return self::$begin.self::$reference_items[0].self::$items[1].self::$reference_items[2].self::$end;
	 				break;
	 			case 3:
	 				return self::$begin.self::$reference_items[0].self::$reference_items[1].self::$items[2].self::$end;
	 				break;
	 		}
	 	}


	 }
?>