<?php
require_once("connection.php");
session_start();

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
}