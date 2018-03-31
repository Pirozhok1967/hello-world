<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Киноветвь</title>

    <link href="public/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<div class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                    <span class="sr-only">Открыть навигацию</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Киноветвь</a>
            </div>
            <div class="collapse navbar-collapse" id="responsive-menu">
                <ul class="nav navbar-nav">
                    <?php if($menu_items === 0): ?>
                    <li><a href "#">Пункт 1</a></li>
                    <?php else: ?>
                    <li><a href "#"><?=$menu_items?></a></li>
                    <?php endif;?>
                    <?php 
                        $categories = array(
                            array(
                                'category_id' => 1
                                'category_title' => Подборки фильмов
                                'category_slug' => 'compilations'
                            ),
                            array(
                                'category_id' => 2
                                'category_title' => База тегов
                                'category_slug' => 'databasetags'
                            ),
                            array(
                                'category_id' => 3
                                'category_title' => Фильмы
                                'category_slug' => 'films'
                            ),
                            array(
                                'category_id' => 4
                                'category_title' => О сайте
                                'category_slug' => 'info'
                            )
                        )
                    
                    ?>
                    <?php if(count ($categories) === 0): ?>
                    <li><a href="#"><i class="qlyphicon qlyphicon-plus-sign"></i>Добавить категорию</a></li>
                    <?php else: ?>
                    
                    <?php foreach($categories as $category): ?>

                    <li><a href="/category.php?id=<?$categories[$i] ['category_id']?>"><?=$categories[$i]['category_title']?></a></li>;
                    
                    <?php endforeach; ?>
                    <?php endif ?>
                </ul>
                <form action="" class="navbar-form navbar-right hidden-sm">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="E-mail" value="">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Пароль" value="">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-sign-in"></i> ВОЙТИ
                    </button>
                </form>
            </div>
        </div>
    </div>
