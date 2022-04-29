<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
	<link rel="stylesheet" href="./styles/style.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
</head>
<body>
	<header>
		<a href="<?=$header['keplink']?>">
		<img src="./images/<?=$header['kepforras']?>" alt="<?=$header['kepalt']?>" width="<?=$header['xmeret']?>" height="<?=$header['ymeret']?>">
		</a>
		<h1><?= $header['cim'] ?></h1>
		<?php if (isset($header['motto'])) { ?><h2><?= $header['motto'] ?></h2><?php } ?>
		<?php if(isset($_SESSION['login'])) { ?>Bejelentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } ?>
	</header>
    <div id="wrapper">
        <aside id="nav">
            <nav class="navbar navbar-expand-sm">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
    			</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav">
					<?php foreach ($pages as $url => $page) { 
						 if(! isset($_SESSION['login']) && $page['menun'][0] || isset($_SESSION['login']) && $page['menun'][1]) { ?>
						 
							<li class="nav-item">
							<a class="nav-link" href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
							<?= $page['szoveg'] ?></a>
							</li>
						<?php } ?>
					<?php } ?>
                </ul>
            </nav>
        </aside>
        <div id="content">
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        </div>
    </div>

	<footer>
        <?php if(isset($footer['copyright'])) { ?>&copy;&nbsp;<?= $footer['copyright'] ?> <?php } ?>
		&nbsp;
        <?php if(isset($footer['ceg'])) { ?><?= $footer['ceg']; ?><?php } ?>
    </footer>

</body>
</html>
