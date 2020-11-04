<?php
session_start();

?>

    <!DOCTYPE html>

    <head>
        <title>Bookmark</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="bg container">

            <form action="action.php" method="POST">
                <h1 style = "margin-left: 2in;">Bookmark</h1>
                <h3>Title</h3>
                <input name="bookmark" type=" text" id="bookmark">
                <br>
                <h3>URL</h3>
                <input name="url" type="text" id="url">
                <br>
                <button class="btn" name="save" type="submit">Add Bookmark</button>
            </form>

            <!-- <form action="">
                <button class="btn-clear">Clear</button>
            </form> -->
            <table>
                <tr class="tableheader">
                    <th>TITLE</th>
                    <th>URL</th>
                    <th>CLEAR</th>
                </tr>

                <?php 
                foreach ($_SESSION['bookmarks'] as $info){   
                ?> 

                    <tr>
                        <td><?php echo ($info['bmark'])?></td>
                        <td>
                            <a href="<?php echo ($info['link']) ?>"><?php echo ($info['link']) ?></a>
                        </td>
                        <td class="center">
                            <form action="action.php" method="POST">
                                <input type="hidden" name = "index" value="<?php  echo array_search($info, $_SESSION['bookmarks']); ?>">
                                <button type ="submit" class="close" name="delete">X</button>
                            </form>
                        </td>
                    </tr>

                    <?php }?>

            </table>

        </div>
    </body>

    </html>