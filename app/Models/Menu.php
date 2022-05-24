<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Menu extends Model
{
    use HasFactory;
    protected $table = 'menu';
    protected $primaryKey = 'ID_MENU';
    public $timestamps = false;

    public function getHijos($data, $line){
        $children = [];
        foreach($data as $line1){
            if($line['ID_MENU'] == $line1['MENU_PADRE']){
                $children = array_merge($children, [array_merge($line1, ['submenu' => $this->getHijos($data, $line1)])]);
            }
        }
        return $children;
    }

    public function getOpciones()
    {
        return $this->where('MENU_DISPONIBLE', 1)
            ->orderby('MENU_PADRE')
            ->orderby('MENU_ORDEN')
            ->orderby('MENU_NOMBRE')
            ->get()
            ->toArray();
    }

    public static function menu(){
        $menu = new Menu();
        $data = $menu->getOpciones();
        $menuAll = [];
        foreach($data as $line)
        {
            $item = [array_merge($line, ['submenu' => $menu->getHijos($data, $line) ])];
            $menuAll = array_merge($menuAll, $item);
        }
        return $menu->menuAll = $menuAll;
    }
}
