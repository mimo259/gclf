<?ph

        $id = $_GET["id"];
          $base = mysql_connect ('localhost', 'root', 'webforce3');
			mysql_select_db ('gestion des filmes', $base) ;
          $sql = "SELECT * FROM categorie WHERE cat_id = $id");

         $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());




          ?>
<!DOCTYPE HTML>
    <html>
    <head>
    <title>Form Edit Data</title>
    </head>

    <body>
    <table border=1>
          <tr>
        <td align=center>Edit Blog Posts</td>
      </tr>
      <tr>
        <td>
          <table>
          <form method="post" action="">
          <input type="hidden" name="id" value="<? echo "$row[cat_id]"?>">
            <tr>       
              <td>Title</td>
              <td>
                <input type="text" name="title"
            size="20" value="<? echo "$row[cat_nom]"?>">
              </td>
            </tr>
            <tr>
              <td>Author</td>
              <td>
                <input type="text" name="address" size="40"
              value="<? echo "$row[cat_created]"?>">
              </td>
            </tr>
            <tr>
              <td>Content</td>
              <td>
                <textarea name='content' rows=10 cols=50 id='content'value="<? echo "$row[cat_updated]"?>"></textarea>


            </td>
            </tr>
            <tr>
              <td>Catagory 1</td>
              <td>
                <input type="text" name="address" size="40"
              value="<? echo "$row[tag1]"?>">
              </td>
            </tr>
            <tr>
              <td>Catagory 2</td>
              <td>
                <input type="text" name="address" size="40"
              value="<? echo "$row[tag2]"?>">
              </td>
            </tr>
            <tr>
              <td align="right">
                <input type="submit"
              name="submit value" value="Edit">
              </td>
            </tr>
          </form>
          </table>
        </td>
      </tr>
    </table>
    </body>
    </html>