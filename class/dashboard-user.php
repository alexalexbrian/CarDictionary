<?php
require_once("connection.php");
class Dashboard extends Connection{


    public function __construct(){

        parent::__construct();

    }

    public function Get_all_posts($empieza_por, $estado, $palabra)
    {
         try {

          //  print "HOLAL";

            $sql = "SELECT COUNT(*) from terminos_es";

            // añadimos where por filtros si esto o lo otro <> es distinto
            if (($empieza_por <> '') || ($estado <> '') || ($palabra <> ''))
            {
              $sql = $sql." WHERE ";
              if ($empieza_por <> '')
              {
                $sql = $sql." nom_es LIKE ? ";
              }
              if ($estado <> '')
              {
                if ($empieza_por <> '')
                {
                  $sql = $sql." AND ";
                }
                $sql = $sql." est_es = ?";
              }
              if ($palabra <> '')
              {
                if ( ($empieza_por <> '') || ($estado <> ''))
                {
                  $sql = $sql." AND ";
                }
                $sql = $sql." nom_es LIKE ? ";
              }
            }

            $query = $this->dbh->prepare($sql);
			$contador=0;
            if (($empieza_por <> '') || ($estado <> '') || ($palabra <> ''))
            {
              if ($empieza_por <> '')
              {
                $query->bindValue(1, $empieza_por.'%');
				$contador ++;
              }
              if ($estado <> '')
              {
                if ($empieza_por <> '')
                {
                  $query->bindValue(2, $estado);
				  $contador ++;
                }
                else {
                  $query->bindValue(1, $estado);
				  $contador ++;
                }
              }
              if ($palabra <> '')
              {
                $query->bindValue($contador + 1, $palabra.'%');
              }
            }

            $query->execute();

            //si es true
            if($query->rowCount() == 1)
            {

                 return $query->fetchColumn();

            }

        }catch(PDOException $e){

            print "Error!: " . $e->getMessage();

        }
    }




    // public function crea_links()
    public function Create_Link($empieza_por, $estado, $palabra)
    {

        //html para retornar
        $html = "";

        //página actual
        $actual_pag = $_SESSION["actual"];

        //limite por página
        $limit = $_SESSION["limit"];

        //total de enlaces que existen
        $totalPag = ceil($this->Get_all_posts($empieza_por, $estado,$palabra)/$limit);

        //links delante y detrás que queremos mostrar
        // $pagVisibles = 3;
        // $pagVisibles = 2;
        $pagVisibles = 5;

        if(($actual_pag + $pagVisibles) <= $totalPag)
        {
            $ultima_pag = $actual_pag + $pagVisibles;
        }else{
            $ultima_pag = $totalPag;
        }

        $html .= '<ul class="pagination pagination-sm">';

        //si es la primera página los links están desactivados
        if($actual_pag === 0)
        {
            // $html.="<li class='disabled'><a href='?offset=0&limit=".$limit."'>Primera</a></li>";
            $html.="<li class='disabled'><a href='index.php?id=3&offset=0&limit=".$limit."'><i class='icon-skip-back'></i></a></li>";
            // $html.="<li class='disabled'><a href='?offset=0&limit=".$limit."'>Anterior</a></li>";
            $html.="<li class='disabled'><a href='index.php?id=3&offset=0&limit=".$limit."'><i class='icon-arrow-left'></i></a></li>";
        }
        //si es la segunda es lo mismo pero los links activados
        else if($actual_pag === 1)
        {
            // $html.="<li><a href='?offset=0&limit=".$limit."'>Primera</a></li>";
            $html.="<li><a href='index.php?id=3&offset=0&limit=".$limit."'><i class='icon-skip-back'></i></a></li>";
            // $html.="<li><a href='?offset=0&limit=".$limit."'>Anterior</a></li>";
            $html.="<li><a href='index.php?id=3&offset=0&limit=".$limit."'><i class='icon-arrow-left'></i></a></li>";
        }
        //si no es la primera ni la segunda
        else
        {
            // $html.="<li><a href='?offset=0&limit=".$limit."'>Primera</a></li>";
            $html.="<li><a href='index.php?id=3&offset=0&limit=".$limit."'><i class='icon-skip-back'></i></a></li>";
            // $html.="<li><a href='?offset=".(($actual_pag-1)*$limit)."&limit=".$limit."'>Anterior</a></li>";
            $html.="<li><a href='index.php?id=3&offset=".(($actual_pag-1)*$limit)."&limit=".$limit."'><i class='icon-arrow-left'></i></a></li>";
        }
        //creamos los números de los enlaces
        for($i=$actual_pag+1; $i<=$ultima_pag; $i++)
        {
            //si es la página 1 por ejemplo, el link 1 está activado
            if($i == ($actual_pag+1))
            {
                $html.="<li class='active'><a href='#'>".$i."</a></li>";
            }
            else //LO ELIMINO PARA EVITAR QUE APAREZCAN MUCHOS NÚMEROS PORQUE TENEMOS MUCHAS PÁGINAS
            {
                $html.='<li><a href="index.php?id=3&offset='.(($i-1)*$limit).'&limit='.$limit.'">'.$i.'</a></li>';
            }

        }
        //botón siguiente si la página actual es menor de total páginas
        if($actual_pag < ($totalPag-1))
        {
            // $html.="<li><a href='?offset=".(($actual_pag+1)*$limit)."&limit=".$limit."'>Siguiente</a></li>";
            $html.="<li><a href='index.php?id=3&offset=".(($actual_pag+1)*$limit)."&limit=".$limit."'><i class='icon-arrow-right'></i></a></li>";
        }
        else
        {
            // $html.="<li class='disabled'><a href='#'>Siguiente</a></li>";
            $html.="<li class='disabled'><a href='#'><i class='icon-arrow-right'></i></a></li>";
        }

        //botón última si la página actual es menor de total páginas
        if($actual_pag < ($totalPag-1))
        {
            // $html.="<li><a href='?offset=".(($totalPag-1)*$limit)."&limit=".$limit."'>Última</a></li>";
            $html.="<li><a href='index.php?id=3&offset=".(($totalPag-1)*$limit)."&limit=".$limit."'><i class='icon-skip-forward'></i></a></li>";
        }
        else
        {
            // $html.="<li class='disabled'><a href='#'>Última</a></li>";
            $html.="<li class='disabled'><a href='#'><i class='icon-skip-forward'></i></a></li>";
        }

        $html .= '</ul>';
        return $html;
    }



    //Palabras en español
    public function Get_posts_es($offset = 0, $limit = 5, $empieza_por, $estado, $palabra)
    {
        // echo ("empieza por : ".$empieza_por);
        // echo ("estado : ".$estado);
        if($offset == 0)
        {
            $_SESSION["actual"] = 0;
        }
        else
        {
            $_SESSION["actual"] = $offset/$limit;
        }
        $_SESSION["limit"] = $limit;
        try
        {

            // $sql = "SELECT * FROM terminos_es";
            // Añado orden alfábeitco por nombre del término
            // Nuevo rownum

           $sql = "SELECT * FROM (SELECT @rownum:=@rownum+1 AS rownum, terminos_es.* FROM (SELECT @rownum:=0) r, terminos_es";
           // echo "<br>";
            // /Nuevo rownum

            // añadimos where por filtros si esto o lo otro <> es distinto
            if (($empieza_por <> '') || ($estado <> '') || ($palabra <> ''))
            {
              $sql = $sql." WHERE ";
              if ($empieza_por <> '')
              {
                $sql = $sql." nom_es LIKE ? ";
              }
              if ($estado <> '')
              {
                if ($empieza_por <> '')
                {
                  $sql = $sql." AND ";
                }
                $sql = $sql." est_es = ?";
              }

              if ($palabra <> '')
              {
                if ( ($empieza_por <> '') || ($estado <> ''))
                {
                  $sql = $sql." AND ";
                }
                $sql = $sql." nom_es LIKE ? ";
              }

            }
            // $sql = $sql." order by nom_en "; // ordenado alfabeticamt
            $sql = $sql." order by nom_es ) T "; // ordenado alfabeticamt
            $sql = $sql." LIMIT ?,? ";
            $query = $this->dbh->prepare($sql);

            $contador = 0;

            if (($empieza_por <> '') || ($estado <> '') || ($palabra <> ''))
            {
              if ($empieza_por <> '')
              {
                $query->bindValue(1, $empieza_por.'%');
                $contador = $contador + 1;
              }
              if ($estado <> '')
              {
                if ($empieza_por <> '')
                {
                  $query->bindValue(2, $estado);
                  $contador = $contador + 1;
                }
                else {
                  $query->bindValue(1, $estado);
                  $contador = $contador + 1;
                }
              }

              if ($palabra <> '')
              {
                $query->bindValue($contador + 1, $palabra.'%');
                $contador = $contador + 1;
              }

            }

            $query->bindValue($contador + 1, (int) $offset, PDO::PARAM_INT);
            $query->bindValue($contador + 2, (int) $limit, PDO::PARAM_INT);
            $query->execute();

            //si existe el usuario
            if($query->rowCount() > 0)
            {
                 return $query->fetchAll();
            }
        }
        catch(PDOException $e)
        {
            print "Error!: " . $e->getMessage();
        }
    }


    
//Palabras en ingles.
public function Get_posts_en($offset = 0, $limit = 5, $empieza_por, $estado, $palabra)
    {
        // echo ("empieza por : ".$empieza_por);
        // echo ("estado : ".$estado);
        if($offset == 0)
        {
            $_SESSION["actual"] = 0;
        }
        else
        {
            $_SESSION["actual"] = $offset/$limit;
        }
        $_SESSION["limit"] = $limit;
        try
        {

            // $sql = "SELECT * FROM terminos_en";
            // Añado orden alfábeitco por nombre del término

            // Nuevo rownum
            $sql = "SELECT * FROM (SELECT @rownum:=@rownum+1 AS rownum, terminos_en.* FROM (SELECT @rownum:=0) r, terminos_en ";
            // /Nuevo rownum

            // añadimos where por filtros si esto o lo otro <> es distinto
            if (($empieza_por <> '') || ($estado <> '') || ($palabra <> ''))
            {
              $sql = $sql." WHERE ";
              if ($empieza_por <> '')
              {
                $sql = $sql." nom_en LIKE ? ";
              }
              if ($estado <> '')
              {
                if ($empieza_por <> '')
                {
                  $sql = $sql." AND ";
                }
                $sql = $sql." est_en = ?";
              }

              if ($palabra <> '')
              {
                if ( ($empieza_por <> '') || ($estado <> ''))
                {
                  $sql = $sql." AND ";
                }
                $sql = $sql." nom_en LIKE ? ";
              }

            }
            // $sql = $sql." order by nom_en "; // ordenado alfabeticamt
            $sql = $sql." order by nom_en ) T "; // ordenado alfabeticamt
            $sql = $sql." LIMIT ?,? ";
            $query = $this->dbh->prepare($sql);

            $contador = 0;

            if (($empieza_por <> '') || ($estado <> '') || ($palabra <> ''))
            {
              if ($empieza_por <> '')
              {
                $query->bindValue(1, $empieza_por.'%');
                $contador = $contador + 1;
              }
              if ($estado <> '')
              {
                if ($empieza_por <> '')
                {
                  $query->bindValue(2, $estado);
                  $contador = $contador + 1;
                }
                else {
                  $query->bindValue(1, $estado);
                  $contador = $contador + 1;
                }
              }

              if ($palabra <> '')
              {
                $query->bindValue($contador + 1, $palabra.'%');
                $contador = $contador + 1;
              }

            }

            $query->bindValue($contador + 1, (int) $offset, PDO::PARAM_INT);
            $query->bindValue($contador + 2, (int) $limit, PDO::PARAM_INT);
            $query->execute();

            //si existe el usuario
            if($query->rowCount() > 0)
            {
                 return $query->fetchAll();
            }
        }
        catch(PDOException $e)
        {
            print "Error!: " . $e->getMessage();
        }
    }


    // 1. Obtener el término
  public function getTerminosEn($id)
  {
    try {

      //  $sql = "SELECT * from terminos_es WHERE id="+$id;
      $sql = "SELECT * FROM terminos_es WHERE id=?";
      $query = $this->dbh->prepare($sql);
      $query->bindValue(1, (int) $id, PDO::PARAM_INT);
      $query->execute();

       //si es true
       if($query->rowCount() > 0)
       {
        //  return $query->fetchAll();
        // NOTE: fechAll devuelve todas las filas de la bd
         return $query->fetchAll();
       }
    }
    catch(PDOException $e)
    {
        print "Error!: " . $e->getMessage();
    }
  }

  // 2. Obtener las relaciones en ingles
  public function getTerminosRelacionadosEn($id)
  {
    try {

      //  $sql = "SELECT * from terminos_es WHERE id="+$id;
      $sql = "SELECT * FROM terminos_es WHERE id IN ( ".
      " SELECT id_relacionado FROM relaciones_es_es WHERE id=? AND vid_es=0)";
      $query = $this->dbh->prepare($sql);
      $query->bindValue(1, (int) $id, PDO::PARAM_INT);
      $query->execute();

       //si es true
       if($query->rowCount() > 0)
       {
        //  return $query->fetchAll();
         return $query->fetchAll();
       }
    }
    catch(PDOException $e)
    {
        print "Error!: " . $e->getMessage();
    }
  }

  // 3. Obtener las relaciones vid
  public function getTerminosRelacionadosVidEn($id)
  {
    try {

      //  $sql = "SELECT * from terminos_es WHERE id="+$id;
      $sql = "SELECT * FROM terminos_es WHERE id IN ( ".
      " SELECT id_relacionado FROM relaciones_en_en WHERE id=? AND vid_en=1)";
      $query = $this->dbh->prepare($sql);
      $query->bindValue(1, (int) $id, PDO::PARAM_INT);
      $query->execute();

       //si es true
       if($query->rowCount() > 0)
       {
        //  return $query->fetchAll();
         return $query->fetchAll();
       }
    }
    catch(PDOException $e)
    {
        print "Error!: " . $e->getMessage();
    }
  }

  // 4. Función para crear término
  public function insertTerminoEn($nom_en, $des_en, $not_en, $est_en, $vid_en)
  {
    {
      try {

        $sql = "INSERT into terminos_es (nom_es, des_es, not_es, est_es, vid_es)  VALUES (?, ?, ?, ?, ?)";
        $query = $this->dbh->prepare($sql);
        $query->bindValue(1,  $nom_en);
        $query->bindValue(2,  $des_en);
        $query->bindValue(3,  $not_en);
        $query->bindValue(4,  $est_en);
        // $query->bindValue(5, (int) $vid_en, PDO::PARAM_INT);
        $query->bindValue(5, $vid_en);
        $query->execute();
        return $this->dbh->lastInsertId();

      }
      catch(PDOException $e)
      {
          print "Error!: " . $e->getMessage();
      }
    }
  }

  // 4. Función para crear término vid con al final de descripcion vid nombre_padre
  public function insertTerminoEnVid($nom_en, $des_en, $not_en, $est_en, $vid_en, $id_principal, $nom_principal)
  {
    {
      try {

        $sql = "INSERT into terminos_es (nom_es, des_es, not_es, est_es, vid_es)  VALUES (?, ?, ?, ?, ?)";
        $query = $this->dbh->prepare($sql);
        $query->bindValue(1,  $nom_en);
        // $des = $des_en." .<em>vid</em> <strong><a href='edit_es.php?id=$id_principal'>$nom_principal</a></strong>";
        $des = $des_en." <em>vid</em>. <strong><a href='edit_es.php?id=$id_principal'>$nom_principal</a></strong>";
        // $query->bindValue(2,  $des_en);
        $query->bindValue(2,  $des);
        $query->bindValue(3,  $not_en);
        $query->bindValue(4,  $est_en);
        // $query->bindValue(5, (int) $vid_en, PDO::PARAM_INT);
        $query->bindValue(5, $vid_en);
        $query->execute();
        return $this->dbh->lastInsertId();

      }
      catch(PDOException $e)
      {
          print "Error!: " . $e->getMessage();
      }
    }
  }

  // 4. Función para crear término
  public function insertTerminoEnEs($nom_en, $des_en, $not_en, $est_en, $vid_en)
  {
    {
      try {

        $sql = "INSERT into terminos_en (nom_en, des_en, not_en, est_en, vid_en)  VALUES (?, ?, ?, ?, ?)";
        $query = $this->dbh->prepare($sql);
        $query->bindValue(1,  $nom_en);
        $query->bindValue(2,  $des_en);
        $query->bindValue(3,  $not_en);
        $query->bindValue(4,  $est_en);
        // $query->bindValue(5, (int) $vid_en, PDO::PARAM_INT);
        $query->bindValue(5, $vid_en);
        $query->execute();
        return $this->dbh->lastInsertId();

      }
      catch(PDOException $e)
      {
          print "Error!: " . $e->getMessage();
      }
    }
  }

  // 4. Función para crear término relacionado en
  public function insertRelacionEn($id_termino, $id_relacionado)
  {
    {
      try {

        // $sql = "INSERT into relaciones_en_en (id, id_relacionado)  VALUES (?, ?)";
        $sql = "INSERT into relaciones_es_es (id, id_relacionado, vid_es)  VALUES (?, ?, 0)";
        $query = $this->dbh->prepare($sql);
        $query->bindValue(1, (int) $id_termino, PDO::PARAM_INT);
        $query->bindValue(2, (int) $id_relacionado, PDO::PARAM_INT);
        $query->execute();
        return $this->dbh->lastInsertId();

      }
      catch(PDOException $e)
      {
          print "Error!: " . $e->getMessage();
      }
    }
  }

  // 4-b. Función para crear término vid
  public function insertRelacionVid($id_termino, $id_relacionado)
  {
    {
      try {

        $sql = "INSERT into relaciones_en_en (id, id_relacionado, vid_en)  VALUES (?, ?, 1)";
        $query = $this->dbh->prepare($sql);
        $query->bindValue(1, (int) $id_termino, PDO::PARAM_INT);
        $query->bindValue(2, (int) $id_relacionado, PDO::PARAM_INT);
        $query->execute();
        return $this->dbh->lastInsertId();

      }
      catch(PDOException $e)
      {
          print "Error!: " . $e->getMessage();
      }
    }
  }

  // 5. Borrado de relaciones en
  public function deleteRelacionEn($id_termino, $id_relacionado)
  {
    {
      try {

        // $sql = "DELETE from relaciones_en_en WHERE id=? AND id_relacionado=?";
        $sql = "DELETE from relaciones_es_es WHERE id=? AND id_relacionado=? AND vid_es=0";
        $query = $this->dbh->prepare($sql);
        $query->bindValue(1, (int) $id_termino, PDO::PARAM_INT);
        $query->bindValue(2, (int) $id_relacionado, PDO::PARAM_INT);
        $query->execute();
        return true;

      }
      catch(PDOException $e)
      {
          print "Error!: " . $e->getMessage();
      }
    }
  }

  // 5b. Borrado de relaciones vid
  public function deleteRelacionEnVid($id_termino, $id_relacionado)
  {
    {
      try {

        // $sql = "DELETE from relaciones_en_en WHERE id=? AND id_relacionado=?";
        $sql = "DELETE from relaciones_en_en WHERE id=? AND id_relacionado=? AND vid_en=1";
        $query = $this->dbh->prepare($sql);
        $query->bindValue(1, (int) $id_termino, PDO::PARAM_INT);
        $query->bindValue(2, (int) $id_relacionado, PDO::PARAM_INT);
        $query->execute();
        return true;

      }
      catch(PDOException $e)
      {
          print "Error!: " . $e->getMessage();
      }
    }
  }

  // 6. Buscar termino En
  public function searchTerminoEn($nom_en)
  {
    try {

      $sql = "select * from terminos_es where nom_es = ?";
      $query = $this->dbh->prepare($sql);
      $query->bindValue(1, $nom_en);
      $query->execute();
      //si es true
      if($query->rowCount() > 0)
      {
        return $query->fetchAll();
      }

    }
    catch(PDOException $e)
    {
        print "Error!: " . $e->getMessage();
    }
  }

  // 6a. Buscar termino En-Es
  public function searchTerminoEnEs($nom_en)
  {
    try {

      $sql = "select * from terminos_en where nom_en = ?";
      $query = $this->dbh->prepare($sql);
      $query->bindValue(1, $nom_en);
      $query->execute();
      //si es true
      if($query->rowCount() > 0)
      {
        return $query->fetchAll();
      }

    }
    catch(PDOException $e)
    {
        print "Error!: " . $e->getMessage();
    }
  }

  // 6-b. Buscar termino Vid == NO NOS VALE
  public function searchTerminoVid($nom_en, $vid_en)
  {
    try {

      $sql = "select * from terminos_es where nom_en = ? and vid_en = 1";
      $query = $this->dbh->prepare($sql);
      $query->bindValue(1, $nom_en);
      $query->execute();
      //si es true
      if($query->rowCount() > 0)
      {
        return $query->fetchAll();
      }

    }
    catch(PDOException $e)
    {
        print "Error!: " . $e->getMessage();
    }
  }

  // 7. Actualizar (descripcion) termino en si existe
  public function updateTerminoEn($nom_en, $des_en)
  {
    try {

      $sql = "update terminos_es set des_es = ? where nom_es = ?";
      $query = $this->dbh->prepare($sql);
      $query->bindValue(1, $des_en);
      $query->bindValue(2, $nom_en);
      $query->execute();

    }
    catch(PDOException $e)
    {
        print "Error!: " . $e->getMessage();
    }
  }

  // 7b. Actualizar (descripcion) termino en si existe en-es
  public function updateTerminoEnEs($nom_en, $des_en)
  {
    try {

      $sql = "update terminos_en set des_en = ? where nom_en = ?";
      $query = $this->dbh->prepare($sql);
      $query->bindValue(1, $des_en);
      $query->bindValue(2, $nom_en);
      $query->execute();

    }
    catch(PDOException $e)
    {
        print "Error!: " . $e->getMessage();
    }
  }

  // 7c. Actualizar (descripcion) termino en si existe y esta relaciona y dentro de la modal
  public function updateTerminoEnConId($id_relacionado, $nom_en, $des_en)
  {
    try {

      $sql = "update terminos_es set nom_es = ?, des_es = ? where id =".$id_relacionado;
      $query = $this->dbh->prepare($sql);
      $query->bindValue(1, $nom_en);
      $query->bindValue(2, $des_en);
      $query->execute();

    }
    catch(PDOException $e)
    {
        print "Error!: " . $e->getMessage();
    }
  }

  // 7d. Actualizar (descripcion) termino en si existe y esta relaciona y dentro de la modal EN-ES
  public function updateTerminoEnConIdEnEs($id_relacionado, $nom_es, $des_es)
  {
    try {

      $sql = "update terminos_es set nom_es = ?, des_es = ? where id =".$id_relacionado;
      $query = $this->dbh->prepare($sql);
      $query->bindValue(1, $nom_es);
      $query->bindValue(2, $des_es);
      $query->execute();

    }
    catch(PDOException $e)
    {
        print "Error!: " . $e->getMessage();
    }
  }

  // 7-b. Actualizar (descripcion) termino en si existe == NO NOS VALE
  public function updateTerminoVid($nom_en, $des_en, $vid_en)
  {
    try {

      $sql = "update terminos_es set des_en = ? where nom_en = ? and vid_en = 1";
      $query = $this->dbh->prepare($sql);
      $query->bindValue(1, $des_en);
      $query->bindValue(2, $nom_en);
      $query->execute();

    }
    catch(PDOException $e)
    {
        print "Error!: " . $e->getMessage();
    }
  }

  // 8. Busqueda para comprobar si exite relacion de terminos en
  public function searchRelacionTerminosEn($id, $id_relacionado)
  {
    try {

      // $sql = "select * from relaciones_en_en where id = ? and id_relacionado = ?";
      $sql = "select * from relaciones_es_es where id = ? and id_relacionado = ? and vid_es = 0";
      $query = $this->dbh->prepare($sql);
      $query->bindValue(1, (int) $id, PDO::PARAM_INT);
      $query->bindValue(2, (int) $id_relacionado, PDO::PARAM_INT);
      $query->execute();
      //si es true
      if($query->rowCount() > 0)
      {
        return $query->fetchAll();
      }

    }
    catch(PDOException $e)
    {
        print "Error!: " . $e->getMessage();
    }
  }

  // 8-a. Busqueda para comprobar si exite relacion de terminos en-es
  public function searchRelacionTerminosEnEs($id_es, $id_en)
  {
    try {

      // $sql = "select * from relaciones_en_en where id = ? and id_relacionado = ?";
      $sql = "select * from relaciones_en_es where id_en = ? and id_es = ?";
      $query = $this->dbh->prepare($sql);
      $query->bindValue(1, (int) $id_en, PDO::PARAM_INT);
      $query->bindValue(2, (int) $id_es, PDO::PARAM_INT);
      $query->execute();
      //si es true
      if($query->rowCount() > 0)
      {
        return $query->fetchAll();
      }

    }
    catch(PDOException $e)
    {
        print "Error!: " . $e->getMessage();
    }
  }

  // 8-b. Busqueda para comprobar si exite relacion de terminos vid
  public function searchRelacionTerminosVid($id, $id_relacionado)
  {
    try {

      //  $sql = "SELECT * from terminos_es WHERE id="+$id;
      /* $sql = "SELECT * FROM terminos_es WHERE id IN ( ".
      " SELECT id_relacionado FROM relaciones_en_en WHERE id=?) AND vid_en=1 AND id=?"; */
      $sql = "select * from relaciones_en_en where id = ? and id_relacionado = ? and vid_en = 1";
      $query = $this->dbh->prepare($sql);
      $query->bindValue(1, (int) $id, PDO::PARAM_INT);
      $query->bindValue(2, (int) $id_relacionado, PDO::PARAM_INT);
      $query->execute();

       //si es true
       if($query->rowCount() > 0)
       {
        //  return $query->fetchAll();
         return $query->fetchAll();
       }

    }
    catch(PDOException $e)
    {
        print "Error!: " . $e->getMessage();
    }
  }

  // 7. Actualizar todo el termino completo (nombre, descripcion, nota y estado) ok 22-08-2024
  public function updateTerminoEnCompleto($id, $nom_en, $des_en, $not_en, $est_en){
    try {
      $sql = "update terminos_es set nom_es = ?, des_es = ?, not_es = ?, est_es = ? where id = ?";
      $query = $this->dbh->prepare($sql);
      /*
      echo $sql_debug = str_replace(['?', '?', '?', '?', '?'], 
        [$this->dbh->quote($nom_en), $this->dbh->quote($des_en), $this->dbh->quote($not_en), $this->dbh->quote($est_en), (int)$id], 
        $sql
      );
      echo "<br><br>Consulta SQL: " . $sql_debug . "<br>";
      */
      $query->bindValue(1, $nom_en);
      $query->bindValue(2, $des_en);
      $query->bindValue(3, $not_en);
      $query->bindValue(4, $est_en);
      $query->bindValue(5, (int) $id, PDO::PARAM_INT);
      $query->execute();

    }
    catch(PDOException $e)
    {
        print "Error!: " . $e->getMessage();
    }
  }

  // 8. Buscar termino En con busqueda rápida carácter por carácter
  public function searchTerminoEnRapida($nom_en)
  {
    try {

      $sql = "select * from terminos_es where nom_es LIKE ?";
      $query = $this->dbh->prepare($sql);
      // $query->bindValue(1, $nom_en.'%');
      $query->bindValue(1, '%'.$nom_en.'%');
      $query->execute();
      //si es true
      if($query->rowCount() > 0)
      {
        return $query->fetchAll();
      }

    }
    catch(PDOException $e)
    {
        print "Error!: " . $e->getMessage();
    }
  }

  // 9. Borrado de término principal
  public function deleteTerminoEn($id_termino)
  {
    {
      try {

        $sql = "DELETE from terminos_es WHERE id=?";
        $query = $this->dbh->prepare($sql);
        $query->bindValue(1, (int) $id_termino, PDO::PARAM_INT);
        $query->execute();
        return true;

      }
      catch(PDOException $e)
      {
          print "Error!: " . $e->getMessage();
      }
    }
  }

  // 10. Obtener número de registros o letras que hay en bd
  public function getRegistrosEn()
  {
    try {

      // $sql = "SELECT * FROM terminos_es";
      $sql = "SELECT Upper(substr(nom_es,1,1)) letra, count(*) total from terminos_es group by Upper(substr(nom_es,1,1)) order by 1";
      $query = $this->dbh->prepare($sql);
      $query->execute();

       //si es true
       if($query->rowCount() > 0)
       {
        //  return $query->fetchAll();
        // NOTE: fechAll devuelve todas las filas de la bd
         return $query->fetchAll();
       }
    }
    catch(PDOException $e)
    {
        print "Error!: " . $e->getMessage();
    }
  }

  // 11. Función rownum para siguiente dentro de un termino
  public function get_rownnum($empieza_por, $estado, $palabra, $rownum)
  {
      try
      {

          // $sql = "SELECT * FROM terminos_es";
          // Añado orden alfábeitco por nombre del término

          // Nuevo rownum
          $sql = "SELECT * FROM (SELECT @rownum:=@rownum+1 AS rownum, terminos_es.* FROM (SELECT @rownum:=0) r, terminos_es ";
          // /Nuevo rownum

          // añadimos where por filtros si esto o lo otro <> es distinto
          if (($empieza_por <> '') || ($estado <> '') || ($palabra <> ''))
          {
            $sql = $sql." WHERE ";
            if ($empieza_por <> '')
            {
              $sql = $sql." nom_es LIKE ? ";
            }
            if ($estado <> '')
            {
              if ($empieza_por <> '')
              {
                $sql = $sql." AND ";
              }
              $sql = $sql." est_es = ?";
            }

            if ($palabra <> '')
            {
              if ( ($empieza_por <> '') || ($estado <> ''))
              {
                $sql = $sql." AND ";
              }
              $sql = $sql." nom_es LIKE ? ";
            }

          }
          // $sql = $sql." order by nom_en "; // ordenado alfabeticamt
          $sql = $sql." order by nom_es ) T WHERE rownum = ? "; // ordenado alfabeticamt
          // $sql = $sql." LIMIT ?,? ";
          $query = $this->dbh->prepare($sql);

          $contador = 0;

          if (($empieza_por <> '') || ($estado <> '') || ($palabra <> ''))
          {
            if ($empieza_por <> '')
            {
              $query->bindValue(1, $empieza_por.'%');
              $contador = $contador + 1;
            }
            if ($estado <> '')
            {
              if ($empieza_por <> '')
              {
                $query->bindValue(2, $estado);
                $contador = $contador + 1;
              }
              else {
                $query->bindValue(1, $estado);
                $contador = $contador + 1;
              }
            }

            if ($palabra <> '')
            {
              $query->bindValue($contador + 1, $palabra.'%');
              $contador = $contador + 1;
            }

          }

          $query->bindValue($contador + 1, (int) $rownum, PDO::PARAM_INT);
          $query->execute();

          //si existe el usuario
          if($query->rowCount() > 0)
          {
               return $query->fetchAll();
          }
      }
      catch(PDOException $e)
      {
          print "Error!: " . $e->getMessage();
      }
  }

  // 12. validamos usuario y pass en bd
  public function validateUsername($username, $password)
  {
    try {

      $sql = "select * from usuarios WHERE username = ? AND password = ? ";
      $query = $this->dbh->prepare($sql);
      $query->bindValue(1, $username);
      $query->bindValue(2, $password);
      $query->execute();
      //si es true
      if($query->rowCount() > 0)
      {
        return true;
      }
      else {
        return false;
      }

    }
    catch(PDOException $e)
    {
        print "Error!: " . $e->getMessage();
    }
  }

  // 13. Obtener las relaciones en ingles-español
  public function getTerminosRelacionadosEnEs($id)
  {
    try {

      $sql = "SELECT * FROM terminos_en WHERE id IN ( ".
      " SELECT id_en FROM relaciones_en_es WHERE id_es=?)";
      $query = $this->dbh->prepare($sql);
      $query->bindValue(1, (int) $id, PDO::PARAM_INT);
      $query->execute();

       //si es true
       if($query->rowCount() > 0)
       {
        //  return $query->fetchAll();
         return $query->fetchAll();
       }
    }
    catch(PDOException $e)
    {
        print "Error!: " . $e->getMessage();
    }
  }

  // 4a. Función para crear término en es desde en (o relacionado)
  public function insertTerminoEs($nom_es, $des_es, $not_es, $est_es, $vid_es)
  {
    {
      try {

        $sql = "INSERT into terminos_es (nom_es, des_es, not_es, est_es, vid_es)  VALUES (?, ?, ?, ?, ?)";
        $query = $this->dbh->prepare($sql);
        $query->bindValue(1,  $nom_es);
        $query->bindValue(2,  $des_es);
        $query->bindValue(3,  $not_es);
        $query->bindValue(4,  $est_es);
        // $query->bindValue(5, (int) $vid_en, PDO::PARAM_INT);
        $query->bindValue(5, $vid_es);
        $query->execute();
        return $this->dbh->lastInsertId();

      }
      catch(PDOException $e)
      {
          print "Error!: " . $e->getMessage();
      }
    }
  }

  // 4b. Función para crear término relacionado ingles-español
  public function insertRelacionEnEs($id_termino_es, $id_termino_en)
  {
    {
      try {

        $sql = "INSERT into relaciones_en_es (id_en, id_es)  VALUES (?, ?)";
        $query = $this->dbh->prepare($sql);
        $query->bindValue(1, (int) $id_termino_en, PDO::PARAM_INT);
        $query->bindValue(2, (int) $id_termino_es, PDO::PARAM_INT);
        $query->execute();
        return $this->dbh->lastInsertId();

      }
      catch(PDOException $e)
      {
          print "Error!: " . $e->getMessage();
      }
    }
  }

  // 4c. Borrado de relaciones en-es: borrado de relacion entre en y español
  public function deleteRelacionEnEs($id_termino_es, $id_termino_en)
  {
    try {

      // $sql = "DELETE from relaciones_en_en WHERE id=? AND id_relacionado=?";
      $sql = "DELETE from relaciones_en_es WHERE id_en=? AND id_es=?";
      $query = $this->dbh->prepare($sql);
      $query->bindValue(1, (int) $id_termino_en, PDO::PARAM_INT);
      $query->bindValue(2, (int) $id_termino_es, PDO::PARAM_INT);
      $query->execute();
      return true;

    }
    catch(PDOException $e)
    {
        print "Error!: " . $e->getMessage();
    }
  }


}