   <!doctype html>
   <html lang="en">
   <head>
       <title> Listado  de Usuarios - Curso </title>
   </head>
   <body>
        <h1><?php echo e($title)?></h1>
        <ul>
            <?php foreach ($list_users as $user) :?>
                <li> <?php echo e($user) ?> </li>
            <?php endforeach; ?>
        </ul>
   </body>

   </html>
