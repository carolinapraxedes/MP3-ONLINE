<h1>Album</h1>
<a href="?page=newAlbum" class="btn btn-success">Adicionar novo album</a>
<hr>
<div class="row">
    <?php
        $albums = getAlbums();
        
        //for($i=1;$i<=8;$i++):
        foreach($albums as $album):
            $infoAlbum = explode('/',$album);
            $nameAlbum = $infoAlbum[1];
            $imgAlbum = "{$album}/{$nameAlbum}.png";
    ?>
    <div class="col-3 album">
        <a href="?page=musics&album=<?=$nameAlbum?>">
            <img src="<?=$imgAlbum?>" alt="<?=$nameAlbum?>" class="img-album">
            <h4><?=$nameAlbum?></h4>
        </a>
        
    </div>
    <?php
        endforeach;
    ?>



</div>