<?php
/**
 * @package titlenamechangePlugin
 */
namespace Inc;

final class init
{public static function add_item($admin_bar)
    {
    global $pagenow;
    $admin_bar->add_menu(array('id' => 'cache-purge', 'title' => 'Cache Purge', 'href' => '#'));
}
    public function get_services()
    {
        return [
            Base\Enqueue::class,
            Func\Button::class,
            Func\Func::class,

        ];
    }
    public static function register_services()
    {
        foreach (self::get_services() as $class) {
            $service = self::instantiate($class);
            if (method_exists($service, 'register')) {
                $service->register();
            }
        }
    }
    private static function instantiate($class)
    {
        return new $class();
    }

}
