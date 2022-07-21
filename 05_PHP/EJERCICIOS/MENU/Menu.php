<?php

class Menu
{
    public $menu;

    public function setMenu($menu){ $this->menu = $menu; }

    public function pintaMenu(){
        echo "<ul>";
            foreach($this->menu as $etiqueta=>$valor)
            {
                echo "<li><a href='$valor'>$etiqueta</a></li>";
            }
        echo "</ul>";
    }
}

        class MenuPlus extends Menu
        {
            public $estilo;

            public function setCSS($estilo){ $this->estilo = $estilo; }

            public function pintaMenu(){
                echo "<div class='$this->estilo'>";
                     parent::pintaMenu();  // aqui pinto codigo ul de clase padre
                echo "</div>";
                
            }

        } 

        
// esto crea los items del menu, via array asociativo
$array_menu = 
[
    "Inicio"    =>  "index.php",
    "Tienda"    =>  "shop.php",
    "La Empresa" => "quienes_somos.php",
    "Contacto"  =>  "contacto.php",
    "Ayuda" => "Ayuda.php"
];

// $menu = new Menu;
// $menu->setMenu($array_menu);
// $menu->PintaMenu();
// fin crear menu items menu


// pinta menu hijo
 $menu2 = new MenuPlus;
 $menu2->setMenu($array_menu);
 $menu2->setCSS("menu");
 $menu2->PintaMenu();
 // fin pinta menu hijo