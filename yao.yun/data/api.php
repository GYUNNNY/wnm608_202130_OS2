<?php

@include_once "../lib/php/functions.php";


function getRequires($props) {
   foreach($props as $prop) {
      if(!isset($_GET[$prop])) return false;
   }
   return true;
}


function makeStatement($type) {
   switch($type) {
      case "products_all":
         if(!getRequires(['o','d','l']))
            return ["error"=>"Missing Properties"];
         return MYSQLIQuery("
            SELECT *
            FROM `products`
            ORDER BY `{$_GET['o']}` {$_GET['d']}
            LIMIT {$_GET['l']}
         ");
         break;
         
      case "product_by_id":
         if(!getRequires(['id']))
            return ["error"=>"Missing Properties"];
         return MYSQLIQuery("
            SELECT *
            FROM `products`
            WHERE `id` = '{$_GET['id']}'
         ");
         break;
         
      case "products_by_category":
         if(!getRequires(['category']))
            return ["error"=>"Missing Properties"];
         return MYSQLIQuery("
            SELECT *
            FROM `products`
            WHERE
               (`name` LIKE '%{$_GET['s']}%' OR
               `description` LIKE '%{$_GET['s']}%') AND
               `category` = '{$_GET['category']}'
            ORDER BY `{$_GET['o']}` {$_GET['d']}
            LIMIT {$_GET['l']}
         ");
         break;



      case "search":
         if(!getRequires(['s','o','d','l']))
            return ["error"=>"Missing Properties"];
         return MYSQLIQuery("
            SELECT *
            FROM `products`
            WHERE
               `name` LIKE '%{$_GET['s']}%' OR
               `category` LIKE '%{$_GET['s']}%' OR
               `description` LIKE '%{$_GET['s']}%'
            ORDER BY `{$_GET['o']}` {$_GET['d']}
            LIMIT {$_GET['l']}
         ");
         break;

      default: return ["error"=>"No Matched Type"];
   }
}