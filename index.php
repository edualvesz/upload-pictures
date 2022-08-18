<?php 
    include_once 'upload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
    <body>
        <div class="container">
            <div class="wrapper">
            <?php if(!empty($statusMsg)){ ?>
                <div class="alert alert-<?php echo $status;?>"><?php echo $statusMsg?></div>
            <?php } ?>
                <div class="col-md-12">
                    <form method="post" action="" class="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Imagem</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Título</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Descrição</label>
                            <input type="text" name="description" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn-primary" name="submit" value="Fazer upload no Imgur"/>
                        </div>
                    </form>
                </div>

                <?php if(!empty($imgurData)){ ?>
                    <div class="card">
                        <img src="<?php echo $imgurData->data->link; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $imgurData->data->title; ?></h5>
                            <p class="card-text"><?php echo $imgurData->data->description; ?></p>
                            <p><b>Imgur URL:</b> <a href="<?php echo $imgurData->data->link; ?>" target="_blank"><?php echo $imgurData->data->link; ?></a></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>