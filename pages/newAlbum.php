<h1>Cadastrar novo album</h1>

<form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" name="name" placeholder="Nome" class="form-control">
    </div>
    <div class="form-group">
        <input type="file" name="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>
<a href="?page=albuns" class="btn btn-primary">Voltar para os albums</a>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $album = $_POST['name'];
        $path = "albuns/{$album}";
        if(!is_dir($path)){
            mkdir($path);
        }
        $file = $_FILES['image'];
        $fileInfo = explode('.',$file['name']);


        $extension = $fileInfo[1];
        $nameImage = $_POST['name'].'.'.$extension;

        if(move_uploaded_file($file['tmp_name'], $path.'/'.$nameImage)){
            header('Location: ?page=albuns');
        }else{
            echo 'falha no upload...';
        }

        

    }
?>