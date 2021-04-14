<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}

/**
 * @description: 主题配置帮助类
 */
class Config {
    
    public static function RWindConfig()
    {
        $RWindConfig = Helper::options()->RWindConfig;
        $options = Helper::options();
    }

    /**
     * 返回主题设置中某项开关的开启/关闭状态
     *
     * @param string $item 项目名
     * @param string $config 设置名
     *
     * @return bool
     */
    public static function isEnabled($item, $config)
    {
        $config = Helper::options()->$config;
        $status = !empty($config) && in_array($item, $config) ? true : false;
        return $status;
    }

    /**
     * 将部分主题配置中的string数据转换为array或键值对
     *
     * @param string $item 设置名
     * @param bool $mode 转换类型
     *
     * @return array|bool
     */
    public static function convertConfigData($item, $mode)
    {
        $options = Helper::options();
        //根据$item获取对应的设置中的string数据
        $data = $options->$item ? $options->$item : false;
        $content = null;
        if (!$data) {
            //不存在对应的设置名或内容为空
            $content = false;
        } else {
            if ($mode) {
                //转换为数组
                $content = json_decode("[" . $data . "]", true);
            } else {
                //转换为键值对
                $content = json_decode(trim("{" . $data . "}"), true);
            }
        }
        return $content;
    }

    /**
     * 根据配置的JSON数据输出导航栏
     * @param int $mode
     * @param string $slugs
     * 
     * @return void
     */
    public static function showNav($mode, $slugs)
    {
        $data = self::convertConfigData('navConfig', true);
        if (!$data) {
            return;
        }

        $text = null;
        $href = null;
        $class = null;
        $target = null;
        $sub = null;

        if ($data) {
            $html = '<ul class="navbar-nav ml-auto">';
            if ($mode) {
                foreach ($data as $v) {
                    $text = array_key_exists('text', $v) ? $v['text'] : "";
                    $href = array_key_exists('href', $v) ? 'href="' . $v['href'] . '"' : "";
                    $class = array_key_exists('class', $v) ? 'class="' . $v['class'] . '"' : "";
                    if (array_key_exists('sub', $v)) {
                        $html .= "<li $class ><a class=\"dropdown-toggle nav-link\" $href $target data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"dropdown-toggle nav-link\">$text</a>";
                        $html .= '<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-295" role="menu">';
                        foreach ($v['sub'] as $_k => $_v) {
                            $text = array_key_exists('text', $_v) ? $_v['text'] : "";
                            $href = array_key_exists('href', $_v) ? 'href="' . $_v['href'] . '"' : "";
                            $class = array_key_exists('class', $_v) ? 'class="' . $_v['class'] . '"' : "";
                            $html .= "<li $class ><a class=\"dropdown-item\" $href $target>$text</a></li>";
                        }
                        $html .= '</ul>'; 
                        $html .= '</li>';                        
                    }else{
                        $html .= "<li $class ><a class=\"nav-link\" $href $target>$text</a></li>";
                    }
                   
                }
            }            
            $html .= '</ul>';
            echo $html;
        }
        //转换失败
        echo false;
    }

    /**
     * @description: 返回插件状态
     * @param string $name
     * @return bool
     */    
    public static function pluginStat($name) 
    {
        $pluginAll = Typecho_Plugin::export();
        return array_key_exists($name, $pluginAll['activated']);
    }
}
